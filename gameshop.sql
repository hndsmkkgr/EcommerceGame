-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 03:17 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `detil` varchar(300) NOT NULL,
  `stok` int(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_brg`, `nama_brg`, `kategori`, `harga`, `detil`, `stok`, `gambar`) VALUES
(0, 'Grand Theft Auto V', 'PS 4', 500000, 'Berbeda dengan seri-seri sebelumnya yang hanya memuat satu karakter utama, GTA V hadir dengan kejutan ekstra, tiga karakter utama dengan tiga buah latar belakang cerita yang berbeda. Selamat datang di Los Santos, rumah dan medan pertempuran bagi Michael Townley, Trevor Philips, dan Franklin Clinton.', 50, 'gta5.jpg'),
(1, 'Free Fire', 'PC', 1000000, 'Free Fire menawarkan keseruan dan ketegangan yang sama dengan game battle royale pada umumnya. Setelahnya, lo harus mengambil senjata dan segala persediaan yang tersebar di penjuru map untuk bertahan hidup.', 60, 'free fire.jpg'),
(2, 'Naruto Shipuden X', 'PS 4', 550000, 'Tiga belas tahun sebelum cerita ini dimulai, seekor monster rubah ekor sembilan bernama Kyuubi menyerang Konoha, sebuah desa shinobi yang terletak di negara Api. ', 40, 'naruto.jpg'),
(3, 'Call of Duty 3', 'PC', 200000, 'Call of Duty: Modern Warfare 2 adalah video game penembak orang pertama yang dikembangkan oleh Infinity Ward dan diterbitkan oleh Activision untuk Xbox 360 dan PlayStation 3 video game konsol dan sistem operasi Microsoft Windows resmi diumumkan pada tanggal 11 Februari, 2009 game ini dirilis di usa', 70, 'COD 3.jpg'),
(4, 'harvest Moon', 'xbox', 150000, 'harvest moon adalah game tentang seorang karakter yang senang berkebun.', 200, 'harvest.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_brg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
