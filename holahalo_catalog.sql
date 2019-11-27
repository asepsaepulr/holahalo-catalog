-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2019 at 07:33 PM
-- Server version: 5.7.19
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `holahalo_catalog`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Pakaian', 'pakaian', '2019-11-27 18:04:39', '2019-11-27 18:04:39'),
(2, 'Sepatu', 'sepatu', '2019-11-27 18:06:00', '2019-11-27 18:06:00'),
(3, 'Jaket', 'jaket', '2019-11-27 18:09:31', '2019-11-27 18:09:31'),
(4, 'Jeans', 'jeans', '2019-11-27 18:10:26', '2019-11-27 18:10:26'),
(5, 'Sweater', 'sweater', '2019-11-27 18:12:00', '2019-11-27 18:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_26_070303_create_kategoris_table', 1),
(5, '2019_11_26_091838_create_produks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `nama`, `foto`, `deskripsi`, `slug`, `id_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Premium Cotton Polo Shirt', 'premium-cotton-polo-shirt_5ddebdd2b1761.jpg', '<p>PREMIUM QUALITY PREMIUM QUALITY</p>\r\n\r\n<p>Polo shirt in premium cotton piqu&eacute; with a ribbed collar,</p>\r\n\r\n<p>button placket,</p>\r\n\r\n<p>short sleeves with ribbed trims,</p>\r\n\r\n<p>and slits in the sides.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h4>COMPOSITION</h4>\r\n\r\n	<ul>\r\n		<li>&nbsp;Cotton 100%</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<h4>ART. NO.</h4>\r\n	0689107008</li>\r\n</ul>', 'premium-cotton-polo-shirt', 1, '2019-11-27 18:17:54', '2019-11-27 18:17:54'),
(2, 'T-shirt With Turn-up Sleeves', 't-shirt-with-turn-up-sleeves_5ddebf9fb4a57.jpg', '<p>T-shirt in patterned jersey</p>\r\n\r\n<p>with a chest pocket and short sleeves with sewn-in turn-ups.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h4>COMPOSITION</h4>\r\n\r\n	<ul>\r\n		<li>&nbsp;Cotton 100%</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<h4>ART. NO.</h4>\r\n	0671777028</li>\r\n</ul>', 't-shirt-with-turn-up-sleeves', 1, '2019-11-27 18:25:35', '2019-11-27 18:25:35'),
(3, 'T-shirt With Turn-up Blue', 't-shirt-with-turn-up-blue_5ddec0435623a.jpg', '<p>T-shirt in patterned jersey</p>\r\n\r\n<p>with a chest pocket and short sleeves with sewn-in turn-ups.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h4>COMPOSITION</h4>\r\n\r\n	<ul>\r\n		<li>&nbsp;Cotton 100%</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<h4>ART. NO.</h4>\r\n	0671777028</li>\r\n</ul>', 't-shirt-with-turn-up-blue', 1, '2019-11-27 18:28:19', '2019-11-27 18:28:19'),
(4, 'Leather Creepers', 'leather-creepers_5ddec130015d3.jpg', '<p>GIAMBATTISTA VALLI X H&amp;M PREMIUM QUALITY GIAMBATTISTA VALLI x H&amp;M.</p>\r\n\r\n<p>Creepers in sturdy leather with a sheen.</p>\r\n\r\n<p>Open lacing and decorative metal studs.</p>\r\n\r\n<p>Leather insoles and chunky crepe rubber soles.</p>\r\n\r\n<p>Supplied with a shoe bag.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h4>COMPOSITION</h4>\r\n\r\n	<ul>\r\n		<li>upper Leather 100%</li>\r\n		<li>liningsock Leather 100%</li>\r\n		<li>outersole Ethylenevinylacetate 50%, Naturalrubber 50%</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<h4>ART. NO.</h4>\r\n	0806918001</li>\r\n</ul>', 'leather-creepers', 2, '2019-11-27 18:32:16', '2019-11-27 18:32:16'),
(5, 'Leather Boots', 'leather-boots_5ddec1a40e15f.jpg', '<p>GIAMBATTISTA VALLI X H&amp;M PREMIUM QUALITY GIAMBATTISTA VALLI x H&amp;M.</p>\r\n\r\n<p>Chunky boots in sturdy leather with contrasting colour laces,</p>\r\n\r\n<p>a visible metal zip at one side and a wide fabric loop at the back.</p>\r\n\r\n<p>Leather inside, leather insoles and chunky crepe rubber soles.</p>\r\n\r\n<p>Supplied with a shoe bag.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h4>COMPOSITION</h4>\r\n\r\n	<ul>\r\n		<li>upper Leather 100%</li>\r\n		<li>liningsock Leather 100%</li>\r\n		<li>outersole Ethylenevinylacetate 50%, Naturalrubber 50%</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<h4>ART. NO.</h4>\r\n	0811675001</li>\r\n</ul>', 'leather-boots', 2, '2019-11-27 18:34:12', '2019-11-27 18:34:12'),
(6, 'Biker Jacket', 'biker-jacket_5ddec2807f7eb.jpg', '<p>Biker jacket with a diagonal zip down the front and notch lapels with press-studs.</p>\r\n\r\n<p>Diagonal, zipped chest pocket,</p>\r\n\r\n<p>zipped side pockets,</p>\r\n\r\n<p>an inner pocket and long sleeves with a zip at the cuffs. Lined.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h4>COMPOSITION</h4>\r\n\r\n	<ul>\r\n		<li>coating Polyurethane 100%</li>\r\n		<li>&nbsp;Polyester 100%</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<h4>ART. NO.</h4>\r\n	0783126001</li>\r\n</ul>', 'biker-jacket', 3, '2019-11-27 18:37:52', '2019-11-27 18:37:52'),
(7, 'Slim Jeans', 'slim-jeans_5ddec31beaf5f.jpg', '<p>CONSCIOUS CONSCIOUS</p>\r\n\r\n<p>5-pocket jeans in washed denim with a regular waist,</p>\r\n\r\n<p>The jeans are made partly from recycled cotton.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h4>COMPOSITION</h4>\r\n\r\n	<ul>\r\n		<li>&nbsp;Cotton 98%, Elastane 2%</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<h4>ART. NO.</h4>\r\n	0751994003</li>\r\n</ul>', 'slim-jeans', 4, '2019-11-27 18:40:27', '2019-11-27 19:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin HolaHalo', 'admin@gmail.com', NULL, '$2y$10$UGkyggXE/pxBVvF3O7tySOgi5gqz4lSs/.UWqdpfqYg9E/dRl64mO', NULL, '2019-11-27 16:51:20', '2019-11-27 16:51:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoris_nama_unique` (`nama`);

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
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produks_nama_unique` (`nama`),
  ADD KEY `produks_id_kategori_foreign` (`id_kategori`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `produks_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
