-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 11, 2022 at 04:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendanceWebNew`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `grade` varchar(30) NOT NULL,
  `time` time NOT NULL,
  `t_id` int(11) NOT NULL,
  `inst_id` int(11) NOT NULL,
  `day` varchar(10) DEFAULT NULL,
  `profit` decimal(10,0) DEFAULT NULL,
  `profitType` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  `stat` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `grade`, `time`, `t_id`, `inst_id`, `day`, `profit`, `profitType`, `timestamp`, `stat`) VALUES
(1, 'java programming', '1st year', '08:00:00', 3, 1, 'monday', '25', 1, '2022-02-10 08:59:51', 1),
(2, 'web programming', '1st year', '10:00:00', 3, 1, 'wednesday', '25', 2, '2022-02-10 12:48:45', 1),
(3, 'sad', '1st year', '24:00:00', 3, 1, 'wednesday', '25', 2, '2022-02-10 12:50:32', 1),
(4, 'dbms', '1st year', '14:00:00', 3, 1, 'wednesday', '25', 3, '2022-02-10 12:53:53', 1),
(5, 'project management', '1st year', '16:00:00', 4, 1, 'wednesday', '25', 1, '2022-02-10 12:55:34', 1),
(6, 'oopc 2', '1st year', '13:00:00', 4, 1, 'friday', '25', 1, '2022-02-10 16:28:28', 1),
(7, 'web programming ii', '2nd year', '20:30:00', 4, 1, 'tuesday', '10', 1, '2022-02-10 16:32:56', 1),
(8, 'project management', '2nd year', '15:30:00', 3, 1, 'monday', '20', 1, '2022-02-10 23:20:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cls_payment`
--

CREATE TABLE `cls_payment` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `amount` double NOT NULL,
  `timestamp` datetime NOT NULL,
  `stat` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cls_payment`
--

INSERT INTO `cls_payment` (`id`, `class_id`, `name`, `amount`, `timestamp`, `stat`) VALUES
(1, 7, 'regular payment', 1200, '2022-02-10 17:49:12', 1),
(2, 7, 'half payment', 600, '2022-02-10 18:33:14', 1),
(3, 7, 'half payment', 300, '2022-02-10 19:16:53', 0),
(4, 7, 'paper + theory', 600, '2022-02-10 19:27:09', 0),
(5, 1, 'regular payment', 600, '2022-02-10 19:56:49', 1),
(6, 1, 'regular payment', 600, '2022-02-10 19:56:50', 0),
(7, 1, 'regular payment', 600, '2022-02-10 19:57:39', 0),
(8, 1, 'regular payment', 600, '2022-02-10 19:57:41', 0),
(9, 1, 'regular payment', 600, '2022-02-10 19:57:43', 0),
(10, 1, 'regular payment', 600, '2022-02-10 19:57:45', 0),
(11, 1, 'regular payment', 600, '2022-02-10 19:57:49', 0),
(12, 2, 'regular payment', 600, '2022-02-10 20:00:58', 1),
(13, 1, 'paper + theory', 1200, '2022-02-10 20:02:40', 1),
(14, 1, 'paper + theory + revision', 1800, '2022-02-10 20:04:43', 1),
(15, 1, 'half payment', 300, '2022-02-10 20:06:27', 1),
(16, 2, 'half payment', 300, '2022-02-10 20:06:53', 1),
(17, 2, 'paper + theory', 1000, '2022-02-10 20:07:18', 1),
(18, 2, 'paper + theory + revision', 1800, '2022-02-10 20:07:39', 1),
(19, 3, 'regular payment', 1000, '2022-02-10 20:08:04', 1),
(20, 3, 'half payment', 600, '2022-02-10 20:08:12', 1),
(21, 8, 'regular fee', 3500, '2022-02-10 23:20:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `payDate` date NOT NULL,
  `payType` varchar(15) NOT NULL,
  `mobileOne` varchar(15) NOT NULL,
  `userOne` varchar(50) NOT NULL,
  `mobileTwo` varchar(15) DEFAULT NULL,
  `userTwo` varchar(50) DEFAULT NULL,
  `payment` double NOT NULL,
  `timestamp` datetime NOT NULL,
  `stat` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`id`, `name`, `payDate`, `payType`, `mobileOne`, `userOne`, `mobileTwo`, `userTwo`, `payment`, `timestamp`, `stat`) VALUES
(1, 'Indeepa Institute - Gampaha', '2022-03-01', 'LIFETIME', '0765432718', 'UnknownIndeepa', '', '', 5000, '2022-02-08 11:08:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(75) DEFAULT NULL,
  `school` varchar(150) DEFAULT NULL,
  `emergency` varchar(15) DEFAULT NULL,
  `eid` varchar(30) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `stat` tinyint(2) NOT NULL DEFAULT 1,
  `inst_id` int(11) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `mobile`, `address`, `email`, `school`, `emergency`, `eid`, `timestamp`, `stat`, `inst_id`, `dob`) VALUES
(1, 'pamudi bhagya attanayake', '0716574837', '245/1, thotillagahawatta, katuwellegama', 'bhagya@gmail.com', 'presidet\'s college, minuwangoda', '0775179587', 'NULL', '2022-02-08 13:17:54', 1, 1, '2003-08-19'),
(2, 'dasun umayanga kumara', '0787647362', '288/3, thotillagahawatta, katuwellegama', '', '', '', 'NULL', '2022-02-08 13:26:53', 1, 1, '1998-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `position` varchar(20) NOT NULL,
  `inst_id` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `stat` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `username`, `pwd`, `position`, `inst_id`, `timestamp`, `stat`) VALUES
(1, 'Super Admin', '0775179587', 'admin@gmail.com', 'asd', 'DEV', NULL, '2022-02-08 08:31:42', 1),
(2, 'gihan chathuranga attanayake', '0726387197', 'admin', 'asd', 'ADMIN', 1, '2022-02-08 13:04:56', 1),
(3, 'chathuranga attanayake', '0775879587', 'chathu', 'asd', 'TEACHER', 1, '2022-02-08 15:04:12', 1),
(4, 'attanayake', '0775179587', 'gihanchathu@gmail.com', 'asd', 'TEACHER', 1, '2022-02-08 15:07:08', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cls_payment`
--
ALTER TABLE `cls_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cls_payment`
--
ALTER TABLE `cls_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
