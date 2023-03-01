<?php

/**
	* Controller des pages des catégories
	* @autor Ahmed AL AMRI
	*/
	class Categorie_controller extends Base_controller{
		
		public function ajouterCategorie(){
		// 	// inclure les fichiers des classes
			require("entities/categorie_entity.php"); 
			require("models/categorie_manager.php"); 

			$objCatManager = new CategorieManager(); 
			$objCat = new Categorie;

			
			if(count($_POST)>0){

                
				
                // echo "<pre>";
                // print_r($_POST);
				$objCat->hydrate($_POST);

                // echo "<pre>";
                // print_r($objCat);
				$objCatManager->ajouterCategories($objCat);
                
			} 
		
				$this->_arrData['objCat'] = $objCat;
				$this->_arrData['strTitle']	= "Ajouter une categorie";
				$this->_arrData['strPage']	= "ajoutercategorie";
				$this->display("ajoutercategorie");
    }

		public function afficherCategorie() {
			require("entities/categorie_entity.php"); 
			require("models/categorie_manager.php"); 
			$objManager = new CategorieManager(); 
			$arrCat = $objManager->affichCat();

			$arrAffichage = array();
			foreach($arrCat as $arrDetCat){
				// Création de l'objet Offre
				$objCat = new Categorie;
				$objCat->hydrate($arrDetCat); // On hydrate l'objet
				$arrAffichage[] = $objCat;
		}

			$this->_arrData['arrAffichage'] = $arrAffichage;
			$this->_arrData['strTitle']	= "page des catégories";
			$this->_arrData['strPage']	= "categorie";
			$this->display("categorie");
	}
}
?>