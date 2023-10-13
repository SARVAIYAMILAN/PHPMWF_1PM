-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 10:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maharaja_catering`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `catering_id` int(11) NOT NULL,
  `catering_name` varchar(255) NOT NULL,
  `catering_added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_category`
--

INSERT INTO `add_category` (`catering_id`, `catering_name`, `catering_added_date`) VALUES
(9, 'STARTERS', '2023-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `product_id` int(11) NOT NULL,
  `catering_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `oldprice` int(11) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `pdescriptions` text NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`product_id`, `catering_id`, `subcategory_id`, `productname`, `pimage`, `oldprice`, `offerprice`, `qty`, `pdescriptions`, `added_date`) VALUES
(8, 9, 1, 'PATRA', 'uploads/products/0a62d0a495669ec0a79013592a8b3765.jpg', 120, 100, 1, '100', '2023-10-12'),
(9, 9, 1, 'THEPLA', 'uploads/products/download.jpg', 80, 70, 5, '80', '2023-10-12'),
(10, 9, 1, 'KHANDVI', 'uploads/products/Gujrati-Food-Blog-Banner-1030x538.jpg', 80, 60, 1, '60', '2023-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `add_subcategory`
--

CREATE TABLE `add_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `sub_categoryname` varchar(255) NOT NULL,
  `subcategory_added_date` varchar(255) NOT NULL,
  `catering_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_subcategory`
--

INSERT INTO `add_subcategory` (`subcategory_id`, `sub_categoryname`, `subcategory_added_date`, `catering_id`) VALUES
(1, 'Veg Sandwhich', '2023-06-14', 1),
(2, 'Veg Soup', '2023-06-14', 2),
(3, 'Paneer Masala', '2023-06-14', 3);

-- --------------------------------------------------------

--
-- Table structure for table `admin_catering`
--

CREATE TABLE `admin_catering` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_catering`
--

INSERT INTO `admin_catering` (`admin_id`, `email`, `password`) VALUES
(1, 'sarvaiyamilan568@gmail.com', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'sarvaiyamilan568@gmail.com', '2020'),
(2, 'milan@gmail.com', '2020'),
(3, 'milan@gmail.com', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `caterig_costomer`
--

CREATE TABLE `caterig_costomer` (
  `customer_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `state_id` int(11) NOT NULL,
  `added_date_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `caterig_costomer`
--

INSERT INTO `caterig_costomer` (`customer_id`, `photo`, `email`, `name`, `password`, `mobile`, `address`, `state_id`, `added_date_time`) VALUES
(3, 'uploads/customers/', 'sarvaiyamilan568@gmail.com', 'Milan sarvaiya', '2020', 9664831896, 'Rajkot\r\n', 1, '07/06/2023 11:05:10 am');

-- --------------------------------------------------------

--
-- Table structure for table `catering_cart`
--

CREATE TABLE `catering_cart` (
  `cart_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `added_date_time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catering_cart`
--

INSERT INTO `catering_cart` (`cart_id`, `customer_id`, `product_id`, `qty`, `subtotal`, `added_date_time`, `status`) VALUES
(1, 3, 1, 1, 2500, '14/06/2023 17:08:50 pm', 'pending'),
(2, 3, 0, 1, 2500, '15/06/2023 08:56:13 am', 'pending'),
(3, 3, 0, 1, 1299, '15/06/2023 08:58:43 am', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `catering_state`
--

CREATE TABLE `catering_state` (
  `state_id` int(11) NOT NULL,
  `statename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catering_state`
--

INSERT INTO `catering_state` (`state_id`, `statename`) VALUES
(1, 'Gujarat\r\n'),
(2, 'Tamil Nadu'),
(3, 'Karnataka');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`id`, `name`, `email`, `password`, `phone`, `image`) VALUES
(1, 'Milan', 'sarvaiyamilan568@gmail.com', '101020', 9664831896, 'uploads/registerusers/'),
(2, 'yash', 'yash@gmail.com', '1010', 8460040405, 'uploads/registerusers/Screenshot (42).png'),
(4, 'nirav', 'nirav@gmail.com', '2020', 963852741, 'uploads/registerusers/Screenshot (42).png'),
(6, 'wefw', 'milan@gmail.com', '1010', 8855446622, 'uploads/registerusers/Screenshot (42).png'),
(7, 'meet sarvaiya', 'meetsarvaiya@gmail.com', '202020', 6352496758, 'uploads/registerusers/review-3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`catering_id`);

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `jewellery_category_id` (`catering_id`),
  ADD KEY `jewelley_subcategory_id` (`subcategory_id`);

--
-- Indexes for table `add_subcategory`
--
ALTER TABLE `add_subcategory`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `jewellery_category_id` (`catering_id`),
  ADD KEY `jewellery_category_id_2` (`catering_id`);

--
-- Indexes for table `admin_catering`
--
ALTER TABLE `admin_catering`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caterig_costomer`
--
ALTER TABLE `caterig_costomer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `catering_cart`
--
ALTER TABLE `catering_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id.` (`customer_id`);

--
-- Indexes for table `catering_state`
--
ALTER TABLE `catering_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `catering_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `add_subcategory`
--
ALTER TABLE `add_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_catering`
--
ALTER TABLE `admin_catering`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `caterig_costomer`
--
ALTER TABLE `caterig_costomer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `catering_cart`
--
ALTER TABLE `catering_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `catering_state`
--
ALTER TABLE `catering_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
