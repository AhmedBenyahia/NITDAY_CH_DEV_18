-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 07 avr. 2018 à 22:49
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
-- Base de données :  `talibtounsi`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NumRue` int(11) NOT NULL,
  `Ville` int(11) NOT NULL,
  `Code postal` int(11) NOT NULL,
  `Gouvernorat` int(11) NOT NULL,
  `Pays` int(11) NOT NULL,
  `Téléphone` int(11) NOT NULL,
  `Profession` int(11) NOT NULL,
  `e-mail` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `N° et Rue` (`NumRue`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `cin` int(11) NOT NULL,
  `prenom` varchar(115) NOT NULL,
  `nom` varchar(115) NOT NULL,
  `Nom de jeune fille` varchar(255) NOT NULL,
  `dateNaissance` date NOT NULL,
  `lieuNaissance` varchar(225) NOT NULL,
  `Gouvernorat de naissance` varchar(255) NOT NULL,
  `Pays de naissance` varchar(255) NOT NULL,
  `Nationalité` varchar(255) NOT NULL,
  `N° de passeport` int(11) NOT NULL,
  `Etat civil` varchar(255) NOT NULL,
  `etablissement` varchar(255) NOT NULL,
  `Année du bac` int(11) NOT NULL,
  `Section` int(11) NOT NULL,
  `Mention` int(11) NOT NULL,
  `adresseID` int(11) NOT NULL,
  `passwd` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`cin`),
  UNIQUE KEY `passwd` (`passwd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
