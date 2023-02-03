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
								offre_date_creation, utilisateur_prenom AS 'offre_creator', utilisateur_nom, offre_ville_id
							FROM offre
								INNER JOIN utilisateur ON offre_utilisateur_id = utilisateur_id 
								INNER JOIN ville ON offre_ville_id = ville_id ";
								
			$strWhere	= " WHERE ";
			
	
			return $this->_db->query($strRq)->fetchAll();
			
		
	}
}