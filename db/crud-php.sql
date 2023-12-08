-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2023 at 07:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(2) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `username`, `email`, `alamat`, `password`, `level`) VALUES
(1, 'Pamuji Muhamad Jakak, M.Kom', 'pmjakak', 'jakak@unuha.ac.id', '<p>Desa Sukoharjo Kecamatan Buay Madang Timur</p>\r\n', '$2y$10$RL.yPIZoOIvtIqyz3AwWHu8ajIUx.XEW07SYkVfFmK8Xc/JFyu50a', '1'),
(9, 'Operator Barang IT', 'barang', 'vovi@unuha.ac.id', '<p>Belitang</p>\r\n', '$2y$10$ot2YQFvZIcwOcxlAAUEwmO.0A4dzTGBxrbniq2aKljxUlPsKkvNP.', '2'),
(10, 'Operator Mahasiswa IT', 'mahasiswa', 'vovi@unuha.ac.id', '<p>Belitang</p>\r\n', '$2y$10$vPNt5H99RSh4G5o3muLg4OtJ5UJiJV0xsfYvOsAEAH.gDJ2/SoTFa', '3');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `harga` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `barcode` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `jumlah`, `harga`, `barcode`, `tanggal`) VALUES
(17, 'Komputer', '5', '25000000', '545101', '2023-11-20 06:08:56'),
(18, 'Printer', '5', '20000000', '370916', '2023-11-20 06:20:21'),
(19, 'Mouse', '25', '500000', '159464', '2023-11-30 07:35:43'),
(20, 'Barcode', '1', '2500000', '598191', '2023-12-01 02:26:46'),
(21, 'Keyboard', '1', '250000', '844965', '2023-12-07 16:15:48'),
(22, 'Alas Mouse Games', '1', '50000', '776582', '2023-12-07 16:16:15'),
(23, 'LCD Proyektor', '1', '5000000', '332711', '2023-12-07 16:16:39'),
(24, 'Monitor 24 In', '1', '5000000', '281168', '2023-12-07 16:17:08'),
(25, 'Meja Belajar', '1', '2000000', '823148', '2023-12-07 16:17:30'),
(26, 'Kursi Games', '1', '2500000', '953498', '2023-12-07 16:17:45'),
(27, 'Speaker Portable', '1', '500000', '297144', '2023-12-07 18:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `prodi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jk` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `telepon` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama`, `prodi`, `jk`, `telepon`, `alamat`, `email`, `foto`) VALUES
(8, 'Argi Wiranata', 'Informatika', 'Laki-laki', '082300009999', '<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.</p>\r\n</div>\r\n', 'argi@gmail.com', '6540a1a11bc60.png'),
(11, 'Laragon', 'Informatika', 'Laki-laki', '111111111110', '<p>Belitang</p>\r\n\r\n<p><img alt=\"gambar alamat jakak\" src=\"/ckfinder/userfiles/images/foto%20alamat/jakak.jpg\" style=\"height:125px; width:100px\" /></p>\r\n', 'laragon@gmail.com', '6559c82783b24.jpg'),
(13, 'Jakak Alamat', 'Informatika', 'Laki-laki', '082330526073', '<p>Belitang Madang Raya</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/images/foto%20alamat/314132585_10226237540679072_2832314880654769955_n.jpg\" style=\"height:100px; width:100px\" /></p>\r\n', 'uji@gmail.com', '655dbc5f2db84.png'),
(15, 'Febri Kardi', 'Informatika', 'Laki-laki', '43434', '<p>dfdfsdf</p>\r\n\r\n<p><img alt=\"gambar alamat jakak\" src=\"/ckfinder/userfiles/images/foto%20alamat/jakak.jpg\" style=\"height:125px; width:100px\" /></p>\r\n', 'febri@unuha.ac.id', '6572288933550.png'),
(17, 'Reyza', 'Matematika', 'Perempuan', '123456789012', '<p>Desa Tanah Merah Belitang Madang Raya Kabupaten Ogan Komering Uli Timur</p>\r\n', 'reyza@gmail.com', '65728893466a5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
