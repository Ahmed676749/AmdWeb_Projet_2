<?php
	class User {
		private $_userId;
		private $_name;
		private $_firstname;
		private $_userAdress;
		private $_type;
		private $_cv;
		private $_mail;
		private $_pwd;
		private $_userCreateDate;
		private $_userChangeDate;
		private $_userConnectionDate;
        private $_cityId;
		private $_rightId;
		

		public function __construct()
		{
		}

		public function getUserId() {
			return $this->_userId;
		}
		public function setUserId($intUserId) {
			return $this->_userId;
		}

		public function getName() {
			return $this->_name;
		}
		public function setName($strName) {
			return $this->_name;
		}

		public function getFirstname() {
			return $this->_firstname;
		}
		public function setFirstname($strFirstname) {
			return $this->_firstname;
		}

		public function getUserAdress() {
			return $this->_userAdress;
		}
		public function setUserAdress($strUserAdress) {
			return $this->_userAdress;
		}

		public function getType() {
			return $this->_type;
		}
		public function setType($strType) {
			return $this->_type;
		}

		public function getCv() {
			return $this->_cv;
		}
		public function setCv($strCv) {
			return $this->_cv;
		}

		public function getMail() {
			return $this->_mail;
		}
		public function setMail($strMail) {
			return $this->_mail;
		}

		public function getPwd() {
			return $this->_pwd;
		}
		public function setPwd($strPwd) {
			return $this->_pwd;
		}

		public function getUserCreateDate() {
			return $this->_userCreateDate;
		}
		public function setUserCreateDate($strUserCreateDate) {
			return $this->_userCreateDate;
		}

		public function getUserChangeDate() {
			return $this->_userChangeDate;
		}
		public function setUserChangeDate($strUserChangeDate) {
			return $this->_userChangeDate;
		}

		public function getUserConnectionDate() {
			return $this->_userConnectionDate;
		}
		public function setUserConnectionDate($strUserConnectionDate) {
			return $this->_userConnectionDate;
		}

		public function getcityId() {
			return $this->_cityId;
		}
		public function setCityId($intCityId) {
			return $this->_cityId;
		}

        public function getRightId() {
			return $this->_rightId;
		}
		public function setRightId($intRightId) {
			return $this->_rightId;
		}
	} 
?>