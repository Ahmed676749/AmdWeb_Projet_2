<?php
	class Categorie {
		private $_categorieId;
		private $_categorieNom;
		private $_sousId;

		public function __construct()
		{
		}

		public function getId() {
			return $this->_categorieId;
		}
		public function setId($intId) {
			return $this->_categorieId = $intId;
		}

		public function getNom() {
			return $this->_categorieNom;
		}
		public function setNom($strNom) {
			return $this->_categorieNom = $strNom;
		}

		public function getSousid() {
			return $this->_sousId;
		}
		public function setSousid($intSousid) {
			return $this->_sousId = $intSousid;
		}

		/**
		* Remplissage de l'objet avec les données du tableau
		*/
		public function hydrate($arrData){
			foreach($arrData as $key=>$value){
				$strMethod = "set".ucfirst(str_replace("categorie_", "", $key));
				if (method_exists($this, $strMethod)){
					$this->$strMethod($value); 
				}
			}
		}
	} 
?>