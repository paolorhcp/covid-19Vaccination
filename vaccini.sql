-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 24, 2021 alle 09:54
-- Versione del server: 10.4.18-MariaDB
-- Versione PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccini`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `consegne`
--

CREATE TABLE `consegne` (
  `dosi_somministrate` varchar(40) NOT NULL,
  `dosi_consegnate` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `consegne`
--

INSERT INTO `consegne` (`dosi_somministrate`, `dosi_consegnate`) VALUES
('644.201', '771.295');

-- --------------------------------------------------------

--
-- Struttura della tabella `somm_categoria`
--

CREATE TABLE `somm_categoria` (
  `categoria` varchar(100) NOT NULL,
  `somministrazioni` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `somm_categoria`
--

INSERT INTO `somm_categoria` (`categoria`, `somministrazioni`) VALUES
('Operatori Sanitari e Sociosanitari', '179.021'),
('Personale non sanitario', '182.386'),
('Ospiti Strutture Residenziali', '12.876'),
('Over 80', '170.962'),
('Forze Armate', '10.647'),
('Personale Scolastico', '88.309');

-- --------------------------------------------------------

--
-- Struttura della tabella `somm_eta`
--

CREATE TABLE `somm_eta` (
  `eta` varchar(40) NOT NULL,
  `somministrazioni` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `somm_eta`
--

INSERT INTO `somm_eta` (`eta`, `somministrazioni`) VALUES
('16-19', '467'),
('20-29', '44.062'),
('30-39', '73.169'),
('40-49', '94.281'),
('50-59', '125.489'),
('60-69', '88.222'),
('70-79', '15.383'),
('80-89', '176.443'),
('90+', '26.685');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
