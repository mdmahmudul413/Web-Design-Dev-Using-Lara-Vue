-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 09:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_batch5`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Arong', 'Arong description example', 'brand-images/download.png', 1, '2023-01-23 20:46:02', '2023-01-23 20:46:02'),
(5, 'Reebok', 'Reebok description example', 'brand-images/551064.png', 1, '2023-01-23 20:46:26', '2023-01-23 20:46:26'),
(6, 'Sony', 'Sony description example', 'brand-images/673459.png', 1, '2023-01-23 20:46:55', '2023-01-23 20:46:55'),
(7, 'One Plus', 'One Plus description example', 'brand-images/OnePlus-New-Logo-2.webp', 1, '2023-01-23 20:47:31', '2023-01-23 20:47:31'),
(8, 'Zinq', 'Zinq description example', 'brand-images/images.png', 1, '2023-01-23 20:48:20', '2023-01-23 20:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Electronics', 'Electronics description example', 'category-images/icons8-multiple-devices-50.png', 1, '2023-01-23 20:31:16', '2023-01-23 20:31:16'),
(9, 'Man Fashion', 'Man Fashion description example', 'category-images/icons8-short-sleeve-shirt-32.png', 1, '2023-01-23 20:32:09', '2023-01-23 20:32:09'),
(10, 'Woman Fashion', 'Woman Fashion example', 'category-images/icons8-wedding-dress-50.png', 1, '2023-01-23 20:32:48', '2023-01-23 20:32:48'),
(11, 'Sports Item', 'Sports Item description example', 'category-images/sports.png', 1, '2023-01-23 20:33:15', '2023-01-23 20:33:15'),
(12, 'Childs Fashion', 'Childs Fashion description example', 'category-images/icons8-necklace-64.png', 1, '2023-01-23 20:34:26', '2023-01-23 20:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_01_10_040911_create_sessions_table', 1),
(7, '2023_01_13_034231_create_categories_table', 2),
(8, '2023_01_16_174544_create_sub_categories_table', 3),
(9, '2023_01_17_090800_create_brands_table', 4),
(10, '2023_01_17_094400_create_units_table', 5),
(11, '2023_01_19_174402_create_products_table', 6),
(12, '2023_01_19_174527_create_other_images_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `other_images`
--

CREATE TABLE `other_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_images`
--

INSERT INTO `other_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(4, 2, 'product-other-images/22532.jpg', '2023-01-22 10:28:16', '2023-01-22 10:28:16'),
(5, 2, 'product-other-images/41983.png', '2023-01-22 10:28:16', '2023-01-22 10:28:16'),
(6, 2, 'product-other-images/40358.jpg', '2023-01-22 10:28:16', '2023-01-22 10:28:16'),
(7, 1, 'product-other-images/25806.jpg', '2023-01-23 11:39:26', '2023-01-23 11:39:26'),
(8, 1, 'product-other-images/15335.jpg', '2023-01-23 11:39:26', '2023-01-23 11:39:26'),
(9, 3, 'product-other-images/18191.jpg', '2023-01-23 21:07:51', '2023-01-23 21:07:51'),
(10, 3, 'product-other-images/28642.jfif', '2023-01-23 21:07:51', '2023-01-23 21:07:51'),
(11, 3, 'product-other-images/18259.jpg', '2023-01-23 21:07:51', '2023-01-23 21:07:51'),
(12, 4, 'product-other-images/33815.jpg', '2023-01-23 21:14:08', '2023-01-23 21:14:08'),
(13, 4, 'product-other-images/38697.jfif', '2023-01-23 21:14:08', '2023-01-23 21:14:08'),
(14, 4, 'product-other-images/13690.png', '2023-01-23 21:14:08', '2023-01-23 21:14:08'),
(15, 5, 'product-other-images/30915.jpg', '2023-01-24 23:32:21', '2023-01-24 23:32:21'),
(16, 5, 'product-other-images/39204.png', '2023-01-24 23:32:21', '2023-01-24 23:32:21'),
(17, 5, 'product-other-images/15800.jfif', '2023-01-24 23:32:21', '2023-01-24 23:32:21');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_amount` int(11) NOT NULL,
  `regular_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `hit_count` int(11) NOT NULL DEFAULT 0,
  `featured_count` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `unit_id`, `name`, `code`, `stock_amount`, `regular_price`, `selling_price`, `short_description`, `long_description`, `image`, `status`, `hit_count`, `featured_count`, `created_at`, `updated_at`) VALUES
