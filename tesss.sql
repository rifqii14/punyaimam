-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2019 at 01:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tesss`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `kode_guru` varchar(255) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `username`, `password`, `kode_guru`, `nip`, `nama_guru`, `jk`, `alamat`, `agama`, `tlp`, `gambar`) VALUES
(4, 'monica', 'bW9uaWNh', 'GU-023', '17144', 'rifqi maula', 'Laki-Laki', 'bekasid', 'Islam', '08999764', '9112cb2fae6c3ed1b3978ded4875d4c8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `username`, `password`, `nis`, `nama_siswa`, `jk`, `alamat`, `agama`, `tlp`, `gambar`) VALUES
(47, 'Widia Astuti', 'Widia Astuti', 'GU-01', '82128182', 'Widia Astu', 'Perempuan', 'Jalan Raharja Kulon ', 'Islam', '82239485761'),
(48, 'Erni Haryani', 'Erni Haryani', 'GU-02', '81932323', 'Erni Harya', 'Perempuan', 'Ngestiharjo Kulon pr', 'Islam', '82734635295'),
(49, 'Wulandari', 'Wulandari', 'GU-03', '12323123', 'Wulandari', 'Perempuan', 'Gejlik ngestiharjo', 'Islam', '87763552261'),
(50, 'Sri Mulyani', 'Sri Mulyani', 'GU-04', '34231123', 'Sri Mulyan', 'Perempuan', 'Kulworo jeplak', 'Islam', '85263778849'),
(119, 'Widia Astuti', 'Widia Astuti', '82128182', 'Widia Astuti', 'Perempuan', 'Jalan Raharja Kulon progo', 'Islam', '82239485761', 'img.png'),
(120, 'Erni Haryani', 'Erni Haryani', '81932323', 'Erni Haryani', 'Perempuan', 'Ngestiharjo Kulon progo', 'Islam', '82734635295', 'img.png'),
(121, 'Wulandari', 'Wulandari', '12323123', 'Wulandari', 'Perempuan', 'Gejlik ngestiharjo', 'Islam', '87763552261', 'img.png'),
(122, 'Sri Mulyani', 'Sri Mulyani', '34231123', 'Sri Mulyani', 'Perempuan', 'Kulworo jeplak', 'Islam', '85263778849', 'img.png'),
(123, 'Sholeh ', 'Sholeh ', '34234234', 'Sholeh ', 'Laki Laki', 'karang uni ngestiharjo', 'Islam', '89937226653', 'img.png'),
(124, 'Aisyah', 'Aisyah', '23423234', 'Aisyah', 'Perempuan', 'Toyan , km 01', 'Islam', '87738449923', 'img.png'),
(125, 'Mujiman erman', 'Mujiman erman', '23423423', 'Mujiman erman', 'Laki Laki', 'Ngentak , wates', 'Islam', '82283774463', 'img.png'),
(126, 'Dani safitri', 'Dani safitri', '23423421', 'Dani safitri', 'Laki Laki', 'Jetis wates', 'Islam', '87736552243', 'img.png'),
(127, 'aaa', 'aaaa', 'aaa', 'aaa', 'Laki-Laki', 'aaa', 'Kristen', 'aaa', 'Image 5.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
