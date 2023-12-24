-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 04:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petra_ville`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`admin_id`, `username`, `fname`, `lname`, `password`) VALUES
(3, 'superadmin', 'Lance', 'Taha', '$2y$10$XJ6GrmZ5lhX.yozcXy.KleQWy1VMLXTy4tedJocPgLCy5bbKYrQg.');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `inquiry_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `province` varchar(50) NOT NULL,
  `property_name` varchar(50) NOT NULL,
  `inquiry_type` varchar(50) NOT NULL,
  `unit_type` varchar(50) NOT NULL,
  `tcp_range` varchar(50) NOT NULL,
  `product_interest` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `submission_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`inquiry_id`, `first_name`, `last_name`, `email`, `phone`, `province`, `property_name`, `inquiry_type`, `unit_type`, `tcp_range`, `product_interest`, `message`, `submission_time`) VALUES
(26, 'yoskieeeee', 'yoskie', 't1@gmail.com', '0909090909', 'province2', 'harmonyHaven', 'propertyPurchase', 'condominium', 'range1', 'bedroom3', 'adadadass', '2023-12-24 05:31:00'),
(27, 'yoskieeeee', 'yoskie', 't1@gmail.com', '0909090909', 'province2', 'serenitySprings', 'rentalInquiries', 'tomeHomes', 'range2', 'bedroom2', 'eqwewqeeerr', '2023-12-24 05:33:11'),
(28, 'yoskieeeee', 'yoskie', 't1@gmail.com', '0909090909', 'province3', 'crestviewMeadows', 'rentalInquiries', 'bungalow', 'range3', 'bedroom5', 'daddaddad', '2023-12-24 05:41:57'),
(29, 'yoskieeeee', 'yoskie', 't1@gmail.com', '0909090909', 'province3', 'crestviewMeadows', 'rentalInquiries', 'bungalow', 'range3', 'bedroom5', 'daddaddad', '2023-12-24 05:48:07'),
(30, 'yoskieeeee', 'yoskie', 't1@gmail.com', '0909090909', 'province3', 'crestviewMeadows', 'rentalInquiries', 'bungalow', 'range3', 'bedroom5', 'daddaddad', '2023-12-24 05:48:34'),
(31, 'yoskie', 'yoskie', 't1@gmail.com', '0909090909', 'province3', 'harmonyHaven', 'rentalInquiries', 'condominium', 'range1', 'bedroom4', 'sasassa', '2023-12-24 05:49:01'),
(32, 'yoskie', 'yoskie', 't1@gmail.com', '0909090909', 'province2', 'serenitySprings', 'rentalInquiries', 'bungalow', 'range2', 'lotOnly', 'sasaasasas', '2023-12-24 05:50:32'),
(33, 'test', 'test', 't1@gmail.com', '0909090909', 'province6', 'tranquilTerrace', 'propertyPurchase', 'tomeHomes', 'range1', 'bedroom5', 'Hello', '2023-12-24 05:51:01'),
(34, 'yoskie', 'test', 't1@gmail.com', '0909090909', 'province5', 'serenitySprings', 'propertyPurchase', 'condominium', 'range3', 'bedroom5', 'dadadasasa', '2023-12-24 05:56:32'),
(35, 'yoskieeeee', 'yoskie', 't1@gmail.com', '0909090909', 'province8', 'tranquilTerrace', 'propertyPurchase', 'tomeHomes', 'range2', 'bedroom4', 'awDSWEWDASDADS', '2023-12-24 06:07:03'),
(36, 'yoskieeeee', 'yoskie', 't1@gmail.com', '0909090909', 'province4', 'serenitySprings', 'rentalInquiries', 'condominium', 'range1', 'bedroom4', 'SADWADWASSD', '2023-12-24 06:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`) VALUES
(1, 'test1@gmail.com', '$2y$10$YfmtUxOM88p2vqrt.NthA.B6qsypz27l7W6vzPA1iUbRZcZJoYafm'),
(2, 'Lance@gmail.com', '$2y$10$0PCWqGJIixSvkeeDK0JsTuzInuxmAwpMIAXvOGY/yraxdzLgwa63S'),
(4, 'newtest1@gmail.com', '$2y$10$VSTAhluZ2LZz1q6V1ucJruG3qS2M4UkSaUw0vsWWgf6x6csHq0Fdu'),
(5, 'muja@gmail.com', '$2y$10$RZcIiX5NL3xiRfqtjcZykuX2Ww9VAS2QeWIWvfuhAeJhZjd0bYDCy'),
(6, 'yoskie2023@gmail.com', '$2y$10$CP8IllO4Lv3i96Ki4jjzFuCz7KMfRUWuPXClafmSeJ1Ao5qEX60BW'),
(7, 'newtestacc@gmail.com', '$2y$10$CygfNSR/1bkbGlRVyvA7zeneRB8MgDianhnCMACGjh7yYhxxCuh4K'),
(8, '3e233@gmail.com', '$2y$10$oq8zfY011Phlx1TU3JOxv.4plzVbmICEiS8BQix2jRhszMJKEu/aS'),
(9, '123@gmail.com', '$2y$10$m1OoPp.SJ/XjqNv991KLQuUmqW/fI6pCpqJDTA0cNTU.td0y8W/yS'),
(11, 'test11@gmail.com', '$2y$10$rSB4woBaZE03k27thZQCnebLFOmf/CYkM1SDX10Vxqo/LywJpmyZ6'),
(13, 'test9@gmail.com', '$2y$10$XHwjKRyP9EBbMXW8CxH7GOAlPUVP/6yn1aSUmLOHsLF/CV9nlFNc.'),
(15, 'Lance22@gmail.com', '$2y$10$me51OpyFPp/G2pzhbb3HFOnvnLux3k9eAKsOSha2jWEDvZR.a2sVa'),
(16, 'LanceM@gmail.com', '$2y$10$dtwbGKSzEWVGEoq6TNn9suMSZUcXTf4Hi/OvTu32fNZh5k.MsR3QG'),
(17, 'LanceMi@gmail.com', '$2y$10$OZV5fGHdIFcd7iJqh.gzb.HquZMnlIR67Nuw3uzNaA1UXxvxZkYVi'),
(18, 'testing1@gmail.com', '$2y$10$s5/HprJvbwb6lBaqT/.9TOG6uD83tod2VftRR6gVl0IVRL9oQdRqW'),
(19, 'testing2@gmail.com', '$2y$10$zUCQFqfLwHW9R3OruLhcoOk6FEFre/e1AgE26NnKRf8AMjpgsrOQS'),
(22, 'testing3@gmail.com', '$2y$10$MShUskEkxqXS3fHqieR9OelB.qzMCTtgNVxGPx9t7uz9Rqem2tGK6'),
(23, 'testing4@gmail.com', '$2y$10$yBji0oP.mzJNgmETaUiOV.5VsTLBvXPmXzANevLX.BBPAJIu.YY2q'),
(27, 'testing5@gmail.com', '$2y$10$POg0O1YrGHqYH1IJecCCxufJ5i0g6yo0CVqO5xLvYs5.cjEmGCwiq'),
(29, 't1@gmail.com', '$2y$10$EPkwVn2xFDsWuFVkn/X5jeYgvAdVB1nqDmGRx/C1baATwkd72byaW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
