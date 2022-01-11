-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 02:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_galery`
--

CREATE TABLE `tbl_detail_galery` (
  `id` int(5) NOT NULL,
  `nik` int(5) NOT NULL,
  `image_portfolio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_galery`
--

INSERT INTO `tbl_detail_galery` (`id`, `nik`, `image_portfolio`) VALUES
(1, 11111, 'galeryfahmy1.jpeg'),
(2, 11111, 'galeryfahmy2.jpeg'),
(347, 11111, 'bca.jpeg'),
(348, 11111, 'gamemoba.jpeg'),
(349, 11111, 'gamemoba2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_keahlian`
--

CREATE TABLE `tbl_detail_keahlian` (
  `id` int(5) NOT NULL,
  `nik` int(5) NOT NULL,
  `keahlian` varchar(255) NOT NULL,
  `image_keahlian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_keahlian`
--

INSERT INTO `tbl_detail_keahlian` (`id`, `nik`, `keahlian`, `image_keahlian`) VALUES
(1, 11111, 'photoshop', 'photoshop.jpg'),
(4, 11111, 'java', 'java.jpg'),
(5, 11111, 'pyhton', 'python.jpg'),
(6, 11111, 'Fotografer', 'camera.jpg'),
(14, 11111, 'php', 'php.jpg'),
(15, 11111, 'Mengetik', 'keyboard.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_pekerjaan`
--

CREATE TABLE `tbl_detail_pekerjaan` (
  `id` int(5) NOT NULL,
  `nik` int(5) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_pekerjaan`
--

INSERT INTO `tbl_detail_pekerjaan` (`id`, `nik`, `perusahaan`, `jabatan`, `periode`, `alamat_perusahaan`) VALUES
(1, 11111, 'PT. Tokopedia', 'Backend Developer', '2010 - 2021', 'Tasikmalaya'),
(2, 11111, 'PT. Shopee', 'Frontend Developer', '2021 - 2023', 'Bandung'),
(465, 11111, 'PT. Apple inc', 'Testing App', '2018-2020', 'Jakarta jln. Hz no 151'),
(466, 11111, 'PT. Oppo', 'Web Developer backend', '2008 - 2009', 'Surabaya jln. Ra. Kartini no 421'),
(467, 11111, 'PT. Yakult indonesia', 'Web Designer', '2005 - 2007', 'Karawang jln. Lurus aja no 443');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_pendidikan`
--

CREATE TABLE `tbl_detail_pendidikan` (
  `nik` int(5) NOT NULL,
  `idPendidikan` int(5) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tahun_masuk` int(5) NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_pendidikan`
--

INSERT INTO `tbl_detail_pendidikan` (`nik`, `idPendidikan`, `keterangan`, `tahun_masuk`, `tahun_lulus`, `jurusan`) VALUES
(11111, 1, 'MIS PLUS AL-ITTIHAAD', 2007, '2013', ''),
(11111, 2, 'SMPN 3 KAWALI', 2013, '2016', ''),
(11111, 3, 'SMK MUHAMMADIYAH KAWALI', 2016, '2019', 'TEKNIK KENDARAAN RINGAN'),
(11111, 4, 'UNIVERSITAS PERJUANGAN', 2019, 'Sekarang', 'TEKNIK INFORMATIKA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_project`
--

CREATE TABLE `tbl_detail_project` (
  `id` int(5) NOT NULL,
  `nik` int(5) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_project`
--

INSERT INTO `tbl_detail_project` (`id`, `nik`, `keterangan`) VALUES
(1, 11111, 'Aplikasi Tokopedia'),
(1, 22222, 'Aplikasi Shopee'),
(1, 33333, 'Aplikasi Gojek'),
(2, 33333, 'Aplikasi Antivirus ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_identitas`
--

CREATE TABLE `tbl_identitas` (
  `nik` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `moto_hidup` varchar(255) NOT NULL,
  `tentang_saya` varchar(255) NOT NULL,
  `bg_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_identitas`
--

INSERT INTO `tbl_identitas` (`nik`, `nama`, `foto`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `email`, `no_hp`, `jenis_kelamin`, `moto_hidup`, `tentang_saya`, `bg_foto`) VALUES
(11111, 'Fahmy Fauzi ', 'profilefahmy.jpeg', 'ciamis', '2000-05-06', 'Ciamis - Kawali', 'fahmyfauzii@gmail.com', '082118418130', 'Laki-laki', 'GAUSAHNGATUR', 'Saya adalah seorang mahasiswa teknik informatika yang berfokus pada belajar', 'bg-fahmy.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat_pendidikan`
--

CREATE TABLE `tbl_riwayat_pendidikan` (
  `idPendidikan` int(5) NOT NULL,
  `pendidikan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_riwayat_pendidikan`
--

INSERT INTO `tbl_riwayat_pendidikan` (`idPendidikan`, `pendidikan`) VALUES
(1, 'SD'),
(2, 'SMP'),
(3, 'SMA/K/MA'),
(4, 'S1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_galery`
--
ALTER TABLE `tbl_detail_galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_detail_keahlian`
--
ALTER TABLE `tbl_detail_keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_detail_pekerjaan`
--
ALTER TABLE `tbl_detail_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_detail_pendidikan`
--
ALTER TABLE `tbl_detail_pendidikan`
  ADD KEY `idPendidikan` (`idPendidikan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbl_riwayat_pendidikan`
--
ALTER TABLE `tbl_riwayat_pendidikan`
  ADD PRIMARY KEY (`idPendidikan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_galery`
--
ALTER TABLE `tbl_detail_galery`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=350;

--
-- AUTO_INCREMENT for table `tbl_detail_keahlian`
--
ALTER TABLE `tbl_detail_keahlian`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_detail_pekerjaan`
--
ALTER TABLE `tbl_detail_pekerjaan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=468;

--
-- AUTO_INCREMENT for table `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  MODIFY `nik` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55556;

--
-- AUTO_INCREMENT for table `tbl_riwayat_pendidikan`
--
ALTER TABLE `tbl_riwayat_pendidikan`
  MODIFY `idPendidikan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
