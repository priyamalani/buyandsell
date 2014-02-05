-- MySQL dump 10.13  Distrib 5.5.9, for osx10.4 (i386)
--
-- Host: localhost    Database: shopandsell
-- ------------------------------------------------------
-- Server version	5.5.9

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) NOT NULL,
  `parent_category` int(11) DEFAULT NULL,
  `active` char(10) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Fashion',0,'1'),(2,'Home & Garden',0,'1'),(3,'Electronic',0,'1'),(4,'Other',0,'1'),(5,'Men Clothing',1,'1'),(6,'Women Clothing',1,'1'),(7,'Baby Clothing',1,'1'),(8,'Accessories',1,'1'),(9,'Beauty Products',1,'1'),(10,'Other',1,'1'),(11,'Art & Craft',2,'1'),(12,'Home Decor',2,'1'),(13,'Garden',2,'1'),(14,'Pet Supplies',2,'1'),(15,'Other',2,'1'),(16,'Phone',3,'1'),(17,'Camera',3,'1'),(18,'Computer',3,'1'),(19,'Other',3,'1'),(20,'Other',4,'1');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
INSERT INTO `login_attempts` VALUES (1,'1389205486');
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` char(128) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `salt` char(128) NOT NULL,
  `seller` varchar(50) DEFAULT 'owner',
  `active` char(10) NOT NULL DEFAULT '1',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'priya','Priya Malani','priya@test.com','priya','9849044487','Nizamabad','503001','India','1882250072','Owner','1','2014-01-09 20:35:20'),(2,'test','Testing','test@test.com','test','9849044487','Nagpur','440010','India','1341637318','Owner','1','2014-01-10 19:46:03'),(3,'Priya','Priya','priya@veloxsites.com','sriBalaji','6472059106','1122- 7 crescent place','m4c5l7','Canada','651854498','admin','1','2014-01-17 19:36:45');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_history`
--

DROP TABLE IF EXISTS `order_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_no` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) DEFAULT 'processing',
  PRIMARY KEY (`id`),
  KEY `product_no` (`product_no`),
  KEY `seller_id` (`seller_id`),
  CONSTRAINT `order_history_ibfk_1` FOREIGN KEY (`product_no`) REFERENCES `product` (`product_no`),
  CONSTRAINT `order_history_ibfk_2` FOREIGN KEY (`seller_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_history`
--

LOCK TABLES `order_history` WRITE;
/*!40000 ALTER TABLE `order_history` DISABLE KEYS */;
INSERT INTO `order_history` VALUES (1,49,2,3,1,'2014-01-27 20:39:56','processing'),(2,48,1,3,5,'2014-01-27 20:48:57','processing'),(3,53,3,2,5,'2014-01-27 21:32:10','processing');
/*!40000 ALTER TABLE `order_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `product_no` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) DEFAULT NULL,
  `product_desc` varchar(500) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `members_id` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `info_1` varchar(50) DEFAULT NULL,
  `info_2` varchar(50) DEFAULT NULL,
  `info_3` varchar(50) DEFAULT NULL,
  `info_4` varchar(50) DEFAULT NULL,
  `info_5` varchar(50) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visits` int(11) DEFAULT '0',
  `return_policy` varchar(500) DEFAULT NULL,
  `actual_price` int(11) DEFAULT NULL,
  `selling_price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `estimated_delivery` varchar(75) DEFAULT NULL,
  `shipping_charges` varchar(75) DEFAULT NULL,
  `more_details` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`product_no`),
  KEY `category_id` (`category_id`,`product_id`),
  KEY `members_id` (`members_id`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `product_ibfk_2` FOREIGN KEY (`members_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (47,'testing again','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',11,1441339785,1,1,'5.jpg','','',NULL,NULL,'2014-01-16 20:16:45',56,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',90,90,10,'9th','90','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(48,'New','Small String',11,978461666,1,1,'9.jpg','','',NULL,NULL,'2014-01-16 20:22:15',20,'mk',90,90,90,'mk','mk','mk'),(49,'new product','mkmkmkmkmkm\r\nmkkmk',11,349990423,2,1,'11.jpg','','',NULL,NULL,'2014-01-16 21:25:31',17,'mk',9090,90,909,'mk','mk','mk'),(52,'Testing','Testing',5,333899602,3,1,'Fotolia_2969417_S.jpg','','',NULL,NULL,'2014-01-20 19:42:49',43,'90',90,90,90,'90','90','90'),(53,'Priya Malani','Testing',11,1488325113,3,1,'IMG-20131028-WA0009.jpg','','',NULL,NULL,'2014-01-27 20:08:11',6,'NA',55,55,10,'NA','NA','NA');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `product_no` int(11) NOT NULL,
  `review_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `other` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_no` (`product_no`),
  CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_no`) REFERENCES `product` (`product_no`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,'Priya','priya@veloxsites.com','Test',4,52,'2014-01-27 19:09:15',NULL),(2,'Priya Malani','priya.n.malani@gmail.com','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum\r\n',5,52,'2014-01-27 19:19:18',NULL),(4,'Priya Malani','priya@veloxsites.com','mlmmlmlm',3,47,'2014-01-27 19:29:43',NULL);
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_no` int(11) NOT NULL,
  `members_id` int(11) NOT NULL,
  `wishlist_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `product_no` (`product_no`),
  KEY `members_id` (`members_id`),
  CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`product_no`) REFERENCES `product` (`product_no`),
  CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`members_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishlist`
--

LOCK TABLES `wishlist` WRITE;
/*!40000 ALTER TABLE `wishlist` DISABLE KEYS */;
INSERT INTO `wishlist` VALUES (1,52,3,'2014-01-27 19:48:12'),(3,48,3,'2014-01-27 20:04:06'),(4,47,3,'2014-01-27 21:15:04');
/*!40000 ALTER TABLE `wishlist` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-02-05 15:27:17
