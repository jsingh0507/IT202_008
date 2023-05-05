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
        $dest_last_name = $_POST['dest_last_name'];
        $dest_account_suffix = $_POST['dest_account_suffix'];
        $amount = $_POST['amount'];
        $memo = $_POST['memo'];

        // Check for negative values
        if ($amount <= 0) {
            $errors[] = "Amount must be greater than 0.";
        }

        // Check for insufficient funds
        $stmt = $db->prepare("SELECT balance FROM Accounts WHERE id = ?");
        $stmt->execute([$src_account_id]);
        $src_account_balance = $stmt->fetchColumn();
        if ($src_account_balance < $amount) {
            $errors[] = "Insufficient funds.";
        }

        // Lookup destination account
        $stmt = $db->prepare("SELECT Accounts.id, Users.last_name, Accounts.account_number, Accounts.balance FROM Users JOIN Accounts ON Users.id = Accounts.user_id WHERE Users.last_name = ? AND Accounts.account_number LIKE ?");
        $stmt->execute([$dest_last_name, '%'.$dest_account_suffix]);
        $dest_account = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$dest_account) {
            $errors[] = "Destination account not found.";
        }

        if (count($errors) == 0) {
            $dest_account_id = $dest_account['id'];
            $expected_src_total = $src_account_balance - $amount;
            $expected_dest_total = $dest_account['balance'] + $amount;

            $stmt = $db->prepare("INSERT INTO Transactions (account_src, account_dest, balance_change, expected_total, memo, transaction_type) VALUES (?, ?, ?, ?, ?, 'ext-transfer'), (?, ?, ?, ?, ?, 'ext-transfer')");
            $stmt->execute([$src_account_id, $dest_account_id, -$amount, $expected_src_total, $memo, $dest_account_id, $src_account_id, $amount, $expected_dest_total, $memo]);

            $stmt = $db->prepare("UPDATE Accounts SET balance = balance - ? WHERE id = ?");
            $stmt->execute([$amount, $src_account_id]);

            $stmt = $db->prepare("UPDATE Accounts SET balance = balance + ? WHERE id = ?");
            $stmt->execute([$amount, $dest_account_id]);

            $success = "Transfer successful!";
        }
    }

?>



<!DOCTYPE html>
<html>
<head>
	<title>Transfer Funds</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<h2>Transfer Funds</h2>
		<form method="post">
			<?php if (count($errors) > 0) : ?>
				<div class="alert alert-danger">
					<?php foreach ($errors as $error) : ?>
						<p><?php echo $error; ?></p>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<?php if ($success) : ?>
				<div class="alert alert-success">
					<p><?php echo $success; ?></p>
				</div>
			<?php endif; ?>

			<div class="form-group">
				<label for="src_account_id">Source Account:</label>
				<select class="form-control" id="src_account_id" name="src_account_id">
					<?php foreach ($user_accounts as $account) : ?>
						<option value="<?php echo $account['id']; ?>"><?php echo $account['account_number']; ?> - <?php echo $account['account_type']; ?> ($<?php echo number_format($account['balance'], 2); ?>)</option>
					<?php endforeach; ?>
				</select>
			</div>

			<div class="form-group">
				<label for="dest_last_name">Destination Account Holder Last Name:</label>
				<input type="text" class="form-control" id="dest_last_name" name="dest_last_name" required>
			</div>

			<div class="form-group">
				<label for="dest_account_suffix">Destination Account Suffix:</label>
				<input type="text" class="form-control" id="dest_account_suffix" name="dest_account_suffix" required>
			</div>

			<div class="form-group">
				<label for="amount">Amount:</label>
				<input type="number" class="form-control" id="amount" name="amount" min="0.01" step="0.01" required>
			</div>

			<div class="form-group">
				<label for="memo">Memo:</label>
				<input type="text" class="form-control" id="memo" name="memo">
			</div>

			<button type="submit" class="btn btn-primary">Transfer</button>
		</form>
	</div>
</body>
</html>
