-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2018 at 05:18 PM
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
(1, 'Wuerth Phils. Inc', '', '123456789', '123456789', 'wuerthphilsinc@gmail.com', '09147852136', '0000-00-00', 0, '2018-09-13 15:51:21', '2018-09-13 15:51:21', 'default.jpg', 0, 0),
(2, 'Northern Chemical Sales Inc.', '', '123456789', '123456789', 'northernchemci@gmail.com', '09147852136', '0000-00-00', 0, '2018-09-13 15:51:22', '2018-09-13 15:51:22', 'default.jpg', 0, 0),
(3, 'Alysons Chemical Enterprises Inc.', '', '123456789', '123456789', 'alysonschemic@gmail.com', '09147852136', '0000-00-00', 0, '2018-09-13 15:51:22', '2018-09-13 15:51:22', 'default.jpg', 0, 0),
(4, 'Breakthru Cleaning Agent', '', '123456789', '123456789', 'breakthru@gmail.com', '09147852136', '0000-00-00', 0, '2018-09-13 15:52:32', '2018-09-13 15:52:32', 'default.jpg', 0, 0),
(5, 'MyWine - the best italian wine', '', '123456789', '123456789', 'mywine@gmail.com', '09147852136', '0000-00-00', 0, '2018-09-13 15:52:32', '2018-09-13 15:52:32', 'default.jpg', 0, 0),
(6, 'Wacker Machines Supplies Corp.', '', '123456789', '123456789', 'wacker@gmail.com', '09147852136', '0000-00-00', 0, '2018-09-13 15:53:20', '2018-09-13 15:53:20', 'default.jpg', 0, 0),
(7, 'Marilou R. Arevalo (Bong)', '', '123456789', '123456789', 'bong@gmail.com', '09147852136', '0000-00-00', 0, '2018-09-13 15:53:20', '2018-09-13 15:53:20', 'default.jpg', 0, 0),
(8, 'Coastline Truck Center', '', '123456789', '123456789', 'coastline@gmail.com', '09147852136', '0000-00-00', 0, '2018-09-13 15:55:58', '2018-09-13 15:55:58', 'default.jpg', 0, 0),
(9, 'Angelogistics Co. Ltd - Pier Dispatch ', '', '123456789', '123456789', 'dispatch@gmail.com', '09147852136', '0000-00-00', 0, '2018-09-13 15:55:58', '2018-09-13 15:55:58', 'default.jpg', 0, 0),
(10, 'Continental Cargo Carriers Inc. ', '', '123456789', '123456789', 'continental@gmail.com', '09147852136', '0000-00-00', 0, '2018-09-13 15:55:58', '2018-09-13 15:55:58', 'default.jpg', 0, 0),
(11, 'Asiaworld Transport Phils.', '', '123456789', '123456789', 'asiaworld@gmail.com', '09147852136', '0000-00-00', 0, '2018-09-13 15:55:58', '2018-09-13 15:55:58', 'default.jpg', 0, 0),
(12, 'Altron Logistics Inc.', '', '123456789', '123456789', 'altron@gmail.com', '09147852136', '0000-00-00', 0, '2018-09-13 15:55:58', '2018-09-13 15:55:58', 'default.jpg', 0, 0);

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
('C:\\Users\\Anthony\\Pictures\\321312312.jpg', 3, 'Leona', 'Kim', 'Marj', 'F', '0000-00-00', '09173338993', '2009-12-03', 'dso@yahoo.com', '123456789', '123456789', 0, 1),
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
(1, 'default.jpg', 'FUSO ', 'RLP 377', 'REBUILT TRUCK', '0386-00000240945', '8DC9502620', 'FP54JD-520907', 10500, 210, 10290, 2011, 0),
(2, 'default.jpg', 'ISUZU', 'ABC 8771', 'REBUILT TRUCK', '1301-00000503950', '10PD1-746850', 'EXR71D-3000004', 10500, 5250, 5250, 2013, 0),
(3, 'default.jpg', 'SINOTRUK HOWO', 'ABF 3040', 'REBUILT TRUCK', '1301-00000410217', 'WD61547150417009747', 'LZZ5CCSC7FA093009', 4000, 4000, 4000, 2015, 0),
(4, 'default.jpg', 'FAW', '130104', 'REBUILT TRUCK', '1301-00000891410', 'CA6DL237E3F52770098', 'LFWNHXPC6G1F58891', 8000, 4000, 4000, 2016, 0),
(5, 'default.jpg', 'FAW', '130104', 'REBUILT TRUCK', '1301-00000891408', 'CA6DL237E3F52770099', 'LFWNHXPC6G1F58890', 8000, 4000, 4000, 2016, 0),
(6, 'default.jpg', 'FAW', '130102', 'REBUILT TRUCK', '1301-00001079279', 'CA6DL237E3F52935945', 'LFWSRXPJ7H1E61858', 8000, 4000, 4000, 2017, 0),
(7, 'default.jpg', 'MTSHUBISHI - FUSO', 'RCE 120', 'DROPSIDE', '0386-00000094576', '8DC11-393526', 'FU419U-540165', 5000, 4000, 4000, 1991, 0),
(8, 'default.jpg', 'FUSO TRUCK', 'RFR 667', 'DROPSIDE', '0386-00000149453', '8DC11-350914', 'FP411D-550069', 5000, 3000, 4000, 1991, 0),
(9, 'default.jpg', 'FUSO TRUCK', 'RGY 294', 'DROPSIDE', '0386-00000171817', '8DC9-430796', 'FP415D-650542', 5000, 3000, 4000, 1995, 0),
(10, 'default.jpg', 'FUSO TRUCK', 'RLE 993', 'DROPSIDE', '0386-00000231282', '6D40235396', 'FP445D-550002', 5000, 3000, 4000, 1999, 0),
(11, 'default.jpg', 'ISUZU', 'AAQ9266', 'DROPSIDE', '0386-00000309296', '6WG1-405485', 'EXR50D-3000096', 5000, 3000, 4000, 2000, 0),
(12, 'default.jpg', 'ISUZU', 'AAQ 7784', 'DROPSIDE', '0386-00000307618', '6WG1203422', 'EXR81D-3000080', 5000, 3000, 4000, 2000, 0),
(13, 'default.jpg', 'ISUZU ELF', 'RKN 816', 'DROPSIDE TRUCK', '0386-00000219894', '4BE1-922286', 'NPR58P-7101502', 5000, 3000, 4000, 2000, 0),
(14, 'default.jpg', 'ISUZU TRUCK', 'RLD 965', 'DROPSIDE TRUCK', '0386-00000232952', '6WA1-108543', 'JALEXR50DT3000012', 5000, 3000, 4000, 2001, 0),
(15, 'default.jpg', 'FUSO TRUCK', 'UIM 308', 'REBUILT TRUCK', '1312-00000378407', '8DC11503046', 'FP419D560055', 5000, 3000, 4000, 2011, 0),
(16, 'default.jpg', 'ISUZU', 'RNK 276', 'REBUILT TRUCK', '0386-00000285353', '10PD1778910', 'EXR18DM3000017', 5000, 3000, 4000, 2013, 0),
(17, 'default.jpg', 'ISUZU', 'RNK 277', 'REBUILT TRUCK', '0386-00000285354', '10PD1-758483', 'EXR18DN3000425', 5000, 3000, 4000, 2013, 0),
(18, 'default.jpg', 'ISUZU REBUILT', 'ABA 9575', 'REBUILT TRUCK', '1301-00000145965', '10PD1766803', 'EXR82D13000455', 5000, 3000, 4000, 2014, 0);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `helper`
--
ALTER TABLE `helper`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `truck`
--
ALTER TABLE `truck`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
