-- MySQL dump 10.13  Distrib 5.1.61, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: onlineskema
-- ------------------------------------------------------
-- Server version	5.1.61-0ubuntu0.11.04.1

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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-04-18 14:42:11
