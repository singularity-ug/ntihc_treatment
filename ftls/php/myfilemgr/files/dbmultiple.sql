-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2017 at 02:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbmultiple`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE IF NOT EXISTS `budget` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `financial_period` varchar(66) NOT NULL,
  `periodstatus` varchar(22) NOT NULL DEFAULT '',
  `budgetdetails` varchar(66) NOT NULL,
  `unit_type` varchar(66) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_cost` int(11) NOT NULL,
  `qty_unittype` varchar(55) NOT NULL,
  `totalcost` int(11) NOT NULL,
  `approval` varchar(44) NOT NULL DEFAULT 'pending' COMMENT 'pending',
  `dollarate` int(33) NOT NULL,
  `qty_outstanding` int(11) NOT NULL,
  `detailscode` varchar(44) NOT NULL,
  `budgetline` varchar(55) NOT NULL,
  `code` text NOT NULL,
  `Costdescription` varchar(55) NOT NULL,
  `programme` varchar(55) NOT NULL,
  `programecode` text NOT NULL,
  `1stqtr_estimate` int(11) NOT NULL,
  `2ndqtr_estimate` int(11) NOT NULL,
  `3rdqtr_estimate` int(11) NOT NULL,
  `qtr_totals` int(11) NOT NULL,
  `amount_utilised` int(11) NOT NULL,
  `remaining_onbudget` int(11) NOT NULL,
  `percentage_utilised` double(40,2) NOT NULL,
  `percentage_remaining` double(40,2) NOT NULL,
  `budgetstatus` varchar(44) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`id`, `timestamp`, `financial_period`, `periodstatus`, `budgetdetails`, `unit_type`, `quantity`, `unit_cost`, `qty_unittype`, `totalcost`, `approval`, `dollarate`, `qty_outstanding`, `detailscode`, `budgetline`, `code`, `Costdescription`, `programme`, `programecode`, `1stqtr_estimate`, `2ndqtr_estimate`, `3rdqtr_estimate`, `qtr_totals`, `amount_utilised`, `remaining_onbudget`, `percentage_utilised`, `percentage_remaining`, `budgetstatus`) VALUES
