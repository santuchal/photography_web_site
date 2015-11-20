/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.1.45-community : Database - ravitulsan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ravitulsan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ravitulsan`;

/*Table structure for table `aboutus` */

DROP TABLE IF EXISTS `aboutus`;

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` longtext,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `aboutus` */

insert  into `aboutus`(`id`,`file`) values (1,'Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lore');

/*Table structure for table `address` */

DROP TABLE IF EXISTS `address`;

CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(1000) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `phone` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `address` */

insert  into `address`(`id`,`user`,`address`,`phone`,`email`) values (1,NULL,'<font size=\"2\">5B, Pratap Ghosh Lane,<br>1st Floor Above AXIS<br>Bank ATM Kolkata-<br>700007, West Bengal (India)</font><br>','9830093541','photoravi1@gmail.com.xyzmdidklfjghghgjhgshfhsdgfsdjhgjdsgjdgjgjdsggvhjgjedhjisdhjighfdjkhgjkfdjgkhdfjhgjhghjghj');

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(1000) DEFAULT NULL,
  `pass` varchar(1000) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

/*Table structure for table `background_image` */

DROP TABLE IF EXISTS `background_image`;

CREATE TABLE `background_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(1000) DEFAULT NULL,
  `image_name` longblob,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `background_image` */

insert  into `background_image`(`id`,`user`,`image_name`) values (29,NULL,'8.JPG'),(34,NULL,'5.JPG'),(35,NULL,'1.JPG');

/*Table structure for table `blog` */

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(5000) DEFAULT NULL,
  `blog_text` longtext,
  `blog_pic` longblob,
  `blog_date` varchar(1000) DEFAULT NULL,
  `blog_user` varchar(1000) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `blog` */

insert  into `blog`(`id`,`blog_title`,`blog_text`,`blog_pic`,`blog_date`,`blog_user`) values (5,'IPL Opening Ceremony','Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lore','144006623516.JPG','2015-08-20 12:23:55','Admin');

/*Table structure for table `galery_category` */

DROP TABLE IF EXISTS `galery_category`;

CREATE TABLE `galery_category` (
  `c_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(300) DEFAULT NULL,
  `c_image` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `galery_category` */

insert  into `galery_category`(`c_id`,`name`,`c_image`) values (10,'Candid Photography','14400658643.jpg');

/*Table structure for table `galery_content` */

DROP TABLE IF EXISTS `galery_content`;

