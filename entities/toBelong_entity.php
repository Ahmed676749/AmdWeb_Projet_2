<?php
	class ToBelong {
		private $_toBelongId;
		private $_toBelongOfferId;
		private $_toBelongCategoryId;

		public function __construct()
		{
		}

		public function getToBelongId() {
			return $this->_toBelongId;
		}
		public function setToBelongId($intToBelongId) {
			return $this->_toBelongId;
		}

		public function getToBelongOfferId() {
			return $this->_toBelongOfferId;
		}
		public function setToBelongOfferId($intToBelongOfferId) {
			return $this->_toBelongOfferId;
		}

		public function getToBelongCategoryId() {
			return $this->_toBelongCategoryId;
		}
		public function setToBelongCategoryId($intToBelongCategoryId) {
			return $this->_toBelongCategoryId;
		}
	} 
?>