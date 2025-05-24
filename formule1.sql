-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 mrt 2023 om 20:39
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formule1`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `circuit`
--

CREATE TABLE `circuit` (
  `circuit_id` int(3) NOT NULL,
  `Circuitnaam` varchar(45) NOT NULL,
  `Land` varchar(30) NOT NULL,
  `Plaats` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Gegevens worden geëxporteerd voor tabel `circuit`
--

INSERT INTO `circuit` (`circuit_id`, `Circuitnaam`, `Land`, `Plaats`) VALUES
(1, 'Bahrain International Circuit', 'Bahrein', 'Sakhir'),
(2, 'Jeddah Corniche Circuit', 'Saoedi-Arabië', 'Jeddah'),
(3, 'Albert Park Circuit', 'Australië', 'Melbourne'),
(4, 'Baku City Circuit', 'Azerbaijan', 'Baku'),
(5, 'Miami International Autodrome', 'Verenigde Staten', 'Miami Gardens'),
(6, 'Autodromo Internazionale Enzo e Dino Ferrari', 'Italië', 'Imola'),
(7, 'Circuit de Monaco', 'Monaco', 'Monte Carlo'),
(8, 'Circuit de Barcelona-Catalunya', 'Spanje', 'Montmeló'),
(9, 'Circuit Gilles Villeneuve', 'Canada', 'Montreal'),
(10, 'Red Bull Ring', 'Oostenrijk', 'Spielberg'),
(11, 'Silverstone Circuit', 'Groot-Brittannië', 'Silverstone'),
(12, 'Hungaroring', 'Hongarije', 'Mogyoród'),
(13, 'Circuit de Spa-Francorchamps', 'België', 'Stavelot'),
(14, 'Circuit Zandvoort', 'Nederland', 'Zandvoort'),
(15, 'Autodromo Nazionale Monza', 'Italië', 'Monza'),
(16, 'Marina Bay Street Circuit', 'Singapore', 'Marina Bay'),
(17, 'Suzuka Circuit', 'Japan', 'Ino'),
(18, 'Losail International Circuit', 'Qatar', 'Lusail'),
(19, 'Circuit of the Americas', 'Verenigde Staten', 'Austin'),
(20, 'Autódromo Hermandos Rodriguez', 'Mexico', 'Mexico City'),
(21, 'Autodromo Jose Carlos Pace Interlagos', 'Brazilië', 'São Paulo'),
(22, 'Las Vegas Street Circuit', 'Verenigde Staten ', 'Las Vegas'),
(23, 'Yas Marina Circuit', 'Verenigde Arabische Emiraten', 'Yas eiland');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `constructeurskampioen`
--

CREATE TABLE `constructeurskampioen` (
  `constructeurskampioen_id` int(2) NOT NULL,
  `team_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `constructeurskampioen`
--

