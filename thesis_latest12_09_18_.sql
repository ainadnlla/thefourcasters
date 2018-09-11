-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2018 at 07:16 PM
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
(25, 0, '2018-09-07', 'Broker/Agent', 'Xylem Water System', 'FCL 2x20', 'Sample', 'Sample', 100, 'RLP 377', '', 'MIP - Bulacan, Meycauayan (Alegro Foods)', 5000, '', 'Driver Sample', 'Helper Sample', ''),
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
(4, 'Xylem Water System', 'Broker/Agent', '123456789', '123456789', 'water@sample.com', '2147483647', '2016-07-03', 1, '2018-09-04 00:04:35', '2018-09-04 00:04:35', 'C:\\xampp\\htdocs\\thefourcasters\\images\\logo.jpg', 0, 0),
(5, 'dsa', 'Broker/Agent', '123456789', '123456789', 'anthonyjarlane@yahoo.com', '09174943817', '2018-08-10', 0, '2018-09-10 20:54:38', '2018-09-10 20:54:38', 'default.jpg', 0, 0),
(6, 'dsadsa ad dsa', '', '123456789', '123456789', '123@yahoo.com', '12345678901', '2018-08-10', 0, '2018-09-10 20:57:40', '2018-09-10 20:57:40', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `destination` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `destination`) VALUES
(1, 'MIP - Laguna, Binan (Wuerth Phils. Inc. Warehouse)'),
(2, 'MIP - Manila-South, Taguig, Bicutan (Northern Chem. Warehouse)'),
(3, 'MIP - Cavite, Dasmariñas, Paliparan Gov. Drive (Saffron Philippines, Inc.)\r\n'),
(4, 'MIP - Manila-North, Valenzuela, Bisalud Bagbauin (Evergreen Textile Printing)\r\n'),
(5, 'MIP - Manila-North, Valenzuela, Bartolome KM. 16 Mc Arthur (Sun Fortune Inc.)'),
(6, 'MIP - Manila-North, Valenzuela, Sitio Bisalud (Artos Textile Mills, Inc.)'),
(7, 'MIP - Manila-North, Caloocan, Sta. Quiteria (Alysons\' Warehouse)'),
(8, 'MIP - Manila-North, Valenzuela, Talipapa'),
(9, 'MIP - Manila-North, Valenzuela, Ugong'),
(10, 'MIP - Pampanga, Angeles, Balibago'),
(11, 'MIP - Pampanga, San Fernando'),
(12, 'MIP - Bulacan, Meycauayan (Alegro Foods)'),
(13, 'MIP - Cavite, Carmona Barrio Bancal (Mets Logistics, Inc.)'),
(14, 'MIP - Antipolo, Mambungan, Sumulong Highway (V&F Ice Plant)'),
(15, 'MIP - Anabu, Imus Cavite (Liwayway Marketing Corp.)'),
(16, 'MIP - Bulacan, Sta. Maria (Coastline Warehouse)'),
(17, 'MIP - Caloocan, Bagong Barrio (Coastline Truck Center)'),
(18, 'MIP - Bulacan, Marilao'),
(19, 'MIP - Bulacan, Guiguinto'),
(20, 'MIP - Laguna, Calamba (Xylem Water Systems Intl. Inc.)'),
(21, 'MIP - Batangas, Tabangao (Kepco IIijan Power Plant)'),
(22, 'MIP - Bulacan, Sta. Maria (Xylem Water Systems Intl. Inc.)'),
(23, 'MIP - Batangas (Xylem Water Systems Intl. Inc.)'),
(24, 'MIP - Manila-South, Muntinlupa, Tunasan (Stores Specialists Inc. / Rustans)'),
(25, 'MIP - Muntinlupa, Tunasan - (Altron Logistics Inc.)'),
(26, 'MIP - Bulacan, Meycauayan (Tripack)'),
(27, 'Harbor Center - Laguna, Calamba'),
(28, 'Harbor Center - Laguna, San Pedro'),
(29, 'Laguna, Calamba, Brgy. Batino - Bicol'),
(30, 'Laguna, Calamba, Brgy. Batino - Cavite'),
(31, 'Laguna, Calamba, Brgy. Batino - Laguna , San Pablo'),
(32, 'Laguna, Calamba, Brgy. Batino - Quezon Province, Tayabas'),
(33, 'MIP - Sta. Rosa, Balibago - Laguna (A Dimaguila Enterprises Inc.)'),
(34, 'MIP - Caloocan, Baesa'),
(35, 'MIP - Quezon City, Cubao, Tagumpay (Allied Botanical Corp.)'),
(36, 'MIP - Laguna, Calamba'),
(37, 'MIP - Manila , Mandaluyong'),
(38, 'MIP - Manila-South, Taguig, Bicutan'),
(39, 'MIP - Pangasinan, San Fabian'),
(40, 'MIP - Ilocos Sur, Vigan City'),
(41, 'MIP - Batangas, Brgy San Felipe Padre Garcia (BMEG Plant)'),
(42, 'MIP - Nueva Ecija'),
(43, 'PIER 16 - Pampanga, San Fernando'),
(44, 'Mabini External Warehouse - Padre Garcia Feed Pit-Agriking'),
(45, 'Mabini External Warehouse - Padre Garcia - Armor Feed'),
(46, 'Mabini External Warehouse - Lipa Feed Plant - Gro Power'),
(47, 'Mabini External Warehouse - Tanauan Feed Plant - Solid 1'),
(48, 'Mabini External Warehouse - Bauan Feed Plant - EC SCO'),
(49, 'Mabini External Warehouse - Lipa Feed Plant - Tower'),
(50, 'Batangas Golden Bay Warehouse - Pangasinan External Warehouse'),
(51, 'Batangas Golden Bay Warehouse - Batangas External Warehouse (Masaya)'),
(52, 'Batangas Golden Bay Warehouse - B-Meg Bataan Feed Plant'),
(53, 'San Miguel Mills Inc. - Tarlac External Warehouse'),
(54, 'Tarlac External Warehouse - B-Meg Bataan Feed Plant'),
(55, 'Pangasinan External Warehouse - Sto Tomas Feed Plant-Welgro');

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
('C:\\xampp\\htdocs\\thefourcasters\\images\\logo.png', 1, 'ACL 1245115', '2038-03-03', 'Driver', 'A', 'Sample', 'sample@sample.com', '123456789', '123456789', 'M', '2018-09-09', '12345678910', 6, '2018-09-04', 1, '13:00:00', '17:00:00', 'Tuesday'),
('default.jpg', 2, 'ACL 1245154', '2021-07-15', 'Helper', 'A', 'Sample', 'sample@sample.com', '123456789', '123456789', 'M', '0000-00-00', '1212121', 0, '2018-09-04', 1, '00:00:00', '00:00:00', 'Thursday'),
('default.jpg', 7, 'ACL 12445', '5554-04-05', 'Helper', '', 'Two', 'sample@sample.com', '123456789', '123456789', 'M', '1992-04-05', '5454545', 0, '5455-05-04', 1, '00:00:00', '00:00:00', 'Monday,Tuesday,Wednesday'),
('C:\\xampp\\htdocs\\thefourcasters\\images\\logo.jpg', 8, '321', '2018-06-10', 'dsadsa', 'ad', 'dsa', '123@yahoo.com', '123456789', '123456789', 'M', '2018-07-10', '12345678901', 15, '2018-07-10', 1, '00:00:00', '00:00:00', ''),
('', 9, '', '0000-00-00', '', NULL, '', '', '', '', '', '0000-00-00', '', 0, '0000-00-00', 0, '00:00:00', '00:00:00', 'Tuesday'),
('', 10, '', '0000-00-00', '', NULL, '', '', '', '', '', '0000-00-00', '', 0, '0000-00-00', 0, '00:00:00', '00:00:00', 'Tuesday'),
('', 11, '', '0000-00-00', '', NULL, '', '', '', '', '', '0000-00-00', '', 0, '0000-00-00', 0, '00:00:00', '00:00:00', 'Tuesday'),
('default.jpg', 12, '123', '2018-09-11', 'Xylem', 'Water', 'System', 'water@sample.com', '123456789', '123456789', 'M', '2018-09-11', '09173338993', 1545, '2018-09-11', 0, '04:42:00', '04:42:00', 'Thu');

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
('default.jpg', 1, '', '0000-00-00', 'Helper', '', 'Sample', 'sample@sample.com', '123456789', '123456789', '1995-06-13', 'M', '999999999', '2018-09-18', 0, 0, '00:00:00', '00:00:00', 'Tuesday, Wednesday'),
('default.jpg', 2, '321', '2018-07-11', 'Xylem', 'Water', 'System', 'water@sample.com', '123456789', '123456789', '2018-08-11', 'M', '09173338993', '2018-09-11', 0, 0, '00:00:00', '00:00:00', '');

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
('C:\\xampp\\htdocs\\thefourcasters\\images\\logo.png', 5, 'Sample', 'Sample', '', 'M', '1998-05-05', '12345678901', '2005-04-15', 'sample@sample.com', '123456789', '123456789', 1, 4),
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
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `helper`
--
ALTER TABLE `helper`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
