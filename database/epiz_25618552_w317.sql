-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql309.epizy.com
-- Generation Time: Jul 13, 2020 at 11:01 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_25618552_w317`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `billing_info`
--

CREATE TABLE `billing_info` (
  `order_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `address` varchar(500) NOT NULL,
  `zipcode` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_info`
--

INSERT INTO `billing_info` (`order_id`, `member_id`, `first_name`, `last_name`, `country`, `address`, `zipcode`, `city`, `phone_no`, `email`) VALUES
(97, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'New Delhi', 8800980139, 'alokjoshi1412@gmail.com'),
(98, 103, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'New Delhi', 919717966001, 'ashaindramanijoshi@rediffmail.com'),
(99, 103, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'New Delhi', 919717966001, 'ashaindramanijoshi@rediffmail.com'),
(100, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'New Delhi', 9717966001, 'ashaindramanijoshi@rediffmail.com'),
(101, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'New Delhi', 9717966001, 'ashaindramanijoshi@rediffmail.com'),
(102, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'New Delhi', 9717966001, 'ashaindramanijoshi@rediffmail.com'),
(103, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'New Delhi', 9717966001, 'ashaindramanijoshi@rediffmail.com'),
(104, 89, 'prabhat', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'NEW DELHI', 9540879746, 'bcasprabhatjoshi@gmail.com'),
(105, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'NEW DELHI', 8800980139, 'alokjoshi1412@gmail.com'),
(106, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'NEW DELHI', 8800980139, 'alokjoshi1412@gmail.com'),
(107, 89, 'prabhat', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'NEW DELHI', 9540879746, 'bcasprabhatjoshi@gmail.com'),
(108, 89, 'indramani', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'NEW DELHI', 9717966001, 'joshiprabhat261197@gmail.com'),
(109, 89, 'indramani', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'NEW DELHI', 9717966001, 'joshiprabhat261197@gmail.com'),
(110, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'New Delhi', 9717966001, 'ashaindramanijoshi@rediffmail.com'),
(111, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'New Delhi', 9717966001, 'ashaindramanijoshi@rediffmail.com'),
(112, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'New Delhi', 9717966001, 'ashaindramanijoshi@rediffmail.com'),
(113, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1, SADH NAGAR PART-2 PALAM COLONY', '110045', 'NEW DELHI', 8800980139, 'alokjoshi1412@gmail.com'),
(114, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1', '110045', 'New Delhi', 919717966001, 'ashaindramanijoshi@rediffmail.com'),
(115, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1', '110045', 'New Delhi', 919717966001, 'ashaindramanijoshi@rediffmail.com'),
(116, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1', '110045', 'New Delhi', 919717966001, 'alokjoshi1412@gmail.com'),
(117, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1', '110045', 'New Delhi', 919717966001, 'ashaindramanijoshi@rediffmail.com'),
(118, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1', '110045', 'New Delhi', 919717966001, 'ashaindramanijoshi@rediffmail.com'),
(119, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1', '110045', 'New Delhi', 919717966001, 'ashaindramanijoshi@rediffmail.com'),
(120, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1', '110045', 'New Delhi', 919717966001, 'ashaindramanijoshi@rediffmail.com'),
(121, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1', '110045', 'New Delhi', 919717966001, 'ashaindramanijoshi@rediffmail.com'),
(122, 89, 'alok', 'joshi', 'India', 'Palam Colony Sadh Nagar', '110045', 'Palam', 8800980139, 'alokjoshji1412@gmail.com'),
(123, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1', '110045', 'NEW DELHI', 8800980139, 'alokjoshi1412@gmail.com'),
(124, 89, 'ALOK', 'JOSHI', 'India', 'RZ-586/5 GALI NO-24 FLAT NO-1', '110045', 'New Delhi', 919717966001, 'alokjoshi1412@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `message` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `first_name`, `last_name`, `subject`, `message`, `email`) VALUES
(1, 'alok', 'joshi', 'checking', 'is it working', 'alokjoshi1412@gmail.com'),
(7, 'aayushi', 'joshi', 'i want a maths book', 'maths rd sharma', 'aayushi8888@gmail.com'),
(8, 'indramani', 'JOSHI', 'gsgds', 'fdsafv', 'joshiprabhat261197@gmail.com'),
(9, 'indramani', 'JOSHI', 'gsgds', 'htru', 'joshiprabhat261197@gmail.com'),
(10, 'ALOK', 'JOSHI', 'new domian', 'working', 'ashaindramanijoshi@rediffmail.com'),
(11, 'ALOK', 'JOSHI', 'again', 'is it', 'ashaindramanijoshi@rediffmail.com'),
(12, 'ALOK', 'JOSHI', 'checking', 'checkinh', 'ashaindramanijoshi@rediffmail.com'),
(13, 'ALOK', 'JOSHI', 'checking', 't4wt4w33', 'ashaindramanijoshi@rediffmail.com'),
(14, 'ALOK', 'JOSHI', 'checking', 'gfjytujty', 'ashaindramanijoshi@rediffmail.com'),
(15, 'ALOK', 'JOSHI', 'checking', 'b,dpobmpoit', 'ashaindramanijoshi@rediffmail.com'),
(16, 'indramani', 'JOSHI', 'gsgds', 'fwr4etgreongkvdofngbviodfbkj vndfboitf', 'joshiprabhat261197@gmail.com'),
(17, 'ALOK', 'JOSHI', 'checking', 'jnckndsaohncvosd', 'ashaindramanijoshi@rediffmail.com'),
(18, 'ALOK', 'JOSHI', 'faefd', 'fsefsed', 'alokjoshi1412@gmail.com'),
(19, 'Alok', 'joshiprabhat261197@gmail.', 'Hsbsb', 'UÃŸhhhahshhhshshyssyshsgysgygsys6sgw5sgtsgstsgssygsgsysghsyshsyhs6shysgeyshsyshsysg', 'joshiprabhat261197@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `iduser` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `paymentid` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(25) NOT NULL,
  `amount` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`iduser`, `member_id`, `first_name`, `last_name`, `order_id`, `payment_id`, `status`, `paymentid`, `email`, `phone_no`, `amount`) VALUES
(6, 89, 'ALOK', 'JOSHI', 78, 'bcf9faf9335948999a8f610e9f0c74b5', 'Credit', 'MOJO0414N05N02536329', 'alokjoshi1412@gmail.com', '', ''),
(7, 89, 'ALOK', 'JOSHI', 81, 'f04a340d3afb4609a1749a9bcc3520ec', 'Failed', 'MOJO0415405N99132387', 'ashaindramanijoshi@rediffmail.com', '', ''),
(8, 103, 'aayushi', 'joshi', 82, 'bf4d58cb1eff4ff0a5c939060ba073c1', 'Credit', 'MOJO0415305N99132608', 'aayushijoshi8800@gmail.com', '', ''),
(9, 89, 'ALOK', 'JOSHI', 78, 'c4c20997c2af4b509cac8c09ecba834b', 'Credit', 'MOJO0424W05N76689224', 'alokjoshi1412@gmail.com', '', ''),
(12, 89, 'ALOK', 'JOSHI', 78, '6f507080f9ba4b16a2c3fe6a6ccbafca', 'Credit', 'MOJO0424605N76689229', 'alokjoshi1412@gmail.com', '', ''),
(15, 89, 'prabhat', 'JOSHI', 94, '7f7ded7ba5ed46449fe157a16c8def5a', 'Credit', 'MOJO0424K05N76689242', 'bcasprabhatjoshi@gmail.com', '', ''),
(16, 89, 'ALOK', 'JOSHI', 81, '0e4e0feca1d246d68a24f1b3bcc8b791', 'Credit', 'MOJO0424805N76689246', 'ashaindramanijoshi@rediffmail.com', '', ''),
(18, 103, 'ALOK', 'JOSHI', 98, 'd4c1395aac1742738ee4232a53bc06a2', 'Credit', 'MOJO0424C05N76689251', 'ashaindramanijoshi@rediffmail.com', '', ''),
(19, 89, 'ALOK', 'JOSHI', 98, 'a3a30f9f08764846b334a35144a1708b', 'Credit', 'MOJO0425F05N80454432', 'ashaindramanijoshi@rediffmail.com', '', ''),
(20, 89, 'ALOK', 'JOSHI', 98, 'e84ff97af44c48f694d926cea4f3e3e6', 'Credit', 'MOJO0508J05N78607368', 'ashaindramanijoshi@rediffmail.com', '', ''),
(21, 89, 'prabhat', 'JOSHI', 104, 'a542b1f310ae4e8a8dc042de0d14fa94', 'Credit', 'MOJO0524E05N18378132', 'bcasprabhatjoshi@gmail.com', '', ''),
(22, 89, 'ALOK', 'JOSHI', 97, '7799b9a3e2b64da5a20c82edd42f439b', 'Credit', 'MOJO0605K05N92248297', 'alokjoshi1412@gmail.com', '', ''),
(23, 89, 'indramani', 'JOSHI', 108, 'dcabc16927424f14947689a9b387e83f', 'Credit', 'MOJO0611H05N30116332', 'joshiprabhat261197@gmail.com', '', ''),
(24, 89, 'indramani', 'JOSHI', 108, 'b49acdd287ac44f0b8b242d8aad0ed7d', 'Failed', 'MOJO0611Z05N30116333', 'joshiprabhat261197@gmail.com', '', ''),
(25, 89, 'ALOK', 'JOSHI', 97, '732742b3b51248fc96d7250a03a328b7', 'Credit', 'MOJO0614505N26096568', 'alokjoshi1412@gmail.com', '', ''),
(26, 89, 'ALOK', 'JOSHI', 97, 'd0fca42df31b44a1b1b07c8948e669ed', 'Failed', 'MOJO0618T05N70264898', 'alokjoshi1412@gmail.com', '+918800980139', '50.00');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(8) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `user_name`, `display_name`, `password`, `email`) VALUES
(48, 'root', '123', '63a9f0ea7bb98050796b649e85481845', '123@gmail.com'),
(89, 'joshi', 'alok', 'e10adc3949ba59abbe56e057f20f883e', 'alokjoshi1412@gmail.com'),
(102, 'alok@01', 'joshi', 'e10adc3949ba59abbe56e057f20f883e', 'alokjoshi1412@gmail.com'),
(103, 'aayushi', 'aayushi', 'e10adc3949ba59abbe56e057f20f883e', 'aayushijoshi8888@gmail.com'),
(108, 'hunny', 'hanskrit', 'e10adc3949ba59abbe56e057f20f883e', 'aayushijoshi8800@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `product_id`, `quantity`, `member_id`) VALUES
(163, 40, 1, 302),
(141, 43, 1, 103),
(153, 40, 1, 3039423),
(154, 42, 1, 1496747),
(160, 40, 1, 210),
(156, 41, 1, 518268),
(157, 42, 1, 3463921),
(158, 52, 1, 369),
(159, 52, 1, 102),
(161, 61, 1, 232),
(164, 44, 1, 151),
(165, 43, 1, 431),
(166, 43, 1, 2),
(168, 45, 1, 463),
(181, 44, 1, 89),
(170, 48, 1, 161),
(171, 41, 1, 31),
(172, 42, 1, 325),
(173, 45, 1, 340),
(174, 47, 1, 495),
(175, 45, 1, 200);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `code`, `image`, `price`) VALUES
(40, 'Maths', 'math01', 'product-images/download (9).jpg', 500.00),
(41, 'English', '1234', 'product-images/download (9).jpg', 200.00),
(42, 'science', '456', 'product-images/download (9).jpg', 0.00),
(44, 'Social science', 'warz', 'product-images/download (4).jpg', 50.00),
(45, 'Comedy', 'world', 'product-images/download (8).jpg', 30.00),
(47, 'Hindi grammar', 'mac', 'product-images/download (9).jpg', 400.00),
(48, 'Oxford Dictionary', 'zzz', 'product-images/download (7).jpg', 899.00),
(49, 'Tinkle', 'war2', 'product-images/download (8).jpg', 100.00),
(50, 'Harry Potter', 'somu', 'product-images/download (9).jpg', 1000.00),
(51, 'Goosebumps', 'warr', 'product-images/download (10).jpg', 3000.00),
(52, 'R.D Sharma', '90', 'product-images/download (13).jpg', 500.00),
(53, 'Maths Book 12', '2012', 'product-images/download (13).jpg', 40.00),
(54, 'GK book', 'goli', 'product-images/download (13).jpg', 20.00),
(55, 'computer science', 'boy', 'product-images/download (17).jpg', 100.00),
(56, 'Walking dead', 'frf', 'product-images/download (15).jpg', 40.00),
(57, 'Tinkle digest', 'eee', 'product-images/download (8).jpg', 50.00),
(59, 'Avengers; Infinity  War', 'ddd', 'product-images/download (17).jpg', 80.00),
(60, 'Avengers:Endgame', '4444', 'product-images/images (2).jpg', 50.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_info`
--
ALTER TABLE `billing_info`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `message` (`message`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `paymentid` (`paymentid`),
  ADD UNIQUE KEY `payment_id` (`payment_id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing_info`
--
ALTER TABLE `billing_info`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
