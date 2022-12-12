-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8111
-- Generation Time: Dec 12, 2022 at 02:13 AM
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
-- Database: `bento`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayarr`
--

CREATE TABLE `bayarr` (
  `id` int(100) NOT NULL,
  `meja` varchar(100) NOT NULL,
  `metode` varchar(100) NOT NULL,
  `tujuan` int(100) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id_detail` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id_detail`, `menu`, `jumlah`, `harga`, `total`) VALUES
(4, 'Coffee Latte', 1, 15000, '25,000'),
(5, 'Coffee Americano', 1, 10000, '25,000');

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `id` int(11) NOT NULL,
  `nomor_meja` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`id`, `nomor_meja`) VALUES
(1, 'BC-01'),
(2, 'BC-02');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(100) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesanan` int(100) NOT NULL,
  `meja` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `catatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesanan`, `meja`, `tanggal`, `catatan`) VALUES
(3, 'BC-01', '2022-12-12', 'Fasttt');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `meja` varchar(100) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `catatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tambahmenu`
--

CREATE TABLE `tambahmenu` (
  `id_menu` int(25) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tambahmenu`
--

INSERT INTO `tambahmenu` (`id_menu`, `gambar`, `nama`, `harga`) VALUES
(111, '637a99a87d444.png', 'Coffee Latte', 15000),
(112, '637a93263c680.png', 'Coffee Mocha', 12000),
(113, '637a933dc7f63.png', 'Coffee Affogato', 8000),
(114, '637a936e0732a.png', 'Coffee Americano', 10000),
(115, '637a939f22152.png', 'Coffee Cappucino', 12000),
(116, '637a93b67d304.png', 'Coffee Espreso', 8000),
(117, '637ae17956ef8.png', 'Coffee Cartado', 15000),
(118, '637ae1a3eae7d.png', 'Coffee Flat White', 11000),
(119, '637ae2a5a7cf9.png', 'Coffee Doppio', 9000),
(1110, '637ae66d89ce0.png', 'Coffee Galao', 13000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$H7WpnC/U5EndcFYQHr1bDOSs7lBX1fmRomJxV43lX830d2DDG2B5i'),
(2, 'adminn', '$2y$10$BEN8SCs76hSlKooUV9p1Gela08YBpl2.c.p1NmHeUPvQ2gmMS1O4G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayarr`
--
ALTER TABLE `bayarr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tambahmenu`
--
ALTER TABLE `tambahmenu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayarr`
--
ALTER TABLE `bayarr`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
