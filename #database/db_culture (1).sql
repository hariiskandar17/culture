-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 06:04 AM
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
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `body`, `created_at`, `updated_at`, `id_user`) VALUES
(5, 'Ut reprehenderit sunt ab quia mollitia ipsum.', 'minima-cum-perferendis-incidunt-autem', 'Aut facere esse repellendus adipisci omnis. Natus officiis soluta id et a aut. Vitae aut accusamus et ipsum tempore ab. Aut deleniti dolor voluptates quis. Et error laborum maiores autem rerum dolores repellat. Incidunt tempora repudiandae qui similique ipsum. Minus nobis doloribus temporibus suscipit excepturi voluptas. Dolore laborum deserunt quia reiciendis optio eum aut. Voluptate voluptas quos soluta architecto.', '2020-10-05 02:13:09', '2020-10-05 02:13:09', 3),
(6, 'Libero quod quia totam rerum dignissimos est quia.', 'porro-quam-unde-quia-consequatur-autem', 'In enim nihil ex nihil omnis et nihil. Illum est rerum aut. Ea cumque et dignissimos ut rem libero. Id et facere doloribus accusantium aliquid unde voluptatem. Accusantium placeat aut et error. Illo numquam vitae labore omnis iste. Odit eos enim ipsum voluptas sint a saepe possimus. Sunt ut beatae vel sit. Est praesentium modi itaque voluptatem eligendi deleniti. Vel veritatis vitae nulla ipsa quod.', '2020-10-05 02:13:09', '2020-10-05 02:13:09', 4),
(7, 'Aut eius natus culpa.', 'quo-ad-ut-tenetur-non-nulla-nesciunt', 'Quasi illum totam dolorum fugit. Nostrum labore consequuntur aut inventore error. Perferendis facere fugit et magni incidunt voluptatum sunt. Voluptatibus magni assumenda ad ea. Voluptas molestiae voluptates magni sint. Quo eos quae animi libero voluptas tenetur. Aliquam blanditiis qui ducimus totam dicta ab. Quasi et voluptas pariatur a voluptas iste repellat. Quia deserunt qui nulla esse eos.', '2020-10-05 02:13:10', '2020-10-05 02:13:10', 3),
(8, 'Woke Mantap', 'woke-mantap', '<p>Molestiae vel eum dolor. Voluptate harum suscipit quibusdam. Cumque voluptates sunt consequatur nostrum ut quas. Itaque sed accusamus quis dignissimos repudiandae quae. Nisi veritatis consequuntur et debitis aut eius quas. Esse mollitia debitis qui. Accusantium commodi maiores facilis asperiores quam. Mollitia sit non ut corrupti eligendi animi. Voluptatem tempora itaque id ex fugit inventore vel nemo.</p>\n', '2020-10-05 02:13:10', '2020-10-06 00:27:40', 3),
(9, 'Et aperiam a veniam sint officia.', 'voluptatem-voluptatem-et-praesentium-enim', 'Sint neque praesentium nam. Quia quo sint tempora nobis. Praesentium et dolores officia odio quia ut rem. Sunt animi repellendus et culpa consequatur nostrum eum inventore. Et alias dolorum exercitationem est odio ipsa. Ut autem provident molestiae aspernatur quia mollitia dolores totam. Officiis vero architecto velit autem aut minus. Inventore libero commodi vitae sint voluptatum quis voluptates. Laboriosam dicta ducimus consequatur omnis et dolorum. Explicabo placeat blanditiis aut fugit ex id sit. Fugiat rerum et magni ducimus provident quibusdam. Nostrum voluptates dolor est omnis. Ea alias corporis doloremque quis. Est recusandae quo assumenda repellat.', '2020-10-05 02:13:10', '2020-10-05 02:13:10', 3),
(11, 'Placeat aspernatur nihil molestiae esse voluptatem atque.', 'nam-commodi-nihil-quos-incidunt-distinctio-est-fugit-id', 'Mollitia autem magnam voluptatem unde voluptatem sed voluptatem. Omnis culpa est et voluptatem qui. Est corporis qui ut vel. Qui quia et sint ut eos est. Assumenda architecto exercitationem odit laboriosam. Dolorem sunt vel sequi molestiae labore iste amet provident. Molestiae laborum aliquid cupiditate unde. Quibusdam vitae et aspernatur omnis quaerat quia culpa. Ut et et incidunt quia vero. Nostrum et ab dolores sunt. Minima autem id ut quam. Voluptates a natus qui sit magnam natus veniam praesentium.', '2020-10-05 02:13:10', '2020-10-05 02:13:10', 4),
(13, 'Ut dolores error qui voluptatum sit ut occaecati.', 'ratione-accusamus-ea-magnam-aut', 'Mollitia rerum laborum hic iure est sunt. Quia pariatur voluptatem consequatur et nisi. Incidunt expedita ratione ut magnam illum ullam id omnis. Et molestias eligendi dolorem ut. Enim nemo quasi nihil. Aliquid vitae necessitatibus odit hic laudantium aut. Expedita eos consequatur velit fugiat quia praesentium. Aliquid architecto molestiae et. Autem dolores sed asperiores nisi.', '2020-10-05 02:13:10', '2020-10-05 02:13:10', 4),
(15, 'Quam quia qui et est hic.', 'aliquid-saepe-aliquam-reiciendis-error-quod-placeat', 'Aut praesentium adipisci laborum nihil et suscipit architecto libero. Quia molestiae enim amet vitae et qui. Recusandae rerum non ducimus quia enim odio. Dolores iusto dolores perferendis eos. Provident ut velit qui voluptatum repellat consectetur. Porro architecto aut non corporis. Error non sit voluptates sit ratione. Consequuntur et necessitatibus eveniet aut architecto architecto. Magnam commodi cupiditate est distinctio et ipsum.', '2020-10-05 02:13:10', '2020-10-05 02:13:10', 4),
(16, 'Html Lagi TAg', 'html-lagi-tag', '<p><span style=\"font-family: Tahoma;\">&lt;h1&gt;Ka Hack &lt;/h1&gt;﻿</span><span style=\"font-family: Tahoma;\"><br></span></p><p><span style=\"font-family: Tahoma;\">﻿</span><b>Bold</b></p><p><u>Underline</u></p><ul><li><u>list</u></li><li><u>list2</u></li></ul><p><u>left</u></p><p style=\"text-align: center; \"><u>center</u></p><p style=\"text-align: right;\"><u>rigth</u></p><p style=\"text-align: left;\"><u><br></u></p><table class=\"table table-bordered\"><tbody><tr><td>colom 1</td><td>colom 2</td></tr><tr><td>baris 1</td><td>baris 2</td></tr></tbody></table><p style=\"text-align: left;\"><a href=\"http://google.com\">Link ke google</a><u><br></u></p><p><span style=\"font-family: &quot;Arial Black&quot;;\">﻿</span><span style=\"font-family: Arial; background-color: rgb(255, 255, 0);\"><font color=\"#000000\">berwarna</font></span><u><br></u></p>', '2020-10-05 02:27:08', '2020-10-05 03:37:18', 3),
(39, 'Lebih dari 1 gambar', 'lebih-dari-1-gambar', '<p>gambar ke 1</p><p><img data-filename=\"Koala.jpg\" style=\"width: 518px;\" src=\"http://127.0.0.1:8000/image/img-content/16019414760.png\"></p><p>Gambar ke 2</p><p>Di kecilkan ukuranya</p><p><img data-filename=\"Desert.jpg\" style=\"width: 235.5px; height: 176.625px;\" src=\"http://127.0.0.1:8000/image/img-content/16019414761.png\"></p><p><br></p><p>Yang Ini dari Link</p><p><img src=\"https://mmc.tirto.id/image/otf/1024x535/2019/01/08/kucing-sedih-istockphoto_ratio-16x9.jpg\" style=\"width: 518px;\"></p><p><a href=\"https://mmc.tirto.id/image/otf/1024x535/2019/01/08/kucing-sedih-istockphoto_ratio-16x9.jpg\" target=\"_blank\">Link Gambar</a></p><p><br></p><p>Lagi dan Lagi</p><p><a href=\"https://images.theconversation.com/files/352482/original/file-20200812-18-kmz4ah.jpg?ixlib=rb-1.1.0&amp;q=45&amp;auto=format&amp;w=926&amp;fit=clip\" target=\"_blank\">Link Kucing</a><br></p><p><img src=\"https://images.theconversation.com/files/352482/original/file-20200812-18-kmz4ah.jpg?ixlib=rb-1.1.0&amp;q=45&amp;auto=format&amp;w=926&amp;fit=clip\" style=\"width: 518px;\"><br><br></p><p></p>', '2020-10-05 16:44:36', '2020-10-05 16:50:45', 4),
(42, 'Coba Gambar', 'coba-gambar', '<p><img data-filename=\"Lighthouse.jpg\" style=\"width: 518px;\" class=\"img-fluid\" src=\"http://127.0.0.1:8000/image/img-content/16019680590.png\">Iya<p><br></p><p><b>bold&nbsp;</b></p><ul><li>list</li></ul><p><font color=\"#000000\" style=\"background-color: rgb(0, 0, 255);\">color</font></p><p></p><p></p></p>\n', '2020-10-05 23:48:50', '2020-10-06 00:07:39', 4);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `id_article`, `id_user`, `content`, `created_at`, `updated_at`) VALUES
(1, 43, 6, 'Mantap', '2020-10-15 13:47:57', '2020-10-15 13:47:57');

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
  `kategori` int(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` int(255) NOT NULL,
  `kabupaten` int(255) NOT NULL,
  `kecamatan` int(255) NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasis`
--

INSERT INTO `lokasis` (`id`, `kategori`, `name`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(13, 0, 'angga', 'cikoneng', 51, 5103, 5103010, '-3.2721456350750127', '104.85351562500001', '2020-10-15 04:49:50', '2020-10-15 04:49:50'),
(14, 0, 'dfgsd', 'dsfdsfs', 15, 1501, 1501073, '-13.325484885597936', '116.54296875000001', '2020-10-15 06:09:59', '2020-10-15 06:09:59'),
(15, 5, 'sfsf', 'asdasdas', 36, 3672, 3672011, '83.49282852024024', '-157.17041015625003', '2020-10-15 07:05:05', '2020-10-15 07:05:05'),
(16, 4, 'sdfsdf', 'sdfsdfsdf', 33, 3315, 3315160, '7.448633569576426', '145.79428044800449', '2020-10-15 13:11:42', '2020-10-15 13:11:42');

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
-- Table structure for table `provs`
--

CREATE TABLE `provs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_prov` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provs`
--

INSERT INTO `provs` (`id`, `id_prov`, `name`, `created_at`, `updated_at`) VALUES
(1, 11, 'Aceh', NULL, NULL),
(2, 12, 'SUMATERA UTARA', NULL, NULL),
(3, 13, 'SUMATERA BARAT', NULL, NULL),
(4, 14, 'RIAU', NULL, NULL),
(5, 15, 'JAMBI', NULL, NULL),
(6, 16, 'SUMATERA SELATAN', NULL, NULL),
(7, 17, 'BENGKULU', NULL, NULL),
(8, 18, 'LAMPUNG', NULL, NULL),
(9, 19, 'KEPULAUAN BANGKA BELITUNG', NULL, NULL),
(10, 21, 'KEPULAUAN RIAU', NULL, NULL),
(11, 31, 'DKI JAKARTA', NULL, NULL),
(12, 32, 'JAWA BARAT', NULL, NULL),
(13, 33, 'JAWA TENGAH', NULL, NULL),
(14, 34, 'DI YOGYAKARTA', NULL, NULL),
(15, 35, 'JAWA TIMUR', NULL, NULL),
(16, 36, 'BANTEN', NULL, NULL),
(17, 51, 'BALI', NULL, NULL),
(18, 52, 'NUSA TENGGARA BARAT', NULL, NULL),
(19, 53, 'NUSA TENGGARA TIMUR', NULL, NULL),
(20, 61, 'KALIMANTAN BARAT', NULL, NULL),
(21, 62, 'KALIMANTAN TENGAH', NULL, NULL),
(22, 63, 'KALIMANTAN SELATAN', NULL, NULL),
(23, 64, 'KALIMANTAN TIMUR', NULL, NULL),
(24, 65, 'KALIMANTAN UTARA', NULL, NULL),
(25, 71, 'SULAWESI UTARA', NULL, NULL),
(26, 72, 'SULAWESI TENGAH', NULL, NULL),
(27, 73, 'SULAWESI SELATAN', NULL, NULL),
(28, 74, 'SULAWESI TENGGARA', NULL, NULL),
(29, 75, 'GORONTALO', NULL, NULL),
(30, 76, 'SULAWESI BARAT', NULL, NULL),
(31, 81, 'MALUKU', NULL, NULL),
(32, 82, 'MALUKU UTARA', NULL, NULL),
(33, 91, 'PAPUA BARAT', NULL, NULL),
(34, 94, 'PAPUA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `replices`
--

CREATE TABLE `replices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', NULL, NULL),
(2, 2, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_places`
--

CREATE TABLE `site_places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addres` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `id_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_places`
--

INSERT INTO `site_places` (`id`, `type_id`, `user_id`, `name`, `addres`, `id_provinsi`, `id_kabupaten`, `id_kecamatan`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Gedung Sate', 'Bandung', 32, 3273, '3204010', '-6.895264', '107.616375', '2020-10-08 22:51:55', '2020-10-08 22:51:55'),
(3, 5, 3, 'Karangkamulyan', 'Jl. Nasional III, Karangkamulyan, Kec. Cijeungjing, Kabupaten Ciamis, Jawa Barat 46271', 32, 3207, '3207150', '-7.291392', '108.478400', '2020-10-11 01:57:52', '2020-10-11 01:57:52'),
(4, 4, 3, 'Astana Gede', 'Kawali, Kabupaten Ciamis, Jawa Barat 46253', 32, 3207, '3207280', '-7.189918', '108.362864', '2020-10-11 02:37:22', '2020-10-11 02:37:22'),
(5, 5, 3, 'Wisata Alam Ciung Wanara', 'Jalan Raya Banjar Ciamis, Cijeungjing, Karangkamulyan, Kec. Ciamis, Kabupaten Ciamis, Jawa Barat 46271', 32, 3207, '3207150', '-7.347314', '108.489207', '2020-10-11 02:45:56', '2020-10-11 02:45:56'),
(6, 5, 3, 'Situs Gunung Susuru', 'Kertabumi, Cijeungjing, Ciamis Regency, West Java 46271', 32, 3207, '3207150', '-7.342081', '108.463665', '2020-10-11 02:49:37', '2020-10-11 02:49:37'),
(7, 6, 3, 'Babancong Manon Jaya', 'Manonjaya, Kec. Manonjaya, Tasikmalaya, Jawa Barat 46197', 32, 3206, '3206160', '-7.351673', '108.307893', '2020-10-11 02:56:43', '2020-10-11 02:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `type_places`
--

CREATE TABLE `type_places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_places`
--

INSERT INTO `type_places` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Candi', 'borobudur.png', NULL, NULL),
(2, 'Benteng', 'benteng.png', NULL, NULL),
(3, 'Masjid', 'masjid.png', NULL, NULL),
(4, 'Astana', 'astana.png', NULL, NULL),
(5, 'Taman', 'taman.png', NULL, NULL),
(6, 'Kampung', 'kampung.png', NULL, NULL),
(10, 'Musium', 'gerbang.png', NULL, NULL),
(11, 'Situ', 'situ.png', NULL, NULL),
(12, 'Alun Alun Kota', 'alun.png', NULL, NULL),
(13, 'Monumen', 'monumen.png', NULL, NULL),
(14, 'Gua', 'gua.png', NULL, NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `alamat`, `gambar`) VALUES
(3, 'Both', 'both@gmail.com', NULL, '$2y$10$kp1Ontn6/0urs1OE7dMZ4Ojrd18K3q81J7TOFZYGaW3LmwiDZ03be', NULL, '2020-10-05 22:59:03', '2020-10-05 22:59:03', 1, '', ''),
(4, 'Pulan', 'pulan@gmail.com', NULL, '$2y$10$12vtEx.dZeU2aGzlT.UUyOsxSXdB5hqqzkinMKJkMm3jxXF0LhFZG', 'gChe4UUaeiJe0r3WhZMrlqkMrJUhUNHUt6SuyE3jdZJUPMBzcg4WsjVR7ntb', '2020-10-05 22:59:48', '2020-10-05 23:02:40', 1, '', ''),
(5, 'Coba User', 'coba@gmail.com', NULL, '$2y$10$HV6FsmOLmR4JejFk3CKMUemConqLYQLQFbnqlkTspjgfwb8Uu/j6e', NULL, '2020-10-15 03:39:29', '2020-10-15 03:39:29', 2, '', ''),
(6, 'Irgi G', 'irgi@gmail.com', NULL, '$2y$10$K.uO.24fTxxEXBF1ryHyTedXpRpoLJUGfGgjkC8rkTeDZi4OaqTWa', NULL, '2020-10-15 10:38:15', '2020-10-15 10:38:15', 2, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `provs`
--
ALTER TABLE `provs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replices`
--
ALTER TABLE `replices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_places`
--
ALTER TABLE `site_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_places`
--
ALTER TABLE `type_places`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `provs`
--
ALTER TABLE `provs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `replices`
--
ALTER TABLE `replices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_places`
--
ALTER TABLE `site_places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `type_places`
--
ALTER TABLE `type_places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
