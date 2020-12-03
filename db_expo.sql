-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 01:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_expo`
--

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `judul`, `keterangan`, `gambar`, `link`) VALUES
(1, 'Project 1', 'Project 1 adalah project mobile yang bla-bla-bla', 'slide-1.jpg', '#about'),
(2, 'Project 2', 'Project 2 adalah project web yang bla-bla-bla', 'slide-2.jpg', '#about'),
(3, 'Project 3', 'Project 3 adalah project animasi yang bla-bla-bla', 'slide-3.jpg', '#about');

-- --------------------------------------------------------

--
-- Table structure for table `karya`
--

CREATE TABLE `karya` (
  `id_karya` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `tanggal` int(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_tim` int(11) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karya`
--

INSERT INTO `karya` (`id_karya`, `nama`, `id_kategori`, `tanggal`, `deskripsi`, `id_tim`, `gambar`) VALUES
(1, 'Project Web 01', 3, 1606917860, 'Ini adalah deskripsi. Kuisi cerita pendek aja deh. Nisa langsung meng angguk lembut sambil melipat jemuran yang belum sempat disetrika. Sambal terasi merupakan favorit Adi.\r\n\r\nMakan apa pun, sambal terasi pelengkapnya. Mungkin bisa sampai satu kilo untuk dua minggu. Kebiasaan Adi itu dibawa dari rumahnya dulu. Ibunya selalu membuat sambal setiap hari. Tak lupa ditemani berbagai macam lalapan lengkap untuk menambah cita rasa.\r\n\r\nNisa kurang menyukai makanan pedas, apalagi sambal. Namun, untuk memenuhi keinginan suaminya, Nisa terpaksa membuat nya setiap hari. Meski rasanya tak seenak buatan ibu Adi, Adi selalu menagih untuk dibuatkan. Mungkin rasanya sudah mendekati. Itulah sebabnya dia selalu minta dibuatkan.\r\n\r\n\"Sambal buatan kamu selalu jadi favorit.\"\r\n\r\n\"Mas, harus ya setiap hari makan sambal?\"\r\n\r\n\"Emang kenapa, Dik?\"\r\n\r\n\"Gak kenapa-kenapa.\"\r\n\r\n\"Makan sambal itu ibarat pelengkap. Kalau gak ada ya gak lengkap. Kurang mantep aja.\"', 1, 'gambar1.jpg[@pemisah]gambar2.jpg[@pemisah]'),
(2, 'Project Web 02', 3, 1606917860, '222 Nisa langsung meng angguk lembut sambil melipat jemuran yang belum sempat disetrika. Sambal terasi merupakan favorit Adi.\r\n\r\nMakan apa pun, sambal terasi pelengkapnya. Mungkin bisa sampai satu kilo untuk dua minggu. Kebiasaan Adi itu dibawa dari rumahnya dulu. Ibunya selalu membuat sambal setiap hari. Tak lupa ditemani berbagai macam lalapan lengkap untuk menambah cita rasa.\r\n\r\nNisa kurang menyukai makanan pedas, apalagi sambal. Namun, untuk memenuhi keinginan suaminya, Nisa terpaksa membuat nya setiap hari. Meski rasanya tak seenak buatan ibu Adi, Adi selalu menagih untuk dibuatkan. Mungkin rasanya sudah mendekati. Itulah sebabnya dia selalu minta dibuatkan.\r\n\r\n\"Sambal buatan kamu selalu jadi favorit.\"\r\n\r\n\"Mas, harus ya setiap hari makan sambal?\"\r\n\r\n\"Emang kenapa, Dik?\"\r\n\r\n\"Gak kenapa-kenapa.\"\r\n\r\n\"Makan sambal itu ibarat pelengkap. Kalau gak ada ya gak lengkap. Kurang mantep aja.\"', 1, 'img1.jpg[@pemisah]img2.jpg[@pemisah]');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(120) NOT NULL,
  `deskripsi_kategori` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deskripsi_kategori`) VALUES
(1, 'Animasi', 'Hampir semua jenis animasi bisa kamu daftarkan ke UDB Expo.'),
(2, 'Mobile App', 'Ini keterangan untuk aplikasi mobile, dibatasi 500 karakter'),
(3, 'Web App', 'Ini keterangan untuk aplikasi web, dibatasi 500 karakter'),
(4, 'Desktop App', 'Ini keterangan untuk aplikasi desktop, dibatasi 500 karakter'),
(5, 'Kewirausahaan', 'Ini keterangan untuk kewirausahaan, dibatasi 500 karakter');

-- --------------------------------------------------------

--
-- Table structure for table `kreator`
--

CREATE TABLE `kreator` (
  `id_kreator` int(11) NOT NULL,
  `id_karya` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `peran` varchar(50) NOT NULL,
  `sosmed` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kreator`
--

INSERT INTO `kreator` (`id_kreator`, `id_karya`, `nama`, `peran`, `sosmed`) VALUES
(1, 1, 'Widi Dwi Nurcahyo Kumlorot Kanjeng Mami', 'Ketua Project', '{\"whatsapp\":\"082222222222\", \"twitter\":\"https://twitter.com\", \"instagram\":\"https://instagram.com\",  \"linkedin\":\"https://linkedin.com\"}');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id_like` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_karya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id_like`, `email`, `id_karya`) VALUES
(1, 'widibaka55@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `socmed`
--

CREATE TABLE `socmed` (
  `id` int(11) NOT NULL,
  `twitter` varchar(110) NOT NULL,
  `facebook` varchar(110) NOT NULL,
  `instagram` varchar(110) NOT NULL,
  `skype` varchar(110) NOT NULL,
  `linkedin` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socmed`
--

INSERT INTO `socmed` (`id`, `twitter`, `facebook`, `instagram`, `skype`, `linkedin`) VALUES
(1, 'https://twitter.com', 'https://facebook.com', 'https://instagram.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`) VALUES
(3, 'widibaka55@gmail.com'),
(4, 'widi.udb@gmail.com'),
(5, 'widi_dwi@fikom.udb.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `website_settings`
--

CREATE TABLE `website_settings` (
  `id` int(11) NOT NULL,
  `judul` varchar(110) NOT NULL,
  `per_page` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website_settings`
--

INSERT INTO `website_settings` (`id`, `judul`, `per_page`) VALUES
(1, 'UDB Expo', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karya`
--
ALTER TABLE `karya`
  ADD PRIMARY KEY (`id_karya`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kreator`
--
ALTER TABLE `kreator`
  ADD PRIMARY KEY (`id_kreator`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`);

--
-- Indexes for table `socmed`
--
ALTER TABLE `socmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_settings`
--
ALTER TABLE `website_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `karya`
--
ALTER TABLE `karya`
  MODIFY `id_karya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kreator`
--
ALTER TABLE `kreator`
  MODIFY `id_kreator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
