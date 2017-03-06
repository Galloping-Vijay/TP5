/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 5.5.47 : Database - tp5
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tp5` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `tp5`;

/*Table structure for table `think_book` */

DROP TABLE IF EXISTS `think_book`;

CREATE TABLE `think_book` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `publish_time` int(11) unsigned DEFAULT NULL,
  `create_time` int(11) unsigned NOT NULL,
  `update_time` int(11) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL,
  `users_id` int(6) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `think_book` */

insert  into `think_book`(`id`,`title`,`publish_time`,`create_time`,`update_time`,`status`,`users_id`) values (1,'ThinkPHP5快速入门',1462464000,1488447932,1488447932,1,1);

/*Table structure for table `think_data` */

DROP TABLE IF EXISTS `think_data`;

CREATE TABLE `think_data` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `data` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `think_data` */

insert  into `think_data`(`id`,`data`) values (1,'thinkphp'),(2,'php'),(3,'demo');

/*Table structure for table `think_profile` */

DROP TABLE IF EXISTS `think_profile`;

CREATE TABLE `think_profile` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `truename` varchar(25) NOT NULL,
  `birthday` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `users_id` int(6) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `think_profile` */

insert  into `think_profile`(`id`,`truename`,`birthday`,`address`,`email`,`users_id`) values (1,'流程',1994,'厦门','1@qq.com',3),(2,'流程',1994,'厦门','wei@qq.com',4);

/*Table structure for table `think_user` */

DROP TABLE IF EXISTS `think_user`;

CREATE TABLE `think_user` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) NOT NULL COMMENT '昵称',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `birthday` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '生日',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `think_user` */

insert  into `think_user`(`id`,`nickname`,`email`,`birthday`,`status`,`create_time`,`update_time`) values (1,'????','zhanghsan@qq.com',0,0,0,0),(2,'???','lisi@qq.com',0,0,0,0),(3,'张三','zhanghsan@qq.com',0,0,0,0),(4,'李四','lisi@qq.com',0,0,0,0),(5,'asdda s','qq2@qq.com',0,0,0,0),(6,'asfasf','1@qq.com',0,0,0,0),(7,'安抚撒是否','1@qq.com',1994,0,0,0),(8,'按时','',0,0,0,0),(9,'阿斯蒂芬','',0,0,0,0);

/*Table structure for table `think_users` */

DROP TABLE IF EXISTS `think_users`;

CREATE TABLE `think_users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_time` int(11) unsigned NOT NULL,
  `update_time` int(11) unsigned NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `think_users` */

insert  into `think_users`(`id`,`nickname`,`name`,`password`,`create_time`,`update_time`,`status`) values (1,'岁月','thinkphp','12323',1488446320,1488446320,1),(2,'岁月','thinkphp','12323',1488446398,1488446398,1),(3,'岁月','thinkphp','12323',1488446469,1488446469,1),(4,'岁月','php','12323',1488447164,1488447640,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
