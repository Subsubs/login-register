-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 14, 2024 at 08:41 AM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sproc_67_data` (IN `mr1` VARCHAR(255), IN `mr2` VARCHAR(255), IN `t1r` VARCHAR(255), IN `t2r` VARCHAR(255), IN `w1r` VARCHAR(255), IN `w2r` VARCHAR(255), IN `th1r` VARCHAR(255), IN `th2r` VARCHAR(255), IN `f1r` VARCHAR(255), IN `f2r` VARCHAR(255), IN `sat1r` VARCHAR(255), IN `sat2r` VARCHAR(255))   BEGIN
	INSERT into sched VALUES(0, @mr1, @mr2, @t1r, @t2r, @w1r, @w2r, @th1r, @th2r, @f1r, @f2r, @sat1r, @sat2r);
END$$

DELIMITER ;

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
(89, 'admin', '$2y$10$GSTzdg.WlTOp8waLgOiRP.VWWOBNk6aLoG6clIDAPWdFQAImLN//.'),
(90, 'jm', '$2y$10$H/f4u8rtm3VkxgnRXLs5seuO9.b4giC17KgeJJBkTgibRheWiLU5m'),
(92, 'admin2', '$2y$10$aZA0btswn9sypy8Jf2q/UOK8UoDe7k.DPrC.X/kAsTovTaygzdm4q');

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
(9, 'jan'),
(10, 'jm'),
(11, 'jerson');

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
-- Table structure for table `sched`
--

CREATE TABLE `sched` (
  `id` int(11) NOT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `monday_1st_rw` varchar(255) DEFAULT NULL,
  `monday_2nd_rw` varchar(255) DEFAULT NULL,
  `room_1` varchar(255) DEFAULT NULL,
  `tuesday_1st_rw` varchar(255) DEFAULT NULL,
  `tuesday_2nd_rw` varchar(255) DEFAULT NULL,
  `room_2` varchar(255) DEFAULT NULL,
  `wednesday_1st_rw` varchar(255) DEFAULT NULL,
  `wednesday_2nd_rw` varchar(255) DEFAULT NULL,
  `room_3` varchar(255) DEFAULT NULL,
  `thursday_1st_rw` varchar(255) DEFAULT NULL,
  `thursday_2nd_rw` varchar(255) DEFAULT NULL,
  `room_4` varchar(255) DEFAULT NULL,
  `friday_1st_rw` varchar(255) DEFAULT NULL,
  `friday_2nd_rw` varchar(255) DEFAULT NULL,
  `room_5` varchar(255) DEFAULT NULL,
  `saturday_1st_rw` varchar(255) DEFAULT NULL,
  `saturday_2nd_rw` varchar(255) DEFAULT NULL,
  `room_6` varchar(255) DEFAULT NULL,
  `sunday_1st_rw` varchar(255) DEFAULT NULL,
  `sunday_2nd_rw` varchar(255) DEFAULT NULL,
  `room_7` varchar(255) DEFAULT NULL,
  `cc_1st_rw` varchar(255) DEFAULT NULL,
  `cc_2nd_rw` varchar(255) DEFAULT NULL,
  `section_1st_rw` varchar(255) DEFAULT NULL,
  `section_2nd_rw` varchar(255) DEFAULT NULL,
  `nos_1st_rw` varchar(255) DEFAULT NULL,
  `nos_2nd_rw` varchar(255) DEFAULT NULL,
  `timeline` varchar(255) DEFAULT NULL,
  `timeline2` varchar(255) DEFAULT NULL,
  `timeline3` varchar(255) DEFAULT NULL,
  `official_time_1st_col` varchar(255) DEFAULT NULL,
  `official_time_2nd_col` varchar(255) DEFAULT NULL,
  `official_time_3rd_col` varchar(255) DEFAULT NULL,
  `official_time_4th_col` varchar(255) DEFAULT NULL,
  `official_time_5th_col` varchar(255) DEFAULT NULL,
  `official_time_6th_col` varchar(255) DEFAULT NULL,
  `official_time_7th_col` varchar(255) DEFAULT NULL,
  `no_teaching_hours_1st_col` int(11) NOT NULL,
  `no_teaching_hours_2nd_col` int(11) NOT NULL,
  `no_teaching_hours_3rd_col` int(11) NOT NULL,
  `no_teaching_hours_4th_col` int(11) NOT NULL,
  `no_teaching_hours_5th_col` int(11) NOT NULL,
  `no_teaching_hours_6th_col` int(11) NOT NULL,
  `nth_total` int(11) NOT NULL,
  `no_overtime_1st_col` varchar(255) DEFAULT NULL,
  `no_overtime_2nd_col` varchar(255) DEFAULT NULL,
  `no_overtime_3rd_col` varchar(255) DEFAULT NULL,
  `no_overtime_4th_col` varchar(255) DEFAULT NULL,
  `no_overtime_5th_col` varchar(255) DEFAULT NULL,
  `no_overtime_6th_col` varchar(255) DEFAULT NULL,
  `no_overtime_7th_col` varchar(255) DEFAULT NULL,
  `overtime_outside_1st_col` varchar(255) DEFAULT NULL,
  `overtime_outside_2nd_col` varchar(255) DEFAULT NULL,
  `overtime_outside_3rd_col` varchar(255) DEFAULT NULL,
  `overtime_outside_4th_col` varchar(255) DEFAULT NULL,
  `overtime_outside_5th` varchar(255) DEFAULT NULL,
  `overtime_outside_6th_col` varchar(255) DEFAULT NULL,
  `overtime_outside_7th_col` varchar(255) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `no_preparation` varchar(255) DEFAULT NULL,
  `regular_load` varchar(255) DEFAULT NULL,
  `academic_rank` varchar(255) DEFAULT NULL,
  `no_hours_week` varchar(255) DEFAULT NULL,
  `overload` varchar(255) DEFAULT NULL,
  `consult_hour` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sched`
