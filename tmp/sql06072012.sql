-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2012 at 03:51 PM
-- Server version: 5.1.63
-- PHP Version: 5.3.5-1ubuntu7.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `helpsolution`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cities`
--


-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(255) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('112ad9848dc15565e9f5c1f0c4dbbe26', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:13.0) Gecko/20100101 Firefox/13.0.1', 1341578284, 'a:3:{s:9:"user_data";s:0:"";s:11:"language_id";i:3;s:7:"user_id";s:1:"7";}');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code2` char(2) NOT NULL,
  `code3` char(3) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone_code` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=240 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code2`, `code3`, `name`, `phone_code`, `status`) VALUES
(1, 'CC', 'CCK', 'Cocos (Keeling) Islands', 672, 1),
(2, 'KM', 'COM', 'Comoros', 269, 1),
(3, 'CI', 'CIV', 'Cote D''Ivoire (Ivory Coast)', 225, 1),
(4, 'KI', 'KIR', 'Kiribati', 686, 1),
(5, 'KP', 'PRK', 'Korea (North)', 850, 1),
(6, 'KR', 'KOR', 'Korea (South)', 82, 1),
(7, 'MK', 'MKD', 'F.Y.R.O.M. (Macedonia)', 389, 1),
(8, 'NU', 'NIU', 'Niue', 683, 1),
(9, 'RE', 'REU', 'Reunion', 262, 1),
(10, 'RW', 'RWA', 'Rwanda', 250, 1),
(11, 'SH', 'SHN', 'St. Helena', 247, 1),
(12, 'PM', 'SPM', 'St. Pierre and Miquelon', 508, 1),
(13, 'WS', 'WSM', 'Samoa', 685, 1),
(14, 'ST', 'STP', 'Sao Tome and Principe', 239, 1),
(15, 'SJ', 'SJM', 'Svalbard & Jan Mayen Islands', 47, 1),
(16, 'TG', 'TGO', 'Togo', 228, 1),
(17, 'AX', 'ALA', 'Aland Islands', 358, 1),
(18, 'AF', 'AFG', 'Afghanistan', 93, 1),
(19, 'AL', 'ALB', 'Albania', 355, 1),
(20, 'DZ', 'DZA', 'Algeria', 21, 1),
(21, 'AS', 'ASM', 'American Samoa', 684, 1),
(22, 'AD', 'AND', 'Andorra', 376, 1),
(23, 'AO', 'AGO', 'Angola', 244, 1),
(24, 'AQ', 'ATA', 'Antarctica', 672, 1),
(25, 'AR', 'ARG', 'Argentina', 54, 1),
(26, 'AM', 'ARM', 'Armenia', 374, 1),
(27, 'AW', 'ABW', 'Aruba', 297, 1),
(28, 'AU', 'AUS', 'Australia', 61, 1),
(29, 'AT', 'AUT', 'Austria', 43, 1),
(30, 'AZ', 'AZE', 'Azerbaijan', 994, 1),
(31, 'BH', 'BHR', 'Bahrain', 973, 1),
(32, 'BD', 'BGD', 'Bangladesh', 880, 1),
(33, 'BY', 'BLR', 'Belarus', 375, 1),
(34, 'BE', 'BEL', 'Belgium', 32, 1),
(35, 'BZ', 'BLZ', 'Belize', 501, 1),
(36, 'BJ', 'BEN', 'Benin', 229, 1),
(37, 'BT', 'BTN', 'Bhutan', 975, 1),
(38, 'BO', 'BOL', 'Bolivia', 591, 1),
(39, 'BA', 'BIH', 'Bosnia and Herzegovina', 387, 1),
(40, 'BW', 'BWA', 'Botswana', 267, 1),
(41, 'BV', 'BVT', 'Bouvet Island', 0, 1),
(42, 'BR', 'BRA', 'Brazil', 55, 1),
(43, 'IO', 'IOT', 'British Indian Ocean Territory', 246, 1),
(44, 'BN', 'BRN', 'Brunei Darussalam', 673, 1),
(45, 'BG', 'BGR', 'Bulgaria', 359, 1),
(46, 'BF', 'BFA', 'Burkina Faso', 226, 1),
(47, 'BI', 'BDI', 'Burundi', 257, 1),
(48, 'KH', 'KHM', 'Cambodia', 855, 1),
(49, 'CM', 'CMR', 'Cameroon', 237, 1),
(50, 'CA', 'CAN', 'Canada', 1, 1),
(51, 'CV', 'CPV', 'Cape Verde', 238, 1),
(52, 'CF', 'CAF', 'Central African Republic', 236, 1),
(53, 'TD', 'TCD', 'Chad', 235, 1),
(54, 'CL', 'CHL', 'Chile', 56, 1),
(55, 'CN', 'CHN', 'China', 86, 1),
(56, 'CX', 'CXR', 'Christmas Island', 672, 1),
(57, 'CO', 'COL', 'Colombia', 57, 1),
(58, 'CD', 'COD', 'Congo, Democratic Republic', 243, 1),
(59, 'CG', 'COG', 'Congo', 242, 1),
(60, 'CK', 'COK', 'Cook Islands', 682, 1),
(61, 'CR', 'CRI', 'Costa Rica', 506, 1),
(62, 'HR', 'HRV', 'Croatia (Hrvatska)', 385, 1),
(63, 'CU', 'CUB', 'Cuba', 53, 1),
(64, 'CY', 'CYP', 'Cyprus', 357, 1),
(65, 'CZ', 'CZE', 'Czech Republic', 420, 1),
(66, 'DK', 'DNK', 'Denmark', 45, 1),
(67, 'DJ', 'DJI', 'Djibouti', 253, 1),
(68, 'EC', 'ECU', 'Ecuador', 593, 1),
(69, 'EG', 'EGY', 'Egypt', 20, 1),
(70, 'SV', 'SLV', 'El Salvador', 503, 1),
(71, 'GQ', 'GNQ', 'Equatorial Guinea', 240, 1),
(72, 'ER', 'ERI', 'Eritrea', 291, 1),
(73, 'EE', 'EST', 'Estonia', 372, 1),
(74, 'ET', 'ETH', 'Ethiopia', 251, 1),
(75, 'FK', 'FLK', 'Falkland Islands (Malvinas)', 500, 1),
(76, 'FO', 'FRO', 'Faroe Islands', 298, 1),
(77, 'FJ', 'FJI', 'Fiji', 679, 1),
(78, 'FI', 'FIN', 'Finland', 358, 1),
(79, 'FR', 'FRA', 'France', 33, 1),
(80, 'GF', 'GUF', 'French Guiana', 594, 1),
(81, 'PF', 'PYF', 'French Polynesia', 689, 1),
(82, 'TF', 'ATF', 'French Southern Territories', 262, 1),
(83, 'GA', 'GAB', 'Gabon', 241, 1),
(84, 'GM', 'GMB', 'Gambia', 220, 1),
(85, 'GE', 'GEO', 'Georgia', 995, 1),
(86, 'DE', 'DEU', 'Germany', 49, 1),
(87, 'GH', 'GHA', 'Ghana', 233, 1),
(88, 'GI', 'GIB', 'Gibraltar', 350, 1),
(89, 'GR', 'GRC', 'Greece', 30, 1),
(90, 'GL', 'GRL', 'Greenland', 299, 1),
(91, 'GP', 'GLP', 'Guadeloupe', 590, 1),
(92, 'GU', 'GUM', 'Guam', 671, 1),
(93, 'GT', 'GTM', 'Guatemala', 502, 1),
(94, 'GN', 'GIN', 'Guinea', 224, 1),
(95, 'GW', 'GNB', 'Guinea-Bissau', 245, 1),
(96, 'GY', 'GUY', 'Guyana', 592, 1),
(97, 'HT', 'HTI', 'Haiti', 509, 1),
(98, 'HM', 'HMD', 'Heard and McDonald Islands', 0, 1),
(99, 'HN', 'HND', 'Honduras', 504, 1),
(100, 'HK', 'HKG', 'Hong Kong', 852, 1),
(101, 'HU', 'HUN', 'Hungary', 36, 1),
(102, 'IS', 'ISL', 'Iceland', 354, 1),
(103, 'IN', 'IND', 'India', 91, 1),
(104, 'ID', 'IDN', 'Indonesia', 62, 1),
(105, 'IR', 'IRN', 'Iran', 98, 1),
(106, 'IQ', 'IRQ', 'Iraq', 964, 1),
(107, 'IE', 'IRL', 'Ireland', 353, 1),
(108, 'IL', 'ISR', 'Israel', 972, 1),
(109, 'IT', 'ITA', 'Italy', 39, 1),
(110, 'JP', 'JPN', 'Japan', 81, 1),
(111, 'JO', 'JOR', 'Jordan', 962, 1),
(112, 'KZ', 'KAZ', 'Kazakhstan', 7, 1),
(113, 'KE', 'KEN', 'Kenya', 254, 1),
(114, 'KW', 'KWT', 'Kuwait', 965, 1),
(115, 'KG', 'KGZ', 'Kyrgyzstan', 996, 1),
(116, 'LA', 'LAO', 'Laos', 856, 1),
(117, 'LV', 'LVA', 'Latvia', 371, 1),
(118, 'LB', 'LBN', 'Lebanon', 961, 1),
(119, 'LS', 'LSO', 'Lesotho', 266, 1),
(120, 'LR', 'LBR', 'Liberia', 231, 1),
(121, 'LY', 'LBY', 'Libya', 21, 1),
(122, 'LI', 'LIE', 'Liechtenstein', 41, 1),
(123, 'LT', 'LTU', 'Lithuania', 370, 1),
(124, 'LU', 'LUX', 'Luxembourg', 352, 1),
(125, 'MO', 'MAC', 'Macau', 853, 1),
(126, 'MG', 'MDG', 'Madagascar', 261, 1),
(127, 'MW', 'MWI', 'Malawi', 265, 1),
(128, 'MY', 'MYS', 'Malaysia', 60, 1),
(129, 'MV', 'MDV', 'Maldives', 960, 1),
(130, 'ML', 'MLI', 'Mali', 223, 1),
(131, 'MT', 'MLT', 'Malta', 356, 1),
(132, 'MH', 'MHL', 'Marshall Islands', 692, 1),
(133, 'MQ', 'MTQ', 'Martinique', 596, 1),
(134, 'MR', 'MRT', 'Mauritania', 222, 1),
(135, 'MU', 'MUS', 'Mauritius', 230, 1),
(136, 'YT', 'MYT', 'Mayotte', 269, 1),
(137, 'MX', 'MEX', 'Mexico', 52, 1),
(138, 'FM', 'FSM', 'Micronesia', 691, 1),
(139, 'MD', 'MDA', 'Moldova', 373, 1),
(140, 'MC', 'MCO', 'Monaco', 377, 1),
(141, 'MN', 'MNG', 'Mongolia', 976, 1),
(142, 'MA', 'MAR', 'Morocco', 212, 1),
(143, 'MZ', 'MOZ', 'Mozambique', 258, 1),
(144, 'MM', 'MMR', 'Myanmar', 95, 1),
(145, 'NA', 'NAM', 'Namibia', 264, 1),
(146, 'NR', 'NRU', 'Nauru', 674, 1),
(147, 'NP', 'NPL', 'Nepal', 977, 1),
(148, 'NL', 'NLD', 'Netherlands', 31, 1),
(149, 'AN', 'ANT', 'Netherlands Antilles', 599, 1),
(150, 'NC', 'NCL', 'New Caledonia', 687, 1),
(151, 'NZ', 'NZL', 'New Zealand (Aotearoa)', 64, 1),
(152, 'NI', 'NIC', 'Nicaragua', 505, 1),
(153, 'NE', 'NER', 'Niger', 227, 1),
(154, 'NG', 'NGA', 'Nigeria', 234, 1),
(155, 'NF', 'NFK', 'Norfolk Island', 672, 1),
(156, 'MP', 'MNP', 'Northern Mariana Islands', 670, 1),
(157, 'NO', 'NOR', 'Norway', 47, 1),
(158, 'OM', 'OMN', 'Oman', 968, 1),
(159, 'PK', 'PAK', 'Pakistan', 92, 1),
(160, 'PW', 'PLW', 'Palau', 680, 1),
(161, 'PS', 'PSE', 'Palestinian Territory, Occupied', 970, 1),
(162, 'PA', 'PAN', 'Panama', 507, 1),
(163, 'PG', 'PNG', 'Papua New Guinea', 675, 1),
(164, 'PY', 'PRY', 'Paraguay', 595, 1),
(165, 'PE', 'PER', 'Peru', 51, 1),
(166, 'PH', 'PHL', 'Philippines', 63, 1),
(167, 'PN', 'PCN', 'Pitcairn', 872, 1),
(168, 'PL', 'POL', 'Poland', 48, 1),
(169, 'PT', 'PRT', 'Portugal', 351, 1),
(170, 'QA', 'QAT', 'Qatar', 974, 1),
(171, 'RO', 'ROU', 'Romania', 40, 1),
(172, 'RU', 'RUS', 'Russian Federation', 7, 1),
(173, 'SM', 'SMR', 'San Marino', 39, 1),
(174, 'SA', 'SAU', 'Saudi Arabia', 966, 1),
(175, 'SN', 'SEN', 'Senegal', 221, 1),
(176, 'CS', 'SCG', 'Czechoslovakia (former)', 0, 1),
(177, 'SC', 'SYC', 'Seychelles', 248, 1),
(178, 'SL', 'SLE', 'Sierra Leone', 232, 1),
(179, 'SG', 'SGP', 'Singapore', 65, 1),
(180, 'SK', 'SVK', 'Slovak Republic', 421, 1),
(181, 'SI', 'SVN', 'Slovenia', 386, 1),
(182, 'SB', 'SLB', 'Solomon Islands', 677, 1),
(183, 'SO', 'SOM', 'Somalia', 252, 1),
(184, 'ZA', 'ZAF', 'South Africa', 27, 1),
(185, 'GS', 'SGS', 'S. Georgia and S. Sandwich Isls.', 0, 1),
(186, 'ES', 'ESP', 'Spain', 34, 1),
(187, 'LK', 'LKA', 'Sri Lanka', 94, 1),
(188, 'SD', 'SDN', 'Sudan', 249, 1),
(189, 'SR', 'SUR', 'Suriname', 597, 1),
(190, 'SZ', 'SWZ', 'Swaziland', 268, 1),
(191, 'SE', 'SWE', 'Sweden', 46, 1),
(192, 'CH', 'CHE', 'Switzerland', 41, 1),
(193, 'SY', 'SYR', 'Syria', 963, 1),
(194, 'TW', 'TWN', 'Taiwan', 886, 1),
(195, 'TJ', 'TJK', 'Tajikistan', 992, 1),
(196, 'TZ', 'TZA', 'Tanzania', 255, 1),
(197, 'TH', 'THA', 'Thailand', 66, 1),
(198, 'TK', 'TKL', 'Tokelau', 690, 1),
(199, 'TO', 'TON', 'Tonga', 676, 1),
(200, 'TN', 'TUN', 'Tunisia', 21, 1),
(201, 'TR', 'TUR', 'Turkey', 90, 1),
(202, 'TM', 'TKM', 'Turkmenistan', 993, 1),
(203, 'TV', 'TUV', 'Tuvalu', 688, 1),
(204, 'UG', 'UGA', 'Uganda', 256, 1),
(205, 'UA', 'UKR', 'Ukraine', 380, 1),
(206, 'AE', 'ARE', 'United Arab Emirates', 971, 1),
(207, 'GB', 'GBR', 'Great Britain (UK)', 233, 1),
(208, 'US', 'USA', 'USA', 1, 1),
(209, 'UM', 'UMI', 'US Minor Outlying Islands', 699, 1),
(210, 'UY', 'URY', 'Uruguay', 598, 1),
(211, 'UZ', 'UZB', 'Uzbekistan', 998, 1),
(212, 'VU', 'VUT', 'Vanuatu', 678, 1),
(213, 'VA', 'VAT', 'Vatican City State (Holy See)', 39, 1),
(214, 'VE', 'VEN', 'Venezuela', 58, 1),
(215, 'VN', 'VNM', 'Vietnam', 84, 1),
(216, 'WF', 'WLF', 'Wallis and Futuna Islands', 681, 1),
(217, 'EH', 'ESH', 'Western Sahara', 21, 1),
(218, 'YE', 'YEM', 'Yemen', 967, 1),
(219, 'ZM', 'ZMB', 'Zambia', 260, 1),
(220, 'ZW', 'ZWE', 'Zimbabwe', 263, 1),
(221, 'KN', 'KNA', 'Saint Kitts and Nevis', 1869, 1),
(222, 'LC', 'LCA', 'Saint Lucia', 1758, 1),
(223, 'VC', 'VCT', 'Saint Vincent & the Grenadines', 1784, 1),
(224, 'AI', 'AIA', 'Anguilla', 1264, 1),
(225, 'AG', 'ATG', 'Antigua and Barbuda', 1268, 1),
(226, 'BS', 'BHS', 'Bahamas', 1242, 1),
(227, 'BB', 'BRB', 'Barbados', 1246, 1),
(228, 'BM', 'BMU', 'Bermuda', 1441, 1),
(229, 'KY', 'CYM', 'Cayman Islands', 1345, 1),
(230, 'DM', 'DMA', 'Dominica', 1767, 1),
(231, 'DO', 'DOM', 'Dominican Republic', 1809, 1),
(232, 'GD', 'GRD', 'Grenada', 1473, 1),
(233, 'JM', 'JAM', 'Jamaica', 1876, 1),
(234, 'MS', 'MSR', 'Montserrat', 1664, 1),
(235, 'PR', 'PRI', 'Puerto Rico', 1787, 1),
(236, 'TT', 'TTO', 'Trinidad and Tobago', 1868, 1),
(237, 'TC', 'TCA', 'Turks and Caicos Islands', 1649, 1),
(238, 'VG', 'VGB', 'British Virgin Islands', 1284, 1),
(239, 'VI', 'VIR', 'Virgin Islands (U.S.)', 1340, 1);

