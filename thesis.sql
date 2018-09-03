-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 08:37 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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
  `driver_name` varchar(50) NOT NULL,
  `helper_name` varchar(50) NOT NULL,
  `helper_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `waybill`, `date`, `cust_type`, `custname`, `cargo`, `product`, `description`, `pieces`, `model`, `driver_no`, `destination`, `price`, `license_no`, `driver_name`, `helper_name`, `helper_no`) VALUES
(23, 123, '0888-09-03', '', '', 'LCL 1x40', 'Sample', 'sample', 500, 'FVZ 1400', '', 'Sampleee', 0, 'SAM 123', 'Driver Sample', 'Helper Two', '');

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
(0, 'Xylem Water System', 'Broker/Agent', '123456789', '123456789', 'sample@sample.com', 12345678, '', '0005-05-05', 0, '2018-09-04 00:32:07', '2018-09-04 00:32:07', 'default.jpg', 0, 0),
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

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`img`, `id`, `driver_no`, `fname`, `mname`, `lname`, `password`, `repass`, `email`, `contact`, `gender`, `expire`, `date`, `status`, `position`) VALUES
('default.jpg', 1, 'ACL 1245115', 'Driver', 'A', 'Sample', '123456789', '123456789', 'sample@sample.com', 12345678, 'M', '2038-03-03', '2018-09-04', 1, 1),
('default.jpg', 2, 'ACL 1245154', 'Helper', 'A', 'Sample', '123456789', '123456789', 'sample@sample.com', 1212121, 'M', '2021-07-15', '2018-09-04', 0, 2),
('default.jpg', 7, 'ACL 12445', 'Helper', '', 'Two', '123456789', '123456789', 'sample@sample.com', 5454545, 'M', '5554-04-05', '5455-05-04', 1, 2);

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
-- Dumping data for table `truck`
--

INSERT INTO `truck` (`id`, `img`, `brand`, `model`, `year`, `gvm`, `gcm`, `power`, `license_no`, `insurance`) VALUES
(1, 'default.jpg', 'Isuzu', 'FVZ 1400', 2007, 26000, 36000, '255', 'YU 123', '123456789'),
(2, 'default.jpg', 'Sample', 'Sample', 1996, 45555, 50000, '455', 'SAM 123', '123');

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
  ADD KEY `driverfname` (`driver_name`) USING BTREE,
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
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `truck`
--
ALTER TABLE `truck`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
