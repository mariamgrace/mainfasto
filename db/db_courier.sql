-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 06:18 PM
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
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_courier`
--

INSERT INTO `tbl_courier` (`courier_id`, `pickup_id`, `delivery_id`, `courier_image`, `courier_cat`, `courier_weight`, `courier_price`, `status`) VALUES
(18, 19, 19, 'iconn.png', 'Medical', 1, 100, 'Pending'),
(19, 20, 20, 'DOCS1.jpg', 'Document', 1, 100, 'Pending'),
(20, 21, 21, 'PIC1.jpg', 'Document', 2, 200, 'Pending'),
(21, 22, 22, 'fragileimg1.jpg', 'Document', 2, 200, 'Pending'),
(22, 23, 23, 'medicineimg3.jpg', 'Medical', 3, 300, 'Pending'),
(23, 24, 24, 'fooditemimg1.jpg', 'Medical', 3, 300, 'Pending'),
(24, 25, 25, 'UC-3ba151c1-d831-4dc9-8c3d-821f99f26339.jpg', 'Medical', 1, 100, 'Pending'),
(25, 26, 26, 'fragileimg3.png', 'Non-Fragile', 3, 300, 'Pending'),
(32, 33, 33, 'fragileimg1.jpg', 'Medical', 3, 300, 'Pending');

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
(20, 'Kanjirappally', 'House no 2', 'College', 'Job Mathew', 'on', '8900654322', 'Pending'),
(21, 'Kanjirappally', 'House no 78', 'College Road', 'Joel Sam', 'on', '7866889912', 'Pending'),
(22, 'manimala', 'House no 27', 'walk', 'Rubin', 'on', '9099887741', 'Pending'),
(23, 'ABCDE', 'ABCDE', 'ABCDE', 'ABCDE', 'on', '9099889900', 'Pending'),
(24, 'xxcvss', 'House no 2', 'wqwwde', 'Jobin Georgew', 'on', '33344442222', 'Pending'),
(25, 'ABCDE', 'House no 27', 'College Road', 'Jobin George', 'on', '7844562234', 'Pending'),
(26, 'manimala', 'House no 266', 'Near Shrine', 'Aksa', 'on', '8900654322', 'Pending'),
(33, 'Kanjirappally', 'House no 279', 'College Road', 'SWEETY', 'on', '7844562234', 'Pending');

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
(82, 'Ashmy', '890765477999', 'f502c284d55bda016f9befb3b25cb35f', 'ashmy@gmail.com', 'Customer', '');

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
(1, 'MERCY', 300, 'complete', 'pay_JFjd4GWyl4nuQn', '2022-04-05 06:06:42');

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
(20, 'Kanjirappally West', 'Building no A222', 'Near Govt School', 'Sherin Thomas', 'on', '908877897', '2022-03-25', '0000-00-00 00:00:00', 'Pending'),
(21, 'Koovappally', 'Amal Jyothi college', 'Holycross hospital', 'Ebin C', 'on', '8977664533', '2022-03-17', '0000-00-00 00:00:00', 'Pending'),
(22, 'kmta', 'junction', 'run', 'Stephymol', 'on', '9099887788', '2022-03-26', '0000-00-00 00:00:00', 'Pending'),
(23, 'ABCD', 'ABCD', 'ABCD', 'ABCD', 'on', '8999009988', '2022-03-25', '0000-00-00 00:00:00', 'Pending'),
(24, 'jjjj', 'scece', 'sewdexd', 'Sherin Thomas', 'on', '9000998999', '2022-03-22', '0000-00-00 00:00:00', 'Pending'),
(25, 'pathanamthitta', 'House no 14 South Road', 'Near car showroom', 'Alice James', 'on', '8999112200', '2022-03-19', '0000-00-00 00:00:00', 'Pending'),
(26, 'Kanjiramatam', 'HOUSE 234', 'near temple', 'Arjun', 'on', '8900998899', '2022-04-15', '0000-00-00 00:00:00', 'Pending'),
(33, 'Koovappally', 'House no 14 South Road', 'AJCE', 'BETTY', 'on', '9099887456', '2022-04-22', '0000-00-00 00:00:00', 'Pending');

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
  MODIFY `courier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_courierboy`
--
ALTER TABLE `tbl_courierboy`
  MODIFY `courierboy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=980057;

--
-- AUTO_INCREMENT for table `tbl_deliverydetails`
--
ALTER TABLE `tbl_deliverydetails`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pickupdetails`
--
ALTER TABLE `tbl_pickupdetails`
  MODIFY `pickup_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
