-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 12:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wings`
--
CREATE DATABASE IF NOT EXISTS `wings` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wings`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(15) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `status`) VALUES
(1, 'wawan setiawan', '$2y$10$VMjdcbfVEMW51GX6/V54Q.IHriCCOSM6l57XXAixzNA00vJhlcS.6', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(15) NOT NULL,
  `product_kode` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `dimension` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_kode`, `product_name`, `keterangan`, `price`, `currency`, `discount`, `dimension`, `unit`, `gambar`) VALUES
(1, 'SKUSKILNP', 'Sabun Ekonomi Hijau', '', '15000', 'IDR', '10', '13 cm x 10 cm', '10', 'hijau.jpg'),
(2, 'SKUSKILNP2', 'Sabun Ekonomi Kuning\r\n', '', '15000', 'IDR', '10', '13 cm x 10 cm', '10', 'kuning.jpg'),
(3, 'SKUSKILNP3', 'Sabun Ekonomi Ungu', '', '15000', 'IDR', '10', '13 cm x 10 cm', '10', 'ungu.jpeg'),
(4, 'SKUSKILNP4', 'Soklin Pink', '', '17000', 'IDR', '10', '13 cm x 15 cm', '10', 'soklinpink.jpg'),
(5, 'SKUSKILNP5\r\n', 'Soklin Merah', '', '17000', 'IDR', '10', '13 cm x 15 cm', '10', 'soklinmerah.jpg'),
(6, 'SKUSKILNP6', 'Soklin Ungu', '', '17000', 'IDR', '10', '13 cm x 15 cm', '10', 'soklinungu.jpg'),
(7, 'SKUSKILNP7', 'Soklin Biru', '', '17000', 'IDR', '10', '13 cm x 15 cm', '10', 'soklinbiru.jpg'),
(8, 'SKUSKILNP8', 'Soklin Baru', '', '17000', 'IDR', '10', '13 cm x 15 cm', '10', 'soklinbaru.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `date` text NOT NULL,
  `gambar` text NOT NULL,
  `user` text NOT NULL,
  `product_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_header`
--

CREATE TABLE `transaksi_header` (
  `id` int(15) NOT NULL,
  `user` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_header`
--
ALTER TABLE `transaksi_header`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `transaksi_header`
--
ALTER TABLE `transaksi_header`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
