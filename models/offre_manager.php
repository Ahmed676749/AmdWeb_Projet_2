<?php
	require_once("models/connect.php");
	require_once("entities/offre_entity.php");
	/**
	* Class manager des articles
	* @creator Ahmed AL AMRI
	*/
	class OffreManager extends Manager{
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			parent::__construct();
		}

		/**
		* Methode d'ajout d'une offre d'emploi'
		* @ param $offre est l'objet à ajouter
		*/
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

		/**
		* Methode trouver les offres d'emplois'
		* * @ return array Liste des offres d'empplois
		*/
		public function trouverOffre() {
			$strRqAfficher = "SELECT *
							  FROM offre";
			
			return $this->_db->query($strRqAfficher)->fetchAll();
			
		}

		/**
		* Méthode qui affiche une offre d'emploi
		* @ param identifiant de l'objet
		* @ return l'offre à afficher
		*/
		public function afficherUneOffre($intId){
			$strRqOffreSelect =  "SELECT offre_id, offre_titre, offre_description, offre_salaire, offre_siret, offre_adresse FROM offre WHERE offre_id = $intId";
			return $this->_db->query($strRqOffreSelect)->fetch();
		}

		/**
		* Méthode permettant de mettre à jour une offre dans la bdd
		* @ param object de l'offre à modifier
		*/
		public function modifierOffres($idOffre){
			
					$strDescriptionMod = $idOffre->getDescription();
					$strTitreMod = $idOffre->getTitre();
					$strSalaireMod = $idOffre->getSalaire();
					$strSiretMod = $idOffre->getSiret();
					$strAdresseMod = $idOffre->getAdresse();
					$intIdModif = $_GET["idMod"];


					$rqModifier = "UPDATE offre SET offre_description = '".$strDescriptionMod."', offre_titre = '".$strTitreMod."', offre_salaire = '".$strSalaireMod."', offre_siret = '".$strSiretMod."', offre_adresse = '".$strAdresseMod."' WHERE offre_id = '".$intIdModif."'";
					
					$this->_db->exec($rqModifier);
			
		}


		/**
		* Méthode permettant de supprimer une offre de la bdd
		* @ param object de l'offre à supprimer
		*/
		public function supprimerOffres($offreSup){
			$rqSuppOffre = "DELETE FROM offre WHERE offre_id = $offreSup";
			$this->_db->exec($rqSuppOffre);

		}
	}