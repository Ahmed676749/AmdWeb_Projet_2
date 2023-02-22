<?php
	class  Offre{
		private $_offreId;
		private $_offreDescription;
		private $_offreTitre;
		private $_offreAdresse;
		private $_offreSiret;
		private $_offreSalaire;
		private $_offreCreation;
		private $_offreModification;
		private $_offreutilisateurId;
		private $_villeId;

		public function __construct()
		{
		}

		public function getId():int {
			return $this->_offreId;
		}
		public function setId($intId) {
			$this->_offreId = $intId;
		}

		public function getDescription():string|null {
			return $this->_offreDescription;
		}
		public function setDescription($strDescription) {
			$this->_offreDescription = filter_var(trim($strDescription),FILTER_SANITIZE_SPECIAL_CHARS);
		}

		public function getTitre():string|null {
			return $this->_offreTitre;
		}
		public function setTitre($strTitre) {
			$this->_offreTitre = filter_var(trim($strTitre),FILTER_SANITIZE_SPECIAL_CHARS);
		}

		public function getAdresse():string|null {
			return $this->_offreAdresse;
		}
		public function setAdresse($strAdresse) {
			 $this->_offreAdresse = filter_var(trim($strAdresse),FILTER_SANITIZE_SPECIAL_CHARS);
		}

		public function getSiret():string|null {
			return $this->_offreSiret;
		}
		public function setSiret($strSiret) {
			 $this->_offreSiret = filter_var(trim($strSiret),FILTER_SANITIZE_SPECIAL_CHARS);
		}

		public function getSalaire():int|null {
			return $this->_offreSalaire;
		}
		public function setSalaire($intSalaire) {
			 $this->_offreSalaire = filter_var(trim($intSalaire),FILTER_SANITIZE_SPECIAL_CHARS);
		}

		public function getCreation():string {
			$date = new DateTime($this->_offreCreation);
			return $date->format('d/m/Y');
		}
		public function setCreation($strCreation) {
			 $this->_offreCreation = $strCreation;
		}

		public function getModification() {
			return $this->_offreModification;
		}
		public function setModification($strModification) {
			$this->_offreModification = $strModification;
		}

		public function getIdutilisateur() {
			return $this->_offreutilisateurId;
		}
		public function setIdutilisateur($intutilisateurId) {
			$this->_offreutilisateurId = $intutilisateurId;
		}

		public function getIdville() {
			return $this->_villeId;
		}
		public function setIdville($intvilleId) {
			$this->_villeId = $intvilleId;
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