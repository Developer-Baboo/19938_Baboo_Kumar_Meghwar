/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - search_post
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`search_post` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;

USE `search_post`;

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `post_id` int(20) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(200) NOT NULL,
  `title_description` longtext NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `posts` */

insert  into `posts`(`post_id`,`post_title`,`title_description`) values 
(1,'JAVASCRIPT','JAVA IS SERVER AND CLLIENT SIDE LANGUAGE'),
(2,'BOOTSTRAP','BOOSTRAP IS CSS FRAMEWORK USED TO MAKE THE FRONT END DESIGN OF WEBSITES'),
(3,'REACTJS','Cascading Style Sheet');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
