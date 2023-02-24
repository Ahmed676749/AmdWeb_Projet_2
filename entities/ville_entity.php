<?php
	/**
	* Class d'une entité Ville
	* @creator Jonathan Legrand
	*/
	class Ville {
		/* Attributs */
		private $_ville_id;
		private $_ville_cp;
		private $_ville_nom;

		/**
		* Constructeur de la classe
		*/
		public function __construct()
		{
		}

		/**
		* Remplissage de l'objet avec les données du tableau
		*/
		public function hydrate($arrData){
			foreach($arrData as $key=>$value){
				$strMethod = "set".ucfirst($key);
				if (method_exists($this, $strMethod)){
					$this->$strMethod($value);
				}
			}
		}

		/* Getters et Setters */

		/**
		* Getter de ville_id
		* @return int ville_id
		*/
		public function getVille_id() {
			return $this->_ville_id;
		}
		/**
		* Setter de ville_id
		* @param $intVille_id Identifiant
		*/
		public function setVille_id($intVille_id) {
			$this->_ville_id = $intVille_id;
		}

		/**
		* Getter de ville_cp
		* @return string ville_cp
		*/
		public function getVille_cp():string|null{
			return $this->_ville_cp;
		}
		/**
		* Setter de ville_cp
		* @param $strVilleCp Code postal
		*/
		public function setVille_cp(string $strVilleCp) {
			$this->_ville_cp = filter_var(trim($strVilleCp),FILTER_SANITIZE_SPECIAL_CHARS);
		}

		/**
		* Getter de ville_nom
		* @return string ville_nom
		*/
		public function getVille_nom():string|null{
			return $this->_ville_nom;
		}
		/**
		* Setter de ville_nom
		* @param $strVilleNom Nom de la ville
		*/
		public function setVille_nom(string $strVilleNom) {
			$this->_ville_nom = filter_var(trim(strtoupper($strVilleNom)),FILTER_SANITIZE_SPECIAL_CHARS);
		}

	} 
?>