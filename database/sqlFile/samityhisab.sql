-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2025 at 07:35 AM
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
-- Database: `samityhisab`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_test@example.com|127.0.0.1', 'i:2;', 1742104850),
('laravel_cache_test@example.com|127.0.0.1:timer', 'i:1742104850;', 1742104850);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `demo_requests`
--

CREATE TABLE `demo_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `your_name` varchar(255) NOT NULL,
  `org_type_id` bigint(20) UNSIGNED NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `present_member` int(11) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('Pending','Active') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demo_requests`
--

INSERT INTO `demo_requests` (`id`, `your_name`, `org_type_id`, `organization_name`, `address`, `present_member`, `mobile_no`, `email`, `comment`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Brinto Chakroborty Sammo', 1, 'Cobb and Curtis Associates', 'rangpur', 60, '01750756133', 'xiqibaliz@mailinator.com', NULL, '2025-03-15 11:19:25', '2025-03-15 11:19:25', 'Pending'),
(2, 'Brinto Chakroborty Sammo', 3, 'Salazar and Moreno Co', 'rangpur', 10, '01750756133', 'jyjeke@mailinator.com', NULL, '2025-03-15 11:21:33', '2025-03-15 11:21:48', 'Active'),
(3, 'Brinto Chakroborty Sammo', 2, 'Castaneda and Winters LLC', 'rangpur', 9, '01750756133', 'wili@mailinator.com', NULL, '2025-03-15 23:49:27', '2025-03-15 23:49:27', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_contents`
--

CREATE TABLE `home_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `iframe_link` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `features` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_contents`
--

INSERT INTO `home_contents` (`id`, `image`, `iframe_link`, `title`, `description`, `features`, `created_at`, `updated_at`) VALUES
(1, '1742059557_logo.png', 'https://www.youtube.com/embed/HeDDf4WBN50?si=qa0ZxVMph12ycvJq', 'আপনি কি অসংখ্য ডকুমেন্ট, গ্রাহকদের হিসাব ও মাঠকর্মীদের কালেকশন অথবা কাজের আপডেট নিয়ে উদ্বিগ্ন। এই সমস্যার সমাধান পেতে ব্যবহার করুন আমাদের সমিতি হিসাব অনলাইন সফটওয়্যারটি।', 'এই সফটওয়্যার ব্যবহারে যেসব সুবিধা পাচ্ছেন -', '\"[\\\"\\\\u0997\\\\u09cd\\\\u09b0\\\\u09be\\\\u09b9\\\\u0995\\\\u09a6\\\\u09c7\\\\u09b0 \\\\u09b8\\\\u0995\\\\u09b2 \\\\u09a4\\\\u09a5\\\\u09cd\\\\u09af \\\\u09b8\\\\u09a0\\\\u09bf\\\\u0995 \\\\u09ad\\\\u09be\\\\u09ac\\\\u09c7 \\\\u09b8\\\\u0982\\\\u09b0\\\\u0995\\\\u09cd\\\\u09b7\\\\u09a8\\\\u0964\\\\r\\\",\\\"\\\\u09a4\\\\u09be\\\\u09b0\\\\u09bf\\\\u0996 \\\\u0985\\\\u09a8\\\\u09c1\\\\u09af\\\\u09be\\\\u09df\\\\u09c0 \\\\u0997\\\\u09cd\\\\u09b0\\\\u09be\\\\u09b9\\\\u0995\\\\u09c7\\\\u09b0 \\\\u09b8\\\\u09cd\\\\u099f\\\\u09c7\\\\u099f\\\\u09ae\\\\u09c7\\\\u09a8\\\\u09cd\\\\u099f \\\\u09a6\\\\u09c7\\\\u0996\\\\u09be \\\\u0993 \\\\u09b2\\\\u09cb\\\\u09a8 \\\\u0986\\\\u09a6\\\\u09be\\\\u09a8-\\\\u09aa\\\\u09cd\\\\u09b0\\\\u09a6\\\\u09be\\\\u09a8 \\\\u098f\\\\u09b0 \\\\u09aa\\\\u09cd\\\\u09b0\\\\u09bf\\\\u09a8\\\\u09cd\\\\u099f \\\\u0995\\\\u09b0\\\\u09be\\\\u0964\\\\r\\\",\\\"\\\\u09ac\\\\u09cd\\\\u09af\\\\u09be\\\\u0982\\\\u0995\\\\u09c7\\\\u09b0 \\\\u09b8\\\\u0995\\\\u09b2 \\\\u09b2\\\\u09c7\\\\u09a8\\\\u09a6\\\\u09c7\\\\u09a8\\\\u09c7\\\\u09b0 \\\\u09b9\\\\u09bf\\\\u09b8\\\\u09be\\\\u09ac \\\\u09b0\\\\u09be\\\\u0996\\\\u09be\\\\u0964\\\\r\\\",\\\"\\\\u09a8\\\\u09bf\\\\u099c\\\\u09c7\\\\u09a6\\\\u09c7\\\\u09b0 \\\\u09aa\\\\u099b\\\\u09a8\\\\u09cd\\\\u09a6 \\\\u09ae\\\\u09a4\\\\u09cb \\\\u09a1\\\\u09bf\\\\u09aa\\\\u09bf\\\\u098f\\\\u09b8,\\\\u098f\\\\u09ab\\\\u09a1\\\\u09bf\\\\u0986\\\\u09b0 \\\\u09b8\\\\u09cd\\\\u0995\\\\u09bf\\\\u09ae \\\\u09a4\\\\u09c8\\\\u09b0\\\\u09bf \\\\u0995\\\\u09b0\\\\u09be\\\\u0964\\\\r\\\",\\\"\\\\u09aa\\\\u09cd\\\\u09b0\\\\u09a4\\\\u09bf\\\\u09a6\\\\u09bf\\\\u09a8\\\\u09c7\\\\u09b0 \\\\u0986\\\\u09df \\\\u0993 \\\\u09ac\\\\u09cd\\\\u09af\\\\u09df \\\\u098f\\\\u09b0 \\\\u09b9\\\\u09bf\\\\u09b8\\\\u09c7\\\\u09ac \\\\u09b0\\\\u09be\\\\u0996\\\\u09be \\\\u0964\\\\r\\\",\\\"\\\\u09ae\\\\u09be\\\\u09b8\\\\u09bf\\\\u0995 \\\\u09aa\\\\u09cd\\\\u09b0\\\\u09ab\\\\u09bf\\\\u099f \\\\u098f\\\\u09ac\\\\u0982 \\\\u09ab\\\\u09bf\\\\u0995\\\\u09cd\\\\u09b8\\\\u09a1 \\\\u09aa\\\\u09cd\\\\u09b0\\\\u09ab\\\\u09bf\\\\u099f \\\\u09ac\\\\u09bf\\\\u09a4\\\\u09b0\\\\u09a3\\\\u0964\\\\r\\\",\\\"\\\\u0997\\\\u09cd\\\\u09b0\\\\u09be\\\\u09b9\\\\u0995\\\\u0995\\\\u09c7 \\\\u098f\\\\u09b8\\\\u098f\\\\u09ae\\\\u098f\\\\u09b8 \\\\u09aa\\\\u09be\\\\u09a0\\\\u09be\\\\u09a8\\\\u09cb\\\\u0964\\\\r\\\",\\\"\\\\u0995\\\\u09be\\\\u09b8\\\\u09cd\\\\u099f\\\\u09ae\\\\u09be\\\\u09b0 \\\\u09b2\\\\u09c7\\\\u099c\\\\u09be\\\\u09b0 \\\\u0993 \\\\u0987\\\\u0989\\\\u099c\\\\u09be\\\\u09b0 \\\\u0993\\\\u09af\\\\u09bc\\\\u09be\\\\u0987\\\\u09b8 \\\\u0995\\\\u09be\\\\u09b2\\\\u09c7\\\\u0995\\\\u09b6\\\\u09a8 \\\\u09b0\\\\u09bf\\\\u09aa\\\\u09cb\\\\u09b0\\\\u09cd\\\\u099f \\\\u09a6\\\\u09c7\\\\u0996\\\\u09be\\\\u0964\\\\r\\\",\\\"\\\\u0986\\\\u09a8\\\\u09b2\\\\u09bf\\\\u09ae\\\\u09bf\\\\u099f\\\\u09c7\\\\u09a1 \\\\u0987\\\\u0989\\\\u099c\\\\u09be\\\\u09b0 \\\\u0993 \\\\u09a8\\\\u09bf\\\\u099c\\\\u09c7\\\\u09a6\\\\u09c7\\\\u09b0 \\\\u0987\\\\u099a\\\\u09cd\\\\u099b\\\\u09c7 \\\\u09ae\\\\u09a4\\\\u09cb \\\\u09b0\\\\u09cb\\\\u09b2 \\\\u09a4\\\\u09c8\\\\u09b0\\\\u09bf \\\\u0995\\\\u09b0\\\\u09be \\\\u0964\\\\r\\\",\\\"\\\\u09ac\\\\u09be\\\\u0982\\\\u09b2\\\\u09be \\\\u0993 \\\\u0987\\\\u0982\\\\u09b0\\\\u09c7\\\\u099c\\\\u09bf \\\\u0989\\\\u09ad\\\\u09df \\\\u09ad\\\\u09be\\\\u09b7\\\\u09be\\\\u0987 \\\\u09b8\\\\u09ab\\\\u099f\\\\u0993\\\\u09df\\\\u09cd\\\\u09af\\\\u09be\\\\u09b0 \\\\u099f\\\\u09bf \\\\u09ac\\\\u09cd\\\\u09af\\\\u09ac\\\\u09b9\\\\u09be\\\\u09b0 \\\\u0995\\\\u09b0\\\\u09be \\\\u09af\\\\u09be\\\\u09ac\\\\u09c7\\\\u0964\\\\r\\\",\\\"\\\\u098f\\\\u099f\\\\u09bf \\\\u098f\\\\u0995\\\\u099f\\\\u09bf \\\\u0985\\\\u09a8\\\\u09b2\\\\u09be\\\\u0987\\\\u09a8 \\\\u09b8\\\\u09ab\\\\u099f\\\\u0993\\\\u09df\\\\u09cd\\\\u09af\\\\u09be\\\\u09b0 \\\\u09b9\\\\u0993\\\\u09df\\\\u09be\\\\u09df \\\\u09a8\\\\u09bf\\\\u099c\\\\u09c7\\\\u09b0 \\\\u0987\\\\u099a\\\\u09cd\\\\u099b\\\\u09c7 \\\\u09ae\\\\u09a4\\\\u09cb \\\\u09af\\\\u09c7\\\"]\"', '2025-03-15 11:25:57', '2025-03-15 11:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_13_181332_create_organization_types_table', 1),
(5, '2025_03_13_202739_create_demo_requests_table', 1),
(6, '2025_03_14_000000_create_prices_table', 1),
(7, '2025_03_15_073312_add_status_to_demo_requests_table', 1),
(8, '2025_03_15_125708_create_orders_table', 1),
(9, '2025_03_15_143538_create_home_contents_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_type_id` bigint(20) UNSIGNED NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `organization_head_name` varchar(255) NOT NULL,
  `national_id` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `org_type_id`, `organization_name`, `address`, `image`, `mobile_no`, `organization_head_name`, `national_id`, `email`, `package_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'Joyce Holland LLC', 'rangpur', '1742060231_favicon.png', '01750756133', 'Atkinson Fisher Trading', 'Alias rem autem veli', 'jiboduhyze@mailinator.com', 1, 'pending', '2025-03-15 11:37:11', '2025-03-15 11:37:11'),
(2, 5, 'Stokes Powell LLC', 'rangpur', '1742104498_favicon.png', '01750756133', 'Richardson and Weeks LLC', '123456789', 'xaho@mailinator.com', 1, 'approved', '2025-03-15 23:54:58', '2025-03-16 00:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `organization_types`
--

CREATE TABLE `organization_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organization_types`
--

INSERT INTO `organization_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'সমিতি', '2025-03-15 11:19:15', '2025-03-15 11:19:15'),
(2, 'স্কুল', '2025-03-15 11:19:15', '2025-03-15 11:19:15'),
(3, 'কলেজ', '2025-03-15 11:19:15', '2025-03-15 11:19:15'),
(4, 'মাদ্রাসা', '2025-03-15 11:19:15', '2025-03-15 11:19:15'),
(5, 'অন্যান্য', '2025-03-15 11:19:15', '2025-03-15 11:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `software_price` varchar(255) NOT NULL,
  `annual_server_fee` varchar(255) NOT NULL,
  `monthly_server_fee` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `package_name`, `software_price`, `annual_server_fee`, `monthly_server_fee`, `created_at`, `updated_at`) VALUES
(1, '১ - ১০০ সদস্য', '৭০০০ টাকা', '২৫০০ টাকা', '২০০ টাকা', '2025-03-15 11:36:19', '2025-03-15 11:36:19');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Brinto Chakroborty Sammo', 'admin@gmail.com', NULL, '$2y$12$MQbz38Ut85KTlkz2XUwPZ.EQahVKV.QP5IMVKCLF8pTiL810rnA.a', NULL, '2025-03-16 00:00:42', '2025-03-16 00:00:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `demo_requests`
--
ALTER TABLE `demo_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `demo_requests_org_type_id_foreign` (`org_type_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_contents`
--
ALTER TABLE `home_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_org_type_id_foreign` (`org_type_id`),
  ADD KEY `orders_package_id_foreign` (`package_id`);

--
-- Indexes for table `organization_types`
--
ALTER TABLE `organization_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `demo_requests`
--
ALTER TABLE `demo_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_contents`
--
ALTER TABLE `home_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organization_types`
--
ALTER TABLE `organization_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `demo_requests`
--
ALTER TABLE `demo_requests`
  ADD CONSTRAINT `demo_requests_org_type_id_foreign` FOREIGN KEY (`org_type_id`) REFERENCES `organization_types` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_org_type_id_foreign` FOREIGN KEY (`org_type_id`) REFERENCES `organization_types` (`id`),
  ADD CONSTRAINT `orders_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `prices` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
