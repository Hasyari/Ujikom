-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 09:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ukom`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `no` int(11) NOT NULL,
  `idmenu` char(5) NOT NULL,
  `nama_menu` varchar(40) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`no`, `idmenu`, `nama_menu`, `jumlah`) VALUES
(1, 'M-001', 'Soto Ayam', 1),
(2, 'M-001', 'Soto Ayam', 1),
(3, 'M-007', 'Soto Ayam', 1),
(4, 'M-001', 'Soto Ayam', 1),
(5, 'M-002', 'Soto Sapi', 2),
(6, 'M-003', 'Soto Sapi', 3),
(7, 'M-010', 'Soto Sapi', 3),
(8, 'M-001', 'Soto Ayam', 2),
(9, 'M-003', 'Soto Ayam', 2),
(10, 'M-006', 'Soto Ayam', 2),
(11, 'M-005', 'Sate Padang', 5),
(12, 'M-001', 'Sate Padang', 4),
(13, 'M-001', 'Soto Ayam', 3),
(14, 'M-004', 'Soto Ayam', 4),
(15, 'M-007', 'Soto Ayam', 8),
(16, 'M-001', 'Soto Ayam', 3),
(17, 'M-001', 'Soto Ayam', 4),
(18, 'M-001', 'Soto Ayam', 3),
(19, 'M-001', 'Soto Ayam', 3),
(20, 'M-001', 'Soto Ayam', 2),
(21, 'M-001', 'Soto Ayam', 2),
(22, 'M-001', 'Soto Ayam', 3),
(23, 'M-007', 'Soto Ayam', 4),
(24, 'M-001', 'Soto Ayam', 4),
(25, 'M-001', 'Soto Ayam', 3),
(26, 'M-001', 'Soto Ayam', 3),
(27, 'M-001', 'Soto Ayam', 3),
(28, 'M-001', 'Soto Ayam', 3),
(29, 'M-001', 'Soto Ayam', 3),
(30, 'M-001', 'Soto Ayam', 3),
(31, 'M-001', 'Soto Ayam', 3),
(32, 'M-001', 'Soto Ayam', 4),
(33, 'M-001', 'Soto Ayam', 1),
(34, 'M-001', 'Soto Ayam', 1),
(35, 'M-001', 'Soto Ayam', 1),
(36, 'M-001', 'Soto Ayam', 1),
(37, 'M-001', 'Soto Ayam', 1),
(38, 'M-001', 'Soto Ayam', 3),
(39, 'M-001', 'Soto Ayam', 3);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` char(5) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `nama_menu`, `harga`) VALUES
('M-001', 'Soto Ayam', 12000),
('M-002', 'Soto Sapi', 20000),
('M-003', 'Soto Padang', 10000),
('M-004', 'Mie Aceh', 12000),
('M-005', 'Sate Padang', 20000),
('M-006', 'Ayam Bakar', 10000),
('M-007', 'Teh Manis', 4000),
('M-008', 'Es Teh Manis', 5000),
('M-009', 'Sate Kambing', 20000),
('M-010', 'Teh Copa', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idpelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `nama_pelanggan`) VALUES
(7, 'Ade Rizki Saputra'),
(6, 'Ahmad Faqih '),
(1, 'Ahmad Hussain'),
(5, 'Arya Revicha'),
(13, 'Asyari Lubis'),
(8, 'Hasan Azhari'),
(12, 'Hasyim Baharrudin '),
(9, 'Hussain Al Jassmi'),
(10, 'Muhammad Hussain'),
(11, 'Mukhsin '),
(3, 'Parhan Hoidar'),
(2, 'Prabowo Widodo'),
(4, 'Rendra Ahmad Zam Zami');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `idmenu` char(5) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(40) NOT NULL,
  `no_telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_perusahaan`, `nama_perusahaan`, `no_telepon`) VALUES
(1, 'P.T. Bangun Jaya Food', '083456789012'),
(2, 'P.T.  Alfamacro Food', '081293134142');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_pesanan`
--

CREATE TABLE `tmp_pesanan` (
  `idpesan` int(11) NOT NULL,
  `nama_pelanggan` varchar(40) NOT NULL,
  `idmenu` char(5) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_transaksi`
--

CREATE TABLE `tmp_transaksi` (
  `id` int(11) NOT NULL,
  `idmenu` char(5) NOT NULL,
  `nama_menu` varchar(40) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(40) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` char(5) NOT NULL,
  `nama_pelanggan` varchar(40) NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `nama_pelanggan`, `total`, `bayar`) VALUES
('TR001', 'Parhan Hoidar', 12000, 100000),
('TR002', 'Ade Rizki Saputra', 12000, 0),
('TR003', 'Ade Rizki Saputra', 28000, 0),
('TR004', 'Ade Rizki Saputra', 36000, 0),
('TR005', 'Ade Rizki Saputra', 36000, 0),
('TR006', 'Ade Rizki Saputra', 36000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kd_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama`, `username`, `password`, `kd_user`) VALUES
(1, 'Juki', 'admin', 'admin123', 'admin'),
(2, 'Fitri', 'kasir', 'kasir123', 'kasir'),
(3, 'Ari', 'owner', 'owner123', 'owner'),
(4, 'Farhan Hoidar', 'waiter', 'waiter123', 'waiter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`no`),
  ADD KEY `nama_menu` (`nama_menu`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`),
  ADD UNIQUE KEY `nama_menu` (`nama_menu`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpelanggan`),
  ADD UNIQUE KEY `nama_pelanggan` (`nama_pelanggan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_namapelanggan` (`idpelanggan`) USING BTREE,
  ADD KEY `idmenu` (`idmenu`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `tmp_pesanan`
--
ALTER TABLE `tmp_pesanan`
  ADD PRIMARY KEY (`idpesan`);

--
-- Indexes for table `tmp_transaksi`
--
ALTER TABLE `tmp_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `nama_pelanggan` (`nama_pelanggan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idpelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tmp_pesanan`
--
ALTER TABLE `tmp_pesanan`
  MODIFY `idpesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tmp_transaksi`
--
ALTER TABLE `tmp_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`nama_menu`) REFERENCES `menu` (`nama_menu`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`idpelanggan`) REFERENCES `pelanggan` (`idpelanggan`) ON DELETE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`idmenu`) REFERENCES `menu` (`idmenu`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`nama_pelanggan`) REFERENCES `pelanggan` (`nama_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
