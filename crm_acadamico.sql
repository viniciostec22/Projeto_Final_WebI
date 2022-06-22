CREATE DATABASE  IF NOT EXISTS `crm_academico` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `crm_academico`;
-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: crm_academico
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.20.04.3

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
-- Table structure for table `Cst_gti`
--

DROP TABLE IF EXISTS `Cst_gti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Cst_gti` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nome_curso` varchar(45) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cst_gti`
--

LOCK TABLES `Cst_gti` WRITE;
/*!40000 ALTER TABLE `Cst_gti` DISABLE KEYS */;
/*!40000 ALTER TABLE `Cst_gti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Cst_has_Disciplinas`
--

DROP TABLE IF EXISTS `Cst_has_Disciplinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Cst_has_Disciplinas` (
  `Cst_id` int unsigned NOT NULL,
  `Disciplinas_id` int unsigned NOT NULL,
  PRIMARY KEY (`Cst_id`,`Disciplinas_id`),
  KEY `fk_Cst_has_Disciplinas_Disciplinas1_idx` (`Disciplinas_id`),
  KEY `fk_Cst_has_Disciplinas_Cst1_idx` (`Cst_id`),
  CONSTRAINT `fk_Cst_has_Disciplinas_Cst1` FOREIGN KEY (`Cst_id`) REFERENCES `Cst_gti` (`id`),
  CONSTRAINT `fk_Cst_has_Disciplinas_Disciplinas1` FOREIGN KEY (`Disciplinas_id`) REFERENCES `Disciplinas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cst_has_Disciplinas`
--

LOCK TABLES `Cst_has_Disciplinas` WRITE;
/*!40000 ALTER TABLE `Cst_has_Disciplinas` DISABLE KEYS */;
/*!40000 ALTER TABLE `Cst_has_Disciplinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Disciplinas`
--

DROP TABLE IF EXISTS `Disciplinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Disciplinas` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nome_disciplina` varchar(45) DEFAULT NULL,
  `periodo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Disciplinas`
--

LOCK TABLES `Disciplinas` WRITE;
/*!40000 ALTER TABLE `Disciplinas` DISABLE KEYS */;
/*!40000 ALTER TABLE `Disciplinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Professores`
--

DROP TABLE IF EXISTS `Professores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Professores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `disciplina` varchar(45) DEFAULT NULL,
  `periodo` varchar(45) DEFAULT NULL,
  `Disciplinas_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Professores_Disciplinas_idx` (`Disciplinas_id`),
  CONSTRAINT `fk_Professores_Disciplinas` FOREIGN KEY (`Disciplinas_id`) REFERENCES `Disciplinas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Professores`
--

LOCK TABLES `Professores` WRITE;
/*!40000 ALTER TABLE `Professores` DISABLE KEYS */;
/*!40000 ALTER TABLE `Professores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alunos`
--

DROP TABLE IF EXISTS `alunos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alunos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `matricula` varchar(45) DEFAULT NULL,
  `periodo_entrada` varchar(45) DEFAULT NULL,
  `Cst_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_alunos_Cst1_idx` (`Cst_id`),
  CONSTRAINT `fk_alunos_Cst1` FOREIGN KEY (`Cst_id`) REFERENCES `Cst_gti` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alunos`
--

LOCK TABLES `alunos` WRITE;
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alunos_has_Disciplinas`
--

DROP TABLE IF EXISTS `alunos_has_Disciplinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alunos_has_Disciplinas` (
  `alunos_id` int NOT NULL,
  `Disciplinas_id` int unsigned NOT NULL,
  PRIMARY KEY (`alunos_id`,`Disciplinas_id`),
  KEY `fk_alunos_has_Disciplinas_Disciplinas1_idx` (`Disciplinas_id`),
  KEY `fk_alunos_has_Disciplinas_alunos1_idx` (`alunos_id`),
  CONSTRAINT `fk_alunos_has_Disciplinas_alunos1` FOREIGN KEY (`alunos_id`) REFERENCES `alunos` (`id`),
  CONSTRAINT `fk_alunos_has_Disciplinas_Disciplinas1` FOREIGN KEY (`Disciplinas_id`) REFERENCES `Disciplinas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alunos_has_Disciplinas`
--

LOCK TABLES `alunos_has_Disciplinas` WRITE;
/*!40000 ALTER TABLE `alunos_has_Disciplinas` DISABLE KEYS */;
/*!40000 ALTER TABLE `alunos_has_Disciplinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (6,'Vinicios Matheus ','oliveira da silva','vinicios471@gmail.com','81dc9bdb52d04dc20036dbd8313ed055'),(7,'VINICIOS MATHEUS OLIVEIRA','SILVA','vinicios471@gmail.com','8c04100d32d5021e53e626b3528b9a2d'),(8,'thiago nogueira','','','d41d8cd98f00b204e9800998ecf8427e'),(9,'Tiago','','','d41d8cd98f00b204e9800998ecf8427e');
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

-- Dump completed on 2022-06-22 12:47:15
