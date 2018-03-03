-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 03:41 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_suratukom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_disposisi`
--

CREATE TABLE IF NOT EXISTS `tbl_disposisi` (
  `no_disposisi` varchar(50) NOT NULL,
  `no_agenda_masuk` varchar(15) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status_surat` varchar(30) NOT NULL,
  `tanggapan` varchar(30) NOT NULL,
  PRIMARY KEY (`no_disposisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_disposisi`
--

INSERT INTO `tbl_disposisi` (`no_disposisi`, `no_agenda_masuk`, `kepada`, `keterangan`, `status_surat`, `tanggapan`) VALUES
('7', '3', 'kepsek', 'gdfsgfd', 'gfdgdf', 'tesing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE IF NOT EXISTS `tbl_petugas` (
  `id` varchar(15) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `nama_depan` varchar(30) NOT NULL,
  `hak` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id`, `nama_belakang`, `nama_depan`, `hak`, `password`) VALUES
('12b', 'sa', 'yunus s', 'user', 'user1'),
('14c', 'wi', 'joko', 'user', 'user'),
('15', 'huhu', 'haha', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat_keluar`
--

CREATE TABLE IF NOT EXISTS `tbl_surat_keluar` (
  `id` varchar(15) NOT NULL,
  `no_agenda_keluar` varchar(15) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  PRIMARY KEY (`no_agenda_keluar`),
  KEY `id_petugas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_surat_keluar`
--

INSERT INTO `tbl_surat_keluar` (`id`, `no_agenda_keluar`, `jenis_surat`, `tgl_kirim`, `no_surat`, `pengirim`, `perihal`) VALUES
('12b', '1', 'Surat Keterangan', '2018-02-01', '13', 'yun', 'yun'),
('12b', '2', 'Surat Keterangan', '2018-02-01', '14', 'tes', 'tes'),
('12b', '45', 'Surat Keterangan', '2018-02-09', '111', 'PP. LIRBOYO', 'fsfs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat_masuk`
--

CREATE TABLE IF NOT EXISTS `tbl_surat_masuk` (
  `no_agenda_masuk` varchar(15) NOT NULL,
  `id` varchar(15) NOT NULL,
  `jenis_surat` varchar(100) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `tgl_terima` date NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  PRIMARY KEY (`no_agenda_masuk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_surat_masuk`
--

INSERT INTO `tbl_surat_masuk` (`no_agenda_masuk`, `id`, `jenis_surat`, `tgl_kirim`, `tgl_terima`, `no_surat`, `pengirim`, `perihal`) VALUES
('', '12b', 'Surat Keterangan', '2018-02-08', '0000-00-00', '14', 'rew', 'trewt'),
('1p', '12b', 'Surat Keterangan', '2018-02-02', '2018-02-04', '05/MANTAB/PPAI/VIII/15', 'PP. LIRBOYO', 'tes'),
('3', '15', 'Surat Keterangan', '0000-00-00', '0000-00-00', '78/MF/P2L/VIII/2015', 'tes', 'tes'),
('4', 'joko', 'tes', '0000-00-00', '0000-00-00', '14444', 'tes', 'tes'),
('5', '12b', 'Surat Keterangan', '0000-00-00', '0000-00-00', '111', 'tes', 'tes'),
('56', '12b', 'tes', '2018-02-01', '2018-02-04', '111', 'PP. LIRBOYO', 'gfdhgdfhdfh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
