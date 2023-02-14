<?php
	require_once("connect.php");	//Classe mère des managers
	/**
	* Class manager des utilisateurs
	* @creator Jonathan Legrand
	*/
	class UtilisateurManager extends Manager{
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			parent::__construct();
		}
		
		/**
		* Méthode de récupération de l'utilisateur
		* @return array utilisateur
		*/
		public function getUtilisateur(){
			$intId 		= $_GET['id']??$_SESSION['user']['utilisateur_id'];

			$strRqUsers = "SELECT utilisateur.utilisateur_type, 
								utilisateur.utilisateur_nom, 
								utilisateur.utilisateur_prenom, 
								utilisateur.utilisateur_adresse, 
								utilisateur.utilisateur_ville_id,
								utilisateur.utilisateur_mail, 
								utilisateur.utilisateur_mdp
									FROM utilisateur
									-- INNER JOIN ville ON utilisateur.utilisateur_ville_id = ville.ville_id
									-- INNER JOIN photo ON photo.photo_utilisateur_id = utilisateur.utilisateur_id
									WHERE utilisateur_id = '".$intId."'";

			var_dump($strRqUsers);
						
			return $this->_db->query($strRqUsers)->fetch();
		}

		/**
		* Méthode de création des utilisateurs
		*/
		public function creerUtilisateur($objUserToAdd){
			$strRqAdd 	= "INSERT INTO utilisateur 
								(utilisateur.utilisateur_type, 
									utilisateur.utilisateur_nom, 
									utilisateur.utilisateur_prenom, 
									utilisateur.utilisateur_adresse, 
									utilisateur.utilisateur_ville_id,
									utilisateur.utilisateur_mail, 
									utilisateur.utilisateur_mdp,
									utilisateur.utilisateur_date_creation)
							VALUES 
								(:type, :nom, :prenom, :adresse, :ville, :mail, :mdp, NOW())";
			$prep		= $this->_db->prepare($strRqAdd);

			$prep->bindValue(':type', $objUserToAdd->getType(), PDO::PARAM_STR);
			$prep->bindValue(':nom', $objUserToAdd->getNom(), PDO::PARAM_STR);
			$prep->bindValue(':prenom', $objUserToAdd->getPrenom(), PDO::PARAM_STR);
			$prep->bindValue(':adresse', $objUserToAdd->getAdresse(), PDO::PARAM_STR);
			$prep->bindValue(':ville', $objUserToAdd->getVilleId(), PDO::PARAM_INT);
			$prep->bindValue(':mail', $objUserToAdd->getMail(), PDO::PARAM_STR);
			$prep->bindValue(':mdp', $objUserToAdd->getMdp(), PDO::PARAM_STR);

			// var_dump($objUserToAdd);
			return $prep->execute();
		}

		/**
		* Méthode de vérification des utilisateurs
		* @return boolean
		*/
		public function verifierUtilisateur($strMail, $strPwd){
			$strRqUser = "SELECT utilisateur_id,
								utilisateur_prenom, 
								utilisateur_mdp
							FROM utilisateur
							WHERE utilisateur_mail = '".$strMail."'";
			$arrUser 	= $this->_db->query($strRqUser)->fetch();

			if ($arrUser !== false){
				if(password_verify($strPwd, $arrUser['utilisateur_mdp'])) {
					unset($arrUser['utilisateur_mdp']);
					return $arrUser;
				}
			}
			return false;
		}

		/**
		* Méthode de modification des utilisateurs
		*/
		public function updateUtilisateur($objUser){
			$strRqUpdate	= "UPDATE utilisateur 
								SET utilisateur_nom = :nom, 
									utilisateur_prenom = :prenom, 
									utilisateur_adresse = :adresse, 
									utilisateur_mail = :mail, 
									utilisateur_mdp = :mdp" ;
			// var_dump($objUser);

			if ($objUser->getMdp() != ''){
				$strRqUpdate	.=	", utilisateur_mdp = :mdp";
			}
			$strRqUpdate	.= " WHERE utilisateur_id = ".$objUser->getUtilisateurId();//$_SESSION['user']['id'];
			$prep			= $this->_db->prepare($strRqUpdate);
			
			$prep->bindValue(':nom', $objUser->getNom(), PDO::PARAM_STR);
			$prep->bindValue(':prenom', $objUser->getPrenom(), PDO::PARAM_STR);
			$prep->bindValue(':adresse', $objUser->getAdresse(), PDO::PARAM_STR);
			$prep->bindValue(':mail', $objUser->getMail(), PDO::PARAM_STR);
			$prep->bindValue(':mdp', $objUser->getMdp(), PDO::PARAM_STR);

			/* if ($objUser->getMdp() != ''){
				$prep->bindValue(':mdp', $objUser->getMdp(), PDO::PARAM_STR);
			} */
			var_dump($objUser);
			var_dump($prep);
			
			return $prep->execute();
		}
		
	}