-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 07:33 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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

--
-- Dumping data for table `daftar_jamaah`
--

INSERT INTO `daftar_jamaah` (`id_daftar_jamaah`, `id_paket`, `nama_lengkap`, `no_ktp`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `status_perkawinan`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten/kota`, `no_hp`, `email`, `pekerjaan`, `ahli_waris`, `no_hp_ahli_waris`, `referensi`, `jenis_pembayaran`, `dp`, `foto_ktp`, `foto_kk`, `foto_buku_nikah`, `foto_paspor`, `foto_vaksin`) VALUES
(4, 6, 'Muhammad Fadli', '11551107643', 'Pekanbaru', '1994-08-12', 'Laki-laki', 'Belum Menikah', 'Pekanbaru', 'Tangkerang Timur', 'Tenayan Raya', 'Pekanbaru', '081234322264', 'fadli@gmail.com', 'Mahasiswa', 'Rio', '081277324633', '1252', 'Pembiayaan', 5000000, 'dakota_johnson-wallpaper-1366x768.jpg', 'Capture.PNG', '791720ee981dc26e3402fcfa3d256c45.jpg', '1qhSHES-rinnegan-wallpaper.png', 'P9tWkdR-rinnegan-wallpaper.jpg'),
(9, 4, 'Rio Rinaldi', '11551105411', 'Pekanbaru', '1997-09-12', 'Laki-laki', 'Menikah', 'Pekanbaru', 'Tangkerang Timur', 'Tenayan Raya', 'Pekanbaru', '081232322255', 'fadli@gmail.com', 'Mahasiswa', 'rio', '087612223212', '3566', 'Cash', 10000000, '16.PNG', 'dakota_johnson-wallpaper-1366x7685.jpg', 'Capture6.PNG', '791720ee981dc26e3402fcfa3d256c456.jpg', '1qhSHES-rinnegan-wallpaper6.png'),
(10, 5, 'Setiono', '11551109823', 'Batam', '1998-03-12', 'Laki-laki', 'Menikah', 'Pekanbaru', 'Tangkerang Timur', 'Tenayan Raya', 'Pekanbaru', '081222771232', 'fadli@gmail.com', 'Mahasiswa', 'rere', '087712223623', '6437', 'Cash', 5000000, 'dakota_johnson-wallpaper-1366x7686.jpg', '17.PNG', 'Capture7.PNG', '791720ee981dc26e3402fcfa3d256c457.jpg', '1qhSHES-rinnegan-wallpaper7.png'),
(11, 7, 'faiz', '1288122', 'Pekanbaru', '1212-12-12', 'Perempuan', 'Belum Menikah', 'Pekanbaru', 'Tangkerang Timur', 'Tenayan Raya', 'Pekanbaru', '01821028102', 'fadli@gmail.com', 'Mahasiswa', 'rio', '081212121', '533', 'Cash', 121212121, 'dakota_johnson-wallpaper-1366x7687.jpg', '18.PNG', 'Capture8.PNG', '791720ee981dc26e3402fcfa3d256c458.jpg', '1qhSHES-rinnegan-wallpaper8.png'),
(14, 8, 'aji', '115511232323', 'Pekanbaru', '1221-12-12', 'Laki-laki', 'Belum Menikah', 'Pekanbaru', 'Tangkerang Timur', 'Tenayan Raya', 'Pekanbaru', '081234343234', 'fadli@gmail.com', 'Mahasiswa', 'rio', '081232327273', '1233', 'Cash', 5000000, '111.PNG', 'dakota_johnson-wallpaper-1366x76810.jpg', 'Capture11.PNG', '791720ee981dc26e3402fcfa3d256c4511.jpg', '1qhSHES-rinnegan-wallpaper11.png');

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

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `program`, `fasilitas`, `biaya`, `tanggal_keberangkatan`, `jenis_paket`) VALUES
(4, '11 Hari', 'Hotel Bintang 4/5', 28000000, '2020-01-01', 'Haji'),
(5, '12 Hari', 'Hotel Bintang 4/5', 28000000, '2020-02-01', 'Haji'),
(6, '13 Hari', 'Hotel Bintang 4/5', 34000000, '2020-03-01', 'Haji'),
(7, '14 Hari', 'Hotel Bintang 4/5', 38000000, '2020-04-01', 'Haji'),
(8, '10 Hari', 'Hotel Bintang 4/5', 10000000, '2020-02-02', 'Umroh'),
(9, '11 Hari', 'Hotel Bintang 4/5', 12000000, '2020-03-01', 'Umroh'),
(10, '12 Hari', 'Hotel Bintang 4/5', 16000000, '2020-01-01', 'Umroh'),
(11, '14 Hari', 'Hotel Bintang 4/5', 18000000, '2019-12-01', 'Umroh');

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
  MODIFY `id_daftar_jamaah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
