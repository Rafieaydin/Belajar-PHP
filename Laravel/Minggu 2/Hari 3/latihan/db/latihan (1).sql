-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2020 pada 13.52
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
(12, '<p><strong>ini jawaban 2</strong></p>', '2020-12-30 03:17:24', '2020-12-30 06:01:15', 50, 2),
(13, 'ini jawaban', '2020-12-30 03:20:07', '2020-12-30 03:20:07', 50, 2),
(14, 'ini jawaban', '2020-12-30 05:23:55', '2020-12-30 05:23:55', 50, 2),
(15, 'ini jawaban', '2020-12-30 05:31:11', '2020-12-30 05:31:11', 50, 2);

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
(8, '2020_12_30_060511_create_tag_table', 3);

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
(50, 'tolong bantu saya', 'isi dari pertanyaan 2', '2020-12-30 00:58:12', '2020-12-30 00:58:12', NULL, 2),
(51, 'tolong bantu saya', 'isi dari pertanyaan 2', '2020-12-30 01:02:09', '2020-12-30 01:02:09', NULL, 2),
(52, 'tolong bantu sayaaaaa', 'isi dari pertanyaan 2', '2020-12-30 01:41:37', '2020-12-30 01:41:37', NULL, 4),
(53, 'tolong bantu saya', 'isi dari pertanyaan 2', '2020-12-30 03:02:47', '2020-12-30 03:02:47', NULL, 4),
(54, 'tolong bantu saya', '1 + 1 berapa? 5', '2020-12-30 03:04:24', '2020-12-30 04:40:15', NULL, 2),
(59, 'tolong bantu sayaaaaaa', '<p><strong>vvghvgvghvg</strong></p>', '2020-12-30 04:34:36', '2020-12-30 04:34:36', NULL, 2),
(60, 'tolong bantu saya', '<p><strong>rgwgwrgwrggw</strong></p>', '2020-12-30 04:35:00', '2020-12-30 04:39:53', NULL, 2);

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
(149, 50, 1, NULL, NULL),
(150, 50, 2, NULL, NULL),
(151, 50, 3, NULL, NULL),
(152, 50, 4, NULL, NULL),
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
(184, 59, 1, NULL, NULL),
(185, 59, 2, NULL, NULL),
(186, 59, 3, NULL, NULL),
(187, 59, 4, NULL, NULL),
(188, 60, 1, NULL, NULL),
(189, 60, 2, NULL, NULL),
(190, 60, 3, NULL, NULL),
(191, 60, 4, NULL, NULL);

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
(7, 'test2', NULL, 'default.jpg', 11, '2020-12-31 05:48:44', '2020-12-31 05:48:44'),
(8, 'test3', NULL, 'default.jpg', 12, '2020-12-31 05:50:17', '2020-12-31 05:50:17');

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
(11, 'vwevewvwevwev', '2020-12-30 04:32:15', '2020-12-30 04:32:15');

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
(4, 'admin', 'users', 'admin@gmail.com', NULL, '$2y$10$3Nv6I8e4MOg1zhZGBFCA4.FuYLBC1WmHnIVc3Mr1kF6tYA2NMWZ9C', 'dnS6sRoh3QKNgXDY6CgiYDRSedpv09wic3Vcjdpvs0qvrzt94sx6MzOZV880', '2020-12-29 20:39:50', '2020-12-29 20:56:08'),
(8, 'test', 'users', 'test@gmail.com', NULL, '$2y$10$HvxiCumeAkpKgi/6TF6feugbYhDmI6l85s24ez8en3fyRQX78B71q', '8SagqR16xG2dfhgRRvZUiefmBHBDi6WpgKfbY05nvTHsgPhfAPGOQ2p4QQEe', '2020-12-31 05:41:43', '2020-12-31 05:41:43'),
(9, 'test1', 'users', 'test1@gmail.com', NULL, '$2y$10$A4AbY0FUgymJzX16FkZDF.WTuFRshwfiV/PkD1qYVrjtFf0ztS2OS', 'lL31At3gTKEg1sFemQbh4CbErDQdGE3ldYcx9rjDuO6DCbenfZ1utKK7R8l0', '2020-12-31 05:46:47', '2020-12-31 05:46:47'),
(11, 'test2', 'users', 'test2@gmail.com', NULL, '$2y$10$3ZFz1qC1mGbEya5JM9stieM7pbBezDjH605qRC.LwxnjJ.uoc9hNq', 'Dd2iRI847NABiyIouaFJygplmvbZVJpqFf9ARPgF9E5Q2SKcWTnp3UjUiiBK', '2020-12-31 05:48:44', '2020-12-31 05:48:44'),
(12, 'test3', 'users', 'test3@gmail.com', NULL, '$2y$10$076Lm8QPICaI6jq6SXIeqO7WF1.rWM3YgnkUhTdxKZTbCyzys57FK', 'P5uyF5Mu08mkPzeTK0YjgSjBhKHZCaahnIMAtK1vtNhr2YYaTBQjERM33rSp', '2020-12-31 05:50:16', '2020-12-31 05:50:16');

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
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `pertanyaan_id` (`pertanyaan_id`);

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
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan_tag`
--
ALTER TABLE `pertanyaan_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jawaban_ibfk_2` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
