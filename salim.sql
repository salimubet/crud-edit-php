-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2020 pada 15.50
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salim`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_097`
--

CREATE TABLE `tbl_097` (
  `No` int(11) NOT NULL,
  `Nama` char(40) NOT NULL,
  `Nim` varchar(12) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Jk` text NOT NULL,
  `Matkul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_097`
--

INSERT INTO `tbl_097` (`No`, `Nama`, `Nim`, `Alamat`, `Jk`, `Matkul`) VALUES
(85, 'salim ubaidillah', '170411100097', 'lamongan', 'Laki-laki', 'Alpro B'),
(90, 'ahmad', '1118', 'tuban', 'Laki-laki', 'Alpro B');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_097`
--
ALTER TABLE `tbl_097`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_097`
--
ALTER TABLE `tbl_097`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
