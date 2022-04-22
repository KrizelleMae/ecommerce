-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 10:08 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(20) NOT NULL,
  `item_id` int(10) NOT NULL,
  `img` varchar(2552) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `userid` int(20) NOT NULL DEFAULT 12345
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `item_id`, `img`, `item_name`, `price`, `userid`) VALUES
(13, 29812, 'product_img/8966cb373815288741233a63f80a1c61fghgfhgfhgfh.jpg', 'asdasdasdasd', 23, 11113),
(18, 29812, 'product_img/8966cb373815288741233a63f80a1c61fghgfhgfhgfh.jpg', 'asdasdasdasd', 23, 11114),
(20, 70499, 'product_img/2eefe16e67de339080e6c28e47954a77My Snapshot_17.jpg', 'Item 2 sample', 500, 11113),
(21, 79825, 'product_img/73e02d91add1bbe722095144502f66dd166715_2.jpg', 'Chair ', 420, 11113);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `dimension` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL DEFAULT 'AVAILABLE',
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `img`, `img2`, `item_name`, `description`, `price`, `dimension`, `category`, `stat`, `date_added`) VALUES
(29812, 'product_img/8966cb373815288741233a63f80a1c61fghgfhgfhgfh.jpg', 'product_img/b2d7ec97f90040556b78c21fdc3e6594sadsada.jpg', 'asdasdasdasd', 'asdasdasdas', 23, 'dasdadads', 'Table', 'AVAILABLE', '2022-02-26 22:58:31'),
(70499, 'product_img/2eefe16e67de339080e6c28e47954a77My Snapshot_17.jpg', 'product_img/4fb4a44ecbe2a93024f1ee17b86231b7My Snapshot_6.jpg', 'Item 2 sample', 'Desc 2', 500, '5X5', 'Cabinet', 'AVAILABLE', '2022-01-31 01:46:34'),
(79825, 'product_img/73e02d91add1bbe722095144502f66dd166715_2.jpg', 'product_img/2e71e121d272dd8bcbf098ef3c262a64index.jpg', 'Chair ', 'This is a chair category. Sample details here', 420, '5x10', 'Chair', 'AVAILABLE', '2022-03-23 02:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'buyer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `email`, `password`, `role`) VALUES
(11111, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(11113, 'kriz', 'kriz@gmail.com', 'kriz', 'buyer'),
(11114, 'james', 'james@gmail.com', 'james', 'buyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
