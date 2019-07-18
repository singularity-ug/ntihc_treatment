-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2017 at 07:09 AM
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
-- Database: `pie`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'Samsung'),
(2, 'Apple'),
(3, 'Vivo'),
(4, 'Sony'),
(5, 'Nokia');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `prodname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodid`, `catid`, `prodname`) VALUES
(2, 1, 'Galaxy Note FE '),
(3, 1, 'Galaxy J7 +'),
(4, 1, 'Galaxy J7 Core'),
(5, 1, 'Galaxy Note 8'),
(6, 1, 'Galaxy J5 Prime'),
(7, 2, 'iPhone 7'),
(8, 2, 'iPhone 7 +'),
(9, 2, 'iPhone SE'),
(10, 2, 'iPhone 6S'),
(11, 3, 'Vivo Y53'),
(12, 3, 'Vivo V7+'),
(13, 3, 'Vivo V5'),
(14, 3, 'Vivo Y55'),
(15, 4, 'Sony Xperia XZ Premium'),
(16, 4, 'Sony Xperia XZ1'),
(17, 4, 'Sony Xperia XZ'),
(18, 4, 'Sony Xperia XZs'),
(19, 4, 'Sony Xperia Z5 Dual'),
(20, 4, 'Sony Xperia Z5 Premium Dual'),
(21, 4, 'Sony Xperia C3'),
(22, 4, 'Sony Xperia C5 Ultra Dual'),
(23, 5, 'Nokia 5'),
(24, 5, 'Nokia 6'),
(25, 5, 'Nokia Lumia 530'),
(26, 5, 'Nokia Lumia 950'),
(27, 4, 'Sony Xperia XA1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
