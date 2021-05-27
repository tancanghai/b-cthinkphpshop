/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : shop

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 28/05/2021 03:26:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tps_article
-- ----------------------------
DROP TABLE IF EXISTS `tps_article`;
CREATE TABLE `tps_article`  (
  `article_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `cate_id` int(11) DEFAULT NULL COMMENT '栏目ID',
  `title` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '标题',
  `author` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '作者',
  `keywords` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '关键词',
  `description` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '描述',
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '邮箱',
  `link_url` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '跳转链接',
  `thumb` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '缩略图',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '内容',
  `content_img` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '文章内容图片',
  `show_top` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否置顶',
  `show_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '是否显示',
  `create_time` int(10) DEFAULT NULL,
  `update_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`article_id`) USING BTREE,
  INDEX `title`(`title`) USING BTREE,
  INDEX `keywords`(`keywords`) USING BTREE,
  INDEX `cate_id`(`cate_id`) USING BTREE,
  CONSTRAINT `cate_id` FOREIGN KEY (`cate_id`) REFERENCES `tps_cate` (`cate_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tps_article
-- ----------------------------
INSERT INTO `tps_article` VALUES (4, 7, '系统分类文章11', '系统分类文章11', '系统分类文章11', 'miaoshu', '1131534180@qq.com', 'www.11.com', NULL, '<p><img src=\"/ueditor/php/upload/image/20210521/1621527491151545.jpg\" title=\"1621527491151545.jpg\" alt=\"u=2300045227,4159267224&amp;fm=26&amp;gp=0.jpg\"/>ghfghdfhdf</p>', '[\"\\/ueditor\\/php\\/upload\\/image\\/20210521\\/1621527491151545.jpg\"]', 0, 1, 1621527482, 1621527498);

-- ----------------------------
-- Table structure for tps_brand
-- ----------------------------
DROP TABLE IF EXISTS `tps_brand`;
CREATE TABLE `tps_brand`  (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '品牌名称',
  `brand_url` varchar(100) CHARACTER SET utf8 COLLATE utf8_czech_ci DEFAULT NULL COMMENT '品牌官网地址',
  `brand_img` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '品牌图片',
  `brand_description` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '品牌描述',
  `sort` smallint(5) DEFAULT NULL COMMENT '品牌排序',
  `status` tinyint(1) DEFAULT 1 COMMENT '状态 1有0没有',
  `create_time` int(10) DEFAULT NULL,
  `update_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`brand_id`) USING BTREE,
  INDEX `brand_name`(`brand_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '品牌表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tps_brand
-- ----------------------------
INSERT INTO `tps_brand` VALUES (2, '1', 'www.shop.com', 'a:1:{i:0;s:54:\"/uploads/20210520\\89ed8d64659908083de8c04909d4ec8b.jpg\";}', 'PINaoaido', NULL, 1, 1609989308, 1621512804);

-- ----------------------------
-- Table structure for tps_cate
-- ----------------------------
DROP TABLE IF EXISTS `tps_cate`;
CREATE TABLE `tps_cate`  (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `cate_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '栏目名称：1.系统分类2.帮助分类3.网店帮助4.普通分类',
  `keywords` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '关键词',
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '描述',
  `show_nav` tinyint(1) UNSIGNED ZEROFILL NOT NULL DEFAULT 1 COMMENT '是否显示到表行栏1是0否',
  `sort` tinyint(1) DEFAULT NULL COMMENT '排序',
  `pid` smallint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '上级id',
  `create_time` int(10) DEFAULT NULL,
  `update_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`cate_id`) USING BTREE,
  INDEX `cate_name`(`cate_name`) USING BTREE,
  INDEX `keywords`(`keywords`) USING BTREE,
  INDEX `pid`(`pid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tps_cate
-- ----------------------------
INSERT INTO `tps_cate` VALUES (5, '系统分类', '系统分类', '系统分类1', 1, NULL, 0, 1613100618, 1613819223);
INSERT INTO `tps_cate` VALUES (6, '帮助分类', '帮助分类', '帮助分类', 1, NULL, 0, 1613100650, 1613101582);
INSERT INTO `tps_cate` VALUES (7, '网店帮助', '网店帮助', '网店帮助', 1, NULL, 0, 1613100669, 1613101588);
INSERT INTO `tps_cate` VALUES (8, '普通分类', '普通分类', '普通分类', 1, NULL, 0, 1613100692, 1613101593);
INSERT INTO `tps_cate` VALUES (9, '系统子分类1', '系统子分类1关键词', 'miaoshu', 1, NULL, 5, 1613123938, 1613123938);
INSERT INTO `tps_cate` VALUES (10, '系统子分类11', '系统子分类11', '描述', 1, NULL, 9, 1613698081, 1613698081);

-- ----------------------------
-- Table structure for tps_link
-- ----------------------------
DROP TABLE IF EXISTS `tps_link`;
CREATE TABLE `tps_link`  (
  `link_id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '标题',
  `link_url` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '链接地址',
  `logo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'logo',
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '描述',
  `type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '类别 1文字链接 2图片链接',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '状态 1 不使用 2使用',
  PRIMARY KEY (`link_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '友情链接' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tps_link
-- ----------------------------
INSERT INTO `tps_link` VALUES (1, '标题', 'www.baidu.com', 'https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=3681880960,455182084&fm=26&gp=0.jpg', 'miaoshu1', 1, 2);
INSERT INTO `tps_link` VALUES (4, '系统分类文章11', 'www.11.com', '[object FileList]', 'yyy5', 2, 2);

SET FOREIGN_KEY_CHECKS = 1;
