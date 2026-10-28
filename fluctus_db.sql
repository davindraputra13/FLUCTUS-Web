-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2026 at 08:55 AM
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
-- Database: `fluctus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'fluctus123');

-- --------------------------------------------------------

--
-- Table structure for table `merch`
--

CREATE TABLE `merch` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `tokopedia_link` varchar(500) DEFAULT NULL,
  `shopee_link` varchar(500) DEFAULT NULL,
  `sizes` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merch`
--

INSERT INTO `merch` (`id`, `name`, `price`, `image_url`, `tokopedia_link`, `shopee_link`, `sizes`, `created_at`) VALUES
(7, 'Mr. TikiMan', 185000.00, 'uploads/1789467459_Screenshot 2026-09-14 at 18.10.00.png', 'https://tk.tokopedia.com/ZSqXKM6QU/', '', 'L, XL', '2026-09-15 10:17:39'),
(8, 'Tropi Fish', 185000.00, 'uploads/1789467507_Screenshot 2026-09-14 at 18.10.18.png', 'https://tk.tokopedia.com/ZSqXK3EvW/', '', 'M, L', '2026-09-15 10:18:27'),
(9, 'Tiki Blue', 185000.00, 'uploads/1789467543_Screenshot 2026-09-14 at 18.10.38.png', 'https://tk.tokopedia.com/ZSqXER8xJ/', '', 'M', '2026-09-15 10:19:03'),
(10, 'Tiki Buoy', 185000.00, 'uploads/1789470037_Screenshot 2026-09-15 at 18.59.20.png', 'https://tk.tokopedia.com/ZSq4eEM6o/', '', 'M, L', '2026-09-15 11:00:37'),
(11, 'Tropical Tunes', 185000.00, 'uploads/1789470056_Screenshot 2026-09-15 at 18.59.36.png', '', '', 'L', '2026-09-15 11:00:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merch`
--
ALTER TABLE `merch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `merch`
--
ALTER TABLE `merch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
