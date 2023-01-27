<?php
	class Right {
		private $_rightId;
		private $_rightName;

		public function __construct()
		{
		}

		public function getRightId() {
			return $this->_rightId;
		}
		public function setRightId($intRightId) {
			return $this->_rightId;
		}

		public function getRightName() {
			return $this->_rightName;
		}
		public function setRightName($strRightName) {
			return $this->_rightName;
		}
	} 
?>