-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: rolegame
-- ------------------------------------------------------
-- Server version	5.6.25

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

CREATE DATABASE rolegame;
USE rolegame;
--
-- Table structure for table `creature`
--

DROP TABLE IF EXISTS `creature`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `creature` (
  `idCreature` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attackPower` int(11) DEFAULT NULL,
  `lifeLevel` int(11) DEFAULT NULL,
  `weapon` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idCreature`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `creature`
--

LOCK TABLES `creature` WRITE;
/*!40000 ALTER TABLE `creature` DISABLE KEYS */;
INSERT INTO `creature` VALUES (1,'Centinela','Los poderosos Centinelas son la primera línea de defensa del Sacro Imperio. Son voluntarios que han demostrado su lealtad al Emperador y su devoción a Elrath. Han jurado proteger a sus hermanos de armas con su pesado escudo y, si es necesario, con sus vid','http://static9.cdn.ubi.com/es-ES/images/MMH6_CA_HAVEN_01_Sentineltcm2910619.jpg',2,8,'escudo'),(2,'Saetero','Se cuentan muchas historias sobre cómo Ronan Halcón, armado solamente con valor y honor, triunfó sobre los humanos señores de los clanes y los unió para formar el Imperio que llevaría su nombre. Pero sería más acertado decir que la ballesta es la auténtic','http://static9.cdn.ubi.com/es-ES/images/MMH6_CA_HAVEN_02_Crossbowmantcm2910623.jpg',1,7,'ballesta'),(3,'Grifo','Los Grifos fueros creados en la Era Mítica a partir de la espontánea fusión mágica de leones y águilas. En esa época la superficie de Ashán estaba llena de venas de dragón, restos de las guerras de los Dioses Dragón, y los animales que bebieron de estos b','http://static9.cdn.ubi.com/es-ES/images/MMH6_CA_HAVEN_03_Griffin%20copietcm2910627.jpg',3,9,'pico');
/*!40000 ALTER TABLE `creature` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-07 16:56:11
