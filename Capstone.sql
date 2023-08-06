-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2023 at 05:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `first_name`, `last_name`, `email`, `phone_number`) VALUES
(1, 'First1', 'Last1', 'email1@example.com', '555-1234-1'),
(2, 'First2', 'Last2', 'email2@example.com', '555-1234-2'),
(3, 'First3', 'Last3', 'email3@example.com', '555-1234-3'),
(4, 'First4', 'Last4', 'email4@example.com', '555-1234-4'),
(5, 'First5', 'Last5', 'email5@example.com', '555-1234-5'),
(6, 'First6', 'Last6', 'email6@example.com', '555-1234-6'),
(7, 'First7', 'Last7', 'email7@example.com', '555-1234-7'),
(8, 'First8', 'Last8', 'email8@example.com', '555-1234-8'),
(9, 'First9', 'Last9', 'email9@example.com', '555-1234-9'),
(10, 'First10', 'Last10', 'email10@example.com', '555-1234-10'),
(11, 'First11', 'Last11', 'email11@example.com', '555-1234-11'),
(12, 'First12', 'Last12', 'email12@example.com', '555-1234-12'),
(13, 'First13', 'Last13', 'email13@example.com', '555-1234-13'),
(14, 'First14', 'Last14', 'email14@example.com', '555-1234-14'),
(15, 'First15', 'Last15', 'email15@example.com', '555-1234-15'),
(16, 'First16', 'Last16', 'email16@example.com', '555-1234-16'),
(17, 'First17', 'Last17', 'email17@example.com', '555-1234-17'),
(18, 'First18', 'Last18', 'email18@example.com', '555-1234-18'),
(19, 'First19', 'Last19', 'email19@example.com', '555-1234-19'),
(20, 'First20', 'Last20', 'email20@example.com', '555-1234-20'),
(21, 'First21', 'Last21', 'email21@example.com', '555-1234-21'),
(22, 'First22', 'Last22', 'email22@example.com', '555-1234-22'),
(23, 'First23', 'Last23', 'email23@example.com', '555-1234-23'),
(24, 'First24', 'Last24', 'email24@example.com', '555-1234-24'),
(25, 'First25', 'Last25', 'email25@example.com', '555-1234-25'),
(26, 'First26', 'Last26', 'email26@example.com', '555-1234-26'),
(27, 'First27', 'Last27', 'email27@example.com', '555-1234-27'),
(28, 'First28', 'Last28', 'email28@example.com', '555-1234-28'),
(29, 'First29', 'Last29', 'email29@example.com', '555-1234-29'),
(30, 'First30', 'Last30', 'email30@example.com', '555-1234-30');

-- --------------------------------------------------------

--
-- Table structure for table `hours`
--

CREATE TABLE `hours` (
  `timer_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `duration` time DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hours`
--

INSERT INTO `hours` (`timer_id`, `date`, `duration`, `start_time`, `end_time`, `employee_id`, `job_id`) VALUES
(1, '2023-07-01', '00:00:00', '09:00:00', '12:00:00', 1, 1),
(2, '2023-07-02', '00:00:00', '13:30:00', '16:30:00', 2, 2),
(3, '2023-07-03', '00:00:00', '10:00:00', '15:00:00', 3, 3),
(4, '2023-07-04', '00:00:00', '08:00:00', '12:30:00', 4, 2),
(5, '2023-07-05', '00:00:00', '11:30:00', '14:30:00', 5, 3),
(6, '2023-07-06', '00:00:00', '00:00:10', '00:00:14', 18, 1),
(7, '2023-07-08', '00:01:30', '00:00:11', '00:00:11', 20, 3),
(8, '2023-07-08', '00:01:30', '00:00:11', '00:00:11', 20, 3),
(9, '2023-07-10', '01:00:00', '00:00:11', '00:00:12', 20, 1),
(10, '2023-07-10', '01:00:00', '00:00:11', '00:00:12', 20, 1),
(11, '2023-07-10', '01:00:00', '00:00:11', '00:00:12', 20, 1),
(12, '2023-07-10', '01:00:00', '00:00:11', '00:00:12', 20, 1),
(13, '2023-07-10', '01:00:00', '00:00:11', '00:00:12', 20, 1),
(14, '2023-07-10', '01:00:00', '00:00:11', '00:00:12', 20, 1),
(15, '2023-07-08', '00:01:30', '00:00:11', '00:00:11', 1, 1),
(16, '2023-07-08', '00:01:30', '00:00:11', '00:00:11', 1, 1),
(17, '2023-07-07', '00:00:04', '22:47:53', '22:47:55', 1, 2),
(18, '2023-07-07', '00:00:05', '22:48:56', '22:48:58', 19, 3),
(19, '2023-07-07', '00:00:10', '22:52:49', '22:52:54', 17, 2),
(20, '2023-07-07', '00:00:20', '22:53:31', '22:53:41', 17, 3),
(21, '2023-07-07', '00:00:02', '22:55:16', '22:55:18', 17, 2),
(22, '2023-07-07', '00:00:02', '22:59:10', '22:59:12', 3, 2),
(23, '2023-07-07', '00:00:02', '23:11:41', '23:11:44', 16, 2),
(24, '2023-07-08', '00:00:03', '00:11:35', '00:11:38', 20, 1),
(25, '2023-07-08', '00:00:03', '00:11:35', '00:11:38', 20, 1),
(26, '2023-07-08', '00:00:01', '00:12:09', '00:12:11', 20, 1),
(27, '2023-07-08', '00:00:03', '00:46:05', '00:46:08', 17, 2),
(29, '2023-07-08', '00:00:01', '00:58:00', '00:58:01', 1, 1),
(31, '2023-07-08', '00:00:03', '00:59:05', '00:59:08', 20, 3),
(32, '2023-07-08', '00:00:04', '01:00:57', '01:01:01', 20, 3),
(33, '2023-07-08', '00:00:06', '01:16:29', '01:16:36', 7, 2),
(34, '2023-07-08', '00:00:01', '01:17:04', '01:17:06', 7, 1),
(35, '2023-07-08', '00:00:05', '02:10:19', '02:10:25', 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `budget` decimal(10,2) DEFAULT NULL,
  `job_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `start_date`, `end_date`, `budget`, `job_name`) VALUES
(1, '2023-07-01', '2023-07-31', '5000.00', 'Job1'),
(2, '2023-08-15', '2023-09-15', '8000.00', 'Job2'),
(3, '2023-09-01', '2023-09-30', '3000.00', 'Job3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `hours`
--
ALTER TABLE `hours`
  ADD PRIMARY KEY (`timer_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hours`
--
ALTER TABLE `hours`
  MODIFY `timer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hours`
--
ALTER TABLE `hours`
  ADD CONSTRAINT `hours_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
  ADD CONSTRAINT `hours_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
