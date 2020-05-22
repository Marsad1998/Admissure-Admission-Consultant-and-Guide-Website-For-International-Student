-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 02:17 PM
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
-- Database: `admissure`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` text NOT NULL,
  `admin_password` text NOT NULL,
  `admin_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_time`) VALUES
(23, 'Marsad Akbar', 'marsadakbar1@gmail.com', 'abc', '2020-05-14 18:21:35'),
(24, 'check', 'abc@abc.com', 'hgy', '2020-05-17 01:12:43'),
(25, 'abc', 'abc@abc.com', 'abc', '2020-05-19 10:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `testimonals`
--

CREATE TABLE `testimonals` (
  `test_id` int(11) NOT NULL,
  `test_text` text NOT NULL,
  `test_sts` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `test_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonals`
--

INSERT INTO `testimonals` (`test_id`, `test_text`, `test_sts`, `user_id`, `test_time`) VALUES
(1, 'Checking', 1, 17, '2020-05-14 20:51:53'),
(2, 'Good', 0, 17, '2020-05-12 12:35:11'),
(3, 'Great Web', 1, 17, '2020-05-14 20:52:03'),
(4, 'abc', 0, 17, '2020-05-12 12:57:29'),
(5, 'Great Web New', 1, 17, '2020-05-14 20:52:05'),
(6, 'Marsa', 0, 17, '2020-05-14 20:51:45'),
(7, 'check', 0, 17, '2020-05-12 13:23:05'),
(8, 'bye', 0, 17, '2020-05-12 20:06:01'),
(9, 'hi', 0, 18, '2020-05-14 09:41:09'),
(13, 'New', 0, 2, '2020-05-16 10:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `uni_id` int(11) NOT NULL,
  `uni_name` text NOT NULL,
  `uni_web` text NOT NULL,
  `uni_logo` text DEFAULT NULL,
  `uni_form` text DEFAULT NULL,
  `uni_sts` int(11) NOT NULL,
  `uni_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`uni_id`, `uni_name`, `uni_web`, `uni_logo`, `uni_form`, `uni_sts`, `uni_time`) VALUES
