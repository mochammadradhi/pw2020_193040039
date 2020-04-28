-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 11:52 PM
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
-- Database: `tubes_193040039`
--

-- --------------------------------------------------------

--
-- Table structure for table `music_gear`
--

CREATE TABLE `music_gear` (
  `ID` int(11) NOT NULL,
  `img_music_gear` varchar(20) DEFAULT NULL,
  `nama_music_gear` varchar(30) DEFAULT NULL,
  `deskripsi` varchar(250) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `rekomendasi` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music_gear`
--

INSERT INTO `music_gear` (`ID`, `img_music_gear`, `nama_music_gear`, `deskripsi`, `harga`, `rekomendasi`) VALUES
(1, 'guitar.jpg', 'Gitar Akustik', 'Gitar akustik adalah jenis gitar di mana suara yang dihasilkan berasal dari getaran senar gitar yang dialirkan melalui sadel dan jembatan tempat pengikat senar ke dalam ruang suara.', 1195000, '4.7/5.0'),
(2, 'bass.jpg', 'Bass Electric', 'Bass elektrik atau bass saja adalah alat musik dawai yang menggunakan listrik untuk memperbesar suaranya.', 2145000, '4.2/5.0'),
(3, 'biola.jpg', 'Biola', 'Biola adalah sebuah alat musik dawai yang dimainkan dengan cara digesek. Biola memiliki empat senar yang disetel berbeda satu sama lain dengan interval sempurna kelima.', 1800000, '4.0/5.0'),
(4, 'flute.jpg', 'Flute', 'Flute adalah salah satu instrumen yang digunakan dalam musik keroncong. Flute merupakan instrumen tiup yang digolongkan dalam keluarga woodwind atau tiup kayu. Instrumen tersebut mempunyai istilah instrument belakang', 7120000, '3.8/5.0'),
(5, 'piano.jpg', 'Piano', 'Piano adalah alat musik yang dimainkan dengan jari-jemari tangan. Pemain piano disebut pianis. Piano adalah salah jenis alat musik yang populer di dunia. alat musik piano juga dapat dikategorikan sebagai alat musik tertua dan juga memiliki harga yang', 10990000, '4.5/5.0'),
(6, 'drum.jpg', 'Drum Set Double Pedal', 'Drum adalah kelompok alat musik perkusi yang terdiri dari kulit yang direntangkan dan dipukul dengan tangan atau sebuah batang. Selain kulit, drum juga digunakan dari bahan lain, misalnya plastik. ... Orang yang memainkan drum set disebut drummer.', 25490000, '4.8/5.0'),
(7, 'djset.jpg', 'DJ Set', 'DJ Mixer memberikan dj fungsi untuk mengatur volume, pitch (kekuatan frequency suara masuk), Treble (suara tinggi), Middle (suara tengah), Bass (suara rendah), Effects dan lain sebagainya. 2. DJ Headphones. Headphones memiliki peran yang cukup pentin', 23990000, '4.7/5.0'),
(8, 'loopstation.jpg', 'Loop Station', 'Looper ini mempunyai fitur tiga stereo track yg bisa disinkronisasi dengan knob volume khusus, master Expression pedal, dan ultra-wide control panel deluxe untuk manipulasi performa live terbaik.Sambungkan gitar Anda, bass, keyboard, atau instrumen a', 10750000, '4.0/5.0'),
(9, 'kajon.jpg', 'Kajon Acoustic', 'Kajon adalah alat musik perkusi berbentuk kotak bersisi enam dengan lubang di salah satu sisi yang dimainkan dengan menepuk sisi-sisinya dengan tangan, jari, atau berbagai alat lain seperti stik atau sikat (drum)', 760000, '4.5/5.0'),
(10, 'saxophone.jpg', 'Saxophone', 'Saxophone adalah instrumen yang masih tergolong dalam aerophone, single-reed woodwind woodwind instrument. Saksofon biasanya terbuat dari logam dan dimainkan menggunakan single-reed seperti klarinet', 4200000, '4.0/5.0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music_gear`
--
ALTER TABLE `music_gear`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music_gear`
--
ALTER TABLE `music_gear`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
