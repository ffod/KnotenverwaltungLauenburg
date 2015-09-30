DROP TABLE IF EXISTS `knoten_lauenburg`;
CREATE TABLE `knoten_lauenburg` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `routername` varchar(500) NULL DEFAULT NULL UNIQUE,
  `email` varchar(500) NULL DEFAULT NULL,
  `key` varchar(500) NULL DEFAULT NULL UNIQUE,
  `location` varchar(500) NULL DEFAULT NULL,
  `edit` INTEGER UNSIGNED NULL DEFAULT "0",
  `delhash` varchar(500) NULL DEFAULT NULL UNIQUE,
  PRIMARY KEY (`id`)
);

