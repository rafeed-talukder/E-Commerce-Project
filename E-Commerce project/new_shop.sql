-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 08:53 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'mm', 'vb', 1, '2020-12-14 01:50:38', '2020-12-14 01:50:38'),
(2, 'Samsung', 'phone', 1, '2020-12-14 08:00:07', '2020-12-14 08:00:07'),
(3, 'Samsung', 'Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1Samsung1', 1, '2020-12-22 23:11:30', '2020-12-22 23:11:30'),
(4, 'SamsungOne', 'SamsungOneSamsungOneSamsungOneSamsungOneSamsungOneSamsungOneSamsungOne', 1, '2020-12-22 23:12:14', '2020-12-22 23:12:14'),
(5, 'SamsungTwo', 'SamsungTwoSamsungTwoSamsungTwoSamsungTwoSamsungTwoSamsungTwoSamsungTwoSamsungTwo', 1, '2020-12-22 23:12:27', '2020-12-22 23:12:27'),
(6, 'SamsungT', 'SamsungThreeSamsungThreeSamsungThreeSamsungThree', 1, '2020-12-22 23:12:52', '2020-12-22 23:12:52'),
(7, 'SamsungF', 'SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree', 1, '2020-12-22 23:13:02', '2020-12-22 23:13:02'),
(8, 'Samsungfi', 'SamsungThreeSamsungThreeSamsungThreeSamsungThree', 1, '2020-12-22 23:13:12', '2020-12-22 23:13:12'),
(9, 'SamsungSi', 'SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree', 1, '2020-12-22 23:13:22', '2020-12-22 23:13:22'),
(10, 'Samsungsev', 'SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree', 1, '2020-12-22 23:13:33', '2020-12-22 23:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'test1 new', 'test new', 1, '2020-12-10 10:44:37', '2020-12-17 00:59:20'),
(2, 'ddddd new', 'njnjnj new', 0, '2020-12-10 10:51:47', '2020-12-12 22:45:51'),
(3, 'rafeed', 'mkonji', 1, NULL, '2020-12-12 10:55:48'),
(4, 'test1', 'zscxsz', 0, '2020-12-11 09:07:36', '2020-12-12 10:56:03'),
(5, 'test1', 'aaxax', 1, '2020-12-11 09:12:45', '2020-12-12 10:55:56'),
(7, 'test1', 'test', 0, '2020-12-12 11:22:51', '2020-12-12 11:22:51'),
(9, 'Sports', 'Sports', 1, '2020-12-14 07:59:50', '2020-12-14 07:59:50'),
(10, 'Sports', 'SportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSports', 1, '2020-12-22 23:07:52', '2020-12-22 23:07:52'),
(11, 'Sports2', 'SportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSports', 1, '2020-12-22 23:08:09', '2020-12-22 23:08:09'),
(12, 'Sports3', 'SportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSports', 1, '2020-12-22 23:08:18', '2020-12-22 23:08:18'),
(13, 'Sports4', 'SportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSports', 1, '2020-12-22 23:08:26', '2020-12-22 23:08:26'),
(14, 'Sports5', 'SportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSportsSports', 0, '2020-12-22 23:08:34', '2020-12-27 10:15:42'),
(15, 'Education', 'EducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducation', 1, '2020-12-22 23:08:47', '2020-12-22 23:08:47'),
(16, 'Education2', 'EducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducation', 1, '2020-12-22 23:08:53', '2020-12-22 23:08:53'),
(17, 'Education3', 'EducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducation', 1, '2020-12-22 23:08:59', '2020-12-22 23:08:59'),
(18, 'Education4', 'EducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducation', 1, '2020-12-22 23:09:05', '2020-12-22 23:09:05'),
(19, 'Education5', 'EducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducation', 1, '2020-12-22 23:09:12', '2020-12-22 23:09:12'),
(20, 'Education6', 'EducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducationEducation', 1, '2020-12-22 23:09:20', '2020-12-22 23:09:20'),
(21, 'Blogs', 'BlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogs', 1, '2020-12-22 23:09:37', '2020-12-22 23:09:37'),
(22, 'Blogs2', 'BlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogs', 1, '2020-12-22 23:09:43', '2020-12-22 23:09:43'),
(23, 'Blogs3', 'BlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogs', 1, '2020-12-22 23:09:50', '2020-12-22 23:09:50'),
(24, 'Blogs4', 'BlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogs', 1, '2020-12-22 23:09:58', '2020-12-22 23:09:58'),
(25, 'Blogs5', 'BlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogs', 1, '2020-12-22 23:10:05', '2020-12-22 23:10:05'),
(26, 'Blogs6', 'BlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogs', 1, '2020-12-22 23:10:12', '2020-12-22 23:10:12'),
(27, 'Blogs7', 'BlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogsBlogs', 1, '2020-12-22 23:10:20', '2020-12-22 23:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `lastname`, `email`, `password`, `number`, `address`, `created_at`, `updated_at`) VALUES
(28, 'Rafeed', 'Talukder', 'rafeedkhan591@gmail.com', '$2y$10$6wZsQawPYHv447CCJ.NU2.NNLrk0hKcCqefbTBq3INEF3jugnKu0G', '123456', 'Bangladesh', '2020-12-26 08:07:55', '2020-12-26 08:07:55'),
(29, 'Rafeed', 'Talukder', 'engrrafeed.nbmch@gmail.com', '$2y$10$3fzCJbqDEj6Ka6vga9Peiu44dgL1q3oG7L5U7Nr3RcFQK9Asqg/3W', '0000015155', 'Bangladesh', '2020-12-27 08:47:45', '2020-12-27 08:47:45');

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
(3, '2020_12_10_154311_create_categories_table', 2),
(4, '2020_12_10_161933_create_categories_table', 3),
(5, '2020_12_14_073630_create_brands_table', 4),
(6, '2020_12_14_143445_create_products_table', 5),
(7, '2020_12_24_093716_create_customers_table', 6),
(8, '2020_12_25_043522_create_shippings_table', 7),
(9, '2020_12_25_044917_create_shippinginfos_table', 8),
(10, '2020_12_25_152537_create_payments_table', 9),
(11, '2020_12_25_152616_create_order_details_table', 9),
(12, '2020_12_25_152813_create_orders_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(8,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 22, 3, 12.00, 'Pending', '2020-12-25 11:06:54', '2020-12-25 11:06:54'),
(2, 22, 3, 12.00, 'Pending', '2020-12-25 11:08:44', '2020-12-25 11:08:44'),
(3, 22, 3, 12.00, 'Pending', '2020-12-25 11:08:59', '2020-12-25 11:08:59'),
(4, 22, 3, 12.00, 'Pending', '2020-12-25 11:09:39', '2020-12-25 11:09:39'),
(5, 22, 3, 12.00, 'Pending', '2020-12-25 11:10:32', '2020-12-25 11:10:32'),
(6, 22, 3, 12.00, 'Pending', '2020-12-25 11:11:15', '2020-12-25 11:11:15'),
(7, 22, 3, 12.00, 'Pending', '2020-12-25 11:13:04', '2020-12-25 11:13:04'),
(8, 22, 3, 12.00, 'Pending', '2020-12-25 11:14:53', '2020-12-25 11:14:53'),
(9, 22, 3, 12.00, 'Pending', '2020-12-25 11:23:10', '2020-12-25 11:23:10'),
(10, 22, 3, 12.00, 'Pending', '2020-12-25 11:23:26', '2020-12-25 11:23:26'),
(11, 22, 3, 12.00, 'Pending', '2020-12-25 11:25:22', '2020-12-25 11:25:22'),
(12, 23, 4, 12.00, 'Pending', '2020-12-25 11:29:32', '2020-12-25 11:29:32'),
(13, 27, 6, 36.00, 'Pending', '2020-12-26 07:38:32', '2020-12-26 07:38:32'),
(14, 28, 8, 36.00, 'Pending', '2020-12-26 09:41:28', '2020-12-26 09:41:28'),
(15, 28, 9, 12.00, 'Pending', '2020-12-27 08:46:17', '2020-12-27 08:46:17'),
(16, 29, 10, 12.00, 'Pending', '2020-12-27 08:48:05', '2020-12-27 08:48:05'),
(17, 29, 11, 12.00, 'Pending', '2020-12-27 09:03:11', '2020-12-27 09:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 7, 42, 'Samsung02', 12.00, 1, '2020-12-25 11:13:04', '2020-12-25 11:13:04'),
(2, 8, 42, 'Samsung02', 12.00, 1, '2020-12-25 11:14:54', '2020-12-25 11:14:54'),
(3, 12, 46, 'Samsung23', 12.00, 1, '2020-12-25 11:29:32', '2020-12-25 11:29:32'),
(4, 13, 42, 'Samsung02', 12.00, 3, '2020-12-26 07:38:33', '2020-12-26 07:38:33'),
(5, 14, 42, 'Samsung02', 12.00, 2, '2020-12-26 09:41:28', '2020-12-26 09:41:28'),
(6, 14, 41, 'SamsungTwoT', 12.00, 1, '2020-12-26 09:41:28', '2020-12-26 09:41:28'),
(7, 15, 45, 'SamsungTwo12', 12.00, 1, '2020-12-27 08:46:17', '2020-12-27 08:46:17'),
(8, 16, 46, 'Samsung23', 12.00, 1, '2020-12-27 08:48:06', '2020-12-27 08:48:06'),
(9, 17, 46, 'Samsung23', 12.00, 1, '2020-12-27 09:03:11', '2020-12-27 09:03:11');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'cash', 'Pending', '2020-12-25 11:06:54', '2020-12-25 11:06:54'),
(2, 2, 'cash', 'Pending', '2020-12-25 11:08:44', '2020-12-25 11:08:44'),
(3, 3, 'cash', 'Pending', '2020-12-25 11:08:59', '2020-12-25 11:08:59'),
(4, 4, 'cash', 'Pending', '2020-12-25 11:09:40', '2020-12-25 11:09:40'),
(5, 5, 'cash', 'Pending', '2020-12-25 11:10:32', '2020-12-25 11:10:32'),
(6, 6, 'cash', 'Pending', '2020-12-25 11:11:15', '2020-12-25 11:11:15'),
(7, 7, 'cash', 'Pending', '2020-12-25 11:13:04', '2020-12-25 11:13:04'),
(8, 8, 'cash', 'Pending', '2020-12-25 11:14:53', '2020-12-25 11:14:53'),
(9, 9, 'cash', 'Pending', '2020-12-25 11:23:11', '2020-12-25 11:23:11'),
(10, 10, 'cash', 'Pending', '2020-12-25 11:23:27', '2020-12-25 11:23:27'),
(11, 11, 'cash', 'Pending', '2020-12-25 11:25:22', '2020-12-25 11:25:22'),
(12, 12, 'cash', 'Pending', '2020-12-25 11:29:32', '2020-12-25 11:29:32'),
(13, 13, 'cash', 'Pending', '2020-12-26 07:38:33', '2020-12-26 07:38:33'),
(14, 14, 'cash', 'Pending', '2020-12-26 09:41:28', '2020-12-26 09:41:28'),
(15, 15, 'cash', 'Pending', '2020-12-27 08:46:17', '2020-12-27 08:46:17'),
(16, 16, 'cash', 'Pending', '2020-12-27 08:48:06', '2020-12-27 08:48:06'),
(17, 17, 'cash', 'Pending', '2020-12-27 09:03:11', '2020-12-27 09:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_quantity`, `short_description`, `long_description`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 'mkonji', 52.00, 50, 'mkkkk', 'mkkoo', 'D:\\xampp\\tmp\\phpE17.tmp', 1, '2020-12-14 09:17:10', '2020-12-14 09:17:10'),
(2, 3, 2, 'mkinju', 20.00, 11, 'mkonjibhuvgycft', 'jncvjdsnjc', 'productImage/productImage/', 1, '2020-12-14 10:18:08', '2020-12-14 10:18:08'),
(3, 3, 2, 'vjvhj', 11.00, 11, 'zx,x', 'jkvjjjjsdj', 'productImage/productImage/', 1, '2020-12-14 10:20:39', '2020-12-14 10:20:39'),
(4, 3, 2, 'mkinju', 2.00, 2, 'mm', 'nn', 'productImage/file437 (1).jpg', 1, '2020-12-14 10:24:48', '2020-12-14 10:24:48'),
(5, 3, 2, 'mkinju', 22.00, 11, 'mkkonkijnnkjn', '<p><em>&nbsp;jhbhbjkbjkbjbkjkjbjkbjkbkbkjbjkbjk</em></p>', 'productImage/Image.png', 0, '2020-12-16 10:22:18', '2020-12-16 10:22:18'),
(6, 3, 2, 'mkinju', 1.00, 12, 'mkkmkmkm', '<p>kjnjjnkkjkjjkjkj</p>', 'productImage/Image.png', 1, '2020-12-16 10:29:20', '2020-12-16 10:29:20'),
(7, 3, 2, 'mkinju', 1.00, 12, 'mkkmkmkm', '<p>kjnjjnkkjkjjkjkj</p>', 'productImage/Image.png', 1, '2020-12-16 10:30:04', '2020-12-16 10:30:04'),
(8, 3, 2, 'mkinju', 1.00, 12, 'mkkmkmkm', '<p>kjnjjnkkjkjjkjkj</p>', 'productImage/Image.png', 1, '2020-12-16 10:30:44', '2020-12-16 10:30:44'),
(9, 3, 2, 'mkinju', 1.00, 12, 'mkkmkmkm', '<p>kjnjjnkkjkjjkjkj</p>', 'productImage/Image.png', 1, '2020-12-16 10:31:05', '2020-12-16 10:31:05'),
(10, 3, 2, 'mkinju', 11.00, 111, 'mmkkmkm', '<p>kmmkkkm</p>', 'productImage/Image.png', 1, '2020-12-16 10:31:38', '2020-12-16 10:31:38'),
(11, 3, 2, 'mkinju', 11.00, 111, 'mmkkmkm', '<p>kmmkkkm</p>', 'productImage/Image.png', 1, '2020-12-16 10:32:06', '2020-12-16 10:32:06'),
(12, 3, 2, 'mkinju', 11.00, 12, 'mkkkm', '<p>kmkmkkmkm</p>', 'productImage/Image.png', 1, '2020-12-16 10:33:07', '2020-12-16 10:33:07'),
(13, 3, 2, 'rafeed', 12.00, 12, 'rafeed', '<p>rafeed</p>', 'productImage/IMG_20200923_104328.jpg', 1, '2020-12-16 23:40:06', '2020-12-16 23:40:06'),
(14, 3, 2, 'rafeed2', 12.00, 12, 'rafeed2', '<p>rafeed2</p>', 'productImage/IMG_20200923_104328.jpg', 1, '2020-12-16 23:45:41', '2020-12-16 23:45:41'),
(15, 3, 2, 'rafeed2', 12.00, 12, 'rafeed2', '<p>rafeed2</p>', 'productImage/IMG_20200923_104328.jpg', 1, '2020-12-16 23:46:31', '2020-12-16 23:46:31'),
(16, 3, 2, 'rafeed', 12.00, 12, 'rafeed', '<p>rafeed</p>', 'productImage/IMG_20200923_104328.jpg', 1, '2020-12-16 23:46:38', '2020-12-16 23:46:38'),
(17, 3, 2, 'rafeed', 12.00, 12, 'rafeed', '<p>rafeed</p>', 'productImage/IMG_20200923_104328.jpg', 1, '2020-12-16 23:47:53', '2020-12-16 23:47:53'),
(18, 3, 2, 'rafeed', 12.00, 12, 'rafeed', '<p>rafeed</p>', 'productImage/IMG_20200923_104328.jpg', 1, '2020-12-16 23:48:30', '2020-12-16 23:48:30'),
(19, 3, 2, 'rafeed3', 12.00, 12, 'rafeed3', '<p>rafeed3</p>', 'productImage/IMG_20200923_104328.jpg', 1, '2020-12-16 23:49:05', '2020-12-16 23:49:05'),
(20, 3, 2, 'rafeed3', 12.00, 12, 'rafeed3', '<p>rafeed3</p>', 'productImage/IMG_20200923_104328.jpg', 1, '2020-12-16 23:49:35', '2020-12-16 23:49:35'),
(21, 1, 1, 'mkinju', 11.00, 11, 'swadxa cx', '<p>cx cx cx&nbsp;</p>', 'png', 1, '2020-12-17 08:48:32', '2020-12-17 08:48:32'),
(22, 3, 2, 'rafeed33', 33.00, 33, 'rfdrfd', '<p>rfdrfd</p>', 'productImage/.png', 1, '2020-12-17 09:10:48', '2020-12-17 09:10:48'),
(23, 1, 2, 'rafeed new', 111.00, 2321, 'sdxsaxs new', '<p>asxasdxsadsad new</p>', 'productImage/rafeed new.jpg', 1, '2020-12-17 09:15:04', '2020-12-22 03:00:56'),
(24, 3, 2, 'rafeed4', 22.00, 22, 'vdfvdfv', '<p>dfdsefdef</p>', 'productImage/rafeed4.jpg', 1, '2020-12-17 09:16:52', '2020-12-17 09:16:52'),
(25, 1, 2, 'mkinju', 222.00, 22, 'dcdcd', '<p>dscscs</p>', 'productImage/mkinju.jpg', 1, '2020-12-17 09:18:36', '2020-12-17 09:18:36'),
(26, 1, 2, 'rafeed4444', 1234.00, 12, 'dcdsc', '<p>sdcxsdc</p>', 'productImage/rafeed4444.jpg', 1, '2020-12-17 09:24:39', '2020-12-17 09:24:39'),
(27, 1, 1, 'sc', 12.00, 12, 'ascsdcvdscvk dsnvlidnlndscf;kldwnc;wklemnd;lwmd n kjbnwodibnwindkw;ednw;kedn', '<p>kjb jldsbcljbdncwknek;wemdlqw;md&#39;lqwmd;o p jij dpowedjpoqwjopdejokdmekkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmklm;lksdmx;lsmd;lsmd</p>', 'productImage/sc.png', 1, '2020-12-17 11:24:47', '2020-12-17 11:24:47'),
(28, 5, 2, 'rafeed', 1232.00, 22, 'wdvfdeefcde', '<p>ewdwed</p>', 'productImage/rafeed.jpg', 1, '2020-12-17 11:36:07', '2020-12-17 11:36:07'),
(29, 3, 2, 'rafeed22', 22.00, 22, 'asjnj', '<p>kjanscas</p>', 'productImage/rafeed22.jpg', 0, '2020-12-17 11:36:58', '2020-12-17 11:36:58'),
(30, 3, 2, 'mkinju', 11.00, 11, 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', '<p>vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv</p>', 'productImage/mkinju.jpg', 1, '2020-12-18 08:37:38', '2020-12-18 08:37:38'),
(31, 1, 1, 'rafeed', 1.00, 1, 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '<p>fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff</p>', 'productImage/rafeed.png', 1, '2020-12-18 08:40:06', '2020-12-18 08:40:06'),
(32, 3, 2, 'rafeed', 1.00, 1, 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>', 'productImage/rafeed.jpg', 1, '2020-12-18 08:43:38', '2020-12-18 08:43:38'),
(33, 3, 2, 'rafeed', 111.00, 2, 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', '<p>vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv</p>', 'productImage/rafeed.jpg', 1, '2020-12-18 08:45:06', '2020-12-18 08:45:06'),
(34, 1, 2, 'ggg', 22.00, 22, 'frefrw', '<p>egt4rgwtw3t3wgt33gvfvwrvv</p>', 'productImage/ggg.png', 1, '2020-12-18 08:45:39', '2020-12-18 08:45:39'),
(35, 1, 1, 'rafeed', 11.00, 1, 'asssssssssssssssssssss', '<p>ewdewferfrgrgrttrb</p>', 'productImage/rafeed.jpg', 1, '2020-12-18 08:46:08', '2020-12-18 08:46:08'),
(36, 1, 1, 'rafeed', 11.00, 12, 'cefvrfvtrtrrgbtrgtb', '<p>bgrberbergbebgbgebe</p>', 'productImage/rafeed.jpg', 1, '2020-12-18 08:46:36', '2020-12-18 08:46:36'),
(37, 1, 2, 'vfvrvrf', 11.00, 121, 'e vm erwmf verwm', '<p>dfvmfrm vmkerw mv erwm</p>', 'productImage/vfvrvrf.png', 1, '2020-12-18 08:47:35', '2020-12-22 03:08:38'),
(38, 9, 1, 'rafeed new', 121.00, 11, ',dvdfsvfsvm mrwvmrw  new', '<p>&nbsp;rnk vkwr&nbsp; wkr r gmt gk</p>', 'productImage/rafeed.jpg', 1, '2020-12-18 08:48:05', '2020-12-22 03:07:39'),
(39, 9, 2, 'Samsung', 100.00, 12, 'SamsungThreeSamsungThreeSamsungThreeSamsungThree', '<p>SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree</p>', 'productImage/Samsung.jpg', 1, '2020-12-22 23:14:45', '2020-12-22 23:14:45'),
(40, 10, 3, 'SamsungTwo', 120.00, 11, 'SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree', '<p>SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree</p>', 'productImage/SamsungTwo.jpg', 1, '2020-12-22 23:15:47', '2020-12-22 23:15:47'),
(41, 11, 4, 'SamsungTwoT', 12.00, 11, 'SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree', '<p>SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree</p>', 'productImage/SamsungTwoT.jpg', 1, '2020-12-22 23:16:26', '2020-12-22 23:16:26'),
(42, 11, 5, 'Samsung02', 12.00, 11, 'SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree', '<p>SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree</p>', 'productImage/Samsung02.PNG', 1, '2020-12-22 23:17:13', '2020-12-22 23:17:13'),
(43, 13, 5, 'Samsung03', 123.00, 11, 'SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree', '<p>SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree</p>', 'productImage/Samsung03.PNG', 1, '2020-12-22 23:18:00', '2020-12-22 23:18:00'),
(44, 13, 5, 'Samsung12', 12.00, 12, 'SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree', '<p>SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree</p>', 'productImage/Samsung12.PNG', 1, '2020-12-22 23:18:33', '2020-12-22 23:18:33'),
(45, 16, 3, 'SamsungTwo12', 12.00, 12, 'SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree', '<p>SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree</p>', 'productImage/SamsungTwo12.PNG', 1, '2020-12-22 23:19:03', '2020-12-22 23:19:03'),
(46, 15, 9, 'Samsung23', 12.00, 12, 'SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree', '<p>SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree</p>', 'productImage/Samsung23.jpg', 1, '2020-12-22 23:19:52', '2020-12-22 23:19:52'),
(47, 16, 7, 'Samsung034', 13.00, 11, 'SamsungThreeSamsungThreeSamsungThreeSamsungThree', '<p>SamsungThreeSamsungThreeSamsungThreeSamsungThreeSamsungThree</p>', 'productImage/Samsung034.jpg', 1, '2020-12-22 23:20:24', '2020-12-22 23:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `shippinginfos`
--

CREATE TABLE `shippinginfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippinginfos`
--

INSERT INTO `shippinginfos` (`id`, `fullname`, `email`, `number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Rafeed Talukder', 'rafeedkhan591@gmail.com', '151515', 'Bangladesh', '2020-12-24 23:20:32', '2020-12-24 23:20:32'),
(2, 'Rafeed Talukder', 'rafeedkhan591@gmail.com', '21121221', 'Bangladesh', '2020-12-25 09:14:47', '2020-12-25 09:14:47'),
(3, 'Rafeed Talukder', 'rafeedkhan591@gmail.com', '21121221', 'Bangladesh', '2020-12-25 11:06:42', '2020-12-25 11:06:42'),
(4, 'Rafeed Talukder', 'rafeedkhan591@gmail.com', '151515', 'Bangladesh', '2020-12-25 11:29:26', '2020-12-25 11:29:26'),
(5, 'Rafeed dd Talukderdd', 'engrrafeed.nbmch@gmail.com', '121212', 'Bangladesh', '2020-12-26 07:36:27', '2020-12-26 07:36:27'),
(6, 'Rafeed cc Talukderc', 'engrrafeed.nbmch@gmail.com', '0000015155', 'Bangladesh', '2020-12-26 07:38:28', '2020-12-26 07:38:28'),
(7, 'Rafeed Talukder', 'rafeedkhan591@gmail.com', '123456', 'Bangladesh', '2020-12-26 08:08:13', '2020-12-26 08:08:13'),
(8, 'Rafeed Talukder', 'rafeedkhan591@gmail.com', '123456', 'Bangladesh', '2020-12-26 09:41:23', '2020-12-26 09:41:23'),
(9, 'Rafeed Talukder', 'rafeedkhan591@gmail.com', '123456', 'Bangladesh', '2020-12-27 08:46:12', '2020-12-27 08:46:12'),
(10, 'Rafeed Talukder', 'engrrafeed.nbmch@gmail.com', '0000015155', 'Bangladesh', '2020-12-27 08:48:00', '2020-12-27 08:48:00'),
(11, 'Rafeed Talukder', 'engrrafeed.nbmch@gmail.com', '0000015155', 'Bangladesh', '2020-12-27 09:03:06', '2020-12-27 09:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rafeed', 'rafeedkhan591@gmail.com', NULL, '$2y$10$kTPi01rssfkInv.jRykYGe/EzyUIk7XYySejbY283OqrhZk3JzqTa', 'YLg1QidwzCMMC8rw1FA2BASK0VAm42W4vsYPfmAloxcZbfZo2odM4tbYM9cQ', '2020-12-09 03:27:51', '2020-12-09 03:27:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippinginfos`
--
ALTER TABLE `shippinginfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `shippinginfos`
--
ALTER TABLE `shippinginfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
