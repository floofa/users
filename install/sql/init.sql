SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login_name` varchar(127) COLLATE utf8_czech_ci DEFAULT NULL,
  `password` varchar(64) COLLATE utf8_czech_ci DEFAULT NULL,
  `name` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  `surname` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(127) COLLATE utf8_czech_ci NOT NULL,
  `company` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `cin` varchar(20) COLLATE utf8_czech_ci NOT NULL COMMENT 'customer identification number - IC',
  `tin` varchar(20) COLLATE utf8_czech_ci NOT NULL COMMENT 'tax identification number - DIC',
  `street` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `postcode` varchar(10) COLLATE utf8_czech_ci NOT NULL,
  `country` enum('CZ','SK') COLLATE utf8_czech_ci NOT NULL DEFAULT 'CZ',
  `delivery_name` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  `delivery_surname` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  `delivery_company` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `delivery_street` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `delivery_city` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `delivery_postcode` varchar(10) COLLATE utf8_czech_ci NOT NULL,
  `delivery_country` enum('CZ','SK') COLLATE utf8_czech_ci NOT NULL DEFAULT 'CZ',
  `phone` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `fax` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL,
  `newsletter` tinyint(1) unsigned NOT NULL,
  `change_password_hash` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `change_password_timestamp` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_name` (`login_name`),
  UNIQUE KEY `change_password_hash` (`change_password_hash`)
) ENGINE=InnoDB AUTO_INCREMENT=7355 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;