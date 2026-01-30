-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2025 at 10:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store-it`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `aemail` varchar(255) NOT NULL,
  `apassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `aname`, `aemail`, `apassword`) VALUES
(1, 'Admin', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `b_id` int(11) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `bemail` varchar(255) NOT NULL,
  `bpassword` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL,
  `profile` text NOT NULL,
  `address` text NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `bname`, `bemail`, `bpassword`, `location`, `date`, `status`, `profile`, `address`, `phone`) VALUES
(1, 'store it-mangalore-kankanady', 'stmankan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Mangalore', '0000-00-00', 'active', 'uploads/store (1).png', ' Kankanady         Mangalore                ', 3432532);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `qty` bigint(30) NOT NULL,
  `price` bigint(30) NOT NULL,
  `total` bigint(30) NOT NULL,
  `cstatus` varchar(255) NOT NULL,
  `cdate` date NOT NULL,
  `order_no` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `b_id`, `p_id`, `qty`, `price`, `total`, `cstatus`, `cdate`, `order_no`) VALUES
(1, 1, 2, 1, 1300, 1300, 'ordered', '0000-00-00', 4534);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `cname`) VALUES
(1, ' T-Shirts');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `p_id` bigint(30) NOT NULL,
  `feed` varchar(255) NOT NULL,
  `fdate` date NOT NULL DEFAULT current_timestamp(),
  `b_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `p_id`, `feed`, `fdate`, `b_id`, `rating`) VALUES
(1, 2, 'good', '0000-00-00', 1, 0),
(2, 2, 'goood!!!!!!', '2025-04-05', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_no` bigint(25) NOT NULL,
  `b_id` int(11) NOT NULL,
  `grand_total` bigint(25) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` int(10) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `order_status` varchar(30) NOT NULL,
  `mode` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_no`, `b_id`, `grand_total`, `fullname`, `email`, `phone`, `address`, `city`, `state`, `zip_code`, `order_date`, `order_status`, `mode`) VALUES
(6, 4534, 1, 1300, 'Zamiya', 'zamiashafi30@gmail.com', 8861537903, 'BAJAL ,MANGALORE,DAKSHINA KANNNADA,KARNATAKA,575027', 'mangalore', 'Karnataka', 575027, '2025-04-11', 'ordered', 'upi');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_no` bigint(30) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `transaction_id` text NOT NULL,
  `amount` bigint(30) NOT NULL,
  `pstatus` varchar(255) NOT NULL,
  `pdate` date NOT NULL DEFAULT current_timestamp(),
  `cname` text NOT NULL,
  `cno` int(30) NOT NULL,
  `exp_date` text NOT NULL,
  `cvv` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `b_id`, `order_id`, `order_no`, `mode`, `transaction_id`, `amount`, `pstatus`, `pdate`, `cname`, `cno`, `exp_date`, `cvv`) VALUES
(3, 1, 0, 2099, 'upi', 'dsafewde', 1300, 'rejected', '2025-04-11', '', 0, '', 0),
(4, 1, 0, 4534, 'upi', '2345678', 1300, 'confirmed', '2025-04-11', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL,
  `pdesc` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `price` bigint(30) NOT NULL,
  `stock` bigint(30) NOT NULL,
  `pdate` date NOT NULL DEFAULT current_timestamp(),
  `pstatus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `pname`, `c_id`, `pdesc`, `pimage`, `price`, `stock`, `pdate`, `pstatus`) VALUES
(1, 'Blue Tshirt Men', 1, '                                                Blue T shirt Men                                                ', 'uploads/thsirt.jpeg', 1300, 30, '0000-00-00', 'available'),
(2, 'Blue Tshirt Men', 1, 'blue tshirt men', 'uploads/thsirt.jpeg', 1300, 24, '0000-00-00', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
