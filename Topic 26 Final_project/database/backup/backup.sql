/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - online_blogging_app
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`online_blogging_app` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `online_blogging_app`;

/*Table structure for table `blog` */

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `blog_title` varchar(11) DEFAULT NULL,
  `post_per_page` int(11) DEFAULT NULL,
  `blog_background_image` text DEFAULT NULL,
  `blog_status` enum('Active','InActive') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`blog_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `blog` */

insert  into `blog`(`blog_id`,`user_id`,`blog_title`,`post_per_page`,`blog_background_image`,`blog_status`,`created_at`,`updated_at`) values 
(2,7,'Health',2,'blog_image_1684564721.jpg','InActive','2023-05-20 11:40:46',NULL),
(3,7,'Politics',2,'blog_image_1684566872.png','Active','2023-05-20 12:14:33',NULL),
(4,7,'Sport',2,'blog_image_1684568329.jpg','Active','2023-05-20 12:38:49',NULL);

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_title` varchar(100) DEFAULT NULL,
  `category_description` text DEFAULT NULL,
  `category_status` enum('Active','InActive') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `category` */

insert  into `category`(`category_id`,`category_title`,`category_description`,`category_status`,`created_at`,`updated_at`) values 
(1,'hello','dskfj','Active','2023-05-18 11:21:21',NULL);

/*Table structure for table `following_blog` */

DROP TABLE IF EXISTS `following_blog`;

