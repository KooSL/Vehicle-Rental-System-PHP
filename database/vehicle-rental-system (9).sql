-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 05:10 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle-rental-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(50) NOT NULL,
  `a_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `a_username`, `a_password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `b_id` int(11) NOT NULL,
  `v_id` int(100) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `bv_image` varchar(100) NOT NULL,
  `b_email` varchar(100) NOT NULL,
  `b_vehicle` varchar(50) NOT NULL,
  `b_address` varchar(50) NOT NULL,
  `b_fromdate` date NOT NULL,
  `b_todate` date NOT NULL,
  `b_message` varchar(500) NOT NULL,
  `b_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`b_id`, `v_id`, `b_name`, `bv_image`, `b_email`, `b_vehicle`, `b_address`, `b_fromdate`, `b_todate`, `b_message`, `b_status`) VALUES
(1, 3, 'Kushal Acharya', 'yamaha-r15-v4-1.jpg', 'ka@gmail.com', 'Yamaha R15 V4', 'Narayanghat', '2024-02-28', '2024-02-29', 'I need this vehicle for 1 day.', ''),
(2, 13, 'Kushal Acharya', '1710083296IMG_2009.jpg', 'ka@gmail.com', 'dgfd', 'ratnapark', '2024-03-10', '2024-03-11', 'yutyu', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`, `c_type`) VALUES
(1, 'Car', 'SUV'),
(2, 'Bike', 'Racing'),
(3, 'Cycle', 'Mountain'),
(4, 'Truck', 'Heavy');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cnt_id` int(11) NOT NULL,
  `cnt_name` varchar(50) NOT NULL,
  `cnt_email` varchar(50) NOT NULL,
  `cnt_phone` varchar(15) NOT NULL,
  `cnt_message` varchar(500) NOT NULL,
  `cnt_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cnt_id`, `cnt_name`, `cnt_email`, `cnt_phone`, `cnt_message`, `cnt_date`) VALUES
(1, 'Kushal Acharya', 'acharyakushal629@gmail.com', '9745355605', 'hello', '2024-02-24 19:24:04'),
(2, 'Ram Bahadur', 'ram@gmail.com', '56456', 'dtert', '2024-03-19 21:03:34'),
(3, 'Rabi Lamichhane', 'rabi@gmail.com', '5634563', 'good luck rabi sir', '2024-03-19 21:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `sub_id` int(11) NOT NULL,
  `sub_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`sub_id`, `sub_email`) VALUES
(1, 'dgdfg@gmail.com'),
(2, 'acharyalkhdhf@gmail.com'),
(3, 'acharyalkhdhf@gmail.com'),
(4, 'cgbcb@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_image` varchar(100) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_phone` varchar(15) NOT NULL,
  `u_gender` varchar(20) NOT NULL,
  `u_password` varchar(20) NOT NULL,
  `u_reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`u_id`, `u_name`, `u_image`, `u_address`, `u_email`, `u_phone`, `u_gender`, `u_password`, `u_reg_date`) VALUES
(1, 'Kushal Acharya', '', 'Khairahani-13, Chitwan', 'ka@gmail.com', '9745355605', 'Male', '123', '2024-02-26 15:09:07'),
(2, 'dfgdf fdgdfg', '', 'fdsfvsd', '45454@gmail.com', 'dffdf434', 'Male', '123', '2024-03-14 14:29:46'),
(3, 'fghfgh fhfgh', '', 'DGD', 'ee2@gmail.com', 'eff', 'Male', '123', '2024-03-14 14:42:51'),
(4, 'dfgd', '', 'dffgd', 'dfg@gmail.com', 'fdsfs', 'Male', '123456789wW@', '2024-03-14 14:49:20'),
(5, 'gfhf', '', 'fgh', 'fgh@gmail.com', 'fghgf', 'Male', '1c6a0b4288d7d153945f', '2024-03-14 14:53:17'),
(6, 'dfd', '', 'dfgdf', 'fff@gmail.com', 'dfs', 'Female', '1c6a0b4288d7d153945f', '2024-03-14 15:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(50) NOT NULL,
  `v_type` varchar(50) NOT NULL,
  `v_fuel` varchar(20) NOT NULL,
  `v_seat` int(100) NOT NULL,
  `v_number` varchar(30) DEFAULT NULL,
  `v_cost` int(20) NOT NULL,
  `v_cunit` varchar(50) NOT NULL,
  `v_image1` varchar(500) NOT NULL,
  `v_image2` varchar(500) NOT NULL,
  `v_image3` varchar(500) NOT NULL,
  `v_description` varchar(200) NOT NULL,
  `v_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`v_id`, `v_name`, `v_type`, `v_fuel`, `v_seat`, `v_number`, `v_cost`, `v_cunit`, `v_image1`, `v_image2`, `v_image3`, `v_description`, `v_status`) VALUES
