-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 03:36 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aduan-rakyat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `jk`, `tempat_lahir`, `tanggal_lahir`, `username`, `password`) VALUES
(1, 'kelompok 5', 'L', 'jakarta', '14-03-1996', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'admin', 'P', 'jakarta', '22-10-1998', 'admin4', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'akun beta', 'P', 'jakarta', '18-06-2020', 'admin3', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id_agama` varchar(10) NOT NULL,
  `nama_agama` varchar(30) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `nama_agama`, `status`) VALUES
('A1', 'Islam', 1),
('A2', 'Kristen', 1),
('A3', 'Katholik', 1),
('A4', 'HIndu', 1),
('A5', 'KOng Hucu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(100) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` varchar(10) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `id_agama` varchar(30) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nohp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `id_agama`, `username`, `password`, `alamat`, `nohp`) VALUES
('09876543', 'jaenab', 'kalimantan', '30-06-1993', 'P', 'A1', 'user5', '25d55ad283aa400af464c76d713c07ad', 'jl kapuk no. 88', '08577764356'),
('117300116008990006', 'Muhammad Rizky Pratama', 'DKI Jakarta', '14-08-1999', 'L', 'A1', 'shota', 'e10adc3949ba59abbe56e057f20f883e', 'jl kapuk no. 5', '0812898666'),
('12345678', 'siapa deh', 'jakarta', '20-08-1998', 'P', 'A2', 'user', '25d55ad283aa400af464c76d713c07ad', '', ''),
('317301140899005', 'shota', 'jakarta', '17-06-1998', 'L', 'A1', 'rizky', 'e10adc3949ba59abbe56e057f20f883e', '', ''),
('3r43543', 'sfds', 'sfsd', '23-06-2020', 'L', 'A1', '', '', '', ''),
('4353465', 'adsa', 'sfsdgdsf', '17-06-2020', 'L', 'A1', 'user2', 'e10adc3949ba59abbe56e057f20f883e', 'jl desa', '0833154667');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(30) NOT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `pengaduan` varchar(300) DEFAULT NULL,
  `tanggal` varchar(10) NOT NULL,
  `file` text NOT NULL,
  `status` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `nik`, `pengaduan`, `tanggal`, `file`, `status`, `id_admin`) VALUES
(1, '123451', 'Paving e rusak boss', '25-06-2018', '', 0, 1),
(10, '123445', 'HMMMM YAYAYA', '26-06-2018', '4.jpg', 0, 1),
(18, '12345', 'huhuhuhu', '06-05-2020', 'utama_5.png', 1, 1),
(19, '117300116008990006', '123456', '09-06-2020', 'bingkai1.jpg', 0, 1),
(22, '117300116008990006', 'coba dulu', '11-06-2020', '1.JPG', 0, 1),
(23, '117300116008990006', 'test lagi deh', '11-06-2020', '2020-05-08-09-42-16_0.png', 0, 1),
(24, '117300116008990006', 'coba', '11-06-2020', '2020-03-27-22-04-09_0.png', 0, 1),
(28, '117300116008990006', 'coba lagi', '14-06-2020', 'tetsuya_utama.jpg', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `penduduk` (`id_agama`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
