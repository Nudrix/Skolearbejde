-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 26. 11 2020 kl. 13:46:15
-- Serverversion: 10.4.14-MariaDB
-- PHP-version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opslag`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `opslag`
--

CREATE TABLE `opslag` (
  `ID` int(11) NOT NULL,
  `Username` tinytext NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Title` tinytext NOT NULL,
  `Input` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `opslag`
--

INSERT INTO `opslag` (`ID`, `Username`, `Date`, `Title`, `Input`) VALUES
(5, 'Arman', '2020-11-26', 'Documentation', 'Just to see how this works, this is for documentation purpose only.');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `opslag`
--
ALTER TABLE `opslag`
  ADD PRIMARY KEY (`ID`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `opslag`
--
ALTER TABLE `opslag`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
