<?php
	class Categorie {
		private $_categorieId;
		private $_categorieNom;
		private $_sousId;

		public function __construct()
		{
		}

		public function getCategorieid() {
			return $this->_categorieId;
		}
		public function setCategorieid($intId) {
			return $this->_categorieId = $intId;
		}

		public function getCategorienom() {
			return $this->_categorieNom;
		}
		public function setCategorienom($strNom) {
			return $this->_categorieNom = $strNom;
		}

		public function getSousid() {
			return $this->_sousId;
		}
		public function setSousid($intSousid) {
			return $this->_sousId = $intSousid;
		}

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