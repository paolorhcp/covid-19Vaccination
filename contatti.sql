-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 24, 2021 alle 09:52
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
-- Database: `contatti`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `nome` varchar(40) NOT NULL,
  `cognome` varchar(40) NOT NULL,
  `codice_fiscale` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `numero` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`nome`, `cognome`, `codice_fiscale`, `email`, `password`, `numero`) VALUES
('Paolo', 'Villani', 'VLLPLA95B28', 'p.villani10@studenti.unisa.it', 'Paolo95', '3892341630'),
('Diego', 'Villani', 'VLLDGA91', 'diegovillani@hotmail.it', 'Diego91', '3466382210'),
('Mario', 'Rossi', 'MAR85RSI', 'mariorossi@gmail.com', 'Mario85', '3894563217'),
('Vincenzo', 'De Luca', 'VLL60DLU', 'vincenzodeluca@gmail.com', 'DeLuca60', '0815146978'),
('Mario', 'Draghi', 'MAR70DR', 'm.draghi@governo.it', 'Mario70', '026459871');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
