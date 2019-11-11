-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 nov 2019 om 10:46
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitnesswebapp`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE `gebruiker` (
  `gebruikersID` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `aangemaakt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `oefening`
--

CREATE TABLE `oefening` (
  `oefeningID` int(11) NOT NULL,
  `naamOefening` varchar(255) NOT NULL,
  `hoeLangGedaan` time NOT NULL,
  `hoeZwaarGedaan` double DEFAULT NULL,
  `gebruikersID` int(11) NOT NULL,
  `waneer` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vitaliteit`
--

CREATE TABLE `vitaliteit` (
  `vitaliteitID` int(11) NOT NULL,
  `waneer` timestamp NOT NULL DEFAULT current_timestamp(),
  `waarde` double NOT NULL,
  `gebruikersID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`gebruikersID`);

--
-- Indexen voor tabel `oefening`
--
ALTER TABLE `oefening`
  ADD PRIMARY KEY (`oefeningID`),
  ADD KEY `gebruikersID` (`gebruikersID`);

--
-- Indexen voor tabel `vitaliteit`
--
ALTER TABLE `vitaliteit`
  ADD PRIMARY KEY (`vitaliteitID`),
  ADD KEY `gebruikersID` (`gebruikersID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `gebruikersID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `oefening`
--
ALTER TABLE `oefening`
  MODIFY `oefeningID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `vitaliteit`
--
ALTER TABLE `vitaliteit`
  MODIFY `vitaliteitID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `oefening`
--
ALTER TABLE `oefening`
  ADD CONSTRAINT `oefening_ibfk_1` FOREIGN KEY (`gebruikersID`) REFERENCES `gebruiker` (`gebruikersID`);

--
-- Beperkingen voor tabel `vitaliteit`
--
ALTER TABLE `vitaliteit`
  ADD CONSTRAINT `vitaliteit_ibfk_1` FOREIGN KEY (`gebruikersID`) REFERENCES `gebruiker` (`gebruikersID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
