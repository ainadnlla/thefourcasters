-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2018 at 10:08 AM
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
  `plate_no` varchar(50) NOT NULL,
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

INSERT INTO `booking` (`id`, `waybill`, `date`, `cust_type`, `custname`, `cargo`, `product`, `description`, `pieces`, `plate_no`, `driver_no`, `destination`, `price`, `license_no`, `driver_name`, `helper_name`, `helper_no`) VALUES
(23, 123, '0888-09-03', '', '', 'LCL 1x40', 'Sample', 'sample', 500, 'RLP 377', '', 'Sampleee', 5000, 'SAM 123', 'Driver Sample', 'Driver Sample', ''),
(24, 1542, '2019-09-07', 'Broker/Agent', 'Xylem Water System', 'LCL 1x40', 'Frozen Goods', 'Chilled Goods', 150, 'RLP 377', '', 'Manila', 5000, '', 'Driver Sample', 'Driver Sample', ''),
(25, 0, '2018-09-07', 'Broker/Agent', 'Xylem Water System', 'FCL 2x20', 'Sample', 'Sample', 100, '', '', 'Manila', 0, '', '', '', ''),
(26, 0, '2019-09-07', 'Broker/Agent', 'Xylem Water System', 'FCL 1x40', 'Sample', 'Sample', 150, '', '', 'Manila', 0, '', '', '', '');

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
  `contact` varchar(11) NOT NULL,
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

