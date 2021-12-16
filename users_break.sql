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
-- Table structure for table `users_break`
--

CREATE TABLE `users_break` (
  `id` int(11) NOT NULL,
  `dateToday` date DEFAULT NULL,
  `breakstart_AM` time DEFAULT NULL,
  `breakend_AM` time DEFAULT NULL,
  `breakstart_PM` time DEFAULT NULL,
  `breakend_PM` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_break`
--

INSERT INTO `users_break` (`id`, `dateToday`, `breakstart_AM`, `breakend_AM`, `breakstart_PM`, `breakend_PM`) VALUES
(12, '2021-12-16', '09:42:06', NULL, NULL, NULL),
(13, NULL, NULL, '09:42:28', NULL, NULL),
(14, NULL, NULL, NULL, '09:42:33', NULL),
(15, NULL, NULL, NULL, NULL, '09:42:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_break`
--
ALTER TABLE `users_break`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_break`
--
ALTER TABLE `users_break`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
