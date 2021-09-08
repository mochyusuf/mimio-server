-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2018 at 08:49 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mimio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `nomor_ktp_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `image_admin` varchar(255) NOT NULL,
  `tempat_lahir_admin` varchar(255) NOT NULL,
  `tanggal_lahir_admin` date NOT NULL,
  `alamat_admin` text NOT NULL,
  `nomor_telepon_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `nama_admin`, `nomor_ktp_admin`, `password_admin`, `image_admin`, `tempat_lahir_admin`, `tanggal_lahir_admin`, `alamat_admin`, `nomor_telepon_admin`, `email_admin`) VALUES
(1, 'admin', 'admin', '421412412', '21232f297a57a5a743894a0e4a801fc3', 'assets/image/admin/Violet2.png', 'Kuningan', '1990-08-08', 'Kuningan', '048612311', 'admin@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `id_pengendara` int(11) DEFAULT NULL,
  `nomor_kendaraan` varchar(255) DEFAULT NULL,
  `merk_kendaraan` varchar(255) DEFAULT NULL,
  `jenis_kendaraan` varchar(255) DEFAULT NULL,
  `tahun_kendaraan` year(4) DEFAULT NULL,
  `image_kendaraan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `nama_konsumen` varchar(255) NOT NULL,
  `password_konsumen` varchar(255) NOT NULL,
  `nomor_telepon_konsumen` varchar(255) NOT NULL,
  `email_konsumen` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `token_konsumen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(255) NOT NULL,
  `harga_makanan` int(11) NOT NULL,
  `id_restoran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `uuid` text NOT NULL,
  `id_restoran` int(11) NOT NULL,
  `id_pengendara` int(11) DEFAULT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_konsumen` int(11) NOT NULL,
  `status_pemesanan` enum('dipesan','diantar','dibatalkan','dibayar') NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `keterangan` text NOT NULL,
  `harga_makanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_detail`
--

CREATE TABLE `pemesanan_detail` (
  `id_pemesanan` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(255) NOT NULL,
  `harga_makanan` int(11) NOT NULL,
  `jumlah_makanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengendara`
--

CREATE TABLE `pengendara` (
  `id_pengendara` int(11) NOT NULL,
  `id_nomor_pengendara` varchar(255) NOT NULL,
  `nama_pengendara` varchar(255) NOT NULL,
  `password_pengendara` varchar(255) NOT NULL,
  `image_pengendara` varchar(255) NOT NULL,
  `alamat_pengendara` text NOT NULL,
  `nomor_telepon_pengendara` varchar(255) NOT NULL,
  `status_pengendara` enum('kosong','penuh','aktif','tidak-aktif') NOT NULL,
  `id_admin` int(11) NOT NULL,
  `token_pengendara` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peta`
--

CREATE TABLE `peta` (
  `id_peta` int(11) NOT NULL,
  `node_terhubung` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peta`
--

INSERT INTO `peta` (`id_peta`, `node_terhubung`, `latitude`, `longitude`) VALUES
(1, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 2,\r\n            \"jarak\": 300\r\n        },\r\n        {\r\n            \"node\": 4,\r\n            \"jarak\": 110\r\n        }\r\n    ]\r\n}', -7.01523, 108.36328),
(2, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 1,\r\n            \"jarak\": 300\r\n        },\r\n        {\r\n            \"node\": 12,\r\n            \"jarak\": 145\r\n        }\r\n    ]\r\n}', -7.01787, 108.36313),
(3, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 4,\r\n            \"jarak\": 185\r\n        },\r\n        {\r\n            \"node\": 12,\r\n            \"jarak\": 193\r\n        },\r\n        {\r\n            \"node\": 11,\r\n            \"jarak\": 186\r\n        }\r\n    ]\r\n}', 7.01624, 108.3657),
(4, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 1,\r\n            \"jarak\": 107\r\n        },\r\n        {\r\n            \"node\": 3,\r\n            \"jarak\": 185\r\n        },\r\n        {\r\n            \"node\": 5,\r\n            \"jarak\": 83\r\n        }\r\n    ]\r\n}', -7.0156, 108.36415),
(5, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 4,\r\n            \"jarak\": 83\r\n        },\r\n        {\r\n            \"node\": 6,\r\n            \"jarak\": 60 \r\n        }\r\n    ]\r\n}', -7.01488, 108.36441),
(6, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 5,\r\n            \"jarak\": 60\r\n        },\r\n        {\r\n            \"node\": 7,\r\n            \"jarak\": 39  \r\n        }\r\n    ]\r\n}', -7.01486, 108.36492),
(7, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 6,\r\n            \"jarak\": 39\r\n        },\r\n        {\r\n            \"node\": 8,\r\n            \"jarak\": 92   \r\n        }\r\n    ]\r\n}', -7.0145, 108.36492),
(8, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 7,\r\n            \"jarak\": 92\r\n        },\r\n        {\r\n            \"node\": 9,\r\n            \"jarak\": 40    \r\n        }\r\n    ]\r\n}', -7.01446, 108.36576),
(9, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 8,\r\n            \"jarak\": 40\r\n        },\r\n        {\r\n            \"node\": 10,\r\n            \"jarak\": 168     \r\n        },\r\n        {\r\n            \"node\": 20,\r\n            \"jarak\": 113      \r\n        }\r\n    ]\r\n}', -7.01481, 108.36583),
(10, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 9,\r\n            \"jarak\": 168\r\n        },\r\n        {\r\n            \"node\": 10,\r\n            \"jarak\": 234      \r\n        }\r\n    ]\r\n}', -7.01481, 108.36734),
(11, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 3,\r\n            \"jarak\": 186       \r\n        },\r\n        {\r\n            \"node\": 10,\r\n            \"jarak\": 234\r\n        },\r\n        {\r\n            \"node\": 13,\r\n            \"jarak\": 119        \r\n        },\r\n        {\r\n            \"node\": 17,\r\n            \"jarak\": 199         \r\n        }\r\n    ]\r\n}', -7.01691, 108.36724),
(12, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 2,\r\n            \"jarak\": 143        \r\n        },\r\n        {\r\n            \"node\": 3,\r\n            \"jarak\": 193 \r\n        },\r\n        {\r\n            \"node\": 13,\r\n            \"jarak\": 386         \r\n        }\r\n    ]\r\n}', -7.01719, 108.36424),
(13, '{\r\n    \"relasi\": [\r\n        {\r\n        \"node\": 11,\r\n        \"jarak\": 119          \r\n        },\r\n        {\r\n            \"node\": 12,\r\n            \"jarak\": 386         \r\n        },\r\n        {\r\n            \"node\": 14,\r\n            \"jarak\": 187         \r\n        }\r\n    ]\r\n}', -7.01798, 108.36723),
(14, '{\r\n    \"relasi\": [\r\n        {\r\n        \"node\": 15,\r\n        \"jarak\": 133           \r\n        }\r\n    ]\r\n}', -7.01966, 108.36739),
(15, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 14,\r\n            \"jarak\": 133           \r\n        },\r\n        {\r\n            \"node\": 16,\r\n            \"jarak\": 30            \r\n        }\r\n    ]\r\n}', -7.01976, 108.36859),
(16, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 15,\r\n            \"jarak\": 30           \r\n        },\r\n        {\r\n            \"node\": 17,\r\n            \"jarak\": 235             \r\n        },\r\n        {\r\n            \"node\": 18,\r\n            \"jarak\": 201              \r\n        }\r\n    ]\r\n}', -7.01975, 108.36886),
(17, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 11,\r\n            \"jarak\": 199            \r\n        },\r\n        {\r\n            \"node\": 16,\r\n            \"jarak\": 235             \r\n        },\r\n        {\r\n            \"node\": 19,\r\n            \"jarak\": 231               \r\n        }\r\n    ]\r\n}', -7.01764, 108.36891),
(18, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 16,\r\n            \"jarak\": 201             \r\n        },\r\n        {\r\n            \"node\": 19,\r\n            \"jarak\": 153             \r\n        }\r\n    ]\r\n}', -7.01988, 108.37069),
(20, '{\r\n    \"relasi\": [\r\n        {\r\n            \"node\": 9,\r\n            \"jarak\": 113              \r\n        }\r\n    ]\r\n}', -7.01581, 108.36594);

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `id_restoran` int(11) NOT NULL,
  `nama_restoran` varchar(255) NOT NULL,
  `alamat_restoran` text NOT NULL,
  `image_restoran` varchar(255) NOT NULL,
  `nomor_telepon_restoran` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `data_transaksi` text NOT NULL,
  `data_konsumen` text NOT NULL,
  `data_pengendara` text NOT NULL,
  `data_restoran` text NOT NULL,
  `data_makanan` text NOT NULL,
  `total_harga` int(11) NOT NULL,
  `total_dibayar` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`),
  ADD KEY `id_pengendara` (`id_pengendara`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`),
  ADD KEY `id_restoran` (`id_restoran`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_restoran` (`id_restoran`),
  ADD KEY `id_konsumen` (`id_konsumen`),
  ADD KEY `id_pengendara` (`id_pengendara`);

--
-- Indexes for table `pemesanan_detail`
--
ALTER TABLE `pemesanan_detail`
  ADD PRIMARY KEY (`id_pemesanan`,`id_makanan`) USING BTREE,
  ADD KEY `id_makanan` (`id_makanan`);

--
-- Indexes for table `pengendara`
--
ALTER TABLE `pengendara`
  ADD PRIMARY KEY (`id_pengendara`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `peta`
--
ALTER TABLE `peta`
  ADD PRIMARY KEY (`id_peta`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id_restoran`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengendara`
--
ALTER TABLE `pengendara`
  MODIFY `id_pengendara` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peta`
--
ALTER TABLE `peta`
  MODIFY `id_peta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id_restoran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`id_pengendara`) REFERENCES `pengendara` (`id_pengendara`);

--
-- Constraints for table `makanan`
--
ALTER TABLE `makanan`
  ADD CONSTRAINT `makanan_ibfk_1` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id_restoran`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id_restoran`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_konsumen`) REFERENCES `konsumen` (`id_konsumen`),
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`id_pengendara`) REFERENCES `pengendara` (`id_pengendara`);

--
-- Constraints for table `pemesanan_detail`
--
ALTER TABLE `pemesanan_detail`
  ADD CONSTRAINT `pemesanan_detail_ibfk_1` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id_makanan`),
  ADD CONSTRAINT `pemesanan_detail_ibfk_2` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`);

--
-- Constraints for table `pengendara`
--
ALTER TABLE `pengendara`
  ADD CONSTRAINT `pengendara_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `restoran`
--
ALTER TABLE `restoran`
  ADD CONSTRAINT `restoran_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
