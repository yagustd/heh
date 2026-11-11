-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 24 nov. 2025 à 09:08
-- Par : Ivan Miller, HEH
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
-- Base de données : `walkingpets`
--
CREATE DATABASE IF NOT EXISTS `walkingpets` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `walkingpets`;

-- --------------------------------------------------------

--
-- Structure de la table `pets`
--

CREATE TABLE `pets` (
  `id_pet` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `walks` int(11) NOT NULL,
  `meals` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pets`
--

INSERT INTO `pets` (`id_pet`, `name`, `id_cat`, `walks`, `meals`, `comment`) VALUES
(1, 'Popote', 3, 0, 4, ''),
(2, 'Sultan', 1, 3, 2, ''),
(3, 'Radagast', 5, 1, 2, ''),
(4, 'Brownie', 0, 2, 3, 'Brownie est un raton-laveur.'),
(5, 'Kazar', 2, 1, 2, ''),
(6, 'Décibelle', 4, 0, 1, ''),
(7, 'Fafnir', 7, 0, 1, ''),
(8, 'Babouche', 2, 1, 2, ''),
(9, 'Dynamite', 1, 3, 2, 'Attention : Dynamite est en chaleur !'),
(10, 'Carpette', 1, 1, 2, ''),
(11, 'Bouldegome', 3, 1, 4, ''),
(12, 'Rasmus', 6, 0, 1, ''),
(13, 'Roro', 0, 1, 3, 'Roro est un cochon.'),
(14, 'Pistouille', 5, 0, 2, ''),
(15, 'Crapule', 6, 0, 1, 'Attention : Crapule mord les doigts !'),
(16, 'Babar', 1, 3, 3, ''),
(17, 'Patachon', 2, 0, 3, ''),
(18, 'Caramel', 2, 2, 3, ''),
(19, 'Doumi', 0, 1, 3, 'Doumi est un genre de bison... ou un yack... enfin une grosse vache poilues avec des cornes.'),
(20, 'Albator', 4, 0, 2, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id_pet`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pets`
--
ALTER TABLE `pets`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
