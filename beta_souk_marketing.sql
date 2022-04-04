-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 06:35 PM
-- Server version: 10.4.19-MariaDB
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
  `admin_active` int(1) NOT NULL DEFAULT 1,
  `admin_firstname` varchar(20) NOT NULL,
  `admin_lastname` varchar(20) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marketer`
--

CREATE TABLE `marketer` (
  `user_id_marketer` int(11) NOT NULL,
  `m_type` varchar(10) NOT NULL DEFAULT 'member',
  `m_confirm_email` int(1) NOT NULL DEFAULT 0,
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
  `m_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `non_ref_users_active` int(1) NOT NULL DEFAULT 1,
  `non_ref_users_firstname` varchar(20) NOT NULL,
  `non_ref_users_surname` varchar(20) NOT NULL,
  `non_ref_users_username` varchar(20) NOT NULL,
  `non_ref_users_email` varchar(255) NOT NULL,
  `non_ref_users_password` varchar(255) NOT NULL,
  `non_ref_users_address` varchar(255) NOT NULL,
  `non_ref_users_package` varchar(20) NOT NULL,
  `non_ref_users_price` varchar(10) NOT NULL,
  `non_ref_users_order` int(1) NOT NULL DEFAULT 0,
  `non_ref_users_reference` varchar(10) NOT NULL DEFAULT '0',
  `non_ref_users_cookie` varchar(255) NOT NULL,
  `non_ref_users_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `non_ref_users`
--

INSERT INTO `non_ref_users` (`non_ref_users_id`, `non_ref_users_active`, `non_ref_users_firstname`, `non_ref_users_surname`, `non_ref_users_username`, `non_ref_users_email`, `non_ref_users_password`, `non_ref_users_address`, `non_ref_users_package`, `non_ref_users_price`, `non_ref_users_order`, `non_ref_users_reference`, `non_ref_users_cookie`, `non_ref_users_timestamp`) VALUES
(1, 1, 'Ahmed', 'Olusesi', 'olasesi', 'ola.sesi@yahoo.com', '$2y$10$OagjH08p6ITf6YoSmzop1eE9YXjgHlK.NYB3I.ZMH5F2S/oeawgCS', 'Ikeja', 'Premium', '300000', 0, 'HQWUY0BDE3', '', '2022-03-16 11:36:02'),
(2, 1, 'Ahmed', 'Olusesi', 'sesi', 'ola.sesi@yahoo.com', '$2y$10$WHwAdUyHi/cO1EcYlzwVdeA/CdK6RFMcqnIlCruGatqV81UyrfAja', 'Ikeja', 'Basic', '60000', 0, 'PTXHM5X1IL', '', '2022-03-15 07:01:15'),
(3, 1, 'Ahmed', 'Olusesi', 'anita', 'test@gmail.com', '$2y$10$LlOc0Qd7OXgj2.nfUx0.JeoMiIfYVBXDFix6ViWW0x6JtdX2FB1YW', 'ikeja', 'Premium', '300000', 0, 'ZPWQGHABGO', '', '2022-03-15 07:08:58'),
(4, 1, 'Ahmed', 'Olusesi', 'eniola', 'ola.sesi@yahoo.com', '$2y$10$seq/8/obCdofpe/hMf/dN.TiLI3QZxLNnCJxkCy29y.AvoI1H7hra', 'ikeja', 'Essential', '150000', 1, 'JGEOD25V2J', '', '2022-03-15 16:01:41'),
(5, 1, 'Ahmed', 'Olusesi', 'olasesi_', 'ola.sesi@yahoo.com', '$2y$10$16qZxSVg6GXB8uiNAditEeX9wUSFicJengOQUIttMd0wiIUE4xvCW', 'Ikeja', 'Premium', '300000', 1, 'MDYOV95EXV', '', '2022-03-19 05:44:17'),
(6, 1, 'Ahmed', 'Olusesi', 'aaliyah', 'anita@gmail.com', '$2y$10$SjxatFfNvgCmsGtL18ftFu1aAaxCo5vSWN15bE7KsPbz6YhzpmbZq', 'Ikeja', 'Essential', '150000', 1, 'O1XE6J54CU', '', '2022-03-16 09:11:33'),
(7, 1, 'eniola', 'olusesi', 'tester', 'olusesieniola@gmail.com', '$2y$10$MMG2JLCu82c8kMKVbryLBOVa.QI8mmZIZVOck3yNPFHKiFe5lF56u', 'ikorodu', 'Essential', '150000', 0, 'OMWXIBMHPS', '', '2022-04-04 16:03:44'),
(8, 1, 'eniola', 'olusesi', 'testing', 'olusesieniola@gmail.com', '$2y$10$Qz4hp1RZvHVhXdyYyLbhWeI9QHiAf7ANwVeiyW3WkIwNKxDP4iJ.e', 'ikorodu', 'Essential', '150000', 0, '2WM7SCI0BO', '', '2022-04-04 16:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `u_active` int(1) NOT NULL DEFAULT 1,
  `user_id_marketer` varchar(20) NOT NULL,
  `u_firstname` varchar(20) NOT NULL,
  `u_surname` varchar(20) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_username` varchar(20) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_package` varchar(20) NOT NULL,
  `u_price` varchar(10) NOT NULL,
  `u_order` int(1) NOT NULL DEFAULT 0,
  `u_reference` varchar(10) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_commission` varchar(6) NOT NULL DEFAULT '8.3333',
  `u_cookie` varchar(255) NOT NULL,
  `u_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `website_info`
--

CREATE TABLE `website_info` (
  `website_info_id` int(11) NOT NULL,
  `website_info_owner_id` int(11) NOT NULL,
  `website_info_id_status` int(11) NOT NULL DEFAULT 0,
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
  `website_info_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  MODIFY `non_ref_users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
