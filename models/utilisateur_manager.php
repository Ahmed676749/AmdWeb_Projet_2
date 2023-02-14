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
		* Méthode de récupération des utilisateurs
		* @return array Liste des utilisateurs
		*/
		public function afficherUtilisateur(){
			$strRqUsers = "SELECT utilisateur_type, 
									utilisateur_nom, 
									utilisateur_prenom, 
									utilisateur_adresse, 
									utilisateur_mail, 
									utilisateur_mdp 
									FROM utilisateur";

			var_dump($strRqUsers);
						
			return $this->_db->query($strRqUsers)->fetchAll();
		}

		/**
		* Méthode de création des utilisateurs
		*/
		public function creerUtilisateur($objUserToAdd){
			$strRqAdd 	= "INSERT INTO utilisateur 
								(utilisateur_nom, utilisateur_prenom, utilisateur_adresse, utilisateur_mail, utilisateur_mdp, utilisateur_type, utilisateur_date_creation)
							VALUES 
								(:nom, :prenom, :adresse, :mail, :mdp, :type, NOW())";
			$prep		= $this->_db->prepare($strRqAdd);

			$prep->bindValue(':nom', $objUserToAdd->getNom(), PDO::PARAM_STR);
			$prep->bindValue(':prenom', $objUserToAdd->getPrenom(), PDO::PARAM_STR);
			$prep->bindValue(':adresse', $objUserToAdd->getAdresse(), PDO::PARAM_STR);
			$prep->bindValue(':mail', $objUserToAdd->getMail(), PDO::PARAM_STR);
			$prep->bindValue(':mdp', $objUserToAdd->getMdp(), PDO::PARAM_STR);
			$prep->bindValue(':type', $objUserToAdd->getType(), PDO::PARAM_STR);

			// var_dump($objUserToAdd);
			return $prep->execute();
			//var_dump($prep);
			// return $this->_db->exec($strRqAdd);
		}

		/**
		* Méthode de vérification des utilisateurs
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

		
		
	}