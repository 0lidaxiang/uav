/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50713
Source Host           : localhost:3306
Source Database       : uav

Target Server Type    : MYSQL
Target Server Version : 50713
File Encoding         : 65001

Date: 2017-02-13 18:48:14
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
  `item_no` varchar(20) NOT NULL,
  `style` varchar(50) DEFAULT NULL,
  `kv` varchar(100) DEFAULT NULL,
  `amps` varchar(4) DEFAULT NULL,
  `volts` varchar(50) DEFAULT NULL,
  `force` varchar(3) DEFAULT NULL,
  `bestAmps` varchar(10) DEFAULT NULL,
  `bestForce` varchar(10) DEFAULT NULL,
  `oper_temperature` varchar(4) DEFAULT NULL,
  `jiangSize` varchar(10) DEFAULT NULL,
  `create_time` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`item_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dianji
-- ----------------------------