-- --------------------------------------------------------

--
-- Table structure for table `energy_history`
--

CREATE TABLE IF NOT EXISTS `energy_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_profile` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `timestamp_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_project` int(11) DEFAULT NULL,
  `role_type` set('owner','participant','sponsor') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_profile` (`id_profile`),
  KEY `id_project` (`id_project`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `energy_history`
--


-- --------------------------------------------------------

--
-- Table structure for table `experience_history`
--

CREATE TABLE IF NOT EXISTS `experience_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `age_begin` int(11) DEFAULT NULL,
  `age_end` int(11) DEFAULT NULL,
  `details` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `type` set('work','education') CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='User work/education  history' AUTO_INCREMENT=35 ;

--
-- Dumping data for table `experience_history`
--


-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code3` char(3) NOT NULL,
  `default` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `code2` char(2) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `code3`, `default`, `active`, `code2`) VALUES
(1, 'eng', 1, 1, 'en'),
(2, 'deu', 0, 0, 'de'),
(3, 'rus', 0, 1, 'ru'),
(4, 'bul', 0, 0, 'bg'),
(5, 'ces', 0, 1, 'cs'),
(6, 'dan', 0, 0, 'da'),
(7, 'nld', 0, 1, 'nl'),
(8, 'est', 0, 0, 'et'),
(9, 'fin', 0, 0, 'fi'),
(10, 'fra', 0, 0, 'fr'),
(11, 'gre', 0, 0, 'el'),
(12, 'hun', 0, 0, 'hu'),
(13, 'gle', 0, 0, 'ga'),
(14, 'ita', 0, 0, 'it'),
(15, 'lav', 0, 0, 'lv'),
(16, 'lit', 0, 0, 'lt'),
(17, 'mlt', 0, 0, 'mt'),
(18, 'pol', 0, 0, 'pl'),
(19, 'por', 0, 0, 'pt'),
(20, 'ron', 0, 0, 'ro'),
(21, 'slk', 0, 0, 'sk'),
(22, 'slv', 0, 0, 'sl'),
(23, 'spa', 0, 0, 'es'),
(24, 'swe', 0, 0, 'sv');

-- --------------------------------------------------------

--
-- Table structure for table `language_keys`
--

CREATE TABLE IF NOT EXISTS `language_keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=279 ;

