-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8081
-- Czas generowania: 25 Sty 2021, 13:23
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `cwiczenia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `planety`
--

CREATE TABLE `planety` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `masa` varchar(25) NOT NULL,
  `odleglosc_od_gwiazdy` float NOT NULL,
  `promien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `planety`
--

INSERT INTO `planety` (`id`, `nazwa`, `masa`, `odleglosc_od_gwiazdy`, `promien`) VALUES
(1, 'Ziemia', '5,972E21 t', 149600000, 6371),
(2, 'Mars', '6,39E23 kg', 227900000, 3389.5),
(3, 'Jowisz', '1,898E27 kg', 778500000, 69911);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `planety`
--
ALTER TABLE `planety`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `planety`
--
ALTER TABLE `planety`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
