-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 09:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simpeg`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_absen` date NOT NULL,
  `stat_absen` varchar(12) NOT NULL,
  `waktu_tb` varchar(12) NOT NULL,
  `id_pegawai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensis`
--

INSERT INTO `absensis` (`id`, `tgl_absen`, `stat_absen`, `waktu_tb`, `id_pegawai`, `created_at`, `updated_at`) VALUES
(1, '2024-05-09', 'Alfa', '5 Menit', 1, '2024-05-07 19:34:22', '2024-05-07 19:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gajis`
--

CREATE TABLE `gajis` (
  `id` int(10) UNSIGNED NOT NULL,
  `besaran` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gajis`
--

INSERT INTO `gajis` (`id`, `besaran`, `bonus`, `jabatan_id`, `created_at`, `updated_at`) VALUES
(3, 4000000, 2000000, 1, '2024-05-07 10:52:14', '2024-05-07 10:52:14'),
(4, 300000, 200000, 2, '2024-05-07 18:50:02', '2024-05-07 18:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `jabatans`
--

CREATE TABLE `jabatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_jab` varchar(50) NOT NULL,
  `awal_jab` date NOT NULL,
  `akhir_jab` date NOT NULL,
  `id_pegawai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatans`
--

INSERT INTO `jabatans` (`id`, `nama_jab`, `awal_jab`, `akhir_jab`, `id_pegawai`, `created_at`, `updated_at`) VALUES
(1, 'Supervisor', '2024-05-09', '2024-05-31', 1, '2024-05-07 10:12:16', '2024-05-07 10:12:16'),
(2, 'Direktur', '2024-05-16', '2024-05-17', 1, '2024-05-07 18:49:24', '2024-05-07 18:49:24');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_06_011943_create_pegawais_table', 1),
(6, '2024_03_06_011944_create_jabatans_table', 1),
(7, '2024_03_06_013110_create_absensis_table', 1),
(8, '2024_03_06_013552_create_surat_usuls_table', 1),
(9, '2024_03_06_014108_create_surat_panggilans_table', 1),
(10, '2024_03_06_014738_create_gajis_table', 1),
(11, '2024_04_03_072214_create_riwayat_jabatans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` int(10) UNSIGNED NOT NULL,
  `namapeg` varchar(50) NOT NULL,
  `j_kel` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `stat_peg` varchar(25) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id`, `namapeg`, `j_kel`, `tgl_lahir`, `tmpt_lahir`, `alamat`, `stat_peg`, `tgl_masuk`, `created_at`, `updated_at`) VALUES
(1, 'shdq', 'Laki Laki', '2024-05-03', 'da', 'asda', 'Aktif', '2024-05-17', '2024-05-07 10:12:04', '2024-05-07 10:12:04'),
(4, 'TES543543', 'Laki Laki', '2024-04-20', 'Padang', 'df', 'Aktif', '2024-04-25', '2024-05-07 19:10:30', '2024-05-07 19:31:10');

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
-- Table structure for table `riwayat_jabatans`
--

CREATE TABLE `riwayat_jabatans` (
  `riwayat_idjab` bigint(20) UNSIGNED NOT NULL,
  `golongan_jab` varchar(8) NOT NULL,
  `riwayat_jab` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surat_panggilans`
--

CREATE TABLE `surat_panggilans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_surat` int(11) NOT NULL,
  `tgl_panggilan` date NOT NULL,
  `jam` int(11) NOT NULL,
  `tempat_panggil` varchar(50) NOT NULL,
  `tgl_jbtan` date NOT NULL,
  `ket_panggil` varchar(30) NOT NULL,
  `nama_pemeriksa` varchar(25) NOT NULL,
  `id_pegawai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_panggilans`
--

INSERT INTO `surat_panggilans` (`id`, `no_surat`, `tgl_panggilan`, `jam`, `tempat_panggil`, `tgl_jbtan`, `ket_panggil`, `nama_pemeriksa`, `id_pegawai`, `created_at`, `updated_at`) VALUES
(1, 3433, '2024-05-10', 13, 'Ged a', '2024-05-31', 'Terlambat', 'Thomas', 1, '2024-05-07 10:23:27', '2024-05-07 10:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `surat_usuls`
--

CREATE TABLE `surat_usuls` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_surat` varchar(18) NOT NULL,
  `tgl_usulan` date NOT NULL,
  `pengusul` varchar(50) NOT NULL,
  `alasan_usul` varchar(50) NOT NULL,
  `jabatan_lama` varchar(20) NOT NULL,
  `jabatan_baru` varchar(20) NOT NULL,
  `status_usulan` varchar(25) NOT NULL,
  `id_pegawai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(23) NOT NULL,
  `level_usr` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensis_id_pegawai_foreign` (`id_pegawai`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gajis`
--
ALTER TABLE `gajis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gajis_jabatan_id_foreign` (`jabatan_id`);

--
-- Indexes for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jabatans_id_pegawai_foreign` (`id_pegawai`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `riwayat_jabatans`
--
ALTER TABLE `riwayat_jabatans`
  ADD PRIMARY KEY (`riwayat_idjab`);

--
-- Indexes for table `surat_panggilans`
--
ALTER TABLE `surat_panggilans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_panggilans_id_pegawai_foreign` (`id_pegawai`);

--
-- Indexes for table `surat_usuls`
--
ALTER TABLE `surat_usuls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_usuls_id_pegawai_foreign` (`id_pegawai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gajis`
--
ALTER TABLE `gajis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_jabatans`
--
ALTER TABLE `riwayat_jabatans`
  MODIFY `riwayat_idjab` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_panggilans`
--
ALTER TABLE `surat_panggilans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surat_usuls`
--
ALTER TABLE `surat_usuls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensis`
--
ALTER TABLE `absensis`
  ADD CONSTRAINT `absensis_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawais` (`id`);

--
-- Constraints for table `gajis`
--
ALTER TABLE `gajis`
  ADD CONSTRAINT `gajis_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`);

--
-- Constraints for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD CONSTRAINT `jabatans_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawais` (`id`);

--
-- Constraints for table `surat_panggilans`
--
ALTER TABLE `surat_panggilans`
  ADD CONSTRAINT `surat_panggilans_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawais` (`id`);

--
-- Constraints for table `surat_usuls`
--
ALTER TABLE `surat_usuls`
  ADD CONSTRAINT `surat_usuls_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawais` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
