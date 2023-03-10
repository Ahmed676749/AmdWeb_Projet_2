<?php
    class Photo_controller extends Base_controller{


        /**
		* Page ajouter une photo
		*/
        public function ajouterPhoto() {
            require("models/photo_manager.php");
            require_once("entities/photo_entity.php");

            

            $arrPhotos = $_FILES["photo_nom"]??array();
            if(count($_POST) > 0) {
                $strFileName 	= $arrPhotos['tmp_name'];
                $objDate 		= new DateTime();
                $arrImage 		= explode(".", $arrPhotos['name']);
                $strNewName 	= $objDate->format('YmdHis').".".$arrImage[count($arrImage)-1]; // Nom de l'image => A renommer par sécurité
                $strFileDest 	= $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/AmdWeb_projet_2/assets/images/img_first_page/'.$strNewName;
    
                if (move_uploaded_file($strFileName, $strFileDest)){
                    $objManager = new PhotoManager;
                    $objPhoto = new Photo;

                    $tab = [
                        "photo_nom" => $strNewName,
                        "photo_utilisateurid" => $_SESSION['user']['utilisateur_id']
                    ];
                    $objPhoto->hydrate($tab);
                    
                    $objManager->ajouterPhotos($objPhoto);
                    $this->_arrData['arrPhotos'] = $objPhoto;
                }
            }
			$this->_arrData['strTitle']	= "page photo";
			$this->_arrData['strPage']	= "ajouterPhoto";
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
                var_dump($objPhoto);

                echo "<pre>";
                print_r($objPhoto); 

                echo "<pre>";
                print_r($arrDetPhoto); 
                var_dump($arrDetPhoto);
				$arrPhotoAffichage[] = $objPhoto;
		}

			$this->_arrData['arrPhotoAffichage'] = $arrPhotoAffichage;
			$this->_arrData['strTitle']	= "page photo";
			$this->_arrData['strPage']	= "photo";
			$this->display("photos");
    }
    }
?>