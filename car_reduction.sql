-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 03, 2020 at 02:09 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_reduction`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `registration_no` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `car_no` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `registration_no`, `car_type`, `car_no`, `username`) VALUES
(2, '4666', 'cfgfcg ', '564114', 'Akash19664');

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `share_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `acceptor_username` varchar(255) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  `image_dir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `share`
--

INSERT INTO `share` (`share_id`, `username`, `source`, `destination`, `date`, `time`, `acceptor_username`, `active`, `image_dir`) VALUES
(28, 'Akash19664', 'Upper Lake, Bhopal, Madhya Pradesh, India', 'Malviya National Institute of Technology, Jaipur, Jaipur, Rajasthan, India', '01/11/2020', '13:06', 'acceptor', 1, 'Resources/local/screenshot_5e0eee908c77d.png'),
(29, 'Akash19664', 'Indore, Madhya Pradesh, India', 'Ujjain, Madhya Pradesh, India', '01/17/2020', '13:05', 'acceptor', 1, 'Resources/local/screenshot_5e0eeecc743b8.png'),
(31, 'Akash19664', 'Chennai, Tamil Nadu, India', 'Kolkata, West Bengal, India', '01/03/2020', '13:52', 'acceptor', 0, 'Resources/local/screenshot_5e0ef9a290b74.png'),
(32, 'Akash19664', 'Ajmer, Rajasthan, India', 'Chennai, Tamil Nadu, India', '01/10/2020', '14:30', 'acceptor', 1, 'Resources/local/screenshot_5e0f02cc886c6.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `car_binary` int(1) NOT NULL DEFAULT '0',
  `email_binary` int(1) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL,
  `hash` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `mobile`, `gender`, `password`, `car_binary`, `email_binary`, `username`, `hash`) VALUES
(1, 'Akash', 'Sharma', '2018ucp1154@mnit.ac.in', '9009546537', 'male', '19664', 1, 1, 'Akash19664', '5c936263f3428a40227908d5a3847c0b'),
(4, 'Akash', 'Sharma', 'akcount121@gmail.com', '9009546537', 'male', '18529', 0, 0, 'Akash18529', 'c75b6f114c23a4d7ea11331e7c00e73c'),
(5, 'Akash', 'Sharma', 'akcount121@gmail.com', '9009546537', 'male', '15596', 0, 0, 'Akash15596', '6766aa2750c19aad2fa1b32f36ed4aee'),
(6, 'Akash', 'Sharma', 'akcount121@gmail.com', '9009546537', 'male', '96544', 0, 0, 'Akash96544', '3cf166c6b73f030b4f67eeaeba301103'),
(7, 'Akash', 'Sharma', 'akcount121@gmail.com', '9009546537', 'male', '80673', 0, 0, 'Akash80673', 'c52f1bd66cc19d05628bd8bf27af3ad6'),
(8, 'Akash', 'Sharma', 'akcount121@gmail.com', '9009546537', 'male', '81794', 0, 0, 'Akash81794', 'c74d97b01eae257e44aa9d5bade97baf'),
(9, 'Akash', 'Sharma', 'akcount121@gmail.com', '9009546537', 'male', '47867', 0, 0, 'Akash47867', '33e75ff09dd601bbe69f351039152189'),
(10, 'Akash', 'Sharma', 'akcount121@gmail.com', '9009546537', 'male', '91094', 0, 0, 'Akash91094', '6974ce5ac660610b44d9b9fed0ff9548');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`share_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
  MODIFY `share_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
