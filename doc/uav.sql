/*
Navicat MySQL Data Transfer

Source Server         : lidaxiang
Source Server Version : 50713
Source Host           : localhost:3306
Source Database       : uav

Target Server Type    : MYSQL
Target Server Version : 50713
File Encoding         : 65001

Date: 2016-09-04 23:41:49
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` varchar(7) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `login_status` varchar(10) DEFAULT NULL,
  `create_time` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('2016001', 'admin', '8e9be7c0cb8d77e116792c4a1438bbb3', 'admit', null);

-- ----------------------------
-- Table structure for `dianji`
-- ----------------------------
DROP TABLE IF EXISTS `dianji`;
CREATE TABLE `dianji` (
  `id` varchar(20) NOT NULL,
  `item_no` varchar(100) DEFAULT NULL,
  `volts` varchar(4) DEFAULT NULL,
  `prop` varchar(50) DEFAULT NULL,
  `throttle` varchar(3) DEFAULT NULL,
  `amps` varchar(10) DEFAULT NULL,
  `watts` varchar(10) DEFAULT NULL,
  `thrust` varchar(10) DEFAULT NULL,
  `rpm` varchar(10) DEFAULT NULL,
  `efficiency` varchar(10) DEFAULT NULL,
  `torque` varchar(10) DEFAULT NULL,
  `oper_temperature` varchar(4) DEFAULT NULL,
  `create_time` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dianji
-- ----------------------------
INSERT INTO `dianji` VALUES ('1', '1', '10', '19', '18', '17', '16', '15', '1', '2', '3', '4', '2016-09-04 14:21:27');
INSERT INTO `dianji` VALUES ('13', '13', '10', '19', '18', '17', '16', '15', '1', '2', '3', '4', '2016-09-04 14:21:52');
