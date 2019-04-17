-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 03:49 PM
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
-- Table structure for table `bill_file`
--

CREATE TABLE `bill_file` (
  `bill_id` int(3) NOT NULL,
  `bill_path` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `booking_detail_id` int(5) NOT NULL,
  `invoice_id` int(5) NOT NULL,
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
  `type` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL COMMENT 'คีย์นอก username'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking_detail`
--

INSERT INTO `booking_detail` (`booking_detail_id`, `invoice_id`, `ship_name`, `post_of_load`, `etd`, `post_of_discharge`, `eta`, `post_deli`, `eta_2`, `feeder_vessel`, `feeder_voyage`, `mother_vessel`, `mother_voyage`, `quantity_volume`, `weight`, `quantity`, `load_at`, `transporter`, `load_date`, `transporter_tel`, `contact`, `shiping_contact`, `tel_contact`, `tel_shiping`, `closing_date`, `time`, `type`, `username`) VALUES
(5, 6, 'RAVEE INTER SUPPLY', 'BANGKOK,THAILAND', '13 SETEMBER 2018 ', 'BANGKOK,THAILAND', '17 SETEMBER 2018 ', '', '', 'WANHAI 171', '156S', '', '', '1 CBM', ' KG', ' BOX', 'WAREHOUSE 14 GATE 13', '', '13 SETEMBER 2018 ', '', 'MR.KOGI', '', '(+65) 6276 6116', '', '13 SETEMBER 2018 ', '12:00 AM', '4 WHEELS', 'user'),
(6, 0, '', '', '', '', '', '', '', '', '', '', '', ' CBM', ' KG', ' BOX', '', '', '', '', '', '', '', '', '', '', '4 WHEELS', ''),
(7, 13, '', '', '', '', '', '', '', '', '', '', '', ' CBM', ' KG', ' BOX', '', '', '', '', '', '', '', '', '', '', '4 WHEELS', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'krit pattanapanich', 'gitcupandg@gmail.com', '0914084258', 'i want to use your service');

-- --------------------------------------------------------

--
-- Table structure for table `country_air`
--

CREATE TABLE `country_air` (
  `ID` int(10) NOT NULL,
  `Destination` varchar(100) NOT NULL,
  `Rate` float NOT NULL,
  `Transit_time` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country_air`
--

INSERT INTO `country_air` (`ID`, `Destination`, `Rate`, `Transit_time`) VALUES
(1, 'Albania', 3.5, 8),
(2, 'Algeria\r\n', 3.5, 4),
(3, 'Andorra', 3.5, 3),
(4, 'Angola', 3.5, 7),
(5, 'Anguilla', 3.5, 4),
(6, 'Antigua&Barbuda', 3.5, 4),
(7, 'Argentina', 3.5, 4),
(8, 'Armenia', 3.5, 6),
(9, 'Aruba', 3.5, 4),
(10, 'Australia', 3.5, 6),
(11, 'Austria', 3.5, 3),
(12, 'Azerbaijan', 3.5, 5),
(13, 'Bahamas', 3.5, 4),
(14, 'Bahrein', 3.5, 4),
(15, 'Bangladesh', 3.5, 5),
(16, 'Barbados', 3.5, 5),
(17, 'Belarus', 3.5, 6),
(18, 'Belgium', 3.5, 2),
(19, 'Belize', 3.5, 5),
(20, 'Benin', 3.5, 4),
(21, 'Bermuda', 3.5, 4),
(22, 'Bolivia', 3.5, 4),
(23, 'Bosnia-Herzegovina', 3.5, 7),
(24, 'Botswana', 3.5, 6),
(25, 'Brasil', 3.5, 4),
(26, 'Brunei', 3.5, 5),
(27, 'Bulgaria', 3.5, 3),
(28, 'Burkina Faso', 3.5, 4),
(29, 'Burundi', 3.5, 5),
(30, 'Cambodia', 2.5, 6),
(31, 'Cameroon', 3.5, 4),
(32, 'Canada', 3.5, 2),
(33, 'Cape Verde', 3.5, 4),
(34, 'Cayman Islands', 3.5, 3),
(35, 'Central African Rep', 3.5, 5),
(36, 'Chad', 3.5, 6),
(37, 'Chile', 3.5, 3),
(38, 'China', 2.5, 4),
(39, 'Cyprus', 3.5, 5),
(40, 'Colombia', 3.5, 4),
(41, 'Comoros', 3.5, 6),
(42, 'Congo(BZV)', 3.5, 5),
(43, 'Congo(FIH)', 3.5, 7),
(44, 'Costa Rica', 3.5, 4),
(45, 'Croatia', 3.5, 4),
(46, 'Cuba', 3.5, 5),
(47, 'Cyprus', 3.5, 5),
(48, 'Czech Republic', 3.5, 4),
(49, 'Denmark', 3.5, 3),
(50, 'Djibouti', 3.5, 4),
(51, 'Dominica', 3.5, 3),
(52, 'Dominican Republic', 3.5, 5),
(53, 'Ecuador', 3.5, 5),
(54, 'Egypt', 3.5, 4),
(55, 'Eritrea', 3.5, 5),
(56, 'Estonia', 3.5, 4),
(57, 'Ethiopia', 3.5, 6),
(58, 'Fidji', 3.5, 6),
(59, 'Finland', 3.5, 3),
(60, 'France', 3.5, 2),
(61, 'French Guiana', 3.5, 6),
(62, 'French Polynesia', 3.5, 4),
(63, 'Gabon', 3.5, 5),
(64, 'Gambia', 3.5, 6),
(65, 'Georgia', 3.5, 6),
(66, 'Germany', 3.5, 2),
(67, 'Grenada', 3.5, 4),
(68, 'Ghana', 3.5, 5),
(69, 'Gibraltar', 3.5, 4),
(70, 'Greece', 3.5, 3),
(71, 'Guadeloupe', 3.5, 3),
(72, 'Guam', 3.5, 4),
(73, 'Guatemala', 3.5, 5),
(74, 'Guinea Equat', 3.5, 6),
(75, 'Guinea(CKY)', 3.5, 5),
(76, 'Guinea Bissau', 3.5, 9),
(77, 'Guyana', 3.5, 5),
(78, 'Haiti', 3.5, 4),
(79, 'Honduras', 3.5, 4),
(80, 'Hong Kong', 2.5, 4),
(81, 'Hungary', 3.5, 4),
(82, 'Iceland', 3.5, 3),
(83, 'India', 2.5, 4),
(84, 'Indonesia', 2.5, 5),
(85, 'Iran', 3.5, 5),
(86, 'Irland', 3.5, 2),
(87, 'Israel', 3.5, 4),
(88, 'Italy', 3.5, 2),
(89, 'Ivory coast', 3.5, 3),
(90, 'Jamaica', 3.5, 3),
(91, 'Japan', 2.5, 4),
(92, 'Jordan', 3.5, 4),
(93, 'Kazakstan', 3.5, 5),
(94, 'Kenya', 3.5, 5),
(95, 'Kyrgyzstan', 3.5, 5),
(96, 'Kuweit', 3.5, 4),
(97, 'Lao', 2.5, 6),
(98, 'Latvia', 3.5, 3),
(99, 'Lebanon', 3.5, 4),
(100, 'Lesotho', 3.5, 7),
(101, 'Liberia', 3.5, 5),
(102, 'Libya', 3.5, 5),
(103, 'Liechtenstein', 3.5, 2),
(104, 'Lituania', 3.5, 3),
(105, 'Luxembourg', 3.5, 2),
(106, 'Macau', 2.5, 5),
(107, 'Macedonia', 3.5, 4),
(108, 'Madagascar', 3.5, 6),
(109, 'Malawi', 2.5, 8),
(110, 'Malaysia', 2.5, 6),
(111, 'Maldives', 2.5, 7),
(112, 'Mali', 2.5, 4),
(113, 'Malta', 3.5, 3),
(114, 'Marshall Islands', 3.5, 7),
(115, 'Martinique', 3.5, 3),
(116, 'Mauritania', 3.5, 5),
(117, 'Mauritius', 3.5, 4),
(118, 'Mayotte', 3.5, 6),
(119, 'Mexico', 3.5, 4),
(120, 'Moldova', 3.5, 4),
(121, 'Monaco', 3.5, 3),
(122, 'Mongolia', 3.5, 6),
(123, 'Morocco', 3.5, 3),
(124, 'Mozambique', 3.5, 6),
(125, 'Myanmar Rep', 2.5, 5),
(126, 'Namibia', 3.5, 6),
(127, 'Nepal', 2.5, 7),
(128, 'Netherlands', 3.5, 2),
(129, 'Netherlands Antilles', 3.5, 3),
(130, 'New Caledonia', 3.5, 4),
(131, 'New Zealand', 3.5, 5),
(132, 'Nicaragua', 3.5, 4),
(133, 'Niger', 3.5, 5),
(134, 'Nigeria', 3.5, 6),
(135, 'Norway', 3.5, 2),
(136, 'Oman', 3.5, 4),
(137, 'Pakistan', 2.5, 5),
(138, 'Palau', 3.5, 5),
(139, 'Palestinian Territory', 3.5, 5),
(140, 'Panama', 3.5, 4),
(141, 'Paraguay', 3.5, 4),
(142, 'Peru', 3.5, 5),
(143, 'Philippines', 2.5, 4),
(144, 'Poland', 3.5, 4),
(145, 'Portugal', 3.5, 2),
(146, 'Puerto Rico', 3.5, 2),
(147, 'Quatar', 3.5, 4),
(148, 'Reunion Island', 3.5, 0),
(149, 'Romania', 3.5, 4),
(150, 'Russia Federation', 3.5, 4),
(151, 'Rwanda', 3.5, 8),
(152, 'Salvador', 3.5, 4),
(153, 'Sao Tome', 3.5, 6),
(154, 'Saudi Arabia', 3.5, 4),
(155, 'Senegal', 3.5, 4),
(156, 'Seychelles', 3.5, 4),
(157, 'Singapore', 2.5, 3),
(158, 'Slovakia', 3.5, 4),
(159, 'Slovenia', 3.5, 4),
(160, 'Somalia', 3.5, 6),
(161, 'South Africa', 3.5, 4),
(162, 'South Korea', 2.5, 5),
(163, 'Spain', 3.5, 2),
(164, 'Sri Lanka', 2.5, 5),
(165, 'St Kitts & Lewis', 3.5, 4),
(166, 'Ste Lucia', 3.5, 4),
(167, 'St Vincent', 3.5, 4),
(168, 'Sudan', 3.5, 5),
(169, 'Suriname', 3.5, 5),
(170, 'Sweden', 3.5, 2),
(171, 'Swaziland', 3.5, 6),
(172, 'Switzerland', 3.5, 2),
(173, 'Syria', 3.5, 4),
(174, 'Taiwan', 2.5, 4),
(175, 'Tajikistan', 3.5, 7),
(176, 'Tanzania', 3.5, 6),
(177, 'Togo', 3.5, 5),
(178, 'Trinitad & Tobago', 3.5, 4),
(179, 'Tunisia', 3.5, 4),
(180, 'Turkey', 3.5, 4),
(181, 'Turkmenistan', 3.5, 6),
(182, 'Turks & Caicos', 3.5, 4),
(183, 'Uganda', 3.5, 6),
(184, 'Ukraine', 3.5, 6),
(185, 'United Arab Emirates', 3.5, 3),
(186, 'United Kingdom', 3.5, 2),
(187, 'Uruguay', 3.5, 4),
(188, 'USA', 3.5, 2),
(189, 'Uzbekistan', 3.5, 6),
(190, 'Vatican', 3.5, 3),
(191, 'Venezuela', 3.5, 4),
(192, 'Vietnam', 2.5, 4),
(193, 'Virgin Islands (U.K.)', 3.5, 5),
(194, 'Yemen', 3.5, 4),
(195, 'Yugoslavia', 3.5, 4),
(196, 'Zamby', 3.5, 6),
(197, 'Zimbabwe', 3.5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `country_boat`
--

CREATE TABLE `country_boat` (
  `Destination` varchar(30) NOT NULL,
  `LCL` int(20) NOT NULL,
  `20'` int(20) NOT NULL,
  `40'` int(20) NOT NULL,
  `T/T` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country_boat`
--

INSERT INTO `country_boat` (`Destination`, `LCL`, `20'`, `40'`, `T/T`) VALUES
('Bangkok, Thailand', -1, -1, -1, -1),
('Laemchabang, Thailand', -1, -1, -1, -1),
('Abu Dhabi, Emirates', 40, 1400, -1, 20),
('Adelaide, Australia', 20, 1100, 2200, 22),
('Aden, Yemen', 80, 2500, 5000, 45),
('Alexandria, Egypt', 80, 1800, 3800, 30),
('Antwerp, Belgium', 10, 1350, 2700, 30),
('Aqaba, Jordan', 80, 2500, 5000, 45),
('Bahrain, Bahrain', 40, 1450, -1, 20),
('Bandar Abbas, Iran', 50, 1400, 2800, 20),
('Bangalore, India', 50, 1100, 2200, 18),
('Barcelona, Spain', 10, 1350, 2700, 30),
('Batam, Indonesia', 25, 750, 1500, 20),
('Belawan, Indonesia', 15, 600, 1000, 16),
('Breman, Germany', 25, 1350, 2700, 22),
('Brisbane, Australia', 10, 1100, 2200, 16),
('Calcutta, India', 50, 1100, 2100, 20),
('Callao, Peru', 150, 2500, 5000, 38),
('Cebu, Philippines', 25, 800, 1600, 12),
('Chennai, India', 30, 1100, 2100, 20),
('Chittagong, Bangladesh', 50, 1140, 2080, 30),
('Cochin, India', 65, 1200, 2300, 20),
('Colombo, Srilanka', 50, 1150, 2200, 20),
('Dalian, China', 10, 550, 1000, 15),
('Damam, India', 50, 1300, 2200, 20),
('Davao, Philippines', 60, 850, 1700, 12),
('Delhi, India', 50, 1900, 3400, 30),
('Dhaka, Bangladesh', 50, 1350, 2400, 27),
('Doha, Qatar', 150, 1700, 3400, 20),
('Fremantle, Australia', 20, 1100, 2200, 14),
('Felixstowe, England', 20, 1100, 2200, 30),
('Genoa, Italy', 10, 1350, 2700, 25),
('Guam', 125, 2300, 4600, 30),
('Guayaqull, Ecuador', 80, 2400, 4800, 32),
('Felixstowe, England', 20, 1100, 2200, 30),
('Genoa, Italy', 10, 1350, 2700, 25),
('Haiphong, Vietnam', 30, 700, 1300, 12),
('Haldai, India', 50, 1100, 2200, 17),
('Hamburg, Germany', 10, 1350, 2700, 30),
('Hanoi, Vietnam', 30, 800, 1400, 14),
('Ho Chi Minh, Vietnam', 20, 450, 900, 5),
('Hong Kong', 10, 350, 650, 5),
('Huangpu, China', 40, 550, 1000, 15),
('Hyderabad, India', 60, 1100, 2400, 18),
('Inchon, Korea', 25, 610, 1120, 12),
('Jabel Ali, Emirates', 40, 1100, 2200, 20),
('Jakarta, Indonesia', 10, 480, 880, 5),
('Jebel Ali, Emirates', 30, 1250, 2500, 20),
('Jeddah, Saudi Arabia', 50, 1500, 2900, 19),
('Jimbi, Indonesia (DJB)', 45, 930, 1750, 9),
('Johannesburg, South Africa', 150, 2200, 4400, 23),
('Kandla, India', 50, 1200, 2300, 20),
('Kaohsiung, Taiwan', 25, 400, 700, 7),
('Karachi, Pakistan', 125, 1350, 2550, 20),
('Keelung, Taiwan', 10, 400, 700, 7),
('Kobe, Japan', 5, 750, 1200, 10),
('Kuching, Malaysia', 60, 800, 1600, 13),
('Kuwait, Kuwait', 40, 1500, 3000, 21),
('La Spezia, Italy', 10, 1350, 2700, 25),
('Le Havre, France', 10, 1350, 2700, 30),
('Madras, India', 50, 1100, 2100, 18),
('Male, Maldives', 105, 2050, 4100, 9),
('Manila (North), Philippines', 20, 600, 1000, 11),
('Manila (South), Philippines', 60, 600, 1000, 11),
('Marseille, France', 10, 1350, 2700, 25),
('Melbourne, Australia', 10, 1100, 2200, 19),
('Mombosa, Kenya', 70, 2300, 4500, 50),
('Mumbai, India', 45, 1500, 2800, 30),
('Muscat, Region (Oman)', 40, 1450, 2500, 20),
('Nagoya, Japan', 5, 750, 1200, 6),
('New Delhi, India', 50, 1000, 1900, 21),
('Nhava Sheva, India', 30, 1100, 2200, 20),
('Ningbo, China', 10, 550, 1000, 15),
('Osaka, Japan', 5, 750, 1200, 11),
('Panjang, Indonesia', 40, 930, 1750, 9),
('Pasir Gudang, Malaysia', 10, 450, 800, 8),
('Pekanbaru, Indonesia (PKU)', 50, 900, 1650, 9),
('Penang, Malaysia', 25, 450, 800, 10),
('Port Klang, Malaysia', 20, 430, 750, 3),
('Port Sudan, Sudan', 80, 2300, 4500, 30),
('Pusan, Korea', 20, 560, 1070, 10),
('Qingdao, China', 10, 550, 1000, 15),
('Riyadh, Saudi Arabia', 50, 1500, 2900, 20),
('Rotterdam, Netherlands', 10, 1350, 2700, 30),
('Semarang, Indonesia', 15, 600, 930, 9),
('Shanghai, China', 10, 550, 1000, 14),
('Shekou, China', 40, 600, 1200, 14),
('Shenzhen, China', 85, 550, 1000, 10),
('Shimizu, Japan', 5, 750, 1200, 9),
('Singapore', 10, 350, 700, 3),
('Southampton, England', 10, 1350, 2700, 30),
('Surabaya, Indonesia', 50, 510, 850, 7),
('Sydney, Australia', 10, 1100, 2200, 18),
('Taichung, Taiwan', 10, 350, 650, 8),
('Taranto, Italy', 10, 1350, 2700, 25),
('Tokyo, Japan', 5, 750, 1200, 8),
('Umm Qasr, Iraq', 110, 3000, 4500, 35),
('Valencia, Spain', 10, 1250, 2500, 25),
('Valparalso, Chile', 20, 1350, 2700, 25),
('Vladivostock, Russia', 150, 1600, 2600, 16),
('Vostochny, Russia', 150, 1200, 2000, 14),
('Xiamen, China', 10, 500, 900, 14),
('Xingang, China', 10, 550, 1000, 15),
('Yangon, Myanmar', 115, 800, 1800, 15),
('Yokohama, Japan', 5, 750, 1200, 10),
('Boston, United States', 115, 2200, 4400, 50),
('Chicago, United States', 115, 2200, 4400, 40),
('Houston, United States', 125, 2200, 4400, 45),
('Long Beach, United States', 95, 2200, 4400, 30),
('Los Angeles, United States', 80, 2200, 4400, 25),
('New York, United States', 95, 2200, 4400, 30),
('Oakland, United States', 95, 2200, 4400, 30),
('Savannah, United States', 125, 2200, 4400, 50),
('Seattle, United States', 125, 2200, 4400, 45),
('Tacoma, United States', 80, 2200, 4400, 30),
('Wilmington, United States', 180, 3200, 6400, 70);

-- --------------------------------------------------------

--
-- Table structure for table `country_truck`
--

CREATE TABLE `country_truck` (
  `ID` int(11) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `4 wheels` int(11) NOT NULL,
  `6 wheels` int(11) NOT NULL,
  `20'ft` int(11) NOT NULL,
  `40'ft` int(11) NOT NULL,
  `T/T` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country_truck`
--

INSERT INTO `country_truck` (`ID`, `Destination`, `4 wheels`, `6 wheels`, `20'ft`, `40'ft`, `T/T`) VALUES
(1, 'Combodia', 15000, 15000, 35000, 35000, 2),
(2, 'Laos', 15000, 15000, 35000, 35000, 2),
(3, 'Malaysia', 25000, 25000, 45000, 45000, 2),
(4, 'Malaysia', 15000, 15000, 35000, 35000, 2),
(5, 'Chiang Mai', 15000, 15000, 33000, 33000, 2),
(6, 'Chiang Rai', 15000, 15000, 33000, 33000, 2),
(7, 'Lampang', 15000, 15000, 33000, 33000, 2),
(8, 'Lamphun', 15000, 15000, 33000, 33000, 2),
(9, 'Mae Hong Son', 15000, 15000, 33000, 33000, 2),
(10, 'Nan', 15000, 15000, 33000, 33000, 2),
(11, 'Phayao', 15000, 15000, 33000, 33000, 2),
(12, 'Phrae', 15000, 15000, 33000, 33000, 2),
(13, 'Uttaradit', 15000, 15000, 33000, 33000, 2),
(14, 'Kalasin', 15000, 15000, 33000, 33000, 2),
(15, 'Khon Kaen', 15000, 15000, 33000, 33000, 2),
(16, 'Chaiyaphum', 15000, 15000, 33000, 33000, 2),
(17, 'Nakhon Phanom', 15000, 15000, 33000, 33000, 2),
(18, 'Nakhon Ratchasima', 15000, 15000, 33000, 33000, 2),
(19, 'Bueng Kan', 15000, 15000, 33000, 33000, 2),
(20, 'Buriram', 15000, 15000, 33000, 33000, 2),
(21, 'Maha Sarakham', 15000, 15000, 33000, 33000, 2),
(22, 'Mukdahan', 15000, 15000, 33000, 33000, 2),
(23, 'Yasothon', 15000, 15000, 33000, 33000, 2),
(24, 'Roi Et', 15000, 15000, 33000, 33000, 2),
(25, 'Loei', 15000, 15000, 33000, 33000, 2),
(26, 'Sakon Nakhon', 15000, 15000, 33000, 33000, 2),
(27, 'Surin', 15000, 15000, 33000, 33000, 2),
(28, 'Sisaket', 15000, 15000, 33000, 33000, 2),
(29, 'Nong Khai', 15000, 15000, 33000, 33000, 2),
(30, 'Hong Bua Lamphu', 15000, 15000, 33000, 33000, 2),
(31, 'Udon Thani', 15000, 15000, 33000, 33000, 2),
(32, 'Ubon Ratchathani', 15000, 1500, 33000, 33000, 2),
(33, 'Amnat Charoen', 15000, 15000, 33000, 33000, 2),
(34, 'Bangkok', 3500, 5000, 8000, 9000, 1),
(35, 'Kamphaeng Phet', 6000, 7000, 11000, 12000, 1),
(36, 'Chai Nat', 6000, 7000, 11000, 12000, 1),
(37, 'Nakhon Nayok', 6000, 7000, 11000, 12000, 1),
(38, 'Nakhon Pathom', 6000, 7000, 11000, 12000, 1),
(39, 'Nakhon Sawan', 6000, 7000, 11000, 12000, 1),
(40, 'Nonthaburi', 3500, 5000, 8000, 9000, 1),
(41, 'Pathum Thani', 3500, 5000, 8000, 9000, 1),
(42, 'Phra Nakhon Si Ayutthaya', 6000, 7000, 11000, 12000, 1),
(43, 'Phichit', 6000, 7000, 11000, 12000, 1),
(44, 'Phitsanulok', 7000, 8000, 12000, 13000, 1),
(45, 'Phetchabun', 6000, 7000, 11000, 12000, 1),
(46, 'Lopburi', 6000, 7000, 11000, 12000, 1),
(47, 'Samut Prakan', 3500, 5000, 8000, 9000, 1),
(48, 'Samut Songkhram', 3500, 5000, 8000, 9000, 1),
(49, 'Samut Sakhon', 3500, 5000, 8000, 9000, 1),
(50, 'Sing Buri', 6000, 7000, 11000, 12000, 1),
(51, 'Sukhothai', 7000, 8000, 12000, 13000, 1),
(52, 'Suphan Buri', 6000, 7000, 11000, 12000, 1),
(53, 'Saraburi', 6000, 7000, 11000, 12000, 1),
(54, 'Ang Thong', 6000, 7000, 11000, 12000, 1),
(55, 'Uthai Thani', 6000, 7000, 11000, 12000, 1),
(56, 'Chanthaburi', 6000, 7000, 11000, 12000, 1),
(57, 'Chachoengsao', 6000, 7000, 11000, 12000, 1),
(58, 'Chonburi', 6000, 7000, 11000, 12000, 1),
(59, 'Trat', 7000, 8000, 12000, 13000, 1),
(60, 'Phachinburi', 6000, 7000, 11000, 12000, 1),
(61, 'Rayong', 6000, 7000, 11000, 12000, 1),
(62, 'Sa Kaeo', 6000, 7000, 11000, 12000, 1),
(63, 'Kanchanaburi', 6000, 7000, 11000, 12000, 1),
(64, 'Tak', 6000, 7000, 11000, 12000, 1),
(65, 'Prachuap Khiri Khan', 6000, 7000, 11000, 12000, 1),
(66, 'Phetchaburi', 6000, 7000, 11000, 12000, 1),
(67, 'Ratchaburi', 6000, 7000, 11000, 12000, 1),
(68, 'Krabi', 20000, 25000, 40000, 40000, 2),
(69, 'Chumphon', 20000, 25000, 40000, 40000, 2),
(70, 'Trang', 20000, 25000, 40000, 40000, 2),
(71, 'Nakhon Si Thammarat', 20000, 25000, 40000, 40000, 2),
(72, 'Narathiwat', 20000, 25000, 40000, 40000, 2),
(73, 'Pattani', 20000, 25000, 40000, 40000, 2),
(74, 'Phang Nga', 20000, 25000, 40000, 40000, 2),
(75, 'Phatthalung', 20000, 25000, 40000, 40000, 2),
(76, 'Phuket', 20000, 25000, 40000, 40000, 2),
(77, 'Ranong', 20000, 25000, 40000, 40000, 2),
(78, 'Satun', 20000, 25000, 40000, 40000, 2),
(79, 'Songkhla', 20000, 25000, 40000, 45000, 2),
(80, 'Surat Thani', 20000, 25000, 40000, 45000, 2),
(81, 'Yala', 20000, 25000, 40000, 45000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_file`
--

CREATE TABLE `invoice_file` (
  `invoice_id` int(3) NOT NULL COMMENT 'คีย์หลัก',
  `path_file` varchar(150) NOT NULL COMMENT 'ที่เก็บไฟล์',
  `username` varchar(150) NOT NULL COMMENT 'คีย์นอก username',
  `status` varchar(150) NOT NULL,
  `receive_from` varchar(150) NOT NULL
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
(1, 'user', 'user', 'Krit', 'Pattananich', 'RBRU', '14/2', '0914084258', 'user'),
(2, 'admin', 'admin', 'นายกฤต', 'พัฒนพานิช', 'RBRU', '14/3', '0914084258', 'admin'),
(3, 'user2', 'user2', 'Krit', 'Pattnapanich', 'dexter.co.td', '14/5', '091084258', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_file`
--
ALTER TABLE `bill_file`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`booking_detail_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `invoice_file`
--
ALTER TABLE `invoice_file`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_file`
--
ALTER TABLE `bill_file`
  MODIFY `bill_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `booking_detail_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice_file`
--
ALTER TABLE `invoice_file`
  MODIFY `invoice_id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัก', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
