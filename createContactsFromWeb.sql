USE db619302666;

DROP TABLE IF EXISTS `contacts_from_web`;

CREATE TABLE `contacts_from_web` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `courriel` varchar(100) NOT NULL, 
  `commentaire` varchar(500) NOT NULL, 
  `consent` tinyint(1) DEFAULT NULL,
  `webPage` varchar(25) DEFAULT NULL,
  `lang` varchar(2) DEFAULT NULL,
  `insertDate` datetime DEFAULT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

