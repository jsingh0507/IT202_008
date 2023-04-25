<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>

<?php

$db = getDB();

$user_id = get_user_id();
$stmt = $db->prepare("SELECT id, account_number, balance FROM Accounts WHERE user_id = ? AND account_number != '000000000000'");
$stmt->execute([$user_id]);
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $account_id = $_POST['account_id'];
    $amount = $_POST['amount'];
    $memo = $_POST['memo'];

    // Check if amount is positive
    if ($amount <= 0) {
        flash("Amount must be greater than 0", "warning");
    } else {
        // Get account balance
        $stmt = $db->prepare("SELECT balance FROM Accounts WHERE id = ?");
        $stmt->execute([$account_id]);
        $account = $stmt->fetch(PDO::FETCH_ASSOC);
        $old_balance = $account['balance'];
        $new_balance = $old_balance + $amount;

        // Insert transaction records
        $stmt = $db->prepare("INSERT INTO Transactions (account_src, account_dest, balance_change, expected_total, memo) VALUES (:src, :dest, :amount, :new_balance, :memo), (:dest, :src, :amount_neg, :old_balance, :memo)");
        $stmt->bindValue(":src", '000000000000');
        $stmt->bindValue(":dest", $account_id);
        $stmt->bindValue(":amount", $amount);
        $stmt->bindValue(":new_balance", $new_balance);
        $stmt->bindValue(":memo", $memo);
        $stmt->bindValue(":amount_neg", -$amount);
        $stmt->bindValue(":old_balance", $old_balance);
        $result = $stmt->execute();

        if ($result) {
            // Update account balance
            $stmt = $db->prepare("UPDATE Accounts SET balance = balance + :amount WHERE id = :id");
            $stmt->bindValue(":amount", $amount);
            $stmt->bindValue(":id", $account_id);
            $result = $stmt->execute();

            if ($result) {
                flash("Deposit successfully processed", "success");
            } else {
                flash("Failed to update account balance", "danger");
            }
        } else {
            flash("Failed to insert transaction records", "danger");
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Deposit</title>
</head>
<body>
    <h2>Deposit</h2>
    <?php include(__DIR__ . "/../../partials/flash.php"); ?>
    <form method="POST">
        <div>
            <label for="account_id">Account:</label>
            <select name="account_id" id="account_id">
                <?php foreach ($accounts as $account): ?>
                    <option value="<?php echo $account['id']; ?>"><?php echo $account['account_number'] . ' ($' . number_format($account['balance'], 2) . ')'; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="amount">Amount:</label>
            <input type="number" name="amount" id="amount" step="0.01" min="0.01" required>
        </div>
        <div>
            <label for="memo">Memo:</label>
            <textarea name="memo" id="memo"></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
