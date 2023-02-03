<?php
	class Offre {
		private $_offre_id;
		private $_offre_description;
		private $_offre_titre;
		private $_offre_adresse;
		private $_offre_siret;
		private $_offre_salaire;
		private $_offre_date_creation;
		private $_offre_date_modification;
		private $_offre_utilisateur_id;
		private $_offre_ville_id;

		public function __construct()
		{
		}

		public function getOffreId() {
			return $this->_offre_id;
		}
		public function setOfferId($intOffre_id) {
			return $this->_offre_id;
		}

		public function getOffreDescription() {
			return $this->_offre_description;
		}
		public function setOffreDescription($strOffre_description) {
			return $this->_offre_description;
		}

		public function getTitre() {
			return $this->_offre_titre;
		}
		public function setTitre($strOffretitre) {
			$this->_offre_titre = $strOffretitre;
		}

		public function getOffreAdresse() {
			return $this->_offre_adress;
		}
		public function setOffreAdresse($strOffre_adresse) {
			 $this->_offre_adresse = $strOffre_adresse;
		}

		public function getOffreSiret() {
			return $this->_offre_siret;
		}
		public function setOffreSiret($strOffre_siret) {
			return $this->_offre_siret;
		}

		public function getOffreSalaire() {
			return $this->_offre_salaire;
		}
		public function setOffreSalaire($intOffre_salaire) {
			return $this->_offre_salaire;
		}

		public function getOffreDateCreation():string {
			$date = new DateTime($this->_offre_date_creation);
			return $date->format('d/m/Y');
		}
		public function setOffreDateCreation($strOffre_date_creation) {
			 $this->_offre_date_creation = $strOffre_date_creation;
		}

		public function getOffreDateModification() {
			return $this->_offre_date_modification;
		}
		public function setOffreDateModification($strOffre_date_modification) {
			return $this->_offre_date_modification;
		}

		public function getOffreUtilisateurId() {
			return $this->_offre_utilisateur_id;
		}
		public function setOffreUtilisateurId($intOffre_utilisateur_id) {
			return $this->_offre_utilisateur_id;
		}

		public function getOffreVilleId() {
			return $this->_offre_ville_id;
		}
		public function setOffreVilleId($intOffre_ville_id) {
			return $this->_offre_ville_id;
		}

		public function hydrate($arrData){
			foreach($arrData as $key=>$value){
				$strMethod = "set".ucfirst(str_replace("offre_", "", $key));
				if (method_exists($this, $strMethod)){
					$this->$strMethod($value);
				}
			}
		}
	} 


	
?>