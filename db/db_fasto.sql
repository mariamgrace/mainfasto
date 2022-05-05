-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 08:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fasto`
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
  `courier_weight` int(20) NOT NULL,
  `courier_price` int(20) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_courier`
--

INSERT INTO `tbl_courier` (`courier_id`, `pickup_id`, `delivery_id`, `courier_image`, `courier_cat`, `courier_weight`, `courier_price`, `status`) VALUES
(1, 1, 1, 'PIC1.jpg', 'Medical', 2, 200, 'Pending'),
(2, 2, 2, 'DOCS2.jpg', 'Document', 1, 100, 'Pending'),
(5, 5, 5, 'fragile.jpeg', 'Fragile', 3, 300, 'Pending');

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
(1, 'Kanjirappally', 'House no 2', 'College Road', 'Aleena Elsa', 'on', '7899654412', 'Pending'),
(2, 'Kanjirappally', 'House no 27', 'Near Shrine', 'John Thomas', 'on', '7844562234', 'Pending'),
(5, 'Kanjirappally', 'House no 22', 'College', 'Jobin George', 'on', '8933220912', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `aadharid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `aadharid`, `password`, `email`, `role`, `status`) VALUES
(1, 'Merin', '908877665545', '834540efae200e7b2d7668c8392e5571', 'merin@gmail.com', 'Customer', ''),
(2, 'Mercy', '456778559009', '375d9d714cbdd036829fb36ab8720f85', 'mercy@gmail.com', 'Customer', ''),
(6, 'Staff', '789006544445', '4d7d719ac0cf3d78ea8a94701913fe47', 'staff@gmail.com', 'Staff', '0'),
(7, 'Staff2', '899667755142', '8bc01711b8163ec3f2aa0688d12cdf3b', 'staff2@gmail.com', 'Staff', '0'),
(8, 'CourierBoy', '345566534412', '9af60f9e13e3522ef52749ab35e73969', 'cboy@gmail.com', 'Courier Boy', ''),
(9, 'staff3', '567788990099', '8f03660f569ce4023dddaea0bf560d74', 'staff3@gmail.com', 'Staff', '0'),
(10, 'Cboy2', '567728893000', '03bffe4272e845e2d21495e0e6125854', 'cboy2@gmail.com', 'Courier Boy', '0'),
(11, 'Admin', '234567788987', 'admin', 'admin@gmail.com', '', ''),
(12, 'Jasmin', '988775566342', 'd3dde2723247d8d5fc3f76dceb3d4324', 'jasmin@gmail.com', 'Customer', '');

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
(1, 'Kanjirappally', 'House no 14 South Road', 'Near church', 'Alvin George', 'on', '9088773412', '2022-03-08', '0000-00-00 00:00:00', 'Pending'),
(2, 'Koovappally', 'Building no A12', 'Near car showroom', 'Anjali Rachel', 'on', '8977662351', '2022-03-19', '0000-00-00 00:00:00', 'Pending'),
(5, 'Kanjirappally North', 'Building No. 32', 'Near School', 'Alice James', 'on', '7832110987', '2022-03-19', '0000-00-00 00:00:00', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  ADD PRIMARY KEY (`courier_id`);

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
-- Indexes for table `tbl_pickupdetails`
--
ALTER TABLE `tbl_pickupdetails`
  ADD PRIMARY KEY (`pickup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  MODIFY `courier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_deliverydetails`
--
ALTER TABLE `tbl_deliverydetails`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_pickupdetails`
--
ALTER TABLE `tbl_pickupdetails`
  MODIFY `pickup_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
