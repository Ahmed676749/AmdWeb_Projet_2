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

		public function getNom():string|null {
			return $this->_nom;
		}
		public function setNom($strNom) {
			return $this->_nom =  filter_var(trim($strNom),FILTER_SANITIZE_SPECIAL_CHARS);
		}

		public function getUtilisateurid() {
			return $this->_photoUtilisateurid;
		}
		public function setUtilisateurid($intutilisateurId) {
			return $this->_photoUtilisateurid = $intutilisateurId;
		}

		/**
		* Remplissage de l'objet avec les données du tableau
		*/
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