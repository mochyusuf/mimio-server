-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Sep 2021 pada 03.51
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `admin`
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
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `nama_admin`, `nomor_ktp_admin`, `password_admin`, `image_admin`, `tempat_lahir_admin`, `tanggal_lahir_admin`, `alamat_admin`, `nomor_telepon_admin`, `email_admin`) VALUES
(1, 'admin', 'Jajang ', '3210030808900021', '21232f297a57a5a743894a0e4a801fc3', 'assets/image/admin/Violet2.png', 'Majalengka', '1990-08-08', 'Kuningan', '048612311', 'jajang@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
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

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `id_pengendara`, `nomor_kendaraan`, `merk_kendaraan`, `jenis_kendaraan`, `tahun_kendaraan`, `image_kendaraan`) VALUES
(1, 1, 'E 4321 VY ', 'Motor', 'Bebek', 2014, 'assets/image/kendaraan/1001.png'),
(2, 2, '02-20180218', 'Yamaha', 'Mio', 2010, 'assets/image/kendaraan/1002.png'),
(3, 3, '03-20180218', 'Honda', 'Beat', 2017, 'assets/image/kendaraan/1003.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `nama_konsumen` varchar(255) NOT NULL,
  `image_konsumen` varchar(255) NOT NULL,
  `password_konsumen` varchar(255) NOT NULL,
  `nomor_telepon_konsumen` varchar(255) NOT NULL,
  `email_konsumen` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `token_konsumen` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `nama_konsumen`, `image_konsumen`, `password_konsumen`, `nomor_telepon_konsumen`, `email_konsumen`, `tanggal`, `token_konsumen`) VALUES
(1, 'Livita Fan Nova', 'assets/image/konsumen/nova.JPG', '202cb962ac59075b964b07152d234b70', '089667503092', 'livitanova@gmail.com', '2018-09-05 02:21:31', NULL),
(2, 'Galih Aulia Rahman', 'assets/image/konsumen/galih.JPG', '202cb962ac59075b964b07152d234b70', '089660356333', 'galiharahman2@gmail.com', '2018-09-05 09:21:12', NULL),
(3, 'Donny Dwi Nurwiguna', 'assets/image/konsumen/1003.png', '202cb962ac59075b964b07152d234b70', '083824554526', 'nurwiguna19@gmail.com', '2018-09-06 03:53:18', 'fN_XSYUU8Sg:APA91bFyLly4W3arF7Pksdf_1GfjwESeNcCHal7G4o4ML6C3partUMPf6XcKTluI0fHOEUrcYbz7VsiLTHvdtpbEQqjHd3mFF3nxXPHGA6Q48Dx--rG_QaML7GB1-O52HxWuii1SHbV9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(255) NOT NULL,
  `harga_makanan` int(11) NOT NULL,
  `id_restoran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `harga_makanan`, `id_restoran`) VALUES
(1, 'Batagor', 6000, 2),
(2, 'Siomay', 6000, 2),
(3, 'Martabak Mini Rasa Coklat', 3000, 3),
(9, 'Martabak Mini Rasa Kacang', 3000, 3),
(10, 'Martabak Mini Rasa Keju', 5000, 3),
(11, 'Kepiting', 80000, 5),
(12, 'Bebek', 20000, 5),
(13, 'Martabak Mini Rasa Kismis', 4000, 3),
(14, 'Martabak Mini Rasa Pisang Coklat', 5000, 3),
(15, 'Martabak Mini Rasa Kacang Coklat', 5000, 3),
(17, 'Cumi-Cumi ', 30000, 5),
(18, 'Ayam', 17000, 5),
(19, 'Pecel Lele', 13000, 5),
(20, 'Nasi', 5000, 5),
(21, 'Keju Lumer', 17000, 6),
(22, 'Coklat Lumer', 17000, 6),
(23, 'Keju & Coklat Lumer', 17000, 6),
(24, 'Es Kepal Milo	', 12000, 7),
(25, 'Es Kepal Dancow	', 12000, 7),
(26, 'Suket Ori	', 7000, 7),
(27, 'Suket Oreo', 9000, 7),
(28, 'Suket Milo', 10000, 7),
(29, 'Suket Dancow', 10000, 7),
(30, 'Pop Ice', 7000, 7),
(31, 'Patrick', 6000, 7),
(32, 'Otak-Otak', 6000, 7),
(33, 'Pisang Keju', 7000, 7),
(34, 'Kentang Goreng', 7000, 7),
(35, 'Baso Goreng', 7000, 7),
(36, 'Sosis Goreng', 7000, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `uuid` text NOT NULL,
  `id_restoran` int(11) NOT NULL,
  `id_pengendara` int(11) DEFAULT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `id_konsumen` int(11) NOT NULL,
  `status_pemesanan` enum('dipesan','diantar','dibatalkan','dibayar') NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `keterangan` text NOT NULL,
  `harga_makanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `uuid`, `id_restoran`, `id_pengendara`, `tanggal`, `id_konsumen`, `status_pemesanan`, `latitude`, `longitude`, `keterangan`, `harga_makanan`) VALUES
