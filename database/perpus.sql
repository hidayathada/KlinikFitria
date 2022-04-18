-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 08:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_koleksi`
--

CREATE TABLE `tbl_jenis_koleksi` (
  `id_jenis_koleksi` int(11) NOT NULL,
  `jenis` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenis_koleksi`
--

INSERT INTO `tbl_jenis_koleksi` (`id_jenis_koleksi`, `jenis`) VALUES
(1, 'buku'),
(2, 'majalah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_koleksi`
--

CREATE TABLE `tbl_koleksi` (
  `id_koleksi` int(11) NOT NULL,
  `judul_koleksi` varchar(45) NOT NULL,
  `penulis` varchar(45) NOT NULL,
  `pencipta` varchar(45) NOT NULL,
  `penerbit` varchar(45) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `jenis_koleksi` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_koleksi`
--

INSERT INTO `tbl_koleksi` (`id_koleksi`, `judul_koleksi`, `penulis`, `pencipta`, `penerbit`, `tahun_terbit`, `jenis_koleksi`, `created_at`, `update_at`) VALUES
(1, 'Buku Puisi', 'WS Rendra', 'Indonesia', 'Tiga Serangkai', '2021-03-03', 'buku', '2022-04-04 16:46:09', '0000-00-00 00:00:00'),
(4, 'Buku Anak', 'WS Rendra', 'hada', 'Empat Serangkai', '2021-02-08', 'majalah', '2022-04-09 04:34:54', NULL),
(5, 'Majalah Bobo', 'Bobocu', 'Boboho', 'Tiga Serangkai', '2021-03-08', 'majalah', '2022-04-09 04:37:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(45) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `username`, `password`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'Solo, Jawa Tengah', '2022-04-04 17:10:51', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jenis_koleksi`
--
ALTER TABLE `tbl_jenis_koleksi`
  ADD PRIMARY KEY (`id_jenis_koleksi`);

--
-- Indexes for table `tbl_koleksi`
--
ALTER TABLE `tbl_koleksi`
  ADD PRIMARY KEY (`id_koleksi`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jenis_koleksi`
--
ALTER TABLE `tbl_jenis_koleksi`
  MODIFY `id_jenis_koleksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_koleksi`
--
ALTER TABLE `tbl_koleksi`
  MODIFY `id_koleksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
