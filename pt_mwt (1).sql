-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2021 pada 15.00
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pt_mwt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_admin` varchar(40) NOT NULL,
  `is_delete` set('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi`
--

CREATE TABLE `deskripsi` (
  `id_deskripsi` int(5) NOT NULL,
  `id_proyek` int(5) NOT NULL,
  `id_manager` int(5) NOT NULL,
  `id_vendor` int(5) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `status` enum('1','2','3') NOT NULL COMMENT '1=done, 2=being work on, 3=not done',
  `image` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `is_delete` set('0','1') NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `deskripsi`
--

INSERT INTO `deskripsi` (`id_deskripsi`, `id_proyek`, `id_manager`, `id_vendor`, `deskripsi`, `status`, `image`, `keterangan`, `is_delete`, `create_at`, `updated_at`) VALUES
(1, 1, 0, 0, 'test 1', '3', '', '', '0', '2021-03-23 14:34:04', '2021-03-11 14:54:08'),
(2, 1, 0, 0, 'test 2', '3', '', '', '0', '2021-03-23 14:34:04', '2021-03-11 14:54:08'),
(3, 1, 0, 0, 'test 1', '3', '', '', '0', '2021-03-23 14:34:04', '2021-03-11 14:54:32'),
(4, 1, 0, 0, 'test 2', '3', '', '', '0', '2021-03-23 14:34:04', '2021-03-11 14:54:32'),
(5, 1, 0, 0, 'test 1', '3', '', '', '0', '2021-03-23 14:34:04', '2021-03-11 14:55:25'),
(6, 1, 0, 0, 'test 2', '3', '', '', '0', '2021-03-23 14:34:04', '2021-03-11 14:55:25'),
(7, 6, 0, 0, 'test 1', '3', '', '', '0', '2021-03-23 14:34:04', '2021-03-15 10:54:58'),
(8, 6, 0, 0, 'test 2', '3', '', '', '0', '2021-03-23 14:34:04', '2021-03-15 10:54:58'),
(9, 6, 0, 0, 'test 3', '3', '', '', '0', '2021-03-23 14:34:04', '2021-03-15 10:54:58'),
(10, 9, 0, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '3', '', '', '0', '2021-03-23 14:34:04', '2021-03-16 05:11:54'),
(11, 9, 0, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '3', '', '', '0', '2021-03-23 14:34:04', '2021-03-16 05:11:54'),
(12, 6, 0, 0, 'test4', '3', '', '', '0', '2021-03-23 14:34:04', '2021-03-16 09:22:12'),
(13, 6, 0, 0, 'test5', '3', '', '', '0', '2021-03-23 14:34:04', '2021-03-16 09:22:12'),
(14, 5, 0, 0, 'ket1', '3', '1616648730.png', 'keterangan 1', '0', '2021-03-25 12:06:16', '2021-03-24 22:06:16'),
(15, 5, 0, 0, 'ket2', '3', '1616415109.png', 'keterangan 2', '0', '2021-03-25 12:06:16', '2021-03-24 22:06:16'),
(16, 5, 0, 0, 'ket3', '3', '1616413197.png', 'keterangan 3', '0', '2021-03-25 12:06:16', '2021-03-24 22:06:16'),
(17, 5, 0, 0, 'ini tetst', '3', '1616648731.png', '0', '0', '2021-03-25 12:06:16', '2021-03-24 22:06:16'),
(18, 5, 0, 0, 'ini etst', '3', '1616648776.png', '0', '0', '2021-03-25 12:06:16', '2021-03-24 22:06:16'),
(19, 11, 0, 0, 'test te', '2', '1616420215.png', 'ini diaaaa', '0', '2021-03-23 14:40:56', '2021-03-23 00:40:56'),
(20, 11, 0, 0, 'testt', '1', '1616420215.png', 'ini tuuuhhhh', '0', '2021-03-23 14:40:56', '2021-03-23 00:40:56'),
(21, 12, 8, 0, 'ket1', '1', '1616554835.png', 'najuuu', '0', '2021-03-24 13:52:20', '2021-03-23 23:52:20'),
(22, 12, 8, 0, 'test4', '2', '1616554835.png', 'najuuu', '0', '2021-03-24 13:52:20', '2021-03-23 23:52:20'),
(23, 12, 7, 0, 'ket1', '3', '0', '0', '0', '2021-03-25 13:29:03', '2021-03-25 06:29:03'),
(24, 12, 7, 0, 'test4', '3', '0', '0', '0', '2021-03-25 13:29:03', '2021-03-25 06:29:03'),
(25, 13, 8, 0, 'test4', '1', '1616660684.png', '0', '0', '2021-03-25 15:54:57', '2021-03-25 01:54:57'),
(26, 13, 8, 0, 'test 1', '2', '1616661017.png', '0', '0', '2021-03-25 15:54:57', '2021-03-25 01:54:57'),
(27, 14, 3, 0, 'test te', '2', '1616674960.png', 'ket 1', '0', '2021-03-29 22:05:23', '2021-03-29 08:05:23'),
(28, 14, 3, 0, 'ini tetst', '1', '1616674961.png', 'ket 2', '0', '2021-03-29 22:05:23', '2021-03-29 08:05:23'),
(29, 14, 3, 0, 'test4', '2', '1616674975.png', 'ket 3', '0', '2021-03-29 22:05:23', '2021-03-29 08:05:23'),
(30, 15, 3, 0, 'tet', '3', '1616673820.png', '0', '0', '2021-03-25 19:03:40', '2021-03-25 05:03:40'),
(31, 15, 3, 0, 'tet2', '3', '1616673820.png', '0', '0', '2021-03-25 19:03:40', '2021-03-25 05:03:40'),
(32, 16, 3, 0, 'test te', '2', '1617012747.png', 'kettt', '0', '2021-03-29 17:13:58', '2021-03-29 03:13:58'),
(33, 16, 3, 0, 'test4', '1', '1617012749.png', 'kettt', '0', '2021-03-29 17:13:58', '2021-03-29 03:13:58'),
(34, 17, 8, 0, 'test4', '2', '1616753849.png', 'ini keterangan 1', '0', '2021-03-26 17:22:31', '2021-03-26 03:22:31'),
(35, 17, 8, 0, 'ket1', '1', '1616753850.png', 'ini keterangan 2', '0', '2021-03-26 17:22:31', '2021-03-26 03:22:31'),
(36, 16, 7, 0, 'ini tetst', '1', '1617012840.png', 'daiii', '0', '2021-03-29 17:13:58', '2021-03-29 03:13:58'),
(37, 16, 7, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2', '1617012751.png', 'echo', '0', '2021-03-29 17:13:58', '2021-03-29 03:13:58'),
(38, 18, 9, 16, 'test222', '2', '1617029485.png', 'ket22', '0', '2021-03-29 21:51:25', '2021-03-29 07:51:25'),
(39, 18, 9, 16, 'testsss', '1', '1617029486.png', 'kett55', '0', '2021-03-29 21:51:25', '2021-03-29 07:51:25'),
(40, 14, 3, 13, 'ini tetst', '2', '1617030326.png', 'taaau tuh', '0', '2021-03-29 22:05:23', '2021-03-29 08:05:23'),
(41, 14, 3, 13, 'test te', '1', '1617030327.png', 'yaayyayaya', '0', '2021-03-29 22:05:23', '2021-03-29 08:05:23'),
(42, 19, 3, 16, 'Engineering', '1', '1617178390.png', 'pengerjaan sudah selesai', '0', '2021-03-31 15:13:10', '2021-03-31 01:13:10'),
(43, 19, 3, 16, 'Producurement material&part', '1', '1617178391.png', 'pengerjaan sudah selesai', '0', '2021-03-31 15:13:10', '2021-03-31 01:13:10'),
(44, 19, 3, 16, 'In hose fabrication', '1', '1617178392.png', 'pengerjaan sudah selesai', '0', '2021-03-31 15:13:10', '2021-03-31 01:13:10'),
(45, 19, 3, 16, 'In house Sequence check', '2', '1617178393.png', 'pengerjaan sedang berlangsung', '0', '2021-03-31 15:13:10', '2021-03-31 01:13:10'),
(46, 19, 3, 16, 'Delivery to inalum', '2', '1617178394.png', 'pengerjaan sedang berlangsung', '0', '2021-03-31 15:13:10', '2021-03-31 01:13:10'),
(47, 19, 3, 16, 'Dismantling existing electrical', '3', '1617178395.png', 'sedang menunggu alat dari pusat', '0', '2021-03-31 15:13:10', '2021-03-31 01:13:10'),
(48, 19, 3, 16, 'Dismantling heating device', '1', '1617178396.png', 'penegerjaan sudah selesai', '0', '2021-03-31 15:13:10', '2021-03-31 01:13:10'),
(49, 19, 3, 16, 'Dismantling existing Roof Refactory', '2', '1617178397.png', 'pengerjaan sedang berlangsung', '0', '2021-03-31 15:13:10', '2021-03-31 01:13:10'),
(50, 19, 3, 16, 'Dismantling existing Roof Structure', '2', '1617178398.png', 'pengerjaan sedang berlangsung', '0', '2021-03-31 15:13:10', '2021-03-31 01:13:10'),
(51, 19, 3, 16, 'Roof structure reconstruction', '1', '1617178399.png', 'pengerjaan sudah selesai', '0', '2021-03-31 15:13:10', '2021-03-31 01:13:10'),
(52, 19, 3, 16, 'Refactory installation', '1', '1617178400.png', 'pengerjaan sudah selesai', '0', '2021-03-31 15:13:10', '2021-03-31 01:13:10'),
(53, 19, 3, 16, 'Combustion device instalation', '1', '1617178401.png', 'pengerjaan sudah selesai', '0', '2021-03-31 15:13:10', '2021-03-31 01:13:10'),
(54, 19, 3, 16, 'Control system', '2', '1617178402.png', 'pengerjaan sedang berlangsung', '0', '2021-03-31 15:13:10', '2021-03-31 01:13:10'),
(55, 19, 3, 16, 'Air blower power cable + MMc', '2', '1617178404.png', 'pengerjaan sedang berlangsung', '0', '2021-03-31 15:13:11', '2021-03-31 01:13:11'),
(56, 20, 8, 16, 'ini tetst', '2', '1617263089.png', 'eerrr', '0', '2021-04-01 14:44:50', '2021-04-01 00:44:50'),
(57, 20, 8, 16, 'test te', '2', '1617263091.png', 'errr', '0', '2021-04-01 14:44:50', '2021-04-01 00:44:50'),
(58, 36, 10, 16, 'test te', '2', '0', '0', '0', '2021-04-02 11:15:30', '2021-04-01 21:15:30'),
(59, 36, 10, 16, 'test te', '1', '0', '0', '0', '2021-04-02 11:15:30', '2021-04-01 21:15:30'),
(60, 39, 7, 18, 'test4', '2', '1617629550.png', 'ff', '0', '2021-04-15 16:12:29', '2021-04-15 02:12:29'),
(61, 39, 7, 18, 'test4', '3', '1617629551.png', 'jjj', '0', '2021-04-15 16:12:29', '2021-04-15 02:12:29'),
(62, 39, 7, 18, 'ket1', '2', '1618477951.png', 'jjjj', '0', '2021-04-15 16:12:29', '2021-04-15 02:12:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `grup_proyek`
--

CREATE TABLE `grup_proyek` (
  `id_gp` int(5) NOT NULL,
  `id_karyawan` int(5) NOT NULL,
  `id_manager` int(5) NOT NULL,
  `is_delete` set('0','1') NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_aktivitas`
--

CREATE TABLE `log_aktivitas` (
  `id_logaktivitas` int(5) NOT NULL,
  `id_admin` int(5) NOT NULL,
  `description` varchar(100) NOT NULL,
  `is_delete` set('0','1') NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `manager`
--

CREATE TABLE `manager` (
  `id_manager` int(5) NOT NULL,
  `nama_manager` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat_manager` text NOT NULL,
  `no_tlp_manager` varchar(20) NOT NULL,
  `email_manager` varchar(30) NOT NULL,
  `foto_manager` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `manager`
--

INSERT INTO `manager` (`id_manager`, `nama_manager`, `username`, `password`, `alamat_manager`, `no_tlp_manager`, `email_manager`, `foto_manager`, `created_at`, `updated_at`) VALUES
(3, 'saepuloh', '2016140478', 'dadada', 'bintaro', 'ddgdsgdf', 'ddgdsgdf', 'assets/manager/1616415438.png', '2020-12-29 09:42:06', '2021-03-22 05:17:18'),
(6, 'admin', 'admin', '12345', 'admin', 'admin', 'admin', 'assets/manager/1613629591.png', '2021-02-18 06:26:31', '2021-02-18 06:26:31'),
(7, 'apaan', 'apan', 'apan', 'lumajang', '02172478288', '02172478288', 'assets/manager/1617344158.png', '2021-03-09 07:16:56', '2021-04-01 23:15:58'),
(8, 'muhammad maulana yusuf', 'yusuf', '02192426355', 'depok', '087880126910', '087880126910', 'assets/manager/1617344370.png', '2021-03-09 07:29:36', '2021-04-01 23:19:30'),
(10, 'Gustini Haryati', 'Shanum', 'Shanum', 'cisauk', '02172478288', 'gustini@gmail.com', 'assets/manager/1617177607.png', '2021-03-31 08:00:07', '2021-03-31 08:00:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE `proyek` (
  `id_proyek` int(5) NOT NULL,
  `nama_proyek` varchar(50) NOT NULL,
  `tanggal_mulai` varchar(100) NOT NULL,
  `tanggal_berakhir` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`id_proyek`, `nama_proyek`, `tanggal_mulai`, `tanggal_berakhir`, `created_at`, `update_create`) VALUES
(19, 'inalum HF707-HF710', '2021-04-01', '2021-08-30', '2021-03-31 08:02:13', '2021-03-31 08:02:13'),
(39, 'skripsi', '2021-04-03', '2021-04-24', '2021-04-02 04:32:22', '2021-04-02 04:32:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$Za9kKDA0xWc0j7ACz.YEoO7Mi/b938wch8SryCNNJUNnHTFw2P3sW', NULL, '2021-04-10 00:25:41', '2021-04-10 00:25:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int(5) NOT NULL,
  `nama_vendor` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat_vendor` text NOT NULL,
  `no_tlp_vendor` varchar(20) NOT NULL,
  `foto_vendor` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `nama_vendor`, `email`, `alamat_vendor`, `no_tlp_vendor`, `foto_vendor`, `created_at`, `updated_at`) VALUES
(13, 'musyafa', 'laki laki', 'depok', '02192427366', 'assets/vendor/1617030177.png', '2020-12-22 11:47:45', '2021-03-29 08:02:57'),
(16, 'pt kawan lama', 'kl@gmail.com', 'jln dagdigdug', '0219232422', 'assets/vendor/1617012428.png', '2021-03-29 10:07:08', '2021-03-29 10:07:08'),
(18, 'pt jajajaj', 'yusuf.my48.my@gmail.com', 'Jlan Mandor Basar Rt2 Rw1 Kel. Rangkapan Jaya Lama', '120200202', 'assets/vendor/1617343689.png', '2021-04-02 06:08:09', '2021-04-01 23:09:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `deskripsi`
--
ALTER TABLE `deskripsi`
  ADD PRIMARY KEY (`id_deskripsi`),
  ADD KEY `id_proyek` (`id_proyek`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `grup_proyek`
--
ALTER TABLE `grup_proyek`
  ADD PRIMARY KEY (`id_gp`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_manager` (`id_manager`);

--
-- Indeks untuk tabel `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  ADD PRIMARY KEY (`id_logaktivitas`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id_manager`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `deskripsi`
--
ALTER TABLE `deskripsi`
  MODIFY `id_deskripsi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `grup_proyek`
--
ALTER TABLE `grup_proyek`
  MODIFY `id_gp` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  MODIFY `id_logaktivitas` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `manager`
--
ALTER TABLE `manager`
  MODIFY `id_manager` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id_proyek` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id_vendor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
