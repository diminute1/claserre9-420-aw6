-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 21 Octobre 2019 à 13:31
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `420-aw6-ro`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_etu` int(7) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `note` int(11) NOT NULL,
  `id_groupe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etu`, `prenom`, `nom`, `mdp`, `note`, `id_groupe`) VALUES
(1509001, 'Eliot Dimitri', 'Djoumessi', '$2y$10$kCbvQDpH0Eq5TFdnaJaWuO/AYfsoSa.Y48vIa3Qe9tOLFO1Ja/yma', 0, 2),
(1670095, 'Xavier', 'Bricault', '$2y$10$jp.A8bozgFgKxWXpVNTF0OGiPti1H5C/x.qHIZGe3rvn50TaZlDVK', 0, 1),
(1702089, 'Clifford', 'Laserre', '$2y$10$.5fW4P9OfvT28iuC5kHVBesaMFs3C/XLkfR9u6YM9DsP7DP1Zb3eK', 0, 3),
(1767504, 'Esteban', 'Sanchez', '$2y$10$XRPylBtQVn9vTWNlrNKhS.pW53Lay2UUEnLAQoQcW9uBw4QzZNhBa', 0, 1),
(1788866, 'Daissy Johanna', 'Rodriguez Barajas', '$2y$10$G5qOdkFaRiq9mzzGSJcncOdmoI1lVNo71rmpAIRsYhYJm9OvY0H0m', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `nom_groupe` varchar(30) NOT NULL,
  `id_prof` varchar(50) NOT NULL,
  `session` varchar(12) NOT NULL,
  `annee` int(4) NOT NULL,
  `id_groupe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `groupe`
--

INSERT INTO `groupe` (`nom_groupe`, `id_prof`, `session`, `annee`, `id_groupe`) VALUES
('Dimanche', 'claserre9@gmail.com', 'Automne', 2019, 1),
('ffeff', 'talmag9@gmail.com', 'Automne', 2019, 2),
('Jeudi', 'claserre9@gmail.com', 'Automne', 2019, 3),
('Mardi', 'claserre9@gmail.com', 'Automne', 2019, 4),
('Mardi', 'talmag9@gmail.com', 'Automne', 2019, 5),
('Mercredi', 'talmag9@gmail.com', 'Été', 2019, 6),
('test', 'claserre9@gmail.com', 'Automne', 2023, 7),
('Vendredi', 'talmag9@gmail.com', 'Automne', 2019, 8);

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `courriel` varchar(50) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `professeur`
--

INSERT INTO `professeur` (`courriel`, `nom`, `prenom`, `motdepasse`) VALUES
('claserre9@gmail.com', 'Laserre', 'Clifford', '$2y$10$yTij.No15RLk.GdBeOmqBelvRuU3BlWaGKwKyYwOvBgn4sCgE7Tdq'),
('daroseda@gmail.com', 'Jean Baptiste', 'Roselaure', '$2y$10$vp./HrRdGEduVokAWO/ieuAP/vq8oMKb1PpyjTYTuwzntvB8yUT36'),
('jeandavid@gmail.com', 'Jean', 'David', '$2y$10$WkZ9oO4.yaGfRPYwENocH.8fqmNMVjVWJUh4cPSPKTdD/XHD2Gbzq'),
('talmag9@gmail.com', 'Jean', 'Raymond', '$2y$10$1H8LUS5eaQH2kpn4FkhpueqdPv5dFpqKfpFeLtyVvQgvE2jo.Cpie');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etu`),
  ADD KEY `id_groupe` (`id_groupe`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id_groupe`),
  ADD KEY `id_prof` (`id_prof`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`courriel`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id_groupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `FK_groupe` FOREIGN KEY (`id_groupe`) REFERENCES `groupe` (`id_groupe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `groupe_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `professeur` (`courriel`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
