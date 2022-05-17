-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 05:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BookID` int(100) NOT NULL,
  `BookName` varchar(100) NOT NULL,
  `BookQty` int(255) NOT NULL,
  `Lastupdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BookID`, `BookName`, `BookQty`, `Lastupdate`) VALUES
(1, 'Harry Porter', 0, '2020-09-02'),
(2, 'test', 0, '2020-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `booksrecord`
--

CREATE TABLE `booksrecord` (
  `LogID` int(100) NOT NULL,
  `Student_ID` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `BookName` varchar(255) NOT NULL,
  `BookQty` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `BorrowDate` date NOT NULL,
  `Return_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booksrecord`
--

INSERT INTO `booksrecord` (`LogID`, `Student_ID`, `Name`, `BookName`, `BookQty`, `Status`, `BorrowDate`, `Return_Date`) VALUES
(11, ' 123456', 'whc', 'Harry Porter', 1, 'Returned', '2020-09-14', '2020-09-15'),
(12, ' 123456', 'whc', 'Harry Porter', 1, 'Approved', '2020-09-15', '2020-09-16'),
(13, '  3038', 'whc123', 'JUMANJI', 1, 'Pending', '2020-10-29', '2020-10-27');

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
(' 1231231', '123', 'sgsdgsdfgfs', 'gfdgsffgs', 'afdsfads', 'gfdsfgdsgfd', 'student'),
(' 3038', '1234567', 'whc123', 'woonwinchester@gmail.com', 'SE', '0177034609', 'Student'),
(' 5066585', '30382', 'lynn', 'wooncse@gmail.com', 'SE', '0177034609', 'Student'),
('1122701764', '321062', 'Woon Hoe Chun', 'woonwinchester@gmail.com', 'SE', '0177034609', 'Student'),
('123456', '123456', 'whc', 'e.xia00@hotmail.com', 'wawawa', '0177034609', 'Student'),
('321038', '123456', 'Yvonee', 'Yvoone@gmail.com', 'Business admin', '012345678', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `booksrecord`
--
ALTER TABLE `booksrecord`
  ADD PRIMARY KEY (`LogID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `BookID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booksrecord`
--
ALTER TABLE `booksrecord`
  MODIFY `LogID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
