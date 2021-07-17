-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 11, 2021 at 12:15 AM
-- Server version: 10.2.39-MariaDB-log
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krenar5_coursesql`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_purchases`
--

CREATE TABLE `business_purchases` (
  `idpurchase` int(255) NOT NULL,
  `id_business` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `order_details` varchar(255) DEFAULT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_purchases`
--

INSERT INTO `business_purchases` (`idpurchase`, `id_business`, `price`, `order_details`, `order_status`) VALUES
(1, 0, 4500, NULL, '2'),
(2, 0, 2300, 'ddddddddd', '1'),
(3, 0, 3400, 'vvvvvvvvv', '3'),
(4, 0, 6000, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `business_table`
--

CREATE TABLE `business_table` (
  `id` int(255) NOT NULL,
  `business_name` varchar(125) NOT NULL,
  `business_adress` varchar(250) NOT NULL,
  `NIPT` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_table`
--

INSERT INTO `business_table` (`id`, `business_name`, `business_adress`, `NIPT`) VALUES
(1, 'Biznes 1', 'Tirane', 123),
(2, 'Biznes 2', 'Tirane', 456),
(4, 'Bisnes 4', 'Tirane', 2334);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nr_telefoni` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nr_telefoni`) VALUES
(1, 'Perdorues 1', 'perdorues1@email.com', NULL),
(2, 'Perdorues 2', 'perdorues2@email.com', 692323123),
(3, 'Perdorues 3', 'perdorues3@email.com', NULL),
(4, 'Perdorues 4', 'perdorues4@email.com', 692323123),
(5, 'Perdorues 5', 'perdorues5@email.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `idprofile` int(255) NOT NULL,
  `iduser` int(255) NOT NULL,
  `photo_url` varchar(255) NOT NULL,
  `datelindja` date NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`idprofile`, `iduser`, `photo_url`, `datelindja`, `fullname`) VALUES
(1, 1, 'jjjjjjjjjjjjjjjjj', '1990-07-10', 'Perdorues 1 Mbiemer 1'),
(2, 2, 'hhhhhhhhhhhhhhhhh', '1991-07-21', 'Perdorues 2 Mbiemer 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_purchases`
--
ALTER TABLE `business_purchases`
  ADD PRIMARY KEY (`idpurchase`),
  ADD KEY `id_business` (`id_business`);

--
-- Indexes for table `business_table`
--
ALTER TABLE `business_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NIPT` (`NIPT`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`idprofile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_purchases`
--
ALTER TABLE `business_purchases`
  MODIFY `idpurchase` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `business_table`
--
ALTER TABLE `business_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `idprofile` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
