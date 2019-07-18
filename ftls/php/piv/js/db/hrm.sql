-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2017 at 04:34 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_user` varchar(30) NOT NULL,
  `admin_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_user`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_academic_rank`
--

CREATE TABLE `tbl_academic_rank` (
  `rank_id` int(3) NOT NULL,
  `rank_name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_academic_rank`
--

INSERT INTO `tbl_academic_rank` (`rank_id`, `rank_name`) VALUES
(1, 'Instructor I'),
(2, 'Instructor II'),
(3, 'Instructor III'),
(9, 'Assistant Professor I'),
(10, 'Assistant Professor II'),
(11, 'Assistant Professor III'),
(12, 'Assistant Professor IV'),
(13, 'Associate Professor II'),
(14, 'Associate Professor I'),
(15, 'Associate Professor III'),
(16, 'Associate Professor IV'),
(17, 'Associate Professor V'),
(18, 'Professor I'),
(19, 'Professor II'),
(20, 'Professor III'),
(21, 'Professor IV'),
(22, 'Professor V'),
(23, 'Professor VI'),
(24, 'Professor VII'),
(26, 'Professor VIII');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `dept_id` int(3) NOT NULL,
  `dept_name` char(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`dept_id`, `dept_name`) VALUES
(2, 'College of Education'),
(3, 'College of Arts and Science'),
(4, 'College of Industrial Technology'),
(5, 'Institute of Industrial Technology'),
(6, 'College of Business Management and Accountancy'),
(7, 'College of Fisheries');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(7) NOT NULL,
  `file_name` varchar(500) NOT NULL,
  `per_id` int(6) NOT NULL,
  `filetype` varchar(20) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_name`, `per_id`, `filetype`, `date_uploaded`) VALUES
(32, 'uploads/1.jpg', 74, 'jpg', '0000-00-00'),
(33, 'uploads/1..5.png', 68, 'png', '0000-00-00'),
(34, 'uploads/', 69, '', '0000-00-00'),
(35, 'uploads/', 68, '', '0000-00-00'),
(36, 'uploads/evaluation-for-capstone.docx', 68, 'docx', '2017-02-03'),
(37, 'uploads/[fmovies.to] The Flash 3 - 06.srt', 67, 'srt', '2017-02-03'),
(38, 'uploads/activity_sheet3 (1).docx', 99, 'docx', '2017-02-04'),
(39, 'uploads/amCharts (1).csv', 100, 'csv', '2017-02-04'),
(40, 'uploads/Penguins.jpg', 99, 'jpg', '2017-02-04'),
(41, 'uploads/FlowchartApplication 2.docx', 106, 'docx', '2017-02-04'),
(42, 'uploads/evaluation-for-capstone.docx', 111, 'docx', '2017-02-04'),
(43, 'uploads/Koala.jpg', 100, 'jpg', '2017-02-04'),
(44, 'uploads/Jellyfish.jpg', 100, 'jpg', '2017-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gass_rank`
--

CREATE TABLE `tbl_gass_rank` (
  `gass_id` int(3) NOT NULL,
  `gass_name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gass_rank`
--

INSERT INTO `tbl_gass_rank` (`gass_id`, `gass_name`) VALUES
(1, 'Administrative Aide I'),
(2, 'Administrative Aide II'),
(3, 'Administrative Aide III'),
(4, 'Administrative Aide IV'),
(5, 'Administrative Aide V'),
(6, 'Administrative Aide VI'),
(7, 'Administrative Assistant I'),
(8, 'Administrative Assistant II'),
(9, 'Administrative Assistant III'),
(10, 'Administrative Assistant IV'),
(11, 'Administrative Assistant V'),
(12, 'Administrative Officer I'),
(13, 'Administrative Officer II'),
(14, 'Administrative Officer III'),
(15, 'Administrative Officer IV'),
(16, 'Administrative Officer V'),
(17, 'Chief Administrative Officer'),
(18, 'SUC President I'),
(19, 'SUC President II'),
(20, 'SUC President III'),
(21, 'SUC President IV'),
(22, 'SUC President V'),
(23, 'Guidance Counselor I'),
(24, 'Guidance Counselor II'),
(25, 'Guidance Counselor III'),
(26, 'Dentist I'),
(27, 'Dentist II'),
(28, 'Dentist III'),
(29, 'Nurse I'),
(30, 'Nurse II'),
(31, 'Nurse III'),
(32, 'Registrar I'),
(33, 'Registrar II'),
(34, 'Registrar III'),
(35, 'Registrar IV'),
(36, 'Registrar V'),
(37, 'Security Guard I'),
(38, 'Security Guard II'),
(39, 'Security Guard III'),
(40, 'Security Guard IV'),
(42, 'College Librarian I');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personnel`
--

CREATE TABLE `tbl_personnel` (
  `per_id` int(6) NOT NULL,
  `per_firstname` char(20) NOT NULL,
  `per_middlename` char(20) NOT NULL,
  `per_lastname` char(20) NOT NULL,
  `per_suffix` char(2) NOT NULL,
  `pos_id` int(3) NOT NULL,
  `per_gender` char(6) NOT NULL,
  `per_status` char(8) NOT NULL,
  `per_address` varchar(150) NOT NULL,
  `per_date_of_birth` date NOT NULL,
  `per_place_of_birth` varchar(150) NOT NULL,
  `per_date_of_original_appointment` date NOT NULL,
  `per_eligibility` varchar(20) NOT NULL,
  `per_campus` char(14) NOT NULL,
  `dept_id` int(3) NOT NULL,
  `per_designation` varchar(50) NOT NULL,
  `per_tin_no` varchar(20) NOT NULL,
  `per_gsis_bp_no` varchar(15) NOT NULL,
  `per_pagibig_no` varchar(14) NOT NULL,
  `per_plantilla_no` int(25) NOT NULL,
  `promote_id` int(5) NOT NULL,
  `per_contact_no` varchar(20) NOT NULL,
  `rank_id` int(3) NOT NULL,
  `bs_name` varchar(50) NOT NULL,
  `bs_year` year(4) NOT NULL,
  `bs_school` varchar(50) NOT NULL,
  `ms_name` varchar(50) NOT NULL,
  `ms_with_unit` varchar(12) NOT NULL,
  `ms_year` year(4) NOT NULL,
  `ms_school` varchar(50) NOT NULL,
  `dr_name` varchar(50) NOT NULL,
  `dr_year` year(4) NOT NULL,
  `dr_with_unit` varchar(12) NOT NULL,
  `dr_school` varchar(50) NOT NULL,
  `other_degree` varchar(50) NOT NULL,
  `other_year` year(4) NOT NULL,
  `other_school` varchar(50) NOT NULL,
  `per_image` varchar(1000) NOT NULL,
  `date_modified` date NOT NULL,
  `gass_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personnel_master_file`
--

CREATE TABLE `tbl_personnel_master_file` (
  `per_id` int(7) NOT NULL,
  `per_firstname` char(20) NOT NULL,
  `per_middlename` char(20) NOT NULL,
  `per_lastname` char(20) NOT NULL,
  `per_suffix` char(2) NOT NULL,
  `pos_id` int(3) NOT NULL,
  `per_gender` char(6) NOT NULL,
  `per_status` char(8) NOT NULL,
  `per_address` varchar(150) NOT NULL,
  `per_date_of_birth` date NOT NULL,
  `per_place_of_birth` varchar(150) NOT NULL,
  `per_date_of_original_appointment` date NOT NULL,
  `per_eligibility` varchar(20) NOT NULL,
  `per_campus` char(14) NOT NULL,
  `dept_id` int(3) NOT NULL,
  `per_designation` varchar(50) NOT NULL,
  `per_tin_no` varchar(20) NOT NULL,
  `per_gsis_bp_no` varchar(15) NOT NULL,
  `per_pagibig_no` varchar(14) NOT NULL,
  `per_plantilla_no` int(25) NOT NULL,
  `promote_id` int(5) NOT NULL,
  `per_contact_no` varchar(20) NOT NULL,
  `rank_id` int(3) NOT NULL,
  `bs_name` varchar(50) NOT NULL,
  `bs_year` year(4) NOT NULL,
  `bs_school` varchar(50) NOT NULL,
  `ms_name` varchar(50) NOT NULL,
  `ms_with_unit` varchar(12) NOT NULL,
  `ms_year` year(4) NOT NULL,
  `ms_school` varchar(50) NOT NULL,
  `dr_name` varchar(50) NOT NULL,
  `dr_with_unit` varchar(12) NOT NULL,
  `dr_year` year(4) NOT NULL,
  `dr_school` varchar(50) NOT NULL,
  `other_degree` varchar(50) NOT NULL,
  `other_year` year(4) NOT NULL,
  `other_school` varchar(50) NOT NULL,
  `per_image` varchar(1000) NOT NULL,
  `date_modified` date NOT NULL,
  `gass_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `pos_id` int(3) NOT NULL,
  `pos_name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`pos_id`, `pos_name`) VALUES
(41, 'Chairperson'),
(42, 'PME, Coordinator'),
(43, 'SSG Adviser'),
(44, 'Chair, BSIS'),
(45, 'Chair, BSE'),
(46, 'Chair, Graduate School'),
(47, 'CIMD Coordinator'),
(48, 'Chair, SAS'),
(49, 'Coordinator, Extension'),
(50, 'PPDM, IGP'),
(51, 'OSA Coordinator'),
(52, 'SSD In-Charge'),
(53, 'Criminology Chairperson'),
(54, 'Chair, BS Industrial Technology'),
(55, 'Chair, Extension'),
(56, 'Student Teaching Supervisor'),
(57, 'Discipline Officer'),
(58, 'Dean, Fortune Towne'),
(59, 'Fisheries Chairperson'),
(60, 'Business Administration Chairperson'),
(61, 'NSTP Coordinator'),
(62, 'Executive Director'),
(63, 'Dean. College of Fisheries'),
(64, 'Research Coordinator, Technopacer Adviser'),
(65, 'IGP Coordinator'),
(66, 'Chair, BSIS                                  ICT C'),
(67, 'Acting Registrar'),
(68, 'Assistant Discipline Officer'),
(69, 'Chair, BSOA'),
(70, 'Alumni Coordinator'),
(71, 'Dean IT'),
(72, 'Education Chairperson, Student Teaching Supervisor'),
(73, 'ECS Coordinator'),
(74, 'Director, PME'),
(75, 'Chair, BSA'),
(76, 'Chairperson, Information Technology'),
(77, 'Adviser, SSG'),
(78, 'Chair, BSACT'),
(79, 'Sports Coordinator'),
(80, 'Guidance Counselor'),
(81, 'SUC President');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promotion`
--

CREATE TABLE `tbl_promotion` (
  `promote_id` int(5) NOT NULL,
  `per_id` int(6) NOT NULL,
  `rank_id` int(3) NOT NULL,
  `date_promoted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_promotion`
--

INSERT INTO `tbl_promotion` (`promote_id`, `per_id`, `rank_id`, `date_promoted`) VALUES
(1, 67, 2, '2015-12-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_academic_rank`
--
ALTER TABLE `tbl_academic_rank`
  ADD PRIMARY KEY (`rank_id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_gass_rank`
--
ALTER TABLE `tbl_gass_rank`
  ADD PRIMARY KEY (`gass_id`);

--
-- Indexes for table `tbl_personnel`
--
ALTER TABLE `tbl_personnel`
  ADD PRIMARY KEY (`per_id`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`pos_id`);

--
-- Indexes for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  ADD PRIMARY KEY (`promote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_academic_rank`
--
ALTER TABLE `tbl_academic_rank`
  MODIFY `rank_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `dept_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `tbl_gass_rank`
--
ALTER TABLE `tbl_gass_rank`
  MODIFY `gass_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tbl_personnel`
--
ALTER TABLE `tbl_personnel`
  MODIFY `per_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `pos_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  MODIFY `promote_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
