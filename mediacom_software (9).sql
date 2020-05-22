-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 09:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediacom_software`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
(2, 'sami', '4f8de24d6093ac5d25c7cfafc474d49f', '');

-- --------------------------------------------------------

--
-- Table structure for table `airmail`
--

CREATE TABLE `airmail` (
  `airmail_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `airmail_parcel_no` int(11) NOT NULL,
  `airmail_request_by` int(11) NOT NULL,
  `airmail_receiver_name` text NOT NULL,
  `airmail_parcel_weight` text NOT NULL,
  `airmail_services_company` text NOT NULL,
  `airmail_contact_no` text NOT NULL,
  `airmail_receiving_date` date NOT NULL,
  `airmail_date_of_dispatch` text NOT NULL,
  `airmail_document_detail` text NOT NULL,
  `airmail_receiver_address` text NOT NULL,
  `airmail_accessories` text NOT NULL,
  `airmail_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airmail`
--

INSERT INTO `airmail` (`airmail_id`, `vehicle_id`, `airmail_parcel_no`, `airmail_request_by`, `airmail_receiver_name`, `airmail_parcel_weight`, `airmail_services_company`, `airmail_contact_no`, `airmail_receiving_date`, `airmail_date_of_dispatch`, `airmail_document_detail`, `airmail_receiver_address`, `airmail_accessories`, `airmail_time`) VALUES
(1, 0, 0, 0, '', '', '', '', '0000-00-00', '', '', '', '', '2020-05-20 12:50:01'),
(2, 0, 0, 0, '', '', '', '', '0000-00-00', '', '', '', '', '2020-05-20 12:50:22'),
(3, 0, 76, 789097865, '9808765', '45798', '1', '6768', '2018-12-28', '2015-09-26', '65', '57688yfd', 'bn', '2020-05-20 12:50:41'),
(4, 124, 8765, 58, 'Marsad Akbar', '1500', '1', '876', '2017-11-29', '2017-10-29', '6598', '69', '9', '2020-05-22 09:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `auction_grade`
--

CREATE TABLE `auction_grade` (
  `auction_grade_id` int(11) NOT NULL,
  `auction_grade_name` text NOT NULL,
  `auction_grade_sts` int(11) NOT NULL,
  `auction_grade_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auction_grade`
--

INSERT INTO `auction_grade` (`auction_grade_id`, `auction_grade_name`, `auction_grade_sts`, `auction_grade_time`) VALUES
(19, 'Marsad', 1, '2020-05-13 10:29:34'),
(20, 'New', 0, '2020-05-13 10:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `auction_home`
--

CREATE TABLE `auction_home` (
  `auction_home_id` int(11) NOT NULL,
  `auction_home_name` text NOT NULL,
  `auction_home_fee` text NOT NULL,
  `auction_home_sts` int(11) NOT NULL,
  `auction_home_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auction_home`
--

INSERT INTO `auction_home` (`auction_home_id`, `auction_home_name`, `auction_home_fee`, `auction_home_sts`, `auction_home_time`) VALUES
(1, 'Nihon', '1000', 0, '2020-05-19 23:35:38'),
(2, 'Japan', '500', 1, '2020-05-18 09:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `auction_info`
--

CREATE TABLE `auction_info` (
  `auction_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `auction_house` text NOT NULL,
  `auction_date` text NOT NULL,
  `auction_fee` text NOT NULL,
  `auction_start_price` text NOT NULL,
  `auction_win_price` text NOT NULL,
  `auction_transport_due_date` text NOT NULL,
  `auction_bidder` text NOT NULL,
  `auction_turn` text NOT NULL,
  `auction_win_by` text NOT NULL,
  `auction_recycle_fee` text NOT NULL,
  `auction_note` text NOT NULL,
  `auction_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auction_info`
--

INSERT INTO `auction_info` (`auction_id`, `vehicle_id`, `auction_house`, `auction_date`, `auction_fee`, `auction_start_price`, `auction_win_price`, `auction_transport_due_date`, `auction_bidder`, `auction_turn`, `auction_win_by`, `auction_recycle_fee`, `auction_note`, `auction_time`) VALUES
(1, 0, '1', '2018-11-30', '2587', '548', '58', '548', '1', '8', '5487', '548', 'ids', '2020-05-15 19:58:05'),
(2, 0, '1', '2019-11-29', '78', '87', '487', '487', '1', '58', '548', '47', 'ac', '2020-05-15 19:58:05'),
(3, 0, '', '', '', '', '', '', '', '', '', '', 'abc', '2020-05-15 19:58:05'),
(4, 0, '', '', '', '', '', '', '', '', '', '', 'abc', '2020-05-15 19:58:12'),
(5, 0, '1', '2020-05-12', '8', '798', '89', '80', '1', '786', '5786', '65', 'bhi', '2020-05-15 19:59:14'),
(6, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-16 13:17:48'),
(7, 0, '1', '2021-12-30', '589', '54', '548', '458', '1', '54', '548', '54', 'abc', '2020-05-16 13:20:27'),
(8, 0, '2', '2019-12-30', '478', '87', '487487', '87', '1', '547', '47', '78', 'vg', '2020-05-16 13:23:09'),
(9, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-16 13:24:07'),
(10, 0, '1', '2019-12-29', '158', '8', '89', '89', '1', '8', '89', '-189', 'abc', '2020-05-16 13:25:12'),
(11, 0, '1', '2018-11-30', '98', '89', '89', '589', '1', '89', '458', '548', 'hg', '2020-05-16 13:26:46'),
(12, 0, '1', '2020-11-30', '165', '56', '5656', '56', '1', '65', '56', '56', '56', '2020-05-16 13:29:28'),
(13, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-16 13:35:02'),
(14, 0, '2', '2018-11-30', '54', '54', '54', '54', '1', '54', '54', '45', 'anbc', '2020-05-16 13:36:36'),
(15, 0, '1', '2017-11-29', '2698', '98', '6598', '5689', '1', '698', '59', '6589', '9588', '2020-05-16 15:33:29'),
(16, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-16 18:48:32'),
(17, 0, '1', '2015-06-28', '-15689', '5689', '5689', '6589', '1', '956', '589', '569', 'gyft', '2020-05-16 18:52:48'),
(18, 0, '1', '2018-11-29', '5698', '659', '569', '569', '1', '659', '569', '5698', '598', '2020-05-16 18:55:42'),
(19, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 10:58:22'),
(20, 0, '1', '2020-11-30', '200', '1200', '1200', '1254', '1', '215', '125', '1254', 'chg', '2020-05-18 12:43:58'),
(21, 0, '1', '', '', '', '', '', '', '', '', '', '', '2020-05-18 12:52:55'),
(22, 0, '1', '', '', '', '', '', '', '', '', '', '', '2020-05-18 12:53:05'),
(23, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 12:53:35'),
(24, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 12:56:27'),
(25, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:16:07'),
(26, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:18:03'),
(27, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:19:24'),
(28, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:21:02'),
(29, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:43:00'),
(30, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 15:55:17'),
(31, 0, '2', '2019-11-29', '26598', '5689', '56', '659', '1', '589', '568', '6598', '65', '2020-05-20 18:43:57'),
(32, 123, '2', '2019-11-30', '1000', '12', '154', '548', '1', '54', '145', '45', '548abc', '2020-05-21 11:45:48'),
(33, 124, '2', '2018-10-29', '2254', '54', '54', '54', '2', '54', '54', '548', '54', '2020-05-21 12:00:16'),
(34, 126, '2', '2018-11-29', '2', '5', '500', '5689', '2', '5698', '6589', '6598', '5689', '2020-05-21 16:16:53'),
(35, 126, '2', '2018-11-29', '2', '5', '5689', '5689', '2', '5698', '6589', '6598', '5689', '2020-05-21 15:55:40'),
(36, 126, '2', '2018-11-29', '2', '5', '5000', '5689', '1', '5698', '6589', '6598', '5689', '2020-05-21 15:56:06');

-- --------------------------------------------------------

--
-- Table structure for table `bidders`
--

CREATE TABLE `bidders` (
  `bidders_id` int(11) NOT NULL,
  `bidders_name` text NOT NULL,
  `bidders_sts` int(11) NOT NULL,
  `bidders_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidders`
--

INSERT INTO `bidders` (`bidders_id`, `bidders_name`, `bidders_sts`, `bidders_time`) VALUES
(1, 'CHeck', 1, '2020-05-15 16:39:22'),
(2, 'New', 1, '2020-05-18 09:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_active` int(11) NOT NULL DEFAULT 0,
  `brand_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_active`, `brand_status`) VALUES
(1, 'brand test', 1, 1),
(2, 'abc', 1, 1),
(3, 'test', 1, 1),
(4, 'new one', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `budget_id` int(11) NOT NULL,
  `budget_name` text NOT NULL,
  `budget_amount` double NOT NULL,
  `budget_type` varchar(300) NOT NULL,
  `budget_date` date NOT NULL,
  `budget_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`budget_id`, `budget_name`, `budget_amount`, `budget_type`, `budget_date`, `budget_add_date`) VALUES
(1, 'Sale of Order #1', 580, 'income', '2019-10-06', '2019-10-06 12:47:39'),
(2, 'Sale of Order #1', 1080, 'income', '2020-02-02', '2020-02-04 11:44:40'),
(3, 'Sale of Order #2', 150, 'income', '2020-02-02', '2020-02-04 11:44:29'),
(4, 'Sale of Order #2', 150, 'expense', '2020-01-25', '2020-02-04 12:04:19'),
(5, 'Sale of Order #6', 250, 'income', '2020-02-10', '2020-02-10 07:15:20'),
(6, 'Sale of Order #7', 1500, 'income', '2020-02-10', '2020-02-10 07:15:59'),
(7, 'Sale of Order #8', 2500, 'income', '2020-02-10', '2020-02-10 07:16:48'),
(8, 'Sale of Order #9', 1500, 'income', '2020-02-10', '2020-02-10 07:17:54'),
(9, 'Sale of Order #10', 200, 'income', '2020-02-10', '2020-02-10 07:33:12'),
(10, 'Sale of Order #11', 2500, 'income', '2020-02-10', '2020-02-10 07:40:02'),
(11, 'Sale of Order #12', 500, 'income', '2020-02-10', '2020-02-10 07:43:12'),
(12, 'abc', 9876, 'expense', '2020-02-10', '2020-02-10 09:35:11'),
(13, 'Sale of Order #13', 500, 'income', '2020-02-12', '2020-02-12 11:17:43'),
(14, 'Sale of Order #14', 100, 'income', '2020-02-19', '2020-02-19 09:40:22'),
(15, 'Sale of Order #15', 1947, 'income', '2020-02-19', '2020-02-19 09:45:24'),
(16, 'Sale of Order #16', 950, 'income', '2020-02-19', '2020-02-19 09:45:41'),
(17, 'Sale of Order #17', 0, 'income', '1970-01-01', '2020-02-23 03:47:45'),
(18, 'Sale of Order #2', 1500, 'income', '0000-00-00', '2020-02-23 08:35:56'),
(19, 'Sale of Order #3', 1500, 'income', '2020-02-23', '2020-02-23 08:37:46'),
(20, 'Sale of Order #4', 500, 'income', '2020-02-23', '2020-02-23 08:39:04'),
(21, 'Sale of Order #5', 0, 'income', '2020-02-23', '2020-02-23 08:43:29'),
(22, 'Sale of Order #6', 0, 'income', '2020-02-23', '2020-02-23 08:45:45'),
(23, 'Sale of Order #7', 1430, 'income', '2020-02-23', '2020-02-23 08:53:04'),
(24, 'Sale of Order #8', 1430, 'income', '2020-02-23', '2020-02-23 08:54:23'),
(25, 'Sale of Order #9', 1430, 'income', '2020-02-23', '2020-02-23 08:54:44'),
(26, 'Sale of Order #10', 1430, 'income', '2020-02-23', '2020-02-23 08:56:02'),
(27, 'Sale of Order #11', 1430, 'income', '2020-02-23', '2020-02-23 08:58:19'),
(28, 'Sale of Order #12', 2200, 'income', '2020-02-23', '2020-02-23 12:36:59'),
(29, 'xyz', 200, 'expense', '2020-03-27', '2020-03-27 16:15:39'),
(30, 'Sale of Order #18', 1, 'income', '2020-04-01', '2020-04-01 12:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `budget_category`
--

CREATE TABLE `budget_category` (
  `budget_category_id` int(11) NOT NULL,
  `budget_category_name` text NOT NULL,
  `budget_category_type` varchar(400) NOT NULL,
  `budget_category_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget_category`
--

INSERT INTO `budget_category` (`budget_category_id`, `budget_category_name`, `budget_category_type`, `budget_category_add_date`) VALUES
(1, 'abc', 'income', '2020-02-10 09:30:27'),
(3, 'xyz', 'expense', '2020-02-10 09:31:59'),
(4, 'shop', 'expense', '2020-02-12 08:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_active` int(11) NOT NULL DEFAULT 0,
  `categories_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_active`, `categories_status`) VALUES
(1, 'category', 1, 2),
(2, 'abc', 1, 2),
(3, 'abcd', 1, 2),
(4, 'final', 1, 1),
(5, 'test', 1, 1),
(6, 'abc', 1, 1),
(7, 'bcd', 1, 1),
(8, 'bvd', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cc`
--

CREATE TABLE `cc` (
  `cc_id` int(11) NOT NULL,
  `cc_name` text NOT NULL,
  `cc_sts` int(11) NOT NULL,
  `cc_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cc`
--

INSERT INTO `cc` (`cc_id`, `cc_name`, `cc_sts`, `cc_time`) VALUES
(1, '4600', 1, '2020-05-18 12:28:13'),
(2, '3000', 1, '2020-05-18 12:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE `channels` (
  `channel_id` int(11) NOT NULL,
  `channel_name` varchar(255) NOT NULL,
  `airing` text NOT NULL,
  `duration` text NOT NULL,
  `channel_time` text NOT NULL,
  `rate` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`channel_id`, `channel_name`, `airing`, `duration`, `channel_time`, `rate`, `status`, `timestamp`) VALUES
(1, 'Movie Time', '18 Ads', '30 Second', '12 Hour', '1200', 1, '2020-02-25 08:38:13'),
(2, 'Drama Tv', '18 Ads', '30 second', '12 hour', '3000', 1, '2020-02-25 08:38:44'),
(3, 'Rythem', '18 Ads', '30 second', '12 hour', '3000', 1, '2020-02-25 08:39:13'),
(4, 'Action Plus', '18 Ads', '30 Second', '12 Hour', '3000', 1, '2020-02-25 08:39:47'),
(5, 'pogo', '10', '10', '1', '500', 0, '2020-02-25 08:39:53'),
(6, 'movie', '1', '1', '12', '1200', 0, '2020-02-25 08:39:58'),
(7, 'peak time', '18ads', '30 sen', '6-10', '800', 1, '2020-02-25 09:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `color_code`
--

CREATE TABLE `color_code` (
  `color_code_id` int(11) NOT NULL,
  `color_code_name` text NOT NULL,
  `color_code_name_code` text NOT NULL,
  `color_code_sts` int(11) NOT NULL,
  `color_code_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color_code`
--

INSERT INTO `color_code` (`color_code_id`, `color_code_name`, `color_code_name_code`, `color_code_sts`, `color_code_time`) VALUES
(1, 'abc', '#804040', 1, '2020-05-13 12:41:56'),
(2, 'abc', '#0000ff', 1, '2020-05-13 12:42:20'),
(3, 'abc', '#008040', 1, '2020-05-13 12:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `logo` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `company_phone` varchar(100) NOT NULL,
  `personal_phone` varchar(100) NOT NULL,
  `email` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `logo`, `address`, `company_phone`, `personal_phone`, `email`) VALUES
(5, 'Mediacom ', '35755e50cccd67ba5.png', 'Faisalabad', '123456789', '123456789', '12356');

-- --------------------------------------------------------

--
-- Table structure for table `consignee`
--

CREATE TABLE `consignee` (
  `consignee_id` int(11) NOT NULL,
  `consignee_name` text NOT NULL,
  `consignee_sts` text NOT NULL,
  `consignee_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consignee`
--

INSERT INTO `consignee` (`consignee_id`, `consignee_name`, `consignee_sts`, `consignee_time`) VALUES
(1, 'Marsad', '1', '2020-05-18 15:46:09'),
(2, 'Abc', '1', '2020-05-18 19:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `consignee_info`
--

CREATE TABLE `consignee_info` (
  `consignee_info_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `consignee_info_user_id` text NOT NULL,
  `consignee_info_customer` text NOT NULL,
  `consignee_info_contact` text NOT NULL,
  `consignee_info_final_dest` text NOT NULL,
  `consignee_info_consignee` text NOT NULL,
  `consignee_info_party_name` text NOT NULL,
  `consignee_info_email` text NOT NULL,
  `consignee_info_date` text NOT NULL,
  `consignee_info_consignee_address` text NOT NULL,
  `consignee_info_party_address` text NOT NULL,
  `consignee_info_note` text NOT NULL,
  `consignee_info_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consignee_info`
--

INSERT INTO `consignee_info` (`consignee_info_id`, `vehicle_id`, `consignee_info_user_id`, `consignee_info_customer`, `consignee_info_contact`, `consignee_info_final_dest`, `consignee_info_consignee`, `consignee_info_party_name`, `consignee_info_email`, `consignee_info_date`, `consignee_info_consignee_address`, `consignee_info_party_address`, `consignee_info_note`, `consignee_info_time`) VALUES
(1, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 16:16:53'),
(2, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 16:17:37'),
(3, 0, '1', '1', '156', '5', '1', '65', '54@abc', '0068-05-04', '5468', '48', '548', '2020-05-18 16:18:12'),
(4, 0, '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 16:37:09'),
(5, 0, '2', '1', '265', '5', '1', '5', 'abc@abc', '2019-11-29', 'cgjvh\r\n', 'g.h', 'h', '2020-05-20 10:52:11'),
(6, 124, '1', '3', '5489', '58', '1', '56', 'abc@abc.com', '2017-10-29', '54', '54', '5', '2020-05-20 18:45:45'),
(7, 124, '1', '3', '5489', '58', '1', '56', 'abc@abc.com', '2017-10-29', '54', '54', '5', '2020-05-20 18:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(2000) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_phone` varchar(13) NOT NULL,
  `customer_city` text NOT NULL,
  `customer_country` text NOT NULL,
  `customer_address` text NOT NULL,
  `customer_role` text DEFAULT NULL,
  `customer_active` int(255) NOT NULL,
  `customer_add_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `customer_company` text NOT NULL,
  `customer_contact_person` text NOT NULL,
  `customer_whatsapp` text NOT NULL,
  `customer_email2` text NOT NULL,
  `customer_skype` text NOT NULL,
  `customer_viber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_city`, `customer_country`, `customer_address`, `customer_role`, `customer_active`, `customer_add_date`, `customer_company`, `customer_contact_person`, `customer_whatsapp`, `customer_email2`, `customer_skype`, `customer_viber`) VALUES
(1, 'sir hamza', 'abcd@gmail.com', '123', '', '', '', NULL, 1, '2019-10-06 12:43:54', '', '', '', '', '', ''),
(2, 'abc', 'abc@abc.com', '12', '', '', 'abc', NULL, 2, '2020-02-10 09:27:38', '', '', '', '', '', ''),
(3, 'Sami World', 'imsami67@gmail.com', '1234567', '', '', 'main bazar sadhar faisalabad', NULL, 1, '2020-02-12 08:32:09', '', '', '', '', '', ''),
(4, 'testing', 'test@gmail.com', '3457573667', '', '', 'main bazar sadhar faisalabad\r\nFaisalabad', 'customer', 1, '2020-02-22 07:12:47', '', '', '', '', '', ''),
(5, 'sami', '121@gmai.com', '1234567', '', '', 'main bazar sadhar faisalabad', 'marketier', 1, '2020-02-22 07:18:56', '', '', '', '', '', ''),
(6, 'tameem', '121@gmai.com', '1234567', '', '', 'main bazar sadhar faisalabad', 'marketier', 1, '2020-02-22 07:19:12', '', '', '', '', '', ''),
(7, 'sir Ameer hamza', 'hamza@gmail.com', '023484848484', '', '', ' faisalabad', 'customer', 1, '2020-02-23 12:34:40', '', '', '', '', '', ''),
(8, 'abc', '', '', '', '', '', NULL, 0, '2020-05-16 11:55:08', '45', '', '', '', '', ''),
(9, '', '', '', '', '', '', NULL, 0, '2020-05-16 11:55:44', '', '', '', '', '', ''),
(10, 'Marasd', 'abc@abc.com', '8656', 'ug', 'JP', 'hgiypghn', NULL, 0, '2020-05-16 11:56:57', 'Asaan ha', '879', '7980', 'abc@abc.com', '8798', ''),
(11, '', '', '', '', '', '', NULL, 0, '2020-05-16 12:04:49', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', NULL, 0, '2020-05-16 12:29:14', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', NULL, 0, '2020-05-16 12:29:15', '', '', '', '', '', ''),
(14, '', '', '', '', '', '', NULL, 0, '2020-05-16 13:35:04', '', '', '', '', '', ''),
(15, '', '', '', '', '', '', NULL, 0, '2020-05-16 13:35:05', '', '', '', '', '', ''),
(16, 'abc', 'abc@abc.com', '659', '5', 'AF', '654', NULL, 0, '2020-05-16 13:36:54', '98', '65', '65', 'abc@abc.com', '56', ''),
(17, 'ugf', 'abc@abc', 'abc@abc', '7', 'AF', 'kjkh', NULL, 0, '2020-05-16 15:34:00', '9786', 'kjbh', 'kj', 'hkgabc@abc', '0987', ''),
(18, '765tgjh', 'gkhlj@jhgy', 'khjg', '6788', 'AX', '258', NULL, 0, '2020-05-16 18:53:08', 'uythj', 'ghjlk', 'hf', 'hvcghjk@kgy', '87', ''),
(19, 'abc', 'abc@abc', '78', '59', 'AF', '9', NULL, 0, '2020-05-16 18:56:16', 'abcs', '87', '87', 'abc@abc', '89', ''),
(20, 'abc', 'abc@abc.com', '58', '487', 'af', '4587', NULL, 0, '2020-05-18 12:44:30', '4587', '487', '5487', 'abc@abc.com', '4587', ''),
(21, '', '', '', '', '', '', NULL, 0, '2020-05-18 12:53:38', '', '', '', '', '', ''),
(22, '', '', '', '', '', '', NULL, 0, '2020-05-18 12:56:30', '', '', '', '', '', ''),
(23, '', '', '', '', '', '', NULL, 0, '2020-05-18 13:18:06', '', '', '', '', '', ''),
(24, '', '', '', '', '', '', NULL, 0, '2020-05-18 13:19:25', '', '', '', '', '', ''),
(25, '', '', '', '', '', '', NULL, 0, '2020-05-18 13:21:04', '', '', '', '', '', ''),
(26, '', '', '', '', '', '', NULL, 0, '2020-05-18 13:43:02', '', '', '', '', '', ''),
(27, 'abc', 'abc@abc.com', '6589', '6589', '5689', '6589', NULL, 0, '2020-05-20 18:44:28', '6589', '6598', '6598', 'abc@abc.com', '6598', '6598'),
(28, 'marasd', 'abc@abc.com', '5', '56', '65', '56', NULL, 0, '2020-05-21 12:01:09', 'acb', '56', '65', 'abc@abc.com', '65', '65');

-- --------------------------------------------------------

--
-- Table structure for table `doors`
--

CREATE TABLE `doors` (
  `doors_id` int(11) NOT NULL,
  `doors_name` text NOT NULL,
  `doors_sts` int(11) NOT NULL,
  `doors_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doors`
--

INSERT INTO `doors` (`doors_id`, `doors_name`, `doors_sts`, `doors_time`) VALUES
(1, '6', 1, '2020-05-18 10:14:42'),
(2, '4', 1, '2020-05-18 10:14:51'),
(3, '5', 1, '2020-05-18 09:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `drive`
--

CREATE TABLE `drive` (
  `drive_id` int(11) NOT NULL,
  `drive_name` text NOT NULL,
  `drive_sts` int(11) NOT NULL,
  `drive_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drive`
--

INSERT INTO `drive` (`drive_id`, `drive_name`, `drive_sts`, `drive_time`) VALUES
(1, 'Right Hand', 1, '2020-05-18 09:28:18'),
(2, 'Left Hand', 1, '2020-05-18 09:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `export_info`
--

CREATE TABLE `export_info` (
  `export_info_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `export_info_mashou` text NOT NULL,
  `export_info_export_certificate` text NOT NULL,
  `export_info_shipping_order` text NOT NULL,
  `export_info_arrival` text NOT NULL,
  `export_info_translation` text NOT NULL,
  `export_info_mashou_date` text NOT NULL,
  `export_info_export_certificate_date` text NOT NULL,
  `export_info_shipping_order_date` text NOT NULL,
  `export_info_arrival_date` text NOT NULL,
  `export_info_translation_date` text NOT NULL,
  `export_info_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `export_info`
--

INSERT INTO `export_info` (`export_info_id`, `vehicle_id`, `export_info_mashou`, `export_info_export_certificate`, `export_info_shipping_order`, `export_info_arrival`, `export_info_translation`, `export_info_mashou_date`, `export_info_export_certificate_date`, `export_info_shipping_order_date`, `export_info_arrival_date`, `export_info_translation_date`, `export_info_time`) VALUES
(1, 0, '', '', '', '', '', '', '', '', '', '', '2020-05-20 10:51:03'),
(2, 0, 'received', 'received', 'received', 'received', 'received', '2018-11-29', '2018-10-28', '2016-10-30', '2017-09-29', '2017-09-25', '2020-05-20 10:51:37'),
(3, 124, 'applied', 'received', 'applied', 'received', 'applied', '2018-11-29', '2018-09-29', '2017-09-29', '2018-10-28', '2019-09-28', '2020-05-22 06:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `exterior_grade`
--

CREATE TABLE `exterior_grade` (
  `exterior_grade_id` int(11) NOT NULL,
  `exterior_grade_name` text NOT NULL,
  `exterior_grade_sts` int(11) NOT NULL,
  `exterior_grade_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exterior_grade`
--

INSERT INTO `exterior_grade` (`exterior_grade_id`, `exterior_grade_name`, `exterior_grade_sts`, `exterior_grade_time`) VALUES
(1, 'abcg67', 1, '2020-05-18 09:29:24'),
(2, 'ABc', 1, '2020-05-18 09:29:27'),
(3, 'acsihk', 1, '2020-05-18 09:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE `fuel` (
  `fuel_id` int(11) NOT NULL,
  `fuel_name` text NOT NULL,
  `fuel_sts` int(11) NOT NULL,
  `fuel_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`fuel_id`, `fuel_name`, `fuel_sts`, `fuel_time`) VALUES
(1, 'Gasoline', 1, '2020-05-14 23:52:57'),
(2, 'Petrol', 1, '2020-05-14 23:53:03'),
(3, 'Disel', 1, '2020-05-14 23:53:09'),
(4, 'anc', 1, '2020-05-16 19:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_company`
--

CREATE TABLE `inspection_company` (
  `inspection_company_id` int(11) NOT NULL,
  `inspection_company_name` text NOT NULL,
  `inspection_company_sts` text NOT NULL,
  `inspection_company_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection_company`
--

INSERT INTO `inspection_company` (`inspection_company_id`, `inspection_company_name`, `inspection_company_sts`, `inspection_company_time`) VALUES
(1, 'Japan', '1', '2020-05-19 19:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_info`
--

CREATE TABLE `inspection_info` (
  `inspection_info_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `inspection_info_company` text NOT NULL,
  `inspection_info_point` text NOT NULL,
  `inspection_info_app_date` date NOT NULL,
  `inspection_info_ricksu` text NOT NULL,
  `inspection_info_sts` text NOT NULL,
  `inspection_info_validity` text NOT NULL,
  `inspection_info_validity1` text NOT NULL,
  `inspection_info_reason` text NOT NULL,
  `inspection_info_repair_charges` text NOT NULL,
  `inspection_info_repair_done_by` text NOT NULL,
  `inspection_info_note` text NOT NULL,
  `inspection_info_reinspection` text NOT NULL,
  `inspection_info_reinspection_app_date` text NOT NULL,
  `inspection_info_reinspection_ricksu` text NOT NULL,
  `inspection_info_reinspection_sts` text NOT NULL,
  `inspection_info_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection_info`
--

INSERT INTO `inspection_info` (`inspection_info_id`, `vehicle_id`, `inspection_info_company`, `inspection_info_point`, `inspection_info_app_date`, `inspection_info_ricksu`, `inspection_info_sts`, `inspection_info_validity`, `inspection_info_validity1`, `inspection_info_reason`, `inspection_info_repair_charges`, `inspection_info_repair_done_by`, `inspection_info_note`, `inspection_info_reinspection`, `inspection_info_reinspection_app_date`, `inspection_info_reinspection_ricksu`, `inspection_info_reinspection_sts`, `inspection_info_time`) VALUES
(1, 0, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-20 11:24:27'),
(2, 0, '1', '659', '2019-11-29', '2', '', '', '', 'cgjvh', '88', '479', '468', '548', '2018-12-30', '58', '', '2020-05-20 11:25:03'),
(3, 0, '1', 'abc', '2018-11-30', '1', 'fail', 'pass', 'fail', 'abc', '1200', 'abc', '1254', 'abc', '2018-11-29', '1', 'active', '2020-05-20 11:31:29'),
(4, 0, '1', 'abc', '2018-11-28', '1', 'fail', 'pass', 'fail', 'bac', '11500', '154ahc', 'abc', 'abc', '2017-11-30', '1', 'active', '2020-05-20 11:36:20'),
(5, 124, '1', 'abc', '2019-11-29', '2', 'Pass', 'Fail', 'Pass', 'hgy', '548', '56', '65', '56', '2019-10-29', '1', 'Active', '2020-05-22 07:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `interior_grade`
--

CREATE TABLE `interior_grade` (
  `interior_grade_id` int(11) NOT NULL,
  `interior_grade_name` text NOT NULL,
  `interior_grade_sts` int(11) NOT NULL,
  `interior_grade_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interior_grade`
--

INSERT INTO `interior_grade` (`interior_grade_id`, `interior_grade_name`, `interior_grade_sts`, `interior_grade_time`) VALUES
(1, 'Luxury New', 1, '2020-05-18 09:28:54'),
(2, 'Lush', 1, '2020-05-18 09:28:58'),
(3, 'Regular', 1, '2020-05-18 09:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `maker`
--

CREATE TABLE `maker` (
  `maker_id` int(11) NOT NULL,
  `maker_name` text NOT NULL,
  `maker_sts` int(11) NOT NULL,
  `maker_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maker`
--

INSERT INTO `maker` (`maker_id`, `maker_name`, `maker_sts`, `maker_time`) VALUES
(1, 'abc', 0, '2020-05-13 11:28:22'),
(2, 'abc', 1, '2020-05-13 11:28:13'),
(3, 'asd', 0, '2020-05-13 11:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `nav`
--

CREATE TABLE `nav` (
  `nav_id` int(255) NOT NULL,
  `icon` text NOT NULL,
  `heading` text NOT NULL,
  `url` text NOT NULL,
  `parent_id` text NOT NULL,
  `child_id` text NOT NULL,
  `sort_order` text NOT NULL,
  `adddatetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`nav_id`, `icon`, `heading`, `url`, `parent_id`, `child_id`, `sort_order`, `adddatetime`) VALUES
(1, 'dashboard', 'Dashboard', 'dashboard.php', '1', '', '1', '2020-03-30 10:44:00'),
(2, 'payment', 'Voucher', '#', '2', '', '2', '2020-03-30 11:56:00'),
(3, 'shopping_cart', 'Create Voucher', 'createvoucher.php', '\r\n', '2', '2', '2020-03-30 10:53:38'),
(4, 'shopping_cart', 'Search Voucher', 'show_voucher.php', '\r\n', '2', '2', '2020-03-30 10:53:38'),
(5, 'shopping_cart', 'Purchase', '#', '3', '', '3', '2020-03-30 11:22:04'),
(6, 'shopping_cart', 'Create Purchase', 'purchase.php', '', '3', '3', '2020-03-30 11:22:04'),
(7, 'shopping_cart', 'Show Purchase', 'show_purchase.php', '', '3', '3', '2020-03-30 11:22:04'),
(8, 'shopping_cart', 'Order/Invoice', '#', '4', '', '4', '2020-03-30 15:15:24'),
(9, 'shopping_cart', 'Create Order', 'orders.php?o=add', '', '4', '4', '2020-03-30 11:26:00'),
(10, 'shopping_cart', 'Show Order', 'orders.php?o=manord', '', '4', '4', '2020-03-30 11:26:00'),
(11, 'bookmark', 'Products ', '#', '5', '', '5', '2020-03-30 11:43:54'),
(12, 'shopping_cart', 'Brand', 'brand.php', '', '5', '5', '2020-03-30 11:38:53'),
(13, 'shopping_cart', 'Category', 'categories.php', '', '5', '5', '2020-03-30 11:38:57'),
(14, 'shopping_cart', 'Products/item', 'product.php', '', '5', '5', '2020-03-30 11:39:00'),
(15, 'shopping_cart', 'Opreational Reports', '#', '6', '', '6', '2020-03-30 11:39:00'),
(16, 'shopping_cart', 'Sale Report', 'print_sale.report.php', '', '6', '6', '2020-03-30 11:39:00'),
(17, 'shopping_cart', 'Purchase Report', 'print_purchase.report.php', '', '6', '6', '2020-03-30 11:39:00'),
(18, 'shopping_cart', 'Financial Reports', '#', '7', '', '7', '2020-03-30 11:39:00'),
(19, 'shopping_cart', 'Ledger Details', 'generalledger.php', '', '7', '7', '2020-03-30 11:39:00'),
(20, 'shopping_cart', 'Profit And Loss', 'profit_loss.php', '', '7', '7', '2020-03-30 11:39:00'),
(21, 'shopping_cart', 'Profit Summary', 'profit_summary.php', '', '7', '7', '2020-03-30 11:39:00'),
(22, 'settings', 'Settings', '#', '9', '', '7', '2020-03-30 13:12:34'),
(23, 'shopping_cart', 'Company', 'company.php', '', '9', '9', '2020-03-30 13:12:41'),
(24, 'shopping_cart', 'Chart Of Account', 'chartsofaccount.php', '', '9', '9', '2020-03-30 13:13:04'),
(25, 'shopping_cart', 'Enter Expenses', 'expenses.php', '', '9', '9', '2020-03-30 13:13:09'),
(26, 'person', 'User Management', '#', '8', '', '8', '2020-03-30 13:12:34'),
(27, 'users', 'Users', 'users.php', '', '8', '8', '2020-03-30 13:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `option_id` int(11) NOT NULL,
  `option_name` text NOT NULL,
  `option_sts` int(11) NOT NULL,
  `option_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`option_id`, `option_name`, `option_sts`, `option_time`) VALUES
(1, 'acb', 1, '2020-05-18 09:43:15'),
(2, 'abc', 1, '2020-05-18 09:43:20'),
(3, 'abc', 1, '2020-05-18 09:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `cod` varchar(200) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` varchar(11) NOT NULL DEFAULT '0',
  `address` varchar(500) NOT NULL,
  `reason_cancle` varchar(255) NOT NULL,
  `charges` varchar(200) NOT NULL,
  `note` varchar(1000) NOT NULL,
  `pending_order` varchar(1000) NOT NULL,
  `tracking` varchar(200) NOT NULL,
  `profit` varchar(255) NOT NULL,
  `from_date` text NOT NULL,
  `to_date` text NOT NULL,
  `transaction_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `client_name`, `client_contact`, `sub_total`, `vat`, `total_amount`, `discount`, `cod`, `grand_total`, `paid`, `due`, `payment_type`, `payment_status`, `order_status`, `address`, `reason_cancle`, `charges`, `note`, `pending_order`, `tracking`, `profit`, `from_date`, `to_date`, `transaction_id`) VALUES
(1, '2019-12-04', '1', '_', '2080', '0.00', '2080.00', '0', '0', '2080.00', '1080', '1000.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '2019-12-04', '2019-12-08', 2),
(2, '2020-01-25', '1', '_', '1150', '0.00', '1150.00', '0', '0', '1150.00', '150', '1000.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '2019-12-04', '2019-12-04', 3),
(3, '2020-02-04', '1', '_', '2080', '0.00', '2080.00', '0', '0', '2080.00', '1080', '1000.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '2019-12-02', '2019-12-04', 2),
(4, '2020-01-22', 'sami', '03457573667', '2080', '0.00', '2080.00', '0', '0', '2080.00', '1080', '1000.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '2019-12-04', '2019-12-04', 2),
(5, '2020-02-04', '1', '_', '2080', '0.00', '2080.00', '0', '0', '2080.00', '1080', '1000.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '2019-12-02', '2019-12-04', 2),
(6, '2020-02-10', '1', '_abc', '1150', '0.00', '1150.00', '0', '0', '1150.00', '250', '900.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '', '', 4),
(7, '2020-02-10', '1', '_', '250', '0.00', '250.00', '0', '0', '250.00', '1500', '-1250.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '', '', 5),
(8, '2020-02-10', '1', '_', '1200', '0.00', '1200.00', '0', '0', '1200.00', '2500', '-1300.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '', '', 6),
(9, '2020-02-10', '1', '_', '1200', '0.00', '1200.00', '0', '0', '1200.00', '1500', '-300.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '', '', 7),
(10, '2020-02-10', '1', '_', '500', '0.00', '500.00', '0', '0', '500.00', '200', '300.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '', '', 8),
(11, '2020-02-10', '1', '_', '950', '0.00', '950.00', '0', '0', '950.00', '2500', '-1550.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '', '', 9),
(12, '2020-02-10', '1', '_', '525.00', '0.00', '525.00', '0', '0', '525.00', '500', '25.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '', '', 10),
(13, '2020-02-12', '1', '_', '1000.00', '0.00', '1000.00', '0', '0', '1000.00', '500', '500.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '', '', 13),
(14, '2020-02-19', '1', '_', '100.00', '0.00', '100.00', '0', '0', '100.00', '100', '0.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '', '', 0),
(15, '2020-02-19', '3', '_', '1947.5', '0.00', '1947.50', '0', '0', '1947.50', '1947', '0.50', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '', '', 14),
(16, '2020-02-19', '1', '_', '950', '0.00', '950.00', '0', '0', '950.00', '950', '0.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '', '', 0),
(17, '1970-01-01', '', '', '1000.00', '0.00', '1000.00', '0', '0', '1000.00', '', '1000.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '', '', 20),
(18, '2020-04-01', '3', '_', '1.00', '0.00', '1.00', '0', '0', '1.00', '1', '0.00', 2, 1, '1', '0', '0', '0', '0', '0', '0', '0', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `quantity` double NOT NULL,
  `rate` double NOT NULL,
  `total` double NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT 0,
  `discount` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_item_id`, `order_id`, `product_id`, `quantity`, `rate`, `total`, `order_item_status`, `discount`) VALUES
(1, 1, 1, 5, 250, 1225, 1, '10'),
(2, 1, 3, 1, 950, 855, 1, '10'),
(3, 2, 2, 1, 1150, 1150, 1, '0'),
(4, 6, 2, 1, 1150, 1150, 1, '0'),
(5, 7, 1, 1, 250, 250, 1, '0'),
(6, 8, 1, 1, 250, 250, 1, '0'),
(7, 8, 3, 1, 950, 950, 1, '0'),
(8, 9, 1, 1, 250, 250, 1, '0'),
(9, 9, 3, 1, 950, 950, 1, '0'),
(10, 10, 1, 1, 250, 250, 1, '0'),
(11, 10, 1, 1, 250, 250, 1, '0'),
(12, 11, 3, 1, 950, 950, 1, '0'),
(13, 12, 3, 1, 0, 525, 1, '0'),
(14, 13, 1, 1, 0, 100, 1, ''),
(15, 13, 2, 1, 0, 900, 1, ''),
(16, 14, 1, 1, 0, 100, 1, ''),
(17, 15, 3, 1, 950, 855, 1, '10'),
(18, 15, 2, 1, 1150, 1092.5, 1, '5'),
(19, 16, 3, 1, 950, 950, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pack_id` int(11) NOT NULL,
  `pack_name` text NOT NULL,
  `pack_sts` int(11) NOT NULL,
  `pack_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pack_id`, `pack_name`, `pack_sts`, `pack_time`) VALUES
(1, 'New', 1, '2020-05-14 23:55:57'),
(2, 'Old', 1, '2020-05-14 23:56:01'),
(3, 'CHekc', 1, '2020-05-18 09:44:01');

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `privileges_id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nav_id` int(11) NOT NULL,
  `nav_url` text NOT NULL,
  `addby` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privileges`
--

INSERT INTO `privileges` (`privileges_id`, `user_id`, `nav_id`, `nav_url`, `addby`, `date_time`) VALUES
(38, 3, 23, 'company.php', 'Added By: admin ', '2020-03-30 18:03:27'),
(39, 3, 24, 'chartsofaccount.php', 'Added By: admin ', '2020-03-30 18:03:27'),
(40, 3, 25, 'expenses.php', 'Added By: admin ', '2020-03-30 18:03:27'),
(41, 3, 27, 'users.php', 'Added By: admin ', '2020-03-30 18:03:27'),
(65, 2, 1, 'dashboard.php', 'Added By: admin ', '2020-03-30 20:00:22'),
(66, 2, 9, 'orders.php?o=add', 'Added By: admin ', '2020-03-30 20:00:22'),
(67, 2, 10, 'orders.php?o=manord', 'Added By: admin ', '2020-03-30 20:00:22'),
(87, 1, 1, 'dashboard.php', 'Added By: admin ', '2020-03-30 20:04:38'),
(88, 1, 3, 'createvoucher.php', 'Added By: admin ', '2020-03-30 20:04:38'),
(89, 1, 4, 'show_voucher.php', 'Added By: admin ', '2020-03-30 20:04:38'),
(90, 1, 6, 'purchase.php', 'Added By: admin ', '2020-03-30 20:04:38'),
(91, 1, 7, 'show_purchase.php', 'Added By: admin ', '2020-03-30 20:04:39'),
(92, 1, 9, 'orders.php?o=add', 'Added By: admin ', '2020-03-30 20:04:39'),
(93, 1, 10, 'orders.php?o=manord', 'Added By: admin ', '2020-03-30 20:04:39'),
(94, 1, 12, 'brand.php', 'Added By: admin ', '2020-03-30 20:04:39'),
(95, 1, 13, 'categories.php', 'Added By: admin ', '2020-03-30 20:04:39'),
(96, 1, 14, 'product.php', 'Added By: admin ', '2020-03-30 20:04:39'),
(97, 1, 16, 'print_sale.report.php', 'Added By: admin ', '2020-03-30 20:04:39'),
(115, 4, 1, 'dashboard.php', 'Added By: mursad ', '2020-05-11 10:32:24'),
(116, 4, 9, 'orders.php?o=add', 'Added By: mursad ', '2020-05-11 10:32:24'),
(117, 4, 10, 'orders.php?o=manord', 'Added By: mursad ', '2020-05-11 10:32:24'),
(118, 4, 12, 'brand.php', 'Added By: mursad ', '2020-05-11 10:32:24'),
(119, 4, 13, 'categories.php', 'Added By: mursad ', '2020-05-11 10:32:25'),
(120, 4, 14, 'product.php', 'Added By: mursad ', '2020-05-11 10:32:25'),
(121, 4, 16, 'print_sale.report.php', 'Added By: mursad ', '2020-05-11 10:32:25'),
(122, 4, 17, 'print_purchase.report.php', 'Added By: mursad ', '2020-05-11 10:32:25'),
(123, 4, 19, 'generalledger.php', 'Added By: mursad ', '2020-05-11 10:32:25'),
(124, 4, 20, 'profit_loss.php', 'Added By: mursad ', '2020-05-11 10:32:25'),
(125, 4, 21, 'profit_summary.php', 'Added By: mursad ', '2020-05-11 10:32:25'),
(126, 4, 23, 'company.php', 'Added By: mursad ', '2020-05-11 10:32:25'),
(127, 4, 24, 'chartsofaccount.php', 'Added By: mursad ', '2020-05-11 10:32:25'),
(128, 4, 25, 'expenses.php', 'Added By: mursad ', '2020-05-11 10:32:25'),
(129, 4, 27, 'users.php', 'Added By: mursad ', '2020-05-11 10:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(200) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `brand_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `rate` double NOT NULL,
  `purchase` double NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `weight` varchar(200) NOT NULL,
  `arate` varchar(200) NOT NULL,
  `dscrp` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `brand_id`, `categories_id`, `quantity`, `rate`, `purchase`, `active`, `status`, `weight`, `arate`, `dscrp`) VALUES
(1, 'chicken', 'img/logo.png', 1, 1, -4, 250, 100, 1, 1, '0', '0', '0'),
(2, 'Feed', 'img/logo.png', 1, 1, 5, 1150, 900, 1, 1, '0', '0', '0'),
(3, 'Medicine', 'img/logo.png', 1, 1, 93, 950, 32.8125, 1, 1, '0', '0', '0'),
(4, 'avc', 'img/logo.png', 2, 2, 3, 1, 1, 1, 1, '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `purchase_date`, `client_name`, `client_contact`, `sub_total`, `vat`, `total_amount`, `discount`, `grand_total`, `paid`, `due`, `payment_type`, `payment_status`, `transaction_id`) VALUES
(2, '2020-02-11', '', '_', '', '', '', '0', '', '', '', 0, 0, 0),
(3, '2020-02-11', '', '_', '', '', '', '0', '', '', '', 0, 0, 0),
(4, '2020-02-11', '', '_', '', '', '', '0', '', '', '', 0, 0, 0),
(5, '2020-02-11', '', '_', '', '', '', '0', '', '', '', 0, 0, 0),
(6, '2020-02-19', '1', '_', '65.63', '0.00', '65.63', '0', '65.63', '70', '-4.37', 0, 0, 15),
(7, '2020-02-22', '1', '_', '1.00', '0.00', '1.00', '0', '1.00', '', '1.00', 0, 0, 17),
(8, '2020-02-22', '1', '_', '1.00', '0.00', '1.00', '0', '1.00', '', '1.00', 0, 0, 18),
(9, '2020-02-22', '1', '_', '1.00', '0.00', '1.00', '0', '1.00', '', '1.00', 0, 0, 19);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_item`
--

CREATE TABLE `purchase_item` (
  `purchase_item_id` int(255) NOT NULL,
  `purchase_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `purchase_item_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_item`
--

INSERT INTO `purchase_item` (`purchase_item_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total`, `purchase_item_status`) VALUES
(2, 2, 3, '', '', '', 1),
(3, 3, 3, '', '', '', 1),
(4, 4, 3, '', '', '', 1),
(5, 5, 1, '', '', '', 1),
(6, 6, 3, '1', '', '65.63', 1),
(7, 7, 4, '1', '1', '1.00', 1),
(8, 8, 4, '1', '1', '1.00', 1),
(9, 9, 4, '1', '1', '1.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `relayorder`
--

CREATE TABLE `relayorder` (
  `r_order_id` int(255) NOT NULL,
  `r_order_date` text NOT NULL,
  `r_order_client` int(255) NOT NULL,
  `r_order_segment` text NOT NULL,
  `r_order_marketier` int(200) NOT NULL,
  `r_order_period` text NOT NULL,
  `r_order_days` text NOT NULL,
  `r_order_month` text NOT NULL,
  `r_order_numberclip` text NOT NULL,
  `r_order_duration` text NOT NULL,
  `r_order_startdate` text NOT NULL,
  `r_order_enddate` text NOT NULL,
  `r_order_stoporder` text NOT NULL,
  `r_order_onair` text NOT NULL,
  `r_order_note` text NOT NULL,
  `account_branch` text NOT NULL,
  `r_order_cooffice` text NOT NULL,
  `grand_total` text NOT NULL,
  `paid` text NOT NULL,
  `due` text NOT NULL,
  `transaction_id` int(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relayorder`
--

INSERT INTO `relayorder` (`r_order_id`, `r_order_date`, `r_order_client`, `r_order_segment`, `r_order_marketier`, `r_order_period`, `r_order_days`, `r_order_month`, `r_order_numberclip`, `r_order_duration`, `r_order_startdate`, `r_order_enddate`, `r_order_stoporder`, `r_order_onair`, `r_order_note`, `account_branch`, `r_order_cooffice`, `grand_total`, `paid`, `due`, `transaction_id`, `timestamp`) VALUES
(1, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2020-02-23 08:17:20'),
(2, '1970-01-01', 5, 'abcd', 5, '30days', '10', '1', 'abcdefghij', '30 second', '2020-02-23', '2020-02-29', '140', '10', 'start tommorwo', 'abcd', 'jhang road', '1730.00', '1500', '230.00', 0, '2020-02-23 08:35:56'),
(3, '2020-02-23', 5, 'abcd', 5, '30days', '10', '1', 'abcdefghij', '30 second', '2020-02-23', '2020-02-29', '140', '10', 'start tommorwo', 'abcd', 'jhang road', '1730.00', '1500', '230.00', 0, '2020-02-23 08:37:46'),
(4, '2020-02-23', 5, '1', 5, '1', '1', '1', '1', '1', '2020-02-23', '2020-02-29', '140', '10', 'start tommorwo', 'abcd', 'jhang road', '1500.00', '500', '1000.00', 0, '2020-02-23 08:39:04'),
(5, '2020-02-23', 5, 'abcd', 6, '12', '12', '12', '12', '12', '2020-02-23', '2020-02-29', '140', '10', 'start tommorwo', 'abcd', 'jhang road', '1200.00', '', '1200.00', 0, '2020-02-23 08:43:29'),
(6, '2020-02-23', 5, '', 6, '', '', '', '', '', '2020-02-23', '2020-02-29', '140', '10', 'start tommorwo', 'abcd', 'jhang road', '1700.00', '', '1700.00', 0, '2020-02-23 08:45:45'),
(7, '2020-02-23', 4, 'abcd', 5, '12', '12', '12', '1b', '111', '2020-02-23', '2020-02-29', '140', '10', 'start tommorwo', 'abcd', 'jhang road', '2430.00', '1430', '1000.00', 0, '2020-02-23 08:53:04'),
(8, '2020-02-23', 4, 'abcd', 5, '12', '12', '12', '1b', '111', '2020-02-23', '2020-02-29', '140', '10', 'start tommorwo', 'abcd', 'jhang road', '2430.00', '1430', '1000.00', 0, '2020-02-23 08:54:23'),
(9, '2020-02-23', 4, 'abcd', 5, '12', '12', '12', '1b', '111', '2020-02-23', '2020-02-29', '140', '10', 'start tommorwo', 'abcd', 'jhang road', '2430.00', '1430', '1000.00', 0, '2020-02-23 08:54:43'),
(10, '2020-02-23', 4, 'abcd', 5, '12', '12', '12', '1b', '111', '2020-02-23', '2020-02-29', '140', '10', 'start tommorwo', 'abcd', 'jhang road', '2430.00', '1430', '1000.00', 0, '2020-02-23 08:56:02'),
(11, '2020-02-23', 4, 'abcd', 5, '12', '12', '12', '1b', '111', '2020-02-23', '2020-02-29', '140', '10', 'start tommorwo', 'abcd', 'jhang road', '2430.00', '1430', '1000.00', 0, '2020-02-23 08:58:19'),
(12, '2020-02-23', 7, '20', 5, '2 mounths', '2', '2', '25 clips', '18 second per clip', '2020-02-23', '2020-02-29', '140', '60', 'start tommorow on all channles', 'faisalabad', 'kohe nooor city', '4200.00', '2200', '2000.00', 0, '2020-02-23 12:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `relayorder_item`
--

CREATE TABLE `relayorder_item` (
  `r_orderitem_id` int(255) NOT NULL,
  `relayorder` int(255) NOT NULL,
  `channel_id` text NOT NULL,
  `airing` text NOT NULL,
  `duration` text NOT NULL,
  `rate` text NOT NULL,
  `total` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relayorder_item`
--

INSERT INTO `relayorder_item` (`r_orderitem_id`, `relayorder`, `channel_id`, `airing`, `duration`, `rate`, `total`, `timestamp`) VALUES
(1, 1, '', '1', '1', '1', '1', '2020-02-23 08:43:01'),
(2, 10, '3', 'chekc', 'chekc', '1230', '1230.00', '2020-02-23 08:56:02'),
(3, 10, '1', '18 ad', '30', '1200', '1200.00', '2020-02-23 08:56:02'),
(4, 11, '3', 'chekc', 'chekc', '1230', '1230.00', '2020-02-23 08:58:19'),
(5, 11, '1', '18 ad', '30', '1200', '1200.00', '2020-02-23 08:58:19'),
(6, 12, '4', '10 ads', '30 second', '3000', '3000.00', '2020-02-23 12:36:59'),
(7, 12, '6', '10 ads', '30 second', '1200', '1200.00', '2020-02-23 12:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `reservation_by` text NOT NULL,
  `reservation_date` text NOT NULL,
  `reservation_sold_price` text NOT NULL,
  `reservation_sts` text NOT NULL,
  `reservation_customer` text NOT NULL,
  `reservation_start_date` text NOT NULL,
  `reservation_payement` text NOT NULL,
  `reservation_que` text NOT NULL,
  `reservation_expiry_date` text NOT NULL,
  `reservation_note` text NOT NULL,
  `reservation_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `vehicle_id`, `reservation_by`, `reservation_date`, `reservation_sold_price`, `reservation_sts`, `reservation_customer`, `reservation_start_date`, `reservation_payement`, `reservation_que`, `reservation_expiry_date`, `reservation_note`, `reservation_time`) VALUES
(1, 0, 'abcq', 'jhg@abkhi', '6879', '', '1', 'ohu@fjhkj', '', '47', '47', '478', '2020-05-16 16:16:21'),
(2, 0, 'abcq', 'jhg@abkhi', '6879', '', '1', 'ohu@fjhkj', '', '47', '47', '478', '2020-05-16 16:16:40'),
(3, 0, 'abcq', 'jhg@abkhi', '6879', '', '1', 'ohu@fjhkj', '80', '47', '47', '478', '2020-05-16 16:17:44'),
(4, 0, 'abcq', 'jhg@abkhi', '6879', '', '1', 'ohu@fjhkj', '80', '47', '47', '478', '2020-05-16 16:17:58'),
(5, 0, 'uyt', 'asfdg@fahgh', '876', '', '2', '7889786@tuyo', '5', '58', '877658', '54', '2020-05-16 18:53:55'),
(6, 0, 'kjhu', 'abc@abc', '876', '', '1', 'abc@abc', '5', '1589', '548', '5\r\n', '2020-05-16 18:56:52'),
(7, 0, 'abc', 'abc@abc', '58', '', '1', 'abc@abc', '5', '548', '548', 'khgyi', '2020-05-18 12:45:05'),
(8, 0, '', '', '', '', '', '', '', '', '', '', '2020-05-18 12:53:40'),
(9, 0, '', '', '', '', '', '', '', '', '', '', '2020-05-18 12:53:43'),
(10, 0, '', '', '', '', '', '', '', '', '', '', '2020-05-18 12:54:36'),
(11, 0, '', '', '', '', '', '', '', '', '', '', '2020-05-18 12:54:37'),
(12, 0, '', '', '', '', '', '', '', '', '', '', '2020-05-18 12:54:38'),
(13, 0, '', '', '', '', '', '', '', '', '', '', '2020-05-18 12:54:38'),
(14, 0, '', '', '', '', '', '', '', '', '', '', '2020-05-18 12:54:38'),
(15, 0, '', '', '', '', '', '', '', '', '', '', '2020-05-18 12:56:32'),
(16, 0, '', '', '', '', '', '', '', '', '', '', '2020-05-18 12:56:55'),
(17, 0, '', '', '', '', '', '', '', '', '', '', '2020-05-18 12:59:15'),
(18, 0, '', '', '', '', '', '', '', '', '', '', '2020-05-18 12:59:32'),
(19, 0, '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:21:06'),
(20, 0, '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:43:04'),
(21, 0, 'abc', '2018-11-29', '548', '', '4578', '2018-10-29', '25', '121', '87', 'ab', '2020-05-20 18:44:47'),
(22, 124, 'bhg', '2018-10-30', '86798', '1', '20', '2018-09-29', '15', '659', 'gjvh', '54', '2020-05-21 18:07:54'),
(23, 124, 'bhg', '2018-10-30', '86798', '1', '20', '2018-09-29', '15', '659', 'gjvh', '54', '2020-05-21 18:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `ricksu`
--

CREATE TABLE `ricksu` (
  `ricksu_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `ricksu_company` text NOT NULL,
  `ricksu_loading_point` text NOT NULL,
  `ricksu_delievery_point` text NOT NULL,
  `ricksu_yard_service` text NOT NULL,
  `ricksu_ad_service` text NOT NULL,
  `ricksu_fee` text NOT NULL,
  `ricksu_deliever_by` text NOT NULL,
  `ricksu_receive_by` text NOT NULL,
  `ricksu_free_at_yard` text NOT NULL,
  `ricksu_charger_for_additional` text NOT NULL,
  `ricksu_arrival_date` text NOT NULL,
  `ricksu_leaving_date` text NOT NULL,
  `ricksu_repair_info` text NOT NULL,
  `ricksu_repair_fee` text NOT NULL,
  `ricksu_note` text NOT NULL,
  `ricksu_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ricksu`
--

INSERT INTO `ricksu` (`ricksu_id`, `vehicle_id`, `ricksu_company`, `ricksu_loading_point`, `ricksu_delievery_point`, `ricksu_yard_service`, `ricksu_ad_service`, `ricksu_fee`, `ricksu_deliever_by`, `ricksu_receive_by`, `ricksu_free_at_yard`, `ricksu_charger_for_additional`, `ricksu_arrival_date`, `ricksu_leaving_date`, `ricksu_repair_info`, `ricksu_repair_fee`, `ricksu_note`, `ricksu_time`) VALUES
(1, 0, '1', '589', '589', '5', '548', '48', '', '58', '548', '', '2018-11-29', '2010-10-29', '5487', '548', 'ahb', '2020-05-16 17:06:59'),
(2, 0, '1', '56', '5', '5', '54', '54', '', '548', '45', '', '2018-11-30', '2018-10-29', '5', '54', 'abc', '2020-05-18 12:46:50'),
(3, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:22:20'),
(4, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:29:19'),
(5, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:29:42'),
(6, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:33:38'),
(7, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:34:10'),
(8, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:43:06'),
(9, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:44:50'),
(10, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:45:55'),
(11, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:46:56'),
(12, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 13:47:58'),
(13, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 15:12:55'),
(14, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 15:14:35'),
(15, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 15:17:03'),
(16, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 15:46:50'),
(17, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 15:48:04'),
(18, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 15:48:30'),
(19, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-18 18:45:50'),
(20, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-19 23:36:29'),
(21, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-20 10:32:46'),
(22, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-20 17:10:37'),
(23, 124, '1', '548', '5', '5', '89', '56', '', '6598', '548', '', '2018-11-29', '2019-10-29', '5', '6598', 'abh', '2020-05-21 18:23:41'),
(24, 124, '1', '548', '5', '5', '89', '56', '', '6598', '548', '', '2018-11-29', '2019-10-29', '5', '6598', 'abh', '2020-05-21 18:37:04'),
(25, 124, '1', '548', '5', '5', '89', '56', '', '6598', '548', '', '2018-11-29', '2019-10-29', '5', '6598', 'abh', '2020-05-22 06:10:14'),
(26, 124, '1', '548', '5', '5', '89', '56', 'xyz', '6598', '548', '1', '2018-11-29', '2019-10-29', '5', '6598', 'abh', '2020-05-22 06:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `ricksu_company`
--

CREATE TABLE `ricksu_company` (
  `ricksu_company_id` int(11) NOT NULL,
  `ricksu_company_name` text NOT NULL,
  `ricksu_company_fee` text NOT NULL,
  `ricksu_company_sts` int(11) NOT NULL,
  `ricksu_company_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ricksu_company`
--

INSERT INTO `ricksu_company` (`ricksu_company_id`, `ricksu_company_name`, `ricksu_company_fee`, `ricksu_company_sts`, `ricksu_company_time`) VALUES
(1, 'abc', '768abc', 1, '2020-05-18 09:56:54'),
(2, 'New', '76876', 1, '2020-05-18 09:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seats_id` int(11) NOT NULL,
  `seats_name` text NOT NULL,
  `seats_sts` int(11) NOT NULL,
  `seats_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seats_id`, `seats_name`, `seats_sts`, `seats_time`) VALUES
(1, '4', 1, '2020-05-18 09:29:48'),
(2, '5', 1, '2020-05-18 09:29:51'),
(3, '2', 1, '2020-05-18 09:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `services_company`
--

CREATE TABLE `services_company` (
  `services_company_id` int(11) NOT NULL,
  `services_company_name` text NOT NULL,
  `services_company_sts` int(11) NOT NULL,
  `services_company_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_company`
--

INSERT INTO `services_company` (`services_company_id`, `services_company_name`, `services_company_sts`, `services_company_time`) VALUES
(1, 'Abc 1458', 1, '2020-05-19 20:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `shipment_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `shipment_company` text NOT NULL,
  `shipment_country` text NOT NULL,
  `shipment_ship_name` text NOT NULL,
  `shipment_type` text NOT NULL,
  `shipment_consignee` text NOT NULL,
  `shipment_notify_party_name` text NOT NULL,
  `shipment_destination` text NOT NULL,
  `shipment_access_with_cargo` text NOT NULL,
  `shipment_order_no` text NOT NULL,
  `shipment_port_of_landing` text NOT NULL,
  `shipment_voyage_no` text NOT NULL,
  `shipment_container_no` text NOT NULL,
  `shipment_consignee_address` text NOT NULL,
  `auction_note` text NOT NULL,
  `shipment_measures_m3` text NOT NULL,
  `shipment_notes` text NOT NULL,
  `shipment_port_of_discharge` text NOT NULL,
  `shipment_date` text NOT NULL,
  `shipment_order_cutting_date` text NOT NULL,
  `shipment_wieght` text NOT NULL,
  `shipment_contact` text NOT NULL,
  `shipment_contact2` text NOT NULL,
  `shipment_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`shipment_id`, `vehicle_id`, `shipment_company`, `shipment_country`, `shipment_ship_name`, `shipment_type`, `shipment_consignee`, `shipment_notify_party_name`, `shipment_destination`, `shipment_access_with_cargo`, `shipment_order_no`, `shipment_port_of_landing`, `shipment_voyage_no`, `shipment_container_no`, `shipment_consignee_address`, `auction_note`, `shipment_measures_m3`, `shipment_notes`, `shipment_port_of_discharge`, `shipment_date`, `shipment_order_cutting_date`, `shipment_wieght`, `shipment_contact`, `shipment_contact2`, `shipment_time`) VALUES
(1, 0, 'dhl', 'af', 'bac', '', '1', '45', '1', 'ayf', '-1', 'abc', '5698', '658', '56', '65', '89', '89', '8659', '2020-12-31', '2018-10-27', '56', 'hgy', 'bhku', '2020-05-20 12:30:31'),
(2, 0, '', '', '', '', '', '', '', '', '', 'xyz', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-20 12:32:14'),
(3, 124, 'DHL', 'Pakistan', 'abc', 'Container', '1', '56', '1', '659', '9562', 'xyz', '69', '659', '5698', 'ahvgy', '5', '58', '589', '2018-10-29', '2017-09-29', '589', '5', '458', '2020-05-22 07:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `todo_id` int(11) NOT NULL,
  `todo_name` text NOT NULL,
  `todo_sts` int(11) NOT NULL,
  `todo_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`todo_id`, `todo_name`, `todo_sts`, `todo_time`) VALUES
(2, 'abcd', 0, '2020-03-27 16:16:17'),
(3, 'abc', 0, '2020-05-20 18:15:40'),
(4, 'asdfghj', 0, '2020-05-20 18:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `debit` varchar(100) NOT NULL,
  `credit` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `transaction_remarks` text NOT NULL,
  `transaction_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `debit`, `credit`, `balance`, `customer_id`, `transaction_remarks`, `transaction_add_date`) VALUES
(1, '0', '500.00', '500', 1, 'Amount receivable for goods sold(_)', '2019-10-06 12:47:38'),
(2, '0', '1000.00', '1500', 1, 'Amount receivable for goods sold(_)', '2019-10-06 12:49:07'),
(3, '0', '1000.00', '2500', 1, 'Amount receivable for goods sold(_)', '2020-01-25 19:57:51'),
(4, '0', '900.00', '3400', 1, 'Amount receivable for goods sold(_abc)', '2020-02-10 07:15:19'),
(5, '-1250.00', '0', '2150', 1, 'Amount receivable for goods sold', '2020-02-10 07:15:58'),
(6, '-1300.00', '0', '850', 1, 'Amount receivable for goods sold', '2020-02-10 07:16:47'),
(7, '-300.00', '0', '550', 1, 'Amount receivable for goods sold', '2020-02-10 07:17:54'),
(8, '0', '300.00', '850', 1, 'Amount receivable for goods sold(_)', '2020-02-10 07:33:12'),
(9, '-1550.00', '0', '-700', 1, 'Amount receivable for goods sold', '2020-02-10 07:40:02'),
(10, '0', '25.00', '-675', 1, 'Amount receivable for goods sold(_)', '2020-02-10 07:43:12'),
(11, '500', '0', '-1175', 1, '_', '2020-02-11 21:53:56'),
(12, '6000', '0', '-7175', 1, '_', '2020-02-11 22:00:29'),
(13, '0', '500.00', '-6675', 1, 'Amount receivable for goods sold(_)', '2020-02-12 11:17:43'),
(14, '0', '0.50', '0.5', 3, 'Amount receivable for goods sold(_)', '2020-02-19 09:45:24'),
(15, '-4.37', '0', '-6679.37', 1, 'Purchased product', '2020-02-19 09:46:01'),
(16, '110', '0', '-6789.37', 1, '_', '2020-02-22 06:18:19'),
(17, '1.00', '0', '-6788.37', 1, 'Purchased product', '2020-02-22 06:23:13'),
(18, '1.00', '0', '-6787.37', 1, 'Purchased product', '2020-02-22 06:23:13'),
(19, '1.00', '0', '-6786.37', 1, 'Purchased product', '2020-02-22 06:23:13'),
(20, '0', '1000.00', '1000', 0, 'Purchased product()', '2020-02-23 03:47:45'),
(21, '0', '230.00', '230', 5, 'Channel Ads Purchased()', '2020-02-23 08:35:56'),
(22, '0', '230.00', '460', 5, 'Channel Ads Purchased', '2020-02-23 08:37:46'),
(23, '0', '1000.00', '1460', 5, 'Channel Ads Purchased', '2020-02-23 08:39:04'),
(24, '0', '1200.00', '2660', 5, 'Channel Ads Purchased', '2020-02-23 08:43:29'),
(25, '0', '1700.00', '4360', 5, 'Channel Ads Purchased', '2020-02-23 08:45:45'),
(26, '0', '1000.00', '1000', 4, 'Channel Ads Purchased', '2020-02-23 08:53:04'),
(27, '0', '1000.00', '2000', 4, 'Channel Ads Purchased', '2020-02-23 08:54:23'),
(28, '0', '1000.00', '3000', 4, 'Channel Ads Purchased', '2020-02-23 08:54:43'),
(29, '0', '1000.00', '4000', 4, 'Channel Ads Purchased', '2020-02-23 08:56:02'),
(30, '0', '1000.00', '5000', 4, 'Channel Ads Purchased', '2020-02-23 08:58:19'),
(31, '0', '2000.00', '2000', 7, 'Channel Ads Purchased', '2020-02-23 12:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `transmission`
--

CREATE TABLE `transmission` (
  `transmission_id` int(11) NOT NULL,
  `transmission_name` text NOT NULL,
  `transmission_sts` int(11) NOT NULL,
  `transmission_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transmission`
--

INSERT INTO `transmission` (`transmission_id`, `transmission_name`, `transmission_sts`, `transmission_time`) VALUES
(1, 'abc', 1, '2020-05-13 12:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `transportation_id` int(11) NOT NULL,
  `transportation_name` text NOT NULL,
  `transportation_sts` int(11) NOT NULL,
  `transportation_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`transportation_id`, `transportation_name`, `transportation_sts`, `transportation_time`) VALUES
(1, 'Abc 123', 1, '2020-05-19 20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `user_role` text NOT NULL,
  `status` text NOT NULL,
  `adddatetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `address`, `phone`, `user_role`, `status`, `adddatetime`) VALUES
(1, 'admin', 'imsami67@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '234', '12345', 'admin', '1', '2020-03-30 09:39:52'),
(2, 'sami', 'test12@gmail.com', 'd54d1702ad0f8326224b817c796763c9', 'main bazar sadhar faisalabad', '12345', 'subadmin', '1', '2020-03-30 19:59:56'),
(3, 'test', 'test@email.com', '11223344', 'main bazar sadhar faisalabad', '12345', 'manager', '1', '2020-03-30 13:17:29'),
(4, 'mursad', 'mursad@gmail.com', 'd54d1702ad0f8326224b817c796763c9', 'acd', '11223344', 'manager', '1', '2020-05-11 10:30:56');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

CREATE TABLE `vehicle_info` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_stock_id` text NOT NULL,
  `vehicle_chassis_no` text NOT NULL,
  `vehicle_engine_no` text NOT NULL,
  `vehicle_engine_type` text NOT NULL,
  `vehicle_loading_capacity` text NOT NULL,
  `vehicle_weight` text NOT NULL,
  `vehicle_access` text NOT NULL,
  `vehicle_m3` text NOT NULL,
  `vehicle_km` text NOT NULL,
  `vehicle_km2` text NOT NULL,
  `vehicle_manu_year` text NOT NULL,
  `vehicle_reg_month` text NOT NULL,
  `vehicle_reg_year` text NOT NULL,
  `vehicle_maker` text NOT NULL,
  `vehicle_brand` text NOT NULL,
  `vehicle_grade` text NOT NULL,
  `vehicle_cc` text NOT NULL,
  `vehicle_transmission` text NOT NULL,
  `vehicle_drive` text NOT NULL,
  `vehicle_fuel` text NOT NULL,
  `vehicle_package` text NOT NULL,
  `vehicle_option` text NOT NULL,
  `vehicle_door` text NOT NULL,
  `vehicle_seat` text NOT NULL,
  `vehicle_color` text NOT NULL,
  `vehicle_color_name` text NOT NULL,
  `vehicle_interior` text NOT NULL,
  `vehicle_exterior` text NOT NULL,
  `vehicle_width` text NOT NULL,
  `vehicle_length` text NOT NULL,
  `vehicle_height` text NOT NULL,
  `vehicle_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_info`
--

INSERT INTO `vehicle_info` (`vehicle_id`, `vehicle_stock_id`, `vehicle_chassis_no`, `vehicle_engine_no`, `vehicle_engine_type`, `vehicle_loading_capacity`, `vehicle_weight`, `vehicle_access`, `vehicle_m3`, `vehicle_km`, `vehicle_km2`, `vehicle_manu_year`, `vehicle_reg_month`, `vehicle_reg_year`, `vehicle_maker`, `vehicle_brand`, `vehicle_grade`, `vehicle_cc`, `vehicle_transmission`, `vehicle_drive`, `vehicle_fuel`, `vehicle_package`, `vehicle_option`, `vehicle_door`, `vehicle_seat`, `vehicle_color`, `vehicle_color_name`, `vehicle_interior`, `vehicle_exterior`, `vehicle_width`, `vehicle_length`, `vehicle_height`, `vehicle_time`) VALUES
(124, '154', '154', '54', '45', '45', '54', '54', '0.11858', '54', '54', '1921', '1925', 'jan', '2', '1', 'marsad', '4600', 'abc', 'right hand', 'gasoline', 'new', 'acb', '6', '4', 'abc', 'red', 'luxury new', 'abcg67', '154', '5', '154', '2020-05-21 11:59:38'),
(125, '154', '154', '54', '45', '45', '54', '54', '11.858', '54', '54', '1921', '1925', 'jan', '2', '1', 'marsad', '4600', 'abc', 'right hand', 'gasoline', 'new', 'acb', '6', '4', 'abc', 'red', 'luxury new', 'abcg67', '154', '500', '154', '2020-05-21 13:30:42'),
(126, '156', '154', '1200', '45', '45', '54', '54', '11.858', '54', '54', '1927', '1925', 'jan', '2', '4', 'marsad', '4600', 'abc', 'right hand', 'gasoline', 'new', 'acb', '6', '4', 'abc', 'red', 'luxury new', 'abcg67', '154', '500', '154', '2020-05-21 14:42:37'),
(127, '78', '7', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-05-21 18:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `voucher_id` int(11) NOT NULL,
  `customer_id` varchar(300) NOT NULL,
  `nuration` text NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `voucher_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`voucher_id`, `customer_id`, `nuration`, `transaction_id`, `voucher_date`) VALUES
(1, '1', '_', 11, '0000-00-00'),
(2, '1', '_', 12, '2020-02-11'),
(3, '1', '_', 16, '2020-02-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airmail`
--
ALTER TABLE `airmail`
  ADD PRIMARY KEY (`airmail_id`);

--
-- Indexes for table `auction_grade`
--
ALTER TABLE `auction_grade`
  ADD PRIMARY KEY (`auction_grade_id`);

--
-- Indexes for table `auction_home`
--
ALTER TABLE `auction_home`
  ADD PRIMARY KEY (`auction_home_id`);

--
-- Indexes for table `auction_info`
--
ALTER TABLE `auction_info`
  ADD PRIMARY KEY (`auction_id`);

--
-- Indexes for table `bidders`
--
ALTER TABLE `bidders`
  ADD PRIMARY KEY (`bidders_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`budget_id`);

--
-- Indexes for table `budget_category`
--
ALTER TABLE `budget_category`
  ADD PRIMARY KEY (`budget_category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `cc`
--
ALTER TABLE `cc`
  ADD PRIMARY KEY (`cc_id`);

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`channel_id`);

--
-- Indexes for table `color_code`
--
ALTER TABLE `color_code`
  ADD PRIMARY KEY (`color_code_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consignee`
--
ALTER TABLE `consignee`
  ADD PRIMARY KEY (`consignee_id`);

--
-- Indexes for table `consignee_info`
--
ALTER TABLE `consignee_info`
  ADD PRIMARY KEY (`consignee_info_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `doors`
--
ALTER TABLE `doors`
  ADD PRIMARY KEY (`doors_id`);

--
-- Indexes for table `drive`
--
ALTER TABLE `drive`
  ADD PRIMARY KEY (`drive_id`);

--
-- Indexes for table `export_info`
--
ALTER TABLE `export_info`
  ADD PRIMARY KEY (`export_info_id`);

--
-- Indexes for table `exterior_grade`
--
ALTER TABLE `exterior_grade`
  ADD PRIMARY KEY (`exterior_grade_id`);

--
-- Indexes for table `fuel`
--
ALTER TABLE `fuel`
  ADD PRIMARY KEY (`fuel_id`);

--
-- Indexes for table `inspection_company`
--
ALTER TABLE `inspection_company`
  ADD PRIMARY KEY (`inspection_company_id`);

--
-- Indexes for table `inspection_info`
--
ALTER TABLE `inspection_info`
  ADD PRIMARY KEY (`inspection_info_id`);

--
-- Indexes for table `interior_grade`
--
ALTER TABLE `interior_grade`
  ADD PRIMARY KEY (`interior_grade_id`);

--
-- Indexes for table `maker`
--
ALTER TABLE `maker`
  ADD PRIMARY KEY (`maker_id`);

--
-- Indexes for table `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`nav_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`privileges_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `purchase_item`
--
ALTER TABLE `purchase_item`
  ADD PRIMARY KEY (`purchase_item_id`);

--
-- Indexes for table `relayorder`
--
ALTER TABLE `relayorder`
  ADD PRIMARY KEY (`r_order_id`);

--
-- Indexes for table `relayorder_item`
--
ALTER TABLE `relayorder_item`
  ADD PRIMARY KEY (`r_orderitem_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `ricksu`
--
ALTER TABLE `ricksu`
  ADD PRIMARY KEY (`ricksu_id`);

--
-- Indexes for table `ricksu_company`
--
ALTER TABLE `ricksu_company`
  ADD PRIMARY KEY (`ricksu_company_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seats_id`);

--
-- Indexes for table `services_company`
--
ALTER TABLE `services_company`
  ADD PRIMARY KEY (`services_company_id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`shipment_id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`todo_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `transmission`
--
ALTER TABLE `transmission`
  ADD PRIMARY KEY (`transmission_id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`transportation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`voucher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `airmail`
--
ALTER TABLE `airmail`
  MODIFY `airmail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auction_grade`
--
ALTER TABLE `auction_grade`
  MODIFY `auction_grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `auction_home`
--
ALTER TABLE `auction_home`
  MODIFY `auction_home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auction_info`
--
ALTER TABLE `auction_info`
  MODIFY `auction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `bidders`
--
ALTER TABLE `bidders`
  MODIFY `bidders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `budget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `budget_category`
--
ALTER TABLE `budget_category`
  MODIFY `budget_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cc`
--
ALTER TABLE `cc`
  MODIFY `cc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `channel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `color_code`
--
ALTER TABLE `color_code`
  MODIFY `color_code_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `consignee`
--
ALTER TABLE `consignee`
  MODIFY `consignee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `consignee_info`
--
ALTER TABLE `consignee_info`
  MODIFY `consignee_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `doors`
--
ALTER TABLE `doors`
  MODIFY `doors_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drive`
--
ALTER TABLE `drive`
  MODIFY `drive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `export_info`
--
ALTER TABLE `export_info`
  MODIFY `export_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exterior_grade`
--
ALTER TABLE `exterior_grade`
  MODIFY `exterior_grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fuel`
--
ALTER TABLE `fuel`
  MODIFY `fuel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inspection_company`
--
ALTER TABLE `inspection_company`
  MODIFY `inspection_company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inspection_info`
--
ALTER TABLE `inspection_info`
  MODIFY `inspection_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `interior_grade`
--
ALTER TABLE `interior_grade`
  MODIFY `interior_grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `maker`
--
ALTER TABLE `maker`
  MODIFY `maker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nav`
--
ALTER TABLE `nav`
  MODIFY `nav_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `privileges_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `purchase_item`
--
ALTER TABLE `purchase_item`
  MODIFY `purchase_item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `relayorder`
--
ALTER TABLE `relayorder`
  MODIFY `r_order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `relayorder_item`
--
ALTER TABLE `relayorder_item`
  MODIFY `r_orderitem_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ricksu`
--
ALTER TABLE `ricksu`
  MODIFY `ricksu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ricksu_company`
--
ALTER TABLE `ricksu_company`
  MODIFY `ricksu_company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `seats_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services_company`
--
ALTER TABLE `services_company`
  MODIFY `services_company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `shipment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `todo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `transmission`
--
ALTER TABLE `transmission`
  MODIFY `transmission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `transportation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `voucher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
