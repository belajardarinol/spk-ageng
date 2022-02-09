-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2017 at 01:15 PM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_spk_pm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `nama`, `phone`, `email`) VALUES
(1, 'admin', 'admin', 'Administrator', '+6281947472218', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `databidan`
--

CREATE TABLE IF NOT EXISTS `data_makanan` (
  `id_makanan` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_makanan` varchar(20) NOT NULL,
  `harga` int(15) NOT NULL,
  `ukuran` int(14) NOT NULL,
  `processor` int(15) NOT NULL,
  `kapasitas` int(15) NOT NULL,
  `memori` text NOT NULL,
  `hardisk` text NOT NULL
  PRIMARY KEY (`id_makanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `databidan`
--

INSERT INTO `databidan` (`idbidan`, `nik`, `nama`, `nohp`, `email`, `alamat`) VALUES
(1, '123', 'Bidan A', '081266030551', 'bidan1@gmail.com', 'Lubuk begalung');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
  `idhasil` int(11) NOT NULL AUTO_INCREMENT,
  `idkaryawan` int(11) NOT NULL,
  `ncf` double NOT NULL,
  `nsf` double NOT NULL,
  `nt` double NOT NULL,
  PRIMARY KEY (`idhasil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`idhasil`, `idkaryawan`, `ncf`, `nsf`, `nt`) VALUES
(8, 1, 2, 2, 2),
(9, 2, 2, 2.3333333333333, 2.1333333333333),
(10, 3, 2.4166666666667, 2.3333333333333, 2.3833333333333);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `idkaryawan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `k1` int(11) NOT NULL,
  `k2` int(11) NOT NULL,
  `k3` int(11) NOT NULL,
  `k4` int(11) NOT NULL,
  `k5` int(11) NOT NULL,
  `k6` int(11) NOT NULL,
  PRIMARY KEY (`idkaryawan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`idkaryawan`, `nama`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`) VALUES
(1, 'Bidan A', 8, 9, 7, 9, 8, 7),
(2, 'Bidan B', 7, 8, 8, 8, 8, 8),
(3, 'Bidan C', 9, 8, 9, 8, 9, 8);
