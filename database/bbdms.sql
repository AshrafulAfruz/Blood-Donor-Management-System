-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 08:25 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'afruz', '0192023a7bbd73250516f069df18b500', '2018-01-29 03:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblblooddonars`
--

CREATE TABLE `tblblooddonars` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT NULL,
  `password` varchar(12) NOT NULL,
  `lastdonate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblooddonars`
--

INSERT INTO `tblblooddonars` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Gender`, `Age`, `BloodGroup`, `Address`, `PostingDate`, `status`, `password`, `lastdonate`) VALUES
(6, 'Md Ashrafuzzaman Khan', '01793025226', 'ashraful.afruz@outlook.com', 'Male', 25, 'A+', 'Comilla', '2018-01-22 18:15:34', 1, '123456', NULL),
(7, 'Rimon Miah', '01547885154', 'rimon@gmail.com', 'Male', 25, 'AB+', 'Tangail', '2018-01-22 18:17:39', 1, '123456', NULL),
(8, 'Reajul Houque Reayz ', '01737784521', 'reayz77@gmail.com', 'Male', 24, 'AB-', 'Comilla', '2018-01-23 05:16:31', 1, '123456', NULL),
(9, 'Nasrin Ferdause Bhuiyan', '01654785974', 'nasrin1@gmail.com', 'Female', 23, 'B+', 'Feni', '2018-01-23 05:17:15', 1, '123456', NULL),
(10, 'Abul Haider', '01717145236', 'haidar@yahoo.com', 'Male', 25, 'O-', 'Narshingdhi', '2018-01-26 09:52:34', 1, '123456', NULL),
(13, 'Palash Chandra Roy', '01837251848', 'polascse92@gmail.com', 'Male', 25, 'O+', 'Comilla', '2018-01-30 14:56:08', 1, '123456', NULL),
(14, 'Nahid Hasan', '01680228823', 'nahidnaim41@gmail.com', 'Male', 26, 'A+', 'Comilla', '2018-01-30 14:57:41', 1, '123456', NULL),
(16, 'Shafiqul Islam', '01735454565', 'shaf@gmail.com', 'Male', 52, 'A+', 'Comilla', '2018-01-30 14:59:26', 1, '123456', '20 feb 2018'),
(17, 'Taufiq Umar', NULL, 'taufiq@gmail.com', 'Male', 32, '', NULL, '2018-02-04 21:10:04', 1, '', NULL),
(18, 'Taufiq Umar', NULL, 'taufiq@gmail.com', 'Male', 32, '', NULL, '2018-02-04 21:11:23', 1, '', NULL),
(19, 'Taufiq Umar', NULL, 'taufiq@gmail.com', 'Male', 32, '', NULL, '2018-02-04 21:11:39', 1, '', NULL),
(20, 'Taufiq Umar', NULL, 'taufiq@gmail.com', 'Male', 32, '', NULL, '2018-02-04 21:17:31', 1, '', NULL),
(21, 'Taufiq Umar', NULL, 'taufiq@gmail.com', 'Male', 32, '', NULL, '2018-02-04 21:18:01', 1, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblbloodgroup`
--

CREATE TABLE `tblbloodgroup` (
  `id` int(11) NOT NULL,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbloodgroup`
--

INSERT INTO `tblbloodgroup` (`id`, `BloodGroup`, `PostingDate`) VALUES
(2, 'AB-', '2017-06-30 20:34:00'),
(3, 'O-', '2017-06-30 20:34:05'),
(6, 'AB+', '2017-06-30 20:34:18'),
(8, 'B+', '2018-01-22 18:19:55'),
(9, 'B-', '2018-01-22 18:33:33'),
(11, 'O+', '2018-01-22 18:34:08'),
(12, 'A+', '2018-01-23 05:24:02'),
(13, 'A-', '2018-02-01 08:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'Comilla																					', 'ashraful.afruz@outlook.com', '01739025226');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(5, 'Rimon Miah', 'rimon@gmail.com', '01554447985', 'hi. i don''t want to donate blood anymore... Remove  my Data Please. Thank you.', '2018-01-22 18:37:38', 1),
(10, 'Ashraful', 'ash@outlook.com', '01527545987', 'I need urgent O- blood. Please Help me.', '2018-01-28 13:11:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbllocation`
--

CREATE TABLE `tbllocation` (
  `id` int(11) NOT NULL,
  `location` text,
  `postingdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllocation`
--

INSERT INTO `tbllocation` (`id`, `location`, `postingdate`) VALUES
(1, 'Comilla', '2018-02-01 07:12:43'),
(2, 'Chittagong', '2018-02-01 07:12:43'),
(5, 'Dhaka', '2018-02-01 07:14:03'),
(7, 'Feni', '2018-02-01 07:15:34'),
(8, 'Chandpur', '2018-02-01 07:15:34'),
(9, 'Barisal', '2018-02-01 07:38:23'),
(10, 'Sylhet', '2018-02-01 07:38:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblblooddonars`
--
ALTER TABLE `tblblooddonars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllocation`
--
ALTER TABLE `tbllocation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblblooddonars`
--
ALTER TABLE `tblblooddonars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbllocation`
--
ALTER TABLE `tbllocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
