-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 31 Octobre 2019 à 21:19
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
-- Structure de la table `activite_series`
--

CREATE TABLE `activite_series` (
  `id` varchar(63) NOT NULL,
  `id_form` int(11) NOT NULL,
  `series` int(11) NOT NULL,
  `activite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `activite_temps`
--

CREATE TABLE `activite_temps` (
  `id` varchar(63) NOT NULL,
  `id_form` varchar(63) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `duree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `activite_temps`
--

INSERT INTO `activite_temps` (`id`, `id_form`, `nom`, `duree`) VALUES
('5db26d3ca695a', 'dadsae2ew', 'Course calme', 15),
('5db26d4c67689', 'dadsae2ew', 'Soccer', 30),
('5db26d616723e', 'dadsae2ew', 'Étirement', 15),
('5db65925b07ce', 'dadsae2ew', 'Échauffement', 15),
('5db6ea9887792', 'kfbkjbjbj', 'badminton', 19),
('5db6f11871be7', '5db6ef207b84d', 'Échange tranquille', 25),
('5db704ad218a0', '5db6ef207b84d', 'Match', 9);

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
-- Structure de la table `formulaire`
--

CREATE TABLE `formulaire` (
  `id_form` varchar(63) NOT NULL,
  `id_etu` int(7) NOT NULL,
  `sport` varchar(50) DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL,
  `bpm` int(11) DEFAULT NULL,
  `note` float DEFAULT NULL,
  `frequence` int(1) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formulaire`
--

INSERT INTO `formulaire` (`id_form`, `id_etu`, `sport`, `type`, `bpm`, `note`, `frequence`, `comment`) VALUES
('5db6ef207b84d', 1767504, 'badminton', 'varié', 162, 5, 2, 'bien fait'),
('5dbb45ce1a2f4', 1767504, 'Nouveau', NULL, NULL, NULL, NULL, NULL),
('dadsae2ew', 1767504, 'pratique de soccer', 'continue', 102, 5, 2, 'parfait'),
('kfbkjbjbj', 1702089, 'badminton', 'continue', 141, 0, 4, NULL);

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
('Vendredi', 'talmag9@gmail.com', 'Automne', 2019, 8),
('test', 'claserre9@gmail.com', 'Été', 2020, 9);

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

-- --------------------------------------------------------

--
-- Structure de la table `remise`
--

CREATE TABLE `remise` (
  `id` varchar(63) NOT NULL,
  `date` date NOT NULL,
  `id_groupe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `repetition`
--

CREATE TABLE `repetition` (
  `id` varchar(63) NOT NULL,
  `id_activite` varchar(63) NOT NULL,
  `repetition` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activite_series`
--
ALTER TABLE `activite_series`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_form` (`id_form`);

--
-- Index pour la table `activite_temps`
--
ALTER TABLE `activite_temps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_form` (`id_form`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etu`),
  ADD KEY `id_groupe` (`id_groupe`);

--
-- Index pour la table `formulaire`
--
ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`id_form`),
  ADD KEY `id_etu` (`id_etu`);

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
-- Index pour la table `remise`
--
ALTER TABLE `remise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_groupe` (`id_groupe`);

--
-- Index pour la table `repetition`
--
ALTER TABLE `repetition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_activite` (`id_activite`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id_groupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `activite_temps`
--
ALTER TABLE `activite_temps`
  ADD CONSTRAINT `activite_temps_ibfk_1` FOREIGN KEY (`id_form`) REFERENCES `formulaire` (`id_form`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `FK_groupe` FOREIGN KEY (`id_groupe`) REFERENCES `groupe` (`id_groupe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `formulaire`
--
ALTER TABLE `formulaire`
  ADD CONSTRAINT `FK_etu` FOREIGN KEY (`id_etu`) REFERENCES `etudiant` (`id_etu`);

--
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `groupe_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `professeur` (`courriel`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
