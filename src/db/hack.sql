-- MySQL dump 10.13  Distrib 5.7.15, for Linux (x86_64)
--
-- Host: localhost    Database: hack
-- ------------------------------------------------------
-- Server version	5.7.15-0ubuntu0.16.04.1

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
-- Table structure for table `hackaton`
--

DROP TABLE IF EXISTS `hackaton`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hackaton` (
  `name` varchar(25) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `vote` tinyint(1) DEFAULT NULL,
  `poll_nb` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hackaton`
--

LOCK TABLES `hackaton` WRITE;
/*!40000 ALTER TABLE `hackaton` DISABLE KEYS */;
INSERT INTO `hackaton` VALUES ('Johnny Bravo','../public/img/5647d541307a9dbadc4d1fc403834d7f.png',1,0),('Dexter','../public/img/d4c6cc970089b37ff32666572e71cf03.jpg',1,2),('Batman','../public/img/b79468b0f5a08500b04706e7675b1545.jpg',1,10),('JCVD','../public/img/eb83c928b9ce92e84c3ee2f7a75f8dd4.png',0,0),('Bambi','../public/img/1426cdb71b418ccd22aae88a79e95973.jpg',1,3),('Francois 1er','../public/img/608f3accca2f192feed8e5280df9daef.jpg',1,2),('Napoleon','../public/img/6cbaf9722523133a55205ced4a0d9e81.jpg',0,7),('Bob leponge','../public/img/b2835ab2fa4e94efc8868d5eca5a6f63.jpg',0,5),('dabin','../public/img/31c43100101f5f660267f600bf9039e3.jpg',1,1),('Mathiru','../public/img/a84f4c4eee8b46f6f124a3649ad3e263.jpg',0,0),('Nico','../public/img/9e40fb2093c0bc5f9ae2e15a7dd23f2f.jpg',0,1),('Akex','../public/img/8478475d3150ac9b6df3b934c08b5ba1.jpg',0,1),('Babar','../public/img/82cbf040465e3888ef24b3c99cf1b236.bmp',0,0),('superman','../public/img/0a030209eeea434d2d29227e75a45227.jpg',0,0),('Jean Claude','../public/img/1705afac72347bae260c98c489d22573.jpg',0,0);
/*!40000 ALTER TABLE `hackaton` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-10 17:33:14
