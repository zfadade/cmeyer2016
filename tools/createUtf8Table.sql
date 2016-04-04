; 31991 is the test DB
USE db620403199l;

DROP TABLE IF EXISTS `texts`;

CREATE TABLE `texts` (
  `id` INT(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` TEXT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
