-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2013 at 10:16 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lalaines`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts_receivable`
--
-- Creation: Feb 27, 2013 at 02:25 AM
--

DROP TABLE IF EXISTS `accounts_receivable`;
CREATE TABLE IF NOT EXISTS `accounts_receivable` (
  `cust_acct_no` int(15) NOT NULL,
  `current_balance` double NOT NULL,
  `credit_status` int(3) NOT NULL,
  `last_payment_date` datetime NOT NULL,
  PRIMARY KEY (`cust_acct_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cashiers`
--
-- Creation: Feb 27, 2013 at 02:25 AM
--

DROP TABLE IF EXISTS `cashiers`;
CREATE TABLE IF NOT EXISTS `cashiers` (
  `cashier_no` int(4) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `ip_address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chart_acct_groups`
--
-- Creation: Mar 13, 2013 at 05:31 AM
--

DROP TABLE IF EXISTS `chart_acct_groups`;
CREATE TABLE IF NOT EXISTS `chart_acct_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `chart_acct_master`
--
-- Creation: Mar 13, 2013 at 05:34 AM
--

DROP TABLE IF EXISTS `chart_acct_master`;
CREATE TABLE IF NOT EXISTS `chart_acct_master` (
  `account_code` varchar(6) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_type` int(11) NOT NULL,
  PRIMARY KEY (`account_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chart_acct_types`
--
-- Creation: Mar 13, 2013 at 05:30 AM
--

DROP TABLE IF EXISTS `chart_acct_types`;
CREATE TABLE IF NOT EXISTS `chart_acct_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--
-- Creation: Feb 27, 2013 at 02:25 AM
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` varchar(15) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `sex` varchar(7) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `lname`, `fname`, `mname`, `bdate`, `sex`, `address`, `contact`, `email`) VALUES
('201200001', 'Lora', 'Rosario', 'Abad', '1955-10-08', 'Female', '189 P. Inocentes St., Naval, Biliran', '09268356176', ''),
('201200002', 'Lopez', 'Mark', '', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--
-- Creation: Feb 27, 2013 at 02:25 AM
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `employee_id` varchar(15) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `sex` varchar(7) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `lname`, `fname`, `mname`, `bdate`, `sex`, `address`, `contact`, `email`) VALUES
('A-05382', 'Lora', 'Kristian Jacob', 'Abad', '1992-12-12', 'Male', '189 P. Inocentes St., Naval, Biliran', '09336925206', 'kjalora92@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_master_file`
--
-- Creation: Feb 27, 2013 at 02:25 AM
--

DROP TABLE IF EXISTS `inventory_master_file`;
CREATE TABLE IF NOT EXISTS `inventory_master_file` (
  `item_code` int(5) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `qty_on_hand` int(10) NOT NULL,
  PRIMARY KEY (`item_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_master_file`
--

INSERT INTO `inventory_master_file` (`item_code`, `item_name`, `qty_on_hand`) VALUES
(11253, 'Pocket Calendar', 80),
(558082, 'Veronica Brief', 29),
(938221, 'NW Brassiere', 27);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_master_file_details`
--
-- Creation: Mar 05, 2013 at 02:13 PM
--

DROP TABLE IF EXISTS `inventory_master_file_details`;
CREATE TABLE IF NOT EXISTS `inventory_master_file_details` (
  `item_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_master_file_details`
--

INSERT INTO `inventory_master_file_details` (`item_code`) VALUES
(11253),
(558082),
(938221);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_trans_file`
--
-- Creation: Feb 27, 2013 at 02:25 AM
--

DROP TABLE IF EXISTS `inventory_trans_file`;
CREATE TABLE IF NOT EXISTS `inventory_trans_file` (
  `inventory_no` int(10) NOT NULL AUTO_INCREMENT,
  `item_code` int(5) NOT NULL,
  `date_time` datetime NOT NULL,
  `units_received` int(10) NOT NULL,
  `units_sold` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`inventory_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `inventory_trans_file`
--

INSERT INTO `inventory_trans_file` (`inventory_no`, `item_code`, `date_time`, `units_received`, `units_sold`, `user`) VALUES
(10, 558082, '2013-03-05 22:30:28', 0, 25, ''),
(11, 938221, '2013-03-05 22:30:28', 0, 32, ''),
(12, 558082, '2013-03-07 16:54:30', 0, 10, ''),
(13, 938221, '2013-03-07 16:54:30', 0, 8, ''),
(14, 558082, '2013-03-13 21:42:46', 0, 4, '0'),
(15, 938221, '2013-03-13 21:42:46', 0, 12, '0'),
(16, 558082, '2013-03-13 22:21:37', 0, 5, 'A-05382'),
(17, 938221, '2013-03-13 22:21:37', 0, 4, 'A-05382'),
(18, 938221, '2013-03-13 22:21:37', 0, 5, 'A-05382'),
(19, 558082, '2013-03-13 22:21:37', 0, 8, 'A-05382'),
(20, 558082, '2013-03-13 22:45:12', 0, 23, 'A-05382'),
(21, 938221, '2013-03-13 22:45:12', 0, 3, 'A-05382'),
(22, 558082, '2013-03-14 15:38:54', 0, 4, 'A-05382'),
(23, 938221, '2013-03-14 15:38:54', 0, 5, 'A-05382'),
(24, 558082, '2013-03-14 15:38:54', 0, 4, 'A-05382'),
(25, 938221, '2013-03-14 15:38:54', 0, 2, 'A-05382'),
(26, 938221, '2013-03-14 15:38:54', 0, 3, 'A-05382'),
(27, 938221, '2013-03-14 15:38:54', 0, 1, 'A-05382'),
(28, 938221, '2013-03-14 15:38:54', 0, 4, 'A-05382'),
(29, 938221, '2013-03-14 15:38:54', 0, 3, 'A-05382'),
(30, 938221, '2013-03-14 15:38:54', 0, 1, 'A-05382'),
(31, 938221, '2013-03-14 15:38:54', 0, 3, 'A-05382'),
(32, 558082, '2013-03-14 15:38:54', 0, 4, 'A-05382'),
(33, 558082, '2013-03-14 15:38:54', 0, 4, 'A-05382'),
(34, 938221, '2013-03-14 15:38:54', 0, 3, 'A-05382'),
(35, 938221, '2013-03-14 15:38:54', 0, 3, 'A-05382'),
(36, 558082, '2013-03-14 15:38:54', 0, 4, 'A-05382'),
(37, 938221, '2013-03-14 15:38:54', 0, 3, 'A-05382'),
(38, 558082, '2013-03-14 15:38:54', 0, 0, 'A-05382'),
(39, 938221, '2013-03-14 15:38:54', 0, 4, 'A-05382'),
(40, 558082, '2013-03-14 15:38:54', 0, 2, 'A-05382'),
(41, 938221, '2013-03-14 15:38:54', 0, 6, 'A-05382'),
(42, 558082, '2013-03-14 15:38:54', 0, 7, 'A-05382'),
(43, 938221, '2013-03-14 15:38:54', 0, 3, 'A-05382'),
(44, 938221, '2013-03-14 15:38:54', 0, 6, 'A-05382'),
(45, 558082, '2013-03-14 15:38:54', 0, 8, 'A-05382'),
(46, 938221, '2013-03-14 15:38:54', 0, 2, 'A-05382'),
(47, 558082, '2013-03-14 15:42:27', 0, 9, 'A-05382'),
(48, 938221, '2013-03-14 15:42:27', 0, 5, 'A-05382'),
(49, 558082, '2013-03-14 15:44:34', 0, 3, 'A-05382'),
(50, 558082, '2013-03-14 15:44:34', 0, 11, 'A-05382'),
(51, 938221, '2013-03-14 15:44:34', 0, 6, 'A-05382');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--
-- Creation: Feb 27, 2013 at 02:25 AM
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `item_code` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  PRIMARY KEY (`item_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_code`, `name`, `desc`) VALUES
(11253, 'Pocket Calendar', '201 Z POCKET CALENDAR'),
(558082, 'Veronica Brief', 'VERONICA FULL BRF(BLK)-XL(C)'),
(938221, 'NW Brassiere', 'ULY NWBRA DST 32A/70A');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--
-- Creation: Feb 27, 2013 at 02:25 AM
--

DROP TABLE IF EXISTS `prices`;
CREATE TABLE IF NOT EXISTS `prices` (
  `item_code` int(10) NOT NULL,
  `unit_price` double NOT NULL,
  PRIMARY KEY (`item_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`item_code`, `unit_price`) VALUES
(11253, 32),
(558082, 140),
(938221, 310);

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoice`
--
-- Creation: Feb 27, 2013 at 02:25 AM
--

DROP TABLE IF EXISTS `sales_invoice`;
CREATE TABLE IF NOT EXISTS `sales_invoice` (
  `invoice_no` int(10) NOT NULL AUTO_INCREMENT,
  `cust_acct_no` int(15) NOT NULL,
  `cust_name` varchar(225) NOT NULL,
  `cashier_no` varchar(12) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `amount_due` double NOT NULL,
  `vat_amount` double NOT NULL,
  PRIMARY KEY (`invoice_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `sales_invoice`
--

INSERT INTO `sales_invoice` (`invoice_no`, `cust_acct_no`, `cust_name`, `cashier_no`, `date_time`, `amount_due`, `vat_amount`) VALUES
(11, 201200001, ' Lora, Rosario', '0', '2013-03-05 14:30:28', 13420, 0),
(12, 201200002, ' Lopez, Mark', '0', '2013-03-07 08:54:30', 3880, 0),
(13, 201200001, ' Lora, Rosario', '0', '2013-03-13 13:42:46', 4280, 0),
(14, 0, '', '0', '2013-03-13 13:47:41', 0, 0),
(15, 0, '', '0', '2013-03-13 13:57:01', 0, 0),
(16, 0, '', 'A-05382', '2013-03-13 13:59:18', 0, 0),
(17, 0, '', 'A-05382', '2013-03-13 14:21:37', 4610, 0),
(18, 201200002, ' Lopez, Mark', 'A-05382', '2013-03-13 14:45:12', 4150, 0),
(19, 201200002, ' Lopez, Mark', 'A-05382', '2013-03-14 07:38:54', 21300, 952.5),
(20, 201200001, ' Lora, Rosario', 'A-05382', '2013-03-14 07:42:27', 2810, 301.07),
(21, 201200002, '', 'A-05382', '2013-03-14 07:44:34', 3820, 409.29);

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoice_details`
--
-- Creation: Feb 27, 2013 at 02:25 AM
--

DROP TABLE IF EXISTS `sales_invoice_details`;
CREATE TABLE IF NOT EXISTS `sales_invoice_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_no` int(10) NOT NULL,
  `inventory_no` int(10) NOT NULL,
  `item_code` int(15) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` double NOT NULL,
  `amount` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `sales_invoice_details`
--

INSERT INTO `sales_invoice_details` (`id`, `invoice_no`, `inventory_no`, `item_code`, `quantity`, `price`, `amount`) VALUES
(5, 11, 10, 558082, 25, 140, 3500),
(6, 11, 11, 938221, 32, 310, 9920),
(7, 12, 12, 558082, 10, 140, 1400),
(8, 12, 13, 938221, 8, 310, 2480),
(9, 13, 14, 558082, 4, 140, 560),
(10, 13, 15, 938221, 12, 310, 3720),
(11, 17, 16, 558082, 5, 140, 700),
(12, 17, 17, 938221, 4, 310, 1240),
(13, 17, 18, 938221, 5, 310, 1550),
(14, 17, 19, 558082, 8, 140, 1120),
(15, 18, 20, 558082, 23, 140, 3220),
(16, 18, 21, 938221, 3, 310, 930),
(17, 19, 22, 558082, 4, 140, 560),
(18, 19, 23, 938221, 5, 310, 1550),
(19, 19, 24, 558082, 4, 140, 560),
(20, 19, 25, 938221, 2, 310, 620),
(21, 19, 26, 938221, 3, 310, 930),
(22, 19, 27, 938221, 1, 310, 310),
(23, 19, 28, 938221, 4, 310, 1240),
(24, 19, 29, 938221, 3, 310, 930),
(25, 19, 30, 938221, 1, 310, 310),
(26, 19, 31, 938221, 3, 310, 930),
(27, 19, 32, 558082, 4, 140, 560),
(28, 19, 33, 558082, 4, 140, 560),
(29, 19, 34, 938221, 3, 310, 930),
(30, 19, 35, 938221, 3, 310, 930),
(31, 19, 36, 558082, 4, 140, 560),
(32, 19, 37, 938221, 3, 310, 930),
(33, 19, 38, 558082, 0, 140, 0),
(34, 19, 39, 938221, 4, 310, 1240),
(35, 19, 40, 558082, 2, 140, 280),
(36, 19, 41, 938221, 6, 310, 1860),
(37, 19, 42, 558082, 7, 140, 980),
(38, 19, 43, 938221, 3, 310, 930),
(39, 19, 44, 938221, 6, 310, 1860),
(40, 19, 45, 558082, 8, 140, 1120),
(41, 19, 46, 938221, 2, 310, 620),
(42, 20, 47, 558082, 9, 140, 1260),
(43, 20, 48, 938221, 5, 310, 1550),
(44, 21, 49, 558082, 3, 140, 420),
(45, 21, 50, 558082, 11, 140, 1540),
(46, 21, 51, 938221, 6, 310, 1860);

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoice_temp`
--
-- Creation: Feb 27, 2013 at 02:25 AM
--

DROP TABLE IF EXISTS `sales_invoice_temp`;
CREATE TABLE IF NOT EXISTS `sales_invoice_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_no` int(11) NOT NULL,
  `item_code` int(15) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` double NOT NULL,
  `amount` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--
-- Creation: Feb 27, 2013 at 02:25 AM
--

DROP TABLE IF EXISTS `user_accounts`;
CREATE TABLE IF NOT EXISTS `user_accounts` (
  `employee_id` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(3) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`employee_id`, `password`, `role_id`) VALUES
('A-05382', 'kjhenyo21', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--
-- Creation: Feb 27, 2013 at 02:25 AM
--

DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE IF NOT EXISTS `user_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(15) NOT NULL,
  `desc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role`, `desc`) VALUES
(1, 'admin', 'Administrator'),
(2, 'cashier', 'Cashier');

-- --------------------------------------------------------

--
-- Table structure for table `user_sessions`
--
-- Creation: Mar 13, 2013 at 07:41 AM
--

DROP TABLE IF EXISTS `user_sessions`;
CREATE TABLE IF NOT EXISTS `user_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sessions`
--

INSERT INTO `user_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('f63edad43c320e293cfa59f18e514edc', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:13.0) Gecko/20100101 Firefox/13.0', 1363252012, 'a:2:{s:6:"status";s:17:"authorizedCashier";s:2:"id";s:7:"A-05382";}');

-- --------------------------------------------------------

--
-- Table structure for table `vat_rates`
--
-- Creation: Mar 14, 2013 at 06:01 AM
--

DROP TABLE IF EXISTS `vat_rates`;
CREATE TABLE IF NOT EXISTS `vat_rates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vat_rate` double NOT NULL,
  `date_implemented` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vat_rates`
--

INSERT INTO `vat_rates` (`id`, `vat_rate`, `date_implemented`) VALUES
(1, 0.12, '2006-02-01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
