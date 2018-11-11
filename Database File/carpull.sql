-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 10:47 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carpull`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(6) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_img` varchar(255) NOT NULL,
  `admin_phone` varchar(100) NOT NULL,
  `admin_officeID` varchar(100) NOT NULL,
  `admin_status` varchar(20) NOT NULL,
  `register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_img`, `admin_phone`, `admin_officeID`, `admin_status`, `register`) VALUES
(1, 'admin', '5683', 'download.png', '01707080401', 'BD00058', '1', '2018-11-08 06:27:10'),
(3, 'admin2', '12345', 'download.png', '017070707', 'BD25821', '1', '2018-11-07 10:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `car_booking`
--

CREATE TABLE `car_booking` (
  `booking_id` int(20) NOT NULL,
  `car_id` varchar(100) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `car_number` varchar(100) NOT NULL,
  `car_img` varchar(255) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `day_count` varchar(50) NOT NULL,
  `boking_status` varchar(20) NOT NULL,
  `booking_cost` varchar(100) NOT NULL,
  `driver_rating` varchar(50) NOT NULL,
  `driver_id` varchar(20) NOT NULL,
  `start_mileage` varchar(50) NOT NULL,
  `end_mileage` varchar(50) NOT NULL,
  `reg_date_booking` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `car_driver`
--

CREATE TABLE `car_driver` (
  `driver_id` int(20) NOT NULL,
  `car_id` int(6) NOT NULL,
  `driver_name` varchar(100) NOT NULL,
  `driver_phone` varchar(50) NOT NULL,
  `driver_img` varchar(255) NOT NULL,
  `driver_license` varchar(100) NOT NULL,
  `driver_nid` varchar(100) NOT NULL,
  `driver_status` varchar(20) NOT NULL,
  `driver_update` varchar(50) NOT NULL,
  `driver_reg` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_driver`
--

INSERT INTO `car_driver` (`driver_id`, `car_id`, `driver_name`, `driver_phone`, `driver_img`, `driver_license`, `driver_nid`, `driver_status`, `driver_update`, `driver_reg`) VALUES
(1, 16, 'Belal', '01707080401', 'driver2.png', '65448161', '25525826522', '1', '', '2018-11-10 06:34:04.632463'),
(11, 14, 'Rahim', '01707080401', 'Driver Default.jpg', '644444444', '2552582652258888', '1', '', '2018-10-17 05:37:55.848103'),
(12, 17, 'Hadi', '1707080401', 'driver2.png', '5689586521', '199235689548', '1', '', '2018-10-17 06:08:20.287857'),
(21, 26, 'Dulal', '01715788357', 'IMG_7965.JPG', '000000000000', '000000000000', '1', '', '2018-11-10 08:49:33.867170'),
(22, 27, 'Kalam', '01921311474', 'IMG_7971.JPG', '000000000000', '000000000000', '1', '', '2018-11-10 08:53:05.660591'),
(23, 25, 'Rofiq(Jr)', '01984548331', 'IMG_7968.JPG', '000000000000', '000000000000', '1', '', '2018-11-10 08:56:04.460375');

-- --------------------------------------------------------

--
-- Table structure for table `chart_info`
--

CREATE TABLE `chart_info` (
  `chart_id` int(6) NOT NULL,
  `year` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `carName_number` varchar(100) NOT NULL,
  `booking_days` varchar(50) NOT NULL,
  `chart_reg` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chart_info`
--

INSERT INTO `chart_info` (`chart_id`, `year`, `month`, `carName_number`, `booking_days`, `chart_reg`) VALUES
(1, '2018', 'january', 'Toyta-003', '5', '0000-00-00 00:00:00.000000'),
(2, '2018', 'february', 'sujuki-002', '3', '0000-00-00 00:00:00.000000'),
(3, '2018', 'march', 'Toyta2-0034', '5', '2018-10-22 05:28:31.152809'),
(4, '2018', 'february', 'sujuki2-0022', '4', '2018-10-22 05:28:50.754792'),
(5, '2016', 'march', 'Toyta2-0034', '5', '2018-10-22 05:28:31.152809'),
(6, '2017', 'march', 'Toyta2-0034', '5', '2018-10-22 05:28:31.152809');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(6) NOT NULL,
  `location` varchar(250) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location`, `regDate`) VALUES
(1, 'valuka', '2018-10-28 09:00:19'),
(2, 'Savar', '2018-10-28 09:00:19'),
(3, 'Mymensingh', '2018-10-28 09:00:59'),
(5, 'Dhaka', '2018-10-28 09:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `loginlog`
--

CREATE TABLE `loginlog` (
  `login_id` int(6) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_os` varchar(50) NOT NULL,
  `user_browser` varchar(50) NOT NULL,
  `user_device` varchar(100) NOT NULL,
  `user_status` varchar(6) NOT NULL,
  `logIn` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `logOut` varchar(255) NOT NULL,
  `regsistration` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car`
--

CREATE TABLE `tbl_car` (
  `car_id` int(20) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `car_namePlate` varchar(200) NOT NULL,
  `car_type` varchar(100) NOT NULL,
  `car_capacity` varchar(255) NOT NULL,
  `car_img1` varchar(255) NOT NULL,
  `car_img2` varchar(255) NOT NULL,
  `car_img3` varchar(100) NOT NULL,
  `car_door` varchar(50) NOT NULL,
  `car_gearbox` varchar(50) NOT NULL,
  `car_gps` varchar(50) NOT NULL,
  `car_aircobdition` varchar(100) NOT NULL,
  `car_power_doorLock` varchar(100) NOT NULL,
  `car_cdPlayer` varchar(100) NOT NULL,
  `car_remarks` varchar(255) NOT NULL,
  `show_status` varchar(6) NOT NULL,
  `update_time` varchar(100) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_car`
--

INSERT INTO `tbl_car` (`car_id`, `car_name`, `car_namePlate`, `car_type`, `car_capacity`, `car_img1`, `car_img2`, `car_img3`, `car_door`, `car_gearbox`, `car_gps`, `car_aircobdition`, `car_power_doorLock`, `car_cdPlayer`, `car_remarks`, `show_status`, `update_time`, `reg_time`) VALUES
(14, 'Toyotassss', '00377777', 'CNG', '6', 'ddd (1).jpg', 'dsssss.jpg', 'ddd (2).jpg', '6', 'Manual', '1', '1', '1', '1', 'this is demo ttttttttttttttttttttttttttt', '1', '', '2018-11-09 14:43:40'),
(16, 'Suzuki', '005', 'Petrol', '7', 'ddd (2).jpg', 'dsssss.jpg', 'ddd (1).jpg', '', '', '', '0', '1', '1', 'dfhfghg', '1', '', '2018-10-16 09:34:35'),
(17, 'Nissan 2', '001', 'Petrol', '4', 'rewre.jpg', 'dhtrhtr.jpg', 'ertyrey.jpg', '4', 'Automatic', '0', '1', '1', '1', '								This is Nissan car ............... Updated<br>							', '1', '', '2018-10-27 11:46:31'),
(19, 'Toyota Probox', '002', 'CNG', '4', 'ertyrey.jpg', '', '', '6', 'Automatic', '0', '0', '0', '0', 'This is update test<br>', '0', '', '2018-11-09 15:06:25'),
(25, 'Hiase', '157076', 'CNG', '6', 'IMG_7944.JPG', 'IMG_7950.JPG', 'IMG_7952.JPG', '4', 'Automatic', '1', '1', '1', '1', 'This is demon', '1', '', '2018-11-10 08:41:54'),
(26, 'Toytota Noah', '161936', 'CNG', '6', 'IMG_7929.JPG', 'IMG_7938.JPG', 'IMG_7943.JPG', '4', 'Automatic', '1', '1', '1', '1', '', '1', '', '2018-11-10 08:49:49'),
(27, 'Toytota', '154183', 'CNG', '6', 'IMG_7915.JPG', 'IMG_7910.JPG', 'IMG_7911.JPG', '4', 'Automatic', '1', '1', '1', '1', '', '', '', '2018-11-10 08:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(6) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_contract` varchar(100) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `user_officeId` varchar(20) NOT NULL,
  `user_status` varchar(6) NOT NULL,
  `user_update` varchar(20) NOT NULL,
  `user_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_contract`, `user_img`, `user_officeId`, `user_status`, `user_update`, `user_reg`) VALUES
(1, 'saif', '5683', '8888888888888', 'download.jpg', '5555555555', '1', '', '2018-11-10 08:25:12'),
(4, 'rana', '5683', '2147483647', 'hdfhgfd.png', 'BG-9999990', '1', '13-10-2018 10:36:08 ', '2018-11-10 08:21:56'),
(5, 'user', '12345', '2147483647', '0003.jpg', 'BG-998777666666666', '1', '', '2018-11-10 08:22:34'),
(6, 'hadi', '12345', '14548645', 'download.png', '014894894', '1', '', '2018-11-07 13:27:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `car_booking`
--
ALTER TABLE `car_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `car_driver`
--
ALTER TABLE `car_driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `chart_info`
--
ALTER TABLE `chart_info`
  ADD PRIMARY KEY (`chart_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `loginlog`
--
ALTER TABLE `loginlog`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_car`
--
ALTER TABLE `tbl_car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car_booking`
--
ALTER TABLE `car_booking`
  MODIFY `booking_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `car_driver`
--
ALTER TABLE `car_driver`
  MODIFY `driver_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `chart_info`
--
ALTER TABLE `chart_info`
  MODIFY `chart_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loginlog`
--
ALTER TABLE `loginlog`
  MODIFY `login_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `tbl_car`
--
ALTER TABLE `tbl_car`
  MODIFY `car_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