--
-- Dumping data for table `language_keys`
--

INSERT INTO `language_keys` (`id`, `key_name`) VALUES
(1, 'homepage title'),
(2, '__eng'),
(3, '__rus'),
(4, '__ces'),
(5, '__nld'),
(6, 'sys_page_contact_us'),
(7, 'registration page title'),
(8, 'sign up - choose your access details: step 1 of 3'),
(9, 'please, enter your email'),
(10, 'enter your name'),
(11, 'please, enter your password'),
(12, 'retype the password'),
(13, 'enter words from image below'),
(14, 'next'),
(15, 'register now!'),
(16, 'реєстрацiя'),
(17, 'електрона адреса'),
(18, 'пароль'),
(19, 'повторіть пароль'),
(20, 'ім’я'),
(21, 'прізвище'),
(22, 'стать'),
(23, 'введіть код на малюнку нижче'),
(24, 'sys_page_about_us'),
(25, 'sys_page_need_help'),
(26, 'sys_page_can_help'),
(27, 'wrong request'),
(28, 'recaptcha'),
(29, 'призвисько'),
(30, 'the fields you missed have been highlighted'),
(31, 'my profile page title'),
(32, 'my profile title'),
(33, 'електрона адреса:'),
(34, 'пароль:'),
(35, 'повторіть пароль:'),
(36, 'cтать:'),
(37, 'ім’я:'),
(38, 'прізвище:'),
(39, 'user edit error'),
(40, 'afghanistan'),
(41, 'aland islands'),
(42, 'albania'),
(43, 'algeria'),
(44, 'american samoa'),
(45, 'andorra'),
(46, 'angola'),
(47, 'anguilla'),
(48, 'antarctica'),
(49, 'antigua and barbuda'),
(50, 'argentina'),
(51, 'armenia'),
(52, 'aruba'),
(53, 'australia'),
(54, 'austria'),
(55, 'azerbaijan'),
(56, 'bahamas'),
(57, 'bahrain'),
(58, 'bangladesh'),
(59, 'barbados'),
(60, 'belarus'),
(61, 'belgium'),
(62, 'belize'),
(63, 'benin'),
(64, 'bermuda'),
(65, 'bhutan'),
(66, 'bolivia'),
(67, 'bosnia and herzegovina'),
(68, 'botswana'),
(69, 'bouvet island'),
(70, 'brazil'),
(71, 'british indian ocean territory'),
(72, 'british virgin islands'),
(73, 'brunei darussalam'),
(74, 'bulgaria'),
(75, 'burkina faso'),
(76, 'burundi'),
(77, 'cambodia'),
(78, 'cameroon'),
(79, 'canada'),
(80, 'cape verde'),
(81, 'cayman islands'),
(82, 'central african republic'),
(83, 'chad'),
(84, 'chile'),
(85, 'china'),
(86, 'christmas island'),
(87, 'cocos (keeling) islands'),
(88, 'colombia'),
(89, 'comoros'),
(90, 'congo'),
(91, 'congo, democratic republic'),
(92, 'cook islands'),
(93, 'costa rica'),
(94, 'cote d''ivoire (ivory coast)'),
(95, 'croatia (hrvatska)'),
(96, 'cuba'),
(97, 'cyprus'),
(98, 'czech republic'),
(99, 'czechoslovakia (former)'),
(100, 'denmark'),
(101, 'djibouti'),
(102, 'dominica'),
(103, 'dominican republic'),
(104, 'ecuador'),
(105, 'egypt'),
(106, 'el salvador'),
(107, 'equatorial guinea'),
(108, 'eritrea'),
(109, 'estonia'),
(110, 'ethiopia'),
(111, 'f.y.r.o.m. (macedonia)'),
(112, 'falkland islands (malvinas)'),
(113, 'faroe islands'),
(114, 'fiji'),
(115, 'finland'),
(116, 'france'),
(117, 'french guiana'),
(118, 'french polynesia'),
(119, 'french southern territories'),
(120, 'gabon'),
(121, 'gambia'),
(122, 'georgia'),
(123, 'germany'),
(124, 'ghana'),
(125, 'gibraltar'),
(126, 'great britain (uk)'),
(127, 'greece'),
(128, 'greenland'),
(129, 'grenada'),
(130, 'guadeloupe'),
(131, 'guam'),
(132, 'guatemala'),
(133, 'guinea'),
(134, 'guinea-bissau'),
(135, 'guyana'),
(136, 'haiti'),
(137, 'heard and mcdonald islands'),
(138, 'honduras'),
(139, 'hong kong'),
(140, 'hungary'),
(141, 'iceland'),
(142, 'india'),
(143, 'indonesia'),
(144, 'iran'),
(145, 'iraq'),
(146, 'ireland'),
(147, 'israel'),
(148, 'italy'),
(149, 'jamaica'),
(150, 'japan'),
(151, 'jordan'),
(152, 'kazakhstan'),
(153, 'kenya'),
(154, 'kiribati'),
(155, 'korea (north)'),
(156, 'korea (south)'),
(157, 'kuwait'),
(158, 'kyrgyzstan'),
(159, 'laos'),
(160, 'latvia'),
(161, 'lebanon'),
(162, 'lesotho'),
(163, 'liberia'),
(164, 'libya'),
(165, 'liechtenstein'),
(166, 'lithuania'),
(167, 'luxembourg'),
(168, 'macau'),
(169, 'madagascar'),
(170, 'malawi'),
(171, 'malaysia'),
(172, 'maldives'),
(173, 'mali'),
(174, 'malta'),
(175, 'marshall islands'),
(176, 'martinique'),
(177, 'mauritania'),
(178, 'mauritius'),
(179, 'mayotte'),
(180, 'mexico'),
(181, 'micronesia'),
(182, 'moldova'),
(183, 'monaco'),
(184, 'mongolia'),
(185, 'montserrat'),
(186, 'morocco'),
(187, 'mozambique'),
(188, 'myanmar'),
(189, 'namibia'),
(190, 'nauru'),
(191, 'nepal'),
(192, 'netherlands'),
(193, 'netherlands antilles'),
(194, 'new caledonia'),
(195, 'new zealand (aotearoa)'),
(196, 'nicaragua'),
(197, 'niger'),
(198, 'nigeria'),
(199, 'niue'),
(200, 'norfolk island'),
(201, 'northern mariana islands'),
(202, 'norway'),
(203, 'oman'),
(204, 'pakistan'),
(205, 'palau'),
(206, 'palestinian territory, occupied'),
(207, 'panama'),
(208, 'papua new guinea'),
(209, 'paraguay'),
(210, 'peru'),
(211, 'philippines'),
(212, 'pitcairn'),
(213, 'poland'),
(214, 'portugal'),
(215, 'puerto rico'),
(216, 'qatar'),
(217, 'reunion'),
(218, 'romania'),
(219, 'russian federation'),
(220, 'rwanda'),
(221, 's. georgia and s. sandwich isls.'),
(222, 'saint kitts and nevis'),
(223, 'saint lucia'),
(224, 'saint vincent & the grenadines'),
(225, 'samoa'),
(226, 'san marino'),
(227, 'sao tome and principe'),
(228, 'saudi arabia'),
(229, 'senegal'),
(230, 'seychelles'),
(231, 'sierra leone'),
(232, 'singapore'),
(233, 'slovak republic'),
(234, 'slovenia'),
(235, 'solomon islands'),
(236, 'somalia'),
(237, 'south africa'),
(238, 'spain'),
(239, 'sri lanka'),
(240, 'st. helena'),
(241, 'st. pierre and miquelon'),
(242, 'sudan'),
(243, 'suriname'),
(244, 'svalbard & jan mayen islands'),
(245, 'swaziland'),
(246, 'sweden'),
(247, 'switzerland'),
(248, 'syria'),
(249, 'taiwan'),
(250, 'tajikistan'),
(251, 'tanzania'),
(252, 'thailand'),
(253, 'togo'),
(254, 'tokelau'),
(255, 'tonga'),
(256, 'trinidad and tobago'),
(257, 'tunisia'),
(258, 'turkey'),
(259, 'turkmenistan'),
(260, 'turks and caicos islands'),
(261, 'tuvalu'),
(262, 'uganda'),
(263, 'ukraine'),
(264, 'united arab emirates'),
(265, 'uruguay'),
(266, 'us minor outlying islands'),
(267, 'usa'),
(268, 'uzbekistan'),
(269, 'vanuatu'),
(270, 'vatican city state (holy see)'),
(271, 'venezuela'),
(272, 'vietnam'),
(273, 'virgin islands (u.s.)'),
(274, 'wallis and futuna islands'),
(275, 'western sahara'),
(276, 'yemen'),
(277, 'zambia'),
(278, 'zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `language_values`
--

CREATE TABLE IF NOT EXISTS `language_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) NOT NULL,
  `language_key_id` int(11) NOT NULL,
  `key_value` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `language_id` (`language_id`,`language_key_id`),
  KEY `language_key_id` (`language_key_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `language_values`
--


-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `photos`
--


-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `project`
--


-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `feedback` longtext,
  PRIMARY KEY (`id`),
  KEY `profile_id` (`profile_id`),
  KEY `project_id` (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `rating`
--


-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `skills`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='ÐÐ½ÐºÐµÑ‚Ñ‹  Ñ‚ÐµÑ… ÐºÑ‚Ð¾ Ð½ÑƒÐ¶Ð´Ð°ÐµÑ‚ÑÑ, Ð°Ð½ÐºÐµÑ‚Ñ‹' AUTO_INCREMENT=31 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `language_id`, `create_time`, `balance`, `reserve`, `admin`, `session_id`) VALUES
(7, 'brr@ua.fm', 'c33367701511b4f6020ec61ded352059', 3, '2012-04-18 15:12:28', '0.00', NULL, 0, '112ad9848dc15565e9f5c1f0c4dbbe26'),
(17, 'brr2@ua.fm', 'c33367701511b4f6020ec61ded352059', 3, '2012-05-10 08:41:45', '0.00', NULL, 0, '6999d75b20d9281eb0e2fb70f809f555'),
(26, 'brr3@ua.fm', 'c33367701511b4f6020ec61ded352059', 1, '2012-05-17 14:24:08', '0.00', NULL, 0, '6999d75b20d9281eb0e2fb70f809f555'),
(27, 'brr4@ua.fm', 'c33367701511b4f6020ec61ded352059', 1, '2012-05-18 08:15:37', '0.00', NULL, 0, '90ecacd4ef6b021a4042dc67f1ef37d6'),
(28, 'brr5@ua.fm', 'c33367701511b4f6020ec61ded352059', 1, '2012-05-20 12:24:27', '0.00', NULL, 0, '7967cdf1a01877d43a3eacc777cde6cc'),
(29, 'anna@anna.com', 'c33367701511b4f6020ec61ded352059', 1, '2012-06-21 13:15:50', '0.00', NULL, 0, '0b0d3966db25de804b93fb612aec20cb'),
(30, 'brr6@ua.fm', 'c33367701511b4f6020ec61ded352059', 1, '2012-06-21 13:36:07', '0.00', NULL, 0, '6999d75b20d9281eb0e2fb70f809f555');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
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
  `purpose` set('need_help','can_help') DEFAULT NULL,
  `current_status` varchar(20) DEFAULT NULL,
  `availability` int(11) DEFAULT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `user_id` (`user_id`),
  KEY `help_city_id` (`help_city_id`),
  KEY `country_id` (`country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `name`, `lastname`, `image`, `birthdate`, `sex`, `marital_status`, `education`, `help_city_id`, `about_me`, `country_id`, `purpose`, `current_status`, `availability`, `city_name`) VALUES
(7, 7, 'Сергей', 'Первый', '81dbece7f82a655ea39bfeb7a9266f5b.jpg', '1986-02-14 00:00:00', 'm', '', NULL, NULL, NULL, 18, NULL, NULL, NULL, NULL),
(17, 17, 'Имя', 'Пароль', 'c2158818828be9c71e70eb9b4abce8db.jpg', '0000-00-00 00:00:00', 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 26, 'Игорь', 'Третий', 'c2158818828be9c71e70eb9b4abce8db.jpg', '1986-02-14 00:00:00', 'm', 'single', NULL, NULL, NULL, 205, 'need_help', 'На звязку', NULL, 'Запорожье'),
(27, 27, 'Игорь4', 'тотже', NULL, '0000-00-00 00:00:00', 'm', NULL, NULL, NULL, NULL, NULL, 'can_help', NULL, NULL, NULL),
(28, 28, '654321', '654321', NULL, '0000-00-00 00:00:00', 'm', NULL, NULL, NULL, NULL, NULL, 'can_help', NULL, NULL, NULL),
(29, 29, 'Алина', 'Астамарафарова', 'dacc9dcac57cd41d234a78eab069ab4d.jpg', '0000-00-00 00:00:00', 'f', NULL, NULL, NULL, NULL, NULL, 'can_help', NULL, NULL, NULL),
(30, 30, 'Игорь', 'Приходько', 'c2158818828be9c71e70eb9b4abce8db.jpg', '0000-00-00 00:00:00', 'm', NULL, NULL, NULL, NULL, NULL, 'need_help', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_password_recovery`
--

CREATE TABLE IF NOT EXISTS `user_password_recovery` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `hash` char(32) DEFAULT NULL,
  `timeout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_password_recovery`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_skills`
--

CREATE TABLE IF NOT EXISTS `user_skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_skills` int(11) DEFAULT NULL,
  `id_profile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_skills` (`id_skills`),
  KEY `id_profile` (`id_profile`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_skills`
--

