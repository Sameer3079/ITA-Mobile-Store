CREATE TABLE IF NOT EXISTS `customers` (
	`id` int(5) AUTO_INCREMENT,
	`username` varchar(50) NOT NULL,
	`password` varchar(50) NOT NULL,
	`fname` varchar(50) NOT NULL,
	`lname` varchar(50) NOT NULL,
	`email` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE = InnoDB


INSERT INTO `customers` (`id`, `username`, `password`, `fname`, `lname`, `email`)
VALUES ( `1`, `sameer`, `admin`, `Sameer`, `Mohamed`, `smrbasil4@gmail.com`)
