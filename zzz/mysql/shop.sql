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

 Date: 12/01/2021 23:46:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tps_article
-- ----------------------------
DROP TABLE IF EXISTS `tps_article`;
CREATE TABLE `tps_article`  (
  `article_id` int(10) NOT NULL COMMENT '文章id',
  `cate_id` smallint(10) NOT NULL COMMENT '栏目ID',
  `title` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '标题',
  `author` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '作者',
  `keywords` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '关键词',
  `description` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '描述',
  `email` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '邮箱',
  `link_url` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '跳转链接',
  `thumb` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '缩略图',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '内容',
  `show_top` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否置顶',
  `show_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '是否显示',
  `create_time` int(10) DEFAULT NULL,
  `update_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`article_id`) USING BTREE,
  INDEX `title`(`title`) USING BTREE,
  INDEX `keywords`(`keywords`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `tps_brand` VALUES (2, '1', 'www.shop.com', 'a:1:{i:0;s:54:\"/uploads/20210107\\30a4b9c33b3741ad2379cec53665dc9f.jpg\";}', 'PINaoaido', NULL, 1, 1609989308, 1609989308);

-- ----------------------------
-- Table structure for tps_cate
-- ----------------------------
DROP TABLE IF EXISTS `tps_cate`;
CREATE TABLE `tps_cate`  (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `cate_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '栏目名称',
  `cate_type` tinyint(1) NOT NULL DEFAULT 5 COMMENT '栏目类型1.系统分类2.帮助分类3.网店帮助4.普通分类',
  `keywords` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '关键词',
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '描述',
  `show_nav` tinyint(1) UNSIGNED ZEROFILL NOT NULL DEFAULT 1 COMMENT '是否显示到表行栏1是0否',
  `sort` tinyint(1) DEFAULT NULL COMMENT '排序',
  `pid` smallint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '上级id',
  `create_time` int(10) DEFAULT NULL,
  `update_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`cate_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
