# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: controlephp
# Generation Time: 2016-03-07 21:19:08 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Cliente
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Cliente`;

CREATE TABLE `Cliente` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Cliente` WRITE;
/*!40000 ALTER TABLE `Cliente` DISABLE KEYS */;

INSERT INTO `Cliente` (`id`, `nome`, `email`, `telefone`)
VALUES
	(1,'João da Silva','joao@silva.com','(11) 99889-8500'),
	(2,'José Pereira da Silva','jose@pereira.com','+55 11 90897-6545'),
	(3,'Ana Maria','ana@maria.com','(11) 5050-4040');

/*!40000 ALTER TABLE `Cliente` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Pedido
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Pedido`;

CREATE TABLE `Pedido` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Pedido` WRITE;
/*!40000 ALTER TABLE `Pedido` DISABLE KEYS */;

INSERT INTO `Pedido` (`id`, `id_produto`, `id_cliente`)
VALUES
	(1,2,3),
	(2,3,2),
	(3,1,1);

/*!40000 ALTER TABLE `Pedido` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Produto
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Produto`;

CREATE TABLE `Produto` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` text,
  `preco` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Produto` WRITE;
/*!40000 ALTER TABLE `Produto` DISABLE KEYS */;

INSERT INTO `Produto` (`id`, `nome`, `descricao`, `preco`)
VALUES
	(1,'Guarda-Chuva Ronchetti Presidente Premium','Guarda-Chuva Ronchetti da Linha Premium. Compacto, com abertura e fechamento automático.',65.90),
	(2,'Sombrinha Infantil','Longa, com abertura automática, cabo de plástico duro, haste de alumínio, 8 varetas, tecido poliamida. ',14.90),
	(3,'Sombrinha Ronchetti Elegance','Longa, com abertura manual e cabo de madeira.',35.90);

/*!40000 ALTER TABLE `Produto` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