(3, 10, 11, 4, 3, 'Sunnyheart Cardigan Sweater V-Neck Loose Striped Contrast Color Sweater Cardigan', 'sunnyheart123', 1232, 233, 231, 'Using buttons placket design, women sweater cardigan is convenient for you to put on and take off. Designed with patchwork striped print, women cardigan can better show your trendy charm.\r\nWhen you pair this sweater coat with jeans or slacks, you will be more stylish. Long sleeve sweater cardigan is perfect for you to keep warm while traveling.\r\nSoft polyester material makes this long sweater coat very breathable and comfortable to wear.\r\nIt is one size cardigan that is suitable for the most of the women to wear.\r\nWomen sweater coat is suitable for daily, casual, shopping, work, street, autumn, winter, and so on.', '<h2 class=\"pdp-mod-section-title outer-title\" data-spm-anchor-id=\"a2a0e.pdp.0.i2.2919awqnawqnQP\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 24px; font-family: Roboto-Medium; font-size: 16px; line-height: 52px; color: rgb(33, 33, 33); overflow: hidden; text-overflow: ellipsis; white-space: nowrap; height: 52px; background: rgb(250, 250, 250);\">Product details of Sunnyheart Cardigan Sweater V-Neck Loose Striped Contrast Color Sweater Cardigan</h2><div class=\"pdp-product-detail\" data-spm=\"product_detail\" style=\"margin: 0px; padding: 0px; position: relative; color: rgb(0, 0, 0); font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px;\"><div class=\"pdp-product-desc \" style=\"margin: 0px; padding: 5px 14px 5px 24px; height: auto; overflow-y: hidden;\"><div class=\"html-content pdp-product-highlights\" style=\"margin: 0px; padding: 11px 0px 16px; word-break: break-word; border-bottom: 1px solid rgb(239, 240, 245); overflow: hidden;\"><ul class=\"\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; overflow: hidden; columns: auto 2; column-gap: 32px;\"><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">When you pair this sweater coat with jeans or slacks, you will be more stylish. Long sleeve sweater cardigan is perfect for you to keep warm while traveling.</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">By pairing jeans or slacks, you will be more stylish. You can wear this long sleeve sweater cardigan to keep warm while traveling.</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">If you match this sweater coat with jeans or slacks, you will more stylish. While traveling, you can wear this long sleeve sweater cardigan to keep warm.</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Matched this sweater coat with jeans or slacks, you will be more stylish. It is so warm for you to wear this long sleeve sweater cardigan while traveling.</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">You will be more stylish by pairing this sweater coat with jeans or slacks. So warm is the long sleeve sweater cardigan that is suitable for traveling.</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Using buttons placket design, women sweater cardigan is convenient for you to put on and take off. Designed with patchwork striped print, women cardigan can better show your trendy charm.</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">You are easy to put on and take off when you wear this women sweater cardigan with buttons placket design. This women cardigan can better show your trendy charm because of the patchwork striped print design.</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Women sweater cardigan with buttons placket design is convenient for you to put on and take off. Trendy and simple women cardigan features patchwork striped print design.</li></ul></div><div class=\"html-content detail-content\" style=\"margin: 16px 0px 0px; padding: 0px 0px 16px; word-break: break-word; position: relative; height: auto; line-height: 19px; overflow-y: hidden; border-bottom: 1px solid rgb(239, 240, 245);\">Description:<br style=\"margin: 0px; padding: 0px;\">Using buttons placket design, women sweater cardigan is convenient for you to put on and take off. Designed with patchwork striped print, women cardigan can better show your trendy charm.<br style=\"margin: 0px; padding: 0px;\">When you pair this sweater coat with jeans or slacks, you will be more stylish. Long sleeve sweater cardigan is perfect for you to keep warm while traveling.<br style=\"margin: 0px; padding: 0px;\">Soft polyester material makes this long sweater coat very breathable and comfortable to wear.<br style=\"margin: 0px; padding: 0px;\">It is one size cardigan that is suitable for the most of the women to wear.<br style=\"margin: 0px; padding: 0px;\">Women sweater coat is suitable for daily, casual, shopping, work, street, autumn, winter, and so on.<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\">Item Name: Cardigan Sweater<br style=\"margin: 0px; padding: 0px;\">Material: Polyester<br style=\"margin: 0px; padding: 0px;\">Style: Fashion<br style=\"margin: 0px; padding: 0px;\">Gender: Women<br style=\"margin: 0px; padding: 0px;\">Size Type: Regular<br style=\"margin: 0px; padding: 0px;\">Placket: Buttons<br style=\"margin: 0px; padding: 0px;\">Sleeve Length: Long Sleeve<br style=\"margin: 0px; padding: 0px;\">Neck Type: V-Neck<br style=\"margin: 0px; padding: 0px;\">Coat Length: Regular<br style=\"margin: 0px; padding: 0px;\">Season: Spring, Autumn, Winter<br style=\"margin: 0px; padding: 0px;\">Features: Loose, Striped Print, Warm<br style=\"margin: 0px; padding: 0px;\">Size Details:<br style=\"margin: 0px; padding: 0px;\">Size: One Size,<br style=\"margin: 0px; padding: 0px;\">Shoulder: 47cm/18.5\" (Approx.)<br style=\"margin: 0px; padding: 0px;\">Bust: 118cm/46.5\" (Approx.)<br style=\"margin: 0px; padding: 0px;\">Sleeve: 61cm/24\" (Approx.)<br style=\"margin: 0px; padding: 0px;\">Waist: 112cm/44.1\" (Approx.)<br style=\"margin: 0px; padding: 0px;\">Length: 71.5cm/28.1\" (Approx.)<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\">Notes:<br style=\"margin: 0px; padding: 0px;\">Please refer to our size chart and choose the right size.<br style=\"margin: 0px; padding: 0px;\">Due to the light and screen setting difference, the item\'s color may be slightly different from the pictures.<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\">Package Includes:<br style=\"margin: 0px; padding: 0px;\">1 x Cardigan Sweater</div></div></div>', 'product-images/1674529671.jpg', 1, 0, 0, '2023-01-23 21:07:51', '2023-01-23 21:07:51'),
(4, 10, 11, 8, 3, 'Bin Saeed Kurti Pakistani Kurti', 'sas', 3132, 132123, 3422, 'Product details of Bin Saeed Kurti Pakistani Kurti', '<h2 class=\"pdp-mod-section-title outer-title\" data-spm-anchor-id=\"a2a0e.pdp.0.i3.3198SCzzSCzzR1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 24px; font-family: Roboto-Medium; font-size: 16px; line-height: 52px; color: rgb(33, 33, 33); overflow: hidden; text-overflow: ellipsis; white-space: nowrap; height: 52px; background: rgb(250, 250, 250);\">Product details of Bin Saeed Kurti Pakistani Kurti</h2><div class=\"pdp-product-detail\" data-spm=\"product_detail\" style=\"margin: 0px; padding: 0px; position: relative; color: rgb(0, 0, 0); font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px;\"><div class=\"pdp-product-desc \" style=\"margin: 0px; padding: 5px 14px 5px 24px; height: auto; overflow-y: hidden;\"><div class=\"html-content pdp-product-highlights\" style=\"margin: 0px; padding: 11px 0px 16px; word-break: break-word; border-bottom: 1px solid rgb(239, 240, 245); overflow: hidden;\"><ul class=\"\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; overflow: hidden; columns: auto 2; column-gap: 32px;\"><li class=\"\" data-spm-anchor-id=\"a2a0e.pdp.product_detail.i0.3198SCzzSCzzR1\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Product: Same as picture</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Material: Silk</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Colour: Maroon</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Body: 38-44</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Long: 42</li></ul></div><div class=\"html-content detail-content\" style=\"margin: 16px 0px 0px; padding: 0px 0px 16px; word-break: break-word; position: relative; height: auto; line-height: 19px; overflow-y: hidden; border-bottom: 1px solid rgb(239, 240, 245);\"><span style=\"margin: 0px; padding: 0px;\"></span></div><div class=\"pdp-mod-specification\" style=\"margin: 16px 0px 0px; padding: 0px 0px 10px; border-bottom: 1px solid rgb(239, 240, 245); font-size: 14px;\"><h2 class=\"pdp-mod-section-title \" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-family: Roboto-Medium; font-size: 16px; line-height: 19px; color: rgb(33, 33, 33); letter-spacing: 0px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;\">Specifications of Bin Saeed Kurti Pakistani Kurti</h2><div class=\"pdp-general-features\" style=\"margin: 0px; padding: 0px;\"><ul class=\"specification-keys\" style=\"margin: 16px -15px 0px; padding: 0px; list-style: none; height: auto;\"><li class=\"key-li\" style=\"margin: 0px 0px 8px; padding: 0px 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin: 0px 18px 0px 0px; padding: 0px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word;\">Brand</span><div class=\"html-content key-value\" style=\"margin: 0px; padding: 0px; word-break: break-word; display: inline-block; width: 306px;\">No Brand</div></li><li class=\"key-li\" style=\"margin: 0px 0px 8px; padding: 0px 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin: 0px 18px 0px 0px; padding: 0px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word;\">SKU</span><div class=\"html-content key-value\" style=\"margin: 0px; padding: 0px; word-break: break-word; display: inline-block; width: 306px;\">205821957_BD-1161070764</div></li><li class=\"key-li\" style=\"margin: 0px 0px 8px; padding: 0px 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin: 0px 18px 0px 0px; padding: 0px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word;\">Main Material</span><div class=\"html-content key-value\" style=\"margin: 0px; padding: 0px; word-break: break-word; display: inline-block; width: 306px;\">Silk</div></li></ul></div><div class=\"box-content\" style=\"margin: 28px 0px 0px; padding: 0px;\"><span class=\"key-title\" style=\"margin: 0px; padding: 0px; display: table-cell; width: 140px; color: rgb(117, 117, 117); word-break: break-word;\">What’s in the box</span><div class=\"html-content box-content-html\" style=\"margin: 0px; padding: 0px 0px 0px 18px; word-break: break-word; display: table-cell;\">1 piece Bin Saeed Kurti</div></div></div></div></div>', 'product-images/1674530048.jfif', 1, 0, 0, '2023-01-23 21:14:08', '2023-01-23 21:14:08'),
(5, 8, 7, 6, 3, 'Washing Machine', 'dadf', 11, 1233, 123, 'asdd', '<p>assdff</p>', 'product-images/1674624741.jpg', 1, 0, 0, '2023-01-24 23:32:21', '2023-01-24 23:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ZIggWkx6NvBkGpAYWJLXPGiM48K15GlrvtnuIuIo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36 Edg/106.0.1370.42', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUXZOeWZ0MVJmR3piNTJqSnlzN3JSZG5sTGVJdlo2QUluWHkzeGR6aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXJ0L3Nob3ctaXRlbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MjY6IjR5VGxUREt1M29KT2Z6RF9jYXJ0X2l0ZW1zIjtPOjMyOiJEYXJyeWxkZWNvZGVcQ2FydFxDYXJ0Q29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YTozOntpOjM7TzozMjoiRGFycnlsZGVjb2RlXENhcnRcSXRlbUNvbGxlY3Rpb24iOjM6e3M6ODoiACoAaXRlbXMiO2E6Njp7czoyOiJpZCI7aTozO3M6NDoibmFtZSI7czo4MDoiU3VubnloZWFydCBDYXJkaWdhbiBTd2VhdGVyIFYtTmVjayBMb29zZSBTdHJpcGVkIENvbnRyYXN0IENvbG9yIFN3ZWF0ZXIgQ2FyZGlnYW4iO3M6NToicHJpY2UiO2k6MjMxO3M6ODoicXVhbnRpdHkiO2k6MjtzOjEwOiJhdHRyaWJ1dGVzIjtPOjQxOiJEYXJyeWxkZWNvZGVcQ2FydFxJdGVtQXR0cmlidXRlQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YTozOntzOjU6ImltYWdlIjtzOjI5OiJwcm9kdWN0LWltYWdlcy8xNjc0NTI5NjcxLmpwZyI7czo4OiJjYXRlZ29yeSI7czoxMzoiV29tYW4gRmFzaGlvbiI7czo1OiJicmFuZCI7czo1OiJBcm9uZyI7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czoxMDoiY29uZGl0aW9ucyI7YTowOnt9fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDtzOjk6IgAqAGNvbmZpZyI7YTo2OntzOjE0OiJmb3JtYXRfbnVtYmVycyI7YjowO3M6ODoiZGVjaW1hbHMiO2k6MDtzOjk6ImRlY19wb2ludCI7czoxOiIuIjtzOjEzOiJ0aG91c2FuZHNfc2VwIjtzOjE6IiwiO3M6Nzoic3RvcmFnZSI7TjtzOjY6ImV2ZW50cyI7Tjt9fWk6NDtPOjMyOiJEYXJyeWxkZWNvZGVcQ2FydFxJdGVtQ29sbGVjdGlvbiI6Mzp7czo4OiIAKgBpdGVtcyI7YTo2OntzOjI6ImlkIjtpOjQ7czo0OiJuYW1lIjtzOjMxOiJCaW4gU2FlZWQgS3VydGkgUGFraXN0YW5pIEt1cnRpIjtzOjU6InByaWNlIjtpOjM0MjI7czo4OiJxdWFudGl0eSI7czoxOiIxIjtzOjEwOiJhdHRyaWJ1dGVzIjtPOjQxOiJEYXJyeWxkZWNvZGVcQ2FydFxJdGVtQXR0cmlidXRlQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YTozOntzOjU6ImltYWdlIjtzOjMwOiJwcm9kdWN0LWltYWdlcy8xNjc0NTMwMDQ4LmpmaWYiO3M6ODoiY2F0ZWdvcnkiO3M6MTM6IldvbWFuIEZhc2hpb24iO3M6NToiYnJhbmQiO3M6NDoiWmlucSI7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czoxMDoiY29uZGl0aW9ucyI7YTowOnt9fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDtzOjk6IgAqAGNvbmZpZyI7YTo2OntzOjE0OiJmb3JtYXRfbnVtYmVycyI7YjowO3M6ODoiZGVjaW1hbHMiO2k6MDtzOjk6ImRlY19wb2ludCI7czoxOiIuIjtzOjEzOiJ0aG91c2FuZHNfc2VwIjtzOjE6IiwiO3M6Nzoic3RvcmFnZSI7TjtzOjY6ImV2ZW50cyI7Tjt9fWk6NTtPOjMyOiJEYXJyeWxkZWNvZGVcQ2FydFxJdGVtQ29sbGVjdGlvbiI6Mzp7czo4OiIAKgBpdGVtcyI7YTo2OntzOjI6ImlkIjtpOjU7czo0OiJuYW1lIjtzOjE1OiJXYXNoaW5nIE1hY2hpbmUiO3M6NToicHJpY2UiO2k6MTIzO3M6ODoicXVhbnRpdHkiO3M6MToiMSI7czoxMDoiYXR0cmlidXRlcyI7Tzo0MToiRGFycnlsZGVjb2RlXENhcnRcSXRlbUF0dHJpYnV0ZUNvbGxlY3Rpb24iOjI6e3M6ODoiACoAaXRlbXMiO2E6Mzp7czo1OiJpbWFnZSI7czoyOToicHJvZHVjdC1pbWFnZXMvMTY3NDYyNDc0MS5qcGciO3M6ODoiY2F0ZWdvcnkiO3M6MTE6IkVsZWN0cm9uaWNzIjtzOjU6ImJyYW5kIjtzOjQ6IlNvbnkiO31zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fXM6MTA6ImNvbmRpdGlvbnMiO2E6MDp7fX1zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7czo5OiIAKgBjb25maWciO2E6Njp7czoxNDoiZm9ybWF0X251bWJlcnMiO2I6MDtzOjg6ImRlY2ltYWxzIjtpOjA7czo5OiJkZWNfcG9pbnQiO3M6MToiLiI7czoxMzoidGhvdXNhbmRzX3NlcCI7czoxOiIsIjtzOjc6InN0b3JhZ2UiO047czo2OiJldmVudHMiO047fX19czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319', 1674708507);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, 8, 'Laptop', 'Laptop description example', 'sub-category-images/monitor.png', 1, '2023-01-23 20:35:42', '2023-01-23 20:35:42'),
(7, 8, 'Television', 'Television description example', 'sub-category-images/television.png', 1, '2023-01-23 20:36:12', '2023-01-23 20:36:12'),
(8, 10, 'Skirt', 'Skirt description example', 'sub-category-images/skirt.png', 1, '2023-01-23 20:36:58', '2023-01-23 20:36:58'),
(9, 9, 'Shoe', 'Shoe description example', 'sub-category-images/2615478.png', 1, '2023-01-23 20:37:31', '2023-01-23 20:37:31'),
(10, 8, 'Smart Watch', 'Smart Watch description example', 'sub-category-images/8645846.png', 1, '2023-01-23 20:37:59', '2023-01-23 20:37:59'),
(11, 10, 'Woman T-Shirt', 'Woman T-Shirt description example', 'sub-category-images/icons8-womens-t-shirt-80.png', 1, '2023-01-23 20:38:33', '2023-01-23 20:38:33'),
(12, 12, 'Trouser', 'Trouser description example', 'sub-category-images/trousers.png', 1, '2023-01-23 20:39:06', '2023-01-23 20:39:06'),
(13, 8, 'Mobile', 'Mobile description example', 'sub-category-images/mobile-phone.png', 1, '2023-01-23 20:39:45', '2023-01-23 20:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `code`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Piece', 'pis', 'Piece Desc', 1, '2023-01-18 06:55:08', '2023-01-18 06:55:08'),
(4, 'Dozen', 'doz', 'Dozen Description', 1, '2023-01-18 06:55:31', '2023-01-18 06:55:31'),
(5, 'Kilogram', 'KG', 'KG description example', 1, '2023-01-23 20:49:10', '2023-01-23 20:49:10'),
(6, 'Box', 'box', 'box description example', 1, '2023-01-23 20:49:33', '2023-01-23 20:49:33');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Lempi Rowe', 'ebalistreri@example.com', '2023-01-10 02:43:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'IolIE8qU2emX8RiTenFU4aZtvu4uFODiA0sbmBbdU1HljAQafVi0maHhe0oM', NULL, NULL, '2023-01-10 02:43:13', '2023-01-10 02:43:13'),
(2, 'Prof. Orlando Eichmann Sr.', 'ibalistreri@example.net', '2023-01-10 02:43:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'fXSddLpWcJzGicDCMGBYuk830hcjmYzvXnMGNoJkwb0IVb01PTOunW7ZLBk2', NULL, NULL, '2023-01-10 02:43:13', '2023-01-10 02:43:13'),
(3, 'Miss Yvonne Satterfield III', 'lvandervort@example.org', '2023-01-10 02:43:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'TIJFHOjtYdvj8QVvvca80qiXtreKwVHtGN3YgQfPWX3H3CluiDlujZk3lNkE', NULL, NULL, '2023-01-10 02:43:13', '2023-01-10 02:43:13'),
(4, 'Selena Ziemann', 'block.gavin@example.com', '2023-01-10 02:43:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'cuRtreglx1', NULL, NULL, '2023-01-10 02:43:13', '2023-01-10 02:43:13'),
(5, 'Ms. Delia Homenick', 'zlittle@example.org', '2023-01-10 02:43:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'YCbf6UmM1f', NULL, NULL, '2023-01-10 02:43:13', '2023-01-10 02:43:13'),
(6, 'Ms. Talia Kirlin PhD', 'delbert.moen@example.org', '2023-01-10 02:43:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '5NMGV3oioA', NULL, NULL, '2023-01-10 02:43:13', '2023-01-10 02:43:13'),
(7, 'Dr. Yesenia Ledner', 'hrenner@example.org', '2023-01-10 02:43:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'blibVGfTQQ', NULL, NULL, '2023-01-10 02:43:13', '2023-01-10 02:43:13'),
(8, 'Abdiel Renner', 'oma.price@example.com', '2023-01-10 02:43:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'd5vnpvxJEx', NULL, NULL, '2023-01-10 02:43:13', '2023-01-10 02:43:13'),
(9, 'Mr. Justyn Williamson', 'braun.susan@example.org', '2023-01-10 02:43:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'lGdXY48uSm', NULL, NULL, '2023-01-10 02:43:13', '2023-01-10 02:43:13'),
(10, 'Julien Kihn', 'corwin.korey@example.net', '2023-01-10 02:43:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'XTu1maRoVQ', NULL, NULL, '2023-01-10 02:43:14', '2023-01-10 02:43:14'),
(11, 'Mahmud', 'admin@gmail.com', NULL, '$2y$10$BuMVGjH8IsEcpl0JQmA32.Vra4KyGRW97HjzYfqRUcAc9MlOU2hi2', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 03:10:57', '2023-01-10 03:10:57');

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
-- Indexes for table `other_images`
--
ALTER TABLE `other_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `other_images`
--
ALTER TABLE `other_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
