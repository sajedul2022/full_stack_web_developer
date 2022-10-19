-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: wdpf51
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `sku` char(8) NOT NULL,
  `name` varchar(35) NOT NULL,
  `product_entry` date NOT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'shirt201','Blue Shirt','0000-00-00',500.00);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products01`
--

DROP TABLE IF EXISTS `products01`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products01` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `sku` char(8) NOT NULL,
  `name` varchar(35) NOT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products01`
--

LOCK TABLES `products01` WRITE;
/*!40000 ALTER TABLE `products01` DISABLE KEYS */;
/*!40000 ALTER TABLE `products01` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_info`
--

DROP TABLE IF EXISTS `student_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_info` (
  `stud_id` smallint(10) NOT NULL AUTO_INCREMENT,
  `stud_code` smallint(10) NOT NULL,
  `stud_name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `marks` tinyint(3) NOT NULL,
  `phone` varchar(30) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_info`
--

LOCK TABLES `student_info` WRITE;
/*!40000 ALTER TABLE `student_info` DISABLE KEYS */;
INSERT INTO `student_info` VALUES (1,101,'Mark','English',68,'345654895235'),(2,102,'joshep','Physics',70,'98756524585'),(3,103,'john','Maths',70,'976525656554'),(4,104,'Barack ','Maths',90,'8796522'),(5,105,'Rinky ','Maths ',85,'6756522141'),(6,106,'Adam ','Science',92,'798651'),(7,107,'Andrew ','Science',83,'569865454'),(8,108,'Brayan ','Science',85,'758756524585'),(9,109,'Green Mark','English',85,'3676525656554'),(10,110,'Alexandar ','Biology',67,'2356856541'),(11,111,'Quyr Alexander','Arabic',65,'0152589545'),(12,112,'Sajedul20','Arabic',25,'0152589545');
/*!40000 ALTER TABLE `student_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `student_id` smallint(10) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_phone` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `student_email` (`student_email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (100,'Developer Sajedul Islam','sajid@gmail.com','0168563633'),(104,'Alexander','California@gmail.com','016589545'),(102,'Md. Sajib khan','sajib@gmail.com','01756582512'),(103,'md. rafiq khan','khan.rafiq1999@gmail.com','+880168562211'),(105,'Quyr Alexander','qty@gmail.com','0152589545');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `after_student_enty` AFTER INSERT ON `students`
 FOR EACH ROW BEGIN
INSERT INTO students_table_log VALUES(NULL,NEW.student_id,NEW.student_name,NEW.student_email,NEW.student_phone,  'INSERT', current_timestamp());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER after_student_update
AFTER UPDATE ON students
FOR EACH ROW
BEGIN
INSERT INTO students_table_log VALUES (NULL,NEW.student_id,NEW.student_name,NEW.student_email,NEW.student_phone, 'UPDATE', current_timestamp());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER after_student_delete
BEFORE DELETE ON students
FOR EACH ROW
BEGIN
INSERT INTO students_table_log VALUES (NULL,OLD.student_id,OLD.student_name,OLD.student_email,OLD.student_phone, 'DELETE', current_timestamp());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `students_table_log`
--

DROP TABLE IF EXISTS `students_table_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students_table_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` smallint(10) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_phone` varchar(20) NOT NULL,
  `action` varchar(10) NOT NULL,
  `action_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students_table_log`
--

LOCK TABLES `students_table_log` WRITE;
/*!40000 ALTER TABLE `students_table_log` DISABLE KEYS */;
INSERT INTO `students_table_log` VALUES (1,102,'Md. Sajib khan','sajib@gmail.com','01756582512','INSERT','0000-00-00 00:00:00'),(2,103,'rafiq','rafiq@gmail.com','0158652','INSERT','2022-08-27 12:17:06'),(3,103,'rafiq','rafiq@gmail.com','0158652','UPDATE','2022-08-27 12:28:16'),(4,103,'md. rafiq','rafiq20@gmail.com','013568652','UPDATE','2022-08-27 12:35:23'),(5,103,'md. rafiq khan','khan.rafiq1999@gmail.com','+880168562211','UPDATE','2022-08-27 12:36:40'),(6,101,'nirob','nirob@gmail.com','0185655550','DELETE','2022-08-27 12:44:14'),(7,104,'Alexander','California@gmail.com','016589545','INSERT','2022-08-28 12:31:22');
/*!40000 ALTER TABLE `students_table_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` smallint(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` char(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'sajedul','sajedul@gmail.com','7c3607b8e61bcf1944e9e8503a660f21f4b6f3f1'),(4,'Nirob','niorb@gmail.com','7c3607b8e61bcf1944e9e8503a660f21f4b6f3f1'),(3,'naimur1','naimur1@gmail.com','7c3607b8e61bcf1944e9e8503a660f21f4b6f3f1'),(5,'Gayle','gayle@gmail.com','40bd001563085fc35165329ea1ff5c5ecbdbbeef'),(6,'tyayle','tyayle@gmail.com','40bd001563085fc35165329ea1ff5c5ecbdbbeef');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-30 16:24:35
