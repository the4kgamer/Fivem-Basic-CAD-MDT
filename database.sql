-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for testdb
CREATE DATABASE IF NOT EXISTS `testdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `testdb`;

-- Dumping structure for table testdb.active_users
CREATE TABLE IF NOT EXISTS `active_users` (
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table testdb.active_users: ~0 rows (approximately)
/*!40000 ALTER TABLE `active_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `active_users` ENABLE KEYS */;

-- Dumping structure for table testdb.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `eval` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table testdb.messages: ~9 rows (approximately)
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` (`name`, `message`, `time`, `eval`) VALUES
	('the4kgamerdddd', 'safdf', '11:22 pm 13/08/18', 'i4'),
	('the4kgamerdddd', 'safdf', '11:22 pm 13/08/18', 'i4'),
	('the4kgamerdddd', 'sdfasdf', '11:22 pm 13/08/18', 'i4'),
	('the4kgamerdddd', 'hi', '11:22 pm 13/08/18', 'i4'),
	('the4kgamerdddd', 'sdfasdf', '11:22 pm 13/08/18', 'i4'),
	('the4kgamerdddd', 'safdasdf', '11:22 pm 13/08/18', 'i4'),
	('the4kgamerdddd', 'sadffsd', '11:22 pm 13/08/18', 'i4'),
	('the4kgamerdddd', 'safdasdf', '11:23 pm 13/08/18', 'i4'),
	('the4kgamerdddd', 'safdasdf', '11:23 pm 13/08/18', 'i4');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- Dumping structure for table testdb.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `valid` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `cpasscode` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `passcode` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `east` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `west` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `online` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table testdb.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `valid`, `password`, `cpasscode`, `passcode`, `role`, `admin`, `date`, `east`, `west`, `online`) VALUES
	(25, 'admin', 'admin@gmail.com', 'yes', 'test', '', 'FiveAdminEnlightened', 'dsadf', 'ADMINISTRATOR', '02/28/02', NULL, NULL, 'yes');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table testdb.valid
CREATE TABLE IF NOT EXISTS `valid` (
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table testdb.valid: ~0 rows (approximately)
/*!40000 ALTER TABLE `valid` DISABLE KEYS */;
/*!40000 ALTER TABLE `valid` ENABLE KEYS */;

-- Dumping structure for table testdb.vehicles
CREATE TABLE IF NOT EXISTS `vehicles` (
  `vehiclename` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `vehicleplate` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table testdb.vehicles: ~2 rows (approximately)
/*!40000 ALTER TABLE `vehicles` DISABLE KEYS */;
INSERT INTO `vehicles` (`vehiclename`, `vehicleplate`, `name`, `code`) VALUES
	('the4kgamer', 'the4kgamer', 'the4kgamer', '60368'),
	('yeet', 'yeet', 'the4er', '26830');
/*!40000 ALTER TABLE `vehicles` ENABLE KEYS */;

-- Dumping structure for table testdb.weapons
CREATE TABLE IF NOT EXISTS `weapons` (
  `weapon_name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `weapon_status` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table testdb.weapons: ~0 rows (approximately)
/*!40000 ALTER TABLE `weapons` DISABLE KEYS */;
/*!40000 ALTER TABLE `weapons` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
