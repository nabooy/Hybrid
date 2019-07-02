/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : set

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-07-02 16:51:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for map
-- ----------------------------
DROP TABLE IF EXISTS `map`;
CREATE TABLE `map` (
  `Map_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Map_SetID` text NOT NULL,
  `Map_SubID` int(11) DEFAULT '0',
  PRIMARY KEY (`Map_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;
