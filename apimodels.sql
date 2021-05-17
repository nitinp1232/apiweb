-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 11:56 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apiweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `apimodels`
--

CREATE TABLE `apimodels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apimodels`
--

INSERT INTO `apimodels` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'nickdd', 'nitin@mail.com', '2021-05-17 08:47:23', '2021-05-17 03:53:37'),
(2, 'Sam', 'sam@gmail.com', NULL, NULL),
(4, 'jack', 'jack@gmail.com', NULL, NULL),
(5, 'upvictor', 'upvictor@gmail.com', NULL, '2021-05-17 03:11:29'),
(6, 'roger', 'roger@gmail.com', NULL, NULL),
(7, 'victor', 'victor@gmail.com', NULL, NULL),
(8, 'rocky update', 'rocky@gmail.com', NULL, '2021-05-17 03:15:46'),
(9, 'bruce updated', 'bruce@gmail.com', '2021-05-17 08:47:23', '2021-05-17 03:18:22'),
(10, 'tony stark up', 'tonys@gmail.com', '2021-05-17 08:49:53', '2021-05-17 03:22:27'),
(11, 'natasha', 'natash@gmail.com', '2021-05-17 09:24:36', '2021-05-17 09:24:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apimodels`
--
ALTER TABLE `apimodels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apimodels`
--
ALTER TABLE `apimodels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
