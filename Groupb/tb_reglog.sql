-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2024 at 10:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groupb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_reglog`
--

CREATE TABLE `tb_reglog` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_reglog`
--

INSERT INTO `tb_reglog` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$FDieyV8Acnz4aa3kP7oVUuKCEbt2Rb9u6krb5uxGcwR1HtcxmkkR.', 'admin'),
(2, 'test', 'test@gmail.com', '$2y$10$iY5v7ktTrwmXBL2h9m4REuC1ypMLSTLDTCHfNigeq3MMxmHmef9rG', ''),
(4, '123', '123@gmail.com', '$2y$10$OjXGGLosRDYyIZE0Fq.H0.gL4wrQP3AvVTb5Hm2oG/k5KhEyKQhoC', ''),
(5, '123', '123@gmail.com', '$2y$10$3fzz4mPlaR5pu2E769jk8.bWB.KucHxtSeET3pYAeGN3/nPMB13mi', ''),
(6, 'kent123', 'kent123@gmail.com', '$2y$10$YXb53YiyJdAEwwHqfCoiFuFq/o/a07FIjOjxkGaR0Ci7n.45U8MxW', ''),
(7, 'kent123', 'kent123@gmail.com', '$2y$10$7JRa0e7AWcwGnsgfhCIAEu7NVwmMHpgWuvMBq6PeNdOzTcLSncyUa', ''),
(8, 'laur', 'laur@gmail.com', '$2y$10$NTakwTs8cs9NnMBpQV91NOpmWoNMd9kiraz27i.H06gbW85LQSd0.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_reglog`
--
ALTER TABLE `tb_reglog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_reglog`
--
ALTER TABLE `tb_reglog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
