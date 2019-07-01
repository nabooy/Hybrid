SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `auth`;
CREATE TABLE `auth` (
  `UserID` bigint(11) NOT NULL AUTO_INCREMENT,
  `Auth_Username` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Auth_Password` varchar(255) DEFAULT NULL,
  `Auth_Status` int(11) DEFAULT '0',
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
INSERT INTO `auth` VALUES ('1', 'admin', 'admin123', '0');
