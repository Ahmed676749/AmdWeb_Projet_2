<?php
    require_once("models/connect.php");
	require_once("entities/categorie_entity.php");

    class CategorieManager extends Manager{
        public function __construct() {
            parent::__construct();
        }

        public function ajouterCategories(Categorie $cat) {
			$strNom = $cat->getCategorienom();
            // $strNom = $_POST["categorie_nom"]??"";
			
			$intSousCat= 1;
		
    		$strRqAjoutCat = "INSERT INTO categorie (categorie_nom, categorie_sous_categorie_id)
                      VALUES ('".$strNom."', '".$intSousCat."')"; 


        	return $this->_db->exec($strRqAjoutCat);
            
		}

        public function affichCat() {
			$rq = "SELECT * FROM categorie";
			return $this->_db->query($rq)->fetchAll();
		}
    }
?>