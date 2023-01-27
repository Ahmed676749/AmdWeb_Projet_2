<?php
	class Candidature {
		private $_candidature_id;
		private $_candidature_date;
		private $_candidature_utilisateur_id;
		private $_candidature_offre_id;
		
		

		public function __construct()
		{
		}

		public function getCandidatureId() {
			return $this->_candidature_id;
		}
		public function setCandidatureId($intCandidature_id) {
			return $this->_candidature_id;
		}

		public function getCandidatureDate() {
			return $this->_candidature_date;
		}
		public function setCandidatureDate($strCandidature_date) {
			return $this->_candidature_date;
		}

		public function getCandidatureUtilisateurId() {
			return $this->_candidature_utilisateur_id;
		}
		public function setCandidatureUtilisateurId($intCandidature_utilisateur_id) {
			return $this->_candidature_utilisateur_id;
		}

		public function getCandidatureOfffrId() {
			return $this->_candidature_offre_id;
		}
		public function setCandOfferId($intCandidature_offre_id) {
			return $this->_candidature_offre_id;
		}
	} 
?>