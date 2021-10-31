-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2020 pada 05.00
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcoffee`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`) VALUES
(1, 'tejak', '$2y$10$SvpunJ6fkqIjoZ3ygXcan.IwBs3hL5cjpDET3YEoOqthu0wTGzpiu'),
(2, 'zhicma', '$2y$10$LnYnPwQZ/HISzmXG3R.YIesSaWTLxZU6Dh3q51v5q62OweJSm/1iy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakopi`
--

CREATE TABLE `datakopi` (
  `id` int(5) NOT NULL,
  `NamaKopi` varchar(50) NOT NULL,
  `AsalKopi` varchar(50) NOT NULL,
  `Harga` int(11) NOT NULL,
  `User` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datakopi`
--

INSERT INTO `datakopi` (`id`, `NamaKopi`, `AsalKopi`, `Harga`, `User`) VALUES
(20, 'Kopi Gayo', 'Aceh', 37000, 'tejak'),
(21, 'Kopi Toraja', 'Sulawesi Selatan', 60000, 'tejak'),
(22, 'Kopi Wamena', 'Papua', 55000, 'tejak');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`(50));

--
-- Indeks untuk tabel `datakopi`
--
ALTER TABLE `datakopi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `datakopi`
--
ALTER TABLE `datakopi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
