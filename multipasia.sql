-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2021 pada 06.16
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multipasia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alamat`
--

INSERT INTO `alamat` (`id`, `username`, `kota`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'mahathirtama', 'Depok', 'palsi gunung rt5/5', '2021-05-25 04:09:38', '2021-05-26 08:09:25'),
(2, 'webprog123', 'Depok', 'kp Areman RT08/08', '2021-05-28 02:10:11', '2021-05-28 02:10:11'),
(3, 'contoh123', 'Poncol', 'areman RT8/8', '2021-06-04 03:34:59', '2021-06-04 03:58:39'),
(4, 'kelompoklima', 'Depok', 'areman RT8/8', '2021-06-04 04:19:05', '2021-06-04 04:19:35'),
(5, 'kelompokpasia', 'Depok', 'areman RT8/8', '2021-06-04 04:28:25', '2021-06-04 04:42:34'),
(6, 'test123', 'Depok', 'areman RT8/8', '2021-06-04 05:04:04', '2021-06-04 05:04:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'User', 'Regular User'),
(3, 'Pedagang', 'sale');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(1, 5),
(1, 6),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(3, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-11-29 20:54:04', 1),
(2, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-11-29 20:55:19', 1),
(3, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-11-29 20:56:35', 1),
(4, '::1', 'thamahunter77', NULL, '2020-11-29 21:44:43', 0),
(5, '::1', 'thamahunter77', NULL, '2020-11-29 21:44:53', 0),
(6, '::1', 'thamahunter77', NULL, '2020-11-29 21:45:02', 0),
(7, '::1', 'thamahunter77', NULL, '2020-11-29 21:45:14', 0),
(8, '::1', 'thamahunter777@gmail.com', 3, '2020-11-29 21:47:31', 1),
(9, '::1', 'thamahunter777@gmail.com', 3, '2020-11-29 21:59:21', 1),
(10, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-11-29 21:59:43', 1),
(11, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-11-29 22:00:38', 1),
(12, '::1', 'thamahunter777@gmail.com', 3, '2020-11-29 22:17:24', 1),
(13, '::1', 'mahathirtama', NULL, '2020-11-29 23:02:03', 0),
(14, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-11-29 23:02:11', 1),
(15, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-11-29 23:14:37', 1),
(16, '::1', 'thamahunter777@gmail.com', 3, '2020-11-30 01:57:45', 1),
(17, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-11-30 01:58:30', 1),
(18, '::1', 'thamahunter777@gmail.com', 3, '2020-11-30 01:58:57', 1),
(19, '::1', 'thamahunter777@gmail.com', 3, '2020-11-30 21:01:18', 1),
(20, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-11-30 21:45:15', 1),
(21, '::1', 'thamahunter777@gmail.com', 3, '2020-11-30 23:00:12', 1),
(22, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-11-30 23:01:18', 1),
(23, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-12-01 07:35:54', 1),
(24, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-12-03 20:23:49', 1),
(25, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-12-11 20:32:23', 1),
(26, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-12-12 09:35:38', 1),
(27, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-12-12 10:34:43', 1),
(28, '::1', 'userbiasa', NULL, '2020-12-12 11:09:29', 0),
(29, '::1', 'thamahunter777@gmail.com', 3, '2020-12-12 11:10:01', 1),
(30, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-12-13 10:56:57', 1),
(31, '::1', 'bimaaja@gmail.com', 4, '2020-12-14 01:21:50', 1),
(32, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-12-14 01:23:04', 1),
(33, '::1', 'bimaaja@gmail.com', 4, '2020-12-14 01:53:57', 1),
(34, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-12-14 02:18:46', 1),
(35, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-12-24 10:41:05', 1),
(36, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-12-29 08:45:49', 1),
(37, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2020-12-29 22:03:20', 1),
(38, '::1', 'tugasUas@gmail.com', 5, '2021-01-06 22:06:46', 1),
(39, '::1', 'adminNih', NULL, '2021-01-06 22:23:37', 0),
(40, '::1', 'iniAdmin@gmail.com', 6, '2021-01-06 22:23:58', 1),
(41, '::1', 'tugasUas@gmail.com', 5, '2021-01-07 02:33:59', 1),
(42, '::1', 'iniAdmin@gmail.com', 6, '2021-01-07 02:48:04', 1),
(43, '::1', 'tugasUas@gmail.com', 5, '2021-01-07 02:53:44', 1),
(44, '::1', 'otaku@gmail.com', 7, '2021-03-29 04:07:31', 1),
(45, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2021-03-29 04:09:48', 1),
(46, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2021-04-28 01:04:58', 1),
(47, '::1', 'pedagang@gmail.com', 8, '2021-04-28 01:27:46', 1),
(48, '::1', 'pedagang123', NULL, '2021-04-28 11:24:11', 0),
(49, '::1', 'pedagang123', NULL, '2021-04-28 11:24:22', 0),
(50, '::1', 'pedagang@gmail.com', 8, '2021-04-28 11:24:42', 1),
(51, '::1', 'pedagang@gmail.com', 8, '2021-04-29 01:34:11', 1),
(52, '::1', 'webprog3@gmail.com', 9, '2021-05-22 02:01:52', 1),
(53, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2021-05-22 02:11:53', 1),
(54, '::1', 'webprog3@gmail.com', 9, '2021-05-22 02:32:19', 1),
(55, '::1', 'pedagang123', NULL, '2021-05-22 02:44:32', 0),
(56, '::1', 'pedagang@gmail.com', 8, '2021-05-22 02:46:14', 1),
(57, '::1', 'thamahunter777@gmail.com', 3, '2021-05-22 03:03:09', 1),
(58, '::1', 'thamahunter777@gmail.com', 3, '2021-05-22 03:03:31', 1),
(59, '::1', 'tugasUas123', NULL, '2021-05-22 03:04:58', 0),
(60, '::1', 'tugasUas123', NULL, '2021-05-22 03:07:02', 0),
(61, '::1', 'tugasUas@gmail.com', 5, '2021-05-22 03:07:56', 1),
(62, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2021-05-24 03:26:25', 1),
(63, '::1', 'test@gmail.com', 10, '2021-05-25 03:34:40', 1),
(64, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2021-05-25 03:56:44', 1),
(65, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2021-05-25 11:39:01', 1),
(66, '::1', 'tugasUas123', NULL, '2021-05-25 12:21:08', 0),
(67, '::1', 'tugasUas@gmail.com', 5, '2021-05-25 12:21:20', 1),
(68, '::1', 'kaneki@gmail.com', 11, '2021-05-25 12:23:11', 1),
(69, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2021-05-25 12:27:39', 1),
(70, '::1', 'kaneki@gmail.com', 11, '2021-05-25 12:30:05', 1),
(71, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2021-05-25 12:37:19', 1),
(72, '::1', 'kaneki@gmail.com', 11, '2021-05-25 14:17:45', 1),
(73, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2021-05-25 14:24:35', 1),
(74, '::1', 'kaneki@gmail.com', 11, '2021-05-25 14:25:07', 1),
(75, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2021-05-25 14:28:24', 1),
(76, '::1', 'tugasUas@gmail.com', 5, '2021-05-26 02:58:24', 1),
(77, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2021-05-26 07:35:19', 1),
(78, '::1', 'webprog3@gmail.com', 9, '2021-05-28 02:03:55', 1),
(79, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2021-05-28 02:17:42', 1),
(80, '::1', 'webprog3@gmail.com', 9, '2021-05-28 02:18:05', 1),
(81, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2021-05-28 02:25:28', 1),
(82, '::1', 'webprog3@gmail.com', 9, '2021-05-28 02:26:04', 1),
(83, '::1', 'pedagang123', NULL, '2021-05-28 02:31:48', 0),
(84, '::1', 'pedagang@gmail.com', 8, '2021-05-28 02:32:25', 1),
(85, '::1', 'webprog3@gmail.com', 9, '2021-05-28 02:37:31', 1),
(86, '::1', 'tugasUas@gmail.com', 5, '2021-05-28 03:19:44', 1),
(87, '::1', 'contoh@gmail.com', 12, '2021-06-04 03:34:11', 1),
(88, '::1', 'pedagang123', NULL, '2021-06-04 03:39:08', 0),
(89, '::1', 'pedagang123', NULL, '2021-06-04 03:39:20', 0),
(90, '::1', 'pedagang@gmail.com', 8, '2021-06-04 03:39:46', 1),
(91, '::1', 'contoh@gmail.com', 12, '2021-06-04 03:55:27', 1),
(92, '::1', 'pedagang123', NULL, '2021-06-04 03:57:14', 0),
(93, '::1', 'contoh@gmail.com', 12, '2021-06-04 03:57:35', 1),
(94, '::1', 'kelompoklima@gmail.com', 14, '2021-06-04 04:11:54', 1),
(95, '::1', 'bsi@gmail.com', 15, '2021-06-04 04:27:23', 1),
(96, '::1', 'bsi@gmail.com', 15, '2021-06-04 04:39:12', 1),
(97, '::1', 'bsi@gmail.com', 15, '2021-06-04 04:41:37', 1),
(98, '::1', 'pedagang@gmail.com', 8, '2021-06-04 04:57:09', 1),
(99, '::1', 'pedagang123', NULL, '2021-06-04 04:58:18', 0),
(100, '::1', 'pedagang@gmail.com', 8, '2021-06-04 04:58:25', 1),
(101, '::1', 'pedagang@gmail.com', 8, '2021-06-04 05:00:27', 1),
(102, '::1', 'test@gmail.com', 10, '2021-06-04 05:03:37', 1),
(103, '::1', 'pedagang@gmail.com', 8, '2021-06-04 05:04:36', 1),
(104, '::1', 'bsi@gmail.com', 15, '2021-06-04 05:09:02', 1),
(105, '::1', 'pedagang@gmail.com', 8, '2021-06-04 05:10:30', 1),
(106, '::1', 'pedagang@gmail.com', 8, '2021-06-04 05:11:32', 1),
(107, '::1', 'tugasUas@gmail.com', 5, '2021-06-04 05:18:42', 1),
(108, '::1', 'tugasUas123', NULL, '2021-06-04 05:26:08', 0),
(109, '::1', 'tugasUas123', NULL, '2021-06-04 05:26:23', 0),
(110, '::1', 'tugasUas123', NULL, '2021-06-04 05:26:40', 0),
(111, '::1', 'tugasUas123', NULL, '2021-06-04 05:27:00', 0),
(112, '::1', 'tugasUas123', NULL, '2021-06-04 05:27:56', 0),
(113, '::1', 'tugasUas123', NULL, '2021-06-04 05:28:03', 0),
(114, '::1', 'tugasUas123', NULL, '2021-06-04 05:28:11', 0),
(115, '::1', 'tugasUas123', NULL, '2021-06-04 05:28:46', 0),
(116, '::1', 'tugasUas123', NULL, '2021-06-04 05:28:54', 0),
(117, '::1', 'tugasUas123', NULL, '2021-06-04 05:29:03', 0),
(118, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2021-06-04 05:29:10', 1),
(119, '::1', 'tugasUas123', NULL, '2021-06-04 05:29:29', 0),
(120, '::1', 'pedagang@gmail.com', 8, '2021-06-04 05:29:36', 1),
(121, '::1', 'tugasUas123', NULL, '2021-06-04 05:30:11', 0),
(122, '::1', 'webprog3@gmail.com', 9, '2021-06-04 05:30:24', 1),
(123, '::1', 'tugasUas123', NULL, '2021-06-04 05:30:36', 0),
(124, '::1', 'tugasUas123', NULL, '2021-06-04 05:30:45', 0),
(125, '::1', 'tugasUas123', NULL, '2021-06-04 05:30:54', 0),
(126, '::1', 'adminNih123', NULL, '2021-06-04 05:31:09', 0),
(127, '::1', 'tugasUas@gmail.com', 5, '2021-06-04 05:31:29', 1),
(128, '::1', 'tugasUas@gmail.com', 5, '2021-06-04 05:31:57', 1),
(129, '::1', 'tugasUas@gmail.com', 5, '2021-06-05 03:47:51', 1),
(130, '::1', 'tugasUas@gmail.com', 5, '2021-06-05 04:06:28', 1),
(131, '::1', 'tugasUas@gmail.com', 5, '2021-06-05 04:06:52', 1),
(132, '::1', 'tugasUas@gmail.com', 5, '2021-06-05 04:20:59', 1),
(133, '::1', 'mahathirtama.ahmad@gmail.com', 1, '2021-06-17 02:45:32', 1),
(134, '::1', 'resetaja@gmail.com', 16, '2021-06-17 03:22:00', 1),
(135, '::1', 'cobareset123', NULL, '2021-06-17 03:22:42', 0),
(136, '::1', 'cobareset123', NULL, '2021-06-17 03:22:56', 0),
(137, '::1', 'resetaja@gmail.com', 16, '2021-06-17 03:23:07', 1),
(138, '::1', 'cobareset123', NULL, '2021-06-17 03:24:57', 0),
(139, '::1', 'cobareset123', NULL, '2021-06-17 03:25:08', 0),
(140, '::1', 'resetaja@gmail.com', 16, '2021-06-17 03:25:16', 1),
(141, '::1', 'resetaja@gmail.com', 16, '2021-06-17 03:35:50', 1),
(142, '::1', 'resetaja@gmail.com', 16, '2021-06-17 03:37:05', 1),
(143, '::1', 'tugasUas123', NULL, '2021-06-20 01:03:44', 0),
(144, '::1', 'tugasUas@gmail.com', 5, '2021-06-20 01:03:55', 1),
(145, '::1', 'tugasUas@gmail.com', 5, '2021-06-20 01:08:04', 1),
(146, '::1', 'tugasUas@gmail.com', 5, '2021-06-20 10:20:34', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-user', 'Manage All User'),
(2, 'manage-profile', 'Manage User\'s Profile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, 'resetaja@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', '', '2021-06-17 03:32:39'),
(2, 'resetaja@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', NULL, '2021-06-17 03:33:39'),
(3, 'resetaja@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', NULL, '2021-06-17 03:35:31'),
(4, 'tugasUas@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', NULL, '2021-06-20 01:06:37'),
(5, 'tugasUas@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', NULL, '2021-06-20 01:07:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE `beli` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pasar` varchar(255) NOT NULL,
  `tgldatang` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `pembelian` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `beli`
