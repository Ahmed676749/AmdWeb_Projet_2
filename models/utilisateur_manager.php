<?php

	require_once("models/connect.php");//Classe mère des managers
	/**
	* Class manager des utilisateurs
	* @creator Jonathan Legrand
	*/
	class UtilisateurManager extends Manager{
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			parent::__construct();
		}
		
		/**
		* Méthode de récupération des utilisateurs
		* @return array Liste des utilisateurs
		* @return array Liste des utilisateurs

		*/
		public function afficherUtilisateur(){
			$strRqUsers = "SELECT utilisateur_type, utilisateur_nom, utilisateur_prenom, utilisateur_adresse, utilisateur_mail, utilisateur_mdp FROM utilisateur;";
							
			return $this->_db->query($strRqUsers)->fetchAll();
		}

		/**
		* Méthode de création des utilisateurs
		*/
		public function creerUtilisateur($objUser){
			$strRqAdd 	= "INSERT INTO utilisateur 
								(utilisateur_nom, utilisateur_prenom, utilisateur_adresse, utilisateur_mail, utilisateur_mdp, utilisateur_type, utilisateur_date_creation)
							VALUES 
								('".$objUser->getNom()."','".$objUser->getPrenom()."','".$objUser->getAdresse()."','".$objUser->getMail()."','".$objUser->getMdp()."','".$objUser->getType()."', NOW());";

			var_dump($objUser);
			var_dump($strRqAdd);
			return $this->_db->exec($strRqAdd);
		}
		
		
	}