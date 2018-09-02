-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2018 at 02:22 PM
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
  `truck` varchar(50) NOT NULL,
  `license_no` varchar(50) NOT NULL,
  `driver_no` varchar(50) NOT NULL,
  `drivername` varchar(50) NOT NULL,
  `cond_no` varbinary(50) NOT NULL,
  `condname` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `conductor`
--

CREATE TABLE `conductor` (
  `img` varchar(50) NOT NULL,
  `id` int(100) NOT NULL,
  `conductornum` varchar(50) NOT NULL,
  `expire` date NOT NULL,
  `image` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(25) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `repass` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `date` date NOT NULL,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_type` varchar(1) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conductor`
--

INSERT INTO `conductor` (`img`, `id`, `conductornum`, `expire`, `image`, `fname`, `mname`, `lname`, `email`, `password`, `repass`, `gender`, `date`, `updated`, `created`, `user_type`, `contact`) VALUES
('', 3, 'ACLHL000000017', '0000-00-00', '', 'Z', 'A', 'Ubaldo', 'sample@sample.com', '123456789', '123456789', 'M', '0000-00-00', '2018-07-29 01:13:32', '2018-07-29 01:13:32', '', 2147483647);

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
(8, 'Xylem Water System', 'Broker/Agent', '123456789', '123456789', 'XylemWaterSystem@sample.com', 999, '', '0000-00-00', 0, '2018-08-28 23:51:06', '2018-08-28 23:51:06', '', 0, 0),
(9, '123 123 123', 'In-house Brokerage', '123456789', '123456789', 'a@yahoo.com', 2147483647, '', '0000-00-00', 0, '2018-08-30 14:36:57', '2018-08-30 14:36:57', '', 0, 0),
(10, 'Sample', 'In-house Brokerage', '123456789', '123456789', 'sample@sample.com', 0, '', '2018-09-02', 1, '2018-09-02 00:51:10', '2018-09-02 00:51:10', '', 0, 0),
(11, 'A', 'Local/Sub-contractor', '123456789', '123456789', 'sample@sample.com', 111111111, '', '0024-12-24', 1, '2018-09-02 00:54:55', '2018-09-02 00:54:55', '', 0, 0),
(12, 'B', 'In-house Brokerage', '123456789', '123456789', 'sample@sample.com', 1111, '', '2018-09-02', 0, '2018-09-02 00:57:12', '2018-09-02 00:57:12', '', 0, 0),
(13, 'C', 'Broker/Agent', '123456789', '123456789', 'sample@sample.com', 566, '', '2000-05-05', 0, '2018-09-02 01:01:37', '2018-09-02 01:01:37', '', 0, 0),
(14, 'Aina', 'Broker/Agent', '123456789', '123456789', 'customer@gmail.com', 91919191, '', '2018-09-02', 0, '2018-09-02 04:33:53', '2018-09-02 04:33:53', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `img` varchar(50) NOT NULL,
  `id` int(100) NOT NULL,
  `drivernum` varchar(50) NOT NULL,
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

INSERT INTO `driver` (`img`, `id`, `drivernum`, `fname`, `mname`, `lname`, `password`, `repass`, `email`, `contact`, `gender`, `expire`, `date`, `status`, `position`) VALUES
('', 1, 'ACLDI010987016', 'A', 'A', 'Villamor', '123456789', '123456789', 'sample@sample.com', 12354, 'M', '0000-00-00', '0000-00-00', 1, 2),
('', 2, 'ACLDI010987016', 'Sample', 'a', 'sample', '123456789', '123456789', 'sample@sample.com', 123456789, 'M', '2018-09-25', '2018-09-13', 1, 1);

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
(17, 'logo.jpg', 'c', 'c', '', '123456789', 'sample@sample.com', 100, 'M', 1, '123456789', '2018-09-21', 0),
(20, 'default.jpg', 'Aina', 'Sales', '', '123456789', 'ainadrsales@gmail.com', 2147483647, 'F', 1, '123456789', '0000-00-00', 0),
(21, '', 'Anthony', 'Ane', 'L.', '123456789', 'anthonyjarlane@yahoo.com', 2147483647, 'M', 0, '123456789', '0000-00-00', 0),
(22, 'WIN_20180324_00_50_35_Pro.jpg', 'Lanz', 'Manalo', 'O.', '123456789', 'lanzmanalo@gmail.com', 0, 'M', 1, '123456789', '2018-08-31', 0),
(23, '', 'Sample', 'Sample', 'S', '123456789', 'sample@sample.com', 90090909, 'F', 1, '123456789', '2018-10-17', 0),
(24, '', 'Try', 'Sample', '', '123456789', 'sample@sample.com', 0, 'M', 0, '123456789', '2022-01-30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `truck`
--

CREATE TABLE `truck` (
  `id` int(100) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `license_no` varchar(20) NOT NULL,
  `insurance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truck`
--

INSERT INTO `truck` (`id`, `img`, `license_no`, `insurance`) VALUES
(1, '0', 'YU 123', 'Blah'),
(2, '0', '123456', '5-5-5'),
(4, 'logo.jpg', '4654654', 'Blah'),
(10, '', '1234567', '5-5-5'),
(12, '', '46546541', '5-5-5'),
(14, 'default.jpg', '5050505', '5050505');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`user_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `license_no` (`license_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conductor`
--
ALTER TABLE `conductor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `truck`
--
ALTER TABLE `truck`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `userid` FOREIGN KEY (`user_id`) REFERENCES `staff` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
