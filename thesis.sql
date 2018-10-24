-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 08:23 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
