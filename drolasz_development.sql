-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Hoszt: localhost
-- Létrehozás ideje: 2013. febr. 08. 17:17
-- Szerver verzió: 5.5.16
-- PHP verzió: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `drolasz_development`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet: `collegues`
--

DROP TABLE IF EXISTS `collegues`;
CREATE TABLE IF NOT EXISTS `collegues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_hun` varchar(255) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `name_eng` varchar(255) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `title_hun` varchar(255) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `title_eng` varchar(255) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `description_hun` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `description_eng` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `position` int(11) NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- A tábla adatainak kiíratása `collegues`
--

INSERT INTO `collegues` (`id`, `name_hun`, `name_eng`, `title_hun`, `title_eng`, `description_hun`, `description_eng`, `image`, `position`, `slug`) VALUES
(1, 'dr. Olasz Balázs', 'dr. Balázs Olasz', 'Ügyvéd', 'Lawyer', 'magyar leírás', 'angol leírás', 'image.png', 0, 'dr-olasz-balazs'),
(3, 'dr. Olasz Balázs2', 'dr. Balázs Olasz2', 'Ügyvéd2', 'Lawyer2', 'magyar leírás2', 'angol leírás2', '', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
