-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 10 fév. 2023 à 10:25
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
  `appartenir_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `appartenir_offre_id` int UNSIGNED NOT NULL,
  `appartenir_categorie_id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`appartenir_id`),
  KEY `appartenir_offre_id` (`appartenir_offre_id`),
  KEY `appartenir_categorie_id` (`appartenir_categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `appartenir`
--

INSERT INTO `appartenir` (`appartenir_id`, `appartenir_offre_id`, `appartenir_categorie_id`) VALUES
(1, 1, 1);

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
  `categorie_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `categorie_nom` varchar(255) NOT NULL,
  `categorie_sous_categorie_id` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`categorie_id`),
  KEY `categorie_sous_categorie_id` (`categorie_sous_categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`categorie_id`, `categorie_nom`, `categorie_sous_categorie_id`) VALUES
(1, 'CDI', NULL),
(2, 'Intérim', NULL),
(3, 'CDD', NULL),
(4, 'Alternance', NULL),
(5, 'Type de contrat', 1);

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

DROP TABLE IF EXISTS `droits`;
CREATE TABLE IF NOT EXISTS `droits` (
  `droit_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `droit_nom` varchar(255) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`offre_id`, `offre_description`, `offre_titre`, `offre_adresse`, `offre_siret`, `offre_date_creation`, `offre_date_modification`, `offre_salaire`, `offre_utilisateur_id`, `offre_ville_id`) VALUES
(1, 'Recherche développeur secteur strasbourg en contrat cdi.\r\ntemps de travail 35h par semaine.', 'Développeur web', '25 rue des champs', NULL, '2023-01-18 22:46:17', '2023-01-18 22:46:17', 2200, 2, 2),
(2, 'En tant que développeur backend, vous participerez à toutes les phases de la création et développement d\'une architecture back pour nos applications web et mobile. ', 'Recherche Développeur - Fullstack', NULL, NULL, '2023-01-25 13:34:30', '0000-00-00 00:00:00', 2700, 5, 1),
(3, 'Rattaché(e) à votre manager, dans le cadre de nos projets IT, vous intégrez une équipe qui sera chargée de réécrire l’ensemble de nos applications basées sur une architecture services dans un environnement Microsoft.\r\n\r\nVous intervenez sur le développement des applications web :\r\n\r\n    Développement des fonctionnalités selon les spécifications techniques\r\n    Développement d’API REST & restitution des données dans les applications Angular\r\n    Optimisation des performances des API & des bases de données\r\n    Développement des interfaces des applications Angular\r\n', 'Développeur Full Stack H/F', NULL, NULL, '2023-01-25 13:46:36', NULL, 2850, 5, 1),
(4, 'Rattaché(e) à votre manager, dans le cadre de nos projets IT, vous intégrez une équipe qui sera chargée de réécrire l’ensemble de nos applications basées sur une architecture services dans un environnement Microsoft.\r\n\r\nVous intervenez sur le développement ergonomique des applications Angular :\r\n\r\n    Développement de nouveaux composants de l’UI Kit\r\n    Restitution des données des API avec les composants de l’UI Kit\r\n    Participation à l’élaboration de l’ergonomie des applications\r\n', 'Développeur Front-End H/F', NULL, NULL, '2023-01-25 13:50:28', NULL, 2300, 5, 1),
(5, 'Dans le cadre du développement de notre activité, sous la responsabilité du Chef de Projets, nous recherchons notre futur(e) Développeur / Intégrateur WordPress Web (H/F),', 'Développeur / Intégrateur site Web (H/F)', NULL, NULL, '2023-01-25 13:52:21', NULL, 2800, 2, 2),
(6, 'Dans le cadre d’un important projet avec une entreprise grand compte, nous recherchons des Développeurs en environnement WINDEV.\r\n', 'Développeur WINDEV', NULL, NULL, '2023-01-25 13:52:21', NULL, 3000, 5, 1),
(7, 'Notre agence de Colmar recherche ses futurs développeurs Web !\r\nVous intégrerez une équipe innovante de 10 consultants, accompagnée de développeurs expérimentés .', 'Développeur PHP/Symfony (H/F)', NULL, NULL, '2023-01-25 13:58:59', NULL, 2750, 2, 2),
(8, 'Intégrez un éditeur de logiciels leader sur son marché !\r\nNous recherchons un Développeur FullStack .NET / Angular pour accompagner la croissance d’un éditeur spécialisé. Notre client est un éditeur de logiciels unique sur le marché en concevant des solutions innovantes à destination des agences d’intérim. Le poste est à pourvoir en CDI proche de Colmar. ', 'Développeur FullStack Angular / .NET H/F', NULL, NULL, '2023-01-25 14:02:58', NULL, 3083, 2, 5),
(9, 'Spécialiste de la formation en Digital Learning, recherche pour son entreprise partenaire, une société spécialisée dans les solutions web mobile, un(e) Développeur(se) Web en contrat d\'apprentissage, pour préparer l’une de nos formations diplômantes reconnues par l\'Etat de niveau 5 à niveau 7 (Bac+2, Bachelor/Bac+3 ou Mastère/Bac+5). ', 'Alternance Développeur(se) Web & mobile - Maisons-Alfort (F/H)', NULL, NULL, '2023-01-25 14:05:44', NULL, 2222, 2, 8),
(10, 'Dans le cadre du développement de nos activités d’agence webmarketing, nous recherchons un développeur web pour un poste en CDI afin de compléter nos effectifs.', 'Développeur web, PHP, HTML, JAVASCRIPT, WordPress, Prestashop', NULL, NULL, '2023-01-25 14:05:44', NULL, 2300, 2, 4),
(11, 'Dans le cadre d\'une équipe de développement existante, vous participerez aux développements de nos applications actuelles et futures.\r\nVous serez en charge de corriger et d\'améliorer nos applications et serez amener à participer à l\'analyse et à la conception de nos projets.', 'Développeur Web PHP ou équivalent H/F', NULL, NULL, '2023-01-25 14:12:16', NULL, 2450, 2, 7),
(12, 'Dans le cadre de notre croissance, nous recrutons un(e) Développeur(se) PHP F/H . Intégré(e) au sein de notre équipe, vous pourrez mettre en pratique vos acquis, développer de nouvelles compétences techniques et fonctionnelles. ', 'Développeur(se) PHP (H/F)', NULL, NULL, '2023-01-25 14:12:16', NULL, 2500, 2, 10);

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
  `utilisateur_droit_id` int UNSIGNED NOT NULL DEFAULT '5',
  `utilisateur_ville_id` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`utilisateur_id`),
  KEY `utilisateur_droit_id` (`utilisateur_droit_id`),
  KEY `utilisateur_ville_id` (`utilisateur_ville_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateur_id`, `utilisateur_nom`, `utilisateur_prenom`, `utilisateur_adresse`, `utilisateur_type`, `utilisateur_cv`, `utilisateur_mail`, `utilisateur_mdp`, `utilisateur_date_creation`, `utilisateur_date_modification`, `utilisateur_date_connexion`, `utilisateur_droit_id`, `utilisateur_ville_id`) VALUES
