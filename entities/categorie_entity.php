<?php
	class Categorie {
		private $_categorie_id;
		private $_categorie_nom;
		private $_categorie_sous_categorie_id;

		public function __construct()
		{
		}

		public function getCategorieId() {
			return $this->_categorie_id;
		}
		public function setCategorieId($intCategorie_id) {
			return $this->_categorie_id;
		}

		public function getCategoryName() {
			return $this->_categorie_nom;
		}
		public function setCategoryName($strCategorie_nom) {
			return $this->_categorie_nom;
		}

		public function getCatgorySubCategoryId() {
			return $this->_categorie_sous_categorie_id;
		}
		public function setCategorySubCategoryId($strCategorie_sous_categorie_id) {
			return $this->_categorie_sous_categorie_id;
		}
	} 
?>