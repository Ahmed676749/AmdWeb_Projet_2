<?php
	/**
	* Controller des erreurs
	* @autor Jonathan Legrand
	*/
	class Error_controller extends Base_controller{
		/**
		* Redirection vers la Page Error_404
		*/
		public function error_404(){
			//Affichage
			$this->_arrData['strTitle']	= "Page non trouvée";
			$this->_arrData['strPage']	= "error_404";

			$this->display("error_404");
		}
		
		/**
		* Redirection vers la Page Error_403
		*/
		public function error_403(){
			//Affichage
			$this->_arrData['strTitle']	= "Accès interdit";
			$this->_arrData['strPage']	= "error_403";
			
			$this->display("error_403");
		}		
	}