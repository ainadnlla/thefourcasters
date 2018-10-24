-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 08:34 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
  `destinationid` int(100) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `plate_no` varchar(50) NOT NULL,
  `drivername` varchar(50) NOT NULL,
  `driverid` int(11) NOT NULL,
  `helpername` varchar(50) NOT NULL,
  `helperid` int(100) NOT NULL,
  `action` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `waybill`, `date`, `cust_type`, `custname`, `cargo`, `product`, `description`, `pieces`, `destinationid`, `destination`, `price`, `plate_no`, `drivername`, `driverid`, `helpername`, `helperid`, `action`) VALUES
(1, 1664, '2018-10-03', 'Broker/Agent', 'Wuerth Phils. Inc', 'FCL 1x40', 'Paper Products', 'Printing paper, paper labels, cardboard boxes and wood pellets', 100, 1, 'MIP - Laguna, Binan (Wuerth Phils. Inc. Warehouse)', 18000, 'ABC 8771', 'Inigo Rafaeles', 3, 'Virgilio Jaballa', 12, 1),
(2, 9673, '2018-09-29', '', 'Breakthru Cleaning Agent', 'LCL (ELF)', 'Clothing', 'Not fragile', 150, 9, 'MIP - Manila-North, Valenzuela, Ugong', 12000, 'RLP 377', 'Jeremy Lansang', 8, 'Nino Altamia', 21, 1),
(3, 1643, '2018-10-04', '', 'Alysons Chemical Enterprises Inc.', 'FCL 1x45', 'Frozen Goods', 'San Miguel Tender Juicy Hotdogs', 500, 38, 'MIP - Manila-South, Taguig, Bicutan', 9000, 'RLP 377', 'Lemuel Catalan', 12, 'Elembert Rodriguez', 5, 0),
(4, 8432, '2018-09-29', '', 'MyWine - the best italian wine', 'FCL 1x20', 'Liquior and Beverages', 'Wine from Italy', 50, 19, 'MIP - Bulacan, Guiguinto', 13500, '130104', 'Jeremy Lansang', 8, 'Nino Altamia', 21, 2),
(5, 2570, '2018-11-01', '', 'Continental Cargo Carriers Inc. ', 'LCL 1x40', 'Hazardous substances', 'Hazardous substances, such as explosives or chemicals. Handle with care.', 99, 9, 'MIP - Manila-North, Valenzuela, Ugong', 13500, 'ABA 9575', 'Joshua', 4, 'Jason Ablazo', 5, 0),
(6, 4962, '2018-10-05', '', 'Angelogistics Co. Ltd - Pier Dispatch ', 'LCL 1x40', 'Furnitures', 'Sofa Set ', 3, 38, 'MIP - Manila-South, Taguig, Bicutan', 10000, 'RNK 277', 'Ernesto Baquiran', 15, 'Lito Catalan Jr.', 15, 1),
(7, 1619, '2018-10-09', '', 'Marilou R. Arevalo (Bong)', 'FCL 1x20', 'Insulation Foam and Roof', '2x2mm Roof and Foam 19x67', 1, 2, 'MIP - Manila-South, Taguig, Bicutan (Northern Chem', 5000, 'RLP 377', 'Ernie Saavedra', 2, 'Dario Traquina', 2, 0),
(8, 2623, '2018-10-06', '', 'Marilou R. Arevalo (Bong)', 'FCL 1x20', 'Insulation Foam and Roof', '2x2mm Roof and Foam 19x67', 3, 34, 'MIP - Caloocan, Baesa', 19590, '130104', 'Jeremy Lansang', 8, 'Nino Altamia', 21, 1),
(9, 5190, '2018-10-17', '', 'Wacker Machines Supplies Corp.', 'FCL 2x20', 'Machinery Supplies', 'Machiner Supplies by NBS14', 50, 37, 'MIP - Manila , Mandaluyong', 25000, 'UIM 308', 'Remante Ibanez', 14, 'Virgilio Jaballa', 12, 1),
(10, 1809, '2018-10-05', '', 'Coastline Truck Center', 'LCL 1x40', 'Dispenser Material', 'H2O Water Dispenser Aquabest', 100, 0, 'MIP - Bulacan, Sta. Maria (Coastline Warehouse)', 20000, 'ABF 3040', 'Ernesto Baquiran', 15, 'Berto Lozada', 7, 1),
(11, 15124, '2018-10-20', 'Local/Sub-contractor', 'Altron Logistics Inc.', 'LCL (ELF)', 'Frozen Goods', 'Chilled Goods', 10, 11, 'MIP - Pampanga, San Fernando', 1000, 'ABA 9575', 'Jeremy Lansang', 8, 'Nino Altamia', 21, 0);

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
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `cust_type`, `password`, `repass`, `email`, `contact`, `date`, `status`, `created`, `updated`, `img`) VALUES
(1, 'Kargamine Tool Inc.', 'Local/Sub-contractor', '123456789', '123456789', 'kargamin@gmail.com', '09154269173', '2013-08-21', 0, '2018-10-20 21:24:52', '2018-10-20 21:24:52', 'default.jpg'),
(2, 'San Miguel Shipping and Lighterage Corp.', 'Local/Sub-contractor', '123456789', '123456789', 'sanmiguelcorp@gmail.com', '09150138304', '2014-11-01', 0, '2018-10-20 21:24:52', '2018-10-20 21:24:52', 'default.jpg'),
(3, 'Mira Raquel Suriben', 'Broker/Agent', '123456789', '123456789', 'miraquel@gmail.com', '09994736181', '2013-10-11', 0, '2018-10-20 21:24:52', '2018-10-20 21:24:52', 'default.jpg'),
(4, 'NALM Trading (Reymark V. Gador)', 'In-house Brokerage', '123456789', '123456789', 'nalm@gmail.com', '09170143697', '2018-02-25', 0, '2018-10-20 21:24:52', '2018-10-20 21:24:52', 'default.jpg'),
(5, 'Allied Botanical Corporation', 'Local/Sub-contractor', '123456789', '123456789', 'alliedbcorp@gmail.com', '09495123614', '2015-02-26', 1, '2018-10-20 21:24:53', '2018-10-20 21:24:53', 'default.jpg'),
(6, 'Frey Fil Corp. (Elizabeth N. Almariego)', 'Broker/Agent', '123456789', '123456789', 'freyfilcorp@gmail.com', '09676247831', '2015-02-26', 0, '2018-10-20 21:24:53', '2018-10-20 21:24:53', 'default.jpg'),
(7, 'Yongzheng Shipping Corp Inc.', 'Local/Sub-contractor', '123456789', '123456789', 'yongzheng@gmail.com', '09051478365', '2016-05-17', 0, '2018-10-20 21:24:53', '2018-10-20 21:24:53', 'default.jpg'),
(8, 'W Hydrocolloids Inc.', 'Freight Forwarder', '123456789', '123456789', 'hydrocolloids@gmail.com', '09997531548', '2017-08-27', 0, '2018-10-20 21:24:53', '2018-10-20 21:24:53', 'default.jpg'),
(9, 'Altron Logistics Inc.', 'Local/Sub-contractor', '123456789', '123456789', 'altronlogistics@gmail.com', '09475294786', '2016-08-21', 0, '2018-10-20 21:24:53', '2018-10-20 21:24:53', 'default.jpg'),
(10, 'Wuerth Phils Inc.', 'Local/Sub-contractor', '123456789', '123456789', 'wuerthph@gmail.com', '09774589632', '2015-09-30', 0, '2018-10-20 21:24:53', '2018-10-20 21:24:53', 'default.jpg'),
(11, 'Northern Chemical Sales Inc.', 'In-house Brokerage', '123456789', '123456789', 'northernchemical@gmail.com', '09164786912', '2017-01-11', 0, '2018-10-20 21:24:53', '2018-10-20 21:24:53', 'default.jpg'),
(12, 'Alysons Chemical Enterprises Inc.', 'In-house Brokerage', '123456789', '123456789', 'alysonschemical@gmail.com', '09053571598', '2017-12-30', 0, '2018-10-20 21:24:53', '2018-10-20 21:24:53', 'default.jpg'),
(13, 'Breakthru Cleaning Agent', 'In-house Brokerage', '123456789', '123456789', 'breakthrucleaning@gmail.com', '09154963258', '2016-04-05', 0, '2018-10-20 21:24:53', '2018-10-20 21:24:53', 'default.jpg'),
(14, 'MyWine - The Best Italian Wine', 'Local/Sub-contractor', '123456789', '123456789', 'italianwine@gmail.com', '09154963258', '2015-07-21', 0, '2018-10-20 21:24:53', '2018-10-20 21:24:53', 'default.jpg'),
(15, 'Wacker Machines Supplies Corp.', 'Freight Forwarder', '123456789', '123456789', 'wackermachines@gmail.com', '09183571596', '2015-10-18', 0, '2018-10-20 21:24:54', '2018-10-20 21:24:54', 'default.jpg'),
(16, 'Marilou R. Arevalo (Bong)', 'Broker/Agent', '123456789', '123456789', 'marilouarevalo@gmail.com', '09997536854', '2014-03-16', 0, '2018-10-20 21:24:54', '2018-10-20 21:24:54', 'default.jpg'),
(17, 'Coastline Truck Center', 'Local/Sub-contractor', '123456789', '123456789', 'coastlinetruck@gmail.com', '09174531258', '2016-09-10', 0, '2018-10-20 21:24:54', '2018-10-20 21:24:54', 'default.jpg'),
(18, 'Angelogistics Co. Ltd - Pier Dispatch', 'Freight Forwarder', '123456789', '123456789', 'angelogisticscoltd@gmail.com', '09092387456', '2013-01-17', 0, '2018-10-20 21:24:54', '2018-10-20 21:24:54', 'default.jpg'),
(19, 'Continental Cargo Carriers Inc.', 'Local/Sub-contractor', '123456789', '123456789', 'continentalcargo@gmail.com', '09362791354', '2017-05-20', 0, '2018-10-20 21:24:54', '2018-10-20 21:24:54', 'default.jpg'),
(20, 'Asiaworld Transport Phils.', 'Local/Sub-contractor', '123456789', '123456789', 'asiaworldtransph@gmail.com', '09164368524', '2018-02-12', 0, '2018-10-20 21:24:54', '2018-10-20 21:24:54', 'default.jpg');

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
(7, 'MIP - Manila-North, Caloocan, Sta. Quiteria (Alysons Warehouse)'),
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
  `weekday` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`img`, `id`, `driver_no`, `expire`, `fname`, `mname`, `lname`, `email`, `password`, `repass`, `gender`, `birthday`, `contact`, `experience`, `date`, `status`, `timein`, `timeout`, `weekday`) VALUES
