<?php
	class Picture {
		private $_pictureId;
		private $_pictureName;
		private $_pictureUserId;

		public function __construct()
		{
		}

		public function getPictureId() {
			return $this->_pictureId;
		}
		public function setPictureId($intPictureId) {
			return $this->_pictureId;
		}

		public function getPictureName() {
			return $this->_pictureName;
		}
		public function setPictureName($strPictureName) {
			return $this->_pictureName;
		}

		public function getPictureUserId() {
			return $this->_pictureUserId;
		}
		public function setPictureUserId($intPictureUserId) {
			return $this->_pictureUserId;
		}
	} 
?>