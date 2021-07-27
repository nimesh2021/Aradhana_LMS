-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 02:12 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `tp` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `nic` varchar(20) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`id`, `fname`, `lname`, `dob`, `gender`, `email`, `tp`, `address`, `nic`, `password`) VALUES
(1, 'ATestFname', 'ATestLname', '2021-07-06', '', 'test@test.com', '07111111111', 'Kurunegala', '111111121v', '12345678'),
(2, 'ATestFname', 'ATestLname', '2021-07-26', '', 'test@test.com', '07111111111', 'Kurunegala', '111111121v', '12345678'),
(3, 'iu', 'ii', '2021-07-13', '', 'test@test.com', '123dgbny5', 'ewgwrhq', '8878686686868', '12345678'),
(4, 'rfsd', 'dsgsg', '2021-07-16', 'Female', 'sdgd@df.bom', 'wegdgw', 'wewe', 'w3241', '12345678');

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
  `email` varchar(20) DEFAULT NULL,
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
(4, 'dfsg', 'rtwrd', '2021-07-14', 'Female', 'edgdg@mbd.codh', '07111111111', 'ibbgmuwa', '8878686686868', '12345678', 'Advisor'),
(5, 'wdwdwq', 'ATestLname', '2020-12-15', 'Female', 'eddgdg1@mbd.codh', '07167111113', 'Kurunegala', '11234111121v', '12345678', 'Admin'),
(6, 'TestFname', 'qwrqwr', '2021-07-15', 'Female', 'edgdg@mbd.codh', 'hyi67877988989786756', 'wewe', '=0887879877777766665', '12345678', 'Advisor');

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
(6, '2021-07-10', '15:59', 'Evening', 6);

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
  `email` varchar(20) DEFAULT NULL,
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
(3, 'Saman', 'Kumara', '2021-07-06', 'Male', 'test@test.com', '0722222222', 'Wariyapola', '111155521v', '12345678', 'Package 1', 'Mid-Day', 'Pass'),
(5, 'Yasiru', 'Kaweesha', '1999-01-06', 'Male', 'yasiru3@gmail.com', '0713578562', 'Maho', '990060088v', '12345678', 'Package 2', 'Mid-Day', 'Pass'),
(6, 'efwtwet', 'ewrwerwer', '2021-07-15', 'Male', 'erwerwerw@erger.vse', '11111111111111111111', 'Kurunegala', '999999999v', '12345678', 'Package 1', 'Morning', 'Fail'),
(7, 'Yasiru', 'Kaweesha', '1999-01-06', 'Male', 'yasirukaweesha3@gmai', '0713578562', 'Maho', '990060088v', '12345678', 'Package 4', 'Evening', 'Pass'),
(8, 'Hansika', 'TestLname', '2021-07-10', 'Male', 'sdgd@df.bom', '0713578562', 'Kurunegala', '990060088v', '12345678', 'Package 1', 'Morning', 'Fail'),
(9, 'Hansika', 'TestLname', '2021-07-10', 'Male', 'sdgd@df.bom', '0713578562', 'Kurunegala', '990060088v', '12345678', 'Package 1', 'Morning', 'Not Attempted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `advisor`
--
ALTER TABLE `advisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `shid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
