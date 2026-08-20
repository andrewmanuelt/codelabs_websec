-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Agu 2026 pada 09.27
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codelab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kualitas_udara`
--

CREATE TABLE `kualitas_udara` (
  `id` int(11) NOT NULL,
  `bulan` varchar(2) DEFAULT NULL,
  `karbon_monoksida` int(11) DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `nitrogen_dioksida` int(11) DEFAULT NULL,
  `ozon` int(11) DEFAULT NULL,
  `parameter_pencemar_kritis` varchar(20) DEFAULT NULL,
  `periode_data` varchar(6) DEFAULT NULL,
  `pm_duakomalima` int(11) DEFAULT NULL,
  `pm_sepuluh` int(11) DEFAULT NULL,
  `stasiun` varchar(100) DEFAULT NULL,
  `sulfur_dioksida` int(11) DEFAULT NULL,
  `tanggal` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kualitas_udara`
--

INSERT INTO `kualitas_udara` (`id`, `bulan`, `karbon_monoksida`, `kategori`, `max`, `nitrogen_dioksida`, `ozon`, `parameter_pencemar_kritis`, `periode_data`, `pm_duakomalima`, `pm_sepuluh`, `stasiun`, `sulfur_dioksida`, `tanggal`) VALUES
(1, '01', 9, 'SEDANG', 79, 79, 8, NULL, '202401', 65, 51, 'DKI3 Jagakarsa', 45, '21'),
(2, '01', 5, 'SEDANG', 56, 56, 8, NULL, '202401', 34, 27, 'DKI3 Jagakarsa', 45, '22'),
(3, '01', 6, 'SEDANG', 52, 51, 9, 'PM25', '202401', 52, NULL, 'DKI3 Jagakarsa', 46, '23'),
(4, '01', 8, 'SEDANG', 65, 38, 9, 'PM25', '202401', 65, 46, 'DKI3 Jagakarsa', 46, '24'),
(5, '01', 7, 'SEDANG', 55, 28, 11, 'PM25', '202401', 55, 37, 'DKI3 Jagakarsa', 47, '25'),
(8, '08', 0, 'Baik', 0, 0, 0, 'Tidak ada', '2026', 0, 0, '<script>alert(\'Page has been hacked\')</script>', 0, '20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(120) NOT NULL,
  `username` varchar(12) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin123@gmail.com', 'admin123'),
(2, 'administrator', 'administrato', 'administrator@gmail.com', 'admin123'),
(3, 'rahman', 'rahman', 'rahman@gmail.com', '123456'),
(4, 'agus', 'agus', 'agus@gmail.com', 'rahasia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kualitas_udara`
--
ALTER TABLE `kualitas_udara`
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
-- AUTO_INCREMENT untuk tabel `kualitas_udara`
--
ALTER TABLE `kualitas_udara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
