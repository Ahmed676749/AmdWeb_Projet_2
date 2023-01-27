<?php
	class Utilisateur {
		private $_utilisateur_id;
		private $_utilisateur_nom;
		private $_utilisateur_prenom;
		private $_utilisateur_adresse;
		private $_utilisateur_type;
		private $_utilisateur_cv;
		private $_utilisateur_mail;
		private $_utilisateur_mdp;
		private $_utilisateur_date_creation;
		private $_utilisateur_date_modification;
		private $_utilisateur_date_connexion;
        private $_ville_id;
		private $_droit_id;
		

		public function __construct()
		{
		}

		public function getUtilisateurId() {
			return $this->_utilisateur_id;
		}
		public function setUtilisateurId($intUtilisateur_id) {
			return $this->_utilisateur_id;
		}

		public function getUtilisateurNom() {
			return $this->$_utilisateur_nom;
		}
		public function setUtilisateurNom($strUtilisateur_nom) {
			return $this->$_utilisateur_nom;
		}

		public function getUtilisateurPrenom() {
			return $this->$_utilisateur_prenom;
		}
		public function setUtilisateurPrenom($strUtilisateur_prenom) {
			return $this->$_utilisateur_prenom;
		}

		public function getUtilisateurAdresse() {
			return $this->_utilisateur_adresse;
		}
		public function setUtilisateurAdresse($strUtilisateur_adresse) {
			return $this->_utilisateur_adresse;
		}

		public function getUtilisateurType() {
			return $this->_utilisateur_type;
		}
		public function setUtilisateurType($strUtilisateur_type) {
			return $this->_utilisateur_type;
		}

		public function getUtilisateurCv() {
			return $this->_utilisateur_cv;
		}
		public function setUtilisateurCv($strUtilisateur_cv) {
			return $this->_utilisateur_cv;
		}

		public function getUtilisateurMail() {
			return $this->_utilisateur_mail;
		}
		public function setUtilisateurMail($strUtilisateur_mail) {
			return $this->_utilisateur_mail;
		}

		public function getUtilisateurMdp() {
			return $this->_utilisateur_mdp;
		}
		public function setUtilisateurMdp($strUtilisateur_mdp) {
			return $this->_utilisateur_mdp;
		}

		public function getUtilisateurDateCreation() {
			return $this->_utilisateur_date_creation;
		}
		public function setUtilisateurDateCreation($strUtilisateur_date_creation) {
			return $this->_utilisateur_date_creation;
		}

		public function getUtilisateurDateModification() {
			return $this->__utilisateur_date_modification;
		}
		public function setUtilisateurDateModification($strUtilisateur_date_modification) {
			return $this->_utilisateur_date_modification;
		}

		public function getUtilisateurDateConnexion() {
			return $this->_utilisateur_date_connexion;
		}
		public function setUtilisateurDateConnexion($strUtilisateur_date_connexion) {
			return $this->_utilisateur_date_connexion;
		}

		public function getUtilisateurVilleId() {
			return $this->_utilisateur_ville_id;
		}
		public function setUtilisateurVilleId($intUtilisateur_ville_id) {
			return $this->_utilisateur_ville_id;
		}

        public function getUtilisateurDroitId() {
			return $this->_utilisateur_droit_id;
		}
		public function setUtilisateurDroitId($intUtilisateur_droit_id) {
			return $this->_utilisateur_droit_id;
		}
	} 
?>