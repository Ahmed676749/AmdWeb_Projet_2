<?php
	require_once("../controllers/connect.php");//Classe mère des managers
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
		* Methode de récupération des articles
		* @ param int $intLimit Nombre limite de résultats
		* @ return array Liste des articles
		*/
		// public function findOffres(int $intLimit = 0){
		// 	// Début de la requête
		// 	$strRq 		= "	SELECT article_id, article_title, article_img, article_content,
		// 						article_createdate, user_firstname AS 'article_creator', user_name
		// 					FROM articles
		// 						INNER JOIN users ON article_creator = user_id ";
		// 	$strWhere	= " WHERE ";
			
		// 	// Traitement des mots clés (dans le titre ou le contenu)
		// 	$strKeywords 	= $_POST['keywords']??'';
		// 	if ($strKeywords != ''){
		// 		$strRq 		.= $strWhere." (article_title LIKE '%".$strKeywords."%' 
		// 							OR article_content LIKE '%".$strKeywords."%' )";
		// 		$strWhere	= " AND ";
		// 	}
		// 	// Traitement date exacte
		// 	$boolPeriod 	= $_POST['period']??0;
		// 	$strDate 		= $_POST['date']??'';
		// 	if ($boolPeriod == 0 && $strDate != ''){
		// 		$strRq 		.= $strWhere." article_createdate = '".$strDate."' ";
		// 		$strWhere	= " AND ";
		// 	}
			
		// 	// Traitement par période de dates
		// 	$strStartDate 		= $_POST['startdate']??'';
		// 	$strEndDate 		= $_POST['enddate']??'';
		// 	if ($boolPeriod == 1 && $strStartDate != '' && $strEndDate != ''){
		// 		$strRq 		.= $strWhere." article_createdate BETWEEN '".$strStartDate."' AND '".$strEndDate."' ";
		// 		$strWhere	= " AND ";
		// 	}
			
		// 	// Traitement des auteurs
		// 	$intAuthor	= $_POST['author']??'';
		// 	if ($intAuthor != ''){
		// 		$strRq 		.= $strWhere." article_creator = ".$intAuthor;
		// 	}

		// 	// Classement des résultats
		// 	$strRq 		.= " ORDER BY article_createdate DESC ";
			
		// 	// Nombre limite si supérieur à 0
		// 	if ($intLimit > 0){
		// 		$strRq 	.= " LIMIT ".$intLimit;
		// 	}
							
		// 	return $this->_db->query($strRq)->fetchAll();
		// }

        $strRq = "INSERT INTO offre (offre_titre, offre_description, offre_salaire, offre_siret, offre_adresse)
              VALUES ('".$strOffreTitre."', '".$strOffreDescription."', '".$strOffreSalaire."', '".$strOffreSiret."', '".$strOffreLieu."')"; 

        $arrAddJob = $db->exec($strRq);
		
	}