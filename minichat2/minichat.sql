-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  Dim 25 fév. 2018 à 16:26
-- Version du serveur :  5.6.38
-- Version de PHP :  7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat2`
--

DROP TABLE IF EXISTS `minichat2`;

CREATE TABLE `minichat2` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_message` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `minichat2`
--

INSERT INTO `minichat2` (`id`, `pseudo`, `message`, `date_message`) VALUES
(5, 'phil', 'Coucou', '2018-02-25 16:19:48'),
(6, 'phil', 'Dodo', '2018-02-25 16:20:01'),
(7, 'philippe', 'test', '2018-02-25 16:23:20');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `minichat2`
--
ALTER TABLE `minichat2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `minichat2`
--
ALTER TABLE `minichat2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
