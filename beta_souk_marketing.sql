-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 10:51 PM
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
  MODIFY `user_id_marketer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `non_ref_users`
--
ALTER TABLE `non_ref_users`
  MODIFY `non_ref_users_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
