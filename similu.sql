-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 07:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `similu`
--

-- --------------------------------------------------------

--
-- Table structure for table `capres`
--

CREATE TABLE `capres` (
  `id_calon` int(11) NOT NULL,
  `nama_kandidat` varchar(128) NOT NULL,
  `nama_calon` varchar(128) NOT NULL,
  `partai` varchar(128) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `capres`
--

INSERT INTO `capres` (`id_calon`, `nama_kandidat`, `nama_calon`, `partai`) VALUES
(1, 'Calon ke-1', 'Genji Pranowo', 'logo-pdp.png'),
(2, 'Calon ke-2', 'Prauwu Subianto', '1657710596_Logo_GERINDRA_10x10.png'),
(3, 'Calon ke-3', 'Anas Buswedan', 'logo-nasdem2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `nama_roles` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_roles`, `nama_roles`) VALUES
(1, 'admin'),
(2, 'masyarakat'),
(3, 'bawaslu');

-- --------------------------------------------------------

--
-- Table structure for table `suara`
--

CREATE TABLE `suara` (
  `id_pasangan` int(11) NOT NULL,
  `pasangan` varchar(128) NOT NULL,
  `jumlah_suara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_masyarakat` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_input` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `level` enum('admin','masyarakat','bawaslu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_masyarakat`, `nama`, `nik`, `tanggal_input`, `status`, `level`) VALUES
(1, 'Alvin Austin', '12210247', '2022-12-01', 0, 'bawaslu'),
(2, 'Fadly Faturrohman', '12211208', '2022-12-01', 0, 'masyarakat'),
(3, 'Raihan Ramadhan', '12211125', '2022-12-01', 0, 'masyarakat'),
(4, 'Yusup Supriatna', '12210740', '2022-12-01', 0, 'masyarakat'),
(5, 'Nabil Muthi Maulani', '12210365', '2022-12-01', 0, 'masyarakat'),
(6, 'bawaslu', '081294684656', '2022-12-05', 0, 'admin'),
(7, 'Lia Eden', '007', '2022-12-06', 0, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capres`
--
ALTER TABLE `capres`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indexes for table `suara`
--
ALTER TABLE `suara`
  ADD PRIMARY KEY (`id_pasangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_masyarakat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capres`
--
ALTER TABLE `capres`
  MODIFY `id_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suara`
--
ALTER TABLE `suara`
  MODIFY `id_pasangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
