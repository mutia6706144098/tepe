-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2016 at 03:32 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hai_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alumni`
--

CREATE TABLE IF NOT EXISTS `tb_alumni` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alumni`
--

INSERT INTO `tb_alumni` (`username`, `password`, `nama`) VALUES
('6706144082', '6706144082', 'Kristi Aprilita'),
('6706144098', '6706144098', 'Mutia'),
('67900999', '545456', 'nyyuy'),
('dfd', '', 'dff');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kp`
--

CREATE TABLE IF NOT EXISTS `tb_kp` (
  `id_kp` int(10) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(30) NOT NULL,
  `bidang` varchar(30) NOT NULL,
  `cerita_kp` text NOT NULL,
  PRIMARY KEY (`id_kp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_loker`
--

CREATE TABLE IF NOT EXISTS `tb_loker` (
  `id_loker` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_loker`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE IF NOT EXISTS `tb_prestasi` (
  `id_prestasi` int(10) NOT NULL AUTO_INCREMENT,
  `nama_prestasi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_prestasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `nama_prestasi`) VALUES
(1, 'Juara 1 hackaton');

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat_kerja`
--

CREATE TABLE IF NOT EXISTS `tb_riwayat_kerja` (
  `id_riwayatkerja` int(10) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(30) NOT NULL,
  `bidang` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `cerita` text NOT NULL,
  PRIMARY KEY (`id_riwayatkerja`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
