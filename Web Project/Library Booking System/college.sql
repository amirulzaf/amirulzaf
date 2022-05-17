-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 09:03 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `booking_table` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_duration` int(11) NOT NULL,
  `booking_qty` int(11) NOT NULL,
  `booking_time` time(3) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_table`, `booking_date`, `booking_duration`, `booking_qty`, `booking_time`, `student_id`) VALUES
(12, 1, '2021-01-28', 10, 1, '12:17:13.000', 1231231),
(19, 7, '2021-02-02', 10, 1, '00:54:00.000', 1231231),
(20, 1, '2021-01-28', 10, 1, '12:17:13.000', 1231231),
(21, 1, '2021-02-04', 10, 1, '00:22:00.000', 1231231),
(22, 13, '2021-01-26', 30, 1, '07:06:00.000', 1231231),
(23, 13, '2021-01-26', 30, 1, '07:06:00.000', 1231231);

-- --------------------------------------------------------

--
-- Table structure for table `ground`
--

CREATE TABLE `ground` (
  `ground_id` int(11) NOT NULL,
  `ground_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ground`
--

INSERT INTO `ground` (`ground_id`, `ground_num`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tablerow`
--

CREATE TABLE `tablerow` (
  `table_id` int(99) NOT NULL,
  `table_name` varchar(99) NOT NULL,
  `table_status` varchar(99) NOT NULL,
  `table_row` int(11) NOT NULL,
  `ground_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablerow`
--

INSERT INTO `tablerow` (`table_id`, `table_name`, `table_status`, `table_row`, `ground_id`) VALUES
(1, '1A', 'open', 1, 1),
(2, '1B', 'disable', 1, 1),
(3, '1C', 'open', 1, 1),
(4, '1D', 'disable', 1, 1),
(5, '1E', 'open', 1, 1),
(6, '1F', 'disable', 1, 1),
(7, '2A', 'disable', 2, 1),
(8, '2B', 'disabled', 2, 1),
(9, '2C', 'disabled', 2, 1),
(10, '2D', 'disabled', 2, 1),
(11, '2E', 'disabled', 2, 1),
(12, '2F', 'open', 2, 1),
(13, '3A', 'open', 3, 1),
(15, '3B', 'disabled', 3, 1),
(16, '3C', 'disabled', 3, 1),
(17, '3D', 'disabled', 3, 1),
(18, '3E', 'disabled', 3, 1),
(19, '3F', 'disabled', 3, 1),
(20, '4A', 'disabled', 4, 1),
(21, '4B', 'disabled', 4, 1),
(22, '4C', 'disabled', 4, 1),
(23, '4D', 'disabled', 4, 1),
(24, '4E', 'disabled', 4, 1),
(25, '4F', 'open', 4, 1),
(26, '5A', 'open', 5, 1),
(27, '5B', 'open', 5, 1),
(28, '5C', 'open', 5, 1),
(29, '5D', 'open', 5, 1),
(30, '5E', 'open', 5, 1),
(31, '5F', 'open', 5, 1),
(32, '6A', 'open', 6, 1),
(33, '6B', 'open', 6, 1),
(34, '6C', 'open', 6, 1),
(35, '6D', 'open', 6, 1),
(36, '6E', 'open', 6, 1),
(37, '6F', 'open', 6, 1),
(38, '1A', 'open', 1, 2),
(40, '1B', 'disabled', 1, 2),
(41, '1C', 'open', 1, 2),
(42, '2A', 'disabled', 2, 2),
(43, '2B', 'open', 2, 2),
(44, '2C', 'disabled', 2, 2),
(45, '3A', 'open', 3, 2),
(46, '3B', 'disabled', 3, 2),
(47, '3C', 'open', 3, 2),
(48, '4A', 'open', 4, 2),
(49, '4B', 'disabled', 4, 2),
(51, '5A', 'disabled', 5, 2),
(52, '5B', 'open', 5, 2),
(53, '6A', 'open', 6, 2),
(54, '6B', 'disabled', 6, 2),
(55, '7A', 'disabled', 7, 2),
(56, '7B', 'open', 7, 2),
(57, '8A', 'open', 8, 2),
(58, '8B', 'disabled', 8, 2),
(59, '9A', 'disabled', 9, 2),
(60, '9B', 'open', 9, 2),
(61, '1A', 'open', 1, 3),
(62, '1B', 'open', 1, 3),
(63, '1C', 'disabled', 1, 3),
(64, '2A', 'disabled', 2, 3),
(65, '2B', 'open', 2, 3),
(66, '2C', 'disabled', 2, 3),
(67, '3A', 'open', 3, 3),
(68, '3B', 'disabled', 3, 3),
(69, '3C', 'open', 3, 3),
(70, '4A', 'open', 4, 3),
(71, '4B', 'disabled', 4, 3),
(72, '5A', 'disabled', 5, 3),
(73, '5B', 'open', 5, 3),
(74, '6A', 'open', 6, 3),
(75, '6B', 'disabled', 6, 3),
(76, '7A', 'disabled', 7, 3),
(77, '7B', 'open', 7, 3),
(78, '8A', 'open', 8, 3),
(79, '8B', 'disabled', 8, 3),
(80, '9A', 'disabled', 9, 3),
(81, '9B', 'open', 9, 3),
(82, '10A', 'open', 10, 3),
(83, '10B', 'open', 10, 3),
(84, '10C', 'open', 10, 3),
(85, '11A', 'open', 11, 3),
(86, '11B', 'open', 11, 3),
(87, '11C', 'open', 11, 3),
(88, '12A', 'open', 12, 3),
(89, '12B', 'open', 12, 3),
(90, '12C', 'open', 12, 3),
(91, '13A', 'open', 13, 3),
(92, '13B', 'open', 13, 3),
(93, '13C', 'open', 13, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` varchar(100) NOT NULL,
  `User_Pass` varchar(9999) NOT NULL,
  `User_name` varchar(255) NOT NULL,
  `User_email` varchar(255) NOT NULL,
  `User_course` varchar(100) NOT NULL,
  `User_contact` varchar(20) NOT NULL,
  `User_Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `User_Pass`, `User_name`, `User_email`, `User_course`, `User_contact`, `User_Type`) VALUES
(' 3038', '1234567', 'whc123', 'woonwinchester@gmail.com', 'SE', '0177034609', 'Student'),
(' 5066585', '30382', 'lynn', 'wooncse@gmail.com', 'SE', '0177034609', 'Student'),
('1', '123', 'sdad', 'dqdq', 'ewqeq', 'qeqewqe', 'student'),
('1122701764', '321062', 'Woon Hoe Chun', 'woonwinchester@gmail.com', 'SE', '0177034609', 'Student'),
('1231231', '123', 'sgsdgsdfgfs', 'gfdgsffgs', 'afdsfads', 'gfdsfgdsgfd', 'student'),
('123456', '123456', 'whc', 'e.xia00@hotmail.com', 'wawawa', '0177034609', 'Student'),
('321038', '123456', 'Yvonee', 'Yvoone@gmail.com', 'Business admin', '012345678', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `booking_table` (`booking_table`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `ground`
--
ALTER TABLE `ground`
  ADD PRIMARY KEY (`ground_id`);

--
-- Indexes for table `tablerow`
--
ALTER TABLE `tablerow`
  ADD PRIMARY KEY (`table_id`),
  ADD KEY `ground_id` (`ground_id`),
  ADD KEY `ground_id_2` (`ground_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ground`
--
ALTER TABLE `ground`
  MODIFY `ground_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tablerow`
--
ALTER TABLE `tablerow`
  MODIFY `table_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`booking_table`) REFERENCES `tablerow` (`table_id`);

--
-- Constraints for table `tablerow`
--
ALTER TABLE `tablerow`
  ADD CONSTRAINT `tablerow_ibfk_1` FOREIGN KEY (`ground_id`) REFERENCES `ground` (`ground_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
