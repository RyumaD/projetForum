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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES (1,'Yo','fouille33','blblbl66'),(2,'Yo','pppp','blblbl66'),(3,'dsqdqs','','dsqds'),(4,'','',''),(5,'dsdsd','dsd','dsd'),(6,'hellomother','mamanlakaaris','ethanolsuper66@hotmom.fr'),(7,'hellomother','mamanlakaaris','ethanolsuper66@hotmom.fr'),(8,'hellomother','yalespompierquibrule','albertfranck@einstein.fr'),(9,'hellomother','jjkhjjhhjlhj','albertfranck@einstein.fr'),(10,'hellomother','fldsogkdfog','ofkgdfkg@fgifgjf.fr'),(11,'hellomother','azertyuiop','albertfranck@einstein.fr'),(12,'hellomother','azertyuiop','albertfranck@einstein.fr'),(13,'hellomother','azertyuiop','albertfranck@einstein.fr'),(14,'hellomother','azertyuiop','albertfranck@einstein.fr'),(15,'hellomother','azertyuiop','albertfranck@einstein.fr'),(16,'hellomother','azertyuiop','albertfranck@einstein.fr'),(17,'hellomother','azertyuiop','albertfranck@einstein.fr'),(18,'hellomother','azertyuiop','albertfranck@einstein.fr'),(19,'hellomother','azertyuiop','albertfranck@einstein.fr'),(20,'azerty','azertyuiop','albertfrack@einstein.fr'),(21,'toutou','azertyuiop','toutou@lebonchien.fr'),(22,'welcome','disneyland','disnay@land.eu');
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

-- Dump completed on 2017-07-10 16:58:15
