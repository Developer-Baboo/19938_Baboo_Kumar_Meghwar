/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - login_registraction_form
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`login_registraction_form` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `login_registraction_form`;

/*Table structure for table `register_form` */

DROP TABLE IF EXISTS `register_form`;

CREATE TABLE `register_form` (
  `First Name` longtext NOT NULL,
  `Last Name` longtext NOT NULL,
  `Father Name` longtext NOT NULL,
  `Email` longtext NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `register_form` */

insert  into `register_form`(`First Name`,`Last Name`,`Father Name`,`Email`,`Password`) values 
('Baboo','Kumar','Mehandro','babooheerani999@gmail.com','12345678'),
('Mohan','Kumar','Mehandro','mohan@gmail.com','12345678'),
('akash','parmar','sawan','akash@gmail.com','12345678'),
('suhail','kumar','dayal','suhail@gmail.com','12345678'),
('Raja','kumar','dayalo','rajesh@gmail.com','12345678');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
