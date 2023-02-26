<?php
	require("libs/Smarty.class.php");
	/**
	* Controller mère
	* @autor Ahmed AL AMRI
	*/	
	class Base_controller {
		protected $_arrData;
		/**
		* Fonction d'affichage
		* @ param string $strView Nom de la vue à afficher
		*/
		function display(string $strView){
			$objSmarty	= new Smarty;
			foreach($this->_arrData as $key=>$value){
				$objSmarty->assign($key, $value);
			}
			$objSmarty->display("views/".$strView.".tpl");
		}
	}
?>