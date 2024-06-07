SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

-- Table structure for table `resetpass`
--

CREATE TABLE `resetpass` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `token` VARCHAR(50) NOT NULL,
  `date` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
) 

-- --------------------------------------------------------

-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) 

-- --------------------------------------------------------

-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `fname` VARCHAR(100) NOT NULL,
  `username` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `points` BIGINT NOT NULL,
  `redeemed_points` BIGINT NOT NULL,
  `withdraw` BIGINT NOT NULL,
  `date` DATE NOT NULL,
  `last_login` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bank_name` VARCHAR(255) DEFAULT NULL,
  `account_number` VARCHAR(20) DEFAULT NULL,
  `account_name` VARCHAR(200) DEFAULT NULL,
  `coin` VARCHAR(50) NOT NULL,
  `network` VARCHAR(50) NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) 

-- --------------------------------------------------------

-- Setting AUTO_INCREMENT values for the tables
--

ALTER TABLE `resetpass`
  MODIFY `id` INT NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `tbadmin`
  MODIFY `id` BIGINT NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `users`
  MODIFY `id` BIGINT NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

COMMIT;