INSERT INTO `customer` (`id`, `name`, `cust_type`, `password`, `repass`, `email`, `contact`, `date`, `status`, `created`, `updated`, `img`, `user_type`, `user_id`) VALUES
(1, 'Xylem Water System', 'Broker/Agent', '123456789', '123456789', 'sample@sample.com', '12345678', '0005-05-05', 0, '2018-09-04 00:32:07', '2018-09-04 00:32:07', 'default.jpg', 0, 0),
(4, 'Xylem Water System', 'Broker/Agent', '123456789', '123456789', 'water@sample.com', '2147483647', '2016-07-03', 1, '2018-09-04 00:04:35', '2018-09-04 00:04:35', 'C:\\xampp\\htdocs\\thefourcasters\\images\\logo.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `img` varchar(50) NOT NULL,
  `id` int(100) NOT NULL,
  `driver_no` varchar(50) NOT NULL,
  `expire` date NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repass` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `birthday` date NOT NULL,
  `contact` varchar(11) NOT NULL,
  `experience` int(2) NOT NULL,
  `date` date NOT NULL,
  `status` int(1) NOT NULL,
  `timein` time NOT NULL,
  `timeout` time NOT NULL,
  `weekday` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`img`, `id`, `driver_no`, `expire`, `fname`, `mname`, `lname`, `email`, `password`, `repass`, `gender`, `birthday`, `contact`, `experience`, `date`, `status`, `timein`, `timeout`, `weekday`) VALUES
('default.jpg', 1, 'ACL 1245115', '2038-03-03', 'Driver', 'A', 'Sample', 'sample@sample.com', '123456789', '123456789', 'M', '2018-09-09', '12345678910', 6, '2018-09-04', 1, '13:00:00', '17:00:00', 'Tuesday'),
('default.jpg', 2, 'ACL 1245154', '2021-07-15', 'Helper', 'A', 'Sample', 'sample@sample.com', '123456789', '123456789', 'M', '0000-00-00', '1212121', 0, '2018-09-04', 1, '00:00:00', '00:00:00', 'Thursday'),
('default.jpg', 7, 'ACL 12445', '5554-04-05', 'Helper', '', 'Two', 'sample@sample.com', '123456789', '123456789', 'M', '1992-04-05', '5454545', 0, '5455-05-04', 1, '00:00:00', '00:00:00', 'Monday,Tuesday,Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `helper`
--

CREATE TABLE `helper` (
  `img` varchar(50) NOT NULL,
  `id` int(100) NOT NULL,
  `driver_no` varchar(50) NOT NULL,
  `expire` date NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repass` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `status` int(1) NOT NULL,
  `experience` int(2) NOT NULL,
  `timein` time NOT NULL,
  `timeout` time NOT NULL,
  `weekday` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `helper`
--

INSERT INTO `helper` (`img`, `id`, `driver_no`, `expire`, `fname`, `mname`, `lname`, `email`, `password`, `repass`, `birthday`, `gender`, `contact`, `date`, `status`, `experience`, `timein`, `timeout`, `weekday`) VALUES
('default.jpg', 1, '', '0000-00-00', 'Helper', '', 'Sample', 'sample@sample.com', '123456789', '123456789', '1995-06-13', 'M', '999999999', '2018-09-18', 0, 0, '00:00:00', '00:00:00', 'Tuesday, Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `img` varchar(50) NOT NULL,
  `id` int(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `gender` char(1) NOT NULL,
  `birthday` date NOT NULL,
  `contact` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repass` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `priv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`img`, `id`, `fname`, `lname`, `mname`, `gender`, `birthday`, `contact`, `date`, `email`, `password`, `repass`, `status`, `priv`) VALUES
('default.jpg', 1, 'Anthony', 'Ane', 'L.', 'M', '0000-00-00', '09191245852', '1998-05-28', 'anthonyjarlane@yahoo.com', '123456789', '123456789', 0, 0),
('default.jpg', 2, 'Anthony1', 'Ane', 'L.', 'M', '0000-00-00', '0', '2018-05-05', 'a@yahoo.com', '123456789', '123456789', 0, 1),
('default.jpg', 3, 'Leona', 'Kim', 'Marj', 'F', '0000-00-00', '0', '2009-12-03', 'dso@yahoo.com', '123456789', '123456789', 0, 1),
('logo.jpg', 4, 'Aina', 'Sales', 'Rongavilla', 'F', '1998-11-04', '09192753740', '2018-09-05', 'ainadrsales@gmail.com', '123456789', '123456789', 1, 1),
('default.jpg', 5, 'Sample', 'Sample', '', 'M', '1998-05-05', '0', '2005-04-15', 'sample@sample.com', '123456789', '123456789', 0, 0),
('', 6, 'dsadsa', 'dsa', 'ad', 'F', '2018-09-08', '0', '2018-09-08', '123@yahoo.com', '123456789', '123456789', 1, 2),
('', 7, 'sample3', 'sample3', 'sample', 'M', '2018-07-08', '2147483647', '2016-08-08', 'sample3@sample.com', '123456789', '123456789', 1, 0),
('default.jpg', 8, 'Aina Daniella', 'Sales', 'Rongavilla', 'F', '1998-04-11', '09192753740', '2018-11-29', 'ainadrsales@gmail.com', 'rongavilla', 'rongavilla', 0, 0),
('default.jpg', 9, 'Daniella', 'Sales', '', 'F', '1998-04-11', '09192753740', '2018-09-09', 'ainadrsales@gmail.com', '123456789', '123456789', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `truck`
--

CREATE TABLE `truck` (
  `id` int(100) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `brand` varchar(50) NOT NULL,
  `plate_no` varchar(50) NOT NULL,
  `series` varchar(50) NOT NULL,
  `mvfile_no` varchar(50) NOT NULL,
  `engine_no` varchar(50) NOT NULL,
  `chassis_no` varchar(50) NOT NULL,
  `grosswt` int(50) NOT NULL,
  `netwt` int(50) NOT NULL,
  `netcap` int(50) NOT NULL,
  `year` int(4) NOT NULL,
  `old` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truck`
--

INSERT INTO `truck` (`id`, `img`, `brand`, `plate_no`, `series`, `mvfile_no`, `engine_no`, `chassis_no`, `grosswt`, `netwt`, `netcap`, `year`, `old`) VALUES
(1, 'default.jpg', 'Isuzu', '', 'FVZ 1400', '', '', '', 0, 0, 0, 0, 0),
(2, 'default.jpg', 'Sample', '', 'Sample', '', '', '', 0, 0, 0, 0, 0),
(3, 'default.jpg', 'FUSO ', 'RLP 377', 'REBUILT TRUCK', '0386-00000240945', '8DC9502620', 'FP54JD-520907', 10500, 210, 10290, 2011, 0);

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
-- Indexes for table `helper`
--
ALTER TABLE `helper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truck`
--
ALTER TABLE `truck`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `helper`
--
ALTER TABLE `helper`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `truck`
--
ALTER TABLE `truck`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
