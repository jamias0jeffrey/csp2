CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`user_fullname` varchar(255) NOT NULL,
	`user_address` varchar(255) NOT NULL,
	`user_email` varchar(255) NOT NULL UNIQUE,
	`user_status` INT(11) NOT NULL,
	`user_role` varchar(255) NOT NULL,
	`username` varchar(255) NOT NULL UNIQUE,
	`password` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `item_categories` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`category_name` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`reference_number` varchar(255) NOT NULL,
	`status_id` INT(11) NOT NULL,
	`user_id` INT(11) NOT NULL,
	`total` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `order_status` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`status` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `items` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`product_name` varchar(255) NOT NULL UNIQUE,
	`description` varchar(255) NOT NULL,
	`price` INT(11) NOT NULL,
	`category` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders_items` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`item_id` INT(11) NOT NULL,
	`order_id` INT(11) NOT NULL,
	`quantity` INT(11) NOT NULL,
	`method_id` INT(11) NOT NULL,
	`sub_total` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `payments` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`payment_method` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`status_id`) REFERENCES `order_status`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk1` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `items` ADD CONSTRAINT `items_fk0` FOREIGN KEY (`category`) REFERENCES `item_categories`(`id`);

ALTER TABLE `orders_items` ADD CONSTRAINT `orders_items_fk0` FOREIGN KEY (`item_id`) REFERENCES `items`(`id`);

ALTER TABLE `orders_items` ADD CONSTRAINT `orders_items_fk1` FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`);

ALTER TABLE `orders_items` ADD CONSTRAINT `orders_items_fk2` FOREIGN KEY (`method_id`) REFERENCES `payments`(`id`);

