<?php
    require_once("models/connect.php");
    require_once("entities/photo_entity.php");

    class PhotoManager extends Manager {
        public function __construct(){
            parent::__construct();
        }

        /**
		* Méthode qui ajoute une photo
		* @ param objet photo
		*/
        public function ajouterPhotos(Photo $unePhoto) {
            $strNomPhoto = $unePhoto->getNom();
            $intUt = $unePhoto->getUtilisateurid();

            $rqAjouterPhoto = "INSERT INTO photo (photo_nom, photo_utilisateur_id)
                            VALUES ('".$strNomPhoto."', '".$intUt."')";
                            var_dump($rqAjouterPhoto);
            return $this->_db->exec($rqAjouterPhoto); 
        }

        /**
		* Méthode qui supprime une photo
		* @ param identifiant de l'objet photo
		*/
        public function supprimerPhotos($idPhotoSup){
			$rqSuppPhoto = "DELETE FROM photo WHERE photo_id = $idPhotoSup";
			$this->_db->exec($rqSuppPhoto);

		}

        public function trouverPhoto() {
			$strRqAfficher = "SELECT *
							  FROM photo";

			return $this->_db->query($strRqAfficher)->fetchAll();

		}

    }
?>