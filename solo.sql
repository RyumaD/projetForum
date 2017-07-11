-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: forum
-- ------------------------------------------------------
-- Server version	5.6.35

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
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `user` varchar(255) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `texte` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES ('jotaro','2017-07-11 16:01:28','yosh','azertyuio','Classe'),('jotaro','2017-07-11 16:06:00','azerty','azertyuio','Classe');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repmessage`
--

DROP TABLE IF EXISTS `repmessage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repmessage` (
  `user` varchar(255) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `texte` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repmessage`
--

LOCK TABLES `repmessage` WRITE;
/*!40000 ALTER TABLE `repmessage` DISABLE KEYS */;
INSERT INTO `repmessage` VALUES ('toutou','2017-07-11 15:22:26','yo',NULL,NULL),('toutou','2017-07-11 15:26:27','yo',NULL,NULL),('toutou','2017-07-11 15:29:53','yo',NULL,NULL),('toutou','2017-07-11 15:30:04','yosh','',NULL),('toutou','2017-07-11 15:30:26','yosh','',NULL),('toutou','2017-07-11 15:30:38','yosh itadakimas','',''),('toutou','2017-07-11 15:31:52','yo','',''),('toutou','2017-07-11 15:32:15','comment tu vas?','',''),('jotaro','2017-07-11 15:36:51','yo','',''),('jotaro','2017-07-11 15:37:05','yo','',''),('jotaro','2017-07-11 15:37:13','yo','',''),('jotaro','2017-07-11 15:38:08','azertyu','',''),('jotaro','2017-07-11 15:38:27','azertyu','',''),('jotaro','2017-07-11 15:42:11','azert','Classe','hello'),('jotaro','2017-07-11 15:42:18','azertyui','Classe','hello'),('jotaro','2017-07-11 15:42:24','azertyu','Classe','ceci'),('toutou','2017-07-11 15:43:26','azerty','Classe','ceci'),('toutou','2017-07-11 15:43:38','azertyuio','Classe','hello'),('toutou','2017-07-11 15:47:53','yo','Histoire','hello'),('toutou','2017-07-11 15:56:40','dddddd','Histoire','hello'),('toutou','2017-07-11 15:59:45','azertyuio','Classe','yortrt'),('jotaro','2017-07-11 16:01:54','ss','Classe','yosh'),('jotaro','2017-07-11 16:06:08','azertyu','Classe','azerty');
/*!40000 ALTER TABLE `repmessage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `pword` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES (1,'toutou','azertyuiop','toutou@lebonchien.fr',NULL),(2,'jotaro','azertyuiop','azerty@azerty.fr',NULL);
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-11 17:02:48