INSERT INTO `constructeurskampioen` (`constructeurskampioen_id`, `team_id`) VALUES
(1, 1),
(2, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `coureurs`
--

CREATE TABLE `coureurs` (
  `Naam` varchar(30) NOT NULL,
  `Nationaliteit` varchar(30) NOT NULL,
  `Startnummer` int(2) DEFAULT NULL,
  `Geboortedatum` date NOT NULL,
  `Coureur_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `coureurs`
--

INSERT INTO `coureurs` (`Naam`, `Nationaliteit`, `Startnummer`, `Geboortedatum`, `Coureur_id`) VALUES
('Max Verstappen', 'NED', 1, '1997-09-30', 1),
('Charles Leclerc', 'MON', 16, '1997-10-16', 2),
('Sergio Pérez', 'MEX', 11, '1990-01-26', 3),
('George Russel', 'ENG', 63, '1998-02-15', 4),
('Carlos Sainz', 'ESP', 55, '1994-09-01', 5),
('Lewis Hamilton', 'ENG', 44, '1985-01-07', 6),
('Lando Norris', 'ENG', 4, '1999-11-16', 7),
('Esteban Ocon', 'FRA', 31, '1996-09-17', 8),
('Fernando Alonso', 'ESP', 14, '1981-07-29', 9),
('Valtteri Bottas', 'FIN', 77, '1989-08-28', 10),
('Daniel Ricciardo', 'AUS', 3, '1989-07-01', 11),
('Sebastian Vettel', 'GER', 5, '1987-07-03', 12),
('Kevin Magnussen', 'DEN', 20, '1992-10-05', 13),
('Pierre Gasly', 'FRA', 10, '1996-02-07', 14),
('Lance Stroll', 'CAN', 18, '1998-10-29', 15),
('Mick Schumacher', 'GER', 47, '1999-03-22', 16),
('Yuki Tsunoda', 'JAP', 22, '2000-06-11', 17),
('Zhou Guanyu', 'CHI', 24, '1999-06-30', 18),
('Alexander Albon', 'THA', 23, '1996-03-23', 19),
('Nicholas Latifi', 'CAN', 6, '1995-06-29', 20),
('Nyck de Vries', 'NED', 21, '1995-02-06', 21),
('Nico Hülkenberg', 'GER', 27, '1987-08-19', 22),
('Kimi Räikkönen', 'FIN', 7, '1979-10-17', 23),
('Antonio Giovinazzi', 'ITA', 99, '1993-12-14', 24),
('Robert Kubica', 'POL', 88, '1984-12-07', 25),
('Nikita Mazepin', 'RUS', 9, '1999-03-02', 26),
('Daniil Kvyat', 'RUS', 26, '1994-04-26', 27),
('Romain Grosjean', 'FRA', 8, '1986-04-17', 28),
('Jack Aitken', 'ENG', 89, '1995-09-23', 29),
('Pietro Fittipaldi', 'BRA', 51, '1996-06-25', 30),
('Stoffel Vandoorne', 'BEL', 2, '1992-03-26', 31),
('Marcus Ericsson', 'SWE', 9, '1990-09-02', 32),
('Brendon Hartley', 'NZL', 28, '1989-11-10', 33),
('Sergey Sirotkin', 'RUS', 35, '1995-08-27', 34),
('Felipe Massa', 'BRA', 19, '1981-04-25', 35),
('Jolyon Palmer', 'ENG', 30, '1991-01-20', 36),
('Pascal Wehrlein', 'GER', 94, '1994-10-18', 37),
('Nico Rosberg', 'GER', 6, '1985-06-27', 38),
('Jenson Button', 'ENG', 22, '1980-01-19', 39),
('Felipe Nasr', 'BRA', 12, '1992-08-21', 40),
('Esteban Gutiérrez', 'MEX', 21, '1991-08-05', 41),
('Rio Haryanto', 'INO', 88, '1993-01-22', 42),
('Pastor Maldonado', 'VEN', 13, '1985-03-09', 43),
('Roberto Merhi', 'SPA', 98, '1991-03-22', 44),
('Alexander Rossi', 'USA', 53, '1991-09-25', 45),
('Will Stevens', 'ENG', 28, '1991-06-28', 46),
('Jean-Éric Vergne', 'FRA', 25, '1990-04-25', 47),
('Jules Bianchi', 'FRA', 17, '1989-08-03', 48),
('Adrian Sutil', 'GER', 99, '1983-01-11', 49),
('Max Chilton', 'ENG', 4, '1991-04-21', 50),
('Kamui Kobayashi', 'JAP', 10, '1986-09-13', 51),
('Mark Webber', 'AUS', NULL, '1976-08-27', 52),
('Paul Di Resta', 'ENG', NULL, '1986-04-16', 53),
('Charles Pic', 'FRA', NULL, '1990-02-15', 54),
('Heikki Kovalainen', 'FIN', NULL, '1981-10-19', 55),
('Giedo van der Garde', 'NED', NULL, '1985-04-25', 56),
('Oscar Piastri', 'AUS', 81, '2001-04-06', 57),
('Logan Sargeant', 'USA', 2, '2000-12-31', 58);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `coureurs_per_team`
--

CREATE TABLE `coureurs_per_team` (
  `cpt_id` int(11) NOT NULL,
  `seizoen_id` int(3) NOT NULL,
  `team_id` int(3) NOT NULL,
  `1e_coureur` int(3) NOT NULL,
  `2e_coureur` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `coureurs_per_team`
--

INSERT INTO `coureurs_per_team` (`cpt_id`, `seizoen_id`, `team_id`, `1e_coureur`, `2e_coureur`) VALUES
(1, 1, 1, 1, 3),
(2, 1, 2, 2, 5),
(3, 1, 3, 6, 4),
(4, 1, 4, 8, 9),
(5, 1, 5, 7, 11),
(6, 1, 6, 10, 18),
(7, 1, 7, 12, 15),
(8, 1, 8, 13, 16),
(9, 1, 9, 14, 17),
(10, 1, 10, 19, 20),
(11, 2, 3, 6, 10),
(12, 2, 1, 1, 3),
(13, 2, 2, 2, 5),
(14, 2, 5, 7, 11),
(15, 2, 4, 9, 8),
(16, 2, 9, 14, 17),
(17, 2, 7, 12, 15),
(18, 2, 10, 4, 20),
(19, 2, 6, 23, 24),
(20, 2, 8, 16, 26);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `functies`
--

CREATE TABLE `functies` (
  `functie_id` int(11) NOT NULL,
  `functie` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `functies`
--

INSERT INTO `functies` (`functie_id`, `functie`) VALUES
(1, 'Teambaas'),
(2, 'Strategist'),
(3, 'Monteur'),
(4, 'Technisch directeur'),
(5, 'Reserve coureur'),
(6, 'Media team'),
(7, 'Overige');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `gebruikers_id` int(11) NOT NULL,
  `naam` varchar(25) NOT NULL,
  `wachtwoord` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`gebruikers_id`, `naam`, `wachtwoord`) VALUES
(1, 'sebastiaan', 'da4b9237bacccdf19c0760cab7aec4a8359010b0'),
(2, 'Jayden', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(3, 'hallo', 'da4b9237bacccdf19c0760cab7aec4a8359010b0'),
(4, 'Julian', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(7, 'Mr de Ruiter', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personeel`
--

CREATE TABLE `personeel` (
  `team_id` int(11) NOT NULL,
  `naam` varchar(30) NOT NULL,
  `geboortedatum` date NOT NULL,
  `functie_id` int(11) NOT NULL,
  `personeel_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `personeel`
--

INSERT INTO `personeel` (`team_id`, `naam`, `geboortedatum`, `functie_id`, `personeel_id`) VALUES
(1, 'Christian Horner', '1973-11-16', 1, 1),
(3, 'Toto Wolff', '1972-01-12', 1, 2),
(1, 'Andrew Newey', '1958-12-26', 4, 3),
(5, 'Zak Brown', '1971-11-07', 1, 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `race_uitslagen`
--

CREATE TABLE `race_uitslagen` (
  `ru_id` int(11) NOT NULL,
  `race_id` int(11) NOT NULL,
  `seizoen_id` int(11) NOT NULL,
  `circuit_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `coureur_id` int(11) NOT NULL,
  `punten` int(11) NOT NULL,
  `sprintrace` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `race_uitslagen`
--

INSERT INTO `race_uitslagen` (`ru_id`, `race_id`, `seizoen_id`, `circuit_id`, `team_id`, `coureur_id`, `punten`, `sprintrace`) VALUES
(1, 1, 1, 21, 3, 4, 26, 0),
(2, 1, 1, 21, 3, 6, 18, 0),
(3, 1, 1, 21, 2, 5, 15, 0),
(4, 1, 1, 21, 2, 2, 12, 0),
(5, 1, 1, 21, 4, 9, 10, 0),
(6, 1, 1, 21, 1, 1, 8, 0),
(7, 1, 1, 21, 1, 3, 6, 0),
(8, 1, 1, 21, 4, 8, 4, 0),
(9, 99, 99, 99, 99, 99, 99, 99),
(10, 1, 1, 21, 7, 15, 1, 0),
(11, 2, 1, 21, 3, 4, 8, 1),
(12, 2, 1, 21, 2, 5, 7, 1),
(13, 2, 1, 21, 3, 6, 6, 1),
(14, 2, 1, 21, 1, 1, 5, 1),
(15, 2, 1, 21, 1, 3, 4, 1),
(16, 2, 1, 21, 2, 2, 3, 1),
(17, 2, 1, 21, 5, 45, 2, 1),
(18, 2, 1, 21, 8, 13, 1, 1),
(19, 2, 1, 21, 7, 12, 0, 1),
(20, 2, 1, 21, 9, 14, 0, 1),
(21, 3, 2, 23, 1, 1, 26, 0),
(22, 3, 2, 23, 3, 6, 18, 0),
(23, 3, 2, 23, 2, 5, 15, 0),
(24, 3, 2, 23, 9, 17, 12, 0),
(25, 3, 2, 23, 9, 14, 10, 0),
(88, 99, 99, 99, 99, 99, 99, 99);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `seizoenen`
--

CREATE TABLE `seizoenen` (
  `seizoen_id` int(11) NOT NULL,
  `seizoennummer` varchar(5) NOT NULL,
  `kampioen_id` int(2) NOT NULL,
  `aantalraces` varchar(2) NOT NULL,
  `constructeurkampioen_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `seizoenen`
--

INSERT INTO `seizoenen` (`seizoen_id`, `seizoennummer`, `kampioen_id`, `aantalraces`, `constructeurkampioen_id`) VALUES
(1, '2022', 1, '22', 1),
(2, '2021', 1, '22', 3),
(3, '2020', 2, '17', 3),
(4, '2019', 2, '21', 3),
(6, '2018', 2, '21', 3),
(7, '2017', 2, '20', 3),
(8, '2016', 3, '21', 3),
(9, '2015', 2, '19', 3),
(10, '2014', 2, '19', 3),
(11, '2013', 4, '19', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `statistieken`
--

CREATE TABLE `statistieken` (
  `coureur_id` int(3) NOT NULL,
  `Wins` int(3) NOT NULL,
  `Poles` int(3) NOT NULL,
  `Podiums` int(3) NOT NULL,
  `DNFs` int(3) NOT NULL,
  `Races` int(3) NOT NULL,
  `Seizoenen` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `statistieken`
--

INSERT INTO `statistieken` (`coureur_id`, `Wins`, `Poles`, `Podiums`, `DNFs`, `Races`, `Seizoenen`) VALUES
(1, 35, 20, 77, 31, 21, 8),
(2, 5, 18, 24, 17, 102, 5),
(3, 4, 1, 26, 31, 235, 12),
(4, 1, 2, 9, 13, 82, 4),
(5, 1, 3, 15, 32, 162, 8),
(6, 103, 103, 191, 29, 310, 16),
(7, 0, 1, 6, 10, 82, 4),
(8, 1, 0, 2, 14, 111, 6),
(9, 32, 22, 98, 73, 355, 19),
(10, 10, 20, 67, 23, 200, 10),
(11, 8, 3, 32, 36, 232, 12),
(12, 53, 57, 122, 43, 299, 16),
(13, 0, 1, 1, 27, 141, 8),
(14, 1, 0, 3, 18, 108, 6),
(15, 0, 1, 3, 21, 122, 6),
(16, 0, 0, 0, 5, 43, 2),
(17, 0, 0, 0, 8, 42, 2),
(18, 0, 0, 0, 6, 22, 1),
(19, 0, 0, 2, 8, 59, 3),
(20, 0, 0, 0, 13, 61, 3),
(21, 0, 0, 0, 0, 1, 1),
(22, 0, 1, 0, 36, 181, 11),
(23, 21, 18, 103, 72, 350, 19),
(24, 0, 0, 0, 7, 62, 4),
(25, 1, 1, 12, 14, 99, 7),
(26, 0, 0, 0, 5, 21, 1),
(27, 0, 0, 3, 22, 110, 6),
(28, 0, 0, 10, 50, 179, 11),
(29, 0, 0, 0, 0, 1, 1),
(30, 0, 0, 0, 0, 2, 1),
(31, 0, 0, 0, 8, 41, 3),
(32, 5, 0, 0, 23, 97, 5),
(33, 0, 0, 0, 8, 25, 2),
(34, 0, 0, 0, 3, 21, 1),
(35, 11, 16, 41, 42, 269, 15),
(36, 0, 0, 0, 9, 35, 2),
(37, 0, 0, 0, 7, 39, 2),
(38, 23, 30, 57, 32, 206, 11),
(39, 15, 8, 50, 75, 306, 18),
(40, 0, 0, 0, 6, 39, 2),
(41, 0, 0, 0, 15, 59, 3),
(42, 0, 0, 0, 3, 12, 1),
(43, 1, 1, 1, 32, 95, 5),
(44, 0, 0, 0, 1, 13, 1),
(45, 0, 0, 0, 0, 5, 1),
(46, 0, 0, 0, 3, 18, 2),
(47, 0, 0, 0, 15, 58, 3),
(48, 0, 0, 0, 7, 34, 2),
(49, 0, 0, 0, 44, 128, 7),
(50, 0, 0, 0, 3, 35, 2),
(51, 0, 0, 1, 22, 75, 5),
(52, 9, 13, 42, 57, 215, 12),
(53, 0, 0, 0, 11, 59, 4),
(54, 0, 0, 0, 10, 39, 2),
(55, 1, 1, 4, 22, 111, 7),
(56, 0, 0, 0, 4, 19, 1),
(57, 0, 0, 0, 1, 1, 1),
(58, 0, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `teams`
--

CREATE TABLE `teams` (
  `team_id` int(3) NOT NULL,
  `Teamnaam` varchar(30) NOT NULL,
  `Nationaliteit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Gegevens worden geëxporteerd voor tabel `teams`
--

INSERT INTO `teams` (`team_id`, `Teamnaam`, `Nationaliteit`) VALUES
(1, 'Red Bull Racing', 'AST'),
(2, 'Ferrari', 'ITA'),
(3, 'Mercedes', 'GER'),
(4, 'Alpine', 'FRA'),
(5, 'McLaren', 'ENG'),
(6, 'Alfa Romeo', 'ITA'),
(7, 'Aston Martin', 'ENG'),
(8, 'Haas', 'USA'),
(9, 'AlphaTauri', 'ITA'),
(10, 'Williams', 'ENG'),
(11, 'Racing Point', 'ENG'),
(12, 'Renault', 'FRA'),
(13, 'Toro Rosso', 'ITA'),
(14, 'Force India', 'IND'),
(15, 'Sauber', 'SWI'),
(16, 'Manor', 'ENG'),
(17, 'Lotus', 'ENG'),
(18, 'Marussia', 'RUS'),
(19, 'Caterham', 'MAL');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `wereldkampioen`
--

CREATE TABLE `wereldkampioen` (
  `kampioen_id` int(2) NOT NULL,
  `coureur_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `wereldkampioen`
--

INSERT INTO `wereldkampioen` (`kampioen_id`, `coureur_id`) VALUES
(1, 1),
(2, 6),
(3, 22),
(4, 12);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `circuit`
--
ALTER TABLE `circuit`
  ADD PRIMARY KEY (`circuit_id`);

--
-- Indexen voor tabel `constructeurskampioen`
--
ALTER TABLE `constructeurskampioen`
  ADD PRIMARY KEY (`constructeurskampioen_id`);

--
-- Indexen voor tabel `coureurs`
--
ALTER TABLE `coureurs`
  ADD PRIMARY KEY (`Coureur_id`);

--
-- Indexen voor tabel `coureurs_per_team`
--
ALTER TABLE `coureurs_per_team`
  ADD PRIMARY KEY (`cpt_id`);

--
-- Indexen voor tabel `functies`
--
ALTER TABLE `functies`
  ADD PRIMARY KEY (`functie_id`);

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`gebruikers_id`);

--
-- Indexen voor tabel `personeel`
--
ALTER TABLE `personeel`
  ADD PRIMARY KEY (`personeel_id`);

--
-- Indexen voor tabel `race_uitslagen`
--
ALTER TABLE `race_uitslagen`
  ADD PRIMARY KEY (`ru_id`);

--
-- Indexen voor tabel `seizoenen`
--
ALTER TABLE `seizoenen`
  ADD PRIMARY KEY (`seizoen_id`);

--
-- Indexen voor tabel `statistieken`
--
ALTER TABLE `statistieken`
  ADD PRIMARY KEY (`coureur_id`);

--
-- Indexen voor tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexen voor tabel `wereldkampioen`
--
ALTER TABLE `wereldkampioen`
  ADD PRIMARY KEY (`kampioen_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `circuit`
--
ALTER TABLE `circuit`
  MODIFY `circuit_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT voor een tabel `constructeurskampioen`
--
ALTER TABLE `constructeurskampioen`
  MODIFY `constructeurskampioen_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `coureurs`
--
ALTER TABLE `coureurs`
  MODIFY `Coureur_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT voor een tabel `coureurs_per_team`
--
ALTER TABLE `coureurs_per_team`
  MODIFY `cpt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT voor een tabel `functies`
--
ALTER TABLE `functies`
  MODIFY `functie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `gebruikers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `personeel`
--
ALTER TABLE `personeel`
  MODIFY `personeel_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT voor een tabel `race_uitslagen`
--
ALTER TABLE `race_uitslagen`
  MODIFY `ru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- AUTO_INCREMENT voor een tabel `seizoenen`
--
ALTER TABLE `seizoenen`
  MODIFY `seizoen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT voor een tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=810;

--
-- AUTO_INCREMENT voor een tabel `wereldkampioen`
--
ALTER TABLE `wereldkampioen`
  MODIFY `kampioen_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
