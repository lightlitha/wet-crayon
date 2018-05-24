-- MySQL dump 10.13  Distrib 5.7.19, for Win64 (x86_64)
--
-- Host: localhost    Database: wetcrayon
-- ------------------------------------------------------
-- Server version	5.7.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `wc_file`
--

DROP TABLE IF EXISTS `wc_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wc_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `extension` varchar(5) NOT NULL,
  `location` varchar(256) DEFAULT '',
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP,
  `fsize` int(11) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '1',
  `member` int(11) NOT NULL,
  `active` tinyint(2) DEFAULT '1',
  `thumbnail` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `flag` (`flag`),
  KEY `member` (`member`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wc_file`
--

LOCK TABLES `wc_file` WRITE;
/*!40000 ALTER TABLE `wc_file` DISABLE KEYS */;
INSERT INTO `wc_file` VALUES (2,'sample.ppt','ppt','','2018-05-18 15:19:39','2018-05-18 15:19:39',914432,1,1,1,1),(3,'samplepptx.pptx','pptx','','2018-05-18 15:19:52','2018-05-18 15:19:52',413895,1,1,1,1);
/*!40000 ALTER TABLE `wc_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wc_flag`
--

DROP TABLE IF EXISTS `wc_flag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wc_flag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `color` varchar(7) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `color` (`color`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wc_flag`
--

LOCK TABLES `wc_flag` WRITE;
/*!40000 ALTER TABLE `wc_flag` DISABLE KEYS */;
INSERT INTO `wc_flag` VALUES (1,'white','#FFFFFF');
/*!40000 ALTER TABLE `wc_flag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wc_member`
--

DROP TABLE IF EXISTS `wc_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wc_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `uimg` varchar(50) DEFAULT '00000.png',
  `active` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`uname`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wc_member`
--

LOCK TABLES `wc_member` WRITE;
/*!40000 ALTER TABLE `wc_member` DISABLE KEYS */;
INSERT INTO `wc_member` VALUES (1,'Light','Litha','Straycat','s215177770@mandela.ac.za','A10B11C12D13E14F15','00000.png',1);
/*!40000 ALTER TABLE `wc_member` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-18 17:07:52
