-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 11:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipjuh`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_jamaah`
--

CREATE TABLE `daftar_jamaah` (
  `id_daftar_jamaah` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `status_perkawinan` enum('Menikah','Belum Menikah','','') NOT NULL,
  `alamat` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten/kota` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `ahli_waris` text NOT NULL,
  `no_hp_ahli_waris` varchar(13) NOT NULL,
  `referensi` text NOT NULL,
  `jenis_pembayaran` enum('Cash','Pembiayaan','','') NOT NULL,
  `dp` int(11) NOT NULL,
  `foto_ktp` text NOT NULL,
  `foto_kk` text NOT NULL,
  `foto_buku_nikah` text NOT NULL,
  `foto_paspor` text NOT NULL,
  `foto_vaksin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `program` text NOT NULL,
  `fasilitas` text NOT NULL,
  `biaya` int(11) NOT NULL,
  `tanggal_keberangkatan` date NOT NULL,
  `jenis_paket` enum('Haji','Umroh','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(18) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `nama`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1'),
('staff', '1253208465b1efa876f982d8a9e73eef', 'staff', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_jamaah`
--
ALTER TABLE `daftar_jamaah`
  ADD PRIMARY KEY (`id_daftar_jamaah`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_jamaah`
--
ALTER TABLE `daftar_jamaah`
  MODIFY `id_daftar_jamaah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_jamaah`
--
ALTER TABLE `daftar_jamaah`
  ADD CONSTRAINT `daftar_jamaah_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
