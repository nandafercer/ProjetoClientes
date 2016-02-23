/*
MySQL Backup
Source Server Version: 5.7.11
Source Database: gestaoclientes
Date: 22/02/2016 22:44:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `cliente`
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `dtnascimento` date NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` decimal(11,0) DEFAULT NULL,
  `celular` decimal(11,0) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `senha` point DEFAULT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `cliente` VALUES ('16001','Fernanda Cerqueira ','1987-03-22',NULL,'nandacer',NULL,'24992358333',NULL,NULL), ('16002','Fernanda Ferreira','1987-03-22',NULL,'nandafer',NULL,'24992358333',NULL,NULL);
