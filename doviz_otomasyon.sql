-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 12:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doviz_otomasyon`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuzdan`
--

CREATE TABLE `cuzdan` (
  `cuzdan_id` int(11) NOT NULL,
  `islem_id_fk` int(11) DEFAULT NULL,
  `kullanici_id_fk` int(11) DEFAULT NULL,
  `bakiye` float DEFAULT 0,
  `toplam_islem_mik` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doviz`
--

CREATE TABLE `doviz` (
  `doviz_id` int(11) NOT NULL,
  `doviz_kod` varchar(3) DEFAULT NULL,
  `doviz_ad` varchar(50) DEFAULT NULL,
  `doviz_alis` float DEFAULT NULL,
  `doviz_satis` float DEFAULT NULL,
  `favori_doviz` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `haber`
--

CREATE TABLE `haber` (
  `haber_id` int(11) NOT NULL,
  `haber_baslik` varchar(100) DEFAULT NULL,
  `haber_icerik` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `islem`
--

CREATE TABLE `islem` (
  `islem_id` int(11) NOT NULL,
  `doviz_id_fk` int(11) DEFAULT NULL,
  `islem_tarihi` datetime DEFAULT NULL,
  `islem_miktari` float DEFAULT NULL,
  `islem_sonucu` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islem`
--

INSERT INTO `islem` (`islem_id`, `doviz_id_fk`, `islem_tarihi`, `islem_miktari`, `islem_sonucu`) VALUES
(1, NULL, NULL, 100.5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `kullanici_soyadi` varchar(50) NOT NULL,
  `kullanici_email` varchar(50) NOT NULL,
  `kullanici_tel` int(11) NOT NULL,
  `kullanici_sifre` varchar(50) NOT NULL,
  `kayit_tarihi` datetime NOT NULL DEFAULT current_timestamp(),
  `cuzdan_id_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adi`, `kullanici_soyadi`, `kullanici_email`, `kullanici_tel`, `kullanici_sifre`, `kayit_tarihi`, `cuzdan_id_fk`) VALUES
(1, 'Alperen', 'Ovalı', 'alperen@gmail.com', 2147483647, 'password1234', '2024-05-01 00:24:10', NULL),
(2, 'Hüsnü', 'Koçer', 'hüsnü@gmail.com', 2147483647, 'hüsnü1234', '2024-05-01 00:27:10', NULL),
(3, 'Tolga', 'Boz', 'tolga@gmail.com', 2147483647, 'tolga1234', '2024-05-01 00:28:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuzdan`
--
ALTER TABLE `cuzdan`
  ADD PRIMARY KEY (`cuzdan_id`),
  ADD KEY `kullanici_id_fk` (`kullanici_id_fk`),
  ADD KEY `islem_id_fk` (`islem_id_fk`);

--
-- Indexes for table `doviz`
--
ALTER TABLE `doviz`
  ADD PRIMARY KEY (`doviz_id`);

--
-- Indexes for table `haber`
--
ALTER TABLE `haber`
  ADD PRIMARY KEY (`haber_id`);

--
-- Indexes for table `islem`
--
ALTER TABLE `islem`
  ADD PRIMARY KEY (`islem_id`),
  ADD KEY `doviz_id_fk` (`doviz_id_fk`);

--
-- Indexes for table `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`),
  ADD KEY `cuzdan_id_fk` (`cuzdan_id_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuzdan`
--
ALTER TABLE `cuzdan`
  MODIFY `cuzdan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doviz`
--
ALTER TABLE `doviz`
  MODIFY `doviz_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `haber`
--
ALTER TABLE `haber`
  MODIFY `haber_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `islem`
--
ALTER TABLE `islem`
  MODIFY `islem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuzdan`
--
ALTER TABLE `cuzdan`
  ADD CONSTRAINT `cuzdan_ibfk_1` FOREIGN KEY (`kullanici_id_fk`) REFERENCES `kullanici` (`kullanici_id`),
  ADD CONSTRAINT `cuzdan_ibfk_2` FOREIGN KEY (`islem_id_fk`) REFERENCES `islem` (`islem_id`);

--
-- Constraints for table `islem`
--
ALTER TABLE `islem`
  ADD CONSTRAINT `islem_ibfk_1` FOREIGN KEY (`doviz_id_fk`) REFERENCES `doviz` (`doviz_id`);

--
-- Constraints for table `kullanici`
--
ALTER TABLE `kullanici`
  ADD CONSTRAINT `kullanici_ibfk_1` FOREIGN KEY (`cuzdan_id_fk`) REFERENCES `cuzdan` (`cuzdan_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
