-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.28 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for glm_db
CREATE DATABASE IF NOT EXISTS `glm_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `glm_db`;

-- Dumping structure for table glm_db.glm_db_admins
CREATE TABLE IF NOT EXISTS `glm_db_admins` (
  `glm_db_admins_id` int NOT NULL AUTO_INCREMENT,
  `glm_db_admins_username` varchar(50) DEFAULT NULL,
  `glm_db_admins_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`glm_db_admins_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table glm_db.glm_db_admins: ~1 rows (approximately)
/*!40000 ALTER TABLE `glm_db_admins` DISABLE KEYS */;
INSERT INTO `glm_db_admins` (`glm_db_admins_id`, `glm_db_admins_username`, `glm_db_admins_password`) VALUES
	(1, 'admin', 'pass');
/*!40000 ALTER TABLE `glm_db_admins` ENABLE KEYS */;

-- Dumping structure for table glm_db.glm_db_cashier
CREATE TABLE IF NOT EXISTS `glm_db_cashier` (
  `glm_db_cashier_id` int NOT NULL AUTO_INCREMENT,
  `glm_db_cashier_username` varchar(50) DEFAULT NULL,
  `glm_db_cashier_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`glm_db_cashier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table glm_db.glm_db_admins: ~1 rows (approximately)
/*!40000 ALTER TABLE `glm_db_admins` DISABLE KEYS */;
INSERT INTO `glm_db_cashier` (`glm_db_cashier_id`,`glm_db_cashier_username`,`glm_db_cashier_password`) VALUES
	(1, 'cashier', 'pass1');
/*!40000 ALTER TABLE `glm_db_cashier` ENABLE KEYS */;

-- Dumping structure for table glm_db.glm_db_appointments
CREATE TABLE IF NOT EXISTS `glm_db_appointments` (
  `glm_db_appointments_id` int NOT NULL AUTO_INCREMENT,
  `glm_db_appointments_user` int NOT NULL,
  `glm_db_appointments_servicecategory` int NOT NULL,
  `glm_db_appointments_date` date DEFAULT NULL,
  `glm_db_appointments_time` varchar(50) DEFAULT NULL,
  `glm_db_appointments_servicename` varchar(50) NOT NULL,
  `glm_db_appointments_serviceprovider` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`glm_db_appointments_id`),
  UNIQUE KEY `gbl_db_appointments_id_UNIQUE` (`glm_db_appointments_id`),
  KEY `fk_gbl_db_appointments_glm_db_users_idx` (`glm_db_appointments_user`),
  KEY `fk_glm_db_appointments_glm_db_services1_idx` (`glm_db_appointments_servicecategory`),
  CONSTRAINT `fk_gbl_db_appointments_glm_db_users` FOREIGN KEY (`glm_db_appointments_user`) REFERENCES `glm_db_users` (`glm_db_users_id`),
  CONSTRAINT `fk_glm_db_appointments_glm_db_services1` FOREIGN KEY (`glm_db_appointments_servicecategory`) REFERENCES `glm_db_services` (`glm_db_services_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table glm_db.glm_db_appointments: ~15 rows (approximately)
/*!40000 ALTER TABLE `glm_db_appointments` DISABLE KEYS */;
INSERT INTO `glm_db_appointments` (`glm_db_appointments_id`, `glm_db_appointments_user`, `glm_db_appointments_servicecategory`, `glm_db_appointments_date`, `glm_db_appointments_time`, `glm_db_appointments_servicename`, `glm_db_appointments_serviceprovider`) VALUES
	(1, 3, 1, '2022-03-31', '08:00:00', 'Hair Dressing', NULL),
	(2, 3, 3, '2022-03-31', '10:00:00 am', 'Nail Polish', NULL),
	(3, 1, 1, '2022-03-31', '02:00:00 pm', 'Hair Dye', NULL),
	(4, 1, 1, '2022-03-31', '03:00:00 pm', 'Hair Cutting', NULL),
	(5, 4, 1, '2022-03-31', '12:00:00 pm', 'Shaving', NULL),
	(6, 1, 3, '2022-04-08', '10:15:00 am', 'Manicure', NULL),
	(7, 4, 1, '2022-04-09', '12:30:00 pm', 'Hair Cutting', NULL),
	(8, 1, 3, '2022-04-11', '12:50:00 pm', 'Nail Polish', NULL),
	(9, 4, 1, '2022-04-08', '01:50:00 pm', 'Shaving and face scrubbing', NULL),
	(10, 2, 2, '2022-04-28', '05:00:00 pm', '2', NULL),
	(11, 2, 1, '2022-04-29', '06:00:00 pm', '4', NULL),
	(12, 2, 3, '2022-04-28', '06:00:00 pm', '2', NULL),
	(13, 2, 1, '2022-04-27', '08:00 - 09:00HRS', '2', NULL),
	(14, 18, 3, '2022-04-29', '10:00 - 11:00HRS', '4', NULL),
	(15, 19, 1, '2022-05-04', '09:00 - 10:00HRS', '3', 'Olive Yew');
/*!40000 ALTER TABLE `glm_db_appointments` ENABLE KEYS */;

