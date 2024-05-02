-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 12:20 AM
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
-- Table structure for table `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `kullanici_soyadi` varchar(50) NOT NULL,
  `kullanici_email` varchar(50) NOT NULL,
  `kullanici_tel` bigint(11) NOT NULL,
  `kullanici_sifre` varchar(50) NOT NULL,
  `kayit_tarihi` datetime NOT NULL DEFAULT current_timestamp(),
  `cuzdan_id_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adi`, `kullanici_soyadi`, `kullanici_email`, `kullanici_tel`, `kullanici_sifre`, `kayit_tarihi`, `cuzdan_id_fk`) VALUES
(2, 'Hüsnü', 'Koçer', 'hüsnü@gmail.com', 2147483647, 'hüsnü1234', '2024-05-01 00:27:10', NULL),
(3, 'Tolga', 'Boz', 'tolga@gmail.com', 2147483647, 'tolga1234', '2024-05-01 00:28:00', NULL),
(4, 'İKİNCİ UPDATE', 'KOÇERO', 'ikinciupdate@gmail.com', 9998887755, 'ikinci123', '2024-05-01 03:37:54', NULL),
(5, 'tolga123', 'crazyboy', 'crazyboy@hotmail.com', 5553334422, 'tolga123', '2024-05-01 05:31:41', NULL),
(6, 'sdaasd', 'sdfsdf', 'asdasd@gmail.com', 2147483647, 'tlga', '2024-05-01 06:18:53', NULL),
(7, 'son', 'kayıt', '1111111@gmail.com', 2147483647, 'tlga123123', '2024-05-01 06:20:18', NULL),
(8, 'Alperen', 'Ovalı', 'alperenovali@gmail.com', 5554449837, 'alperenovali1', '2024-05-02 06:18:33', NULL);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kullanici`
--
ALTER TABLE `kullanici`
  ADD CONSTRAINT `kullanici_ibfk_1` FOREIGN KEY (`cuzdan_id_fk`) REFERENCES `cuzdan` (`cuzdan_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
