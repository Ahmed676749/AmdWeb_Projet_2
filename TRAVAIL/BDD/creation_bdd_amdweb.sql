CREATE TABLE Utilisateur(
	utilisateur_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    utilisateur_nom VARCHAR(255) NOT NULL,
	utilisateur_prenom VARCHAR(255) NULL,
    utilisateur_adresse TEXT NULL,
    utilisateur_type VARCHAR(20) NOT NULL,
    utilisateur_cv VARCHAR(255) NULL,
    utilisateur_mail VARCHAR(320) NOT NULL,
    utilisateur_mdp VARCHAR(255) NOT NULL,
    utilisateur_date_creation DATETIME NOT NULL,
    utilisateur_date_modification DATETIME NULL,
    utilisateur_date_connexion DATETIME NULL,
    utilisateur_droit_id INT(11) NOT NULL,
    utilisateur_ville_id INT(11) NOT NULL,
    PRIMARY KEY (utilisateur_id),
    INDEX(utilisateur_droit_id),
    INDEX(utilisateur_ville_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE offre(
	offre_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    offre_description TEXT NOT NULL,
    offre_titre VARCHAR(255) NOT NULL,
    offre_adresse TEXT NULL,
    offre_siret CHAR(14) NULL,
    offre_date_creation DATETIME NOT NULL,
    offre_date_modification DATETIME NULL,
    offre_salaire INT(7) NOT NULL,
    offre_utilisateur_id INT(11) NOT NULL,
    offre_ville_id INT(11) NOT NULL,
    PRIMARY KEY (offre_id),
    INDEX(offre_utilisateur_id),
    INDEX(offre_ville_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE photo(
	photo_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    photo_nom VARCHAR(255) NOT NULL,
    photo_utilisateur_id INT(11) NOT NULL,
    PRIMARY KEY (photo_id),
    INDEX(photo_utilisateur_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE droits(
	droit_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   	droit_nom VARCHAR(255) NOT NULL,
    PRIMARY KEY (droit_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE categorie(
	categorie_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    categorie_nom VARCHAR(255) NOT NULL,
    categorie_sous_categorie_id INT(11) NULL,
    PRIMARY KEY (categorie_id),
    INDEX(categorie_sous_categorie_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE appartenir(
	appartenir_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    appartenir_offre_id INT(11) NOT NULL,
    appartenir_categorie_id INT(11) NOT NULL,
    PRIMARY KEY (appartenir_id),
    INDEX(appartenir_offre_id),
    INDEX(appartenir_categorie_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE candidature(
	candidature_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    candidature_date DATETIME NOT NULL,
    candidature_utilisateur_id INT(11) NOT NULL,
    candidature_offre_id INT(11) NOT NULL,
    PRIMARY KEY (candidature_id),
    INDEX(candidature_utilisateur_id),
    INDEX(candidature_offre_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE ville(
	ville_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    ville_cp CHAR(5) NOT NULL,
    ville_nom VARCHAR(255) NOT NULL,
    PRIMARY KEY (ville_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE utilisateur
ADD CONSTRAINT FK_utilisateur_droits
FOREIGN KEY (utilisateur_droit_id) 
REFERENCES droits(droit_id)
ON DELETE RESTRICT
ON UPDATE RESTRICT; 

ALTER TABLE utilisateur
ADD CONSTRAINT FK_utilisateur_ville
FOREIGN KEY (utilisateur_ville_id) 
REFERENCES ville(ville_id)
ON DELETE RESTRICT
ON UPDATE RESTRICT; 

ALTER TABLE offre
ADD CONSTRAINT FK_offre_utilisateur
FOREIGN KEY (offre_utilisateur_id) 
REFERENCES utilisateur(utilisateur_id)
ON DELETE RESTRICT
ON UPDATE RESTRICT;

ALTER TABLE offre
ADD CONSTRAINT FK_offre_ville
FOREIGN KEY (offre_ville_id) 
REFERENCES ville(ville_id)
ON DELETE RESTRICT
ON UPDATE RESTRICT;

ALTER TABLE photo
ADD CONSTRAINT FK_photo_utilisateur
FOREIGN KEY (photo_utilisateur_id) 
REFERENCES utilisateur(utilisateur_id)
ON DELETE RESTRICT
ON UPDATE RESTRICT;

ALTER TABLE categorie
ADD CONSTRAINT FK_categorie_categorie
FOREIGN KEY (categorie_sous_categorie_id) 
REFERENCES categorie(categorie_id)
ON DELETE RESTRICT
ON UPDATE RESTRICT;

ALTER TABLE appartenir
ADD CONSTRAINT FK_appartenir_offre
FOREIGN KEY (appartenir_offre_id) 
REFERENCES offre(offre_id)
ON DELETE RESTRICT
ON UPDATE RESTRICT;

ALTER TABLE appartenir
ADD CONSTRAINT FK_appartenir_categorie
FOREIGN KEY (appartenir_categorie_id) 
REFERENCES categorie(categorie_id)
ON DELETE RESTRICT
ON UPDATE RESTRICT;

ALTER TABLE candidature
ADD CONSTRAINT FK_candidature_utilisateur
FOREIGN KEY (candidature_utilisateur_id) 
REFERENCES utilisateur(utilisateur_id)
ON DELETE RESTRICT
ON UPDATE RESTRICT;

ALTER TABLE candidature
ADD CONSTRAINT FK_candidature_offre
FOREIGN KEY (candidature_offre_id) 
REFERENCES offre(offre_id)
ON DELETE RESTRICT
ON UPDATE RESTRICT;

