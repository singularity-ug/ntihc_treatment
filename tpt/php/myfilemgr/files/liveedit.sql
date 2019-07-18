-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2012 at 06:36 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `liveedit`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

CREATE TABLE IF NOT EXISTS `bank_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_code` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `account_num` varchar(100) NOT NULL,
  `debit` varchar(100) NOT NULL,
  `credit` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bank_account`
--

INSERT INTO `bank_account` (`id`, `bank_code`, `bank_name`, `currency`, `account_num`, `debit`, `credit`, `balance`) VALUES
(2, 'BDO $', 'BDO Main', 'AUD', 'nbmn', '1201', '100', '1101'),
(3, 'CVI USD', 'CVI Dollar', 'USD', 'ghghg', '1100', '1200', '-100'),
(4, 'CVI Php', 'CVI Peso', 'AUD', 'mnjh', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `bank_transfer`
--

CREATE TABLE IF NOT EXISTS `bank_transfer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trn_num` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `debit` varchar(100) NOT NULL,
  `credit` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `pesoval` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `bank_transfer`
--

INSERT INTO `bank_transfer` (`id`, `trn_num`, `date`, `debit`, `credit`, `bank_name`, `remarks`, `pesoval`) VALUES
(1, 'BS-DAMG4BO2', '2012-08-31', '10000', '0', 'BDO Main', 'From Western Union', ''),
(2, 'BS-QZGJYN5D', '2012-08-31', '0', '10000', 'PNB Lacson', 'from argie', ''),
(3, 'BS-UE6HJRNJ', '2012-08-31', '1000', '0', 'PNB Lacson', '', ''),
(4, 'BS-UE6HJRNJ', '2012-08-31', '1000', '0', 'PNB Lacson', '', ''),
(5, 'BS-6YRXXKWW', '2012-09-06', '0', '100', 'PNB Lacson', 'asasa', ''),
(6, 'BS-PUXF0OZE', '2012-09-10', '11111', '0', '45454', 'jhjhjhjhj', ''),
(7, 'BS-SKGRLEPS', '2012-09-11', '1000000', '0', '45454', 'from kalog', ''),
(8, 'BS-I2JMLRIW', '2012-09-11', '1', '0', '45454', 'jhjhj', ''),
(9, 'BS-I2JMLRIW', '2012-09-11', '1', '0', '45454', '', ''),
(10, 'BS-0KL4BLPR', '2012-09-11', '0', '1', '45454', 'nvbhvbvbv', ''),
(11, 'BS-ZOARQXSU', '2012-09-11', '0', '1', '45454', 'xcvbnm,', ''),
(12, 'BS-ESYNHITS', '2012-09-11', '2', '0', '45454', 'mhgutuhyutyt', ''),
(13, 'BS-VMCUXBFC', '2012-09-11', '1', '0', 'BDO Main', 'cvbnm,', ''),
(14, 'BS-UA5CVDBQ', '2012-09-11', '1', '0', 'BDO Main', 'jhhjhj', ''),
(15, 'BS-JRQ5RZL7', '2012-09-11', '1', '0', 'BDO Main', 'sdfghjkuiui7', ''),
(16, 'BS-FCIXN3FE', '2012-09-11', '1', '0', 'BDO Main', 'ghjgg', ''),
(17, 'BS-SS03G2HI', '2012-09-11', '1', '0', 'BDO Main', 'jyhjhghg', ''),
(18, 'BS-SS03G2HI', '2012-09-11', '100', '0', 'BDO Main', 'bhgghgh', ''),
(19, 'BS-VXS55B5S', '2012-09-11', '0', '100', 'BDO Main', 'nbnbnbnbn', ''),
(20, 'BS-RHMPKI6B', '2012-09-12', '1000', '0', 'CVI USD', '0', '42350'),
(21, 'BS-MKR7FH63', '2012-09-12', '0', '100', 'CVI USD', '0', '4300.12'),
(22, 'BS-ZLMTZK6N', '2012-09-12', '12', '0', '4545', '0', '498.72'),
(23, 'BS-EZOXGRS6', '2012-09-12', '100', '0', 'BDO $', 'from CVI USD', '100'),
(24, 'BS-B3HBXS5D', '2012-09-12', '100', '0', 'AUD BPI', 'from 4545', '100'),
(25, 'BS-ANBI2PMQ', '2012-09-12', '10', '0', 'AUD BPI', 'from 4545', '10'),
(26, 'BS-RGJ262Z6', '2012-09-13', '100', '0', 'CVI USD', '0', '4235'),
(27, 'BS-NA3VSMXY', '2012-09-13', '1000', '0', 'BDO $', 'from CVI USD', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `mname`, `contact`, `country`, `city`, `address`, `email`, `gender`, `age`) VALUES
(4, 'jhjkhjh', 'jhjhjhj', 'hjhjhjh', 'jhjhjhj', 'Albania', 'Delvine', 'ytyutytyt', 'ytyty@hgh.com', 'Male', 21);

-- --------------------------------------------------------

--
-- Table structure for table `other_bank_account`
--

CREATE TABLE IF NOT EXISTS `other_bank_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_code` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `account_num` varchar(100) NOT NULL,
  `debit` varchar(100) NOT NULL,
  `credit` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `pesoval` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `other_bank_account`
--

INSERT INTO `other_bank_account` (`id`, `bank_code`, `bank_name`, `currency`, `account_num`, `debit`, `credit`, `balance`, `pesoval`) VALUES
(2, '4545', '45454', 'AUD', '54545', '14', '10', '4', '4151906.13705'),
(3, 'AUD BPI', 'ututu', 'AUD', 'jhj', '10110', '0', '10110', '104633.5795');

-- --------------------------------------------------------

--
-- Table structure for table `power`
--

CREATE TABLE IF NOT EXISTS `power` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `adminpass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE IF NOT EXISTS `rates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency` varchar(30) NOT NULL,
  `rate` double NOT NULL,
  `buyrate` varchar(300) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `currency`, `rate`, `buyrate`, `name`) VALUES
