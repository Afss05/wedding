-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 02:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wed`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'abu', 'ased@gmail.com', '017209858496bc150fb467b572938d7dd788a20f', '8190007777', '2024-05-03 11:12:09', '2024-05-03 11:12:09'),
(2, 'abu', 'sheik.varahi@gmail.com', 'a2391878f4bedff5c18d5b48050ee052e0f87c65', '8190007777', '2024-05-10 11:29:25', '2024-05-10 11:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `username` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vid` int(11) NOT NULL,
  `vname` varchar(255) NOT NULL,
  `vemail` varchar(255) NOT NULL,
  `vpassword` varchar(255) NOT NULL,
  `vcontact` varchar(20) NOT NULL,
  `vcreated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vid`, `vname`, `vemail`, `vpassword`, `vcontact`, `vcreated_date`) VALUES
(1, 'abu', 'asx@gmail.com', 'Asxz@123', '1234567890', '2024-05-10 09:49:12'),
(2, 'abu', 'asd@gmail.com', 'Aaa@123', '1234567890', '2024-05-10 11:19:16'),
(3, 'abu', 'asd@gmail.coms', 'Asd@123', '1234567890', '2024-05-10 12:16:01'),
(4, 'abu', 'zxc@gmail.com', 'Zxs@123', '1234567890', '2024-05-11 05:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `vr_details`
--

CREATE TABLE `vr_details` (
  `pid` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `vid` int(11) NOT NULL,
  `contactPerson` varchar(255) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `yearsInBusiness` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vr_details`
--

INSERT INTO `vr_details` (`pid`, `brandName`, `category`, `vid`, `contactPerson`, `phoneNumber`, `email`, `address`, `description`, `yearsInBusiness`, `logo`, `facebook`, `instagram`, `youtube`, `website`) VALUES
(1, 'dsaccs', 'cccdc', 0, 'sacccsc', '8989898989', 'sheik.varahi@gmail.com', '61', 'ffvfvvvvvvvvvvvvvvvvvvvvvvvvvfffffffffffffffffffffffffffssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 1, 'Screenshot (12).png', 'https://web.whatsapp.com/', 'https://web.whatsapp.com/', 'https://web.whatsapp.com/', 'https://web.whatsapp.com/'),
(2, 'dsaccs', 'cccdc', 0, 'sacccsc', '8989898989', 'aasyyd@gmail.com', '61', 'scdfsfdffdsv', 5, 'Screenshot (8).png', 'https://web.whatsapp.com/', 'https://web.whatsapp.com/', 'https://web.whatsapp.com/', 'https://bharatvivaha.com/'),
(3, 'dsaccs', 'cccdc', 0, 'sacccsc', '8989898989', 'aasyyd@gmail.com', '61', 'scdfsfdffdsv', 5, 'Screenshot (8).png', 'https://web.whatsapp.com/', 'https://web.whatsapp.com/', 'https://web.whatsapp.com/', 'https://bharatvivaha.com/'),
(4, 'dsaccs', 'cccdc', 0, 'sacccsc', '8989898989', 'aasd@gmail.com', '61', 'vdgdsvrdv', 1, 'Screenshot (8).png', 'https://web.whatsapp.com/', '', '', ''),
(5, 'dsaccs', 'cccdc', 0, 'sacccsc', '8989898989', 'aasd@gmail.com', '61', 'vdgdsvrdv', 1, 'Screenshot (8).png', 'https://web.whatsapp.com/', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vid`),
  ADD UNIQUE KEY `vemail` (`vemail`);

--
-- Indexes for table `vr_details`
--
ALTER TABLE `vr_details`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vr_details`
--
ALTER TABLE `vr_details`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
