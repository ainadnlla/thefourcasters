-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2018 at 06:06 PM
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
  `helper_no` varchar(50) NOT NULL,
  `action` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `waybill`, `date`, `cust_type`, `custname`, `cargo`, `product`, `description`, `pieces`, `plate_no`, `driver_no`, `destination`, `price`, `license_no`, `driver_name`, `helper_name`, `helper_no`, `action`) VALUES
(1, 1664, '2018-10-03', 'Broker/Agent', 'Wuerth Phils. Inc', 'FCL 1x40', 'Paper Products', 'Printing paper, paper labels, cardboard boxes and wood pellets', 100, 'ABC 8771', '', 'MIP - Laguna, Binan (Wuerth Phils. Inc. Warehouse)', 18000, '', 'Jonalyn Bartolome', 'Berto Lozada', '', 1),
(2, 9673, '2018-09-29', '', 'Breakthru Cleaning Agent', 'LCL (ELF)', 'Clothing', 'Not fragile', 150, 'RLP 377', '', 'MIP - Manila-North, Valenzuela, Ugong', 12000, '', 'Joshua Patino', 'Berto Lozada', '', 2),
(3, 1643, '2018-10-04', '', 'Alysons Chemical Enterprises Inc.', 'FCL 1x45', 'Frozen Goods', 'San Miguel Tender Juicy Hotdogs', 500, 'RLP 377', '', 'MIP - Manila-South, Taguig, Bicutan', 9000, '', 'Mariano Estaris', 'Jester Fernandez', '', 0),
(4, 8432, '2018-09-29', '', 'MyWine - the best italian wine', 'FCL 1x20', 'Liquior and Beverages', 'Wine from Italy', 50, '130104', '', 'MIP - Bulacan, Guiguinto', 13500, '', 'Ernie Saavedra', 'Dario Traquina', '', 2),
(5, 2570, '2018-11-01', '', 'Continental Cargo Carriers Inc. ', 'LCL 1x40', 'Hazardous substances', 'Hazardous substances, such as explosives or chemicals. Handle with care.', 99, 'ABA 9575', '', 'MIP - Manila-North, Valenzuela, Ugong', 13500, '', 'Jonalyn Bartolome', 'Nino Altamia', '', 0),
(6, 4962, '2018-10-05', '', 'Angelogistics Co. Ltd - Pier Dispatch ', 'LCL 1x40', 'Furnitures', 'Sofa Set ', 3, 'RNK 277', '', 'MIP - Manila-South, Taguig, Bicutan', 10000, '', 'Mariano Estaris', 'Jason Ablazo', '', 1),
(7, 1619, '2018-10-09', '', 'Marilou R. Arevalo (Bong)', 'FCL 1x20', 'Insulation Foam and Roof', '2x2mm Roof and Foam 19x67', 1, '130102', '', 'MIP - Manila-North, Valenzuela, Talipapa', 5000, '', 'Ernesto Baquiran', 'Dario Traquina', '', 0),
(8, 2623, '2018-10-06', '', 'Marilou R. Arevalo (Bong)', 'FCL 1x20', 'Insulation Foam and Roof', '2x2mm Roof and Foam 19x67', 3, '130104', '', 'MIP - Caloocan, Baesa', 19590, '', 'Jeremy Lansang', 'Armando Lagrimas', '', 1),
(9, 5190, '2018-10-17', '', 'Wacker Machines Supplies Corp.', 'FCL 2x20', 'Machinery Supplies', 'Machiner Supplies by NBS14', 50, 'UIM 308', '', 'MIP - Manila , Mandaluyong', 25000, '', 'Ernie Saavedra', 'Armando Lagrimas', '', 1),
(10, 1809, '2018-10-05', '', 'Coastline Truck Center', 'LCL 1x40', 'Dispenser Material', 'H2O Water Dispenser Aquabest', 100, 'ABF 3040', '', 'MIP - Bulacan, Sta. Maria (Coastline Warehouse)', 20000, '', 'Ernie Saavedra', 'Dario Traquina', '', 1);

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
(1, 'Altron Logistics Inc.', 'Local/Sub-contractor', '123456789', '123456789', 'altron@gmail.com', '09147852136', '2017-08-11', 1, '2018-09-13 15:55:58', '2018-09-13 15:55:58', 'logo.jpg'),
(2, 'Wuerth Phils. Inc', 'Broker/Agent', '123456789', '123456789', 'wuerthphilsinc@gmail.com', '09147852136', '2018-09-15', 1, '2018-09-13 15:51:21', '2018-09-13 15:51:21', 'default.jpg'),
(3, 'Northern Chemical Sales Inc.', '', '123456789', '123456789', 'northernchemci@gmail.com', '09147852136', '0000-00-00', 1, '2018-09-13 15:51:22', '2018-09-13 15:51:22', 'default.jpg'),
(4, 'Alysons Chemical Enterprises Inc.', '', '123456789', '123456789', 'alysonschemic@gmail.com', '09147852136', '0000-00-00', 1, '2018-09-13 15:51:22', '2018-09-13 15:51:22', 'default.jpg'),
(5, 'Breakthru Cleaning Agent', '', '123456789', '123456789', 'breakthru@gmail.com', '09147852136', '0000-00-00', 1, '2018-09-13 15:52:32', '2018-09-13 15:52:32', 'default.jpg'),
(6, 'MyWine - the best italian wine', '', '123456789', '123456789', 'mywine@gmail.com', '09147852136', '0000-00-00', 1, '2018-09-13 15:52:32', '2018-09-13 15:52:32', 'default.jpg'),
(7, 'Wacker Machines Supplies Corp.', '', '123456789', '123456789', 'wacker@gmail.com', '09147852136', '0000-00-00', 1, '2018-09-13 15:53:20', '2018-09-13 15:53:20', 'default.jpg'),
(8, 'Marilou R. Arevalo (Bong)', '', '123456789', '123456789', 'bong@gmail.com', '09147852136', '0000-00-00', 1, '2018-09-13 15:53:20', '2018-09-13 15:53:20', 'default.jpg'),
(9, 'Coastline Truck Center', '', '123456789', '123456789', 'coastline@gmail.com', '09147852136', '0000-00-00', 1, '2018-09-13 15:55:58', '2018-09-13 15:55:58', 'default.jpg'),
(10, 'Angelogistics Co. Ltd - Pier Dispatch ', '', '123456789', '123456789', 'dispatch@gmail.com', '09147852136', '0000-00-00', 1, '2018-09-13 15:55:58', '2018-09-13 15:55:58', 'default.jpg'),
(11, 'Continental Cargo Carriers Inc. ', '', '123456789', '123456789', 'continental@gmail.com', '09147852136', '0000-00-00', 1, '2018-09-13 15:55:58', '2018-09-13 15:55:58', 'default.jpg'),
(12, 'Asiaworld Transport Phils.', '', '123456789', '123456789', 'asiaworld@gmail.com', '09147852136', '0000-00-00', 1, '2018-09-13 15:55:58', '2018-09-13 15:55:58', 'default.jpg'),
(13, 'Kargamine Tool Inc.', 'Local/Sub-contractor', '123456789', '123456789', 'kargamin@gmail.com', '09154269173', '2013-08-21', 0, '2018-09-26 12:01:07', '2018-09-26 12:01:07', 'default.jpg'),
(14, 'San Miguel Shipping and Lighterage Corp.', 'Local/Sub-contractor', '123456789', '123456789', 'sanmiguelcorp@gmail.com', '09150138304', '2014-11-01', 0, '2018-09-26 12:11:46', '2018-09-26 12:11:46', 'default.jpg'),
(15, 'Mira Raquel Suriben', 'Broker/Agent', '123456789', '123456789', 'miraquel@gmail.com', '09994736181', '2013-10-11', 0, '2018-09-26 12:11:46', '2018-09-26 12:11:46', 'default.jpg'),
(16, 'NALM Trading (Reymark V. Gador)', 'In-house Brokerage', '123456789', '123456789', 'nalm@gmail.com', '09170143697', '2018-02-25', 0, '2018-09-26 12:11:46', '2018-09-26 12:11:46', 'default.jpg'),
(17, 'Allied Botanical Corporation', 'Local/Sub-contractor', '123456789', '123456789', 'alliedbcorp@gmail.com', '09495123614', '2015-02-26', 0, '2018-09-26 12:11:46', '2018-09-26 12:11:46', 'default.jpg'),
(18, 'Frey Fil Corp. (Elizabeth N. Almariego)', 'Broker/Agent', '123456789', '123456789', 'freyfilcorp@gmail.com', '09676247831', '2015-02-26', 0, '2018-09-26 12:11:46', '2018-09-26 12:11:46', 'default.jpg'),
(19, 'Yongzheng Shipping Corp Inc.', 'Local/Sub-contractor', '123456789', '123456789', 'yongzheng@gmail.com', '09051478365', '2016-05-17', 0, '2018-09-26 12:11:46', '2018-09-26 12:11:46', 'default.jpg'),
(20, 'W Hydrocolloids Inc.', 'Freight Forwarder', '123456789', '123456789', 'hydrocolloids@gmail.com', '09997531548', '2017-08-27', 0, '2018-09-26 12:11:47', '2018-09-26 12:11:47', 'default.jpg');

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
  `weekday` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`img`, `id`, `driver_no`, `expire`, `fname`, `mname`, `lname`, `email`, `password`, `repass`, `gender`, `birthday`, `contact`, `experience`, `date`, `status`, `timein`, `timeout`, `weekday`) VALUES
