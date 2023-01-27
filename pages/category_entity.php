<?php
	class Category {
		private $_categoryId;
		private $_categoryName;
		private $_categorySubCategoryId;

		public function __construct()
		{
		}

		public function getCategoryId() {
			return $this->_categoryId;
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