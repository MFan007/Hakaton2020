-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 18, 2020 at 09:04 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phones`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (1,'Samsung Galaxy S10','brand new Samsung Galaxy S10 model',700);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (2,'Samsung Galaxy S10+','brand new Samsung Galaxy S10+ model',800);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (3,'Samsung Galaxy S10e','brand new Samsung Galaxy S10e model',600);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (4,'Samsung Galaxy A50','brand new Samsung Galaxy A50 model',350);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (5,'Samsung Galaxy A70','brand new Samsung Galaxy A70 model',400);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (6,'Samsung Galaxy Note10','brand new Samsung Galaxy Note10 model',800);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (7,'Samsung Galaxy Note10+','brand new Samsung Galaxy Note10+ model',900);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (8,'Samsung Galaxy Fold','brand new Samsung Galaxy Fold model',2000);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (9,'Samsung Galaxy A51','brand new Samsung Galaxy A51 model',300);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (10,'Samsung Galaxy A71','brand new Samsung Galaxy A71 model',450);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (11,'Samsung Galaxy S10 lite','brand new Samsung Galaxy S10 lite model',650);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (12,'Samsung Galaxy Note10 lite','brand new Samsung Galaxy Note10 lite model',600);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (13,'Samsung Galaxy Xcover Pro','brand new Samsung Galaxy Xcover Pro model',500);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (14,'Apple iPhone 11','brand new Apple iPhone 11 model',900);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (15,'Apple iPhone 11 Pro','brand new Apple iPhone 11 Pro model',1000);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (16,'Apple iPhone 11 Pro Max','brand new Apple iPhone 11 Pro Max model',1100);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (17,'Apple iPhone X','brand new Apple iPhone X model',500);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (18,'Apple iPhone XS','brand new Apple iPhone XS model',500);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (19,'Apple iPhone XS Max','brand new Apple iPhone XS Max model',700);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (20,'Huawei nova 6','brand new Huawei nova 6 model',450);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (21,'Huawei nova 6 SE','brand new Huawei nova 6 SE model',350);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (22,'Huawei nova 5T','brand new Huawei nova 5T model',350);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (23,'Huawei nova 5z','brand new Huawei nova 5z model',220);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (24,'Huawei Mate 30','brand new Huawei Mate 30 model',600);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (25,'Huawei Mate 30 Pro','brand new Huawei Mate 30 Pro model',800);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (26,'Huawei P30','brand new Huawei P30 model',500);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (27,'Huawei P30 Pro','brand new Huawei P30 Pro model',650);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (28,'Huawei P30 lite','brand new Huawei P30 lite model',250);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (29,'Huawei P smart Pro 2019','brand new Huawei P smart Pro 2019 model',350);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (30,'Xiaomi Redmi K30','brand new Xiaomi Redmi K30 model',250);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (31,'Xiaomi Mi Note 10','brand new Xiaomi Mi Note 10 model',450);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (32,'Xiaomi Mi Note 10 Pro','brand new Xiaomi Mi Note 10 Pro model',550);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (33,'Xiaomi Redmi 8','brand new Xiaomi Redmi 8 model',100);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (34,'Xiaomi Redmi 8A','brand new Xiaomi Redmi 8A model',120);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (35,'Xiaomi Mi CC9 Pro','brand new Xiaomi Mi CC9 Pro model',400);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (36,'Xiaomi Redmi Note 8','brand new Xiaomi Redmi Note 8 model',150);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (37,'Xiaomi Redmi Note 8 Pro','brand new Xiaomi Redmi Note 8 Pro model',200);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (38,'Xiaomi Redmi Note 8T','brand new Xiaomi Redmi Note 8T model',150);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (39,'Xiaomi Mi 9','brand new Xiaomi Mi 9 model',300);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (40,'Xiaomi Mi 9 Pro','brand new Xiaomi Mi 9 Pro model',500);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (41,'Xiaomi Mi 9 lite','brand new Xiaomi Mi 9 lite model',200);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (42,'Xiaomi Redmi K20','brand new Xiaomi Redmi K20 model',250);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (43,'Xiaomi Redmi K20 Pro Premium','brand new Xiaomi Redmi K20 Pro Premium model',400);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (44,'Honor V30','brand new Honor V30 model',450);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (45,'Honor V30 Pro','brand new Honor V30 Pro model',580);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (46,'Honor 20','brand new Honor 20 model',300);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (47,'Honor 20 Pro','brand new Honor 20 Pro model',400);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (48,'Honor 20 lite','brand new Honor 20 lite model',200);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (49,'Honor 9X','brand new Honor 9X model',230);
INSERT INTO `products`(`product_id`, `phone`, `description`, `price`) VALUES (50,'Honor 9X Pro','brand new Honor 9X Pro model',300);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
