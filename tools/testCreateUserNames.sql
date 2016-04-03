USE db619302666;

DROP TABLE IF EXISTS `test_user_info`;

CREATE TABLE `test_user_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `courriel` varchar(100) NOT NULL UNIQUE,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `phone2` varchar(100) DEFAULT NULL,
  `consent` tinyint(1) DEFAULT NULL,
  `consentModDate` datetime DEFAULT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `test_user_info` (`nom`, `prenom`, `courriel`, `company`)
VALUES
  ('Zèbulah','Façaïde','zfadade@yahoo.com', 'ASDM Solutions, Inc'),
  ('Demontes', 'Loôsa Andée', 'mdemontes@yahoo.com', 'EnfinWeb')

