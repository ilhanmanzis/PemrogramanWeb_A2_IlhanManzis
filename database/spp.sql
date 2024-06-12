-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2024 pada 16.36
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `user_admin` varchar(50) NOT NULL,
  `pass_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `user_admin`, `pass_admin`) VALUES
(123, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `angkatan`
--

CREATE TABLE `angkatan` (
  `id_angkatan` int(11) NOT NULL,
  `nama_angkatan` varchar(50) NOT NULL,
  `biaya` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `angkatan`
--

INSERT INTO `angkatan` (`id_angkatan`, `nama_angkatan`, `biaya`) VALUES
(1, '2023/2024', '25000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'TKJ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(20, 'X TKJ 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `jatuhtempo` varchar(50) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `nobayar` varchar(50) DEFAULT NULL,
  `tglbayar` varchar(50) DEFAULT NULL,
  `jumlah` varchar(50) NOT NULL,
  `ket` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `siswa`, `jatuhtempo`, `bulan`, `nobayar`, `tglbayar`, `jumlah`, `ket`) VALUES
(469, 31, '2024-06-12', 'Juni  2024', NULL, NULL, '25000', NULL),
(470, 31, '2024-07-12', 'Juli  2024', NULL, NULL, '25000', NULL),
(471, 31, '2024-08-12', 'Agustus  2024', NULL, NULL, '25000', NULL),
(472, 31, '2024-09-12', 'September  2024', NULL, NULL, '25000', NULL),
(473, 31, '2024-10-12', 'Oktober  2024', NULL, NULL, '25000', NULL),
(474, 31, '2024-11-12', 'November  2024', NULL, NULL, '25000', NULL),
(475, 31, '2024-12-12', 'Desember  2024', NULL, NULL, '25000', NULL),
(476, 31, '2025-01-12', 'Januari  2025', NULL, NULL, '25000', NULL),
(477, 31, '2025-02-12', 'Februari  2025', NULL, NULL, '25000', NULL),
(478, 31, '2025-03-12', 'Maret  2025', NULL, NULL, '25000', NULL),
(479, 31, '2025-04-12', 'April  2025', NULL, NULL, '25000', NULL),
(480, 31, '2025-05-12', 'Mei  2025', NULL, NULL, '25000', NULL),
(481, 31, '2025-06-12', 'Juni  2025', NULL, NULL, '25000', NULL),
(482, 31, '2025-07-12', 'Juli  2025', NULL, NULL, '25000', NULL),
(483, 31, '2025-08-12', 'Agustus  2025', NULL, NULL, '25000', NULL),
(484, 31, '2025-09-12', 'September  2025', NULL, NULL, '25000', NULL),
(485, 31, '2025-10-12', 'Oktober  2025', NULL, NULL, '25000', NULL),
(486, 31, '2025-11-12', 'November  2025', NULL, NULL, '25000', NULL),
(487, 31, '2025-12-12', 'Desember  2025', NULL, NULL, '25000', NULL),
(488, 31, '2026-01-12', 'Januari  2026', NULL, NULL, '25000', NULL),
(489, 31, '2026-02-12', 'Februari  2026', NULL, NULL, '25000', NULL),
(490, 31, '2026-03-12', 'Maret  2026', NULL, NULL, '25000', NULL),
(491, 31, '2026-04-12', 'April  2026', NULL, NULL, '25000', NULL),
(492, 31, '2026-05-12', 'Mei  2026', NULL, NULL, '25000', NULL),
(493, 31, '2026-06-12', 'Juni  2026', NULL, NULL, '25000', NULL),
(494, 31, '2026-07-12', 'Juli  2026', NULL, NULL, '25000', NULL),
(495, 31, '2026-08-12', 'Agustus  2026', NULL, NULL, '25000', NULL),
(496, 31, '2026-09-12', 'September  2026', NULL, NULL, '25000', NULL),
(497, 31, '2026-10-12', 'Oktober  2026', NULL, NULL, '25000', NULL),
(498, 31, '2026-11-12', 'November  2026', NULL, NULL, '25000', NULL),
(499, 31, '2026-12-12', 'Desember  2026', NULL, NULL, '25000', NULL),
(500, 31, '2027-01-12', 'Januari  2027', NULL, NULL, '25000', NULL),
(501, 31, '2027-02-12', 'Februari  2027', NULL, NULL, '25000', NULL),
(502, 31, '2027-03-12', 'Maret  2027', NULL, NULL, '25000', NULL),
(503, 31, '2027-04-12', 'April  2027', NULL, NULL, '25000', NULL),
(504, 31, '2027-05-12', 'Mei  2027', NULL, NULL, '25000', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jurusan` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nama`, `angkatan`, `jurusan`, `kelas`, `alamat`) VALUES
(31, '79878', 'ILHAN MANZIS', 1, 1, 20, 'Kademangaran');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT untuk tabel `angkatan`
--
ALTER TABLE `angkatan`
  MODIFY `id_angkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2036;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=505;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
