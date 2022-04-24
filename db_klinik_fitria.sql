-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 12:57 PM
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
-- Database: `db_klinik_fitria`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `text`, `href`) VALUES
('lorem1', 'Lorem 1', '#'),
('lorem2', 'Lorem 2', 'lorem2.html'),
('lorem1', 'Lorem 1', '#'),
('lorem2', 'Lorem 2', 'lorem2.html'),
('lorem2', 'Lorem 2', 'lorem2.html'),
('lorem3', 'Lorem 3', 'lorem3.html'),
('lorem2', 'Lorem 2', 'lorem2.html'),
('lorem1', 'Lorem 1', '#'),
('lorem1', 'Lorem 1', '#'),
('lorem1', 'Lorem 1', '#'),
('lorem1', 'Lorem 1', '#'),
('lorem2', 'Lorem 2', 'lorem2.html'),
('lorem1', 'Lorem 1', '#'),
('lorem1', 'Lorem 1', '#'),
('lorem2', 'Lorem 2', 'lorem2.html'),
('lorem2', 'Lorem 2', 'lorem2.html'),
('lorem2', 'Lorem 2', 'lorem2.html'),
('lorem2', 'Lorem 2', 'lorem2.html'),
('lorem2', 'Lorem 2', 'lorem2.html'),
('lorem2', 'Lorem 2', 'lorem2.html'),
('lorem2', 'Lorem 2', 'lorem2.html');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `idobat` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`idobat`, `nama`, `harga`) VALUES
(1, 'Parachetamol', '1000'),
(2, 'Amoxylin', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `idpasien` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgllahir` date NOT NULL,
  `notelp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`idpasien`, `nama`, `alamat`, `tgllahir`, `notelp`) VALUES
(1, 'Dono', 'Sukoharjo', '2012-04-18', '1987654321'),
(8, 'Aul', 'Surakarta', '2022-04-21', '1201212919');

-- --------------------------------------------------------

--
-- Table structure for table `rawat`
--

CREATE TABLE `rawat` (
  `idrawat` int(11) NOT NULL,
  `tglrawat` date NOT NULL,
  `totaltindakan` int(255) NOT NULL,
  `totalobat` int(255) NOT NULL,
  `totalharga` int(255) NOT NULL,
  `uangmuka` int(255) NOT NULL,
  `kurang` int(255) NOT NULL,
  `idpasien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rawat`
--

INSERT INTO `rawat` (`idrawat`, `tglrawat`, `totaltindakan`, `totalobat`, `totalharga`, `uangmuka`, `kurang`, `idpasien`) VALUES
(6, '2022-04-29', 74000, 3000, 73000, 50000, 23000, 8),
(7, '2022-04-18', 0, 0, 0, 0, 0, 1),
(8, '2022-04-06', 0, 0, 0, 0, 0, 1),
(9, '2022-04-12', 0, 0, 0, 1000000, 0, 1),
(10, '2022-03-30', 0, 0, 0, 1212, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `rawatobat`
--

CREATE TABLE `rawatobat` (
  `idrawatobat` int(11) NOT NULL,
  `idrawat` int(11) DEFAULT NULL,
  `idobat` int(11) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `totalrawatobat` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rawatobat`
--

INSERT INTO `rawatobat` (`idrawatobat`, `idrawat`, `idobat`, `jumlah`, `totalrawatobat`) VALUES
(5, 6, 1, 3, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `rawattindakan`
--

CREATE TABLE `rawattindakan` (
  `idrawattindakan` int(11) NOT NULL,
  `idrawat` int(11) DEFAULT NULL,
  `idtindakan` int(11) NOT NULL,
  `namadokter` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rawattindakan`
--

INSERT INTO `rawattindakan` (`idrawattindakan`, `idrawat`, `idtindakan`, `namadokter`, `jumlah`, `harga`) VALUES
(14, 6, 1, 'Dr. Siti Aminah, Sp. M', 5, 10000),
(17, 6, 1, 'Dr. Siti Aminah, Sp. M', 20, 40000),
(18, 8, 1, 'Dr. Siti Aminah, Sp. M', 20, 40000),
(19, 6, 1, 'Dr. Siti Aminah, Sp. M', 9, 18000),
(20, 6, 1, 'Dr. Siti Aminah, Sp. M', 2, 4000),
(21, 6, 1, 'Dr. Siti Aminah, Sp. M', 1, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `idtindakan` int(11) NOT NULL,
  `namatindakan` varchar(255) NOT NULL,
  `biaya` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`idtindakan`, `namatindakan`, `biaya`) VALUES
(1, 'Operasi', '2000'),
(2, 'Bedah Lemak', '1000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`idobat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indexes for table `rawat`
--
ALTER TABLE `rawat`
  ADD PRIMARY KEY (`idrawat`),
  ADD KEY `rawat_ibfk_1` (`idpasien`);

--
-- Indexes for table `rawatobat`
--
ALTER TABLE `rawatobat`
  ADD PRIMARY KEY (`idrawatobat`),
  ADD KEY `idobat` (`idobat`);

--
-- Indexes for table `rawattindakan`
--
ALTER TABLE `rawattindakan`
  ADD PRIMARY KEY (`idrawattindakan`),
  ADD KEY `idtindakan` (`idtindakan`),
  ADD KEY `idrawat` (`idrawat`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`idtindakan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `idobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `idpasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `rawat`
--
ALTER TABLE `rawat`
  MODIFY `idrawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rawatobat`
--
ALTER TABLE `rawatobat`
  MODIFY `idrawatobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rawattindakan`
--
ALTER TABLE `rawattindakan`
  MODIFY `idrawattindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `idtindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rawat`
--
ALTER TABLE `rawat`
  ADD CONSTRAINT `rawat_ibfk_1` FOREIGN KEY (`idpasien`) REFERENCES `pasien` (`idpasien`);

--
-- Constraints for table `rawatobat`
--
ALTER TABLE `rawatobat`
  ADD CONSTRAINT `rawatobat_ibfk_1` FOREIGN KEY (`idobat`) REFERENCES `obat` (`idobat`);

--
-- Constraints for table `rawattindakan`
--
ALTER TABLE `rawattindakan`
  ADD CONSTRAINT `rawattindakan_ibfk_1` FOREIGN KEY (`idtindakan`) REFERENCES `tindakan` (`idtindakan`),
  ADD CONSTRAINT `rawattindakan_ibfk_2` FOREIGN KEY (`idrawat`) REFERENCES `rawat` (`idrawat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
