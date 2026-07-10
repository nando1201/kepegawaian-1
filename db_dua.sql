-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2026 at 03:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dua`
--

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `kodejabatan` varchar(5) NOT NULL,
  `namajabatan` text DEFAULT NULL,
  `level` varchar(5) DEFAULT NULL,
  `gaji` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`kodejabatan`, `namajabatan`, `level`, `gaji`) VALUES
('J001', 'CEO', '0', 25000000),
('J011', 'Manager', '3', 10000000),
('J023', 'staff', '3', 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `jabatanpegawai`
--

CREATE TABLE `jabatanpegawai` (
  `idjp` int(15) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `kodejabatan` varchar(5) NOT NULL,
  `status` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `periode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatanpegawai`
--

INSERT INTO `jabatanpegawai` (`idjp`, `nip`, `kodejabatan`, `status`, `periode`) VALUES
(1, '10125901', 'J001', '1', '2025-2030'),
(2, '10125904', 'J011', '1', '2025-2029'),
(5, '10125991', 'J020', '0', '2025-2031');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(15) NOT NULL COMMENT 'Nomor Induk Pegawai',
  `namalengkap` varchar(60) DEFAULT NULL,
  `jeniskelamin` char(3) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabel pegawai';

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `namalengkap`, `jeniskelamin`, `tanggallahir`, `alamat`, `nohp`, `email`) VALUES
('10101245', 'radit', 'L', '2004-12-12', 'sasa', '0845123456789', 'radit@gmail.com'),
('10125904', 'Fernando Adriyan Salim s', 'L', '2007-10-12', 'Majalengkaa', '082320418668', 'fernandoadriyansalim@gmail.com'),
('10125907', 'Kokom', 'P', '2000-01-08', 'Bandung', '081314143640', 'kokom@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'nando', 'nando123'),
(5, 'udin', 'udin'),
(6, 'din', 'din');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kodejabatan`);

--
-- Indexes for table `jabatanpegawai`
--
ALTER TABLE `jabatanpegawai`
  ADD PRIMARY KEY (`idjp`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jabatanpegawai`
--
ALTER TABLE `jabatanpegawai`
  MODIFY `idjp` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10125907;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
