-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 02:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040039`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nrp` varchar(9) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Mochammad Radhi Akbar', '193040039', '193040039@mail.unpas.ac.id', 'Teknik Informatika', '193040039.jpg'),
(2, 'Dimas Nanda Herlambanh', '193040040', '193040040@mail.unpas.ac.id', 'Teknik Informatika', '193040040.jpg'),
(3, 'Muhammad Viqri Febriana', '193040041', '193040041@mail.unpas.ac.id', 'Teknik Informatika', '193040041.jpg'),
(4, 'Suhendani', '193040042', '193040042@mail.unpas.ac.id', 'Teknik Informatika', '193040042.jpg'),
(5, 'Herlan Nurachman', '193040043', '193040043@mail.unpas.ac.id', 'Teknik Informatika', '193040043.jpg'),
(6, 'Rayhan Abduhuda', '193040044', '193040044@mail.unpas.ac.id', 'Teknik Informatika', '193040044.jpg'),
(7, 'Dian Nuryana', '193040045', '193040045@mail.unpas.ac.id', 'Teknik Informatika', '193040045.jpg'),
(8, 'Aji Nuansa Sengarie', '193040046', '193040046@mail.unpas.ac.id', 'Teknik Informatika', '193040046.jpg'),
(9, 'Fauzan Ihsannudin Ramadhan', '193040047', '193040047@mail.unpas.ac.id', 'Teknik Informatika', '193040047.jpg'),
(10, 'Sulthan Jihad Abiyyu', '193040048', '193040048@mail.unpas.ac.id', 'Teknik Informatika', '193040048.jpg'),
(11, 'Salsabila Nada', '193040050', '193040050@mail.unpas.ac.id', 'Teknik Industri', '193040050.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `music_gear`
--

CREATE TABLE `music_gear` (
  `id` int(11) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `nama_alat_musik` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `rekomendasi` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music_gear`
--

INSERT INTO `music_gear` (`id`, `img`, `nama_alat_musik`, `deskripsi`, `harga`, `rekomendasi`) VALUES
(1, 'img/guitar-01.png', 'Gitar Acoustic', 'Gitar akustik adalah jenis gitar di mana suara yang dihasilkan berasal dari getaran senar gitar yang', 1190000, '4.5'),
(2, 'img/guitar-01.png', 'Gitar Acoustic', 'Gitar akustik adalah jenis gitar di mana suara yang dihasilkan berasal dari getaran senar gitar', 1190000, '4.5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music_gear`
--
ALTER TABLE `music_gear`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `music_gear`
--
ALTER TABLE `music_gear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
