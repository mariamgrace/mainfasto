-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 01:35 PM
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
(42, 41, 81),
(43, 92, 77),
(44, 93, 81),
(45, 94, 81),
(46, 95, 77),
(47, 96, 81),
(48, 98, 77);

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
  `status` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_courier`
--

INSERT INTO `tbl_courier` (`courier_id`, `consignment_no`, `pickup_id`, `delivery_id`, `courier_image`, `courier_cat`, `courier_weight`, `courier_price`, `status`, `username`) VALUES
(92, 989386684, 85, 85, 'docimg1.jpg', 'Medical', 2, 200, 'Out for Pickup', ''),
(93, 882150883, 86, 86, 'DOCS3.jpg', 'Document', 2, 200, 'Out for Pickup', ''),
(94, 880123212, 87, 87, 'fragile.jpeg', 'Fragile', 1, 100, 'Pickup Accepted', ''),
(95, 610972384, 88, 88, 'DOCS1.jpg', 'Medical', 2, 200, 'Pickup Accepted', ''),
(96, 807673148, 89, 89, 'iconbox.png', 'Medical', 3, 300, 'Out for Pickup', '74'),
(97, 657794875, 90, 90, 'DOCS2.jpg', 'Medical', 3, 300, 'Pending', '74'),
(98, 373263003, 91, 91, 'fragileimg3.png', 'Fragile', 3, 300, 'On Transit', '80');

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
(85, 'Erumeli', 'House no 27', 'Near Shrine', 'Antony', 'Office', '7844562234', 'Pending'),
(86, 'Kanjirappally', 'House no 22', 'Near Shrine', 'Soorya P', 'Home', '7844562234', 'Pending'),
(87, 'Pala', 'House no 22', 'College', 'Vaidehi', 'Home', '7844562234', 'Pending'),
(88, 'Pala', 'House no 27', 'College Road', 'Eliza', 'Office', '7844562238', 'Pending'),
(89, 'Pala', 'House no 22', 'College Road', 'Telbin', 'Office', '9099887777', 'Pending'),
(90, 'Pala', 'House no 22', 'College', 'George', 'Office', '7844562234', 'Pending'),
(91, 'Kanjirappally', 'House no 299', 'College', 'Aleena', 'Home', '9099886654', 'Pending');

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
(66, 'Amal', 200, 'complete', 'pay_Jdw2xAanf6qiRk', '2022-06-05 09:51:51'),
(67, 'Stephy@gmail.com', 200, 'complete', 'pay_Je9gXuQZBVVUQj', '2022-06-06 11:12:08'),
(68, 'maneeksha@gmail.com', 100, 'complete', 'pay_Je9itAijF1khs7', '2022-06-06 11:14:32'),
(69, 'Antiontttt', 200, 'complete', 'pay_JeWQ67n2yEhGjX', '2022-06-07 09:25:41'),
(70, 'sona', 300, 'complete', 'pay_JexTyaaQG0nGHw', '2022-06-08 11:55:12'),
(71, 'soorya', 300, 'complete', 'pay_JexdHGpcloaNUC', '2022-06-08 12:03:42'),
(72, 'Abyson', 300, 'complete', 'pay_JexyyYVQ9xa2L7', '2022-06-08 12:24:31');

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
(85, 'Pala', 'Building no A12', 'Near car showroom', 'Amal', 'Home', '9099887789', '2022-06-10', '2022-06-05 19:33:21', 'Pending'),
(86, 'Erumeli', 'Building no A129', 'Near School', 'Sona P', 'Home', '8933445578', '2022-06-10', '2022-06-06 09:11:50', 'Pending'),
(87, 'Kanjirappally', 'Building No. 32', 'Near School', 'Maneeksha', 'Home', '8977563412', '2022-06-10', '2022-06-06 09:14:12', 'Pending'),
(88, 'Pala', 'Building no A127', 'church', 'Meenu Susan', 'Home', '9877654566', '2022-06-08', '2022-06-07 07:25:08', 'Pending'),
(89, 'Pala', 'Building No. 3299', 'Near church', 'Sulu', 'Office', '9088556455', '2022-06-10', '2022-06-08 09:54:41', 'Pending'),
(90, 'Pala', 'Building no A1200', 'Near School', 'Thomas', 'Office', '9088556455', '2022-06-10', '2022-06-08 10:03:34', 'Pending'),
(91, 'Erumeli', 'Building No. 3299', 'Near church', 'Abyson', 'Office', '9099887789', '2022-06-10', '2022-06-08 10:24:18', 'Pending');

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
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  MODIFY `courier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

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
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tbl_pickupdetails`
--
ALTER TABLE `tbl_pickupdetails`
  MODIFY `pickup_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
