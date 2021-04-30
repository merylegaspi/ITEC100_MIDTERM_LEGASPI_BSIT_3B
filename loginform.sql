-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 04:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginform`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `confirmpassword` varchar(150) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`username`, `email`, `password`, `confirmpassword`, `id`) VALUES
('ADMIN', 'admin@gmail.com', 'Legaspi123$', 'Legaspi123$', 1),
('ADMIN8', 'admin8@gmail.com', 'Denelle22$', 'Denelle22$', 7),
('mery', 'flower@yahoo.com', 'Mlegaspi22!', 'Mlegaspi22!', 8),
('LabAct4', 'labact4@gmail.com', 'Assurance123!', 'Assurance123!', 9),
('Activity4', 'activity4@gmail.com', 'Assurance12#', 'Assurance12#', 12),
('midterm', 'midterm@gmail.com', 'Midterm123!', 'Midterm123!', 13);

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `Username` varchar(100) NOT NULL,
  `Activity` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`Username`, `Activity`, `Time`, `Date`) VALUES
('ADMIN', 'LOGIN', '02:53:54', '2021-04-25'),
('ADMIN', 'PASSWORD CHANGED', '02:54:30', '2021-04-25'),
('ADMIN', 'LOGIN', '02:54:51', '2021-04-25'),
('ADMIN', 'LOGOUT', '02:55:09', '2021-04-25'),
('ADMIN8', 'LOGIN', '02:55:40', '2021-04-25'),
('ADMIN8', 'LOGOUT', '02:56:00', '2021-04-25'),
('mery', 'LOGIN', '02:56:32', '2021-04-25'),
('mery', 'PASSWORD CHANGED', '02:57:11', '2021-04-25'),
('ADMIN8', 'LOGIN', '03:00:11', '2021-04-25'),
('ADMIN8', 'LOGIN', '03:04:54', '2021-04-25'),
('ADMIN8', 'LOGIN', '03:07:31', '2021-04-25'),
('ADMIN8', 'PASSWORD CHANGED', '03:11:12', '2021-04-25'),
('ADMIN8', 'LOGIN', '03:11:33', '2021-04-25'),
('ADMIN8', 'LOGOUT', '03:11:59', '2021-04-25'),
('Activity4', 'LOGIN', '03:16:03', '2021-04-25'),
('Activity4', 'PASSWORD CHANGED', '03:18:42', '2021-04-25'),
('Activity4', 'LOGIN', '03:19:18', '2021-04-25'),
('activity4', 'LOGOUT', '03:19:41', '2021-04-25'),
('ADMIN', 'LOGIN', '05:05:07', '2021-04-27'),
('ADMIN', 'LOGOUT', '05:09:30', '2021-04-27'),
('ADMIN', 'LOGIN', '05:13:32', '2021-04-27'),
('ADMIN', 'LOGOUT', '05:14:33', '2021-04-27'),
('mery', 'LOGIN', '05:19:56', '2021-04-27'),
('ADMIN', 'LOGOUT', '05:20:14', '2021-04-27'),
('midterm', 'LOGIN', '05:25:01', '2021-04-27'),
('midterm', 'LOGIN', '05:25:55', '2021-04-27'),
('midterm', 'LOGIN', '05:27:12', '2021-04-27'),
('midterm', 'PASSWORD CHANGED', '05:33:27', '2021-04-27'),
('midterm', 'LOGIN', '05:34:07', '2021-04-27'),
('ADMIN', 'LOGOUT', '05:34:40', '2021-04-27'),
('midterm', 'LOGIN', '05:38:20', '2021-04-27'),
('midterm', 'LOGIN', '05:38:46', '2021-04-27'),
('midterm', 'LOGIN', '05:39:21', '2021-04-27'),
('midterm', 'PASSWORD CHANGED', '05:43:26', '2021-04-27'),
('midterm', 'LOGIN', '05:44:46', '2021-04-27'),
('midterm', 'LOGOUT', '05:45:22', '2021-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `code_table`
--

CREATE TABLE `code_table` (
  `id` int(10) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL,
  `expiration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `code_table`
--

INSERT INTO `code_table` (`id`, `user_id`, `code`, `created`, `expiration`) VALUES
(1, 'ADMIN', '194751', '2021-04-24 22:37:17', '2021-04-24 22:42:17'),
(2, 'ADMIN', '741010', '2021-04-24 22:48:53', '2021-04-24 22:53:53'),
(3, 'ADMIN', '281381', '2021-04-25 00:01:38', '2021-04-25 00:06:38'),
(4, 'ADMIN', '791276', '2021-04-25 13:55:26', '2021-04-25 14:00:26'),
(5, 'ADMIN', '637988', '2021-04-25 13:56:26', '2021-04-25 14:01:26'),
(6, 'LabAct4', '420549', '2021-04-25 14:01:42', '2021-04-25 14:06:42'),
(7, 'Activity4', '627600', '2021-04-25 14:07:09', '2021-04-25 14:12:09'),
(8, 'Activity4', '378809', '2021-04-25 14:12:36', '2021-04-25 14:17:36'),
(9, 'Activity4', '961005', '2021-04-25 14:16:21', '2021-04-25 14:21:21'),
(10, 'Activity4', '732630', '2021-04-25 14:22:32', '2021-04-25 14:27:32'),
(11, 'ADMIN', '710425', '2021-04-25 14:53:54', '2021-04-25 14:58:54'),
(12, 'ADMIN', '102983', '2021-04-25 14:54:51', '2021-04-25 14:59:51'),
(13, 'ADMIN8', '311380', '2021-04-25 14:55:40', '2021-04-25 15:00:40'),
(14, 'mery', '610029', '2021-04-25 14:56:32', '2021-04-25 15:01:32'),
(15, 'ADMIN8', '395350', '2021-04-25 15:00:11', '2021-04-25 15:05:11'),
(16, 'ADMIN8', '529939', '2021-04-25 15:04:54', '2021-04-25 15:09:54'),
(17, 'ADMIN8', '305133', '2021-04-25 15:07:31', '2021-04-25 15:12:31'),
(18, 'ADMIN8', '439837', '2021-04-25 15:11:33', '2021-04-25 15:16:33'),
(19, 'Activity4', '474764', '2021-04-25 15:16:03', '2021-04-25 15:21:03'),
(20, 'Activity4', '565178', '2021-04-25 15:19:18', '2021-04-25 15:24:18'),
(22, 'ADMIN', '841430', '2021-04-27 17:13:32', '2021-04-27 17:18:32'),
(23, 'mery', '115780', '2021-04-27 17:19:56', '2021-04-27 17:24:56'),
(24, 'midterm', '719512', '2021-04-27 17:25:01', '2021-04-27 17:30:01'),
(25, 'midterm', '564624', '2021-04-27 17:25:55', '2021-04-27 17:30:55'),
(26, 'midterm', '898023', '2021-04-27 17:27:12', '2021-04-27 17:32:12'),
(27, 'midterm', '337888', '2021-04-27 17:34:07', '2021-04-27 17:39:07'),
(28, 'midterm', '549585', '2021-04-27 17:38:20', '2021-04-27 17:43:20'),
(29, 'midterm', '637318', '2021-04-27 17:38:46', '2021-04-27 17:43:46'),
(30, 'midterm', '141089', '2021-04-27 17:39:21', '2021-04-27 17:44:21'),
(31, 'midterm', '783073', '2021-04-27 17:44:46', '2021-04-27 17:49:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code_table`
--
ALTER TABLE `code_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `code_table`
--
ALTER TABLE `code_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
