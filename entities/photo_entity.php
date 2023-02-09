<?php
	class Photo {
		private $_photo_id;
		private $_photo_nom;
		private $_photo_utilisateur_id;

		public function __construct()
		{
		}

		public function getPhotoId() {
			return $this->_photo_id;
		}
		public function setPhotoId($intPhoto_id) {
			return $this->_photo_id;
		}

		public function getPhotoNom() {
			return $this->_photo_nom;
		}
		public function setPhotoNom($strPhoto_nom) {
			return $this->_photo_nom;
		}

		public function getPhotoUtilisateurId() {
			return $this->_photo_utilisateur_id;
		}
		public function setPhotoUtilisateurId($intPhoto_utilisateur_id) {
			return $this->_photo_utilisateur_id;
		}
	} 
?>