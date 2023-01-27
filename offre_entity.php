<?php

/**
 * Class d'une entité d'une offre
 * @creator Lucien bruzzese
 * 
 */

 class Offre {

  /* Attributs */
  private $_id;
  private $_description;
  private $_titre;
  private $_adresse;
  private $_siret;
  private $_date_creation;
  private $_date_modification;
  private $_utilisateur_id;
  private $_ville_id;

  /**
   * constructeur de la classe
   */

  public function __construct(){
  }

 

		/**
		* Remplissage de l'objet avec les données du tableau
		*/
		public function hydrate($arrData){
			foreach($arrData as $key=>$value){
				$strMethod = "set".ucfirst(str_replace("offre_", "", $key));
				if (method_exists($this, $strMethod)){
					$this->$strMethod($value);
				}
			}
			
		}


/* Getters et setters */


/**
		* Getter de l'id
		* @return int Identifiant
*/

 public function getId():int{
  return $this->_id;
 }

/**
		* Setter de l'id
		* @param $intId Identifiant
*/

 public function setId(int $intId){
  $this->_id = $intId;
}


public function getSalaire():int{
	return $this->_id;
   }
  
  /**
		  * Setter de l'id
		  * @param $intId Identifiant
  */
  
   public function setSalaire(int $intId){
	$this->_id = $intId;
  }



/**
		* Getter de la description
		* @return $string Description
*/

public function getDescription():string{
  return $this->_description;
 }

/**
		* Setter de l'id
		* @param $strDescription Description
*/

 public function setDescription(string $strDescription){
  $this->_description = $strDescription;
}




/**
		* Getter du titre
		* @return $string Titre
*/

public function getTitre():string{
  return $this->_titre;
 }

/**
		* Setter du titre
		* @param $strTitre Titre
*/

 public function setTitre(string $strTitre){
  $this->_titre = $strTitre;
}




/**
		* Getter de l'adresse
		* @return string Adresse
*/


public function getAdresse():string{
  return $this->_adresse;
 }

 /**
		* Setter de l'adresse
		* @param $strAdresse Adresse
*/

 public function setAdresse(string $strAdresse){
  $this->_adresse = $strAdresse;
}




/**
		* Getter de siret
		* @return int Siret
*/

public function getSiret():int{
  return $this->_siret;
 }

 /**
		* Setter de siret
		* @param $int Siret
*/

 public function setSiret(int $intSiret){
  $this->_siret = $intSiret;
}




/**
		* Getter de date_creation
		* @return string Date_creation
*/

public function getDate_creation():string{
  return $this->_date_creation;
 }

 /**
		* Setter de date_creation
		* @param $string Date_creation
*/

 public function setDate_creation(string $strDate_creation){
  $this->_date_creation = $strDate_creation;
}




/**
		* Getter de date_modification
		* @return string Date_modification
*/

public function getDate_modification():string{
  return $this->_date_creation;
 }

 /**
		* Setter de date_modification
		* @param $string Date_modification
*/

 public function setDate_modification(string $strDate_modification){
  $this->_date_modification = $strDate_modification;
}




/**
		* Getter de utilisateur_id
		* @return string Utilisateur_id
*/

public function getUtilisateur_id():int{
  return $this->_utilisateur_id;
 }

 /**
		* Setter de utilisateur_id
		* @param $string Utilisateur_id
*/

 public function setUtilisateur(int $intUtilisateur){
  $this->_utilisateur_id = $intUtilisateur;
}




/**
		* Getter de ville_id
		* @return int Ville_id
*/

public function getVille_id():int{
  return $this->_utilisateur_id;
 }

 /**
		* Setter de ville_id
		* @param $int Ville_id
*/

 public function setVille_id(int $intVille_id){
  $this->_ville_id = $intVille_id;
}
 }



