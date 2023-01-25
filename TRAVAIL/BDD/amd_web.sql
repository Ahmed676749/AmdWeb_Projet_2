-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 25 jan. 2023 à 12:31
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
-- Base de données : `amd_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

DROP TABLE IF EXISTS `appartenir`;
CREATE TABLE IF NOT EXISTS `appartenir` (
  `appartenir_id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''association entre les tables offre et catégorie',
  `appartenir_offre_id` int NOT NULL COMMENT 'identifiant de l''offre',
  `appartenir_categorie_id` int NOT NULL COMMENT 'identifiant de la catégorie',
  PRIMARY KEY (`appartenir_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `appartenir`
--

INSERT INTO `appartenir` (`appartenir_id`, `appartenir_offre_id`, `appartenir_categorie_id`) VALUES
(1, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

DROP TABLE IF EXISTS `candidature`;
CREATE TABLE IF NOT EXISTS `candidature` (
  `candidature_id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de candidature',
  `candidature_date` datetime NOT NULL COMMENT 'Date de la candidature',
  `candidature_utilisateur_id` int NOT NULL COMMENT 'Identifiant de l''utilisateur',
  `candidature_offre_id` int NOT NULL COMMENT 'identifiant de l''offre',
  PRIMARY KEY (`candidature_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `candidature`
--

INSERT INTO `candidature` (`candidature_id`, `candidature_date`, `candidature_utilisateur_id`, `candidature_offre_id`) VALUES
(1, '2023-01-18 22:57:57', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `categorie_id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de catégorie',
  `categorie_nom` varchar(255) NOT NULL COMMENT 'Nom de la catégorie',
  `categorie_sous_categorie_id` int NOT NULL,
  PRIMARY KEY (`categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`categorie_id`, `categorie_nom`, `categorie_sous_categorie_id`) VALUES
(1, 'CDI', 0),
(2, 'Interim', 0),
(3, 'CDD', 0),
(4, 'Alternance', 0);

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

DROP TABLE IF EXISTS `droits`;
CREATE TABLE IF NOT EXISTS `droits` (
  `droit_id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identifiant de droits',
  `droit_nom` varchar(20) NOT NULL COMMENT 'nom des droits',
  PRIMARY KEY (`droit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `droits`
--

INSERT INTO `droits` (`droit_id`, `droit_nom`) VALUES
(1, 'postuler'),
(2, 'déposer');

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `offre_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''offre',
  `offre_description` text NOT NULL COMMENT 'Description de l''offre',
  `offre_titre` varchar(255) NOT NULL COMMENT 'Titre de l''offre',
  `offre_adresse` text COMMENT 'Adresse de l''offre(num + nom de rue)',
  `offre_siret` char(14) DEFAULT NULL COMMENT 'Numéro de SIRET de l''entreprise',
  `offre_date_creation` datetime NOT NULL COMMENT 'Date de création de l''offre',
  `offre_date_modification` datetime DEFAULT NULL COMMENT 'Date de modification de l''offre',
  `offre_utilisateur_id` int NOT NULL COMMENT 'identifiant de l''utilisateur',
  `offre_ville_id` int NOT NULL COMMENT 'Identifiant de la ville',
  PRIMARY KEY (`offre_id`),
  KEY `of_utilisateur_id` (`offre_utilisateur_id`),
  KEY `of_ville_id` (`offre_ville_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`offre_id`, `offre_description`, `offre_titre`, `offre_adresse`, `offre_siret`, `offre_date_creation`, `offre_date_modification`, `offre_utilisateur_id`, `offre_ville_id`) VALUES
(1, 'Recherche développeur secteur strasbourg en contrat cdi.\r\ntemps de travail 35h par semaine.', 'Développeur web', '25 rue des champs', NULL, '2023-01-18 22:46:17', '2023-01-18 22:46:17', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `photo_id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de photo',
  `photo_nom` varchar(255) NOT NULL COMMENT 'Nom de la photo',
  `photo_utilisateur_id` int NOT NULL COMMENT 'identifiant de l''utilisateur',
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `utilisateur_id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identifiant de l''utilisateur',
  `utilisateur_nom` varchar(255) NOT NULL COMMENT 'nom de l''utilisateur',
  `utilisateur_prenom` varchar(255) DEFAULT NULL COMMENT 'prénom de l''utilisateur',
  `utilisateur_adresse` text COMMENT 'Type d''utilisateur : candidat ou recruteur',
  `utilisateur_type` varchar(20) NOT NULL COMMENT 'type d''utilisateur',
  `utilisateur_cv` varchar(255) DEFAULT NULL,
  `utilisateur_mail` varchar(320) NOT NULL,
  `utilisateur_mdp` varchar(255) NOT NULL,
  `utilisateur_date_creation` datetime NOT NULL,
  `utilisateur_date_modification` datetime DEFAULT NULL,
  `utilisateur_date_connexion` datetime DEFAULT NULL,
  `utilisateur_ville_id` int NOT NULL,
  `utilisateur_droit_id` int NOT NULL COMMENT 'droit utilisateur',
  PRIMARY KEY (`utilisateur_id`),
  KEY `ut_v_id` (`utilisateur_ville_id`),
  KEY `ut_v_id_2` (`utilisateur_ville_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateur_id`, `utilisateur_nom`, `utilisateur_prenom`, `utilisateur_adresse`, `utilisateur_type`, `utilisateur_cv`, `utilisateur_mail`, `utilisateur_mdp`, `utilisateur_date_creation`, `utilisateur_date_modification`, `utilisateur_date_connexion`, `utilisateur_ville_id`, `utilisateur_droit_id`) VALUES
(1, 'DUPONT', 'Jean', '3 rue des champs', 'candidat', NULL, 'dupont@jean.fr', '123', '2023-01-18 22:39:08', '2023-01-18 22:39:08', '2023-01-18 22:39:08', 1, 1),
(2, 'DUROC', 'Tournesol', '35 rue des tournesols', 'recruteur', NULL, 'tournesol@duroc.fr', '235', '2023-01-19 16:22:37', '2023-01-19 16:22:37', '2023-01-19 16:22:37', 2, 2),
(3, 'BONNEAU', 'Jean', '11 rue de la Charcuterie', '', NULL, 'jeanbonneau@dev.fr', 'Jean*dev68', '2023-01-25 11:16:13', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `ville_id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identifiant de la ville',
  `ville_cp` char(5) NOT NULL COMMENT 'Code postal de la ville',
  `ville_nom` varchar(255) NOT NULL COMMENT 'Nom de la ville',
  PRIMARY KEY (`ville_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`ville_id`, `ville_cp`, `ville_nom`) VALUES
(1, '67000', 'STRASBOURG'),
(2, '68000', 'COLMAR'),
(3, '68040', 'INGERSHEIM'),
(4, '68125', 'HOUSSEN'),
(5, '68110', 'ILLZACH'),
(6, '68150', 'RIBEAUVILLE'),
(7, '68180', 'HORBOURG-WIHR'),
(8, '68240', 'KINTZHEIM'),
(9, '68300', 'SAINT-LOUIS'),
(10, '68630', 'BENNWIHR'),
(11, '68700', 'CERNAY'),
(12, '68730', 'BLOTZHEIM'),
(13, '68770', 'AMMERSCHWIHR'),
(14, '68920', 'WINTZEMHEIM'),
(15, '68800', 'THANN');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
