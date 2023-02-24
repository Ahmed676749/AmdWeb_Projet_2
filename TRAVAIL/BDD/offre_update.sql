-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 22 fév. 2023 à 07:56
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
-- Structure de la table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `offre_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `offre_description` text NOT NULL,
  `offre_titre` varchar(255) NOT NULL,
  `offre_nom_entreprise` varchar(255) DEFAULT NULL,
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

INSERT INTO `offre` (`offre_id`, `offre_description`, `offre_titre`, `offre_nom_entreprise`, `offre_adresse`, `offre_siret`, `offre_date_creation`, `offre_date_modification`, `offre_salaire`, `offre_utilisateur_id`, `offre_ville_id`) VALUES
(1, 'Recherche développeur secteur strasbourg en contrat cdi.\r\ntemps de travail 35h par semaine.', 'Développeur web', NULL, '25 rue des champs', NULL, '2023-01-18 22:46:17', '2023-01-18 22:46:17', 2200, 2, 2),
(2, 'En tant que développeur backend, vous participerez à toutes les phases de la création et développement d\'une architecture back pour nos applications web et mobile. ', 'Recherche Développeur - Fullstack', NULL, NULL, NULL, '2023-01-25 13:34:30', '0000-00-00 00:00:00', 2700, 5, 1),
(3, 'Rattaché(e) à votre manager, dans le cadre de nos projets IT, vous intégrez une équipe qui sera chargée de réécrire l’ensemble de nos applications basées sur une architecture services dans un environnement Microsoft.\r\n\r\nVous intervenez sur le développement des applications web :\r\n\r\n    Développement des fonctionnalités selon les spécifications techniques\r\n    Développement d’API REST & restitution des données dans les applications Angular\r\n    Optimisation des performances des API & des bases de données\r\n    Développement des interfaces des applications Angular\r\n', 'Développeur Full Stack H/F', NULL, NULL, NULL, '2023-01-25 13:46:36', NULL, 2850, 5, 1),
(4, 'Rattaché(e) à votre manager, dans le cadre de nos projets IT, vous intégrez une équipe qui sera chargée de réécrire l’ensemble de nos applications basées sur une architecture services dans un environnement Microsoft.\r\n\r\nVous intervenez sur le développement ergonomique des applications Angular :\r\n\r\n    Développement de nouveaux composants de l’UI Kit\r\n    Restitution des données des API avec les composants de l’UI Kit\r\n    Participation à l’élaboration de l’ergonomie des applications\r\n', 'Développeur Front-End H/F', NULL, NULL, NULL, '2023-01-25 13:50:28', NULL, 2300, 5, 1),
(5, 'Dans le cadre du développement de notre activité, sous la responsabilité du Chef de Projets, nous recherchons notre futur(e) Développeur / Intégrateur WordPress Web (H/F),', 'Développeur / Intégrateur site Web (H/F)', NULL, NULL, NULL, '2023-01-25 13:52:21', NULL, 2800, 2, 2),
(6, 'Dans le cadre d’un important projet avec une entreprise grand compte, nous recherchons des Développeurs en environnement WINDEV.\r\n', 'Développeur WINDEV', NULL, NULL, NULL, '2023-01-25 13:52:21', NULL, 3000, 5, 1),
(7, 'Notre agence de Colmar recherche ses futurs développeurs Web !\r\nVous intégrerez une équipe innovante de 10 consultants, accompagnée de développeurs expérimentés .', 'Développeur PHP/Symfony (H/F)', NULL, NULL, NULL, '2023-01-25 13:58:59', NULL, 2750, 2, 2),
(8, 'Intégrez un éditeur de logiciels leader sur son marché !\r\nNous recherchons un Développeur FullStack .NET / Angular pour accompagner la croissance d’un éditeur spécialisé. Notre client est un éditeur de logiciels unique sur le marché en concevant des solutions innovantes à destination des agences d’intérim. Le poste est à pourvoir en CDI proche de Colmar. ', 'Développeur FullStack Angular / .NET H/F', NULL, NULL, NULL, '2023-01-25 14:02:58', NULL, 3083, 2, 5),
(9, 'Spécialiste de la formation en Digital Learning, recherche pour son entreprise partenaire, une société spécialisée dans les solutions web mobile, un(e) Développeur(se) Web en contrat d\'apprentissage, pour préparer l’une de nos formations diplômantes reconnues par l\'Etat de niveau 5 à niveau 7 (Bac+2, Bachelor/Bac+3 ou Mastère/Bac+5). ', 'Alternance Développeur(se) Web & mobile - Maisons-Alfort (F/H)', NULL, NULL, NULL, '2023-01-25 14:05:44', NULL, 2222, 2, 8),
(10, 'Dans le cadre du développement de nos activités d’agence webmarketing, nous recherchons un développeur web pour un poste en CDI afin de compléter nos effectifs.', 'Développeur web, PHP, HTML, JAVASCRIPT, WordPress, Prestashop', NULL, NULL, NULL, '2023-01-25 14:05:44', NULL, 2300, 2, 4),
(11, 'Dans le cadre d\'une équipe de développement existante, vous participerez aux développements de nos applications actuelles et futures.\r\nVous serez en charge de corriger et d\'améliorer nos applications et serez amener à participer à l\'analyse et à la conception de nos projets.', 'Développeur Web PHP ou équivalent H/F', NULL, NULL, NULL, '2023-01-25 14:12:16', NULL, 2450, 2, 7),
(12, 'Dans le cadre de notre croissance, nous recrutons un(e) Développeur(se) PHP F/H . Intégré(e) au sein de notre équipe, vous pourrez mettre en pratique vos acquis, développer de nouvelles compétences techniques et fonctionnelles. ', 'Développeur(se) PHP (H/F)', NULL, NULL, NULL, '2023-01-25 14:12:16', NULL, 2500, 2, 10);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `FK_offre_utilisateur` FOREIGN KEY (`offre_utilisateur_id`) REFERENCES `utilisateur` (`utilisateur_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_offre_ville` FOREIGN KEY (`offre_ville_id`) REFERENCES `ville` (`ville_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
