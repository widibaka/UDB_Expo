-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 01:20 AM
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
-- Table structure for table `website_settings`
--

CREATE TABLE `website_settings` (
  `id` int(11) NOT NULL,
  `judul` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website_settings`
--

INSERT INTO `website_settings` (`id`, `judul`) VALUES
(1, 'UDB Expo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socmed`
--
ALTER TABLE `socmed`
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
