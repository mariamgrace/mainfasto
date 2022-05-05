-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 09:52 PM
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
-- Table structure for table `tbl_courier`
--

CREATE TABLE `tbl_courier` (
  `courier_id` int(11) NOT NULL,
  `pickup_id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `courier_image` varchar(100) NOT NULL,
  `courier_cat` varchar(100) NOT NULL,
  `courier_weight` int(11) NOT NULL,
  `courier_price` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `assigned_cboy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_courier`
--

INSERT INTO `tbl_courier` (`courier_id`, `pickup_id`, `delivery_id`, `courier_image`, `courier_cat`, `courier_weight`, `courier_price`, `status`, `assigned_cboy_id`) VALUES
(18, 19, 19, 'iconn.png', 'Medical', 1, 100, 'Pending', 0),
(25, 26, 26, 'fragileimg3.png', 'Non-Fragile', 3, 300, 'Pending', 0),
(32, 33, 33, 'fragileimg1.jpg', 'Medical', 3, 300, 'Pending', 0),
(33, 34, 34, 'medicineimg1.jpg', 'Non-Fragile', 3, 300, 'Pending', 0),
(36, 37, 37, 'bannerimagetype.jpg', 'Fragile', 2, 200, 'Pending', 0),
(37, 38, 38, 'medicineimg3.jpg', 'Non-Fragile', 1, 100, 'Pending', 0),
(38, 39, 39, 'medicineimg2.jpg', 'Fragile', 2, 200, 'Pending', 0),
(40, 41, 41, 'fooditemimg2.jpg', 'Non-Fragile', 2, 200, 'Pending', 0),
(41, 42, 42, 'docimg1.jpg', 'Medical', 3, 300, 'Pending', 0),
(42, 43, 43, 'medicineimg1.jpg', 'Fragile', 2, 200, 'Pending', 0),
(43, 44, 44, 'medicineimg3.jpg', 'Medical', 2, 200, 'Pending', 0),
(44, 45, 45, 'medicineimg2.jpg', 'Medical', 2, 200, 'Pending', 0),
(57, 48, 48, 'gragileimg2.jpg', 'Fragile', 1, 100, 'Pending', 0),
(58, 49, 49, 'DOCS3.jpg', 'Medical', 1, 100, 'Pending', 0),
(59, 50, 50, 'fooditemimg2.jpg', 'Non-Fragile', 2, 200, 'Pending', 0),
(62, 51, 51, 'docimg1.jpg', 'Medical', 1, 100, 'Pending', 0);

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
(19, 'dd', 'House no 2', 'Near Shalom', 'Aleena Elsa', 'on', '7899654412', 'Pending'),
(26, 'manimala', 'House no 266', 'Near Shrine', 'Aksa', 'on', '8900654322', 'Pending'),
(33, 'Kanjirappally', 'House no 279', 'College Road', 'SWEETY', 'on', '7844562234', 'Pending'),
(34, 'Kanjirappally', 'House no 22', 'College Road', 'John Thomas', 'on', '7844562234', 'Pending'),
(37, 'Kanjirappally', 'House no 27', 'Near Shrine', 'John Thomas', 'on', '67884455', 'Pending'),
(38, 'Kanjirappally', 'House no 299', 'College Road', 'Alex', 'on', '678844559', 'Pending'),
(39, 'Kanjirappally', 'House no 290', 'HOSPITAL', 'JOSNA', 'on', '8907765', 'Pending'),
(41, 'Kanjirappally', 'House no 2', 'Postoffice', 'Jailakshmi', 'Home', '8933220912', 'Pending'),
(42, 'Erumeli', 'House no 22', 'College Road', 'Nikky George', 'Office', '7844562234', 'Pending'),
(43, 'Pala', 'House no 27', 'College Road', 'Jacob K', 'Office', '9899453321', 'Pending'),
(44, 'Erumeli', 'House no 22', 'Near Shrine', 'Aleena Elsa', 'Office', '7844562234', 'Pending'),
(45, 'Kanjirappally', 'House no 2', 'College', 'Aleena Elsa', 'Office', '8933220912', 'Pending'),
(48, 'Pala', 'House no 22', 'College', 'Liyan Susan', 'Home', '7899654412', 'Pending'),
(49, 'Kanjirappally', 'House no 22', 'Market', 'Manas P', 'Home', '7844562234', 'Pending'),
(50, 'Erumeli', 'House no 27', 'College Road', 'Frank Mathew', 'Home', '7899654412', 'Pending'),
(51, 'Kanjirappally', 'House no 289', 'Shopping mall', 'Angel', 'Home', '7844562234', 'Pending');

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
(16, 'alantina@gmail.com', 100, 'complete', 'pay_JRdMaB0EOE3LBD', '2022-05-05 07:47:06');

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
(19, 'Loca', 'ss', 'Near School', 'Alvin George', 'on', '89990099889', '2022-03-31', '0000-00-00 00:00:00', 'Pending'),
(26, 'Kanjiramatam', 'HOUSE 234', 'near temple', 'Arjun', 'on', '8900998899', '2022-04-15', '0000-00-00 00:00:00', 'Pending'),
(33, 'Koovappally', 'House no 14 South Road', 'AJCE', 'BETTY', 'on', '9099887456', '2022-04-22', '0000-00-00 00:00:00', 'Pending'),
(34, 'Koovappally', 'hannns', 'Near School', 'Anjali Rachel', 'on', '9899988778', '2022-04-16', '0000-00-00 00:00:00', 'Pending'),
(37, 'kanjirappally', 'Building No. 3299', 'Near church', 'Anjali ', 'on', '9066575633', '2022-04-28', '0000-00-00 00:00:00', 'Pending'),
(38, 'Kanjirappally North', 'Building no A1289', 'Postoffice', 'Sam George', 'on', '9877665545', '2022-04-29', '0000-00-00 00:00:00', 'Pending'),
(39, 'Koovappally', 'BLGND 789', 'SHOP', 'JENILIYA', 'on', '9867445678', '2022-04-22', '0000-00-00 00:00:00', 'Pending'),
(41, 'Erumeli', 'Building no A12', 'Gen Hospital', 'Krishna Biju', 'Office', '8900665674', '2022-05-26', '2022-05-04 17:05:23', 'Pending'),
(42, 'Pala', 'Building No. 32', 'Near School', 'Soorya P', 'Home', '9099887789', '2022-05-19', '2022-05-04 17:15:17', 'Pending'),
(43, 'Erumeli', 'Building No. 32', 'Church RC', 'Jose K', 'Home', '8977563412', '2022-05-20', '2022-05-04 17:45:49', 'Pending'),
(44, 'Kanjirappally', 'Building no A12', 'Near church', 'Anjali Rachel', 'Home', '8900665674', '2022-05-26', '2022-05-04 18:25:17', 'Pending'),
(45, 'Erumeli', 'Building no A12', 'Near School', 'Alvin George', 'Home', '9099887789', '2022-05-19', '2022-05-05 05:17:43', 'Pending'),
(48, 'Erumeli', 'Building No. 32', 'Near church', 'Meenu Susan', 'Home', '9877654566', '2022-05-26', '2022-05-05 15:25:12', 'Pending'),
(49, 'Erumeli', 'Building No. 32', 'Near School', 'Jovita', 'Office', '8933445509', '2022-05-19', '2022-05-05 15:38:49', 'Pending'),
(50, 'Erumeli', 'Building No. 32', 'Hospital', 'Rubin Siby', 'Office', '9099887789', '2022-05-13', '2022-05-05 17:32:19', 'Pending'),
(51, 'Kanjirappally', 'Building no A12', 'Near School', 'Alantina', 'Office', '9899009978', '2022-05-26', '2022-05-05 17:46:50', 'Pending');

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
(678899, 76, 'Jyothika Suresh', 2147483647, '2022-03-07', 'on', '2022-03-24'),
(789900, 84, 'Christy', 2147483647, '1993-07-07', 'on', '2022-05-19');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  MODIFY `courier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_courierboy`
--
ALTER TABLE `tbl_courierboy`
  MODIFY `courierboy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=980057;

--
-- AUTO_INCREMENT for table `tbl_deliverydetails`
--
ALTER TABLE `tbl_deliverydetails`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_pickupdetails`
--
ALTER TABLE `tbl_pickupdetails`
  MODIFY `pickup_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
