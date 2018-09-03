-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 06:22 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(50) NOT NULL,
  `waybill` int(50) NOT NULL,
  `date` date NOT NULL,
  `cust_type` varchar(50) NOT NULL,
  `custname` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `pieces` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `driver_no` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `license_no` varchar(50) NOT NULL,
  `driver_fname` varchar(50) NOT NULL,
  `driver_mname` varchar(50) NOT NULL,
  `driver_lname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `waybill`, `date`, `cust_type`, `custname`, `cargo`, `product`, `description`, `pieces`, `model`, `driver_no`, `destination`, `price`, `license_no`, `driver_fname`, `driver_mname`, `driver_lname`) VALUES
(23, 0, '2018-09-03', '', '', 'LCL 1x40', 'Sample', 'sample', 500, '', '', 'Sampleee', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cust_type` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `repass` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `date` date NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(50) NOT NULL,
  `user_type` int(1) NOT NULL,
  `user_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `cust_type`, `password`, `repass`, `email`, `contact`, `gender`, `date`, `status`, `created`, `updated`, `img`, `user_type`, `user_id`) VALUES
(4, 'Xylem Water System', 'Broker/Agent', '123456789', '123456789', 'water@sample.com', 99999999, '', '2016-07-03', 1, '2018-09-04 00:04:35', '2018-09-04 00:04:35', 'C:\\xampp\\htdocs\\thefourcasters\\images\\default.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `img` varchar(50) NOT NULL,
  `id` int(100) NOT NULL,
  `driver_no` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(12) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `expire` date NOT NULL,
  `date` date NOT NULL,
  `status` int(1) NOT NULL,
  `position` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(12) NOT NULL,
  `gender` char(1) NOT NULL,
  `status` int(1) NOT NULL,
  `repass` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `img`, `fname`, `lname`, `mname`, `password`, `email`, `contact`, `gender`, `status`, `repass`, `date`, `user_id`) VALUES
(1, 'C:\\xampp\\htdocs\\thefourcasters\\images\\default.jpg', 'Anthony', 'Ane', 'L.', '123456789', 'anthonyjarlane@yahoo.com', 2147483647, 'M', 1, '123456789', '1998-05-28', 1),
(2, 'default.jpg', 'Anthony1', 'Ane', 'L.', '123456789', 'a@yahoo.com', 2147483647, 'M', 0, '123456789', '2018-05-05', 1),
(3, 'default.jpg', 'Leona', 'Kim', 'Marj', '123456789', 'dso@yahoo.com', 2147483647, 'F', 0, '123456789', '2009-12-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `truck`
--

CREATE TABLE `truck` (
  `id` int(100) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `year` int(4) NOT NULL,
  `gvm` int(50) NOT NULL,
  `gcm` int(50) NOT NULL,
  `power` varchar(50) NOT NULL,
  `license_no` varchar(50) NOT NULL,
  `insurance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cust_type` (`cust_type`),
  ADD KEY `custname` (`custname`),
  ADD KEY `license_no` (`license_no`),
  ADD KEY `model` (`model`),
  ADD KEY `driverfname` (`driver_fname`) USING BTREE,
  ADD KEY `driver_mname` (`driver_mname`),
  ADD KEY `driver_lname` (`driver_lname`),
  ADD KEY `driver_no` (`driver_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cust_type` (`cust_type`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `position` (`position`),
  ADD KEY `fname` (`fname`),
  ADD KEY `mname` (`mname`,`lname`),
  ADD KEY `lname` (`lname`),
  ADD KEY `driver_no` (`driver_no`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `truck`
--
ALTER TABLE `truck`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `license_no` (`license_no`),
  ADD KEY `model` (`model`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
<<<<<<< HEAD
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
=======
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> a200a7a3190f2b8c0d472385a0fddc7e82276dec

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `truck`
--
ALTER TABLE `truck`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
<<<<<<< HEAD
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `cust_type` FOREIGN KEY (`cust_type`) REFERENCES `booking` (`cust_type`),
  ADD CONSTRAINT `name` FOREIGN KEY (`name`) REFERENCES `booking` (`custname`),
  ADD CONSTRAINT `userid` FOREIGN KEY (`user_id`) REFERENCES `staff` (`user_id`);

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_fname` FOREIGN KEY (`fname`) REFERENCES `booking` (`driver_fname`),
  ADD CONSTRAINT `driver_lname` FOREIGN KEY (`lname`) REFERENCES `booking` (`driver_lname`),
  ADD CONSTRAINT `driver_mname` FOREIGN KEY (`mname`) REFERENCES `booking` (`driver_mname`),
  ADD CONSTRAINT `driver_no` FOREIGN KEY (`driver_no`) REFERENCES `booking` (`driver_no`);

--
-- Constraints for table `truck`
--
ALTER TABLE `truck`
  ADD CONSTRAINT `license_no` FOREIGN KEY (`license_no`) REFERENCES `booking` (`license_no`),
  ADD CONSTRAINT `model` FOREIGN KEY (`model`) REFERENCES `booking` (`model`);
=======
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `cust_type` FOREIGN KEY (`cust_type`) REFERENCES `customer` (`cust_type`),
  ADD CONSTRAINT `custname` FOREIGN KEY (`custname`) REFERENCES `customer` (`name`),
  ADD CONSTRAINT `driver_fname` FOREIGN KEY (`driver_fname`) REFERENCES `driver` (`fname`),
  ADD CONSTRAINT `driver_lname` FOREIGN KEY (`driver_lname`) REFERENCES `driver` (`lname`),
  ADD CONSTRAINT `driver_mname` FOREIGN KEY (`driver_mname`) REFERENCES `driver` (`mname`),
  ADD CONSTRAINT `driver_no` FOREIGN KEY (`driver_no`) REFERENCES `driver` (`driver_no`),
  ADD CONSTRAINT `license_no` FOREIGN KEY (`license_no`) REFERENCES `truck` (`license_no`),
  ADD CONSTRAINT `model` FOREIGN KEY (`model`) REFERENCES `truck` (`model`);
>>>>>>> a200a7a3190f2b8c0d472385a0fddc7e82276dec
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
