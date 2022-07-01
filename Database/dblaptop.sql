-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 01:20 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblhp`
--

CREATE TABLE `tblhp` (
  `id` int(11) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblhp`
--

INSERT INTO `tblhp` (`id`, `merek`, `tipe`, `tahun`) VALUES
(24572, 'Samsung ', 'Galaxy F52 5G', '2022'),
(24573, 'OPPO ', 'A96', '2021'),
(24574, 'Vivo', 'Y71', '2018'),
(24575, 'Samsung', 'Galaxy A73 5G ', '2022'),
(24576, 'Realme', 'GT 2 Pro', '2022'),
(24577, 'Xiaomi Redmi', 'Note 11', '2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblhp`
--
ALTER TABLE `tblhp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblhp`
--
ALTER TABLE `tblhp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24580;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
