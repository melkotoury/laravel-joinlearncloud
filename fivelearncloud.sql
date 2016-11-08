-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2016 at 04:20 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fivelearncloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_12_043509_create_users_table', 1),
('2016_05_12_043554_create_points_table', 1),
('2016_05_13_225456_create_sitesetting_table', 1),
('2016_05_23_115557_create_payclouds_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payclouds`
--

CREATE TABLE `payclouds` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payer_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `refunded` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(10) UNSIGNED NOT NULL,
  `points` bigint(20) NOT NULL,
  `invited_points` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `points`, `invited_points`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3000, 0, 1, '2016-07-30 16:11:28', '2016-07-30 16:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `sitesettings`
--

CREATE TABLE `sitesettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `homeone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `hometwo` longtext COLLATE utf8_unicode_ci NOT NULL,
  `homethree` longtext COLLATE utf8_unicode_ci NOT NULL,
  `homefour` longtext COLLATE utf8_unicode_ci NOT NULL,
  `homefive` longtext COLLATE utf8_unicode_ci NOT NULL,
  `featureone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `featuretwo` longtext COLLATE utf8_unicode_ci NOT NULL,
  `featurethree` longtext COLLATE utf8_unicode_ci NOT NULL,
  `featurefour` longtext COLLATE utf8_unicode_ci NOT NULL,
  `featurefive` longtext COLLATE utf8_unicode_ci NOT NULL,
  `profileone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `profiletwo` longtext COLLATE utf8_unicode_ci NOT NULL,
  `profilethree` longtext COLLATE utf8_unicode_ci NOT NULL,
  `profilefour` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('student','teacher') COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `referral_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `twitter_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `invited_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `phone` bigint(20) NOT NULL,
  `shared` tinyint(1) NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tweeted` tinyint(1) NOT NULL,
  `shared_photo` tinyint(1) NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `email`, `referral_code`, `image_name`, `facebook_id`, `twitter_id`, `invited_by`, `phone`, `shared`, `country`, `handle`, `tweeted`, `shared_photo`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Soliman Mahmoud Soliman', 'student', 'solyooo@yahoo.com', 'zmffzpy', '', '1107189472707111', '0', '0', 11010111233, 1, 'Albania (Shqipëri) 355', '', 0, 1, '$2y$10$mR15JO1wg7KaJ650gCvXT.uoQDVs16HrJdgUOBFBvEUN16qZPCarq', NULL, '2016-07-30 16:11:28', '2016-07-30 16:12:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `payclouds`
--
ALTER TABLE `payclouds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesettings`
--
ALTER TABLE `sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_referral_code_unique` (`referral_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payclouds`
--
ALTER TABLE `payclouds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
