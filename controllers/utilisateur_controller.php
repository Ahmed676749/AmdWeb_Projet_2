<?php
    /**
	* Controller des utilisateurs
	* @autor Jonathan Legrand
	*/
	class Utilisateur_controller extends Base_controller {

        public function inscription() {
            /**
             * Traitement du formulaire d'inscription
             */

            // Récupération des informations du formulaire
            $strUserType  = $_POST['type']??'candidat';
            $strName      = $_POST['nom']??'';
            $strFirstname = $_POST['prenom']??'';
            $strAddress   = $_POST['adresse']??'';
            $strMail      = $_POST['mail']??'';
            $strPassword  = $_POST['mdp']??'';
            
            
             $arrErrors 	= array(); // Initialisation du tableau des erreurs
             if (count($_POST) > 0){ // si formulaire envoyé
                // Tests erreurs
                if ($strName == ''){
                $arrErrors['name'] = "Merci de renseigner un nom";
                }
                if ($strFirstname == ''){
                $arrErrors['firstname'] = "Merci de renseigner un prénom";
                }
                if ($strAddress == ''){
                $arrErrors['address'] = "Merci de renseigner une adresse";
                }
                if ($strMail == ''){
                $arrErrors['email'] = "Merci de renseigner une adresse mail";
                }
                if ($strPassword == ''){
                    $arrErrors['password'] = "Merci de renseigner un mot de passe";
                }
                // Affichage des erreurs, s'il y en a
                if (count($arrErrors) > 0) { 
                    echo "<div class='error'>";
                    foreach($arrErrors as $strError){
                        echo "<p>".$strError."</p>";
                    }
                    echo "</div>";
                } else {	
                    // Si pas d'erreur :
                    require("entities/utilisateur_entity.php"); // inclure les fichiers des classes
                    $objUser = new Utilisateur; // Créer l'objet user
                    $objUser->hydrate($_POST); // Le remplir avec les données du formulaire

                    require("models/utilisateur_manager.php"); // inclure les fichiers des classes
                    $objManager = new UtilisateurManager(); // instancier la classe
                    $objManager->creerUtilisateur($objUser); // Envoyer les informations à la BDD

                    header("Location:index.php"); // Redirection page d'accueil
                }
                // var_dump($arrErrors);
            }
			
            // Affichage de la page Inscription
            $this->_arrData['strUserType']  = $strUserType;
            $this->_arrData['strName']      = $strName;
            $this->_arrData['strFirstname'] = $strFirstname;
            $this->_arrData['strAddress']   = $strAddress;
            $this->_arrData['strMail']      = $strMail;
            $this->_arrData['strPassword']  = $strPassword;

            $this->_arrData['strTitle'] = "AmdWeb, offres d'emplois spécialisé web";
            $this->_arrData['strPage']	= "inscription";

            $this->display("inscription");
		}

        /**
         * Traitement du formulaire de connexion
         */
        public function connexion() {

            // Affichage de la page Connexion
            $this->_arrData['strTitle'] = "AmdWeb, offres d'emplois spécialisé web";
            $this->_arrData['strPage']	= "connexion";

            $this->display("connexion");
			
			// inclure les fichiers des classes
			// require("entities/utilisateur_entity.php"); 
			// require("models/utilisateur_manager.php"); 

        }

}