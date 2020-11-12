-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2020 at 03:50 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techanics`
--

-- --------------------------------------------------------

--
-- Table structure for table `amc`
--

CREATE TABLE `amc` (
  `a_id` int(10) NOT NULL,
  `a_secureid` varchar(25) NOT NULL,
  `a_name` varchar(150) NOT NULL,
  `a_email` varchar(150) NOT NULL,
  `a_phone` varchar(13) NOT NULL,
  `a_photo` varchar(255) NOT NULL,
  `a_devices` int(5) NOT NULL,
  `a_os` varchar(100) NOT NULL,
  `a_service` varchar(40) NOT NULL,
  `a_address` varchar(255) NOT NULL,
  `a_description` text,
  `a_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `a_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amc`
--

INSERT INTO `amc` (`a_id`, `a_secureid`, `a_name`, `a_email`, `a_phone`, `a_photo`, `a_devices`, `a_os`, `a_service`, `a_address`, `a_description`, `a_date`, `a_status`) VALUES
(1, 'AMC20591024BC82A5', 'hirnva', 'fhk@fsjk.com', '12305478965', '12305478965', 75, 'mac', 'fjslks', 'dgjlls', 'nik', '2020-10-26 04:29:59', 1),
(2, 'AMC202310B2FFB2DC', 'hirnva', 'fhk@fsjk.com', '12305478965', '12305478965', 75, 'mac', 'fjslks', 'dgjlls', '', '2020-10-26 04:30:23', 1),
(3, 'AMC205310AEB91637', 'hirnva', 'fhk@fsjk.com', '12305478965', '12305478965', 75, 'mac', 'fjslks', 'dgjlls', '', '2020-10-26 04:41:53', 1),
(4, 'AMC202010237D453E', 'hirnva', 'fhk@fsjk.com', '12305478965', '12305478965', 75, 'mac', 'fjslks', 'dgjlls', '', '2020-10-26 04:47:20', 1),
(5, 'AMC20441114D75786', 'hirnva', 'fhk@fsjk.com', '12305478965', '12305478965', 75, 'mac', 'fjslks', 'dgjlls', 'gdlksgjdl', '2020-11-07 03:26:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `assembled_pc`
--

CREATE TABLE `assembled_pc` (
  `pc_id` int(10) NOT NULL,
  `pc_secureid` varchar(25) NOT NULL,
  `pc_userid` varchar(25) NOT NULL,
  `pc_payid` varchar(25) DEFAULT NULL,
  `pc_monitor` varchar(255) DEFAULT NULL,
  `pc_keyboard` varchar(255) DEFAULT NULL,
  `pc_mouse` varchar(255) DEFAULT NULL,
  `pc_cabinet` varchar(255) DEFAULT NULL,
  `pc_motherboard` varchar(255) DEFAULT NULL,
  `pc_processor` varchar(255) DEFAULT NULL,
  `pc_graphics` varchar(255) DEFAULT NULL,
  `pc_wlan` varchar(255) DEFAULT NULL,
  `pc_bluetooth` varchar(255) DEFAULT NULL,
  `pc_ram` varchar(255) DEFAULT NULL,
  `pc_harddrive` varchar(255) DEFAULT NULL,
  `pc_os` varchar(255) DEFAULT NULL,
  `pc_quantity` int(2) NOT NULL,
  `pc_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pc_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assembled_pc`
--

INSERT INTO `assembled_pc` (`pc_id`, `pc_secureid`, `pc_userid`, `pc_payid`, `pc_monitor`, `pc_keyboard`, `pc_mouse`, `pc_cabinet`, `pc_motherboard`, `pc_processor`, `pc_graphics`, `pc_wlan`, `pc_bluetooth`, `pc_ram`, `pc_harddrive`, `pc_os`, `pc_quantity`, `pc_date`, `pc_status`) VALUES
(1, 'U205810210AB764', 'qwaszxcd543', 'sdjflskdf', 'gjdfljkgfl', 'dsfjlsj', 'fdsjlf', 'gkfjldjgdflk', 'fskldjdlkf', 'fsdljslf', 'sfjdlf', 'fsjl', 'gjdlg', 'fslkjsd', 'fsjklsd', 'fsdkf', 12, '2020-10-21 05:06:58', 1),
(2, 'U204610982D2DA4', 'qwaszxcd543', 'sdjflskdf', 'gjdfljkgfl', 'dsfjlsj', 'fdsjlf', 'gkfjldjgdflk', 'fskldjdlkf', 'fsdljslf', 'sfjdlf', 'fsjl', '', '', 'fsjklsd', 'fsdkf', 12, '2020-10-21 05:07:46', 1),
(3, 'U2011106FB78A14', 'qwaszxcd543', 'sdjflskdf', 'gjdfljkgfl', 'dsfjlsj', 'fdsjlf', 'gkfjldjgdflk', 'fskldjdlkf', 'fsdljslf', 'sfjdlf', 'fsjl', '', '', 'fsjklsd', 'fsdkf', 12, '2020-10-21 05:37:11', 1),
(4, 'CUSTOM204811DC495BF7', 'qwaszxcd543', 'NONE', 'gjdfljkgfl', 'dsfjlsj', 'fdsjlf', 'gkfjldjgdflk', 'fskldjdlkf', 'fsdljslf', 'sfjdlf', 'fsjl', 'gjdlg', 'fslkjsd', 'fsjklsd', 'fsdkf', 12, '2020-11-07 03:27:48', 1),
(5, 'CUSTOM203211357B8819', 'qwaszxcd543', 'NONE', 'gjdfljkgfl', 'dsfjlsj', 'fdsjlf', 'gkfjldjgdflk', 'fskldjdlkf', 'fsdljslf', 'sfjdlf', 'fsjl', 'gjdlg', 'fslkjsd', 'fsjklsd', 'fsdkf', 12, '2020-11-07 03:28:32', 1),
(6, 'CUSTOM20251157CF2ED9', 'qwaszxcd543', 'NONE', 'gjdfljkgfl', 'dsfjlsj', 'fdsjlf', 'gkfjldjgdflk', 'fskldjdlkf', 'fsdljslf', 'sfjdlf', 'fsjl', 'gjdlg', 'fslkjsd', 'fsjklsd', 'fsdkf', 12, '2020-11-07 03:29:25', 1),
(7, 'CUSTOM200111CFE4D4E2', 'qwaszxcd543', 'NONE', 'gjdfljkgfl', 'dsfjlsj', 'fdsjlf', 'gkfjldjgdflk', 'fskldjdlkf', 'fsdljslf', 'sfjdlf', 'fsjl', 'gjdlg', 'fslkjsd', 'fsjklsd', 'fsdkf', 12, '2020-11-07 03:30:01', 1),
(8, 'CUSTOM2009111DDECB0A', 'qwaszxcd543', 'NONE', 'gjdfljkgfl', 'dsfjlsj', 'fdsjlf', 'gkfjldjgdflk', 'fskldjdlkf', 'fsdljslf', 'sfjdlf', 'fsjl', 'gjdlg', 'fslkjsd', 'fsjklsd', 'fsdkf', 12, '2020-11-07 03:31:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `b_id` int(10) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `b_pic` varchar(255) NOT NULL,
  `b_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`b_id`, `b_name`, `b_pic`, `b_status`) VALUES
(1, 'hp', '', 1),
(2, 'hp', '', 1),
(3, 'hp', 'a.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(10) NOT NULL,
  `c_userid` varchar(25) NOT NULL,
  `c_productid` varchar(25) NOT NULL,
  `c_qty` int(5) NOT NULL DEFAULT '1',
  `c_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `cont_id` int(10) NOT NULL,
  `cont_secure` varchar(25) NOT NULL,
  `cont_name` varchar(100) NOT NULL,
  `cont_mail` varchar(150) NOT NULL,
  `cont_mobile` varchar(13) NOT NULL,
  `cont_sub` varchar(255) NOT NULL,
  `cont_message` longtext NOT NULL,
  `cont_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cont_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`cont_id`, `cont_secure`, `cont_name`, `cont_mail`, `cont_mobile`, `cont_sub`, `cont_message`, `cont_date`, `cont_status`) VALUES
(1, 'CONT205210D08BC55A', 'nik', 'nik@gmail.com', '2147483647', 'prob', 'prob', '2020-10-28 07:30:52', 0),
(2, 'CONT2009103040CE7C', 'nik', 'nik@gmail.com', '123456789', 'prob', 'prob', '2020-10-28 07:32:09', 0),
(3, 'CONT2011104DAF95A6', 'nik', 'nik@gmail.com', '2147483647', 'prob', 'prob', '2020-10-28 07:33:11', 0),
(4, 'CONT2013100B3F0893', 'nik', 'nik@gmail.com', '2147483647', 'prob', 'prob', '2020-10-28 07:34:13', 1),
(5, 'CONT201010FCE5D1C3', 'nik', 'nik@gmail.com', '2147483647', 'prob', 'prob', '2020-10-28 07:35:10', 1),
(6, 'CONT205210360D45A3', 'nik', 'nik@gmail.com', '8460817741', 'prob', 'prob', '2020-10-28 07:39:52', 0),
(7, 'CONT203010A9E7E7B8', 'nik', 'nik@gmail.com', '917096236292', 'prob', 'prob', '2020-10-28 10:57:30', 0),
(8, 'CONT20051121DB8CFA', 'nik', 'nik@gmail.com', '917096236292', 'prob', 'prob', '2020-11-07 03:38:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `emp_login`
--

CREATE TABLE `emp_login` (
  `e_id` int(10) NOT NULL,
  `e_empno` varchar(25) NOT NULL,
  `e_user` varchar(100) NOT NULL,
  `e_pwd` varchar(255) NOT NULL,
  `e_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `e_disable` int(1) NOT NULL DEFAULT '1',
  `e_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_login`
--

INSERT INTO `emp_login` (`e_id`, `e_empno`, `e_user`, `e_pwd`, `e_date`, `e_disable`, `e_status`) VALUES
(1, 'EMP20101075DD4', 'fjsdlkjs', 'kdjfslf', '2020-10-21 06:07:10', 1, 1),
(2, 'EMP204810F801FA01', 'fjsdlkjs', 'kdjfslf', '2020-10-21 06:09:48', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(10) NOT NULL,
  `o_secureid` varchar(25) NOT NULL,
  `o_userid` varchar(25) NOT NULL,
  `o_productid` varchar(25) NOT NULL,
  `o_payid` varchar(25) DEFAULT NULL,
  `o_payorderid` varchar(50) NOT NULL,
  `o_quantity` int(4) NOT NULL,
  `o_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `o_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `o_secureid`, `o_userid`, `o_productid`, `o_payid`, `o_payorderid`, `o_quantity`, `o_date`, `o_status`) VALUES
(1, 'ORDER2015100E1253D5', 'fdjslfsj', '', 'dfjdslsj', 'dsfsjsl', 0, '2020-10-26 05:12:15', 1),
(2, 'ORDER20431083020522', 'fdjslfsj', 'jerlkj', 'dfjdslsj', 'dsfsjsl', 2, '2020-10-26 05:20:43', 1),
(3, 'ORDER20431083020522', 'fdjslfsj', 'dkjsl', 'dfjdslsj', 'dsfsjsl', 3, '2020-10-26 05:20:43', 1),
(4, 'ORDER201010B3633EE8', 'fdjslfsj', 'jerlkj', 'dfjdslsj', 'dsfsjsl', 2, '2020-10-26 05:25:10', 1),
(5, 'ORDER201010B3633EE8', 'fdjslfsj', 'dkjsl', 'dfjdslsj', 'dsfsjsl', 3, '2020-10-26 05:25:10', 1),
(6, 'ORDER201010B3633EE8', 'fdjslfsj', 'sfsd', 'dfjdslsj', 'dsfsjsl', 5, '2020-10-26 05:25:10', 1),
(7, 'ORDER2040109E4A1437', 'fdjslfsj', 'd', NULL, 'dsfsjsl', 2, '2020-10-26 05:38:40', 1),
(8, 'ORDER2023105A8177F9', 'fdjslfsj', 'd', NULL, 'dsfsjsl', 2, '2020-10-26 05:39:23', 1),
(9, 'ORDER20021169A2467F', 'fdjslfsj', 'd', NULL, 'dsfsjsl', 2, '2020-11-07 03:35:02', 1),
(10, 'ORDER20171107DF877F', 'fdjslfsj', 'jerlkj', NULL, 'dsfsjsl', 2, '2020-11-07 03:35:17', 1),
(11, 'ORDER20171107DF877F', 'fdjslfsj', 'dkjsl', NULL, 'dsfsjsl', 3, '2020-11-07 03:35:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(10) NOT NULL,
  `pay_secureid` varchar(25) NOT NULL,
  `pay_note` varchar(25) DEFAULT NULL,
  `pay_userid` varchar(25) NOT NULL,
  `pay_empid` varchar(25) DEFAULT NULL,
  `pay_orderid` varchar(255) NOT NULL,
  `pay_transectionid` varchar(255) NOT NULL,
  `pay_signature` varchar(255) NOT NULL,
  `pay_stype` varchar(50) NOT NULL,
  `pay_address` varchar(255) NOT NULL,
  `pay_noitem` int(2) NOT NULL,
  `pay_ptype` varchar(50) DEFAULT NULL,
  `pay_courier` varchar(255) DEFAULT NULL,
  `pay_trackingid` varchar(100) DEFAULT NULL,
  `pay_trackingdate` date DEFAULT NULL,
  `pay_orderstatus` varchar(50) NOT NULL DEFAULT 'ordered',
  `pay_amount` float NOT NULL,
  `pay_timer` double DEFAULT NULL,
  `pay_month` year(4) NOT NULL,
  `pay_year` year(4) NOT NULL,
  `pay_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pay_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `pay_secureid`, `pay_note`, `pay_userid`, `pay_empid`, `pay_orderid`, `pay_transectionid`, `pay_signature`, `pay_stype`, `pay_address`, `pay_noitem`, `pay_ptype`, `pay_courier`, `pay_trackingid`, `pay_trackingdate`, `pay_orderstatus`, `pay_amount`, `pay_timer`, `pay_month`, `pay_year`, `pay_date`, `pay_status`) VALUES
(1, 'PAY2054101C351F8C', NULL, 'sdklfjslskfd', 'sdfjslkj', 'dsjfslfksjfl', 'dskjgglkjlek', 'dgkjglkgjdl', 'fkgjdflkgjdf', 'gkdjlkdg', 5, 'upi', 'sdkfdsfksj', 'dgjslkgs', '0000-00-00', 'ordered', 0, 30, 0000, 2020, '2020-10-21 16:44:54', 1),
(2, 'PAY202910D7C72FB0', NULL, 'sdklfjslskfd', 'sdfjslkj', 'dsjfslfksjfl', 'dskjgglkjlek', 'dgkjglkgjdl', 'fkgjdflkgjdf', 'gkdjlkdg', 5, 'upi', 'sdkfdsfksj', 'dgjslkgs', '0000-00-00', 'ordered', 2500, 30, 0000, 2020, '2020-10-21 16:45:29', 1),
(3, 'PAY20001038EB658C', NULL, 'sdklfjslskfd', 'sdfjslkj', 'dsjfslfksjfl', 'dskjgglkjlek', 'dgkjglkgjdl', 'fkgjdflkgjdf', 'gkdjlkdg', 5, 'upi', 'sdkfdsfksj', 'dgjslkgs', '0000-00-00', 'ordered', 2500, 30, 0000, 2020, '2020-10-21 16:47:00', 1),
(4, 'PAY204210A49F0DFB', NULL, 'sdklfjslskfd', 'sdfjslkj', 'dsjfslfksjfl', 'dskjgglkjlek', 'dgkjglkgjdl', 'fkgjdflkgjdf', 'gkdjlkdg', 5, 'upi', 'sdkfdsfksj', 'dgjslkgs', '0000-00-00', 'ordered', 2500, 30, 2010, 2020, '2020-10-21 16:48:42', 1),
(5, 'PAY2043102311AD49', NULL, 'sdklfjslskfd', 'sdfjslkj', 'dsjfslfksjfl', 'dskjgglkjlek', 'dgkjglkgjdl', 'fkgjdflkgjdf', 'gkdjlkdg', 5, 'upi', 'sdkfdsfksj', 'dgjslkgs', '0000-00-00', 'ordered', 2500, 30, 2010, 2020, '2020-10-21 16:49:43', 1),
(6, 'PAY20591044FB6C48', NULL, 'sdklfjslskfd', 'sdfjslkj', 'dsjfslfksjfl', 'dskjgglkjlek', 'dgkjglkgjdl', 'fkgjdflkgjdf', 'gkdjlkdg', 5, 'upi', NULL, NULL, NULL, 'ordered', 0, 30, 2010, 2020, '2020-10-26 05:57:59', 1),
(7, 'PAY20051006569384', NULL, 'sdklfjslskfd', 'sdfjslkj', 'dsjfslfksjfl', 'dskjgglkjlek', 'dgkjglkgjdl', 'fkgjdflkgjdf', 'gkdjlkdg', 5, 'upi', 'nikd patel', 'tracksfj', '2020-11-30', 'ordered', 250.5, 30, 2010, 2020, '2020-10-26 05:59:05', 1),
(8, 'PAY20461066BD6C38', 'fjsdkljel', 'fjdslkfsj', 'sjdflkd', 'OREPAIR2046102E5EC160', 'NONE', 'NONE', 'REPAIR-PRODUCT', 'sfdklsjdl', 0, 'CASH', 'NONE', 'NONE', '2020-10-28', 'COMPLETED', 2500.5, 0, 2010, 2020, '2020-10-28 04:24:46', 1),
(9, 'PAY2033101C936CD9', 'fjsdkljel', 'fjdslkfsj', 'sjdflkd', 'order12', 'trans12', 'sign122', 'REPAIR-PRODUCT', 'sfdklsjdl', 0, 'UPI', 'NONE', 'NONE', '2020-10-28', 'COMPLETED', 2500.5, 0, 2010, 2020, '2020-10-28 04:34:33', 1),
(10, 'PAY200710EAAB88E2', 'fjsdkljel', 'fjdslkfsj', 'sjdflkd', 'order12', 'trans12', 'sign122', 'REPAIR-PRODUCT', 'sfdklsjdl', 0, 'DEBITCARD', 'NONE', 'NONE', '2020-10-28', 'COMPLETED', 2500.5, 0, 2010, 2020, '2020-10-28 04:35:07', 1),
(11, 'PAY20241067643826', 'fjsdkljel', 'fjdslkfsj', 'sjdflkd', 'order12', 'trans12', 'sign122', 'REPAIR-PRODUCT', 'sfdklsjdl', 0, 'CREDITCARD', 'NONE', 'NONE', '2020-10-28', 'COMPLETED', 2500.5, 0, 2010, 2020, '2020-10-28 04:35:24', 1),
(12, 'PAY20351045D0D8F2', 'fjsdkljel', 'fjdslkfsj', 'sjdflkd', 'order12', 'trans12', 'sign122', 'REPAIR-PRODUCT', 'sfdklsjdl', 0, 'NETBANKING', 'NONE', 'NONE', '2020-10-28', 'COMPLETED', 2500.5, 0, 2010, 2020, '2020-10-28 04:35:35', 1),
(13, 'PAY203311DCD71199', NULL, 'sdklfjslskfd', 'none', 'dsjfslfksjfl', 'dskjgglkjlek', 'dgkjglkgjdl', 'FKGJDFLKGJDF', 'gkdjlkdg', 5, 'UPI', NULL, NULL, NULL, 'ordered', 250.5, 30, 2011, 2020, '2020-11-07 03:35:33', 1),
(14, 'PAY2049113DF2AFCB', 'fjsdkljel', 'fjdslkfsj', 'sjdflkd', 'OREPAIR204911DC8C15D7', 'NONE', 'NONE', 'REPAIR', 'sfdklsjdl', 0, 'CASH', 'NONE', 'NONE', '2020-11-07', 'COMPLETED', 2500.5, 0, 2011, 2020, '2020-11-07 03:35:49', 1),
(15, 'PAY200111AF22CC81', 'fjsdkljel', 'fjdslkfsj', 'sjdflkd', 'order12', 'trans12', 'sign122', 'REPAIR', 'sfdklsjdl', 0, 'UPI', 'NONE', 'NONE', '2020-11-07', 'COMPLETED', 2500.5, 0, 2011, 2020, '2020-11-07 03:36:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pickup_item`
--

CREATE TABLE `pickup_item` (
  `pi_id` int(10) NOT NULL,
  `pi_secureid` varchar(25) NOT NULL,
  `pi_repairid` varchar(25) NOT NULL,
  `pi_userid` varchar(25) NOT NULL,
  `pi_empid` varchar(25) NOT NULL,
  `pi_signature` varchar(255) NOT NULL,
  `pi_pic1` varchar(255) NOT NULL,
  `pi_pic2` varchar(255) NOT NULL,
  `pi_pic3` varchar(255) NOT NULL,
  `pi_pic4` varchar(255) NOT NULL,
  `pi_pic5` varchar(255) DEFAULT NULL,
  `pi_pic6` varchar(255) DEFAULT NULL,
  `pi_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pi_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pickup_item`
--

INSERT INTO `pickup_item` (`pi_id`, `pi_secureid`, `pi_repairid`, `pi_userid`, `pi_empid`, `pi_signature`, `pi_pic1`, `pi_pic2`, `pi_pic3`, `pi_pic4`, `pi_pic5`, `pi_pic6`, `pi_date`, `pi_status`) VALUES
(1, 'PKUP2027100C53744F', 'fdsjlsd', 'sfjskh', '', 'fsdjsfh', 'fsd.jpg', 'fsd4fd', 'sdfjlksdj.jpg', 'sdfjdslkje', NULL, NULL, '2020-10-21 17:18:27', 1),
(2, 'PKUP201611681E6BA0', 'fdsjlsd', 'sfjskh', '', 'fsdjsfh', 'fsd.jpg', 'fsd4fd', 'sdfjlksdj.jpg', 'sdfjdslkje', NULL, NULL, '2020-11-07 03:36:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` bigint(20) NOT NULL,
  `p_productId` varchar(30) NOT NULL,
  `p_brandName` varchar(50) NOT NULL,
  `p_category` varchar(50) NOT NULL,
  `p_productName` varchar(255) NOT NULL,
  `p_productDesc` varchar(255) NOT NULL,
  `p_productPrice` float NOT NULL,
  `p_salePrice` float NOT NULL,
  `p_discount` float NOT NULL,
  `p_quantity` int(10) NOT NULL,
  `p_salePackage` varchar(255) DEFAULT NULL,
  `p_modelNo` varchar(50) NOT NULL,
  `p_partNo` varchar(50) DEFAULT NULL,
  `p_series` varchar(50) DEFAULT NULL,
  `p_color` varchar(20) NOT NULL,
  `p_suitableFor` varchar(50) DEFAULT NULL,
  `p_powerSupply` varchar(100) DEFAULT NULL,
  `p_batteryBackup` varchar(100) DEFAULT NULL,
  `p_batteryCell` varchar(50) DEFAULT NULL,
  `p_msOffice` varchar(5) DEFAULT NULL,
  `p_grapMemoryType` varchar(100) DEFAULT NULL,
  `p_grapMemoryCpty` varchar(100) DEFAULT NULL,
  `p_procBrand` varchar(50) DEFAULT NULL,
  `p_procName` varchar(150) NOT NULL,
  `p_procGen` varchar(100) DEFAULT NULL,
  `p_ram` varchar(20) NOT NULL,
  `p_clockSpeed` varchar(20) DEFAULT NULL,
  `p_hdd` varchar(20) DEFAULT NULL,
  `p_procVariant` varchar(100) DEFAULT NULL,
  `p_chipset` varchar(100) DEFAULT NULL,
  `p_memorySlot` varchar(20) DEFAULT NULL,
  `p_expandMemory` varchar(20) DEFAULT NULL,
  `p_rpm` varchar(20) DEFAULT NULL,
  `p_ramFrequency` varchar(20) DEFAULT NULL,
  `p_cache` varchar(20) DEFAULT NULL,
  `p_graphicProc` varchar(100) DEFAULT NULL,
  `p_noCore` varchar(50) DEFAULT NULL,
  `p_ssd` varchar(5) DEFAULT NULL,
  `p_ssdCpty` varchar(10) DEFAULT NULL,
  `p_os` varchar(30) DEFAULT NULL,
  `p_osArch` varchar(50) DEFAULT NULL,
  `p_sysArch` varchar(50) DEFAULT NULL,
  `p_usbPort` varchar(150) DEFAULT NULL,
  `p_hdmiPort` varchar(100) DEFAULT NULL,
  `p_hardwareInterface` varchar(150) DEFAULT NULL,
  `p_multicard` varchar(255) DEFAULT NULL,
  `p_mic` varchar(5) DEFAULT NULL,
  `p_lan` varchar(5) DEFAULT NULL,
  `p_screenSize` varchar(30) DEFAULT NULL,
  `p_screenResoluction` varchar(30) DEFAULT NULL,
  `p_screenType` varchar(100) DEFAULT NULL,
  `p_speacker` varchar(50) DEFAULT NULL,
  `p_internalMic` varchar(50) DEFAULT NULL,
  `p_soundProperty` varchar(150) DEFAULT NULL,
  `p_refreshRate` varchar(50) DEFAULT NULL,
  `p_touchScreen` varchar(5) DEFAULT NULL,
  `p_wlan` varchar(20) DEFAULT NULL,
  `p_bluetooth` varchar(20) DEFAULT NULL,
  `p_ehternet` varchar(20) DEFAULT NULL,
  `p_diamension` varchar(20) DEFAULT NULL,
  `p_weight` varchar(20) DEFAULT NULL,
  `p_diskDrive` varchar(20) DEFAULT NULL,
  `p_webCam` varchar(50) DEFAULT NULL,
  `p_keyboard` varchar(100) DEFAULT NULL,
  `p_backlitKeyboard` varchar(10) DEFAULT NULL,
  `p_pointerDevice` varchar(50) DEFAULT NULL,
  `p_recoveryOptions` varchar(150) DEFAULT NULL,
  `p_includedSoftware` varchar(255) DEFAULT NULL,
  `p_additionalFeatures` varchar(255) DEFAULT NULL,
  `p_img1` varchar(150) NOT NULL,
  `p_img2` varchar(150) NOT NULL,
  `p_img3` varchar(150) DEFAULT NULL,
  `p_img4` varchar(150) DEFAULT NULL,
  `p_img5` varchar(150) DEFAULT NULL,
  `p_video` varchar(150) DEFAULT NULL,
  `p_warrantySummary` varchar(100) DEFAULT NULL,
  `p_warrantySummeryType` varchar(100) DEFAULT NULL,
  `p_covedWarranty` varchar(100) DEFAULT NULL,
  `p_notCovedWarranty` varchar(100) DEFAULT NULL,
  `p_domesticWarranty` varchar(100) DEFAULT NULL,
  `p_internalWarranty` varchar(100) DEFAULT NULL,
  `p_sale` int(1) NOT NULL DEFAULT '0',
  `p_rent` int(1) NOT NULL DEFAULT '0',
  `p_custom` int(1) NOT NULL DEFAULT '0',
  `p_sechand` int(1) NOT NULL DEFAULT '0',
  `p_disable` int(11) NOT NULL DEFAULT '0',
  `p_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `p_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `rvue_id` int(10) NOT NULL,
  `rvue_vueid` varchar(25) NOT NULL,
  `rvue_productid` varchar(30) NOT NULL,
  `rvue_userid` varchar(25) NOT NULL,
  `rvue_rating` float NOT NULL,
  `rvue_msg` varchar(255) NOT NULL,
  `rvue_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rvue_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`rvue_id`, `rvue_vueid`, `rvue_productid`, `rvue_userid`, `rvue_rating`, `rvue_msg`, `rvue_time`, `rvue_status`) VALUES
(1, 'RVUE202010F4C333B5', 'sjdlfj', 'sfjlksj', 4.5, 'fsklefjseljfksl', '2020-10-28 17:09:20', 1),
(2, 'RVUE20181164C041AC', 'sjdlfj', 'sfjlksj', 4.5, 'fsklefjseljfksl', '2020-11-07 03:38:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `repair_item`
--

CREATE TABLE `repair_item` (
  `rp_id` int(10) NOT NULL,
  `rp_repairid` varchar(25) NOT NULL,
  `rp_userid` varchar(25) NOT NULL,
  `rp_uphone` varchar(13) NOT NULL,
  `rp_uaddress` varchar(255) NOT NULL,
  `rp_empid` varchar(25) DEFAULT NULL,
  `rp_servicetype` varchar(50) NOT NULL,
  `rp_issue` varchar(255) NOT NULL,
  `rp_pic1` varchar(255) DEFAULT NULL,
  `rp_pic2` varchar(255) DEFAULT NULL,
  `rp_ulat` varchar(50) NOT NULL,
  `rp_ulong` varchar(50) NOT NULL,
  `rp_elat` varchar(50) DEFAULT NULL,
  `rp_elong` varchar(50) DEFAULT NULL,
  `rp_time` varchar(60) DEFAULT NULL,
  `rp_date` varchar(50) DEFAULT NULL,
  `rp_approve` int(1) NOT NULL DEFAULT '0',
  `rp_ucancel` int(1) NOT NULL DEFAULT '0',
  `rp_ureview` varchar(255) DEFAULT NULL,
  `rp_ereview` varchar(255) DEFAULT NULL,
  `rp_rfinished` int(1) NOT NULL DEFAULT '0',
  `rp_autograph` varchar(255) DEFAULT NULL,
  `rp_upickup` int(1) NOT NULL DEFAULT '0',
  `rp_epickup` int(1) NOT NULL DEFAULT '0',
  `rp_rptime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rp_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repair_item`
--

INSERT INTO `repair_item` (`rp_id`, `rp_repairid`, `rp_userid`, `rp_uphone`, `rp_uaddress`, `rp_empid`, `rp_servicetype`, `rp_issue`, `rp_pic1`, `rp_pic2`, `rp_ulat`, `rp_ulong`, `rp_elat`, `rp_elong`, `rp_time`, `rp_date`, `rp_approve`, `rp_ucancel`, `rp_ureview`, `rp_ereview`, `rp_rfinished`, `rp_autograph`, `rp_upickup`, `rp_epickup`, `rp_rptime`, `rp_status`) VALUES
(1, 'REPAIR203110AEE009A9', 'sdjhfjsk', '4561230', 'sfjslf', 'dsgsggs', 'instance', 'dsfjksdlf', NULL, NULL, '-7845.1526', '9784.1254', '-784.3215', '98.3214', NULL, NULL, 1, 0, NULL, NULL, 0, '', 0, 0, '2020-10-24 05:42:31', 1),
(2, 'REPAIR201710F4AC14C3', 'sdjhfjsk', '4561230', 'sfjslf', NULL, 'scheduale', 'dsfjksdlf', NULL, NULL, '-7845.1526', '9784.1254', NULL, NULL, '08:00:00', '0000-00-00', 0, 0, NULL, NULL, 0, '', 0, 0, '2020-10-24 05:52:17', 1),
(3, 'REPAIR200310B613F5EE', 'sdjhfjsk', '4561230', 'sfjslf', NULL, 'scheduale', 'dsfjksdlf', NULL, NULL, '-7845.1526', '9784.1254', NULL, NULL, '8:00Am-9:00Am', '25 march 2021', 0, 0, NULL, NULL, 0, '', 0, 0, '2020-10-24 05:59:03', 1),
(4, 'REPAIR20301185B0E933', 'sdjhfjsk', '4561230', 'sfjslf', NULL, 'instance', 'dsfjksdlf', NULL, NULL, '-7845.1526', '9784.1254', NULL, NULL, '', NULL, 0, 0, NULL, NULL, 0, NULL, 0, 0, '2020-11-07 03:36:30', 1),
(5, 'REPAIR2046118EC7841A', 'sdjhfjsk', '4561230', 'sfjslf', NULL, 'scheduale', 'dsfjksdlf', NULL, NULL, '-7845.1526', '9784.1254', NULL, NULL, '8:00Am-9:00Am', '25 march 2021', 0, 0, NULL, NULL, 0, NULL, 0, 0, '2020-11-07 03:36:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_emp`
--

CREATE TABLE `service_emp` (
  `se_id` int(10) NOT NULL,
  `se_employid` varchar(25) NOT NULL,
  `se_name` varchar(100) NOT NULL,
  `se_email` varchar(150) NOT NULL,
  `se_mobile` varchar(13) NOT NULL,
  `se_adharno` varchar(12) NOT NULL,
  `se_adharpic` varchar(255) NOT NULL,
  `se_sadharpic` varchar(255) NOT NULL,
  `se_driveno` varchar(16) NOT NULL,
  `se_drivepic` varchar(255) NOT NULL,
  `se_sdrivepic` varchar(255) NOT NULL,
  `se_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `se_approve` varchar(10) NOT NULL DEFAULT 'pending',
  `se_approvedate` timestamp NULL DEFAULT NULL,
  `se_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_emp`
--

INSERT INTO `service_emp` (`se_id`, `se_employid`, `se_name`, `se_email`, `se_mobile`, `se_adharno`, `se_adharpic`, `se_sadharpic`, `se_driveno`, `se_drivepic`, `se_sdrivepic`, `se_date`, `se_approve`, `se_approvedate`, `se_status`) VALUES
(21, 'EMP20401190520352', 'emp1', 'e3mp1@gmail.com', '917096236292', '7844123045', 'fonta.jpg', 'reara.jpg', 'dfkjsfew45', 'frontd.jpg', 'reard.jpg', '2020-11-07 17:56:40', 'pending', NULL, 1),
(20, 'EMP20371134F7ACF2', 'emp1', 'emp1@gmail.com', '917096236292', '7845123045', 'fonta.jpg', 'reara.jpg', 'dfkjsfew45', 'frontd.jpg', 'reard.jpg', '2020-11-07 17:55:37', 'pending', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(10) NOT NULL,
  `u_userid` varchar(25) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_email` varchar(100) DEFAULT NULL,
  `u_phone` varchar(13) NOT NULL,
  `u_address` varchar(255) DEFAULT NULL,
  `u_secaddress` varchar(255) DEFAULT NULL,
  `u_thirdaddress` varchar(255) DEFAULT NULL,
  `u_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_userid`, `u_name`, `u_email`, `u_phone`, `u_address`, `u_secaddress`, `u_thirdaddress`, `u_date`, `u_status`) VALUES
(29, 'USER202211EECEBA41', 'ufhfyc', NULL, '9851898515', NULL, NULL, NULL, '2020-11-11 04:08:22', 1),
(28, 'USER2054111C4537BD', 'Rushi Donga', NULL, '8160452829', NULL, NULL, NULL, '2020-11-10 08:23:54', 1),
(27, 'USER201911EB229E4D', '1234', NULL, '9537900541', NULL, NULL, NULL, '2020-11-10 06:24:19', 1),
(26, 'USER200511FC27BDFE', 'rock', NULL, '917096236294', NULL, NULL, NULL, '2020-11-09 16:53:05', 1),
(25, 'USER20571153BB874A', 'nik', NULL, '917096236293', NULL, NULL, NULL, '2020-11-09 16:48:57', 1),
(24, 'USER201911B8AB4F09', 'nik', NULL, '917096236292', NULL, NULL, NULL, '2020-11-09 16:44:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `varibles`
--

CREATE TABLE `varibles` (
  `id` int(10) NOT NULL,
  `repair_service_tax` varchar(20) DEFAULT NULL,
  `delivery_tax` varchar(20) DEFAULT NULL,
  `rent_security_tax` varchar(20) DEFAULT NULL,
  `max_repair_service_attime` varchar(20) DEFAULT NULL,
  `gst_tax` varchar(20) DEFAULT NULL,
  `max_pay_delivery_free` varchar(20) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amc`
--
ALTER TABLE `amc`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `a_secureid` (`a_secureid`),
  ADD UNIQUE KEY `a_secureid_2` (`a_secureid`);

--
-- Indexes for table `assembled_pc`
--
ALTER TABLE `assembled_pc`
  ADD PRIMARY KEY (`pc_id`),
  ADD UNIQUE KEY `pc_secureid` (`pc_secureid`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `emp_login`
--
ALTER TABLE `emp_login`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD UNIQUE KEY `pay_secureid` (`pay_secureid`);

--
-- Indexes for table `pickup_item`
--
ALTER TABLE `pickup_item`
  ADD PRIMARY KEY (`pi_id`),
  ADD UNIQUE KEY `pi_secureid` (`pi_secureid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `p_productId` (`p_productId`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`rvue_id`);

--
-- Indexes for table `repair_item`
--
ALTER TABLE `repair_item`
  ADD PRIMARY KEY (`rp_id`),
  ADD UNIQUE KEY `rp_repairid` (`rp_repairid`);

--
-- Indexes for table `service_emp`
--
ALTER TABLE `service_emp`
  ADD PRIMARY KEY (`se_id`),
  ADD UNIQUE KEY `se_secureid` (`se_employid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_secureid` (`u_userid`);

--
-- Indexes for table `varibles`
--
ALTER TABLE `varibles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amc`
--
ALTER TABLE `amc`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assembled_pc`
--
ALTER TABLE `assembled_pc`
  MODIFY `pc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `cont_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `emp_login`
--
ALTER TABLE `emp_login`
  MODIFY `e_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pickup_item`
--
ALTER TABLE `pickup_item`
  MODIFY `pi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `rvue_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `repair_item`
--
ALTER TABLE `repair_item`
  MODIFY `rp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_emp`
--
ALTER TABLE `service_emp`
  MODIFY `se_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `varibles`
--
ALTER TABLE `varibles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
