-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 11:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bustax`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`, `status`) VALUES
(1, 'admin123@amdmin.com', 'admin123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` enum('pending','approved','declined','abandoned','success','failed','reversed','ongoing','cancelled') NOT NULL DEFAULT 'pending',
  `reference` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `type`, `date`, `amount`, `status`, `reference`) VALUES
(1, 'SPOTWEB COM', 'giftchinenyenwa1@gmail.com', '07047548913', 'Bookkeeping', '2024-12-19 22:19:17', '', '', ''),
(2, 'SPOTWEB COM', 'giftchinenyenwa1@gmail.com', '07047548913', 'Bookkeeping', '2024-12-20 01:21:25', '300', 'pending', ''),
(3, 'SPOTWEB COM', 'giftchinenyenwa1@gmail.com', '07047548913', 'Bookkeeping', '2024-12-20 01:22:13', '300', 'pending', ''),
(4, 'SPOTWEB COM', 'giftchinenyenwa1@gmail.com', '07047548913', 'Bookkeeping', '2024-12-20 01:27:35', '400', 'pending', ''),
(5, 'SPOTWEB COM', 'spotwebdev.com@gmail.com', '07047548913', 'Bookkeeping', '2024-12-20 01:30:15', '501', 'pending', ''),
(6, 'SPOTWEB COM', 'spotwebdev.com@gmail.com', '07047548913', 'Bookkeeping', '2024-12-20 01:31:16', '501', 'success', '4fck5z32rl'),
(7, 'thebest', 'firstclass@gmail.com', '07047548913', 'Business Consulting', '2024-12-20 01:38:57', '600', 'success', '67ei5lt5uc'),
(8, 'firstclassThebest', 'chiamaka@gmail.com', '049499595', 'Financial Accounting', '2024-12-20 01:45:57', '304599', 'pending', ''),
(9, 'firstclassThebest', 'chiamaka@gmail.com', '049499595', 'Financial Accounting', '2024-12-20 01:46:55', '304599', 'pending', ''),
(10, 'firstclassThebest', 'chiamaka@gmail.com', '049499595', 'Financial Accounting', '2024-12-20 01:51:59', '304599', 'pending', ''),
(11, 'firstclassThebest', 'chiamaka@gmail.com', '049499595', 'Financial Accounting', '2024-12-20 02:00:17', '304599', 'pending', ''),
(12, 'firstclassThebest', 'chiamaka@gmail.com', '049499595', 'Financial Accounting', '2024-12-20 02:01:03', '304599', 'cancelled', ''),
(13, 'SPOTWEB COM', 'nkem@gmail.com', '07047548913', 'Business Consulting', '2024-12-21 22:41:09', '50000', 'success', '0i2mayu2hj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `date_registered` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `date_registered`, `status`) VALUES
(1, 'SPOTWEB COM', 'giftchinenyenwa1@gmail.com', '07047548913', '2024-12-19 22:19:17', ''),
(2, 'SPOTWEB COM', 'spotwebdev.com@gmail.com', '07047548913', '2024-12-20 01:30:15', ''),
(3, 'thebest', 'firstclass@gmail.com', '07047548913', '2024-12-20 01:38:57', ''),
(4, 'firstclassThebest', 'chiamaka@gmail.com', '049499595', '2024-12-20 01:45:57', ''),
(5, 'SPOTWEB COM', 'nkem@gmail.com', '07047548913', '2024-12-21 22:41:09', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
