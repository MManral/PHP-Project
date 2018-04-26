/*
SQLyog - Free MySQL GUI v5.0
Host - 5.5.24-log : Database - autokart
*********************************************************************
Server version : 5.5.24-log
*/


create database if not exists `autokart`;

USE `autokart`;

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cart` */

/*Table structure for table `signup` */

DROP TABLE IF EXISTS `signup`;

CREATE TABLE `signup` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `signup` */

insert into `signup` values 

(1,'ravi','kumar','ravi12@gmail.com','1234','8826807051');

/*Table structure for table `tbl_product` */

DROP TABLE IF EXISTS `tbl_product`;

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product` */

insert into `tbl_product` values 
(1,'mud gaurd','',420.00),
(2,'door gaurd','',600.00),
(3,'wheel lock','',1000.00),
(4,'window sunshade','',120.00),
(5,'refrigrator','',4000.00),
(6,'steering knob','',100.00),
(7,'tissue dispenser','',80.00),
(8,'car mat','',600.00),
(9,'gear lock','',300.00),
(10,'glass holder','',200.00),
(11,'arm rest','',2000.00),
(12,'car bed','',1000.00),
(13,'head rest','',500.00),
(14,'saftey hammer','',300.00),
(15,'coat hanger','',200.00),
(16,'Helmet','',900.00),
(17,'Gloves','',299.00),
(18,'Sleeves','',125.00),
(19,'Face Mask','',200.00),
(20,'Bike Lock','',100.00),
(21,'Knee Elbow Gaurd','',400.00),
(22,'bike cover','',450.00);
