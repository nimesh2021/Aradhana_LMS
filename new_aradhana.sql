-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 12:55 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_aradhana`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `aid` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tp` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `nic` varchar(20) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`aid`, `fname`, `lname`, `dob`, `gender`, `email`, `tp`, `address`, `nic`, `password`, `role`) VALUES
(4, 'Kamal', 'Perera', '2021-07-14', 'Female', 'k.perera@yahoo.com', '0711111111', 'Ibbagamuwa', '908765678978', '12345678', 'User'),
(5, 'Saman', 'Kumara', '2020-12-15', 'Female', 'saman1.kumara@hotmail.com', '0716711111', 'Kurunegala', '112341111212', '12345678', 'Admin'),
(6, 'Sanath', 'Jayasuruya', '2021-07-15', 'Female', 'sanath.jayasuriya@live.com', '0715611111', 'Galgamuwa', '958774678v', '12345678', 'Advisor');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `shid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time1` varchar(20) NOT NULL,
  `group1` varchar(20) NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`shid`, `date`, `time1`, `group1`, `aid`) VALUES
(4, '2021-07-28', '06:33', 'Mid-Day', 6),
(5, '2021-07-28', '06:33', 'Mid-Day', 6),
(6, '2021-07-10', '15:59', 'Evening', 6),
(7, '2021-07-31', '16:54', 'Evening', 6);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tp` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `nic` varchar(20) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `package` varchar(20) NOT NULL,
  `group1` varchar(20) NOT NULL,
  `exam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `fname`, `lname`, `dob`, `gender`, `email`, `tp`, `address`, `nic`, `password`, `package`, `group1`, `exam`) VALUES
(3, 'Saman', 'Kumara', '2021-07-06', 'Male', 'sama.kumara@gmail.com', '0722222222', 'Wariyapola', '890087679v', '12345678', 'Package 1', 'Mid-Day', 'Pass'),
(5, 'Yasiru', 'Kaweesha', '1999-01-06', 'Male', 'yasiru3@gmail.com', '0713578562', 'Maho', '987745679v', '12345678', 'Package 2', 'Mid-Day', 'Pass'),
(6, 'Buddhika', 'Prasanna', '2021-07-15', 'Male', 'buddhika22@gmail.com', '0754378565', 'Kurunegala', '978898769v', '12345678', 'Package 1', 'Morning', 'Fail'),
(7, 'Tharaka', 'Bandara', '1999-01-06', 'Male', 'tharakabandara@gmail.com', '0768778562', 'Maho', '990060088v', '12345678', 'Package 4', 'Evening', 'Pass'),
(9, 'Wasantha', 'Rathnayaka', '2021-07-10', 'Male', 'wasantha.wasantha@gmail.com', '0701231234', 'Kurunegala', '897780987v', '12345678', 'Package 1', 'Morning', 'Not Attempted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`shid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `shid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
