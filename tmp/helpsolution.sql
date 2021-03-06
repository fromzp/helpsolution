-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 19 2012 г., 14:46
-- Версия сервера: 5.1.61
-- Версия PHP: 5.3.5-1ubuntu7.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `helpsolution`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `cities`
--


-- --------------------------------------------------------

--
-- Структура таблицы `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0c2200e519059ff7289b36becfa0926d', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:11.0) Gecko/20100101 Firefox/11.0', 1334829300, 'a:2:{s:9:"user_data";s:0:"";s:11:"language_id";i:3;}'),
('fc0c1841c07ad803c08b18d2e3883ee7', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:11.0) Gecko/20100101 Firefox/11.0', 1334834325, 'a:2:{s:9:"user_data";s:0:"";s:11:"language_id";i:3;}'),
('eac97a57a98c8cdfe297f460cf45cb6a', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:11.0) Gecko/20100101 Firefox/11.0 FirePHP/0.7.1', 1334829463, 'a:3:{s:9:"user_data";s:0:"";s:11:"language_id";i:3;s:7:"user_id";i:9;}'),
('96ab08416627ec1b97cb008210f91222', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:11.0) Gecko/20100101 Firefox/11.0 FirePHP/0.7.1', 1334829463, 'a:2:{s:9:"user_data";s:0:"";s:11:"language_id";i:3;}');

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
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
-- Дамп данных таблицы `countries`
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
-- Структура таблицы `energy_history`
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `energy_history`
--


-- --------------------------------------------------------

--
-- Структура таблицы `languages`
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
-- Дамп данных таблицы `languages`
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
-- Структура таблицы `language_keys`
--

CREATE TABLE IF NOT EXISTS `language_keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Дамп данных таблицы `language_keys`
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
(30, 'the fields you missed have been highlighted');

-- --------------------------------------------------------

--
-- Структура таблицы `language_values`
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
-- Дамп данных таблицы `language_values`
--


-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `photos`
--


-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE IF NOT EXISTS `project` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `project`
--


-- --------------------------------------------------------

--
-- Структура таблицы `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `feedback` mediumtext,
  PRIMARY KEY (`id`),
  KEY `profile_id` (`profile_id`),
  KEY `project_id` (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `rating`
--


-- --------------------------------------------------------

--
-- Структура таблицы `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `skills`
--


-- --------------------------------------------------------

--
-- Структура таблицы `users`
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
  `session_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='ÐÐ½ÐºÐµÑ‚Ñ‹  Ñ‚ÐµÑ… ÐºÑ‚Ð¾ Ð½ÑƒÐ¶Ð´Ð°ÐµÑ‚ÑÑ, Ð°Ð½ÐºÐµÑ‚Ñ‹' AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `language_id`, `create_time`, `balance`, `reserve`, `admin`, `session_id`) VALUES
(8, '2brr@ua.fm', 'c33367701511b4f6020ec61ded352059', 1, '2012-04-19 09:03:02', '0.00', NULL, 0, 18),
(7, 'brr@ua.fm', 'c33367701511b4f6020ec61ded352059', 3, '2012-04-18 15:12:28', '0.00', NULL, 0, 605969),
(9, '3brr@ua.fm', 'c33367701511b4f6020ec61ded352059', 3, '2012-04-19 12:57:43', '0.00', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `name`, `lastname`, `birthdate`, `sex`, `marital_status`, `education`, `help_city_id`, `about_me`, `country_id`) VALUES
(7, 7, 'igor', 'myname', '0000-00-00 00:00:00', 'm', NULL, NULL, NULL, NULL, NULL),
(8, 8, 'igor', 'myname', '0000-00-00 00:00:00', 'm', NULL, NULL, NULL, NULL, NULL),
(9, 9, 'igor', 'myname', '0000-00-00 00:00:00', 'm', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `user_password_recovery`
--

CREATE TABLE IF NOT EXISTS `user_password_recovery` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `hash` char(32) DEFAULT NULL,
  `timeout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `user_password_recovery`
--


-- --------------------------------------------------------

--
-- Структура таблицы `user_skills`
--

CREATE TABLE IF NOT EXISTS `user_skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_skills` int(11) DEFAULT NULL,
  `id_profile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_skills` (`id_skills`),
  KEY `id_profile` (`id_profile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `user_skills`
--

