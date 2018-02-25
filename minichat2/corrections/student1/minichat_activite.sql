-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 25 fév. 2018 à 14:44
-- Version du serveur :  5.7.19
-- Version de PHP :  7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat_activite`
--

DROP TABLE IF EXISTS `minichat_activite`;
CREATE TABLE IF NOT EXISTS `minichat_activite` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_message` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `minichat_activite`
--

INSERT INTO `minichat_activite` (`ID`, `pseudo`, `message`, `date_message`) VALUES
(1, 'Anna', 'Coucou !', '2018-02-24 18:16:28'),
(2, 'Anna', 'Coucou !', '2018-02-24 18:21:48'),
(3, 'Mélanie', 'Salut !', '2018-02-24 18:22:47'),
(4, 'Clément', 'Salut tout le monde, j\'me présente je m\'appelle Henri !', '2018-02-24 18:37:46'),
(5, 'Henri', 'Mais non, c\'est moi Henri !', '2018-02-24 18:50:40'),
(6, 'Henry', 'Ca dépend, si c\'est Henri ou Henry ;)', '2018-02-24 18:51:17'),
(7, 'Joëlle', 'J\'voudrais bien réussir ma vie, être aiméééééééééé !', '2018-02-25 13:19:34'),
(8, 'Hannah', 'Salut tout le monde !', '2018-02-25 15:31:31'),
(9, 'Cédric', 'Coucou les gens !!', '2018-02-25 15:32:46'),
(10, 'Violaine', '+1 !', '2018-02-25 15:33:57'),
(11, 'Violaine', 'Je me présente Violaine, enchantée d\'être parmie vous !', '2018-02-25 15:34:41'),
(12, 'Marie', 'Bienvenu(e)s à toutes et à tous !', '2018-02-25 15:35:03'),
(13, 'Marie', 'J\'aime beaucoup ton humour Joëlle x°', '2018-02-25 15:42:10'),
(14, 'Marie', 'x)*', '2018-02-25 15:42:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
