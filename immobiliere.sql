-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 nov. 2024 à 23:38
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionimmobiliere`
--

-- --------------------------------------------------------

--
-- Structure de la table `immobiliere`
--

CREATE TABLE `immobiliere` (
  `reference` varchar(4) NOT NULL,
  `proprietaire` varchar(20) NOT NULL,
  `localite` varchar(20) NOT NULL,
  `surface` int(11) NOT NULL,
  `nbPiece` int(11) NOT NULL,
  `domaineUsage` enum('bureau','domicile') NOT NULL,
  `Nature` enum('Appartement','Villa') NOT NULL,
  `nbEtage` int(11) DEFAULT NULL,
  `surfaceCommune` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `immobiliere`
--

INSERT INTO `immobiliere` (`reference`, `proprietaire`, `localite`, `surface`, `nbPiece`, `domaineUsage`, `Nature`, `nbEtage`, `surfaceCommune`) VALUES
('1', 'ena', 'mourouj', 5, 2, 'bureau', 'Appartement', NULL, 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `immobiliere`
--
ALTER TABLE `immobiliere`
  ADD PRIMARY KEY (`reference`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
