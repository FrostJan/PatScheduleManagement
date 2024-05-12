-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 04:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `event_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `event_start_date` date DEFAULT NULL,
  `event_end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`event_id`, `request_id`, `users_id`, `event_name`, `event_start_date`, `event_end_date`) VALUES
(4, 0, 5, 'test', '2024-03-08', '2024-03-09'),
(5, 0, 7, 'CAS', '2024-03-13', '2024-03-13'),
(10, 9, 0, 'SET', '2024-03-24', '2024-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `department` text NOT NULL,
  `activityorpurpose` text NOT NULL,
  `division` text NOT NULL,
  `numberofattendees` text NOT NULL,
  `datefilled` date NOT NULL,
  `timeneeded` text NOT NULL,
  `dateneeded` text NOT NULL,
  `pat` text NOT NULL,
  `emcroom` text NOT NULL,
  `tvroom` text NOT NULL,
  `institutional` text NOT NULL,
  `cocurricular` text NOT NULL,
  `curricular` text NOT NULL,
  `extracurricular` text NOT NULL,
  `outsidegroup` text NOT NULL,
  `personincharge` text NOT NULL,
  `contactnumber` text NOT NULL,
  `file` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `users_id`, `department`, `activityorpurpose`, `division`, `numberofattendees`, `datefilled`, `timeneeded`, `dateneeded`, `pat`, `emcroom`, `tvroom`, `institutional`, `cocurricular`, `curricular`, `extracurricular`, `outsidegroup`, `personincharge`, `contactnumber`, `file`, `status`) VALUES
(11, 42, 'College of Computer Studies', 'Activity/Purpose:', 'Division', '3', '2024-04-25', '3pm - 8pm', '2024-04-26', 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'yes', 'juan', '09123456789', 'Doc3 - Copy (8).pdf', 'Approved'),
(12, 42, 'College of Criminology', 'Check 1', 'Check 2', '123', '2024-05-07', '10 Am - 11AM', '2024-05-08', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'Check 4', '1234567890', 'Mid-LabAct4_2.pdf', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `passwordtxt` varchar(50) NOT NULL,
  `type` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `img`, `firstname`, `lastname`, `email`, `password`, `passwordtxt`, `type`) VALUES
(1, 'c21-1010-528.jpg', 'Carlos Miguel', 'Reopirio', 'admin@gmail.com', '$2y$10$7k3Ea6WBZoxqSV7M8tvRG.d1Vmv1EMh0holQSTymz/FKElwFbN.Yu', 'admin', 0),
(40, 'c15-0481-182.jpg', 'Miguel Timothy', 'Cabrera', 'departmentoffice@gmail.com', '$2y$10$hahhAjwrqkF1MPXX2kAS8Og1LsTWznC8o9Cz0dTERM.QintESwsSa', '123', 1),
(42, 'c19-2137-987.jpg', 'Gabriel Frost', 'Jandoquele', 'student@gmail.com', '$2y$10$hahhAjwrqkF1MPXX2kAS8Og1LsTWznC8o9Cz0dTERM.QintESwsSa', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
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
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
