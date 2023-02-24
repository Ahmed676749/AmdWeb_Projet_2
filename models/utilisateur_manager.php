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

			$strRqUsers = "SELECT utilisateur.utilisateur_id,
								utilisateur.utilisateur_type, 
								utilisateur.utilisateur_nom, 
								utilisateur.utilisateur_prenom, 
								utilisateur.utilisateur_adresse, 
								utilisateur.utilisateur_ville_id,
								ville.ville_nom,
								utilisateur.utilisateur_mail, 
								utilisateur.utilisateur_mdp
									FROM utilisateur
									LEFT OUTER JOIN ville ON utilisateur.utilisateur_ville_id = ville.ville_id
									LEFT OUTER  JOIN photo ON photo.photo_utilisateur_id = utilisateur.utilisateur_id
									WHERE utilisateur_id = ".$intId;

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
			$prep->bindValue(':ville', $objUserToAdd->getVille_id(), PDO::PARAM_INT);
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
								utilisateur_nom,
								utilisateur_prenom, 
								utilisateur_mdp,
								utilisateur_droit_id
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
									/* ville_nom = :ville, */ 
									utilisateur_mail = :mail,
									utilisateur_date_modification = NOW()";
								
			var_dump($objUser);

			if ($objUser->getMdp() != ''){
				$strRqUpdate	.=	", utilisateur_mdp = :mdp";	
			}
			
			$strRqUpdate	.= " WHERE utilisateur_id = ".$objUser->getId();		//$_SESSION['user']['id'];
			$prep			= $this->_db->prepare($strRqUpdate);
			$prep->bindValue(':nom', $objUser->getNom(), PDO::PARAM_STR);
			$prep->bindValue(':prenom', $objUser->getPrenom(), PDO::PARAM_STR);
			$prep->bindValue(':adresse', $objUser->getAdresse(), PDO::PARAM_STR);
			// $prep->bindValue(':ville', $objUser->getVille_nom(), PDO::PARAM_STR);
			$prep->bindValue(':mail', $objUser->getMail(), PDO::PARAM_STR);

			if ($objUser->getMdp() != ''){
				$prep->bindValue(':mdp', $objUser->getMdp(), PDO::PARAM_STR);
			}
			
			// var_dump($objUser->getNom());
			// var_dump($prep);
			
			return $prep->execute();
		}

		/**
		* Méthode permettant de vérifier que le mail n'existe pas déjà en bdd
		* @param object $objUser Objet de l'utilisateur
		* @return bool le mail existe ou non
		*/
		public function mail_exist(object $objUser):bool{
			$strRqUsers = "SELECT *
							FROM utilisateur
							WHERE utilisateur_mail = :mail";
			if ($objUser->getId() != ''){
				$strRqUsers	.=	" AND utilisateur_id <> :id";
			}							
			$prep	= $this->_db->prepare($strRqUsers);
			
			$prep->bindValue(':mail', $objUser->getMail(), PDO::PARAM_STR);	
			if ($objUser->getId() != ''){
				$prep->bindValue(':id', $objUser->getId(), PDO::PARAM_INT);	
			}

			$prep->execute();
			$arrUser = $prep->fetch();
			
			return ($arrUser !== false);
		}
		
		/**
		* Méthode de récupération des utilisateurs
		* @return array Liste des utilisateurs
		*/
		public function findUtilisateurs():array{
			$strRqUsers = "SELECT utilisateur_id, utilisateur_nom, utilisateur_prenom, utilisateur_adresse, utilisateur_mail FROM utilisateur;";
							
			return $this->_db->query($strRqUsers)->fetchAll();
		}

		/**
		* Méthode de suppression d'un utilisateur
		* @param int $intId Identifiant de l'utilisateur à supprimer
		* @return bool La suppression s'est bien passée ou pas
		*/
		public function delUtilisateur(int $intId):bool{
			
			$strRq	= "DELETE FROM utilisateur 
						WHERE utilisateur_id = ".$intId;
			return $this->_db->exec($strRq);
		}


	}