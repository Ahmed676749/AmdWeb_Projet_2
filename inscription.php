<?php
  //include("connect.php");

  $strTitle = "AmdWeb offres d'emplois, inscription";
  $strPage = "inscription";

  include("header.php");

  
  // Récupération des informations du formulaire
  $strUserType  = $_POST['role']??'0';
  $strUtilisateur_nom  = $_POST['name']??'';
  // $strName      = $_POST['name']??'';
  $strFirstname = $_POST['firstname']??'';
  $strAddress   = $_POST['address']??'';
  $strMail      = $_POST['email']??'';
  $strPassword  = $_POST['password']??'';

  // var_dump($strName);
  
  // Inclure les fichiers des classes
  require("entities/utilisateur_entity.php"); 
  require("utilisateur_manager.php"); 
  
  $objUtilisateurManager 	= new UtilisateurManager(); // instancier la classe
  $arrUtilisateurs 		= $objUtilisateurManager->afficherUtilisateur(); // utiliser la classe
  
  
  // var_dump($strName);
  var_dump($_POST);
  // var_dump($arrUtilisateurs);
  
  $arrErrors 	= array(); // Initialisation du tableau des erreurs
	if (count($_POST) > 0){ // si formulaire envoyé
		// Tests erreurs
		if ($strUtilisateur_nom == ''){
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
      $objUtilisateurManager2 	= new UtilisateurManager(); // instancier la classe
      $arrCreerUtilisateur 		= $objUtilisateurManager2->creerUtilisateur(); // utiliser la classe
      
			//header("Location:index.php"); // Redirection page d'accueil
		}
	}

?>

      <main>
        <!--Section inscription-->
        <section>
          <div class="wrapper-subscribe">
            <h1 class="style-h">Inscrivez vous</h1>
            <p class="text-presentation">
              Afin de déposer une offre d'emploi ou de postuler, vous devez vous
              s'inscire.
              <br />
              Oui, l'inscription est obligatoire comme sur tous les sites.
            </p>
            <div class="form-box">
              <form name="formAdd" method="post" action="#" enctype="multipart/form-data">
                <div class="radio-btn">
                  <p>Vous êtes :</p>
                  <div class="wrap-radio">
                    <input type="radio" id="recruiter" name="role" value="recruteur" <?php if ($strUserType == "recruteur") {echo "checked";} ?> />
                    <label for="recruiter">Recruteur</label>
                  </div>
                  <div class="wrap-radio">
                    <input type="radio" id="candidate" name="role" value="candidat" <?php if ($strUserType == "candidat") {echo "checked";} ?> />
                    <label for="candidate">Candidat</label>
                  </div>
                </div>
                <div class="style">
                  <label for="name">Nom</label>
                  <input type="text" id="name" name="name" value="<?php echo $strUtilisateur_nom ?>" />
                </div>
                <div class="style">
                  <label for="firstName">Prénom</label>
                  <input type="text" id="firstName" name="firstname" value="<?php echo $strFirstname ?>" />
                </div>
                <div class="style">
                  <label for="address">Adresse</label>
                  <input type="text" id="address" name="address" value="<?php echo $strAddress ?>"/>
                </div>

                <div class="style">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" value="<?php echo $strMail ?>"/>
                </div>
                <div class="style">
                  <label for="password">Mot de passe</label>
                  <input type="password" id="password" name="password" value="<?php echo $strPassword ?>"/>
                </div>
                <button class="btn-subscribe style-button" type="submit">
                  S'incrire
                </button>
              </form>
            </div>
          </div>
        </section>
      </main>
      <?php include("footer.php") ?>
    