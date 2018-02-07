-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 06 feb 2018 om 10:35
-- Serverversie: 5.5.57-0+deb8u1
-- PHP-versie: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `Notes Module`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
`id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `text` text NOT NULL,
  `title` varchar(50) NOT NULL,
  `tags` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `notes`
--

INSERT INTO `notes` (`id`, `date`, `text`, `title`, `tags`) VALUES
(3, '1512570443', 'SELECT * FROM ''table'' WHERE ''title'' LIKE ''%$search%''', 'selecting from database', ''),
(5, '2017', 'creating -> file_put_contents(...)read -> file_get_contents(...) OR catupdate -> str_replace(...), preg_replace(...)delete -> str_replace(...), preg_replace(...)', 'CRUD', ''),
(27, '2017-12-12', 'A note; 2017-04-04, A B C; Hello World <[!]> this is textAnother note; 2017-05-05; D A C; yet another onesome note;2017-12-12; Note :PHP linux; use "grep" to find text <[!]> use"cat"to output a file.exec(''cat mylife) grep ":PHP"'',$result,$status (if you put : infront of the word and search it will only search for :and the work)//never made a $result but its fine here.//it will find everything with PHP in it.foreach($result as $res) for each that was in the $result will be stored in the $res{$res = explode (";", $res);$tag-found=preg-match(''/php:/'',$res);}/PHP|Note/  //this is how you let this search for 2 "tags"/.*?:(PHP/Note).*?:(PHP/Note)/ the first part searches for the same thing before an ; and the second one in between.', 'grep', ''),
(28, '2017-12-12', '1. cd /var/log/apache2/; 2. tail -f error.log', 'OPEN ERROR LOG!!', ''),
(29, '', 'hallo kevin', 'ey', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pivots`
--

CREATE TABLE IF NOT EXISTS `pivots` (
  `id_notes` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
`id` int(11) NOT NULL,
  `tag` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `notes`
--
ALTER TABLE `notes`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tags`
--
ALTER TABLE `tags`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `notes`
--
ALTER TABLE `notes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT voor een tabel `tags`
--
ALTER TABLE `tags`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
