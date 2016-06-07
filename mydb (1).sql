-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 07. 06 2016 kl. 16:39:30
-- Serverversion: 5.7.9
-- PHP-version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `bruger`
--

DROP TABLE IF EXISTS `bruger`;
CREATE TABLE IF NOT EXISTS `bruger` (
  `navn` text,
  `kodeord` text,
  `gruppe` text,
  `email` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `bruger`
--

INSERT INTO `bruger` (`navn`, `kodeord`, `gruppe`, `email`) VALUES
('Mike', 'mike', 'Hundegruppen', 'Mikelangballejensen@gmail.com');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `gruppe`
--

DROP TABLE IF EXISTS `gruppe`;
CREATE TABLE IF NOT EXISTS `gruppe` (
  `navn` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `gruppe`
--

INSERT INTO `gruppe` (`navn`) VALUES
('Hundegruppen'),
('Dan Storm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
