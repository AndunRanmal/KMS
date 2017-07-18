-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2017 at 08:05 AM
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
