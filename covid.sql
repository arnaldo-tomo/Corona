-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: covid
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `beira`
--

DROP TABLE IF EXISTS `beira`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `beira` (
  `Recuperado` int NOT NULL,
  `Negativo` int NOT NULL,
  `Possesetivo` int NOT NULL,
  `Quarentena` int NOT NULL,
  `Obito` int NOT NULL,
  `Atualizado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beira`
--

LOCK TABLES `beira` WRITE;
/*!40000 ALTER TABLE `beira` DISABLE KEYS */;
INSERT INTO `beira` VALUES (16,165,16,0,1,'2022-02-11 16:37:29',1),(1,2,3,0,4,'2022-02-12 00:18:06',2),(1000,16,14,0,0,'2022-02-12 13:48:41',3),(10,10,10,0,10,'2022-02-13 01:37:40',7),(10,10,10,0,10,'2022-02-13 01:39:23',8),(50,0,0,0,0,'2022-02-13 01:41:03',9),(15,151,2,0,5,'2022-02-13 01:50:02',10),(12,51,51,0,12,'2022-02-13 01:50:34',11),(12,51,51,0,12,'2022-02-13 01:51:32',12),(13,1,2,0,3,'2022-02-13 02:21:54',13),(10,50,812,0,1,'2022-02-13 02:24:42',14),(10,50,812,0,1,'2022-02-13 02:26:27',15),(10,50,812,0,1,'2022-02-13 02:26:36',16),(11,0,0,0,0,'2022-02-13 02:27:23',17),(0,500,0,0,0,'2022-02-13 02:28:04',18),(6,0,0,0,0,'2022-02-13 02:29:34',19),(18,19,15,0,6,'2022-02-13 02:31:34',20),(5,0,0,0,0,'2022-02-13 02:34:14',21),(52,0,0,0,0,'2022-02-13 02:45:02',22),(0,0,0,0,15,'2022-02-13 02:51:49',23),(0,0,0,0,9,'2022-02-13 03:25:03',24),(0,0,0,0,10,'2022-02-13 03:26:08',25),(0,0,0,0,-50,'2022-02-13 03:26:46',26),(0,0,0,0,-50,'2022-02-13 03:27:30',27),(0,0,-200,0,0,'2022-02-13 03:29:12',28),(0,0,0,0,20,'2022-02-13 04:15:33',29),(0,0,0,0,100,'2022-02-13 12:22:49',30),(5,6,-2400,0,7,'2022-02-13 13:28:34',31),(0,-700,0,0,0,'2022-02-13 13:29:57',32),(0,0,0,0,0,'2022-02-13 16:31:05',33),(0,0,0,13,0,'2022-02-13 16:33:11',34),(55,0,4,44,55,'2022-02-13 23:38:32',35),(0,0,0,0,0,'2022-02-13 23:38:41',36),(0,0,0,1,0,'2022-02-13 23:38:47',37),(0,2,0,0,0,'2022-02-13 23:38:54',38),(0,1,0,0,0,'2022-02-13 23:38:59',39),(0,0,0,11,0,'2022-02-13 23:40:24',40),(0,0,0,-40,0,'2022-02-13 23:40:44',41),(0,0,0,10,0,'2022-02-13 23:42:08',42),(0,0,0,10,0,'2022-02-13 23:42:17',43),(0,0,0,19,0,'2022-02-13 23:44:33',44),(-10,0,0,0,0,'2022-02-15 01:07:45',45),(-22,0,0,0,0,'2022-02-15 01:07:53',46),(0,0,0,0,-200,'2022-02-15 01:08:37',47),(-50,0,0,0,0,'2022-02-15 01:09:16',48),(-26,0,0,0,0,'2022-02-15 01:10:12',49),(55,0,0,0,0,'2022-02-15 01:15:54',50),(55,0,0,0,0,'2022-02-15 01:16:50',51),(55,0,0,0,0,'2022-02-15 01:27:20',52),(12,0,0,0,0,'2022-02-15 01:27:33',53),(5,0,0,0,0,'2022-02-15 01:28:40',54),(0,4,0,0,0,'2022-02-15 01:29:14',55),(5,0,0,0,0,'2022-02-15 01:30:16',56),(43,0,0,0,0,'2022-02-15 01:30:52',57),(55,0,0,0,0,'2022-02-15 01:31:31',58),(0,0,0,0,5,'2022-02-15 01:33:48',59),(0,5,0,0,0,'2022-02-15 01:34:12',60),(4,0,0,0,0,'2022-02-15 01:35:14',61),(5,0,0,0,0,'2022-02-15 10:53:05',62),(1,0,0,0,0,'2022-02-15 10:53:45',63),(0,0,1,0,0,'2022-02-15 10:54:08',64),(0,0,0,0,1,'2022-02-15 10:58:09',65),(0,0,0,0,1,'2022-02-15 10:58:13',66),(0,0,0,0,111,'2022-02-15 10:58:18',67),(0,0,4,0,0,'2022-02-15 17:13:25',68),(0,0,0,0,7,'2022-02-15 17:14:31',69),(4,4,5,8,2147483647,'2022-02-16 08:37:07',70),(7,9,19,20,8,'2022-02-16 08:38:07',71),(222,222,222,222,222,'2022-02-16 08:41:13',72),(0,0,0,0,-1000000000,'2022-02-17 20:48:41',73),(0,0,0,0,-1000000,'2022-02-17 20:48:48',74),(0,0,0,0,-1000,'2022-02-17 20:48:53',75),(0,0,0,0,-1146428,'2022-02-17 20:49:04',76),(0,0,0,0,1,'2022-02-17 20:49:12',77),(0,0,0,0,-50000,'2022-02-17 20:49:34',78),(0,0,0,0,-15,'2022-02-17 20:49:39',79),(0,0,0,0,-500,'2022-02-17 20:49:45',80),(0,0,0,0,1500,'2022-02-17 20:49:49',81),(0,0,0,0,1522,'2022-02-17 20:49:53',82),(0,1,2,5,5,'2022-02-17 22:17:08',83),(0,0,2,4,54,'2022-02-18 15:13:06',84),(0,0,0,0,-55500,'2022-02-20 19:09:10',85),(0,0,0,0,-11112,'2022-02-20 19:09:16',86),(0,0,0,0,-122,'2022-02-20 19:09:20',87),(0,0,0,0,-9000,'2022-02-20 19:09:26',88),(0,0,0,0,-900,'2022-02-20 19:09:31',89),(0,0,0,0,-100,'2022-02-20 19:09:35',90),(0,0,0,0,-50,'2022-02-20 19:09:39',91);
/*!40000 ALTER TABLE `beira` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cabodelgado`
--

DROP TABLE IF EXISTS `cabodelgado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cabodelgado` (
  `id` int NOT NULL,
  `Recuperado` int NOT NULL,
  `Negativo` int NOT NULL,
  `Possesetivo` int NOT NULL,
  `Quarentena` int NOT NULL,
  `Obito` int NOT NULL,
  `Atualizado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cabodelgado`
--

LOCK TABLES `cabodelgado` WRITE;
/*!40000 ALTER TABLE `cabodelgado` DISABLE KEYS */;
INSERT INTO `cabodelgado` VALUES (0,13,1,2,0,3,'2022-02-13 02:21:55'),(0,10,50,812,0,1,'2022-02-13 02:24:42'),(0,10,50,812,0,1,'2022-02-13 02:26:28'),(0,10,50,812,0,1,'2022-02-13 02:26:36'),(0,11,0,0,0,0,'2022-02-13 02:27:23'),(0,0,500,0,0,0,'2022-02-13 02:28:04'),(0,6,0,0,0,0,'2022-02-13 02:29:35'),(0,18,19,15,0,6,'2022-02-13 02:31:34'),(0,5,0,0,0,0,'2022-02-13 02:34:14'),(0,52,0,0,0,0,'2022-02-13 02:45:03'),(0,0,0,0,0,15,'2022-02-13 02:51:50'),(0,0,0,0,0,9,'2022-02-13 03:25:04'),(0,0,0,-2000,0,0,'2022-02-13 03:36:00'),(0,0,-600,0,0,0,'2022-02-13 03:36:18'),(0,0,0,0,1,0,'2022-02-14 02:11:13'),(0,0,0,0,2,0,'2022-02-15 00:23:49'),(0,0,0,-50,0,0,'2022-02-15 00:27:39'),(0,0,0,-100,0,0,'2022-02-15 00:27:47'),(0,0,0,0,1,0,'2022-02-15 00:28:44'),(0,0,45,0,0,0,'2022-02-15 00:31:38'),(0,0,0,0,5,0,'2022-02-15 00:34:04'),(0,0,0,16,0,0,'2022-02-15 00:34:32'),(0,0,0,0,16,0,'2022-02-15 00:36:03'),(0,0,0,0,5,0,'2022-02-15 00:36:19'),(0,0,0,0,0,58,'2022-02-15 00:37:42'),(0,0,0,55,0,0,'2022-02-15 00:40:08'),(0,-35,0,0,0,0,'2022-02-15 00:41:00'),(0,0,0,0,1,0,'2022-02-15 00:42:42'),(0,0,-150,0,0,0,'2022-02-15 00:44:19'),(0,0,0,0,0,1,'2022-02-15 00:54:12'),(0,1,1,1,1,1,'2022-02-15 01:00:42'),(0,1,612,154,21,5,'2022-02-15 01:03:24'),(0,0,0,-400,0,0,'2022-02-15 01:06:24'),(0,0,-16,0,0,0,'2022-02-15 01:06:45');
/*!40000 ALTER TABLE `cabodelgado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cidademaputo`
--

DROP TABLE IF EXISTS `cidademaputo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cidademaputo` (
  `id` int NOT NULL,
  `Recuperado` int NOT NULL,
  `Negativo` int NOT NULL,
  `Possesetivo` int NOT NULL,
  `Quarentena` int NOT NULL,
  `Obito` int NOT NULL,
  `Atualizado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidademaputo`
--

LOCK TABLES `cidademaputo` WRITE;
/*!40000 ALTER TABLE `cidademaputo` DISABLE KEYS */;
INSERT INTO `cidademaputo` VALUES (0,13,1,2,0,3,'2022-02-13 02:21:55'),(0,10,50,812,0,1,'2022-02-13 02:24:43'),(0,10,50,812,0,1,'2022-02-13 02:26:28'),(0,10,50,812,0,1,'2022-02-13 02:26:37'),(0,11,0,0,0,0,'2022-02-13 02:27:24'),(0,0,500,0,0,0,'2022-02-13 02:28:05'),(0,6,0,0,0,0,'2022-02-13 02:29:35'),(0,18,19,15,0,6,'2022-02-13 02:31:35'),(0,5,0,0,0,0,'2022-02-13 02:34:14'),(0,52,0,0,0,0,'2022-02-13 02:45:03'),(0,0,0,0,0,15,'2022-02-13 02:51:50'),(0,0,0,0,0,9,'2022-02-13 03:25:04'),(0,0,0,-1000,0,0,'2022-02-13 03:55:09'),(0,0,-600,0,0,0,'2022-02-13 03:55:19'),(0,0,0,0,13,0,'2022-02-14 16:10:35');
/*!40000 ALTER TABLE `cidademaputo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gaza`
--

DROP TABLE IF EXISTS `gaza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gaza` (
  `id` int NOT NULL,
  `Recuperado` int NOT NULL,
  `Negativo` int NOT NULL,
  `Possesetivo` int NOT NULL,
  `Quarentena` int NOT NULL,
  `Obito` int NOT NULL,
  `Atualizado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gaza`
--

LOCK TABLES `gaza` WRITE;
/*!40000 ALTER TABLE `gaza` DISABLE KEYS */;
INSERT INTO `gaza` VALUES (0,12,51,51,0,12,'2022-02-13 01:51:32'),(0,13,1,2,0,3,'2022-02-13 02:21:54'),(0,10,50,812,0,1,'2022-02-13 02:24:42'),(0,10,50,812,0,1,'2022-02-13 02:26:27'),(0,10,50,812,0,1,'2022-02-13 02:26:36'),(0,11,0,0,0,0,'2022-02-13 02:27:23'),(0,0,500,0,0,0,'2022-02-13 02:28:04'),(0,6,0,0,0,0,'2022-02-13 02:29:34'),(0,18,19,15,0,6,'2022-02-13 02:31:34'),(0,5,0,0,0,0,'2022-02-13 02:34:14'),(0,52,0,0,0,0,'2022-02-13 02:45:02'),(0,0,0,0,0,15,'2022-02-13 02:51:50'),(0,0,0,0,0,9,'2022-02-13 03:25:04'),(0,0,0,0,0,20,'2022-02-13 04:15:33'),(0,0,0,0,0,100,'2022-02-13 12:22:49'),(0,5,6,-2400,0,7,'2022-02-13 13:28:34'),(0,0,-700,0,0,0,'2022-02-13 13:29:57'),(0,0,0,0,0,0,'2022-02-13 16:31:05'),(0,0,0,0,0,0,'2022-02-13 16:33:11'),(0,55,0,4,0,55,'2022-02-13 23:38:33'),(0,0,0,0,0,0,'2022-02-13 23:38:41'),(0,0,0,0,0,0,'2022-02-13 23:38:47'),(0,0,2,0,0,0,'2022-02-13 23:38:54'),(0,0,1,0,0,0,'2022-02-13 23:38:59'),(0,0,0,0,0,0,'2022-02-13 23:40:24'),(0,0,0,0,0,0,'2022-02-13 23:40:44'),(0,0,0,0,19,0,'2022-02-13 23:44:33'),(0,-10,0,0,0,0,'2022-02-15 01:07:45'),(0,-22,0,0,0,0,'2022-02-15 01:07:53'),(0,0,0,0,0,-200,'2022-02-15 01:08:37'),(0,-50,0,0,0,0,'2022-02-15 01:09:16'),(0,-26,0,0,0,0,'2022-02-15 01:10:13'),(0,55,0,0,0,0,'2022-02-15 01:15:54'),(0,55,0,0,0,0,'2022-02-15 01:16:50'),(0,55,0,0,0,0,'2022-02-15 01:27:20'),(0,12,0,0,0,0,'2022-02-15 01:27:33'),(0,5,0,0,0,0,'2022-02-15 01:28:40'),(0,0,4,0,0,0,'2022-02-15 01:29:14'),(0,5,0,0,0,0,'2022-02-15 01:30:16'),(0,43,0,0,0,0,'2022-02-15 01:30:52'),(0,55,0,0,0,0,'2022-02-15 01:31:31'),(0,0,0,0,0,5,'2022-02-15 01:33:48'),(0,0,5,0,0,0,'2022-02-15 01:34:13'),(0,4,0,0,0,0,'2022-02-15 01:35:14'),(0,5,0,0,0,0,'2022-02-15 10:53:05'),(0,1,0,0,0,0,'2022-02-15 10:53:46'),(0,0,0,1,0,0,'2022-02-15 10:54:08'),(0,0,0,1,0,0,'2022-02-15 19:59:32'),(0,1,2,3,3,2,'2022-02-17 20:45:00'),(0,50,90,1,5,1,'2022-02-21 15:10:20');
/*!40000 ALTER TABLE `gaza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inhambane`
--

DROP TABLE IF EXISTS `inhambane`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inhambane` (
  `id` int NOT NULL,
  `Recuperado` int NOT NULL,
  `Negativo` int NOT NULL,
  `Possesetivo` int NOT NULL,
  `Quarentena` int NOT NULL,
  `Obito` int NOT NULL,
  `Atualizado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inhambane`
--

LOCK TABLES `inhambane` WRITE;
/*!40000 ALTER TABLE `inhambane` DISABLE KEYS */;
INSERT INTO `inhambane` VALUES (0,2,5,8,0,3,'2022-02-13 03:19:38'),(0,0,0,0,0,2,'2022-02-13 03:49:41'),(0,85,54,58,0,2147483647,'2022-02-13 13:10:17'),(0,54,54,64,0,64,'2022-02-13 13:13:04'),(0,0,0,0,0,-2147483,'2022-02-13 13:33:51'),(0,0,0,0,0,-21453362,'2022-02-13 13:34:07'),(0,0,0,0,0,-2000000000,'2022-02-13 13:34:30'),(0,0,0,0,0,0,'2022-02-13 13:34:32'),(0,0,0,0,0,-123000000,'2022-02-13 13:34:53'),(0,0,0,0,0,-880000,'2022-02-13 13:35:05'),(0,0,0,0,0,-2000,'2022-02-13 13:35:12'),(0,0,0,0,0,-728,'2022-02-13 13:35:21'),(0,0,0,0,16,0,'2022-02-14 15:55:00');
/*!40000 ALTER TABLE `inhambane` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manica`
--

DROP TABLE IF EXISTS `manica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `manica` (
  `id` int NOT NULL,
  `Recuperado` int NOT NULL,
  `Negativo` int NOT NULL,
  `Possesetivo` int NOT NULL,
  `Quarentena` int NOT NULL,
  `Obito` int NOT NULL,
  `Atualizado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manica`
--

LOCK TABLES `manica` WRITE;
/*!40000 ALTER TABLE `manica` DISABLE KEYS */;
INSERT INTO `manica` VALUES (0,13,1,2,0,3,'2022-02-13 02:21:55'),(0,10,50,812,0,1,'2022-02-13 02:24:43'),(0,10,50,812,0,1,'2022-02-13 02:26:28'),(0,10,50,812,0,1,'2022-02-13 02:26:36'),(0,11,0,0,0,0,'2022-02-13 02:27:24'),(0,0,500,0,0,0,'2022-02-13 02:28:04'),(0,6,0,0,0,0,'2022-02-13 02:29:35'),(0,18,19,15,0,6,'2022-02-13 02:31:35'),(0,5,0,0,0,0,'2022-02-13 02:34:14'),(0,52,0,0,0,0,'2022-02-13 02:45:03'),(0,0,0,0,0,15,'2022-02-13 02:51:50'),(0,0,0,0,0,9,'2022-02-13 03:25:04'),(0,0,0,2400,0,0,'2022-02-13 03:39:38'),(0,95150,0,0,0,0,'2022-02-13 03:39:54'),(0,28,180,25,0,2147483647,'2022-02-13 13:12:58'),(0,5,28,17,0,-214748368,'2022-02-13 13:15:29'),(0,-9516,-876,-4893,0,-1932735312,'2022-02-13 13:32:43'),(0,0,0,0,2,0,'2022-02-13 23:44:16');
/*!40000 ALTER TABLE `manica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nampula`
--

DROP TABLE IF EXISTS `nampula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nampula` (
  `id` int NOT NULL,
  `Recuperado` int NOT NULL,
  `Negativo` int NOT NULL,
  `Possesetivo` int NOT NULL,
  `Quarentena` int NOT NULL,
  `Obito` int NOT NULL,
  `Atualizado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nampula`
--

LOCK TABLES `nampula` WRITE;
/*!40000 ALTER TABLE `nampula` DISABLE KEYS */;
INSERT INTO `nampula` VALUES (0,13,1,2,0,3,'2022-02-13 02:21:55'),(0,10,50,812,0,1,'2022-02-13 02:24:42'),(0,10,50,812,0,1,'2022-02-13 02:26:28'),(0,10,50,812,0,1,'2022-02-13 02:26:36'),(0,11,0,0,0,0,'2022-02-13 02:27:24'),(0,0,500,0,0,0,'2022-02-13 02:28:04'),(0,6,0,0,0,0,'2022-02-13 02:29:35'),(0,18,19,15,0,6,'2022-02-13 02:31:34'),(0,5,0,0,0,0,'2022-02-13 02:34:14'),(0,52,0,0,0,0,'2022-02-13 02:45:03'),(0,0,0,0,0,15,'2022-02-13 02:51:50'),(0,0,0,0,0,9,'2022-02-13 03:25:04'),(0,0,0,2400,0,0,'2022-02-13 03:37:13'),(0,0,0,0,1,0,'2022-02-14 02:25:57'),(0,16,15,15,722,12,'2022-02-15 20:14:00'),(0,0,0,0,0,2,'2022-02-15 20:14:08'),(0,10,16,3,15,0,'2022-02-21 15:32:32');
/*!40000 ALTER TABLE `nampula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `niassa`
--

DROP TABLE IF EXISTS `niassa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `niassa` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `Recuperado` int NOT NULL,
  `Negativo` int NOT NULL,
  `Possesetivo` int NOT NULL,
  `Quarentena` int NOT NULL,
  `Obito` int NOT NULL,
  `Atualizado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `niassa`
--

LOCK TABLES `niassa` WRITE;
/*!40000 ALTER TABLE `niassa` DISABLE KEYS */;
INSERT INTO `niassa` VALUES (35,10,1,1,1,0,'2022-02-18 19:18:08'),(36,20,1,20,20,20,'2022-02-18 19:20:22'),(37,2,2,2,2,0,'2022-02-18 19:24:24'),(38,16,12,4,9,1,'2022-02-18 19:25:22'),(39,5050,50,50,50,50,'2022-02-18 19:27:39'),(40,5,5,5,0,55,'2022-02-18 19:30:53');
/*!40000 ALTER TABLE `niassa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provinciamaputo`
--

DROP TABLE IF EXISTS `provinciamaputo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provinciamaputo` (
  `id` int NOT NULL,
  `Recuperado` int NOT NULL,
  `Negativo` int NOT NULL,
  `Possesetivo` int NOT NULL,
  `Quarentena` int NOT NULL,
  `Obito` int NOT NULL,
  `Atualizado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinciamaputo`
--

LOCK TABLES `provinciamaputo` WRITE;
/*!40000 ALTER TABLE `provinciamaputo` DISABLE KEYS */;
INSERT INTO `provinciamaputo` VALUES (0,13,1,2,0,3,'2022-02-13 02:21:55'),(0,10,50,812,0,1,'2022-02-13 02:24:43'),(0,10,50,812,0,1,'2022-02-13 02:26:28'),(0,10,50,812,0,1,'2022-02-13 02:26:36'),(0,11,0,0,0,0,'2022-02-13 02:27:24'),(0,0,500,0,0,0,'2022-02-13 02:28:04'),(0,6,0,0,0,0,'2022-02-13 02:29:35'),(0,18,19,15,0,6,'2022-02-13 02:31:35'),(0,5,0,0,0,0,'2022-02-13 02:34:14'),(0,52,0,0,0,0,'2022-02-13 02:45:03'),(0,0,0,0,0,15,'2022-02-13 02:51:50'),(0,0,0,0,0,9,'2022-02-13 03:25:04'),(0,500,0,0,0,0,'2022-02-13 03:51:33'),(0,0,0,0,633,0,'2022-02-14 16:03:18');
/*!40000 ALTER TABLE `provinciamaputo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tete`
--

DROP TABLE IF EXISTS `tete`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tete` (
  `id` int NOT NULL,
  `Recuperado` int NOT NULL,
  `Negativo` int NOT NULL,
  `Possesetivo` int NOT NULL,
  `Quarentena` int NOT NULL,
  `Obito` int NOT NULL,
  `Atualizado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tete`
--

LOCK TABLES `tete` WRITE;
/*!40000 ALTER TABLE `tete` DISABLE KEYS */;
INSERT INTO `tete` VALUES (0,10,10,10,0,10,'2022-02-13 01:37:40'),(0,10,10,10,0,10,'2022-02-13 01:39:23'),(0,50,0,0,0,0,'2022-02-13 01:41:03'),(0,15,151,2,0,5,'2022-02-13 01:50:02'),(0,12,51,51,0,12,'2022-02-13 01:50:34'),(0,12,51,51,0,12,'2022-02-13 01:51:32'),(0,13,1,2,0,3,'2022-02-13 02:21:54'),(0,10,50,812,0,1,'2022-02-13 02:24:42'),(0,10,50,812,0,1,'2022-02-13 02:26:27'),(0,10,50,812,0,1,'2022-02-13 02:26:36'),(0,11,0,0,0,0,'2022-02-13 02:27:23'),(0,0,500,0,0,0,'2022-02-13 02:28:04'),(0,6,0,0,0,0,'2022-02-13 02:29:34'),(0,18,19,15,0,6,'2022-02-13 02:31:34'),(0,5,0,0,0,0,'2022-02-13 02:34:14'),(0,52,0,0,0,0,'2022-02-13 02:45:02'),(0,0,0,0,0,15,'2022-02-13 02:51:50'),(0,0,0,0,0,9,'2022-02-13 03:25:03'),(0,0,0,0,0,-5,'2022-02-13 03:32:25'),(0,2000,1000,100,0,2147483647,'2022-02-13 13:09:20'),(0,2000,1000,100,0,2147483647,'2022-02-13 13:09:20'),(0,2000,1000,100,0,2147483647,'2022-02-13 13:09:20'),(0,2000,1000,100,0,2147483647,'2022-02-13 13:09:20'),(0,2000,1000,100,0,10,'2022-02-13 13:12:55'),(0,0,0,0,0,-2147483648,'2022-02-13 13:16:09'),(0,0,0,0,0,-2147483648,'2022-02-13 13:16:45'),(0,0,0,0,0,-200,'2022-02-13 13:17:05'),(0,0,0,0,0,0,'2022-02-13 13:24:05'),(0,-10244,-5943,-3077,0,-2147483648,'2022-02-13 13:28:26'),(0,0,0,0,0,2147483534,'2022-02-13 13:29:00'),(0,0,0,0,0,-2147483648,'2022-02-13 13:29:40'),(0,0,0,0,0,-30000,'2022-02-13 13:29:52'),(0,0,0,0,0,-5645853,'2022-02-13 13:30:03'),(0,0,0,0,0,-5000,'2022-02-13 13:30:11'),(0,0,0,0,0,-5000000,'2022-02-13 13:30:23'),(0,0,0,0,0,-50000,'2022-02-13 13:30:33'),(0,0,0,0,0,-500000,'2022-02-13 13:30:42'),(0,0,0,0,0,-99999,'2022-02-13 13:31:00'),(0,0,0,0,0,-999999,'2022-02-13 13:31:10'),(0,0,0,0,0,2364554,'2022-02-13 13:31:27'),(0,0,0,0,0,-5556,'2022-02-13 13:31:36'),(0,0,0,0,0,-54545,'2022-02-13 13:31:47'),(0,0,0,0,0,-848584,'2022-02-13 13:31:55'),(0,0,0,0,0,-10000,'2022-02-13 13:32:13'),(0,0,0,0,0,166665,'2022-02-13 13:32:41'),(0,0,0,0,0,-1025654002,'2022-02-13 13:33:14'),(0,0,0,0,0,-1111111101,'2022-02-13 13:33:42'),(0,2000,1000,100,0,10,'2022-02-13 13:34:15'),(0,-1000,0,0,0,0,'2022-02-13 13:38:14'),(0,1000,0,0,0,0,'2022-02-13 13:38:44'),(0,1000,1000,1000,0,1000,'2022-02-13 13:39:34'),(0,0,0,0,1,0,'2022-02-14 02:36:31'),(0,0,0,0,5,0,'2022-02-15 01:45:18'),(0,-85,0,0,0,0,'2022-02-15 08:45:12'),(0,-200,0,0,0,0,'2022-02-15 08:45:20'),(0,-452,0,0,0,0,'2022-02-15 08:45:28'),(0,1,1,1,1,1,'2022-02-15 08:47:37'),(0,0,0,0,1,0,'2022-02-15 08:50:51'),(0,0,0,0,1,0,'2022-02-15 08:51:30'),(0,1,0,0,0,0,'2022-02-15 09:00:04'),(0,0,1,0,0,0,'2022-02-15 09:00:51'),(0,0,0,0,1,0,'2022-02-15 09:46:33'),(0,0,0,0,1,0,'2022-02-15 09:52:56'),(0,0,0,0,0,5,'2022-02-15 10:03:04'),(0,0,0,1,0,0,'2022-02-15 10:03:30'),(0,0,0,0,0,0,'2022-02-15 10:11:44'),(0,0,0,0,0,0,'2022-02-15 10:12:48'),(0,13,3,3,23,5,'2022-02-15 10:15:18'),(0,1,0,0,0,0,'2022-02-15 10:46:21'),(0,500,600,2,1,0,'2022-02-19 09:10:49');
/*!40000 ALTER TABLE `tete` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `email` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `provincia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('niassa@covid.com','niassacovid19',1),('cabodelegado@covid.com','cabodelegadocovid19',2),('nampula@covid.com','nampulacovid19',3),('tete@covid.com','tetecovid19',4),('zambezia@covid.com','zambeziacovid19',5),('manica@covid.com','manicacovid19',6),('sofala@covid.com','sofalacovid19',7),('inhambane@covid.com','inhambanecovid19',8),('gaza@covid.com','gazacovid19',9),('provinciamaputo@covid.com','provinciamaputocovid',10),('cidademaputo@covid.com','cidademaputocovid19',11);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zambezia`
--

DROP TABLE IF EXISTS `zambezia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zambezia` (
  `id` int NOT NULL,
  `Recuperado` int NOT NULL,
  `Negativo` int NOT NULL,
  `Possesetivo` int NOT NULL,
  `Quarentena` int NOT NULL,
  `Obito` int NOT NULL,
  `Atualizado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zambezia`
--

LOCK TABLES `zambezia` WRITE;
/*!40000 ALTER TABLE `zambezia` DISABLE KEYS */;
INSERT INTO `zambezia` VALUES (0,13,1,2,0,3,'2022-02-13 02:21:55'),(0,10,50,812,0,1,'2022-02-13 02:24:42'),(0,10,50,812,0,1,'2022-02-13 02:26:28'),(0,10,50,812,0,1,'2022-02-13 02:26:36'),(0,11,0,0,0,0,'2022-02-13 02:27:24'),(0,0,500,0,0,0,'2022-02-13 02:28:04'),(0,6,0,0,0,0,'2022-02-13 02:29:35'),(0,18,19,15,0,6,'2022-02-13 02:31:34'),(0,5,0,0,0,0,'2022-02-13 02:34:14'),(0,52,0,0,0,0,'2022-02-13 02:45:03'),(0,0,0,0,0,15,'2022-02-13 02:51:50'),(0,0,0,0,0,9,'2022-02-13 03:25:04'),(0,1000,0,0,0,-63,'2022-02-13 03:38:16'),(0,0,0,0,0,-273,'2022-02-13 03:38:30'),(0,0,0,0,0,-300,'2022-02-13 03:38:36'),(0,0,0,0,0,600,'2022-02-13 03:38:41'),(0,-1135,-670,-2453,0,10,'2022-02-13 13:20:47'),(0,2000,1000,100,0,-10,'2022-02-13 13:21:22'),(0,0,0,0,1,0,'2022-02-14 15:28:15'),(0,0,0,0,0,1,'2022-02-14 15:28:20'),(0,0,0,0,1,0,'2022-02-14 15:47:15'),(0,0,0,0,0,2,'2022-02-14 15:51:51'),(0,0,0,0,0,2,'2022-02-14 15:52:01'),(0,0,0,0,13,0,'2022-02-14 16:39:02');
/*!40000 ALTER TABLE `zambezia` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-19  8:40:14
