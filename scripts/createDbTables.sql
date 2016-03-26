-- USE db619302666;

DROP TABLE IF EXISTS `user_info`;

CREATE TABLE `user_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL UNIQUE,
  `userCompany` varchar(50) DEFAULT NULL,
  `consent` tinyint(1) DEFAULT NULL,
  `consentModDate` datetime DEFAULT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `user_info` (`userName`, `userEmail`, `userCompany`)
VALUES
  ('Zebulah','zfadade@yahoo.com', 'ASDM Solutions, Inc'),
  ('Louisa','mdemontes@yahoo.com', 'EnfinDS')

