-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Mar 2019, 09:09
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `gallery_db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `photos`
--

INSERT INTO `photos` (`photo_id`, `title`, `description`, `filename`, `type`, `size`) VALUES
(1, 'tytu?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'filename', 'type', 12),
(2, 'tytul', 'descriptio', 'filename', 'type', 12),
(3, 'Example_photo', '', '', '', 20),
(4, 'Example_photo', '', '', '', 20),
(5, 'Example_photo', '', '', '', 20),
(6, '23', '', 'images_2.jpg', 'image/jpeg', 18578),
(7, '1', '', 'image-1 copy.jpg', 'image/jpeg', 328747),
(8, '', '', 'image-1.jpg', 'image/jpeg', 328747);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'kielich', '123', 'Karolina', 'Kielich'),
(2, 'marczyk', '123', 'Kazimierz', 'Marczyk'),
(8, '', '', '', 'Babaa'),
(10, 'Example_username', 'Example_password', 'Joe', 'Babaa'),
(11, 'Example_username', 'Example_password', 'Joe', 'Babaa'),
(12, 'Example_username', 'Example_password', 'Joe', 'Babaa'),
(13, 'Example_username', 'Example_password', 'Joe', 'Babaa'),
(14, 'Example_username', 'Example_password', 'Joe', 'Babaa'),
(15, 'Example_username', 'Example_password', 'Joe', ''),
(16, 'Example_username', 'Example_password', 'Joe', ''),
(17, 'Example_username', 'Example_password', 'Joe', ''),
(18, 'Example_username', 'Example_password', 'Joe', ''),
(19, '', '', '', 'aaaaaa'),
(20, '', '', '', 'Babaasssssss'),
(21, 'Example_username', 'Example_password', 'Joe', ''),
(22, 'Example_username', 'Example_password', 'Joe', ''),
(23, 'Example_username', 'Example_password', 'Joe', 'Babaa'),
(25, 'Example_username', 'Example_password', 'Joe', 'Babaa'),
(26, 'Example_username', 'Example_password', 'Joe', 'Babaa');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
