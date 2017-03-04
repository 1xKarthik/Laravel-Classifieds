-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 12:20 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Desktops', NULL, NULL),
(2, 'Laptops', NULL, NULL),
(3, 'Tablets', NULL, NULL),
(4, 'Smartphones', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classifieds`
--

CREATE TABLE `classifieds` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classifieds`
--

INSERT INTO `classifieds` (`id`, `title`, `description`, `price`, `condition`, `main_image`, `location`, `email`, `phone`, `owner_id`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'ENGINEERED TO WREAK HAVOC', 'Alienware’s most powerful 43.1 cm (17) gaming laptop is designed for VR with NVIDIA GeForce® GTX 10-Series graphics and Tobii eye tracking, taking you deeper into the game.', '2,07,990', 'New', 'item1.png', 'Bengaluru', 'dontbuy@kidding.com', '955-955-9555', 1, '2017-03-01 18:30:00', '2017-03-02 18:30:00', 1),
(2, 'Microsoft Surface Pro', '\r\nSurface Pro 4, Surface Pen, Power Adapter, Quick Start Guide, Safety and Warranty Documents', '73,990', 'New', 'item2.jpg', 'Bengaluru', 'dontbuy@justkidding.com', '999-999-9995', 2, '2017-03-01 18:30:00', '2017-03-02 18:30:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_03_01_083420_create_classifieds_table', 2),
(4, '2017_03_01_085402_create_categories_table', 2),
(5, '2017_03_01_085535_add_categoryid_to_classifieds_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ina Jefferson', 'nymade@gmail.com', '$2y$10$TxVfB4MIh7vtTUp482SgfOEpAO9sATnth69QUku5R2IBEjyn2K6la', '7L7GKLgFDDnnOOCy8UNtoHYuDp2J9tyQz0HOd0d8H1X6Je6M3x4QiMBng51k', '2017-03-02 06:47:24', '2017-03-02 06:47:24'),
(2, 'Chadwick Mclean', 'nynuxijak@gmail.com', '$2y$10$.6.UGz6fklr52Ivfbdq22OZJ/i3LcL3WHC6Jzo8nZz7iNIyJZSNIW', '4zJPNkFOxWYkBK0sBEv4maheFSFSUDGzO9L8BWhJpknHksqwEgDzwFhcReCA', '2017-03-02 07:17:15', '2017-03-02 07:17:15'),
(3, 'Cheyenne Valenzuela', 'hawomag@gmail.com', '$2y$10$AU8L6rPAZxrS38yUx8BgY.OsrcrVpwwY9uRn0b.4O.2DTWYmEgt0i', '0VWiAj2f7GrJUkv34tIWFBpNAgtDiRA4jCckKllsyR8NFUXDNNj7ImLBUdq6', '2017-03-02 07:18:02', '2017-03-02 07:18:02'),
(4, 'Faith Michael', 'duxida@hotmail.com', '$2y$10$b5MGMpOks57BE7BnzNi1j.fB7NS.0JfPQ1njZrjVxI9V8xkR/vB7K', 'rgFnzixzIz5LkFFqIIxcH4BV34o1Gpt13C1d5iletl6gAJ0NxYvxtd2aSnz4', '2017-03-03 05:06:32', '2017-03-03 05:06:32'),
(5, 'qwerty', 'qwerty@gmail.com', '$2y$10$nAcU3v6yTkzIzEsGkVl1XOOiGULwazStoRSEUntcjfZXvPzea36TO', NULL, '2017-03-03 22:46:55', '2017-03-03 22:46:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classifieds`
--
ALTER TABLE `classifieds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classifieds_category_id_foreign` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `classifieds`
--
ALTER TABLE `classifieds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
