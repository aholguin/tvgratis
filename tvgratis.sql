/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50133
Source Host           : localhost:3306
Source Database       : tvgratis

Target Server Type    : MYSQL
Target Server Version : 50133
File Encoding         : 65001

Date: 2011-10-26 16:52:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `menus`
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_menu_id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `posicion` varchar(100) DEFAULT NULL,
  `layout` tinyint(1) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`,`tipo_menu_id`),
  KEY `fk_menus_tipo_menu1` (`tipo_menu_id`),
  CONSTRAINT `fk_menus_tipo_menu1` FOREIGN KEY (`tipo_menu_id`) REFERENCES `tipo_menu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='informacion y direccionamiento de todos lo menús del sitio';

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('1', '1', 'menu cabecera', 'horizontal', '1', '1');

-- ----------------------------
-- Table structure for `niveles_menu`
-- ----------------------------
DROP TABLE IF EXISTS `niveles_menu`;
CREATE TABLE `niveles_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) DEFAULT NULL,
  `menus_id` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) NOT NULL,
  `icono` varchar(45) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_links_menus` (`menus_id`),
  KEY `fk_links_links1` (`categoria_id`),
  CONSTRAINT `fk_links_menus` FOREIGN KEY (`menus_id`) REFERENCES `menus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_links_links1` FOREIGN KEY (`categoria_id`) REFERENCES `niveles_menu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1006 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of niveles_menu
-- ----------------------------
INSERT INTO `niveles_menu` VALUES ('1', null, '1', '1', 'Canales Nacionales', null, '', null, '1', '1');
INSERT INTO `niveles_menu` VALUES ('2', null, '1', '1', 'Canales Internacionales', null, '', null, '2', '1');
INSERT INTO `niveles_menu` VALUES ('3', null, '1', '1', 'Series', null, '', null, '3', '1');
INSERT INTO `niveles_menu` VALUES ('4', null, '1', '1', 'Acerca de ', null, '', null, '4', '1');
INSERT INTO `niveles_menu` VALUES ('1001', '1', '1', '2', 'Canal Caracol', null, '', null, null, '1');
INSERT INTO `niveles_menu` VALUES ('1002', '1', '1', '2', 'Canal RNC', null, '', null, null, '1');
INSERT INTO `niveles_menu` VALUES ('1003', '1', '1', '2', 'CityTV', null, '', null, null, '1');
INSERT INTO `niveles_menu` VALUES ('1004', '2', '1', '2', 'CNN', null, '', null, null, '1');
INSERT INTO `niveles_menu` VALUES ('1005', '2', '1', '2', 'Sonny', null, '', null, null, '1');

-- ----------------------------
-- Table structure for `tipo_menu`
-- ----------------------------
DROP TABLE IF EXISTS `tipo_menu`;
CREATE TABLE `tipo_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Para la construcción dinamica de los menús';

-- ----------------------------
-- Records of tipo_menu
-- ----------------------------
INSERT INTO `tipo_menu` VALUES ('1', 'Horizontal Principal', '1');

-- ----------------------------
-- Table structure for `url`
-- ----------------------------
DROP TABLE IF EXISTS `url`;
CREATE TABLE `url` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) DEFAULT NULL,
  `url` text,
  `niveles_menu_id` int(11) NOT NULL,
  `orden` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_url_niveles_menu1` (`niveles_menu_id`),
  CONSTRAINT `fk_url_niveles_menu1` FOREIGN KEY (`niveles_menu_id`) REFERENCES `niveles_menu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of url
-- ----------------------------
INSERT INTO `url` VALUES ('1', null, '<iframe allowtransparency=\"true\" src=\"http://www.sitioco.com/necesarios/rcn.php\" scrolling=\"no\" frameborder=\"0\" height=\"320\" width=\"428\" style=\"border:1px solid #000;\"></iframe>', '1002', null, '1');
INSERT INTO `url` VALUES ('2', null, null, '1002', null, '1');
INSERT INTO `url` VALUES ('3', null, '<iframe allowtransparency=\"true\" src=\"http://www.sitioco.com/necesarios/rcn.php\" scrolling=\"no\" frameborder=\"0\" height=\"320\" width=\"428\" style=\"border:1px solid #000;\"></iframe>', '1001', null, '1');
INSERT INTO `url` VALUES ('5', null, '<iframe allowtransparency=\"true\" src=\"http://www.sitioco.com/necesarios/rcn.php\" scrolling=\"no\" frameborder=\"0\" height=\"320\" width=\"428\" style=\"border:1px solid #000;\"></iframe>', '1001', null, '1');
