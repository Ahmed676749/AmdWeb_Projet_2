<?php
	class Candidacy {
		private $_candId;
		private $_date;
		private $_candUserId;
		private $_candOfferId;
		
		

		public function __construct()
		{
		}

		public function getcandId() {
			return $this->_candId;
		}
		public function setCandId($intCandId) {
			return $this->_candId;
		}

		public function getDate() {
			return $this->_date;
		}
		public function setDate($strDate) {
			return $this->_date;
		}

		public function getCandUserId() {
			return $this->_candUserId;
		}
		public function setCandUserId($intCandUserId) {
			return $this->_candUserId;
		}

		public function getCandOfferId() {
			return $this->_candOfferId;
		}
		public function setCandOfferId($intCandOfferId) {
			return $this->_candOfferId;
		}
	} 
?>