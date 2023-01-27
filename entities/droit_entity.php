<?php
	class Droit {
		private $_droit_id;
		private $_droit_nom;

		public function __construct()
		{
		}

		public function getDroitId() {
			return $this->_droit_id;
		}
		public function setDroitId($intDroit_id) {
			return $this->_droit_id;
		}

		public function getDroitNom() {
			return $this->_droit_nom;
		}
		public function setDroitNom($strDroit_nom) {
			return $this->_droit_nom;
		}
	} 
?>