('default.jpg', 1, 'ACLDI010987016', '2021-12-20', 'Arnel', NULL, 'Villamor', 'avillamor@gmail.com', '123456789', '123456789', 'M', '1988-12-20', '09154269173', 5, '2015-03-25', 1, '12:00:00', '09:00:00', 'Monday'),
('default.jpg', 2, 'ACLDI090878015', '2019-03-01', 'Ernie', NULL, 'Saavedra', 'esaavedra@gmail.com', '123456789', '123456789', 'M', '1976-03-01', '09151496857', 10, '2013-08-21', 1, '01:00:00', '09:00:00', 'Tuesday'),
('default.jpg', 3, 'ACLDI240178014', '2020-05-11', 'Inigo', NULL, 'Rafaeles', 'irafaeles@gmail.com', '123456789', '123456789', 'M', '1987-05-11', '09150138304', 3, '2014-11-01', 1, '01:00:00', '09:00:00', 'Wednesday'),
('default.jpg', 4, 'ACLDI300862013', '2022-09-15', 'Joshua', NULL, 'Patino', 'jpatino@gmail.com', '123456789', '123456789', 'M', '1984-09-15', '09154736181', 7, '2013-10-11', 0, '03:00:00', '10:00:00', 'Thursday'),
('default.jpg', 5, 'ACLD120884017', '2019-08-30', 'John Robert', NULL, 'Tambanillo', 'jrtambanillo@gmail.com', '123456789', '123456789', 'M', '1985-08-30', '09170143697', 2, '2018-02-25', 0, '03:00:00', '10:00:00', 'Thursdays'),
('default.jpg', 6, 'ACLDI070952012', '2018-12-30', 'Joe', NULL, 'Layan', 'jlayan@gmail.com', '123456789', '123456789', 'M', '1969-07-24', '09103451236', 12, '2009-01-15', 0, '03:00:00', '10:00:00', 'Thursday'),
('default.jpg', 7, 'ACLDI000000011', '2019-06-30', 'Mau', NULL, 'Latap', 'mlatap@gmail.com', '123456789', '123456789', 'M', '1985-06-30', '09135715948', 6, '2012-02-26', 0, '04:00:00', '12:00:00', 'Friday'),
('default.jpg', 8, 'ACLDI280588010', '2020-08-31', 'Jeremy', NULL, 'Lansang', 'jlansang@gmail.com', '123456789', '123456789', 'M', '1983-08-31', '09676247831', 6, '2018-04-20', 1, '05:00:00', '09:00:00', 'Saturday'),
('default.jpg', 9, 'ACLDI260573009', '2019-11-24', 'Ronnie', NULL, 'Jaballa', 'rjaballa@gmail.com', '123456789', '123456789', 'M', '1986-07-11', '09051478365', 5, '2014-05-17', 0, '05:00:00', '05:00:00', 'Sunday'),
('default.jpg', 10, 'ACLDI311276008', '2022-06-23', 'Donnie', NULL, 'Jaballa', 'djaballa@gmail.com', '123456789', '123456789', 'M', '1984-06-23', '09153146987', 4, '2015-07-13', 0, '09:00:00', '04:00:00', 'Saturday'),
('default.jpg', 11, 'ACLDI201084007', '2021-12-10', 'Mariano', NULL, 'Estaris', 'mestaris@gmail.com', '123456789', '123456789', 'M', '1984-12-10', '09364251658', 8, '2011-03-29', 0, '01:00:00', '02:00:00', 'Monday'),
('default.jpg', 12, 'ACLDI180468006', '2020-08-31', 'Lemuel', NULL, 'Catalan', 'lcatalan@gmail.com', '123456789', '123456789', 'M', '1985-08-11', '09458621403', 3, '2016-09-23', 1, '02:00:00', '12:00:00', 'Thursday'),
('default.jpg', 13, 'ACLDI241164005', '2019-04-14', 'Tonyo', NULL, 'Bitoon', 'tbitoon@gmail.com', '123456789', '123456789', 'M', '1975-04-14', '09073556128', 12, '2010-12-21', 0, '07:00:00', '12:00:00', 'Sunday'),
('', 14, 'ACLDI141281004', '2020-10-15', 'Jonalyn', '', 'Bartolome', 'jbartolome@gmail.com', '123456789', '123456789', 'M', '1987-10-14', '09154669875', 5, '2015-01-20', 1, '09:00:00', '08:00:00', 'Wednesday'),
('', 15, 'ACLDI081281003', '2023-03-18', 'Ernesto', '', 'Baquiran', 'ebaquiran@gmail.com', '123456789', '123456789', 'M', '1981-03-18', '09478621034', 9, '2009-06-28', 1, '12:00:00', '12:00:00', 'Friday'),
('default.jpg', 16, 'ACLDI241283002', '2023-09-12', 'Jing', NULL, 'Baluran', 'jbaluran@gmail.com', '123456789', '123456789', 'M', '1988-09-12', '09365448607', 4, '2012-02-22', 1, '11:00:00', '12:00:00', 'Tuesday'),
('default.jpg', 17, 'ACLDI091180001', '2023-11-13', 'Wancho', NULL, 'Apas', 'wapas@gmail.com', '123456789', '123456789', 'M', '1976-11-13', '09125647820', 4, '2014-05-06', 0, '12:00:00', '09:00:00', 'Thursday'),
('default.jpg', 18, 'ACLDI091181567', '2020-07-17', 'Remante', NULL, 'Ibanez', 'ribanez@gmail.com', '123456789', '123456789', 'M', '1985-07-17', '09997531548', 6, '2011-06-19', 1, '11:00:00', '03:00:00', 'Wednesday'),
('default.jpg', 19, 'ACLDI091182000', '2019-12-01', 'Frederico', NULL, 'Alburo', 'falburo@gmail.com', '123456789', '123456789', 'M', '1978-09-26', '09192554863', 12, '2009-04-17', 0, '08:00:00', '07:00:00', 'Friday');

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
  `mname` varchar(50) DEFAULT NULL,
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
('default.jpg', 1, 'ACLHL000000017', '2022-03-21', 'Zander', NULL, 'Ubaldo', 'zubaldo@gmail.com', '123456789', '123456789', '1988-12-20', 'M', '09154269173', '2015-03-25', 1, 5, '12:00:00', '09:00:00', 'Monday'),
('default.jpg', 2, 'ACLHL000000016', '2019-05-26', 'Dario', NULL, 'Traquina', 'dtraquina@gmail.com', '123456789', '123456789', '1976-03-01', 'M', '09151496857', '2013-08-21', 1, 10, '01:00:00', '09:00:00', 'Tuesday'),
('default.jpg', 3, 'ACLHL230676015', '2020-08-11', 'Carlo', NULL, 'Tigbawan', 'ctigbawan@gmail.com', '123456789', '123456789', '1987-05-11', 'M', '09150138304', '2014-11-01', 0, 3, '01:00:00', '09:00:00', 'Wednesday'),
('default.jpg', 4, 'ACLHL000000014', '2018-11-01', 'Anthony', NULL, 'Tanaya', 'atanaya@gmail.com', '123456789', '123456789', '1984-09-15', 'M', '09154736181', '2013-10-11', 0, 7, '03:00:00', '10:00:00', 'Thursday'),
('default.jpg', 5, 'ACLHL000000013', '2019-07-30', 'Elembert', NULL, 'Rodriguez', 'erodriguez@gmail.com', '123456789', '123456789', '1985-08-30', 'M', '09170143697', '2018-02-25', 1, 2, '03:00:00', '10:00:00', 'Thursday'),
('default.jpg', 6, 'ACLHL011288012', '2020-04-20', 'Arkeo', NULL, 'Mendez', 'amendez@gmail.com', '123456789', '123456789', '1969-07-24', 'M', '09103451236', '2009-01-15', 0, 12, '03:00:00', '10:00:00', 'Wednesday'),
('default.jpg', 7, 'ACLHL011288011', '2019-12-31', 'Berto', NULL, 'Lozada', 'blozada@gmail.com', '123456789', '123456789', '1985-06-30', 'M', '09135715948', '2012-02-26', 1, 6, '04:00:00', '12:00:00', 'Friday'),
('default.jpg', 8, 'ACLHL221285010', '2021-06-22', 'Francisco', NULL, 'Lomente', 'jlomente@gmail.com', '123456789', '123456789', '1983-08-31', 'M', '09676247831', '2018-04-20', 0, 6, '05:00:00', '09:00:00', 'Saturday'),
('default.jpg', 9, 'ACLHL211294009', '2020-01-11', 'Sandro', NULL, 'Lomente', 'slomente@gmail.com', '123456789', '123456789', '1986-07-11', 'M', '09051478365', '2014-05-17', 0, 5, '05:00:00', '05:00:00', 'Sunday'),
('default.jpg', 10, 'ACLHL090395007', '2022-08-19', 'Gardo', NULL, 'Librojo', 'glibrojo@gmail.com', '123456789', '123456789', '1984-06-23', 'M', '09153146987', '2015-07-13', 0, 4, '09:00:00', '04:00:00', 'Saturday'),
('default.jpg', 11, 'ACLHL231076006', '2019-01-01', 'Armando', NULL, 'Lagrimas', 'alagrimas@gmail.com', '123456789', '123456789', '1984-12-10', 'M', '09364251658', '2011-03-29', 1, 8, '01:00:00', '02:00:00', 'Monday'),
('default.jpg', 12, 'ACLHL280599005', '2019-02-03', 'Virgilio', NULL, 'Jaballa', 'vjaballa@gmail.com', '123456789', '123456789', '1985-08-11', 'M', '09458621403', '2016-09-23', 1, 3, '02:00:00', '12:00:00', 'Wednesday'),
('default.jpg', 13, 'ACLHL281190004', '2019-01-12', 'Jester', NULL, 'Fernandez', 'jfernandez@gmail.com', '123456789', '123456789', '1975-04-14', 'M', '09073556128', '2010-12-21', 1, 12, '07:00:00', '12:00:00', 'Sunday'),
('default.jpg', 14, 'ACLHL180589003', '2018-12-13', 'Mario', NULL, 'Deguitos', 'mdeguitos@gmail.com', '123456789', '123456789', '1987-10-14', 'M', '09154669875', '2015-01-20', 1, 5, '09:00:00', '08:00:00', 'Wednesday'),
('default.jpg', 15, 'ACLHL260490002', '2020-01-14', 'Lito', NULL, 'Catalan Jr.', 'lcatalan@gmail.com', '123456789', '123456789', '1981-03-18', 'M', '09478621034', '2009-06-28', 1, 9, '12:00:00', '12:00:00', 'Friday'),
('default.jpg', 16, 'ACLHL000000021', '2019-05-06', 'Dereck', NULL, 'Traqueña', 'dtraqueña@gmail.com', '123456789', '123456789', '1988-09-12', 'M', '09365448607', '2012-02-22', 1, 4, '11:00:00', '12:00:00', 'Tuesday'),
('default.jpg', 17, 'ACLHL000000001', '2019-01-01', 'Jason', NULL, 'Ablazo', 'jablazo@gmail.com', '123456789', '123456789', '1976-11-13', 'M', '09125647820', '2014-05-06', 1, 4, '12:00:00', '09:00:00', 'Thursday'),
('default.jpg', 18, 'ACLHL000000019', '2020-05-19', 'Ronald', NULL, 'Dumas', 'rdumas@gmail.com', '123456789', '123456789', '1985-07-17', 'M', '09997531548', '2011-06-19', 0, 6, '11:00:00', '03:00:00', 'Wednesday'),
('default.jpg', 19, 'ACLHL000000020', '2019-11-21', 'Art', NULL, 'Mangawang', 'amangawang@gmail.com', '123456789', '123456789', '1978-09-26', 'M', '09192554863', '2009-04-17', 0, 12, '08:00:00', '07:00:00', 'Friday'),
('default.jpg', 20, 'ACLHL000000018', '2022-01-01', 'Allan', NULL, 'Catalan', 'acatalan@gmail.com', '123456789', '123456789', '1981-02-24', 'M', '09192554863', '2011-05-12', 0, 12, '08:00:00', '07:00:00', 'Monday'),
('default.jpg', 21, 'ACLDI311273008', '2020-05-06', 'Nino', NULL, 'Altamia', 'nltamia@gmail.com', '123456789', '123456789', '1984-06-23', 'M', '09153146987', '2015-07-13', 1, 4, '09:00:00', '04:00:00', 'Saturday'),
('default.jpg', 22, 'ACLDI271643009', '2020-02-07', 'Ethan', NULL, 'Bitoon', 'ebitoon@gmail.com', '123456789', '123456789', '1986-07-11', 'M', '09051478365', '2014-05-17', 0, 5, '05:00:00', '05:00:00', 'Sunday'),
('default.jpg', 23, 'ACLDI280588010', '2019-03-08', 'Mauricio', NULL, 'Paras', 'mparas@gmail.com', '123456789', '123456789', '1983-08-31', 'M', '09676247831', '2018-04-20', 0, 6, '05:00:00', '09:00:00', 'Saturday'),
('default.jpg', 24, 'ACLDI000000039', '2021-04-01', 'Mio', NULL, 'Sareno', 'msareno@gmail.com', '123456789', '123456789', '1985-06-30', 'M', '09135715948', '2012-02-26', 0, 6, '04:00:00', '12:00:00', 'Friday'),
('default.jpg', 25, 'ACLDI070952012', '2022-01-01', 'Raul', NULL, 'Lagutao', 'rlagutao@gmail.com', '123456789', '123456789', '1969-07-24', 'M', '09103451236', '2009-01-15', 0, 12, '03:00:00', '10:00:00', 'Thursday'),
('default.jpg', 26, 'ACLD120884017', '2019-07-25', 'Andrew', NULL, 'Mateo', 'amateo@gmail.com', '123456789', '123456789', '1985-08-30', 'M', '09170143697', '2018-02-25', 1, 2, '03:00:00', '10:00:00', 'Thursday'),
('default.jpg', 27, 'ACLDI300862013', '2019-02-26', 'Randy', NULL, 'Caberte', 'rcaberte@gmail.com', '123456789', '123456789', '1984-09-15', 'M', '09154736181', '2013-10-11', 0, 7, '03:00:00', '10:00:00', 'Thursday'),
('default.jpg', 28, 'ACLDI240178014', '2020-03-27', 'Jon', NULL, 'Hondrado', 'jhondrado@gmail.com', '123456789', '123456789', '1987-05-11', 'M', '09150138304', '2014-11-01', 0, 3, '01:00:00', '09:00:00', 'Wednesday'),
('default.jpg', 29, 'ACLD120884017', '2020-01-28', 'Roniel', NULL, 'Zamora', 'rzamora@gmail.com', '123456789', '123456789', '1985-08-30', 'M', '09170143697', '2018-02-25', 1, 2, '03:00:00', '10:00:00', 'Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(100) NOT NULL,
  `date` datetime NOT NULL,
  `plate_no` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `purchased` date DEFAULT NULL,
  `price` int(25) DEFAULT NULL,
  `unit` varchar(25) DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `amount` int(50) DEFAULT NULL,
  `enddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `warning` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `date`, `plate_no`, `supplier`, `description`, `purchased`, `price`, `unit`, `quantity`, `amount`, `enddate`, `warning`) VALUES
(1, '2018-10-15 00:00:00', 'RLP 377', 'T.Y ENTERPRISES', 'Plasmaglow Replacement Xenon Headlight Bulbs24V', '2018-10-17', 10000, 'PCS', 2, 20000, '2018-10-23 10:00:13', 'HALOGEN BULB H4 24V NARVA \r\n'),
(2, '2018-10-01 00:00:00', 'RLP 377', 'T.Y ENTERPRISES', 'MITSUBISHI FUSO OEM TRUCK (L/H) COMBINATION MIRROR', '2018-10-06', 2000, 'PCS', 10, 20000, '2018-10-23 09:21:06', 'GUTTEN MIRROR FUSO\r\n'),
(3, '2018-08-14 00:00:00', 'RLP 377', 'T.Y ENTERPRISES', 'A rear drum brake on a Kawasaki W800 Truck', '2018-10-04', 5500, 'PCS', 4, 22000, '2018-10-23 09:19:08', 'BRAKE DRUM\r\n'),
(4, '2018-10-02 00:00:00', 'RLP 377', 'BOLTS & NUTS HARDWARE CORP', 'CS 8X40 WITH NUT  LW FW ', '2018-10-08', 5, 'PCS', 8, 40, '2018-10-23 09:19:15', 'Fully Threaded Studs - Rods and Studs'),
(5, '2018-10-01 00:00:00', 'RLP 377', 'T.Y ENTERPRISES', 'Light Side Marker Lights', '2018-10-10', 250, 'PCS', 1, 250, '2018-10-23 09:19:29', 'SIGNAL LIGHT LENS \r\n'),
(40, '2018-09-12 00:00:00', 'ABC 8771', 'AVISLEY HARDWARE CORP', 'POWER/HDD LED Connector Cables 18.5', '2018-10-03', 650, 'PCS', 1, 650, '2018-10-24 06:11:22', 'FRONT PANEL CABLE'),
(41, '2018-09-02 00:00:00', 'ABC 8771', 'AVISLEY HARDWARE CORP', 'Flange Bolt 6x25 Honda OEM 95701-0602508	', '2018-09-08', 6, 'PCS', 20, 120, '2018-10-24 06:11:19', 'BOLT 6X25 COMPLETE	'),
(42, '2018-09-22 00:00:00', 'ABC 8771', 'T.Y ENTERPRISES	', 'DC12V Door Drop Bolt Lock 1 x DC 12V Electric  Dro', '2018-09-21', 45, 'PCS', 1, 45, '2018-10-24 06:11:17', 'DROP BOLT'),
(43, '2018-08-14 14:03:18', 'ABF 3040', 'PETRUBI MARKETING CORP', 'A1121218 1/2 X 1/2 X 1/8', '2018-08-10', 600, 'PCS', 1, 600, '2018-10-24 06:12:40', 'ANGLE 3/4 X 2	'),
(44, '2018-08-03 14:04:30', 'ABF 3040', 'T.Y ENTERPRISES	', 'Led Kit, Bulbs Rxv Ezgo Light Complete	', '2018-08-25', 20, 'PCS', 1, 20, '2018-10-24 06:12:53', 'BULB 17063'),
(45, '2018-08-27 14:05:18', 'ABF 3040', 'BOLTS&NUTS HARDWARE CORP.', 'Flanged Lock Screw (Hexagon)', '2018-07-24', 10, 'PCS', 1, 10, '2018-10-24 06:13:04', '3/X / 1/2 CS WITH NUT FW'),
(46, '2018-07-22 14:06:08', 'ABF 3040', 'T.Y ENTERPRISES	', '3600A Drum, Trailer Brake Drums', '2018-10-05', 7200, 'PCS', 2, 14400, '2018-10-24 06:13:09', 'BRAKE DRUM'),
(47, '2018-07-30 14:08:03', '130104', 'T.Y ENTERPRISES	', 'GE 53 2watt, 14.4volts, G3.5 (G3 1/2) Bulb Type, M', '2018-08-20', 25, 'PCS', 10, 250, '2018-10-24 06:13:13', 'AUTO BULB 53'),
(48, '2018-06-16 14:09:37', '130104', 'GOLD - EVER MERCHANDISING CORP	', 'Hot Sale 32ml glass measuring cylinder for diesel	', '2018-07-12', 100, 'PCS', 1, 100, '2018-10-24 06:13:18', 'PSBWCH	'),
(49, '2018-06-04 14:10:36', '130104', 'GOLDIBUE MARKETING CORP', 'GUL 22mm 19x67	', '2018-08-27', 1400, 'PCS', 1, 1400, '2018-10-24 06:13:25', 'GUL PLUS 16X4X8	'),
(50, '2018-05-02 14:13:46', '130205', 'PETRUBI MARKETING CORP	', 'Mark and drill four 0.50-in. diameter holes in tru', '2018-10-11', 780, 'PCS', 1, 780, '2018-10-24 06:20:56', 'ANGLE 1/4 X 2'),
(51, '2018-01-19 14:14:31', '130205', 'BOLTS & NUTS HARDWARE CORP', 'LED Bulb 102V	', '2018-06-19', 250, 'PCS', 1, 250, '2018-10-24 06:21:28', 'HANGEN BULB H-4	'),
(52, '2018-05-21 14:15:17', '130205', 'T.Y ENTERPRISES	', 'MITSUBISHI FUSO OEM TRUCK (L/H) COMBINATION MIRROR', '2018-07-20', 350, 'PCS', 1, 350, '2018-10-24 06:21:06', 'GUTTEN MIRROR FUSO'),
(53, '2018-04-05 14:15:58', '130205', 'T.Y ENTERPRISES	', '501 Twenty20 Cree LED 12V W5W Canbus Wedge Bulb', '2018-09-15', 80, 'PCS', 6, 480, '2018-10-24 06:21:11', 'SIDE LIGHT LED	'),
(54, '2018-05-05 14:16:41', 'RCE 120', 'T.Y ENTERPRISES	', 'Alagoo 12v 6\'\'car Cooling Fan Automobile Vehicle C', '2018-07-17', 350, 'PCS', 1, 350, '2018-10-24 06:21:21', 'CAR-FAN 24L 6'),
(55, '2018-02-20 14:17:25', 'RCE 120', 'AVISLEY HARDWARE CORP', 'Dodge Ram Truck Remote Key Fobik w/ Engine Start', '2018-07-23', 100, 'PCS', 1, 100, '2018-10-24 06:21:36', 'KEY'),
(56, '2018-02-26 14:18:02', 'RCE 120', 'T.Y ENTERPRISES	', 'National brake fluid, gear oils, engine oils, brak', '2018-09-29', 185, 'PCS', 2, 370, '2018-10-24 06:21:44', 'BRAKE FLUID NATIONAL'),
(57, '2018-01-14 14:19:22', 'RCE 120', 'T.Y ENTERPRISES	', 'Multifunctional side mirror with TS16949 Model NO', '2018-08-26', 350, 'PCS', 1, 350, '2018-10-24 06:21:57', 'SIDE MIRROR	'),
(58, '2018-03-17 14:19:59', 'RCE 120', 'AVISLEY HARDWARE CORP	', 'Air Cuff Lock covers and locks the truck', '2018-10-23', 75, 'PCS', 2, 150, '2018-10-24 06:22:02', 'PADLOCK');

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
('', 1, 'Aina', 'Sales', '', 'F', '1998-11-04', '09495214786', '2015-02-28', 'ainadrsales@gmail.com', '123456789', '123456789', 1, 1),
('default.jpg', 2, 'Anthony', 'Ane', NULL, 'M', '1998-05-28', '09153245692', '2016-07-11', 'anthonyjarlane@yahoo.com', '123456789', '123456789', 0, 2),
('default.jpg', 3, 'Lanz', 'Manalo', NULL, 'M', '1999-01-11', '09164851259', '2015-01-20', 'ljomanalo@gmail.com', '123456789', '123456789', 0, 1),
('default.jpg', 4, 'Andrea', 'Cruz', NULL, 'M', '1996-11-11', '09468521478', '2017-09-03', 'andrecruz@gmail.com', '123456789', '123456789', 0, 3),
('default.jpg', 5, 'Sofia', 'Villanueva', NULL, 'F', '1987-07-13', '09053179542', '2015-11-23', 'sofiavillanueva@gmail.com', '123456789', '123456789', 0, 3),
('default.jpg', 6, 'Michael', 'Reyes', NULL, 'M', '1984-02-01', '09991593546', '2015-09-21', 'michrey@gmail.com', '123456789', '123456789', 0, 4),
('default.jpg', 7, 'Joyce', 'Estrella', NULL, 'F', '1988-05-16', '09293156489', '2016-06-30', 'joycestrel@gmail.com', '123456789', '123456789', 0, 5),
('default.jpg', 8, 'Kim', 'Tan', NULL, 'F', '1985-03-03', '09551475328', '2016-08-19', 'tankim@gmail.com', '123456789', '123456789', 0, 4),
('default.jpg', 9, 'Dale', 'Esteves', NULL, 'M', '1988-04-28', '09178542369', '0000-00-00', 'dalestev@gmail.com', '123456789', '123456789', 0, 3),
('default.jpg', 10, 'Diana', 'Santos', NULL, 'F', '1987-11-15', '09053179542', '2015-04-24', 'dianamae@gmail.com', '123456789', '123456789', 0, 3),
('default.jpg', 11, 'Rene', 'Holgado', NULL, 'M', '1986-12-25', '09495214786', '2016-03-23', 'reneholgado@gmail.com', '123456789', '123456789', 0, 2),
('default.jpg', 12, 'Nicholas', 'Lopez', NULL, 'M', '1999-10-30', '09081459638', '2015-09-07', 'nichlopez@gmail.com', '123456789', '123456789', 0, 1),
('default.jpg', 13, 'Justine', 'Sy', NULL, 'F', '1994-06-12', '09164852369', '2014-03-19', 'justinesy@gmail.com', '123456789', '123456789', 0, 2),
('default.jpg', 14, 'Miguel', 'Antonio', NULL, 'M', '1995-05-20', '09994123659', '2017-08-20', 'migzantonio@gmail.com', '123456789', '123456789', 0, 3),
('default.jpg', 15, 'Anne', 'Estrada', NULL, 'F', '1993-08-18', '09478536952', '2013-02-16', 'annestrada@gmail.com', '123456789', '123456789', 0, 5),
('default.jpg', 16, 'Audrey', 'Peralta', NULL, 'F', '1995-06-15', '09154789635', '2017-03-20', 'audper@gmail.com', '123456789', '123456789', 0, 4),
('default.jpg', 17, 'Kurt', 'Tuason', NULL, 'M', '1991-08-27', '09092589632', '2014-04-20', 'kurtuason@gmail.com', '123456789', '123456789', 0, 5),
('default.jpg', 18, 'Brandon', 'Benitez', NULL, 'M', '1992-06-30', '09981593548', '2014-03-11', 'branbent@gmail.com', '123456789', '123456789', 0, 1),
('default.jpg', 19, 'Carlo', 'Mendoza', NULL, 'M', '1995-10-31', '09497852314', '2015-01-21', 'carlomend@gmail.com', '123456789', '123456789', 0, 2),
('default.jpg', 20, 'Francis', 'Sanchez', NULL, 'M', '1993-09-10', '09185896325', '2015-03-26', 'fransanch@gmail.com', '123456789', '123456789', 0, 3);

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
  `old` int(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truck`
--

INSERT INTO `truck` (`id`, `img`, `brand`, `plate_no`, `series`, `mvfile_no`, `engine_no`, `chassis_no`, `grosswt`, `netwt`, `netcap`, `year`, `old`, `status`) VALUES
(1, '', 'FUSO ', 'RLP 377', 'REBUILT TRUCK', '0386-00000240945', '8DC9502620', 'FP54JD-520907', 10500, 210, 10290, 2011, 0, 2),
(2, '', 'ISUZU', 'ABC 8771', 'REBUILT TRUCK', '1301-00000503950', '10PD1-746850', 'EXR71D-3000004', 10500, 5250, 5250, 2013, 0, 2),
(3, '', 'SINOTRUK HOWO', 'ABF 3040', 'REBUILT TRUCK', '1301-00000410217', 'WD61547150417009747', 'LZZ5CCSC7FA093009', 4000, 4000, 4000, 2015, 0, 2),
(4, '', 'FAW', '130104', 'REBUILT TRUCK', '1301-00000891410', 'CA6DL237E3F52770098', 'LFWNHXPC6G1F58891', 8000, 4000, 4000, 2016, 0, 2),
(5, '', 'FAW', '130205', 'REBUILT TRUCK', '1301-00000891408', 'CA6DL237E3F52770099', 'LFWNHXPC6G1F58890', 8000, 4000, 4000, 2016, 0, 2),
(6, '', 'FAW', '130102', 'REBUILT TRUCK', '1301-00001079279', 'CA6DL237E3F52935945', 'LFWSRXPJ7H1E61858', 8000, 4000, 4000, 2017, 0, 1),
(7, '', 'MTSHUBISHI - FUSO', 'RCE 120', 'DROPSIDE', '0386-00000094576', '8DC11-393526', 'FU419U-540165', 5000, 4000, 4000, 2009, 0, 2),
(8, 'truck.jpg', 'FUSO TRUCK', 'RFR 667', 'DROPSIDE', '0386-00000149453', '8DC11-350914', 'FP411D-550069', 5000, 3000, 4000, 2014, 0, 1),
(9, 'truck.jpg', 'FUSO TRUCK', 'RGY 294', 'DROPSIDE', '0386-00000171817', '8DC9-430796', 'FP415D-650542', 5000, 3000, 4000, 2014, 0, 1),
(10, 'truck.jpg', 'FUSO TRUCK', 'RLE 993', 'DROPSIDE', '0386-00000231282', '6D40235396', 'FP445D-550002', 5000, 3000, 4000, 2011, 0, 1),
(11, 'truck.jpg', 'ISUZU', 'AAQ9266', 'DROPSIDE', '0386-00000309296', '6WG1-405485', 'EXR50D-3000096', 5000, 3000, 4000, 2013, 0, 0),
(12, 'truck.jpg', 'ISUZU', 'AAQ 7784', 'DROPSIDE', '0386-00000307618', '6WG1203422', 'EXR81D-3000080', 5000, 3000, 4000, 2000, 0, 0),
(13, 'truck.jpg', 'ISUZU ELF', 'RKN 816', 'DROPSIDE TRUCK', '0386-00000219894', '4BE1-922286', 'NPR58P-7101502', 5000, 3000, 4000, 2015, 0, 0),
(14, 'truck.jpg', 'ISUZU TRUCK', 'RLD 965', 'DROPSIDE TRUCK', '0386-00000232952', '6WA1-108543', 'JALEXR50DT3000012', 5000, 3000, 4000, 2017, 0, 0),
(15, 'truck.jpg', 'FUSO TRUCK', 'UIM 308', 'REBUILT TRUCK', '1312-00000378407', '8DC11503046', 'FP419D560055', 5000, 3000, 4000, 2011, 0, 0),
(16, 'truck.jpg', 'ISUZU', 'RNK 276', 'REBUILT TRUCK', '0386-00000285353', '10PD1778910', 'EXR18DM3000017', 5000, 3000, 4000, 2013, 0, 0),
(17, 'truck.jpg', 'ISUZU', 'RNK 277', 'REBUILT TRUCK', '0386-00000285354', '10PD1-758483', 'EXR18DN3000425', 5000, 3000, 4000, 2013, 0, 0),
(18, 'truck.jpg', 'ISUZU REBUILT', 'ABA 9575', 'REBUILT TRUCK', '1301-00000145965', '10PD1766803', 'EXR82D13000455', 5000, 3000, 4000, 2014, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

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
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
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
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `helper`
--
ALTER TABLE `helper`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `truck`
--
ALTER TABLE `truck`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