(1, 'Maruti Suzuki Breeza', 'Car', 'Petrol', 5, 'BA 13 NA 2421', 5000, 'day', 'maruti-suzuki-breeza-1.jpg', 'maruti-suzuki-breeza-2.jpg', 'maruti-suzuki-breeza-3.jpg', 'This is a Maruti Suzuki Breeza.', 'Available'),
(2, 'TATA Nexon', 'Car', 'EV', 5, 'Ba 08 Pa 3205', 20000, 'week', 'tata-nexon-1.jpg', 'tata-nexon-2.jpg', 'tata-nexon-3.jpg', 'TATA NExon EV. 5 Seater.', 'Available'),
(3, 'Yamaha R15 V4', 'Bike - Racing', 'Petrol', 2, 'Ga 18 Pa 8493', 3000, 'day', 'yamaha-r15-v4-1.jpg', 'yamaha-r15-v4-2.jpg', 'yamaha-r15-v4-3.jpg', 'Yamaha R15 V4 in cheap rate.', 'Available'),
(4, 'GTA Mountain', 'Cycle - Mountain', 'None', 1, '', 1200, 'hr', 'Gta-Mountainbike-1.jpg', 'Gta-Mountainbike-2.jpg', 'Gta-Mountainbike-3.jpg', 'Gta Mountainbike 27.5\" 3x8Speed Gear cycle.', 'Available'),
(5, 'Eicher Pro', 'Truck - Heavy', 'Diesel', 3, 'Ba 66 Pa 8329', 15000, 'day', 'eicher-pro-1.jpg', 'eicher-pro-2.jpg', 'eicher-pro-3.jpg', 'Eicher pro 2090. Capacity: 10572 Kgs', 'Available'),
(6, 'dgfd', 'Car - SUV', 'Petrol', 5, '4356456', 45645, 'day', '1710082443', '', '', 'tyrty', 'Available'),
(7, 'dgfdg', 'Truck - Heavy', 'Hybrid', 5, '45454', 45645, 'hr', '1710082804Snapchat-222715376.jpg', '', '', 'k;k;', 'Unavailable'),
(11, 'Tesla', 'Bike - Racing', 'None', 5, 'erwe45434', 3000, 'day', '1710083190IMG_2008.jpg', '1710083190Snapchat-1507586420.jpg', 'IMG_2008.jpg', 'retert', 'Available'),
(13, 'dgfd', 'Car - SUV', 'Diesel', 5, '434343', 3000, 'day', '1710083296IMG_2009.jpg', '1710083296Snapchat-1849444232.jpg', '1710083296tu-logo.png', 'tyret', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cnt_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD UNIQUE KEY `u_email` (`u_email`),
  ADD UNIQUE KEY `u_phone` (`u_phone`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`v_id`),
  ADD UNIQUE KEY `v_id` (`v_id`),
  ADD UNIQUE KEY `v_number` (`v_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cnt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
