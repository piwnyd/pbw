-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2024 pada 06.48
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun` int(4) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `isdel` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `tahun`, `created_by`, `created_at`, `update_by`, `update_at`, `delete_by`, `delete_at`, `isdel`) VALUES
(1, 'matematika', 2006, 1, '2024-12-16 15:44:55', NULL, NULL, NULL, NULL, 0),
(2, 'bubu', 1999, 1, '2024-12-16 15:45:03', NULL, NULL, 1, '2024-12-16 15:54:58', 1),
(3, 'matematika', 1999, 1, '2024-12-16 15:46:27', NULL, NULL, 1, '2024-12-16 15:52:11', 1),
(4, 'buko', 1555, 1, '2024-12-16 15:46:53', NULL, NULL, 1, '2024-12-16 15:53:19', 1),
(5, 'voni', 1999, 1, '2024-12-16 15:48:13', NULL, NULL, 1, '2024-12-16 15:53:21', 1),
(6, 'mtk', 1999, 1, '2024-12-16 15:51:51', NULL, NULL, 1, '2024-12-16 15:54:58', 1),
(7, 'buk0', 1999, 1, '2024-12-16 15:53:33', NULL, NULL, 1, '2024-12-16 15:54:59', 1),
(8, 'buko', 2000, 1, '2024-12-16 15:53:50', NULL, NULL, 1, '2024-12-16 15:55:00', 1),
(9, 'buko', 1990, 1, '2024-12-16 15:55:08', NULL, NULL, 1, '2024-12-23 04:00:40', 1),
(10, 'matematika', 90, 1, '2024-12-16 15:55:12', NULL, NULL, 1, '2024-12-23 04:00:38', 1),
(11, 'amanda', 1999, 1, '2024-12-19 14:23:35', NULL, NULL, 1, '2024-12-19 14:23:38', 1),
(12, 'matematika', 1999, 1, '2024-12-19 14:59:33', NULL, NULL, 1, '2024-12-19 14:59:37', 1),
(13, 'mtk', 1990, 1, '2024-12-19 14:59:43', NULL, NULL, 1, '2024-12-19 14:59:45', 1),
(14, 'mtk', 1999, 1, '2024-12-19 15:00:23', NULL, NULL, 1, '2024-12-23 02:59:08', 1),
(15, 'matematika', 1999, 1, '2024-12-23 02:57:16', NULL, NULL, 1, '2024-12-23 02:59:07', 1),
(16, 'matematika', 0, 1, '2024-12-23 02:59:02', NULL, NULL, 1, '2024-12-23 02:59:06', 1),
(17, 'matematika', 1999, 1, '2024-12-23 03:04:01', NULL, NULL, 1, '2024-12-23 03:56:22', 1),
(18, 'mtk', 1999, 1, '2024-12-23 03:06:46', NULL, NULL, 1, '2024-12-23 03:06:54', 1),
(19, 'amanda', 2000, 1, '2024-12-23 03:56:41', NULL, NULL, 1, '2024-12-23 03:59:25', 1),
(20, 'naruto', 500, 1, '2024-12-23 04:00:25', NULL, NULL, 1, '2024-12-23 04:00:37', 1),
(21, 'Bahasa indo', 2000, 1, '2024-12-23 05:40:30', NULL, NULL, 1, '2024-12-23 06:46:46', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `active`) VALUES
(1, 'Amanda ', 'piwnyd@gmail.com', '$2y$10$bIy0M.fE5h2m3CqwPbjU3elN1nd72Qs7KxCN6m/si13XPFfTLpXNm', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
