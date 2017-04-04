-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 10 Mars 2017 à 11:29
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `BEV8`
--

-- --------------------------------------------------------

--
-- Structure de la table `benevole`
--

CREATE TABLE `benevole` (
  `id` int(11) NOT NULL,
  `nom` tinytext NOT NULL,
  `prenom` tinytext NOT NULL,
  `mail` tinytext NOT NULL,
  `tel` int(10) NOT NULL,
  `encadrement_sportif` tinyint(1) DEFAULT NULL,
  `logistique` tinyint(1) DEFAULT NULL,
  `photo` tinyint(1) DEFAULT NULL,
  `video` tinyint(1) DEFAULT NULL,
  `loge_acceuil_artiste` tinyint(1) DEFAULT NULL,
  `cuisine` tinyint(1) DEFAULT NULL,
  `acceuil_proprete` tinyint(1) DEFAULT NULL,
  `vendredi` tinyint(1) DEFAULT NULL,
  `samedi_am` tinyint(1) DEFAULT NULL,
  `samedi_pm` tinyint(1) DEFAULT NULL,
  `dimanche_am` tinyint(1) DEFAULT NULL,
  `dimanche_pm` tinyint(1) DEFAULT NULL,
  `taille_tshirt` varchar(2) NOT NULL,
  `information` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `benevole`
--
ALTER TABLE `benevole`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `benevole`
--
ALTER TABLE `benevole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
