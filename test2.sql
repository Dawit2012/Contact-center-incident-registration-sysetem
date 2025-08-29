-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2015 at 08:49 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `coach_id` varchar(100) NOT NULL,
  `sup_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `user_type`, `password`, `coach_id`, `sup_id`) VALUES
('9131', 'kefyilal abera', 'advisor', 'e10adc3949ba59abbe56e057f20f883e', 'ta27', 'sup1'),
('9612', 'dawit', 'advisor', '202cb962ac59075b964b07152d234b70', 'ta27', 'sup1'),
('ta23', 'amanuel edilu', 'coach', '81dc9bdb52d04dc20036dbd8313ed055', 'ta23', 'sup1'),
('ta27', 'ashenafi getu', 'coach', '827ccb0eea8a706c4c34a16891f84e7b', 'ta27', 'sup1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `id` varchar(20) NOT NULL,
  `coach_id` varchar(20) NOT NULL,
  `sup_id` varchar(20) NOT NULL,
  `sup_ids` varchar(20) NOT NULL,
  `raised_date` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `room` varchar(20) NOT NULL,
  `raised_by` varchar(20) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `incident_type` varchar(20) NOT NULL,
  `platform` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `incident_description` varchar(20) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `possetion` varchar(20) NOT NULL,
  `tt_number` int(20) NOT NULL,
  `raised_time` varchar(20) NOT NULL,
  `closed_date` varchar(20) NOT NULL,
  `closed_time` varchar(20) NOT NULL,
  `frequency` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `remark` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `coach_id`, `sup_id`, `sup_ids`, `raised_date`, `location`, `room`, `raised_by`, `catagory`, `incident_type`, `platform`, `status`, `incident_description`, `owner`, `possetion`, `tt_number`, `raised_time`, `closed_date`, `closed_time`, `frequency`, `duration`, `remark`) VALUES
('9612', 'ta27', 'sup1', 'sup1', '122030', 'TPO', 'Room2', 'Advisors', 'Network', 'PC Hardware Problem', 'Kirkos', 'Open', 'test 56', 'Advisors', 'IT Aplication', 1, '1220', '111213', '1240', '2', '20', 'my test 56'),
('9612', '9612', 'sup1', 'sup1', '121314', 'TPO', 'Room2', 'Advisors', 'Network', 'PC Hardware Problem', 'Kirkos', 'Open', 'test 57', 'Ahmed', 'IT Aplication', 2, '1220', '121315', '1240', '5', '20', 'my test 57'),
('9131', 'ta23', 'sup1', 'sup1', '121314', 'TPO', 'Room2', 'Advisors', 'Network', 'PC', 'Kirkos', 'Open', 'test', 'Ahmed', 'IT', 3, '1220', '121415', '1240', '8', '20', 'mt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`), ADD KEY `FK_products_1` (`login_id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`tt_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `tt_number` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
