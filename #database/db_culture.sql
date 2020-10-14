-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 10:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_culture`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Aut rerum nesciunt perspiciatis facilis suscipit commodi numquam.', 'officiis-et-rem-debitis-at', '1', '2020-10-13 00:29:32', '2020-10-13 22:16:23'),
(4, 'Deleniti fugiat ea ipsum omnis praesentium iure consequatur dicta.', 'eos-voluptatem-vel-sequi-laborum-quaerat-fuga-qui', '1', '2020-10-13 00:29:32', '2020-10-13 00:29:32'),
(5, 'Impedit reiciendis reiciendis quis laboriosam.', 'rem-rerum-ut-quidem-suscipit-ea-aut', '1', '2020-10-13 00:29:32', '2020-10-13 00:29:32'),
(6, 'Aut autem aut odit ex eaque sed voluptatem a.', 'tempora-qui-aut-maiores-facilis-aspernatur-hic-officia', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(7, 'Ut deserunt veniam eligendi voluptatum nihil.', 'sed-consequatur-temporibus-dolores-mollitia-enim-laboriosam', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(8, 'Et incidunt aliquam dicta qui.', 'est-dolore-similique-veritatis-vitae-et-ex-voluptas', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(9, 'Perferendis nihil nemo minus doloremque tempora nobis omnis.', 'ut-veniam-explicabo-cum-et-quis', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(10, 'Sed est laborum ratione quidem reprehenderit illum doloribus voluptatem.', 'vel-delectus-ut-quia-ipsa', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(11, 'Odit est accusantium cupiditate provident.', 'nemo-non-cupiditate-alias-qui-quas-nesciunt-ipsam', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(12, 'Nihil earum in voluptatem quis dolorem maiores.', 'inventore-omnis-culpa-aut-est', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(13, 'Aut aliquid nam quasi odio reprehenderit voluptatem aut.', 'modi-nostrum-aut-adipisci-voluptas', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(14, 'Cum itaque quasi voluptatem eligendi enim soluta.', 'velit-qui-ad-fugiat-vitae-iure-et-rerum-aut', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(15, 'Commodi rerum labore quo quis mollitia.', 'velit-placeat-quis-sunt-sunt-impedit-modi-neque-laudantium', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(16, 'Et ea voluptates consequatur optio omnis deleniti et.', 'nihil-rerum-aut-quia-architecto-magnam', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(17, 'Ipsam perferendis ut est qui natus.', 'quibusdam-qui-distinctio-sed-et', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(18, 'Est expedita eum est et qui temporibus autem.', 'labore-suscipit-blanditiis-aspernatur', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(19, 'Possimus exercitationem nemo sint earum.', 'ratione-sed-ratione-aut-a-quasi-amet-labore', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(20, 'Et qui earum officiis illum deleniti.', 'consequuntur-reprehenderit-et-nisi', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(21, 'Dolorum reprehenderit eligendi est doloribus.', 'recusandae-veritatis-eaque-labore-praesentium-voluptatem-et-aut-fuga', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(22, 'Deserunt non magnam maiores nisi.', 'ut-facilis-optio-quo-fugit-a-debitis-ea', '1', '2020-10-13 00:29:33', '2020-10-13 00:29:33'),
(23, 'hari', 'hari', '18', '2020-10-13 22:23:11', '2020-10-13 22:23:11');

-- --------------------------------------------------------

--
-- Table structure for table `cultures`
--

CREATE TABLE `cultures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cultures`
--

INSERT INTO `cultures` (`id`, `name`, `alamat`, `latitude`, `longitude`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'ciamis', 'ciamis', '213213123', '21321321312', 'ciamis manis', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `icon`, `created_at`, `updated_at`) VALUES
(2, 'fas fa-table', '2020-10-08 23:59:47', '2020-10-08 23:59:47'),
(4, 'fas fa-trash-alt', '2020-10-11 16:50:03', '2020-10-11 16:50:03'),
(5, 'bdfgrer', '2020-10-12 19:58:30', '2020-10-12 19:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `lokasis`
--

CREATE TABLE `lokasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasis`
--

INSERT INTO `lokasis` (`id`, `name`, `alamat`, `latitude`, `longitude`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(3, 'Beatae vero atque cumque impedit.', 'Saepe error natus cumque molestiae consequuntur maxime.', '1', '1', 'Sed autem facilis vel non labore atque.', 'Doloribus officia error ut.', '2020-10-13 01:23:06', '2020-10-13 01:23:06'),
(4, 'Iure laborum et ut molestiae mollitia iusto pariatur.', 'At rem et enim non qui delectus.', '1', '1', 'Id non consequatur nostrum et rerum consequatur.', 'Repudiandae eius totam et nemo aut autem sint.', '2020-10-13 01:23:06', '2020-10-13 01:23:06'),
(5, 'Minima sint necessitatibus est eum.', 'Saepe unde aliquid facilis eligendi voluptate nostrum.', '1', '1', 'Aut ducimus asperiores fugiat velit.', 'Aut sint quos ut in.', '2020-10-13 01:23:06', '2020-10-13 01:23:06'),
(6, 'Aut et voluptas tempore illum et fuga quia.', 'Nisi ea omnis ut corrupti.', '1', '1', 'Quam voluptatem aspernatur temporibus eius.', 'Aliquam facere quidem quasi esse atque.', '2020-10-13 01:23:06', '2020-10-13 01:23:06'),
(7, 'Sed qui aliquam tempore saepe rerum.', 'Tempora rerum sunt quis velit.', '1', '1', 'Aperiam accusamus vitae ipsa libero nam.', 'Consequatur vero iste aut sed ratione.', '2020-10-13 01:23:06', '2020-10-13 01:23:06'),
(8, 'Ut quaerat ut rem officiis est.', 'Odio architecto fugiat ut placeat consequuntur.', '1', '1', 'Officiis sunt velit quia sint et quidem similique.', 'Qui voluptas voluptas et et est saepe.', '2020-10-13 01:23:07', '2020-10-13 01:23:07'),
(9, 'Et omnis non natus occaecati quos autem dignissimos.', 'Excepturi eaque tempore aperiam aspernatur ad.', '1', '1', 'Ut a enim non quia et nostrum tempora.', 'Velit aut dicta dignissimos quia et.', '2020-10-13 01:23:07', '2020-10-13 01:23:07'),
(10, 'Culpa numquam dicta porro consequatur enim.', 'Optio perspiciatis nostrum quis vel et.', '1', '1', 'Quia excepturi non temporibus dolores ea.', 'Illum quis voluptatem delectus iste ut saepe totam.', '2020-10-13 01:23:07', '2020-10-13 01:23:07'),
(11, 'Vero vel culpa id quae.', 'Voluptatem perferendis omnis quam et quasi.', '1', '1', 'Expedita iste voluptas iste sunt aliquid esse sapiente.', 'Et possimus iure unde sit qui ad temporibus repudiandae.', '2020-10-13 01:23:07', '2020-10-13 01:23:07'),
(12, 'Hariiskandar', 'cikoneng', '2312312', '123213123', 'ciamsi manis', NULL, '2020-10-13 07:41:23', '2020-10-13 07:41:23');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2020_10_06_024124_create_lokasi_table', 1),
(13, '2020_10_06_065417_create_artikel_table', 2),
(14, '2020_10_09_052014_create_icon_table', 3),
(16, '2020_10_09_053124_creat_icons_table', 4),
(17, '2020_10_13_015021_creat_cultures_table', 5);

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
(3, 'Both', 'both@gmail.com', NULL, '$2y$10$kp1Ontn6/0urs1OE7dMZ4Ojrd18K3q81J7TOFZYGaW3LmwiDZ03be', NULL, '2020-10-05 22:59:03', '2020-10-05 22:59:03'),
(4, 'Pulan', 'pulan@gmail.com', NULL, '$2y$10$12vtEx.dZeU2aGzlT.UUyOsxSXdB5hqqzkinMKJkMm3jxXF0LhFZG', 'gChe4UUaeiJe0r3WhZMrlqkMrJUhUNHUt6SuyE3jdZJUPMBzcg4WsjVR7ntb', '2020-10-05 22:59:48', '2020-10-05 23:02:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cultures`
--
ALTER TABLE `cultures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasis`
--
ALTER TABLE `lokasis`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cultures`
--
ALTER TABLE `cultures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lokasis`
--
ALTER TABLE `lokasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
