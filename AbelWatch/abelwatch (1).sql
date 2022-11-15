-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 11:17 AM
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
-- Database: `abelwatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_produk`
--

CREATE TABLE `tabel_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_produk`
--

INSERT INTO `tabel_produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga_jual`, `gambar_produk`) VALUES
(6, 'Smartwatch New Design Jam Tangan Pintar Pria Dan Wanita IOS & Android', '1.54 inch HD IPS color full screen touch screen Dual UI menu display switching Multi-dial switching Can use 44mm apple strap Operation method:Full touch + function button Bluetooth calling,', 396000, '557-jam1.png'),
(7, 'JAM TANGAN PRIA CASIO MW-240-1EVDF / MW-240-1E ORIGINAL & BERGARANSI', 'Case / bezel material: Resin Resin Band Resin Glass 50-meter Regular timekeeping Analog: 3 hands (hour, minute, second) Accuracy: 20 seconds per month Approx. battery life: 3 years on SR626SW Size of case / Total weight Diameter 43mm', 273000, '796-casio.jpg'),
(8, 'Jam Tangan Pria Casio Edifice EQS-920DB-1BVUDF Tough Solar Black Dial Stainless Steel Jam Tangan - Jam Tangan Formal', 'barang bagus...', 2381000, '245-formal.jpg'),
(9, 'jam tangan smartwatch', 'barang keren', 500000, '653-95-856-jam1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
