/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.28-MariaDB : Database - online_blogging_application
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`online_blogging_application` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `online_blogging_application`;

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `no_of_blog_created` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `admins` */

insert  into `admins`(`admin_id`,`username`,`password`,`no_of_blog_created`) values 
(1,'baboo','12345',0);

/*Table structure for table `blog_settings` */

DROP TABLE IF EXISTS `blog_settings`;

CREATE TABLE `blog_settings` (
  `blog_setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_bg_image` varchar(200) NOT NULL,
  `posts_per_pages` int(11) NOT NULL,
  `blog_post_color` varchar(50) NOT NULL,
  `post_bg_color` varchar(50) NOT NULL,
  `blog_font_style` varchar(50) NOT NULL,
  PRIMARY KEY (`blog_setting_id`),
  KEY `blog_id` (`blog_id`),
  CONSTRAINT `blog_id` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `blog_settings` */

/*Table structure for table `blogs` */

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_name` varchar(200) NOT NULL,
  `no_of_posts` int(11) NOT NULL,
  `no_of_followers` int(11) NOT NULL,
  `action` varchar(20) NOT NULL,
  `is_active` int(20) NOT NULL,
  PRIMARY KEY (`blog_id`),
  KEY `admin_id` (`admin_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `blogs` */

insert  into `blogs`(`blog_id`,`admin_id`,`category_id`,`blog_name`,`no_of_posts`,`no_of_followers`,`action`,`is_active`) values 
(1,1,1,'computer_science',1,1,'',1);

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL,
  `num_of_posts` int(11) NOT NULL,
  `action` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `categories` */

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `post_id` (`post_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `post_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `comments` */

/*Table structure for table `feedbacks` */

DROP TABLE IF EXISTS `feedbacks`;

CREATE TABLE `feedbacks` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `feedback_message` varchar(1000) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `feedbacks` */

/*Table structure for table `outside_user_feedbacks` */

DROP TABLE IF EXISTS `outside_user_feedbacks`;

CREATE TABLE `outside_user_feedbacks` (
  `outsider_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `outside_user_name` varchar(200) NOT NULL,
  `outside_user_email` varchar(200) NOT NULL,
  `feeback_message` varchar(1000) NOT NULL,
  `time_and_date` varchar(200) NOT NULL,
  PRIMARY KEY (`outsider_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `outside_user_feedbacks` */

insert  into `outside_user_feedbacks`(`outsider_user_id`,`outside_user_name`,`outside_user_email`,`feeback_message`,`time_and_date`) values 
(1,'1','','','');

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `post_img` year(4) NOT NULL,
  `post_description` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL,
  `action` varchar(20) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `comment_id` (`comment_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `posts` */

/*Table structure for table `posts_settings` */

DROP TABLE IF EXISTS `posts_settings`;

CREATE TABLE `posts_settings` (
  `post_setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `font_size` int(11) NOT NULL,
  `font_color` varchar(50) NOT NULL,
  `bg_image` varchar(50) NOT NULL,
  `font_style` varchar(50) NOT NULL,
  `date_and_time` varchar(50) NOT NULL,
  PRIMARY KEY (`post_setting_id`),
  KEY `user_id` (`user_id`),
  KEY `post_id` (`post_id`),
  CONSTRAINT `posts_settings_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `posts_settings` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `home_town` varchar(500) NOT NULL,
  `profile` varchar(300) NOT NULL,
  `is_active` varchar(10) NOT NULL,
  `action` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
