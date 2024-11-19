-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 10:55 AM
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
(0, 'admin123@amdmin.com', 'admin123', '1'),
(0, 'admin123@amdmin.com', 'admin123', '1'),
(0, 'admin123@amdmin.com', 'admin123', '1'),
(0, 'admin123@amdmin.com', 'admin123', '1'),
(0, 'admin123@amdmin.com', 'admin123', '1'),
(0, 'admin123@amdmin.com', 'admin123', '1');

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
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `type`, `date`, `amount`, `status`) VALUES
(1, 'repented godswill', 'uchennagodswill539@gmail.com', '07080879957', 'Bookkeeping', '2024-11-19', '', 'Pending'),
(2, 'repented godswill', 'spotwebdev.com@gmail.com', '07809876555', 'Bookkeeping', 'Tue-Nov-2024 10:11', '', ''),
(3, 'repented godswill', 'spotwebdev.com@gmail.com', '07809876555', 'Bookkeeping', 'Tue-Nov-2024 10:11', '', ''),
(4, 'repented godswill', 'spotwebdev.com@gmail.com', '07809876555', 'Bookkeeping', 'Tue-Nov-2024 10:11', '', ''),
(5, 'repented godswill', 'spotwebdev.com@gmail.com', '07809876555', 'Bookkeeping', 'Tue-Nov-2024 10:11', '', ''),
(6, 'repented godswill', 'spotwebdev.com@gmail.com', '07809876555', 'Bookkeeping', 'Tue-Nov-2024 10:11', '', ''),
(7, 'repented godswill', 'spotwebdev.com@gmail.com', '07809876555', 'Bookkeeping', 'Tue-Nov-2024 10:11', '', ''),
(8, 'king', 'spotwebdev.com@gmail.com', '07809876555', 'Business Consulting', 'Tue-Nov-2024 10:11', '', '');

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
(7, 'king', 'spotwebdev.com@gmail.com', '07809876555', 'Tue-Nov-2024 10:11', '');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
