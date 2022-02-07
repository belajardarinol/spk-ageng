-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2022 at 07:03 AM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_ageng`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `nama`, `phone`, `email`) VALUES
(1, 'admin', 'admin', 'Administrator', '+6281947472218', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `data_makanan`
--

CREATE TABLE `data_makanan` (
  `id_makanan` int(11) NOT NULL,
  `jenis_makanan` varchar(20) NOT NULL,
  `harga` int(15) NOT NULL,
  `ukuran` varchar(14) NOT NULL,
  `processor` varchar(15) NOT NULL,
  `kapasitas` varchar(15) NOT NULL,
  `memori` varchar(15) NOT NULL,
  `hardisk` varchar(15) NOT NULL,
  `kebutuhan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_makanan`
--

INSERT INTO `data_makanan` (`id_makanan`, `jenis_makanan`, `harga`, `ukuran`, `processor`, `kapasitas`, `memori`, `hardisk`, `kebutuhan`) VALUES
(4, 'Nasi Aja', 7000000, '13', 'Intel Core i5', '4 GB', 'DDR 2', '>640 GB', 'Program');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id_makanan` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `natrium` float NOT NULL,
  `lemak` float NOT NULL,
  `protein` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id_makanan`, `name`, `natrium`, `lemak`, `protein`) VALUES
(1, 'Nasi', 1.3, 0.39, 3.9),
(3, 'Lupis Ketan', 0, 2.1483, 1.8414),
(4, 'Mie Ayam', 1116, 15.6, 24.8),
(5, 'Yangko', 0, 0.165, 0.45),
(6, 'Gatot', 44.8, 1.12, 2.08),
(7, 'Geblek', 52.95, 0.255, 0.06),
(8, 'Getuk Singkong', 0, 0.98, 0.35),
(9, 'Ongol-ongol sagu', 0, 1.62, 0.18),
(10, 'Tiwul', 7.5, 1.65, 3.6),
(11, 'Geplak', 0, 3.6, 0.35),
(12, 'Rempeyek Kacang', 0, 40.625, 21.875),
(13, 'Tahu Goreng', 5.6, 6.8, 7.76),
(14, 'Tempe Goreng', 7.7, 9.31, 8.575),
(15, 'Tempe Benguk', 0, 0.26, 2.04),
(16, 'Ayam Goreng', 510.4, 35.38, 108.46),
(17, 'Soto Jeroan', 1633.5, 19.35, 53.1),
(18, 'Soto Kudus', 0, 10.35, 11.7),
(19, 'Belut Goreng', 142, 38.8, 51.8),
(20, 'Gurame Asam Manis', 0, 30.3, 38.1),
(21, 'Mi Instan', 1310, 26, 10),
(22, 'Sardines', 290, 3, 11),
(23, 'Tahu Tempe', 29, 35.1, 34.2),
(24, 'Nasi Contoh', 2, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `idhasil` int(11) NOT NULL,
  `idproses` int(11) NOT NULL,
  `ncf` double NOT NULL,
  `nsf` double NOT NULL,
  `nt` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`idhasil`, `idproses`, `ncf`, `nsf`, `nt`) VALUES
(1, 1, 0, 0, 0),
(2, 3, 0, 0, 0),
(3, 4, 0, 0, 0),
(4, 5, 0, 0, 0),
(5, 6, 0, 0, 0),
(6, 7, 0, 0, 0),
(7, 8, 0, 0, 0),
(8, 9, 0, 0, 0),
(9, 10, 0, 0, 0),
(10, 11, 0, 0, 0),
(11, 12, 0, 0, 0),
(12, 13, 0, 0, 0),
(13, 14, 0, 0, 0),
(14, 15, 0, 0, 0),
(15, 16, 0, 0, 0),
(16, 17, 0, 0, 0),
(17, 18, 0, 0, 0),
(18, 19, 0, 0, 0),
(19, 20, 0, 0, 0),
(20, 21, 0, 0, 0),
(21, 22, 1, 0, 0.6),
(22, 23, 1, 0, 0.6),
(23, 24, 1.66666666667, 1.5, 1.6);

-- --------------------------------------------------------

--
-- Table structure for table `proses_spk`
--

CREATE TABLE `proses_spk` (
  `id_laptop` int(11) NOT NULL,
  `jenis_makanan` varchar(35) NOT NULL,
  `k1` int(11) NOT NULL,
  `k2` int(11) NOT NULL,
  `k3` int(11) NOT NULL,
  `k4` int(11) NOT NULL,
  `k5` int(11) NOT NULL,
  `k6` int(11) NOT NULL,
  `k7` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proses_spk`
--

INSERT INTO `proses_spk` (`id_laptop`, `jenis_makanan`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`) VALUES
(6, 'Rendang', 3, 4, 4, 4, 3, 5, 4),
(7, 'Nasi Contoh', 2, 3, 4, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `data_makanan`
--
ALTER TABLE `data_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`idhasil`);

--
-- Indexes for table `proses_spk`
--
ALTER TABLE `proses_spk`
  ADD PRIMARY KEY (`id_laptop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_makanan`
--
ALTER TABLE `data_makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id_makanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `idhasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `proses_spk`
--
ALTER TABLE `proses_spk`
  MODIFY `id_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
