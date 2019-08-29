-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 29, 2019 at 02:44 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devs`
--

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE `urls` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urls`
--

INSERT INTO `urls` (`id`, `user_email`, `url`, `description`) VALUES
(1, 'williamssmrt@gmail.com', 'https://www.youtube.com/embed/4pU4T3idI-I', 'This is a video designed for kids to help them learn how to be kind and share what they can share with others in need of it'),
(2, 'williamssmrt@gmail.com', 'https://www.youtube.com/embed/G3VMl-EY2DM', 'This is a video that shows the developement stage of butterfly'),
(3, 'williamssmrt@gmail.com', 'https://www.youtube.com/embed/3t6T5U8cd04', 'This is a video how fish aquairiums are made'),
(4, 'chris@surulere.com', 'https://www.youtube.com/embed/TLee3cI47KE', 'Mercy chinwo new single'),
(5, 'chris@surulere.com', 'https://www.youtube.com/embed/LosFYASmkP4', 'Ddeskkdkdkdkd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'smart', 'williamssmrt@gmail.com', '59543671b98fc0a8ef2a598abc40e647'),
(2, 'newtonolu', 'wilsonsmartz@yahoo.com', '59543671b98fc0a8ef2a598abc40e647'),
(3, 'chris', 'chris@surulere.com', '6b34fe24ac2ff8103f6fce1f0da2ef57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `urls`
--
ALTER TABLE `urls`
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
-- AUTO_INCREMENT for table `urls`
--
ALTER TABLE `urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
