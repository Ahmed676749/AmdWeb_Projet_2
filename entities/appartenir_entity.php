<?php
	class Appartenir {
		private $_appartenir_id;
		private $_appartenir_offre_id;
		private $_appartenir_categorie_id;

		public function __construct()
		{
		}

		public function getAppartenirId() {
			return $this->_appartenir_id;
		}
		public function setAppartenirId($intToBelongId) {
			return $this->_appartenir_id;
		}

		public function getAppartenirOffreId() {
			return $this->_appartenir_offre_id;
		}
		public function setAppartenirOffreId($intAppartenir_offre_id) {
			return $this->_appartenir_offre_id;
		}

		public function getAppartenirCategorieId() {
			return $this->_appartenir_categorie_id;
		}
		public function setAppartenirCategorieId($intAppartenir_categorie_id) {
			return $this->_appartenir_categorie_id;
		}
	} 
?>