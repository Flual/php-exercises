-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Nov 2022 um 16:32
-- Server-Version: 10.4.19-MariaDB
-- PHP-Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `personendb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE `benutzer` (
  `BenutzerID` int(11) NOT NULL,
  `Benutzer` varchar(30) NOT NULL,
  `Kennwort` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `benutzer`
--

INSERT INTO `benutzer` (`BenutzerID`, `Benutzer`, `Kennwort`) VALUES
(1, 'heywood', 'samurai');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tanrede`
--

CREATE TABLE `tanrede` (
  `AnredeID` int(11) NOT NULL,
  `Anrede` varchar(4) NOT NULL,
  `Begruessung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tanrede`
--

INSERT INTO `tanrede` (`AnredeID`, `Anrede`, `Begruessung`) VALUES
(5, 'Herr', 'Sehr geehrter Herr'),
(8, 'Frau', 'Sehr geehrte Frau');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbenutzer`
--

CREATE TABLE `tbenutzer` (
  `BenutzerID` int(11) NOT NULL,
  `Benutzer` varchar(30) NOT NULL,
  `Kennwort` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tbenutzer`
--

INSERT INTO `tbenutzer` (`BenutzerID`, `Benutzer`, `Kennwort`) VALUES
(1, 'heywood', 'samurai');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tperson`
--

CREATE TABLE `tperson` (
  `PersonID` int(11) NOT NULL,
  `FKAnrede` int(11) NOT NULL,
  `Vorname` varchar(15) NOT NULL,
  `Nachname` varchar(100) NOT NULL,
  `FKPLZ` int(11) NOT NULL,
  `E-Mail` varchar(500) DEFAULT NULL,
  `Telefonnummer` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tperson`
--

INSERT INTO `tperson` (`PersonID`, `FKAnrede`, `Vorname`, `Nachname`, `FKPLZ`, `E-Mail`, `Telefonnummer`) VALUES
(1, 5, 'John', 'Doe', 8010, NULL, '+43 664 1234567'),
(2, 8, 'Susan', 'Hill', 8330, NULL, NULL),
(3, 5, 'Florian', 'Stangl', 8380, NULL, NULL),
(4, 5, 'Jan ', 'Palko', 8380, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tplz`
--

CREATE TABLE `tplz` (
  `PLZ` int(4) NOT NULL,
  `ORT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tplz`
--

INSERT INTO `tplz` (`PLZ`, `ORT`) VALUES
(8010, 'Graz'),
(8200, 'Gleisdorf'),
(8330, 'Feldbach'),
(8380, 'Jennersdorf');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`BenutzerID`);

--
-- Indizes für die Tabelle `tanrede`
--
ALTER TABLE `tanrede`
  ADD PRIMARY KEY (`AnredeID`);

--
-- Indizes für die Tabelle `tbenutzer`
--
ALTER TABLE `tbenutzer`
  ADD PRIMARY KEY (`BenutzerID`);

--
-- Indizes für die Tabelle `tperson`
--
ALTER TABLE `tperson`
  ADD PRIMARY KEY (`PersonID`),
  ADD KEY `FKAnrede` (`FKAnrede`),
  ADD KEY `FKPLZ` (`FKPLZ`);

--
-- Indizes für die Tabelle `tplz`
--
ALTER TABLE `tplz`
  ADD PRIMARY KEY (`PLZ`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `BenutzerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `tbenutzer`
--
ALTER TABLE `tbenutzer`
  MODIFY `BenutzerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `tperson`
--
ALTER TABLE `tperson`
  MODIFY `PersonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `tperson`
--
ALTER TABLE `tperson`
  ADD CONSTRAINT `tperson_ibfk_1` FOREIGN KEY (`FKAnrede`) REFERENCES `tanrede` (`AnredeID`),
  ADD CONSTRAINT `tperson_ibfk_2` FOREIGN KEY (`FKPLZ`) REFERENCES `tplz` (`PLZ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
