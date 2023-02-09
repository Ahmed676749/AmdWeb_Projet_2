-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 09 fév. 2023 à 21:21
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `amdweb_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

DROP TABLE IF EXISTS `appartenir`;
CREATE TABLE IF NOT EXISTS `appartenir` (
  `appartenir_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `appartenir_offre_id` int UNSIGNED NOT NULL,
  `appartenir_categorie_id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`appartenir_id`),
  KEY `appartenir_offre_id` (`appartenir_offre_id`),
  KEY `appartenir_categorie_id` (`appartenir_categorie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

DROP TABLE IF EXISTS `candidature`;
CREATE TABLE IF NOT EXISTS `candidature` (
  `candidature_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `candidature_date` datetime NOT NULL,
  `candidature_utilisateur_id` int UNSIGNED NOT NULL,
  `candidature_offre_id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`candidature_id`),
  KEY `candidature_utilisateur_id` (`candidature_utilisateur_id`),
  KEY `candidature_offre_id` (`candidature_offre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `categorie_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `categorie_nom` varchar(255) NOT NULL,
  `categorie_sous_categorie_id` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`categorie_id`),
  KEY `categorie_sous_categorie_id` (`categorie_sous_categorie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

DROP TABLE IF EXISTS `droits`;
CREATE TABLE IF NOT EXISTS `droits` (
  `droit_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `droit_nom` varchar(255) NOT NULL,
  PRIMARY KEY (`droit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `offre_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `offre_description` text NOT NULL,
  `offre_titre` varchar(255) NOT NULL,
  `offre_adresse` text,
  `offre_siret` char(14) DEFAULT NULL,
  `offre_date_creation` datetime NOT NULL,
  `offre_date_modification` datetime DEFAULT NULL,
  `offre_salaire` int NOT NULL,
  `offre_utilisateur_id` int UNSIGNED NOT NULL,
  `offre_ville_id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`offre_id`),
  KEY `offre_utilisateur_id` (`offre_utilisateur_id`),
  KEY `offre_ville_id` (`offre_ville_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `photo_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo_nom` varchar(255) NOT NULL,
  `photo_utilisateur_id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `photo_utilisateur_id` (`photo_utilisateur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `utilisateur_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `utilisateur_nom` varchar(255) NOT NULL,
  `utilisateur_prenom` varchar(255) DEFAULT NULL,
  `utilisateur_adresse` text,
  `utilisateur_type` varchar(20) NOT NULL,
  `utilisateur_cv` varchar(255) DEFAULT NULL,
  `utilisateur_mail` varchar(320) NOT NULL,
  `utilisateur_mdp` varchar(255) NOT NULL,
  `utilisateur_date_creation` datetime NOT NULL,
  `utilisateur_date_modification` datetime DEFAULT NULL,
  `utilisateur_date_connexion` datetime DEFAULT NULL,
  `utilisateur_droit_id` int UNSIGNED NOT NULL,
  `utilisateur_ville_id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`utilisateur_id`),
  KEY `utilisateur_droit_id` (`utilisateur_droit_id`),
  KEY `utilisateur_ville_id` (`utilisateur_ville_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `ville_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `ville_cp` char(5) NOT NULL,
  `ville_nom` varchar(255) NOT NULL,
  PRIMARY KEY (`ville_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `FK_appartenir_categorie` FOREIGN KEY (`appartenir_categorie_id`) REFERENCES `categorie` (`categorie_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_appartenir_offre` FOREIGN KEY (`appartenir_offre_id`) REFERENCES `offre` (`offre_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD CONSTRAINT `FK_candidature_utilisateur` FOREIGN KEY (`candidature_utilisateur_id`) REFERENCES `utilisateur` (`utilisateur_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `FK_categorie_categorie` FOREIGN KEY (`categorie_sous_categorie_id`) REFERENCES `categorie` (`categorie_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `FK_offre_utilisateur` FOREIGN KEY (`offre_utilisateur_id`) REFERENCES `utilisateur` (`utilisateur_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_offre_ville` FOREIGN KEY (`offre_ville_id`) REFERENCES `ville` (`ville_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `FK_photo_utilisateur` FOREIGN KEY (`photo_utilisateur_id`) REFERENCES `utilisateur` (`utilisateur_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_utilisateur_droits` FOREIGN KEY (`utilisateur_droit_id`) REFERENCES `droits` (`droit_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_utilisateur_ville` FOREIGN KEY (`utilisateur_ville_id`) REFERENCES `ville` (`ville_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
