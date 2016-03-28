USE db619302666;

DROP TABLE IF EXISTS `contacts_from_web`;

CREATE TABLE `contacts_from_web` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `courriel` varchar(100) NOT NULL, 
  `consent` tinyint(1) DEFAULT NULL,
  `consentModDate` datetime DEFAULT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

