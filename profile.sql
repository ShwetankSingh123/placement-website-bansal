-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 04:05 AM
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
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(400) NOT NULL,
  `avtar` varchar(400) NOT NULL,
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
  `placeoftraining` varchar(50) NOT NULL,
  `trainingCertificate` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `image`, `avtar`, `rollno`, `fname`, `mname`, `phonenumber`, `email`, `address`, `course`, `password`, `highSchool`, `Inter`, `Diploma`, `BTech`, `Award`, `training`, `duration`, `placeoftraining`, `trainingCertificate`) VALUES
(7, 'sk', 'images/0006.png', '', '99', '', '', '99', 'a@gmail.com', '', 'b_tech', '123', 'mm', 'gh', 'no', 'bansal', 'abc', '', '', '', ''),
(8, 'xyz', 'images/Screenshot 2023-07-03 074421.png', '', '200', '', '', '098', 'k@gmail.com', '', 'diploma', 'abc', '', '', '', 'bansal', '', '', '2 months', '', ''),
(9, 'vk', 'images/s3.jpg', '', '35', '', '', '99', 'admin', '', 'm_tech', 'OyS8)sEopPAPBw)D04', 'urmil', 'st ', '', '', '', '', '', '', ''),
(10, 'sd', 'images/pexels-aidan-roof-2449600.jpg', '', '89', '', '', '99', 'admin', '', 'm_tech', 'zxc', 'sjajs', 'cfsf', '', '', '', '', '', '', ''),
(11, 'qw', '', '', '56', '', '', '45', 'admin', '', 'm_tech', 'abc', 'sdgdg', '', '', '', 'dsfsd', '', 'esgdgdr', '', ''),
(12, 'ui', '', '', '3', '', '', '98', 'admin', '', 'b_tech', 'OyS8)sEopPAPBw)D04', '', '', '', '', '', '', '', '', ''),
(13, 'ui', '', '', '3', '', '', '98', 'admin', '', 'b_tech', 'OyS8)sEopPAPBw)D0', '', '', '', '', '', '', '', '', ''),
(14, 'az', '', '', '432', '', '', '45', 'admin', '', 'm_tech', 'OyS8)sEopPAPBw)D04', '', '', '', '', '', '', '', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
