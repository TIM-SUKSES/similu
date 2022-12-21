-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 07:45 AM
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
(25, 'Yusup Supriatna', '12210740', '$2y$10$BnnBYU8dByCd2gVHJI9MQO/6t2t93hNO6Zh2.cxymrPt72MXyevYe', '2022-12-21', 'pemilih', 0),
(26, 'Fadly Faturrohman', '12211208', '$2y$10$DCx0yBaywHEo/KciAhc2ROd/54LwM/2LE7QguexTB/mmgD.5ni91.', '2022-12-21', 'pemilih', 0);

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
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
