-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2017 at 07:37 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kms`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_supplier`
--

CREATE TABLE IF NOT EXISTS `new_supplier` (
  `sid` int(5) NOT NULL AUTO_INCREMENT,
  `names` varchar(100) NOT NULL,
  `pnumber` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `new_supplier`
--

INSERT INTO `new_supplier` (`sid`, `names`, `pnumber`, `address`, `image`) VALUES
(18, 'Sugath gunapala', '0714578537', '324B,\r\nUnawatuna,\r\nGalle', 'images/ADI.jpg'),
(20, 'Nimal Priyashantha', '0775487235', '147,Fish Market,Magalla,Galle', 'images/Selling-Fish-in-Sri-Lanka.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