CREATE TABLE `galery_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `c_id` bigint(20) unsigned NOT NULL,
  `s_id` bigint(20) unsigned NOT NULL,
  `img` varchar(300) DEFAULT NULL,
  `t_img` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`,`s_id`),
  KEY `s_id` (`s_id`),
  CONSTRAINT `fk1` FOREIGN KEY (`c_id`) REFERENCES `galery_category` (`c_id`),
  CONSTRAINT `fk2` FOREIGN KEY (`s_id`) REFERENCES `galery_sub_category` (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `galery_content` */

insert  into `galery_content`(`id`,`c_id`,`s_id`,`img`,`t_img`) values (26,10,13,'14400658901.jpg',NULL);

/*Table structure for table `galery_sub_category` */

DROP TABLE IF EXISTS `galery_sub_category`;

CREATE TABLE `galery_sub_category` (
  `s_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `c_id` bigint(20) unsigned NOT NULL,
  `s_name` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`s_id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `fk` FOREIGN KEY (`c_id`) REFERENCES `galery_category` (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `galery_sub_category` */

insert  into `galery_sub_category`(`s_id`,`c_id`,`s_name`) values (13,10,'Gopal Krishna Gandhi');

/*Table structure for table `logo` */

DROP TABLE IF EXISTS `logo`;

CREATE TABLE `logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(1000) DEFAULT NULL,
  `image_name` varchar(1000) DEFAULT NULL,
  `image_title` longblob NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `logo` */

insert  into `logo`(`id`,`user`,`image_name`,`image_title`) values (1,NULL,'logo.png','Logo');

/*Table structure for table `member_info` */

DROP TABLE IF EXISTS `member_info`;

CREATE TABLE `member_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `mem_name` varchar(100) DEFAULT NULL,
  `mem_post` varchar(100) DEFAULT NULL,
  `mem_pic` varchar(1000) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `member_info` */

insert  into `member_info`(`id`,`mem_name`,`mem_post`,`mem_pic`) values (21,'Ravi Shanker Tulsan','Photographer, CEO','1440065402member1.png');

/*Table structure for table `member_social` */

DROP TABLE IF EXISTS `member_social`;

CREATE TABLE `member_social` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) DEFAULT NULL,
  `member_name` varchar(1000) DEFAULT NULL,
  `s_name` varchar(1000) DEFAULT NULL,
  `s_image` varchar(1000) DEFAULT NULL,
  `s_url` varchar(1000) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=latin1;

/*Data for the table `member_social` */

insert  into `member_social`(`id`,`member_id`,`member_name`,`s_name`,`s_image`,`s_url`) values (69,NULL,'Ravi Shanker Tulsan','Facebook','','http://www.facebook.com'),(70,NULL,'Ravi Shanker Tulsan','Twitter','1439877214twt.png','http://www.twitter.com'),(71,NULL,'Ravi Shanker Tulsan','','1439877214',''),(72,NULL,'Ravi Shanker Tulsan','','1439877214',''),(81,21,'Ravi Shanker Tulsan','Facebook','1440065402fb.png','http://www.facebook.com'),(82,21,'Ravi Shanker Tulsan','Twitter','1440065402twt.png','http://www.twitter.com'),(83,21,'Ravi Shanker Tulsan','LinkdIn','1440065510linkedin.png','http://www.linkdin.on'),(84,21,'Ravi Shanker Tulsan','yahoo','1440073594yahoo.png','http://www.yahoo.com'),(121,31,'','','1440154284',''),(122,31,'','','1440154284',''),(123,31,'','','1440154284',''),(124,31,'','','1440154284',''),(125,32,'','','1440154293',''),(126,32,'','','1440154293',''),(127,32,'','','1440154293',''),(128,32,'','','1440154293',''),(129,33,'','','1440154305',''),(130,33,'','','1440154305',''),(131,33,'','','1440154305',''),(132,33,'','','1440154305',''),(137,35,'','','1440154355',''),(138,35,'','','1440154355',''),(139,35,'','','1440154355',''),(140,35,'','','1440154355','');

/*Table structure for table `music` */

DROP TABLE IF EXISTS `music`;

CREATE TABLE `music` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(1000) DEFAULT NULL,
  `music_name` varchar(1000) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `music` */

insert  into `music`(`id`,`user`,`music_name`) values (1,NULL,'Maid with the Flaxen Hair.mp3');

/*Table structure for table `output_images` */

DROP TABLE IF EXISTS `output_images`;

CREATE TABLE `output_images` (
  `imageId` int(11) NOT NULL AUTO_INCREMENT,
  `imageType` varchar(2005) DEFAULT NULL,
  `imageData` mediumblob,
  `image_title` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`imageId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `output_images` */

/*Table structure for table `portfolio` */

DROP TABLE IF EXISTS `portfolio`;

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `portfolio_img` varchar(1000) DEFAULT NULL,
  `portfolio_name` varchar(1000) DEFAULT NULL,
  `portfolio_category` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `portfolio` */

/*Table structure for table `service` */

DROP TABLE IF EXISTS `service`;

CREATE TABLE `service` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `serv_title` varchar(1000) NOT NULL,
  `serv_img` varchar(1000) NOT NULL,
  `serv_details` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

/*Data for the table `service` */

insert  into `service`(`id`,`serv_title`,`serv_img`,`serv_details`) values (54,'Wedding Ceremony','1440065649images1.jpg','Lorem Ipsum is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lore');

/*Table structure for table `social` */

DROP TABLE IF EXISTS `social`;

CREATE TABLE `social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(1000) DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `link` varchar(1000) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `social` */

insert  into `social`(`id`,`user`,`name`,`image`,`link`) values (29,NULL,'Facebook','1440064075fb.png','http://www.facebook.com'),(30,NULL,'Twitter','1440074413Desert.jpg','http://www.twitter.com');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` varchar(200) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`uid`,`pass`) values (1,'admin','1234');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
