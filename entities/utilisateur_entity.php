<?php
	/**
	* Class d'une entité Utilisateur
	* @creator Jonathan Legrand
	*/
	class Utilisateur {
		/* Attributs */
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
		
		/**
		* Constructeur de la classe
		*/
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

		/* Getters et Setters */

		/**
		* Getter de utilisateur_id
		* @return int utilisateur_id
		*/
		public function getId() {
			return $this->_utilisateur_id;
		}
		/**
		* Setter de utilisateur_id
		* @param $intUtilisateur_id Identifiant
		*/
		public function setId($intUtilisateur_id) {
			$this->_utilisateur_id = $intUtilisateur_id;
		}

		/**
		* Getter de utilisateur_nom
		* @return string utilisateur_nom
		*/
		public function getNom():string|null{
			return $this->_utilisateur_nom;
		}
		/**
		* Setter de utilisateur_nom
		* @param $strUtilisateur_nom Nom
		*/
		public function setNom(string $strUtilisateur_nom) {
			$this->_utilisateur_nom = filter_var(trim($strUtilisateur_nom),FILTER_SANITIZE_SPECIAL_CHARS);
		}

		/**
		* Getter de utilisateur_prenom
		* @return string utilisateur_prenom
		*/
		public function getPrenom():string|null{
			return $this->_utilisateur_prenom;
		}
		/**
		* Setter de utilisateur_prenom
		* @param $strUtilisateur_prenom Prénom
		*/
		public function setPrenom(string $strUtilisateur_prenom) {
			$this->_utilisateur_prenom = filter_var(trim($strUtilisateur_prenom),FILTER_SANITIZE_SPECIAL_CHARS);
		}

		/**
		* Getter de utilisateur_adresse
		* @return string utilisateur_adresse
		*/
		public function getAdresse():string|null{
			return $this->_utilisateur_adresse;
		}
		/**
		* Setter de utilisateur_adresse
		* @param $strUtilisateur_adresse Adresse
		*/
		public function setAdresse(string $strUtilisateur_adresse) {
			$this->_utilisateur_adresse = filter_var(trim($strUtilisateur_adresse),FILTER_SANITIZE_SPECIAL_CHARS);
		}

		/**
		* Getter de utilisateur_type
		* @return string utilisateur_type
		*/
		public function getType(){
			return $this->_utilisateur_type;
		}
		/**
		* Setter de utilisateur_type
		* @param $strUtilisateur_type Type
		*/
		public function setType($strUtilisateur_type) {
			$this->_utilisateur_type = $strUtilisateur_type;
		}

		/**
		* Getter de utilisateur_cv
		* @return string utilisateur_cv
		*/
		public function getCv():string{
			return $this->_utilisateur_cv;
		}
		/**
		* Setter de utilisateur_cv
		* @param $strUtilisateur_cv CV
		*/
		public function setCv(string $strUtilisateur_cv) {
			$this->_utilisateur_cv = $strUtilisateur_cv;
		}

		/**
		* Getter de utilisateur_mail
		* @return string utilisateur_mail
		*/
		public function getMail():string|null{
			return $this->_utilisateur_mail;
		}
		/**
		* Setter de utilisateur_mail
		* @param $strUtilisateur_mail Adresse électronique
		*/
		public function setMail(string $strUtilisateur_mail) {
			$this->_utilisateur_mail = filter_var(trim(strtolower($strUtilisateur_mail)),FILTER_SANITIZE_SPECIAL_CHARS);
		}

		/**
		* Getter de utilisateur_mdp
		* @return string utilisateur_mdp
		*/
		public function getMdp():string{
			return $this->_utilisateur_mdp;
		}
		/**
		* Setter de utilisateur_mdp
		* @param $strUtilisateur_mdp Mot de passe
		*/
		public function setMdp(string $strUtilisateur_mdp) {
			$strUtilisateur_mdp = filter_var(trim($strUtilisateur_mdp),FILTER_SANITIZE_SPECIAL_CHARS);
			if ($strUtilisateur_mdp != ''){ 			// On ne hache le mot de passe que s'il est renseigné
				$this->_utilisateur_mdp = password_hash($strUtilisateur_mdp, PASSWORD_DEFAULT);
			}else{
				$this->_utilisateur_mdp = $strUtilisateur_mdp;
			}
		}

		/**
		* Getter de utilisateur_date_creation
		* @return string utilisateur_date_creation
		*/
		public function getDate_creation():string{
			return $this->_utilisateur_date_creation;
		}
		/**
		* Setter de utilisateur_date_creation
		* @param $strUtilisateur_date_creation Date de création de l'utilisateur
		*/
		public function setDate_creation(string $strUtilisateur_date_creation) {
			$this->_utilisateur_date_creation = $strUtilisateur_date_creation;
		}

		/**
		* Getter de utilisateur_date_modification
		* @return string utilisateur_date_modification
		*/
		public function getDate_modification():string{
			return $this->_utilisateur_date_modification;
		}
		/**
		* Setter de utilisateur_date_modification
		* @param $strUtilisateur_date_modification Date de modification de l'utilisateur
		*/
		public function setDate_modification(string $strUtilisateur_date_modification) {
			$strUtilisateur_date_modification = date("Y-m-d H:i:s");
			$this->_utilisateur_date_modification = $strUtilisateur_date_modification;
		}

		/**
		* Getter de utilisateur_date_connexion
		* @return string utilisateur_date_connexion
		*/
		public function getDate_connexion():string|null{
			return $this->_utilisateur_date_connexion;
		}
		/**
		* Setter de utilisateur_date_connexion
		* @param $strUtilisateur_date_connexion Date de connexion de l'utilisateur
		*/
		public function setDate_connexion(string|null $strUtilisateur_date_connexion) {
			$this->_utilisateur_date_connexion = $strUtilisateur_date_connexion;
		}

		/**
		* Getter de utilisateur_ville_id
		* @return int utilisateur_ville_id
		*/
		public function getVille_id():int|null{
			return $this->_utilisateur_ville_id;
		}
		/**
		* Setter de utilisateur_ville_id
		* @param $intUtilisateur_ville_id Identifiant de la ville de l'utilisateur
		*/
		public function setVille_id(int|null $intUtilisateur_ville_id) {
			$this->_utilisateur_ville_id = $intUtilisateur_ville_id;
		}

		/**
		* Getter de utilisateur_droit_id
		* @return int utilisateur_droit_id
		*/
        public function getDroit_id():int{
			return $this->_utilisateur_droit_id;
		}
		/**
		* Setter de utilisateur_droit_id
		* @param $intUtilisateur_droit_id Identifiant des droits de l'utilisateur
		*/
		public function setDroit_id(int $intUtilisateur_droit_id) {
			$this->_utilisateur_droit_id = $intUtilisateur_droit_id;
		}
	}