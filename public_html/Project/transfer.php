<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>

<?php

$db = getDB();

// Get user's accounts
$user_id = get_user_id();
$stmt = $db->prepare("SELECT id, account_number, account_type, balance FROM Accounts WHERE user_id = ?");
$stmt->execute([$user_id]);
$user_accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get world account ID
$stmt = $db->prepare("SELECT id FROM Accounts WHERE account_number = '000000000000'");
$stmt->execute();
$world_account_id = $stmt->fetchColumn();

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $src_account_id = $_POST['src_account_id'];
    $dest_account_id = $_POST['dest_account_id'];
    $amount = $_POST['amount'];
    $memo = $_POST['memo'];

    if ($src_account_id == $dest_account_id) {
        $errors[] = "Cannot transfer to the same account.";
    } else {
        $stmt = $db->prepare("SELECT account_number, balance FROM Accounts WHERE id = ?");
        $stmt->execute([$src_account_id]);
        $src_account = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt = $db->prepare("SELECT account_number, balance FROM Accounts WHERE id = ?");
        $stmt->execute([$dest_account_id]);
        $dest_account = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($amount <= 0) {
            $errors[] = "Amount must be greater than 0.";
        }

        if ($src_account['balance'] < $amount) {
            $errors[] = "Insufficient funds.";
        }

        if (count($errors) == 0) {
            $expected_src_total = $src_account['balance'] - $amount;
            $expected_dest_total = $dest_account['balance'] + $amount;

            $stmt = $db->prepare("INSERT INTO Transactions (account_src, account_dest, balance_change, expected_total, memo, transaction_type) VALUES (?, ?, ?, ?, ?, 'transfer'), (?, ?, ?, ?, ?, 'transfer')");
            $stmt->execute([$src_account_id, $dest_account_id, -$amount, $expected_src_total, $memo, $dest_account_id, $src_account_id, $amount, $expected_dest_total, $memo]);

            $stmt = $db->prepare("UPDATE Accounts SET balance = balance - ? WHERE id = ?");
            $stmt->execute([$amount, $src_account_id]);

            $stmt = $db->prepare("UPDATE Accounts SET balance = balance + ? WHERE id = ?");
            $stmt->execute([$amount, $dest_account_id]);

            $success = "Transfer successful!";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Transfer</title>
</head>
<body>
    <h2>Transfer</h2>
    <?php if ($success): ?>
        <div><?php echo $success; ?></div>
    <?php endif; ?>
    <?php if (count($errors) > 0): ?>
        <div>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <form method="POST">
        <div>
            <label>Source Account:</label>
            <select name="src_account_id">
                <?php foreach ($user_accounts as $account): ?>
                    <?php if ($account['id'] != $world_account_id): ?>
                        <option value="<?php echo $account['id']; ?>"><?php echo $account['account_type'] . " - " . $account['account_number'] . " - $" . number_format($account['balance'], 2); ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label>Destination Account:</label>
            <select name="dest_account_id">
                <?php foreach ($user_accounts as $account): ?>
                    <?php if ($account['id'] != $world_account_id): ?>
                        <option value="<?php echo $account['id']; ?>"><?php echo $account['account_type'] . " - " . $account['account_number']; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label>Amount:</label>
            <input type="number" name="amount" min="0.01" step="0.01" required>
        </div>
        <div>
            <label>Memo:</label>
            <input type="text" name="memo">
        </div>
        <div>
            <input type="submit" value="Transfer">
        </div>
    </form>
</body>
</html>
<?php require_once(__DIR__ . "/../../partials/flash.php"); ?>