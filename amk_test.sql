-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 03:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amk_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `teacher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, '1A', 5, '2023-04-01 17:24:38', '2023-04-01 17:24:38'),
(2, '1B', 1, '2023-04-01 17:24:38', '2023-04-01 17:24:38'),
(3, '1C', 3, '2023-04-01 17:24:38', '2023-04-01 17:24:38'),
(4, '1D', 4, '2023-04-01 17:24:38', '2023-04-01 17:24:38'),
(5, 'test 2', NULL, '2023-04-02 06:25:34', '2023-04-02 06:26:29');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `phone`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mrs. Leonora Aufderhar', '74205 Wiza Tunnel Apt. 555\nSchummview, KY 37853-6723', '+1-541-634-9326', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(2, 'Deangelo Ondricka', '77724 Keeling Trail\nStehrfurt, KS 42623', '1-251-768-5923', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(3, 'Sallie Simonis', '4556 D\'Amore Pike\nAndreannefurt, IL 53116', '+1-912-664-3808', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(4, 'Prof. Yoshiko Huel', '2360 Nettie Green\nLake Hallie, WV 19994-0287', '+1-412-351-3477', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(5, 'Luz Fisher', '17052 Lucy Spring\nLillianbury, NH 12071', '(925) 498-8458', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(6, 'test', 'test', '100', '2023-04-02 07:44:45', '2023-04-02 17:44:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `extracurriculars`
--

CREATE TABLE `extracurriculars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extracurriculars`
--

INSERT INTO `extracurriculars` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Basket', '2023-04-01 17:24:39', '2023-04-01 17:24:39'),
(2, 'Voley', '2023-04-01 17:24:39', '2023-04-01 17:24:39'),
(3, 'Football', '2023-04-01 17:24:39', '2023-04-01 17:24:39'),
(4, 'PMI', '2023-04-01 17:24:39', '2023-04-01 17:24:39'),
(5, 'Pramuka', '2023-04-01 17:24:39', '2023-04-01 17:24:39'),
(6, 'test', '2023-04-02 07:17:36', '2023-04-02 07:17:36'),
(7, 'test', '2023-04-02 08:37:57', '2023-04-02 08:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'possimus', '13584.00', 'Laborum veniam quidem fugit nostrum. Delectus ipsum dicta sit pariatur nisi vero. Adipisci dolor incidunt aliquam consequatur expedita dolor libero et. Cumque et provident aut placeat iusto officia.', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(2, 'hic', '3440.00', 'Minima autem enim aut aperiam. Numquam fugit culpa ab tenetur ipsa quis. Earum dolor eos dolorum nesciunt est officiis culpa. Aut dicta aspernatur maxime id reprehenderit voluptas.', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(3, 'ut', '76908.00', 'Ut non voluptatum repudiandae ipsum nam. Et modi temporibus dolores ipsa ab in. Omnis vel minima quia reprehenderit cumque. Illo facilis dolores amet rerum sequi.', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(4, 'laudantium', '60281.00', 'Id voluptate ut eaque cumque molestias laboriosam ipsum. Quia et sit sed voluptas eum iste. Et minima facere officiis consequatur aut sed nihil.', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(5, 'aut', '4546.00', 'Voluptas vel aut sunt eos eligendi suscipit. Molestiae unde sit sint sint quia. Dolor aut suscipit at explicabo odio dolor ipsa. Minus illum explicabo nihil voluptatibus quia odio in repellendus.', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(6, 'test 2', '22.00', 'test 2', '2023-04-02 07:33:11', '2023-04-02 17:48:12', '2023-04-02 17:48:12');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_03_31_142751_create_customers_table', 1),
(5, '2023_03_31_142829_create_orders_table', 1),
(6, '2023_03_31_142830_add_customer_id_column_to_orders_table', 1),
(7, '2023_03_31_142924_create_items_table', 1),
(8, '2023_03_31_145100_create_order_items_table', 1),
(9, '2023_03_31_145105_add_order_id_column_to_order_items_table', 1),
(10, '2023_03_31_145110_add_item_id_column_to_order_items_table', 1),
(11, '2023_03_31_145835_create_students_table', 1),
(12, '2023_03_31_150842_add_gender_column_to_students_table', 1),
(13, '2023_03_31_152802_change_gender_attributes_in_students_table', 1),
(14, '2023_03_31_153718_create_class_table', 1),
(15, '2023_03_31_154438_add_class_id_column_to_students_table', 1),
(16, '2023_04_01_032549_add_unique_rule_in_class_table', 1),
(17, '2023_04_01_045136_create_roles_table', 1),
(18, '2023_04_01_045918_add_role_id_column_to_users_table', 1),
(19, '2023_04_01_132518_create_extracurriculars_table', 1),
(20, '2023_04_01_134525_create_student_extracurricular_table', 1),
(21, '2023_04_01_141837_create_teachers_table', 1),
(22, '2023_04_01_143406_add_teacher_id_column_to_class_table', 1),
(23, '2023_04_02_230512_add_soft_delete_column_to_customers_table', 2),
(24, '2023_04_02_231116_add_soft_delete_column_to_items_table', 3),
(25, '2023_04_02_231241_add_soft_delete_column_to_orders_table', 4),
(26, '2023_04_02_231345_add_soft_delete_column_to_order_items_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `date`, `customer_id`, `address`, `subtotal`, `discount`, `total`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '0101001', '2023-04-02', 1, 'test', '4.00', '2.00', '2.00', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(2, '0101002', '2023-04-02', 2, 'test', '4.00', '2.00', '2.00', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(3, '0101003', '2023-04-02', 4, 'test', '4.00', '2.00', '2.00', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(4, '0101004', '2023-04-02', 3, 'test', '4.00', '2.00', '2.00', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(5, 'test 2', '2023-04-02', 5, 'test 2', '5.00', '6.00', '7.00', '2023-04-02 07:58:37', '2023-04-02 09:16:21', NULL),
(7, 'test', '2023-04-03', 6, 'test', '6.00', '7.00', '8.00', '2023-04-02 15:54:03', '2023-04-02 17:44:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `note` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `item_id`, `qty`, `price`, `discount`, `total`, `note`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 5, 4, '5.00', '2.00', '18.00', 'notes sample', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(2, 2, 4, 4, '5.00', '2.00', '18.00', 'notes sample', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(3, 3, 3, 4, '5.00', '2.00', '18.00', 'notes sample', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(4, 3, 1, 4, '5.00', '2.00', '18.00', 'notes sample', '2023-04-01 17:24:40', '2023-04-01 17:24:40', NULL),
(5, 5, 6, 5, '6.00', '7.00', '8.00', 'test note 2', '2023-04-02 08:15:19', '2023-04-02 17:27:04', NULL);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-04-01 17:24:41', '2023-04-01 17:24:41'),
(2, 'Teacher', '2023-04-01 17:24:41', '2023-04-01 17:24:41'),
(3, 'Student', '2023-04-01 17:24:41', '2023-04-01 17:24:41'),
(4, 'Superadmin', '2023-04-01 17:24:41', '2023-04-01 17:24:41'),
(5, 'Staff', '2023-04-01 17:24:41', '2023-04-01 17:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `nis` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `gender`, `nis`, `created_at`, `updated_at`, `class_id`) VALUES
(1, '1A', 'P', '8134512', '2023-04-01 17:24:39', '2023-04-02 06:19:50', 1),
(2, 'hic', 'P', '9560959', '2023-04-01 17:24:39', '2023-04-02 08:58:54', 3),
(3, 'Prof. Jamil Beier IV', 'L', '3761046', '2023-04-01 17:24:39', '2023-04-01 17:24:39', 1),
(4, 'Kyleigh Koelpin', 'L', '7232412', '2023-04-01 17:24:39', '2023-04-01 17:24:39', 1),
(5, 'Dr. Bettie Sipes', 'P', '8461638', '2023-04-01 17:24:39', '2023-04-01 17:24:39', 2),
(6, 'test', 'L', '36345234', '2023-04-01 22:04:20', '2023-04-02 09:03:44', 3),
(8, 'test 3', 'L', '678457', '2023-04-01 22:17:29', '2023-04-01 22:17:29', 3),
(9, 'test 4', 'L', '78457', '2023-04-01 23:12:03', '2023-04-01 23:12:03', 3),
(10, 'test 5', 'P', '234246', '2023-04-01 23:13:16', '2023-04-01 23:13:16', 2),
(13, 'test', 'L', 'test', '2023-04-02 08:39:20', '2023-04-02 08:39:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_extracurricular`
--

