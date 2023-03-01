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
            require("entities/ville_entity.php"); 
        }

        /**
        * Page inscription
        */
        public function inscription() {

            // Création de l'objet Utilisateur
            $objUser = new Utilisateur;
            $objUserManager = new UtilisateurManager;


            // var_dump($_POST);
            
            $arrError = array();            // Tableau des erreurs initialisé
            if (count($_POST) > 0) {        // Si le formulaire est envoyé
                // On force l'id en int pour le typage des données
				$_POST['id'] = intval($_POST['id']);
                // On hydrate l'objet
                $objUser->hydrate($_POST);
                // var_dump($_POST['nom']);
                // var_dump($objUser);
                
                // On teste les informations
                if ($objUser->getNom() == ''){              // Tests sur le nom
                    $arrError[]	= "Merci de renseigner un nom";
                }
                if ($objUser->getPrenom() == ''){           // Tests sur le prénom
                    $arrError[]	= "Merci de renseigner un prénom";
                }
                if ($objUser->getMail() == ''){             // Tests sur le mail
                    $arrError[]	= "Merci de renseigner une adresse mail";
                }else if($objUserManager->mail_exist($objUser)){ // test si déjà existant
					$arrError[]	= "Mail déjà utilisé, merci d'en renseigner une
                    autre ou de vous connecter";
				}
                if ($objUser->getMdp() == ''){              // Tests sur le mot de passe
                    $arrError[]	= "Merci de renseigner un mot de passe";
                }

                $smarty = new Smarty;
                $smarty->assign('arrErrors', $arrError);
                
                // Si aucune erreur, on créer l'objet User et on l'insert en BDD
                if (count($arrError) == 0){ 
                    $objManager = new UtilisateurManager();           // instancier la classe
                    var_dump($objManager);

                    if($objManager->creerUtilisateur($objUser)){    // Envoyer les informations à la BDD
                        header("Location:index.php");               // Puis redirection vers la page d'accueil
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
        * Page connexion
        */
        public function connexion() {
            $arrErrorCo = array();            // Tableau des erreurs initialisé
            if (count($_POST) > 0){
            $strMail 	= $_POST['mail']??'';
            $strPwd 	= $_POST['mdp']??'';
            
            $objUserManager = new UtilisateurManager;
            // Vérifier l'utilisateur / mdp en base de données
            $arrUser = $objUserManager->verifierUtilisateur($strMail, $strPwd);


            if ($arrUser === false){
                $arrErrorCo['erreur'] = "Erreur de connexion";
            }else{
                // Stocker les informations utiles de l'utilisateur en session
                $_SESSION['user']	= $arrUser;
                $objUserManager = new UtilisateurManager;
                $objUserManager->dateCoUtilisateur();
            }
        }

        // Affichage de la page Connexion
        $this->_arrData['arrErrorCo']	= $arrErrorCo;

        $this->_arrData['strTitle'] = "AmdWeb, offres d'emplois spécialisé web";
        $this->_arrData['strPage']	= "connexion";

        $this->display("connexion");
        }

        /**
        * Page Se déconnecter
        */
        public function deconnection(){
            session_destroy();
            header("Location:index.php");
        }

        /**
		* Page Modifier le compte
		*/
		public function modifier_compte(){
			if (
					// utilisateur non connecté
                    (!isset($_SESSION['user']))
                ||
                    // utilisateur non admin qui veut changer un autre compte
					(isset($_GET['id']) && $_SESSION['user']['utilisateur_droit_id'] != 3) 
                    
                ){
                    header("Location:index.php?ctrl=error&action=error_403");
                }
                // var_dump($_SESSION['user']);

			// Création de l'objet Utilisateur
			$objUser = new Utilisateur;
            $objUserManager = new UtilisateurManager;
					
			$arrError = array(); // Tableau des erreurs initialisé
			if (count($_POST) > 0) { // Si le formulaire est envoyé
				// On hydrate l'objet
				$objUser->hydrate($_POST);
				// On teste les informations
				if ($objUser->getNom() == ''){ // Tests sur le nom
					$arrError[]	= "Merci de renseigner un nom";
				}
				if ($objUser->getPrenom() == ''){ // Tests sur le prénom
					$arrError[]	= "Merci de renseigner un prénom";
				}
				if ($objUser->getMail() == ''){ // Tests sur le mail
					$arrError[]	= "Merci de renseigner une adresse mail";
				}else if($objUserManager->mail_exist($objUser)){ // test si déjà existant
					$arrError[]	= "Mail déjà utilisé, merci d'en renseigner une
                    autre ou de vous connecter";
                }
				/* if ($objUser->getMdp() == ''){ // Tests sur le mot de passe
					$arrError[]	= "Merci de renseigner un mot de passe";
				} */
				
				// Si aucune erreur on l'insert en BDD
				if (count($arrError) == 0){ 
					if($objUserManager->updateUtilisateur($objUser)){
						// Mettre à jour la session, si compte de l'utilisateur connecté
						if($_SESSION['user']['utilisateur_id'] == $objUser->getId()){
							$_SESSION['user']['utilisateur_prenom'] == $objUser->getPrenom();
						}
                        header("Location:".$_SERVER['HTTP_REFERER']);
                        // header("Location:index.php");
					}else{
						$arrError[]	= "Erreur lors de l'ajout";
					}
				}
            }else{
                // Récupérer les informations de l'utilisateur qui est en session, dans la BDD 
                // $objUserManager = new UtilisateurManager;
                $arrUser 		= $objUserManager->getUtilisateur();
                // tests sur utilisateur trouvé
                if ($arrUser === false){
                    header("Location:index.php?ctrl=error&action=error_403");
                }else{
                    // Hydrater l'objet avec la méthode de l'entité
                    $objUser->hydrate($arrUser);
                    // var_dump($objUser);

                }
                
            }
        

            // Si le formulaire est envoyé, traiter celui-ci pour pour modification en BDD
            $this->_arrData['objUser']		= $objUser;
            $this->_arrData['arrError']		= $arrError;
            // $this->_arrData['arrUser']		= $arrUser;

            $this->_arrData['strTitle']		= "Modifier un compte";
            $this->_arrData['strPage']		= "modifier_compte";
            $this->display("inscription");
            
        } 

        /**
		* Page qui affiche la liste des utilisateurs
		*/
		public function list_user(){
			if ( !isset($_SESSION['user']) // utilisateur non connecté
				||  
				($_SESSION['user']['utilisateur_droit_id'] != 3) ) // utilisateur non admin
			{
				header("Location:index.php?ctrl=error&action=error_403");
			}
			
			// Récupération des utilisateurs
			$objUserManager = new UtilisateurManager;
			$arrUsers = $objUserManager->findUtilisateurs();
			
			// Liste des utilisateurs en mode objet
			$arrUsersToDisplay = array();
			foreach($arrUsers as $arrDetUser){
				$objUser = new Utilisateur;
				$objUser->hydrate($arrDetUser);
				$arrUsersToDisplay[] = $objUser;
			}
			
			// Affichage
			$this->_arrData['strTitle']		= "Liste des utilisateurs";
			$this->_arrData['strPage']		= "list_user";
			$this->_arrData['arrUsersToDisplay']		= $arrUsersToDisplay;
			$this->display("list_user");
		}

        /**
		* Fonction pour supprimer un compte
		*/
		public function supprimer_compte(){
			if ( !isset($_SESSION['user']) // utilisateur non connecté
				||  
				($_SESSION['user']['utilisateur_droit_id'] != 3) ) // utilisateur non admin
			{
				header("Location:index.php?ctrl=error&action=error_403");
			}

            $intId 		= $_GET['id'];
			$objManager = new UtilisateurManager();
			$objManager->delUtilisateur($intId);

            header("Location:".$_SERVER['HTTP_REFERER']);
        }
    }