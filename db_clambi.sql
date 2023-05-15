-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 07:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_clambi`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`name`, `value`) VALUES
('deskripsi_toko', 'belanja disini seru sekali'),
('facebook_profile', 'https://www.facebook.com/dicoding/?locale=id_ID'),
('file_kategori_dua', ''),
('file_kategori_empat', 'kedaikopi@gmail.com!!!'),
('file_kategori_lima', 'Buka setiap Weekday (08.00 - 10.00)'),
('file_kategori_satu', ''),
('file_kategori_tiga', ''),
('instagram_profile', 'https://www.instagram.com/dicoding/?hl=en'),
('jumbotron_toko', 'kopi.jpg'),
('kategori_dua', ''),
('kategori_empat', ''),
('kategori_lima', ''),
('kategori_satu', 'Top Collection'),
('kategori_tiga', ''),
('link_facebook', 'clambistore'),
('link_instagram', 'clambistore'),
('link_lazada', ''),
('link_shopee', ''),
('link_tokopedia', '-6.922567965849744, 107.60713763700969'),
('link_twitter', '@clambistore'),
('logo_toko', ''),
('lokasi', 'Jl. Braga No. 27 Kota Bandung'),
('nama_toko', '@Clambi'),
('tagline_toko', 'seratus persen produk lokal, ayo support UMKM '),
('tentang_kami', 'Kopiiiiii');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
