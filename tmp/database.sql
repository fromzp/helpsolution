



-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'users'
-- Анкеты  тех кто нуждается, анкеты тех кто может помочь
-- ---

DROP TABLE IF EXISTS `users`;
		
CREATE TABLE `users` (
  `id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `email` VARCHAR(255) DEFAULT NULL,
  `password` VARCHAR(32) DEFAULT NULL,
  `language_id` INTEGER DEFAULT NULL,
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `balance` DECIMAL(10,2) DEFAULT 0,
  `reserve` DECIMAL(10,2) DEFAULT NULL,
  `admin` INTEGER DEFAULT 0,
  `session_id` INTEGER DEFAULT NULL,
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
-- Table 'user_skills'
-- 
-- ---

DROP TABLE IF EXISTS `user_skills`;
		
CREATE TABLE `user_skills` (
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
  `timestamp_create` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp_start` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `timestamp_stop` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recursive` INTEGER DEFAULT 0,
  `description` MEDIUMTEXT DEFAULT NULL,
  `report_description` MEDIUMTEXT DEFAULT NULL,
  `city_id` INTEGER DEFAULT NULL,
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
  `timestamp_create` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `profile_id` INTEGER DEFAULT NULL,
  `project_id` INTEGER DEFAULT NULL,
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
  `project_id` INTEGER DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'ci_sessions'
-- 
-- ---

DROP TABLE IF EXISTS `ci_sessions`;
		
CREATE TABLE `ci_sessions` (
  `session_id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `ip_address` VARCHAR(16) DEFAULT NULL,
  `user_agent` VARCHAR(255) DEFAULT NULL,
  `last_activity` INTEGER DEFAULT 0,
  `user_data` MEDIUMTEXT DEFAULT NULL,
  PRIMARY KEY (`session_id`)
);

-- ---
-- Table 'languages'
-- 
-- ---

DROP TABLE IF EXISTS `languages`;
		
