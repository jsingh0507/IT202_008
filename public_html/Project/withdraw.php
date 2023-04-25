<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>

<?php
$user_id = get_user_id();

$db = getDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $account_id = $_POST['account_id'];
    $amount = $_POST['amount'];
    $memo = $_POST['memo'];

    $stmt = $db->prepare("SELECT account_number, balance FROM Accounts WHERE id = ? AND user_id = ?");
    $stmt->execute([$account_id, $user_id]);
    $account = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$account) {
        flash("Could not find account");
    } else {
        $balance = $account['balance'];
        if ($amount > $balance) {
            flash("You cannot withdraw more than the account balance");
        } else {
            $new_balance = $balance - $amount;

            $db->beginTransaction();

            //$stmt = $db->prepare("INSERT INTO Transactions (account_src, account_dest, balance_change, expected_total, memo) VALUES (?, ?, ?, ?, ?), (?, ?, ?, ?, ?)");
            //$stmt->execute([$account_id, -1, -$amount, $new_balance, $memo, -1, $account_id, $amount, $amount, $memo]);
            $stmt = $db->prepare("INSERT INTO Transactions (account_src, account_dest, balance_change, expected_total, memo, transaction_type) VALUES (?, ?, ?, ?, ?, 'Withdraw')");
            $stmt->execute([$account_id, -1, -$amount, $new_balance, $memo]);



            $stmt = $db->prepare("UPDATE Accounts SET balance = ? WHERE id = ?");
            $stmt->execute([$new_balance, $account_id]);

            $db->commit();

            flash("Withdrawal successful", "success");
        }
    }
}

$stmt = $db->prepare("SELECT id, account_number, balance FROM Accounts WHERE user_id = ? AND id != -1");
$stmt->execute([$user_id]);
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Withdraw</title>
</head>
<body>
    <h2>Withdraw</h2>
    <?php include(__DIR__ . "/../../partials/flash.php"); ?>
    <form method="POST">
        <label for="account_id">Account:</label>
        <select name="account_id" required>
            <?php foreach ($accounts as $account): ?>
                <option value="<?php echo $account['id']; ?>"><?php echo $account['account_number']; ?> (<?php echo $account['balance']; ?>)</option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="amount">Amount:</label>
        <input type="number" name="amount" step="0.01" min="0" required>
        <br>
        <label for="memo">Memo:</label>
        <input type="text" name="memo">
        <br>
        <button type="submit">Withdraw</button>
    </form>
</body>
</html>
