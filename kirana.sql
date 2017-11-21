-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 03:25 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kirana`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE IF NOT EXISTS `jawaban` (
  `id_kuisioner` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `id_res` int(11) NOT NULL,
  `jawaban` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id_kuisioner`, `id_pertanyaan`, `id_res`, `jawaban`) VALUES
(5, 8, 5, 4),
(5, 7, 5, 3),
(5, 6, 5, 3),
(5, 9, 5, 1),
(5, 8, 6, 1),
(5, 7, 6, 2),
(5, 6, 6, 3),
(5, 9, 6, 3),
(5, 8, 7, 3),
(5, 7, 7, 4),
(5, 6, 7, 2),
(5, 9, 7, 3),
(5, 8, 8, 2),
(5, 7, 8, 3),
(5, 6, 8, 2),
(5, 9, 8, 4),
(5, 8, 9, 1),
(5, 7, 9, 3),
(5, 6, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner`
--

CREATE TABLE IF NOT EXISTS `kuisioner` (
  `id_kuisioner` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kuisioner` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_kuisioner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kuisioner`
--

INSERT INTO `kuisioner` (`id_kuisioner`, `nama_kuisioner`, `status`) VALUES
(5, 'Perpustakaan Baru', 1),
(6, 'Renovasi lapangan basket', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE IF NOT EXISTS `pertanyaan` (
  `id_kuisioner` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` text NOT NULL,
  PRIMARY KEY (`id_pertanyaan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_kuisioner`, `id_pertanyaan`, `pertanyaan`) VALUES
(5, 6, 'Tambahkan meja baca Individu?'),
(5, 7, 'Tambahkan komputer?'),
(5, 8, 'Tambahkan jaringan internet?'),
(5, 9, 'Tambahkan meja baca kelompok?'),
(6, 10, 'Tambah lampu penerangan?'),
(6, 11, 'Tambah bangku pemain cadangan?'),
(6, 12, 'Tambahkan kanopi di pinggir lapangan?');

-- --------------------------------------------------------

--
-- Table structure for table `responden`
--

CREATE TABLE IF NOT EXISTS `responden` (
  `id_res` int(11) NOT NULL AUTO_INCREMENT,
  `id_kuisioner` int(11) NOT NULL,
  `no_id` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id_res`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `responden`
--

INSERT INTO `responden` (`id_res`, `id_kuisioner`, `no_id`, `nama`) VALUES
(5, 5, '88182873776', 'Charlie'),
(6, 5, '88182873755', 'Silvia'),
(7, 5, '88182873723', 'David'),
(8, 5, '88182873799', 'Richard'),
(9, 5, '88182873734', 'Bella');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `nama`) VALUES
('admin@kirana.com', '25d55ad283aa400af464c76d713c07ad', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
