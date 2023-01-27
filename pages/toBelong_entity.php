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
		public function setCategoryId($intCategoryId) {
			return $this->_categoryId;
		}

		public function getCategoryName() {
			return $this->_categoryName;
		}
		public function setCategoryName($strCategoryName) {
			return $this->_categoryName;
		}

		public function getCatgorySubCategoryId() {
			return $this->_categorySubCategoryId;
		}
		public function setCategorySubCategoryId($strCategorySubCategoryId) {
			return $this->_categorySubCategoryId;
		}
	} 
?>