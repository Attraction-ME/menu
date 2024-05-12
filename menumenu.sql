-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2024 at 12:24 AM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menumenu`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'General', '1697633412.jpg', '2023-10-18 19:50:12', '2023-10-23 20:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `shop_id`, `created_at`, `updated_at`) VALUES
(35, 'Barger', '1707223811.png', 10, '2024-02-06 10:50:12', '2024-02-06 10:50:12'),
(36, 'Pizza', '1707223830.png', 10, '2024-02-06 10:50:30', '2024-02-06 10:50:30'),
(37, 'FRENCH FRY', '1707223871.png', 10, '2024-02-06 10:51:11', '2024-02-06 10:51:11'),
(38, 'PASTA', '1707223902.png', 10, '2024-02-06 10:51:42', '2024-02-06 10:51:42'),
(69, 'Chicken Sandwiches', '1707658989.jpg', 13, '2024-02-11 18:09:59', '2024-02-11 20:43:09'),
(74, 'Fattah', '1707658563.jpg', 13, '2024-02-11 19:01:47', '2024-02-11 20:36:03'),
(76, 'Side Dishes', '1707658744.jpg', 13, '2024-02-11 19:04:50', '2024-02-11 20:39:04'),
(77, 'Special Boxes', '1707658902.jpg', 13, '2024-02-11 19:07:17', '2024-02-11 20:41:42'),
(79, 'Beef Sandwiches', '1707659069.jpg', 13, '2024-02-11 19:56:51', '2024-02-11 20:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instegram` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'EGP', '2024-01-01 12:27:38', '2023-12-31 22:00:00'),
(2, 'USD', '2024-01-01 12:28:17', '2023-12-31 22:00:00'),
(4, 'BHD', '2024-02-11 17:42:50', '2024-02-11 17:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` double DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `phone`, `address`) VALUES
(1, 'One', 'one@gmail.com', '$2y$10$0WfqidObn5qtDltBVa5beuyJW1SjdrwYTAjp16.6rtsEIIOpRQRbq', '2023-10-24 14:10:08', '2023-10-24 14:10:08', 105213975, 'Egypt'),
(2, 'Two', 'two@gmail.com', '$2y$10$rAsra9C5GR3jsAR6sZgxS.Ng6g2S78KvKpEV9phZvcpM2vygBgT4m', '2023-10-24 14:10:08', '2023-10-24 14:10:08', 111395625, 'Mansoura'),
(3, 'Three', 'three@gmail.com', '$2y$10$Us11tdyhd5noZovyzOpOxeZV8kB.735wgDRNseulWlfpfFUj2Oh82', '2023-10-25 07:11:40', '2023-10-25 07:11:40', 123695748, 'DK'),
(4, 'Mohamed noor', 'moh.salam.noor@gmail.com', '$2y$10$ZCRUdLicBGVnj3bm7MmvduXdtvtBEe5AIgs0obpfgQoiFHqBWhSSe', '2023-10-25 20:01:36', '2023-10-25 20:01:36', NULL, NULL),
(5, 'amora', 'amora@email.com', '$2y$10$5.P3CkgadNEQh0Qa3J2A/e/nSJqP4rLh6jbtD8Jp/FCElqnqsocYu', '2023-10-29 15:39:02', '2023-10-29 15:39:02', NULL, NULL),
(6, 'Test', 'Test@gmail.com', '$2y$10$jtZVzgkbDEjYpGOMpFc2OO23Bns2TF6RXkT7vryFvd6RVCY/6qRWO', '2024-01-09 18:45:20', '2024-01-09 18:45:20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dollars`
--

CREATE TABLE `dollars` (
  `id` bigint(20) NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(684, '170722449430.png', 673, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(685, '170722449536.png', 673, '2024-02-06 11:01:35', '2024-02-06 11:01:35'),
(686, '170722449510.png', 673, '2024-02-06 11:01:35', '2024-02-06 11:01:35'),
(687, '170739750340.png', 673, '2024-02-08 20:05:03', '2024-02-08 20:05:03'),
(688, '170765455639.jpg', 690, '2024-02-11 19:29:16', '2024-02-11 19:29:16'),
(689, '170765467911.jpg', 691, '2024-02-11 19:31:19', '2024-02-11 19:31:19'),
(690, '17076547757.jpg', 692, '2024-02-11 19:32:55', '2024-02-11 19:32:55'),
(691, '17076548751.jpg', 693, '2024-02-11 19:34:35', '2024-02-11 19:34:35'),
(692, '170765509133.jpg', 694, '2024-02-11 19:38:11', '2024-02-11 19:38:11'),
(693, '170765525620.jpg', 695, '2024-02-11 19:40:56', '2024-02-11 19:40:56'),
(694, '170765534446.jpg', 696, '2024-02-11 19:42:24', '2024-02-11 19:42:24'),
(695, '170765544250.jpg', 697, '2024-02-11 19:44:02', '2024-02-11 19:44:02'),
(696, '170765555920.jpg', 698, '2024-02-11 19:45:59', '2024-02-11 19:45:59'),
(697, '170765563812.jpg', 699, '2024-02-11 19:47:18', '2024-02-11 19:47:18'),
(698, '170765578334.jpg', 700, '2024-02-11 19:49:43', '2024-02-11 19:49:43'),
(699, '170765587412.jpg', 701, '2024-02-11 19:51:14', '2024-02-11 19:51:14'),
(700, '170765597310.jpg', 702, '2024-02-11 19:52:53', '2024-02-11 19:52:53'),
(701, '170765605146.jpg', 703, '2024-02-11 19:54:11', '2024-02-11 19:54:11'),
(702, '170765642017.jpg', 704, '2024-02-11 20:00:20', '2024-02-11 20:00:20'),
(703, '17076565639.jpg', 705, '2024-02-11 20:02:43', '2024-02-11 20:02:43'),
(704, '170765666033.jpg', 706, '2024-02-11 20:04:20', '2024-02-11 20:04:20'),
(705, '170765674621.jpg', 707, '2024-02-11 20:05:46', '2024-02-11 20:05:46'),
(706, '170765683424.jpg', 708, '2024-02-11 20:07:14', '2024-02-11 20:07:14'),
(707, '170765692346.jpg', 709, '2024-02-11 20:08:43', '2024-02-11 20:08:43'),
(708, '170765700119.jpg', 710, '2024-02-11 20:10:01', '2024-02-11 20:10:01'),
(709, '170765709133.jpg', 711, '2024-02-11 20:11:31', '2024-02-11 20:11:31'),
(710, '17076576154.jpg', 712, '2024-02-11 20:20:15', '2024-02-11 20:20:15'),
(711, '170765772127.jpg', 713, '2024-02-11 20:22:01', '2024-02-11 20:22:01'),
(712, '17098210967.jpg', 714, '2024-03-07 21:18:16', '2024-03-07 21:18:16'),
(713, '170982128310.jpg', 715, '2024-03-07 21:21:23', '2024-03-07 21:21:23'),
(714, '170982152393.jpg', 715, '2024-03-07 21:25:23', '2024-03-07 21:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `labels`
--

CREATE TABLE `labels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2023_01_16_093957_create_currencies_table', 1),
(2, '2024_01_20_200542_create_tables_table', 2),
(3, '2024_01_29_095933_create_waiters_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `table_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `total` double NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `waiter_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `table_id`, `status`, `total`, `shop_id`, `waiter_id`, `created_at`, `updated_at`) VALUES
(33, 10, 1, 89, 13, 3, '2024-04-21 16:17:21', '2024-04-21 16:37:41'),
(34, 10, 1, 178, 13, 3, '2024-04-21 16:20:14', '2024-04-21 16:20:45'),
(35, 10, 1, 355, 13, 3, '2024-04-22 16:01:46', '2024-04-22 16:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` double NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
(47, 34, 690, 2, 89, 178, '2024-04-21 09:20:45', '2024-04-21 16:20:45'),
(48, 34, 691, 1, 89, 89, '2024-04-21 16:20:14', '2024-04-21 16:20:14'),
(49, 34, 692, 1, 74, 74, '2024-04-21 16:20:14', '2024-04-21 16:20:14'),
(59, 33, 691, 1, 89, 89, '2024-04-21 16:37:41', '2024-04-21 16:37:41'),
(60, 35, 692, 1, 74, 74, '2024-04-22 09:02:22', '2024-04-22 16:02:22'),
(61, 35, 694, 1, 89, 89, '2024-04-22 09:02:22', '2024-04-22 16:02:22'),
(62, 35, 712, 1, 96, 96, '2024-04-22 09:02:22', '2024-04-22 16:02:22'),
(63, 35, 713, 1, 96, 96, '2024-04-22 09:02:22', '2024-04-22 16:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `finalprice` decimal(10,2) NOT NULL,
  `sale` double DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image_temp` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `finalprice`, `sale`, `details`, `image_temp`, `category_id`, `shop_id`, `created_at`, `updated_at`) VALUES
(673, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-08 20:05:03'),
(674, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(675, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(676, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(677, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(678, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(679, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(680, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(681, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(682, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(683, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(684, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(685, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(686, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(687, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(688, 'pizaa', 150.00, 142.50, 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 11:01:34', '2024-02-06 11:01:34'),
(690, 'Big Chicken Sandwich', 89.00, 89.00, NULL, '<p>Chicken slices with lettuce, onion slices, tomatoes, topped with Texas sauce</p>', '1707654556.jpg', 69, 13, '2024-02-11 19:29:16', '2024-02-11 19:29:16'),
(691, 'Chicken Roll Sandwich', 89.00, 89.00, NULL, '<p>Chicken, pickled cucumber, garlic dip</p>', '1707654679.jpg', 69, 13, '2024-02-11 19:31:19', '2024-02-11 19:31:19'),
(692, 'Crispy Ranch Sandwich', 74.00, 74.00, NULL, '<p>Crispy chicken piece with lettuce, tomatoes, topped with ranch and cheddar cheese</p>', '1707654775.jpg', 69, 13, '2024-02-11 19:32:55', '2024-02-11 19:32:55'),
(693, 'Crunchy Cheese Chicken Sandwich', 100.00, 100.00, NULL, '<p>2 mozzarella sticks pieces, chicken, lettuce, tomato, cheese slice, ranch sauce</p>', '1707654875.jpg', 69, 13, '2024-02-11 19:34:35', '2024-02-11 19:34:35'),
(694, 'Golden Roll Sandwich', 89.00, 89.00, NULL, '<p>Enjoy our golden panne, lettuce, tomatoes, covered with ranch sauce</p>', '1707655091.jpg', 69, 13, '2024-02-11 19:38:11', '2024-02-11 19:38:11'),
(695, 'Original Chicken Shawerma Sandwich', 45.00, 45.00, NULL, '<p>Chicken, pickled cucumber, garlic dip</p>', '1707655256.jpg', 69, 13, '2024-02-11 19:40:56', '2024-02-11 19:40:56'),
(696, 'Royal Chicken Sandwich', 112.00, 112.00, NULL, '<p>Chicken Shawerma with tomatoes, lettuce and fresh onion slices covered with delicious garlic dip sauce</p>', '1707655344.jpg', 69, 13, '2024-02-11 19:42:24', '2024-02-11 19:42:24'),
(697, 'Super Chicken Sandwich', 89.00, 89.00, NULL, '<p>Chicken mixed with grilled peppers and onions topped with our special cheese and ranch sauce</p>', '1707655442.jpg', 69, 13, '2024-02-11 19:44:02', '2024-02-11 19:44:02'),
(698, 'Chicken Fattah', 74.00, 74.00, NULL, '<p>Chicken , rice, croutons, sauce, garlic dip</p>', '1707655559.jpg', 74, 13, '2024-02-11 19:45:59', '2024-02-11 19:45:59'),
(699, 'Doner Fattah', 74.00, 74.00, NULL, '<p>Doner, rice, croutons, sauce, garlic dip</p>', '1707655638.jpg', 69, 13, '2024-02-11 19:47:18', '2024-02-11 19:47:18'),
(700, 'French Fries', 30.00, 30.00, NULL, '<p>French fries with ketchup</p>', '1707655783.jpg', 76, 13, '2024-02-11 19:49:43', '2024-02-11 19:49:43'),
(701, 'German Fries', 40.00, 40.00, NULL, '<p>Fries topped with cheddar cheese, jalapeno</p>', '1707655874.jpg', 76, 13, '2024-02-11 19:51:14', '2024-02-11 19:51:14'),
(702, 'Steak Fries', 40.00, 40.00, NULL, '<p>Crispy fries with ranch sauce</p>', '1707655973.jpg', 76, 13, '2024-02-11 19:52:53', '2024-02-11 19:52:53'),
(703, 'Cheddar Steak Fries', 48.00, 48.00, NULL, '<p>Crispy fries covered with cheddar cheese sauce</p>', '1707656051.jpg', 76, 13, '2024-02-11 19:54:11', '2024-02-11 19:54:11'),
(704, 'Royal Doner Sandwich', 112.00, 112.00, NULL, '<p>Doner kebab slices with tomatoes, lettuce, fresh onion slices covered with delicious ranch sauce<br>&nbsp;</p>', '1707656420.jpg', 79, 13, '2024-02-11 20:00:20', '2024-02-11 20:00:20'),
(705, 'Crunchy Cheese Doner Sandwich', 100.00, 100.00, NULL, '<p>Doner kebab slices, lettuce, tomato, cheese slice, 2 pieces of mozzarella cheese sticks and ranch sauce</p>', '1707656563.jpg', 79, 13, '2024-02-11 20:02:43', '2024-02-11 20:02:43'),
(706, 'Big Doner Sandwich', 89.00, 89.00, NULL, '<p>Enjoy our special Doner kebab taste with lettuce, onion, tomatoes and Texas sauce</p>', '1707656660.jpg', 79, 13, '2024-02-11 20:04:20', '2024-02-11 20:04:20'),
(707, 'Super Doner Sandwich', 89.00, 89.00, NULL, '<p>Doner kebab mixed with green peppers and grilled onions topped with our special cheese and ranch sauce</p>', '1707656746.jpg', 79, 13, '2024-02-11 20:05:46', '2024-02-11 20:05:46'),
(708, 'Classic Burger', 74.00, 74.00, NULL, '<p>Beef burger patty with tomato slices, lettuce, onions and pickled cucumber pieces topped with Texas</p>', '1707656834.jpg', 69, 13, '2024-02-11 20:07:14', '2024-02-11 20:07:14'),
(709, 'Burger Doner', 99.00, 99.00, NULL, '<p>A piece of beef burger with Doner slices, tomatoes, lettuce, onions and pickled cucumbers, covered with Texas sauce</p>', '1707656923.jpg', 79, 13, '2024-02-11 20:08:43', '2024-02-11 20:08:43'),
(710, 'Roll Doner Sandwich', 89.00, 89.00, NULL, '<p>Make it roll! enjoy your Doner kebab with lettuce, tomatoes, and red cabbage, ranch sauce</p>', '1707657001.jpg', 79, 13, '2024-02-11 20:10:01', '2024-02-11 20:10:01'),
(711, 'Original Doner Sandwich', 45.00, 45.00, NULL, '<p>The original taste of Doner kebab topped with ranch sauce</p>', '1707657091.jpg', 79, 13, '2024-02-11 20:11:31', '2024-02-11 20:11:31'),
(712, 'Doner Box', 96.00, 96.00, NULL, '<p>Mix Doner kebab slices, fries, served with lettuce, covered with ranch sauce</p>', '1707657615.jpg', 77, 13, '2024-02-11 20:20:15', '2024-02-11 20:20:15'),
(713, 'Berlin Fried Box', 96.00, 96.00, NULL, '<p>2 Berlin chicken pieces with fries, served with lettuce, topped with cheese sauce and ranch sauce</p>', '1707657721.jpg', 77, 13, '2024-02-11 20:22:01', '2024-02-11 20:22:01'),
(714, 'Coleslaw', 33.00, 33.00, NULL, '<p>Coleslaw</p>', '1709821096.jpg', 76, 13, '2024-03-07 21:18:16', '2024-03-07 21:18:16'),
(715, 'Green Salad', 33.00, 33.00, NULL, '<p><strong>Green Salad</strong></p>', '1709821523.jpg', 76, 13, '2024-03-07 21:21:23', '2024-03-07 21:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `ammount` double NOT NULL,
  `subtotal` double NOT NULL,
  `purchase_invoice_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_invoices`
--

CREATE TABLE `purchase_invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discount` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `note` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale_details`
--

CREATE TABLE `sale_details` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `quantity` double NOT NULL,
  `subtotal` double NOT NULL,
  `sale_invoice_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sale_details`
--

INSERT INTO `sale_details` (`id`, `product_id`, `price`, `quantity`, `subtotal`, `sale_invoice_id`, `created_at`, `updated_at`) VALUES
(7, 18, 200, 1, 200, 4, '2023-11-01 20:40:35', '2023-11-01 20:40:35'),
(8, 3, 110, 2, 220, 4, '2023-11-01 20:40:35', '2023-11-01 20:40:35'),
(9, 21, 169, 3, 507, 4, '2023-11-01 20:40:35', '2023-11-01 20:40:35'),
(10, 5, 80, 1, 80, 5, '2023-11-01 21:14:40', '2023-11-01 21:14:40'),
(11, 6, 50, 1, 50, 5, '2023-11-01 21:14:40', '2023-11-01 21:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `sale_invoices`
--

CREATE TABLE `sale_invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `discount` double NOT NULL DEFAULT 0,
  `total` double NOT NULL,
  `subtotal` double NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sale_invoices`
--

INSERT INTO `sale_invoices` (`id`, `customer_id`, `order_id`, `shop_id`, `discount`, `total`, `subtotal`, `created_at`, `updated_at`) VALUES
(4, 1, 5, 4, 0, 927, 927, '2023-11-01 20:40:35', '2023-11-01 20:40:35'),
(5, 1, 4, 4, 0, 130, 130, '2023-11-01 21:14:40', '2023-11-01 21:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `set_attributes`
--

CREATE TABLE `set_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_attribute_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight` double DEFAULT NULL,
  `length` double DEFAULT NULL,
  `width` double DEFAULT NULL,
  `height` double DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `currency_id` bigint(20) UNSIGNED NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `slug`, `name`, `owner`, `address`, `phone`, `details`, `logo`, `user_id`, `currency_id`, `latitude`, `longitude`, `cover`, `created_at`, `updated_at`) VALUES
(10, 'burgar', 'burgar', 'Ahmed', 'mansoura', '010058694758', '<p><strong>Burgar Food</strong></p>', '1705802062.svg', 36, 1, '31.027582095896687', '31.372589993331626', '1705779315.png', '2024-01-20 17:35:15', '2024-02-11 20:48:50'),
(13, 'doner-konner', 'Doner Konner', 'Doner Konner', 'Mansoura - Al Geesh St.', '+201010361144', '<p>Doner Konner</p>', '1707648620.jpg', 42, 1, '31.056255', '31.40227', '170764862049.jpg', '2024-02-11 17:50:20', '2024-02-11 17:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(5, '1699280793.png', '2023-10-24 20:20:21', '2023-11-06 21:26:33'),
(7, '1699280808.png', '2023-10-25 19:44:59', '2023-11-06 21:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_attributes`
--

CREATE TABLE `sub_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` double DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` text DEFAULT NULL,
  `qrcode` varchar(255) DEFAULT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`, `link`, `qrcode`, `shop_id`, `created_at`, `updated_at`) VALUES
(10, '01', 'https://ordarme.com/tables/show/10', '1710675731_10.svg', 13, '2024-03-17 18:42:11', '2024-03-17 18:42:11'),
(11, '02', 'https://ordarme.com/tables/show/11', '1712054369_11.svg', 13, '2024-04-02 17:39:29', '2024-04-02 17:39:29'),
(12, '03', 'https://ordarme.com/tables/show/12', '1712054375_12.svg', 13, '2024-04-02 17:39:35', '2024-04-02 17:39:35'),
(13, '01', 'https://ordarme.com/tables/show/13', '1712054375_12.svg', 10, '2024-04-02 17:39:35', '2024-04-02 17:39:35'),
(14, '04', 'https://ordarme.com/tables/show/14', '1715239433_14.svg', 13, '2024-05-09 14:23:53', '2024-05-09 14:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `table_waiter`
--

CREATE TABLE `table_waiter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table_id` bigint(20) UNSIGNED NOT NULL,
  `waiter_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_waiter`
--

INSERT INTO `table_waiter` (`id`, `table_id`, `waiter_id`, `created_at`, `updated_at`) VALUES
(1, 10, 3, '2024-04-02 10:39:50', '2024-04-02 10:39:50'),
(9, 12, 3, '2024-04-16 14:36:54', '2024-04-16 14:36:54'),
(10, 11, 4, '2024-04-16 14:40:36', '2024-04-16 14:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Attraction', 'manager@techsolutionstuff.com', NULL, 2, '$2y$10$IZsGRDuM0LcEt4bXvghHf.13XMVJCvJpPl/GD161bW6FrdZObP/2u', NULL, '2023-10-18 18:06:19', '2023-10-18 18:06:19'),
(36, 'Ahmed', 'Test@gmail.com', NULL, 1, '$2y$10$VAoIoLQ8icBfK7fLNTl3AeiIEImepOkWs6RQVDKhyXCBUhBsdR3LO', NULL, '2024-01-20 17:35:15', '2024-02-11 20:48:50'),
(39, 'ahmed', 'waiter@gmail.com', NULL, 3, '$2y$10$9pJfGTOCGn692uTl5LQ5qex9iDH6UnY9yL0Zic60SdCBxVBCVzf8S', NULL, '2024-02-05 10:18:46', '2024-02-05 10:18:46'),
(42, 'Doner Konner', 'doner.konner@gmail.com', NULL, 1, '$2y$10$0PoS2I8kDjzzuTEtnMBAke7yZ/LAqZkKouZGEF70yZpTyl96P6B3e', NULL, '2024-02-11 17:50:20', '2024-02-11 17:50:20'),
(43, 'Ahmed Noor', 'ahmed@attractionme.net', NULL, 3, '$2y$10$FqLtXk5r0kGmHM1e6LryCexwNnI8YriuKZbuMvIrMxCLUcv3t7T4m', NULL, '2024-02-11 20:50:29', '2024-02-11 20:50:29'),
(44, 'Mohamed Noor', 'mohamed@attractionme.net', NULL, 3, '$2y$10$67s0XeZFSl7OYCf98qmZteVHoEBWX/3fYtc6/A5FdAnXF9Laql1WG', NULL, '2024-02-11 20:51:05', '2024-02-11 20:51:05'),
(45, 'Noor Mohamed', 'noor@attractionme.net', NULL, 3, '$2y$10$OlqopKEo6sbTn/rPhRhdGeFcZUh1Y/J2k2Gy5ZcPtNYYwXdS2QTOm', NULL, '2024-02-11 20:51:27', '2024-02-11 20:51:27'),
(47, 'mohamed', 'mohamed@gmail.com', NULL, 3, '$2y$10$2DfeAVo7n1nX8Y/qtlKvP.Diyd5mTFqw7lf/ZArUg8fMa5IZtNo1S', NULL, '2024-04-21 16:41:38', '2024-04-21 16:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `waiters`
--

CREATE TABLE `waiters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `waiters`
--

INSERT INTO `waiters` (`id`, `name`, `shop_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'ahmed', 10, 39, '2024-02-05 10:18:46', '2024-02-05 10:18:46'),
(3, 'Ahmed Noor', 13, 43, '2024-02-11 20:50:29', '2024-02-11 20:50:29'),
(4, 'Mohamed Noor', 13, 44, '2024-02-11 20:51:05', '2024-02-11 20:51:05'),
(5, 'Noor Mohamed', 13, 45, '2024-02-11 20:51:27', '2024-02-11 20:51:27'),
(7, 'mohamed', 13, 47, '2024-04-21 16:41:38', '2024-04-21 16:41:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_shop_id_foreign` (`shop_id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dollars`
--
ALTER TABLE `dollars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `labels`
--
ALTER TABLE `labels`
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
  ADD KEY `shop_id` (`shop_id`),
  ADD KEY `table_id` (`table_id`),
  ADD KEY `waiter_id` (`waiter_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cat_id_foreign` (`category_id`),
  ADD KEY `products_shop_id_foreign` (`shop_id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_details_ibfk_1` (`purchase_invoice_id`) USING BTREE;

--
-- Indexes for table `purchase_invoices`
--
ALTER TABLE `purchase_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `puraches_invoices_ibfk_1` (`supplier_id`);

--
-- Indexes for table `sale_details`
--
ALTER TABLE `sale_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_id` (`sale_invoice_id`),
  ADD KEY `sale_details_ibfk_2` (`product_id`);

--
-- Indexes for table `sale_invoices`
--
ALTER TABLE `sale_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_invoices_customer_id_foreign` (`customer_id`),
  ADD KEY `sale_invoices_order_id_foreign` (`order_id`),
  ADD KEY `sale_invoices_shop_id_foreign` (`shop_id`);

--
-- Indexes for table `set_attributes`
--
ALTER TABLE `set_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_attributes_product_id_foreign` (`product_id`),
  ADD KEY `set_attributes_sub_attribute_id_foreign` (`sub_attribute_id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_product_id_foreign` (`product_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shops_user_id_foreign` (`user_id`),
  ADD KEY `currency_id` (`currency_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_attributes`
--
ALTER TABLE `sub_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_attributes_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tables_shop_id_foreign` (`shop_id`);

--
-- Indexes for table `table_waiter`
--
ALTER TABLE `table_waiter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_waiters_table_id_foreign` (`table_id`),
  ADD KEY `table_waiters_waiter_id_foreign` (`waiter_id`);

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
-- Indexes for table `waiters`
--
ALTER TABLE `waiters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `waiters_shop_id_foreign` (`shop_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dollars`
--
ALTER TABLE `dollars`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=715;

--
-- AUTO_INCREMENT for table `labels`
--
ALTER TABLE `labels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=716;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_invoices`
--
ALTER TABLE `purchase_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_details`
--
ALTER TABLE `sale_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sale_invoices`
--
ALTER TABLE `sale_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `set_attributes`
--
ALTER TABLE `set_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_attributes`
--
ALTER TABLE `sub_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `table_waiter`
--
ALTER TABLE `table_waiter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `waiters`
--
ALTER TABLE `waiters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dollars`
--
ALTER TABLE `dollars`
  ADD CONSTRAINT `dollars_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`waiter_id`) REFERENCES `waiters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shops_ibfk_2` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tables`
--
ALTER TABLE `tables`
  ADD CONSTRAINT `tables_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `table_waiter`
--
ALTER TABLE `table_waiter`
  ADD CONSTRAINT `table_waiters_table_id_foreign` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `table_waiters_waiter_id_foreign` FOREIGN KEY (`waiter_id`) REFERENCES `waiters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `waiters`
--
ALTER TABLE `waiters`
  ADD CONSTRAINT `waiters_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `waiters_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
