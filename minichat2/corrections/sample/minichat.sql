-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 06 Avril 2014 à 19:49
-- Version du serveur: 5.5.29
-- Version de PHP: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE `minichat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_message` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `minichat`
--

INSERT INTO `minichat` (`ID`, `pseudo`, `message`, `date_message`) VALUES
(1, 'Mathieu', 'Bonjour !', '2014-04-03 17:22:11'),
(2, 'Tom', 'Salut toi !', '2014-04-03 17:23:10'),
(3, 'Mathieu', 'Ca va Tom ?', '2014-04-03 17:23:20'),
(4, 'Tom', 'Ben ouais, Ã§a fait un bail qu''on s''est pas vu !', '2014-04-03 17:24:01'),
(5, 'Mathieu', 'On devrait se revoir !', '2014-04-03 20:12:16'),
(6, 'Tom', 'Mais carrÃ©ment !', '2014-04-03 20:19:23'),
(7, 'Tom', 'Me revoici', '2014-04-03 20:30:48'),
(8, 'Tom', 'Me revoilÃ  !', '2014-04-03 20:32:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
