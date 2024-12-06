-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: itsnu
-- ------------------------------------------------------
-- Server version	8.0.36

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
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mahasiswa` (
  `NIM` char(12) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Jekel` enum('LK','PR') NOT NULL,
  `Kelas` varchar(25) NOT NULL,
  `Angkatan` varchar(25) NOT NULL,
  `Semester` varchar(25) NOT NULL,
  `Web` int DEFAULT NULL,
  `BD` int DEFAULT NULL,
  `Mobile` int DEFAULT NULL,
  PRIMARY KEY (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa`
--

LOCK TABLES `mahasiswa` WRITE;
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` VALUES ('10220034','Muhammad Dayyan Syauqi','LK','IM23A','2023','3',NULL,NULL,NULL),('102230025','Ilham Sejahterawan','LK','IM23A','2023','2',85,78,87),('102230035','Dwi Putri','PR','IM23A','2023','2',78,85,75),('102230045','Adri Lathif','LK','IM23A','2023','2',89,65,45),('102240034','Yasmin Amanda','PR','IM24B','2024','1',NULL,NULL,NULL);
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-07  0:55:57
