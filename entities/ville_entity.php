<?php
	class Ville {
		private $_ville_id;
		private $_ville_Cp;
		private $_ville_nom;

		public function __construct()
		{
		}

		public function getVilleId() {
			return $this->_ville_id;
		}
		public function setVilleId($intVille_id) {
			return $this->_ville_id;
		}

        public function getVilleCp() {
			return $this->_ville_cp;
		}
		public function setCityCp($strVille_cp) {
			return $this->_ville_cp;
		}

		public function getCityName() {
			return $this->_ville_nom;
		}
		public function setVilleNom($strVille_nom) {
			return $this->_ville_nom;
		}
	} 
?>