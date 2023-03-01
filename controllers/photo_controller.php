<?php
    class Photo_controller extends Base_controller{


        /**
		* Page ajouter une photo
		*/
        public function ajouterPhoto() {
            require("models/photo_manager.php");
            require_once("entities/photo_entity.php");

            //   var_dump($_SESSION);
var_dump("moi");
            $arrPhotos = $_FILES["photo_nom"]??array();
            // var_dump($_FILES);
            if(count($_FILES) > 0) {
                var_dump("dans if");
            //   var_dump($_POST);
                $strFileName 	= $arrPhotos['tmp_name'];
                $objDate 		= new DateTime();
                $arrImage 		= explode(".", $arrPhotos['name']);
                $strNewName 	= $objDate->format('YmdHis').".".$arrImage[count($arrImage)-1]; // Nom de l'image => A renommer par sécurité
                $strFileDest 	= $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/amdweb/assets/images/img_first_page/'.$strNewName;
    
                

                if (move_uploaded_file($strFileName, $strFileDest)){
                    $objManager = new PhotoManager;
                    $objPhoto = new Photo;

                    $tab = [
                        "photo_nom" => $strNewName,
                        "photo_utilisateurid" => $_SESSION['user']['utilisateur_id']
                    ];
                  
                    $objPhoto->hydrate($tab);
                    // $objPhoto->setUtilisateurid($_SESSION['user']['utilisateur_id']);

                    echo "<pre>";
                    print_r($objPhoto);
                    
                      $objManager->ajouterPhotos($objPhoto);
                    


                    
                    $this->_arrData['objPhoto'] = $objPhoto;
                }
            }
            
			$this->_arrData['strTitle']	= "page photo";
			$this->_arrData['strPage']	= "galerie";
			$this->display("galerie");
        }

        /**
		* Fonctionnalité supprimer une photo
		*/
        public function supprimerPhoto() {
			require("entities/photo_entity.php"); 
			require("models/photo_manager.php");

			$photoSupprim = $_GET["idSupPhoto"];
			$managerSupPhoto = new PhotoManager;

			if(isset($_GET) && isset($_GET["delete"]) && isset($_GET["delete"]) == "1") {
                
                
				$managerSupPhoto->supprimerPhotos($photoSupprim);
                header("Location: index.php?ctrl=photo&action=afficherPhotos"); 
			}
		}

        
        public function afficherPhotos() {
			require("entities/photo_entity.php"); 
			require("models/photo_manager.php"); 
			$objManager = new PhotoManager(); 
			$arrPhotos = $objManager->trouverPhoto();

			$arrPhotoAffichage = array();
			foreach($arrPhotos as $arrDetPhoto){
				// Création de l'objet 
				$objPhoto= new Photo;
				$objPhoto->hydrate($arrDetPhoto); // On hydrate l'objet
                // var_dump($objPhoto);

                // echo "<pre>";
                // print_r($objPhoto); 

                // echo "<pre>";
                // print_r($arrDetPhoto); 
                // var_dump($arrDetPhoto);
				$arrPhotoAffichage[] = $objPhoto;
                
		}

			$this->_arrData['arrPhotoAffichage'] = $arrPhotoAffichage;
			$this->_arrData['strTitle']	= "page photo";
			$this->_arrData['strPage']	= "photo";
			$this->display("photos");
    }
    }
?>