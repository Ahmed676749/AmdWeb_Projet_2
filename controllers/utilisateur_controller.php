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
            $objUserToAdd = new Utilisateur;

            // var_dump($_POST);
            
            $arrError = array();            // Tableau des erreurs initialisé
            if (count($_POST) > 0) {        // Si le formulaire est envoyé
                // On hydrate l'objet
                $objUserToAdd->hydrate($_POST);
                // var_dump($_POST['nom']);
                var_dump($objUserToAdd);
                
                // On teste les informations
                if ($objUserToAdd->getNom() == ''){              // Tests sur le nom
                    $arrError[]	= "Merci de renseigner un nom";
                }
                if ($objUserToAdd->getPrenom() == ''){           // Tests sur le prénom
                    $arrError[]	= "Merci de renseigner un prénom";
                }
                if ($objUserToAdd->getMail() == ''){             // Tests sur le mail
                    $arrError[]	= "Merci de renseigner une adresse mail";
                }
                if ($objUserToAdd->getMdp() == ''){              // Tests sur le mot de passe
                    $arrError[]	= "Merci de renseigner un mot de passe";
                }

                $smarty = new Smarty;
                $smarty->assign('arrErrors', $arrError);
                // var_dump($arrError);
                /* foreach ($arrError as $Error) {
                    echo '<div class="alert alert-warning">
                    Attention : '.$Error.'
                    </div>';
                } */

                // Si aucune erreur, on créer l'objet User et on l'insert en BDD
                if (count($arrError) == 0){ 
                    $objManager = new UtilisateurManager();           // instancier la classe
                    var_dump($objManager);

                    if($objManager->creerUtilisateur($objUserToAdd)){    // Envoyer les informations à la BDD
                        header("Location:index.php");               // Puis redirection vers la page d'accueil
                    }else{
                        $arrError[]	= "Erreur lors de l'ajout";
                    }
                }
            }
            
            //Affichage
            $this->_arrData['objUserToAdd']		= $objUserToAdd;
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
        }

}