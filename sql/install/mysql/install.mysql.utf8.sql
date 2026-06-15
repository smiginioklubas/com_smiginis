CREATE TABLE IF NOT EXISTS `#__dart_clubs` (
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `city` VARCHAR(150) NOT NULL,
  `country` VARCHAR(100) DEFAULT '',
  `state` TINYINT(1) NOT NULL DEFAULT 1,
  `created` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `modified` DATETIME DEFAULT NULL,
  KEY `idx_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `#__dart_players` (
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `club_id` INT UNSIGNED DEFAULT NULL,
  `name` VARCHAR(255) NOT NULL,
  `nickname` VARCHAR(100) DEFAULT '',
  `ranking` INT UNSIGNED DEFAULT 0,
  `state` TINYINT(1) NOT NULL DEFAULT 1,
  `created` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `modified` DATETIME DEFAULT NULL,
  KEY `idx_club_id` (`club_id`),
  KEY `idx_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `#__dart_tournaments` (
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `location` VARCHAR(255) DEFAULT '',
  `start_date` DATE DEFAULT NULL,
  `end_date` DATE DEFAULT NULL,
  `state` TINYINT(1) NOT NULL DEFAULT 1,
  `created` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `modified` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `#__dart_matches` (
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `tournament_id` INT UNSIGNED DEFAULT NULL,
  `round` VARCHAR(50) DEFAULT '',
  `player_a_id` INT UNSIGNED DEFAULT NULL,
  `player_b_id` INT UNSIGNED DEFAULT NULL,
  `score_a` INT UNSIGNED DEFAULT 0,
  `score_b` INT UNSIGNED DEFAULT 0,
  `match_date` DATETIME DEFAULT NULL,
  `state` TINYINT(1) NOT NULL DEFAULT 1,
  `created` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `modified` DATETIME DEFAULT NULL,
  KEY `idx_tournament_id` (`tournament_id`),
  KEY `idx_player_a_id` (`player_a_id`),
  KEY `idx_player_b_id` (`player_b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
