<?php
	class City {
		private $_cityId;
		private $_cityCp;
		private $_cityName;

		public function __construct()
		{
		}

		public function getCityId() {
			return $this->_cityId;
		}
		public function setCityId($intCityId) {
			return $this->_cityId;
		}

        public function getCityCp() {
			return $this->_cityCp;
		}
		public function setCityCp($strCityCp) {
			return $this->_cityCp;
		}

		public function getCityName() {
			return $this->_cityName;
		}
		public function setCityName($strCityName) {
			return $this->_cityName;
		}
	} 
?>