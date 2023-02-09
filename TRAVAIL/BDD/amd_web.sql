-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 25 jan. 2023 à 15:47
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`categorie_id`, `categorie_nom`, `categorie_sous_categorie_id`) VALUES
(1, 'CDI', 0),
(2, 'Interim', 0),
(3, 'CDD', 0),
(4, 'Alternance', 0),
(5, 'Type de contrat', 1);

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

DROP TABLE IF EXISTS `droits`;
CREATE TABLE IF NOT EXISTS `droits` (
  `droit_id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identifiant de droits',
  `droit_nom` varchar(20) NOT NULL COMMENT 'nom des droits',
  PRIMARY KEY (`droit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `droits`
--

INSERT INTO `droits` (`droit_id`, `droit_nom`) VALUES
(1, 'CANDIDAT'),
(2, 'RECRUTEUR'),
(3, 'ADMINISTRATEUR'),
(4, 'MODERATEUR'),
(5, 'VISITEUR');

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `offre_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''offre',
  `offre_titre` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Titre de l''offre',
  `offre_description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Description de l''offre',
  `offre_salaire` int NOT NULL COMMENT 'Salaire de l''offre',
  `offre_siret` char(14) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'Numéro de SIRET de l''entreprise',
  `offre_adresse` text COMMENT 'Adresse de l''offre(num + nom de rue)',
  `offre_date_creation` datetime NOT NULL COMMENT 'Date de création de l''offre',
  `offre_date_modification` datetime DEFAULT NULL COMMENT 'Date de modification de l''offre',
  `offre_utilisateur_id` int NOT NULL COMMENT 'identifiant de l''utilisateur',
  `offre_ville_id` int NOT NULL COMMENT 'Identifiant de la ville',
  PRIMARY KEY (`offre_id`),
  KEY `of_utilisateur_id` (`offre_utilisateur_id`),
  KEY `of_ville_id` (`offre_ville_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`offre_id`, `offre_titre`, `offre_description`, `offre_salaire`, `offre_siret`, `offre_adresse`, `offre_date_creation`, `offre_date_modification`, `offre_utilisateur_id`, `offre_ville_id`) VALUES
(1, 'Développeur web', 'Recherche développeur secteur strasbourg en contrat cdi.\r\ntemps de travail 35h par semaine.', 2200, NULL, '25 rue des champs', '2023-01-18 22:46:17', '2023-01-18 22:46:17', 2, 2),
(2, 'Recherche Développeur - Fullstack', 'En tant que développeur backend, vous participerez à toutes les phases de la création et développement d\'une architecture back pour nos applications web et mobile. ', 2700, NULL, NULL, '2023-01-25 13:34:30', '0000-00-00 00:00:00', 5, 1),
(3, 'Développeur Full Stack H/F', 'Rattaché(e) à votre manager, dans le cadre de nos projets IT, vous intégrez une équipe qui sera chargée de réécrire l’ensemble de nos applications basées sur une architecture services dans un environnement Microsoft.\r\n\r\nVous intervenez sur le développement des applications web :\r\n\r\n    Développement des fonctionnalités selon les spécifications techniques\r\n    Développement d’API REST & restitution des données dans les applications Angular\r\n    Optimisation des performances des API & des bases de données\r\n    Développement des interfaces des applications Angular\r\n', 2850, NULL, NULL, '2023-01-25 13:46:36', NULL, 5, 1),
(4, 'Développeur Front-End H/F', 'Rattaché(e) à votre manager, dans le cadre de nos projets IT, vous intégrez une équipe qui sera chargée de réécrire l’ensemble de nos applications basées sur une architecture services dans un environnement Microsoft.\r\n\r\nVous intervenez sur le développement ergonomique des applications Angular :\r\n\r\n    Développement de nouveaux composants de l’UI Kit\r\n    Restitution des données des API avec les composants de l’UI Kit\r\n    Participation à l’élaboration de l’ergonomie des applications\r\n', 2300, NULL, NULL, '2023-01-25 13:50:28', NULL, 5, 1),
(5, 'Développeur / Intégrateur site Web (H/F)', 'Dans le cadre du développement de notre activité, sous la responsabilité du Chef de Projets, nous recherchons notre futur(e) Développeur / Intégrateur WordPress Web (H/F),', 2800, NULL, NULL, '2023-01-25 13:52:21', NULL, 2, 2),
(6, 'Développeur WINDEV', 'Dans le cadre d’un important projet avec une entreprise grand compte, nous recherchons des Développeurs en environnement WINDEV.\r\n', 3000, NULL, NULL, '2023-01-25 13:52:21', NULL, 5, 1),
(7, 'Développeur PHP/Symfony (H/F)', 'Notre agence de Colmar recherche ses futurs développeurs Web !\r\nVous intégrerez une équipe innovante de 10 consultants, accompagnée de développeurs expérimentés .', 2750, NULL, NULL, '2023-01-25 13:58:59', NULL, 2, 2),
(8, 'Développeur FullStack Angular / .NET H/F', 'Intégrez un éditeur de logiciels leader sur son marché !\r\nNous recherchons un Développeur FullStack .NET / Angular pour accompagner la croissance d’un éditeur spécialisé. Notre client est un éditeur de logiciels unique sur le marché en concevant des solutions innovantes à destination des agences d’intérim. Le poste est à pourvoir en CDI proche de Colmar. ', 3083, NULL, NULL, '2023-01-25 14:02:58', NULL, 2, 5),
(9, 'Alternance Développeur(se) Web & mobile - Maisons-Alfort (F/H)', 'Spécialiste de la formation en Digital Learning, recherche pour son entreprise partenaire, une société spécialisée dans les solutions web mobile, un(e) Développeur(se) Web en contrat d\'apprentissage, pour préparer l’une de nos formations diplômantes reconnues par l\'Etat de niveau 5 à niveau 7 (Bac+2, Bachelor/Bac+3 ou Mastère/Bac+5). ', 2222, NULL, NULL, '2023-01-25 14:05:44', NULL, 2, 8),
(10, 'Développeur web, PHP, HTML, JAVASCRIPT, WordPress, Prestashop', 'Dans le cadre du développement de nos activités d’agence webmarketing, nous recherchons un développeur web pour un poste en CDI afin de compléter nos effectifs.', 2300, NULL, NULL, '2023-01-25 14:05:44', NULL, 2, 4),
(11, 'Développeur Web PHP ou équivalent H/F', 'Dans le cadre d\'une équipe de développement existante, vous participerez aux développements de nos applications actuelles et futures.\r\nVous serez en charge de corriger et d\'améliorer nos applications et serez amener à participer à l\'analyse et à la conception de nos projets.', 2450, NULL, NULL, '2023-01-25 14:12:16', NULL, 2, 7),
(12, 'Développeur(se) PHP (H/F)', 'Dans le cadre de notre croissance, nous recrutons un(e) Développeur(se) PHP F/H . Intégré(e) au sein de notre équipe, vous pourrez mettre en pratique vos acquis, développer de nouvelles compétences techniques et fonctionnelles. ', 2500, NULL, NULL, '2023-01-25 14:12:16', NULL, 2, 10);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateur_id`, `utilisateur_nom`, `utilisateur_prenom`, `utilisateur_adresse`, `utilisateur_type`, `utilisateur_cv`, `utilisateur_mail`, `utilisateur_mdp`, `utilisateur_date_creation`, `utilisateur_date_modification`, `utilisateur_date_connexion`, `utilisateur_ville_id`, `utilisateur_droit_id`) VALUES
(1, 'DUPONT', 'Jean', '3 rue des champs', 'candidat', NULL, 'dupont@jean.fr', '123', '2023-01-18 22:39:08', '2023-01-25 22:39:08', '2023-01-18 22:39:08', 1, 1),
(2, 'DUROC', 'Tournesol', '35 rue des tournesols', 'recruteur', NULL, 'tournesol@duroc.fr', '235', '2023-01-19 16:22:37', '2023-01-25 16:22:37', '2023-01-19 16:22:37', 2, 2),
(3, 'BONNEAU', 'Jean', '11 rue de la Charcuterie', 'candidat', NULL, 'jeanbonneau@dev.fr', 'Jean*dev68', '2023-01-25 11:16:13', '2023-01-25 14:12:50', NULL, 6, 1),
(4, 'CONDA', 'Anna', '7 rue de la Jungle', 'candidat', NULL, 'annaconda@amazon.br', 'Moogli*7', '2023-01-25 13:00:59', '2023-01-25 14:15:19', NULL, 11, 1),
(5, 'SAILAIR', 'Jacques', '20 boulevard Aryton Senna', 'recruteur', NULL, 'jaksailair@surlaroute.vit', 'Porshe911', '2023-01-25 13:17:12', '2023-01-25 14:17:12', NULL, 9, 2),
(6, 'TIME', 'Vincent', '20 rue de la Tirelire', 'visiteur', NULL, 'vincentime@poche.in', 'Moneyman*68', '2023-01-25 13:17:12', '0000-00-00 00:00:00', NULL, 8, 5);

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
