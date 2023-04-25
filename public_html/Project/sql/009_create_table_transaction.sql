CREATE TABLE IF NOT EXISTS `Transactions` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `account_src` VARCHAR(12) NOT NULL,
    `account_dest` VARCHAR(12) NOT NULL,
    `balance_change` DECIMAL(10,2) NOT NULL,
    `transaction_type` ENUM('deposit', 'withdraw', 'transfer', 'ext-transfer') NOT NULL,
    `memo` VARCHAR(255),
    `expected_total` DECIMAL(10,2) NOT NULL,
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);
