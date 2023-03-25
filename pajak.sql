-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Mar 2023 pada 15.26
-- Versi server: 5.7.41
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pajak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `spt`
--

CREATE TABLE `spt` (
  `id_spt` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_spt` enum('SPTFILE','SPT1770S','SPT1770SS') NOT NULL,
  `id_spt_lanjutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `spt_file`
--

CREATE TABLE `spt_file` (
  `id_spt_usaha` int(11) NOT NULL,
  `tahun_pajak` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `spt_ss1770s`
--

CREATE TABLE `spt_ss1770s` (
  `id_spt_ss1770s` int(11) NOT NULL,
  `tahun_pajak` varchar(4) NOT NULL,
  `data_formulir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `spt_ss1770ss`
--

CREATE TABLE `spt_ss1770ss` (
  `id_spt_ss1770ss` int(11) NOT NULL,
  `tahun_pajak` varchar(4) NOT NULL,
  `data_formulir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `npwp` varchar(24) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `kelas` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` enum('admin','member') NOT NULL DEFAULT 'member',
  `status` enum('0','1','2') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `npwp`, `nik`, `nama`, `email`, `kelas`, `password`, `level`, `status`) VALUES
(1, '123', '12345', 'sahril', '', 'Akuntansi-XI-A', '123', 'member', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `spt`
--
ALTER TABLE `spt`
  ADD PRIMARY KEY (`id_spt`);

--
-- Indeks untuk tabel `spt_file`
--
ALTER TABLE `spt_file`
  ADD PRIMARY KEY (`id_spt_usaha`);

--
-- Indeks untuk tabel `spt_ss1770s`
--
ALTER TABLE `spt_ss1770s`
  ADD PRIMARY KEY (`id_spt_ss1770s`);

--
-- Indeks untuk tabel `spt_ss1770ss`
--
ALTER TABLE `spt_ss1770ss`
  ADD PRIMARY KEY (`id_spt_ss1770ss`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npwp` (`npwp`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `spt`
--
ALTER TABLE `spt`
  MODIFY `id_spt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `spt_file`
--
ALTER TABLE `spt_file`
  MODIFY `id_spt_usaha` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `spt_ss1770s`
--
ALTER TABLE `spt_ss1770s`
  MODIFY `id_spt_ss1770s` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `spt_ss1770ss`
--
ALTER TABLE `spt_ss1770ss`
  MODIFY `id_spt_ss1770ss` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