CREATE TABLE `languages` (
  `id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `code2` CHAR(2) DEFAULT NULL,
  `code3` CHAR(3) DEFAULT NULL,
  `default` INTEGER DEFAULT 0,
  `active` INTEGER DEFAULT 1,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'language_values'
-- 
-- ---

DROP TABLE IF EXISTS `language_values`;
		
CREATE TABLE `language_values` (
  `id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `language_id` INTEGER DEFAULT NULL,
  `language_key_id` INTEGER DEFAULT NULL,
  `key_value` VARCHAR(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'language_keys'
-- 
-- ---

DROP TABLE IF EXISTS `language_keys`;
		
CREATE TABLE `language_keys` (
  `id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `key_name` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'user_details'
-- 
-- ---

DROP TABLE IF EXISTS `user_details`;
		
CREATE TABLE `user_details` (
  `id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `user_id` INTEGER DEFAULT NULL,
  `birthdate` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sex` SET('m','f') NOT NULL DEFAULT 'm',
  `marital_status` SET('married','single', 'divorced', 'widow') DEFAULT NULL,
  `education` VARCHAR(512) DEFAULT NULL,
  `help_city_id` INTEGER DEFAULT NULL,
  `about_me` MEDIUMTEXT DEFAULT NULL,
  `country_id` INTEGER DEFAULT NULL,
KEY (`id`),
KEY (`user_id`)
);

-- ---
-- Table 'countries'
-- 
-- ---

DROP TABLE IF EXISTS `countries`;
		
CREATE TABLE `countries` (
  `id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `code2` CHAR(2) DEFAULT NULL,
  `code3` CHAR(3) DEFAULT NULL,
  `name` VARCHAR(20) DEFAULT NULL,
  `phone_code` INTEGER DEFAULT NULL,
  `status` INTEGER DEFAULT 1,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'user_password_recovery'
-- 
-- ---

DROP TABLE IF EXISTS `user_password_recovery`;
		
CREATE TABLE `user_password_recovery` (
  `user_id` INTEGER AUTO_INCREMENT DEFAULT NULL,
  `hash` CHAR(32) DEFAULT NULL,
  `timeout` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`)
);

-- ---
-- Foreign Keys 
-- ---

ALTER TABLE `users` ADD FOREIGN KEY (session_id) REFERENCES `ci_sessions` (`session_id`);
ALTER TABLE `user_skills` ADD FOREIGN KEY (id_skills) REFERENCES `skills` (`id`);
ALTER TABLE `user_skills` ADD FOREIGN KEY (id_profile) REFERENCES `users` (`id`);
ALTER TABLE `energy_history` ADD FOREIGN KEY (id_profile) REFERENCES `users` (`id`);
ALTER TABLE `energy_history` ADD FOREIGN KEY (id_project) REFERENCES `project` (`id`);
ALTER TABLE `rating` ADD FOREIGN KEY (profile_id) REFERENCES `users` (`id`);
ALTER TABLE `rating` ADD FOREIGN KEY (project_id) REFERENCES `project` (`id`);
ALTER TABLE `photos` ADD FOREIGN KEY (project_id) REFERENCES `project` (`id`);
ALTER TABLE `language_values` ADD FOREIGN KEY (language_id) REFERENCES `languages` (`id`);
ALTER TABLE `language_values` ADD FOREIGN KEY (language_key_id) REFERENCES `language_keys` (`id`);
ALTER TABLE `user_details` ADD FOREIGN KEY (user_id) REFERENCES `users` (`id`);
ALTER TABLE `user_details` ADD FOREIGN KEY (help_city_id) REFERENCES `cities` (`id`);
ALTER TABLE `user_details` ADD FOREIGN KEY (country_id) REFERENCES `countries` (`id`);
ALTER TABLE `user_password_recovery` ADD FOREIGN KEY (user_id) REFERENCES `users` (`id`);

-- ---
-- Table Properties
-- ---

-- ALTER TABLE `users` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `skills` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `user_skills` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `project` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `cities` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `energy_history` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `rating` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `photos` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `ci_sessions` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `languages` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `language_values` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `language_keys` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `user_details` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `countries` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `user_password_recovery` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---

-- INSERT INTO `users` (`id`,`email`,`password`,`language_id`,`create_time`,`balance`,`reserve`,`admin`,`session_id`) VALUES
-- ('','','','','','','','','');
-- INSERT INTO `skills` (`id`,`name`) VALUES
-- ('','');
-- INSERT INTO `user_skills` (`id`,`id_skills`,`id_profile`) VALUES
-- ('','','');
-- INSERT INTO `project` (`id`,`title`,`timestamp_create`,`timestamp_start`,`timestamp_stop`,`recursive`,`description`,`report_description`,`city_id`,`access_type`,`num_participants`,`energy`) VALUES
-- ('','','','','','','','','','','','');
-- INSERT INTO `cities` (`id`,`name`) VALUES
-- ('','');
-- INSERT INTO `energy_history` (`id`,`id_profile`,`amount`,`timestamp_create`,`id_project`,`role_type`) VALUES
-- ('','','','','','');
-- INSERT INTO `rating` (`id`,`profile_id`,`project_id`,`stars`,`feedback`) VALUES
-- ('','','','','');
-- INSERT INTO `photos` (`id`,`project_id`) VALUES
-- ('','');
-- INSERT INTO `ci_sessions` (`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`) VALUES
-- ('','','','','');
-- INSERT INTO `languages` (`id`,`code2`,`code3`,`default`,`active`) VALUES
-- ('','','','','');
-- INSERT INTO `language_values` (`id`,`language_id`,`language_key_id`,`key_value`) VALUES
-- ('','','','');
-- INSERT INTO `language_keys` (`id`,`key_name`) VALUES
-- ('','');
-- INSERT INTO `user_details` (`id`,`user_id`,`birthdate`,`sex`,`marital_status`,`education`,`help_city_id`,`about_me`,`country_id`) VALUES
-- ('','','','','','','','','');
-- INSERT INTO `countries` (`id`,`code2`,`code3`,`name`,`phone_code`,`status`) VALUES
-- ('','','','','','');
-- INSERT INTO `user_password_recovery` (`user_id`,`hash`,`timeout`) VALUES
-- ('','','');