(1, 'abc', 'abc', '5ebe1b5eb85db.jpg', '5ebe1bdeeb1bf.docx', 2, '2020-05-15 06:34:29'),
(2, 'abc', 'abc', '5ebe2a55e7cbd.jpg', '5ebe2a711fbb6.pdf', 2, '2020-05-15 06:34:33'),
(3, 'abc', 'abc', '5ebe2a5a9eb6e.jpg', '5ebe2a784296c.docx', 0, '2020-05-15 06:33:56'),
(4, 'GCUF', 'https://www.gcuf.edu.pk', '5ebe016297e61.png', '', 2, '2020-05-15 06:34:34'),
(5, 'Punjab University', 'https://www.pugc.edu.pk', '5ebe2a3b92ebd.png', '', 0, '2020-05-15 06:34:00'),
(6, 'Hi', 'Masa', NULL, NULL, 1, '2020-05-16 10:18:46'),
(7, 'abc', '6ythgv', NULL, NULL, 1, '2020-05-19 11:12:59'),
(8, '', '', NULL, NULL, 0, '2020-05-19 11:19:17'),
(9, 'Abc', '765dfgv', '5ec3c10c41a8f.png', NULL, 1, '2020-05-19 11:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_surname` text NOT NULL,
  `user_country` text DEFAULT NULL,
  `user_state` text DEFAULT NULL,
  `user_address` text DEFAULT NULL,
  `user_phone` text DEFAULT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_pic` text DEFAULT NULL,
  `kin_name` text DEFAULT NULL,
  `kin_phone` text DEFAULT NULL,
  `user_account` varchar(255) DEFAULT NULL,
  `user_code` varchar(255) DEFAULT NULL,
  `user_sts` int(11) NOT NULL DEFAULT 0,
  `user_balance` double NOT NULL DEFAULT 0,
  `user_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_surname`, `user_country`, `user_state`, `user_address`, `user_phone`, `user_email`, `user_password`, `user_pic`, `kin_name`, `kin_phone`, `user_account`, `user_code`, `user_sts`, `user_balance`, `user_time`) VALUES
(2, 'Marsad', 'Akbar', '', '', '', '784512', 'abc@abc.com', 'abc', '5ebdff705dc6f.jpg', '', '', '', '', 1, 0, '2020-05-15 02:33:20'),
(9, 'Marsad', 'Akbar', '', '', '', '145', 'abc@abc.com', 'Marsad0.', '', '', '', '', '', 1, 0, '2020-05-14 18:37:27'),
(10, 'Marsad', 'Akbar', '', '', '', '7845', 'abc@abc.com', 'Marsad.0', '', '', '', '', '', 1, 0, '2020-05-17 00:38:39'),
(11, 'Marsad', 'Akbar', '', '', '', '7845', 'abc@abc.com', 'Marsad.0', '', '', '', '', '', 0, 0, '2020-05-11 07:08:54'),
(12, 'Marsad', 'Akbar', '', '', '', '145', 'abc@abc.com', 'Marsad0.', '', '', '', '', '', 0, 0, '2020-05-11 07:12:11'),
(13, 'Marsad', 'Akbar', '', '', '', '845', 'abc@abc.com', 'Marsad0.0.', '', '', '', '', '', 0, 0, '2020-05-11 18:36:12'),
(14, 'Marsad', 'Akbar', '', '', '', '54', 'abc@abc.comm', 'Marsad.0.0', '', '', '', '', '', 0, 0, '2020-05-11 19:00:00'),
(15, 'Marsad', 'Akbar', '', '', '', '87', 'abc@abcd.com', 'Marsad.0.0', '', '', '', '', '', 0, 0, '2020-05-11 19:11:07'),
(16, 'Marsad', 'Akbar', '', '', '', '784512', 'abc@abc.cdom', 'Marsad.0.0', '', '', '', '', '', 1, 0, '2020-05-14 17:26:26'),
(17, 'ALi', 'Akbar ali', 'Pakistan', 'Punjab', 'ABc', '784512', 'abc@abc.comd', 'Marsad.0.0', '5ebae873bb9ce.jpg', 'ABc', '7845', '78-87', '78-784-78', 1, 0, '2020-05-14 20:19:28'),
(18, 'Rana Adil', 'hg', 'Pakistan', 'Pakistan', 'abc', '7880', 'a@gmail.com', 'Marsad.0.0', '5ebe384561f82.jpg', 'abc', '9876', '856abc', '89-8-7874', 1, 30, '2020-05-15 06:35:49'),
(19, 'Marsad', 'Akbar', NULL, NULL, NULL, '547', 'marsadakbar@gmail.com', 'Marsad.0.0', 'place.png', NULL, NULL, NULL, NULL, 1, 20, '2020-05-16 23:14:14'),
(20, 'marsad', 'akbar', NULL, NULL, NULL, '78', 'marsadakbar1@gmail.com', 'marsad.0.0', NULL, NULL, NULL, NULL, NULL, 0, 0, '2020-05-16 23:13:42'),
(21, 'marsad', 'akbar', NULL, NULL, NULL, '78', 'marsadakbar1@gmail.com', 'marsad.0.0', NULL, NULL, NULL, NULL, NULL, 0, 0, '2020-05-16 23:14:13'),
(22, 'marsad', 'akbar', NULL, NULL, NULL, '54', 'marsadakbar1@gmail.com', 'marsad.0.0', NULL, NULL, NULL, NULL, NULL, 0, 0, '2020-05-16 23:14:35'),
(23, 'marsad', 'akbar', NULL, NULL, NULL, '54', 'marsadakbar1@gmail.com', 'marsad.0.0', NULL, NULL, NULL, NULL, NULL, 0, 0, '2020-05-16 23:15:36'),
(24, 'Marsad', 'Akbar', NULL, NULL, NULL, '675', 'marsadakbar@gmail.com2', 'Marsad.0.0', 'place.png', NULL, NULL, NULL, NULL, 1, 0, '2020-05-18 23:30:59'),
(25, 'Marsad', 'Akbar', NULL, NULL, NULL, '56', 'marsadakbar1@gmail.com1', 'Marsad.0.0', 'place.png', NULL, NULL, NULL, NULL, 1, 0, '2020-05-18 23:41:06'),
(26, 'Marsad', 'Akbar', NULL, NULL, NULL, '9885', 'marsadakbar1@gmail.com3', 'Marsad.0.0', 'place.png', NULL, NULL, NULL, NULL, 1, 0, '2020-05-19 09:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_chat`
--

CREATE TABLE `user_chat` (
  `user_chat_id` int(11) NOT NULL,
  `user_chat_text` text NOT NULL,
  `user_chat_type` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_chat_bw` text NOT NULL,
  `user_chat_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_chat`
--

INSERT INTO `user_chat` (`user_chat_id`, `user_chat_text`, `user_chat_type`, `user_id`, `user_chat_bw`, `user_chat_time`) VALUES
(1, 'abc', '', 17, '', '2020-05-11 21:32:04'),
(2, 'abc', '', 17, '', '2020-05-11 21:32:08'),
(3, 'abc', '', 17, '', '2020-05-11 21:33:08'),
(4, 'abc', '', 17, '', '2020-05-11 21:33:25'),
(5, 'msg', '', 17, '', '2020-05-11 21:33:35'),
(6, 'msg', '', 17, '', '2020-05-11 21:34:32'),
(7, '', '', 17, '', '2020-05-11 21:34:55'),
(8, 'aa', '', 17, '', '2020-05-11 21:35:03'),
(9, 'abc', 'Admissure Support', 17, 'user', '2020-05-12 10:31:09'),
(10, 'abc', 'Admissure Support', 17, 'admin', '2020-05-12 10:31:13'),
(11, 'Hello', 'Admissure Support', 17, 'user', '2020-05-12 10:37:28'),
(12, 'Hi', 'Admissure Support', 17, 'user', '2020-05-12 11:07:40'),
(13, 'hi', 'Admissure Support', 17, 'user', '2020-05-12 11:12:15'),
(14, 'how are you?', 'Admissure Support', 17, 'user', '2020-05-12 11:14:58'),
(15, 'i am fine', 'Admissure Support', 17, 'user', '2020-05-12 11:23:29'),
(16, 'how are you?', 'Admissure Support', 17, 'user', '2020-05-12 11:23:53'),
(17, 'hi', 'Admissure Support', 17, 'user', '2020-05-12 11:49:49'),
(18, 'hi', 'Review Team', 17, 'user', '2020-05-12 11:56:28'),
(19, '', 'Review Team', 17, 'user', '2020-05-12 11:56:28'),
(20, '', 'Review Team', 17, 'user', '2020-05-12 11:56:29'),
(21, '', 'Review Team', 17, 'user', '2020-05-12 11:56:29'),
(22, '', 'Review Team', 17, 'user', '2020-05-12 11:56:29'),
(23, '', 'Review Team', 17, 'user', '2020-05-12 11:56:29'),
(24, '', 'Review Team', 17, 'user', '2020-05-12 11:56:29'),
(25, '', 'Review Team', 17, 'u', '2020-05-12 11:59:23'),
(26, '', 'Review Team', 17, 'user', '2020-05-12 11:56:30'),
(27, '', 'Review Team', 17, 'user', '2020-05-12 11:56:30'),
(28, '', 'Review Team', 17, 'user', '2020-05-12 11:56:30'),
(29, 'Admin Reply', 'Review Team', 17, 'admin', '2020-05-12 12:00:32'),
(30, 'Check', 'Review Team', 17, 'user', '2020-05-12 11:58:23'),
(31, 'Now', 'Admissure Support', 17, 'user', '2020-05-12 11:58:27'),
(32, 'Hi', 'Admissure Support', 17, 'user', '2020-05-12 13:22:36'),
(33, 'Hello', 'Admissure Support', 17, 'user', '2020-05-12 13:22:40'),
(34, 'hi', 'Admissure Support', 18, 'user', '2020-05-14 09:43:18'),
(35, 'how are you?', 'Admissure Support', 18, 'user', '2020-05-14 09:43:24'),
(36, 'New', 'Review Team', 18, 'user', '2020-05-14 10:01:01'),
(37, 'hi', 'Admissure Support', 0, 'user', '2020-05-14 17:47:42'),
(38, 'new', 'Admissure Support', 0, 'user', '2020-05-14 19:31:56'),
(39, 'chekc', 'Admissure Support', 0, 'user', '2020-05-14 19:39:30'),
(40, 'i am good', 'Admissure Support', 18, 'user', '2020-05-14 19:48:13'),
(41, 'new', 'Admissure Support', 0, 'user', '2020-05-14 19:50:42'),
(42, '', 'Admissure Support', 0, 'user', '2020-05-14 19:52:07'),
(43, 'ock', 'Admissure Support', 0, 'user', '2020-05-14 19:52:10'),
(44, '', 'Admissure Support', 0, 'user', '2020-05-14 19:52:26'),
(45, 'ok', 'Admissure Support', 18, 'user', '2020-05-14 19:56:36'),
(46, 'new', 'Admissure Support', 18, 'user', '2020-05-14 19:57:25'),
(47, 'check', 'Review Team', 0, 'user', '2020-05-14 20:00:17'),
(48, 'check', 'Review Team', 18, 'user', '2020-05-14 20:00:44'),
(49, 'ok', 'Review Team', 18, 'user', '2020-05-14 20:01:21'),
(50, '', 'Review Team', 18, 'user', '2020-05-14 20:09:49'),
(51, 'check', 'Admissure Support', 18, 'user', '2020-05-14 20:12:30'),
(52, 'l', 'Admissure Support', 18, 'admin', '2020-05-14 20:14:56'),
(53, 'new', 'Admissure Support', 18, 'admin', '2020-05-14 20:15:00'),
(54, 'old', 'Review Team', 18, 'admin', '2020-05-14 20:15:09'),
(55, 'let me know what you think?', 'Admissure Support', 18, 'admin', '2020-05-14 20:15:42'),
(56, 'hi', 'Admissure Support', 17, 'admin', '2020-05-14 20:19:39'),
(57, 'Hi', 'Admissure Support', 2, 'user', '2020-05-15 02:33:37'),
(58, 'hello', 'Admissure Support', 2, 'admin', '2020-05-15 02:34:04'),
(59, 'how are you?', 'Admissure Support', 2, 'user', '2020-05-15 02:34:14'),
(60, 'new', 'Review Team', 18, 'admin', '2020-05-19 12:22:48'),
(61, 'ok', 'Admissure Support', 18, 'admin', '2020-05-19 12:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `user_data_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_data_uni` text NOT NULL,
  `user_data_step1` text NOT NULL,
  `user_data_step2` text NOT NULL,
  `user_data_step3` text NOT NULL,
  `user_data_offer` text NOT NULL,
  `user_data_revision` int(11) NOT NULL,
  `user_data_sts` int(11) NOT NULL,
  `user_data_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`user_data_id`, `user_id`, `user_data_uni`, `user_data_step1`, `user_data_step2`, `user_data_step3`, `user_data_offer`, `user_data_revision`, `user_data_sts`, `user_data_time`) VALUES
(1, 2, '', '5ebd7d74cdcf3.', '5eb950427f20e.docx', '5eb95047a2d36.docx', '5ebd95428a1b8.docx', 0, 0, '2020-05-19 09:10:24'),
(3, 17, 'Northumbria', '5eb9a842c34d8.docx', '5eb9a8471a48c.docx', '5eb9a8533b335.pdf', '5ebd956f8ae00.docx', 1, 1, '2020-05-14 19:01:03'),
(4, 18, '4', '5ebd743ce4d52.docx', '5ebd76c4d28b0.docx', '5ebd76bd2c061.pdf', '5ebd9595245b8.docx', 1, 1, '2020-05-15 07:05:29'),
(5, 19, '', '5ec083b7ec15c.docx', '5ec083bdbfc3a.docx', '5ec083c2e6c44.docx', '', 1, 0, '2020-05-17 00:22:26'),
(6, 24, '', '', '', '', '', 0, 0, '2020-05-18 23:31:00'),
(7, 25, '4', '5ec3252e22a6a.docx', '5ec3a0d39c0e2.docx', '5ec3a0d7bd265.docx', '', 3, 1, '2020-05-19 09:44:17'),
(8, 26, '', '5ec3ac21e684c.docx', '5ec3ac26ae2ff.docx', '5ec3ac303658e.docx', '5ec3b7666dcbb.docx', 3, 1, '2020-05-19 10:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_steps`
--

CREATE TABLE `user_steps` (
  `user_steps_id` int(11) NOT NULL,
  `user_login` int(11) NOT NULL,
  `user_first_step` int(11) NOT NULL,
  `user_second_step` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_steps`
--

INSERT INTO `user_steps` (`user_steps_id`, `user_login`, `user_first_step`, `user_second_step`, `user_id`) VALUES
(1, 1, 0, 0, 2),
(2, 1, 0, 0, 12),
(3, 1, 0, 0, 13),
(4, 1, 0, 0, 14),
(5, 1, 0, 0, 15),
(6, 1, 0, 0, 16),
(7, 1, 0, 0, 17),
(8, 1, 0, 0, 18),
(9, 1, 0, 0, 19),
(10, 1, 0, 0, 24),
(11, 1, 0, 0, 25),
(12, 1, 0, 0, 26);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `withdraw_id` int(11) NOT NULL,
  `withdraw_amount` double NOT NULL,
  `withdraw_sts` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `withdraw_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`withdraw_id`, `withdraw_amount`, `withdraw_sts`, `user_id`, `withdraw_time`) VALUES
(1, 0, 2, 18, '2020-05-14 21:18:23'),
(2, 0, 2, 18, '2020-05-14 21:18:56'),
(3, 0, 1, 18, '2020-05-14 21:18:41'),
(4, 0, 0, 18, '2020-05-13 21:36:44'),
(5, 0, 1, 18, '2020-05-14 21:20:38'),
(6, 0, 2, 18, '2020-05-14 21:18:34'),
(7, 0, 0, 18, '2020-05-13 21:36:44'),
(8, 0, 1, 18, '2020-05-14 21:17:20'),
(9, 0, 0, 18, '2020-05-13 21:36:44'),
(10, 0, 0, 18, '2020-05-13 21:36:44'),
(11, 0, 0, 18, '2020-05-13 21:36:44'),
(12, 20, 0, 18, '2020-05-13 21:37:30'),
(13, 120, 2, 18, '2020-05-14 21:21:50'),
(14, 10, 0, 18, '2020-05-13 21:38:24'),
(15, 20, 0, 18, '2020-05-13 21:42:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `testimonals`
--
ALTER TABLE `testimonals`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`uni_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_chat`
--
ALTER TABLE `user_chat`
  ADD PRIMARY KEY (`user_chat_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`user_data_id`);

--
-- Indexes for table `user_steps`
--
ALTER TABLE `user_steps`
  ADD PRIMARY KEY (`user_steps_id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`withdraw_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `testimonals`
--
ALTER TABLE `testimonals`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `uni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_chat`
--
ALTER TABLE `user_chat`
  MODIFY `user_chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `user_data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_steps`
--
ALTER TABLE `user_steps`
  MODIFY `user_steps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `withdraw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
