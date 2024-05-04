-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 03:04 PM
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
  `doviz_tarih` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doviz`
--

INSERT INTO `doviz` (`doviz_id`, `doviz_kod`, `doviz_alis`, `doviz_satis`, `doviz_tarih`) VALUES
(1, 'USD', 32.3350, 32.3400, '2024-05-04 15:56:58'),
(2, 'EUR', 34.7427, 34.8790, '2024-05-04 15:56:58'),
(3, 'GBP', 40.5131, 40.6534, '2024-05-04 15:56:58'),
(4, 'CHF', 35.7174, 35.7427, '2024-05-04 15:56:58'),
(5, 'CAD', 23.6212, 23.6328, '2024-05-04 15:56:58'),
(6, 'RUB', 0.3526, 0.3530, '2024-05-04 15:56:58'),
(7, 'AED', 8.8023, 8.8057, '2024-05-04 15:56:58'),
(8, 'AUD', 21.3622, 21.3826, '2024-05-04 15:56:58'),
(9, 'DKK', 4.6648, 4.6675, '2024-05-04 15:56:58'),
(10, 'SEK', 2.9863, 2.9915, '2024-05-04 15:56:58'),
(11, 'NOK', 2.9715, 2.9779, '2024-05-04 15:56:58'),
(12, 'JPY', 21.1100, 21.2300, '2024-05-04 15:56:58'),
(13, 'KWD', 104.9555, 105.4579, '2024-05-04 15:56:58'),
(14, 'ZAR', 1.7468, 1.7487, '2024-05-04 15:56:58'),
(15, 'BHD', 85.7715, 85.7848, '2024-05-04 15:56:58'),
(16, 'LYD', 6.6328, 6.6338, '2024-05-04 15:56:58'),
(17, 'SAR', 8.6152, 8.6286, '2024-05-04 15:56:58'),
(18, 'IQD', 0.0247, 0.0247, '2024-05-04 15:56:58'),
(19, 'ILS', 8.7192, 8.7205, '2024-05-04 15:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `favori`
--

CREATE TABLE `favori` (
  `favori_doviz_ID` int(11) NOT NULL,
  `doviz_id` int(11) DEFAULT NULL,
  `favorimi` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favori`
--

INSERT INTO `favori` (`favori_doviz_ID`, `doviz_id`, `favorimi`) VALUES
(100, 1, 0),
(200, 2, 0),
(300, 3, 0),
(400, 4, 0),
(500, 5, 0),
(600, 6, 0),
(700, 7, 0),
(800, 8, 0),
(900, 9, 0),
(1000, 10, 0),
(1100, 11, 0),
(1200, 12, 0),
(1300, 13, 0),
(1400, 14, 0),
(1500, 15, 0),
(1600, 16, 0),
(1700, 17, 0),
(1800, 18, 0),
(1900, 19, 0);

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
(17, 'Tolga', 'Boz', 'tolgaboz@gmail.com', 5554443322, '$2y$12$jJBuJWZtZUO5OTRuci3MCuEsjwg2PPvav2B2xZ6zmy8GBlWN3bEW.', '2024-05-03 13:27:15', NULL),
(18, 'Alperen', 'Ovalı', 'alperen@gmail.com', 5527773333, '$2y$12$BsCcP.cp1Q0beabkjqt1GeyJA7HUi.R24cVI7yju75Pl6wMHVEcha', '2024-05-04 12:33:07', NULL),
(19, 'Mahmut', 'Murteza', 'mahmut@gmail.com', 5527773334, '$2y$12$OupkFg2xxQa38vNXk56QaObGxoCwpZzMe/Eaz3jgUH0Sa/vMs1TI6', '2024-05-04 14:31:34', NULL),
(20, 'hüsnü', 'koçer', 'husnu@gmail.com', 1112223322, '$2y$12$JC2/s9EXAlIxD11.SWMKYOAQvpNeBLgtF4H6wNRmmdP0t8LqB3lPm', '2024-05-04 14:34:30', NULL);

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
-- Indexes for table `favori`
--
ALTER TABLE `favori`
  ADD PRIMARY KEY (`favori_doviz_ID`),
  ADD KEY `doviz_id` (`doviz_id`);

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
  MODIFY `doviz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=550;

--
-- AUTO_INCREMENT for table `favori`
--
ALTER TABLE `favori`
  MODIFY `favori_doviz_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1901;

--
-- AUTO_INCREMENT for table `islem`
--
ALTER TABLE `islem`
  MODIFY `islem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- Constraints for table `favori`
--
ALTER TABLE `favori`
  ADD CONSTRAINT `favori_ibfk_1` FOREIGN KEY (`doviz_id`) REFERENCES `doviz` (`doviz_id`);

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
