-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 21 avr. 2022 à 19:36
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `login`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL,
  `nomUtilisateur` varchar(20) NOT NULL,
  `prenomUtilisateur` varchar(20) NOT NULL,
  `mdpUtilisateur` varchar(200) NOT NULL,
  `admin` tinyint(4) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `etat` tinyint(4) NOT NULL DEFAULT 1,
  `username` varchar(20) NOT NULL,
  `dateCreationUtilisateur` int(11) NOT NULL DEFAULT current_timestamp(),
  `sexe` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `mdpUtilisateur`, `admin`, `Email`, `etat`, `username`, `dateCreationUtilisateur`, `sexe`) VALUES
(17, 'Hoho', 'HoHo', '$2y$10$ZkBmZ.qDicZaQYf9.hTNEOSKVDdqI3KFyNeP3rYQiDN7hk.bnNnFy', NULL, 'taz@ta.com', 1, 'lili', 2147483647, 0),
(20, 'Torkh', 'Farah', '$2y$10$UlEwQA9nw4mBDp2Zj7PIXuPoqyRSUrltGFISBdJj7zlSd4jywvuuO', NULL, 'zied.jridi@esprit.tn', 1, 'zaydouna', 2147483647, 0),
(21, 'Hoho', 'Hihi', '$2y$10$nMQE1zdaAKLfjjMFkXMJb.iM8LaWmj83ctouVi95IqTUGG3h5UF0S', NULL, 'jrhejka@nban.com', 1, 'uefje', 2147483647, 0),
(22, 'Toto', 'Toto', '$2y$10$7jJWA9/8ZvYdKd6FBNelEe5GnImqS85pfjx0E1ymdN.qtAyfpeuvu', NULL, 'toto@toto.com', 1, 'toto', 2147483647, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
