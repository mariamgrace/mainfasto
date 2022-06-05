-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 10:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assigncourier`
--

CREATE TABLE `tbl_assigncourier` (
  `assign_id` int(11) NOT NULL,
  `assign_courierid` int(30) NOT NULL,
  `assigned_courierboy` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_assigncourier`
--

INSERT INTO `tbl_assigncourier` (`assign_id`, `assign_courierid`, `assigned_courierboy`) VALUES
(28, 63, 77),
(31, 62, 81),
(33, 43, 81),
(35, 58, 77),
(37, 57, 77),
(39, 64, 81),
(40, 67, 81),
(41, 43, 81),
(42, 41, 81);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier`
--

CREATE TABLE `tbl_courier` (
  `courier_id` int(11) NOT NULL,
  `consignment_no` int(100) NOT NULL,
  `pickup_id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `courier_image` varchar(100) NOT NULL,
  `courier_cat` varchar(100) NOT NULL,
  `courier_weight` int(11) NOT NULL,
  `courier_price` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_courier`
--

INSERT INTO `tbl_courier` (`courier_id`, `consignment_no`, `pickup_id`, `delivery_id`, `courier_image`, `courier_cat`, `courier_weight`, `courier_price`, `status`) VALUES
(40, 0, 41, 41, 'fooditemimg2.jpg', 'Non-Fragile', 2, 200, 'Pending'),
(41, 0, 42, 42, 'docimg1.jpg', 'Medical', 3, 300, 'Pending'),
(42, 0, 43, 43, 'medicineimg1.jpg', 'Fragile', 2, 200, 'Pending'),
(43, 0, 44, 44, 'medicineimg3.jpg', 'Medical', 2, 200, 'Pending'),
(44, 0, 45, 45, 'medicineimg2.jpg', 'Medical', 2, 200, 'Pending'),
(57, 0, 48, 48, 'gragileimg2.jpg', 'Fragile', 1, 100, 'Pending'),
(58, 0, 49, 49, 'DOCS3.jpg', 'Medical', 1, 100, 'Pending'),
(59, 0, 50, 50, 'fooditemimg2.jpg', 'Non-Fragile', 2, 200, 'Pending'),
(62, 0, 51, 51, 'docimg1.jpg', 'Medical', 1, 100, 'Pending'),
(63, 0, 52, 52, 'fooditemimg1.jpg', 'Medical', 2, 200, 'Pending'),
(64, 0, 53, 53, 'fooditemimg1.jpg', 'Document', 2, 200, 'Pending'),
(65, 0, 54, 54, 'DOCS3.jpg', 'Medical', 2, 200, 'Pending'),
(67, 0, 56, 56, 'docimg1.jpg', 'Fragile', 2, 200, 'Pending'),
(70, 0, 59, 59, 'Blank diagram - Page 1.png', 'Medical', 3, 300, 'Pending'),
(71, 0, 60, 60, 'Screenshot 2022-05-17 115530.png', 'Medical', 2, 200, 'Pending'),
(72, 0, 61, 61, 'Screenshot 2022-05-17 115530.png', 'Document', 1, 100, 'Pending'),
(73, 0, 62, 62, 'Screenshot (193).png', 'Medical', 3, 300, 'Pending'),
(74, 0, 63, 63, 'Screenshot 2022-05-17 115601.png', 'Medical', 3, 300, 'Pending'),
(75, 0, 64, 64, 'Blank diagram - Page 1.png', 'Document', 1, 100, 'Pending'),
(76, 0, 65, 65, 'Blank diagram - Page 1.png', 'Document', 1, 100, 'Pending'),
(77, 0, 66, 66, 'Screenshot 2022-05-17 115530.png', 'Medical', 3, 300, 'Pending'),
(79, 0, 68, 68, 'Screenshot 2022-05-30 154946.png', 'Medical', 3, 300, 'Pending'),
(80, 0, 69, 69, 'Screenshot 2022-05-17 115601.png', 'Medical', 3, 300, 'Pending'),
(81, 0, 70, 70, 'Screenshot 2022-05-17 114709.png', 'Fragile', 2, 200, 'Pending'),
(82, 0, 71, 71, 'Blank diagram - Page 1.png', 'Medical', 3, 300, 'Pending'),
(83, 0, 72, 72, 'DOCS1.jpg', 'Medical', 2, 200, 'Pending'),
(84, 0, 73, 73, 'fragileimg1.jpg', 'Fragile', 3, 300, 'Pending'),
(85, 0, 74, 74, 'iconn.png', 'Non-Fragile', 3, 300, 'Pending'),
(86, 0, 76, 76, 'DOCS2.jpg', 'Document', 3, 300, 'Pending'),
(87, 0, 81, 81, 'fooditemimg1.jpg', 'Document', 2, 200, 'Pending'),
(88, 0, 82, 82, 'DOCS1.jpg', 'Document', 2, 200, 'Pending'),
(89, 0, 83, 83, 'DOCS1.jpg', 'Medical', 2, 200, 'Pending'),
(90, 585462912, 0, 0, '', '', 0, 0, ''),
(91, 0, 84, 84, 'docimg1.jpg', 'Medical', 3, 300, 'Pending'),
(92, 989386684, 85, 85, 'docimg1.jpg', 'Medical', 2, 200, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courierboy`
--

