-- MySQL dump 10.13  Distrib 5.1.62, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: helpsolution
-- ------------------------------------------------------
-- Server version	5.1.62-0ubuntu0.11.04.1

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
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(255) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('00697acd4ec6a8618d2c1cd8ac0bebbb','127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:12.0) Gecko/20100101 Firefox/12.0',1337232789,'a:2:{s:9:\"user_data\";s:0:\"\";s:11:\"language_id\";i:1;}'),('39185e99180bc36ee53d263ea0e60823','127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:12.0) Gecko/20100101 Firefox/12.0',1337232804,'a:2:{s:9:\"user_data\";s:0:\"\";s:11:\"language_id\";i:1;}');
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
  `code2` char(2) NOT NULL,
  `code3` char(3) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone_code` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'CC','CCK','Cocos (Keeling) Islands',672,1),(2,'KM','COM','Comoros',269,1),(3,'CI','CIV','Cote D\'Ivoire (Ivory Coast)',225,1),(4,'KI','KIR','Kiribati',686,1),(5,'KP','PRK','Korea (North)',850,1),(6,'KR','KOR','Korea (South)',82,1),(7,'MK','MKD','F.Y.R.O.M. (Macedonia)',389,1),(8,'NU','NIU','Niue',683,1),(9,'RE','REU','Reunion',262,1),(10,'RW','RWA','Rwanda',250,1),(11,'SH','SHN','St. Helena',247,1),(12,'PM','SPM','St. Pierre and Miquelon',508,1),(13,'WS','WSM','Samoa',685,1),(14,'ST','STP','Sao Tome and Principe',239,1),(15,'SJ','SJM','Svalbard & Jan Mayen Islands',47,1),(16,'TG','TGO','Togo',228,1),(17,'AX','ALA','Aland Islands',358,1),(18,'AF','AFG','Afghanistan',93,1),(19,'AL','ALB','Albania',355,1),(20,'DZ','DZA','Algeria',21,1),(21,'AS','ASM','American Samoa',684,1),(22,'AD','AND','Andorra',376,1),(23,'AO','AGO','Angola',244,1),(24,'AQ','ATA','Antarctica',672,1),(25,'AR','ARG','Argentina',54,1),(26,'AM','ARM','Armenia',374,1),(27,'AW','ABW','Aruba',297,1),(28,'AU','AUS','Australia',61,1),(29,'AT','AUT','Austria',43,1),(30,'AZ','AZE','Azerbaijan',994,1),(31,'BH','BHR','Bahrain',973,1),(32,'BD','BGD','Bangladesh',880,1),(33,'BY','BLR','Belarus',375,1),(34,'BE','BEL','Belgium',32,1),(35,'BZ','BLZ','Belize',501,1),(36,'BJ','BEN','Benin',229,1),(37,'BT','BTN','Bhutan',975,1),(38,'BO','BOL','Bolivia',591,1),(39,'BA','BIH','Bosnia and Herzegovina',387,1),(40,'BW','BWA','Botswana',267,1),(41,'BV','BVT','Bouvet Island',0,1),(42,'BR','BRA','Brazil',55,1),(43,'IO','IOT','British Indian Ocean Territory',246,1),(44,'BN','BRN','Brunei Darussalam',673,1),(45,'BG','BGR','Bulgaria',359,1),(46,'BF','BFA','Burkina Faso',226,1),(47,'BI','BDI','Burundi',257,1),(48,'KH','KHM','Cambodia',855,1),(49,'CM','CMR','Cameroon',237,1),(50,'CA','CAN','Canada',1,1),(51,'CV','CPV','Cape Verde',238,1),(52,'CF','CAF','Central African Republic',236,1),(53,'TD','TCD','Chad',235,1),(54,'CL','CHL','Chile',56,1),(55,'CN','CHN','China',86,1),(56,'CX','CXR','Christmas Island',672,1),(57,'CO','COL','Colombia',57,1),(58,'CD','COD','Congo, Democratic Republic',243,1),(59,'CG','COG','Congo',242,1),(60,'CK','COK','Cook Islands',682,1),(61,'CR','CRI','Costa Rica',506,1),(62,'HR','HRV','Croatia (Hrvatska)',385,1),(63,'CU','CUB','Cuba',53,1),(64,'CY','CYP','Cyprus',357,1),(65,'CZ','CZE','Czech Republic',420,1),(66,'DK','DNK','Denmark',45,1),(67,'DJ','DJI','Djibouti',253,1),(68,'EC','ECU','Ecuador',593,1),(69,'EG','EGY','Egypt',20,1),(70,'SV','SLV','El Salvador',503,1),(71,'GQ','GNQ','Equatorial Guinea',240,1),(72,'ER','ERI','Eritrea',291,1),(73,'EE','EST','Estonia',372,1),(74,'ET','ETH','Ethiopia',251,1),(75,'FK','FLK','Falkland Islands (Malvinas)',500,1),(76,'FO','FRO','Faroe Islands',298,1),(77,'FJ','FJI','Fiji',679,1),(78,'FI','FIN','Finland',358,1),(79,'FR','FRA','France',33,1),(80,'GF','GUF','French Guiana',594,1),(81,'PF','PYF','French Polynesia',689,1),(82,'TF','ATF','French Southern Territories',262,1),(83,'GA','GAB','Gabon',241,1),(84,'GM','GMB','Gambia',220,1),(85,'GE','GEO','Georgia',995,1),(86,'DE','DEU','Germany',49,1),(87,'GH','GHA','Ghana',233,1),(88,'GI','GIB','Gibraltar',350,1),(89,'GR','GRC','Greece',30,1),(90,'GL','GRL','Greenland',299,1),(91,'GP','GLP','Guadeloupe',590,1),(92,'GU','GUM','Guam',671,1),(93,'GT','GTM','Guatemala',502,1),(94,'GN','GIN','Guinea',224,1),(95,'GW','GNB','Guinea-Bissau',245,1),(96,'GY','GUY','Guyana',592,1),(97,'HT','HTI','Haiti',509,1),(98,'HM','HMD','Heard and McDonald Islands',0,1),(99,'HN','HND','Honduras',504,1),(100,'HK','HKG','Hong Kong',852,1),(101,'HU','HUN','Hungary',36,1),(102,'IS','ISL','Iceland',354,1),(103,'IN','IND','India',91,1),(104,'ID','IDN','Indonesia',62,1),(105,'IR','IRN','Iran',98,1),(106,'IQ','IRQ','Iraq',964,1),(107,'IE','IRL','Ireland',353,1),(108,'IL','ISR','Israel',972,1),(109,'IT','ITA','Italy',39,1),(110,'JP','JPN','Japan',81,1),(111,'JO','JOR','Jordan',962,1),(112,'KZ','KAZ','Kazakhstan',7,1),(113,'KE','KEN','Kenya',254,1),(114,'KW','KWT','Kuwait',965,1),(115,'KG','KGZ','Kyrgyzstan',996,1),(116,'LA','LAO','Laos',856,1),(117,'LV','LVA','Latvia',371,1),(118,'LB','LBN','Lebanon',961,1),(119,'LS','LSO','Lesotho',266,1),(120,'LR','LBR','Liberia',231,1),(121,'LY','LBY','Libya',21,1),(122,'LI','LIE','Liechtenstein',41,1),(123,'LT','LTU','Lithuania',370,1),(124,'LU','LUX','Luxembourg',352,1),(125,'MO','MAC','Macau',853,1),(126,'MG','MDG','Madagascar',261,1),(127,'MW','MWI','Malawi',265,1),(128,'MY','MYS','Malaysia',60,1),(129,'MV','MDV','Maldives',960,1),(130,'ML','MLI','Mali',223,1),(131,'MT','MLT','Malta',356,1),(132,'MH','MHL','Marshall Islands',692,1),(133,'MQ','MTQ','Martinique',596,1),(134,'MR','MRT','Mauritania',222,1),(135,'MU','MUS','Mauritius',230,1),(136,'YT','MYT','Mayotte',269,1),(137,'MX','MEX','Mexico',52,1),(138,'FM','FSM','Micronesia',691,1),(139,'MD','MDA','Moldova',373,1),(140,'MC','MCO','Monaco',377,1),(141,'MN','MNG','Mongolia',976,1),(142,'MA','MAR','Morocco',212,1),(143,'MZ','MOZ','Mozambique',258,1),(144,'MM','MMR','Myanmar',95,1),(145,'NA','NAM','Namibia',264,1),(146,'NR','NRU','Nauru',674,1),(147,'NP','NPL','Nepal',977,1),(148,'NL','NLD','Netherlands',31,1),(149,'AN','ANT','Netherlands Antilles',599,1),(150,'NC','NCL','New Caledonia',687,1),(151,'NZ','NZL','New Zealand (Aotearoa)',64,1),(152,'NI','NIC','Nicaragua',505,1),(153,'NE','NER','Niger',227,1),(154,'NG','NGA','Nigeria',234,1),(155,'NF','NFK','Norfolk Island',672,1),(156,'MP','MNP','Northern Mariana Islands',670,1),(157,'NO','NOR','Norway',47,1),(158,'OM','OMN','Oman',968,1),(159,'PK','PAK','Pakistan',92,1),(160,'PW','PLW','Palau',680,1),(161,'PS','PSE','Palestinian Territory, Occupied',970,1),(162,'PA','PAN','Panama',507,1),(163,'PG','PNG','Papua New Guinea',675,1),(164,'PY','PRY','Paraguay',595,1),(165,'PE','PER','Peru',51,1),(166,'PH','PHL','Philippines',63,1),(167,'PN','PCN','Pitcairn',872,1),(168,'PL','POL','Poland',48,1),(169,'PT','PRT','Portugal',351,1),(170,'QA','QAT','Qatar',974,1),(171,'RO','ROU','Romania',40,1),(172,'RU','RUS','Russian Federation',7,1),(173,'SM','SMR','San Marino',39,1),(174,'SA','SAU','Saudi Arabia',966,1),(175,'SN','SEN','Senegal',221,1),(176,'CS','SCG','Czechoslovakia (former)',0,1),(177,'SC','SYC','Seychelles',248,1),(178,'SL','SLE','Sierra Leone',232,1),(179,'SG','SGP','Singapore',65,1),(180,'SK','SVK','Slovak Republic',421,1),(181,'SI','SVN','Slovenia',386,1),(182,'SB','SLB','Solomon Islands',677,1),(183,'SO','SOM','Somalia',252,1),(184,'ZA','ZAF','South Africa',27,1),(185,'GS','SGS','S. Georgia and S. Sandwich Isls.',0,1),(186,'ES','ESP','Spain',34,1),(187,'LK','LKA','Sri Lanka',94,1),(188,'SD','SDN','Sudan',249,1),(189,'SR','SUR','Suriname',597,1),(190,'SZ','SWZ','Swaziland',268,1),(191,'SE','SWE','Sweden',46,1),(192,'CH','CHE','Switzerland',41,1),(193,'SY','SYR','Syria',963,1),(194,'TW','TWN','Taiwan',886,1),(195,'TJ','TJK','Tajikistan',992,1),(196,'TZ','TZA','Tanzania',255,1),(197,'TH','THA','Thailand',66,1),(198,'TK','TKL','Tokelau',690,1),(199,'TO','TON','Tonga',676,1),(200,'TN','TUN','Tunisia',21,1),(201,'TR','TUR','Turkey',90,1),(202,'TM','TKM','Turkmenistan',993,1),(203,'TV','TUV','Tuvalu',688,1),(204,'UG','UGA','Uganda',256,1),(205,'UA','UKR','Ukraine',380,1),(206,'AE','ARE','United Arab Emirates',971,1),(207,'GB','GBR','Great Britain (UK)',233,1),(208,'US','USA','USA',1,1),(209,'UM','UMI','US Minor Outlying Islands',699,1),(210,'UY','URY','Uruguay',598,1),(211,'UZ','UZB','Uzbekistan',998,1),(212,'VU','VUT','Vanuatu',678,1),(213,'VA','VAT','Vatican City State (Holy See)',39,1),(214,'VE','VEN','Venezuela',58,1),(215,'VN','VNM','Vietnam',84,1),(216,'WF','WLF','Wallis and Futuna Islands',681,1),(217,'EH','ESH','Western Sahara',21,1),(218,'YE','YEM','Yemen',967,1),(219,'ZM','ZMB','Zambia',260,1),(220,'ZW','ZWE','Zimbabwe',263,1),(221,'KN','KNA','Saint Kitts and Nevis',1869,1),(222,'LC','LCA','Saint Lucia',1758,1),(223,'VC','VCT','Saint Vincent & the Grenadines',1784,1),(224,'AI','AIA','Anguilla',1264,1),(225,'AG','ATG','Antigua and Barbuda',1268,1),(226,'BS','BHS','Bahamas',1242,1),(227,'BB','BRB','Barbados',1246,1),(228,'BM','BMU','Bermuda',1441,1),(229,'KY','CYM','Cayman Islands',1345,1),(230,'DM','DMA','Dominica',1767,1),(231,'DO','DOM','Dominican Republic',1809,1),(232,'GD','GRD','Grenada',1473,1),(233,'JM','JAM','Jamaica',1876,1),(234,'MS','MSR','Montserrat',1664,1),(235,'PR','PRI','Puerto Rico',1787,1),(236,'TT','TTO','Trinidad and Tobago',1868,1),(237,'TC','TCA','Turks and Caicos Islands',1649,1),(238,'VG','VGB','British Virgin Islands',1284,1),(239,'VI','VIR','Virgin Islands (U.S.)',1340,1);
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
  `key_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language_keys`
--

LOCK TABLES `language_keys` WRITE;
/*!40000 ALTER TABLE `language_keys` DISABLE KEYS */;
INSERT INTO `language_keys` VALUES (1,'homepage title'),(2,'__eng'),(3,'__rus'),(4,'__ces'),(5,'__nld'),(6,'sys_page_contact_us'),(7,'registration page title'),(8,'sign up - choose your access details: step 1 of 3'),(9,'please, enter your email'),(10,'enter your name'),(11,'please, enter your password'),(12,'retype the password'),(13,'enter words from image below'),(14,'next'),(15,'register now!'),(16,'реєстрацiя'),(17,'електрона адреса'),(18,'пароль'),(19,'повторіть пароль'),(20,'ім’я'),(21,'прізвище'),(22,'стать'),(23,'введіть код на малюнку нижче'),(24,'sys_page_about_us'),(25,'sys_page_need_help'),(26,'sys_page_can_help'),(27,'wrong request'),(28,'recaptcha'),(29,'призвисько'),(30,'the fields you missed have been highlighted'),(31,'my profile page title'),(32,'my profile title'),(33,'електрона адреса:'),(34,'пароль:'),(35,'повторіть пароль:'),(36,'cтать:'),(37,'ім’я:'),(38,'прізвище:'),(39,'user edit error');
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
  `language_id` int(11) NOT NULL,
  `language_key_id` int(11) NOT NULL,
  `key_value` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `language_id` (`language_id`,`language_key_id`),
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
  `title` longtext,
  `timestamp_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp_start` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `timestamp_stop` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recursive` int(11) DEFAULT '0',
  `description` longtext,
  `report_description` longtext,
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
  `feedback` longtext,
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
  `name` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `image` varchar(40) DEFAULT NULL,
  `birthdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sex` set('m','f') NOT NULL DEFAULT 'm',
  `marital_status` set('married','single','divorced','widow') DEFAULT NULL,
  `education` varchar(512) DEFAULT NULL,
  `help_city_id` int(11) DEFAULT NULL,
  `about_me` longtext,
  `country_id` int(11) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `user_id` (`user_id`),
  KEY `help_city_id` (`help_city_id`),
  KEY `country_id` (`country_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_details`
--

LOCK TABLES `user_details` WRITE;
/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
INSERT INTO `user_details` VALUES (7,7,'Игорёк','Lkbyyj',NULL,'0000-00-00 00:00:00','m',NULL,NULL,NULL,NULL,NULL),(17,17,'Имя','Пароль',NULL,'0000-00-00 00:00:00','m',NULL,NULL,NULL,NULL,NULL);
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
  `session_id` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COMMENT='ÐÐ½ÐºÐµÑ‚Ñ‹  Ñ‚ÐµÑ… ÐºÑ‚Ð¾ Ð½ÑƒÐ¶Ð´Ð°ÐµÑ‚ÑÑ, Ð°Ð½ÐºÐµÑ‚Ñ‹';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (7,'brr@ua.fm','c33367701511b4f6020ec61ded352059',3,'2012-04-18 12:12:28','0.00',NULL,0,'39185e99180bc36ee53d263ea0e60823'),(17,'brr2@ua.fm','c33367701511b4f6020ec61ded352059',3,'2012-05-10 05:41:45','0.00',NULL,0,'3ced9dbb8cca4c568108d932bbb5382d');
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

-- Dump completed on 2012-05-17  9:19:04
