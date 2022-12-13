-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 03:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
  `partai` varchar(128) NOT NULL DEFAULT 'default.png',
  `foto_presiden` varchar(128) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `capres`
--

INSERT INTO `capres` (`id_calon`, `nama_kandidat`, `nama_calon`, `partai`, `foto_presiden`) VALUES
(1, 'Calon ke-1', 'Genji Pranowo', 'logo-pdp.png', 'Ganjar_Pranowo,_Gubernur_Jateng_Periode_II.jpg'),
(2, 'Calon ke-2', 'Prauwu Subianto', '1657710596_Logo_GERINDRA_10x10.png', 'Menteri_Pertahanan_Prabowo_Subianto.jpg'),
(3, 'Calon ke-3', 'Anas Buswedan', 'logo-nasdem2.jpg', 'Gubernur_Anies.jpg');

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
  `id_suara` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_kandidat` varchar(128) NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp()
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

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id_visimisi`, `id_kandidat`, `visi`, `misi`) VALUES
(2, 1, '<p>1. Visi ke-1</p>\r\n\r\n<p>2. Visi ke-2</p>\r\n\r\n<p>3. Visi ke-3</p>\r\n', '<p>1. Misi ke-1</p>\r\n\r\n<p>2. Misi ke-2</p>\r\n\r\n<p>3. Misi ke-3</p>\r\n'),
(3, 2, '<p>1. Visi ke-1</p>\r\n\r\n<p>2. Visi ke-2</p>\r\n\r\n<p>3. Visi ke-3</p>\r\n', '<p>1. Misi ke-1</p>\r\n\r\n<p>2. Misi ke-2</p>\r\n\r\n<p>3. Misi ke-3</p>\r\n'),
(4, 2, '<p>1. Visi ke-1</p>\r\n\r\n<p>2. Visi ke-2</p>\r\n\r\n<p>3. Visi ke-4</p>\r\n', '<p>1. Misi ke-1</p>\r\n\r\n<p>2. Misi ke-2</p>\r\n\r\n<p>3. Misi ke-3</p>\r\n');

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
  ADD PRIMARY KEY (`id_suara`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_masyarakat`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

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
  MODIFY `id_suara` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
