<?php
	/**
	* Controller des pages
	* @autor Ahmed AL AMRI
	*/
	class Page_controller extends Base_controller{
		
		public function accueil(){
			$this->_arrData['strTitle']	= "Accueil";
			$this->_arrData['strPage']	= "accueil";
			$this->display("index");
		}

		public function ajouteroffre(){
			$this->_arrData['strTitle']	= "Ajouter une offre d'emploi";
			$this->_arrData['strPage']	= "ajouteroffre";
			$this->display("ajouteroffre");
		}
		
		public function emploi(){
			$this->_arrData['strTitle']	= "pages des emplois";
			$this->_arrData['strPage']	= "emploi";
			$this->display("emploi");
		}
	
		public function galerie(){
			$this->_arrData['strTitle']	= "pages des photos";
			$this->_arrData['strPage']	= "galerie";
			$this->display("galerie");
		}

		public function inscription(){
			$this->_arrData['strTitle']	= "pages inscription";
			$this->_arrData['strPage']	= "inscription";
			$this->display("inscription");
		}

		public function connexion(){
			$this->_arrData['strTitle']	= "pages connexion";
			$this->_arrData['strPage']	= "connexion";
			$this->display("connexion");
		}
	}