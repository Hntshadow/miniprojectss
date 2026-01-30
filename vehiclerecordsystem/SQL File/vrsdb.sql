-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 11:46 AM
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
-- Database: `vrsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `name`, `email`, `mobile`, `password`, `create_date`) VALUES
(1, 'Administrator ', 'admin@gmail.com', '1234567890', 'f925916e2754e5e03f75dd58a5733251', '2022-11-19 11:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrand`
--

CREATE TABLE `tblbrand` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbrand`
--

INSERT INTO `tblbrand` (`id`, `BrandName`, `CreationDate`) VALUES
(1, 'Toyota', '2024-07-24 13:09:42'),
(2, 'Hyundai', '2024-07-24 13:09:51'),
(3, 'Honda', '2024-07-24 13:10:02'),
(4, 'Tata Marcopolo bus', '2024-07-24 13:10:48'),
(6, 'TVS', '2024-07-27 04:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About us', '<p style=\"margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; border: none; scroll-behavior: smooth; font-family: &quot;IBM Plex Sans&quot;, serif; line-height: 1.4; font-size: 16px; color: rgb(10, 19, 42);\"><br></p><p style=\"margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; border: none; scroll-behavior: smooth; font-family: &quot;IBM Plex Sans&quot;, serif; line-height: 1.4; font-size: 16px; color: rgb(10, 19, 42);\"><br></p><p style=\"margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; border: none; scroll-behavior: smooth; font-family: &quot;IBM Plex Sans&quot;, serif; line-height: 1.4; font-size: 16px; color: rgb(10, 19, 42);\">A vehicle record is a formal report that outlines an individual’s driving history. Motor vehicle records include information like accidents, tickets, violations, and more. Many states approach motor vehicle records differently —&nbsp;some use a points-system to evaluate drivers, while some instead use a numerical score.</p>', NULL, NULL, '2024-07-26 04:51:21'),
(2, 'contactus', 'Contact Us', '#890 CFG Apartment, Mayur Vihar, Delhi-India.', 'vrsinfo@test.com', 12345000000000, '2024-07-27 06:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicle`
--

CREATE TABLE `tblvehicle` (
  `ID` int(11) NOT NULL,
  `BrandID` int(5) DEFAULT NULL,
  `VehicleName` varchar(250) DEFAULT NULL,
  `ModelNum` varchar(250) DEFAULT NULL,
  `RegNum` varchar(200) DEFAULT NULL,
  `VehicleType` varchar(250) DEFAULT NULL,
  `VehcleSubtype` varchar(250) DEFAULT NULL,
  `Varient` varchar(255) DEFAULT NULL,
  `Transmission` varchar(100) DEFAULT NULL,
  `ChasisNumber` varchar(250) DEFAULT NULL,
  `EngineNumber` varchar(250) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblvehicle`
--

INSERT INTO `tblvehicle` (`ID`, `BrandID`, `VehicleName`, `ModelNum`, `RegNum`, `VehicleType`, `VehcleSubtype`, `Varient`, `Transmission`, `ChasisNumber`, `EngineNumber`, `Description`, `CreationDate`) VALUES
(1, 3, 'Tata Marcopolo School Variant Bus', 'TMSVB123', 'UP8906', 'Four Wheeler', 'Bus', 'Diesel', 'Manual', 'LP 712 / 42 BS V', '497 Tata Turbocharged Intercooled 3783 cm3', '\"The Tata Marcopolo comes with an assurance of safety and comfort and is the perfect choice for travelers and operators at the same time. Its superior performance has the stamp of excellence from Tata Marcopolo Motors Ltd.', '2024-07-25 06:00:12'),
(2, 4, 'Tata Marcopolo School Variant Bus', 'TMSVB123', 'HP8906', 'Four Wheeler', 'Bus', 'Diesel', 'Manual', 'LP 812 / 42 BS IV', '499 Tata Turbocharged Intercooled 3783 cm3', 'The Tata Marcopolo comes with an assurance of safety and comfort and is the perfect choice for travelers and operators at the same time. Its superior performance has the stamp of excellence from Tata Marcopolo Motors Ltd.', '2024-07-25 06:00:12'),
(3, 1, 'BharatBenz Intercity Bus Used Passenger Buses', 'BharatBenz123', 'UP78087', 'Four Wheeler', 'Passenger Bus', 'Diesel', 'Manual', 'LP 711 / 43 BS IV', '98568hj7yu867ijm', 'second Hand School BusTata Hitachi 140,catterpiller wheel loader,second hand Hindustan wheel loader,second hand jcb wheel loader,BEML wheel Loader,Second Hand Catterpiler Bulldozer,Second Hand BEML Bulldozer,Secon Hand Komastu Bulldsozer,', '2024-07-25 06:08:33'),
(4, 6, 'TVS APACHE RTR', 'RTR 160', 'UP81AB1234', 'Two Wheeler', 'Bike', 'Petrol', 'Manual', 'BSGSG345345', 'HFYTYT1312312', 'TVS APache RTR 160', '2024-07-27 04:35:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrand`
--
ALTER TABLE `tblbrand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblvehicle`
--
ALTER TABLE `tblvehicle`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `bid` (`BrandID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbrand`
--
ALTER TABLE `tblbrand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblvehicle`
--
ALTER TABLE `tblvehicle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
