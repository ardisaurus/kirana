-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 12:37 PM
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
(4, 2, 2, 3),
(4, 1, 2, 4),
(4, 3, 2, 2),
(4, 2, 3, 4),
(4, 1, 3, 2),
(4, 2, 4, 1),
(4, 1, 4, 3),
(4, 3, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner`
--

CREATE TABLE IF NOT EXISTS `kuisioner` (
  `id_kuisioner` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kuisioner` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_kuisioner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kuisioner`
--

INSERT INTO `kuisioner` (`id_kuisioner`, `nama_kuisioner`, `status`) VALUES
(4, 'Fasilitas Laboratorium Kimia', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE IF NOT EXISTS `pertanyaan` (
  `id_kuisioner` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` text NOT NULL,
  PRIMARY KEY (`id_pertanyaan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_kuisioner`, `id_pertanyaan`, `pertanyaan`) VALUES
(4, 1, 'Luas ruangan'),
(4, 2, 'Kebersihan ruangan'),
(4, 3, 'Pencahayaan ruangan'),
(4, 4, 'Kondisi alat praktek'),
(4, 5, 'Warna ruangan');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `responden`
--

INSERT INTO `responden` (`id_res`, `id_kuisioner`, `no_id`, `nama`) VALUES
(2, 4, '88182873776', 'Nugroho'),
(3, 4, '000297737', 'Charlie'),
(4, 4, '777377', 'Svenn');

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
('ichijo@raku.com', '0192023a7bbd73250516f069df18b500', 'Ichijo Raku'),
('onodera@kosaki.com', '0192023a7bbd73250516f069df18b500', 'Kosaki Onodera');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
