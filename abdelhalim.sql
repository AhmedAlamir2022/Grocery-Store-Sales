-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31 مارس 2023 الساعة 15:34
-- إصدار الخادم: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abdelhalim`
--

-- --------------------------------------------------------

--
-- بنية الجدول `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `username`, `contact`, `gender`, `dob`, `country`, `city`, `address`, `created_at`, `updated_at`) VALUES
(3, 'Abdelhalim Talal', 'admin521@gmail.com', '$2y$10$DG2W2dQHOaGmwvcdRdKiRuQoNoD0K65qtncPZI92Y8hnDV2mJ.ho2', 'admin_521', '54987452', 'Male', '1999-10-28', 'Kwuit', 'Kwuit', 'Kwuit - Kwuit', '2023-03-28 09:28:35', '2023-03-28 09:30:46');

-- --------------------------------------------------------

--
-- بنية الجدول `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `brands`
--

INSERT INTO `brands` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, 'upload/brands/1760332912980760.jpg', '2023-03-14 06:58:07', NULL),
(3, 'upload/brands/1760332919887684.jpg', '2023-03-14 06:58:14', NULL),
(4, 'upload/brands/1760332926164135.jpg', '2023-03-14 06:58:20', NULL),
(5, 'upload/brands/1760332931975317.jpg', '2023-03-14 06:58:25', NULL),
(7, 'upload/brands/1760333067922547.jpg', '2023-03-14 07:00:35', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `title`, `details`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Sea Food', 'rgthyuji8o9p0tyuio9p0sdefrgthyjukrfgthyj', 'upload/categories/1759995521337468.jpg', '2023-03-10 12:13:59', '2023-03-10 13:35:25'),
(3, 'Vegtables', 'Vegtables Vegtables v vVegtables Vegtables', 'upload/categories/1760345980373196.png', '2023-03-14 10:25:49', NULL),
(4, 'Fruits', 'Fruits Fruits FruitsFruitsv v v v vFruitsFruitsFruits', 'upload/categories/1760346003140405.jpg', '2023-03-14 10:26:11', NULL),
(7, 'Food', 'Food Heaven Made Easy sounds like the name of an amazingly delicious food delivery service, but don\'t be fooled..', 'upload/categories/1760509292887753.jpg', '2023-03-16 05:41:36', NULL),
(10, 'Arab Food', 'ut rutrum lectus urna sit amet quamut rutrum lectus urna sit amet quamut rutrum lectus urna sit amet quamut rutrum lectus urna sit amet quam', 'upload/categories/1760512073171712.jpg', '2023-03-16 06:25:48', '2023-03-28 09:35:43');

-- --------------------------------------------------------

--
-- بنية الجدول `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(3, 'drft', 'adfghjksdfghj@gmail.com', 'Question', '65649494', 'ertyu', '2023-03-28 09:45:38', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `password`, `username`, `contact`, `gender`, `dob`, `country`, `city`, `address`, `created_at`, `updated_at`) VALUES
(2, 'Ali Khaled', 'alikhaled521@gmail.com', '$2y$10$TUJFaTTt/.RHZrm9CMce8ehsSmrf0638bS0qsmhYg4n/eTdNwBCjW', 'Ahmed Mostafa', '01012921224', 'Male', '1997-09-16', 'Egypt', 'Cairo', 'Egypt - Cairo', '2023-03-11 10:43:46', '2023-03-28 09:34:34'),
(3, 'Yasser Maged', 'yasser521@gmail.com', '$2y$10$VAd4NW47JARKJMvyj.8Q8.IHAKYBD1rBN0gOJOm5qw8p0kNcAcVBW', 'fbgnhjmk', NULL, NULL, NULL, NULL, NULL, 'rthyjuki', '2023-03-28 09:31:34', '2023-03-28 10:22:24'),
(4, 'Dema Motazz', 'dema521@gmail.com', '$2y$10$vcky2/2PF6T2DrZaecHHxOpdJRRHT7dE05P.x1hvdDoV5XbasHHSy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-28 09:32:10', NULL),
(5, 'Maher Ali', 'maher521@gmail.com', '$2y$10$3oXwsK7439B1jltdV8hzyefinBt80VxtAWix1Ngucgsf3kQ9svH/C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-28 09:33:03', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_10_065238_create_admins_table', 2),
(6, '2023_03_10_121416_create_categories_table', 3),
(7, '2023_03_11_122503_create_employees_table', 4),
(8, '2023_03_13_125955_create_contacts_table', 5),
(9, '2023_03_13_132624_create_queries_table', 6),
(11, '2023_03_14_082419_create_subscripes_table', 7),
(12, '2023_03_14_084515_create_brands_table', 8),
(13, '2023_03_14_091050_create_testimonials_table', 9),
(15, '2023_03_15_121709_create_offers_table', 11),
(16, '2023_03_15_131727_create_s_offers_table', 12),
(17, '2023_03_14_115721_create_products_table', 13);

-- --------------------------------------------------------

--
-- بنية الجدول `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `sale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `offers_cat_id_foreign` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `offers`
--

INSERT INTO `offers` (`id`, `name`, `cat_id`, `sale`, `short_desc`, `old_price`, `new_price`, `end_date`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Green Lemon', 3, '30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel maximus lacus. Duis ut mauris eget justo dictum tempus sed vel tellus', '100', '70', '2023-04-01', 'upload/offers/1760438754790857.jpg', '2023-03-15 10:49:19', '2023-03-28 09:39:21'),
(2, 'Main Lemon', 3, '50', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel maximus lacus. Duis ut mauris eget justo dictum tempus sed vel tellus..', '90', '45', '2023-04-06', 'upload/offers/1760438824241072.jpg', '2023-03-15 11:01:32', '2023-03-28 09:39:08'),
(3, 'Grab Center', 4, '20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel maximus lacus. Duis ut mauris eget justo dictum tempus sed vel tellus..', '100', '80', '2023-04-04', 'upload/offers/1760438872359471.jpg', '2023-03-15 11:02:18', '2023-03-28 09:38:58'),
(5, 'Phasellus sed laoreet velit', 7, '50', 'Phasellus sed laoreet velitPhasellus sed laoreet velitPhasellus sed laoreet velitPhasellus sed laoreet velit', '10', '5', '2023-03-30', 'upload/offers/1760510495453584.png', '2023-03-16 06:00:43', '2023-03-28 09:38:42'),
(6, 'sodales fermentum magna', 2, '30', 'sodales fermentum magnasodales fermentum magnasodales fermentum magnasodales fermentum magnasodales fermentum magna', '10', '7', '2023-03-31', 'upload/offers/1760510560600151.png', '2023-03-16 06:01:45', '2023-03-28 09:38:17');

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_cat_id_foreign` (`cat_id`),
  KEY `products_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`id`, `name`, `cat_id`, `user_id`, `code`, `short_desc`, `long_desc`, `old_price`, `new_price`, `quantity`, `image1`, `image2`, `image3`, `image4`, `image5`, `created_at`, `updated_at`) VALUES
(2, 'Organic Sweet Potatoes', 7, NULL, '16cdvfbgnh', 'Organic Sweet Potatoes Organic Sweet PotatoesOrganic Sweet Potatoes Organic Sweet Potatoes', 'value=\"Organic Sweet Potatoes Organic Sweet PotatoesOrganic Sweet Potatoes Organic Sweet Potatoes Organic Sweet Potatoes Organic Sweet PotatoesOrganic Sweet Potatoes Organic Sweet Potatoes v Organic Sweet Potatoes Organic Sweet PotatoesOrganic Sweet Potatoes Organic Sweet Potatoes vOrganic Sweet Potatoes Organic Sweet PotatoesOrganic Sweet Potatoes Organic Sweet Potatoes', '2', '1', '10', 'upload/products/1760509552147766.jpg', 'upload/products/1760509552214389.jpg', 'upload/products/1760509552275300.jpg', 'upload/products/1760509552334038.jpg', 'upload/products/1760509552390236.jpg', '2023-03-16 05:45:44', '2023-03-16 06:18:55'),
(3, 'Quisque quis ipsum venenatis', 3, NULL, 'xsdfg45', 'Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis', 'Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis Quisque quis ipsum venenatis', '4', '3', '7', 'upload/products/1760509670722600.jpg', 'upload/products/1760509670783370.jpg', 'upload/products/1760509670839491.jpg', 'upload/products/1760509670898434.jpg', 'upload/products/1760509670923006.jpg', '2023-03-16 05:47:37', NULL),
(4, 'Phasellus molestie risus non', 4, NULL, 'xsdfrg45', 'Phasellus molestie risus non Phasellus molestie risus non Phasellus molestie risus non Phasellus molestie risus non vPhasellus molestie risus non Phasellus molestie risus non Phasellus molestie risus non', 'Phasellus molestie risus non Phasellus molestie risus non Phasellus molestie risus non Phasellus molestie risus non vPhasellus molestie risus non Phasellus molestie risus non Phasellus molestie risus non Phasellus molestie risus non Phasellus molestie risus non Phasellus molestie risus non Phasellus molestie risus non vPhasellus molestie risus non Phasellus molestie risus non Phasellus molestie risus nonPhasellus molestie risus non Phasellus molestie risus non Phasellus molestie risus non Phasellus molestie risus non vPhasellus molestie risus non Phasellus molestie risus non Phasellus molestie risus non', '4', '3', '452', 'upload/products/1760509760517912.jpg', 'upload/products/1760509760666799.jpg', 'upload/products/1760509760727422.jpg', 'upload/products/1760509760788846.jpg', 'upload/products/1760509760848206.jpg', '2023-03-16 05:49:02', NULL),
(5, 'lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsan', 2, NULL, 'cdfgh45', 'xsdfhuk lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsan lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsan lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsan', 'xsdfhuk lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsan lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsan lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsanxsdfhuk lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsan lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsan lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsanxsdfhuk lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsan lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsan lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsan', '41', '35', '42', 'upload/products/1760509842222821.jpg', 'upload/products/1760509842252278.jpg', 'upload/products/1760509842277384.jpg', 'upload/products/1760509842302131.jpg', 'upload/products/1760509842326960.jpg', '2023-03-16 05:50:20', NULL),
(6, 'Vestibulum enim ligula, varius sed enim vitae', 7, 3, 'fgyhj452', 'fgthukilo;Vestibulum enim ligula, varius sed enim vitae Vestibulum enim ligula, varius sed enim vitaeVestibulum enim ligula, varius sed enim vitaeVestibulum enim ligula, varius sed enim vitae', 'value=\"value=\"value=\"value=\"fgthukilo;Vestibulum enim ligula, varius sed enim vitae Vestibulum enim ligula, varius sed enim vitaeVestibulum enim ligula, varius sed enim vitaeVestibulum enim ligula, varius sed enim vitae fgthukilo;Vestibulum enim ligula, varius sed enim vitae Vestibulum enim ligula, varius sed enim vitaeVestibulum enim ligula, varius sed enim vitaeVestibulum enim ligula, varius sed enim vitae fgthukilo;Vestibulum enim ligula, varius sed enim vitae Vestibulum enim ligula, varius sed enim vitaeVestibulum enim ligula, varius sed enim vitaeVestibulum enim ligula, varius sed enim vitae', '30', '20', '40', 'upload/products/1760509914640939.jpg', 'upload/products/1760509914672298.jpg', 'upload/products/1760509914795966.jpg', 'upload/products/1760509914857341.jpg', 'upload/products/1760509914917054.jpg', '2023-03-16 05:51:29', '2023-03-28 10:24:31'),
(8, 'fringilla nec turpis ac, auctor vulputate nulla', 4, NULL, '251 nmj', 'fringilla nec turpis ac, auctor vulputate nullafringilla nec turpis ac, auctor vulputate nullafringilla nec turpis ac, auctor vulputate nulla', 'fringilla nec turpis ac, auctor vulputate nullafringilla nec turpis ac, auctor vulputate nullafringilla nec turpis ac, auctor vulputate nullafringilla nec turpis ac, auctor vulputate nullafringilla nec turpis ac, auctor vulputate nullafringilla nec turpis ac, auctor vulputate nullafringilla nec turpis ac, auctor vulputate nullafringilla nec turpis ac, auctor vulputate nullafringilla nec turpis ac, auctor vulputate nullafringilla nec turpis ac, auctor vulputate nulla', '10', '5', '42', 'upload/products/1760511716445042.jpg', 'upload/products/1760511716475742.jpg', 'upload/products/1760511716633300.jpg', 'upload/products/1760511716786424.jpg', 'upload/products/1760511716857064.jpg', '2023-03-16 06:20:08', NULL),
(9, 'Blending Eastern & Western tradition', 3, NULL, '15axscdfv3', 'Blending Eastern & Western traditionBlending Eastern & Western traditionBlending Eastern & Western tradition', 'Blending Eastern & Western traditionBlending Eastern & Western traditionBlending Eastern & Western traditionBlending Eastern & Western traditionBlending Eastern & Western traditionBlending Eastern & Western traditionBlending Eastern & Western traditionBlending Eastern & Western traditionBlending Eastern & Western traditionBlending Eastern & Western tradition', '16', '14', '41', 'upload/products/1760511789534288.jpg', 'upload/products/1760511789565339.jpg', 'upload/products/1760511789625727.jpg', 'upload/products/1760511789685869.jpg', 'upload/products/1760511789749817.jpg', '2023-03-16 06:21:17', NULL),
(10, 'fresh fruit bags individually', 7, 3, '13cdghj', 'fresh fruit bags individually fresh fruit bags individually fresh fruit bags individually fresh fruit bags individually', 'value=\"fresh fruit bags individually fresh fruit bags individually fresh fruit bags individually fresh fruit bags individually fresh fruit bags individually fresh fruit bags individually fresh fruit bags individually fresh fruit bags individually fresh fruit bags individually fresh fruit bags individually fresh fruit bags individually fresh fruit bags individually fresh fruit bags individually', '14', '10', '41', 'upload/products/1760512007374277.jpg', 'upload/products/1760512007404113.jpg', 'upload/products/1760512007428620.jpg', 'upload/products/1760512007453289.jpg', 'upload/products/1760512007477755.jpg', '2023-03-16 06:22:12', '2023-03-28 09:44:49'),
(11, 'ut rutrum lectus urna sit amet quam', 4, NULL, '1551cdfv', 'ut rutrum lectus urna sit amet quamut rutrum lectus urna sit amet quam', 'ut rutrum lectus urna sit amet quamut rutrum lectus urna sit amet quamut rutrum lectus urna sit amet quamut rutrum lectus urna sit amet quamut rutrum lectus urna sit amet qut rutrum lectus urna sit amet quamuamut rutrum lectus urna sit amet quam', '15', '11', '42', 'upload/products/1760511955315214.jpg', 'upload/products/1760511955346011.jpg', 'upload/products/1760511955405284.jpg', 'upload/products/1760511955461477.jpg', 'upload/products/1760511955486210.jpg', '2023-03-16 06:23:55', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `queries`
--

CREATE TABLE IF NOT EXISTS `queries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `queries`
--

INSERT INTO `queries` (`id`, `email`, `phone`, `address`, `details`, `created_at`, `updated_at`) VALUES
(1, 'abdelhalim521@gmail.com', '59743127', 'Kwuit - Kwuit', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2023-03-13 13:34:31', '2023-03-28 09:46:35');

-- --------------------------------------------------------

--
-- بنية الجدول `subscripes`
--

CREATE TABLE IF NOT EXISTS `subscripes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `s_offers`
--

CREATE TABLE IF NOT EXISTS `s_offers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `sale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `s_offers_user_id_foreign` (`user_id`),
  KEY `s_offers_cat_id_foreign` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `s_offers`
--

INSERT INTO `s_offers` (`id`, `name`, `user_id`, `cat_id`, `sale`, `short_desc`, `old_price`, `new_price`, `end_date`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Gawafa', 3, 4, '50%', 'Ramadan Special Offer Ramadan Special Offer Ramadan Special Offer Ramadan Special Offer Ramadan Special Offer', '4', '2', '2023-04-02', 'upload/offers/1761611686180062.jpg', '2023-03-28 09:43:40', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `user_id`, `testimonial`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Abdelhalim Talal', '3', 'That is good', '2', '2023-03-28 09:51:44', '2023-03-28 10:20:21'),
(6, 'Abdelhalim Talal', '3', 'You are the best', '1', '2023-03-28 09:52:14', '2023-03-28 10:20:16'),
(7, 'Abdelhalim Talal', '3', 'You are the best', '1', '2023-03-28 09:52:15', '2023-03-28 10:20:12'),
(8, 'Abdelhalim Talal', '3', 'the products are very good', '1', '2023-03-28 09:52:38', '2023-03-28 10:20:07'),
(9, 'Abdelhalim Talal', '3', 'The service is ok', '1', '2023-03-28 09:52:49', '2023-03-28 10:20:03'),
(10, 'Abdelhalim Talal', '3', 'good offers', '2', '2023-03-28 09:53:09', '2023-03-28 10:19:49'),
(11, 'Abdelhalim Talal', '3', 'not good', '1', '2023-03-28 09:53:17', '2023-03-28 10:19:34'),
(12, 'Abdelhalim Talal', '3', 'edrftgyhujio', '0', '2023-03-28 10:25:16', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `contact`, `dob`, `country`, `city`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Abdelhalim Talal', 'abdelhalim521@gmail.com', NULL, '$2y$10$Z96fAibIA3A2dJShDAnjjO2vkDBm0k288mQQtOe6B3rWkrdqY4BlK', '15144941', '1999-08-16', 'Kwuit', 'Kwuit', 'Kwuit - Kwuit', NULL, '2023-03-28 09:41:30', '2023-03-28 09:53:59');

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- القيود للجدول `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- القيود للجدول `s_offers`
--
ALTER TABLE `s_offers`
  ADD CONSTRAINT `s_offers_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `s_offers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
