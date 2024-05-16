/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `abouts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `attributes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_shop_id_foreign` (`shop_id`),
  CONSTRAINT `categories_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `collections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instegram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `currencies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `customers` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` double DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

CREATE TABLE `dollars` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `shop_id` bigint unsigned NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shop_id` (`shop_id`),
  CONSTRAINT `dollars_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `extra_options` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_product_id_foreign` (`product_id`),
  CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=716 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `labels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `main_options` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `order_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `quantity` double NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

CREATE TABLE `orders` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `table_id` bigint unsigned NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `total` double NOT NULL,
  `shop_id` bigint unsigned NOT NULL,
  `waiter_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `shop_id` (`shop_id`),
  KEY `table_id` (`table_id`),
  KEY `waiter_id` (`waiter_id`),
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`waiter_id`) REFERENCES `waiters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

CREATE TABLE `owners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `finalprice` decimal(10,2) NOT NULL,
  `sale` double DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `image_temp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `shop_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `products_cat_id_foreign` (`category_id`),
  KEY `products_shop_id_foreign` (`shop_id`),
  CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `products_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=719 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `purchase_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `ammount` double NOT NULL,
  `subtotal` double NOT NULL,
  `purchase_invoice_id` bigint unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `purchase_details_ibfk_1` (`purchase_invoice_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `purchase_invoices` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `discount` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `supplier_id` bigint unsigned NOT NULL,
  `note` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `puraches_invoices_ibfk_1` (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `sale_details` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `price` double NOT NULL,
  `quantity` double NOT NULL,
  `subtotal` double NOT NULL,
  `sale_invoice_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `invoice_id` (`sale_invoice_id`),
  KEY `sale_details_ibfk_2` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

CREATE TABLE `sale_invoices` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint NOT NULL,
  `order_id` bigint NOT NULL,
  `shop_id` bigint unsigned NOT NULL,
  `discount` double NOT NULL DEFAULT '0',
  `total` double NOT NULL,
  `subtotal` double NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `sale_invoices_customer_id_foreign` (`customer_id`),
  KEY `sale_invoices_order_id_foreign` (`order_id`),
  KEY `sale_invoices_shop_id_foreign` (`shop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

CREATE TABLE `set_attributes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sub_attribute_id` bigint unsigned DEFAULT NULL,
  `product_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `set_attributes_product_id_foreign` (`product_id`),
  KEY `set_attributes_sub_attribute_id_foreign` (`sub_attribute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `shippings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `weight` double DEFAULT NULL,
  `length` double DEFAULT NULL,
  `width` double DEFAULT NULL,
  `height` double DEFAULT NULL,
  `product_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shippings_product_id_foreign` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `shops` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `currency_id` bigint unsigned NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `shops_user_id_foreign` (`user_id`),
  KEY `currency_id` (`currency_id`),
  CONSTRAINT `shops_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `shops_ibfk_2` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `stocks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `sub_attributes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sub_attributes_attribute_id_foreign` (`attribute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `suppliers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` double DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `table_waiter` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `table_id` bigint unsigned NOT NULL,
  `waiter_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `table_waiters_table_id_foreign` (`table_id`),
  KEY `table_waiters_waiter_id_foreign` (`waiter_id`),
  CONSTRAINT `table_waiters_table_id_foreign` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `table_waiters_waiter_id_foreign` FOREIGN KEY (`waiter_id`) REFERENCES `waiters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `tables` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci,
  `qrcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tables_shop_id_foreign` (`shop_id`),
  CONSTRAINT `tables_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `type` tinyint NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `waiters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `waiters_shop_id_foreign` (`shop_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `waiters_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `waiters_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;







INSERT INTO `brands` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'General', '1697633412.jpg', '2023-10-18 22:50:12', '2023-10-23 23:25:22');


INSERT INTO `categories` (`id`, `name`, `image`, `shop_id`, `created_at`, `updated_at`) VALUES
(35, 'Barger', '1707223811.png', 10, '2024-02-06 13:50:12', '2024-02-06 13:50:12');
INSERT INTO `categories` (`id`, `name`, `image`, `shop_id`, `created_at`, `updated_at`) VALUES
(36, 'Pizza', '1707223830.png', 10, '2024-02-06 13:50:30', '2024-02-06 13:50:30');
INSERT INTO `categories` (`id`, `name`, `image`, `shop_id`, `created_at`, `updated_at`) VALUES
(37, 'FRENCH FRY', '1707223871.png', 10, '2024-02-06 13:51:11', '2024-02-06 13:51:11');
INSERT INTO `categories` (`id`, `name`, `image`, `shop_id`, `created_at`, `updated_at`) VALUES
(38, 'PASTA', '1707223902.png', 10, '2024-02-06 13:51:42', '2024-02-06 13:51:42'),
(69, 'Chicken Sandwiches', '1707658989.jpg', 13, '2024-02-11 21:09:59', '2024-02-11 23:43:09'),
(74, 'Fattah', '1707658563.jpg', 13, '2024-02-11 22:01:47', '2024-02-11 23:36:03'),
(76, 'Side Dishes', '1707658744.jpg', 13, '2024-02-11 22:04:50', '2024-02-11 23:39:04'),
(77, 'Special Boxes', '1707658902.jpg', 13, '2024-02-11 22:07:17', '2024-02-11 23:41:42'),
(79, 'Beef Sandwiches', '1707659069.jpg', 13, '2024-02-11 22:56:51', '2024-02-11 23:44:29');





INSERT INTO `currencies` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'EGP', '2024-01-01 15:27:38', '2024-01-01 01:00:00');
INSERT INTO `currencies` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'USD', '2024-01-01 15:28:17', '2024-01-01 01:00:00');
INSERT INTO `currencies` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'BHD', '2024-02-11 20:42:50', '2024-02-11 20:42:50');

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `phone`, `address`) VALUES
(1, 'One', 'one@gmail.com', '$2y$10$0WfqidObn5qtDltBVa5beuyJW1SjdrwYTAjp16.6rtsEIIOpRQRbq', '2023-10-24 17:10:08', '2023-10-24 17:10:08', 105213975, 'Egypt');
INSERT INTO `customers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `phone`, `address`) VALUES
(2, 'Two', 'two@gmail.com', '$2y$10$rAsra9C5GR3jsAR6sZgxS.Ng6g2S78KvKpEV9phZvcpM2vygBgT4m', '2023-10-24 17:10:08', '2023-10-24 17:10:08', 111395625, 'Mansoura');
INSERT INTO `customers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `phone`, `address`) VALUES
(3, 'Three', 'three@gmail.com', '$2y$10$Us11tdyhd5noZovyzOpOxeZV8kB.735wgDRNseulWlfpfFUj2Oh82', '2023-10-25 10:11:40', '2023-10-25 10:11:40', 123695748, 'DK');
INSERT INTO `customers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `phone`, `address`) VALUES
(4, 'Mohamed noor', 'moh.salam.noor@gmail.com', '$2y$10$ZCRUdLicBGVnj3bm7MmvduXdtvtBEe5AIgs0obpfgQoiFHqBWhSSe', '2023-10-25 23:01:36', '2023-10-25 23:01:36', NULL, NULL),
(5, 'amora', 'amora@email.com', '$2y$10$5.P3CkgadNEQh0Qa3J2A/e/nSJqP4rLh6jbtD8Jp/FCElqnqsocYu', '2023-10-29 18:39:02', '2023-10-29 18:39:02', NULL, NULL),
(6, 'Test', 'Test@gmail.com', '$2y$10$jtZVzgkbDEjYpGOMpFc2OO23Bns2TF6RXkT7vryFvd6RVCY/6qRWO', '2024-01-09 21:45:20', '2024-01-09 21:45:20', NULL, NULL);



