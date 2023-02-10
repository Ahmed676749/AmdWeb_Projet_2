<?php
    /**
	* Controller des utilisateurs
	* @autor Jonathan Legrand
	*/
	class Utilisateur_controller extends Base_controller {

        /**
        * Constructeur de la classe
        */ 
        public function __construct(){
            require("models/utilisateur_manager.php"); 
            require("entities/utilisateur_entity.php"); 
        }

        /**
        * Page inscription
        */
        public function inscription() {

            // Création de l'objet Utilisateur
            $objUser = new Utilisateur;

            var_dump($_POST);
            
            $arrError = array(); // Tableau des erreurs initialisé
            if (count($_POST) > 0) { // Si le formulaire est envoyé
                // On hydrate l'objet
                $objUser->hydrate($_POST);
                var_dump($_POST['nom']);
                var_dump($objUser);
                
                // On teste les informations
                if ($objUser->getNom() == ''){ // Tests sur le nom
                    $arrError[]	= "Merci de renseigner un nom";
                }
                if ($objUser->getPrenom() == ''){ // Tests sur le prénom
                    var_dump($objUser->getPrenom());
                    $arrError[]	= "Merci de renseigner un prénom";
                    echo "Merci de renseigner un prénom";
                }
                if ($objUser->getMail() == ''){ // Tests sur le mail
                    $arrError[]	= "Merci de renseigner une adresse mail";
                }
                if ($objUser->getMdp() == ''){ // Tests sur le mot de passe
                    $arrError[]	= "Merci de renseigner un mot de passe";
                }
                var_dump($arrError);
                /* if (!password_verify($_POST['confirmPwd'], $objUser->getPwd())){ // Tests sur la confirmation du mot de passe
                    $arrError[]	= "Le mot de passe et sa confirmation ne sont pas identiques";
                } */
                // Si aucune erreur, on créer l'objet User et on l'insert en BDD
                if (count($arrError) == 0){ 
                    $objManager = new UtilisateurManager(); // instancier la classe
                    if($objManager->creerUtilisateur($objUser)){ // Envoyer les informations à la BDD
                        //header("Location:index.php");   // Redirection vers la page d'accueil
                    }else{
                        $arrError[]	= "Erreur lors de l'ajout";
                    }
                }
            }
            
            //Affichage
            $this->_arrData['objUser']		= $objUser;
            $this->_arrData['arrError']		= $arrError;

            $this->_arrData['strTitle']		= "AmdWeb, offres d'emplois spécialisé web";
            $this->_arrData['strPage']		= "inscription";

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