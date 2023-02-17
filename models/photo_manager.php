<?php
    require_once("models/connect.php");
    require_once("entities/photo_entity.php");

    class PhotoManager extends Manager {
        public function __construct(){
            parent::__construct();
        }

        public function ajouterPhotos(Photo $unePhoto) {
            $strNomPhoto = $unePhoto->getNom();
            $intUt = $unePhoto->getUtilisateurid();

            $rqAjouterPhoto = "INSERT INTO photo (photo_nom, photo_utilisateur_id)
                            VALUES ('".$strNomPhoto."', '".$intUt."')";
                            var_dump($rqAjouterPhoto);
            return $this->_db->exec($rqAjouterPhoto); 
        }

        public function supprimerPhotos($photoSup){
			$rqSuppPhoto = "DELETE FROM photo WHERE photo_id = $photoSup";
			$this->_db->exec($rqSuppPhoto);

		}


    }
?>