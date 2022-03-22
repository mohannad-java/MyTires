-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 03:48 PM
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
-- Database: `mytires1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` int(11) NOT NULL,
  `tire_id` int(11) NOT NULL,
  `pic` longblob NOT NULL,
  `name` varchar(101) NOT NULL,
  `dec` varchar(101) NOT NULL,
  `price` double NOT NULL,
  `size1` int(11) NOT NULL,
  `size2` int(11) NOT NULL,
  `Ring_Size` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tire_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tires`
--

CREATE TABLE `tires` (
  `user_id` int(11) NOT NULL,
  `tire_id` int(11) NOT NULL,
  `pic` longblob NOT NULL,
  `name` varchar(101) NOT NULL,
  `dec` varchar(101) DEFAULT NULL,
  `price` varchar(101) NOT NULL,
  `size1` int(3) NOT NULL,
  `size2` int(3) NOT NULL,
  `ring_size` int(3) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tires`
--

INSERT INTO `tires` (`user_id`, `tire_id`, `pic`, `name`, `dec`, `price`, `size1`, `size2`, `ring_size`, `qty`, `created_at`, `updated_at`) VALUES
INSERT INTO `tires` (`user_id`, `tire_id`, `pic`, `name`, `dec`, `price`, `size1`, `size2`, `ring_size`, `qty`, `created_at`, `updated_at`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(101) NOT NULL,
  `email` varchar(101) NOT NULL,
  `password` varchar(101) NOT NULL,
  `role` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(2, 'company', 'company@company.com', '$2y$10$MC3JbdVc2eSNDHprsW7AnuVtWGBdKP4xv2d1hjHSOe33o6aErT9ra', 'company', '2022-03-02 22:06:25', NULL),
(3, 'user', 'user@user.com', '$2y$10$aA1WdTnKwuQ0CSYphg1FVe45cyaLF6PccaDA2W648BIipSWlRgBtu', 'user', '2022-03-04 13:46:34', NULL),
(4, 'test', 'test@user.com', '$2y$10$PlfQAmO2l9Vx55Azewhcpu/kSYaHK258mNfvuja34BIicMnkE68tG', 'user', '2022-03-08 19:29:37', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tire_id` (`tire_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tire_id` (`tire_id`);

--
-- Indexes for table `tires`
--
ALTER TABLE `tires`
  ADD PRIMARY KEY (`tire_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tires`
--
ALTER TABLE `tires`
  MODIFY `tire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`tire_id`) REFERENCES `tires` (`tire_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`tire_id`) REFERENCES `tires` (`tire_id`);

--
-- Constraints for table `tires`
--
ALTER TABLE `tires`
  ADD CONSTRAINT `tires_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;