<?php
	/**
	* Controller des pages
	* @autor Ahmed AL AMRI
	*/
	class Page_controller extends Base_controller{
		
		/**
		* Page ajouter offre
		*/
		public function ajouterOffreEmploi(){
			$this->_arrData['strTitle']	= "Ajouter une offre d'emploi";
			$this->_arrData['strPage']	= "ajouter-offre";
			$this->display("ajouter-offre");
			// $this->display("ajouter-offre");
			/* 
			$strTitle 	= "A propos";
			$strPage	= "about";
			=> Vers Base_controller
			include("views/header.php");
			include("views/about.php");
			include("views/footer.php");
			*/
		}
		
		/**
		* Page Contact
		*/
		// public function contact(){
		// 	$this->_arrData['strTitle']	= "Contact";
		// 	$this->_arrData['strPage']	= "contact";
		// 	$this->display("contact");
		// }
		
		// /**
		// * Page Mentions légales
		// */
		// public function mentions(){
		// 	$this->_arrData['strTitle']	= "Mentions légales";
		// 	$this->_arrData['strPage']	= "mentions";
		// 	$this->display("mentions");
		// }
	}