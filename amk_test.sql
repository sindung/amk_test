-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 08:35 AM
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
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `teacher_id` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `teacher_id`, `created_at`, `updated_at`) VALUES
('102e7d20-0a91-4429-815e-673ba0d2414f', '1C', 'e1f6a4f0-8b18-4172-8f61-806cc857e6c4', '2023-04-03 23:34:05', '2023-04-03 23:34:05'),
('1a778006-e695-4d8b-9446-db2cf276cc8e', '1A', '4b71503f-0ea4-473b-b380-78ea80cf0077', '2023-04-03 23:34:05', '2023-04-03 23:34:05'),
('260be3f9-796a-4376-81b9-29b5c4b088f9', '1B', '89ed61ae-4032-4e3e-8170-1adf65d5bdea', '2023-04-03 23:34:05', '2023-04-03 23:34:05'),
('2f941745-4a80-4e59-a11c-f540ab348ceb', '1E', '11c61955-853c-4f4f-a75d-5512561b7f99', '2023-04-03 23:34:05', '2023-04-03 23:34:05'),
('5f069ed1-a35a-42d4-a357-3978cad6be3b', '1D', 'baf2e1c2-c5d8-4d5f-9280-7d08c5f6ffba', '2023-04-03 23:34:05', '2023-04-03 23:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` char(36) NOT NULL,
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
('0d9e5c7e-d9ac-4912-a824-e3fe5330cdce', 'Mr. Vidal Keeling MD', '21214 Cathy Rapid Suite 220\nMurrayberg, OR 40970-3687', '430.801.3236', '2023-04-03 23:34:06', '2023-04-03 23:34:06', NULL),
('5a68b759-b2ac-4302-94af-50e0e0cff7e5', 'Leif Kemmer DVM', '8755 Williamson Meadow\nNew Francesca, NJ 26561-0053', '520.574.2596', '2023-04-03 23:34:06', '2023-04-03 23:34:06', NULL),
('6a0594fb-70da-4182-a0c2-6c09c37f1316', 'Kathryn Wehner', '5146 Hickle Harbors Suite 318\nNorth Dewittbury, ID 49754', '630-325-2964', '2023-04-03 23:34:06', '2023-04-03 23:34:06', NULL),
('703a4942-0ba3-4880-a849-0b639abfd8d0', 'Henderson Moore', '813 Kathleen Route Apt. 988\nAlexanneton, IN 81183', '+1-832-212-1128', '2023-04-03 23:34:06', '2023-04-03 23:34:06', NULL),
('e0feeb6b-f908-4a31-9b40-388f54a69e5b', 'Rachelle Rosenbaum', '49705 Mayer Trace\nLake Omariton, NY 57325', '641-416-6627', '2023-04-03 23:34:06', '2023-04-03 23:34:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `extracurriculars`
--

CREATE TABLE `extracurriculars` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
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
(23, '2023_04_02_230512_add_soft_delete_column_to_customers_table', 1),
(24, '2023_04_02_231116_add_soft_delete_column_to_items_table', 1),
(25, '2023_04_02_231241_add_soft_delete_column_to_orders_table', 1),
(26, '2023_04_02_231345_add_soft_delete_column_to_order_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` char(36) NOT NULL,
  `code` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `customer_id` char(36) NOT NULL,
  `address` varchar(255) NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` char(36) NOT NULL,
  `order_id` char(36) NOT NULL,
  `item_id` char(36) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `note` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
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
  `id` char(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
('11436bb4-7c9a-4fae-b8e5-b39c07f3f972', 'Student', '2023-04-03 23:34:06', '2023-04-03 23:34:06'),
('690176ab-ae8f-4813-bc92-4b0a92a5d5d9', 'Admin', '2023-04-03 23:34:06', '2023-04-03 23:34:06'),
('7aab8e73-af62-4959-aa09-e1bcfeefcded', 'Teacher', '2023-04-03 23:34:06', '2023-04-03 23:34:06'),
('83917a34-fa93-4693-a526-e4532f1d5a00', 'Staff', '2023-04-03 23:34:06', '2023-04-03 23:34:06'),
('afb22cbe-96f1-47d1-8f6c-554cefab1eba', 'Superadmin', '2023-04-03 23:34:06', '2023-04-03 23:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `nis` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `class_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_extracurricular`
--

CREATE TABLE `student_extracurricular` (
  `student_id` char(36) NOT NULL,
  `extracurricular_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `created_at`, `updated_at`) VALUES
('11c61955-853c-4f4f-a75d-5512561b7f99', 'Bambang', '2023-04-03 23:34:05', '2023-04-03 23:34:05'),
('4b71503f-0ea4-473b-b380-78ea80cf0077', 'Tono', '2023-04-03 23:34:05', '2023-04-03 23:34:05'),
('89ed61ae-4032-4e3e-8170-1adf65d5bdea', 'Mulyono', '2023-04-03 23:34:05', '2023-04-03 23:34:05'),
('baf2e1c2-c5d8-4d5f-9280-7d08c5f6ffba', 'Siti', '2023-04-03 23:34:05', '2023-04-03 23:34:05'),
('e1f6a4f0-8b18-4172-8f61-806cc857e6c4', 'Ani', '2023-04-03 23:34:05', '2023-04-03 23:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` char(36) DEFAULT NULL,
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
('7a809e64-c050-4b2f-a185-9a29db124c23', 'Staff', 'staff@mail.com', '83917a34-fa93-4693-a526-e4532f1d5a00', NULL, '$2y$10$yD.NqpLph3dRGl0vSRW5..THihkaw49O7mWsmEBBnMCAzvDh.eX/6', NULL, '2023-04-03 23:34:06', '2023-04-03 23:34:06'),
('c8d554b9-5940-4d99-85a8-ab8791144bfb', 'Student', 'student@mail.com', '11436bb4-7c9a-4fae-b8e5-b39c07f3f972', NULL, '$2y$10$T7ivqfot1tcTd/eOgQ4Y5u0dpZUHn1JaL36KCOBMDn6.4.iHRKWc6', NULL, '2023-04-03 23:34:07', '2023-04-03 23:34:07'),
('d50b6e63-9fa4-46c5-b7a1-044f6d382d68', 'Superadmin', 'superadmin@mail.com', 'afb22cbe-96f1-47d1-8f6c-554cefab1eba', NULL, '$2y$10$0WzAlNXbSvb64QkRZ6NjUuwGrOZyKvhn3XUfPHAYWAeAIyRP/q2ta', NULL, '2023-04-03 23:34:06', '2023-04-03 23:34:06'),
('e358ee88-2d3f-4620-82a5-9b31cf490025', 'Teacher', 'teacher@mail.com', '7aab8e73-af62-4959-aa09-e1bcfeefcded', NULL, '$2y$10$b0dzBwuNUoqQ5wOTihNkrOhrN7ZjeXpGkRTCz7./HtMERA1fFHjZ.', NULL, '2023-04-03 23:34:07', '2023-04-03 23:34:07'),
('e4f18a9a-f8fc-4a08-8ee2-6af912c66c2b', 'Admin', 'admin@mail.com', '690176ab-ae8f-4813-bc92-4b0a92a5d5d9', NULL, '$2y$10$Yr6FVZCZi4gSZfdJnb2q9.QQUvB9sssACeLivtOkh7QV4gpoRwuC2', NULL, '2023-04-03 23:34:06', '2023-04-03 23:34:06');

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
