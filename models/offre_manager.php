<?php
	require_once("models/connect.php");
	require_once("entities/offre_entity.php");
	/**
	* Class manager des articles
	* @creator Ahmed AL AMRI
	*/
	class OffreManager extends Manager{
		public function __construct(){
			parent::__construct();
		}

		public function ajouterOffre(Offre $offre) {
			$strTitre = $offre->getTitre();
			$strDescription = $offre->getDescription();
			$strSalaire = $offre->getSalaire();
			$strSiret = $offre->getSiret();
			$strAdresse = $offre->getAdresse();
	
    		$strRq = "INSERT INTO offre (offre_titre, offre_description, offre_salaire, offre_siret, offre_adresse)
                      VALUES ('".$strTitre."', '".$strDescription."', '".$strSalaire."', '".$strSiret."', '".$strAdresse."')"; 

        	return $this->_db->exec($strRq);
		}

		public function trouverOffre() {
			$strRqAfficher = "SELECT *
							  FROM offre";
			
			return $this->_db->query($strRqAfficher)->fetchAll();
			
		}

		public function afficherUneOffre($intId){
			$strRqOffreSelect =  "SELECT offre_id, offre_titre, offre_description, offre_salaire, offre_siret, offre_adresse FROM offre WHERE offre_id = $intId";
			return $this->_db->query($strRqOffreSelect)->fetch();
		}

		public function modifierOffres($idOffre){
			// if(count($_POST) == 0) {
			// 	$rqOffreModif = "SELECT * FROM offre WHERE offre_id = $idOffre";
				
			// 	$infoObj = $this->_db->query($rqOffreModif)->fetch();
			// 	return $infoObj;
			// } else {
				// if(count($_POST) > 0) {
					$strDescriptionMod = $idOffre->getDescription();
					$strTitreMod = $idOffre->getTitre();
					$strSalaireMod = $idOffre->getSalaire();
					$strSiretMod = $idOffre->getSiret();
					$strAdresseMod = $idOffre->getAdresse();
					$intIdModif = $_GET["idMod"];


					$rqModifier = "UPDATE offre SET offre_description = '".$strDescriptionMod."', offre_titre = '".$strTitreMod."', offre_salaire = '".$strSalaireMod."', offre_siret = '".$strSiretMod."', offre_adresse = '".$strAdresseMod."' WHERE offre_id = '".$intIdModif."'";
					
					$this->_db->exec($rqModifier);
					// echo "<pre>";
					// print_r($rqModifier);
				// }
			// }
		}


		public function supprimerOffres($offreSup){
			$rqSuppOffre = "DELETE FROM offre WHERE offre_id = $offreSup";
			$this->_db->exec($rqSuppOffre);

		}
	}