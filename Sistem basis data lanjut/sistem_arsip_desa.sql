-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2020 pada 09.59
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem arsip desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID` int(2) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(75) NOT NULL,
  `Nama` varchar(15) NOT NULL,
  `Kode_Pegawai` varchar(25) NOT NULL,
  `Level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `Password`, `Nama`, `Kode_Pegawai`, `Level`) VALUES
(11, 'GELLEN', 'GELLEN123', 'GELLEN', '27', 2),
(12, 'TAUFIK', '12345678', 'TAUFIK', '93', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_keluar`
--

CREATE TABLE `arsip_keluar` (
  `Id` int(6) NOT NULL,
  `Kode` varchar(50) NOT NULL,
  `No_Agenda` varchar(7) NOT NULL,
  `Index_Berkas` varchar(100) NOT NULL,
  `Isi_Rangkas` mediumtext NOT NULL,
  `Tujuan` varchar(250) NOT NULL,
  `No_Arsip` varchar(100) NOT NULL,
  `Tgl_Arsip` date NOT NULL,
  `Tgl_Dicatat` date NOT NULL,
  `Keterangan` varchar(200) NOT NULL,
  `File` varchar(200) NOT NULL,
  `Pengolah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `arsip_keluar`
--

INSERT INTO `arsip_keluar` (`Id`, `Kode`, `No_Agenda`, `Index_Berkas`, `Isi_Rangkas`, `Tujuan`, `No_Arsip`, `Tgl_Arsip`, `Tgl_Dicatat`, `Keterangan`, `File`, `Pengolah`) VALUES
(13, '1234', '0909', 'profil desa darwangi', 'profil desa darwangi', 'kuwu desa teja', '010101010', '2020-03-10', '2020-03-11', '', 'profil desa darmawangi', 9999);

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_masuk`
--

CREATE TABLE `arsip_masuk` (
  `Id` int(6) NOT NULL,
  `Kode` varchar(50) NOT NULL,
  `No_Agenda` varchar(7) NOT NULL,
  `Index_Berkas` varchar(100) NOT NULL,
  `Isi_Ringkas` mediumtext NOT NULL,
  `Dari` varchar(250) NOT NULL,
  `No_Arsip` varchar(100) NOT NULL,
  `Tgl_Arsip` date NOT NULL,
  `Tgl_Diterima` date NOT NULL,
  `Keterangan` varchar(200) NOT NULL,
  `File` varchar(200) NOT NULL,
  `Pengolah` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `arsip_masuk`
--

INSERT INTO `arsip_masuk` (`Id`, `Kode`, `No_Agenda`, `Index_Berkas`, `Isi_Ringkas`, `Dari`, `No_Arsip`, `Tgl_Arsip`, `Tgl_Diterima`, `Keterangan`, `File`, `Pengolah`) VALUES
(12, '1234', '0908', 'dokumen profil desa', 'berisi profil desa teja', 'kuwu teja', '08967878', '2020-03-24', '2020-03-25', '', 'dokumen profil desa', 8888);

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi`
--

CREATE TABLE `disposisi` (
  `Id` int(6) NOT NULL,
  `Id_Arsip` int(6) NOT NULL,
  `Kpd_Yth` varchar(250) NOT NULL,
  `Isi_Disposisi` varchar(250) NOT NULL,
  `Sifat` varchar(10) NOT NULL,
  `Batas_Waktu` date NOT NULL,
  `Catatan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `disposisi`
--

INSERT INTO `disposisi` (`Id`, `Id_Arsip`, `Kpd_Yth`, `Isi_Disposisi`, `Sifat`, `Batas_Waktu`, `Catatan`) VALUES
(11, 20, 'Kepala desa sindang', 'kerja sama pembangunan jembatan', 'tertutup', '2020-03-07', 'mohon segera laksanakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `Id` int(4) NOT NULL,
  `Kode` varchar(50) NOT NULL,
  `Nama` varchar(250) NOT NULL,
  `Uraian` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `klasifikasi`
--

INSERT INTO `klasifikasi` (`Id`, `Kode`, `Nama`, `Uraian`) VALUES
(1, '123', 'File pegawai', 'berisi dokumen dokumen pegawai ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `arsip_keluar`
--
ALTER TABLE `arsip_keluar`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `arsip_masuk`
--
ALTER TABLE `arsip_masuk`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arsip_keluar`
--
ALTER TABLE `arsip_keluar`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `arsip_masuk`
--
ALTER TABLE `arsip_masuk`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