CREATE TABLE `following_blog` (
  `follow_id` int(11) NOT NULL AUTO_INCREMENT,
  `follower_id` int(11) DEFAULT NULL,
  `blog_following_id` int(11) DEFAULT NULL,
  `status` enum('Followed','Unfollowed') DEFAULT 'Followed',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`follow_id`),
  KEY `blog_following_id` (`blog_following_id`),
  KEY `follower_id` (`follower_id`),
  CONSTRAINT `following_blog_ibfk_1` FOREIGN KEY (`blog_following_id`) REFERENCES `blog` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `following_blog_ibfk_2` FOREIGN KEY (`follower_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `following_blog` */

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) DEFAULT NULL,
  `post_title` varchar(200) NOT NULL,
  `post_summary` text NOT NULL,
  `post_description` longtext NOT NULL,
  `featured_image` text DEFAULT NULL,
  `post_status` enum('Active','InActive') DEFAULT NULL,
  `is_comment_allowed` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `blog_id` (`blog_id`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `post` */

insert  into `post`(`post_id`,`blog_id`,`post_title`,`post_summary`,`post_description`,`featured_image`,`post_status`,`is_comment_allowed`,`created_at`,`updated_at`) values 
(1,NULL,'Today breaking news','lkjfds lskdjf lksdjf lksdjflsd lsdkjfd','POST DESCRIPTION','post_image_1684577355.jpeg','Active',0,'2023-05-20 15:28:09',NULL),
(2,NULL,'Today breaking news','lkjfds lskdjf lksdjf lksdjflsd lsdkjfd','lorem lorem lorem','post_image_1684578030.jpeg','Active',0,'2023-05-20 15:28:31',NULL),
(3,NULL,'POST TITLE','THIS IS IMAGE AND WHICH IS TAKEN DURING THE SURVEY IN HOSPITAL','POST DESCRIPTION','post_image_1684578437.jpeg','InActive',0,'2023-05-20 03:27:17',NULL);

/*Table structure for table `post_atachment` */

DROP TABLE IF EXISTS `post_atachment`;

CREATE TABLE `post_atachment` (
  `post_atachment_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `post_attachment_title` varchar(200) DEFAULT NULL,
  `post_attachment_path` text DEFAULT NULL,
  `is_active` enum('Active','InActive') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`post_atachment_id`),
  KEY `fk1` (`post_id`),
  CONSTRAINT `fk1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `post_atachment` */

/*Table structure for table `post_category` */

DROP TABLE IF EXISTS `post_category`;

CREATE TABLE `post_category` (
  `post_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`post_category_id`),
  KEY `post_id` (`post_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `post_category_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `post_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `post_category` */

/*Table structure for table `post_comment` */

DROP TABLE IF EXISTS `post_comment`;

CREATE TABLE `post_comment` (
  `post_comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `is_active` enum('Active','InActive') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`post_comment_id`),
  KEY `user_id` (`user_id`),
  KEY `post_id` (`post_id`),
  CONSTRAINT `post_comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `post_comment_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `post_comment` */

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_type` varchar(50) NOT NULL,
  `is_active` enum('Active','InActive') DEFAULT 'Active',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `role` */

insert  into `role`(`role_id`,`role_type`,`is_active`) values 
(1,'Admin','Active'),
(2,'User','Active');

/*Table structure for table `setting` */

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `setting_key` varchar(100) DEFAULT NULL,
  `setting_value` varchar(100) DEFAULT NULL,
  `setting_status` enum('Active','InActive') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`setting_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `setting_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `setting` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT 2,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `user_image` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `is_approved` enum('Pending','Approved','Rejected') DEFAULT 'Pending',
  `is_active` enum('Active','InActive') DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`user_id`,`role_id`,`first_name`,`last_name`,`email`,`password`,`gender`,`date_of_birth`,`user_image`,`address`,`is_approved`,`is_active`,`created_at`,`updated_at`) values 
(7,1,'Baboo','Kumar','baboo@gmail.com','12345','Male','2002-02-02','profile_image_1683396936.jpeg','Mithi Tharparkar','Pending','Active','2023-05-06 23:15:55',NULL),
(8,2,'Akash','Kumar','akash@gmail.com','12345','Male','2002-02-02','profile_image_1683397041.png','Diplo Tharparkar','Approved','Active','2023-05-11 17:34:33',NULL),
(9,2,'Arti','Kumari','arti@gmail.com','12345','Female','2001-01-01','profile_image_1683397142.png','Umerkot Sindh','Approved','Active','2023-05-11 17:39:51',NULL),
(10,2,'Rabia','Ansari','rabia@gmail.com','12345','Male','3003-03-31','profile_image_1683398105.png','Hyderabad Sindh','Rejected','Active','2023-05-12 01:24:58',NULL),
(11,2,'Aneel','Kumar','babookumar15@gmail.com','12345','Male','2023-04-05','profile_image_1683597295.jpg','Digri Umerkot ','Pending','Active','2023-05-15 14:44:29',NULL),
(12,2,'Sangeeta','Kumari','sangeeta@gmail.com','12345','Female','2008-01-09','profile_image_1683597487.png','Hyderabad Sindh','Rejected','Active','2023-05-14 17:46:39',NULL),
(14,2,'Munesh','Kumar','munesh@gmail.com','12345','Male','2000-06-09','profile_image_1683608137.png','Parmar Colony Mithi','Rejected','Active','2023-05-14 17:46:45',NULL),
(15,2,'Parkash','Kumar','parkash@gmail.com','12345','Male','1111-01-01','profile_image_1683883524.jpeg','Dharmani Colony Mith ','Approved','InActive','2023-05-14 22:56:46',NULL),
(16,2,'Mohan',' Lal','mohan@gmail.com','12345','Male','2000-07-07','profile_image_1684065448.png','New Kot Sindh pakistan','Pending','Active','2023-05-14 17:41:34',NULL),
(18,2,'Naima','Ansari','naima@gmail.com','12345','Male','6000-06-06','profile_image_1684118799.png','Marvi Town Hyderabad','Pending','Active','2023-05-15 07:46:39',NULL),
(19,1,'Mineeta','Kumari','mineeta@gmail.com','12345','Female','2009-09-09','profile_image_1684150248.png','Chelhar District Tharparkar','Pending','Active','2023-05-15 16:31:37',NULL),
(20,2,'Suhail','Ansari','suhail_ansari@gmail.com','12345','Male','2001-01-01','profile_image_1684563601.jpg','Karachi sindh','Pending','Active','2023-05-20 11:20:01',NULL),
(21,2,'Ramesh','Kumar','ramesh@gmail.com','12345','Male','2000-01-01','profile_image_1684565645.png','mithi thar','Pending','Active','2023-05-20 11:54:05',NULL),
(22,2,'Ramesh','Kumar','ramesh@gmail.com','12345','Male','2000-01-01','profile_image_1684565705.png','mithi thar','Pending','Active','2023-05-20 11:55:05',NULL),
(23,2,'Suresh','Kumar','suresh@gmail.com','12345','Male','2000-01-01','profile_image_1684565764.jpg','ldksjf sldkjf','Pending','Active','2023-05-20 11:56:04',NULL),
(24,2,'Suresh','Kumar','suresh@gmail.com','12345','Male','2000-01-01','profile_image_1684565849.jpg','ldksjf sldkjf','Pending','Active','2023-05-20 11:57:29',NULL),
(25,2,'Suresh','Kumar','suresh@gmail.com','12345','Male','2000-01-01','profile_image_1684565905.jpg','ldksjf sldkjf','Pending','Active','2023-05-20 11:58:25',NULL),
(26,2,'Ahsan','Khan','ahsan@gmail.com','12345','Male','2000-01-01','profile_image_1684566337.jpg','lkfj lsdkjf sld','Pending','Active','2023-05-20 12:05:37',NULL),
(27,2,'Ahsan','Khan','ahsan@gmail.com','12345','Male','2000-01-01','profile_image_1684566404.jpg','lkfj lsdkjf sld','Pending','Active','2023-05-20 12:06:44',NULL),
(28,2,'yaseen','ansari','yaseen@gmail.com','12345','Male','2000-01-01','profile_image_1684567282.jpg','lskdfj lskdjf d','Pending','Active','2023-05-20 12:21:22',NULL);

/*Table structure for table `user_feedback` */

DROP TABLE IF EXISTS `user_feedback`;

CREATE TABLE `user_feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user_feedback` */

insert  into `user_feedback`(`feedback_id`,`user_id`,`user_name`,`user_email`,`feedback`,`created_at`,`updated_at`) values 
(1,NULL,'Baboo','babookumar15@gmail.com','Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator\r\n','2023-05-20 09:25:15',NULL),
(2,NULL,'Mohan','mohankumar15@gmail.com','Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator','2023-05-20 09:25:23',NULL),
(3,NULL,'Munesh','heerani@gmail.com','Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator','2023-05-20 09:25:09',NULL),
(11,NULL,'ali','ali_gohar@gmail.com','Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator','2023-05-20 09:23:52',NULL),
(12,8,'Akash Kumar','akash@gmail.com','Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator','2023-05-20 10:01:22',NULL),
(14,NULL,'Fatima','fatima@gmail.com','Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator','2023-05-20 10:04:44',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
