-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 06:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edukan`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `u_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `c_number` int(100) NOT NULL,
  `ex_date` date NOT NULL,
  `cvv` int(100) NOT NULL,
  `total_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`u_id`, `name`, `address`, `city`, `c_number`, `ex_date`, `cvv`, `total_price`) VALUES
(0, 'muhammad asif', 'H#F547 Sarafa Bazar RWP', 'RAWALPINDI', 233332, '2023-02-16', 0, 10),
(16, 'muhammad asif', 'H#F547 Sarafa Bazar RWP', 'RAWALPINDI', 0, '1970-01-01', 0, 11),
(16, 'muhammad asif', 'H#F547 Sarafa Bazar RWP', 'RAWALPINDI', 233332, '2023-03-02', 0, 5),
(17, 'muhammad asif', 'H#F547 Sarafa Bazar RWP', 'RAWALPINDI', 0, '1970-01-01', 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `p_type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `user_id`, `p_type`, `name`, `price`, `image`, `time`) VALUES
(242829767, 15, 'backpack', 'Hiking bag', 5, 'images/categories/C11.jpeg', '2023-02-15 13:57:25'),
(666171958, 13, 'makeup', 'Make-up kit 1', 5, 'images/categories/C61.jpg', '2023-02-13 17:57:19'),
(945014950, 15, 'Jewellery', 'Necklace', 5, 'images/categories/C51.jpg', '2023-02-15 14:14:04'),
(1394002559, 15, 'Jewellery', 'Necklace', 5, 'images/categories/C51.jpg', '2023-02-15 14:15:18'),
(1550378120, 15, 'Jewellery', 'Necklace', 5, 'images/categories/C51.jpg', '2023-02-15 14:13:39'),
(1595366009, 13, 'makeup', 'Make-up kit 1', 5, 'images/categories/C61.jpg', '2023-02-13 18:01:01'),
(1792196604, 15, 'jacket', 'Jacket for women', 11, 'images/categories/C32.jpg', '2023-02-15 13:56:22'),
(1875324736, 15, 'Jewellery', 'Necklace', 5, 'images/categories/C51.jpg', '2023-02-15 14:12:56'),
(2037535254, 15, 'Jewellery', 'Necklace', 5, 'images/categories/C51.jpg', '2023-02-15 14:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `u_type` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`, `u_type`) VALUES
(14, 'qw', 'was', 'sd', 'user'),
(15, 'qw', 'was', 'sd', 'user'),
(16, 'aa', 'aa@aa.aa', 'aa', 'user'),
(17, 'cc', 'cc@cc.cc', 'cc', 'user'),
(18, 'admin', 'admin@admin.admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2111218318;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
