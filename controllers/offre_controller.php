<?php

/**
	* Controller des pages des offres
	* @autor Ahmed AL AMRI
	*/
	class Offre_controller extends Base_controller{
		
		public function ajouterOffre(){
		// 	// inclure les fichiers des classes
			require("entities/offre_entity.php"); 
			require("models/offre_manager.php"); 

			$objOffreManager = new OffreManager(); 
			$objOffre = new Offre;

			if($_POST){
				$objOffre->hydrate($_POST);
				$objOffreManager->ajouterOffre($objOffre);
			}
  }

  		public function afficherOffres() {
			require("entities/offre_entity.php"); 
			require("models/offre_manager.php"); 
			$objOffreManager = new OffreManager(); 
			$arrOffres = $objOffreManager->trouverOffre();

			$arrOffreAffichage = array();
			foreach($arrOffres as $arrDetOffre){
				$objOffreAf = new Offre;
				$objOffreAf->hydrate($arrDetOffre);
				$arrOffreAffichage[] = $objOffreAf;
		}

		$this->_arrData['arrOffreAffichage'] = $arrOffreAffichage;

		$this->_arrData['strTitle']	= "page emploi";
		$this->_arrData['strPage']	= "emploi";
		$this->display("emploi");

	}
}

?>