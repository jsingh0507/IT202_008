<?php
require_once __DIR__ . "/../../partials/nav.php";
is_logged_in(true);
?>

<?php
$db = getDB();

// Get account ID from URL parameter
$id = $_GET["id"];

// Query database for account data
$stmt = $db->prepare(
    "SELECT account_number, account_type, balance, created FROM Accounts WHERE id = ?"
);
$stmt->execute([$id]);
$account = $stmt->fetch(PDO::FETCH_ASSOC);

// Query database for transaction history data
$stmt = $db->prepare(
    "SELECT Transactions.*, src.account_number as src_account_number, dest.account_number as dest_account_number FROM Transactions LEFT JOIN Accounts src ON Transactions.account_src = src.id LEFT JOIN Accounts dest ON Transactions.account_dest = dest.id WHERE Transactions.account_src = ? OR Transactions.account_dest = ? ORDER BY Transactions.created DESC LIMIT 10"
);
$stmt->execute([$id, $id]);
$transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Transaction History</title>
</head>
<body>
    <h2>Transaction History</h2>
    <h3>Account Details</h3>
    <table>
        <tbody>
            <tr>
                <td>Account Number:</td>
                <td><?php echo $account["account_number"]; ?></td>
            </tr>
            <tr>
                <td>Account Type:</td>
                <td><?php echo $account["account_type"]; ?></td>
            </tr>
            <tr>
                <td>Balance:</td>
                <td><?php echo $account["balance"]; ?></td>
            </tr>
            <tr>
                <td>Opened/Created Date:</td>
                <td><?php echo $account["created"]; ?></td>
            </tr>
        </tbody>
    </table>
    <h3>Transaction History</h3>
    <table>
        <thead>
            <tr>
                <th>Source/Destination Account</th>
                <th>Transaction Type</th>
                <th>Change in Balance</th>
                <th>Date/Time</th>
                <th>Expected Total</th>
                <th>Memo</th>
            </tr>
        </thead>
    <tbody>
<?php foreach ($transactions as $transaction): ?>
<?php // Determine whether current account is the source or destination of transaction
    // Determine whether current account is the source or destination of transaction

$is_source = $transaction["account_src"] == $id;
$other_account_number = $is_source
    ? $transaction["dest_account_number"]
    : $transaction["src_account_number"];
$transaction_type = $is_source ? "Debit" : "Credit";
$balance_change = $is_source ? -$transaction["amount"] : $transaction["amount"];
$expected_total = $account["balance"] + $balance_change;
?>
<tr>
<td><?php echo $other_account_number; ?></td>
<td><?php echo $transaction_type; ?></td>
<td><?php echo $balance_change; ?></td>
<td><?php echo $transaction["created"]; ?></td>
<td><?php echo $expected_total; ?></td>
<td><?php echo $transaction["memo"]; ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</body>
</html>
