-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 06:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jumlagate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_en`, `name_ar`, `created_at`, `updated_at`) VALUES
(1, 'women clothes', 'ملابس حريمي', '2020-10-16 11:00:33', '2020-10-16 11:00:33'),
(2, 'men clothes', 'ملابس رجالي', '2020-10-16 11:04:05', '2020-10-16 11:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `category_company`
--

CREATE TABLE `category_company` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_company`
--

INSERT INTO `category_company` (`id`, `category_id`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2020-10-16 11:06:21', '2020-10-16 11:06:21'),
(2, 2, 2, '2020-10-16 11:06:21', '2020-10-16 11:06:21'),
(3, 1, 3, '2020-10-21 10:02:54', '2020-10-21 10:02:54'),
(4, 2, 4, '2020-10-21 10:14:21', '2020-10-21 10:14:21'),
(5, 1, 5, '2020-10-21 10:24:28', '2020-10-21 10:24:28'),
(6, 2, 5, '2020-10-21 10:24:28', '2020-10-21 10:24:28'),
(7, 1, 6, '2020-10-21 10:29:12', '2020-10-21 10:29:12'),
(8, 1, 7, '2020-10-21 10:30:27', '2020-10-21 10:30:27'),
(9, 2, 7, '2020-10-21 10:30:27', '2020-10-21 10:30:27'),
(10, 1, 8, '2020-10-21 10:34:20', '2020-10-21 10:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brief` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name_en`, `name_ar`, `owner`, `brief`, `address`, `phone_1`, `phone_2`, `email`, `logo`, `created_at`, `updated_at`) VALUES
(2, 'mercedes', 'مرسيدي', 'mr.khaled sayed', 'sadsd', '123 streeet , Germany', '123134', '123132', 'mercedes@gmail.comm', '1603282523.jpg', '2020-10-16 11:06:21', '2020-10-21 10:15:23'),
(3, 'Baby clothes factory', 'مصنع ملابس اطفال', 'mr mohamed', 'test test test', '123 streeet , Germany', '01234567890', '01234567899', 'baby@gmail.com', '1603282540.jpg', '2020-10-21 10:02:54', '2020-10-21 10:15:40'),
(4, 'clothes factory', 'مصنع ملابس', 'mr Ahmed', 'test test test test', 'شارع النصر عمارة كشرى التحرير الدور الخامس', '01028278989', '0128786878', 'clothes@gmail.com', '1603283224.jpg', '2020-10-21 10:14:21', '2020-10-21 10:27:04'),
(5, 'BMW', 'BMW', 'mr jone', 'test test test', 'BMW', '0119027987', '09786157578', 'BMW@gmail.com', '1603283068.png', '2020-10-21 10:24:28', '2020-10-21 10:24:28'),
(6, 'mercedes', 'مرسيدي', 'mercedes', 'test test test', 'mercedes', '0198210397987', '0197298287897', 'mercedes@gmail.com', '1603283352.jpg', '2020-10-21 10:29:12', '2020-10-21 10:29:12'),
(7, 'woman', 'رجال', 'mr emad', 'test test test', 'شارع الجمهوريه عمارة رقم 2 امام الباب الرئيسي لمستشفي الجامعة الدور الثاني العلوي', '0189127981729', '017291287827898', 'woman@gmail.com', '1603283613.jpg', '2020-10-21 10:30:27', '2020-10-21 10:33:33'),
(8, 'BMW', 'BMW', 'BMW', 'test test test', 'Egypt', '09182390187239', '9027317327097', 'bmw2@gmail.com', '1603283660.png', '2020-10-21 10:34:20', '2020-10-21 10:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_01_000000_add_locale_column', 1),
(5, '2020_10_10_205954_create_companies_table', 1),
(6, '2020_10_10_210118_create_categories_table', 1),
(7, '2020_10_10_210119_create_products_table', 1),
(8, '2020_10_10_210135_create_prices_table', 1),
(9, '2020_10_10_210211_create_admins_table', 1),
(10, '2020_10_10_210228_create_comments_table', 1),
(11, '2020_10_12_075328_create_tags_table', 1),
(12, '2020_10_13_153741_create_company_categories_table', 1),
(13, '2017_08_24_000000_create_settings_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `from` double NOT NULL,
  `to` double NOT NULL,
  `price` double NOT NULL,
  `discount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `product_id`, `from`, `to`, `price`, `discount`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 5, 80, 10, '2020-10-16 12:33:07', '2020-10-16 12:33:07'),
(3, 3, 1, 10, 100, 10, NULL, NULL),
(4, 4, 1, 4, 20, 2, NULL, NULL),
(5, 5, 1, 7, 200, 200, '2020-10-21 14:29:36', '2020-08-29 19:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_pay_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_quantity` int(11) NOT NULL,
  `img_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `company_id`, `category_id`, `name`, `prod_desc`, `shipping_pay_desc`, `min_quantity`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`, `img_7`, `img_8`, `img_9`, `img_10`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 'ahmed gamal', 'afd', 'asd', 12, '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', NULL, NULL, NULL, NULL, NULL, '2020-10-16 12:33:07', '2020-10-16 12:33:14'),
(3, 2, 2, 'Shirt', 'test test test', 'test test test', 10, '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '2020-10-21 14:29:36', NULL),
(4, 3, 1, 'Shoe', 'test test test', 'test test test', 5, '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '2020-10-21 14:29:36', NULL),
(5, 2, 2, 'short', 'test test test ', 'test test test ', 10, '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', '1603282540.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` enum('A','C') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'C',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `name`, `address`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `locale`) VALUES
(1, 'C', 'ahmed Magdi', 'el haram', '01141730359', 'ahmedmagdi@gmail.com', NULL, '$2y$10$XjeRiI/R1Wzcw0a0Admc/uBfhzqwj9H8xwtuo9hutGdfSBBK.hIHK', 'ew0qcnHi4x047orvudoW2XX8v6DoIVIF99Aau4dXctsDSqeGBLVn9DtEbk2U', '2020-10-15 15:12:38', '2020-10-15 15:12:38', 'en'),
(2, 'A', 'Ahmed Hammad', 'Maadi', '01141730359', 'ahmedhammad@gmail.com', NULL, '$2y$10$XjeRiI/R1Wzcw0a0Admc/uBfhzqwj9H8xwtuo9hutGdfSBBK.hIHK', 'FUdnRsYWzYP7nq5F3wWLldtU2upLMUJF26cPyH9Cd0HcyIN8FwV8iaOH4nI8', NULL, NULL, 'en');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_company`
--
ALTER TABLE `category_company`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_company_category_id_company_id_unique` (`category_id`,`company_id`),
  ADD KEY `category_company_company_id_foreign` (`company_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_product_id_foreign` (`product_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_phone_1_unique` (`phone_1`),
  ADD UNIQUE KEY `companies_email_unique` (`email`),
  ADD UNIQUE KEY `companies_phone_2_unique` (`phone_2`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prices_product_id_foreign` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_company_id_foreign` (`company_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_tag_product_id_tag_id_unique` (`product_id`,`tag_id`),
  ADD KEY `product_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_key_index` (`key`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_company`
--
ALTER TABLE `category_company`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_company`
--
ALTER TABLE `category_company`
  ADD CONSTRAINT `category_company_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_company_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD CONSTRAINT `product_tag_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
