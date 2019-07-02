/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : set

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-07-02 16:51:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for map_attribute
-- ----------------------------
DROP TABLE IF EXISTS `map_attribute`;
CREATE TABLE `map_attribute` (
  `Map_ID` int(11) DEFAULT NULL,
  `Map_Attribute_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Map_Attribute_SubID` int(11) NOT NULL DEFAULT '0',
  `Map_Attribute_IMG` text,
  `Map_Attribute_Name` varchar(11) DEFAULT NULL,
  `Map_Attribute_Type` int(11) DEFAULT NULL,
  `Map_Attribute_SubType` int(11) DEFAULT NULL,
  `Map_Attribute_Active` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Map_Attribute_ID`),
  KEY `Map_ID` (`Map_ID`),
  CONSTRAINT `map_attribute_ibfk_1` FOREIGN KEY (`Map_ID`) REFERENCES `map` (`Map_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for map_path
-- ----------------------------
DROP TABLE IF EXISTS `map_path`;
CREATE TABLE `map_path` (
  `Entry` text NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Map_Attribute_ID` int(11) DEFAULT NULL,
  KEY `Map_Attribute_ID` (`Map_Attribute_ID`),
  CONSTRAINT `map_path_ibfk_1` FOREIGN KEY (`Map_Attribute_ID`) REFERENCES `map_attribute` (`Map_Attribute_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
