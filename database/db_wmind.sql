-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2022 pada 10.22
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
  `id_author` int(11) NOT NULL,
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

INSERT INTO `tb_buat_webinar` (`id_webinar`, `id_author`, `gambar_poster`, `tgl_buat`, `judul_webinar`, `kategori_webinar`, `nama_eo`, `email_eo`, `tanggal_mulai`, `waktu_mulai`, `link_streaming`, `deskripsi_webinar`) VALUES
(22, 20, '61dc013daba44.png', 'Monday-10-01-2022', 'tips dan tricks pemasaran digital', 'Bisnis', 'utter academy', 'utteracademy@gmail.com', '2022-01-10', '20:53', 'https://meet.google.com/cdq-bfqx-khs', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, quisquam molestiae cumque repudiandae sint beatae accusantium amet, at quas, voluptatum sapiente unde laudantium nesciunt. Quas harum ab corrupti saepe accusamus.'),
(23, 21, '61dc01b474a96.jpg', 'Monday-10-01-2022', 'digitalisasi dan menciptakan bisnis yang tahan terhadap situasi pandemi', 'IT', 'utter academy', 'utteracademy@gmail.com', '2022-01-10', '16:54', 'https://meet.google.com/cdq-bfqx-khs', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, quisquam molestiae cumque repudiandae sint beatae accusantium amet, at quas, voluptatum sapiente unde laudantium nesciunt. Quas harum ab corrupti saepe accusamus.'),
(24, 20, '61ddd21822623.jpg', 'Tuesday-11-01-2022', 'flutter App Development', 'IT', 'utter academy', 'utteracademy@gmail.com', '2022-01-12', '05:56', 'https://meet.google.com/cdq-bfqx-khs', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias necessitatibus, et illo laboriosam, soluta ratione quae saepe corrupti, a atque similique accusamus. Ipsum vitae distinctio delectus cupiditate ipsa consectetur inventore?');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_saran`
--

CREATE TABLE `tb_saran` (
  `id_saran` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_saran`
--

INSERT INTO `tb_saran` (`id_saran`, `nama`, `email`, `subject`, `saran`) VALUES
(5, 'Admiral', 'faidatulelaa@gmail.com', 'ppp', 'pepepe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `level` varchar(20) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `username`, `level`, `password`) VALUES
(20, 'sherly eka windiani', 'sherlyuplondwebinar@gmail.com', 'sherlyup', 'Penyelenggara Acara', 'e9af23dd5a45126ff689eba7bb2146bb'),
(21, 'Faidatul Ela', 'faidatulupload@gmail.com', 'faidatulup', 'Penyelenggara Acara', 'e9af23dd5a45126ff689eba7bb2146bb'),
(22, 'sherly eka peserta', 'sherlypesertawebinar@gmail.com', 'sherlypeserta', 'Peserta', 'e9af23dd5a45126ff689eba7bb2146bb'),
(23, 'faidatul peserta', 'faidatulpeserta@gmail.com', 'faidatullpeserta', 'Peserta', 'e9af23dd5a45126ff689eba7bb2146bb'),
(24, 'admin', 'admin@gmail.com', 'admin', 'admin', 'e9af23dd5a45126ff689eba7bb2146bb'),
(25, 'tirzana divanti', 'tirzanadivantikezia28@gmail.com', 'divantirja', 'Peserta', 'e9af23dd5a45126ff689eba7bb2146bb'),
(26, 'noya shevi', 'noya@gmail.com', 'noya', 'Penyelenggara Acara', 'e9af23dd5a45126ff689eba7bb2146bb');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_buat_webinar`
--
ALTER TABLE `tb_buat_webinar`
  ADD PRIMARY KEY (`id_webinar`);

--
-- Indeks untuk tabel `tb_daftar_peserta`
--
ALTER TABLE `tb_daftar_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indeks untuk tabel `tb_saran`
--
ALTER TABLE `tb_saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_buat_webinar`
--
ALTER TABLE `tb_buat_webinar`
  MODIFY `id_webinar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_daftar_peserta`
--
ALTER TABLE `tb_daftar_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `tb_saran`
--
ALTER TABLE `tb_saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
