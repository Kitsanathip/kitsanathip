-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2025 at 05:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4089db`
--
CREATE DATABASE IF NOT EXISTS `4089db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4089db`;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `a_position` varchar(255) NOT NULL,
  `a_perfix` varchar(255) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_date` date NOT NULL,
  `a_class` varchar(255) NOT NULL,
  `a_skills` text NOT NULL,
  `a_experience` text NOT NULL,
  `a_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`a_position`, `a_perfix`, `a_name`, `a_date`, `a_class`, `a_skills`, `a_experience`, `a_id`) VALUES
('hr', 'mr', 'แสงมืด สุดสว่าง', '2022-02-25', 'phd', '12121', '121212', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(6) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(10) NOT NULL,
  `r_major` varchar(255) NOT NULL,
  `r_color` varchar(20) NOT NULL,
  `r_height` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_major`, `r_color`, `r_height`) VALUES
(1, 'กฤษทนาธิป เที่ยงทำ', '', '', '', ''),
(2, 'กฤษทนาธิป เที่ยงทำ', '', '', '', ''),
(3, 'กฤษติ ลาลา', '', '', '', ''),
(4, 'แสงมืด สุดสว่าง', '', '', '', ''),
(5, 'แสงมืด สุดสว่าง', '', '', '', ''),
(8, 'แสงมืด สุดสว่าง', '', '', '', ''),
(9, 'แสงมืด สุดสว่าง', '0888888888', '', '', ''),
(10, 'แสงมืด สุดสว่าง', '0888888888', '', '', ''),
(11, 'แสงมืด สุดสว่าง', '0888888888', 'การบัญชี', '#563d7c', '180'),
(12, 'แสงมืด สุดสว่าง', '0888888888', 'คอมพิวเตอร์ธุรกิจ', '#563d7c', '180'),
(13, 'สมพร หมอนขาว', '0111111111', 'การจัดการ', '#fff700', '190'),
(14, 'สมพร หมอนขาว', '0111111111', 'การจัดการ', '#fff700', '190');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`a_id`) USING BTREE,
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `a_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
