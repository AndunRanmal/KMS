-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2017 at 06:07 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kms`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_requisition`
--

CREATE TABLE `department_requisition` (
  `Dep_req_Id` int(11) NOT NULL,
  `Item_code` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Unit_price` float NOT NULL,
  `Quantity` float NOT NULL,
  `Unit` varchar(50) NOT NULL,
  `Date_wanted` date NOT NULL,
  `Vendor_Id` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Remarks` text NOT NULL,
  `Requisition_id` varchar(50) NOT NULL,
  `PO_Id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_requisition`
--

INSERT INTO `department_requisition` (`Dep_req_Id`, `Item_code`, `Description`, `Unit_price`, `Quantity`, `Unit`, `Date_wanted`, `Vendor_Id`, `Date`, `Remarks`, `Requisition_id`, `PO_Id`) VALUES
(16, '001', 'veg', 500, 6, 'kg', '2017-06-02', 'Vendor1', '2017-05-01', 'fdfdfd', 'PR_1', '1'),
(17, '001', 'veg', 500, 6, 'kg', '2017-06-02', 'Vendor1', '2017-05-01', 'fdfdfd', 'PR_2', '1'),
(18, '002', 'meat', 600, 10, 'kg', '2017-06-01', 'Vendor1', '2017-05-01', 'dsdsd', 'PR_2', '1'),
(19, '111', 'carrot', 200, 10, 'kg', '2017-06-01', 'Vendor1', '2017-05-01', 'ewe', 'PR_3', '1'),
(20, '112', 'beans', 300, 10, 'kg', '2017-06-01', 'Vendor1', '2017-05-01', 'ewewe', 'PR_3', '1'),
(21, '111', 'fish', 200, 10, 'kg', '2017-06-01', 'Vendor1', '2017-05-01', 'ewe', 'PR_3', '1'),
(22, '111', 'dhal', 200, 10, 'kg', '2017-06-01', 'Vendor1', '2017-05-01', 'ewe', 'PR_3', '1'),
(23, '112', 'beans', 300, 10, 'kg', '2017-06-01', 'Vendor1', '2017-05-01', 'ewewe', 'PR_3', '1'),
(24, '001', 'dsds', 200, 5, 'kg', '2017-05-31', 'Vendor2', '2017-05-08', 'sds', 'PR_4', '0'),
(25, 'Dhal', 'dsds', 200, 5, 'kg', '2017-05-31', 'Vendor1', '2017-05-08', 'sds', 'PR_4', '0'),
(100, 'Cheese', '', 500, 1, 'kg', '2017-05-12', 'Vendor1', '2017-05-11', '', 'PR_6', '0'),
(101, 'Coconut', '', 50, 20, 'pcs', '2017-05-12', 'Vendor1', '2017-05-11', '', 'PR_6', '0');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_Id` int(11) NOT NULL,
  `Emp_Name` varchar(250) NOT NULL,
  `Emp_address` text NOT NULL,
  `Contact_No` int(10) NOT NULL,
  `Qualifications` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `Equip_Id` int(11) NOT NULL,
  `Equip_Name` varchar(255) NOT NULL,
  `No_of_units` int(11) NOT NULL,
  `Unit_price` float NOT NULL,
  `Vendor` varchar(255) NOT NULL,
  `Vendor_Id` int(11) NOT NULL,
  `Warenty_period_ends` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ingriedents`
--

CREATE TABLE `ingriedents` (
  `Ingriedents_Id` int(11) NOT NULL,
  `Ingriedents_Name` varchar(250) NOT NULL,
  `Unit_price` float NOT NULL,
  `Ingriedent_Quantity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingriedents`
--

INSERT INTO `ingriedents` (`Ingriedents_Id`, `Ingriedents_Name`, `Unit_price`, `Ingriedent_Quantity`) VALUES
(1, 'carrot', 200, 0),
(2, 'Dhal', 150, 0),
(3, 'Beans', 150, 0),
(4, 'Coconut', 50, 0),
(5, 'Cheese', 500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `Menu_Id` int(11) NOT NULL,
  `Menu_Name` varchar(200) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Items` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `Po_Id` int(11) NOT NULL,
  `Item_code` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Quantity` float NOT NULL,
  `Unit_price` float NOT NULL,
  `Total` float NOT NULL,
  `Vendor_Id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `Recipe_Id` int(11) NOT NULL,
  `Method_to_cook` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requisition_overview`
--

CREATE TABLE `requisition_overview` (
  `Id` varchar(10) NOT NULL,
  `Issued_date` date NOT NULL,
  `Last_updated` date NOT NULL,
  `Approved_date` date NOT NULL,
  `Approved_by` varchar(5) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requisition_overview`
--

INSERT INTO `requisition_overview` (`Id`, `Issued_date`, `Last_updated`, `Approved_date`, `Approved_by`, `Status`) VALUES
('', '2017-05-11', '0000-00-00', '0000-00-00', '', 0),
('PR_001', '2017-05-01', '2017-05-01', '2017-05-01', '02', 1),
('PR_2', '2017-05-01', '0000-00-00', '0000-00-00', '', 0),
('PR_3', '2017-05-01', '0000-00-00', '0000-00-00', '', 0),
('PR_4', '2017-05-08', '0000-00-00', '0000-00-00', '', 1),
('PR_6', '2017-05-11', '0000-00-00', '0000-00-00', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `Stock_Id` int(11) NOT NULL,
  `Bill_Id` varchar(50) NOT NULL,
  `Po_Id` int(11) NOT NULL,
  `Item_code` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Quntitty` float NOT NULL,
  `Approved_by` varchar(50) NOT NULL,
  `Remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `store_requisition`
--

CREATE TABLE `store_requisition` (
  `Store_req_Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Item_Name` varchar(255) NOT NULL,
  `Item_Code` varchar(50) NOT NULL,
  `Quantity_Issued` float NOT NULL,
  `Stock_in_hand` float NOT NULL,
  `Remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `Vendor_Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Contact_No` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`Vendor_Id`, `Name`, `Address`, `Contact_No`) VALUES
(1, 'Vendor1', '07, Colombo 5', '0771547896'),
(2, 'Vendor2', '5,Colombo 7 ', '0712589741');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_requisition`
--
ALTER TABLE `department_requisition`
  ADD PRIMARY KEY (`Dep_req_Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_Id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`Equip_Id`);

--
-- Indexes for table `ingriedents`
--
ALTER TABLE `ingriedents`
  ADD PRIMARY KEY (`Ingriedents_Id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`Menu_Id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`Po_Id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`Recipe_Id`);

--
-- Indexes for table `requisition_overview`
--
ALTER TABLE `requisition_overview`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Stock_Id`);

--
-- Indexes for table `store_requisition`
--
ALTER TABLE `store_requisition`
  ADD PRIMARY KEY (`Store_req_Id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`Vendor_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department_requisition`
--
ALTER TABLE `department_requisition`
  MODIFY `Dep_req_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Emp_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `Equip_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ingriedents`
--
ALTER TABLE `ingriedents`
  MODIFY `Ingriedents_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `Menu_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `Po_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `Recipe_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `Stock_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `store_requisition`
--
ALTER TABLE `store_requisition`
  MODIFY `Store_req_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `Vendor_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
