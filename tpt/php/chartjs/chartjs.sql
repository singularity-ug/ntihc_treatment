-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2017 at 07:21 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chartjs`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `salesid` int(11) NOT NULL,
  `amount` double NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesid`, `amount`, `sales_date`) VALUES
(8, 100, '2017-01-01'),
(9, 55, '2016-01-01'),
(10, 200, '2017-02-02'),
(11, 55, '2016-02-02'),
(12, 175, '2017-03-03'),
(13, 150, '2016-03-03'),
(14, 150, '2017-04-04'),
(15, 85, '2016-04-04'),
(16, 99, '2017-04-04'),
(17, 20, '2016-04-04'),
(18, 180, '2017-05-05'),
(19, 70, '2016-05-05'),
(20, 225, '2016-06-06'),
(21, 150, '2017-06-06'),
(22, 120, '2017-07-07'),
(23, 55, '2016-07-07'),
(24, 199, '2017-08-08'),
(25, 45, '2016-08-08'),
(26, 130, '2017-09-09'),
(27, 75, '2016-09-09'),
(28, 300, '2017-10-10'),
(29, 35, '2016-10-10'),
(30, 250, '2017-11-11'),
(31, 20, '2016-11-11'),
(32, 220, '2017-12-12'),
(33, 200, '2016-12-12'),
(34, 45, '2016-01-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `salesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
