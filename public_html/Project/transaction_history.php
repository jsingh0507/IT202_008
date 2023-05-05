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

// Handle filter form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start_date = $_POST["start_date"] ?? null;
    $end_date = $_POST["end_date"] ?? null;
    $type = isset($_POST["type"]) ? $_POST["type"] : null;
    $amount = isset($_POST["amount"]) ? $_POST["amount"] : null;
    
    // Query database for filtered transaction history data
    $query = "SELECT Transactions.*, src.account_number as src_account_number, dest.account_number as dest_account_number 
              FROM Transactions 
              LEFT JOIN Accounts src ON Transactions.account_src = src.id 
              LEFT JOIN Accounts dest ON Transactions.account_dest = dest.id 
              WHERE (Transactions.account_src = ? OR Transactions.account_dest = ?) AND Transactions.balance_change IS NOT NULL";
    $params = [$id, $id];
    
    if ($start_date) {
        $query .= " AND Transactions.created >= ?";
        $params[] = $start_date;
    }
    
    if ($end_date) {
        $query .= " AND Transactions.created <= ?";
        $params[] = $end_date;
    }
    
    if ($type) {
        $query .= " AND Transactions.transaction_type = ?";
        $params[] = $type;
    }
    
    if ($amount) {
        $query .= " AND Transactions.amount = ?";
        $params[] = $amount;
    }
    
    $query .= " ORDER BY Transactions.created DESC LIMIT 10";
    
    $stmt = $db->prepare($query);
    $stmt->execute($params);
    $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Query database for unfiltered transaction history data
    $stmt = $db->prepare(
        "SELECT Transactions.*, src.account_number as src_account_number, dest.account_number as dest_account_number 
         FROM Transactions 
         LEFT JOIN Accounts src ON Transactions.account_src = src.id 
         LEFT JOIN Accounts dest ON Transactions.account_dest = dest.id 
         WHERE (Transactions.account_src = ? OR Transactions.account_dest = ?) AND Transactions.balance_change IS NOT NULL 
         ORDER BY Transactions.created DESC LIMIT 10"
    );
    $stmt->execute([$id, $id]);
    $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Account Transactions</title>
</head>
<body>
	<?php require_once __DIR__ . "/../../partials/nav.php"; ?>
	<?php is_logged_in(true); ?>
    <div>
	<h1>Account Transactions</h1>
	
	<h2>Account Information</h2>
	<p>Account Number: <?php echo $account["account_number"]; ?></p>
	<p>Account Type: <?php echo $account["account_type"]; ?></p>
	<p>Balance: <?php echo $account["balance"]; ?></p>
	<p>Created: <?php echo $account["created"]; ?></p>
	
	<h2>Transaction History</h2>
	<form method="POST">
		<label for="start_date">Start Date:</label>
		<input type="date" id="start_date" name="start_date">
		
		<label for="end_date">End Date:</label>
		<input type="date" id="end_date" name="end_date">
		
		<label for="type">Transaction Type:</label>
		<select id="type" name="type">
			<option value="">All</option>
			<option value="deposit">Deposit</option>
			<option value="withdrawal">Withdrawal</option>
			<option value="transfer">Transfer</option>
		</select>
		
		<input type="submit" value="Filter">
	</form>
	
	<table>
		<thead>
			<tr>
				<th>Transaction ID</th>
				<th>Source Account</th>
				<th>Destination Account</th>
				<th>Type</th>
				<th>Amount</th>
				<th>Balance Change</th>
				<th>Created</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($transactions as $transaction): ?>
				<tr>
					<td><?php echo $transaction["id"]; ?></td>
					<td><?php echo $transaction["src_account_number"]; ?></td>
					<td><?php echo $transaction["dest_account_number"]; ?></td>
					<td><?php echo $transaction["transaction_type"]; ?></td>
					<td><?php echo $transaction["expected_total"]; ?></td>
					<td><?php echo $transaction["balance_change"]; ?></td>
					<td><?php echo $transaction["created"]; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
</body>
</html>
