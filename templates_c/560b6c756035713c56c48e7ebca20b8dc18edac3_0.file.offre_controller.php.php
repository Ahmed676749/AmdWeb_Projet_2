<?php
/* Smarty version 4.2.1, created on 2023-02-05 18:00:44
  from 'C:\xampp\htdocs\amdweb\controllers\offre_controller.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63dfe0bc44b995_16522114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '560b6c756035713c56c48e7ebca20b8dc18edac3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amdweb\\controllers\\offre_controller.php',
      1 => 1675616442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dfe0bc44b995_16522114 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>


/**
	* Controller des pages des offres
	* @autor Ahmed AL AMRI
	*/
	class Offre_controller extends Base_controller{
		
		public function ajouterOffre(){
		// 	// inclure les fichiers des classes
			require("entities/offre_entity.php"); 
			require("models/offre_manager.php"); 

			$objOffreManager = new OffreManager(); // instancier la classe

			//Simule ce que renvoi le formulaire
			// $nouvelleOffre = [
			// 	"offre_titre" => "mon titre",
			// 	"offre_description" => "ma description",
			// 	"offre_salaire" => "20000",
			// 	"offre_siret" => "16546546",
			// 	"offre_lieu" =>"strasbourg"
			// ];
			$objOffre = new Offre;
	
			// $offre->hydrate($nouvelleOffre);

			if($_POST){
				$objOffre->hydrate($_POST);
				$objOffreManager->ajouterOffre($objOffre);
			}

			

			// echo '<pre>';
			// print_r($offre);
			// $objOffreManager->ajouterOffre($offre); // utiliser la classe
  }

  	public function afficherOffres() {
		require("entities/offre_entity.php"); 
		require("models/offre_manager.php"); 
		var_dump("test 0");
		$objOffreManager = new OffreManager(); 
		var_dump("test 1");
		$objOffreAf = new Offre;
		$arrOffres = $objOffreManager->afficherOffre($objOffreAf);

		var_dump("test 2");
		$arrOffreAffichage = array();
		var_dump("test 3");
		foreach($arrOffres as $arrDetOffre) {
			// $objOffreAf = new Offre;
			$objOffreAf->hydrate($arrDetOffre);
			$arrOffreAffichage[] = $objOffreAf;
			include("emploi.tpl");
		}

		var_dump("test 4");
		var_dump($arrOffreAffichage);
		$this->_arrData['arrOffreAffichage'] 	= $arrOffreAffichage;

		// $this->_arrData['strTitle']	= "page emploi";
		// $this->_arrData['strPage']	= "emploi";
		// $this->display("emploi");



		// $objOffreAfficher = new Offre;
		// $objOffreAfficher->hydrate($objOffreAfficher);
		// $objOffreManager->afficherOffre();
	}

	// public function afficher() {
	// 	$this->afficherOffres();
	// }

	// public function accueil(){
	// 	// inclure les fichiers des classes
	// 	require("entities/article_entity.php"); 
	// 	require("models/article_manager.php"); 
	// 	$objManager 	= new ArticleManager(); // instancier la classe
	// 	$arrArticles 	= $objManager->findArticles(4); // utiliser la classe
		
	// 	// Traitement des articles
	// 	$arrArticlesToDisplay = array();
	// 	foreach($arrArticles as $arrDetArticle){
	// 		$objArticle = new Article;
	// 		$objArticle->hydrate($arrDetArticle);
	// 		//include("article.php");
	// 		$arrArticlesToDisplay[] = $objArticle;
	// 	}
	// 	//var_dump($arrArticlesToDisplay);die;
		
	// 	$this->_arrData['arrArticlesToDisplay'] 	= $arrArticlesToDisplay;
		
	// 	// Affichage
	// 	$this->_arrData['strTitle']	= "Accueil";
	// 	$this->_arrData['strPage']	= "index";
	// 	$this->display("index");
	// }
	

	}

<?php echo '?>';
}
}
