<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>

<?php
$db = getDB();

// Query database for accounts data
$stmt = $db->prepare("SELECT id, account_number, account_type, balance, created FROM Accounts");
$stmt->execute();
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accounts List</title>
</head>
<body>
    <h2>Accounts List</h2>
    <table>
        <thead>
            <tr>
                <th>Account Number</th>
                <th>Account Type</th>
                <th>Balance</th>
                <th>Opened/Created Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($accounts as $account): ?>
                <tr>
                    <td><a href="transaction_history.php?id=<?php echo $account['id']; ?>"><?php echo $account['account_number']; ?></a></td>
                    <td><?php echo $account['account_type']; ?></td>
                    <td><?php echo $account['balance']; ?></td>
                    <td><?php echo $account['created']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
