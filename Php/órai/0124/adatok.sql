-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Hoszt: localhost
-- Létrehozás ideje: 2019. jan. 24. 11:09
-- Szerver verzió: 5.1.41
-- PHP verzió: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `3-15`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet: `adatok`
--

CREATE TABLE IF NOT EXISTS `adatok` (
  `ssz` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `pass` varchar(32) COLLATE utf8_hungarian_ci NOT NULL,
  `szint` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ssz`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=5 ;

--
-- A tábla adatainak kiíratása `adatok`
--

INSERT INTO `adatok` (`ssz`, `nev`, `pass`, `szint`) VALUES
(1, 'malacka', '6e0fb4e36bc2a315b008be397650e55e', 1),
(2, 'tigris', '0ed8c7ecf8e3b8afcba5dd24aa000cac', 1),
(3, 'micimacko', 'db5055a995a5d03cb05c9060a47072b6', 1),
(4, 'szia', '1f8f5713babce72789acefb089763cbb', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
