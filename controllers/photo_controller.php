<?php
    class Photo_controller extends Base_controller{

        public function ajouterPhoto() {
            require("models/photo_manager.php");
            require("entities/photo_entity.php");

            

            $arrPhotos = $_FILES["image"]??array();

            $strFileName 	= $arrPhotos['tmp_name'];
			$objDate 		= new DateTime();
			$arrImage 		= explode(".", $arrPhotos['name']);
			$strNewName 	= $objDate->format('YmdHis').".".$arrImage[count($arrImage)-1]; // Nom de l'image => A renommer par sécurité
			$strFileDest 	= $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/amdweb_projet_2/assets/images/'.$strNewName;

            if(count($_POST) > 0) {
                $objManager = new PhotoManager;
                $objManager->ajouterPhotos();

                $objPhoto = new Photo;
                $objPhoto->hydrate($_POST);

            }

            $this->_arrData['photo'] = $objPhoto;
			$this->_arrData['strTitle']	= "page photo";
			$this->_arrData['strPage']	= "galerie";
			$this->display("galerie");
        }
    }
?>