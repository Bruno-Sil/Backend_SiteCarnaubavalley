-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_site
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.6-MariaDB

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
-- Table structure for table `empresa_startup`
--

DROP TABLE IF EXISTS `empresa_startup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa_startup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` longblob NOT NULL,
  `nome` varchar(45) NOT NULL,
  `razao_social` varchar(45) DEFAULT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `data_fundacao` date NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `descricao_curta` varchar(45) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `tags` varchar(45) NOT NULL,
  `modelo_negocio` varchar(45) NOT NULL,
  `publico_alvo` varchar(45) NOT NULL,
  `momento` varchar(45) NOT NULL,
  `segmento_principal` varchar(45) NOT NULL,
  `segmento_secundário` varchar(45) DEFAULT NULL,
  `tamanho_time` varchar(45) NOT NULL,
  `faturamento_anual` varchar(45) NOT NULL,
  `website` varchar(45) NOT NULL,
  `linkedin` varchar(45) NOT NULL,
  `facebook` varchar(45) NOT NULL,
  `app_store` varchar(45) DEFAULT NULL,
  `google_play` varchar(45) DEFAULT NULL,
  `youtube` varchar(45) DEFAULT NULL,
  `instagram` varchar(45) DEFAULT NULL,
  `cep` varchar(45) NOT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `logradouro` varchar(45) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `endereco_principal` tinyint(4) DEFAULT NULL,
  `cargo_funcao` varchar(45) NOT NULL,
  `nivel_hierarquico` varchar(45) NOT NULL,
  `login_id_login` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_empresa_startup_login1_idx` (`login_id_login`),
  CONSTRAINT `fk_empresa_startup_login1` FOREIGN KEY (`login_id_login`) REFERENCES `login` (`id_login`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa_startup`
--

LOCK TABLES `empresa_startup` WRITE;
/*!40000 ALTER TABLE `empresa_startup` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresa_startup` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-07 13:42:38
