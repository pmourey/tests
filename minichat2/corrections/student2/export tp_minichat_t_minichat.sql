-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 25 fév. 2018 à 15:11
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp_minichat`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_minichat`
--

DROP TABLE IF EXISTS `t_minichat`;
CREATE TABLE IF NOT EXISTS `t_minichat` (
  `Mc_id` int(11) NOT NULL AUTO_INCREMENT,
  `Mc_pseudo` varchar(100) NOT NULL,
  `Mc_message` text NOT NULL,
  `Mc_dateCreat` datetime NOT NULL,
  PRIMARY KEY (`Mc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_minichat`
--

INSERT INTO `t_minichat` (`Mc_id`, `Mc_pseudo`, `Mc_message`, `Mc_dateCreat`) VALUES
(1, 'mimi', 'ce jour , c est dimanche', '2018-02-25 11:52:45'),
(2, 'mimi', 'c\'est bien dimanche', '2018-02-25 11:56:12'),
(3, 'riri', 'vivement lundi', '2018-02-25 11:56:49'),
(4, '', '', '2018-02-25 11:57:42'),
(5, 'Rémi', 'que fait-on aujord\'hui ?', '2018-02-25 12:16:42'),
(6, 'tata', 'how do you do ?', '2018-02-25 12:22:17'),
(7, 'totor', 'uqesako ?', '2018-02-25 12:28:20'),
(8, 'tete', 'nouveau test', '2018-02-25 12:29:40'),
(9, 'rené', 'Où aller ?', '2018-02-25 12:36:58'),
(10, 'riri', 'à toulouse', '2018-02-25 12:39:06'),
(11, 'mumu', 'et la Bourgougne ?', '2018-02-25 12:43:56'),
(12, 'raimu', 'en Provence ?', '2018-02-25 13:36:13'),
(13, 'fifi', 'oupss !', '2018-02-25 13:37:00'),
(14, 'réré', 'allons à Paris', '2018-02-25 13:49:56'),
(15, 'meme', 'Marseille', '2018-02-25 13:53:18'),
(16, 'remi', 'ole', '2018-02-25 15:48:46'),
(17, 'michel', 'Cette fois c\'est bon !', '2018-02-25 16:02:24'),
(18, 'michel', 'allons en Tunisie !', '2018-02-25 16:08:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
