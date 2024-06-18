-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2024 at 06:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carvent`
--

-- --------------------------------------------------------

--
-- Table structure for table `carlist`
--

CREATE TABLE `carlist` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('sedan','suv','hatchback','mpv','truck','van','coupe','convertible') COLLATE utf8mb4_unicode_ci NOT NULL,
  `seats` int NOT NULL,
  `transmission` enum('manual','automatic') COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_type` enum('petrol','diesel','electric','hybrid') COLLATE utf8mb4_unicode_ci NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `price` decimal(10,2) NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `photo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carlist`
--

INSERT INTO `carlist` (`id`, `name`, `brand`, `model`, `year`, `color`, `type`, `seats`, `transmission`, `fuel_type`, `availability`, `price`, `notes`, `photo_url`, `created_at`, `updated_at`) VALUES
(3, 'Honda CR-V', 'Honda', 'CR-V', 2020, 'Red', 'suv', 5, 'automatic', 'petrol', 1, '400000.00', 'Excellent condition, leather seats.', '1718620185.png', '2024-06-17 03:29:45', '2024-06-17 03:29:45'),
(4, 'Ford Mustang', 'Ford', 'Mustang', 2019, 'Blue', 'coupe', 4, 'manual', 'petrol', 1, '500000.00', 'Sports car, powerful engine.', '1718620414.png', '2024-06-17 03:33:34', '2024-06-17 03:33:34'),
(5, 'BMW X5', 'BMW', 'X5', 2021, 'Blue', 'suv', 7, 'automatic', 'diesel', 1, '700000.00', 'Luxury SUV, panoramic sunroof.', '1718620808.png', '2024-06-17 03:40:08', '2024-06-17 03:40:08'),
(6, 'Volkswagen Golf', 'Volkswagen', 'Golf', 2017, 'White', 'hatchback', 5, 'automatic', 'petrol', 1, '250000.00', 'Compact and fuel-efficient.', '1718621560.png', '2024-06-17 03:52:40', '2024-06-17 03:52:40'),
(7, 'Mercedes-Benz E-Class', 'Mercedes-Benz', 'E-Class', 2022, 'Silver', 'sedan', 5, 'automatic', 'petrol', 1, '800000.00', 'Premium sedan, leather interior.', '1718621764.png', '2024-06-17 03:56:04', '2024-06-17 03:56:04'),
(8, 'Audi Q7', 'Audi', 'Q7', 2020, 'Gray', 'suv', 7, 'automatic', 'diesel', 1, '600000.00', 'Family SUV with advanced safety features.', '1718622226.png', '2024-06-17 04:03:46', '2024-06-17 04:03:46'),
(9, 'Tesla Model S', 'Tesla', 'Model S', 2023, 'Blue', 'sedan', 5, 'automatic', 'electric', 1, '1000000.00', 'Fully electric luxury sedan.', '1718622766.png', '2024-06-17 04:12:46', '2024-06-17 04:12:46'),
(10, 'Nissan Rogue', 'Nissan', 'Rogue', 2021, 'Green', 'suv', 5, 'automatic', 'hybrid', 1, '450000.00', 'Hybrid technology, spacious interior.', '1718622956.png', '2024-06-17 04:15:56', '2024-06-17 04:15:56'),
(11, 'Chevrolet Silverado', 'Chevrolet', 'Silverado', 2022, 'Red', 'truck', 5, 'automatic', 'diesel', 1, '1200000.00', 'Powerful and reliable', '1718623260.png', '2024-06-17 04:21:00', '2024-06-17 04:21:00'),
(12, 'Toyota Prius', 'Toyota', 'Prius', 2021, 'White', 'sedan', 5, 'automatic', 'hybrid', 1, '1100000.00', 'Eco-friendly with great mileage', '1718623413.png', '2024-06-17 04:23:33', '2024-06-17 04:23:33'),
(13, 'Tesla Model 3', 'Tesla', 'Model 3', 2023, 'Black', 'sedan', 5, 'automatic', 'electric', 1, '1500000.00', 'Includes autopilot', '1718623575.png', '2024-06-17 04:26:15', '2024-06-17 04:26:15'),
(14, 'Nissan Leaf', 'Nissan', 'Leaf', 2022, 'Red', 'hatchback', 5, 'automatic', 'electric', 1, '1200000.00', 'Long-range battery', '1718623701.png', '2024-06-17 04:28:21', '2024-06-17 04:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_17_070327_add_tables', 2),
(6, '2024_06_17_162537_add_transaction_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `car_id` bigint UNSIGNED NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `include_driver` tinyint(1) NOT NULL DEFAULT '0',
  `status` enum('pending','ongoing','completed','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `total_price` decimal(10,2) NOT NULL,
  `payment_status` enum('pending','completed','failed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `customer_id`, `car_id`, `start_date`, `end_date`, `include_driver`, `status`, `total_price`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2024-01-01 00:00:00', '2024-01-01 00:00:00', 0, 'pending', '400000.00', 'pending', '2024-06-17 22:53:09', '2024-06-17 22:53:09'),
(2, 1, 3, '2024-01-01 00:00:00', '2024-01-02 00:00:00', 0, 'pending', '800000.00', 'pending', '2024-06-17 22:55:26', '2024-06-17 22:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Daneswara', 'intxger@gmail.com', NULL, '$2y$12$j0Xw7OK7ooHhwQ7ZeAx69uLohnDnoQOBC5z5yF5B1a28pp6F8aQFW', NULL, 'ADMIN', '2024-06-16 23:40:53', '2024-06-16 23:40:53'),
(2, 'Test Account', 'example@email.com', NULL, '$2y$12$niogR5S3zbjper5r7EbgCumz0/oDi6eG5TA1BncHNJwjLIFoaifiO', NULL, 'USER', '2024-06-16 23:43:59', '2024-06-16 23:43:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carlist`
--
ALTER TABLE `carlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_customer_id_foreign` (`customer_id`),
  ADD KEY `transactions_car_id_foreign` (`car_id`);

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
-- AUTO_INCREMENT for table `carlist`
--
ALTER TABLE `carlist`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `carlist` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
