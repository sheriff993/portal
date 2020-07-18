-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 02:51 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `sn` int(255) NOT NULL,
  `ccode` text NOT NULL,
  `ctitle` text NOT NULL,
  `cunit` text NOT NULL,
  `dept` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`sn`, `ccode`, `ctitle`, `cunit`, `dept`) VALUES
(1, 'COM311', 'OPERATING SYSTEM 1', '2', 'COMPUTER SCIENCE'),
(12, 'COM321', 'INTRODUCTION TO WEB TECHNOLOGY', '3', 'COMPUTER SCIENCE');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `sn` int(255) NOT NULL,
  `dept` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`sn`, `dept`) VALUES
(1, 'COMPUTER SCIENCE'),
(2, 'COMPUTER TECHNOLOGY'),
(4, 'SLT');

-- --------------------------------------------------------

--
-- Table structure for table `regcourse`
--

CREATE TABLE `regcourse` (
  `sn` int(255) NOT NULL,
  `student_id` text NOT NULL,
  `ctitle` text NOT NULL,
  `ccode` text NOT NULL,
  `cunit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regcourse`
--

INSERT INTO `regcourse` (`sn`, `student_id`, `ctitle`, `ccode`, `cunit`) VALUES
(44, '2018/PT/106594', 'OPERATING SYSTEM 1', 'COM311', '2'),
(45, '2018/PT/106594', 'INTRODUCTION TO WEB TECHNOLOGY', 'COM321', '3');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sn` int(255) NOT NULL,
  `snam` text NOT NULL,
  `lnam` text NOT NULL,
  `onam` text NOT NULL,
  `student_id` text NOT NULL,
  `session` text NOT NULL,
  `photo` text NOT NULL,
  `pno` text NOT NULL,
  `statee` text NOT NULL,
  `lga` text NOT NULL,
  `dept` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sn`, `snam`, `lnam`, `onam`, `student_id`, `session`, `photo`, `pno`, `statee`, `lga`, `dept`, `email`, `pass`) VALUES
(6, 'MUSTAPHA', 'SHERIFF', 'MAYOWA', '2018/PT/106594', '2020/2021', 'images/usr/106594.jpg', '08069484771', 'KWARA', 'OFFA', 'COMPUTER SCIENCE', 'SHERIFFMAYOWA0293@GMAIL.COM', 'ADMIN1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `regcourse`
--
ALTER TABLE `regcourse`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `sn` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `sn` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `regcourse`
--
ALTER TABLE `regcourse`
  MODIFY `sn` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sn` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
