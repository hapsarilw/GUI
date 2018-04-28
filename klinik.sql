-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2018 at 08:55 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_konsultasi`
--

CREATE TABLE `hasil_konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `waktu_perubahan` datetime NOT NULL,
  `isi_catatan` varchar(5000) DEFAULT NULL,
  `id_karyawan` int(11) UNSIGNED NOT NULL,
  `id_pasien` int(11) UNSIGNED NOT NULL,
  `idStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_praktek`
--

CREATE TABLE `jadwal_praktek` (
  `id_jadwalPraktek` int(11) UNSIGNED NOT NULL,
  `jam_mulai` datetime NOT NULL,
  `jam_selesai` datetime NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `id_karyawan` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `id_spesialisasi` int(10) UNSIGNED NOT NULL,
  `jabatan` enum('Pimpinan','Dokter') DEFAULT NULL,
  `foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `namastatus`
--

CREATE TABLE `namastatus` (
  `idStatus` int(11) NOT NULL,
  `namaStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `namastatus`
--

INSERT INTO `namastatus` (`idStatus`, `namaStatus`) VALUES
(1, 'baru'),
(2, 'dirubah'),
(3, 'dihapus');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) UNSIGNED NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `noTelp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertemuan_dokterpasien`
--

CREATE TABLE `pertemuan_dokterpasien` (
  `id_pertemuan` int(11) UNSIGNED NOT NULL,
  `id_konsultasi` int(11) UNSIGNED NOT NULL,
  `id_karyawan` int(11) UNSIGNED NOT NULL,
  `id_pasien` int(11) UNSIGNED NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `jam_pertemuan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spesialisasi`
--

CREATE TABLE `spesialisasi` (
  `id_spesialisasi` int(11) UNSIGNED NOT NULL,
  `jenis_spesialisasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesialisasi`
--

INSERT INTO `spesialisasi` (`id_spesialisasi`, `jenis_spesialisasi`) VALUES
(1, 'umum'),
(2, 'umum'),
(3, 'umum'),
(4, 'Umum'),
(5, 'Dokter Gigi'),
(6, 'Anak'),
(7, 'Anak'),
(8, 'Jelangkung'),
(9, 'Jelangkung');

-- --------------------------------------------------------

--
-- Table structure for table `statuscatatan`
--

CREATE TABLE `statuscatatan` (
  `idSc` int(11) NOT NULL,
  `id_K` int(11) DEFAULT NULL,
  `id_S` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_konsultasi`
--
ALTER TABLE `hasil_konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `jadwal_praktek`
--
ALTER TABLE `jadwal_praktek`
  ADD PRIMARY KEY (`id_jadwalPraktek`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_spesialisasi` (`id_spesialisasi`);

--
-- Indexes for table `namastatus`
--
ALTER TABLE `namastatus`
  ADD PRIMARY KEY (`idStatus`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pertemuan_dokterpasien`
--
ALTER TABLE `pertemuan_dokterpasien`
  ADD PRIMARY KEY (`id_pertemuan`),
  ADD KEY `id_konsultasi` (`id_konsultasi`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `spesialisasi`
--
ALTER TABLE `spesialisasi`
  ADD PRIMARY KEY (`id_spesialisasi`);

--
-- Indexes for table `statuscatatan`
--
ALTER TABLE `statuscatatan`
  ADD PRIMARY KEY (`idSc`),
  ADD KEY `idx_idKonsultasi` (`id_K`),
  ADD KEY `idx_idStatus` (`id_S`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_praktek`
--
ALTER TABLE `jadwal_praktek`
  MODIFY `id_jadwalPraktek` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertemuan_dokterpasien`
--
ALTER TABLE `pertemuan_dokterpasien`
  MODIFY `id_pertemuan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spesialisasi`
--
ALTER TABLE `spesialisasi`
  MODIFY `id_spesialisasi` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `statuscatatan`
--
ALTER TABLE `statuscatatan`
  MODIFY `idSc` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `statuscatatan`
--
ALTER TABLE `statuscatatan`
  ADD CONSTRAINT `statuscatatan_ibfk_1` FOREIGN KEY (`id_K`) REFERENCES `hasil_konsultasi` (`id_konsultasi`),
  ADD CONSTRAINT `statuscatatan_ibfk_2` FOREIGN KEY (`id_S`) REFERENCES `namastatus` (`idStatus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
