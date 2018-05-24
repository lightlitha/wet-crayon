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
  `author` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `contentype` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `flag` (`flag`),
  KEY `member` (`member`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wc_file`
--

LOCK TABLES `wc_file` WRITE;
/*!40000 ALTER TABLE `wc_file` DISABLE KEYS */;
INSERT INTO `wc_file` VALUES (2,'Mansion.ppt','ppt','','2018-05-18 15:19:39','2018-05-20 00:13:44',914432,5,1,2,1,NULL,NULL,NULL),(3,'samplepptx.pptx','pptx','','2018-05-18 15:19:52','2018-05-18 15:19:52',413895,1,1,2,1,NULL,NULL,NULL),(4,'testfile.pptx','pptx','','2018-05-20 00:33:38','2018-05-20 00:33:38',28231,1,1,2,1,NULL,NULL,NULL),(5,'Python-pres.pptx','pptx','','2018-05-20 00:34:57','2018-05-20 00:34:57',976014,1,1,1,1,NULL,NULL,NULL),(6,'Listed.pptx','pptx','','2018-05-20 00:36:05','2018-05-24 08:46:03',1150152,2,1,1,1,NULL,NULL,NULL),(7,'Beta agonists Moodle.pptx','pptx','','2018-05-20 00:36:11','2018-05-20 00:36:11',1168575,1,1,1,1,NULL,NULL,NULL),(8,'Practical  -OTC scenarios supplementary information.pptx','pptx','','2018-05-20 00:36:40','2018-05-20 00:36:40',1461132,1,1,1,1,NULL,NULL,NULL),(9,'empty.pptx','pptx','','2018-05-20 00:37:05','2018-05-20 00:41:35',774789,2,1,1,1,NULL,NULL,NULL),(10,'sample.ppt','ppt','','2018-05-24 08:43:38','2018-05-24 08:43:38',914432,1,1,1,1,NULL,NULL,NULL);
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wc_flag`
--

LOCK TABLES `wc_flag` WRITE;
/*!40000 ALTER TABLE `wc_flag` DISABLE KEYS */;
INSERT INTO `wc_flag` VALUES (1,'white','#FFFFFF'),(2,'red','#FF0000'),(3,'green','#00FF00'),(4,'blue','#0000FF'),(5,'black','#000000');
/*!40000 ALTER TABLE `wc_flag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wc_forder`
--

DROP TABLE IF EXISTS `wc_forder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wc_forder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `checked` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wc_forder`
--

LOCK TABLES `wc_forder` WRITE;
/*!40000 ALTER TABLE `wc_forder` DISABLE KEYS */;
INSERT INTO `wc_forder` VALUES (1,'Name',0),(2,'Type',0),(3,'Size',0),(4,'Date Created',0),(5,'Date Modified',0),(6,'Year',0),(7,'Ascending',0),(8,'Descending',0);
/*!40000 ALTER TABLE `wc_forder` ENABLE KEYS */;
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

-- Dump completed on 2018-05-24 20:44:16
