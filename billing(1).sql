-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2017 at 07:57 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
`id` int(11) NOT NULL,
  `invoice_no` varchar(100) DEFAULT NULL,
  `customer_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `total_price` float(5,2) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `invoice_no`, `customer_name`, `date`, `total_price`, `status`, `created`, `modified`) VALUES
(1, 'IN-1000', 'javed', '2017-02-01', 40.00, 1, '2017-04-03 16:40:25', '2017-04-03 16:40:25'),
(3, 'IN-1002', 'jjack', '2017-02-01', 100.00, 1, '2017-04-03 17:01:31', '2017-04-03 17:01:31'),
(4, 'IN-1004', 'anil', '2017-02-01', 258.00, 2, '2017-04-03 18:00:14', '2017-04-03 18:00:14'),
(5, 'IN-1005', 'ankita', '2017-02-01', 50.00, 1, '2017-04-03 18:01:20', '2017-04-03 18:01:20'),
(6, 'IN-1006', 'janiz', '2017-04-04', 16.00, 1, '2017-04-04 05:55:24', '2017-04-04 05:55:24'),
(7, 'IN-1007', 'javed khan', '2017-04-07', 100.00, 1, '2017-04-06 21:33:52', '2017-04-06 21:33:52'),
(8, 'IN-1008', 'asd', '2017-04-11', 2.00, 1, '2017-04-11 13:26:50', '2017-04-11 13:26:50'),
(9, 'IN-1009', 'gfd', '2017-04-03', 12.00, 1, '2017-04-17 06:52:43', '2017-04-17 06:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_items`
--

CREATE TABLE IF NOT EXISTS `invoice_items` (
`id` int(11) NOT NULL,
  `medicine_id` int(11) DEFAULT NULL,
  `invoice_id` int(11) NOT NULL,
  `sale_quantity` int(11) DEFAULT NULL,
  `piece_price` float(5,2) DEFAULT NULL,
  `total_price` float(5,2) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_items`
--

INSERT INTO `invoice_items` (`id`, `medicine_id`, `invoice_id`, `sale_quantity`, `piece_price`, `total_price`, `status`, `created`, `modified`) VALUES
(1, 1, 1, 20, 2.00, 40.00, 1, '2017-04-03 16:40:25', '2017-04-03 16:40:25'),
(3, 2, 3, 2, 50.00, 100.00, 1, '2017-04-03 17:01:31', '2017-04-03 17:01:31'),
(4, 1, 4, 4, 2.00, 8.00, 1, '2017-04-03 18:00:14', '2017-04-03 18:00:14'),
(5, 2, 4, 5, 50.00, 250.00, 1, '2017-04-03 18:00:14', '2017-04-03 18:00:14'),
(6, 2, 5, 1, 50.00, 50.00, 1, '2017-04-03 18:01:20', '2017-04-03 18:01:20'),
(7, 4, 6, 6, 2.00, 12.00, 1, '2017-04-04 05:55:24', '2017-04-04 05:55:24'),
(8, 1, 6, 2, 2.00, 4.00, 1, '2017-04-04 05:55:24', '2017-04-04 05:55:24'),
(9, 3, 7, 50, 2.00, 100.00, 1, '2017-04-06 21:33:52', '2017-04-06 21:33:52'),
(10, 1, 8, 1, 2.00, 2.00, 1, '2017-04-11 13:26:51', '2017-04-11 13:26:51'),
(11, 1, 9, 5, 2.00, 10.00, 1, '2017-04-17 06:52:43', '2017-04-17 06:52:43'),
(12, 3, 9, 1, 2.00, 2.00, 1, '2017-04-17 06:52:43', '2017-04-17 06:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE IF NOT EXISTS `medicines` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `alias_name` varchar(30) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `piece_price` float(5,2) NOT NULL,
  `batch_no` varchar(100) NOT NULL,
  `dom` date NOT NULL,
  `doe` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `alias_name`, `quantity`, `piece_price`, `batch_no`, `dom`, `doe`, `created`, `modified`, `status`) VALUES
(1, 'peracitamol edit', 'ph', 18, 2.40, 'asd-234', '2017-05-02', '2017-05-31', '2017-04-03 11:37:15', '2017-05-20 12:39:22', 1),
(2, 'corex', 'crx', 22, 50.00, '', '0000-00-00', '0000-00-00', '2017-04-03 14:59:20', '2017-04-03 14:59:20', 2),
(3, 'citrazin', 'ctz', 49, 2.00, 'asd', '2017-05-02', '2017-06-22', '2017-04-03 20:25:25', '2017-05-21 05:43:17', 1),
(4, 'test', 'tt', 4, 2.00, 'asd-2367', '2017-05-09', '2017-05-31', '2017-04-04 05:53:04', '2017-05-20 18:56:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'javed', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'harsh', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_items`
--
ALTER TABLE `invoice_items`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
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
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `invoice_items`
--
ALTER TABLE `invoice_items`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
