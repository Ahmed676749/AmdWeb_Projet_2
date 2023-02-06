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

		public function afficherOffre() {
			require("entities/offre_entity.php"); 
			require("models/offre_manager.php"); 
			$objOffreManager = new OffreManager();
			$objUneOffre = new Offre;
			$arrUneOffre = $objOffreManager->afficherUneOffre($objUneOffre);

			$arrAfficheUneOffre = array();
			foreach($arrUneOffre as $arrDetUneOffre){
				// $objUneOffre = new Offre;
				$objUneOffre->hydrate($arrDetUneOffre);
				$arrAfficheUneOffre[]= $objUneOffre;

				// $strSelected = "selected";
				// if(($strId == $strSelected) && ($objUneOffre->getId()) == $strSelected) {
				// 	return $objUneOffre->getId();
				// } else {
				// 	echo "ca marche PAS!!";
				// }

				$strSelected = ($strId == $objUneOffre->getId())?"selected":"";
				


			}

			$this->_arrData['arrAfficheUneOffre'] = $arrAfficheUneOffre;
			var_dump($arrAfficheUneOffre);
			$this->_arrData['strTitle']	= "page détails emploi";
			$this->_arrData['strPage']	= "details-emploi";
			$this->display("detailsemploi");
		}
}

?>