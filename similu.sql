-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 02:42 AM
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
(1, 'CAPRES NO. 1', 'Genji Pranowo & Prauwu Subianto', 'logogram-color1.png', 'capres_1_(1)1.png'),
(2, 'CAPRES NO. 2', 'Anas Buswedan & Ridwan Kemal', 'logo-nasdem2.jpg', 'capres_2_(1).png');

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
(1, 'pemilih'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `suara`
--

CREATE TABLE `suara` (
  `id_suara` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_kandidat` varchar(128) NOT NULL,
  `tanggal_coblos` date NOT NULL DEFAULT current_timestamp(),
  `waktu_coblos` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_masyarakat` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_input` date NOT NULL DEFAULT current_timestamp(),
  `level` enum('pemilih','admin') NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_masyarakat`, `nama`, `nik`, `password`, `tanggal_input`, `level`, `status`) VALUES
(2, 'Lia Eden', '007', '$2y$10$kkAUZwTdHjWWfn.O/EqFUueuCeVvKqzz65Li5d7r7yE10mPjxuNVq', '2022-12-20', 'admin', 0),
(20, 'Alvin Austin', '12210247', '$2y$10$NRTv0TgTPkln3PRyV4c11ueKwzjtVA8X21lAZvEfSkt0yyGD3Kzr6', '2022-12-20', 'pemilih', 0),
(23, 'Nabil Muthi Maulani', '12210365', '$2y$10$kqOvttKwfnnCVUciksqV7OSpIhK3fFX1vOEmEFMjP0wTwlLTxWlyC', '2022-12-21', 'pemilih', 0),
(24, 'Raihan Ramadhan', '12211125', '$2y$10$CWg6XxrIRiNiSdhqZvVBpuq6AokVLXMFGNg6MrRtBDpOCOzlfJ7Um', '2022-12-21', 'pemilih', 0),
(25, 'Yusup Supriatna', '12210740', '$2y$10$nTNk6pu6iVY.wRHTAsuqwu.ShXWUxyuX7Ba.zlIcBM6XtZ5BfijwW', '2022-12-21', 'pemilih', 0),
(26, 'Fadly Faturrohman', '12211208', '$2y$10$DCx0yBaywHEo/KciAhc2ROd/54LwM/2LE7QguexTB/mmgD.5ni91.', '2022-12-21', 'pemilih', 0),
(27, 'Niken Laksamana Eka Sapurtra', '12210210', '$2y$10$Yo0jgGqOtuIBrEImDWxeKuHVtjzzdU.JCWkhIBmW9OOloZSd1UkKG', '2022-12-27', 'pemilih', 0),
(28, 'Silvia Setiawati', '12210227', '$2y$10$GtDBfAbMLeb5p1CQixs4YeWqh1dwBs8c/qfOw03fV/pVPgivryIbC', '2022-12-27', 'pemilih', 0),
(29, 'Muhammad Doohan Rizky Negara', '12210258', '$2y$10$.s2edhMJUZqhT2sek7L5qeDJNrc5yd/9SQ3z5JRPCY7kiWFWrjyye', '2022-12-27', 'pemilih', 0),
(30, 'Dina Prasasti', '12210261', '$2y$10$wLfrEWUFqx.MbpohqXj2MeGxLBbT3MVIDmy.oqdZaJXpkYg0px0F2', '2022-12-27', 'pemilih', 0),
(31, 'Seftiyani Pangaribuan', '12210313', '$2y$10$lkYaP9X4fhTzkrCv25LH9uMW6Q2abUrc/8U7Gy5ycT9fyHeW.nQMW', '2022-12-27', 'pemilih', 0),
(32, 'Fitri Ayu Aliyah', '12210347', '$2y$10$clZFJKtoTeBRZDhmySfV7eUhK9CeJCTT/Kg6EgjVolsp4OKsdL/MC', '2022-12-27', 'pemilih', 0),
(33, 'Hermalia Mayori', '12210371', '$2y$10$betgCsQjCfODxtZLEAS9/O4np5P69gXPafbto0faQI38PXUvTAHQC', '2022-12-27', 'pemilih', 0),
(34, 'Putri Nurul Asyifa', '12210374', '$2y$10$9n/3V8FljKvW2fPvU8JYrujgoDZe1fxPaelx84LzKngrN3I0TYD9e', '2022-12-27', 'pemilih', 0),
(35, 'Mahira Azqia Hidayat', '12210381', '$2y$10$dJGwpgG5si5JzFpFvR8CXex31RU6DWv1OV//4FW3S5dzJGLyfkD0.', '2022-12-27', 'pemilih', 0),
(36, 'Ikhsan Permana Hadiansyah', '12210480', '$2y$10$SgJaQaW/Nsx0GhHJHCKBx.wmBMWBlTQ2vzGowdSU8ltipAP64UOGK', '2022-12-27', 'pemilih', 0),
(37, 'Rahma Syaharani Santosa', '12210555', '$2y$10$qouE6FaW7n3zo3tyesTdl.crKSu6HOHKuKCYeD002bCUXeCgtko8y', '2022-12-27', 'pemilih', 0),
(38, 'Luthfy Luqmanul Hakim', '12210564', '$2y$10$M.Pj.ZtNInAMx6piyBJb9ut4w5cUUertfUem1XQLusIrVVcPvM6Xu', '2022-12-27', 'pemilih', 0),
(39, 'Andini Fitriani Sahrial', '12210586', '$2y$10$yuGYp.QZrO4/jw03RHZ9TeGnh2qQ6SVTGMwi0fQb4JN.tc6tssXmC', '2022-12-27', 'pemilih', 0),
(40, 'Hany Mustika', '12210596', '$2y$10$SLkjhlwQ9d5bw5rcPbLum.Da/9JAGLlJsIwcuNv6EK4iynyq6gCm2', '2022-12-27', 'pemilih', 0),
(41, 'Lisa Angel Purti Agung', '12210604', '$2y$10$PnfjKrR/wxtt.4hOlOuJfO7qEcw53.3a0PM0fdTyTWH6zd8cnw/Py', '2022-12-27', 'pemilih', 0),
(42, 'Marsa Aditia Puadi', '12210613', '$2y$10$iPxpFC9wXxCNupx8GoerDugrHWnE9EMX/krBrvx.L1bj.DXB2LydW', '2022-12-27', 'pemilih', 0),
(43, 'Devyta Wulandari', '12210668', '$2y$10$j/Z6viI3vwCiQ.5guS.Lpug6ySoOVFjeKiirVsbJU1Dj6BM47vEka', '2022-12-27', 'pemilih', 0),
(44, 'Irsyad Halimi', '12210696', '$2y$10$mdYeEJQ23iIZnPC4B.lXKetEh2WFkyvT/STL.lb/FCrzIG3PFwSWa', '2022-12-27', 'pemilih', 0),
(45, 'Rafi Azmi Razan', '12210754', '$2y$10$0RseTavo0InOMAfxkrGm2ekkj56EN5TaTnkQau8LUhza6pGYNrV.C', '2022-12-27', 'pemilih', 0),
(46, 'Aulia Putri Anggraeni', '12210762', '$2y$10$0uMa0aE6GAVPQKD2x2DFZOBXOeVoVCvSQLl/lpupytiowbadwxe7G', '2022-12-27', 'pemilih', 0),
(47, 'Sukaesih', '12210781', '$2y$10$kkc..XMUzDgrxNNIgFQLmO4KU5muZZtrPHUq0TvpDQOczsf/32Edi', '2022-12-27', 'pemilih', 0),
(48, 'Trina Ramadhian', '12210782', '$2y$10$Vo2I6hLNCFpm/9hxLQsXBuYToI6WBcPullokLevFXfScy526XC/n.', '2022-12-27', 'pemilih', 0),
(49, 'Fazri Al Tandrian', '12210786', '$2y$10$NATMURsoMRfRekEu09eRPeICnuQ2N75xZFI7GQQIANQ2W2ek2Yjhi', '2022-12-27', 'pemilih', 0),
(50, 'Euis Nurmalasari', '12210788', '$2y$10$idb4xCCe3E19Nw3WIj72WuF6gCuAmt5o2Cdx8O2QUa1x3OJX4K5ui', '2022-12-27', 'pemilih', 0),
(51, 'Muhammad Jaja Royana', '12210792', '$2y$10$ujKECS/oXrYdCmQZ2vRHrezg9Gr86MngCk4yFjb9d1zBXUynma/46', '2022-12-27', 'pemilih', 0),
(52, 'Bayu Prasetya Ramadhan', '12210794', '$2y$10$YtEjdA4mECsYfRMg4elRseVzbor08lEsNxbjsqt5v3B7gWZefOyXW', '2022-12-27', 'pemilih', 0),
(53, 'Nung Hayati', '12210847', '$2y$10$bh8y1YLaDjLP9b1I2z4Oi.3JTdB8XZXjyMRgY.t4UhuPp9LcdpEKC', '2022-12-27', 'pemilih', 0),
(54, 'Ina Abdul Nasir', '12210584', '$2y$10$YfhACvj7/2burTg5XOpEhuEhRdWli9bOmvkFOGk9mnszSp6R5hO8K', '2022-12-27', 'pemilih', 0),
(55, 'Naila Nadira Azkarini', '12210882', '$2y$10$vrVfsJGwc87zQ9bIlkHanuqSnGOW0rY9k3rqzdDi3..R6TUpmiL3i', '2022-12-27', 'pemilih', 0),
(56, 'Anre Saputra', '12210919', '$2y$10$6T.7E36w8Biz.JSr.dEzEugVHroDAoUrorWGRxPIgLeHGTsNVUUUS', '2022-12-27', 'pemilih', 0),
(57, 'Helen Asmara Wati', '12210912', '$2y$10$y/H2gaCzx6KXMGaoQqX9MObxzvLgOSB2zssgB6rH9EZ90zvrJXT8q', '2022-12-27', 'pemilih', 0),
(58, 'Salsa Sadiyyah', '12210931', '$2y$10$knk172YXNPQ77jZs/rbQkuQxCtMKJxIlr6oPVC27qiqKnAWC6bxd2', '2022-12-27', 'pemilih', 0),
(59, 'Moch Raffi Nugraha', '12211008', '$2y$10$TvTE6wvlQPFiXGvRWZ0hBe8Sn6n5osUgkzHqlVd6ysVrPovssKzbK', '2022-12-27', 'pemilih', 0),
(60, 'Firly Malcossiya Anwar', '12211034', '$2y$10$Alc/CW5ib12DwKuArTUMve8nhv/jyjJkXLK.Fsx64zT1.Bi5zefHq', '2022-12-27', 'pemilih', 0),
(61, 'Rio Adrian Putra', '12211120', '$2y$10$5j9HOSxhNIf98GTaDMJuEeGF8vMHRbOh9eDlxZuUOTOgQB/kh35YW', '2022-12-27', 'pemilih', 0),
(62, 'Mahligai Setyowati', '12211131', '$2y$10$hXaKqbx5RVEeRV60f9d3n.bK4BOxnBwAN7XKREoZiqGTVd4WlWPRm', '2022-12-27', 'pemilih', 0),
(63, 'Putri Purwanti Sari', '12211185', '$2y$10$HY/aNGY98j40XC2bz.fpYuqZCeotiRH5okTZyeiJ3NpSjglwi1b9m', '2022-12-27', 'pemilih', 0),
(64, 'Ilham Maulana Ramadhan', '12211279', '$2y$10$qP4KICgT/Amw0r5j7DhvIOT3rjMGzd7FEu0xXW0HAoVzJkxlYmrOO', '2022-12-27', 'pemilih', 0),
(65, 'Ramanda Fahreza', '12211338', '$2y$10$pHUR.xFsk9nG67K85nWmPul5caB8A6LiAS/42dsps/vbjPAvZc4AC', '2022-12-27', 'pemilih', 0),
(66, 'Rindi Yulia Issunarni', '12211391', '$2y$10$DxZvTqPAqM11PAzZ5ktQce6tm9YQs4AIkDvouQqiXL7vM0bPd9.WG', '2022-12-27', 'pemilih', 0),
(67, 'Geri Islami Gunawan', '12211446', '$2y$10$uDzjIWYTgMY7MpcKYsVageGaUhAb4nfLsjrwAgldrbKq1oMpXpawu', '2022-12-27', 'pemilih', 0),
(68, 'Indah Salamatussadiah', '12211487', '$2y$10$oy0OIZjmCevmc6JS1ylPH.AedvyV4Abu0JnVAzS7UIs/85O6gXsRS', '2022-12-27', 'pemilih', 0),
(69, 'Sesilia Alien Ave Vanesya', '12211488', '$2y$10$Aulv6s5L/BgzMLvDj6PlseT163K4ZKPvAuMgC.iz0J56ealmPZme.', '2022-12-27', 'pemilih', 0);

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
(1, 1, '<p>Visi PSI adalah Indonesia yang berkarakter kerakyatan, berkemanusiaan, berkeragaman, berkeadilan, berkemajuan </p>\r\n', '<p>1. Menggalang kekuatan nasional melalui sebuah kepemimpinan politik yang ideologis, terorganisir, dan terstruktur.</p>\r\n\r\n<p>2. Menggalang perjuangan politik dengan nilai solidaritas nasional melanjutkan agenda reformasi dan demokratisasi.</p>\r\n\r\n<p>3. Membangun kembali semangat republikanisme, merajut kembali rasa kebangsaan yang terserak, menanam kembali benih-benih idealisme, mendirikan kembali benteng-benteng kebhinnekaan dan membangun kembali pondasi gotong royong.</p>\r\n\r\n<p>4. Mendorong martabat Indonesia dalam pergaulan internasional, sesuai prinsip politik bebas aktif dengan melibatkan kondisi geopolitik internasional yang sedang berkembang.</p>\r\n\r\n<p>5. korupsi</p>\r\n'),
(2, 2, '<p>Visi Partai Nasdem adalah Indonesia yang merdeka sebagai negara bangsa, berdaulat secara ekonomi, dan bermartabat dalam budaya.</p>\r\n', '<p>1. Membangun Politik Demokratis Berkeadilan berarti menciptakan tata ulang demokrasi yang membuka partisipasi politik rakyat dengan cara membuka akses masyarakat secara keseluruhan. Mengembangkan model pendidikan kewarganegaraan untuk memperkuat karakter bangsa, serta melakukan perubahan menuju efisiensi sistem pemilihan umum. Memantapkan reformasi birokrasi untuk menciptakan sistem pelayanan masyarakat. Melakukan reformasi hukum dengan menjadikan konstitusi UUD 1945 (Undang-Undang Dasar tahun seribu sembilan ratus empat puluh lima) sebagai kontrak politik kebangsaan.</p>\r\n\r\n<p>2. Menciptakan Demokrasi Ekonomi melalui tatanan demokrasi ekonomi maka tercipta partisipasi dan akses masyarakat dalam kehidupan ekonomi negara, termasuk di dalamnya distribusi ekonomi yang adil dan merata yang akan berujung pada kesejahteraan seluruh rakyat Indonesia. Dalam mewujudkan cita-cita ini maka perlu untuk mendorong penciptaan lapangan kerja, sistem jaminan sosial nasional, penguatan industri nasional, serta mendorong kemandirian ekonomi di tingkat lokal.</p>\r\n\r\n<p>3. Menjadikan Budaya Gotong Royong sebagai karakter bangsa. Dalam mewujudkan ini maka sistem yang menjamin terlaksananya sistem pendidikan nasional yang terstruktur dan menjamin hak memperoleh pendidikan bagi seluruh rakyat Indonesia. Menyelenggarakan pendidikan kewarganegaraan yang menciptakan solidaritas dan soliditas nasional, sehingga seluruh rakyat Indonesia merasakan cita rasa sebagai sebuah bangsa dan menjadikan gotong royong sebagai amalan hidup keseharian. Kebudayaan ini akan menciptakan karakter bangsa yang bermartabat dan menopang kesiapan Negara dalam kehidupan global.</p>\r\n');

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
  ADD PRIMARY KEY (`id_suara`),
  ADD KEY `id_user` (`id_user`);

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
  MODIFY `id_suara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
