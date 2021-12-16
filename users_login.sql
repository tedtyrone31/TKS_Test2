-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2021 at 03:00 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tks_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_login`
--

CREATE TABLE `users_login` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `first_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_login`
--

INSERT INTO `users_login` (`id`, `user_id`, `user_name`, `password`, `date`, `first_name`, `last_name`) VALUES
(1, 'OSPCC997', 'adsfas', 'dasfda', '2021-12-10 05:36:05', 'adfas', 'dgagdasf'),
(2, 'OSPCC750', 'nami', 'nami', '2021-12-10 05:53:53', 'nami', 'swan'),
(3, 'OSPCC054', 'tedtyrone31', '12345', '2021-12-13 04:28:45', 'Ted Tyrone', 'Bolanio'),
(4, 'OSPCC187', 'test', 'test', '2021-12-10 06:15:35', 'test', 'test'),
(5, 'OSPCC200', 'test2', 'test2', '2021-12-10 06:21:00', 'test2', 'test2'),
(6, 'OSPCC261', 'johnv', 'johnv', '2021-12-13 00:04:40', 'john', 'ventic'),
(7, 'OSPCC703', 'test6', 'test6', '2021-12-13 00:06:25', 'test6', 'test6'),
(8, 'OSPCC136', 'johnd', 'johnd', '2021-12-13 00:48:08', 'John', 'Doe'),
(9, 'OSPCC501', 'sdfgs', '123', '2021-12-13 04:15:27', 'asda', 'fdsgs'),
(10, 'OSPCC081', 'sdfgs', '123', '2021-12-13 04:15:28', 'asda', 'fdsgs'),
(11, 'OSPCC470', 'dsfg', '123', '2021-12-13 04:15:41', 'asdf', 'fg'),
(12, 'OSPCC584', 'jggh', '123', '2021-12-13 04:17:38', 'asdf', 'dfgd'),
(13, 'OSPCC656', 'sdfas', '1234', '2021-12-13 04:20:15', 'adsfa', 'asdgasa'),
(14, 'OSPCC501', 'asdfas', '123', '2021-12-13 04:22:06', 'zxcvz', 'sadfga'),
(15, 'OSPCC685', 'test2', 'test2', '2021-12-13 04:26:36', 'test2', 'test2'),
(16, 'OSPCC981', 'ironman', '12345', '2021-12-13 04:52:16', 'Tony', 'Stark'),
(17, 'OSPCC316', 'tina123', '12345', '2021-12-13 07:23:45', 'Christina', 'Bihag'),
(18, 'OSPCC615', 'reman', 'rema123', '2021-12-14 05:32:38', 'Rema', 'Natalon'),
(19, 'OSPCC255', 'testing', 'test1234', '2021-12-14 06:11:05', 'Testing', 'testing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_login`
--
ALTER TABLE `users_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_login`
--
ALTER TABLE `users_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
