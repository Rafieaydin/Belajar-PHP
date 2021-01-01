-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2021 pada 00.31
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `follower`
--

CREATE TABLE `follower` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `follow_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pertanyaan_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id`, `isi`, `created_at`, `updated_at`, `pertanyaan_id`, `user_id`) VALUES
(25, '<p>enfjenfjef 1</p>', '2021-01-01 01:15:26', '2021-01-01 16:16:27', 52, 13),
(27, '<p>jawaban</p>', '2021-01-01 01:30:05', '2021-01-01 01:30:05', 70, 15),
(28, 'jawban', '2021-01-01 16:16:39', '2021-01-01 16:16:39', 51, 2),
(29, '<p>ini jawaban</p>', '2021-01-01 16:17:47', '2021-01-01 16:17:47', 72, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_jawaban`
--

CREATE TABLE `komentar_jawaban` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jawaban_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `komentar_jawaban`
--

INSERT INTO `komentar_jawaban` (`id`, `isi`, `created_at`, `updated_at`, `jawaban_id`, `user_id`) VALUES
(13, 'ini komentar jawaban', '2021-01-01 01:30:14', '2021-01-01 01:30:14', 27, 15),
(14, 'ini komentar jawaban', '2021-01-01 16:17:57', '2021-01-01 16:17:57', 29, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_pertanyaan`
--

CREATE TABLE `komentar_pertanyaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pertanyaan_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `komentar_pertanyaan`
--

INSERT INTO `komentar_pertanyaan` (`id`, `isi`, `created_at`, `updated_at`, `pertanyaan_id`, `user_id`) VALUES
(7, 'ini adalah komentar', '2021-01-01 01:29:28', '2021-01-01 01:29:28', 70, 15),
(8, 'ini komentar', '2021-01-01 16:17:35', '2021-01-01 16:17:35', 72, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_28_023624_pertanyaan', 1),
(5, '2020_12_28_030333_profile', 1),
(6, '2020_12_29_000451_jawaban', 1),
(7, '2020_12_30_060103_pertanyaan_tag', 2),
(8, '2020_12_30_060511_create_tag_table', 3),
(9, '2021_01_01_025950_komentar_pertanyaan', 4),
(10, '2021_01_01_033026_komentar_jawaban', 5),
(11, '2021_01_01_041346_follower', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jawaban_tepat_id` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `judul`, `isi`, `created_at`, `updated_at`, `jawaban_tepat_id`, `user_id`) VALUES
(51, 'tolong bantu saya', 'isi dari pertanyaan 2', '2020-12-30 01:02:09', '2020-12-30 01:02:09', NULL, 2),
(52, 'tolong bantu sayaaaaa', 'isi dari pertanyaan 2', '2020-12-30 01:41:37', '2020-12-30 01:41:37', NULL, 4),
(53, 'tolong bantu saya', 'isi dari pertanyaan 2', '2020-12-30 03:02:47', '2020-12-30 03:02:47', NULL, 4),
(54, 'tolong bantu saya', '1 + 1 berapa? 5', '2020-12-30 03:04:24', '2020-12-30 04:40:15', NULL, 2),
(70, 'ini adalah judul', '<p>ini perjanyaan</p>', '2021-01-01 01:28:07', '2021-01-01 01:28:07', NULL, 13),
(71, 'tolong bantu saya', 'ini isi', '2021-01-01 16:16:01', '2021-01-01 16:16:16', NULL, 8),
(72, 'ini judul pertama', '<p>inin sii</p>', '2021-01-01 16:17:23', '2021-01-01 16:17:23', NULL, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan_tag`
--

CREATE TABLE `pertanyaan_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pertanyaan_tag`
--

INSERT INTO `pertanyaan_tag` (`id`, `pertanyaan_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(153, 51, 5, NULL, NULL),
(154, 51, 6, NULL, NULL),
(155, 51, 7, NULL, NULL),
(156, 51, 8, NULL, NULL),
(157, 51, 9, NULL, NULL),
(158, 52, 1, NULL, NULL),
(159, 52, 2, NULL, NULL),
(160, 52, 3, NULL, NULL),
(161, 52, 4, NULL, NULL),
(162, 53, 1, NULL, NULL),
(163, 53, 2, NULL, NULL),
(164, 53, 3, NULL, NULL),
(165, 53, 4, NULL, NULL),
(166, 54, 1, NULL, NULL),
(167, 54, 2, NULL, NULL),
(168, 54, 3, NULL, NULL),
(169, 54, 4, NULL, NULL),
(228, 70, 1, NULL, NULL),
(229, 70, 2, NULL, NULL),
(230, 70, 3, NULL, NULL),
(231, 70, 4, NULL, NULL),
(232, 71, 1, NULL, NULL),
(233, 71, 2, NULL, NULL),
(234, 71, 3, NULL, NULL),
(235, 71, 4, NULL, NULL),
(236, 72, 13, NULL, NULL),
(237, 72, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `nama_lengkap`, `phone`, `foto`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Yuhnpa papa', '0348723984729834', 'default.jpg', 2, NULL, NULL),
(2, 'admin', NULL, 'default.jpg', 4, '2020-12-29 20:39:50', '2020-12-29 20:56:08'),
(5, 'test', NULL, 'default.jpg', 8, '2020-12-31 05:41:43', '2020-12-31 05:41:43'),
(6, 'test1', NULL, 'default.jpg', 9, '2020-12-31 05:46:47', '2020-12-31 05:46:47'),
(7, 'test2', NULL, '336-3365133_back-end-developer-icon-hd-png-download.png', 11, '2020-12-31 05:48:44', '2021-01-01 16:15:39'),
(9, 'Yuhnpa', NULL, 'default.jpg', 13, '2020-12-31 14:34:25', '2020-12-31 14:34:25'),
(10, 'Yuhnpa1', NULL, 'default.jpg', 14, '2020-12-31 23:41:39', '2020-12-31 23:41:39'),
(11, 'Yahnpa', NULL, 'default.jpg', 15, '2021-01-01 01:29:05', '2021-01-01 01:29:05'),
(12, 'admin3', NULL, '51CMk-3RcwL._SX425_.jpg', 16, '2021-01-01 16:15:16', '2021-01-01 16:15:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `created_at`, `updated_at`) VALUES
(1, 'php', '2020-12-29 23:53:12', '2020-12-29 23:53:12'),
(2, 'pemograman', '2020-12-29 23:53:12', '2020-12-29 23:53:12'),
(3, 'model', '2020-12-29 23:53:12', '2020-12-29 23:53:12'),
(4, 'bootcamp', '2020-12-29 23:53:12', '2020-12-29 23:53:12'),
(5, 'keren', '2020-12-30 01:02:09', '2020-12-30 01:02:09'),
(6, 'mantap', '2020-12-30 01:02:09', '2020-12-30 01:02:09'),
(7, 'gabut', '2020-12-30 01:02:09', '2020-12-30 01:02:09'),
(8, 'pivot', '2020-12-30 01:02:09', '2020-12-30 01:02:09'),
(9, 'selesai', '2020-12-30 01:02:09', '2020-12-30 01:02:09'),
(10, 'gergergerg', '2020-12-30 04:32:15', '2020-12-30 04:32:15'),
(11, 'vwevewvwevwev', '2020-12-30 04:32:15', '2020-12-30 04:32:15'),
(12, 'fwefwefwef', '2020-12-31 16:46:28', '2020-12-31 16:46:28'),
(13, 'ini', '2021-01-01 16:17:23', '2021-01-01 16:17:23'),
(14, 'hastag', '2021-01-01 16:17:23', '2021-01-01 16:17:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin', 'admin1@gmail.com', NULL, '$2y$10$8I1skKDjaenOSLHsnvmWy.Akk6HX2KPLgiemTjgtB3NasbG0Ciubu', '3S2hyswjcPEu4CbNJ5cDOSzdM2APjh6UjpjmzHJ1hZWt3yCsIm49jZoHWMtM', NULL, NULL),
(4, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$3Nv6I8e4MOg1zhZGBFCA4.FuYLBC1WmHnIVc3Mr1kF6tYA2NMWZ9C', 'aSb0VFwgFCVQ38bMBYPQgFawqJE8nTvVzEGGr3EQhWaae8mya9URFk8C3pLR', '2020-12-29 20:39:50', '2020-12-29 20:56:08'),
(8, 'test', 'users', 'test@gmail.com', NULL, '$2y$10$HvxiCumeAkpKgi/6TF6feugbYhDmI6l85s24ez8en3fyRQX78B71q', '8SagqR16xG2dfhgRRvZUiefmBHBDi6WpgKfbY05nvTHsgPhfAPGOQ2p4QQEe', '2020-12-31 05:41:43', '2020-12-31 05:41:43'),
(9, 'test1', 'users', 'test1@gmail.com', NULL, '$2y$10$A4AbY0FUgymJzX16FkZDF.WTuFRshwfiV/PkD1qYVrjtFf0ztS2OS', 'lL31At3gTKEg1sFemQbh4CbErDQdGE3ldYcx9rjDuO6DCbenfZ1utKK7R8l0', '2020-12-31 05:46:47', '2020-12-31 05:46:47'),
(11, 'test2', 'users', 'test2@gmail.com', NULL, '$2y$10$lO64qDrkDr75IBES5mkn3eMUVVPDSGFdefz.GCc.YUPUdWlXyhWtu', 'Dd2iRI847NABiyIouaFJygplmvbZVJpqFf9ARPgF9E5Q2SKcWTnp3UjUiiBK', '2020-12-31 05:48:44', '2021-01-01 16:15:39'),
(13, 'Yuhnpa', 'users', 'Yuhnpa@gmail.com', NULL, '$2y$10$h.GTZw/8EpZTjvQGOm0eNOF3C9w/TZFH/INeX9G0BCddfssnKeMte', 'JMR5FkV8igyucErelQTL6GDKUx4oHwA9xnjHS93OrxYFRq6M8eNvCsQzlOhY', '2020-12-31 14:34:25', '2020-12-31 14:34:25'),
(14, 'Yuhnpa1', 'users', 'Yuhnpa1@gmail.com', NULL, '$2y$10$bt4p.5H548c0j2iLfFphquvIYYuNrA5RPV/mhaaLBbxXWeWIr232y', 'FbltlIpImg7G40lEYNWXVbzqZduti0fIhlxUTlvWdraEiUu4GCdNlzC9SqAR', '2020-12-31 23:41:39', '2020-12-31 23:41:39'),
(15, 'Yahnpa', 'users', 'Yahnpa@gmail.com', NULL, '$2y$10$h1s4XVZg4dx6kWKDFAdBEeL.eXrKeb5hFfC8XDFa8/CH5KFQxD6em', 'D1S0eA6P9PhsWdtXkfp0LTZjd0A70kLcSXp3ccAFRWU0oC7BIYRLDZJU2pbA', '2021-01-01 01:29:05', '2021-01-01 01:29:05'),
(16, 'admin', 'user', 'admin4@gmail.com', NULL, '$2y$10$yuZkZjAvVBP6NEKjAEnX3OL5p5gxziBl4fVowGmR2uBTjgsfoECU.', 'czkMMie42ci1KUYloxKzra2w5nkU5qi9YYUlsDF0ABiNG6Bmk9hnoefUDnsA', '2021-01-01 16:15:16', '2021-01-01 16:15:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `follower`
--
ALTER TABLE `follower`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `pertanyaan_id` (`pertanyaan_id`);

--
-- Indeks untuk tabel `komentar_jawaban`
--
ALTER TABLE `komentar_jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `komentar_jawaban_ibfk_1` (`jawaban_id`);

--
-- Indeks untuk tabel `komentar_pertanyaan`
--
ALTER TABLE `komentar_pertanyaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertanyaan_id` (`pertanyaan_id`),
  ADD KEY `user_id` (`user_id`);

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
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `pertanyaan_tag`
--
ALTER TABLE `pertanyaan_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertanyaan_id` (`pertanyaan_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `follower`
--
ALTER TABLE `follower`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `komentar_jawaban`
--
ALTER TABLE `komentar_jawaban`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `komentar_pertanyaan`
--
ALTER TABLE `komentar_pertanyaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan_tag`
--
ALTER TABLE `pertanyaan_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `follower`
--
ALTER TABLE `follower`
  ADD CONSTRAINT `follower_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jawaban_ibfk_2` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `komentar_jawaban`
--
ALTER TABLE `komentar_jawaban`
  ADD CONSTRAINT `komentar_jawaban_ibfk_1` FOREIGN KEY (`jawaban_id`) REFERENCES `jawaban` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_jawaban_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `komentar_pertanyaan`
--
ALTER TABLE `komentar_pertanyaan`
  ADD CONSTRAINT `komentar_pertanyaan_ibfk_1` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_pertanyaan_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `pertanyaan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pertanyaan_tag`
--
ALTER TABLE `pertanyaan_tag`
  ADD CONSTRAINT `pertanyaan_tag_ibfk_1` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pertanyaan_tag_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
