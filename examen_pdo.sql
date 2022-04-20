-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 20 avr. 2022 à 10:25
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `examen_pdo`
--

-- --------------------------------------------------------

--
-- Structure de la table `planet`
--

DROP TABLE IF EXISTS `planet`;
CREATE TABLE IF NOT EXISTS `planet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(7) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `diametre` int(9) DEFAULT NULL,
  `gravite` float DEFAULT NULL,
  `lien_nasa` varchar(180) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `planet`
--

INSERT INTO `planet` (`id`, `nom`, `type`, `diametre`, `gravite`, `lien_nasa`) VALUES
(1, 'Mercure', 'Tellurique', 4879, 3.7, 'https://solarsystem.nasa.gov/planets/mercury'),
(2, 'Vénus', 'Tellurique', 12104, 88.88, 'https://solarsystem.nasa.gov/planets/venus'),
(3, 'Terre', 'Tellurique', 12576, 9.79, 'https://solarsystem.nasa.gov/planets/earth'),
(4, 'Mars', 'Tellurique', 6792, 24.79, 'https://solarsystem.nasa.gov/planets/mars'),
(5, 'Jupiter', 'Gazeuse', 142984, 24.79, 'https://solarsystem.nasa.gov/planets/jupiter'),
(6, 'Saturne', 'Gazeuse', 120536, 10.44, 'https://solarsystem.nasa.gov/planets/saturn'),
(7, 'Uranus', 'Gazeuse', 51118, 8.87, 'https://solarsystem.nasa.gov/planets/uranus'),
(8, 'Neptune', 'Gazeuse', 49528, 11.15, 'https://solarsystem.nasa.gov/planets/neptune');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
