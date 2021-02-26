-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 26. 11 2020 kl. 13:44:59
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `login`
--

CREATE TABLE `login` (
  `ID` int(4) UNSIGNED NOT NULL,
  `Username` varchar(65) CHARACTER SET utf8 NOT NULL,
  `Password` varchar(65) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `login`
--

INSERT INTO `login` (`ID`, `Username`, `Password`) VALUES
(2, 'Arman', 'Test1234'),
(3, 'Aalborg', 'Test1234'),
(4, 'Aarhus', 'Test1234'),
(5, 'Esbjerg', 'Test1234'),
(6, 'Hans', 'Test1234'),
(7, 'København', 'Test1234'),
(8, 'Kolding', 'Test1234'),
(9, 'Leif', 'Test1234'),
(10, 'Odense', 'Test1234'),
(11, 'Per', 'Test1234'),
(12, 'Preben', 'Test1234'),
(13, 'Randers', 'Test1234'),
(14, 'Ulla', 'Test1234'),
(15, 'Mathias', 'Test1234');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
