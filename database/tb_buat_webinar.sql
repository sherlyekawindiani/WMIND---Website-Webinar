-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2022 pada 05.36
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
-- Struktur dari tabel `tb_buat_webinar`
--

CREATE TABLE `tb_buat_webinar` (
  `id_webinar` int(11) NOT NULL,
  `gambar_poster` varchar(20) NOT NULL,
  `tgl_buat` varchar(100) NOT NULL,
  `judul_webinar` varchar(225) NOT NULL,
  `kategori_webinar` varchar(50) NOT NULL,
  `nama_eo` varchar(225) NOT NULL,
  `email_eo` varchar(225) NOT NULL,
  `tanggal_mulai` varchar(100) NOT NULL,
  `waktu_mulai` varchar(20) NOT NULL,
  `link_streaming` varchar(150) DEFAULT NULL,
  `deskripsi_webinar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_buat_webinar`
--

INSERT INTO `tb_buat_webinar` (`id_webinar`, `gambar_poster`, `tgl_buat`, `judul_webinar`, `kategori_webinar`, `nama_eo`, `email_eo`, `tanggal_mulai`, `waktu_mulai`, `link_streaming`, `deskripsi_webinar`) VALUES
(11, '61c1e0f8bc82f.jpg', 'Tuesday-21-12-2021', 'digitalisasi dan menciptakan bisnis yang tahan terhadap situasi pandemi kkkkk', 'Desain', 'utter academy', 'utteracademy@gmail.com', '2021-12-22', '00:15:00', 'https://meet.google.com/cdq-bfqx-khs', 'detailll'),
(16, '61cacebe8ddb1.jpg', 'Tuesday-28-12-2021', 'Webinar flutter iniii oooo', 'Lifestyle', 'utter academy', 'utteracademy@gmail.com', '2021-12-28', '18:48', 'https://meet.google.com/cdq-bfqx-khs', 'jjjjjjjj'),
(19, '61d51ce7783e8.png', 'Wednesday-05-01-2022', 'tips dan tricks pemasaran digital lllllllll', 'Bisnis', 'utter academy', 'utteracademy@gmail.com', '2022-01-05', '15:24', 'https://meet.google.com/cdq-bfqx-khs', 'iiii');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_buat_webinar`
--
ALTER TABLE `tb_buat_webinar`
  ADD PRIMARY KEY (`id_webinar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_buat_webinar`
--
ALTER TABLE `tb_buat_webinar`
  MODIFY `id_webinar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