(1, 'AUD', 42.12345, '41.56', 'Australian Dollar'),
(2, 'USD', 43.0012, '42.35', 'United States Dollar'),
(3, 'EUR', 90.767, '89.0967', 'EURO'),
(4, 'PHP', 1, '1', 'Philippine Peso');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_nu` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `pesoval` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `ttype` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `transaction_nu`, `date`, `name`, `currency`, `rate`, `pesoval`, `branch`, `amount`, `ttype`, `payment`) VALUES
(4, 'BS-WFVL6ZZF', '2012-09-07', '4', 'AUD', '41.56', '8312', '', '200', 'Buy', 'Cash'),
(5, 'BS-W347KX3W', '2012-09-07', '4', 'AUD', '41.56', '54526.72', '', '1312', 'Buy', 'Cash'),
(6, 'BS-AX3WIW7O', '2012-09-07', '4', 'USD', '42.35', '41418.3', '', '978', 'Buy', 'Cash'),
(7, 'BS-Q2ULQYVP', '2012-09-07', '4', 'USD', '42.35', '603106.35', '', '14241', 'Buy', 'Cash'),
(8, 'BS-OH2TZ00M', '2012-09-10', '4', 'AUD', '41.56', '41560', '', '1000', 'Buy', 'Cash'),
(9, 'BS-UA5CVDBQ', '2012-09-11', '4', 'USD', '42.35', '42.35', '', '1', 'Buy', 'Bank'),
(10, 'BS-JRQ5RZL7', '2012-09-11', '4', 'USD', '42.35', '42.35', '', '1', 'Buy', 'Bank'),
(11, 'BS-3O6XD4QB', '2012-09-11', '4', 'EUR', '89.0967', '890967', '', '10000', 'Buy', 'Cash'),
(12, 'BS-WOZUGUQZ', '2012-09-11', '4', 'AUD', '41.56', '4156', '', '100', 'Buy', 'Cash'),
(13, 'BS-XNLHXEX0', '2012-09-11', '4', 'AUD', '41.56', '4156000', '', '100000', 'Buy', 'Bank'),
(14, 'BS-MNCGMQKY', '2012-09-12', '4', 'USD', '42.35', '12705', '', '300', 'Buy', 'Cash'),
(15, 'BS-QAQPHNCD', '2012-09-12', '4', 'USD', '42.35', '8470', '', '200', 'Buy', 'Cash'),
(16, 'BS-DQN0YBSM', '2012-09-12', '4', 'USD', '42.35', '423500000', '', '10000000', 'Buy', 'Cash'),
(17, 'BS-GF7A6TPL', '2012-09-12', '4', 'USD', '42.35', '4235', '', '100', 'Buy', 'Cash'),
(18, 'BS-ZHQ2AP6A', '2012-09-12', '4', 'USD', '42.35', '4235000', '', '100000', 'Buy', 'Cash'),
(19, 'BS-BTNOW3JZ', '2012-09-12', '4', 'USD', '42.35', '4235', '', '100', 'Buy', 'Cash'),
(20, 'BS-SDT3YKWI', '2012-09-12', '4', 'USD', '42.35', '4235', '', '100', 'Buy', 'Cash'),
(21, 'BS-KHIQK3OM', '2012-09-12', '4', 'USD', '42.35', '42350', '', '1000', 'Buy', 'Cash'),
(22, 'BS-RHMPKI6B', '2012-09-12', '4', 'USD', '42.35', '42350', '', '1000', 'Buy', 'Cash'),
(23, 'BS-MKR7FH63', '2012-09-12', '4', 'USD', '43.0012', '4300.12', '', '100', 'Sell', 'Cash'),
(24, 'BS-ZLMTZK6N', '2012-09-12', '4', 'AUD', '41.56', '498.72', '', '12', 'Buy', 'Cash'),
(25, 'BS-RGJ262Z6', '2012-09-13', '4', 'USD', '42.35', '4235', '', '100', 'Buy', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_nu` varchar(30) NOT NULL,
  `cusname` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `currency` varchar(30) NOT NULL,
  `rate` varchar(150) NOT NULL,
  `serial` varchar(100) NOT NULL,
  `netconvert` varchar(150) NOT NULL,
  `trans_type` varchar(10) NOT NULL,
  `pitsa` varchar(30) NOT NULL,
  `mode` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cusname` (`cusname`),
  KEY `cusname_2` (`cusname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `transaction_nu`, `cusname`, `amount`, `currency`, `rate`, `serial`, `netconvert`, `trans_type`, `pitsa`, `mode`, `branch`) VALUES
