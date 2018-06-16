/*
Navicat MySQL Data Transfer

Source Server         : dcxe
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : guanggaobao

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-06-16 18:30:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bid_detail
-- ----------------------------
DROP TABLE IF EXISTS `bid_detail`;
CREATE TABLE `bid_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '竞价记录编号',
  `demand_id` int(11) NOT NULL COMMENT '竞价项目编号',
  `bider_id` int(11) NOT NULL COMMENT '报价人编号',
  `bid_price` decimal(11,0) DEFAULT NULL COMMENT '报价',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `status` int(2) DEFAULT NULL COMMENT '状态值',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='竞价详情表';

-- ----------------------------
-- Records of bid_detail
-- ----------------------------

-- ----------------------------
-- Table structure for character
-- ----------------------------
DROP TABLE IF EXISTS `character`;
CREATE TABLE `character` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '角色编号',
  `profession` varchar(255) NOT NULL COMMENT '角色名字',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='用户角色';

-- ----------------------------
-- Records of character
-- ----------------------------
INSERT INTO `character` VALUES ('1', '服务商');
INSERT INTO `character` VALUES ('2', '设计师');
INSERT INTO `character` VALUES ('3', '需求方');

-- ----------------------------
-- Table structure for demand_image
-- ----------------------------
DROP TABLE IF EXISTS `demand_image`;
CREATE TABLE `demand_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '图片地址',
  `demand_id` varchar(500) NOT NULL COMMENT '需求信息编号',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='需求信息图片表';

-- ----------------------------
-- Records of demand_image
-- ----------------------------

-- ----------------------------
-- Table structure for demand_information
-- ----------------------------
DROP TABLE IF EXISTS `demand_information`;
CREATE TABLE `demand_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '需求编号',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '标题',
  `content` varchar(500) NOT NULL COMMENT '内容',
  `user_id` int(11) NOT NULL COMMENT '用户编码(外键)',
  `tender_time` int(11) DEFAULT NULL COMMENT '竞价时间',
  `tender_winner_id` int(11) DEFAULT NULL,
  `tender_type` int(5) DEFAULT NULL,
  `close_time` int(11) DEFAULT NULL COMMENT '结束时间',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  `status` int(2) DEFAULT NULL COMMENT '状态值',
  `bid_type` int(5) DEFAULT NULL COMMENT '竞价类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='需求信息表';

-- ----------------------------
-- Records of demand_information
-- ----------------------------

-- ----------------------------
-- Table structure for manager
-- ----------------------------
DROP TABLE IF EXISTS `manager`;
CREATE TABLE `manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员编号',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '名称',
  `avatar` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '头像',
  `mobile` int(11) DEFAULT NULL COMMENT '手机号',
  `email` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '电子邮箱',
  `password` varchar(255) DEFAULT NULL,
  `level` int(5) DEFAULT NULL COMMENT '账号等级',
  `role` varchar(50) DEFAULT NULL COMMENT '权限',
  `department` int(5) DEFAULT NULL COMMENT '所属部门',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of manager
-- ----------------------------

-- ----------------------------
-- Table structure for my-fans
-- ----------------------------
DROP TABLE IF EXISTS `my-fans`;
CREATE TABLE `my-fans` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `user_id` int(11) NOT NULL COMMENT '用户编号',
  `fan_id` int(11) NOT NULL COMMENT '粉丝编号(外键)',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='我的粉丝表';

-- ----------------------------
-- Records of my-fans
-- ----------------------------

-- ----------------------------
-- Table structure for my-follows
-- ----------------------------
DROP TABLE IF EXISTS `my-follows`;
CREATE TABLE `my-follows` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `user_id` int(11) NOT NULL COMMENT '用户编号',
  `follow_id` int(11) NOT NULL COMMENT '粉丝编号(外键)',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='我的关注';

-- ----------------------------
-- Records of my-follows
-- ----------------------------

-- ----------------------------
-- Table structure for register_way
-- ----------------------------
DROP TABLE IF EXISTS `register_way`;
CREATE TABLE `register_way` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户编号',
  `way` varchar(255) NOT NULL COMMENT '注册方式',
  `app_secret` varchar(64) DEFAULT NULL COMMENT '应用密钥',
  `app_id` varchar(64) DEFAULT NULL COMMENT '应用编码',
  `app_description` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '应用描述',
  `scope` varchar(20) DEFAULT NULL,
  `scope_description` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '权限描述',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='注册方式';

-- ----------------------------
-- Records of register_way
-- ----------------------------
INSERT INTO `register_way` VALUES ('1', 'QQ', null, null, null, null, null, null, null, null);
INSERT INTO `register_way` VALUES ('2', 'wechat', null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for service_category
-- ----------------------------
DROP TABLE IF EXISTS `service_category`;
CREATE TABLE `service_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '服务类目编号',
  `category` varchar(30) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '类目名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='服务类目';

-- ----------------------------
-- Records of service_category
-- ----------------------------

-- ----------------------------
-- Table structure for service_evaluation
-- ----------------------------
DROP TABLE IF EXISTS `service_evaluation`;
CREATE TABLE `service_evaluation` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `user_id` int(11) NOT NULL COMMENT '用户编号',
  `sincerity_level` int(5) NOT NULL COMMENT '诚信度',
  `good_opinion_level` int(5) NOT NULL COMMENT '好评度',
  `transaction_sum` int(11) DEFAULT NULL COMMENT '成交额',
  `fans_sum` int(11) DEFAULT NULL COMMENT '粉丝总数',
  `quality_score` int(5) DEFAULT NULL COMMENT '服务质量',
  `speed_score` int(5) DEFAULT NULL COMMENT '完成速度',
  `service_socre` int(5) DEFAULT NULL COMMENT '服务满意度',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='服务评价表';

-- ----------------------------
-- Records of service_evaluation
-- ----------------------------

-- ----------------------------
-- Table structure for system-message
-- ----------------------------
DROP TABLE IF EXISTS `system-message`;
CREATE TABLE `system-message` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '公告编号',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '标题',
  `content` varchar(500) NOT NULL COMMENT '内容',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='系统公告表';

-- ----------------------------
-- Records of system-message
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户编号',
  `nickname` varchar(50) NOT NULL DEFAULT '' COMMENT '昵称',
  `avatar` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '头像',
  `phone_number` varchar(15) CHARACTER SET utf8mb4 NOT NULL COMMENT '手机号',
  `email` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '电子邮箱',
  `brief_introduction` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '简介',
  `password` varchar(255) DEFAULT NULL,
  `login_way_id` int(5) NOT NULL DEFAULT '0' COMMENT '登录方式(外键)',
  `character_id` int(5) DEFAULT NULL COMMENT '用户角色(外键)',
  `range_id` int(5) DEFAULT NULL COMMENT '服务性质(外键)',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户基本信息';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'lwz', '', '13852442265', '1021560502@qq.com', '哈哈哈', '123456', '0', '1', '1', '1529122761', null, null);

-- ----------------------------
-- Table structure for user-message
-- ----------------------------
DROP TABLE IF EXISTS `user-message`;
CREATE TABLE `user-message` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '聊天记录编号',
  `user_id` int(11) NOT NULL COMMENT '用户编号',
  `other_id` int(11) NOT NULL COMMENT '对方编号',
  `filename` varchar(50) DEFAULT NULL COMMENT '文件名',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='消息表';

-- ----------------------------
-- Records of user-message
-- ----------------------------

-- ----------------------------
-- Table structure for user_address
-- ----------------------------
DROP TABLE IF EXISTS `user_address`;
CREATE TABLE `user_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `user_id` int(11) NOT NULL COMMENT '外键',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '收货人姓名',
  `mobile` int(11) NOT NULL COMMENT '手机号',
  `province` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '省',
  `city` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '市',
  `country` varchar(20) CHARACTER SET utf8mb4 NOT NULL COMMENT '国家',
  `detail` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '详细地址',
  `create_time` int(11) DEFAULT NULL COMMENT '创建日期',
  `update_time` int(11) DEFAULT NULL COMMENT '更新日期',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='地址表';

-- ----------------------------
-- Records of user_address
-- ----------------------------

-- ----------------------------
-- Table structure for user_auth
-- ----------------------------
DROP TABLE IF EXISTS `user_auth`;
CREATE TABLE `user_auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `user_id` int(11) NOT NULL COMMENT '外键',
  `login_way_id` int(10) DEFAULT NULL COMMENT '注册方式',
  `openid` varchar(100) NOT NULL COMMENT '用户标识',
  `access_token` varchar(100) CHARACTER SET utf8mb4 NOT NULL COMMENT '接口凭证',
  `expires_in` int(11) DEFAULT NULL COMMENT '凭证超时时间',
  `refres_token` varchar(100) CHARACTER SET utf8mb4 NOT NULL COMMENT '刷新凭证令牌',
  `scope` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '权限',
  `unionid` int(100) DEFAULT NULL COMMENT '授权用户编码',
  `postition` varchar(20) DEFAULT NULL COMMENT '用户位置坐标',
  `create_time` int(11) DEFAULT NULL COMMENT '创建日期',
  `update_time` int(11) DEFAULT NULL COMMENT '更新日期',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='第三方授权登录表';

-- ----------------------------
-- Records of user_auth
-- ----------------------------
