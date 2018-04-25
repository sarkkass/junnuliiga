-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25.04.2018 klo 13:57
-- Palvelimen versio: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `junnuliiga`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `sarja_f7`
--

CREATE TABLE `sarja_f7` (
  `joukkueNimi` varchar(30) NOT NULL,
  `yhtNimi` varchar(30) NOT NULL,
  `yhtEmail` varchar(30) NOT NULL,
  `yhtPhone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `sarja_f7`
--

INSERT INTO `sarja_f7` (`joukkueNimi`, `yhtNimi`, `yhtEmail`, `yhtPhone`) VALUES
('Fusion', 'N/A', 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Rakenne taululle `sarja_f8`
--

CREATE TABLE `sarja_f8` (
  `joukkueNimi` varchar(30) NOT NULL,
  `yhtNimi` varchar(30) NOT NULL,
  `yhtEmail` varchar(30) NOT NULL,
  `yhtPhone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `sarja_f8`
--

INSERT INTO `sarja_f8` (`joukkueNimi`, `yhtNimi`, `yhtEmail`, `yhtPhone`) VALUES
('Fuel', 'N/A', 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Rakenne taululle `sarja_f9`
--

CREATE TABLE `sarja_f9` (
  `joukkueNimi` varchar(30) NOT NULL,
  `yhtNimi` varchar(30) NOT NULL,
  `yhtEmail` varchar(30) NOT NULL,
  `yhtPhone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `sarja_f9`
--

INSERT INTO `sarja_f9` (`joukkueNimi`, `yhtNimi`, `yhtEmail`, `yhtPhone`) VALUES
('Outlaws', 'N/A', 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Rakenne taululle `sarja_f10`
--

CREATE TABLE `sarja_f10` (
  `joukkueNimi` varchar(30) NOT NULL,
  `yhtNimi` varchar(30) NOT NULL,
  `yhtEmail` varchar(30) NOT NULL,
  `yhtPhone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `sarja_f10`
--

INSERT INTO `sarja_f10` (`joukkueNimi`, `yhtNimi`, `yhtEmail`, `yhtPhone`) VALUES
('Spitfire', 'N/A', 'N/A', 'N/A');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
