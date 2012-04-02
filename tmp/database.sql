-- MySQL dump 10.13  Distrib 5.1.61, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: helpsolution
-- ------------------------------------------------------
-- Server version	5.1.61-0ubuntu0.10.04.1

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
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `session_id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(16) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `last_activity` int(11) DEFAULT '0',
  `user_data` mediumtext,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2147483648 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES (2,'192.168.200.120','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:11.0) Gecko/20100101 Firefox/11.0',1333357841,'a:2:{s:9:\"user_data\";s:0:\"\";s:11:\"language_id\";i:3;}'),(9816,'192.168.200.102','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.142 Safari/535.19',1333352719,''),(9817,'192.168.200.102','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.142 Safari/535.19',1333352719,''),(868,'192.168.200.102','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.142 Safari/535.19',1333352719,'a:2:{s:9:\"user_data\";s:0:\"\";s:11:\"language_id\";i:1;}'),(9818,'192.168.200.102','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.142 Safari/535.19',1333352719,''),(9819,'192.168.200.102','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.142 Safari/535.19',1333352719,''),(8,'192.168.200.102','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.142 Safari/535.19',1333352719,'a:2:{s:9:\"user_data\";s:0:\"\";s:11:\"language_id\";i:1;}'),(9820,'192.168.200.102','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.142 Safari/535.19',1333352719,''),(9821,'192.168.200.102','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.142 Safari/535.19',1333352719,''),(768710,'192.168.200.102','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.142 Safari/535.19',1333353633,'a:2:{s:9:\"user_data\";s:0:\"\";s:11:\"language_id\";i:1;}'),(2147483647,'192.168.200.120','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:11.0) Gecko/20100101 Firefox/11.0',1333357841,'a:2:{s:9:\"user_data\";s:0:\"\";s:11:\"language_id\";i:3;}');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code2` char(2) DEFAULT NULL,
  `code3` char(3) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `phone_code` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `energy_history`
--

DROP TABLE IF EXISTS `energy_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `energy_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_profile` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `timestamp_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_project` int(11) DEFAULT NULL,
  `role_type` set('owner','participant','sponsor') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_profile` (`id_profile`),
  KEY `id_project` (`id_project`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `energy_history`
--

LOCK TABLES `energy_history` WRITE;
/*!40000 ALTER TABLE `energy_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `energy_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language_keys`
--

DROP TABLE IF EXISTS `language_keys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `language_keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language_keys`
--

LOCK TABLES `language_keys` WRITE;
/*!40000 ALTER TABLE `language_keys` DISABLE KEYS */;
INSERT INTO `language_keys` VALUES (1,'homepage title'),(2,'__1'),(3,'__0'),(4,'__eng'),(5,'__rus'),(6,'__ces'),(7,'__nld');
/*!40000 ALTER TABLE `language_keys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language_values`
--

DROP TABLE IF EXISTS `language_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `language_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) DEFAULT NULL,
  `language_key_id` int(11) DEFAULT NULL,
  `key_value` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `language_id` (`language_id`),
  KEY `language_key_id` (`language_key_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language_values`
--

LOCK TABLES `language_values` WRITE;
/*!40000 ALTER TABLE `language_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `language_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code3` char(3) NOT NULL,
  `default` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `code2` char(2) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'eng',1,1,'en'),(2,'deu',0,0,'de'),(3,'rus',0,1,'ru'),(4,'bul',0,0,'bg'),(5,'ces',0,1,'cs'),(6,'dan',0,0,'da'),(7,'nld',0,1,'nl'),(8,'est',0,0,'et'),(9,'fin',0,0,'fi'),(10,'fra',0,0,'fr'),(11,'gre',0,0,'el'),(12,'hun',0,0,'hu'),(13,'gle',0,0,'ga'),(14,'ita',0,0,'it'),(15,'lav',0,0,'lv'),(16,'lit',0,0,'lt'),(17,'mlt',0,0,'mt'),(18,'pol',0,0,'pl'),(19,'por',0,0,'pt'),(20,'ron',0,0,'ro'),(21,'slk',0,0,'sk'),(22,'slv',0,0,'sl'),(23,'spa',0,0,'es'),(24,'swe',0,0,'sv');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` mediumtext,
  `timestamp_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp_start` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `timestamp_stop` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recursive` int(11) DEFAULT '0',
  `description` mediumtext,
  `report_description` mediumtext,
  `city_id` int(11) DEFAULT NULL,
  `access_type` set('open','premoderated') DEFAULT 'premoderated',
  `num_participants` int(11) DEFAULT '1',
  `energy` decimal(10,0) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `feedback` mediumtext,
  PRIMARY KEY (`id`),
  KEY `profile_id` (`profile_id`),
  KEY `project_id` (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating`
--

LOCK TABLES `rating` WRITE;
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `birthdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sex` set('m','f') NOT NULL DEFAULT 'm',
  `marital_status` set('married','single','divorced','widow') DEFAULT NULL,
  `education` varchar(512) DEFAULT NULL,
  `help_city_id` int(11) DEFAULT NULL,
  `about_me` mediumtext,
  `country_id` int(11) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `user_id` (`user_id`),
  KEY `help_city_id` (`help_city_id`),
  KEY `country_id` (`country_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_details`
--

LOCK TABLES `user_details` WRITE;
/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_password_recovery`
--

DROP TABLE IF EXISTS `user_password_recovery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_password_recovery` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `hash` char(32) DEFAULT NULL,
  `timeout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_password_recovery`
--

LOCK TABLES `user_password_recovery` WRITE;
/*!40000 ALTER TABLE `user_password_recovery` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_password_recovery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_skills`
--

DROP TABLE IF EXISTS `user_skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_skills` int(11) DEFAULT NULL,
  `id_profile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_skills` (`id_skills`),
  KEY `id_profile` (`id_profile`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_skills`
--

LOCK TABLES `user_skills` WRITE;
/*!40000 ALTER TABLE `user_skills` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `balance` decimal(10,2) DEFAULT '0.00',
  `reserve` decimal(10,2) DEFAULT NULL,
  `admin` int(11) DEFAULT '0',
  `session_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='ÐÐ½ÐºÐµÑ‚Ñ‹  Ñ‚ÐµÑ… ÐºÑ‚Ð¾ Ð½ÑƒÐ¶Ð´Ð°ÐµÑ‚ÑÑ, Ð°Ð½ÐºÐµÑ‚Ñ‹';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-04-02 12:49:21
