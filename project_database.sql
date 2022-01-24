-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 06:58 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`) VALUES
(147258, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_name`, `capacity`) VALUES
(1, 'CE', 10),
(3, 'EEE', 10),
(5, 'ME', 10),
(7, 'CSE', 10),
(10, 'Sorcerer', 10);

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hall_id` int(11) NOT NULL,
  `hall_name` varchar(100) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hall_id`, `hall_name`, `capacity`) VALUES
(3, 'Carne Village', 25),
(4, 'Baharuth Empire', 25);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `instructor_id` int(11) NOT NULL,
  `instructor_name` varchar(100) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`instructor_id`, `instructor_name`, `dept_id`, `password`, `salary`) VALUES
(1, 'Ainz Ooal Gown', 10, '101010', 5000000),
(2, 'Momonsama', 7, '80000', 80000),
(3, 'Saitama', 10, '103', 40000),
(4, 'Dumbeldore', 10, '104', 90000),
(5, 'Snape', 10, '105', 70000);

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `notice` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`id`, `date`, `notice`) VALUES
(1, '2022-01-15 13:57:35', 'The University will be closed for 1 month due to pendemic.'),
(2, '2022-01-15 16:44:41', 'Due to urgent closing all departments must finish their due exams of activites.'),
(4, '2022-01-16 22:53:45', 'Welcome to Aogun University'),
(5, '2022-01-16 22:55:14', 'Aogun University is to admit newer students.'),
(6, '2022-01-16 22:55:54', 'Our University is keeping up with the pendemic better than any other University.'),
(7, '2022-01-16 22:56:54', 'All Students must follow the rules of the university strictly. Upon breaking the rules, anyone can end up expelled or worse.'),
(8, '2022-01-16 22:57:37', 'All student must wear mask and use sanitizer to keep them safe from Omicron');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `CGPA` float NOT NULL,
  `hall_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `dept_id`, `student_name`, `password`, `CGPA`, `hall_id`) VALUES
(1701031, 1, 'Anoy', '1701031', 3.56, 3),
(1701041, 1, 'rashed', '1701041', 3.45, 3),
(1703031, 3, 'Dalas', '1703031', 3.85, 4),
(1705031, 5, 'shoyeb', '1705031', 3.35, 4),
(1707031, 7, 'asif', '1707031', 3.3, 3),
(1707034, 7, 'Arnab', '1707034', 3.37, 4),
(1707035, 7, 'Sifat', '1707034', 3.54, 3),
(1707041, 7, 'nym', '36987', 3.89, 4),
(1707051, 7, 'ridoy', '1707051', 3.58, 4),
(1710001, 10, 'Harry Potter', '1710001', 4, 4),
(1710002, 10, 'Ron', '1710002', 2.78, 3),
(1710003, 10, 'Sherlock', '1710003', 4, 4),
(1710004, 10, 'Genos', '1710004', 3.2, 3),
(1710005, 10, 'Hermione', '1710005', 4, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hall_id`),
  ADD KEY `hall_id` (`hall_id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`instructor_id`),
  ADD KEY `instructor_id` (`instructor_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `instructor_name` (`instructor_name`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `student_name` (`student_name`),
  ADD KEY `dept_id` (`dept_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `hall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
