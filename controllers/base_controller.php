<?php
	// require("libs/Smarty.class.php");
	/**
	* Controller mère
	* @autor Jonathan Legrand
	*/	
	class Base_controller {
		
		protected $_arrData;
		
		/**
		* Fonction d'affichage
		* @param string $strView Nom de la vue à afficher
		*/
		function display(string $strView){
			
			$strTitle 	= $this->_arrData['strTitle'];
			$strPage 	= $this->_arrData['strPage'];
			
			/*$objSmarty	= new Smarty;
			foreach($this->_arrData as $key=>$value){
				$objSmarty->assign($key, $value);
			}
			$objSmarty->display("views/".$strView.".tpl");*/
			
			foreach($this->_arrData as $key=>$value){
				$$key 	= $value; // $$ construction de variable dynamique
			}
			include("views/header.php");
			include("views/".$strView.".php");
			include("views/footer.php");
		}
		
	}