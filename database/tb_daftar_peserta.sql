-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2022 pada 04.44
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
-- Database: `db_wmind`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar_peserta`
--

CREATE TABLE `tb_daftar_peserta` (
  `id_peserta` int(11) NOT NULL,
  `nama_peserta` varchar(225) NOT NULL,
  `email_peserta` varchar(225) NOT NULL,
  `notelp_peserta` bigint(100) NOT NULL,
  `profesi_peserta` varchar(50) NOT NULL,
  `tgl_daftar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_daftar_peserta`
--

INSERT INTO `tb_daftar_peserta` (`id_peserta`, `nama_peserta`, `email_peserta`, `notelp_peserta`, `profesi_peserta`, `tgl_daftar`) VALUES
(25, 'sarah', 'sarah@gmail.com', 6283835940328, 'Umum', 'Thursday-30-12-21'),
(26, 'febbi', 'feb@gmail.com', 86534781211, 'Mahasiswa', 'Thursday-30-12-21'),
(27, 'shevi', 'vivi@gmail.com', 876, 'Mahasiswa', 'Thursday-30-12-21'),
(28, 'sepia', 'kasai@gmail.com', 5676, 'Umum', 'Thursday-30-12-21'),
(29, 'yuni', 'werty@gmail.com', 86534781211, 'Siswa', 'Thursday-30-12-21'),
(30, 'faradina', 'fara@gmail.com', 62876543, 'Siswa', 'Friday-31-12-2021'),
(31, 'noya', 'noya@gmail.com', 123456789, 'Siswa', 'Friday-31-12-2021');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_daftar_peserta`
--
ALTER TABLE `tb_daftar_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_daftar_peserta`
--
ALTER TABLE `tb_daftar_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
