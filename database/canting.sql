-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 01:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canting`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `bb` int(11) NOT NULL,
  `tb` int(11) NOT NULL,
  `imt` int(11) NOT NULL,
  `q1` varchar(50) NOT NULL,
  `q2` tinyint(1) NOT NULL,
  `q3` tinyint(1) NOT NULL,
  `q4` tinyint(1) NOT NULL,
  `q5` tinyint(1) NOT NULL,
  `q6` tinyint(1) NOT NULL,
  `q7` tinyint(1) NOT NULL,
  `q8` tinyint(1) NOT NULL,
  `q9` tinyint(1) NOT NULL,
  `c1` text NOT NULL,
  `c2` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id`, `user_id`, `nama`, `tgl_lahir`, `usia`, `jenis_kelamin`, `bb`, `tb`, `imt`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `c1`, `c2`, `created_at`) VALUES
(3, 2, 'Ammorhita Azza', '2022-12-23', 2, 'perempuan', 11, 115, 95, 'normal', 0, 0, 0, 0, 0, 0, 0, 0, 'Tumbuh kembang baik', '-', '2024-06-20 08:48:36'),
(4, 2, 'Intan Firdausi', '2023-02-03', 1, 'perempuan', 13, 114, 78, 'normal', 1, 1, 0, 0, 1, 1, 1, 1, 'Anak memiliki indikasi keterlambatan monitorik', 'Perlakuan khusus, konsultasi lajutan', '2024-06-20 09:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `ibu`
--

CREATE TABLE `ibu` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` int(11) NOT NULL,
  `bb` int(11) NOT NULL,
  `tb` int(11) NOT NULL,
  `usia_hamil` int(11) NOT NULL,
  `hamil_ke` int(11) NOT NULL,
  `imt` int(11) NOT NULL,
  `q1` varchar(50) NOT NULL,
  `q2` tinyint(1) NOT NULL,
  `q3` tinyint(1) NOT NULL,
  `q4` tinyint(1) NOT NULL,
  `q5` tinyint(1) NOT NULL,
  `q6` tinyint(1) NOT NULL,
  `q7` tinyint(1) NOT NULL,
  `q8` tinyint(1) NOT NULL,
  `q9` tinyint(1) NOT NULL,
  `c1` text NOT NULL,
  `c2` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ibu`
--

INSERT INTO `ibu` (`id`, `user_id`, `nama`, `tgl_lahir`, `usia`, `bb`, `tb`, `usia_hamil`, `hamil_ke`, `imt`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `c1`, `c2`, `created_at`) VALUES
(2, 2, 'Azdana Hasfi', '2004-06-20', 20, 50, 160, 22, 2, 20, 'normal', 1, 1, 0, 1, 0, 1, 0, 1, 'SEHAT', 'BANYAKIN MINUM AIR PUTIH', '2024-06-20 10:52:50'),
(3, 2, 'Azdana Hasfi', '2003-07-02', 21, 60, 162, 20, 1, 25, 'normal', 1, 1, 0, 1, 1, 0, 1, 1, 'KURANG PROTEIN', 'PERBANYAK MAKAN MAKANAN YANG MENGANDUNG PROTEIN', '2024-06-20 18:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `submit_pengaduan`
--

CREATE TABLE submit_pengaduan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_sub VARCHAR(255) NOT NULL,
    email_sub VARCHAR(255) NOT NULL,
    ajuan TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `alamat`, `telepon`) VALUES
(2, 'Azdana Hasfi', 'azzdanahasf@gmail.com', 'azdana07', 'Jl. Rungkut Madya No.1, Gn. Anyar, Kec. Gn. Anyar, Surabaya, Jawa Timur', '085806361803');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ibu`
--
ALTER TABLE `ibu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_pengaduan`
--
ALTER TABLE `submit_pengaduan`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ibu`
--
ALTER TABLE `ibu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `submit_pengaduan`
--
ALTER TABLE `submit_pengaduan`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
