-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 04:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_genshin`
--

CREATE TABLE `pesanan_genshin` (
  `id` int(12) NOT NULL,
  `user_id` varchar(360) NOT NULL,
  `server` varchar(128) NOT NULL,
  `nominal` int(20) NOT NULL,
  `payment` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan_genshin`
--

INSERT INTO `pesanan_genshin` (`id`, `user_id`, `server`, `nominal`, `payment`, `email`) VALUES
(1, '29555', 'Europe', 400000, 'GoPay', 'dani314123@gmail.com'),
(2, '00029', 'Europe', 79000, 'Alfamart', 'dani314123@gmail.com'),
(3, '2299291', 'TW, HK, MO', 479000, 'Visa', 'dani314123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_mlbb`
--

CREATE TABLE `pesanan_mlbb` (
  `id_member` int(12) NOT NULL,
  `user_id` int(20) NOT NULL,
  `zone_id` int(10) NOT NULL,
  `nominal` int(128) NOT NULL,
  `payment` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan_mlbb`
--

INSERT INTO `pesanan_mlbb` (`id_member`, `user_id`, `zone_id`, `nominal`, `payment`, `email`) VALUES
(1, 229929, 1223, 400000, 'Dana', 'dani314123@gmail.com'),
(2, 229929, 1223, 400000, 'Dana', 'dani314123@gmail.com'),
(3, 29, 11111, 50000, 'Dana', 'dani314123@gmail.com'),
(4, 11222, 2003, 300000, 'GoPay', 'dani314123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_pubg`
--

CREATE TABLE `pesanan_pubg` (
  `id_member` int(12) NOT NULL,
  `user_id` int(20) NOT NULL,
  `nominal` int(128) NOT NULL,
  `payment` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan_pubg`
--

INSERT INTO `pesanan_pubg` (`id_member`, `user_id`, `nominal`, `payment`, `email`) VALUES
(1, 29555, 25000, 'GoPay', 'danistimikwp@gmail.com'),
(2, 22342, 25000, 'Alfamart', 'danistimikwp@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `regist`
--

CREATE TABLE `regist` (
  `id_member` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regist`
--

INSERT INTO `regist` (`id_member`, `nama`, `email`, `user`, `password`) VALUES
(7, 'dani kurniawan', 'dani314123@gmail.com', 'dani77', '$2y$10$bn7APhXR9bIN/f7q428WXOFncv2F.fRuwiLknz3IcgG.g821PrYE.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan_genshin`
--
ALTER TABLE `pesanan_genshin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan_mlbb`
--
ALTER TABLE `pesanan_mlbb`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pesanan_pubg`
--
ALTER TABLE `pesanan_pubg`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `regist`
--
ALTER TABLE `regist`
  ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan_genshin`
--
ALTER TABLE `pesanan_genshin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesanan_mlbb`
--
ALTER TABLE `pesanan_mlbb`
  MODIFY `id_member` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesanan_pubg`
--
ALTER TABLE `pesanan_pubg`
  MODIFY `id_member` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regist`
--
ALTER TABLE `regist`
  MODIFY `id_member` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
