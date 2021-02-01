-- MySQL dump 10.16  Distrib 10.1.29-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cement
-- ------------------------------------------------------
-- Server version	10.1.29-MariaDB-6

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('admin','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bill` (
  `bid` int(5) NOT NULL AUTO_INCREMENT,
  `Dateoforder` date NOT NULL,
  `NOI` int(10) NOT NULL,
  `DeliveryAddress` varchar(100) NOT NULL,
  `Amount` double NOT NULL,
  `Transport` varchar(10) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill`
--

LOCK TABLES `bill` WRITE;
/*!40000 ALTER TABLE `bill` DISABLE KEYS */;
INSERT INTO `bill` VALUES (1,'0000-00-00',1,'',0,'by us'),(2,'0000-00-00',1,'',0,'by us'),(3,'0000-00-00',1,'',0,'by us'),(4,'0000-00-00',1,'',0,'by us'),(5,'0000-00-00',1,'',0,'by us'),(6,'0000-00-00',1,'',0,'by us'),(7,'0000-00-00',1,'',0,'by us'),(8,'2019-03-02',1,'',0,'by us'),(9,'2019-03-02',1,'',0,'by us'),(10,'2019-03-02',1,'',0,'by us'),(11,'2019-03-02',1,'',0,'by us'),(12,'2019-03-02',1,'nashik',0,'by us'),(13,'2019-03-04',1,'nashik',0,'by us'),(14,'2019-03-04',1,'nashik',0,'by us'),(15,'2019-03-04',1,'nashik',0,'by us'),(16,'2019-03-04',1,'nashik',0,'by us'),(17,'2019-03-04',1,'nashik',0,'by us'),(18,'2019-03-04',1,'nashik',0,'by us'),(19,'2019-03-04',1,'nashik',0,'by us'),(20,'2019-03-05',20,'nashik',9120,''),(21,'2019-03-05',20,'nashik',9120,'self'),(22,'2019-03-05',20,'nashik',10240,'self'),(23,'2019-03-05',20,'nashik',10240,'self'),(24,'2019-03-05',50,'panchavati',37000,'us'),(25,'2019-03-05',50,'panchavati',37000,'us'),(26,'2019-03-05',50,'panchavati',37000,'us'),(27,'2019-03-05',20,'nashik',10240,'self');
/*!40000 ALTER TABLE `bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `pid` int(3) NOT NULL AUTO_INCREMENT,
  `pbrand` varchar(20) NOT NULL,
  `ptype` varchar(10) NOT NULL,
  `Grade` int(2) NOT NULL,
  `ctype` varchar(10) NOT NULL,
  `rate` float NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Ambuja','OPC',43,'White',515),(2,'UltraTech ','PPC',53,'Black',500),(3,'Birla A1','IS',53,'White',350),(4,'Chettinad','OPC',43,'Black',600),(5,'Jaypee','PPC',53,'Black',400),(6,'JSW','OPC',53,'White',550);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review` (
  `rid` int(3) NOT NULL,
  `rdate` date NOT NULL,
  `comment` text NOT NULL,
  `rating` text NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock` (
  `sid` int(3) NOT NULL AUTO_INCREMENT,
  `quan` int(10) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
INSERT INTO `stock` VALUES (1,1630),(2,1330),(3,830),(4,830),(5,830),(6,830);
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userreg`
--

DROP TABLE IF EXISTS `userreg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userreg` (
  `uid` int(3) NOT NULL AUTO_INCREMENT,
  `fn` varchar(10) NOT NULL,
  `ln` varchar(10) NOT NULL,
  `mob` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `cpwd` varchar(15) NOT NULL,
  `addr` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userreg`
--

LOCK TABLES `userreg` WRITE;
/*!40000 ALTER TABLE `userreg` DISABLE KEYS */;
INSERT INTO `userreg` VALUES (8,'nilesh','borse','9657693479','nileshborse344@gmail','nilesh','Nilesh344','panchavati nashik');
/*!40000 ALTER TABLE `userreg` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-05  9:46:32
