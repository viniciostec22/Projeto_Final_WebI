CREATE DATABASE  IF NOT EXISTS `crm_academico` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
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
  `cst_gti_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_alunos_cst_gti1_idx` (`cst_gti_id`),
  CONSTRAINT `fk_alunos_cst_gti1` FOREIGN KEY (`cst_gti_id`) REFERENCES `cst_gti` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alunos`
--

LOCK TABLES `alunos` WRITE;
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` VALUES (1,'VINICIOS MATHEUS OLIVEIRA DA SILVA','20201bjl04gt0020','2020.1',1);
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cst_gti`
--

DROP TABLE IF EXISTS `cst_gti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cst_gti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cst_gti`
--

LOCK TABLES `cst_gti` WRITE;
/*!40000 ALTER TABLE `cst_gti` DISABLE KEYS */;
INSERT INTO `cst_gti` VALUES (1,'Gestão da tecnologia da Informação','fgdgdfgdfgf'),(2,'tecnico em informatica ','dddddd');
/*!40000 ALTER TABLE `cst_gti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cst_gti_has_disciplinas`
--

DROP TABLE IF EXISTS `cst_gti_has_disciplinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cst_gti_has_disciplinas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cst_gti_id` int NOT NULL,
  `disciplinas_id` int NOT NULL,
  PRIMARY KEY (`id`,`cst_gti_id`,`disciplinas_id`),
  KEY `fk_cst_gti_has_disciplinas_disciplinas1_idx` (`disciplinas_id`),
  KEY `fk_cst_gti_has_disciplinas_cst_gti_idx` (`cst_gti_id`),
  CONSTRAINT `fk_cst_gti_has_disciplinas_cst_gti` FOREIGN KEY (`cst_gti_id`) REFERENCES `cst_gti` (`id`),
  CONSTRAINT `fk_cst_gti_has_disciplinas_disciplinas1` FOREIGN KEY (`disciplinas_id`) REFERENCES `disciplinas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cst_gti_has_disciplinas`
--

LOCK TABLES `cst_gti_has_disciplinas` WRITE;
/*!40000 ALTER TABLE `cst_gti_has_disciplinas` DISABLE KEYS */;
INSERT INTO `cst_gti_has_disciplinas` VALUES (1,1,1),(2,1,2),(3,1,3),(5,2,3),(4,1,4),(6,2,4);
/*!40000 ALTER TABLE `cst_gti_has_disciplinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cst_gti_has_professores`
--

DROP TABLE IF EXISTS `cst_gti_has_professores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cst_gti_has_professores` (
  `cst_gti_id` int NOT NULL,
  `professores_id` int NOT NULL,
  PRIMARY KEY (`cst_gti_id`,`professores_id`),
  KEY `fk_cst_gti_has_professores_professores1_idx` (`professores_id`),
  KEY `fk_cst_gti_has_professores_cst_gti1_idx` (`cst_gti_id`),
  CONSTRAINT `fk_cst_gti_has_professores_cst_gti1` FOREIGN KEY (`cst_gti_id`) REFERENCES `cst_gti` (`id`),
  CONSTRAINT `fk_cst_gti_has_professores_professores1` FOREIGN KEY (`professores_id`) REFERENCES `professores` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cst_gti_has_professores`
--

LOCK TABLES `cst_gti_has_professores` WRITE;
/*!40000 ALTER TABLE `cst_gti_has_professores` DISABLE KEYS */;
/*!40000 ALTER TABLE `cst_gti_has_professores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disciplinas`
--

DROP TABLE IF EXISTS `disciplinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `disciplinas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `disciplina` varchar(45) DEFAULT NULL,
  `periodo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disciplinas`
--

LOCK TABLES `disciplinas` WRITE;
/*!40000 ALTER TABLE `disciplinas` DISABLE KEYS */;
INSERT INTO `disciplinas` VALUES (1,'Desenvolvimento WEB 1 ','4'),(2,'Engenharia de software 1','4'),(3,'Inteligencia artificial','4'),(4,'Segurança da informação','4');
/*!40000 ALTER TABLE `disciplinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professores`
--

DROP TABLE IF EXISTS `professores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `professores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `disciplinas_id` int NOT NULL,
  PRIMARY KEY (`id`,`disciplinas_id`),
  KEY `fk_professores_disciplinas1_idx` (`disciplinas_id`),
  CONSTRAINT `fk_professores_disciplinas1` FOREIGN KEY (`disciplinas_id`) REFERENCES `disciplinas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professores`
--

LOCK TABLES `professores` WRITE;
/*!40000 ALTER TABLE `professores` DISABLE KEYS */;
INSERT INTO `professores` VALUES (1,'Tiago do carmo nogueira ',1);
/*!40000 ALTER TABLE `professores` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'VINICIOS MATHEUS OLIVEIRA','SILVA','vinicios471@gmail.com','81dc9bdb52d04dc20036dbd8313ed055');
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

-- Dump completed on 2022-06-27  7:34:00
