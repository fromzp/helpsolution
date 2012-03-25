



-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'profile'
-- Анкеты  тех кто нуждается, анкеты тех кто может помочь
-- ---

DROP TABLE IF EXISTS `profile`;
		
CREATE TABLE `profile` (
  `id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `email` VARCHAR(255) DEFAULT NULL,
  `password` VARCHAR(32) DEFAULT NULL,
  `timestamp_create` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `timestamp_birthdate` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sex` INTEGER DEFAULT NULL,
  `marital_status` SET('married','single', 'divorced', 'widow') DEFAULT NULL,
  `education` VARCHAR(512) DEFAULT NULL,
  `help_city` VARCHAR(255) DEFAULT NULL,
  `profile_picture` INTEGER DEFAULT NULL,
  `about_me` MEDIUMTEXT DEFAULT NULL,
  `balance` DECIMAL(10,2) DEFAULT 0,
  `reserve` DECIMAL(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) COMMENT='Анкеты  тех кто нуждается, анкеты тех кто может помочь';

-- ---
-- Table 'skills'
-- 
-- ---

DROP TABLE IF EXISTS `skills`;
		
CREATE TABLE `skills` (
  `id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `name` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'profile_skills'
-- 
-- ---

DROP TABLE IF EXISTS `profile_skills`;
		
CREATE TABLE `profile_skills` (
  `id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `id_skills` INTEGER DEFAULT NULL,
  `id_profile` INTEGER DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'project'
-- 
-- ---

DROP TABLE IF EXISTS `project`;
		
CREATE TABLE `project` (
  `id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `title` MEDIUMTEXT DEFAULT NULL,
  `timestamp_create` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `timestamp_start` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `timestamp_stop` TIMESTAMP DEFAULT '0000-00-00 00:00:00',
  `recursive` INTEGER DEFAULT 0,
  `description` MEDIUMTEXT DEFAULT NULL,
  `report_description` MEDIUMTEXT DEFAULT NULL,
  `id_cities` INTEGER DEFAULT NULL,
  `access_type` SET('open','premoderated') DEFAULT 'premoderated',
  `num_participants` INTEGER DEFAULT 1,
  `energy` DECIMAL(0) DEFAULT 0,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'cities'
-- 
-- ---

DROP TABLE IF EXISTS `cities`;
		
CREATE TABLE `cities` (
  `id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `name` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'energy_history'
-- 
-- ---

DROP TABLE IF EXISTS `energy_history`;
		
CREATE TABLE `energy_history` (
  `id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `id_profile` INTEGER DEFAULT NULL,
  `amount` INTEGER DEFAULT NULL,
  `timestamp_create` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `id_project` INTEGER DEFAULT NULL,
  `role_type` SET('owner','participant','sponsor') DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'rating'
-- 
-- ---

DROP TABLE IF EXISTS `rating`;
		
CREATE TABLE `rating` (
  `id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `id_profile` INTEGER DEFAULT NULL,
  `id_project` INTEGER DEFAULT NULL,
  `stars` INTEGER DEFAULT NULL,
  `feedback` MEDIUMTEXT DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'photos'
-- 
-- ---

DROP TABLE IF EXISTS `photos`;
		
CREATE TABLE `photos` (
  `id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `id_project` INTEGER DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Foreign Keys 
-- ---

ALTER TABLE `profile_skills` ADD FOREIGN KEY (id_skills) REFERENCES `skills` (`id`);
ALTER TABLE `profile_skills` ADD FOREIGN KEY (id_profile) REFERENCES `profile` (`id`);
ALTER TABLE `energy_history` ADD FOREIGN KEY (id_profile) REFERENCES `profile` (`id`);
ALTER TABLE `energy_history` ADD FOREIGN KEY (id_project) REFERENCES `project` (`id`);
ALTER TABLE `rating` ADD FOREIGN KEY (id_profile) REFERENCES `profile` (`id`);
ALTER TABLE `rating` ADD FOREIGN KEY (id_project) REFERENCES `project` (`id`);
ALTER TABLE `photos` ADD FOREIGN KEY (id_project) REFERENCES `project` (`id`);

-- ---
-- Table Properties
-- ---

-- ALTER TABLE `profile` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `skills` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `profile_skills` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `project` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `cities` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `energy_history` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `rating` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `photos` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---

-- INSERT INTO `profile` (`id`,`email`,`password`,`timestamp_create`,`timestamp_birthdate`,`sex`,`marital_status`,`education`,`help_city`,`profile_picture`,`about_me`,`balance`,`reserve`) VALUES
-- ('','','','','','','','','','','','','');
-- INSERT INTO `skills` (`id`,`name`) VALUES
-- ('','');
-- INSERT INTO `profile_skills` (`id`,`id_skills`,`id_profile`) VALUES
-- ('','','');
-- INSERT INTO `project` (`id`,`title`,`timestamp_create`,`timestamp_start`,`timestamp_stop`,`recursive`,`description`,`report_description`,`id_cities`,`access_type`,`num_participants`,`energy`) VALUES
-- ('','','','','','','','','','','','');
-- INSERT INTO `cities` (`id`,`name`) VALUES
-- ('','');
-- INSERT INTO `energy_history` (`id`,`id_profile`,`amount`,`timestamp_create`,`id_project`,`role_type`) VALUES
-- ('','','','','','');
-- INSERT INTO `rating` (`id`,`id_profile`,`id_project`,`stars`,`feedback`) VALUES
-- ('','','','','');
-- INSERT INTO `photos` (`id`,`id_project`) VALUES
-- ('','');