--

INSERT INTO `sched` (`id`, `faculty_id`, `time`, `monday_1st_rw`, `monday_2nd_rw`, `room_1`, `tuesday_1st_rw`, `tuesday_2nd_rw`, `room_2`, `wednesday_1st_rw`, `wednesday_2nd_rw`, `room_3`, `thursday_1st_rw`, `thursday_2nd_rw`, `room_4`, `friday_1st_rw`, `friday_2nd_rw`, `room_5`, `saturday_1st_rw`, `saturday_2nd_rw`, `room_6`, `sunday_1st_rw`, `sunday_2nd_rw`, `room_7`, `cc_1st_rw`, `cc_2nd_rw`, `section_1st_rw`, `section_2nd_rw`, `nos_1st_rw`, `nos_2nd_rw`, `timeline`, `timeline2`, `timeline3`, `official_time_1st_col`, `official_time_2nd_col`, `official_time_3rd_col`, `official_time_4th_col`, `official_time_5th_col`, `official_time_6th_col`, `official_time_7th_col`, `no_teaching_hours_1st_col`, `no_teaching_hours_2nd_col`, `no_teaching_hours_3rd_col`, `no_teaching_hours_4th_col`, `no_teaching_hours_5th_col`, `no_teaching_hours_6th_col`, `nth_total`, `no_overtime_1st_col`, `no_overtime_2nd_col`, `no_overtime_3rd_col`, `no_overtime_4th_col`, `no_overtime_5th_col`, `no_overtime_6th_col`, `no_overtime_7th_col`, `overtime_outside_1st_col`, `overtime_outside_2nd_col`, `overtime_outside_3rd_col`, `overtime_outside_4th_col`, `overtime_outside_5th`, `overtime_outside_6th_col`, `overtime_outside_7th_col`, `Designation`, `no_preparation`, `regular_load`, `academic_rank`, `no_hours_week`, `overload`, `consult_hour`) VALUES
(1, 10, '6:00 - 7:00 AM', 'math 401', 'ECE 1102', 'MRL', 'w', 'sd', 'w', 'f', 'asdasd', 'Math', 'g', 'v', 'w', 'asdsa', 'asdsad', 'l', '', '', '', '', '', '', 'w', 'v', 'w', 'w', '', '', NULL, NULL, NULL, '55', '23', '44', '55', '22', 'asd', '33', 12, 10, 11, 3, 41, 1, 0, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'r', 'e', 't', 'q', 'w', 'e', 'gdfsg', 'fdsf', 'fdsf', 'fds', 'fdsfds', 'fdsf', 'fds'),
(2, 10, '7:00 - 8:00 AM', 'q', 'qw', '1', 'ew', 's', '', 'test', 'w', 'g', 'r', 'w', 'asdas', 'q', 'asdas', '', '', '', '', '', '', '', 'f', 'w', 's', 'q', 'd', 'f', NULL, NULL, NULL, '55', '23', '44', '55', '22', 'asd', '33', 12, 10, 11, 3, 41, 1, 0, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'r', 'e', 't', 'q', 'w', 'e', 'gdfsg', 'fdsf', 'fdsf', 'fds', 'fdsfds', 'fdsf', 'fds'),
(3, 10, '8:00 - 9:00 AM', '', '', 'q', 'w', '', 'e', 'g', '', 'h', 'j', 'sad', 'w', '', '', '', '', '', '', '', '', '', 's', '', 'q', '', 'w', '', NULL, NULL, NULL, '55', '23', '44', '55', '22', 'asd', '33', 12, 10, 11, 3, 41, 1, 0, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'r', 'e', 't', 'q', 'w', 'e', 'gdfsg', 'fdsf', 'fdsf', 'fds', 'fdsfds', 'fdsf', 'fds'),
(4, 10, '9:00 - 10:00 AM', 'f', '', 'w', '', '', 'r', 'we', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '55', '23', '44', '55', '22', 'asd', '33', 12, 10, 11, 3, 41, 1, 0, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'r', 'e', 't', 'q', 'w', 'e', 'gdfsg', 'fdsf', 'fdsf', 'fds', 'fdsfds', 'fdsf', 'fds'),
(5, 10, '10:00 - 11:00 AM', '', '', '', 'w', '', 'r', '', 's', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '55', '23', '44', '55', '22', 'asd', '33', 12, 10, 11, 3, 41, 1, 0, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'r', 'e', 't', 'q', 'w', 'e', 'gdfsg', 'fdsf', 'fdsf', 'fds', 'fdsfds', 'fdsf', 'fds'),
(6, 10, '11:00 - 12:00 PM', '', '', '', '', '', '', 'r', '', 'w', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '55', '23', '44', '55', '22', 'asd', '33', 12, 10, 11, 3, 41, 1, 0, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'r', 'e', 't', 'q', 'w', 'e', 'gdfsg', 'fdsf', 'fdsf', 'fds', 'fdsfds', 'fdsf', 'fds'),
(7, 10, '12:00 - 1:00 PM', '', '', '', '', 'r', '', '', 's', 'f', 'w', '', '', 'e', '', '', '', '', '', '', '', '', 'e', '', 'w', '', '', '', NULL, NULL, NULL, '55', '23', '44', '55', '22', 'asd', '33', 12, 10, 11, 3, 41, 1, 0, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'r', 'e', 't', 'q', 'w', 'e', 'gdfsg', 'fdsf', 'fdsf', 'fds', 'fdsfds', 'fdsf', 'fds'),
(8, 10, '1:00 - 2:00 PM', '', '', '', '', '', '', 'wr', '', 'w', 'r', 'r', '', '', '', '', '', 's', '', '', 'w', '', 'w', NULL, 'q', NULL, 'r', NULL, 'q', NULL, NULL, '55', '23', '44', '55', '22', 'asd', '33', 12, 10, 11, 3, 41, 1, 0, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'r', 'e', 't', 'q', 'w', 'e', 'gdfsg', 'fdsf', 'fdsf', 'fds', 'fdsfds', 'fdsf', 'fds'),
(9, 10, '2:00 - 3:00 PM', '', '', '', 'w', '', 'r', 's', '', '', '', '', '', '', '', '', '', '', '', 'w', '', 'q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '55', '23', '44', '55', '22', 'asd', '33', 12, 10, 11, 3, 41, 1, 0, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'r', 'e', 't', 'q', 'w', 'e', 'gdfsg', 'fdsf', 'fdsf', 'fds', 'fdsfds', 'fdsf', 'fds'),
(10, 10, '3:00 - 4:00 PM', '', '', '', '', '', '', 'w', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '55', '23', '44', '55', '22', 'asd', '33', 12, 10, 11, 3, 41, 1, 0, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'r', 'e', 't', 'q', 'w', 'e', 'gdfsg', 'fdsf', 'fdsf', 'fds', 'fdsfds', 'fdsf', 'fds'),
(11, 10, '4:00 - 5:00 PM', 'h', '', 'y', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'w', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 'e', NULL, '55', '23', '44', '55', '22', 'asd', '33', 12, 10, 11, 3, 41, 1, 0, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'r', 'e', 't', 'q', 'w', 'e', 'gdfsg', 'fdsf', 'fdsf', 'fds', 'fdsfds', 'fdsf', 'fds'),
(12, 10, '5:00 - 6:00 PM', '', '', '', 'w', '', 'w', 'r', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '55', '23', '44', '55', '22', 'asd', '33', 12, 10, 11, 3, 41, 1, 0, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'r', 'e', 't', 'q', 'w', 'e', 'gdfsg', 'fdsf', 'fdsf', 'fds', 'fdsfds', 'fdsf', 'fds'),
(13, 10, '6:00 - 7:00 PM', 'q', 'w', 'w', '', 'qwe', 'w', 'g', '', '13223', 'qweqwe', 'werwer', '', '', '', '', 'test', 'qwe', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '55', '23', '44', '55', '22', 'asd', '33', 12, 10, 11, 3, 41, 1, 0, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'r', 'e', 't', 'q', 'w', 'e', 'gdfsg', 'fdsf', 'fdsf', 'fds', 'fdsfds', 'fdsf', 'fds'),
(14, 10, '7:00 - 8:00 PM', '', '', '', '', '', '', '', 'asdas', '', 'asd', 'asd', '', '', 'asdasd', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'adsadsa', '55', '23', '44', '55', '22', 'asd', '33', 12, 10, 11, 3, 41, 1, 0, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'r', 'e', 't', 'q', 'w', 'e', 'gdfsg', 'fdsf', 'fdsf', 'fds', 'fdsfds', 'fdsf', 'fds');

-- --------------------------------------------------------

--
-- Table structure for table `sched_updated12`
--

CREATE TABLE `sched_updated12` (
  `id` int(11) NOT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `monday_1st_rw` varchar(255) DEFAULT NULL,
  `monday_2nd_rw` varchar(255) DEFAULT NULL,
  `room_1` varchar(255) DEFAULT NULL,
  `tuesday_1st_rw` varchar(255) DEFAULT NULL,
  `tuesday_2nd_rw` varchar(255) DEFAULT NULL,
  `room_2` varchar(255) DEFAULT NULL,
  `wednesday_1st_rw` varchar(255) DEFAULT NULL,
  `wednesday_2nd_rw` varchar(255) DEFAULT NULL,
  `room_3` varchar(255) DEFAULT NULL,
  `thursday_1st_rw` varchar(255) DEFAULT NULL,
  `thursday_2nd_rw` varchar(255) DEFAULT NULL,
  `room_4` varchar(255) DEFAULT NULL,
  `friday_1st_rw` varchar(255) DEFAULT NULL,
  `friday_2nd_rw` varchar(255) DEFAULT NULL,
  `room_5` varchar(255) DEFAULT NULL,
  `saturday_1st_rw` varchar(255) DEFAULT NULL,
  `saturday_2nd_rw` varchar(255) DEFAULT NULL,
  `room_6` varchar(255) DEFAULT NULL,
  `sunday_1st_rw` varchar(255) DEFAULT NULL,
  `sunday_2nd_rw` varchar(255) DEFAULT NULL,
  `room_7` varchar(255) DEFAULT NULL,
  `cc_1st_rw` varchar(255) DEFAULT NULL,
  `cc_2nd_rw` varchar(255) DEFAULT NULL,
  `section_1st_rw` varchar(255) DEFAULT NULL,
  `section_2nd_rw` varchar(255) DEFAULT NULL,
  `nos_1st_rw` varchar(255) DEFAULT NULL,
  `nos_2nd_rw` varchar(255) DEFAULT NULL,
  `timeline` varchar(255) DEFAULT NULL,
  `timeline2` varchar(255) DEFAULT NULL,
  `timeline3` varchar(255) DEFAULT NULL,
  `official_time_1st_col` varchar(255) DEFAULT NULL,
  `official_time_2nd_col` varchar(255) DEFAULT NULL,
  `official_time_3rd_col` varchar(255) DEFAULT NULL,
  `official_time_4th_col` varchar(255) DEFAULT NULL,
  `official_time_5th_col` varchar(255) DEFAULT NULL,
  `official_time_6th_col` varchar(255) DEFAULT NULL,
  `official_time_7th_col` varchar(255) DEFAULT NULL,
  `no_teaching_hours_1st_col` int(11) NOT NULL,
  `no_teaching_hours_2nd_col` int(11) NOT NULL,
  `no_teaching_hours_3rd_col` int(11) NOT NULL,
  `no_teaching_hours_4th_col` int(11) NOT NULL,
  `no_teaching_hours_5th_col` int(11) NOT NULL,
  `no_teaching_hours_6th_col` int(11) NOT NULL,
  `nth_total` int(11) NOT NULL,
  `no_overtime_1st_col` varchar(255) DEFAULT NULL,
  `no_overtime_2nd_col` varchar(255) DEFAULT NULL,
  `no_overtime_3rd_col` varchar(255) DEFAULT NULL,
  `no_overtime_4th_col` varchar(255) DEFAULT NULL,
  `no_overtime_5th_col` varchar(255) DEFAULT NULL,
  `no_overtime_6th_col` varchar(255) DEFAULT NULL,
  `no_overtime_7th_col` varchar(255) DEFAULT NULL,
  `overtime_outside_1st_col` varchar(255) DEFAULT NULL,
  `overtime_outside_2nd_col` varchar(255) DEFAULT NULL,
  `overtime_outside_3rd_col` varchar(255) DEFAULT NULL,
  `overtime_outside_4th_col` varchar(255) DEFAULT NULL,
  `overtime_outside_5th` varchar(255) DEFAULT NULL,
  `overtime_outside_6th_col` varchar(255) DEFAULT NULL,
  `overtime_outside_7th_col` varchar(255) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `no_preparation` varchar(255) DEFAULT NULL,
  `regular_load` varchar(255) DEFAULT NULL,
  `academic_rank` varchar(255) DEFAULT NULL,
  `no_hours_week` varchar(255) DEFAULT NULL,
  `overload` varchar(255) DEFAULT NULL,
  `consult_hour` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `sched`
--
ALTER TABLE `sched`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sched_updated12`
--
ALTER TABLE `sched_updated12`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sched`
--
ALTER TABLE `sched`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sched_updated12`
--
ALTER TABLE `sched_updated12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
