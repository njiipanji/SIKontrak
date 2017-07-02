-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2017 at 03:22 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kontrak`
--
CREATE DATABASE IF NOT EXISTS `kontrak` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `kontrak`;

-- --------------------------------------------------------

--
-- Table structure for table `kontraks`
--

CREATE TABLE `kontraks` (
  `id` int(10) UNSIGNED NOT NULL,
  `kontrak_nomor` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontrak_nama_perjanjian` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontrak_nama_pihak` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontrak_tipe` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontrak_mulai` date NOT NULL,
  `kontrak_selesai` date NOT NULL,
  `kontrak_deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontraks`
--

INSERT INTO `kontraks` (`id`, `kontrak_nomor`, `kontrak_nama_perjanjian`, `kontrak_nama_pihak`, `kontrak_tipe`, `kontrak_mulai`, `kontrak_selesai`, `kontrak_deskripsi`, `created_at`, `updated_at`) VALUES
(2, '50', 'Hardness Tester', 'Toyota Machinery Corporation', 'Barang', '2016-12-29', '2017-08-28', 'Produk/Barang', NULL, NULL),
(3, '48', 'Zero Pesticide', 'Arima Pest Clean', 'Barang', '2017-01-01', '2017-12-20', 'Pest Control', NULL, '2017-06-24 02:50:36'),
(6, '56', 'Rear Axle Clynder FL04', 'PT. KaryaMitra Tehnik', 'Jasa', '2017-06-24', '2017-07-21', 'Perbaikan/Reparasi', '2017-06-24 02:59:10', '2017-06-24 02:59:10'),
(9, '23', 'asd', '232', 'Barang', '2001-02-03', '2017-06-24', 'q2e', '2017-06-24 03:40:05', '2017-06-24 03:40:05'),
(11, 'i8066', 'asd', '232', 'Barang', '2017-02-22', '2020-02-22', 'q2e', '2017-06-24 04:17:14', '2017-06-24 04:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_23_055915_create_kontraks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('panjirimawan@gmail.com', '$2y$10$CsoND6F0WomwiXPGUKENHO4.Y7/twzQaqB7Ic6pgDbt.l8h7RLtne', '2017-06-24 04:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$d9P6CZU/JdNJTh51NzDCV.sPNXpA7pPj4.nS1NnGKswpldMwYcihy', '7KmFjKnTQI7UAsmFSUdCycNAirro4J1P5S1YZ8fJCP4dXCvx7eV0xmtyDzvr', '2017-06-23 06:51:39', '2017-06-23 06:51:39'),
(2, 'Purwaning Rahayu', 'purwaning@gmail.com', '$2y$10$gokklIHImn6aUk/VmvptNOJbvsPAMll4iqSjrxsSMYBPUoC3J7/h2', 'jedwBYdfUXM8olCPhSOBbp380xrmHXavYai6t4l1ZGN4mCFkaKKTWQFwMuDE', '2017-06-23 06:57:37', '2017-06-23 06:57:37'),
(3, 'Panji Rimawan', 'panjirimawan@gmail.com', '$2y$10$ehUUoJjjixjgnDjPj/8zguEA9WxKrSBbTT8xJYiXXyTfmjqFY.QTq', 'BmX8PhzKqZ45nyCQM2wIZNzDdICG9wpCLFk6ua0Z9IlWChEW3XP9EbZdvqpl', '2017-06-23 07:02:17', '2017-06-23 07:02:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontraks`
--
ALTER TABLE `kontraks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontraks`
--
ALTER TABLE `kontraks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
