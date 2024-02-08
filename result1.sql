-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 07:49 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result_processing`
--

-- --------------------------------------------------------

--
-- Table structure for table `result1`
--

CREATE TABLE `result1` (
  `SN` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `REG_NUMBER` varchar(10) NOT NULL,
  `ENGLISH` varchar(10) NOT NULL,
  `MATHEMATICS` varchar(10) NOT NULL,
  `BIOLOGY` varchar(10) NOT NULL,
  `CHEMISTRY` varchar(10) NOT NULL,
  `BASIC_SCIENCE` varchar(10) NOT NULL,
  `CIVIC_EDUCATION` varchar(10) NOT NULL,
  `BASIC_TECHNOLOGY` varchar(10) NOT NULL,
  `PHYSICS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result1`
--

INSERT INTO `result1` (`SN`, `NAME`, `REG_NUMBER`, `ENGLISH`, `MATHEMATICS`, `BIOLOGY`, `CHEMISTRY`, `BASIC_SCIENCE`, `CIVIC_EDUCATION`, `BASIC_TECHNOLOGY`, `PHYSICS`) VALUES
(1, 'MUHAMMADU ISA', '422477', '50', '51', '52', '53', '54', '55', '56', '57'),
(2, 'ABBA ISA', '422478', '23', '24', '25', '26', '27', '28', '29', '30'),
(3, 'MUSA NI', '422479', '34', '35', '36', '37', '38', '39', '40', '41'),
(4, 'SADA MATI', '422480', '45', '46', '47', '48', '49', '50', '51', '52'),
(5, 'SADIQ SANI', '422481', '23', '24', '25', '26', '27', '28', '29', '30'),
(6, 'MUSA SADA', '422482', '56', '57', '58', '59', '60', '61', '62', '63'),
(7, 'RUKAYYA ISA', '422483', '43', '44', '45', '46', '47', '48', '49', '50'),
(8, 'ABDULBARI MAMUDA', '422484', '44', '45', '46', '47', '48', '49', '50', '51'),
(9, 'ALAMIN ABBA', '422485', '45', '46', '47', '48', '49', '50', '51', '52'),
(10, 'YUSUF BELLO', '422486', '46', '47', '48', '49', '50', '51', '52', '53'),
(11, 'ALIYU LAWAL', '422487', '48', '49', '50', '51', '19', '20', '70', '22'),
(12, 'ABRAHAM ABUBAKAR', '422488', '49', '50', '51', '52', '62', '63', '64', '65'),
(13, 'ZAINAB BELLO', '422489', '50', '51', '52', '53', '60', '50', '33', '34'),
(14, 'ZAINAB MUKHTAR', '422490', '51', '52', '53', '54', '40', '50', '30', '34'),
(15, 'ZAINAB SANI ABUBAKAR', '422491', '53', '54', '55', '56', '52', '53', '54', '55'),
(16, 'RABIATU KABIR MUSA', '422492', '54', '55', '56', '57', '41', '42', '43', '44'),
(17, 'BADIYA ALIYU', '422493', '55', '56', '57', '58', '30', '31', '32', '33'),
(18, 'BAKIYA MUHAMMADU', '422494', '56', '57', '58', '59', '50', '40', '50', '60'),
(19, 'HAJARA HARUNA', '422495', '57', '58', '59', '60', '50', '59', '56', '77'),
(20, 'HURERA MUHAMMADU', '422496', '70', '60', '61', '62', '60', '50', '70', '60'),
(0, 'NAME', 'REG. NUMBE', 'ENGLISH', 'MATHEMATIC', 'BIOLOGY', 'CHEMISTRY', 'BASIC SCIE', 'CIVIC EDUC', 'BASIC TECH', 'PHYSICS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result1`
--
ALTER TABLE `result1`
  ADD UNIQUE KEY `REG_NUMBER` (`REG_NUMBER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
