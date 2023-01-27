<?php
	require_once("connect.php");//Classe mère des managers
	/**
	* Class manager des articles
	* @creator Lucien Bruzzese
	*/
	class OffreManager extends Manager{
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			parent::__construct();
		}
		
		/**
		* Methode de récupération des articles
		* @param int $intLimit Nombre limite de résultats
		* @return array Liste des articles
		*/
		public function findOffres(int $intLimit = 0){
			// Début de la requête
			$strRq 		= "	SELECT offre_id, offre_titre, offre_description,
								offre_datecreation, user_firstname AS 'article_creator', user_name
							FROM offre
								INNER JOIN users ON article_creator = user_id ";
			$strWhere	= " WHERE ";
			
	
		
			
		

		
		
	}