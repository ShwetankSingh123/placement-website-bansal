-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 11:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placementwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `number`, `course`, `gender`) VALUES
('wndsd', 's@gmail.com', '8778', '', 'male'),
('ehfbf', 'w@gmail.cocm', '2344', 'computer science', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `highSchool` varchar(50) NOT NULL,
  `Inter` varchar(50) NOT NULL,
  `Diploma` varchar(50) NOT NULL,
  `BTech` varchar(50) NOT NULL,
  `Award` varchar(50) NOT NULL,
  `training` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `placeoftraining` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `rollno`, `fname`, `mname`, `phonenumber`, `email`, `address`, `course`, `password`, `highSchool`, `Inter`, `Diploma`, `BTech`, `Award`, `training`, `duration`, `placeoftraining`) VALUES
(1, 'Shwetank', '2004220100107', 'Mr. Sanjay Singh', 'Mrs. Neelam singh', '8795835639', 'ssingh.21.20199@gmail.com', '', 'b_tech', 'asdfghjkl', '', '', '', '', '', '', '', ''),
(5, 'aviral', '24234', '', '', '345436', 'admin', '', 'b_tech', 'OyS8)sEopPAPBw)D04', 'sshd', 'efiuhfh', 'fsf', 'fsf', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
