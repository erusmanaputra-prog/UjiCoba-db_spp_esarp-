-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2026 pada 07.39
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp_esarp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(5) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
('121', 'XII RPL 2', 'Rekayasa Perangkat Lunak'),
('123', 'XII HOTEL ', 'Perhotelan'),
('K02', 'XI RPL 2', 'Rekayasa Perangkat Lunak'),
('k04', 'XII RPL 1', 'Rekayasa Perangkat Lunak'),
('K06', 'XI RPL 2', 'Rekayasa Perangkat Lunak'),
('k89', 'XI AKL 2', 'Akuntansi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `id_petugas` varchar(5) DEFAULT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `tgl_pembayaran` date DEFAULT NULL,
  `bulan_tagihan` varchar(12) DEFAULT NULL,
  `tahun_tagihan` int(4) DEFAULT NULL,
  `id_spp` varchar(5) DEFAULT NULL,
  `no_bayar` varchar(11) DEFAULT NULL,
  `keterangan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_pembayaran`, `bulan_tagihan`, `tahun_tagihan`, `id_spp`, `no_bayar`, `keterangan`) VALUES
(2, 'id005', '1234', '2026-08-07', 'Juli', 2026, 'SPP4', '2608070001', 'LUNAS'),
(3, 'id005', '1234', '2026-08-07', 'Agustus', 2026, 'SPP4', '2608070002', 'LUNAS'),
(4, NULL, '1234', NULL, 'September', 2026, 'SPP4', NULL, NULL),
(5, NULL, '1234', NULL, 'Oktober', 2026, 'SPP4', NULL, NULL),
(6, NULL, '1234', NULL, 'Nopember', 2026, 'SPP4', NULL, NULL),
(7, NULL, '1234', NULL, 'Desember', 2026, 'SPP4', NULL, NULL),
(8, NULL, '1234', NULL, 'Januari', 2027, 'SPP4', NULL, NULL),
(9, NULL, '1234', NULL, 'Februari', 2027, 'SPP4', NULL, NULL),
(10, NULL, '1234', NULL, 'Maret', 2027, 'SPP4', NULL, NULL),
(11, NULL, '1234', NULL, 'April', 2027, 'SPP4', NULL, NULL),
(12, NULL, '1234', NULL, 'Mei', 2027, 'SPP4', NULL, NULL),
(13, NULL, '1234', NULL, 'Juni', 2027, 'SPP4', NULL, NULL),
(14, 'id005', '1945', '2026-08-22', 'Juli', 2026, 'SPP02', '2608220001', 'LUNAS'),
(15, 'id005', '1945', '2026-08-22', 'Agustus', 2026, 'SPP02', '2608220002', 'LUNAS'),
(16, 'id005', '1945', '2026-09-04', 'September', 2026, 'SPP02', '2609040001', 'LUNAS'),
(17, 'id005', '1945', '2026-09-04', 'Oktober', 2026, 'SPP02', '2609040002', 'LUNAS'),
(18, 'id005', '1945', '2026-09-04', 'Nopember', 2026, 'SPP02', '2609040003', 'LUNAS'),
(19, NULL, '1945', NULL, 'Desember', 2026, 'SPP02', NULL, NULL),
(20, NULL, '1945', NULL, 'Januari', 2027, 'SPP02', NULL, NULL),
(21, NULL, '1945', NULL, 'Februari', 2027, 'SPP02', NULL, NULL),
(22, NULL, '1945', NULL, 'Maret', 2027, 'SPP02', NULL, NULL),
(23, NULL, '1945', NULL, 'April', 2027, 'SPP02', NULL, NULL),
(24, NULL, '1945', NULL, 'Mei', 2027, 'SPP02', NULL, NULL),
(25, NULL, '1945', NULL, 'Juni', 2027, 'SPP02', NULL, NULL),
(26, NULL, '5555', NULL, 'Juli', 2026, 'SPP01', NULL, NULL),
(27, NULL, '5555', NULL, 'Agustus', 2026, 'SPP01', NULL, NULL),
(28, NULL, '5555', NULL, 'September', 2026, 'SPP01', NULL, NULL),
(29, NULL, '5555', NULL, 'Oktober', 2026, 'SPP01', NULL, NULL),
(30, NULL, '5555', NULL, 'Nopember', 2026, 'SPP01', NULL, NULL),
(31, NULL, '5555', NULL, 'Desember', 2026, 'SPP01', NULL, NULL),
(32, NULL, '5555', NULL, 'Januari', 2027, 'SPP01', NULL, NULL),
(33, NULL, '5555', NULL, 'Februari', 2027, 'SPP01', NULL, NULL),
(34, NULL, '5555', NULL, 'Maret', 2027, 'SPP01', NULL, NULL),
(35, NULL, '5555', NULL, 'April', 2027, 'SPP01', NULL, NULL),
(36, NULL, '5555', NULL, 'Mei', 2027, 'SPP01', NULL, NULL),
(37, NULL, '5555', NULL, 'Juni', 2027, 'SPP01', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('admin','petugas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
('A01', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'sasa', 'admin'),
('A02', 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'Budi', 'petugas'),
('id004', 'sali', '21232f297a57a5a743894a0e4a801fc3', 'sasa', 'admin'),
('id005', 'esa', '21232f297a57a5a743894a0e4a801fc3', 'Esa', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(10) NOT NULL,
  `nis` varchar(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `id_spp` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('1234', '123', 'jamal', '123', 'cempaka', '19208', 'SPP4'),
('1945', '3005', 'Esa Rusmana Putra', '121', 'Banjarbaru', '089533', 'SPP02'),
('5555', '5555', 'Sybau', '123', 'New york ', '082152128990', 'SPP01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id_spp` varchar(30) NOT NULL,
  `tahun` int(4) NOT NULL,
  `nominal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
('SPP01', 2026, 300000),
('SPP02', 2025, 300000),
('SPP4', 2025, 12345);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `nisn` (`nisn`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
