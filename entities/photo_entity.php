<?php
	class Photo {
		private $_id;
		private $_nom;
		private $_photoUtilisateurid;

		public function __construct()
		{
		}

		public function getId() {
			return $this->_id;
		}
		public function setId($intId) {
			return $this->_id = $intId;
		}

		public function getNom() {
			return $this->_nom;
		}
		public function setNom($strNom) {
			return $this->_nom = $strNom;
		}

		public function getUtilisateurid() {
			return $this->_photoUtilisateurid;
		}
		public function setUtilisateurid($intutilisateurId) {
			return $this->_photoUtilisateurid = $intutilisateurId;
		}

		public function hydrate($arrData){
			foreach($arrData as $key=>$value){
				$strMethod = "set".ucfirst(str_replace("photo_", "", $key));
				if (method_exists($this, $strMethod)){
					$this->$strMethod($value); 
				}
			}
		}
	} 
?>