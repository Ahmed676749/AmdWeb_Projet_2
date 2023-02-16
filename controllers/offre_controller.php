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

			// public function ajouteroffre(){
				$this->_arrData['uneOffre'] = $objOffre;
				$this->_arrData['strTitle']	= "Ajouter une offre d'emploi";
				$this->_arrData['strPage']	= "ajouteroffre";
				$this->display("ajouteroffre");
			// }
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

			$this->_arrData['strKeywords'] 	= $_POST['keywords']??'';

		

    }
		

		public function afficherOffre() {
			require("entities/offre_entity.php"); 
			require("models/offre_manager.php"); 
			$objOffreManager = new OffreManager();

			$objUneOffre = $objOffreManager->afficherUneOffre($_GET["id"]);

			$objOffre = new Offre;

			$objOffre->hydrate($objUneOffre);
			$this->_arrData['uneOffre'] = $objOffre;
			$this->_arrData['strTitle']	= "page détails emploi";
			$this->_arrData['strPage']	= "details-emploi";
			$this->display("detailsemploi");

		}

		
}

?>