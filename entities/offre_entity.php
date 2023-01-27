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

		public function getOffreTitre() {
			return $this->_offre_titre;
		}
		public function setOffreTitre($strOffre_titre) {
			return $this->_offre_titre;
		}

		public function getOffreAdresse() {
			return $this->_offre_adress;
		}
		public function setOffreAdresse($strOffre_adresse) {
			return $this->_offre_adresse;
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

		public function getOffreDateCreation() {
			return $this->_offre_date_creation;
		}
		public function setOffreDateCreation($stOffre_date_creation) {
			return $this->_offre_date_creation;
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
	} 
?>