-- Dumping structure for table glm_db.glm_db_contacts
CREATE TABLE IF NOT EXISTS `glm_db_contacts` (
  `glm_db_contacts_id` int NOT NULL AUTO_INCREMENT,
  `glm_db_contacts_customername` varchar(200) DEFAULT NULL,
  `glm_db_contacts_message` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`glm_db_contacts_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table glm_db.glm_db_contacts: ~1 rows (approximately)
/*!40000 ALTER TABLE `glm_db_contacts` DISABLE KEYS */;
INSERT INTO `glm_db_contacts` (`glm_db_contacts_id`, `glm_db_contacts_customername`, `glm_db_contacts_message`) VALUES
	(1, 'Keith rhova', 'Your services are awesome!');
/*!40000 ALTER TABLE `glm_db_contacts` ENABLE KEYS */;

-- Dumping structure for table glm_db.glm_db_employees
CREATE TABLE IF NOT EXISTS `glm_db_employees` (
  `glm_db_employees_id` int NOT NULL AUTO_INCREMENT,
  `glm_db_employees_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `glm_db_employees_password` varchar(50) DEFAULT NULL,
  `glm_db_employees_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`glm_db_employees_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table glm_db.glm_db_employees: ~7 rows (approximately)
/*!40000 ALTER TABLE `glm_db_employees` DISABLE KEYS */;
INSERT INTO `glm_db_employees` (`glm_db_employees_id`, `glm_db_employees_email`, `glm_db_employees_password`, `glm_db_employees_name`) VALUES
	(1, 'sinatra@gmail.com', 'baa87257b0a32b970cdd816effc4b178', 'Frank Sinatra'),
	(4, 'pat@gmail.com', 'baa87257b0a32b970cdd816effc4b178', 'Patty Furniture'),
	(5, 'oliv@gmail.com', 'baa87257b0a32b970cdd816effc4b178', 'Olive Yew'),
	(6, 'aidbg@gmail.com', 'baa87257b0a32b970cdd816effc4b178', 'Aida Bugg'),
	(7, 'teri@gmail.com', 'baa87257b0a32b970cdd816effc4b178', 'Teri Dactyl'),
	(8, 'peg@gmail.com', 'baa87257b0a32b970cdd816effc4b178', 'Peg Legge'),
	(9, 'jdoe@gmail.com', 'baa87257b0a32b970cdd816effc4b178', 'John Doe');
/*!40000 ALTER TABLE `glm_db_employees` ENABLE KEYS */;

-- Dumping structure for table glm_db.glm_db_services
CREATE TABLE IF NOT EXISTS `glm_db_services` (
  `glm_db_services_id` int NOT NULL AUTO_INCREMENT,
  `glm_db_services_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`glm_db_services_id`),
  UNIQUE KEY `glm_db_services_id_UNIQUE` (`glm_db_services_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table glm_db.glm_db_services: ~3 rows (approximately)
/*!40000 ALTER TABLE `glm_db_services` DISABLE KEYS */;
INSERT INTO `glm_db_services` (`glm_db_services_id`, `glm_db_services_name`) VALUES
	(1, 'Hair Care'),
	(2, 'Skin Care'),
	(3, 'Nail and Foot Care');
/*!40000 ALTER TABLE `glm_db_services` ENABLE KEYS */;

-- Dumping structure for table glm_db.glm_db_users
CREATE TABLE IF NOT EXISTS `glm_db_users` (
  `glm_db_users_id` int NOT NULL AUTO_INCREMENT,
  `glm_db_users_name` varchar(45) DEFAULT NULL,
  `glm_db_users_email` varchar(45) DEFAULT NULL,
  `glm_db_users_password` varchar(45) DEFAULT NULL,
  `glm_db_users_username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`glm_db_users_id`),
  UNIQUE KEY `glm_db_user_id_UNIQUE` (`glm_db_users_id`),
  UNIQUE KEY `glm_db_users_email_UNIQUE` (`glm_db_users_email`),
  UNIQUE KEY `glm_db_users_name_UNIQUE` (`glm_db_users_name`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table glm_db.glm_db_users: ~9 rows (approximately)
/*!40000 ALTER TABLE `glm_db_users` DISABLE KEYS */;
INSERT INTO `glm_db_users` (`glm_db_users_id`, `glm_db_users_name`, `glm_db_users_email`, `glm_db_users_password`, `glm_db_users_username`) VALUES
	(2, 'Ninah Onyango', 'nishpesh@gmail.com', '202cb962ac59075b964b07152d234b70', NULL),
	(3, 'John Doe', 'jdoe@gmail.com', '202cb962ac59075b964b07152d234b70', NULL),
	(4, 'Dickens Shiundu', 'dickens@gbh.com', '202cb962ac59075b964b07152d234b70', NULL),
	(6, 'Lone Ranger', 'lranger@gmail.com', '202cb962ac59075b964b07152d234b70', NULL),
	(7, '11234', 'ty', '202cb962ac59075b964b07152d234b70', NULL),
	(9, 'kay kay', 'kay@gmail.com', '202cb962ac59075b964b07152d234b70', NULL),
	(10, 'Jay R', 'j@gmail.com', 'b894afd20e155e3661363f88b3a00671', NULL),
	(18, 'Bot Nuke', 'btnk@gmail.com', 'baa87257b0a32b970cdd816effc4b178', 'botnuke'),
	(19, 'Tina Bobson', 't@gmail.com', 'c3729871f89a3c688e52321251138e8c', 'tbobson');
/*!40000 ALTER TABLE `glm_db_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
