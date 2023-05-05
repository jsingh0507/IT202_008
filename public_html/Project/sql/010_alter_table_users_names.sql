ALTER TABLE `Users`
ADD COLUMN `first_name` VARCHAR(50) NOT NULL AFTER `password`,
ADD COLUMN `last_name` VARCHAR(50) NOT NULL AFTER `first_name`;
