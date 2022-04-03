-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2022 at 12:27 PM
-- Server version: 5.7.37-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `betasouk_beta_souk_marketing`
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
(1, 'member', 1, 'Ahmed', 'Olusesi', 'olasesi', 'olusesia@gmail.com', '$2y$10$D/CihUZIt4W9fdXR4JQBueH2nJTl6KFEmT8B4Es7gBmhpSGECIOTm', '0', '0', '0', 'ef2ec5c28161fc34fb067f58b2c7e57d', '2723d092b63885e0d7c260cc007e8b9d', '2022-02-27 14:25:29'),
(2, 'member', 0, 'Tomi', 'Ojuks', 'Tomi_', 'to@gmail.com', '$2y$10$/etRzWjiwPX9dwMQc/ceZ.QmMgp8iVBQk9ks3K/Mq9zLOWl4m/Gv6', '0', '0', '0', '', 'c3e878e27f52e2a57ace4d9a76fd9acf', '2022-02-27 07:04:53'),
(3, 'member', 1, 'Durodola', 'Abdulhad', 'Frtvcvb', 'dmediaplux@gmail.com', '$2y$10$jNwKeeVViP/sdmw3qoaaaeiL7J7rZ60LfH6MLIKOus51nZhK0Q5hm', '0', '0', '0', 'a250faeb0abf11794e59caeb8fd9d2ee', 'bf8229696f7a3bb4700cfddef19fa23f', '2022-02-27 07:10:17'),
(4, 'member', 1, 'Faizol', 'Shobola', 'Kayfz', 'shobolafaizol@gmail.com', '$2y$10$RVTdpJQnHbuTa1JYf/AKB.OwYU6hmBSINNH6Zkju4vviQmvgPCeES', '0', '0', '0', '', 'd947bf06a885db0d477d707121934ff8', '2022-03-08 12:09:41'),
(5, 'member', 1, 'Faruq', 'SHOBOLA', 'Tee', 'faruqdaily1@gmail.com', '$2y$10$RtwTUvzpkWz0jT/COQMGoOssOlM5qkvNtL4jJShlSg2OPPST8mG7S', '0', '0', '0', 'f776794cad88ea64ec0f4419f93d4a13', 'fc49306d97602c8ed1be1dfbf0835ead', '2022-02-27 08:20:03'),
(6, 'member', 1, 'Mojeed', 'Fetuga', 'mojeedfetuga', 'mojeedfetuga62@gmail.com', '$2y$10$Z8SYW4FvmHLqB1tPvqWo/OTDmoGFAUhumgSu9Xz0A4hAK4hEuGN2G', '0', '0', '0', '', 'df7f28ac89ca37bf1abd2f6c184fe1cf', '2022-03-04 12:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `non_ref_users`
--

CREATE TABLE `non_ref_users` (
  `non_ref_users_id` int(11) NOT NULL,
  `non_ref_users_active` int(1) NOT NULL DEFAULT '1',
  `non_ref_users_firstname` varchar(20) NOT NULL,
  `non_ref_users_surname` varchar(20) NOT NULL,
  `non_ref_users_username` varchar(20) NOT NULL,
  `non_ref_users_email` varchar(255) NOT NULL,
  `non_ref_users_password` varchar(255) NOT NULL,
  `non_ref_users_address` varchar(255) NOT NULL,
  `non_ref_users_package` varchar(20) NOT NULL,
  `non_ref_users_price` varchar(10) NOT NULL,
  `non_ref_users_order` int(1) NOT NULL DEFAULT '0',
  `non_ref_users_reference` varchar(10) NOT NULL DEFAULT '0',
  `non_ref_users_cookie` varchar(255) NOT NULL,
  `non_ref_users_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `non_ref_users`
--

INSERT INTO `non_ref_users` (`non_ref_users_id`, `non_ref_users_active`, `non_ref_users_firstname`, `non_ref_users_surname`, `non_ref_users_username`, `non_ref_users_email`, `non_ref_users_password`, `non_ref_users_address`, `non_ref_users_package`, `non_ref_users_price`, `non_ref_users_order`, `non_ref_users_reference`, `non_ref_users_cookie`, `non_ref_users_timestamp`) VALUES
(1, 1, 'Ahmed', 'Olusesi', 'sesi', 'ola.sesi@yahoo.com', '$2y$10$qcvg36trISS3spdmg4ND.uqLYcv/KRR6jFhC5mCf.yWAjKxfBqJXe', 'ikeja', 'Essential', '150000', 1, 'SL3F263HIO', '', '2022-02-27 01:34:02'),
(2, 1, 'Duro', 'Dola', 'Good', 'Dut@yag.com', '$2y$10$rNuDvjEsql7MpS9OyI48aOfSOoqDA.Wkte0T3kiScVilzsfp3pv6q', 'Ogba', 'Premium', '300000', 1, 'G6MHTZ057S', '', '2022-02-27 07:29:31'),
(3, 1, 'Faizol', 'SHOBOLA', 'Kayfz', 'shobolafaizol@gmail.com', '$2y$10$v6jFr.HY0kO9PnjS0ndErOZMbGSatAaGgg084PZH8ag6U7T6HQ.By', 'Lagos', 'Basic', '60000', 1, '3WAB29XAQY', '', '2022-03-08 14:26:17'),
(4, 1, 'Faruq', 'Taiwo', 'Taye', 'Shobolafaruq@gmail.com', '$2y$10$ehKIpw5LThIzk0D4SFg26eyrPrwC0DxJZH./8zrX/.H5TpKZKuo36', 'Belarus', 'Basic', '60000', 1, 'LJAUD5SXRB', '', '2022-02-27 08:31:53'),
(5, 1, 'Ken', 'Luna', 'kenuna', 'kenuna01@gmail.com', '$2y$10$gSULljew6SxW7jIHRgIIn.EW/hn0i2yx/SI0wAEdaeHrD.yLnTR62', 'lagos', 'Basic', '60000', 1, 'LCBVLZQ18I', '', '2022-03-08 15:30:39'),
(6, 1, 'Pelumi', 'Bolawa', 'ParrotVisulaStory', 'parrotvisualstory@gmail.com', '$2y$10$Aiq8AGQviuHtOU3rYd44u.HI4EVxqi17pJrsx8yEASaTy13hwyZMi', 'Lagos', 'Basic', '60000', 0, 'DWGJOVXOQR', '', '2022-03-09 11:32:16'),
(7, 1, 'Pelumi', 'Bolawa', 'ParrotVisualStor', 'parrotvisualstory@gmail.com', '$2y$10$HkOTwqfEoMAMFhVyRQTKOua5GpHtG7d8OvmG2pZJMuLEdSYp2n8rG', 'Lagos', 'Basic', '60000', 0, 'TAOOWAFUBC', '', '2022-03-09 11:39:05'),
(8, 1, 'Pelumi', 'Bolawa', 'Parrotcry', 'parrotvisualstory@gmail.com', '$2y$10$A97EKzq0YNxt74k8N2o6geyTBe2t4/USitU0QUnzhCSClHgk6KN9.', 'Lagos', 'Basic', '60000', 0, '43UPMYZR5J', '', '2022-03-09 11:40:35'),
(9, 1, 'wale', 'alabi', 'alibishow', 'nisajav116@ketchet.com', '$2y$10$LBgIe1womNJXFK6Z0OG5t.Wl0ORtmXdsl.LQ.a/3NsJnbpwB2ANN.', 'kano', 'Basic', '60000', 1, 'C2GHYDQV53', '', '2022-03-09 11:59:37');

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `u_active`, `user_id_marketer`, `u_firstname`, `u_surname`, `u_email`, `u_username`, `u_address`, `u_package`, `u_price`, `u_order`, `u_reference`, `u_password`, `u_commission`, `u_cookie`, `u_timestamp`) VALUES
(1, 1, 'olasesi', 'Anita', 'Olusesi', 'olusesianita@gmail.com', 'anita', 'Ikorodu', 'Basic', '60000', 0, '7ZP7DVVOJ0', '$2y$10$5rOQ9gImxa63EfnUk0dUgut9ULA1K4SKwgGyykZ0FYQSOa6XiyoNm', '8.3333', '', '2022-02-27 01:37:47'),
(2, 1, 'Frtvcvb', 'Ras', 'Gda', 'Dsagsgg@yyy.com', 'Gghhhjj', 'Ogba', 'Premium', '300000', 0, '93J0ZHI72Q', '$2y$10$1Zxivp1XAP7kRne/R73diui.oqWhsWIk.0M6Zn1gOcQWqKEn9uIV2', '8.3333', '', '2022-02-27 07:14:52'),
(3, 1, 'Frtvcvb', 'Ras', 'Gda', 'Dsagsgg@yyy.com', 'Gghhhjj', 'Ogba', 'Premium', '300000', 0, 'ERGP4ST6TP', '$2y$10$MhRN49sJusHS2LFFxnTWBODStVs7NxFbiqMNWGmAZr9pPyuFWAw.m', '8.3333', '', '2022-02-27 07:15:24'),
(4, 1, 'Frtvcvb', 'Ras', 'Gda', 'Dsagsgg@yyy.com', 'Gghhhjj', 'Ogba', 'Premium', '300000', 0, 'LZ3SJJERLB', '$2y$10$vvUUamn.rRZXGWGJ281/VeNCUR6pC2OEHbfgZ2XQm1YdB1Kzdn.fK', '8.3333', '', '2022-02-27 07:15:38'),
(5, 1, 'Frtvcvb', 'Ras', 'Gda', 'Dsagsgg@yyy.com', 'Gghhhjj', 'Ogba', 'Premium', '300000', 0, 'HEGBB07HRR', '$2y$10$7okqG09T1EYhOjNbx78keuDvbSZVqVj6AkwO594L7q8Fc5At/fcQe', '8.3333', '', '2022-02-27 07:15:53'),
(6, 1, 'Kayfz', 'Baba', 'Tee', 'Shobolafaruq@gmail.com', 'Show', 'Ghana', 'Basic', '60000', 0, 'UQEL0D2JDL', '$2y$10$AT8.3hRGda3hsXc9l2ch7eYQQArw5SUVW3MljgQ5o4MU./qV5bPXK', '8.3333', '', '2022-02-27 08:07:01'),
(7, 1, 'Tee', 'Luna', 'Ken', 'kenuna01@gmail.com', 'Kenuna', 'Lagos', 'Basic', '60000', 0, 'KRID95U16D', '$2y$10$54v1ptd7Ve.YWoNYtTLJe..n8/gmiYx2h7lZR8A38dADMdFgvEVPa', '8.3333', '', '2022-02-27 08:08:23'),
(8, 1, 'Tee', 'Luna', 'Ken', 'kenuna01@gmail.com', 'Kenuna', 'Lagos', 'Basic', '60000', 0, 'BHV87HQARI', '$2y$10$gblc24r6fYd4htjB4i/H..Xki5fQ320/9agKDDBwmUlFMr5q1.Mri', '8.3333', '', '2022-02-27 08:08:32'),
(9, 1, 'Kayfz', 'Taiwo', 'Show', 'Shobolafaruq@gmail.com', 'Dee', 'Niger', 'Premium', '300000', 0, '9XOYZEZHLF', '$2y$10$IfTfJvDDk1HAOjLp8Jim9Oz5zjf6FtM70UAnKGRzrspe6U03RBeOi', '8.3333', '', '2022-02-27 08:25:40'),
(10, 1, 'Kayfz', 'Taiwo', 'Show', 'Shobolafaruq@gmail.com', 'Dee', 'Niger', 'Premium', '300000', 0, 'DH4PI1MZE4', '$2y$10$Lqm72KpvVJRj1SGEhLwGDerXzXDr04naDiNST3XeO82amegnoKEou', '8.3333', '', '2022-02-27 08:26:24'),
(11, 1, 'Tee', 'Ken', 'Luna', 'kenuna01@gmail.com', 'Kenuna', 'Lagos', 'Essential', '150000', 0, '7UODPAWLOH', '$2y$10$hfOIu6oUsxjTLfBcDWnuXO/c0.M91CKF8/I8.XgjOYczHJHqX248W', '8.3333', '', '2022-02-27 08:34:19'),
(12, 1, 'olasesi', 'Guy', 'Male', 'Faruqdaily1@gmail.com', 'Him', 'Liberia', 'Essential', '150000', 0, 'O2IZXWQAXA', '$2y$10$TSO6l1HmOd1BYRYv4ht9UuIJCrIzY2i3OZtDE2iimZs4tay0MB0bm', '8.3333', '', '2022-02-27 08:40:23'),
(13, 1, 'olasesi', 'Abimbola', 'Soladoye', 'abims.adeniji@gmail.com', 'abims', 'lagos', 'Essential', '150000', 0, 'XJM505A0JG', '$2y$10$KjEdmLBfZfW2GbINh1iIaOd/cICtG92d5T92z/OpzePV/qabNHL5.', '8.3333', '', '2022-02-27 12:09:19'),
(14, 1, 'olasesi', 'Anita', 'olusesi', 'olusesianita@gmail.com', 'anita', 'Ikorodu', 'Premium', '300000', 0, 'U3BQSFGY4L', '$2y$10$UX2vbhqUt/TnSq4XI3j3IO78Qi/JgmMaZvKOzOAZ7L8Nw9Izl/pmy', '8.3333', '', '2022-02-27 13:31:48'),
(15, 1, 'olasesi', 'eniola', 'olusesi', 'olusesieniola@gmail.com', 'eniola', 'ikorodu', 'Premium', '300000', 1, 'UYD1PK6R9D', '$2y$10$GWXI5glyCkIvsOpCKKWqHuwk7AF1vr4iX50KbaF8kJK5DMDu1Ufc6', '8.3333', '', '2022-02-27 14:24:31'),
(16, 1, 'Tee', 'Ken', 'Luna', 'kenuna01@gmail.com', 'Kenuna', 'Lagos', 'Essential', '150000', 0, '3W4PQGFOZL', '$2y$10$LIEQRxuIGC9mfawjR7jaguMxvc2CO5NY56L7lwWwgJ2MoeS0FzwVC', '8.3333', '', '2022-02-27 18:08:24'),
(17, 1, 'Tee', 'Ken', 'Luna', 'kenuna01@gmail.com', 'Kenuna', 'Lagos', 'Essential', '150000', 0, 'TD316PXMEW', '$2y$10$ey0MHnPpgvc1yvEd80t/zuJpoawwKO0C7AEAUSdxMS.WRq132BzvK', '8.3333', '', '2022-02-27 18:09:22'),
(18, 1, 'Tee', 'Luna', 'Ken', 'kenuna01@gmail.com', 'Kenuna', 'Abuja', 'Essential', '150000', 0, '9UIIP4MZXC', '$2y$10$C.0CkEc0JNahYTLmrhOl0.6sc1ylEVS71QnW0nHJsposgvclQji86', '8.3333', '', '2022-02-27 18:10:50');

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
  MODIFY `user_id_marketer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `non_ref_users`
--
ALTER TABLE `non_ref_users`
  MODIFY `non_ref_users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
