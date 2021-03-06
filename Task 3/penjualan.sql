-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2021 at 03:08 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `created_at`, `updated_at`, `nama`, `alamat`, `telpon`, `email`) VALUES
(1, NULL, NULL, 'Mahfud Pratama', 'Dk. Wora Wari No. 667, Palopo 74764, NTT', '0341 5787 072', 'unugroho@saputra.co'),
(2, NULL, NULL, 'Pia Agustina', 'Jln. Merdeka No. 113, Cirebon 36767, SulSel', '0281 1489 606', 'tari.palastri@yahoo.com'),
(3, NULL, NULL, 'Atma Lulut Hutapea S.Pd', 'Gg. Aceh No. 501, Yogyakarta 24192, SumSel', '0580 3089 5162', 'zahra.anggraini@uwais.co.id'),
(4, NULL, NULL, 'Warsa Maryadi', 'Gg. Bara Tambar No. 665, Tanjung Pinang 72622, Gorontalo', '0406 8432 791', 'hariyah.karma@yahoo.co.id'),
(5, NULL, NULL, 'Natalia Kusmawati', 'Kpg. Ronggowarsito No. 349, Yogyakarta 50495, SulUt', '(+62) 395 2770 3386', 'bakti22@gmail.co.id'),
(6, NULL, NULL, 'Sakura Nova Laksita', 'Jln. Supomo No. 131, Sukabumi 28240, Riau', '(+62) 276 9225 1314', 'nsafitri@riyanti.biz.id'),
(7, NULL, NULL, 'Vanya Astuti', 'Ds. Ujung No. 936, Cimahi 58309, KepR', '0723 2251 5907', 'znatsir@yahoo.com'),
(8, NULL, NULL, 'Baktianto Hutapea', 'Psr. Supono No. 191, Payakumbuh 18666, KalTeng', '(+62) 347 5945 443', 'vanesa94@pradipta.or.id'),
(9, NULL, NULL, 'Irsad Irawan', 'Ds. Aceh No. 824, Tomohon 81631, KalTim', '020 5789 311', 'dalimin.siregar@gmail.com'),
(10, NULL, NULL, 'Jono Saputra', 'Gg. Qrisdoren No. 75, Salatiga 90293, KalTeng', '(+62) 688 4164 7551', 'radika70@mardhiyah.id'),
(11, NULL, NULL, 'Cornelia Maimunah Puspita S.Ked', 'Ds. Nakula No. 223, Bontang 93459, NTB', '0521 7597 393', 'gsimbolon@riyanti.org'),
(12, NULL, NULL, 'Kezia Hassanah M.Pd', 'Ds. BKR No. 294, Tegal 94060, KalBar', '(+62) 851 1097 197', 'ayu.wacana@pertiwi.co.id'),
(13, NULL, NULL, 'Silvia Widiastuti M.TI.', 'Jr. Badak No. 207, Administrasi Jakarta Pusat 23185, Gorontalo', '0487 6441 9072', 'karman38@yahoo.com'),
(14, NULL, NULL, 'Titin Jessica Halimah', 'Jln. Radio No. 958, Administrasi Jakarta Utara 62005, NTB', '(+62) 696 1248 0306', 'spranowo@rajata.co.id'),
(15, NULL, NULL, 'Titi Purwanti', 'Jln. Ters. Kiaracondong No. 897, Cimahi 31517, JaTim', '0560 3497 8430', 'puput25@gmail.com');

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
(62, '2014_10_12_000000_create_users_table', 1),
(63, '2014_10_12_100000_create_password_resets_table', 1),
(64, '2019_08_19_000000_create_failed_jobs_table', 1),
(65, '2021_03_05_082258_create_produk_table', 1),
(66, '2021_03_05_082650_create_customer_table', 1),
(67, '2021_03_05_082710_create_sale_table', 1);

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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `created_at`, `updated_at`, `nama_produk`, `stok`, `harga`) VALUES
(1, '2021-03-05 16:58:59', '2021-03-05 16:58:59', 'Tv Sharp 21 inci', 50, 1250000),
(2, '2021-03-05 16:58:59', '2021-03-05 16:58:59', 'monitor LG 24 inci', 25, 1400000),
(3, '2021-03-05 16:58:59', '2021-03-05 20:07:49', 'Printer Epson L12', 8, 1200000),
(4, '2021-03-05 16:58:59', '2021-03-05 16:58:59', 'Tv Polytron 40 inci', 30, 3200000),
(5, '2021-03-05 16:58:59', '2021-03-05 16:58:59', 'Asus A45v', 32, 5200000);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_produk` int(11) NOT NULL,
  `id_cust` int(11) NOT NULL,
  `total_item` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tagihan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `created_at`, `updated_at`, `id_produk`, `id_cust`, `total_item`, `tanggal`, `tagihan`) VALUES
(1, '2021-03-05 17:00:07', '2021-03-05 17:00:07', 3, 2, 7, '2021-03-06', 8400000),
(2, '2021-03-05 20:07:49', '2021-03-05 20:07:49', 3, 7, 5, '2021-03-06', 6000000);

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
(1, 'Oki Iskandar', 'okiiskandar85@gmail.com', NULL, '$2y$10$Au5/iAthVtsbjp6UPY3SQOf2N3WHXOUrdZJEFu7yu8YK0MMZ5xJii', NULL, '2021-03-05 16:57:16', '2021-03-05 16:57:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
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
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
