-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2025 at 03:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
(1, 'store it-mangalore-kankanady', 'stmankan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Mangalore', '0000-00-00', 'active', 'uploads/store (1).png', ' Kankanady         Mangalore                ', 3432532),
(3, 'sony', 'sony@gmail.com', 'ec6a6536ca304edf844d1d248a4f08dc', 'mangalore', '2025-04-12', 'active', 'uploads/GNP-Headline-Sony.jpg', '                        pvs                        ', 4578561234);

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
(1, 1, 2, 1, 1300, 1300, 'ordered', '0000-00-00', 4534),
(2, 1, 12, 5, 137590, 687950, 'ordered', '0000-00-00', 7013),
(3, 1, 7, 10, 39900, 399000, 'ordered', '0000-00-00', 9947),
(4, 1, 12, 1, 137590, 137590, 'ordered', '0000-00-00', 4474),
(5, 1, 20, 1, 1199, 1199, 'ordered', '0000-00-00', 7907),
(6, 1, 4, 3, 135900, 407700, 'ordered', '0000-00-00', 6809),
(7, 1, 11, 1, 1599, 1599, 'ordered', '0000-00-00', 6189),
(8, 1, 4, 1, 135900, 135900, 'ordered', '0000-00-00', 5294),
(9, 1, 16, 1, 61990, 61990, 'ordered', '0000-00-00', 5294),
(10, 1, 20, 1, 1199, 1199, 'ordered', '0000-00-00', 4040);

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
(3, ' SMART WATCH'),
(4, ' SMART PHONE'),
(5, ' HEADPHONE'),
(6, ' LAPTOPS'),
(7, ' TV'),
(8, ' SPEAKERS');

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
(2, 2, 'goood!!!!!!', '2025-04-05', 1, 0),
(3, 4, '1234\r\n', '2025-04-12', 1, 0),
(4, 4, 'issue', '2025-04-12', 1, 0),
(5, 13, 'dfdfd', '2025-04-24', 1, 0);

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
(6, 4534, 1, 1300, 'Zamiya', 'zamiashafi30@gmail.com', 8861537903, 'BAJAL ,MANGALORE,DAKSHINA KANNNADA,KARNATAKA,575027', 'mangalore', 'Karnataka', 575027, '2025-04-11', 'delivered', 'upi'),
(7, 7013, 1, 687950, 'KIM', 'kimhuang@gmail.com', 4578561234, 'korea', 'Mangalore', 'feeeeeeee', 4848488, '2025-04-12', 'delivered', 'cod'),
(8, 9947, 1, 399000, 'KIM', 'kimhuang@gmail.com', 4578561234, 'korea', 'Mangalore', 'feeeeeeee', 4848488, '2025-04-12', 'delivered', 'cod'),
(9, 4474, 1, 137590, 'KIM', 'kimhuang@gmail.com', 4578561234, 'korea', 'Mangalore', 'feeeeeeee', 4848488, '2025-04-12', 'delivered', 'cod'),
(10, 7907, 1, 1199, 'KIM', 'kimhuang@gmail.com', 4578561234, 'korea', 'Mangalore', 'feeeeeeee', 4848488, '2025-04-12', 'delivered', 'cod'),
(11, 6809, 1, 407700, 'KIM', 'kimhuang@gmail.com', 4578561234, 'korea', 'Mangalore', 'feeeeeeee', 4848488, '2025-04-12', 'delivered', 'cod'),
(12, 6189, 1, 1599, 'KIM', 'kimhuang@gmail.com', 4578561234, 'korea', 'Mangalore', 'feeeeeeee', 4848488, '2025-04-12', 'delivered', 'cod'),
(13, 5294, 1, 197890, 'KIM', 'kimhuang@gmail.com', 4578561234, 'korea', 'Mangalore', 'feeeeeeee', 4848488, '2025-04-23', 'pending', 'upi'),
(14, 4040, 1, 1199, 'KIM', 'kimhuang@gmail.com', 4578561234, 'korea', 'Mangalore', 'iygyyd', 4848488, '2025-04-24', 'pending', 'cod');

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
(4, 1, 0, 4534, 'upi', '2345678', 1300, 'confirmed', '2025-04-11', '', 0, '', 0),
(5, 1, 0, 7907, 'cod', '', 1199, 'confirmed', '2025-04-12', '', 0, '', 0),
(6, 1, 0, 6189, 'cod', '', 1599, 'confirmed', '2025-04-12', '', 0, '', 0),
(7, 1, 0, 5294, 'upi', '', 197890, 'pending', '2025-04-23', '', 0, '', 0);

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
(4, 'iPhone 16 Pro Max 256 GB', 4, '5G Mobile Phone with Camera Control, 4K 120 fps Dolby Vision, and a Huge Leap in Battery Life and Works with AirPods.\r\nColor: Desert Titanium', 'uploads/ip 16 pro max.jpg', 135900, 496, '2025-04-12', 'available'),
(5, 'iPhone 16 Plus 256 GB', 4, '5G Mobile Phone with Camera Control, A18 Chip, and a Big Boost in Battery Life and Works with AirPods.\r\nColor: Ultramarine', 'uploads/iphone 16.jpg', 92900, 500, '2025-04-12', 'available'),
(6, 'Samsung Galaxy S25 Ultra', 4, '5G AI Smartphone (Titanium White silver, 12GB RAM, 256GB Storage), 200MP Camera, S Pen Included, Long Battery Life', 'uploads/samsung s24 ultra.jpg', 129999, 500, '2025-04-12', 'available'),
(7, 'Samsung Galaxy S24 FE ', 4, ' 5G AI Smartphone (Graphite, 8GB RAM, 128GB Storage)', 'uploads/s24 fe.jpg', 39900, 9990, '2025-04-12', 'available'),
(8, 'iQOO Z9s 5G', 4, '(Onyx Green, 8GB RAM, 256GB Storage) | 120 Hz 3D Curved AMOLED Display | 5500 mAh Ultra-Thin Battery | Dimesity 7300 5G Processor | Sony IMX882 OIS Camera with Aura Light', 'uploads/iqoo z9.jpg', 21999, 10000, '2025-04-12', 'available'),
(9, 'soundcore by Anker Q20i', 5, 'Wireless Bluetooth Over-Ear Headphones with Hybrid Active Noise Cancelling, 40h Playtime in ANC Mode, Hi-Res Audio, Deep Bass, Personalization via App (Black)', 'uploads/headphone 1.jpg', 4499, 10000, '2025-04-12', 'available'),
(10, 'HyperX Cloud Stinger 2', 5, 'Core Gaming Headset PS, 3.5mm Wired Connection, 40mm Sound Drivers, Lightweight, Over-Ear, Swivel-to-Mute mic, PlayStation-Licensed, Soft Foam Ear Cushion, White, 275g, 6H9B5AA', 'uploads/headphone 2.jpg', 2999, 20000, '2025-04-12', 'available'),
(11, 'boAt Rockerz 480', 5, 'w/RGB LEDs, 6 Light Modes, 40mm Drivers, Beast Mode, 60hrs Playback, ENx Tech, BT v5.3, Adaptive Fit & Easy Access Controls, Bluetooth Headphones(Black Sabre)', 'uploads/headphone 3.jpg', 1599, 19999, '2025-04-12', 'available'),
(12, 'Lenovo LOQ', 6, 'Intel Core i7-14700HX 15.6\" (39.6cm) 144Hz 300Nits FHD Gaming Laptop (16GB/1TB SSD/Win 11/NVIDIA GeForce RTX 4060 8GB Graphics/100% sRGB/Office 21/1Yr ADP Free/Grey/2.4Kg), 83DV00BEIN', 'uploads/loq.jpg', 137590, 994, '2025-04-12', 'available'),
(13, 'SUS ROG Strix G16(2023)', 6, 'Intel Core i7-13650HX, 13th Gen, RTX 4050-6GB, 16GB RAM, 1TB SSD, FHD+ 165Hz, 16\", Windows 11, MS Office 2021, Gray, 2.50KG, G614JU-N3200WS, 90WHr Battery, Gaming Laptop', 'uploads/strix.jpg', 115990, 1000, '2025-04-12', 'available'),
(14, 'Mi Xiaomi 138 cm', 7, '                        55 inches) X Series 4K LED Smart Google TV L55MA-AIN (Black)                        ', 'uploads/xiaomi.jpg', 37999, 1000, '2025-04-12', 'available'),
(15, 'Samsung 163 cm', 7, '                        (65 inches) 4K Ultra HD Smart LED TV UA65DUE70BKLXL (Black)                        ', 'uploads/samsun tv 1.jpg', 62990, 10000, '2025-04-12', 'available'),
(16, 'Samsung QLED TV 138 cm', 7, '(55 inches) QE1D Series 4K Ultra HD QLED Smart TV QA55QE1DAULXL (Black)\r\nVisit the Samsung Store', 'uploads/qled.jpg', 61990, 4999, '2025-04-12', 'available'),
(17, 'SONY MHC-V73D Wireless Bluetooth Party Speaker (Black)', 8, 'Feel the beat of your track in Every Corner with Powerful Omni Directional Sound and Jet Bass Booster.\r\nOmni Directional Party Light to fullfill the room with party Atmosphere.\r\nKaraoke & Guitar Input to unlease your inner POP Star.\r\nDrum along the music ', 'uploads/speaker.jpg', 52460, 700, '2025-04-12', 'available'),
(18, 'Marshall Woburn III', 8, 'Wired Connectivity Home Speaker with HDMI Input, Bluetooth 5.2 & RCA or 3.5mm Input - Black', 'uploads/marshal speaker.jpg', 52999, 700, '2025-04-12', 'available'),
(19, 'Amazfit GTR 4', 3, 'New Smart Watch with 1.45” AMOLED Display, Bluetooth Calls, Zepp Aura, Heart Rate, Sleep, Stress, SpO2 Monitoring, Sports Watch with 150+ Sports Modes, GPS, Music Control, Alexa Built-in(Galaxy Black)', 'uploads/smart watch 1.jpg', 14999, 8000, '2025-04-12', 'available'),
(20, 'Fire-Boltt Rise', 3, 'Smart Watch, 1.85\" HD Display, Metal Body with Bluetooth Calling, Rotating Crown, AI Voice Assistant, 120 Sports Modes, Neon UI, SpO2 & Heart Rate Monitoring (Black)', 'uploads/sm 2.jpg', 1199, 4998, '2025-04-12', 'available');

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
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
