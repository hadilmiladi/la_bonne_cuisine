-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 19. Mai 2022 um 18:19
-- Server-Version: 10.4.22-MariaDB
-- PHP-Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `labonnecuisine`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `client`
--

CREATE TABLE `client` (
  `id` int(255) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `Dnaiss` date NOT NULL,
  `password` varchar(200) NOT NULL,
  `adresse` varchar(300) NOT NULL,
  `telephone` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `client`
--

INSERT INTO `client` (`id`, `prenom`, `nom`, `email`, `Dnaiss`, `password`, `adresse`, `telephone`) VALUES
(1, 'miladi', 'hadil', 'hadilmiladi37@gmail.com', '2022-05-28', 'hadil123', 'ariana', 55915815),
(8, 'Ous', 'Bel', 'mousbelaid@gmail.com', '2022-05-13', 'ous123', 'Ghazela Ariana', 28221997),
(14, 'oussama', 'belaid', 'mousbelaid@gmail.com', '2022-05-14', '12345', 'Ghazela Ariana', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`) VALUES
(1, 'Trabelsi', 'treza@fds.com', 'ddd', 'dddddddddddd'),
(3, 'd', 'gdf', 'fdf', 'dfdfdf');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `menu`
--

INSERT INTO `menu` (`id`, `nom`, `prix`) VALUES
(1, 'Salade Omek Houria', 12),
(2, 'Soupe Chorba', 8),
(3, 'Couscous', 16),
(4, 'Poisson du jour grillé', 21),
(5, 'Tajine', 9),
(6, 'Brik', 6),
(7, 'Plat Mixte', 19),
(9, 'Plat famille ', 39),
(13, 'Pasta Arrabiata', 14);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `temps` varchar(20) NOT NULL,
  `nombrepersonnes` varchar(20) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `reservations`
--

INSERT INTO `reservations` (`id`, `nom`, `email`, `telephone`, `date`, `temps`, `nombrepersonnes`, `message`) VALUES
(4, 'oussama', 'oussama.belaid@outlook.com', '28221997', '13.05', '17:00', '7', 'aaa'),
(6, 'Sadok', 'mousbelaid@gmail.com', '28221997', '18.07', '17:00', '5', 'pzaeojfnzfano'),
(8, 'sadok', 'mousbelaid@gmail.com', '28221997', '30.02', '13:00', '3', ''),
(13, 'Ous Bel', 'mousbelaid@gmail.com', '94113124', '18.07', '13:00', '5', ''),
(15, 'Ous Belaid', 'mousbelaid@gmail.com', '94113124', '18.07', '13:00', '5', ''),
(16, 'Ous Bel', 'mousbelaid@gmail.com', '94113124', '18.07', '13:00', '5', '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `client`
--
ALTER TABLE `client`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT für Tabelle `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT für Tabelle `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