CREATE TABLE `student_extracurricular` (
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `extracurricular_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bambang', '2023-04-01 17:24:39', '2023-04-01 17:24:39'),
(2, 'Tono', '2023-04-01 17:24:39', '2023-04-01 17:24:39'),
(3, 'Mulyono', '2023-04-01 17:24:39', '2023-04-01 17:24:39'),
(4, 'Siti', '2023-04-01 17:24:40', '2023-04-01 17:24:40'),
(5, 'Ani', '2023-04-01 17:24:40', '2023-04-01 17:24:40'),
(6, 'test', '2023-04-02 07:15:46', '2023-04-02 07:15:46'),
(7, 'test', '2023-04-02 08:38:34', '2023-04-02 08:38:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@mail.com', 1, NULL, '$2y$10$59hNSRlq2fENT/8EjASNJuVLxRXWd5WCeDui1rkJyCG3Viq7zcc5m', NULL, '2023-04-01 17:24:41', '2023-04-01 17:24:41'),
(2, 'Superadmin', 'superadmin@mail.com', 4, NULL, '$2y$10$IBkg.EZ.lbiryilBlnhrpOIYC/z7KZBWxxHkfqBxFEwNb/z6OYBF.', NULL, '2023-04-01 17:24:42', '2023-04-01 17:24:42'),
(3, 'Staff', 'staff@mail.com', 5, NULL, '$2y$10$ffeKnQMqps.9YVKX9nkTgOzF6Fbfg3DLZ.pfDgOxQ1AH2sXLR8dA2', NULL, '2023-04-01 17:24:42', '2023-04-01 17:24:42'),
(4, 'Teacher', 'teacher@mail.com', 2, NULL, '$2y$10$AL3AZX/s1xjsXSAz2VS6QelzoXUYXCYhtMDcx1JGDUad3yURc9DqS', NULL, '2023-04-01 17:24:42', '2023-04-01 17:24:42'),
(5, 'Student', 'student@mail.com', 3, NULL, '$2y$10$iw7gcgBVdDekBxLvCH6qFOUpTS9.I7jQHkSApJESWz.bmuMwIUH8i', NULL, '2023-04-01 17:24:42', '2023-04-01 17:24:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `class_name_unique` (`name`),
  ADD KEY `class_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extracurriculars`
--
ALTER TABLE `extracurriculars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_item_id_foreign` (`item_id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_class_id_foreign` (`class_id`);

--
-- Indexes for table `student_extracurricular`
--
ALTER TABLE `student_extracurricular`
  ADD KEY `student_extracurricular_student_id_foreign` (`student_id`),
  ADD KEY `student_extracurricular_extracurricular_id_foreign` (`extracurricular_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `extracurriculars`
--
ALTER TABLE `extracurriculars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);

--
-- Constraints for table `student_extracurricular`
--
ALTER TABLE `student_extracurricular`
  ADD CONSTRAINT `student_extracurricular_extracurricular_id_foreign` FOREIGN KEY (`extracurricular_id`) REFERENCES `extracurriculars` (`id`),
  ADD CONSTRAINT `student_extracurricular_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