(71, 'ec126fb6-2ad0-4b01-a241-7a3ca1c19ccb', 6, 2, '2018-10-26 06:08:30', 1, 'dibatalkan', -7.017838940703526, 108.36576221048931, '{\"user\":\"admin\",\"pesan\":\"Makanan Habis\"}', 17000),
(72, 'b900fdf8-ff05-43bd-ad26-20a3a0559391', 6, 1, '2018-10-26 07:11:00', 1, 'dibayar', -7.017829186167555, 108.36576112304438, '', 17000),
(73, 'a3753a3a-8e42-4756-9187-098038558609', 6, 1, '2018-10-26 14:09:21', 2, 'dibayar', -7.017851826974012, 108.36576110029273, '', 17000),
(74, '2b873189-6e1d-4d23-bace-77050e1bacd6', 2, 1, '2018-10-26 15:06:42', 3, 'dibatalkan', -7.016825616527485, 108.36810001146392, '{\"user\":\"admin\",\"pesan\":\"Pesanan Dibatalkan\"}', 18000),
(75, '6e6db29a-b3f4-4d84-8f23-f6655023b7b8', 2, 1, '2018-10-26 15:09:06', 3, 'dibatalkan', -7.016834696741986, 108.36812395953163, '{\"user\":\"admin\",\"pesan\":\"Restoran Tutup\"}', 18000),
(76, '95798608-dd26-4c44-83f8-7a0d9522131a', 2, 1, '2018-10-26 15:18:24', 3, 'dibatalkan', -7.016809919687019, 108.36812569118605, '{\"user\":\"admin\",\"pesan\":\"Restoran Tutup\"}', 12000),
(77, '7132e70f-a361-446b-a2c8-588b89bdac9e', 2, 1, '2018-10-26 15:50:45', 3, 'dibatalkan', -7.016808316070544, 108.36814143085324, '{\"user\":\"admin\",\"pesan\":\"Restoran Tutup\"}', 12000),
(78, '475d92d8-346e-4242-b710-ed4be4838a8f', 3, 3, '2018-10-27 04:28:56', 1, 'dibatalkan', -7.0175725276135745, 108.37056344919738, '{\"user\":\"admin\",\"pesan\":\"Restoran Tutup\"}', 9000),
(79, '4db5ee59-a950-48f7-8235-664e8e5a55f1', 5, 2, '2018-10-29 06:31:33', 2, 'dibatalkan', -7.016515520742221, 108.36291737860637, '{\"user\":\"admin\",\"pesan\":\"Restoran Tutup\"}', 80000),
(80, '3cb25b70-f529-4566-be96-1a820ba50338', 6, 1, '2018-10-29 06:38:44', 2, 'dibatalkan', -7.01655101186811, 108.36290383652995, '{\"user\":\"admin\",\"pesan\":\"Restoran Tutup\"}', 17000),
(81, 'ceb18f9d-970b-4459-8e38-0907ec5f1d39', 2, 2, '2018-10-31 06:50:05', 2, 'dibatalkan', -7.01655450800935, 108.3629065781465, '{\"user\":\"admin\",\"pesan\":\"Restoran Tutup\"}', 6000),
(82, 'd3a9ab1d-df58-4b94-a706-db58d18cc632', 2, 1, '2018-10-31 12:48:14', 3, 'dibatalkan', -7.016918485532389, 108.36815534113788, '{\"user\":\"admin\",\"pesan\":\"Pesanan Dibatalkan\"}', 12000),
(83, 'a851d3c5-d955-4c10-a068-072efbf31a3c', 2, 1, '2018-10-31 12:53:25', 3, 'dibatalkan', -7.016876293015682, 108.36813147750071, '{\"user\":\"admin\",\"pesan\":\"Pesanan Dibatalkan\"}', 18000),
(84, '9c1e0648-985f-4f8d-8d5e-51920cbca7d5', 2, NULL, '2018-11-02 02:35:42', 3, 'dibatalkan', -7.016899539273156, 108.3681379058742, '{\"user\":\"admin\",\"pesan\":\"Pesanan Dibatalkan\"}', 6000),
(85, 'bf151433-874c-44c4-9c8b-b6683d7c1c0f', 2, NULL, '2018-11-02 03:21:08', 3, 'dibatalkan', -7.0168736706397175, 108.36811956040826, '{\"user\":\"admin\",\"pesan\":\"Restoran Tutup\"}', 12000),
(86, '524bcd09-9aa8-43bd-996a-0de9843c8626', 2, NULL, '2018-11-02 03:26:07', 3, 'dibatalkan', -7.016869205387821, 108.3681260325398, '{\"user\":\"admin\",\"pesan\":\"Pesanan Dibatalkan\"}', 18000),
(87, '1123cb33-b9af-4a4e-9278-768d38941f23', 2, NULL, '2018-11-02 03:27:37', 3, 'dibatalkan', -7.016859294276836, 108.36813371779404, '{\"user\":\"admin\",\"pesan\":\"Restoran Tutup\"}', 18000),
(88, '706800ab-e18b-40e4-b065-8b01b3ce353a', 2, NULL, '2018-11-02 03:28:40', 3, 'dibatalkan', -7.016853263085156, 108.36813154813282, '{\"user\":\"admin\",\"pesan\":\"Pesanan Dibatalkan\"}', 12000),
(89, '20d70a01-49b9-4b91-8992-c7f23a8c9bca', 2, NULL, '2018-11-02 03:31:45', 3, 'dibatalkan', -7.016833965378322, 108.36812894683501, '{\"user\":\"admin\",\"pesan\":\"Pesanan Dibatalkan\"}', 30000),
(90, 'b8b32147-64cf-461b-b167-b717b8faef3d', 2, NULL, '2018-11-02 03:34:37', 3, 'dibatalkan', -7.01683323508098, 108.36813018577462, '{\"user\":\"admin\",\"pesan\":\"Restoran Tutup\"}', 18000),
(91, 'a35588c6-97af-4134-a4be-1088732f781b', 2, NULL, '2018-11-02 03:41:19', 3, 'dibatalkan', -7.0168222795769095, 108.36807391438347, '{\"user\":\"admin\",\"pesan\":\"Pesanan Dibatalkan\"}', 18000),
(92, '59cda277-2b90-4380-b6c7-727771b96182', 2, NULL, '2018-11-02 03:43:39', 3, 'dibatalkan', -7.016817145656135, 108.36807792778666, '{\"user\":\"admin\",\"pesan\":\"Pesanan Dibatalkan\"}', 18000),
(93, '57a042bb-797e-44b0-b2da-d4de495f7c2a', 2, NULL, '2018-11-02 03:44:04', 3, 'dibatalkan', -7.01681920188055, 108.36807952818309, '{\"user\":\"admin\",\"pesan\":\"Makanan Habis\"}', 90000),
(94, '562f0c0d-2a8b-430f-8a53-21b80ed360cb', 5, 1, '2018-11-02 03:56:08', 3, 'dibatalkan', -7.016898853389373, 108.36807606894111, '{\"user\":\"konsumen\",\"pesan\":\"Lama\"}', 240000),
(95, '96bcc906-ecc1-4234-bc2f-a0a93ea78a6c', 2, 1, '2018-11-02 04:54:45', 3, 'dibatalkan', -7.0169455805995895, 108.36813576071994, '{\"user\":\"admin\",\"pesan\":\"Pesanan Dibatalkan\"}', 48000),
(96, '8e573826-fd4c-4b19-967e-1515cdbf73be', 2, NULL, '2018-11-02 05:46:42', 3, 'dibatalkan', -7.016918871385667, 108.3681550379205, '{\"user\":\"konsumen\",\"pesan\":\"gfddf\"}', 12000),
(97, '5a38ca5d-7dcc-47b1-be4a-39c1324d813b', 2, NULL, '2018-11-02 05:48:28', 3, 'dibatalkan', -7.016921832860293, 108.36815437086234, '{\"user\":\"konsumen\",\"pesan\":\"hisi\"}', 12000),
(98, 'fd57b095-8396-490d-9764-3db9ed863c72', 2, NULL, '2018-11-02 05:58:56', 3, 'dibatalkan', -7.016904062592968, 108.36813775030632, '{\"user\":\"konsumen\",\"pesan\":\"dffg\\n\"}', 18000),
(99, '86f532f4-2d12-47f7-a31c-15bc4b5f2adf', 2, NULL, '2018-11-02 05:59:28', 3, 'dibatalkan', -7.01690525182701, 108.36813538682715, '{\"user\":\"konsumen\",\"pesan\":\"fff\"}', 18000),
(100, 'b4cade7b-de84-4724-a32a-f1cbabf81d8c', 2, NULL, '2018-11-02 06:19:49', 3, 'dibatalkan', -7.016899690413668, 108.3682056646643, '{\"user\":\"konsumen\",\"pesan\":\"gfew\"}', 18000),
(101, 'c587808a-b720-42ea-9b51-ab44a0b39f5f', 2, 1, '2018-11-02 06:37:35', 3, 'dibayar', -7.0168970703727025, 108.36818246074286, '', 18000),
(102, '30955bdd-df4e-422f-a758-e0ea82adb7bb', 2, 1, '2018-11-02 06:44:26', 3, 'dibayar', -7.016880388128198, 108.36816994672604, '', 54000),
(103, '6d745d28-b851-4013-b27c-e520aebc350b', 2, 1, '2018-11-02 06:47:50', 3, 'dibayar', -7.016906952043461, 108.36815527538604, '', 18000),
(104, '8256166c-b5a2-4baa-be0e-b6de730a5a3b', 2, 1, '2018-11-02 06:54:37', 3, 'dibatalkan', -7.016913069005203, 108.36816202161579, '{\"user\":\"admin\",\"pesan\":\"Pesanan Dibatalkan\"}', 18000),
(105, 'f0707edf-42a2-41df-b632-dc222be5d928', 3, 1, '2018-11-02 06:57:33', 3, 'dibayar', -7.0169396191571725, 108.36815907047925, '', 12000),
(106, '9ea777d2-4844-44b4-a96d-e718ad3eb6f7', 5, 1, '2018-11-02 07:26:05', 3, 'dibayar', -7.016921422576691, 108.36821461303154, '', 400000),
(107, '42928f50-1239-4f22-afba-b1bd7e4baf86', 2, 1, '2018-11-02 07:33:29', 3, 'dibayar', -7.01698570047802, 108.36822349030413, '', 48000),
(108, '341922a6-ce33-4235-8ca5-77a092fa6712', 2, NULL, '2018-11-02 07:41:04', 3, 'dibatalkan', -7.016990882037192, 108.36823371379141, '{\"user\":\"admin\",\"pesan\":\"Pesanan Dibatalkan\"}', 42000),
(109, 'f14b756e-7d41-47f3-a08a-fbe6cb60839c', 2, 1, '2018-11-02 07:44:37', 3, 'dibayar', -7.0169838007584735, 108.36823355272544, '{\"user\":\"konsumen\",\"pesan\":\"Lama\"}', 30000),
(110, 'dcba43da-4272-494c-b42d-9335b4694507', 2, NULL, '2018-11-02 07:55:33', 3, 'dibatalkan', -7.016977116091121, 108.36824259276534, '{\"user\":\"konsumen\",\"pesan\":\"tes\"}', 42000),
(111, 'a50a9f77-2012-4364-9436-04c7699fe702', 2, 1, '2018-11-02 07:56:16', 3, 'dibayar', -7.016971496859624, 108.36823626347474, '', 18000),
(112, 'ad8cfffd-08bf-4e18-ae48-f2f4805f1f14', 2, 1, '2018-11-02 07:59:36', 3, 'dibayar', -7.016944649275075, 108.36823537365777, '', 30000),
(113, '30e19a27-43e5-44f8-b0fc-bd21615e1db0', 2, 1, '2018-11-02 08:08:48', 3, 'dibayar', -7.016919108245393, 108.36823438351016, '', 18000),
(114, 'ee4fe318-56ed-43be-a8e8-fd4eed54f8b3', 2, 1, '2018-11-02 08:19:19', 3, 'dibatalkan', -7.016991000359494, 108.36819971953041, '{\"user\":\"admin\",\"pesan\":\"Pesanan Dibatalkan\"}', 24000),
(115, '90257b96-b634-4a96-9828-9626c6d0eec7', 2, 3, '2018-11-02 08:22:15', 3, 'dibayar', -7.017004149793132, 108.36818303515479, '', 36000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_detail`
--

CREATE TABLE `pemesanan_detail` (
  `id_pemesanan` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(255) NOT NULL,
  `harga_makanan` int(11) NOT NULL,
  `jumlah_makanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan_detail`
--

INSERT INTO `pemesanan_detail` (`id_pemesanan`, `id_makanan`, `nama_makanan`, `harga_makanan`, `jumlah_makanan`) VALUES
(71, 21, 'Keju Lumer', 17000, 1),
(72, 21, 'Keju Lumer', 17000, 1),
(73, 22, 'Coklat Lumer', 17000, 1),
(74, 1, 'Batagor', 6000, 3),
(75, 1, 'Batagor', 6000, 3),
(76, 1, 'Batagor', 6000, 2),
(77, 1, 'Batagor', 6000, 2),
(78, 3, 'Martabak Mini Rasa Coklat', 3000, 3),
(79, 11, 'Kepiting', 80000, 1),
(80, 21, 'Keju Lumer', 17000, 1),
(81, 1, 'Batagor', 6000, 1),
(82, 1, 'Batagor', 6000, 2),
(83, 1, 'Batagor', 6000, 3),
(84, 1, 'Batagor', 6000, 1),
(85, 1, 'Batagor', 6000, 2),
(86, 1, 'Batagor', 6000, 3),
(87, 1, 'Batagor', 6000, 3),
(88, 1, 'Batagor', 6000, 2),
(89, 1, 'Batagor', 6000, 2),
(89, 2, 'Siomay', 6000, 3),
(90, 1, 'Batagor', 6000, 3),
(91, 1, 'Batagor', 6000, 3),
(92, 1, 'Batagor', 6000, 3),
(93, 1, 'Batagor', 6000, 12),
(93, 2, 'Siomay', 6000, 3),
(94, 11, 'Kepiting', 80000, 3),
(95, 1, 'Batagor', 6000, 4),
(95, 2, 'Siomay', 6000, 4),
(96, 1, 'Batagor', 6000, 2),
(97, 1, 'Batagor', 6000, 2),
(98, 1, 'Batagor', 6000, 3),
(99, 1, 'Batagor', 6000, 3),
(100, 1, 'Batagor', 6000, 3),
(101, 1, 'Batagor', 6000, 3),
(102, 1, 'Batagor', 6000, 5),
(102, 2, 'Siomay', 6000, 4),
(103, 1, 'Batagor', 6000, 3),
(104, 1, 'Batagor', 6000, 3),
(105, 3, 'Martabak Mini Rasa Coklat', 3000, 4),
(106, 11, 'Kepiting', 80000, 5),
(107, 1, 'Batagor', 6000, 6),
(107, 2, 'Siomay', 6000, 2),
(108, 1, 'Batagor', 6000, 4),
(108, 2, 'Siomay', 6000, 3),
(109, 1, 'Batagor', 6000, 3),
(109, 2, 'Siomay', 6000, 2),
(110, 1, 'Batagor', 6000, 4),
(110, 2, 'Siomay', 6000, 3),
(111, 1, 'Batagor', 6000, 3),
(112, 1, 'Batagor', 6000, 4),
(112, 2, 'Siomay', 6000, 1),
(113, 1, 'Batagor', 6000, 3),
(114, 1, 'Batagor', 6000, 4),
(115, 1, 'Batagor', 6000, 4),
(115, 2, 'Siomay', 6000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengendara`
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
  `token_pengendara` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengendara`
--

INSERT INTO `pengendara` (`id_pengendara`, `id_nomor_pengendara`, `nama_pengendara`, `password_pengendara`, `image_pengendara`, `alamat_pengendara`, `nomor_telepon_pengendara`, `status_pengendara`, `id_admin`, `token_pengendara`) VALUES
(1, '01-20180218', 'Ade ', '202cb962ac59075b964b07152d234b70', 'assets/image/pengendara/1002.png', 'Desa Sukamukti', '085793715294', 'kosong', 1, 'em5VdrjZvTk:APA91bHej2aZUMttanTMkSKVgspwndrCurGcNChXew4hSd8OdrBDaLMekOBULiDhDWa4QPq570XY7gPGjYaandmDNCENrhKIL3A5PqnHidJq-y1KZaqxphsxWzk2Uq00DA2ptNkoyuGF'),
(2, '02-20180218 ', 'Endang', '202cb962ac59075b964b07152d234b70', 'assets/image/pengendara/1002.png', 'Desa Cipulus', '085351387319', 'kosong', 1, NULL),
(3, '03-20180218 ', 'Romli', '202cb962ac59075b964b07152d234b70', 'assets/image/pengendara/100.png', 'Desa Cikijing', '081222340457', 'kosong', 1, 'doaxTM8oYkM:APA91bHFZicU0B_MBwKWFGVVC_Pm3lxbvqCHY8Mh-WEA5ewNSLMz9FfJmjAa7CxRoAVxLtQHEecLVAi14MjSFkD38Q2Hw05w-V-O0cG7tuRELUT9zN48jhs0ajJSJsaGgZNyzdbKCFMk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `restoran`
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
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `restoran`
--

INSERT INTO `restoran` (`id_restoran`, `nama_restoran`, `alamat_restoran`, `image_restoran`, `nomor_telepon_restoran`, `latitude`, `longitude`, `id_admin`, `tanggal`) VALUES
(2, 'Batagor / Siomay Bandung', 'Jl. Raya Abdul Fatah Cikijing, Depan Bank BNI Cikijing.', 'assets/image/restoran/2.png', '089660232323', -7.016514, 108.366142, 1, '2018-09-04 15:53:11'),
(3, 'Martabak Mini', 'Jl. Raya Abdul Fatah Cikijing, Depan Mesjid Al-Akbar.', 'assets/image/restoran/3.jpg', '0896602300122', -7.0172561432442, 108.3679497241, 1, '2018-09-04 15:57:06'),
(5, 'Sea Food Ali Action', 'Jl. Raya Abdul Fatah Cikijing, Samping SDN II Cikijing.', 'assets/image/restoran/5.jpg', '085793715292', -7.018144, 108.369929, 1, '2018-09-04 16:07:47'),
(6, 'UBI LUMER ', 'Jl. Raya Abdul Fatah Cikijing, Depan Bank BNI Cikijing.', 'assets/image/restoran/WhatsApp_Image_2018-08-23_at_16_39_30_-_Copy.jpeg', '085793001324', -7.016688, 108.366526, 1, '2018-10-26 04:59:32'),
(7, 'WB Cipanji ( Aneka Minuman & Aneka Cemilan )', 'Jl. Cikijing – Darma No.86 Cikijing', 'assets/image/restoran/WhatsApp_Image_2018-08-23_at_16_39_30(1).jpeg', '089660256000', -7.01876, 108.372285, 1, '2018-10-26 07:50:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
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
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pemesanan`, `data_transaksi`, `data_konsumen`, `data_pengendara`, `data_restoran`, `data_makanan`, `total_harga`, `total_dibayar`, `tanggal`) VALUES
(1, 0, '{\"latitude_konsumen\":-7.0178260965928345,\"longitude_konsumen\":108.3655613422149,\"tanggal\":\"2018-09-22 15:11:06\"}', '{\"konsumen\":\"tes.com.mimiorider.Model.Konsumen_Model@7e8a74b\"}', '{\"pengendara\":\"tes.com.mimiorider.Model.Pengendara@a4528\"}', '{\"restoran\":\"tes.com.mimiorider.Model.Restoran_Model@a61d241\"}', '{\"makanan\":\"[Ltes.com.mimiorider.Model.Makanan_Model;@8fc83e6\"}', 98000, 105000, '2018-09-24 10:24:28'),
(2, 0, '{\"latitude_konsumen\":-7.017829186167555,\"longitude_konsumen\":108.36576112304438,\"tanggal\":\"2018-10-26 07:11:00\"}', '{\"konsumen\":\"tes.com.mimiorider.Model.Konsumen_Model@59689d6\"}', '{\"pengendara\":\"tes.com.mimiorider.Model.Pengendara@9c1457\"}', '{\"restoran\":\"tes.com.mimiorider.Model.Restoran_Model@2f15b44\"}', '{\"makanan\":\"[Ltes.com.mimiorider.Model.Makanan_Model;@52ac42d\"}', 17000, 24000, '2018-10-26 07:13:25'),
(3, 0, '{\"latitude_konsumen\":-7.017851826974012,\"longitude_konsumen\":108.36576110029273,\"tanggal\":\"2018-10-26 14:09:21\"}', '{\"konsumen\":\"tes.com.mimiorider.Model.Konsumen_Model@ee22915\"}', '{\"pengendara\":\"tes.com.mimiorider.Model.Pengendara@a0e142a\"}', '{\"restoran\":\"tes.com.mimiorider.Model.Restoran_Model@49f921b\"}', '{\"makanan\":\"[Ltes.com.mimiorider.Model.Makanan_Model;@2579fb8\"}', 17000, 24000, '2018-10-26 14:20:25'),
(4, 0, '{\"latitude_konsumen\":-7.0168970703727025,\"longitude_konsumen\":108.36818246074286,\"tanggal\":\"2018-11-02 06:37:35\"}', '{\"konsumen\":\"tes.com.mimiorider.Model.Konsumen_Model@d66c112\"}', '{\"pengendara\":\"tes.com.mimiorider.Model.Pengendara@97fe0e3\"}', '{\"restoran\":\"tes.com.mimiorider.Model.Restoran_Model@48a1ae0\"}', '{\"makanan\":\"[Ltes.com.mimiorider.Model.Makanan_Model;@c3de199\"}', 18000, 25000, '2018-11-02 06:43:52'),
(5, 0, '{\"latitude_konsumen\":-7.016880388128198,\"longitude_konsumen\":108.36816994672604,\"tanggal\":\"2018-11-02 06:44:26\"}', '{\"konsumen\":\"tes.com.mimiorider.Model.Konsumen_Model@ed2fd2b\"}', '{\"pengendara\":\"tes.com.mimiorider.Model.Pengendara@33b1588\"}', '{\"restoran\":\"tes.com.mimiorider.Model.Restoran_Model@fe7cb21\"}', '{\"makanan\":\"[Ltes.com.mimiorider.Model.Makanan_Model;@21bbb46\"}', 54000, 61000, '2018-11-02 06:45:10'),
(6, 0, '{\"latitude_konsumen\":-7.016906952043461,\"longitude_konsumen\":108.36815527538604,\"tanggal\":\"2018-11-02 06:47:50\"}', '{\"konsumen\":\"tes.com.mimiorider.Model.Konsumen_Model@c17f4ea\"}', '{\"pengendara\":\"tes.com.mimiorider.Model.Pengendara@9cec3db\"}', '{\"restoran\":\"tes.com.mimiorider.Model.Restoran_Model@3184e78\"}', '{\"makanan\":\"[Ltes.com.mimiorider.Model.Makanan_Model;@2122951\"}', 18000, 25000, '2018-11-02 06:50:49'),
(7, 0, '{\"latitude_konsumen\":-7.0169396191571725,\"longitude_konsumen\":108.36815907047925,\"tanggal\":\"2018-11-02 06:57:33\"}', '{\"konsumen\":\"tes.com.mimiorider.Model.Konsumen_Model@10d9341\"}', '{\"pengendara\":\"tes.com.mimiorider.Model.Pengendara@aebb0e6\"}', '{\"restoran\":\"tes.com.mimiorider.Model.Restoran_Model@e249627\"}', '{\"makanan\":\"[Ltes.com.mimiorider.Model.Makanan_Model;@47e00d4\"}', 12000, 19000, '2018-11-02 07:25:10'),
(8, 0, '{\"latitude_konsumen\":-7.016921422576691,\"longitude_konsumen\":108.36821461303154,\"tanggal\":\"2018-11-02 07:26:05\"}', '{\"konsumen\":\"tes.com.mimiorider.Model.Konsumen_Model@84c9fe7\"}', '{\"pengendara\":\"tes.com.mimiorider.Model.Pengendara@502a794\"}', '{\"restoran\":\"tes.com.mimiorider.Model.Restoran_Model@1a8a23d\"}', '{\"makanan\":\"[Ltes.com.mimiorider.Model.Makanan_Model;@e69da32\"}', 400000, 407000, '2018-11-02 07:29:13'),
(9, 0, '{\"latitude_konsumen\":-7.01698570047802,\"longitude_konsumen\":108.36822349030413,\"tanggal\":\"2018-11-02 07:33:29\"}', '{\"konsumen\":\"tes.com.mimiorider.Model.Konsumen_Model@49e9fa8\"}', '{\"pengendara\":\"tes.com.mimiorider.Model.Pengendara@1f5ac1\"}', '{\"restoran\":\"tes.com.mimiorider.Model.Restoran_Model@d46a266\"}', '{\"makanan\":\"[Ltes.com.mimiorider.Model.Makanan_Model;@d7269a7\"}', 48000, 55000, '2018-11-02 07:38:30'),
(10, 0, '{\"latitude_konsumen\":-7.0169455805995895,\"longitude_konsumen\":108.36813576071994,\"tanggal\":\"2018-11-02 04:54:45\"}', '{\"konsumen\":\"tes.com.mimiorider.Model.Konsumen_Model@2ded9c7\"}', '{\"pengendara\":\"tes.com.mimiorider.Model.Pengendara@6278bf4\"}', '{\"restoran\":\"tes.com.mimiorider.Model.Restoran_Model@e331f1d\"}', '{\"makanan\":\"[Ltes.com.mimiorider.Model.Makanan_Model;@cad4592\"}', 48000, 55000, '2018-11-02 07:44:59'),
(11, 0, '{\"latitude_konsumen\":-7.0169838007584735,\"longitude_konsumen\":108.36823355272544,\"tanggal\":\"2018-11-02 07:44:37\"}', '{\"konsumen\":\"tes.com.mimiorider.Model.Konsumen_Model@b5a27c1\"}', '{\"pengendara\":\"tes.com.mimiorider.Model.Pengendara@dc5eb66\"}', '{\"restoran\":\"tes.com.mimiorider.Model.Restoran_Model@1e27ea7\"}', '{\"makanan\":\"[Ltes.com.mimiorider.Model.Makanan_Model;@c30ff54\"}', 30000, 37000, '2018-11-02 07:55:40'),
(12, 0, '{\"latitude_konsumen\":-7.016971496859624,\"longitude_konsumen\":108.36823626347474,\"tanggal\":\"2018-11-02 07:56:16\"}', '{\"konsumen\":\"tes.com.mimiorider.Model.Konsumen_Model@db0b013\"}', '{\"pengendara\":\"tes.com.mimiorider.Model.Pengendara@b92f250\"}', '{\"restoran\":\"tes.com.mimiorider.Model.Restoran_Model@d45bc49\"}', '{\"makanan\":\"[Ltes.com.mimiorider.Model.Makanan_Model;@f85994e\"}', 18000, 25000, '2018-11-02 07:59:13'),
(13, 0, '{\"latitude_konsumen\":-7.016944649275075,\"longitude_konsumen\":108.36823537365777,\"tanggal\":\"2018-11-02 07:59:36\"}', '{\"konsumen\":\"tes.com.mimiorider.Model.Konsumen_Model@c0fb23c\"}', '{\"pengendara\":\"tes.com.mimiorider.Model.Pengendara@1655bc5\"}', '{\"restoran\":\"tes.com.mimiorider.Model.Restoran_Model@97c491a\"}', '{\"makanan\":\"[Ltes.com.mimiorider.Model.Makanan_Model;@c4d3c4b\"}', 30000, 37000, '2018-11-02 08:05:16'),
(14, 0, 'x', 'x', 'x', 'x', 'x', 1, 1, '2018-11-02 08:06:52'),
(15, 0, '{\"latitude_konsumen\":-7.016919108245393,\"longitude_konsumen\":108.36823438351016,\"tanggal\":\"2018-11-02 08:08:48\"}', '{\"konsumen\":\"tes.com.mimiorider.Model.Konsumen_Model@f9baa8f\"}', '{\"pengendara\":\"tes.com.mimiorider.Model.Pengendara@cd9611c\"}', '{\"restoran\":\"tes.com.mimiorider.Model.Restoran_Model@bcd1125\"}', '{\"makanan\":\"[Ltes.com.mimiorider.Model.Makanan_Model;@927c2fa\"}', 18000, 25000, '2018-11-02 08:14:06'),
(16, 0, '{\"latitude_konsumen\":-7.017004149793132,\"longitude_konsumen\":108.36818303515479,\"tanggal\":\"2018-11-02 08:22:15\"}', '{\"konsumen\":\"tes.com.mimiorider.Model.Konsumen_Model@e2ab47b\"}', '{\"pengendara\":\"tes.com.mimiorider.Model.Pengendara@d4e8298\"}', '{\"restoran\":\"tes.com.mimiorider.Model.Restoran_Model@fc81af1\"}', '{\"makanan\":\"[Ltes.com.mimiorider.Model.Makanan_Model;@7cf16d6\"}', 36000, 43000, '2018-11-02 08:22:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`),
  ADD KEY `id_pengendara` (`id_pengendara`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`),
  ADD KEY `id_restoran` (`id_restoran`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_restoran` (`id_restoran`),
  ADD KEY `id_konsumen` (`id_konsumen`),
  ADD KEY `id_pengendara` (`id_pengendara`);

--
-- Indeks untuk tabel `pemesanan_detail`
--
ALTER TABLE `pemesanan_detail`
  ADD PRIMARY KEY (`id_pemesanan`,`id_makanan`) USING BTREE,
  ADD KEY `id_makanan` (`id_makanan`);

--
-- Indeks untuk tabel `pengendara`
--
ALTER TABLE `pengendara`
  ADD PRIMARY KEY (`id_pengendara`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id_restoran`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT untuk tabel `pengendara`
--
ALTER TABLE `pengendara`
  MODIFY `id_pengendara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id_restoran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`id_pengendara`) REFERENCES `pengendara` (`id_pengendara`);

--
-- Ketidakleluasaan untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD CONSTRAINT `makanan_ibfk_1` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id_restoran`);

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id_restoran`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_konsumen`) REFERENCES `konsumen` (`id_konsumen`),
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`id_pengendara`) REFERENCES `pengendara` (`id_pengendara`);

--
-- Ketidakleluasaan untuk tabel `pemesanan_detail`
--
ALTER TABLE `pemesanan_detail`
  ADD CONSTRAINT `pemesanan_detail_ibfk_1` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id_makanan`),
  ADD CONSTRAINT `pemesanan_detail_ibfk_2` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`);

--
-- Ketidakleluasaan untuk tabel `pengendara`
--
ALTER TABLE `pengendara`
  ADD CONSTRAINT `pengendara_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `restoran`
--
ALTER TABLE `restoran`
  ADD CONSTRAINT `restoran_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
