-- Adminer 4.5.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `departments` (`id`, `name`, `price`) VALUES
(1,	'TV sets',	1000),
(2,	'Computers',	1500),
(3,	'Mobile phones',	500);

DROP TABLE IF EXISTS `payrolls`;
CREATE TABLE `payrolls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `worker_id` int(11) NOT NULL,
  `salary` decimal(10,0) unsigned NOT NULL,
  `month_salary` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `worker_id` (`worker_id`),
  CONSTRAINT `payrolls_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `workers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `payrolls` (`id`, `worker_id`, `salary`, `month_salary`) VALUES
(1,	1,	675,	'2019-10-09 21:35:21'),
(2,	1,	675,	'2019-10-09 21:36:30'),
(3,	3,	375,	'2019-10-09 21:37:08');

DROP TABLE IF EXISTS `workers`;
CREATE TABLE `workers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `dep_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `dep_id` (`dep_id`),
  CONSTRAINT `workers_ibfk_1` FOREIGN KEY (`dep_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `workers` (`id`, `name`, `dep_id`) VALUES
(1,	'Papa Cool',	2),
(2,	'Moama Noo',	1),
(3,	'Mankey Moo',	3);

-- 2019-10-09 21:47:22
