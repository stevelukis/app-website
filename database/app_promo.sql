# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-12-12 19:35:28
# Generator: MySQL-Front 5.3  (Build 6.25)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "user"
#

CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (11,'steve','admin');
