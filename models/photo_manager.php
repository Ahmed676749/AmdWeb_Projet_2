<?php
    require("models/connect.php");
    require("entities/photo_entity.php");

    class PhotoManager {
        public function __construct()
        {   
        }

        public function ajouterPhotos() {
            $rqAjouterPhoto = "INSERT INTO photo (photo_nom)
                            VALUES (".$strNewName.")";
            return $this->_db->exec($rqAjouterPhoto); 
        }
    }
?>