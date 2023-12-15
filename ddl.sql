-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 05:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ddl`
--

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `norek` varchar(255) NOT NULL,
  `saldo` decimal(18,2) NOT NULL,
  `jenis` enum('pribadi','organisasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id`, `nama`, `norek`, `saldo`, `jenis`) VALUES
(1, 'zydo', '00001', '5000000.00', 'pribadi'),
(2, 'prima', '00002', '2000000.00', 'pribadi'),
(3, 'tessa', '00003', '100000.00', 'pribadi'),
(4, 'wanto', '00004', '2500000.00', 'pribadi'),
(5, 'teddy', '00005', '1000000.00', 'organisasi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