(1, 'BS-QIGSTHBD', '4', 1, 'AUD', '41.56', 'njkjh', '41.56', 'Buy', '2012-09-05', 'Cash', ''),
(2, 'BS-BNABIAMD', '4', 1, 'AUD', '41.56', 'uuuu', '41.56', 'Buy', '2012-09-05', 'Cash', ''),
(3, 'BS-JX4QSCJA', '4', 1, 'AUD', '41.56', 'rrr', '41.56', 'Buy', '2012-09-05', 'Cash', ''),
(4, 'BS-JX4QSCJA', '4', 1, 'AUD', '41.56', 'kjkjkj', '41.56', 'Buy', '2012-09-05', 'Cash', ''),
(5, 'BS-SC0SMADI', '4', 100, 'AUD', '12', 'bhgg', '1200', 'Buy', '2012-09-05', 'Cash', ''),
(6, 'BS-SC0SMADI', '4', 1, 'AUD', '12', 'fghg', '12', 'Buy', '2012-09-05', 'Cash', ''),
(7, 'BS-WYUYL0TS', '4', 100, 'AUD', '41.56', 'ghhgh', '4156', 'Buy', '2012-09-06', 'Cash', ''),
(8, 'BS-LPRCAQTG', '4', 100, 'AUD', '41.56', 'nbbn', '4156', 'Buy', '2012-09-06', 'Cash', ''),
(9, 'BS-ERDRXRN6', '4', 100, 'AUD', '41.56', 'nbjbj', '4156', 'Buy', '2012-09-06', 'Cash', '1'),
(10, 'BS-3P3LKS0B', '4', 100, 'AUD', '41.56', 'bjh', '4156', 'Buy', '2012-09-06', 'Cash', '1'),
(11, 'BS-6YRXXKWW', '4', 100, 'AUD', '42.12345', 'sasas', '4212.345', 'Sell', '2012-09-06', 'Bank', '1'),
(12, 'BS-WFVL6ZZF', '4', 100, 'AUD', '41.56', 'hghh', '4156', 'Buy', '2012-09-07', 'Cash', ''),
(13, 'BS-WFVL6ZZF', '4', 100, 'AUD', '41.56', 'jhhjhjhj', '4156', 'Buy', '2012-09-07', 'Cash', ''),
(14, 'BS-W347KX3W', '4', 100, 'AUD', '41.56', 'cxcxcx', '4156', 'Buy', '2012-09-07', 'Cash', ''),
(15, 'BS-W347KX3W', '4', 1212, 'AUD', '41.56', '85418977,31798930,18533775,67660887,29699794,56696966,67660886,29744743,28042459,31916257,31916256,3', '50370.72', 'Buy', '2012-09-07', 'Cash', ''),
(16, 'BS-AX3WIW7O', '4', 100, 'USD', '42.35', 'nbhjb', '4235', 'Buy', '2012-09-07', 'Cash', ''),
(17, 'BS-AX3WIW7O', '4', 878, 'USD', '42.35', 'hjhgjhg', '37183.3', 'Buy', '2012-09-07', 'Cash', ''),
(18, 'BS-Q2ULQYVP', '4', 5454, 'USD', '42.35', 'nbmnbnbn', '230976.9', 'Buy', '2012-09-07', 'Cash', ''),
(19, 'BS-Q2ULQYVP', '4', 8787, 'USD', '42.35', 'jhjhjhjhj', '372129.45', 'Buy', '2012-09-07', 'Cash', ''),
(20, 'BS-OH2TZ00M', '4', 1000, 'AUD', '41.56', '6767676767', '41560', 'Buy', '2012-09-10', 'Cash', ''),
(21, 'BS-PUXF0OZE', '4', 11111, 'AUD', '41.56', 'na', '461773.16', 'Buy', '2012-09-10', 'Bank', ''),
(22, 'BS-SKGRLEPS', '4', 1000000, 'AUD', '41.56', 'jjjhjhjhj', '41560000', 'Buy', '2012-09-11', 'Bank', ''),
(23, 'BS-I2JMLRIW', '4', 1, 'AUD', '41.56', 'nbnbnb', '41.56', 'Buy', '2012-09-11', 'Bank', ''),
(24, 'BS-I2JMLRIW', '4', 1, 'AUD', '41.56', 'nbnbb', '41.56', 'Buy', '2012-09-11', 'Bank', ''),
(25, 'BS-0KL4BLPR', '4', 1, 'AUD', '42.12345', '787878', '42.12345', 'Sell', '2012-09-11', 'Bank', ''),
(26, 'BS-ZOARQXSU', '4', 1, 'AUD', '42.12345', '76767667', '42.12345', 'Sell', '2012-09-11', 'Bank', ''),
(27, 'BS-ESYNHITS', '4', 2, 'AUD', '41.56', '234567', '83.12', 'Buy', '2012-09-11', 'Bank', ''),
(28, 'BS-VMCUXBFC', '4', 1, 'USD', '42.35', '2345678', '42.35', 'Buy', '2012-09-11', 'Bank', ''),
(29, 'BS-UA5CVDBQ', '4', 1, 'USD', '42.35', '6767676', '42.35', 'Buy', '2012-09-11', 'Bank', ''),
(30, 'BS-JRQ5RZL7', '4', 1, 'USD', '42.35', '989989', '42.35', 'Buy', '2012-09-11', 'Bank', ''),
(31, 'BS-FCIXN3FE', '4', 1, 'USD', '42.35', '3456789', '42.35', 'Buy', '2012-09-11', 'Bank', ''),
(32, 'BS-SS03G2HI', '4', 1, 'USD', '42.35', '7676767', '42.35', 'Buy', '2012-09-11', 'Bank', ''),
(33, 'BS-SS03G2HI', '4', 100, 'USD', '42.35', 'nbnbnbn', '4235', 'Buy', '2012-09-11', 'Bank', ''),
(34, 'BS-VXS55B5S', '4', 100, 'USD', '43.0012', '5454545', '4300.12', 'Sell', '2012-09-11', 'Bank', ''),
(35, 'BS-HBAXZ5ZS', '4', 1000, 'EUR', '89.0967', '87878', '89096.7', 'Buy', '2012-09-11', 'Cash', ''),
(36, 'BS-3O6XD4QB', '4', 10000, 'EUR', '89.0967', '767676', '890967', 'Buy', '2012-09-11', 'Cash', ''),
(39, 'BS-WOZUGUQZ', '4', 100000, 'AUD', '41.56', '677676', '4156000', 'Buy', '2012-09-11', 'Cash', ''),
(40, 'BS-XNLHXEX0', '4', 100000, 'AUD', '41.56', '7667676767', '4156000', 'Buy', '2012-09-11', 'Bank', ''),
(41, 'BS-MNCGMQKY', '4', 100, 'USD', '42.35', 'nj', '4235', 'Buy', '2012-09-12', 'Cash', ''),
(42, 'BS-MNCGMQKY', '4', 100, 'USD', '42.35', 'jhjhjh', '4235', 'Buy', '2012-09-12', 'Cash', ''),
(43, 'BS-MNCGMQKY', '4', 100, 'USD', '42.35', 'nmbnbn', '4235', 'Buy', '2012-09-12', 'Cash', ''),
(44, 'BS-QAQPHNCD', '4', 100, 'USD', '42.35', '76767', '4235', 'Buy', '2012-09-12', 'Cash', ''),
(45, 'BS-QAQPHNCD', '4', 100, 'USD', '42.35', '87878788', '4235', 'Buy', '2012-09-12', 'Cash', ''),
(46, 'BS-DQN0YBSM', '4', 10000000, 'USD', '42.35', '8787878', '423500000', 'Buy', '2012-09-12', 'Cash', ''),
(47, 'BS-DQN0YBSM', '4', 1, 'USD', '42.35', '677676', '42.35', 'Buy', '2012-09-12', 'Cash', ''),
(48, 'BS-DQN0YBSM', '4', 10000, 'USD', '42.35', '7676', '423500', 'Buy', '2012-09-12', 'Cash', ''),
(49, 'BS-GF7A6TPL', '4', 100, 'USD', '42.35', 'uuiuiuiu', '4235', 'Buy', '2012-09-12', 'Cash', ''),
(50, 'BS-GF7A6TPL', '4', 100, 'USD', '42.35', '8787878', '4235', 'Buy', '2012-09-12', 'Cash', ''),
(51, 'BS-ZHQ2AP6A', '4', 100000, 'USD', '42.35', '6767676', '4235000', 'Buy', '2012-09-12', 'Cash', ''),
(52, 'BS-BTNOW3JZ', '4', 100, 'USD', '42.35', '6767676', '4235', 'Buy', '2012-09-12', 'Cash', ''),
(53, 'BS-SDT3YKWI', '4', 100, 'USD', '42.35', '78787878', '4235', 'Buy', '2012-09-12', 'Cash', ''),
(54, 'BS-KHIQK3OM', '4', 1000, 'USD', '42.35', '6767676', '42350', 'Buy', '2012-09-12', 'Cash', ''),
(55, 'BS-RHMPKI6B', '4', 1000, 'USD', '42.35', '67676', '42350', 'Buy', '2012-09-12', 'Cash', ''),
(56, 'BS-MKR7FH63', '4', 100, 'USD', '43.0012', '676767', '4300.12', 'Sell', '2012-09-12', 'Cash', ''),
(57, 'BS-ZLMTZK6N', '4', 12, 'AUD', '41.56', '6767', '498.72', 'Buy', '2012-09-12', 'Cash', ''),
(58, 'BS-YQFWP0XV', '4', 100, 'USD', '10', '66767', '1000', 'Buy', '2012-09-13', 'Cash', ''),
(59, 'BS-RGJ262Z6', '4', 100, 'USD', '42.35', '78787878', '4235', 'Buy', '2012-09-13', 'Cash', ''),
(60, 'BS-KDP4Z4FT', '4', 100, 'USD', '42.35', '87878787', '4235', 'Buy', '2012-09-13', 'Cash', ''),
(61, 'BS-2JJ7X57J', '4', 100, 'USD', '1', '787878', '100', 'Buy', '2012-09-13', 'Cash', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `position` int(11) NOT NULL,
  `branch` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `position`, `branch`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, ''),
(2, 'argie', '6cf51b9070c74b2b7b90a24428e9a99b', 2, ''),
(3, 'njk', 'aca9f1a8f8e72a9ef9c3d49cd16d1b8f', 2, ''),
(4, 'febe', '9f51ce8e8e4374fd0736f3ece4a679dc', 2, ''),
(5, 'a', '0cc175b9c0f1b6a831c399e269772661', 2, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
