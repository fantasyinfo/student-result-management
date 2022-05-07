-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2022 at 05:24 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fifteenresults`
--

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `stu_img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `examination_class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `stu_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `stu_fname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `stu_roll_num` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `stu_en_roll_num` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `college_center_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p1` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p1_marks` int(255) NOT NULL,
  `p2` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p2_marks` int(255) NOT NULL,
  `p3` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p3_marks` int(255) NOT NULL,
  `p4` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p4_marks` int(255) NOT NULL,
  `p5` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p5_marks` int(255) NOT NULL,
  `p6` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p6_marks` int(255) NOT NULL,
  `p7` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p7_marks` int(255) NOT NULL,
  `p8` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p8_marks` int(255) NOT NULL,
  `p9` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p9_marks` int(255) NOT NULL,
  `p10` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p10_marks` int(255) NOT NULL,
  `p11` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p11_marks` int(255) NOT NULL,
  `p12` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p12_marks` int(255) NOT NULL,
  `p13` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p13_marks` int(255) NOT NULL,
  `p14` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p14_marks` int(255) NOT NULL,
  `p15` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p15_marks` int(255) NOT NULL,
  `t_marks` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `prev_marks` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `g_t_marks` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `result_pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `result_divison` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `submit_stu_result` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `stu_img`, `examination_class`, `stu_name`, `stu_fname`, `stu_roll_num`, `stu_en_roll_num`, `college_center_name`, `p1`, `p1_marks`, `p2`, `p2_marks`, `p3`, `p3_marks`, `p4`, `p4_marks`, `p5`, `p5_marks`, `p6`, `p6_marks`, `p7`, `p7_marks`, `p8`, `p8_marks`, `p9`, `p9_marks`, `p10`, `p10_marks`, `p11`, `p11_marks`, `p12`, `p12_marks`, `p13`, `p13_marks`, `p14`, `p14_marks`, `p15`, `p15_marks`, `t_marks`, `prev_marks`, `g_t_marks`, `result_pass`, `result_divison`, `submit_stu_result`, `status`, `created_on`) VALUES
(4, '9686627531200px-crystal_clear_kdm_user_female.png', '12th Commerce 2020', 'Parul Tomer', 'Mr. Satist Kumar Tomer', '1009625325', 'SKU/12358', 'Sri Krishna College Delhi', 'Physics', 56, 'Chemistry', 85, 'Maths', 63, 'Social Science', 74, 'Physical Education', 56, 'Computer Science', 63, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '452/600', '332/600', '978/1200', 'PASSED', 'FIRST', 'YES', '1', '2022-01-05 13:53:11'),
(6, '508859863download.png', 'B.Com 2019', 'Manish Jain', 'Mr. Krishan Jain', '23256235', 'Mk12415', 'Doon College Pune', 'First', 55, 'Paper II', 74, 'Maths', 87, 'Social Science', 45, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '244/500', '1100/2562', '1600/2000', 'PASSED', 'First', 'YES', '1', '2022-01-05 14:15:33'),
(7, '7584370251200px-crystal_clear_kdm_user_female.png', 'B.Tech', 'Pappyu', 'Mr. Krishan Jain', '2012452', 'Mk12415', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', 'YES', '1', '2022-01-05 14:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `logo_img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `college_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `footer_info` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo_img`, `college_name`, `footer_info`) VALUES
(1, '717569462college-or-university-logo-vector.png', 'Sri Krishnadevaraya University', 'Copyright © 2022. All Rights Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pass_word` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_id`, `pass_word`, `status`) VALUES
(1, 'helpdeskhrgur@gmail.com', '1Y90J@gRV%', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
