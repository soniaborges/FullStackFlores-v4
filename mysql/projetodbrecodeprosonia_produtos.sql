-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: projetodbrecodeprosonia
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(30) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` decimal(5,2) DEFAULT NULL,
  `preco_final` decimal(5,2) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'Buquets','Rosas Vermelhas com 24 Flores',224.00,201.00,'../img/Buquet/buque24rosasvermelhas.JPG'),(2,'Buquets','Rosas Coloridas com 18 Flores',154.00,132.00,'../img/Buquet/buque_18_rosas_coloridas.JPG'),(3,'Buquets','Rosas Amarelas com 18 Flores',224.00,201.60,'../img/Buquet/buque_18_rosas_amarelas.JPG'),(4,'Buquets','Buquet Elegante com 18 Flores',138.00,135.00,'../img/Buquet/buque%20elegante.JPG'),(5,'Vasos','Vaso com Flores amarelas e brancas',194.20,155.35,'../img/vaso/amarelo%20e%20branco.JPG'),(6,'Vasos','Vaso com Flores de diversas variedades',187.00,187.00,'../img/vaso/flor_vaso_01.JPG'),(7,'Vasos','Vaso com flores de Girassol muito lindo',187.00,159.60,'../img/vaso/girassol%20vaso.JPG'),(8,'Orquideas','Phalaenophisis Branca',154.00,154.00,'../img/orquidea/branca.jpg'),(9,'Orquideas','Orquidea Cattleya Amarela',86.00,86.00,'../img/orquidea/cattleya%20amarela.JPG'),(10,'Orquideas','Orquidea Vanda Roxa',224.00,224.00,'../img/orquidea/vanda%20roxa.JPG'),(11,'Orquideas','Mini Orquidea Roxa',105.00,105.00,'../img/orquidea/mini%20orquidea.JPG'),(12,'Cestas','Cesta Cafe Azul',154.00,138.00,'../img/cesta%20cafe/cafe%20azul.JPG'),(13,'Cestas','Cesta Cafe Delicinha',154.00,154.00,'../img/cesta%20cafe/cafe%20delicia.JPG'),(14,'Cestas','Cesta Cafe Docinho',187.00,187.00,'../img/cesta%20cafe/cafe%20docinho.JPG');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-04 14:55:21
