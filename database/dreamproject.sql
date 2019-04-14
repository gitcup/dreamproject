-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 03:34 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreamproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `booking_detail_id` int(5) NOT NULL,
  `booking_no` int(5) NOT NULL,
  `ship_name` varchar(150) NOT NULL,
  `post_of_load` varchar(150) NOT NULL,
  `etd` varchar(150) NOT NULL,
  `post_of_discharge` varchar(150) NOT NULL,
  `eta` varchar(150) NOT NULL,
  `post_deli` varchar(150) NOT NULL,
  `eta_2` varchar(150) NOT NULL,
  `feeder_vessel` varchar(150) NOT NULL,
  `feeder_voyage` varchar(150) NOT NULL,
  `mother_vessel` varchar(150) NOT NULL,
  `mother_voyage` varchar(150) NOT NULL,
  `quantity_volume` varchar(150) NOT NULL,
  `weight` varchar(150) NOT NULL,
  `quantity` varchar(150) NOT NULL,
  `load_at` varchar(150) NOT NULL,
  `transporter` varchar(150) NOT NULL,
  `load_date` varchar(150) NOT NULL,
  `transporter_tel` varchar(150) NOT NULL,
  `contact` varchar(150) NOT NULL,
  `shiping_contact` varchar(150) NOT NULL,
  `tel_contact` varchar(150) NOT NULL,
  `tel_shiping` varchar(150) NOT NULL,
  `closing_date` varchar(150) NOT NULL,
  `time` varchar(150) NOT NULL,
  `type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking_detail`
--

INSERT INTO `booking_detail` (`booking_detail_id`, `booking_no`, `ship_name`, `post_of_load`, `etd`, `post_of_discharge`, `eta`, `post_deli`, `eta_2`, `feeder_vessel`, `feeder_voyage`, `mother_vessel`, `mother_voyage`, `quantity_volume`, `weight`, `quantity`, `load_at`, `transporter`, `load_date`, `transporter_tel`, `contact`, `shiping_contact`, `tel_contact`, `tel_shiping`, `closing_date`, `time`, `type`) VALUES
(1, 0, '', '', '', '', '', '', '', '', '', '', '', '', ' KG', '', '', '', '', '', '', '', '', '', '', '', '4 WHEELS'),
(2, 0, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '', '40 KG', '', 'test', 'test', 'test', 'test', 'test', 'test', '0909099', '0909099', '15/09/2538', '15:30', '4 WHEELS'),
(3, 0, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '90 CBM', '40 KG', '50 BOX', 'test', 'test', 'test', 'test', 'test', 'test', '0909099', '0909099', '15/09/2538', '15:30', '4 WHEELS'),
(4, 0, 'ssdssdd', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '50 ', '60 KG', '70 BOX', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '4 WHEELS'),
(5, 0, 'ssdssdd', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '50 CBM', '60 KG', '70 BOX', '', '', '', '', '', '', '', '', '', '', '4 WHEELS'),
(6, 0, 'ssdssdd', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '50 CBM', '60 KG', '70 PALLET', '', '', '', '', '', '', '', '', '', '', '4 WHEELS');

-- --------------------------------------------------------

--
-- Table structure for table `booking_file`
--

CREATE TABLE `booking_file` (
  `booking_id` int(3) NOT NULL COMMENT 'คีย์หลัก',
  `path_file` varchar(150) NOT NULL COMMENT 'ที่เก็บไฟล์',
  `username` varchar(150) NOT NULL COMMENT 'คีย์นอก username'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking_file`
--

INSERT INTO `booking_file` (`booking_id`, `path_file`, `username`) VALUES
(6, 'นามบัตร1 น้าหนิ่ง.docx', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(3) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `user_id` int(3) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone_number` varchar(150) NOT NULL,
  `status` enum('user','admin','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`user_id`, `username`, `password`, `firstname`, `lastname`, `company_name`, `address`, `phone_number`, `status`) VALUES
(1, 'user', 'user', 'นายกฤต', 'พัฒนพานิช', 'RBRU', '14/2', '0914084258', 'user'),
(2, 'admin', 'admin', 'นายกฤต', 'พัฒนพานิช', 'RBRU', '14/3', '0914084258', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`booking_detail_id`);

--
-- Indexes for table `booking_file`
--
ALTER TABLE `booking_file`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `booking_detail_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking_file`
--
ALTER TABLE `booking_file`
  MODIFY `booking_id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัก', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