(32, '2017-08-08 23:48:32', 'July 2016 - June 2017', 'Active', 'STI management', 'persons', 177, 20000000, '', 2147483647, 'Pending', 0, 0, '', 'Medical Diagnosis Screening', '555', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 119600000, 2027883647, 5.57, 94.43, ''),
(33, '2017-08-15 11:34:59', 'July 2016 - June 2017', 'Active', 'Management of other ailments', 'persons', 19000, 100000, '', 1900000000, 'Pending', 0, 0, '', 'Medical Diagnosis Screening', '555', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 128734000, 1771266000, 6.78, 93.22, ''),
(34, '2017-08-13 14:40:06', 'July 2016 - June 2017', 'Active', 'Saturday services', 'persons', 15500, 200000, '', 2147483647, 'Pending', 0, 0, '', 'Medical Diagnosis Screening', '555', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 120510000, 2026973647, 5.61, 94.39, ''),
(35, '2017-08-06 09:22:42', 'July 2016 - June 2017', 'Active', 'Condom promotion and Distribution', 'persons', 1900, 3004000, '', 2147483647, 'Pending', 0, 0, '890', 'Condom promotion and Distribution', '890', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(36, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'HIV testing', 'persons', 18000, 110000, '', 1980000000, 'Pending', 0, 0, '', 'HIV Counselling, Care and Treatment', '111', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(37, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'SMC', 'persons', 17000, 390000, '', 2147483647, 'Pending', 0, 0, '', 'HIV Counselling, Care and Treatment', '111', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(38, '2017-08-15 11:34:59', 'July 2016 - June 2017', 'Active', 'Quarterly psychosocial support meetings', 'persons', 1600, 3000300, '', 2147483647, 'Pending', 0, 0, '', 'Care and treatment', '311', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 960000, 2146523647, 0.04, 99.96, ''),
(39, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'Home Visits', 'persons', 150000, 20000, '', 2147483647, 'Pending', 0, 0, '', 'Care and treatment', '311', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(40, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'Assorted IEC materials', 'persons', 15000, 300000, '', 2147483647, 'Pending', 0, 0, '', 'IEC development and Distribution', '900', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(41, '2017-08-08 13:13:41', 'July 2016 - June 2017', 'Active', 'PNC, Pregnancy tests and PAC', 'persons', 1, 9800000, '', 9800000, 'Pending', 0, 0, '', 'Maternal Health Services', '110', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 24443800, -14643800, 249.43, -149.43, ''),
(43, '2017-08-04 05:40:23', 'July 2016 - June 2017', 'Active', 'Counselling on ADH', 'persons', 1, 4000000, '', 4000000, 'Pending', 0, 0, '', 'Counselling on ADH', '298', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(44, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'RH drives', 'persons', 18090, 800000, '', 2147483647, 'Pending', 0, 0, '', 'IEC  Distribution', '177', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(45, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'Printing SOPs', 'persons', 1900, 6000000, '', 2147483647, 'Pending', 0, 0, '', 'Quality Control & Improvement', '205', 'Capacity Building', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(46, '2017-08-05 01:46:19', 'July 2016 - June 2017', 'Active', 'Assorted IEC materials', 'persons', 12, 400005, '', 4800060, 'Pending', 0, 0, '', 'IEC development and Distribution', '900', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 100000, 0, 0.00, 0.00, ''),
(47, '2017-08-05 01:46:27', 'July 2016 - June 2017', 'Active', 'Assorted IEC materials', 'persons to lab', 15, 400009, '', 6000135, 'Pending', 0, 0, '', 'IEC development and Distribution', '900', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 200000, 0, 0.00, 0.00, ''),
(48, '2017-08-05 01:46:40', 'July 2016 - June 2017', 'Active', 'Assorted IEC materials', 'else', 15, 400030, '', 6000450, 'Pending', 0, 0, '', 'IEC development and Distribution', '900', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 100000, 0, 0.00, 0.00, ''),
(49, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'Assorted IEC materials', 'test', 15, 490000, '', 7350000, 'Pending', 0, 0, '', 'IEC development and Distribution', '900', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(50, '2017-08-08 13:13:41', 'July 2016 - June 2017', 'Active', 'ANC', 'type 1', 1, 100000, '', 100000, 'Pending', 0, 0, '', 'Maternal Health Services', '110', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 24443800, -24343800, 24443.80, -24343.80, ''),
(51, '2017-08-08 13:13:41', 'July 2016 - June 2017', 'Active', 'ANC', 'annual', 13, 500000, '', 6500000, 'Pending', 0, 0, '', 'Maternal Health Services', '110', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 24443800, -17943800, 376.06, -276.06, ''),
(52, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'PTC', 'persons', 12, 600050, '', 7200600, 'Pending', 0, 0, '', 'Psychosocial support', '232', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(53, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'PTC', 'persons to kyen', 11, 550000, '', 6050000, 'Pending', 0, 0, '', 'Psychosocial support', '232', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(54, '2017-08-15 11:34:59', 'July 2016 - June 2017', 'Active', 'Management of other ailments', 'unit', 14, 500000, '', 7000000, 'Pending', 0, 0, '', 'Medical Diagnosis Screening', '555', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 128734000, -121734000, 1839.06, -1739.06, ''),
(55, '2017-08-15 11:34:59', 'July 2016 - June 2017', 'Active', 'Management of other ailments', 'persons', 10, 500000, '', 500000, 'Pending', 0, 0, '', 'Medical Diagnosis Screening', '555', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 128734000, -128234000, 25746.80, -25646.80, ''),
(59, '2017-08-14 11:16:09', 'July 2016 - June 2017', 'Active  ', 'High level skills trainings', 'persons', 100, 40000, '', 4000000, 'Pending', 0, 0, '', 'Training of staff', '122', 'Capacity Building', 'Best practice ASRHR services', '', 0, 0, 0, 0, 14700000, -10700000, 367.50, -267.50, ''),
(60, '2017-08-14 11:16:09', 'July 2016 - June 2017', 'Active  ', 'High level skills trainings', 'airtime', 10, 700000, '', 7000000, 'Pending', 0, 0, '', 'Training of staff', '122', 'Capacity Building', 'Best practice ASRHR services', '', 0, 0, 0, 0, 14700000, -7700000, 210.00, -110.00, ''),
(61, '2017-08-14 11:16:09', 'July 2016 - June 2017', 'Active', 'High level skills trainings', 'transport', 100, 400500, '', 40050000, 'Pending', 0, 0, '', 'Training of staff', '122', 'Capacity Building', 'Best practice ASRHR services', '', 0, 0, 0, 0, 14700000, 25350000, 36.70, 63.30, ''),
(62, '2017-08-14 11:16:09', 'July 2016 - June 2017', 'Active', 'High level skills trainings', 'others', 19, 2005000, '', 38095000, 'Pending', 0, 0, '', 'Training of staff', '122', 'Capacity Building', 'Best practice ASRHR services', '', 0, 0, 0, 0, 14700000, 23395000, 38.59, 61.41, ''),
(63, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'HIV Testing ', 'Test kits', 1, 40033000, '', 40033000, 'Pending', 0, 0, '', 'HIV Counselling and Testing', '299', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(64, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'Drug Storage Equipment', 'e', 13, 50000, '', 650000, 'Pending', 0, 0, '', 'Material Support', '1231', 'Material Support', 'SCALE UP ASRH', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(65, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'Facilitate supported facilities to engage with community leaders', 'gggg', 14, 50000, '', 700000, 'Pending', 0, 0, '', 'Financial Support', '8234', 'Financial Support', 'SCALE UP ASRH', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(66, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'Facilitate district focal persons to supervise the youth corners', 'sss', 1, 549990, '', 549990, 'Pending', 0, 0, '', 'Financial Support', '8234', 'Financial Support', 'SCALE UP ASRH', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(67, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'Faciliate peer educators at the supported SYOFs facilities daily', 'ddd', 1, 500000, '', 500000, 'Pending', 0, 0, '', 'Financial Support', '8234', 'Financial Support', 'SCALE UP ASRH', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(68, '2017-08-08 13:13:41', 'July 2016 - June 2017', 'Active', 'FP', 'ffff', 14, 59000, '', 826000, 'Pending', 0, 0, '', 'Maternal Health Services', '110', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 24443800, -23617800, 2959.30, -2859.30, ''),
(70, '2017-08-10 09:11:23', 'July 2016 - June 2017', 'Active', 'Toll free helpline', 'airtime facilitation', 1, 300000000, '', 800000000, 'Pending', 0, 0, '333', 'Toll free helpline', '333', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 57675130, 742324870, 7.21, 92.79, ''),
(72, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'STI management', 'persons to match', 144, 5000, '', 720000, '', 0, 0, '', 'Medical Diagnosis Screening', '555', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(73, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'STI management', 'xxxxxxxxx', 17, 100000, '', 1700000, '', 0, 0, '', 'Medical Diagnosis Screening', '555', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(74, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'HIV testing', 'tttttttttttttt', 14, 400000, '', 5600000, '', 0, 0, '', 'HIV Counselling, Care and Treatment', '111', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(75, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'CPDs', 'ffffffffffff', 15, 50000, '', 750000, '', 0, 0, '', 'Training of staff', '122', 'Capacity Building', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(76, '0000-00-00 00:00:00', 'July 2016 - June 2017', 'Active', 'Assorted IEC materials', 'vvvv', 13, 40000, '', 520000, '', 0, 0, '', 'IEC development and Distribution', '900', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', 0, 0, 0, 0, 0, 0, 0.00, 0.00, ''),
(77, '2017-08-14 11:16:09', 'July 2016 - June 2017', 'Active', 'High level skills trainings', 'eee', 155, 6000, '', 930000, 'pending', 0, 0, '', 'Training of staff', '122', 'Capacity Building', 'Best practice ASRHR services', '', 0, 0, 0, 0, 14700000, -13770000, 1580.65, -1480.65, '');

-- --------------------------------------------------------

--
-- Table structure for table `budgetcategory`
--

CREATE TABLE IF NOT EXISTS `budgetcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `budgetlinename` varchar(188) NOT NULL,
  `blcode` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `budgetcategory`
--

INSERT INTO `budgetcategory` (`id`, `budgetlinename`, `blcode`) VALUES
(1, '', ''),
(2, 'Medical Diagnosis Screening', '2200'),
(3, 'Toll free helpline', '2300');

-- --------------------------------------------------------

--
-- Table structure for table `budgetcoder`
--

CREATE TABLE IF NOT EXISTS `budgetcoder` (
  `budgetline` varchar(222) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` text NOT NULL,
  `Linecategory` varchar(222) NOT NULL,
  `codestatus` varchar(44) NOT NULL DEFAULT 'ACTIVE',
  `updatedby` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `budgetcoder`
--

INSERT INTO `budgetcoder` (`budgetline`, `id`, `code`, `Linecategory`, `codestatus`, `updatedby`) VALUES
('select budget line', 1, '3333', 'XXXXXXXXXXXXXX', 'ACTIVE', 'CHARLES EMMA OFWONO'),
('Maintenance and repair', 2, '7772', 'XXXXXXXXXXXXXX', 'ACTIVE', 'CHARLES EMMA OFWONO'),
('Communication Costs', 4, '6017', '', 'ACTIVE', 'CHARLES EMMA OFWONO'),
('Repairs and Maintenance', 5, '3001', 'EXPENDITURE', 'ACTIVE', 'CHARLES EMMA OFWONO');

-- --------------------------------------------------------

--
-- Table structure for table `budgetconfig`
--

CREATE TABLE IF NOT EXISTS `budgetconfig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `budgetdetails` varchar(102) NOT NULL,
  `detailscode` varchar(129) NOT NULL,
  `budgetline` varchar(52) NOT NULL,
  `code` text NOT NULL,
  `Costdescription` varchar(55) NOT NULL,
  `programme` varchar(77) NOT NULL,
  `programecode` text NOT NULL,
  `lastupdatedate` date NOT NULL,
  `lastupdatedby` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `budgetconfig`
--

INSERT INTO `budgetconfig` (`id`, `budgetdetails`, `detailscode`, `budgetline`, `code`, `Costdescription`, `programme`, `programecode`, `lastupdatedate`, `lastupdatedby`) VALUES
(2, 'STI management', '', 'Medical Diagnosis Screening', '555', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(3, 'Management of other ailments', '', 'Medical Diagnosis Screening', '555', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(4, 'Saturday services', '', 'Medical Diagnosis Screening', '555', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(5, 'Toll free helpline', '333', 'Toll free helpline', '333', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(6, 'Condom promotion and Distribution', '', 'Condom promotion and Distribution', '890', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(7, 'HIV testing', '', 'HIV Counselling, Care and Treatment', '111', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(8, 'SMC', '', 'HIV Counselling, Care and Treatment', '111', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(9, 'Quarterly psychosocial support meetings', '', 'Care and treatment', '311', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(10, 'Home Visits', '', 'Care and treatment', '311', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(11, 'Assorted IEC materials', '', 'IEC development and Distribution', '900', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(12, 'ANC', '', 'Maternal Health Services', '110', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(13, 'FP', '', 'Maternal Health Services', '110', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(14, 'PNC, Pregnancy tests and PAC', '', 'Maternal Health Services', '110', 'Facility Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(15, 'STI Management', '', 'Medical Diagnosis Screening', '891', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(16, 'Counselling on ADH', '298', 'Counselling on ADH', '298', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(17, 'Condom promotion & Distribution', '112', 'Condom promotion & Distribution', '112', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(18, 'HIV Testing ', '', 'HIV Counselling and Testing', '299', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(19, 'Outreaches', '', 'HIV Counselling and Testing', '299', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(20, 'Procure Assorted IEC materials', '', 'IEC  Distribution', '177', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(21, 'RH drives', '', 'IEC  Distribution', '177', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(22, 'RH camps', '', 'IEC  Distribution', '177', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(23, 'School outreaches', '', 'IEC  Distribution', '177', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(24, 'Peer mothers', '', 'Maternal Health Services', '567', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(25, 'FP', '', 'Maternal Health Services', '567', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(26, 'Referral', '', 'Maternal Health Services', '567', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(27, 'PTC', '', 'Psychosocial support', '232', 'Community-Based Service Delivery', 'Best practice ASRHR services', '', '0000-00-00', ''),
(28, 'CPDs', '', 'Training of staff', '122', 'Capacity Building', 'Best practice ASRHR services', '', '0000-00-00', ''),
(29, 'High level skills trainings', '', 'Training of staff', '122', 'Capacity Building', 'Best practice ASRHR services', '', '0000-00-00', ''),
(30, 'Support supervision & monitoring', '', 'Support supervision & monitoring', '189', 'Capacity Building', 'Best practice ASRHR services', '', '0000-00-00', ''),
(31, 'Learning opportunities for others provided by NTIHC ', '', 'Learning opportunities for others provided by NTIHC ', '188', 'Capacity Building', 'Best practice ASRHR services', '', '0000-00-00', ''),
(32, 'Printing SOPs', '', 'Quality Control & Improvement', '205', 'Capacity Building', 'Best practice ASRHR services', '', '0000-00-00', ''),
(33, 'Learning opportunities for NTIHC staff', '', 'Learning opportunities for NTIHC staff', '', 'Capacity Building', 'Best practice ASRHR services', '', '0000-00-00', ''),
(34, 'Routine data collection and analysis', '', 'Routine data collection and analysis', '', 'M&E Research Documentation', 'Best practice ASRHR services', '', '0000-00-00', ''),
(35, 'Operations Research', '', 'Operations Research', '', 'M&E Research Documentation', 'Best practice ASRHR services', '', '0000-00-00', ''),
(36, 'Documentation of Best Practices', '', 'Documentation of Best Practices', '', 'M&E Research Documentation', 'Best practice ASRHR services', '', '0000-00-00', ''),
(37, 'Reviews and Evaluations', '', 'Reviews and Evaluations', '', 'M&E Research Documentation', 'Best practice ASRHR services', '', '0000-00-00', ''),
(38, 'Monthly facilitation payments ( Service providers & Peer Educators) to conduct community outreach work', '', 'Financial Support', '8234', 'Financial Support', 'SCALE UP ASRH', '', '0000-00-00', ''),
(39, 'Facilitate supported facilities to engage with community leaders', '', 'Financial Support', '8234', 'Financial Support', 'SCALE UP ASRH', '', '0000-00-00', ''),
(40, 'Faciliate peer educators at the supported SYOFs facilities daily', '', 'Financial Support', '8234', 'Financial Support', 'SCALE UP ASRH', '', '0000-00-00', ''),
(41, 'Facilitate district focal persons to supervise the youth corners', '', 'Financial Support', '8234', 'Financial Support', 'SCALE UP ASRH', '', '0000-00-00', ''),
(42, 'Assorted IEC Materials - Service Deliver package', '', 'Material Support', '1231', 'Material Support', 'SCALE UP ASRH', '', '0000-00-00', ''),
(43, 'Assorted IEC Materials - capacity building package', '', 'Material Support', '1231', 'Material Support', 'SCALE UP ASRH', '', '0000-00-00', ''),
(44, 'Assorted Drugs and Supplies', '', 'Material Support', '1231', 'Material Support', 'SCALE UP ASRH', '', '0000-00-00', ''),
(45, 'Drug Storage Equipment', '', 'Material Support', '1231', 'Material Support', 'SCALE UP ASRH', '', '0000-00-00', ''),
(46, 'Data Collections Tools', '', 'Material Support', '1231', 'Material Support', 'SCALE UP ASRH', '', '0000-00-00', ''),
(47, 'Audio Visual Equipment', '', 'Material Support', '', 'Material Support', 'SCALE UP ASRH', '', '0000-00-00', ''),
(48, 'AUDIO Visual CDs', '', 'Material Support', '', 'Material Support', 'SCALE UP ASRH', '', '0000-00-00', ''),
(49, 'Infrastructure support', '', 'Material Support', '', 'Material Support', 'SCALE UP ASRH', '', '0000-00-00', ''),
(50, 'Sign Posts', '', 'Material Support', '', 'Material Support', 'SCALE UP ASRH', '', '0000-00-00', ''),
(51, 'Meetings with District Officials', '', 'Advocacy', '', 'Advocacy', 'SCALE UP ASRH', '', '0000-00-00', ''),
(52, 'Meetings with Civil Society Organisations', '', 'Advocacy', '', 'Advocacy', 'SCALE UP ASRH', '', '0000-00-00', ''),
(53, 'Training of Service Providers in ADH & YFS', '', 'Capacity Building ', '', 'Capacity Building ', 'SCALE UP ASRH', '', '0000-00-00', ''),
(54, 'Training  of Peer Educators on ADH & YFS', '', 'Capacity Building ', '', 'Capacity Building ', 'SCALE UP ASRH', '', '0000-00-00', ''),
(55, 'Technical Support Supervision - service Delivery Package', '', 'Capacity Building ', '', 'Capacity Building ', 'SCALE UP ASRH', '', '0000-00-00', ''),
(56, 'Technical Support Supervision - Capacity building Package', '', 'Capacity Building ', '', 'Capacity Building ', 'SCALE UP ASRH', '', '0000-00-00', ''),
(57, 'Monitoring visit', '', 'M&E, Research, Documentation', '', 'M&E, Research, Documentation', 'SCALE UP ASRH', '', '0000-00-00', ''),
(58, 'Review Meetings - Service Delivery package facility', '', 'M&E, Research, Documentation', '', 'M&E, Research, Documentation', 'SCALE UP ASRH', '', '0000-00-00', ''),
(59, 'Involvement in TWGs relating to ASRHR', '', 'Advocacy ', '9988', 'Advocacy ', 'PROMOTE ASRHR IN UGANDA', '', '0000-00-00', ''),
(60, 'Advocacy with District authorities', '', 'Advocacy ', '9988', 'Advocacy ', 'PROMOTE ASRHR IN UGANDA', '', '0000-00-00', ''),
(61, 'Advocacy to ''mass movement'' fora  ', '', 'Advocacy ', '', 'Advocacy ', 'PROMOTE ASRHR IN UGANDA', '', '0000-00-00', ''),
(62, 'Radio programming on ASRHR ', '', 'Advocacy ', '', 'Advocacy ', 'PROMOTE ASRHR IN UGANDA', '', '0000-00-00', ''),
(63, 'Conduct TV Talk shows for young people', '', 'Advocacy ', '', 'Advocacy ', 'PROMOTE ASRHR IN UGANDA', '', '0000-00-00', ''),
(64, 'Advocacy & Technical input to parliamentary structures', '', 'Advocacy ', '', 'Advocacy ', 'PROMOTE ASRHR IN UGANDA', '', '0000-00-00', ''),
(65, 'Promoting ASRHR at national & International meetings & conferences', '', 'Advocacy ', '', 'Advocacy ', 'PROMOTE ASRHR IN UGANDA', '', '0000-00-00', ''),
(66, 'Articles for publication', '', 'Advocacy ', '', 'Advocacy ', 'PROMOTE ASRHR IN UGANDA', '', '0000-00-00', ''),
(67, 'IEC development & distribution (Develop and pretest IEC)', '', 'Advocacy ', '', 'Advocacy ', 'PROMOTE ASRHR IN UGANDA', '', '0000-00-00', ''),
(68, 'Training of Service Providers on ADH & YFS', '', 'Capacity Building', '', 'Capacity Building', 'PROMOTE ASRHR IN UGANDA', '', '0000-00-00', ''),
(69, 'Training of Civil Society Organisations in ADH & YFS', '', 'Capacity Building', '', 'Capacity Building', 'PROMOTE ASRHR IN UGANDA', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `budgetprogram`
--

CREATE TABLE IF NOT EXISTS `budgetprogram` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `programme_ieb` varchar(44) NOT NULL,
  `programecode_ieb` text NOT NULL,
  `Cost_description` varchar(44) NOT NULL,
  `lastupdatedateby_ieb` varchar(44) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `budgetprogram`
--

INSERT INTO `budgetprogram` (`id`, `programme_ieb`, `programecode_ieb`, `Cost_description`, `lastupdatedateby_ieb`) VALUES
(1, '', '', '', 'CHARLES EMMA OFWONO'),
(2, 'Best practice ASRHR services', '2000', 'Community-Based Service Delivery', 'CHARLES EMMA OFWONO'),
(3, 'Best practice ASRHR services', '2000', 'Facility Based Service Delivery', 'CHARLES EMMA OFWONO'),
(4, 'Best practice ASRHR services', '2000', 'Capacity Building', 'CHARLES EMMA OFWONO'),
(5, 'Best practice ASRHR services', '2000', 'M&E Research Documentation', '');

-- --------------------------------------------------------

--
-- Table structure for table `financialperiod`
--

CREATE TABLE IF NOT EXISTS `financialperiod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `financialyear` text NOT NULL,
  `period` text NOT NULL,
  `status` varchar(44) NOT NULL DEFAULT ' ',
  `budgetcurrency` varchar(22) NOT NULL,
  `exchangerate` varchar(44) NOT NULL,
  `ratetype` varchar(33) NOT NULL,
  `approval` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `financialperiod`
--

INSERT INTO `financialperiod` (`id`, `financialyear`, `period`, `status`, `budgetcurrency`, `exchangerate`, `ratetype`, `approval`) VALUES
(1, '2016-2017', 'July 2016 - June 2017 ', 'Active', 'UG.SHILLINGS', '3600', 'USD', ''),
(2, '2017-2018', 'July 2018 - June 2019', 'Deactivated', '', '', '', ''),
(3, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `imprest`
--

CREATE TABLE IF NOT EXISTS `imprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `REQUESTDATE` date NOT NULL,
  `IDNUMBER` text NOT NULL,
  `APPLICANTNAME` varchar(99) NOT NULL,
  `AP_DEPARTRMENT` varchar(99) NOT NULL,
  `IMPREST_DESCRIPTION` varchar(99) NOT NULL,
  `IMP_CURRENCY` text NOT NULL,
  `IMP_DEBIT` double NOT NULL,
  `IMPAUTHORISEDBY` varchar(99) NOT NULL,
  `IMPAUTHORISERNAME` varchar(33) NOT NULL,
  `IMPAUTHORISEDDATE` date NOT NULL,
  `IMPAUTHPFNUMBER` varchar(33) NOT NULL,
  `IMPAUTHDEPARTMENT` varchar(99) NOT NULL,
  `IMPAUTHCOMMENT` varchar(222) NOT NULL,
  `SENDTO` varchar(55) NOT NULL,
  `BUDGETDETAILS` varchar(44) NOT NULL,
  `BUDGETLINE` varchar(255) NOT NULL,
  `CODE` text NOT NULL,
  `FORWARDTO` varchar(55) NOT NULL,
  `IMPAPPROVEDBY` varchar(44) NOT NULL,
  `IMPAPPROVEDDATE` date NOT NULL,
  `IMPAPPROVERCOMMENT` varchar(222) NOT NULL,
  `AUTHACTION` varchar(255) NOT NULL DEFAULT 'PENDING',
  `APPROACTION` varchar(200) NOT NULL DEFAULT 'PENDING',
  `FINALJOBHOLDER` varchar(222) NOT NULL,
  `FINALREDIRECTION` varchar(33) NOT NULL,
  `IMPAPPROVERNAME` varchar(111) NOT NULL,
  `IMPAPPROVERTITTLE` varchar(111) NOT NULL,
  `APPROVERCOMMENT` varchar(111) NOT NULL,
  `APPROVERPFNUMBER` varchar(111) NOT NULL,
  `APPROVERDEPARTMENT` varchar(111) NOT NULL,
  `CASHOUT` varchar(66) NOT NULL DEFAULT 'PENDING',
  `VOUCHER_NO` int(11) NOT NULL,
  `ORDERNO` text NOT NULL,
  `FISCALMONTH` text NOT NULL,
  `FISCALYEAR` text NOT NULL,
  `AMOUNTPAID` int(11) NOT NULL,
  `VARIANCE` int(11) NOT NULL,
  `PAIDBY` varchar(255) NOT NULL,
  `PAIDDATE` date NOT NULL,
  `IMPAYTITTLE` text NOT NULL,
  `RECIEVEDBY` varchar(222) NOT NULL,
  `RECIEVEDDATE` date NOT NULL,
  `DCDEFAULT` varchar(66) NOT NULL DEFAULT 'DEFAULT',
  `LOADCREATED` date NOT NULL,
  `REQUESTEDCREDIT` text NOT NULL,
  `REIMBURSMENTID` int(11) NOT NULL,
  `RIDSTATUS` varchar(33) NOT NULL,
  `REPLENISHDATE` date NOT NULL,
  `CREDIT` text NOT NULL,
  `LOADEDBY` varchar(33) NOT NULL,
  `LOADERTITLE` varchar(33) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `UID` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `imprest`
--

INSERT INTO `imprest` (`id`, `TIMESTAMP`, `REQUESTDATE`, `IDNUMBER`, `APPLICANTNAME`, `AP_DEPARTRMENT`, `IMPREST_DESCRIPTION`, `IMP_CURRENCY`, `IMP_DEBIT`, `IMPAUTHORISEDBY`, `IMPAUTHORISERNAME`, `IMPAUTHORISEDDATE`, `IMPAUTHPFNUMBER`, `IMPAUTHDEPARTMENT`, `IMPAUTHCOMMENT`, `SENDTO`, `BUDGETDETAILS`, `BUDGETLINE`, `CODE`, `FORWARDTO`, `IMPAPPROVEDBY`, `IMPAPPROVEDDATE`, `IMPAPPROVERCOMMENT`, `AUTHACTION`, `APPROACTION`, `FINALJOBHOLDER`, `FINALREDIRECTION`, `IMPAPPROVERNAME`, `IMPAPPROVERTITTLE`, `APPROVERCOMMENT`, `APPROVERPFNUMBER`, `APPROVERDEPARTMENT`, `CASHOUT`, `VOUCHER_NO`, `ORDERNO`, `FISCALMONTH`, `FISCALYEAR`, `AMOUNTPAID`, `VARIANCE`, `PAIDBY`, `PAIDDATE`, `IMPAYTITTLE`, `RECIEVEDBY`, `RECIEVEDDATE`, `DCDEFAULT`, `LOADCREATED`, `REQUESTEDCREDIT`, `REIMBURSMENTID`, `RIDSTATUS`, `REPLENISHDATE`, `CREDIT`, `LOADEDBY`, `LOADERTITLE`) VALUES
(44, '2017-08-09 09:53:03', '2009-08-17', 'NTIHC/HR/04/018', 'RENEE NYANGE', 'FINANCE AND ADMINISTRATION', 'DDDDDDDDDDDD', 'UGX', 44000, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2017-08-09', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'ok', 'rnyange@ntihc.org', 'Management of other ailments', 'Staff Benefits', '2300', 'cofwono@ntihc.org', '', '2017-08-10', '', 'AUTHORISED', 'APPROVED', '', 'rnyange@ntihc.org', 'CHARLES EMMA OFWONO', 'OFFICER ICT', 'ok', 'NTIHC/HR/10/040', 'FINANCE AND ADMINISTRATION', 'PAID', 0, '598ad4b3c1106', '08', '2017', 0, 0, '', '0000-00-00', '', 'CHARLES EMMA OFWONO', '2017-08-13', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '17000000', '', ''),
(45, '2017-08-09 09:53:03', '2009-08-17', 'NTIHC/HR/04/018', 'RENEE NYANGE', 'FINANCE AND ADMINISTRATION', 'FFFF  BBBBBBBBBBBBBBBBBBB BB GGGGGGGGGGGGGGGGGGGGGGGGG', 'UGX', 300000, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2017-08-09', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'ok', 'rnyange@ntihc.org', 'Management of other ailments', 'Staff Benefits', '2300', 'cofwono@ntihc.org', '', '2017-08-10', '', 'AUTHORISED', 'REJECTED', '', 'Undefined', 'CHARLES EMMA OFWONO', 'OFFICER ICT', 'de', 'NTIHC/HR/10/040', 'FINANCE AND ADMINISTRATION', 'PAID', 0, '598ad4b3c1106', '08', '2017', 0, 0, '', '0000-00-00', '', 'CHARLES EMMA OFWONO', '2017-08-13', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(46, '2017-08-09 09:53:03', '2009-08-17', 'NTIHC/HR/04/018', 'RENEE NYANGE', 'FINANCE AND ADMINISTRATION', 'ccccccccccccccc', 'UGX', 5000, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2017-08-09', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'ok', 'rnyange@ntihc.org', 'Home Visits', 'Staff Benefits', '3200', 'cofwono@ntihc.org', '', '2017-08-10', '', 'AUTHORISED', 'REJECTED', '', 'Undefined', 'CHARLES EMMA OFWONO', 'OFFICER ICT', 'ok', 'NTIHC/HR/10/040', 'FINANCE AND ADMINISTRATION', 'PAID', 0, '598ad4b3c1106', '08', '2017', 0, 0, '', '0000-00-00', '', 'CHARLES EMMA OFWONO', '2017-08-13', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(47, '2017-08-09 10:36:41', '2009-08-17', 'NTIHC/HR/04/018', 'RENEE NYANGE', 'FINANCE AND ADMINISTRATION', 'dxxxxxxxxxxxxxxx xxxxxxxxxxxxxxx', 'UGX', 550000, 'OFFICER ICT', 'CHARLES EMMA OFWONO', '2017-08-10', 'NTIHC/HR/10/040', 'FINANCE AND ADMINISTRATION', 'ok', 'cofwono@ntihc.org', 'Saturday services', 'Staff Benefits', '2300', 'Undefined', '', '0000-00-00', '', 'AUTHORISED', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '598adb7f7d511', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(48, '2017-08-09 10:36:41', '2009-08-17', 'NTIHC/HR/04/018', 'RENEE NYANGE', 'FINANCE AND ADMINISTRATION', 'FFFFF KKKKKKKKKKKKK', 'UGX', 44000, 'OFFICER ICT', 'CHARLES EMMA OFWONO', '2017-08-10', 'NTIHC/HR/10/040', 'FINANCE AND ADMINISTRATION', 'rejected', 'cofwono@ntihc.org', 'Management of other ailments', 'Office Supplies', '4200', 'Undefined', '', '0000-00-00', '', 'REJECTED', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '598adb7f7d511', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(49, '2017-08-09 10:36:41', '2009-08-17', 'NTIHC/HR/04/018', 'RENEE NYANGE', 'FINANCE AND ADMINISTRATION', 'CC', 'UGX', 300000, 'OFFICER ICT', 'CHARLES EMMA OFWONO', '2017-08-10', 'NTIHC/HR/10/040', 'FINANCE AND ADMINISTRATION', 'ok', 'cofwono@ntihc.org', 'Management of other ailments', 'Office Supplies', '4200', 'Undefined', '', '0000-00-00', '', 'REJECTED', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '598adb7f7d511', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(50, '2017-08-09 10:45:15', '2009-08-17', 'NTIHC/HR/04/018', 'RENEE NYANGE', 'FINANCE AND ADMINISTRATION', 'dddddddddddddddxxxxxxxxxxxxxxx', 'UGX', 444000, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2017-08-09', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'Funds are not availble', 'rnyange@ntihc.org', 'Quarterly psychosocial support meetings', 'Staff Benefits', '2300', 'Undefined', '', '0000-00-00', '', 'REJECTED', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '598ae72285b68', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(52, '2017-08-09 16:00:27', '2009-08-17', 'NTIHC/HR/04/018', 'RENEE NYANGE', 'FINANCE AND ADMINISTRATION', 'radio buttons', 'UGX', 4000, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2017-08-09', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'ok', 'rnyange@ntihc.org', 'Toll free helpline', 'Office Supplies', '4200', 'rnyange@ntihc.org', '', '2017-08-09', '', 'AUTHORISED', 'APPROVED', '', 'cofwono@ntihc.org', 'RENEE NYANGE', 'ADMINISTRATIVE ASSISTANT', 'OK', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'PAID', 0, '598b309090782', '08', '2017', 0, 0, '', '0000-00-00', '', 'TONNY BLAIR', '2017-08-10', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(53, '2017-08-09 16:00:27', '2009-08-17', 'NTIHC/HR/04/018', 'RENEE NYANGE', 'FINANCE AND ADMINISTRATION', 'accordion sliders', 'UGX', 200000, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2017-08-09', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'ok', 'rnyange@ntihc.org', 'Management of other ailments', 'Communication Costs', '5300', 'rnyange@ntihc.org', '', '2017-08-09', '', 'AUTHORISED', 'APPROVED', '', 'cofwono@ntihc.org', 'RENEE NYANGE', 'ADMINISTRATIVE ASSISTANT', 'issue cash', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'PAID', 0, '598b309090782', '08', '2017', 0, 0, '', '0000-00-00', '', 'TONNY BLAIR', '2017-08-10', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(54, '2017-08-09 16:00:27', '2009-08-17', 'NTIHC/HR/04/018', 'RENEE NYANGE', 'FINANCE AND ADMINISTRATION', 'collapsible list items', 'UGX', 50000, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2017-08-09', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'OK, please approve', 'rnyange@ntihc.org', 'Quarterly psychosocial support meetings', 'Office Supplies', '3200', 'rnyange@ntihc.org', '', '2017-08-09', '', 'AUTHORISED', 'REJECTED', '', 'cofwono@ntihc.org', 'RENEE NYANGE', 'ADMINISTRATIVE ASSISTANT', 'No funds', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'PAID', 0, '598b309090782', '08', '2017', 0, 0, '', '0000-00-00', '', 'TONNY BLAIR', '2017-08-10', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(55, '2017-08-10 05:21:58', '2010-08-17', 'NTIHC/HR/10/040', 'CHARLES EMMA OFWONO', 'FINANCE AND ADMINISTRATION', 'm', 'UGX', 80000, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2017-08-13', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'ok', 'rnyange@ntihc.org', 'Quarterly psychosocial support meetings', 'Communication Costs', '5300', 'rnyange@ntihc.org', '', '2017-08-13', '', 'AUTHORISED', 'APPROVED', '', 'rnyange@ntihc.org', 'RENEE NYANGE', 'ADMINISTRATIVE ASSISTANT', 'ok', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'PAID', 0, '598becff5e0c7', '08', '2017', 0, 0, '', '0000-00-00', '', 'KASASA JOSEPH', '2017-08-13', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(58, '2017-08-10 05:23:22', '2010-08-17', 'NTIHC/HR/10/040', 'CHARLES EMMA OFWONO', 'FINANCE AND ADMINISTRATION', 'jjjjjj mmmmmmmmm', 'UGX', 7000000, 'OFFICER ICT', 'CHARLES EMMA OFWONO', '2017-08-10', 'NTIHC/HR/10/040', 'FINANCE AND ADMINISTRATION', 'ok', 'cofwono@ntihc.org', 'Toll free helpline', 'Staff Benefits', '2300', 'Undefined', '', '0000-00-00', '', 'REJECTED', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '598bed77250da', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(59, '2017-08-10 07:14:39', '2010-08-17', 'NTIHC/HR/10/040', 'CHARLES EMMA OFWONO', 'FINANCE AND ADMINISTRATION', 'dddddddddddddddxxxxxxxxxxxxxxx', 'UGX', 444000, 'OFFICER ICT', 'CHARLES EMMA OFWONO', '2017-08-10', 'NTIHC/HR/10/040', 'FINANCE AND ADMINISTRATION', 'ok', 'cofwono@ntihc.org', 'Toll free helpline', 'Communication Costs', '5300', 'cofwono@ntihc.org', '', '2017-08-10', '', 'AUTHORISED', 'APPROVED', '', 'cofwono@ntihc.org', 'CHARLES EMMA OFWONO', 'OFFICER ICT', 'ok', 'NTIHC/HR/10/040', 'FINANCE AND ADMINISTRATION', 'PAID', 0, '598c07af43d9b', '08', '2017', 0, 0, '', '0000-00-00', '', 'JOHN BOSCO', '2017-08-10', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(60, '2017-08-10 07:14:39', '2010-08-17', 'NTIHC/HR/10/040', 'CHARLES EMMA OFWONO', 'FINANCE AND ADMINISTRATION', 'FFFFFFFFFFFF', 'UGX', 5500000, 'OFFICER ICT', 'CHARLES EMMA OFWONO', '2017-08-10', 'NTIHC/HR/10/040', 'FINANCE AND ADMINISTRATION', 'ok', 'cofwono@ntihc.org', 'Management of other ailments', 'Communication Costs', '5300', 'cofwono@ntihc.org', '', '2017-08-10', '', 'AUTHORISED', 'APPROVED', '', 'cofwono@ntihc.org', 'CHARLES EMMA OFWONO', 'OFFICER ICT', 'OK', 'NTIHC/HR/10/040', 'FINANCE AND ADMINISTRATION', 'PAID', 0, '598c07af43d9b', '08', '2017', 0, 0, '', '0000-00-00', '', 'JOHN BOSCO', '2017-08-10', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(61, '2017-08-13 13:17:23', '2013-08-17', 'NTIHC/HR/14/049', 'SOPHIE NALUZZE', 'FINANCE AND ADMINISTRATION', 'momorito', 'UGX', 5000, 'ACCOUNTANT', 'SOPHIE NALUZZE', '2017-08-13', 'NTIHC/HR/14/049', 'FINANCE AND ADMINISTRATION', 'ok', 'snaluzze@ntihc.org', 'Saturday services', 'Staff Benefits', '2300', 'snaluzze@ntihc.org', '', '2017-08-13', '', 'AUTHORISED', 'APPROVED', '', 'snaluzze@ntihc.org', 'SOPHIE NALUZZE', 'ACCOUNTANT', 'ok', 'NTIHC/HR/14/049', 'FINANCE AND ADMINISTRATION', 'PAID', 0, '5990512c263a3', '08', '2017', 0, 0, 'SOPHIE NALUZZE ', '0000-00-00', '', 'sebby kadokechi', '2017-08-13', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(62, '2017-08-13 13:17:23', '2013-08-17', 'NTIHC/HR/14/049', 'SOPHIE NALUZZE', 'FINANCE AND ADMINISTRATION', 'condex', 'UGX', 50000, 'ACCOUNTANT', 'SOPHIE NALUZZE', '2017-08-13', 'NTIHC/HR/14/049', 'FINANCE AND ADMINISTRATION', 'olk', 'snaluzze@ntihc.org', 'Management of other ailments', 'Communication Costs', '5300', 'snaluzze@ntihc.org', '', '2017-08-13', '', 'AUTHORISED', 'APPROVED', '', 'snaluzze@ntihc.org', 'SOPHIE NALUZZE', 'ACCOUNTANT', 'ok', 'NTIHC/HR/14/049', 'FINANCE AND ADMINISTRATION', 'PAID', 0, '5990512c263a3', '08', '2017', 0, 0, 'SOPHIE NALUZZE ', '0000-00-00', '', 'sebby kadokechi', '2017-08-13', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(63, '2017-08-13 14:36:25', '2013-08-17', 'NTIHC/HR/14/049', 'SOPHIE NALUZZE', 'FINANCE AND ADMINISTRATION', 'xxxxxxx', 'UGX', 500000, 'ACCOUNTANT', 'SOPHIE NALUZZE', '2017-08-13', 'NTIHC/HR/14/049', 'FINANCE AND ADMINISTRATION', 'ok', 'snaluzze@ntihc.org', 'Management of other ailments', 'Office Supplies', '4200', 'snaluzze@ntihc.org', '', '2017-08-13', '', 'AUTHORISED', 'APPROVED', '', 'snaluzze@ntihc.org', 'SOPHIE NALUZZE', 'ACCOUNTANT', 'ok', 'NTIHC/HR/14/049', 'FINANCE AND ADMINISTRATION', 'PAID', 0, '599063cb4d668', '08', '2017', 0, 0, 'SOPHIE NALUZZE ', '2017-08-13', '', 'justINE WANDA', '2017-08-13', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(64, '2017-08-13 14:36:26', '2013-08-17', 'NTIHC/HR/14/049', 'SOPHIE NALUZZE', 'FINANCE AND ADMINISTRATION', 'xccccccccc', 'UGX', 900000, 'ACCOUNTANT', 'SOPHIE NALUZZE', '2017-08-13', 'NTIHC/HR/14/049', 'FINANCE AND ADMINISTRATION', 'ok', 'snaluzze@ntihc.org', 'Saturday services', 'Communication Costs', '5300', 'snaluzze@ntihc.org', '', '2017-08-13', '', 'AUTHORISED', 'APPROVED', '', 'snaluzze@ntihc.org', 'SOPHIE NALUZZE', 'ACCOUNTANT', 'ok', 'NTIHC/HR/14/049', 'FINANCE AND ADMINISTRATION', 'PAID', 0, '599063cb4d668', '08', '2017', 0, 0, 'SOPHIE NALUZZE ', '2017-08-13', '', 'justINE WANDA', '2017-08-13', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(65, '2017-08-13 14:46:14', '2013-08-17', 'NTIHC/HR/14/049', 'SOPHIE NALUZZE', 'FINANCE AND ADMINISTRATION', 'DDDDDDDDD', 'UGX', 888000, 'ACCOUNTANT', 'SOPHIE NALUZZE', '2017-08-13', 'NTIHC/HR/14/049', 'FINANCE AND ADMINISTRATION', 'ok', 'snaluzze@ntihc.org', 'RH drives', '', '', 'snaluzze@ntihc.org', '', '2017-08-13', '', 'AUTHORISED', 'APPROVED', '', 'snaluzze@ntihc.org', 'SOPHIE NALUZZE', 'ACCOUNTANT', 'ok', 'NTIHC/HR/14/049', 'FINANCE AND ADMINISTRATION', 'PENDING', 0, '599063ea48873', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(66, '2017-08-13 16:29:45', '2013-08-17', 'NTIHC/HR/14/049', 'SOPHIE NALUZZE', 'FINANCE AND ADMINISTRATION', 'zzzzzzXXXXXXXXXX DDDDDDD', 'UGX', 8888000, '', '', '0000-00-00', '', '', '', 'cofwono@ntihc.org', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '59906636b5574', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(67, '2017-08-13 16:31:39', '2013-08-17', 'NTIHC/HR/14/049', 'SOPHIE NALUZZE', 'FINANCE AND ADMINISTRATION', 'DDFFFFFFFFF', 'UGX', 9000, '', '', '0000-00-00', '', '', '', 'cofwono@ntihc.org', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '59907e79e9de8', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(68, '2017-08-13 16:32:40', '2013-08-17', 'NTIHC/HR/14/049', 'SOPHIE NALUZZE', 'FINANCE AND ADMINISTRATION', 'OKKKKKKKKKKKK', 'UGX', 30000, '', '', '0000-00-00', '', '', '', 'cofwono@ntihc.org', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '59907eecafe6c', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(69, '2017-08-13 16:39:51', '2013-08-17', 'NTIHC/HR/14/049', 'SOPHIE NALUZZE', 'FINANCE AND ADMINISTRATION', 'DSSS', 'UGX', 9000, '', '', '0000-00-00', '', '', '', 'cofwono@ntihc.org', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '599080bd3924c', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(70, '2017-08-14 08:48:08', '2013-08-17', 'NTIHC/HR/14/049', 'SOPHIE NALUZZE', 'FINANCE AND ADMINISTRATION', 'gdghdghd', 'UGX', 88000, '', '', '0000-00-00', '', '', '', 'snaluzze@ntihc.org', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '599051642d659', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(71, '2017-08-14 08:48:09', '2013-08-17', 'NTIHC/HR/14/049', 'SOPHIE NALUZZE', 'FINANCE AND ADMINISTRATION', 'hydhdhdh', 'UGX', 88980800000, '', '', '0000-00-00', '', '', '', 'snaluzze@ntihc.org', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '599051642d659', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(72, '2017-08-14 08:48:49', '2014-08-17', 'NTIHC/HR/14/049', 'SOPHIE NALUZZE', 'FINANCE AND ADMINISTRATION', 'FFFFFFFFF LLLLLLLLLL', 'UGX', 6660000, '', '', '0000-00-00', '', '', '', 'cofwono@ntihc.org', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '599163c9a1f4c', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(73, '2017-08-14 08:48:50', '2014-08-17', 'NTIHC/HR/14/049', 'SOPHIE NALUZZE', 'FINANCE AND ADMINISTRATION', 'vvvvvvvvvvvvvvvvv', 'UGX', 800000, '', '', '0000-00-00', '', '', '', 'cofwono@ntihc.org', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '599163c9a1f4c', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(74, '2017-08-14 08:52:18', '2014-08-17', 'NTIHC/HR/10/040', 'CHARLES EMMA OFWONO', 'FINANCE AND ADMINISTRATION', 'FFFFFFFFFFFFFF', 'UGX', 6600, '', '', '0000-00-00', '', '', '', 'regadu@ntihc.org', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '599164958be6b', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(75, '2017-08-14 08:52:18', '2014-08-17', 'NTIHC/HR/10/040', 'CHARLES EMMA OFWONO', 'FINANCE AND ADMINISTRATION', 'FFFF  BBBBBBBBBBBBBBBBBBB BB GGGGGGGGGGGGGGGGGGGGGGGGG', 'UGX', 66000, '', '', '0000-00-00', '', '', '', 'regadu@ntihc.org', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '599164958be6b', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(76, '2017-08-14 09:02:02', '2014-08-17', 'NTIHC/HR/10/040', 'CHARLES EMMA OFWONO', 'FINANCE AND ADMINISTRATION', 'books', 'UGX', 900000, 'ACCOUNTANT', 'SOPHIE NALUZZE', '2017-08-14', 'NTIHC/HR/14/049', 'FINANCE AND ADMINISTRATION', 'ok', 'snaluzze@ntihc.org', 'Management of other ailments', '', '', 'rnyange@ntihc.org', '', '2017-08-14', '', 'AUTHORISED', 'APPROVED', '', 'muzungupaul2@gmail.com', 'RENEE NYANGE', 'ADMINISTRATIVE ASSISTANT', 'ok', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'PAID', 0, '59916641322b6', '08', '2017', 0, 0, 'PAUL MUZUNGU ', '2017-08-14', 'CONSULTANT', 'VVVVVVVVVVVVVV', '2017-08-14', 'DEFAULT', '0000-00-00', '0', 0, '', '0000-00-00', '0', '', ''),
(91, '2017-08-15 04:35:20', '0000-00-00', '', '', '', '', '', 0, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2015-08-17', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'APPROVED', '', '', '', '', '', '', '', 'PENDING', 0, '', '', '', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'CREDIT', '2015-08-17', '19900', 0, '', '0000-00-00', '0', '', ''),
(92, '2017-08-15 10:41:58', '0000-00-00', '', '', '', '', '', 0, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2015-08-17', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'APPROVED', '', '', '', '', '', '', '', 'PENDING', 0, '', '', '', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'CREDIT', '2015-08-17', '2000000', 0, '', '0000-00-00', '', '', ''),
(93, '2017-08-15 11:01:16', '0000-00-00', '', '', '', '', '', 0, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2015-08-17', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '', '', '', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'CREDIT', '2015-08-17', '33333', 0, '', '0000-00-00', '', '', ''),
(94, '2017-08-15 11:01:27', '0000-00-00', '', '', '', '', '', 0, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2015-08-17', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '', '', '', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'CREDIT', '2015-08-17', '500000', 0, '', '0000-00-00', '', '', ''),
(95, '2017-08-15 11:04:02', '0000-00-00', '', '', '', '', '', 0, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2015-08-17', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'APPROVED', '', '', '', '', '', '', '', 'PAID', 0, '', '', '', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'CREDIT', '2015-08-17', '11111111', 0, '', '0000-00-00', '', '', ''),
(96, '2017-08-15 11:06:37', '0000-00-00', '', '', '', '', '', 0, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2015-08-17', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'APPROVED', '', '', '', '', '', '', '', 'PENDING', 0, '', '', '', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '2015-08-17', '', 0, '', '0000-00-00', '11111', '', ''),
(97, '2017-08-15 11:29:56', '2015-08-17', 'NTIHC/HR/04/018', 'RENEE NYANGE', 'FINANCE AND ADMINISTRATION', 'XXXXXXXXXXXXXXX', 'UGX', 500000, '', '', '0000-00-00', '', '', '', 'cofwono@ntihc.org', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '5992db032e849', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '', 0, '', '0000-00-00', '', '', ''),
(98, '2017-08-15 11:29:56', '2015-08-17', 'NTIHC/HR/04/018', 'RENEE NYANGE', 'FINANCE AND ADMINISTRATION', 'VVVVVVVVVVVVVV', 'UGX', 1102200, '', '', '0000-00-00', '', '', '', 'cofwono@ntihc.org', '', '', '', '', '', '0000-00-00', '', 'PENDING', 'PENDING', '', '', '', '', '', '', '', 'PENDING', 0, '5992db032e849', '08', '2017', 0, 0, '', '0000-00-00', '', '', '0000-00-00', 'DEFAULT', '0000-00-00', '', 0, '', '0000-00-00', '', '', ''),
(99, '2017-08-15 11:32:34', '2015-08-17', 'NTIHC/HR/10/040', 'CHARLES EMMA OFWONO', 'FINANCE AND ADMINISTRATION', 'ssssssssssssssss', 'UGX', 90000, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2017-08-15', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'ok', 'rnyange@ntihc.org', 'Management of other ailments', '', '', 'rnyange@ntihc.org', '', '2017-08-15', '', 'AUTHORISED', 'APPROVED', '', 'rnyange@ntihc.org', 'RENEE NYANGE', 'ADMINISTRATIVE ASSISTANT', 'ok', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'PAID', 0, '5992dbae679b7', '08', '2017', 0, 0, 'RENEE NYANGE ', '2017-08-15', 'ADMINISTRATIVE ASSISTANT', 'katddddddd', '2017-08-15', 'DEFAULT', '0000-00-00', '', 0, '', '0000-00-00', '', '', ''),
(100, '2017-08-15 11:32:34', '2015-08-17', 'NTIHC/HR/10/040', 'CHARLES EMMA OFWONO', 'FINANCE AND ADMINISTRATION', 'ffffffffffffffffffffffff', 'UGX', 880000, 'ADMINISTRATIVE ASSISTANT', 'RENEE NYANGE', '2017-08-15', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'ok', 'rnyange@ntihc.org', 'Quarterly psychosocial support meetings', '', '', 'rnyange@ntihc.org', '', '2017-08-15', '', 'AUTHORISED', 'APPROVED', '', 'rnyange@ntihc.org', 'RENEE NYANGE', 'ADMINISTRATIVE ASSISTANT', 'ok', 'NTIHC/HR/04/018', 'FINANCE AND ADMINISTRATION', 'PENDING', 0, '5992dbae679b7', '08', '2017', 0, 0, 'RENEE NYANGE ', '2017-08-15', 'ADMINISTRATIVE ASSISTANT', 'katddddddd', '2017-08-15', 'DEFAULT', '0000-00-00', '', 0, '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `newaccount`
--

CREATE TABLE IF NOT EXISTS `newaccount` (
  `AccountID` int(11) NOT NULL AUTO_INCREMENT,
  `Timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Accountnumber` varchar(255) DEFAULT NULL,
  `Bankname` varchar(255) DEFAULT NULL,
  `Minimumaccountsum` varchar(255) DEFAULT NULL,
  `Amount` double DEFAULT NULL,
  `Belowtargetlevel` double DEFAULT NULL,
  `Accountstatus` varchar(255) NOT NULL DEFAULT 'Active',
  KEY `AccountID` (`AccountID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `newaccount`
--

INSERT INTO `newaccount` (`AccountID`, `Timestamp`, `Accountnumber`, `Bankname`, `Minimumaccountsum`, `Amount`, `Belowtargetlevel`, `Accountstatus`) VALUES
(1, '2017-02-13 11:46:47', 'e', 'e', 'e', 333, NULL, 'Active'),
(2, '2017-02-13 11:54:29', '30000033', '5333333333', '6666333', NULL, NULL, 'Active'),
(3, '2017-02-13 12:03:32', '333333333333', '4444', '3333', NULL, NULL, 'Active'),
(4, '2017-02-13 12:25:28', '33333', '33333', '33333', NULL, NULL, 'Active'),
(5, '2017-03-08 22:35:26', '33111333322', 'glucose', '22222', NULL, NULL, 'Active'),
(6, '2017-03-08 22:36:22', '444444444444444', 'ffffffffffffff', '222222222', NULL, NULL, 'Active'),
(1, '2017-02-13 11:46:47', 'e', 'e', 'e', 333, NULL, 'Active'),
(2, '2017-02-13 11:54:29', '30000033', '5333333333', '6666333', NULL, NULL, 'Active'),
(3, '2017-02-13 12:03:32', '333333333333', '4444', '3333', NULL, NULL, 'Active'),
(4, '2017-02-13 12:25:28', '33333', '33333', '33333', NULL, NULL, 'Active'),
(5, '2017-03-08 22:35:26', '33111333322', 'glucose', '22222', NULL, NULL, 'Active'),
(6, '2017-03-08 22:36:22', '444444444444444', 'ffffffffffffff', '222222222', NULL, NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `newload`
--

CREATE TABLE IF NOT EXISTS `newload` (
  `LoadID` int(11) NOT NULL AUTO_INCREMENT,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Accountnumber` varchar(255) DEFAULT NULL,
  `amountloaded` double DEFAULT NULL,
  `Reasonforloading` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`LoadID`),
  KEY `LoadID` (`LoadID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `newload`
--

INSERT INTO `newload` (`LoadID`, `Timestamp`, `Accountnumber`, `amountloaded`, `Reasonforloading`) VALUES
(1, '2017-02-13 13:07:18', '_1', 3333333, '3333');

-- --------------------------------------------------------

--
-- Table structure for table `pettycash`
--

CREATE TABLE IF NOT EXISTS `pettycash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATECREATED` date NOT NULL,
  `IDNUMBER` text NOT NULL,
  `APPLICANTNAME` varchar(99) NOT NULL,
  `DEPARTRMENT_pcr` varchar(99) NOT NULL,
  `PROGRAMME` varchar(190) NOT NULL,
  `BUDGETLINE` varchar(99) NOT NULL,
  `EXPENDITURE_DETAILS` varchar(255) NOT NULL,
  `CURRENCY` double NOT NULL,
  `DEBIT` double NOT NULL,
  `APPROVEDBY` varchar(66) NOT NULL,
  `APPROVEDDATE` date NOT NULL,
  `INLINEFORWARDING` varchar(255) NOT NULL DEFAULT 'DEFAULT ACTION',
  `CODE` text NOT NULL,
  `VOUCHER_NO` int(11) NOT NULL,
  `CREDIT` double NOT NULL,
  `BALANCE` double NOT NULL,
  `MONTH_NAME` text NOT NULL,
  `YEAR_FULL` text NOT NULL,
  `FY` text NOT NULL,
  `FISCALMONTH` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `UID` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pettycash`
--

INSERT INTO `pettycash` (`id`, `TIMESTAMP`, `DATECREATED`, `IDNUMBER`, `APPLICANTNAME`, `DEPARTRMENT_pcr`, `PROGRAMME`, `BUDGETLINE`, `EXPENDITURE_DETAILS`, `CURRENCY`, `DEBIT`, `APPROVEDBY`, `APPROVEDDATE`, `INLINEFORWARDING`, `CODE`, `VOUCHER_NO`, `CREDIT`, `BALANCE`, `MONTH_NAME`, `YEAR_FULL`, `FY`, `FISCALMONTH`) VALUES
(1, '2017-08-04 22:28:20', '0000-00-00', '', '', '', '', '', '', 4444, 5000000, '', '0000-00-00', 'DEFAULT ACTION', '', 0, 50000000, 0, '', '', '', ''),
(2, '2017-08-13 17:05:11', '0000-00-00', '', '', '', '', '', '', 50000, 3000, '', '0000-00-00', 'DEFAULT ACTION', '', 0, 9000, 0, '', '', '', ''),
(3, '2017-08-13 17:05:19', '0000-00-00', '', '', '', '', '', '', 1000000, 89000, '', '0000-00-00', 'DEFAULT ACTION', '', 0, 0, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `receiptinvoices`
--

CREATE TABLE IF NOT EXISTS `receiptinvoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DOCDATE` date NOT NULL,
  `CREATEDDATE` date NOT NULL,
  `DOCTYPE` varchar(44) NOT NULL,
  `DOCNUMBER` varchar(44) NOT NULL,
  `ISSUANCEDATE` date NOT NULL,
  `ATTENTIONTO` varchar(255) NOT NULL,
  `ADDRESS` varchar(99) NOT NULL,
  `PHONECONTACT` varchar(99) NOT NULL,
  `AMOUNTINWORDS` varchar(255) NOT NULL,
  `PARTICULARS` text NOT NULL,
  `PAYMENTTYPE` varchar(255) NOT NULL,
  `CHEQUENUMBER` text NOT NULL,
  `CURRENCYTYPE` varchar(255) NOT NULL,
  `TOTALSUM` int(11) NOT NULL,
  `CREATEDBY` varchar(255) NOT NULL,
  `UPDATEDBY` varchar(255) NOT NULL,
  `UPDATEDDATE` date NOT NULL,
  `USERTITLE` varchar(255) NOT NULL,
  `USERDEPT` varchar(255) NOT NULL,
  `USERPFNO` varchar(255) NOT NULL,
  `SIGNATURE` blob NOT NULL,
  `ITEM` text NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `QTY` int(11) NOT NULL,
  `RATE` int(11) NOT NULL,
  `AMOUNT` int(11) NOT NULL,
  `INVOICESUBTOTAL` int(11) NOT NULL,
  `INVTAX` int(11) NOT NULL,
  `INVGRANDTOTAL` int(11) NOT NULL,
  `AMOUNTPAID` int(11) NOT NULL,
  `PMTDATE` date NOT NULL,
  `BALANCEDUE` int(11) NOT NULL,
  `FISCALMONTH` text NOT NULL,
  `FISCALYEAR` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `receiptinvoices`
--

INSERT INTO `receiptinvoices` (`id`, `TIMESTAMP`, `DOCDATE`, `CREATEDDATE`, `DOCTYPE`, `DOCNUMBER`, `ISSUANCEDATE`, `ATTENTIONTO`, `ADDRESS`, `PHONECONTACT`, `AMOUNTINWORDS`, `PARTICULARS`, `PAYMENTTYPE`, `CHEQUENUMBER`, `CURRENCYTYPE`, `TOTALSUM`, `CREATEDBY`, `UPDATEDBY`, `UPDATEDDATE`, `USERTITLE`, `USERDEPT`, `USERPFNO`, `SIGNATURE`, `ITEM`, `DESCRIPTION`, `QTY`, `RATE`, `AMOUNT`, `INVOICESUBTOTAL`, `INVTAX`, `INVGRANDTOTAL`, `AMOUNTPAID`, `PMTDATE`, `BALANCEDUE`, `FISCALMONTH`, `FISCALYEAR`) VALUES
(1, '2017-07-24 07:49:33', '0000-00-00', '0000-00-00', 'Receipt', '', '0000-00-00', 'hdhdh', 'hghdh', '099888', 'thirty thousand', 'particular hhhhhh jjjjjjjjjjjjjj eeeeeeeeeee bbbbbbbbbbb llllllllllllnk bbbbbbbbbbb ooooooo', 'Cash', 'N/A', 'UGX', 99990000, 'CHARLES EMMA OFWONO', '', '0000-00-00', 'OFFICER ICT', 'FINANCE AND ADMINISTRATION', 'NTIHC/200/4444', '', '', '', 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '07', '2017'),
(2, '2017-07-24 08:01:12', '2024-07-17', '0000-00-00', 'Invoice', '', '0000-00-00', 'Jkconsult', 'E-tower building Kampala', '0783778890', 'Fouty thousand', 'ajax', 'Cash', 'N/A', 'UGX', 777, 'CHARLES EMMA OFWONO', '', '0000-00-00', 'OFFICER ICT', 'FINANCE AND ADMINISTRATION', 'NTIHC/200/4444', '', '', '', 0, 0, 0, 129900, 0, 0, 0, '0000-00-00', 0, '07', '2017'),
(3, '2017-07-24 08:26:46', '2024-07-17', '0000-00-00', 'Receipt', '', '0000-00-00', 'dddddddddddddddd', 'fffffffffff', '0897377373', 'twenty thousand', 'json', 'Cash', 'N/A', 'UGX', 0, 'CHARLES EMMA OFWONO', '', '0000-00-00', 'OFFICER ICT', 'FINANCE AND ADMINISTRATION', 'NTIHC/200/4444', '', '', '', 0, 0, 0, 242000, 0, 0, 0, '0000-00-00', 0, '07', '2017'),
(4, '2017-07-24 09:25:43', '2024-07-17', '0000-00-00', 'Receipt', '', '0000-00-00', 'Kato herber', 'kireka', '077883', 'twenty thousand', 'ram chips integrated xxxxxxxx\r\nxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nxxxxxxxxxxxxxxxxx', 'Cash', 'N/A', 'UGX', 290000, 'CHARLES EMMA OFWONO', '', '0000-00-00', 'OFFICER ICT', 'FINANCE AND ADMINISTRATION', 'NTIHC/200/4444', '', '', '', 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '07', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `standard` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=3001 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `standard`) VALUES
(1, 300900000),
(3000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `financial_yr` varchar(100) NOT NULL,
  `budget_details` varchar(100) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `budget_line` varchar(100) DEFAULT NULL,
  `unit_type` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_cost` int(11) DEFAULT NULL,
  `qty_unittype` int(11) DEFAULT '1',
  `totalcost` double(30,0) DEFAULT NULL,
  `qty_outstanding` int(11) DEFAULT NULL,
  `1stqtr_estimate` double(30,0) DEFAULT NULL,
  `2ndqtr_estimate` double(30,0) DEFAULT NULL,
  `3rdqtr_estimate` double(30,0) DEFAULT NULL,
  `qtr_totals` double(30,0) DEFAULT NULL,
  `amount_utilised` double(30,0) DEFAULT NULL,
  `remaining_onbudget` double(30,0) DEFAULT NULL,
  `percentage_utilised` decimal(3,0) DEFAULT NULL,
  `percentage_remaining` decimal(3,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `timestamp`, `financial_yr`, `budget_details`, `category`, `code`, `budget_line`, `unit_type`, `quantity`, `unit_cost`, `qty_unittype`, `totalcost`, `qty_outstanding`, `1stqtr_estimate`, `2ndqtr_estimate`, `3rdqtr_estimate`, `qtr_totals`, `amount_utilised`, `remaining_onbudget`, `percentage_utilised`, `percentage_remaining`) VALUES
(41, '2017-02-12 15:59:55', '2016-2017', 'test variable', 'this category', '7800', 'expenditure', 'Persons', 88, 30000, 1, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(45, '2017-02-12 16:27:38', '2016-2017', 'ggggggggg', 'gggggg', 'xxxxxxxxxxxxx', 'ggggg', 'ggg4445555', 444444444, 1, 2, 0, 1111, 200, 200, 400, 0, NULL, NULL, NULL, NULL),
(46, '2017-02-12 20:27:37', '2016-2017', 'STI management', 'Medical Diagnosis Screening', '333', 'expenditure', 'Persons', 133, 22000, 1, 0, 0, 100000, 66000, 100000, 0, NULL, NULL, NULL, NULL),
(48, NULL, '2016-2017', 'STI management', 'ddd', '333', 'expenditure', 'Persons', 22, 0, 1, 0, NULL, 200000, 2222, 200000, 0, NULL, NULL, NULL, NULL),
(51, '2017-02-13 08:58:01', '2016-2017', 'STI management', 'Medical Diagnosis Screening', '2092', 'expenditure', 'Persons', 12, 400000, 4, 0, 0, 2600000, 6000000, 1000000, 0, NULL, NULL, NULL, NULL),
(54, '2017-05-04 22:08:23', '2016-2017', 'MUSAWO WINNIE', 'ddd', '44', 'ee', 'ttttrgrhwrhyrey', 1, 0, 13, 0, 0, 33333, 3333, 0, 0, NULL, NULL, NULL, NULL),
(55, NULL, '4', 'f', 'f', 'f', 'f', 'f', 1, 0, 14, 0, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(56, NULL, 'f', 'f', 'f', 'f', 'f', 'f', 1, 0, 1, 0, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(57, NULL, '2016-2017', 'e', 'e', 'e', 'e', 'e', 1, 0, 1, 0, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(58, NULL, '2016-2017', 'e', 'e', 'e', 'e', 'e', 1, 0, 1, 0, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(59, NULL, 'JULY 2016 - JUNE 2017', 'e', NULL, NULL, NULL, 'e', 1, 0, 1, 0, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(60, NULL, 'JULY 2016 - JUNE 2017', 'e', NULL, NULL, NULL, 'e', 2, 0, 4, 26664, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(61, NULL, 'JULY 2016 - JUNE 2017', 'ff', NULL, NULL, NULL, 'rr', 1, 0, 14, 616, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(62, NULL, 'JULY 2016 - JUNE 2017', 'e', NULL, NULL, NULL, 'e', 14, 0, 10, 77770000, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(63, NULL, 'JULY 2016 - JUNE 2017', 'e', NULL, NULL, NULL, 'e', 1, 400000, 14, 5600000, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(64, NULL, 'JULY 2016 - JUNE 2017', 'e', NULL, NULL, NULL, 'e', 13, 5000, 14, 910000, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(65, NULL, 'JULY 2016 - JUNE 2017', 'r', NULL, NULL, NULL, 'r', 1, 4444, 1, 4444, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(66, NULL, 'JULY 2016 - JUNE 2017', 'f', NULL, NULL, NULL, 'f', 12, 10000, 1, 120000, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(67, NULL, 'JULY 2016 - JUNE 2017', 'ddd', NULL, NULL, NULL, 'fff', 66, 400000, 1, 26400000, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
