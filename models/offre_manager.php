<?php
	require_once("models/connect.php");
	require_once("entities/offre_entity.php");//Classe mère des managers
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
			$strRqAfficher = "SELECT offre_titre, offre_adresse, offre_salaire
							  FROM offre";
			$arrOffreTab = $this->_db->query($strRqAfficher)->fetchAll();
			return $arrOffreTab;
			var_dump($arrOffreTab);
			var_dump($strRqAfficher);
		}

		public function afficherUneOffre($id){}
		public function modifierOffre(){}
		public function supprimerOffre(){}
	}