(1, 'DUPONT', 'Jean', '3 rue des champs', 'candidat', NULL, 'dupont@jean.fr', '123', '2023-01-18 22:39:08', '2023-01-25 22:39:08', '2023-01-18 22:39:08', 1, 1),
(2, 'DUROC', 'Tournesol', '35 rue des tournesols', 'recruteur', NULL, 'tournesol@duroc.fr', '235', '2023-01-19 16:22:37', '2023-01-25 16:22:37', '2023-01-19 16:22:37', 2, 2),
(3, 'BONNEAU', 'Jean', '11 rue de la Charcuterie', 'candidat', NULL, 'jeanbonneau@dev.fr', 'Jean*dev68', '2023-01-25 11:16:13', '2023-01-25 14:12:50', NULL, 1, 6),
(4, 'CONDA', 'Anna', '7 rue de la Jungle', 'candidat', NULL, 'annaconda@amazon.br', 'Moogli*7', '2023-01-25 13:00:59', '2023-01-25 14:15:19', NULL, 1, 11),
(5, 'SAILAIR', 'Jacques', '20 boulevard Aryton Senna', 'recruteur', NULL, 'jaksailair@surlaroute.vit', 'Porshe911', '2023-01-25 13:17:12', '2023-01-25 14:17:12', NULL, 2, 9),
(6, 'TIME', 'Vincent', '20 rue de la Tirelire', 'visiteur', NULL, 'vincentime@poche.in', 'Moneyman*68', '2023-01-25 13:17:12', '0000-00-00 00:00:00', NULL, 5, 8),
(8, 'LEGRAND', 'Jonathan', 'ffrfrefqerf', 'candidat', NULL, 'jlegrand77@gmail.com', '123456', '2023-02-10 11:24:04', NULL, NULL, 5, NULL);

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
