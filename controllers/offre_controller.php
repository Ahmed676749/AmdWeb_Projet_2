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
			$arrErrors 	= array(); // Initialisation du tableau des erreurs
			if(count($_POST) > 0){
				$objOffre->hydrate($_POST);

				if ($objOffre->getTitre() == ''){
					$arrErrors['titre'] = "Merci de renseigner un titre";
				}
				

				if ($objOffre->getDescription() == ''){
					$arrErrors['description'] = "Merci de renseigner une description";
				}
				
				if ($objOffre->getAdresse() == ''){
					$arrErrors['adresse'] = "Merci de renseigner une adresse";
				}	

				if ($objOffre->getSalaire() == ''){
					$arrErrors['salaire'] = "Merci de renseigner un salaire";
				}

				if ($objOffre->getSiret() == ''){
					$arrErrors['siret'] = "Merci de renseigner un siret";
				}

				if (count($arrErrors)==0){ 
					$objOffreManager->ajouterOffre($objOffre);
				}
				
				
				
			}
		
				$this->_arrData['objOffre'] = $objOffre;
				$this->_arrData['arrError']	= $arrErrors;
				$this->_arrData['strTitle']	= "Ajouter une offre d'emploi";
				$this->_arrData['strPage']	= "ajouteroffre";
				$this->display("ajouteroffre");
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

			$objUneOffre = $objOffreManager->afficherUneOffre($_GET["id"]);

			$objOffre = new Offre;

			$objOffre->hydrate($objUneOffre);
			$this->_arrData['uneOffre'] = $objOffre;
			$this->_arrData['strTitle']	= "page détails emploi";
			$this->_arrData['strPage']	= "details-emploi";
			$this->display("detailsemploi");
		}

		public function modifierOffre() {
			require("entities/offre_entity.php"); 
			require("models/offre_manager.php");
			$objModif = new Offre;
			$managerModif = new OffreManager;
			$id = $_GET["idMod"];
			
			$arrErrors 	= array(); // Initialisation du tableau des erreurs
			
			// echo "<pre>";
			// print_r($objModif);
			if(count($_POST) > 0) {

				$objModif->hydrate($_POST);
			// 	echo "<pre>";
			// print_r($_POST);
				
				if ($objModif->getTitre() == ''){
					$arrErrors['titre'] = "Merci de renseigner un titre";
				}
				

				if ($objModif->getDescription() == ''){
					$arrErrors['description'] = "Merci de renseigner une description";
				}
				
				if ($objModif->getAdresse() == ''){
					$arrErrors['adresse'] = "Merci de renseigner une adresse";
				}	

				if ($objModif->getSalaire() == ''){
					$arrErrors['salaire'] = "Merci de renseigner un salaire";
				}

				if ($objModif->getSiret() == ''){
					$arrErrors['siret'] = "Merci de renseigner un siret";
				}

				if (count($arrErrors)==0){ 
					$managerModif->modifierOffres($objModif);
				}
			
			
			
			
			}
			$this->_arrData['arrError']	= $arrErrors;
			$this->_arrData['objModif']	= $objModif;
			$this->_arrData['strTitle']	= "modifier offre  d'emploi";
			$this->_arrData['strPage']	= "modifieroffre";
			$this->display("modifieroffre");
		}


		public function supprimerOffre() {
			require("entities/offre_entity.php"); 
			require("models/offre_manager.php");
			$offreSupprim = $_GET["idSup"];
			$managerSup = new OffreManager;

			if(isset($_GET) && isset($_GET["delete"]) && isset($_GET["delete"]) == "1") {
				$managerSup->supprimerOffres($offreSupprim);
				header("Location: index.php?ctrl=offre&action=afficherOffres");
			}


		}
}

?>