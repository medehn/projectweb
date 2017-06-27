-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Jun 2017 um 16:44
-- Server-Version: 10.1.21-MariaDB
-- PHP-Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `rabenbund`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE Database Rabenbund;

Use Rabenbund;

CREATE TABLE `benutzer` (
  `userid` int(100) UNSIGNED NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userpassword` varchar(18) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `plz` int(10) UNSIGNED NOT NULL,
  `ort` varchar(20) NOT NULL,
  `funktion` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `interests` varchar(100) NOT NULL,
  `besucherid` int(11) DEFAULT NULL,
  `anumber` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `benutzer`
--

INSERT INTO `benutzer` (`userid`, `fname`, `lname`, `username`, `userpassword`, `birthdate`, `email`, `adress`, `plz`, `ort`, `funktion`, `skills`, `interests`, `besucherid`, `anumber`) VALUES
(1, 'Jason', 'Something', 'jasonman', 'raben&12', '1979-03-12', 'jason.79@gmai.com', 'Sonnenstraße', 6330, 'Kufstein', 'Noch nicht sicher', 'Bogenschießen, Boxen', 'Mittelalterliche Kultur, Natur, Schwertkampf', 1, '3a'),
(2, 'Julia', 'Mauer', 'mauerbluemchen', 'geheim?123', '1985-08-23', 'mjuly@hotmail.com', 'Apfelgasse', 6330, 'Kufstein', 'Noch nicht sicher', 'Stricken, Backen, Schwimmen', 'Natur, Botanik', 2, '2'),
(3, 'Hans', 'Hintermeer', 'schlagerlover23', '!loveschlag3r', '1990-02-02', 'hansi4ever@yahoo.de', 'Rehstraße', 6370, 'Kitzbühel', 'Lagerfeuerlieder singen', 'Gitarre spielen, Fechten, Jodeln', 'Mittelalterliche Kultur', 3, '45');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `besucher`
--

CREATE TABLE `besucher` (
  `besucherid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `eventid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `eventid` int(10) UNSIGNED NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tage` int(10) UNSIGNED NOT NULL,
  `zelt` varchar(10) NOT NULL,
  `car` varchar(10) NOT NULL,
  `carseats` int(10) UNSIGNED NOT NULL,
  `besucherid` int(10) UNSIGNED NOT NULL,
  `besuchername` varchar(100) NOT NULL,
  `sonstiges` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`userid`);

--
-- Indizes für die Tabelle `besucher`
--
ALTER TABLE `besucher`
  ADD PRIMARY KEY (`besucherid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `eventid` (`eventid`);

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `userid` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `besucher`
--
ALTER TABLE `besucher`
  MODIFY `besucherid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `events`
--
ALTER TABLE `events`
  MODIFY `eventid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `besucher`
--
ALTER TABLE `besucher`
  ADD CONSTRAINT `besucher_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `benutzer` (`userid`),
  ADD CONSTRAINT `besucher_ibfk_2` FOREIGN KEY (`eventid`) REFERENCES `events` (`eventid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


