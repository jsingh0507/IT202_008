SET @system_user_id = (SELECT id FROM Users WHERE email = 'system_user');

INSERT INTO Accounts (account_number, user_id, account_type)
SELECT '000000000000', @system_user_id, 'world'
FROM dual
WHERE NOT EXISTS (SELECT 1 FROM Accounts WHERE account_number = '000000000000');
