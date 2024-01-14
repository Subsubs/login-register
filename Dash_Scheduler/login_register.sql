-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 07, 2024 at 03:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_credentials`
--

CREATE TABLE `admin_credentials` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_credentials`
--

INSERT INTO `admin_credentials` (`id`, `username`, `password`) VALUES
(85, 'admin', '$2y$10$ZMJWPy80zKLQMlgXk6o.Fujoolw7q8paHNa0l6bMzdWTPWjbtTFXm'),
(87, 'admin1', '$2y$10$pi08QHvfwHOR.m6zP9M..eKT//3SyBmgcRewYJj8sEdZkcjBqSzaO'),
(88, 'admin2', '$2y$10$HpwHw8EJvKiNi8Ewbl5N0eWdRb2.rbH8WS2BCAhwVpDPY630ariK2');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` mediumint(9) NOT NULL,
  `NameofFaculty` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `NameofFaculty`) VALUES
(8, 'kim'),
(9, 'jan');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_number`) VALUES
(1, '210'),
(2, '211'),
(3, '212'),
(4, 'MRL'),
(5, 'PEMEC'),
(6, 'ICL'),
(7, 'SSL'),
(8, 'ESL');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `section_id` int(11) NOT NULL,
  `department_code` varchar(10) DEFAULT NULL,
  `section_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`section_id`, `department_code`, `section_number`) VALUES
(1, 'ECE', 1201),
(2, 'ECE', 1202),
(3, 'ECE', 1203),
(4, 'ECE', 1204),
(5, 'MEXE', 1201),
(6, 'MEXE', 1202),
(7, 'MEXE', 1203),
(8, 'MEXE', 1204),
(9, 'ICE', 1201),
(10, 'ICE', 1202),
(11, 'ICE', 1203),
(12, 'ICE', 1204),
(13, 'AERO', 1201),
(14, 'AERO', 1202),
(15, 'AERO', 1203),
(16, 'AERO', 1204),
(17, 'BIOMED', 1201),
(18, 'ECE', 2201),
(19, 'ECE', 2202),
(20, 'ECE', 2203),
(21, 'ECE', 2204),
(22, 'MEXE', 2201),
(23, 'MEXE', 2202),
(24, 'MEXE', 2203),
(25, 'ICE', 2201),
(26, 'ICE', 2202),
(27, 'ICE', 2203),
(28, 'ICE', 2204),
(29, 'AERO', 2201),
(30, 'AERO', 2202),
(31, 'AERO', 2203),
(32, 'BIOMED', 2201),
(33, 'ECE', 3201),
(34, 'ECE', 3202),
(35, 'ECE', 3203),
(36, 'ECE', 3204),
(37, 'MEXE', 3201),
(38, 'MEXE', 3202),
(39, 'MEXE', 3203),
(40, 'ICE', 3201),
(41, 'ICE', 3202),
(42, 'ICE', 3203),
(43, 'ICE', 3204),
(44, 'ICE', 3205),
(45, 'AERO', 3201),
(46, 'AERO', 3202),
(47, 'AERO', 3203),
(48, 'AERO', 3204),
(49, 'BIOMED', 3201),
(50, 'ECE', 4201),
(51, 'ECE', 4202),
(52, 'ECE', 4203),
(53, 'MEXE', 4201),
(54, 'MEXE', 4202),
(55, 'MEXE', 4203),
(56, 'MEXE', 4204),
(57, 'MEXE', 4205),
(58, 'ICE', 4201),
(59, 'ICE', 4202),
(60, 'ICE', 4203),
(61, 'ICE', 4204),
(62, 'ICE', 4205);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`section_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
