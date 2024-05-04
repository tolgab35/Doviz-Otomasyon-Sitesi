-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 04:46 PM
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
  `doviz_alis` decimal(10,4) DEFAULT NULL,
  `doviz_satis` decimal(10,4) DEFAULT NULL,
  `favori_doviz` tinyint(1) DEFAULT NULL,
  `doviz_tarih` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doviz`
--

INSERT INTO `doviz` (`doviz_id`, `doviz_kod`, `doviz_alis`, `doviz_satis`, `favori_doviz`, `doviz_tarih`) VALUES
(134, 'USD', 32.3406, 32.3464, NULL, '2024-05-03 16:01:54'),
(135, 'EUR', 34.9168, 34.9263, NULL, '2024-05-03 16:01:54'),
(136, 'GBP', 40.7987, 40.8271, NULL, '2024-05-03 16:01:54'),
(137, 'CHF', 35.7875, 35.8024, NULL, '2024-05-03 16:01:54'),
(138, 'CAD', 23.7188, 23.7283, NULL, '2024-05-03 16:01:54'),
(139, 'RUB', 0.3531, 0.3532, NULL, '2024-05-03 16:01:54'),
(140, 'AED', 8.8037, 8.8071, NULL, '2024-05-03 16:01:54'),
(141, 'AUD', 21.4422, 21.4537, NULL, '2024-05-03 16:01:54'),
(142, 'DKK', 4.6776, 4.6795, NULL, '2024-05-03 16:01:54'),
(143, 'SEK', 3.0017, 3.0031, NULL, '2024-05-03 16:01:54'),
(144, 'JPY', 21.2500, 21.2900, NULL, '2024-05-03 16:01:54'),
(145, 'KWD', 105.0296, 105.4214, NULL, '2024-05-03 16:01:54'),
(146, 'ZAR', 1.7550, 1.7557, NULL, '2024-05-03 16:01:54'),
(147, 'BHD', 85.7880, 85.8055, NULL, '2024-05-03 16:01:54'),
(148, 'LYD', 6.6421, 6.6435, NULL, '2024-05-03 16:01:54'),
(149, 'SAR', 8.6260, 8.6294, NULL, '2024-05-03 16:01:54'),
(150, 'IQD', 0.0247, 0.0247, NULL, '2024-05-03 16:01:54'),
(151, 'ILS', 8.7256, 8.7272, NULL, '2024-05-03 16:01:54'),
(152, 'USD', 32.3375, 32.3408, NULL, '2024-05-03 17:42:43'),
(153, 'EUR', 34.8204, 34.8378, NULL, '2024-05-03 17:42:43'),
(154, 'GBP', 40.6025, 40.6268, NULL, '2024-05-03 17:42:43'),
(155, 'CHF', 35.7010, 35.7165, NULL, '2024-05-03 17:42:43'),
(156, 'CAD', 23.6397, 23.6473, NULL, '2024-05-03 17:42:43'),
(157, 'RUB', 0.3531, 0.3532, NULL, '2024-05-03 17:42:43'),
(158, 'AED', 8.8032, 8.8062, NULL, '2024-05-03 17:42:43'),
(159, 'AUD', 21.3587, 21.3675, NULL, '2024-05-03 17:42:43'),
(160, 'DKK', 4.6655, 4.6671, NULL, '2024-05-03 17:42:43'),
(161, 'SEK', 2.9874, 2.9909, NULL, '2024-05-03 17:42:43'),
(162, 'JPY', 21.1300, 21.2200, NULL, '2024-05-03 17:42:43'),
(163, 'KWD', 105.0538, 105.4033, NULL, '2024-05-03 17:42:43'),
(164, 'ZAR', 1.7451, 1.7459, NULL, '2024-05-03 17:42:43'),
(165, 'BHD', 85.7781, 85.7869, NULL, '2024-05-03 17:42:43'),
(166, 'LYD', 6.6414, 6.6420, NULL, '2024-05-03 17:42:43'),
(167, 'SAR', 8.6126, 8.6298, NULL, '2024-05-03 17:42:43'),
(168, 'IQD', 0.0247, 0.0247, NULL, '2024-05-03 17:42:43'),
(169, 'ILS', 8.6983, 8.6991, NULL, '2024-05-03 17:42:43');

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

-- --------------------------------------------------------

--
-- Table structure for table `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adi` varchar(100) NOT NULL,
  `kullanici_soyadi` varchar(100) NOT NULL,
  `kullanici_email` varchar(100) NOT NULL,
  `kullanici_tel` bigint(11) NOT NULL,
  `kullanici_sifre` varchar(60) NOT NULL,
  `kayit_tarihi` datetime NOT NULL DEFAULT current_timestamp(),
  `cuzdan_id_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adi`, `kullanici_soyadi`, `kullanici_email`, `kullanici_tel`, `kullanici_sifre`, `kayit_tarihi`, `cuzdan_id_fk`) VALUES
(17, 'Tolga', 'Boz', 'tolgaboz@gmail.com', 5554443322, '$2y$12$jJBuJWZtZUO5OTRuci3MCuEsjwg2PPvav2B2xZ6zmy8GBlWN3bEW.', '2024-05-03 13:27:15', NULL);

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
  MODIFY `doviz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

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
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