INSERT INTO `extra_options` (`id`, `product_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(2, 690, 'extra ', 130, '2024-05-14 06:46:37', '2024-05-14 07:25:51');
INSERT INTO `extra_options` (`id`, `product_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(3, 690, 'extra 3 ', 14, '2024-05-14 06:46:37', '2024-05-14 07:25:51');
INSERT INTO `extra_options` (`id`, `product_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(4, 690, 'extra 4', 15, '2024-05-14 06:46:37', '2024-05-14 07:25:51');
INSERT INTO `extra_options` (`id`, `product_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(5, 690, 'extra 5', 16, '2024-05-14 06:46:37', '2024-05-14 07:25:51'),
(6, 691, 'extra 5', 16, '2024-05-14 06:46:37', '2024-05-14 07:25:51'),
(7, 691, 'extra 4', 15, '2024-05-14 06:46:37', '2024-05-14 07:25:51'),
(8, 691, 'extra 3 ', 14, '2024-05-14 06:46:37', '2024-05-14 07:25:51'),
(9, 691, 'extra ', 130, '2024-05-14 06:46:37', '2024-05-14 07:25:51');





INSERT INTO `images` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(684, '170722449430.png', 673, '2024-02-06 14:01:34', '2024-02-06 14:01:34');
INSERT INTO `images` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(685, '170722449536.png', 673, '2024-02-06 14:01:35', '2024-02-06 14:01:35');
INSERT INTO `images` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(686, '170722449510.png', 673, '2024-02-06 14:01:35', '2024-02-06 14:01:35');
INSERT INTO `images` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(687, '170739750340.png', 673, '2024-02-08 23:05:03', '2024-02-08 23:05:03'),
(688, '170765455639.jpg', 690, '2024-02-11 22:29:16', '2024-02-11 22:29:16'),
(689, '170765467911.jpg', 691, '2024-02-11 22:31:19', '2024-02-11 22:31:19'),
(690, '17076547757.jpg', 692, '2024-02-11 22:32:55', '2024-02-11 22:32:55'),
(691, '17076548751.jpg', 693, '2024-02-11 22:34:35', '2024-02-11 22:34:35'),
(692, '170765509133.jpg', 694, '2024-02-11 22:38:11', '2024-02-11 22:38:11'),
(693, '170765525620.jpg', 695, '2024-02-11 22:40:56', '2024-02-11 22:40:56'),
(694, '170765534446.jpg', 696, '2024-02-11 22:42:24', '2024-02-11 22:42:24'),
(695, '170765544250.jpg', 697, '2024-02-11 22:44:02', '2024-02-11 22:44:02'),
(696, '170765555920.jpg', 698, '2024-02-11 22:45:59', '2024-02-11 22:45:59'),
(697, '170765563812.jpg', 699, '2024-02-11 22:47:18', '2024-02-11 22:47:18'),
(698, '170765578334.jpg', 700, '2024-02-11 22:49:43', '2024-02-11 22:49:43'),
(699, '170765587412.jpg', 701, '2024-02-11 22:51:14', '2024-02-11 22:51:14'),
(700, '170765597310.jpg', 702, '2024-02-11 22:52:53', '2024-02-11 22:52:53'),
(701, '170765605146.jpg', 703, '2024-02-11 22:54:11', '2024-02-11 22:54:11'),
(702, '170765642017.jpg', 704, '2024-02-11 23:00:20', '2024-02-11 23:00:20'),
(703, '17076565639.jpg', 705, '2024-02-11 23:02:43', '2024-02-11 23:02:43'),
(704, '170765666033.jpg', 706, '2024-02-11 23:04:20', '2024-02-11 23:04:20'),
(705, '170765674621.jpg', 707, '2024-02-11 23:05:46', '2024-02-11 23:05:46'),
(706, '170765683424.jpg', 708, '2024-02-11 23:07:14', '2024-02-11 23:07:14'),
(707, '170765692346.jpg', 709, '2024-02-11 23:08:43', '2024-02-11 23:08:43'),
(708, '170765700119.jpg', 710, '2024-02-11 23:10:01', '2024-02-11 23:10:01'),
(709, '170765709133.jpg', 711, '2024-02-11 23:11:31', '2024-02-11 23:11:31'),
(710, '17076576154.jpg', 712, '2024-02-11 23:20:15', '2024-02-11 23:20:15'),
(711, '170765772127.jpg', 713, '2024-02-11 23:22:01', '2024-02-11 23:22:01'),
(712, '17098210967.jpg', 714, '2024-03-08 00:18:16', '2024-03-08 00:18:16'),
(713, '170982128310.jpg', 715, '2024-03-08 00:21:23', '2024-03-08 00:21:23'),
(714, '170982152393.jpg', 715, '2024-03-08 00:25:23', '2024-03-08 00:25:23');



INSERT INTO `main_options` (`id`, `product_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(2, 690, 'main 1 edited 2', 140, '2024-05-14 06:46:37', '2024-05-14 07:25:51');
INSERT INTO `main_options` (`id`, `product_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(3, 690, 'main 2', 14, '2024-05-14 06:46:37', '2024-05-14 07:25:51');
INSERT INTO `main_options` (`id`, `product_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(4, 691, 'main 2', 14, '2024-05-14 06:46:37', '2024-05-14 07:25:51');
INSERT INTO `main_options` (`id`, `product_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(5, 691, 'main 1 edited 2', 140, '2024-05-14 06:46:37', '2024-05-14 07:25:51');

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_01_16_093957_create_currencies_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2024_01_20_200542_create_tables_table', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2024_01_29_095933_create_waiters_table', 3);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2024_05_13_064936_create_main_options_table', 4),
(5, '2024_05_13_065746_create_extra_options_table', 5);

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
(65, 36, 699, 1, 74, 74, '2024-05-12 11:20:00', '2024-05-12 11:20:00');
INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
(68, 37, 690, 1, 89, 89, '2024-05-12 11:20:25', '2024-05-12 11:20:25');
INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
(69, 37, 691, 1, 89, 89, '2024-05-12 11:20:25', '2024-05-12 11:20:25');
INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
(72, 38, 690, 1, 89, 89, '2024-05-12 12:56:43', '2024-05-12 12:56:43'),
(73, 38, 691, 1, 89, 89, '2024-05-12 12:56:43', '2024-05-12 12:56:43'),
(74, 39, 691, 1, 89, 89, '2024-05-12 12:58:07', '2024-05-12 12:58:07');

INSERT INTO `orders` (`id`, `table_id`, `status`, `total`, `shop_id`, `waiter_id`, `created_at`, `updated_at`) VALUES
(36, 17, 1, 74, 13, 3, '2024-05-12 11:19:32', '2024-05-12 11:20:00');
INSERT INTO `orders` (`id`, `table_id`, `status`, `total`, `shop_id`, `waiter_id`, `created_at`, `updated_at`) VALUES
(37, 17, 1, 178, 13, 3, '2024-05-12 11:20:16', '2024-05-12 11:20:25');
INSERT INTO `orders` (`id`, `table_id`, `status`, `total`, `shop_id`, `waiter_id`, `created_at`, `updated_at`) VALUES
(38, 17, 1, 178, 13, 3, '2024-05-12 12:55:19', '2024-05-12 12:56:43');
INSERT INTO `orders` (`id`, `table_id`, `status`, `total`, `shop_id`, `waiter_id`, `created_at`, `updated_at`) VALUES
(39, 17, 0, 89, 13, 3, '2024-05-12 12:58:07', '2024-05-12 12:58:07');









INSERT INTO `products` (`id`, `name`, `price`, `finalprice`, `sale`, `details`, `image_temp`, `category_id`, `shop_id`, `created_at`, `updated_at`) VALUES
(673, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-08 23:05:03');
INSERT INTO `products` (`id`, `name`, `price`, `finalprice`, `sale`, `details`, `image_temp`, `category_id`, `shop_id`, `created_at`, `updated_at`) VALUES
(674, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-06 14:01:34');
INSERT INTO `products` (`id`, `name`, `price`, `finalprice`, `sale`, `details`, `image_temp`, `category_id`, `shop_id`, `created_at`, `updated_at`) VALUES
(675, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-06 14:01:34');
INSERT INTO `products` (`id`, `name`, `price`, `finalprice`, `sale`, `details`, `image_temp`, `category_id`, `shop_id`, `created_at`, `updated_at`) VALUES
(676, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-06 14:01:34'),
(677, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-06 14:01:34'),
(678, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-06 14:01:34'),
(679, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-06 14:01:34'),
(680, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-06 14:01:34'),
(681, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-06 14:01:34'),
(682, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-06 14:01:34'),
(683, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-06 14:01:34'),
(684, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-06 14:01:34'),
(685, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-06 14:01:34'),
(686, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-06 14:01:34'),
(687, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-06 14:01:34'),
(688, 'pizaa', '150.00', '142.50', 5, '<p><strong>piza</strong></p>', '1707224494.png', 36, 10, '2024-02-06 14:01:34', '2024-02-06 14:01:34'),
(690, 'Big Chicken Sandwich', '89.00', '89.00', 0, '<p>Chicken slices with lettuce, onion slices, tomatoes, topped with Texas sauce</p>', '1707654556.jpg', 69, 13, '2024-02-11 22:29:16', '2024-05-14 07:25:51'),
(691, 'Chicken Roll Sandwich', '89.00', '89.00', NULL, '<p>Chicken, pickled cucumber, garlic dip</p>', '1707654679.jpg', 69, 13, '2024-02-11 22:31:19', '2024-02-11 22:31:19'),
(692, 'Crispy Ranch Sandwich', '74.00', '74.00', NULL, '<p>Crispy chicken piece with lettuce, tomatoes, topped with ranch and cheddar cheese</p>', '1707654775.jpg', 69, 13, '2024-02-11 22:32:55', '2024-02-11 22:32:55'),
(693, 'Crunchy Cheese Chicken Sandwich', '100.00', '100.00', NULL, '<p>2 mozzarella sticks pieces, chicken, lettuce, tomato, cheese slice, ranch sauce</p>', '1707654875.jpg', 69, 13, '2024-02-11 22:34:35', '2024-02-11 22:34:35'),
(694, 'Golden Roll Sandwich', '89.00', '89.00', NULL, '<p>Enjoy our golden panne, lettuce, tomatoes, covered with ranch sauce</p>', '1707655091.jpg', 69, 13, '2024-02-11 22:38:11', '2024-02-11 22:38:11'),
(695, 'Original Chicken Shawerma Sandwich', '45.00', '45.00', NULL, '<p>Chicken, pickled cucumber, garlic dip</p>', '1707655256.jpg', 69, 13, '2024-02-11 22:40:56', '2024-02-11 22:40:56'),
(696, 'Royal Chicken Sandwich', '112.00', '112.00', NULL, '<p>Chicken Shawerma with tomatoes, lettuce and fresh onion slices covered with delicious garlic dip sauce</p>', '1707655344.jpg', 69, 13, '2024-02-11 22:42:24', '2024-02-11 22:42:24'),
(697, 'Super Chicken Sandwich', '89.00', '89.00', NULL, '<p>Chicken mixed with grilled peppers and onions topped with our special cheese and ranch sauce</p>', '1707655442.jpg', 69, 13, '2024-02-11 22:44:02', '2024-02-11 22:44:02'),
(698, 'Chicken Fattah', '74.00', '74.00', NULL, '<p>Chicken , rice, croutons, sauce, garlic dip</p>', '1707655559.jpg', 74, 13, '2024-02-11 22:45:59', '2024-02-11 22:45:59'),
(699, 'Doner Fattah', '74.00', '74.00', NULL, '<p>Doner, rice, croutons, sauce, garlic dip</p>', '1707655638.jpg', 69, 13, '2024-02-11 22:47:18', '2024-02-11 22:47:18'),
(700, 'French Fries', '30.00', '30.00', NULL, '<p>French fries with ketchup</p>', '1707655783.jpg', 76, 13, '2024-02-11 22:49:43', '2024-02-11 22:49:43'),
(701, 'German Fries', '40.00', '40.00', NULL, '<p>Fries topped with cheddar cheese, jalapeno</p>', '1707655874.jpg', 76, 13, '2024-02-11 22:51:14', '2024-02-11 22:51:14'),
(702, 'Steak Fries', '40.00', '40.00', NULL, '<p>Crispy fries with ranch sauce</p>', '1707655973.jpg', 76, 13, '2024-02-11 22:52:53', '2024-02-11 22:52:53'),
(703, 'Cheddar Steak Fries', '48.00', '48.00', NULL, '<p>Crispy fries covered with cheddar cheese sauce</p>', '1707656051.jpg', 76, 13, '2024-02-11 22:54:11', '2024-02-11 22:54:11'),
(704, 'Royal Doner Sandwich', '112.00', '112.00', NULL, '<p>Doner kebab slices with tomatoes, lettuce, fresh onion slices covered with delicious ranch sauce<br>&nbsp;</p>', '1707656420.jpg', 79, 13, '2024-02-11 23:00:20', '2024-02-11 23:00:20'),
(705, 'Crunchy Cheese Doner Sandwich', '100.00', '100.00', NULL, '<p>Doner kebab slices, lettuce, tomato, cheese slice, 2 pieces of mozzarella cheese sticks and ranch sauce</p>', '1707656563.jpg', 79, 13, '2024-02-11 23:02:43', '2024-02-11 23:02:43'),
(706, 'Big Doner Sandwich', '89.00', '89.00', NULL, '<p>Enjoy our special Doner kebab taste with lettuce, onion, tomatoes and Texas sauce</p>', '1707656660.jpg', 79, 13, '2024-02-11 23:04:20', '2024-02-11 23:04:20'),
(707, 'Super Doner Sandwich', '89.00', '89.00', NULL, '<p>Doner kebab mixed with green peppers and grilled onions topped with our special cheese and ranch sauce</p>', '1707656746.jpg', 79, 13, '2024-02-11 23:05:46', '2024-02-11 23:05:46'),
(708, 'Classic Burger', '74.00', '74.00', NULL, '<p>Beef burger patty with tomato slices, lettuce, onions and pickled cucumber pieces topped with Texas</p>', '1707656834.jpg', 69, 13, '2024-02-11 23:07:14', '2024-02-11 23:07:14'),
(709, 'Burger Doner', '99.00', '99.00', NULL, '<p>A piece of beef burger with Doner slices, tomatoes, lettuce, onions and pickled cucumbers, covered with Texas sauce</p>', '1707656923.jpg', 79, 13, '2024-02-11 23:08:43', '2024-02-11 23:08:43'),
(710, 'Roll Doner Sandwich', '89.00', '89.00', NULL, '<p>Make it roll! enjoy your Doner kebab with lettuce, tomatoes, and red cabbage, ranch sauce</p>', '1707657001.jpg', 79, 13, '2024-02-11 23:10:01', '2024-02-11 23:10:01'),
(711, 'Original Doner Sandwich', '45.00', '45.00', NULL, '<p>The original taste of Doner kebab topped with ranch sauce</p>', '1707657091.jpg', 79, 13, '2024-02-11 23:11:31', '2024-02-11 23:11:31'),
(712, 'Doner Box', '96.00', '96.00', NULL, '<p>Mix Doner kebab slices, fries, served with lettuce, covered with ranch sauce</p>', '1707657615.jpg', 77, 13, '2024-02-11 23:20:15', '2024-02-11 23:20:15'),
(713, 'Berlin Fried Box', '96.00', '96.00', NULL, '<p>2 Berlin chicken pieces with fries, served with lettuce, topped with cheese sauce and ranch sauce</p>', '1707657721.jpg', 77, 13, '2024-02-11 23:22:01', '2024-02-11 23:22:01'),
(714, 'Coleslaw', '33.00', '33.00', NULL, '<p>Coleslaw</p>', '1709821096.jpg', 76, 13, '2024-03-08 00:18:16', '2024-03-08 00:18:16'),
(715, 'Green Salad', '33.00', '33.00', NULL, '<p><strong>Green Salad</strong></p>', '1709821523.jpg', 76, 13, '2024-03-08 00:21:23', '2024-03-08 00:25:23');





INSERT INTO `sale_details` (`id`, `product_id`, `price`, `quantity`, `subtotal`, `sale_invoice_id`, `created_at`, `updated_at`) VALUES
(7, 18, 200, 1, 200, 4, '2023-11-01 23:40:35', '2023-11-01 23:40:35');
INSERT INTO `sale_details` (`id`, `product_id`, `price`, `quantity`, `subtotal`, `sale_invoice_id`, `created_at`, `updated_at`) VALUES
(8, 3, 110, 2, 220, 4, '2023-11-01 23:40:35', '2023-11-01 23:40:35');
INSERT INTO `sale_details` (`id`, `product_id`, `price`, `quantity`, `subtotal`, `sale_invoice_id`, `created_at`, `updated_at`) VALUES
(9, 21, 169, 3, 507, 4, '2023-11-01 23:40:35', '2023-11-01 23:40:35');
INSERT INTO `sale_details` (`id`, `product_id`, `price`, `quantity`, `subtotal`, `sale_invoice_id`, `created_at`, `updated_at`) VALUES
(10, 5, 80, 1, 80, 5, '2023-11-02 00:14:40', '2023-11-02 00:14:40'),
(11, 6, 50, 1, 50, 5, '2023-11-02 00:14:40', '2023-11-02 00:14:40');

INSERT INTO `sale_invoices` (`id`, `customer_id`, `order_id`, `shop_id`, `discount`, `total`, `subtotal`, `created_at`, `updated_at`) VALUES
(4, 1, 5, 4, 0, 927, 927, '2023-11-01 23:40:35', '2023-11-01 23:40:35');
INSERT INTO `sale_invoices` (`id`, `customer_id`, `order_id`, `shop_id`, `discount`, `total`, `subtotal`, `created_at`, `updated_at`) VALUES
(5, 1, 4, 4, 0, 130, 130, '2023-11-02 00:14:40', '2023-11-02 00:14:40');






INSERT INTO `shops` (`id`, `slug`, `name`, `owner`, `address`, `phone`, `details`, `logo`, `user_id`, `currency_id`, `latitude`, `longitude`, `cover`, `created_at`, `updated_at`) VALUES
(10, 'burgar', 'burgar', 'Ahmed', 'mansoura', '010058694758', '<p><strong>Burgar Food</strong></p>', '1705802062.svg', 36, 1, '31.027582095896687', '31.372589993331626', '1705779315.png', '2024-01-20 20:35:15', '2024-02-11 23:48:50');
INSERT INTO `shops` (`id`, `slug`, `name`, `owner`, `address`, `phone`, `details`, `logo`, `user_id`, `currency_id`, `latitude`, `longitude`, `cover`, `created_at`, `updated_at`) VALUES
(13, 'doner-konner', 'Doner Konner', 'Doner Konner', 'Mansoura - Al Geesh St.', '+201010361144', '<p>Doner Konner</p>', '1707648620.jpg', 42, 1, '31.056255', '31.40227', '170764862049.jpg', '2024-02-11 20:50:20', '2024-02-11 20:50:20');


INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(5, '1699280793.png', '2023-10-24 23:20:21', '2023-11-07 00:26:33');
INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(7, '1699280808.png', '2023-10-25 22:44:59', '2023-11-07 00:26:48');








INSERT INTO `table_waiter` (`id`, `table_id`, `waiter_id`, `created_at`, `updated_at`) VALUES
(15, 17, 3, '2024-05-12 14:15:12', '2024-05-12 14:15:12');
INSERT INTO `table_waiter` (`id`, `table_id`, `waiter_id`, `created_at`, `updated_at`) VALUES
(16, 18, 4, '2024-05-14 10:47:44', '2024-05-14 10:47:44');


INSERT INTO `tables` (`id`, `name`, `link`, `qrcode`, `shop_id`, `created_at`, `updated_at`) VALUES
(13, '01', 'https://ordarme.com/tables/show/13', '1712054375_12.svg', 10, '2024-04-02 20:39:35', '2024-04-02 20:39:35');
INSERT INTO `tables` (`id`, `name`, `link`, `qrcode`, `shop_id`, `created_at`, `updated_at`) VALUES
(17, '01', 'https://menu_project.test/tables/show/17', '1715512325_17.svg', 13, '2024-05-12 11:12:05', '2024-05-12 11:12:05');
INSERT INTO `tables` (`id`, `name`, `link`, `qrcode`, `shop_id`, `created_at`, `updated_at`) VALUES
(18, 'table 2', 'https://menu_project.test/tables/show/18', '1715672110_18.svg', 13, '2024-05-14 07:35:09', '2024-05-14 07:35:10');



INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Attraction', 'manager@techsolutionstuff.com', NULL, 2, '$2y$10$xzATnjFopJi3Jg7QVmpmvuab3/BABC.X25yz32oITwD1.b3caWHsW', NULL, '2023-10-18 21:06:19', '2024-05-12 10:49:04');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(36, 'Ahmed', 'Test@gmail.com', NULL, 1, '$2y$10$9EugueVjOxrOilONxwfOfeRh3MC5khipGD2GzvjHbH4kMASZdp..e', NULL, '2024-01-20 20:35:15', '2024-05-12 10:49:04');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(39, 'ahmed', 'waiter@gmail.com', NULL, 3, '$2y$10$XZds0KeavXhjJfEEG24NBOHRUqdPTmrxVIxgxdow4chmf49Gp03DK', NULL, '2024-02-05 13:18:46', '2024-05-12 10:49:04');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(42, 'Doner Konner', 'doner.konner@gmail.com', NULL, 1, '$2y$10$pP0./4lwnspKChe/D6.tTOh5crAqyOC4ImPhnm5RGiQuQMgcGKXk.', NULL, '2024-02-11 20:50:20', '2024-05-12 10:49:04'),
(43, 'Ahmed Noor', 'ahmed@attractionme.net', NULL, 3, '$2y$10$Z8kBvQp1LBCdnrG4Rcx16uTkCOcsCBzQwoQDSzXHzPqk5KFp75LOe', NULL, '2024-02-11 23:50:29', '2024-05-12 10:49:05'),
(44, 'Mohamed Noor', 'mohamed@attractionme.net', NULL, 3, '$2y$10$VX0u2D104Cz76TryjnnWX.bstM0q3yjZQqBBu/F7htpWN/XXp21Zy', NULL, '2024-02-11 23:51:05', '2024-05-12 10:49:05'),
(45, 'Noor Mohamed', 'noor@attractionme.net', NULL, 3, '$2y$10$vwaRKBVd5PfI80IFR8oeDe6udfmB7mj1kDaJOOgCVNU6YAjnQnfJu', NULL, '2024-02-11 23:51:27', '2024-05-12 10:49:05'),
(47, 'mohamed', 'mohamed@gmail.com', NULL, 3, '$2y$10$6Fp4iDJmGNZPxkR3V4xvtekqcL3m31qVI/q5.r4aJ81bkoxfMrDKq', NULL, '2024-04-21 19:41:38', '2024-05-12 10:49:05');

INSERT INTO `waiters` (`id`, `name`, `shop_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'ahmed', 10, 39, '2024-02-05 13:18:46', '2024-02-05 13:18:46');
INSERT INTO `waiters` (`id`, `name`, `shop_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Ahmed Noor', 13, 43, '2024-02-11 23:50:29', '2024-02-11 23:50:29');
INSERT INTO `waiters` (`id`, `name`, `shop_id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Mohamed Noor', 13, 44, '2024-02-11 23:51:05', '2024-02-11 23:51:05');
INSERT INTO `waiters` (`id`, `name`, `shop_id`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'Noor Mohamed', 13, 45, '2024-02-11 23:51:27', '2024-02-11 23:51:27'),
(7, 'mohamed', 13, 47, '2024-04-21 19:41:38', '2024-04-21 19:41:38');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;