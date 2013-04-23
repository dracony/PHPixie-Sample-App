-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.27-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-04-23 12:43:17
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table pixies.fairies
CREATE TABLE IF NOT EXISTS `fairies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `interests` text,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

-- Dumping data for table pixies.fairies: ~4 rows (approximately)
/*!40000 ALTER TABLE `fairies` DISABLE KEYS */;
INSERT INTO `fairies` (`id`, `name`, `interests`) VALUES
	(1, 'Tinkerbell', 'Protects trees, helps little critters and really enjoys singing.'),
	(2, 'Trixie', 'Likes flying around all day and playing with other fairies. During summer she looks after flowers.');
/*!40000 ALTER TABLE `fairies` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
