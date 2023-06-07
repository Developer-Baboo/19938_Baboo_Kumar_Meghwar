/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.28-MariaDB : Database - iskillers
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`iskillers` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `iskillers`;

/*Table structure for table `user_tables` */

DROP TABLE IF EXISTS `user_tables`;

CREATE TABLE `user_tables` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(500) NOT NULL,
  `father_name` varchar(500) NOT NULL,
  `caste` varchar(500) NOT NULL,
  `class` varchar(500) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `date_of_birth` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `course_name` varchar(250) NOT NULL,
  `course_duration` int(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `date_of_admission` date NOT NULL,
  `fees` int(11) NOT NULL,
  `desired_time` varchar(50) NOT NULL,
  `whatsap_no` bigint(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user_tables` */

insert  into `user_tables`(`user_id`,`user_name`,`father_name`,`caste`,`class`,`gender`,`date_of_birth`,`course_name`,`course_duration`,`batch`,`date_of_admission`,`fees`,`desired_time`,`whatsap_no`,`email`) values 
(2,'Baboo','Mehandro','Meghwar','8th','male','2023-06-07 15:03:04','digital Marketing',6,'4','1111-11-11',9000,'19:30',3422449445,'abc@gmail.com'),
(3,'Moolchand','Sultan','Bheel','10th','male','2023-06-07 15:02:56','graphic design',5,'9','1111-11-11',6000,'19:30',3413344565,'abc@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
