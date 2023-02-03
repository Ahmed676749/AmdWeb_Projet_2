<?php

/**
	* Controller des pages des offres
	* @autor Ahmed AL AMRI
	*/
	class Offre_controller extends Base_controller{
		
		public function ajouterOffre(){
			// inclure les fichiers des classes
			require("../entities/offre_entity.php"); 
			require("../models/offre_manager.php"); 
			$objoffreManager 	= new OffreManager(); // instancier la classe
			$arrOffres		= $objOffreManager->findOffres(); // utiliser la classe
			
			// Traitement de la liste des offres de la BDD en objet
			$arrOffresToDisplay = array();
			foreach($arrOffres as $arrDetOffre){
				$objOffre = new Offre;
				$objOffre->hydrate($arrDetOffre);
				$arrOffresToDisplay[] = $objOffre;
			}		
            
        
			// On envoie la liste des objets à la vue
			$this->_arrData['arrOffresToDisplay']		= $arrOffresToDisplay; 	
			
			// Pour récupérer les informations dans le formulaire
			// $this->_arrData['strKeywords'] 	= $_POST['keywords']??'';
			// $this->_arrData['boolPeriod'] 	= $_POST['period']??0;
			// $this->_arrData['strDate'] 		= $_POST['date']??'';
			// $this->_arrData['strStartDate'] = $_POST['startdate']??'';
			// $this->_arrData['strEndDate'] 	= $_POST['enddate']??'';
			// $intAuthor						= $_POST['author']??'';
			// $this->_arrData['intAuthor']	= $intAuthor;

            $this->_arrData['strOffreTitre'] = $_POST["offreTitre"]??"";
            $this->_arrData['strOffreDescription'] = $_POST["offreDescription"]??"";
            $this->_arrData['strOffreSalaire'] = $_POST["offreSalaire"]??"";
            $this->_arrData['strOffreSiret'] = $_POST["offreSiret"]??"";
            $this->_arrData['strOffreLieu'] = $_POST["offreLieu"]??"";
  



            $this->_arrData['strTitle']	= "Ajouter une offre d'emploi";
			$this->_arrData['strPage']	= "ajouter-offre";
			// $this->display("ajouterOffre");
			$this->display("ajouter-offre");
  }

}
?>