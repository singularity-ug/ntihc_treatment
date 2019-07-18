-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 07:38 AM
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
-- Database: `angular`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `saleid` int(11) NOT NULL,
  `amount` double NOT NULL,
  `sale_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`saleid`, `amount`, `sale_date`) VALUES
(17, 50, '2018-01-01 16:00:00'),
(18, 600, '2018-02-01 16:00:00'),
(19, 50, '2018-02-04 16:00:00'),
(20, 700, '2018-03-02 16:00:00'),
(21, 350, '2018-04-03 16:00:00'),
(22, 100, '2018-05-04 16:00:00'),
(23, 650, '2018-06-05 16:00:00'),
(24, 250, '2018-07-06 16:00:00'),
(25, 200, '2018-08-07 16:00:00'),
(26, 450, '2018-09-08 16:00:00'),
(27, 750, '2018-10-09 16:00:00'),
(28, 800, '2018-11-10 16:00:00'),
(29, 150, '2018-12-11 16:00:00'),
(30, 50, '2018-01-06 16:00:00'),
(31, 50, '2018-01-16 16:00:00'),
(32, 40, '2018-01-01 16:00:00'),
(33, 10, '2018-01-21 16:00:00'),
(34, 250, '2017-01-04 16:00:00'),
(35, 800, '2017-02-01 16:00:00'),
(36, 500, '2017-03-02 16:00:00'),
(37, 750, '2017-04-03 16:00:00'),
(38, 550, '2017-05-04 16:00:00'),
(39, 100, '2017-06-05 16:00:00'),
(40, 300, '2017-07-06 16:00:00'),
(41, 750, '2017-08-07 16:00:00'),
(42, 700, '2017-09-08 16:00:00'),
(43, 50, '2017-10-09 16:00:00'),
(44, 400, '2017-11-10 16:00:00'),
(45, 550, '2017-12-11 16:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`saleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `saleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
