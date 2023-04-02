/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - user_login_with_image
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`user_login_with_image` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `user_login_with_image`;

/*Table structure for table `image_table` */

DROP TABLE IF EXISTS `image_table`;

CREATE TABLE `image_table` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `image_table` */

insert  into `image_table`(`image_id`,`user_id`,`image_name`) values 
(14,20,'Images/rimsha.jpg'),
(15,21,'Images/maxica.jpg'),
(16,22,'Images/kiran.jpeg'),
(17,23,'Images/alxender.jpg');

/*Table structure for table `registraction_table` */

DROP TABLE IF EXISTS `registraction_table`;

CREATE TABLE `registraction_table` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email_address` varchar(20) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `cnic_number` varchar(20) NOT NULL,
  `gender` enum('male','female') NOT NULL DEFAULT 'male',
  `country` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `registraction_table` */

insert  into `registraction_table`(`user_id`,`first_name`,`middle_name`,`last_name`,`email_address`,`contact_number`,`cnic_number`,`gender`,`country`,`password`) values 
(20,'Ramsha','Kumari','Heerani','ramsha12@gmail.com','92342 2449446','44302-8236796-9','female','Pakistan','12345'),
(21,'Maxica','Soram','Joe','mxica12@gmail.com','92342 2449448','44302-8236796-7','female','Pakistan','12345'),
(22,'Kiran','Kumar','Sukhani','kiran12@gmail.com','92349 2449111','44303-8236792-4','male','Pakistan','12345'),
(23,'Alsexdar','Sham','Ram','alxen12@gmail.com','92348 2449222','44302-8236796-9','male','Iran','12345');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
