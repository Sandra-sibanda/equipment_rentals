-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 07:06 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `equipment-rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_username` varchar(500) NOT NULL DEFAULT '',
  `admin_password` varchar(500) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(5000) NOT NULL DEFAULT '',
  `item_price` double DEFAULT NULL,
  `item_image` varchar(5000) NOT NULL DEFAULT '',
  `item_date` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`, `item_image`, `item_date`) VALUES
(20, 'stanley-300g-ball-pein-hammer', 120, '725965.jpeg', '2021-11-28'),
(21, 'bosch-gks-190-hand-held-circular-saw_600', 500, '271084.jpeg', '2021-11-28'),
(22, 'bosch-glm-80-professional-laser-measure_600', 230, '185726.jpeg', '2021-11-28'),
(23, 'bosch-ptc-640-tile-cutter_600', 800, '867392.jpeg', '2021-11-28'),
(24, 'ingco-drill-rotary-hammer-1500w_600', 1500, '453959.jpeg', '2021-11-28'),
(25, 'stanley-locking-pliers_600', 450, '184565.jpeg', '2021-11-28'),
(26, 'stanley-21-oz-rubber-mallet_600', 250, '750851.jpeg', '2021-11-28'),
(27, 'neptune-clipper-boot-go-cart-blue_635', 140, '3788.jpeg', '2021-11-28'),
(28, 'stanley-mini-multi-tool_600', 50, '384924.jpeg', '2021-11-28'),
(29, 'neptun-marina-boot-summer-yellow_600', 110, '280350.jpeg', '2021-11-28'),
(30, 'stanley-fatmax-vde-plier-combination-200mm_600', 140, '813941.jpeg', '2021-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `order_name` varchar(1000) NOT NULL DEFAULT '',
  `order_price` double NOT NULL DEFAULT 0,
  `order_quantity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `order_total` double NOT NULL DEFAULT 0,
  `order_status` varchar(45) NOT NULL DEFAULT '',
  `order_date` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`order_id`, `user_id`, `order_name`, `order_price`, `order_quantity`, `order_total`, `order_status`, `order_date`) VALUES
(33, 6, 'Item2 ', 100, 1, 100, 'Ordered_Finished', '2021-11-28'),
(34, 6, 'Item3', 50, 1, 50, 'Ordered_Finished', '2021-11-28'),
(37, 7, 'Item5', 55, 1, 55, 'Ordered', '2021-11-28'),
(38, 7, 'Item101', 1000, 1, 1000, 'Ordered', '2021-11-28'),
(39, 7, 'stanley-300g-ball-pein-hammer', 120, 1, 120, 'Ordered', '2021-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(1000) NOT NULL,
  `user_password` varchar(1000) NOT NULL,
  `user_firstname` varchar(1000) NOT NULL,
  `user_lastname` varchar(1000) NOT NULL,
  `user_address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_firstname`, `user_lastname`, `user_address`) VALUES
(6, 'x@x.com', 'admin', 'x', 'x', 'jump street 22'),
(7, 'jack@password.com', 'jack', 'jack ', 'jack', '12 severn street');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_orderdetails_1` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `FK_orderdetails_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
