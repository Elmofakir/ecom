-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for ecom
CREATE DATABASE IF NOT EXISTS `ecom` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ecom`;

-- Dumping structure for table ecom.cours
CREATE TABLE IF NOT EXISTS `cours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `langue` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `id_partenaire` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_partenaire` (`id_partenaire`),
  CONSTRAINT `fk_part` FOREIGN KEY (`id_partenaire`) REFERENCES `partenaire` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ecom.cours: ~0 rows (approximately)
/*!40000 ALTER TABLE `cours` DISABLE KEYS */;
/*!40000 ALTER TABLE `cours` ENABLE KEYS */;

-- Dumping structure for table ecom.lecon
CREATE TABLE IF NOT EXISTS `lecon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `url` varchar(250) NOT NULL DEFAULT '',
  `id_cours` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_lecon_cours` (`id_cours`),
  CONSTRAINT `FK_lecon_cours` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ecom.lecon: ~0 rows (approximately)
/*!40000 ALTER TABLE `lecon` DISABLE KEYS */;
/*!40000 ALTER TABLE `lecon` ENABLE KEYS */;

-- Dumping structure for table ecom.liste
CREATE TABLE IF NOT EXISTS `liste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cours` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cours` (`id_cours`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `id_cours` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id`),
  CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ecom.liste: ~0 rows (approximately)
/*!40000 ALTER TABLE `liste` DISABLE KEYS */;
/*!40000 ALTER TABLE `liste` ENABLE KEYS */;

-- Dumping structure for table ecom.partenaire
CREATE TABLE IF NOT EXISTS `partenaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ecom.partenaire: ~0 rows (approximately)
/*!40000 ALTER TABLE `partenaire` DISABLE KEYS */;
INSERT INTO `partenaire` (`id`, `name`, `email`, `password`) VALUES
	(1, 'part test', 'part@email.com', 'root');
/*!40000 ALTER TABLE `partenaire` ENABLE KEYS */;

-- Dumping structure for table ecom.plainte
CREATE TABLE IF NOT EXISTS `plainte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ecom.plainte: ~0 rows (approximately)
/*!40000 ALTER TABLE `plainte` DISABLE KEYS */;
/*!40000 ALTER TABLE `plainte` ENABLE KEYS */;

-- Dumping structure for table ecom.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ecom.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `email`, `password`, `type`) VALUES
	(1, 'user test', 'user@email.com', 'root', 'basic');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
