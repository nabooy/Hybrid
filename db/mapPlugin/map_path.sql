/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : set

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-07-02 16:51:40
*/

SET FOREIGN_KEY_CHECKS=0;

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
