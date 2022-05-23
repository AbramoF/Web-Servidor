CREATE DATABASE  IF NOT EXISTS `webservidor` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `webservidor`;
-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: webservidor
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

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
-- Table structure for table `diasdasemana`
--

DROP TABLE IF EXISTS `diasdasemana`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `diasdasemana` (
  `id_dia_da_semana` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id_dia_da_semana`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diasdasemana`
--

LOCK TABLES `diasdasemana` WRITE;
/*!40000 ALTER TABLE `diasdasemana` DISABLE KEYS */;
INSERT INTO `diasdasemana` VALUES (0,'Segunda-Feira-Almoco'),(1,'Terca-Feira-Almoco'),(2,'Quarta-Feira-Almoco'),(3,'Quinta-Feira-Almoco'),(4,'Sexta-Feira-Almoco'),(5,'Segunda-Feira-Jantar'),(6,'Terca-Feira-Jantar'),(7,'Quarta-Feira-Jantar'),(8,'Quinta-Feira-Jantar'),(9,'Sexta-Feira-Jantar');
/*!40000 ALTER TABLE `diasdasemana` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `refeicoes`
--

DROP TABLE IF EXISTS `refeicoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `refeicoes` (
  `id_refeicao` int(11) NOT NULL AUTO_INCREMENT,
  `refeicao` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `fk_dia_semana` int(11) NOT NULL,
  `fk_tipo_refeicao` int(11) NOT NULL,
  PRIMARY KEY (`id_refeicao`),
  KEY `fk_dia_semana` (`fk_dia_semana`),
  KEY `fk_tipo_refeicao` (`fk_tipo_refeicao`),
  CONSTRAINT `fk_dia_semana` FOREIGN KEY (`fk_dia_semana`) REFERENCES `diasdasemana` (`id_dia_da_semana`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tipo_refeicao` FOREIGN KEY (`fk_tipo_refeicao`) REFERENCES `tiporefeicao` (`id_tipo_refeicao`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `refeicoes`
--

LOCK TABLES `refeicoes` WRITE;
/*!40000 ALTER TABLE `refeicoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `refeicoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiporefeicao`
--

DROP TABLE IF EXISTS `tiporefeicao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiporefeicao` (
  `id_tipo_refeicao` int(11) NOT NULL AUTO_INCREMENT,
  `nome_refeicao` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id_tipo_refeicao`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiporefeicao`
--

LOCK TABLES `tiporefeicao` WRITE;
/*!40000 ALTER TABLE `tiporefeicao` DISABLE KEYS */;
INSERT INTO `tiporefeicao` VALUES (0,'salada1'),(1,'salada2'),(2,'carne'),(3,'vegetariano'),(4,'acompanhamento');
/*!40000 ALTER TABLE `tiporefeicao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `senha` varchar(64) CHARACTER SET utf8mb4 NOT NULL,
  `usuario` varchar(64) CHARACTER SET utf8mb4 NOT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (0,'utfpr2022','adminru','admru'),(1,'qwe123','admin','adm');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-22 20:38:54
