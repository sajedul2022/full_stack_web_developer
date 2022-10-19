-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 07:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdpf51_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(1, 'Walton', 'Savar', '014523366532'),
(2, 'Singer', 'Mirpur', '0145233669');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, 'Walton Flat TV', 20000, 1),
(2, 'Walton Fridge', 15000, 1),
(3, 'Singer 30 inch TV', 18000, 2),
(4, 'Singer Sewing Machine', 8000, 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_info_view`
-- (See below for the actual view)
--
CREATE TABLE `product_info_view` (
`id` int(11)
,`product_name` varchar(50)
,`manufacturer_name` varchar(50)
,`price` int(5)
);

-- --------------------------------------------------------

--
-- Structure for view `product_info_view`
--
DROP TABLE IF EXISTS `product_info_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_info_view`  AS SELECT `p`.`id` AS `id`, `p`.`name` AS `product_name`, `m`.`name` AS `manufacturer_name`, `p`.`price` AS `price` FROM (`manufacturer` `m` join `product` `p`) WHERE `m`.`id` = `p`.`manufacturer_id` AND `p`.`price` > 5000 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
