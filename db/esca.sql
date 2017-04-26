-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2015 at 04:27 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `esca`
--
CREATE DATABASE `esca` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `esca`;

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
  `num` int(255) NOT NULL AUTO_INCREMENT,
  `idtrans` int(20) NOT NULL,
  `nama_pesakit` varchar(200) NOT NULL,
  `id_pesakit` varchar(20) NOT NULL,
  `nric` varchar(21) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `warganegara` varchar(20) NOT NULL,
  `nation` varchar(40) NOT NULL,
  `resit` varchar(50) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `lokasi2` varchar(200) NOT NULL,
  `lokasi3` varchar(200) NOT NULL,
  `lokasi4` varchar(200) NOT NULL,
  `lain_lain` text NOT NULL,
  `nk1` text NOT NULL,
  `nk2` text NOT NULL,
  `doneby1` varchar(150) NOT NULL,
  `masatarikh1` datetime NOT NULL,
  `jawatan1` varchar(150) NOT NULL,
  `doneby2` varchar(150) NOT NULL,
  `masatarikh2` datetime NOT NULL,
  `jawatan2` varchar(150) NOT NULL,
  `doneby3` varchar(150) NOT NULL,
  `jawatan3` varchar(100) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10638 ;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`num`, `idtrans`, `nama_pesakit`, `id_pesakit`, `nric`, `dob`, `warganegara`, `nation`, `resit`, `lokasi`, `lokasi2`, `lokasi3`, `lokasi4`, `lain_lain`, `nk1`, `nk2`, `doneby1`, `masatarikh1`, `jawatan1`, `doneby2`, `masatarikh2`, `jawatan2`, `doneby3`, `jawatan3`) VALUES
(10632, 2, 'MUHAMMAD ADIB BIN AHMAD ROSLAN', 'fafed', '96412552177-33', '', '', '', '', 'KLINIK PAKAR 1					', '123', '123', '123', '<p>asdadfffsadddddddddfd</p>\r\n\r\n<p>fdg<br />\r\ngjgfjf</p>\r\n', 'Pendaftaran di KLINIK PAKAR 1 . </br> Direkod oleh MUHAMMAD AZMAN BIN ABU TALIB , ADIB 2015-07-30 14:18:23</br></br> <p>adada</p>\r\n Direkod oleh ADASD55 , ASDADAS123  2015-07-30 14:36:38</br></br>  Direkod oleh ARHGRTTTT , WERWRWERT  2015-07-30 14:43:32</br></br>  Direkod oleh 12555555QASE , 123RQWRD11431  2015-07-30 14:44:49</br></br>  Direkod oleh SGSDGDSAG , SDGSGS  2015-07-30 14:46:23</br></br> <p>fdg<br />\r\ngjgfjf</p>\r\n Direkod oleh SARAH , PT  2015-08-11 14:17:39', '', 'SARAH', '2015-08-11 14:17:39', 'pt', '', '0000-00-00 00:00:00', '', '', ''),
(10634, 2, 'SURTI BINTI KARTO', '', 'A121245', '', '', 'INDONESIA', 'RE235647', 'WAD 4A (PERUBATAN)', '', '', '', '', 'Pendaftaran di WAD 4A (PERUBATAN) . </br> Direkod oleh SITI SAHARAH BINTI MAHMUD , PEMBANTU TADBIR N17 - UNIT HASIL 2015-07-30 14:52:31', '', 'SITI SAHARAH BINTI MAHMUD', '2015-07-30 14:48:30', 'PEMBANTU TADBIR N17 - UNIT HASIL', '', '0000-00-00 00:00:00', '', '', ''),
(10635, 2, 'SAIFULLAH BIN SHARIFF', 'SB00721236', '781211035353', '', '', '', 'RE235353', 'WAD 6A (GINEKOLOGI)	', '', '', '', '', 'Pendaftaran di WAD 6A (GINEKOLOGI) . </br> Direkod oleh SITI SAHARAH BINTI MAHMUD , PEMBANTU TADBIR N17 - UNIT HASIL 2015-07-30 14:56:33</br></br>  Direkod oleh SN MURNIZA BINTI MAZLAN , JURURAWAT U29 (WAD 6A)  2015-08-11 08:33:48', '', 'SN MURNIZA BINTI MAZLAN', '2015-08-11 08:33:48', 'JURURAWAT U29 (WAD 6A)', '', '0000-00-00 00:00:00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `typeuser` int(10) NOT NULL,
  `jawatan` varchar(200) NOT NULL,
  `nama` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `typeuser`, `jawatan`, `nama`) VALUES
(8, 'admin', '5fec4ba8376f207d1ff2f0cac0882b01', 4, 'admin', 'Admin'),
(16, 'mrd', 'ed1fbbef5bfb288aa10218943f58e678', 3, 'mrd', 'Mrd'),
(23, 'rania', 'd6bd4288dbcf5d2ae2053a35389e8c56', 2, 'Kontraktor IT', 'Rania'),
(24, 'lo', '7ce8636c076f5f42316676f7ca5ccfbe', 2, 'Liason Officer', 'Liason Officer'),
(25, 'hasil', 'bb8c1fa2b61b762fa91022ecbb9bd63e', 1, 'hasil', 'Hasil'),
(26, 'salfaryna', '35adf5e5302c6f2a4ad5b031640b1ed9', 4, 'Ketua Bahagian Teknologi Maklumat', 'Salfaryna Alzahari');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(30) NOT NULL AUTO_INCREMENT,
  `id_pengguna` varchar(10) NOT NULL,
  `lulus` varchar(50) NOT NULL,
  `aktif` datetime NOT NULL,
  `nyahaktif` datetime NOT NULL,
  `tempoh` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `plan_type` varchar(50) NOT NULL,
  `jum_daftar` int(50) NOT NULL,
  `jum_rekodmrd` int(50) NOT NULL,
  `mrd_name` varchar(50) NOT NULL,
  `masatarikh` datetime NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pengguna`, `lulus`, `aktif`, `nyahaktif`, `tempoh`, `status`, `tujuan`, `lokasi`, `plan_type`, `jum_daftar`, `jum_rekodmrd`, `mrd_name`, `masatarikh`) VALUES
(1, 'admin', 'Pengarah Hospital', '2015-07-24 23:34:23', '2015-07-25 12:22:35', '0 Days 12 Hours 48 Minutes', 'Deactive', 'SAN Migration', 'Semua lokasi', 'Planned Downtime', 653, 657, 'halimah', '2015-07-27 15:21:11'),
(2, 'admin', 'adib', '2015-07-30 10:12:21', '0000-00-00 00:00:00', '', 'Active', 'Testing', 'ITD', 'Planned Downtime', 7, 4, '', '0000-00-00 00:00:00');
