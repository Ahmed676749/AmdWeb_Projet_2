<?php
	/**
	* Controller des pages
	* @autor Christel Ehrhart
	*/
	class Page_controller extends Base_controller{
		
		/**
		* Page A propos
		*/
		public function about(){
			$this->_arrData['strTitle']	= "A propos";
			$this->_arrData['strPage']	= "about";
			$this->display("about");
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
		public function contact(){
			$this->_arrData['strTitle']	= "Contact";
			$this->_arrData['strPage']	= "contact";
			$this->display("contact");
		}
		
		/**
		* Page Mentions légales
		*/
		public function mentions(){
			$this->_arrData['strTitle']	= "AmdWeb, offres d'emplois spécialisé web, mentions légales";
			$this->_arrData['strPage']	= "mentions";
			$this->display("mentions");
		}
	}