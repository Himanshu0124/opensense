-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 02:44 PM
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
-- Database: `opensensetask`
--

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `id` int(200) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `fname` varchar(200) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `profile` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `areacode` int(200) NOT NULL,
  `phone` int(200) NOT NULL,
  `applypost` varchar(400) NOT NULL,
  `notice` int(50) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `othercity` varchar(100) NOT NULL,
  `relocate` varchar(100) NOT NULL,
  `lastcom` varchar(500) NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`id`, `date`, `fname`, `lname`, `profile`, `email`, `areacode`, `phone`, `applypost`, `notice`, `state`, `city`, `othercity`, `relocate`, `lastcom`, `comments`) VALUES
(11, '2021-06-22 18:08:31.033686', 'HIMANSHaa', 'SEN', '', 'HIMANSHU.SEN0124@GMAIL.COM', 99904, 1218, 'Software Engineer', 0, 'other', 'northdelhi', 'Haryana', 'Yes', 'Intuit', 'nine'),
(12, '2021-06-22 18:11:08.810155', 'HIMANSH ', 'SEN', '', 'HIMANSHU.SEN0124@GMAIL.COM', 99904, 1218, 'Software Engineer', 0, 'other', 'northdelhi', 'Haryana', 'Yes', 'Intuit', 'Ten');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