('', 1, 'ACLDI010987016', '2020-01-01', 'Arnel', '', 'Villamor', 'avillamor@gmail.com', '123456789', '123456789', 'M', '1988-12-20', '09154269173', 5, '2015-03-25', 0, '12:00:00', '09:00:00', NULL),
('default.jpg', 2, 'ACLDI090878015', '2020-01-01', 'Ernie', NULL, 'Saavedra', 'esaavedra@gmail.com', '123456789', '123456789', 'M', '1976-03-01', '09151496857', 10, '2013-08-21', 1, '01:00:00', '09:00:00', 'Tue'),
('default.jpg', 3, 'ACLDI240178014', '2020-01-01', 'Inigo', NULL, 'Rafaeles', 'irafaeles@gmail.com', '123456789', '123456789', 'M', '1987-05-11', '09150138304', 3, '2014-11-01', 0, '01:00:00', '09:00:00', 'Wed'),
('default.jpg', 4, 'ACLDI300862013', '2020-01-01', 'Joshua', NULL, 'Patino', 'jpatino@gmail.com', '123456789', '123456789', 'M', '1984-09-15', '09154736181', 7, '2013-10-11', 1, '03:00:00', '10:00:00', 'Thurs'),
('default.jpg', 5, 'ACLD120884017', '2020-01-01', 'John Robert', NULL, 'Tambanillo', 'jrtambanillo@gmail.com', '123456789', '123456789', 'M', '1985-08-30', '09170143697', 2, '2018-02-25', 0, '03:00:00', '10:00:00', 'Thurs'),
('default.jpg', 6, 'ACLDI070952012', '2020-01-01', 'Joe', NULL, 'Layan', 'jlayan@gmail.com', '123456789', '123456789', 'M', '1969-07-24', '09103451236', 12, '2009-01-15', 0, '03:00:00', '10:00:00', 'Thurs'),
('default.jpg', 7, 'ACLDI000000011', '2020-01-01', 'Mau', NULL, 'Latap', 'mlatap@gmail.com', '123456789', '123456789', 'M', '1985-06-30', '09135715948', 6, '2012-02-26', 0, '04:00:00', '12:00:00', 'Fri'),
('default.jpg', 8, 'ACLDI280588010', '2020-01-01', 'Jeremy', NULL, 'Lansang', 'jlansang@gmail.com', '123456789', '123456789', 'M', '1983-08-31', '09676247831', 6, '2018-04-20', 1, '05:00:00', '09:00:00', 'Sat'),
('default.jpg', 9, 'ACLDI260573009', '2020-01-01', 'Ronnie', NULL, 'Jaballa', 'rjaballa@gmail.com', '123456789', '123456789', 'M', '1986-07-11', '09051478365', 5, '2014-05-17', 0, '05:00:00', '05:00:00', 'Sun'),
('default.jpg', 10, 'ACLDI311276008', '2020-01-01', 'Donnie', NULL, 'Jaballa', 'djaballa@gmail.com', '123456789', '123456789', 'M', '1984-06-23', '09153146987', 4, '2015-07-13', 0, '09:00:00', '04:00:00', 'Sat'),
('default.jpg', 11, 'ACLDI201084007', '2020-01-01', 'Mariano', NULL, 'Estaris', 'mestaris@gmail.com', '123456789', '123456789', 'M', '1984-12-10', '09364251658', 8, '2011-03-29', 1, '01:00:00', '02:00:00', 'Mon'),
('default.jpg', 12, 'ACLDI180468006', '2020-01-01', 'Lemuel', NULL, 'Catalan', 'lcatalan@gmail.com', '123456789', '123456789', 'M', '1985-08-11', '09458621403', 3, '2016-09-23', 0, '02:00:00', '12:00:00', 'Thurs'),
('default.jpg', 13, 'ACLDI241164005', '2020-01-01', 'Tonyo', NULL, 'Bitoon', 'tbitoon@gmail.com', '123456789', '123456789', 'M', '1975-04-14', '09073556128', 12, '2010-12-21', 1, '07:00:00', '12:00:00', 'Sun'),
('default.jpg', 14, 'ACLDI141281004', '2020-01-01', 'Jonalyn', NULL, 'Bartolome', 'jbartolome@gmail.com', '123456789', '123456789', 'M', '1987-10-14', '09154669875', 5, '2015-01-20', 1, '09:00:00', '08:00:00', 'Wed'),
('default.jpg', 15, 'ACLDI081281003', '2020-01-01', 'Ernesto', NULL, 'Baquiran', 'ebaquiran@gmail.com', '123456789', '123456789', 'M', '1981-03-18', '09478621034', 9, '2009-06-28', 1, '12:00:00', '12:00:00', 'Fri'),
('default.jpg', 16, 'ACLDI241283002', '2020-01-01', 'Jing', NULL, 'Baluran', 'jbaluran@gmail.com', '123456789', '123456789', 'M', '1988-09-12', '09365448607', 4, '2012-02-22', 0, '11:00:00', '12:00:00', 'Tue'),
('default.jpg', 17, 'ACLDI091180001', '2020-01-01', 'Wancho', NULL, 'Apas', 'wapas@gmail.com', '123456789', '123456789', 'M', '1976-11-13', '09125647820', 4, '2014-05-06', 0, '12:00:00', '09:00:00', 'Thurs'),
('default.jpg', 18, 'ACLDI091181567', '2020-01-01', 'Remante', NULL, 'Ibanez', 'ribanez@gmail.com', '123456789', '123456789', 'M', '1985-07-17', '09997531548', 6, '2011-06-19', 0, '11:00:00', '03:00:00', 'Wed'),
('default.jpg', 19, 'ACLDI091182000', '2020-01-01', 'Frederico', NULL, 'Alburo', 'falburo@gmail.com', '123456789', '123456789', 'M', '1978-09-26', '09192554863', 12, '2009-04-17', 0, '08:00:00', '07:00:00', 'Fri');

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
('default.jpg', 1, 'ACLHL000000017', '2020-01-01', 'Zander', NULL, 'Ubaldo', 'zubaldo@gmail.com', '123456789', '123456789', '1988-12-20', 'M', '09154269173', '2015-03-25', 0, 5, '12:00:00', '09:00:00', 'Mon'),
('default.jpg', 2, 'ACLHL000000016', '2020-01-01', 'Dario', NULL, 'Traquina', 'dtraquina@gmail.com', '123456789', '123456789', '1976-03-01', 'M', '09151496857', '2013-08-21', 1, 10, '01:00:00', '09:00:00', 'Tue'),
('default.jpg', 3, 'ACLHL230676015', '2020-01-01', 'Carlo', NULL, 'Tigbawan', 'ctigbawan@gmail.com', '123456789', '123456789', '1987-05-11', 'M', '09150138304', '2014-11-01', 0, 3, '01:00:00', '09:00:00', 'Wed'),
('default.jpg', 4, 'ACLHL000000014', '2020-01-01', 'Anthony', NULL, 'Tanaya', 'atanaya@gmail.com', '123456789', '123456789', '1984-09-15', 'M', '09154736181', '2013-10-11', 0, 7, '03:00:00', '10:00:00', 'Thurs'),
('default.jpg', 5, 'ACLHL000000013', '2020-01-01', 'Elembert', NULL, 'Rodriguez', 'erodriguez@gmail.com', '123456789', '123456789', '1985-08-30', 'M', '09170143697', '2018-02-25', 0, 2, '03:00:00', '10:00:00', 'Thurs'),
('default.jpg', 6, 'ACLHL011288012', '2020-01-01', 'Arkeo', NULL, 'Mendez', 'amendez@gmail.com', '123456789', '123456789', '1969-07-24', 'M', '09103451236', '2009-01-15', 0, 12, '03:00:00', '10:00:00', 'Wed'),
('default.jpg', 7, 'ACLHL011288011', '2020-01-01', 'Berto', NULL, 'Lozada', 'blozada@gmail.com', '123456789', '123456789', '1985-06-30', 'M', '09135715948', '2012-02-26', 1, 6, '04:00:00', '12:00:00', 'Fri'),
('default.jpg', 8, 'ACLHL221285010', '2020-01-01', 'Francisco', NULL, 'Lomente', 'jlomente@gmail.com', '123456789', '123456789', '1983-08-31', 'M', '09676247831', '2018-04-20', 0, 6, '05:00:00', '09:00:00', 'Sat'),
('default.jpg', 9, 'ACLHL211294009', '2020-01-01', 'Sandro', NULL, 'Lomente', 'slomente@gmail.com', '123456789', '123456789', '1986-07-11', 'M', '09051478365', '2014-05-17', 0, 5, '05:00:00', '05:00:00', 'Sun'),
('default.jpg', 10, 'ACLHL090395007', '2020-01-01', 'Gardo', NULL, 'Librojo', 'glibrojo@gmail.com', '123456789', '123456789', '1984-06-23', 'M', '09153146987', '2015-07-13', 0, 4, '09:00:00', '04:00:00', 'Sat'),
('default.jpg', 11, 'ACLHL231076006', '2020-01-01', 'Armando', NULL, 'Lagrimas', 'alagrimas@gmail.com', '123456789', '123456789', '1984-12-10', 'M', '09364251658', '2011-03-29', 1, 8, '01:00:00', '02:00:00', 'Mon'),
('default.jpg', 12, 'ACLHL280599005', '2020-01-01', 'Virgilio', NULL, 'Jaballa', 'vjaballa@gmail.com', '123456789', '123456789', '1985-08-11', 'M', '09458621403', '2016-09-23', 0, 3, '02:00:00', '12:00:00', 'Wed'),
('default.jpg', 13, 'ACLHL281190004', '2020-01-01', 'Jester', NULL, 'Fernandez', 'jfernandez@gmail.com', '123456789', '123456789', '1975-04-14', 'M', '09073556128', '2010-12-21', 1, 12, '07:00:00', '12:00:00', 'Sun'),
('default.jpg', 14, 'ACLHL180589003', '2020-01-01', 'Mario', NULL, 'Deguitos', 'mdeguitos@gmail.com', '123456789', '123456789', '1987-10-14', 'M', '09154669875', '2015-01-20', 0, 5, '09:00:00', '08:00:00', 'Wed'),
('default.jpg', 15, 'ACLHL260490002', '2020-01-01', 'Lito', NULL, 'Catalan Jr.', 'lcatalan@gmail.com', '123456789', '123456789', '1981-03-18', 'M', '09478621034', '2009-06-28', 0, 9, '12:00:00', '12:00:00', 'Fri'),
('default.jpg', 16, 'ACLHL000000021', '2020-01-01', 'Dereck', NULL, 'Traqueña', 'dtraqueña@gmail.com', '123456789', '123456789', '1988-09-12', 'M', '09365448607', '2012-02-22', 0, 4, '11:00:00', '12:00:00', 'Tue'),
('default.jpg', 17, 'ACLHL000000001', '2020-01-01', 'Jason', NULL, 'Ablazo', 'jablazo@gmail.com', '123456789', '123456789', '1976-11-13', 'M', '09125647820', '2014-05-06', 1, 4, '12:00:00', '09:00:00', 'Thurs'),
('default.jpg', 18, 'ACLHL000000019', '2020-01-01', 'Ronald', NULL, 'Dumas', 'rdumas@gmail.com', '123456789', '123456789', '1985-07-17', 'M', '09997531548', '2011-06-19', 0, 6, '11:00:00', '03:00:00', 'Wed'),
('default.jpg', 19, 'ACLHL000000020', '2020-01-01', 'Art', NULL, 'Mangawang', 'amangawang@gmail.com', '123456789', '123456789', '1978-09-26', 'M', '09192554863', '2009-04-17', 0, 12, '08:00:00', '07:00:00', 'Fri'),
('default.jpg', 20, 'ACLHL000000018', '2020-01-01', 'Allan', NULL, 'Catalan', 'acatalan@gmail.com', '123456789', '123456789', '1981-02-24', 'M', '09192554863', '2011-05-12', 0, 12, '08:00:00', '07:00:00', 'Mon'),
('default.jpg', 21, 'ACLDI311273008', '2020-01-01', 'Nino', NULL, 'Altamia', 'nltamia@gmail.com', '123456789', '123456789', '1984-06-23', 'M', '09153146987', '2015-07-13', 1, 4, '09:00:00', '04:00:00', 'Sat'),
('default.jpg', 22, 'ACLDI271643009', '2020-01-01', 'Ethan', NULL, 'Bitoon', 'ebitoon@gmail.com', '123456789', '123456789', '1986-07-11', 'M', '09051478365', '2014-05-17', 0, 5, '05:00:00', '05:00:00', 'Sun'),
('default.jpg', 23, 'ACLDI280588010', '2020-01-01', 'Mauricio', NULL, 'Paras', 'mparas@gmail.com', '123456789', '123456789', '1983-08-31', 'M', '09676247831', '2018-04-20', 0, 6, '05:00:00', '09:00:00', 'Sat'),
('default.jpg', 24, 'ACLDI000000039', '2020-01-01', 'Mio', NULL, 'Sareno', 'msareno@gmail.com', '123456789', '123456789', '1985-06-30', 'M', '09135715948', '2012-02-26', 0, 6, '04:00:00', '12:00:00', 'Fri'),
('default.jpg', 25, 'ACLDI070952012', '2020-01-01', 'Raul', NULL, 'Lagutao', 'rlagutao@gmail.com', '123456789', '123456789', '1969-07-24', 'M', '09103451236', '2009-01-15', 0, 12, '03:00:00', '10:00:00', 'Thurs'),
('default.jpg', 26, 'ACLD120884017', '2020-01-01', 'Andrew', NULL, 'Mateo', 'amateo@gmail.com', '123456789', '123456789', '1985-08-30', 'M', '09170143697', '2018-02-25', 0, 2, '03:00:00', '10:00:00', 'Thurs'),
('default.jpg', 27, 'ACLDI300862013', '2020-01-01', 'Randy', NULL, 'Caberte', 'rcaberte@gmail.com', '123456789', '123456789', '1984-09-15', 'M', '09154736181', '2013-10-11', 0, 7, '03:00:00', '10:00:00', 'Thurs'),
('default.jpg', 28, 'ACLDI240178014', '2020-01-01', 'Jon', NULL, 'Hondrado', 'jhondrado@gmail.com', '123456789', '123456789', '1987-05-11', 'M', '09150138304', '2014-11-01', 0, 3, '01:00:00', '09:00:00', 'Wed'),
('default.jpg', 29, 'ACLD120884017', '2020-01-01', 'Roniel', NULL, 'Zamora', 'rzamora@gmail.com', '123456789', '123456789', '1985-08-30', 'M', '09170143697', '2018-02-25', 0, 2, '03:00:00', '10:00:00', 'Wed');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(255) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `purchased` date NOT NULL,
  `price` int(25) NOT NULL,
  `unit` varchar(25) NOT NULL,
  `quantity` int(5) NOT NULL,
  `amount` int(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `warning` text NOT NULL
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
('default.jpg', 1, 'Aina', 'Sales', NULL, 'F', '1998-11-04', '09495214786', '2015-02-28', 'ainadrsales@gmail.com', '123456789', '123456789', 0, 1),
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
(1, '', 'FUSO ', 'RLP 377', 'REBUILT TRUCK', '0386-00000240945', '8DC9502620', 'FP54JD-520907', 10500, 210, 10290, 2011, 0, 1),
(2, '', 'ISUZU', 'ABC 8771', 'REBUILT TRUCK', '1301-00000503950', '10PD1-746850', 'EXR71D-3000004', 10500, 5250, 5250, 2013, 0, 2),
(3, 'truck.jpg', 'SINOTRUK HOWO', 'ABF 3040', 'REBUILT TRUCK', '1301-00000410217', 'WD61547150417009747', 'LZZ5CCSC7FA093009', 4000, 4000, 4000, 2015, 0, 0),
(4, 'truck.jpg', 'FAW', '130104', 'REBUILT TRUCK', '1301-00000891410', 'CA6DL237E3F52770098', 'LFWNHXPC6G1F58891', 8000, 4000, 4000, 2016, 0, 0),
(5, 'truck.jpg', 'FAW', '130104', 'REBUILT TRUCK', '1301-00000891408', 'CA6DL237E3F52770099', 'LFWNHXPC6G1F58890', 8000, 4000, 4000, 2016, 0, 0),
(6, 'truck.jpg', 'FAW', '130102', 'REBUILT TRUCK', '1301-00001079279', 'CA6DL237E3F52935945', 'LFWSRXPJ7H1E61858', 8000, 4000, 4000, 2017, 0, 0),
(7, 'truck.jpg', 'MTSHUBISHI - FUSO', 'RCE 120', 'DROPSIDE', '0386-00000094576', '8DC11-393526', 'FU419U-540165', 5000, 4000, 4000, 2009, 0, 0),
(8, 'truck.jpg', 'FUSO TRUCK', 'RFR 667', 'DROPSIDE', '0386-00000149453', '8DC11-350914', 'FP411D-550069', 5000, 3000, 4000, 2014, 0, 0),
(9, 'truck.jpg', 'FUSO TRUCK', 'RGY 294', 'DROPSIDE', '0386-00000171817', '8DC9-430796', 'FP415D-650542', 5000, 3000, 4000, 2014, 0, 0),
(10, 'truck.jpg', 'FUSO TRUCK', 'RLE 993', 'DROPSIDE', '0386-00000231282', '6D40235396', 'FP445D-550002', 5000, 3000, 4000, 2011, 0, 0),
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

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
