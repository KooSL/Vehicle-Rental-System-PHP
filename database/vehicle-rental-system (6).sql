-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 04:48 PM
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
(1, 'admin', '1234'),
(2, 'root', '1234');

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
(8, 0, '', '', '', 'Tesla', 'fty', '2024-02-13', '2024-02-13', 'fgdfgdg', 'Confirmed'),
(9, 0, 'Bhupendra Jogi', '', '', 'Tesla', 'jjuu', '2024-02-13', '2024-02-13', 'uuuu', ''),
(10, 0, 'Bhupendra Jogi', '', '', 'BMW', 'bnmbmn', '2024-02-16', '2024-02-17', 'yujhjghj', ''),
(11, 8, 'Bhupendra Jogi', '', '', 'dio', 'ghar', '2024-02-14', '2024-02-14', 'sdssd', ''),
(12, 12, 'Bhupendra Jogi', '', '', 'Tesla', 'tandi', '2024-02-15', '2024-02-14', 'sdsds', ''),
(13, 12, 'Bhupendra Jogi', '', '', 'Tesla', 'tandi', '2024-02-15', '2024-02-14', 'sdsds', ''),
(14, 10, 'Bhupendra Jogi', '', '', 'BMW', 'ktm', '2024-02-14', '2024-02-14', 'rfhfgtet', ''),
(15, 12, 'Bhupendra Jogi', '', '', 'Tesla', 'pkr', '2024-02-14', '2024-02-14', 'vdfgdf', 'Confirmed'),
(16, 10, 'fdfd@gmail.com', '', '', 'BMW', 'ddd', '2024-02-14', '2024-02-14', 'ddd', 'Canceled'),
(23, 10, 'Kushal Acharya', '', 'dfdfd@gmail.com', 'BMW', 'ratnapark', '2024-02-15', '2024-02-15', 'sfsf', 'Confirmed');

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
(3, 'Car', 'Sedan'),
(4, 'Bike', 'Normal');

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
(1, 'Kushal Acharya', 'acharyakushal629@gmail.com', '9745355605', 'jmdtthsw th', '2024-02-21 19:47:41'),
(2, 'Kushal Acharya', 'acharyakushal629@gmail.com', '9745355605', 'jmdtthsw th', '2024-02-21 19:47:41'),
(3, '', '', '', '', '2024-02-21 19:47:41'),
(4, '', '', '', '', '2024-02-21 19:47:41'),
(5, '', '', '', '', '2024-02-21 19:47:41'),
(6, '', '', '', '', '2024-02-21 19:47:41'),
(7, 'Kushal Acharya', 'acharyakushal629@gmail.com', '9745355605', 'fsdf fsdf', '2024-02-21 19:47:41'),
(8, 'Kushal Acharya', 'acharyakushal629@gmail.com', '9745355605', 'tfhrt rtytyr', '2024-02-21 19:47:41'),
(9, 'Kushal Acharya', 'acharyakushal629@gmail.com', '9745355605', 'trtytry', '2024-02-21 19:47:41'),
(10, 'Kushal Acharya', 'acharyakushal629@gmail.com', '9745355605', 'heloo', '2024-02-21 19:48:10');

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
(0, 'dgdfg@gmail.com');

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
(1, 'Kushal Acharya', '', 'Khairahani-13, Chitwan', 'dfdfd@gmail.com', '45764565', 'male', '123', '2024-01-26 00:00:00'),
(38, 'Kushal Acharya', '', 'Khairahani-13, Chitwan', 'acharyakushal629@gmail.com', '9745355605', 'male', '202cb962ac59075b964b', '2024-01-26 00:00:00'),
(39, 'ram bahadur', '', 'ktm', 'gf@gmail.com', '675767', 'other', '289dff07669d7a23de0e', '2024-01-26 00:00:00'),
(40, 'sss', '', 'ss', 'dd', '4444', 'male', '11ddbaf3386aea1f2974', '0000-00-00 00:00:00'),
(41, 'Bhupendra Jogi', 'IMG_2007.jpg', 'Khairahani-13, Chitwan', 'fdfd@gmail.com', '8888888888', 'Male', '123', '0000-00-00 00:00:00'),
(42, 'sss', '', 'ghar', 'dj@gmail.com', '4564356', 'male', '202cb962ac59075b964b', '0000-00-00 00:00:00'),
(43, 'juytj', '', 'yuyu', 'yuiy@gmail.com', '565', 'female', '202cb962ac59075b964b', '0000-00-00 00:00:00'),
(44, 'rtyr', '', 'rtyrt', 'ghj@gmail.com', '4543', 'male', '202cb962ac59075b964b', '2024-02-12 18:23:05'),
(45, 'jgh', '', 'gjg', 'aa@gmail.com', '46456', 'male', '81dc9bdb52d04dc20036', '2024-02-12 21:30:57'),
(46, 'ggg', '', 'ggg', 'g@gmail.com', '555555', 'male', '202cb962ac59075b964b', '2024-02-13 19:12:24'),
(47, 'ff', '', 'ff', 'ff@gmail.com', '4456', 'female', '321', '2024-02-13 19:18:03');

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
(8, 'dio', 'Car', 'petrol', 0, '45454', 20000, 'hr', 'image-1.jpg', '', '', 'trhytr tryrtyrt ryrtyrty ryr rty r', 'Available'),
(10, 'BMW', 'Car', 'diesel', 4, 'erwe45434', 100000, '', '', '', '', '87486', 'Unavailable'),
(12, 'Tesla', 'Car', 'ev', 6, 'hg56g5r6', 100000, 'year', '', '', '', 'ghfgh', 'Available');

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
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cnt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
