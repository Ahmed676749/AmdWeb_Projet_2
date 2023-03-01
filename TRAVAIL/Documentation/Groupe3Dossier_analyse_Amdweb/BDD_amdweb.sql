-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 19 jan. 2023 à 20:09
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `amdweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

CREATE TABLE `appartenir` (
  `appartenir_id` int(11) UNSIGNED NOT NULL COMMENT 'Identifiant de l''association entre les tables offre et catégorie',
  `appartenir_offre_id` int(11) NOT NULL COMMENT 'identifiant de l''offre',
  `appartenir_categorie_id` int(11) NOT NULL COMMENT 'identifiant de la catégorie'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `appartenir`
--

INSERT INTO `appartenir` (`appartenir_id`, `appartenir_offre_id`, `appartenir_categorie_id`) VALUES
(1, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

CREATE TABLE `candidature` (
  `candidature_id` int(10) UNSIGNED NOT NULL COMMENT 'Identifiant de candidature',
  `candidature_date` datetime NOT NULL COMMENT 'Date de la candidature',
  `candidature_utilisateur_id` int(11) NOT NULL COMMENT 'Identifiant de l''utilisateur',
  `candidature_offre_id` int(11) NOT NULL COMMENT 'identifiant de l''offre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `candidature`
--

INSERT INTO `candidature` (`candidature_id`, `candidature_date`, `candidature_utilisateur_id`, `candidature_offre_id`) VALUES
(1, '2023-01-18 22:57:57', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `categorie_id` int(11) UNSIGNED NOT NULL COMMENT 'Identifiant de catégorie',
  `categorie_nom` varchar(255) NOT NULL COMMENT 'Nom de la catégorie',
  `categorie_sous_categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`categorie_id`, `categorie_nom`, `categorie_sous_categorie_id`) VALUES
(1, 'CDI', 0);

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

CREATE TABLE `droits` (
  `droit_id` int(11) UNSIGNED NOT NULL COMMENT 'identifiant de droits',
  `droit_nom` varchar(20) NOT NULL COMMENT 'nom des droits'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `offre` (
  `offre_id` int(11) NOT NULL COMMENT 'Identifiant de l''offre',
  `offre_description` text NOT NULL COMMENT 'Description de l''offre',
  `offre_titre` varchar(255) NOT NULL COMMENT 'Titre de l''offre',
  `offre_adresse` text DEFAULT NULL COMMENT 'Adresse de l''offre(num + nom de rue)',
  `offre_siret` char(14) DEFAULT NULL COMMENT 'Numéro de SIRET de l''entreprise',
  `offre_date_creation` datetime NOT NULL COMMENT 'Date de création de l''offre',
  `offre_date_modification` datetime DEFAULT NULL COMMENT 'Date de modification de l''offre',
  `offre_utilisateur_id` int(11) NOT NULL COMMENT 'identifiant de l''utilisateur',
  `offre_ville_id` int(11) NOT NULL COMMENT 'Identifiant de la ville'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`offre_id`, `offre_description`, `offre_titre`, `offre_adresse`, `offre_siret`, `offre_date_creation`, `offre_date_modification`, `offre_utilisateur_id`, `offre_ville_id`) VALUES
(1, 'Recherche développeur secteur strasbourg en contrat cdi.\r\ntemps de travail 35h par semaine.', 'Développeur web', '25 rue des champs', NULL, '2023-01-18 22:46:17', '2023-01-18 22:46:17', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `photo_id` int(11) UNSIGNED NOT NULL COMMENT 'Identifiant de photo',
  `photo_nom` varchar(255) NOT NULL COMMENT 'Nom de la photo',
  `photo_utilisateur_id` int(11) NOT NULL COMMENT 'identifiant de l''utilisateur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `utilisateur_id` int(11) UNSIGNED NOT NULL COMMENT 'identifiant de l''utilisateur',
  `utilisateur_nom` varchar(255) NOT NULL COMMENT 'nom de l''utilisateur',
  `utilisateur_prenom` varchar(255) DEFAULT NULL COMMENT 'prénom de l''utilisateur',
  `utilisateur_adresse` text DEFAULT NULL COMMENT 'Type d''utilisateur : candidat ou recruteur',
  `utilisateur_type` varchar(20) NOT NULL COMMENT 'type d''utilisateur',
  `utilisateur_cv` varchar(255) DEFAULT NULL,
  `utilisateur_mail` varchar(320) NOT NULL,
  `utilisateur_mdp` varchar(255) NOT NULL,
  `utilisateur_date_creation` datetime NOT NULL,
  `utilisateur_date_modification` datetime DEFAULT NULL,
  `utilisateur_date_connexion` datetime DEFAULT NULL,
  `utilisateur_ville_id` int(11) NOT NULL,
  `utilisateur_droit_id` int(11) NOT NULL COMMENT 'droit utilisateur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateur_id`, `utilisateur_nom`, `utilisateur_prenom`, `utilisateur_adresse`, `utilisateur_type`, `utilisateur_cv`, `utilisateur_mail`, `utilisateur_mdp`, `utilisateur_date_creation`, `utilisateur_date_modification`, `utilisateur_date_connexion`, `utilisateur_ville_id`, `utilisateur_droit_id`) VALUES
(1, 'DUPONT', 'Jean', '3 rue des champs', 'candidat', NULL, 'dupont@jean.fr', '123', '2023-01-18 22:39:08', '2023-01-18 22:39:08', '2023-01-18 22:39:08', 1, 1),
(2, 'DUROC', 'Tournesol', '35 rue des tournesols', 'recruteur', NULL, 'tournesol@duroc.fr', '235', '2023-01-19 16:22:37', '2023-01-19 16:22:37', '2023-01-19 16:22:37', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `ville_id` int(11) UNSIGNED NOT NULL COMMENT 'identifiant de la ville',
  `ville_cp` char(5) NOT NULL COMMENT 'Code postal de la ville',
  `ville_nom` varchar(255) NOT NULL COMMENT 'Nom de la ville'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`ville_id`, `ville_cp`, `ville_nom`) VALUES
(1, '67000', 'STRASBOURG'),
(2, '68000', 'COLMAR');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD PRIMARY KEY (`appartenir_id`);

--
-- Index pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD PRIMARY KEY (`candidature_id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`categorie_id`);

--
-- Index pour la table `droits`
--
ALTER TABLE `droits`
  ADD PRIMARY KEY (`droit_id`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`offre_id`),
  ADD KEY `of_utilisateur_id` (`offre_utilisateur_id`),
  ADD KEY `of_ville_id` (`offre_ville_id`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`utilisateur_id`),
  ADD KEY `ut_v_id` (`utilisateur_ville_id`),
  ADD KEY `ut_v_id_2` (`utilisateur_ville_id`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`ville_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appartenir`
--
ALTER TABLE `appartenir`
  MODIFY `appartenir_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''association entre les tables offre et catégorie', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `candidature`
--
ALTER TABLE `candidature`
  MODIFY `candidature_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de candidature', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `categorie_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de catégorie', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `droits`
--
ALTER TABLE `droits`
  MODIFY `droit_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identifiant de droits', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `offre_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''offre', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `photo_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de photo';

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `utilisateur_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identifiant de l''utilisateur', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `ville_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identifiant de la ville', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
