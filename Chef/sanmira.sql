-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2017 at 06:40 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sanmira`
--
CREATE DATABASE IF NOT EXISTS `sanmira` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sanmira`;

-- --------------------------------------------------------

--
-- Table structure for table `amount_of_ingredients`
--

CREATE TABLE IF NOT EXISTS `amount_of_ingredients` (
  `Item_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  KEY `FK__item` (`Item_id`),
  KEY `FK__menu` (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amount_of_ingredients`
--

INSERT INTO `amount_of_ingredients` (`Item_id`, `menu_id`, `amount`) VALUES
(1, 101, '35.00'),
(1, 102, '300.00'),
(2, 101, '70.00'),
(2, 104, '50.00'),
(2, 102, '300.00'),
(2, 105, '30.00'),
(2, 106, '100.00'),
(2, 108, '10.00'),
(2, 109, '30.00'),
(1, 110, '140.00'),
(1, 111, '125.00'),
(5, 112, '1.00'),
(5, 113, '8.00'),
(5, 114, '30.00'),
(7, 115, '250.00'),
(7, 116, '250.00'),
(7, 117, '150.00'),
(7, 107, '200.00'),
(7, 108, '10.00'),
(7, 109, '30.00'),
(9, 119, '200.00'),
(9, 120, '100.00'),
(9, 103, '50.00'),
(9, 121, '80.00'),
(9, 122, '40.00'),
(9, 106, '70.00'),
(9, 107, '100.00'),
(9, 123, '70.00'),
(9, 124, '0.10'),
(9, 104, '30.00'),
(9, 108, '10.00'),
(9, 101, '100.00'),
(10, 126, '50.00'),
(10, 125, '60.00'),
(10, 124, '0.10'),
(10, 123, '40.00'),
(10, 101, '70.00'),
(10, 108, '10.00'),
(10, 107, '50.00'),
(13, 127, '180.00'),
(13, 128, '60.00'),
(13, 103, '50.00'),
(13, 106, '40.00'),
(13, 129, '80.00'),
(13, 101, '50.00'),
(13, 108, '20.00'),
(14, 130, '25.00'),
(14, 131, '10.00'),
(14, 132, '100.00'),
(14, 119, '150.00'),
(14, 103, '60.00'),
(14, 101, '80.00');

-- --------------------------------------------------------

--
-- Table structure for table `counts`
--

CREATE TABLE IF NOT EXISTS `counts` (
  `Date` date NOT NULL,
  `Count` int(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `person` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counts`
--

INSERT INTO `counts` (`Date`, `Count`, `time`, `person`, `number`) VALUES
('0000-00-00', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE IF NOT EXISTS `ingredients` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(100) DEFAULT NULL,
  `unit` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`menu_id`, `menu_name`, `unit`) VALUES
(101, 'olive oil', 'L'),
(102, 'carrot', 'kg'),
(103, 'onion', 'kg'),
(104, 'cumin seeds', 'kg'),
(105, 'celery', 'kg'),
(106, 'garlic', 'kg'),
(107, 'tomatoes', 'kg'),
(108, 'salt', 'kg'),
(109, 'black pepper', 'kg'),
(110, 'red lentils', 'kg'),
(111, 'milk', 'L'),
(112, 'guava', NULL),
(113, 'strawberry', NULL),
(114, 'sugar', 'kg'),
(115, 'courgettes', 'kg'),
(116, 'aubergines', 'kg'),
(117, 'green peppers', 'kg'),
(118, 'yoghurt', 'kg'),
(119, 'basmati rice', 'kg'),
(120, 'pudina leaves', 'kg'),
(121, 'green capsicum', 'kg'),
(122, ' ginger', 'kg'),
(123, 'green chillies', 'kg'),
(124, 'cocunut', NULL),
(125, 'dhal', 'kg'),
(126, 'coriander leaves', 'kg'),
(127, 'rice', 'kg'),
(128, 'soy sauce', 'L'),
(129, 'bell pepper', 'kg'),
(130, 'butter', 'kg'),
(131, 'turmic', 'kg'),
(132, 'chicken', 'kg');

-- --------------------------------------------------------

--
-- Table structure for table `insertapp`
--

CREATE TABLE IF NOT EXISTS `insertapp` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `insertapp`
--

INSERT INTO `insertapp` (`Id`, `name`, `image`, `price`) VALUES
(2, 'Shrimp Cocktail Sanmira Style', 'images/sanmira.jpg', '800.00'),
(3, 'Seafood Stuffed Tomato baked with Grated Cheese', 'images/crab.jpg', '700.00');

-- --------------------------------------------------------

--
-- Table structure for table `insertitem`
--

CREATE TABLE IF NOT EXISTS `insertitem` (
  `item` int(11) DEFAULT NULL,
  `welcome` int(11) DEFAULT NULL,
  KEY `FK_insertitem_item` (`item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertitem`
--

INSERT INTO `insertitem` (`item`, `welcome`) VALUES
(2, NULL),
(3, NULL),
(5, NULL),
(7, NULL),
(9, NULL),
(10, NULL),
(11, NULL),
(13, NULL),
(14, NULL),
(15, NULL),
(16, NULL),
(18, NULL),
(19, NULL),
(20, NULL),
(22, NULL),
(23, NULL),
(24, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `insertlightmeals`
--

CREATE TABLE IF NOT EXISTS `insertlightmeals` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `insertlightmeals`
--

INSERT INTO `insertlightmeals` (`Id`, `name`, `image`, `price`) VALUES
(1, 'Crispy Salad', 'images/mint.jpg', '700.00'),
(2, 'Seafood Connection', 'images/seafood.jpg', '650.00');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `Item_id` int(10) NOT NULL,
  `Item_name` varchar(50) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `unitprice` double NOT NULL,
  PRIMARY KEY (`Item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Item_id`, `Item_name`, `amount`, `unit`, `unitprice`) VALUES
(1, 'Butter Baked Carrot Lentil Soup', '40', 'L', 150),
(2, 'Diced vegetable Broth', '30', 'L', 200),
(3, 'Curry Leaf Flavores Chicken Both', '40', 'L', 200),
(4, 'Frsesh Fruit Juice ', '50', 'L', 150),
(5, 'Stawberry Guava', '55', 'L', 150),
(6, 'Onion', '25', 'Kg', 100),
(7, 'Green Chilly with Cumin Yoghurt ', '35', 'Kg', 200),
(8, ' Tomato', '35', 'Kg', 150),
(9, 'Fresh Mint and Capsicum', '40', 'Kg', 150),
(10, 'Spring Onion & Chutney', '35', 'Kg', 250),
(11, 'Cold Meat & Sweet Peppers', '45', 'Kg', 200),
(12, 'Chicken Fried Rice', '60', 'Kg', 250),
(13, 'Vegetable Fried Rice', '55', 'Kg', 200),
(14, 'Chicken Biriyani', '50', 'Kg', 250),
(15, 'Steamed Bsmathi', '45', 'Kg', 250),
(16, 'Noodles', '35', 'Kg', 150),
(17, 'Fried Fish in Curry Leaf Bread', '100', 'Kg', 150),
(18, 'Fish Lemon Stew ', '80', 'Kg', 100),
(19, 'Devilled Fish', '70', 'Kg', 200),
(20, 'Curried Assorted Seafood', '60', 'Kg', 300),
(21, 'Chicken Pepper Curry Southern Style', '70', 'Kg', 250),
(22, 'Pork Black Curry', '60', 'Kg', 250),
(23, 'Chicken Biriyani', '60', 'Kg', 250),
(24, 'Pork or Beef Sweet & sour', '60', 'Kg', 250);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`Id`, `name`, `image`, `price`) VALUES
(17, 'Chicken & Noodles With Sweet Corn', 'images/basmathi.jpg', '567.00'),
(18, 'Cream of Tomato with Basil', 'images/cucucmber.jpg', '678.00'),
(20, 'Cream of Tomato with Basil', 'images/fish.jpg', '100.00'),
(22, 'Cream of Tomato with Basil', 'images/chiken.jpg', '100.00'),
(26, 'Chicken & Noodles With Sweet Corn', 'images/fried.jpg', '350.00');

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE IF NOT EXISTS `total` (
  `menu_id` int(11) DEFAULT NULL,
  `menu_name` varchar(100) DEFAULT NULL,
  `result` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`menu_id`, `menu_name`, `result`, `unit`) VALUES
(101, 'olive oil', 0, 'L'),
(101, 'olive oil', 0, 'L'),
(101, 'olive oil', 0, 'L'),
(101, 'olive oil', 0, 'L'),
(101, 'olive oil', 0, 'L'),
(102, 'carrot', 0, 'kg'),
(103, 'onion', 0, 'kg'),
(103, 'onion', 0, 'kg'),
(103, 'onion', 0, 'kg'),
(104, 'cumin seeds', 0, 'kg'),
(104, 'cumin seeds', 0, 'kg'),
(105, 'celery', 0, 'kg'),
(106, 'garlic', 0, 'kg'),
(106, 'garlic', 0, 'kg'),
(106, 'garlic', 0, 'kg'),
(107, 'tomatoes', 0, 'kg'),
(107, 'tomatoes', 0, 'kg'),
(107, 'tomatoes', 0, 'kg'),
(108, 'salt', 0, 'kg'),
(108, 'salt', 0, 'kg'),
(108, 'salt', 0, 'kg'),
(108, 'salt', 0, 'kg'),
(108, 'salt', 0, 'kg'),
(109, 'black pepper', 0, 'kg'),
(109, 'black pepper', 0, 'kg'),
(112, 'guava', 0, ''),
(113, 'strawberry', 0, ''),
(114, 'sugar', 0, 'kg'),
(115, 'courgettes', 0, 'kg'),
(116, 'aubergines', 0, 'kg'),
(117, 'green peppers', 0, 'kg'),
(119, 'basmati rice', 0, 'kg'),
(119, 'basmati rice', 0, 'kg'),
(120, 'pudina leaves', 0, 'kg'),
(121, 'green capsicum', 0, 'kg'),
(122, ' ginger', 0, 'kg'),
(123, 'green chillies', 0, 'kg'),
(123, 'green chillies', 0, 'kg'),
(124, 'cocunut', 0, ''),
(124, 'cocunut', 0, ''),
(125, 'dhal', 0, 'kg'),
(126, 'coriander leaves', 0, 'kg'),
(127, 'rice', 0, 'kg'),
(128, 'soy sauce', 0, 'L'),
(129, 'bell pepper', 0, 'kg'),
(130, 'butter', 0, 'kg'),
(131, 'turmic', 0, 'kg'),
(132, 'chicken', 0, 'kg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `amount_of_ingredients`
--
ALTER TABLE `amount_of_ingredients`
  ADD CONSTRAINT `FK__item` FOREIGN KEY (`Item_id`) REFERENCES `item` (`Item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK__menu` FOREIGN KEY (`menu_id`) REFERENCES `ingredients` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `insertitem`
--
ALTER TABLE `insertitem`
  ADD CONSTRAINT `FK_insertitem_item` FOREIGN KEY (`item`) REFERENCES `item` (`Item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
