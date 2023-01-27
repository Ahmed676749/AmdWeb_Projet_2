<?php
	class Offer {
		private $_offerId;
		private $_description;
		private $_title;
		private $_adress;
		private $_siret;
		private $_salary;
		private $_offerCreateDate;
		private $_offerChangeDate;
		private $_offerUserId;
		private $_offerCityId;

		public function __construct()
		{
		}

		public function getOfferId() {
			return $this->_offerId;
		}
		public function setOfferId($intOfferId) {
			return $this->_offerId;
		}

		public function getDescription() {
			return $this->_description;
		}
		public function setDescription($strDescription) {
			return $this->_description;
		}

		public function getTitle() {
			return $this->_title;
		}
		public function setTitle($strTitle) {
			return $this->_title;
		}

		public function getAdress() {
			return $this->_adress;
		}
		public function setAdress($strAdress) {
			return $this->_adress;
		}

		public function getSiret() {
			return $this->_siret;
		}
		public function setSiret($strSiret) {
			return $this->_siret;
		}

		public function getSalary() {
			return $this->_salary;
		}
		public function setSalary($intSalary) {
			return $this->_salary;
		}

		public function getOfferCreateDate() {
			return $this->_offerCreateDate;
		}
		public function setOfferCreateDate($strOfferCreateDate) {
			return $this->_offerCreateDate;
		}

		public function getOfferChangeDate() {
			return $this->_offerChangeDate;
		}
		public function setOfferChangeDate($strOfferChangeDate) {
			return $this->_offerChangeDate;
		}

		public function getOfferUserId() {
			return $this->_offerUserId;
		}
		public function setOfferUserId($intOfferUserId) {
			return $this->_offerUserId;
		}

		public function getOfferCityId() {
			return $this->_offerCityId;
		}
		public function setOfferCityId($intOfferCityId) {
			return $this->_offerCityId;
		}
	} 
?>