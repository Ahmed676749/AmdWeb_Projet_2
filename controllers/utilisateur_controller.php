<?php
    /**
	* Controller des utilisateurs
	* @autor Jonathan Legrand
	*/
	class Utilisateur_controller {

        /* public function accueil() {
			$strTitle 	= "AmdWeb, offres d'emplois spécialisé web";
			$strPage	= "index";
			include("views/header.php");
			
			// inclure les fichiers des classes
			require("entities/utilisateur_entity.php"); 
			require("models/utilisateur_manager.php"); 

			require('views/index.php');
			include("views/footer.php");
			
		} */

        public function inscription() {
			$strTitle 	= "AmdWeb, offres d'emplois spécialisé web";
			$strPage	= "inscription";
			include("views/header.php");
			
			// inclure les fichiers des classes
			require("entities/utilisateur_entity.php"); 
			require("models/utilisateur_manager.php"); 
			$objManager 	= new UtilisateurManager(); // instancier la classe

             // Récupération des informations du formulaire
            $strUserType  = $_POST['type']??'candidat';
            $strName      = $_POST['nom']??'';
            $strFirstname = $_POST['prenom']??'';
            $strAddress   = $_POST['adresse']??'';
            $strMail      = $_POST['mail']??'';
            $strPassword  = $_POST['mdp']??'';

            var_dump($_POST);

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
                
                if (count($arrErrors)>0){ // Affichage des erreurs, s'il y en a
                    echo "<div class='error'>";
                    foreach($arrErrors as $strError){
                echo "<p>".$strError."</p>";
                    }
                    echo "</div>";
                }else{	// Insertion en BDD, si pas d'erreurs
                    // Créer l'objet user
                    $objUser = new Utilisateur;
                    $objUser->hydrate($_POST);
                    
                    //$objUtilisateurManager2 	= new UtilisateurManager(); // instancier la classe
                    $arrCreerUtilisateur 		= $objManager->creerUtilisateur($objUser); // utiliser la classe
                    
                    //header("Location:index.php"); // Redirection page d'accueil
                }
            var_dump($arrErrors);
            }
        

            $objUser = new Utilisateur;
			$objUser->hydrate($_POST);
            
			$arrCreerUtilisateur = $objManager->creerUtilisateur($objUser); // utiliser la classe
			
			require('views/inscription.php');   
			include("views/footer.php");
			
		}

}