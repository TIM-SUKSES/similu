-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 03:07 PM
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
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `id_capres` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id_visimisi`, `id_capres`, `visi`, `misi`) VALUES
(2, 1, '<p>1. Visi ke-1</p>\r\n\r\n<p>2. Visi ke-2</p>\r\n\r\n<p>3. Visi ke-3</p>\r\n', '<p>1. Misi ke-1</p>\r\n\r\n<p>2. Misi ke-2</p>\r\n\r\n<p>3. Misi ke-3</p>\r\n'),
(3, 2, '<p>1. Visi ke-1</p>\r\n\r\n<p>2. Visi ke-2</p>\r\n\r\n<p>3. Visi ke-3</p>\r\n', '<p>1. Misi ke-1</p>\r\n\r\n<p>2. Misi ke-2</p>\r\n\r\n<p>3. Misi ke-3</p>\r\n'),
(4, 3, '<p>1. Visi ke-1</p>\r\n\r\n<p>2. Visi ke-2</p>\r\n\r\n<p>3. Visi ke-3</p>\r\n', '<p>1. Misi ke-1</p>\r\n\r\n<p>2. Misi ke-2</p>\r\n\r\n<p>3. Misi ke-3</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
