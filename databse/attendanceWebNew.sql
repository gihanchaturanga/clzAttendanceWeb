-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2022 at 08:41 AM
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
(2, 'gihan chathuranga attanayake', '0726387197', 'admin', 'asd', 'ADMIN', 1, '2022-02-08 13:04:56', 1);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
