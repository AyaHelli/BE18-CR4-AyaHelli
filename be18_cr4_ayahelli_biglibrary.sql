-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 25. Mrz 2023 um 18:06
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `be18_cr4_ayahelli_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be18_cr4_ayahelli_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be18_cr4_ayahelli_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `ISBN` int(11) NOT NULL,
  `short_description` text NOT NULL,
  `type` enum('book','CD','DVD') DEFAULT 'book',
  `author_first_name` varchar(50) NOT NULL,
  `author_last_name` varchar(50) NOT NULL,
  `publischer_name` varchar(50) NOT NULL,
  `publischer_address` varchar(150) NOT NULL,
  `publisch_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `library`
--

INSERT INTO `library` (`id`, `title`, `image`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publischer_name`, `publischer_address`, `publisch_date`) VALUES
(1, 'Book mockup', 'https://graphicgoogle.com/wp-content/uploads/2018/06/Free-Book-Cover-Mockup-PSD-For-Branding-3.jpg', 679745580, 'The book description goes most prominently on the back cover, and the top of your  page (below the price and above the book reviews). It’s crucial it be compelling, because readers make buying decisions from the book description.\r\n', 'book', 'amo ibrahim', 'hassan', 'abo nidal', 'New York', '2013-03-11'),
(2, 'Nature kingdom', 'https://dfb503wu29eo2.cloudfront.net/slir/h1200/png24-front/bookcover0010361.jpg', 76876883, 'The book description goes most prominently on the back cover, and the top of your  page (below the price and above the book reviews). It’s crucial it be compelling, because readers make buying decisions from the book description.', 'book', 'fadi', 'daher', 'yosef', 'lebanon', '2018-03-14'),
(3, 'Behind the stars', 'https://images.template.net/wp-content/uploads/2018/04/Behind-the-Stars-Wattpad-Book-Cover.jpg?width=600', 978548865, 'The book description is the pitch to the reader about why they should buy your book. When done right, it directly drives book sales. There are so many examples of how book description.', 'book', 'Aya', 'Helli', 'Aya Helli', 'Aleppo', '2014-02-18'),
(4, 'Software', 'https://cdn.pixabay.com/photo/2014/08/14/10/38/software-417880__480.jpg', 86335897, 'CDs bestehen aus Polycarbonat sowie einer dünnen Metallschicht (z. B. Aluminiumbedampfung) mit Schutzlack und Druckfarben. Sie werden – im Gegensatz zu Schallplatten – nicht gepresst', 'CD', 'Mabaaref', 'baaref', 'zaki', 'turkei', '2013-01-10'),
(8, 'digital video disc', 'https://cdn.pixabay.com/photo/2014/09/14/16/38/privacy-policy-445153__480.jpg', 8775545, 'DVD, in full digital video disc or digital versatile disc, type of optical disc used for data storage and as a platform for multimedia. Its most prominent commercial application is for playing back recorded motion pictures and television programs (hence the designation', 'DVD', 'Tabekh', 'akel', 'joaan', 'Aleppo', '0000-00-00'),
(14, '', 'book.jpg', 0, '', '', '', '', '', '', '0000-00-00');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
