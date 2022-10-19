-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 06:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdpf51`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `stud_id` smallint(10) NOT NULL,
  `stud_code` smallint(10) NOT NULL,
  `stud_name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `marks` tinyint(3) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`stud_id`, `stud_code`, `stud_name`, `subject`, `marks`, `phone`) VALUES
(1, 101, 'Mark', 'English', 68, '345654895235'),
(2, 102, 'joshep', 'Physics', 70, '98756524585'),
(3, 103, 'john', 'Maths', 70, '976525656554'),
(4, 104, 'Barack ', 'Maths', 90, '8796522'),
(5, 105, 'Rinky ', 'Maths ', 85, '6756522141'),
(6, 106, 'Adam ', 'Science', 92, '798651'),
(7, 107, 'Andrew ', 'Science', 83, '569865454'),
(8, 108, 'Brayan ', 'Science', 85, '758756524585'),
(9, 109, 'Green Mark', 'English', 85, '3676525656554'),
(10, 110, 'Alexandar ', 'Biology', 67, '2356856541');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `stud_id` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
