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
        private $_utilisateur_ville_id;
		private $_utilisateur_droit_id;
		

		public function __construct()
		{
		}

		/**
		* Remplissage de l'objet avec les données du tableau
		*/
		public function hydrate($arrData){
			foreach($arrData as $key=>$value){
				$strMethod = "set".ucfirst(str_replace("utilisateur_", "", $key));
				if (method_exists($this, $strMethod)){
					$this->$strMethod($value);
				}
			}
		}

		public function getUtilisateurId() {
			return $this->_utilisateur_id;
		}
		public function setUtilisateurId($intUtilisateur_id) {
			$this->_utilisateur_id = $intUtilisateur_id;
		}

		public function getNom() {
			return $this->_utilisateur_nom;
		}
		public function setNom($strUtilisateur_nom) {
			$this->_utilisateur_nom = filter_var(trim($strUtilisateur_nom),FILTER_SANITIZE_SPECIAL_CHARS);
		}

		public function getPrenom() {
			return $this->_utilisateur_prenom;
		}

		public function setPrenom($strUtilisateur_prenom) {
			$this->_utilisateur_prenom = filter_var(trim($strUtilisateur_prenom),FILTER_SANITIZE_SPECIAL_CHARS);
		}

		public function getAdresse() {
			return $this->_utilisateur_adresse;
		}
		
		public function setAdresse($strUtilisateur_adresse) {
			$this->_utilisateur_adresse = filter_var(trim($strUtilisateur_adresse),FILTER_SANITIZE_SPECIAL_CHARS);
		}

		public function getType() {
			return $this->_utilisateur_type;
		}
		public function setType($strUtilisateur_type) {
			$this->_utilisateur_type = $strUtilisateur_type;
		}

		public function getCv() {
			return $this->_utilisateur_cv;
		}
		public function setCv($strUtilisateur_cv) {
			$this->_utilisateur_cv = $strUtilisateur_cv;
		}

		public function getMail() {
			return $this->_utilisateur_mail;
		}
		public function setMail($strUtilisateur_mail) {
			$this->_utilisateur_mail = filter_var(trim(strtolower($strUtilisateur_mail)),FILTER_SANITIZE_SPECIAL_CHARS);
		}

		public function getMdp() {
			return $this->_utilisateur_mdp;
		}
		public function setMdp(string $strUtilisateur_mdp) {
			$strUtilisateur_mdp = filter_var(trim($strUtilisateur_mdp),FILTER_SANITIZE_SPECIAL_CHARS);
			if ($strUtilisateur_mdp != ''){ // On ne hache le mot de passe que s'il est renseigné
				$this->_utilisateur_mdp = password_hash($strUtilisateur_mdp, PASSWORD_DEFAULT);
			}else{
				$this->_utilisateur_mdp = $strUtilisateur_mdp;
			}
		}

		public function getDateCreation() {
			return $this->_utilisateur_date_creation;
		}
		public function setCreation($strUtilisateur_date_creation) {
			$this->_utilisateur_date_creation = $strUtilisateur_date_creation;
		}

		public function getDateModification() {
			return $this->_utilisateur_date_modification;
		}
		public function setDateModification($strUtilisateur_date_modification) {
			$this->_utilisateur_date_modification = $strUtilisateur_date_modification;
		}

		public function getDateConnexion() {
			return $this->_utilisateur_date_connexion;
		}
		public function setDateConnexion($strUtilisateur_date_connexion) {
			$this->_utilisateur_date_connexion = $strUtilisateur_date_connexion;
		}

		public function getVilleId() {
			return $this->_utilisateur_ville_id;
		}
		public function setVilleId($intUtilisateur_ville_id) {
			$this->_utilisateur_ville_id = $intUtilisateur_ville_id;
		}

        public function getDroitId() {
			return $this->_utilisateur_droit_id;
		}
		public function setDroitId($intUtilisateur_droit_id) {
			$this->_utilisateur_droit_id = $intUtilisateur_droit_id;
		}
	} 
?>