-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 07:01 PM
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
-- Database: `wdpf51_exam2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_student` (IN `st_name` VARCHAR(50), IN `address` VARCHAR(100), IN `mobile` VARCHAR(20))   INSERT INTO student VALUES (NULL,st_name,address,mobile)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `rid` int(10) NOT NULL,
  `module_name` varchar(20) NOT NULL,
  `totalmarks` smallint(5) NOT NULL,
  `student_id` smallint(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`rid`, `module_name`, `totalmarks`, `student_id`) VALUES
(5, 'Java core', 25, 12),
(6, 'CSS', 36, 12),
(7, 'Bootstrap', 39, 13),
(8, 'PSD', 41, 13);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `st_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `st_name`, `address`, `mobile`) VALUES
(12, 'Nirob', 'Sylet', '0155696'),
(14, 'Sakib', 'Gabtoli', '0165'),
(15, 'Mushfiq', 'mirpur', '0165'),
(13, 'Karim', 'Jamalpur', '01658');

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `after_delete_trigger` AFTER DELETE ON `student` FOR EACH ROW DELETE FROM result WHERE  student_id = old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `students_records`
-- (See below for the actual view)
--
CREATE TABLE `students_records` (
`rid` int(10)
,`st_name` varchar(50)
,`module_name` varchar(20)
,`totalmarks` smallint(5)
,`address` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` smallint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure for view `students_records`
--
DROP TABLE IF EXISTS `students_records`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `students_records`  AS SELECT `r`.`rid` AS `rid`, `s`.`st_name` AS `st_name`, `r`.`module_name` AS `module_name`, `r`.`totalmarks` AS `totalmarks`, `s`.`address` AS `address` FROM (`result` `r` join `student` `s`) WHERE `s`.`id` = `r`.`student_id``student_id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `rid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
