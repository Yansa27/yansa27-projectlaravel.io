-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2021 at 05:13 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `juliansa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbguru`
--

CREATE TABLE `tbguru` (
  `id` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nip` int(20) NOT NULL,
  `mata_pelajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbguru`
--

INSERT INTO `tbguru` (`id`, `nama`, `nip`, `mata_pelajaran`) VALUES
(1, 'JULIANSA', 8828282, 'LARAVEL'),
(2, 'M TRIO AFRIZAL', 704041, 'LARAVEL');

-- --------------------------------------------------------

--
-- Table structure for table `tbjadwal`
--

CREATE TABLE `tbjadwal` (
  `id` int(20) NOT NULL,
  `senin` varchar(20) NOT NULL,
  `selasa` varchar(20) NOT NULL,
  `rabu` varchar(20) NOT NULL,
  `kamis` varchar(20) NOT NULL,
  `jumat` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sabtu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbjadwal`
--

INSERT INTO `tbjadwal` (`id`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`) VALUES
(1, 'BOOTSTRAP', 'BOOTSTRAP', 'HTML&CSS', 'BOOTSTRAP', 'LARAVEL', 'HTML&CSS'),
(2, 'LARAVEL', 'HTML&CSS', 'PYTHON', 'LARAVEL', 'BOOTSTRAP', 'BOOTSTRAP'),
(3, 'HTML&CSS', 'PYTHON', 'HTML&CSS', 'PYTHON', 'HTML&CSS', 'PYTHON');

-- --------------------------------------------------------

--
-- Table structure for table `tbsiswa`
--

CREATE TABLE `tbsiswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nisn` int(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbsiswa`
--

INSERT INTO `tbsiswa` (`id`, `nama`, `nisn`, `kelas`, `email`) VALUES
(1, 'JULIANSA', 41059926, 'Laravel', 'juliansa837@gmail.com'),
(2, 'Dimasepep', 23233, 'Laravel', 'dimasepep@gmail.com'),
(3, 'm perdi pirdaus', 882828, 'Laravel', 'bajuku.ag@gmail.com'),
(8, 'M TRIO AFRIZAL', 7783789, 'LARAVEL', 'trio@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbguru`
--
ALTER TABLE `tbguru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbjadwal`
--
ALTER TABLE `tbjadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbguru`
--
ALTER TABLE `tbguru`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbjadwal`
--
ALTER TABLE `tbjadwal`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
