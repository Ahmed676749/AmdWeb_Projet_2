<?php
	require_once("connect.php");//Classe mère des managers
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
		* Methode de récupération des utilisateurs
		* @return array Liste des utilisateurs
		*/
		public function findUsers(){
			$strRqUsers = "SELECT utilisateur_nom, utilisateur_prenom, utilisateur_adresse, utilisateur_mail, utilisateur_mdp FROM utilisateur;";
							
			return $this->_db->query($strRqUsers)->fetchAll();
		}
		
		
	}