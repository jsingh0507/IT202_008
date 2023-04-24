<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>

<?php

// Initialize variables
$account_number = '';
$account_name = '';
$deposit_amount = '';
$errors = array();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs
    $account_name = trim($_POST['account_name']);
    if (empty($account_name)) {
        array_push($errors, "Account name is required");
    }

    $deposit_amount = $_POST['deposit_amount'];
    if (empty($deposit_amount)) {
        array_push($errors, "Deposit amount is required");
    } else if (!is_numeric($deposit_amount)) {
        array_push($errors, "Deposit amount must be a number");
    } else if ($deposit_amount < 5) {
        array_push($errors, "Deposit amount must be at least $5");
    }

    if (count($errors) == 0) {
        // Generate unique account number
        while (true) {
            $account_number = strtoupper(substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 12));
            $db = getDB();
            $stmt = $db->prepare("SELECT id FROM Accounts WHERE account_number = ?");
            $stmt->execute([$account_number]);
            if ($stmt->rowCount() == 0) {
                break;
            }
        }
    
        $db = getDB();
        // Start transaction
        $db->beginTransaction();
    
        try {
            // Insert account record
            $user_id = $_SESSION['user']['id'];
            $account_type = 'checking';
            $stmt = $db->prepare("INSERT INTO Accounts (account_number, user_id, balance, account_type) VALUES (?, ?, ?, ?)");
            $stmt->execute([$account_number, $user_id, 0, $account_type]);
            $account_id = $db->lastInsertId();
            if ($stmt->rowCount() == 0) {
                throw new Exception("Error inserting account record");
            }
    
            // Insert transaction records
            $account_src = '000000000000'; // world account
            $account_dest = $account_number;
            $balance_change = $deposit_amount;
            $transaction_type = 'deposit';
            $memo = "Initial deposit for $account_name";
            $expected_total = $balance_change;
            $stmt = $db->prepare("INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$account_src, $account_dest, $balance_change, $transaction_type, $memo, $expected_total]);
            if ($stmt->rowCount() == 0) {
                throw new Exception("Error inserting transaction record");
            }
    
            // Update world account balance
            $stmt = $db->prepare("UPDATE Accounts SET balance = balance - ? WHERE account_number = ?");
            $stmt->execute([$balance_change, $account_src]);
            if ($stmt->rowCount() == 0) {
                throw new Exception("Error updating world account balance");
            }
            // Update checking account balance
            $stmt = $db->prepare("UPDATE Accounts SET balance = balance + ? WHERE account_number = ?");
            $stmt->execute([$balance_change, $account_dest]);
    
            // Update user account balance
            $stmt = $db->prepare("UPDATE Accounts SET balance = (SELECT SUM(CASE WHEN account_src = ? THEN -balance_change ELSE balance_change END) FROM Transactions WHERE account_src = ? OR account_dest = ?) WHERE account_number = ?");
            $stmt->execute([$account_dest, $account_dest, $account_dest, $account_dest]);

    
            // Commit transaction
            $db->commit();
    
            // Redirect to Accounts page
            header("Location: accounts.php");
            exit();
        } catch (Exception $e) {
            // Rollback transaction
            $db->rollback();
    
            array_push($errors, $e->getMessage());
        }
    
    } else {
        array_push($errors, "Error inserting account record");
    }
            
}     
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Checking Account</title>
</head>
<body>
    <h2>Create Checking Account</h2>
    <?php if (count($errors) > 0): ?>
        <div style="color: red;">
            <?php foreach ($errors as $error): ?>
                <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="account_name">Account Name:</label><br>
        <input type="text" id="account_name" name="account_name" value="<?php echo $account_name; ?>"><br><br>
        <label for="deposit_amount">Deposit Amount:</label><br>
        <input type="number" id="deposit_amount" name="deposit_amount" min="5" value="<?php echo $deposit_amount; ?>"><br><br>
        <input type="submit" name="submit" value="Create Account">
    </form>
</body>
</html>