--

INSERT INTO `beli` (`id`, `username`, `type`, `alamat`, `pasar`, `tgldatang`, `harga`, `jumlah`, `pembelian`, `item`, `created_at`, `updated_at`) VALUES
(11, 'mahathirtama', 'sayur', '', 'pal', '30 April', 3000, '5', 'gopay', 'Bayam', '2020-12-12 10:13:12', '2020-12-12 10:13:12'),
(12, 'userbiasa', 'daging', '', 'minggu', '1 April', 10000, '45', 'alfamart', 'Kelolawar', '2020-12-12 11:10:32', '2020-12-12 11:10:32'),
(13, 'mahathirtama', 'buah', '', 'pal', '11 April', 7000, '10', 'alfamart', 'Pear', '2020-12-13 11:42:49', '2020-12-13 11:42:49'),
(14, 'bimaganteng', 'daging', '', 'minggu', '1 April', 10000, '5', 'gopay', 'Kelolawar', '2020-12-14 01:22:30', '2020-12-14 01:22:30'),
(15, 'bimaganteng', 'sayur', '', 'pal', '30 April', 3000, '5', 'indomaret', 'Bayam', '2020-12-14 01:54:28', '2020-12-14 01:54:28'),
(16, 'mahathirtama', 'buah', '', 'Pasar Minggu', '11 April', 7000, '1KG', 'Alfamart', 'Pear', '2020-12-29 22:53:39', '2020-12-29 22:53:39'),
(17, 'tugasUas123', 'sayur', '', 'Pasar Minggu', '30 April', 3000, '1KG', 'Alfamart', 'Bayam', '2021-01-07 02:45:18', '2021-01-07 02:45:18'),
(18, 'apaaja', 'sayur', '', 'Pasar Minggu', '1 April', 40000, '4Kg', 'Alfamart', 'Daun Singkong', '2021-03-29 04:08:27', '2021-03-29 04:08:27'),
(19, 'apaaja', 'sayur', '', 'Pasar Minggu', '30 April', 3000, '1KG', 'BCA', 'Bayam', '2021-03-29 04:09:21', '2021-03-29 04:09:21'),
(20, 'pedagang123', 'sayur', '', 'Pasar Minggu', '30 April', 3000, '1KG', 'Alfamart', 'Bayam', '2021-04-28 02:21:43', '2021-04-28 02:21:43'),
(21, 'pedagang123', 'daging', '', 'Pasar Minggu', '10 April', 50000, '1KG', 'Alfamart', 'Ayam', '2021-04-28 02:46:19', '2021-04-28 02:46:19'),
(22, 'pedagang123', 'daging', '', 'Pasar Minggu', '10 April', 50000, '1KG', 'Alfamart', 'Ayam', '2021-04-28 02:50:54', '2021-04-28 02:50:54'),
(23, 'pedagang123', 'daging', '', 'Pasar Minggu', '10 April', 50000, '1KG', 'Alfamart', 'Ayam', '2021-04-28 02:51:15', '2021-04-28 02:51:15'),
(25, 'mahathirtama', 'buah', 'areman RT8/8', 'Pasar Minggu', '21 April', 20000, '1KG', 'Alfamart', 'Jeruk', '2021-05-24 03:39:25', '2021-05-24 03:39:25'),
(26, 'mahathirtama', 'sayur', 'areman RT8/8', 'Pasar Pal', '2 Desember', 3000, '10Kg', 'BCA', 'Bawang Putih', '2021-05-25 13:28:17', '2021-05-25 13:28:17'),
(27, 'webprog123', 'sayur', 'kp Areman RT08/08', 'Pasar Minggu', '2 Desember', 3000, '1KG', 'Alfamart', 'Bawang Putih', '2021-05-28 02:29:08', '2021-05-28 02:29:08'),
(28, 'contoh123', 'daging', 'areman RT8/8', 'Pasar Minggu', '1 April', 10000, '3Kg', 'BRI', 'Sapi', '2021-06-04 03:38:10', '2021-06-04 03:38:10'),
(29, 'kelompokpasia', 'sayur', 'areman RT8/8', 'Pasar Minggu', '2 Desember', 3000, '1Kg', 'BRI', 'Bawang Putih', '2021-06-04 04:50:58', '2021-06-04 04:50:58'),
(30, 'kelompokpasia', 'sayur', 'areman RT8/8', 'Pasar Minggu', '1 April', 40000, '1Kg', 'BCA', 'Daun Singkong', '2021-06-04 04:54:57', '2021-06-04 04:54:57'),
(31, 'test123', 'daging', 'areman RT8/8', 'Pasar Cisalak', '1 April', 10000, '10Kg', 'Indomaret', 'Sapi', '2021-06-04 05:04:21', '2021-06-04 05:04:21'),
(32, 'kelompokpasia', 'sayur', 'areman RT8/8', 'Pasar Minggu', '1 April', 40000, '1Kg', 'BCA', 'Daun Singkong', '2021-06-04 05:10:15', '2021-06-04 05:10:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `belidesh`
--

CREATE TABLE `belidesh` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `pasar` varchar(255) NOT NULL,
  `tgldatang` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `pembelian` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `belidesh`
--

INSERT INTO `belidesh` (`id`, `username`, `type`, `pasar`, `tgldatang`, `harga`, `jumlah`, `pembelian`, `item`, `created_at`, `updated_at`) VALUES
(8, 'kelompokpasia', 'sayur', 'Pasar Minggu', '2 Desember', 3000, '1Kg', 'BRI', 'Bawang Putih', '2021-06-04 04:50:58', '2021-06-04 04:50:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buah`
--

CREATE TABLE `buah` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tgldatang` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buah`
--

INSERT INTO `buah` (`id`, `nama`, `slug`, `tgldatang`, `type`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Jeruk', 'jeruk', '21 April', 'buah', 20000, '1621667804_9008bd87c03ac5d68938.jpg', NULL, '2021-05-22 02:16:44'),
(5, 'Pear', 'pear', '11 April', 'buah', 7000, '1621667821_79b2fd631c6222b5a93b.jpg', '2020-11-17 00:53:55', '2021-05-22 02:17:01'),
(8, 'Anggur', 'anggur', '2 Desember', 'buah', 30000, '1621668698_9cd4a6908afce77e9223.jpg', '2021-05-22 02:31:38', '2021-05-22 02:31:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daging`
--

CREATE TABLE `daging` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tgldatang` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daging`
--

INSERT INTO `daging` (`id`, `nama`, `slug`, `tgldatang`, `type`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Ayam', 'ayam', '10 April', 'daging', 50000, '1621668224_c17ec3f5060ba5d2bdda.jpg', NULL, '2021-05-22 02:23:44'),
(6, 'Sapi', 'sapi', '1 April', 'daging', 10000, '1621668349_78caaac5f5195e3969ca.jpg', '2020-12-01 08:42:25', '2021-05-22 02:25:49'),
(7, 'Kambing', 'kambing', '2 januari', 'daging', 120000, '1621668597_6cddaf401ff59e42598c.jpg', '2021-05-22 02:29:57', '2021-05-22 02:29:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pedagang`
--

CREATE TABLE `pedagang` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `pasar` varchar(255) NOT NULL,
  `tgldatang` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `pembelian` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pedagang`
--

INSERT INTO `pedagang` (`id`, `username`, `type`, `pasar`, `tgldatang`, `harga`, `jumlah`, `pembelian`, `item`, `created_at`, `updated_at`) VALUES
(11, 'pedagang123', 'daging', 'Pasar Cisalak', '1 April', 10000, '10Kg', 'Indomaret', 'Sapi', '2021-06-04 05:04:45', '2021-06-04 05:04:45'),
(12, 'pedagang123', 'sayur', 'Pasar Minggu', '1 April', 40000, '1Kg', 'BCA', 'Daun Singkong', '2021-06-04 05:12:36', '2021-06-04 05:12:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sayur`
--

CREATE TABLE `sayur` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tgldatang` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sayur`
--

INSERT INTO `sayur` (`id`, `nama`, `slug`, `tgldatang`, `type`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(6, 'Bawang Putih', 'bawang-putih', '2 Desember', 'sayur', 3000, '1621668048_b2efa5952ae6a261aec0.jpg', '2020-11-17 00:28:16', '2021-05-22 02:20:48'),
(9, 'Daun Singkong', 'daun-singkong', '1 April', 'sayur', 40000, '1621668063_d702599de7b536ae517a.jpg', '2020-12-11 21:01:07', '2021-05-22 02:21:03'),
(11, 'Jagung', 'jagung', '1 April', 'sayur', 7000, '1621668474_91f9efb8ab847726676b.jpg', '2021-05-22 02:27:54', '2021-05-22 02:27:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'pasia.jpeg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'mahathirtama.ahmad@gmail.com', 'mahathirtama', NULL, 'pasia.jpeg', '$2y$10$9B9fDLy8klQ1HPMMdHWRk.O7si4wmkWsGd0aPGpRVzwA0X3Ldd45S', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-11-29 20:50:38', '2020-11-29 20:50:38', NULL),
(2, 'thamahunter77@gmail.com', 'thamahunter77', NULL, 'pasia.jpeg', '$2y$10$0K7ULVClpEE3ZN.SXM8DK.sI0jl/O33rvyiIzYISdLPJBM4ioRFVy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-11-29 21:36:20', '2020-11-29 21:36:20', NULL),
(3, 'thamahunter777@gmail.com', 'userbiasa', NULL, 'pasia.jpeg', '$2y$10$VWGI26sic3vdr9vLf2CxauneOmn3lvOPRK68dGOWOz8MxfiuP091e', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-11-29 21:47:15', '2020-11-29 21:47:15', NULL),
(4, 'bimaaja@gmail.com', 'bimaganteng', NULL, 'pasia.jpeg', '$2y$10$5ep40PHNvJL0JtLkSOgE6eYUDtw4XJ/QHAye.z9poXNWAW6KF1sUK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-14 01:21:19', '2020-12-14 01:21:19', NULL),
(5, 'tugasUas@gmail.com', 'tugasUas123', NULL, 'pasia.jpeg', '$2y$10$h5lIQhowwT3xz..wYucI9OZfelAVDNCsK3vKWNoVyGiSYFFuGMJVG', NULL, '2021-06-20 01:07:21', NULL, NULL, NULL, NULL, 1, 0, '2021-01-06 22:02:32', '2021-06-20 01:07:22', NULL),
(6, 'iniAdmin@gmail.com', 'adminNih123', NULL, 'pasia.jpeg', '$2y$10$kzFoGK.UpomBU4iAHCGhV.PgFqwA/xIm9fsFVY.BZ9q1eaZS3CRw6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-06 22:22:13', '2021-01-06 22:22:13', NULL),
(7, 'otaku@gmail.com', 'apaaja', NULL, 'pasia.jpeg', '$2y$10$8dJzaxMbpWDqZgotpNNf8.f1YA/Ch4SkjjVnqxoQ5odh7DDEOo6b6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-03-29 04:07:15', '2021-03-29 04:07:15', NULL),
(8, 'pedagang@gmail.com', 'pedagang123', NULL, 'pasia.jpeg', '$2y$10$x4O7LdHwwpdmM.jBqAHOQOBkO3s2wOaB6Q1TEaIni.XqJsURuLfHe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-04-28 01:16:05', '2021-04-28 01:16:05', NULL),
(9, 'webprog3@gmail.com', 'webprog123', NULL, 'pasia.jpeg', '$2y$10$zAPr7DpFx31TXdW9CKsyz.rMr8/gRbuYeSb1ojMaffAMhIR.Rv106', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-22 02:00:48', '2021-05-22 02:00:48', NULL),
(10, 'test@gmail.com', 'test123', NULL, 'pasia.jpeg', '$2y$10$YPsg4aqtGLazVasQBC36nO0OaGzbBPkuKpvh3aPJsya2V1hx9VylK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-25 02:33:46', '2021-05-25 02:33:46', NULL),
(11, 'kaneki@gmail.com', 'kaneki123', NULL, 'pasia.jpeg', '$2y$10$5szVrgIHOxm8rvEFQL5Lp.tF2UgiiComCopYnbz6t3mZpSPE2xKHW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-25 12:23:01', '2021-05-25 12:23:01', NULL),
(12, 'contoh@gmail.com', 'contoh123', NULL, 'pasia.jpeg', '$2y$10$QQOGVbdfyAkjDhQL504J1.FyHlO2ipO4LKNUC7bRFmlY/INj9R9cy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-04 03:33:54', '2021-06-04 03:33:54', NULL),
(13, 'kelompok5@gmail.com', 'kelompok5123', NULL, 'pasia.jpeg', '$2y$10$cVG3hbuJaLdqLSWTnyzbnOA7pfXTTCuofzpNHV3x66Z0ImhEne0mW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-04 04:05:46', '2021-06-04 04:05:46', NULL),
(14, 'kelompoklima@gmail.com', 'kelompoklima', NULL, 'pasia.jpeg', '$2y$10$tzG.yeCqBN/DGwINPHNlj.w2D9.Fx/tf.XiVoo8sr1qDk895ssHZK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-04 04:10:39', '2021-06-04 04:10:39', NULL),
(15, 'bsi@gmail.com', 'kelompokpasia', NULL, 'pasia.jpeg', '$2y$10$CEJevI3fLWIkqLJX/JBdtulXt99puQb0ppriW3QgFqz.ENm6CQyxC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-04 04:26:55', '2021-06-04 04:26:55', NULL),
(16, 'resetaja@gmail.com', 'cobareset123', NULL, 'pasia.jpeg', '$2y$10$bqa1mCIXQVeqyexJRDFhl.KZNom2v0zsHXggxx9RcHDfg7ZSZYeqK', NULL, '2021-06-17 03:35:32', NULL, NULL, NULL, NULL, 1, 0, '2021-06-17 03:21:49', '2021-06-17 03:35:32', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `belidesh`
--
ALTER TABLE `belidesh`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buah`
--
ALTER TABLE `buah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daging`
--
ALTER TABLE `daging`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pedagang`
--
ALTER TABLE `pedagang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sayur`
--
ALTER TABLE `sayur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `beli`
--
ALTER TABLE `beli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `belidesh`
--
ALTER TABLE `belidesh`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `buah`
--
ALTER TABLE `buah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `daging`
--
ALTER TABLE `daging`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pedagang`
--
ALTER TABLE `pedagang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `sayur`
--
ALTER TABLE `sayur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
