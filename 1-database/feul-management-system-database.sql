-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 10:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feul-management-system-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `feul_data`
--

CREATE TABLE `feul_data` (
  `auto_id` int(11) NOT NULL,
  `vehicle_no` varchar(200) NOT NULL,
  `date_of_received` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feul_data`
--

INSERT INTO `feul_data` (`auto_id`, `vehicle_no`, `date_of_received`) VALUES
(4, 'dsf', '2022-07-25'),
(5, 'dsfdsad', '2022-07-25'),
(6, 'dsad', '2022-07-25'),
(7, 'ds', '2022-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_data`
--

CREATE TABLE `vehicle_data` (
  `auto_id` int(11) NOT NULL,
  `vehicle_number` varchar(300) NOT NULL,
  `vehicle_owner_name` varchar(300) NOT NULL,
  `licence_renewal_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_data`
--

INSERT INTO `vehicle_data` (`auto_id`, `vehicle_number`, `vehicle_owner_name`, `licence_renewal_status`) VALUES
(19, 'ws2323', 'Gunarakulan', 'Expired'),
(20, 'w24wrfd', 'Rakulan', 'Expired'),
(21, 'v34ewrw', 'Guna', 'Valid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feul_data`
--
ALTER TABLE `feul_data`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `vehicle_data`
--
ALTER TABLE `vehicle_data`
  ADD PRIMARY KEY (`auto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feul_data`
--
ALTER TABLE `feul_data`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle_data`
--
ALTER TABLE `vehicle_data`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