CREATE TABLE `tbl_courierboy` (
  `courierboy_id` int(11) NOT NULL,
  `idnumber` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `doj` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_courierboy`
--

INSERT INTO `tbl_courierboy` (`courierboy_id`, `idnumber`, `fullname`, `phone`, `dob`, `gender`, `doj`) VALUES
(788899, 81, 'Ebin John', 2147483647, '1998-11-18', 'on', '2022-04-05'),
(980056, 77, 'Sanju Abraham', 2147483647, '2007-06-17', 'on', '2022-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courierstatus`
--

CREATE TABLE `tbl_courierstatus` (
  `courier_status_id` int(11) NOT NULL,
  `courier_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deliverydetails`
--

CREATE TABLE `tbl_deliverydetails` (
  `delivery_id` int(11) NOT NULL,
  `delivery_loc` varchar(200) NOT NULL,
  `delivery_addr` varchar(200) NOT NULL,
  `delivery_ins` varchar(200) NOT NULL,
  `delivery_receiver` varchar(100) NOT NULL,
  `delivery_addrtype` varchar(100) NOT NULL,
  `delivery_mobile` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_deliverydetails`
--

INSERT INTO `tbl_deliverydetails` (`delivery_id`, `delivery_loc`, `delivery_addr`, `delivery_ins`, `delivery_receiver`, `delivery_addrtype`, `delivery_mobile`, `status`) VALUES
(41, 'Kanjirappally', 'House no 2', 'Postoffice', 'Jailakshmi', 'Home', '8933220912', 'Pending'),
(42, 'Erumeli', 'House no 22', 'College Road', 'Nikky George', 'Office', '7844562234', 'Pending'),
(43, 'Pala', 'House no 27', 'College Road', 'Jacob K', 'Office', '9899453321', 'Pending'),
(44, 'Erumeli', 'House no 22', 'Near Shrine', 'Aleena Elsa', 'Office', '7844562234', 'Pending'),
(45, 'Kanjirappally', 'House no 2', 'College', 'Aleena Elsa', 'Office', '8933220912', 'Pending'),
(48, 'Pala', 'House no 22', 'College', 'Liyan Susan', 'Home', '7899654412', 'Pending'),
(49, 'Kanjirappally', 'House no 22', 'Market', 'Manas P', 'Home', '7844562234', 'Pending'),
(50, 'Erumeli', 'House no 27', 'College Road', 'Frank Mathew', 'Home', '7899654412', 'Pending'),
(51, 'Kanjirappally', 'House no 289', 'Shopping mall', 'Angel', 'Home', '7844562234', 'Pending'),
(52, 'Kanjirappally', 'House no 22', 'College Road', 'Rincy', 'Office', '7899654412', 'Pending'),
(53, 'Kanjirappally', 'House no 22', 'College Road', 'Vaidehi', 'Office', '9088667566', 'Pending'),
(54, 'Kanjirappally', 'House no 229', 'Near Shrine', 'Ammu', 'Office', '7899654419', 'Pending'),
(56, 'Kanjirappally', 'House no 229', 'College', 'Kevin Liza', 'Home', '7899654487', 'Pending'),
(59, 'Erumeli', 'House no 221', 'College', 'John Thomas', 'Home', '7899654412', 'Pending'),
(60, 'Pala', 'House no 27', 'Near Shrine', 'Aleena Elsa', 'Home', '7899654412', 'Pending'),
(61, 'Erumeli', 'House no 2', 'asda', 'Liyan Susan', 'Office', '7899654412', 'Pending'),
(62, 'Pala', 'House no 22', 'Near Shrine', 'Stephy', 'Office', '7844562234', 'Pending'),
(63, 'Erumeli', 'House no 27', 'College Road', 'John Thomas', 'Office', '7844562234', 'Pending'),
(64, 'Kanjirappally', 'House no 27', 'asda', 'John Thomas', 'Office', '7899654412', 'Pending'),
(65, 'Kanjirappally', 'House no 27', 'asda', 'John Thomas', 'Office', '7899654412', 'Pending'),
(66, 'Erumeli', 'House no 22', 'College Road', 'Aleena Elsa', 'Office', '7844562234', 'Pending'),
(68, 'Pala', 'House no 2255', 'College Road', 'John Thomas', 'Office', '7899654412', 'Pending'),
(69, 'Pala', 'House no 22', 'Near Shrine', 'Jacob Jojy', 'Office', '7899654411', 'Pending'),
(70, 'Erumeli', 'House no 2', 'College', 'Maneeksha', 'Home', '7899654489', 'Pending'),
(71, 'Kanjirappally', 'House no 33', 'College', 'Jaison', 'Office', '7899654411', 'Pending'),
(72, 'Erumeli', 'House no 200', 'College', 'Lilly Abraham', 'Office', '9088667545', 'Pending'),
(73, 'Pala', 'House no 2709', 'Palace', 'Kevin Thomas', 'Office', '7899654465', 'Pending'),
(74, 'Erumeli', 'House no 09', 'College', 'Albin', 'Home', '7899654999', 'Pending'),
(75, 'Kanjirappally', 'House no 22', 'College Road', 'Aleena Elsa', 'Home', '7899654412', 'Pending'),
(76, 'Kanjirappally', 'House no 22', 'College Road', 'Liyan Susan', 'Office', '7844562234', 'Pending'),
(77, 'Kanjirappally', 'House no 22', 'Near Shrine', 'John Thomas', 'Office', '7844562234', 'Pending'),
(78, 'Erumeli', 'House no 27', 'College Road', 'John Thomas', 'Home', '7844562234', 'Pending'),
(79, 'Pala', 'House no 22', 'Near Shrine', 'John Thomas', 'Home', '7844562234', 'Pending'),
(80, 'Erumeli', 'House no 27', 'Near Shrine', 'John Thomas', 'Office', '7899654412', 'Pending'),
(81, 'Pala', 'House no 27', 'College', 'Manas', 'Office', '7844562234', 'Pending'),
(82, 'Pala', 'House no 22', 'College', 'Aleena', 'Office', '7844562209', 'Pending'),
(83, 'Kanjirappally', 'House no 27', 'College Road', 'John Thomas', 'Office', '7899654412', 'Pending'),
(84, 'Erumeli', 'House no 2', 'Near Shrine', 'Rose', 'Office', '8933220912', 'Pending'),
(85, 'Erumeli', 'House no 27', 'Near Shrine', 'Antony', 'Office', '7844562234', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `aadharid` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `aadharid`, `password`, `email`, `role`, `status`) VALUES
(20, 'Admin', '899877665409', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', '', '0'),
(74, 'Stephy', '703412887763', 'b0add10eedfaf27f9a5ea06cfc74498e', 'stephy@gmail.com', 'Customer', ''),
(76, 'jyothika', '788998834556', '52c0b8cf83df8f1e25e66fbd1acc8870', 'jyothika@gmail.com', 'Staff', '0'),
(77, 'sanju', '567788990099', 'c24526bfc0fe42d8b09a314e64d7b0d9', 'sanju@gmail.com', 'Courier Boy', '0'),
(78, 'Priya', '909933448881', '0b1c8bc395a9588a79cd3c191c22a6b4', 'priya@gmail.com', 'Customer', ''),
(79, 'Sruthy', '909988998899', 'ec1f76b073c3b6c489ca898013f8706d', 'sruthy@gmail.com', 'Customer', ''),
(80, 'Mercy', '900011234555', '375d9d714cbdd036829fb36ab8720f85', 'mercy@gmail.com', 'Customer', ''),
(81, 'ebin', '890066778899', '902be203e2cde47df9e0533e7a3b8a80', 'ebin@gmail.com', 'Courier Boy', '0'),
(82, 'Ashmy', '890765477999', 'f502c284d55bda016f9befb3b25cb35f', 'ashmy@gmail.com', 'Customer', ''),
(83, 'Swedha', '986677855666', 'fa0d9f7b3c9929b50ae40031fa6eca37', 'swedha@gmail.com', 'Customer', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `name`, `amount`, `payment_status`, `payment_id`, `added_on`) VALUES
(1, 'MERCY', 300, 'complete', 'pay_JFjd4GWyl4nuQn', '2022-04-05 06:06:42'),
(2, 'soorya', 980, 'complete', 'pay_JG6tK2W7OUCr17', '2022-04-06 04:51:03'),
(5, 'JEVIN', 100, 'complete', 'pay_JG7SQBVknfd1p9', '2022-04-06 05:25:25'),
(7, 'Soorya P', 300, 'failed', '', '2022-05-04 07:18:22'),
(11, 'JOSE', 200, 'complete', 'pay_JREpBjWKbjHn8z', '2022-05-04 07:46:55'),
(12, 'anu', 200, 'complete', 'pay_JRQbCFTLhXRMUX', '2022-05-05 07:18:04'),
(13, 'Meenu Susan', 200, 'complete', 'pay_JRawwHpsVvlthK', '2022-05-05 05:25:30'),
(14, 'jOVITA', 200, 'complete', 'pay_JRbBAktXvNgrOM', '2022-05-05 05:39:04'),
(15, 'rubin@gmail.com', 300, 'complete', 'pay_JRd7Pvnqkg9sNo', '2022-05-05 07:32:41'),
(16, 'alantina@gmail.com', 100, 'complete', 'pay_JRdMaB0EOE3LBD', '2022-05-05 07:47:06'),
(17, 'gloriya@gmail.com', 100, 'complete', 'pay_JRuet4c86cJr3f', '2022-05-06 12:41:26'),
(18, 'gloriya@gmail.com', -100, 'failed', '', '2022-05-06 12:44:10'),
(19, 'jerin@gmail.com', 200, 'complete', 'pay_JTUVIH8Aa2n8ra', '2022-05-10 12:25:15'),
(20, 'ashmy@gmail.com', 200, 'complete', 'pay_JUDvoNv7daERJ1', '2022-05-12 08:51:21'),
(21, 'reshma@gmail.com', 300, 'failed', '', '2022-05-17 05:58:53'),
(22, 'alice', 100, 'failed', '', '2022-05-26 05:23:38'),
(23, 'alice', 100, 'failed', '', '2022-05-26 05:24:13'),
(32, 'Priya Thomas', 100, 'failed', '', '2022-05-26 07:05:53'),
(33, 'Staff2', 100, 'failed', '', '2022-05-26 07:34:10'),
(34, 'sona', 300, 'failed', '', '2022-05-26 07:35:10'),
(35, '', 300, 'complete', 'pay_JZwZbpDdZ3nxX0', '2022-05-26 07:45:45'),
(36, '', 300, 'failed', '', '2022-05-26 07:47:59'),
(37, 'undefined', 0, 'failed', '', '2022-05-27 06:37:05'),
(38, '', 200, 'failed', '', '2022-05-30 05:24:02'),
(39, 'Stephy', 300, 'complete', 'pay_JdpbuVCeA4ie59', '2022-06-05 03:33:49'),
(40, 'alwin', 300, 'complete', 'pay_JdsEsT0zjtVgMP', '2022-06-05 06:08:01'),
(41, 'Telbin', 200, 'complete', 'pay_JdtAt7nn4HzH40', '2022-06-05 07:03:10'),
(42, '', 200, 'failed', '', '2022-06-05 07:30:24'),
(43, '', 200, 'failed', '', '2022-06-05 07:32:13'),
(44, 'Staff2', 200, 'failed', '', '2022-06-05 07:32:18'),
(45, '', 200, 'failed', '', '2022-06-05 07:33:49'),
(46, '', 200, 'failed', '', '2022-06-05 07:34:15'),
(47, 'Stephy', 200, 'failed', '', '2022-06-05 07:34:26'),
(48, 'Stephy', 200, 'complete', 'pay_Jdtj9CIBVticMx', '2022-06-05 07:34:56'),
(49, 'soorya', 200, 'complete', 'pay_JdtntnMab3fUg7', '2022-06-05 07:40:16'),
(50, 'soorya', 200, 'complete', 'pay_JdtqXE5XHwRLHL', '2022-06-05 07:42:46'),
(51, '', 200, 'failed', '', '2022-06-05 07:57:15'),
(52, 'CourierBoy', 200, 'failed', '', '2022-06-05 07:57:47'),
(53, '', 200, 'failed', '', '2022-06-05 07:59:29'),
(54, 'priya', 200, 'complete', 'pay_Jdu8UOFHWFGGzb', '2022-06-05 07:59:39'),
(55, '', 200, 'failed', '', '2022-06-05 08:52:11'),
(56, 'soorya', 200, 'complete', 'pay_Jdv1ziQm2M6tkm', '2022-06-05 08:52:19'),
(57, 'soorya', 200, 'complete', 'pay_JdvDJNr2cJvpsK', '2022-06-05 09:02:57'),
(58, 'sona', 300, 'complete', 'pay_JdvYGmbl6m7Ll4', '2022-06-05 09:22:50'),
(59, '', 300, 'failed', '', '2022-06-05 09:25:35'),
(60, 'sona', 300, 'complete', 'pay_JdvbJPYttdXCDV', '2022-06-05 09:25:43'),
(61, 'amal', 200, 'failed', '', '2022-06-05 09:33:27'),
(62, 'Amal', 200, 'failed', '', '2022-06-05 09:51:29'),
(63, 'Amal', 200, 'failed', '', '2022-06-05 09:51:35'),
(64, 'Amal', 200, 'failed', '', '2022-06-05 09:51:37'),
(65, 'Amal', 200, 'failed', '', '2022-06-05 09:51:41'),
(66, 'Amal', 200, 'complete', 'pay_Jdw2xAanf6qiRk', '2022-06-05 09:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pickupdetails`
--

CREATE TABLE `tbl_pickupdetails` (
  `pickup_id` int(50) NOT NULL,
  `pickup_loc` varchar(200) NOT NULL,
  `pickup_addr` varchar(200) NOT NULL,
  `pickup_ins` varchar(200) NOT NULL,
  `pickup_sender` varchar(100) NOT NULL,
  `pickup_addrtype` varchar(100) NOT NULL,
  `pickup_mobile` varchar(100) NOT NULL,
  `pickup_date` date NOT NULL,
  `pickup_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pickupdetails`
--

INSERT INTO `tbl_pickupdetails` (`pickup_id`, `pickup_loc`, `pickup_addr`, `pickup_ins`, `pickup_sender`, `pickup_addrtype`, `pickup_mobile`, `pickup_date`, `pickup_time`, `status`) VALUES
(41, 'Erumeli', 'Building no A12', 'Gen Hospital', 'Krishna Biju', 'Office', '8900665674', '2022-05-26', '2022-05-04 17:05:23', 'Pending'),
(42, 'Pala', 'Building No. 32', 'Near School', 'Soorya P', 'Home', '9099887789', '2022-05-19', '2022-05-04 17:15:17', 'Pending'),
(43, 'Erumeli', 'Building No. 32', 'Church RC', 'Jose K', 'Home', '8977563412', '2022-05-20', '2022-05-04 17:45:49', 'Pending'),
(44, 'Kanjirappally', 'Building no A12', 'Near church', 'Anjali Rachel', 'Home', '8900665674', '2022-05-26', '2022-05-04 18:25:17', 'Pending'),
(45, 'Erumeli', 'Building no A12', 'Near School', 'Alvin George', 'Home', '9099887789', '2022-05-19', '2022-05-05 05:17:43', 'Pending'),
(48, 'Erumeli', 'Building No. 32', 'Near church', 'Meenu Susan', 'Home', '9877654566', '2022-05-26', '2022-05-05 15:25:12', 'Pending'),
(49, 'Erumeli', 'Building No. 32', 'Near School', 'Jovita', 'Office', '8933445509', '2022-05-19', '2022-05-05 15:38:49', 'Pending'),
(50, 'Erumeli', 'Building No. 32', 'Hospital', 'Rubin Siby', 'Office', '9099887789', '2022-05-13', '2022-05-05 17:32:19', 'Pending'),
(51, 'Kanjirappally', 'Building no A12', 'Near School', 'Alantina', 'Office', '9899009978', '2022-05-26', '2022-05-05 17:46:50', 'Pending'),
(52, 'Erumeli', 'Building no A12', 'Near School', 'Gloriya', 'Home', '8900665674', '2022-05-13', '2022-05-06 10:39:48', 'Pending'),
(53, 'Erumeli', 'Building No. 323', 'Near School', 'Jerin', 'Home', '8977886650', '2022-05-19', '2022-05-10 10:24:14', 'Pending'),
(54, 'Kanjirappally', 'Building No. 3299', 'Library', 'Ashmy', 'Home', '9088556499', '2022-05-20', '2022-05-12 06:51:09', 'Pending'),
(56, 'Pala', 'House 78, Pala ', 'School', 'Reshma P', 'Home', '9088667522', '2022-05-19', '2022-05-17 03:58:34', 'Pending'),
(59, 'Kanjirappally', 'Building no A1211', 'Near church', 'Dona', 'Office', '9088556422', '2022-05-28', '2022-05-26 15:13:14', 'Pending'),
(60, 'Erumeli', 'Building no A1200', 'Near church', 'Meenu Susan', 'Home', '9877654560', '2022-05-27', '2022-05-26 15:14:56', 'Pending'),
(61, 'Erumeli', 'Building No. 32', 'Near School', 'Alice Thomas', 'Home', '9099887789', '2022-05-27', '2022-05-26 15:22:33', 'Pending'),
(62, 'Erumeli', 'Building No. 32', 'Near church', 'Priya Thomas', 'Home', '9877654566', '2022-05-28', '2022-05-26 16:51:04', 'Pending'),
(63, 'Erumeli', 'Building no A12', 'Near School', 'Meenu Susan', 'Office', '9088556455', '2022-06-04', '2022-05-26 17:05:34', 'Pending'),
(64, 'Kanjirappally', 'Building no A12', 'KKSk', 'Alvin George', 'Home', '8977563412', '2022-05-28', '2022-05-26 17:28:48', 'Pending'),
(65, 'Kanjirappally', 'Building no A12', 'KKSk', 'Alvin George', 'Home', '8977563412', '2022-05-28', '2022-05-26 17:30:03', 'Pending'),
(66, 'Pala', 'Building no A12', 'Near car showroom', 'Alice James', 'Office', '9088556455', '2022-05-28', '2022-05-26 17:35:03', 'Pending'),
(68, 'Erumeli', 'hannns', 'Near car showroom', 'Alvin', 'Home', '9877654566', '2022-06-03', '2022-05-31 05:38:44', 'Pending'),
(69, 'Erumeli', 'Building No. 56', 'School', 'Abyson Mathew', 'Office', '8977563466', '2022-06-10', '2022-06-02 04:30:45', 'Pending'),
(70, 'Kanjirappally', 'Building No. 3299', 'Near church', 'Kurien', 'Home', '9877654599', '2022-06-10', '2022-06-02 05:13:04', 'Pending'),
(71, 'Erumeli', 'Building no A12', 'Near church', 'Rosemol', 'Home', '8977563411', '2022-06-03', '2022-06-02 06:25:00', 'Pending'),
(72, 'Kanjirappally', 'Building No. 32', 'Post Office', 'Liyan Susan', 'Home', '8900665633', '2022-06-10', '2022-06-04 15:17:29', 'Pending'),
(73, 'Erumeli', 'Building no A1289', 'Petrol Pump', 'Phebe Lenin', 'Office', '8799006543', '2022-06-11', '2022-06-05 07:24:55', 'Pending'),
(74, 'Pala', 'Building no A12', 'Near School', 'Akshai', 'Office', '8977563498', '2022-06-10', '2022-06-05 13:33:26', 'Pending'),
(75, 'Pala', 'Building no A12', 'Near car showroom', 'Priya T', 'Home', '8900665674', '2022-06-09', '2022-06-05 16:02:37', 'Pending'),
(76, 'Erumeli', 'Building No. 32', 'Near church', 'Alvin Geo', 'Home', '8977563412', '2022-06-10', '2022-06-05 16:06:24', 'Pending'),
(77, 'Erumeli', 'Building no A12000', 'Near car showroom', 'Dona', 'Home', '9877654566', '2022-06-10', '2022-06-05 16:18:37', 'Pending'),
(78, 'Erumeli', 'Building no A12', 'Near car showroom', 'Meenu Susan Philip', 'Home', '8977563412', '2022-06-11', '2022-06-05 16:26:03', 'Pending'),
(79, 'Erumeli', 'Building No. 32', 'Near church', 'Abyson Mathew', 'Office', '8977563412', '2022-06-10', '2022-06-05 16:45:29', 'Pending'),
(80, 'Erumeli', 'Building no A12', 'Near car showroom', 'Meenu Susan', 'Home', '9099887789', '2022-06-17', '2022-06-05 16:48:22', 'Pending'),
(81, 'Erumeli', 'Building No. 32', 'Near car showroom', 'Telbin', 'Home', '8900665674', '2022-06-10', '2022-06-05 17:03:00', 'Pending'),
(82, 'Pala', 'Building no A12', 'Near School', 'Aksa', 'Office', '8900665674', '2022-06-10', '2022-06-05 17:30:16', 'Pending'),
(83, 'Erumeli', 'Building no A12', 'Near car showroom', 'Soorya', 'Office', '8977563412', '2022-06-08', '2022-06-05 17:40:08', 'Pending'),
(84, 'Kanjirappally', 'Building no A12', 'Near car showroom', 'Sona', 'Office', '9099887789', '2022-06-25', '2022-06-05 19:22:42', 'Pending'),
(85, 'Pala', 'Building no A12', 'Near car showroom', 'Amal', 'Home', '9099887789', '2022-06-10', '2022-06-05 19:33:21', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_id` int(11) NOT NULL,
  `idnumber` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `doj` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `idnumber`, `fullname`, `phone`, `dob`, `gender`, `doj`) VALUES
(678899, 76, 'Jyothika Suresh', 2147483647, '2022-03-07', 'on', '2022-03-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_assigncourier`
--
ALTER TABLE `tbl_assigncourier`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  ADD PRIMARY KEY (`courier_id`);

--
-- Indexes for table `tbl_courierboy`
--
ALTER TABLE `tbl_courierboy`
  ADD PRIMARY KEY (`courierboy_id`);

--
-- Indexes for table `tbl_courierstatus`
--
ALTER TABLE `tbl_courierstatus`
  ADD PRIMARY KEY (`courier_status_id`);

--
-- Indexes for table `tbl_deliverydetails`
--
ALTER TABLE `tbl_deliverydetails`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pickupdetails`
--
ALTER TABLE `tbl_pickupdetails`
  ADD PRIMARY KEY (`pickup_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_assigncourier`
--
ALTER TABLE `tbl_assigncourier`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  MODIFY `courier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `tbl_courierboy`
--
ALTER TABLE `tbl_courierboy`
  MODIFY `courierboy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=980057;

--
-- AUTO_INCREMENT for table `tbl_courierstatus`
--
ALTER TABLE `tbl_courierstatus`
  MODIFY `courier_status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_deliverydetails`
--
ALTER TABLE `tbl_deliverydetails`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_pickupdetails`
--
ALTER TABLE `tbl_pickupdetails`
  MODIFY `pickup_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
