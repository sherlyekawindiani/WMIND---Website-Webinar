-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2022 pada 14.31
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
  `judul_webinar_session` varchar(225) NOT NULL,
  `tgl_mulai_session` varchar(30) NOT NULL,
  `waktu_mulai_session` varchar(11) NOT NULL,
  `tgl_daftar` varchar(225) DEFAULT NULL,
  `nama_peserta` varchar(225) NOT NULL,
  `email_peserta` varchar(225) NOT NULL,
  `notelp_peserta` bigint(100) NOT NULL,
  `profesi_peserta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_daftar_peserta`
--

INSERT INTO `tb_daftar_peserta` (`id_peserta`, `id_webinar_session`, `id_author`, `id_author_eo`, `judul_webinar_session`, `tgl_mulai_session`, `waktu_mulai_session`, `tgl_daftar`, `nama_peserta`, `email_peserta`, `notelp_peserta`, `profesi_peserta`) VALUES
(61, 22, 22, 20, ' tips dan tricks pemasaran digital', ' 2022-01-10', ' 20:53', 'Sunday-16-01-2022', 'sherly eka windiani', 'sherlyekaw8229@gmail.com', 81230248625, 'Siswa'),
(62, 23, 22, 21, ' digitalisasi dan menciptakan bisnis yang tahan terhadap situasi pandemi', ' 2022-01-10', ' 16:54', 'Sunday-16-01-2022', 'sherly eka windiani', 'sherlyekaw8229@gmail.com', 81230248625, 'Mahasiswa'),
(63, 24, 22, 20, ' flutter App Development', ' 2022-01-12', ' 05:56', 'Sunday-16-01-2022', 'sherly eka windiani', 'sherlyekaw8229@gmail.com', 81230248625, 'Mahasiswa');

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
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
