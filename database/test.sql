-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 08:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `adm_name` varchar(50) NOT NULL,
  `adm_pass` varchar(50) NOT NULL,
  `adm_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `adm_name`, `adm_pass`, `adm_email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com'),
(2, 'RedCheif', 'Red', 'red@red.red');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Nike'),
(4, 'Adidas'),
(5, 'Asley'),
(6, 'Kartell'),
(7, 'LG'),
(8, 'Whirlpool');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(200) NOT NULL,
  `pro_id` int(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_id` varchar(70) NOT NULL,
  `qty` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category_name`) VALUES
(1, 'Electronics'),
(2, 'Furnitures'),
(3, 'Clothes'),
(4, 'Home Appliances');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(200) NOT NULL,
  `user_id` int(100) NOT NULL,
  `tran_id` varchar(100) NOT NULL,
  `order_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordered_products`
--

CREATE TABLE `ordered_products` (
  `ordered_pro_id` int(200) NOT NULL,
  `ordr_id` int(100) NOT NULL,
  `usr_id` int(20) NOT NULL,
  `product_id` int(30) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `odr_Id` int(200) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `total_Amt` varchar(200) NOT NULL,
  `card_holder_name` varchar(20) NOT NULL,
  `credit_card_no` varchar(20) NOT NULL,
  `exp_date` varchar(20) NOT NULL,
  `cvv` varchar(20) NOT NULL,
  `Shipping_Add` varchar(20) NOT NULL,
  `order_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(200) NOT NULL,
  `p_category` int(255) NOT NULL,
  `p_brand` int(255) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_category`, `p_brand`, `p_name`, `p_price`, `p_image`) VALUES
(1, 2, 5, 'Bedroom Sheet', 199, 'bed21.jpg'),
(2, 2, 6, 'Asain - Study Table', 139, 'studyTable.png'),
(3, 2, 6, 'Luxurious Sofa', 179, 'sofa4_up.jpg'),
(4, 2, 5, 'Table & Chairs', 149, 'tablechair.jpg'),
(5, 3, 3, 'Ladies Casual Dress ', 49, '7475-ladies-casual-dresses-summer-two-colors-pleated.jpg'),
(6, 3, 4, 'Black Jeans', 79, 'pt5.jpg'),
(7, 1, 1, 'Iphone 6', 999, 'iphone3.jpg'),
(8, 1, 1, 'Macbook Air ', 1999, 'macbook1.png'),
(9, 1, 2, 'Samsung Ipad', 339, 'ipad_sam.jpg'),
(10, 1, 2, 'Samsung S21', 1199, 'sams21.jpg'),
(11, 4, 8, 'Refrigerator', 259, 'Home Appliancesll.jpg'),
(12, 4, 7, 'Iron', 69, 'iron2.jpg'),
(13, 4, 7, 'Mixer Grinder', 63, 'singer-mixer-grinder-mg-46-medium_4bfa018096c25dec7ba0af40662856ef.jpg'),
(14, 4, 8, 'Washing Machine', 786, 'washing 012.jpg'),
(15, 3, 5, 'Black Lace Dress', 399, 'women casual5.jpg'),
(16, 2, 6, 'Asian - Bed', 599, 'bedroom4.jpg'),
(17, 3, 5, 'Shirt and Pant', 89, 'clothes1.jpg'),
(18, 1, 2, 'Headphone', 299, 'product05.png'),
(19, 1, 1, 'Iphone 12 ', 1499, 'iphone1.jpg'),
(20, 3, 5, 'Ladies Partywear', 499, 'women casual.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'Lana', '786', 'xxx@xxx.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD PRIMARY KEY (`ordered_pro_id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`odr_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordered_products`
--
ALTER TABLE `ordered_products`
  MODIFY `ordered_pro_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `odr_Id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
