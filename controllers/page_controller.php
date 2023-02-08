<?php
	require('controllers/base_controller.php');
	/**
	* Controller des pages
	* @autor Christel Ehrhart
	*/
	class Page_controller extends Base_controller{
		
		/**
		* Page Accueil
		*/
		public function accueil(){
			$this->_arrData['strTitle']	= "AmdWeb, offres d'emplois spécialisé web";
			$this->_arrData['strPage']	= "index";
			$this->display("index");
			
		}
		
		/**
		* Page Galerie
		*/
		public function galerie(){
			$this->_arrData['strTitle']	= "AmdWeb offres d'emplois, galerie photos";
			$this->_arrData['strPage']	= "galerie";
			$this->display("galerie");
		}
		
		/**
		* Page Mentions légales
		*/
		public function mentions(){
			$this->_arrData['strTitle']	= "AmdWeb, offres d'emplois spécialisé web, mentions légales";
			$this->_arrData['strPage']	= "mentions";
			$this->display("mentions");
		}

		/**
		* Page Emploi
		*/
		public function emploi(){
			$this->_arrData['strTitle']	= "AmdWeb, offres d'emplois spécialisé web";
			$this->_arrData['strPage']	= "emploi";
			$this->display("emploi");
		}

		/**
		* Page Plan du site
		*/
		public function plan(){
			$this->_arrData['strTitle']	= "AmdWeb, offres d'emplois spécialisé web, plan du site";
			$this->_arrData['strPage']	= "plan";
			$this->display("plan");
		}

	}