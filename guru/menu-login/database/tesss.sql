-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 07:32 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(3, 'Enji', 'b1f2b5dbcd511c991c6d81cba0797e45', 'GU-01', '763984', 'Enji', 'Perempuan', 'Jalan Mangunan Ngestiharjo', 'Islam', '087765334421', 'imgG.png'),
(4, 'wulan', 'aae79912250d18756900f742270de7e1', 'GU-02', '765423', 'wulan', 'Perempuan', 'Ngestiharjo Wates', 'Islam', '0877365642531', 'imgG.png'),
(12, 'Sri Mulyani', 'bd1e239c44d36c4311506e0c56383a7c', 'GU-03', '9278364', 'Sri Mulyani', 'Perempuan', 'Jalan Wates km 07', 'Islam', '08746735', 'imgG.png'),
(15, 'Agustina wulandari', 'b8b27b5fa2a09640b876adb00d3245ca', 'GU-04', '453423', 'Agustina wulandari', 'Perempuan', 'jalan mangunan wates', 'Kong Hu Cu', '087564456782', 'imgG.png'),
(130, 'Widia Astuti', 'Widia Astuti', 'GU-01', '82128182', 'Widia Astuti', 'Perempuan', 'Jalan Raharja Kulon progo', 'Islam', '82239485761', 'img.png'),
(131, 'Erni Haryani', 'Erni Haryani', 'GU-02', '81932323', 'Erni Haryani', 'Perempuan', 'Ngestiharjo Kulon progo', 'Islam', '82734635295', 'img.png'),
(132, 'Wulandari', 'Wulandari', 'GU-03', '12323123', 'Wulandari', 'Perempuan', 'Gejlik ngestiharjo', 'Islam', '87763552261', 'img.png'),
(133, 'Sri Mulyani', 'Sri Mulyani', 'GU-04', '34231123', 'Sri Mulyani', 'Perempuan', 'Kulworo jeplak', 'Islam', '85263778849', 'img.png'),
(134, 'Sholeh ', 'Sholeh ', 'GU-05', '34234234', 'Sholeh ', 'Laki Laki', 'karang uni ngestiharjo', 'Islam', '89937226653', 'img.png'),
(135, 'Aisyah', '8e4024c496cb15ee90dc3f93886cd779', 'GU-06', '23423234', 'Aisyah', 'Perempuan', 'Toyan , km 01', 'Islam', '87738449923', 'img.png'),
(136, 'Mujiman erman', 'Mujiman erman', 'GU-07', '23423423', 'Mujiman erman', 'Laki Laki', 'Ngentak , wates', 'Islam', '82283774463', 'img.png'),
(137, 'Dani safitri', 'Dani safitri', 'GU-08', '23423421', 'Dani safitri', 'Laki Laki', 'Jetis wates', 'Islam', '87736552243', 'img.png'),
(138, 'Widia Astuti', 'Widia Astuti', 'GU-01', '82128182', 'Widia Astuti', 'Perempuan', 'Jalan Raharja Kulon progo', 'Islam', '82239485761', 'img.png'),
(139, 'Erni Haryani', 'Erni Haryani', 'GU-02', '81932323', 'Erni Haryani', 'Perempuan', 'Ngestiharjo Kulon progo', 'Islam', '82734635295', 'img.png'),
(140, 'Wulandari', 'Wulandari', 'GU-03', '12323123', 'Wulandari', 'Perempuan', 'Gejlik ngestiharjo', 'Islam', '87763552261', 'img.png'),
(141, 'Sri Mulyani', 'Sri Mulyani', 'GU-04', '34231123', 'Sri Mulyani', 'Perempuan', 'Kulworo jeplak', 'Islam', '85263778849', 'img.png'),
(142, 'Sholeh ', 'Sholeh ', 'GU-05', '34234234', 'Sholeh ', 'Laki Laki', 'karang uni ngestiharjo', 'Islam', '89937226653', 'img.png'),
(143, 'Aisyah', 'Aisyah', 'GU-06', '23423234', 'Aisyah', 'Perempuan', 'Toyan , km 01', 'Islam', '87738449923', 'img.png'),
(144, 'Mujiman erman', 'Mujiman erman', 'GU-07', '23423423', 'Mujiman erman', 'Laki Laki', 'Ngentak , wates', 'Islam', '82283774463', 'img.png'),
(145, 'Dani safitri', 'Dani safitri', 'GU-08', '23423421', 'Dani safitri', 'Laki Laki', 'Jetis wates', 'Islam', '87736552243', 'img.png'),
(146, 'Widia AstutiISS', 'Widia Astuti', 'GU-01', '82128182', 'Widia Astuti', 'Perempuan', 'Jalan Raharja Kulon progo', 'Islam', '82239485761', 'imam.png'),
(147, 'Erni Haryani', 'Erni Haryani', 'GU-02', '81932323', 'Erni Haryani', 'Perempuan', 'Ngestiharjo Kulon progo', 'Islam', '82734635295', 'img.png'),
(148, 'Wulandari', 'Wulandari', 'GU-03', '12323123', 'Wulandari', 'Perempuan', 'Gejlik ngestiharjo', 'Islam', '87763552261', 'img.png'),
(149, 'Sri Mulyani', 'Sri Mulyani', 'GU-04', '34231123', 'Sri Mulyani', 'Perempuan', 'Kulworo jeplak', 'Islam', '85263778849', 'img.png'),
(150, 'Sholeh ', 'Sholeh ', 'GU-05', '34234234', 'Sholeh ', 'Laki Laki', 'karang uni ngestiharjo', 'Islam', '89937226653', 'img.png'),
(151, 'Aisyah', 'Aisyah', 'GU-06', '23423234', 'Aisyah', 'Perempuan', 'Toyan , km 01', 'Islam', '87738449923', 'img.png'),
(152, 'Mujiman erman', 'Mujiman erman', 'GU-07', '23423423', 'Mujiman erman', 'Laki Laki', 'Ngentak , wates', 'Islam', '82283774463', 'img.png'),
(153, 'Dani safitri', 'Dani safitri', 'GU-08', '23423421', 'Dani safitri', 'Laki Laki', 'Jetis wates', 'Islam', '87736552243', 'img.png'),
(154, 'imam01', 'imam01', 'imam01', 'imam01', 'imam01', 'Laki-Laki', 'imam01', 'Hindu', 'imam01', '3.png');

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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
