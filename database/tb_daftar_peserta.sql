-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2022 pada 22.33
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
  `id_webinar_session` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  `id_author_eo` int(11) NOT NULL,
  `tgl_daftar` varchar(225) DEFAULT NULL,
  `nama_peserta` varchar(225) NOT NULL,
  `email_peserta` varchar(225) NOT NULL,
  `notelp_peserta` bigint(100) NOT NULL,
  `profesi_peserta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_daftar_peserta`
--

INSERT INTO `tb_daftar_peserta` (`id_peserta`, `id_webinar_session`, `id_author`, `id_author_eo`, `tgl_daftar`, `nama_peserta`, `email_peserta`, `notelp_peserta`, `profesi_peserta`) VALUES
(38, 23, 22, 21, 'Tuesday-11-01-2022', 'sherly eka windiani', 'sherlyeka@gmail.com', 81230248625, 'Mahasiswa'),
(39, 22, 23, 20, 'Tuesday-11-01-2022', 'llaaaa', 'lala@gmail.com', 81230248625, 'Mahasiswa'),
(40, 24, 23, 20, 'Tuesday-11-01-2022', 'tirsana', 'tirsana@gmail.com', 81230248625, 'Siswa'),
(41, 24, 23, 20, 'Tuesday-11-01-2022', 'faidatul lala', 'faidatullalaa@gmail.com', 81230248625, 'Siswa');

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
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
