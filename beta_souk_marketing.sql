-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2022 at 02:21 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beta_souk_marketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_active` int(1) NOT NULL DEFAULT '1',
  `admin_firstname` varchar(20) NOT NULL,
  `admin_lastname` varchar(20) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marketer`
--

CREATE TABLE `marketer` (
  `user_id_marketer` int(11) NOT NULL,
  `m_type` varchar(10) NOT NULL DEFAULT 'member',
  `m_confirm_email` int(1) NOT NULL DEFAULT '0',
  `m_firstname` varchar(20) NOT NULL,
  `m_surname` varchar(20) NOT NULL,
  `m_username` varchar(30) NOT NULL,
  `m_email` varchar(255) NOT NULL,
  `m_password` varchar(255) NOT NULL,
  `m_bank_name` varchar(30) NOT NULL DEFAULT '0',
  `m_acc_number` varchar(15) DEFAULT '0',
  `m_acc_name` varchar(100) NOT NULL DEFAULT '0',
  `m_cookie_session` varchar(255) NOT NULL,
  `m_remember_pass` varchar(255) NOT NULL,
  `m_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketer`
--

INSERT INTO `marketer` (`user_id_marketer`, `m_type`, `m_confirm_email`, `m_firstname`, `m_surname`, `m_username`, `m_email`, `m_password`, `m_bank_name`, `m_acc_number`, `m_acc_name`, `m_cookie_session`, `m_remember_pass`, `m_timestamp`) VALUES
(1, 'member', 1, 'Ahmed', 'Olusesi', 'olasesi', 'ola.sesi@yahoo.com', '$2y$10$P.fMIdtIT3hXuOK/UaPhf.gzYYuih2UcDVB4.KpAlv2dXJLxL.JLC', '0', '0', '0', '', 'c06d06da9666a219db15cf575aff2824', '2022-02-28 11:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `non_ref_users`
--

CREATE TABLE `non_ref_users` (
  `non_ref_users_id` int(11) NOT NULL,
  `non_ref_users_active` int(1) NOT NULL DEFAULT '1',
  `non_ref_users_fullname` varchar(60) NOT NULL,
  `non_ref_users_email` varchar(255) NOT NULL,
  `non_ref_users_password` varchar(255) NOT NULL,
  `non_ref_users_phone` varchar(11) NOT NULL DEFAULT '0',
  `non_ref_users_address` varchar(255) NOT NULL DEFAULT '0',
  `non_ref_users_package` varchar(20) NOT NULL DEFAULT '0',
  `non_ref_users_price` varchar(10) NOT NULL DEFAULT '0',
  `non_ref_users_order` int(1) NOT NULL DEFAULT '0',
  `non_ref_users_reference` varchar(10) NOT NULL DEFAULT '0',
  `non_ref_users_cookie` varchar(255) NOT NULL DEFAULT '0',
  `non_ref_users_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `non_ref_users`
--

INSERT INTO `non_ref_users` (`non_ref_users_id`, `non_ref_users_active`, `non_ref_users_fullname`, `non_ref_users_email`, `non_ref_users_password`, `non_ref_users_phone`, `non_ref_users_address`, `non_ref_users_package`, `non_ref_users_price`, `non_ref_users_order`, `non_ref_users_reference`, `non_ref_users_cookie`, `non_ref_users_timestamp`) VALUES
(34, 1, 'Shobola Faruq', 're@me.com', '$2y$10$6J9pZ2QjG0CMdSC2nqJLe.7hqFwgrYdgDXAGEW7LzgJ3rPm/Cd8d2', '09090000000', '0', '0', '0', 0, 'X1QIXE5FMU', '', '2022-04-14 16:44:57'),
(38, 1, 'Shobola Faruq Taiwo', 'gt@gn.com', '$2y$10$.6iGfpHetyM6pmiQZIv1GeZsjIn8dtpdB/15DlwD0VeF6G6kF9DK6', '09090000000', '0', '0', '0', 0, '44LOPHBMXK', '', '2022-04-15 10:20:19'),
(39, 1, 'Shobola Faizol Kehinde', 'me@yoot.com', '$2y$10$pSVrgNUs/SUM3f9Th/K/2uZdG7yEYEEsXr21DSM.Mei7pGKSwThWi', '08074574512', '0', '0', '0', 0, 'XQV8IRC5VR', 'be99eb4356445019df0f5d92a15b0f02', '2022-04-15 10:20:44'),
(40, 1, 'Shobola Faruq', 'hey@gmail.com', '$2y$10$4orxvvoH8r1DNAKL3oc9aOPtbpcdP59T7MZNzDUOg/xR8yDLLl4IO', '08074574512', '0', '0', '0', 0, '9EKPSH24JT', '89295c12ab1d1cc6fc32bd2e9f4c0e17', '2022-04-15 10:31:46'),
(41, 1, 'Shobola Faruq', 'me@name.com', '$2y$10$vhzqZaSBziUD9JqDuy/mMeR9Tr41pdlTscapqrAVU7irsFFcgaKr6', '09090000000', '0', '0', '0', 0, 'VZIZWK57WZ', 'f2c8f8a799e0e3945b0b3abe47c6d984', '2022-04-15 10:33:03'),
(42, 1, 'Shobola Faizol Kehinde', 'me@yoou.hey', '$2y$10$tSuF6Dvzw/VoViuUEk6CsOTc4ERc6AxmjtAPBEuoX.s8Hr.RgV3k2', '09876578655', '0', '0', '0', 0, '1SZ5FAHAWM', 'f12f9cd12178680cbfdedf6ad6f17f1a', '2022-04-15 10:50:04'),
(43, 1, 'Shobola Faruq', 'me@name.cot', '$2y$10$Z5vKO1DJrGyuJvLlj66YM.ZQjqOYW6dlrPcPMSXjtLXY3Olw8GOKG', '09876578655', '0', '0', '0', 0, 'YV1D4Y65FW', 'efea58efacf3f270f4b53bf1c3b031fd', '2022-04-15 11:05:40'),
(44, 1, 'Shobola Faizol', 'ade@email.com', '$2y$10$iUE5ZvroNMVUE3yJhb8zbekL8vjsYo3.IixO2enAPVwyNY7mVRyLm', '08080034000', '0', '0', '0', 0, '696X7MFIOK', 'fada45190be5b2dbc6c6b4199654b9f5', '2022-04-15 11:13:15'),
(45, 1, 'Shobola Faizol', 'faizol@email.com', '$2y$10$VjzaT/gFjzY5QHSsWvUiWeemXMFBsnDzD9ES5rz3TPiCa/kP8oSWO', '08080034000', '0', '0', '0', 0, 'PF6DKXF7Q7', '', '2022-04-15 11:36:34'),
(46, 1, 'Shobola Faizol', 'faizol@gmail.com', '$2y$10$91Ad1VVFNAP8ySR/WPtM5OvEKfxzq8OAPFHVwjSZBgbm6UmWh3UoO', '08080034000', '0', '0', '0', 0, '1UZTZ2B0ZA', 'e36bdbf1a41c828aba21276fd9a3031f', '2022-04-15 11:36:58'),
(47, 1, 'Shobola Faizol', 'ade@ymail.com', '$2y$10$GMG45tQ275TLQuB9nOQkuuLnlDwLZ36PUeTEn2uk4xgnAa4TMpMii', '08080034000', '0', '0', '0', 0, 'JAJ56GBM7A', 'b16c69ce99d09edaafe6f5c7b0ae2dab', '2022-04-15 12:02:36'),
(48, 1, 'Shobola Faizol', 'faizol@mail.com', '$2y$10$esgzTFFIi8700ToRpmR4DOMPAJelgSI9SHSx4fxvofWU.7R6XF8ie', '08080034000', '0', '0', '0', 0, 'UR42T1K1X5', '4ae3873be479a0febe4b516bdadcda00', '2022-04-15 12:03:05'),
(49, 1, 'Shobola Faizol', 'ade@mail.com', '$2y$10$RyqhjvYFLLX8GI2pOHQGjuUWfGLEUq5aOGpKWvt/glyiSyMT0pdhK', '08080034000', '0', '0', '0', 0, 'LRW226VAXE', 'e58f23bdfc06291c13fca470913beba7', '2022-04-15 12:07:15'),
(50, 1, 'Shobola Faizol', 'ade@hmail.com', '$2y$10$axVFvlQ/cwsjgU/ToLLJVOmAUPKSBLwlYDmhLEJ0Z8N4.YAY0a9mi', '08080034000', '0', '0', '0', 0, '0QBFMP8WH8', '247c4bfb6c1becee03ffd0844d1240bc', '2022-04-15 12:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `u_active` int(1) NOT NULL DEFAULT '1',
  `user_id_marketer` varchar(20) NOT NULL,
  `u_firstname` varchar(20) NOT NULL,
  `u_surname` varchar(20) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_username` varchar(20) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_package` varchar(20) NOT NULL,
  `u_price` varchar(10) NOT NULL,
  `u_order` int(1) NOT NULL DEFAULT '0',
  `u_reference` varchar(10) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_commission` varchar(6) NOT NULL DEFAULT '8.3333',
  `u_cookie` varchar(255) NOT NULL,
  `u_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `website_info`
--

CREATE TABLE `website_info` (
  `website_info_id` int(11) NOT NULL,
  `website_info_owner_id` int(11) NOT NULL,
  `website_info_id_status` int(11) NOT NULL DEFAULT '0',
  `website_info_web_name` varchar(255) NOT NULL,
  `website_info_about` text NOT NULL,
  `website_info_phone1` varchar(15) NOT NULL,
  `website_info_phone2` varchar(15) NOT NULL,
  `website_info_email1` varchar(255) NOT NULL,
  `website_info_email2` varchar(255) NOT NULL,
  `website_info_fb` varchar(255) NOT NULL,
  `website_info_twitter` varchar(255) NOT NULL,
  `website_info_instagram` varchar(255) NOT NULL,
  `website_info_whatsapp` varchar(255) NOT NULL,
  `website_info_address1` varchar(255) NOT NULL,
  `website_info_address2` varchar(255) NOT NULL,
  `website_info_colour1` varchar(15) NOT NULL,
  `website_info_colour2` varchar(15) NOT NULL,
  `website_info_colour3` varchar(15) NOT NULL,
  `website_info_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `marketer`
--
ALTER TABLE `marketer`
  ADD PRIMARY KEY (`user_id_marketer`);

--
-- Indexes for table `non_ref_users`
--
ALTER TABLE `non_ref_users`
  ADD PRIMARY KEY (`non_ref_users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `website_info`
--
ALTER TABLE `website_info`
  ADD PRIMARY KEY (`website_info_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marketer`
--
ALTER TABLE `marketer`
  MODIFY `user_id_marketer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `non_ref_users`
--
ALTER TABLE `non_ref_users`
  MODIFY `non_ref_users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website_info`
--
ALTER TABLE `website_info`
  MODIFY `website_info_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
