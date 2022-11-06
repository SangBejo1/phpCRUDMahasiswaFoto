-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Nov 2022 pada 05.14
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

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
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `nim` varchar(255) NOT NULL,
  `tugas` int(5) NOT NULL,
  `uts` int(5) NOT NULL,
  `uas` int(5) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `images`
--

INSERT INTO `images` (`id`, `image_url`, `nama`, `nim`, `tugas`, `uts`, `uas`, `gender`, `keterangan`) VALUES
(33, 'IMG-6366711d6a2218.39892630.webp', 'Ayub Subagiya', '2107412021', 100, 100, 100, 'Laki-Laki', 'asfcd'),
(34, 'IMG-6366714d102ea1.56830692.webp', 'Ayub Subagiya', '2107412021', 100, 90, 100, 'Laki-Laki', 'asdd '),
(37, 'IMG-636713ede18e43.70784765.jpg', 'Ayub Subagiya', '2107412021', 100, 100, 90, 'Laki-Laki', 'bagus'),
(38, 'IMG-63671402a58db8.09893007.png', 'Ayub Subagiya', '2107412021', 100, 90, 100, 'Laki-Laki', 'ayub'),
(39, 'IMG-636714182a3c51.00589108.webp', 'Ayub Subagiya', '2107412021', 100, 100, 23, 'Wanita', 'ayub'),
(43, 'IMG-636714c94f80c7.32074043.jpg', 'Ayub Subagiya', '2107412021', 100, 100, 100, 'Laki-Laki', 'jffg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
