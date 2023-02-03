<?php
  // $strTitle = "AmdWeb, offres d'emplois spécialisé web";
  // $strPage = "index";

  // include("controllers/connect.php");
  // include("views/header.php");
?>
        <!--Section barre de recherche-->
        <!-- <div class="search-box">
          <form>
            <label for="search-bar"></label>
            <input
              id="search-bar"
              type="text"
              placeholder="Recherche par mots-clés"
            />
          </form>
          <button class="style-button" type="submit">Trouver</button>
        </div>
      </div> -->
      <!--Section de présentation-->
      <!-- <section class="presentation-section">
        <h1 class="style-h">
          Des opportunités dans le web avec <strong>AmdWeb</strong>
        </h1>
        <div class="text-presentation">
          <p>
            AmdWeb est un site internet qui propose des offres d'emplois dans le
            domaine de l'informatique. En tant que futur développeur, j'ai tenu
            a réalisé ce genre de site pour permettre à l'utilisateur de trouver
            un emploi autrement que par le bouche à oreille.
            <br />
            En me basant sur ma petite expérience personnelle de rechercheur
            d'emplois, dans le domaine de l'informatique, j'ai pu constaté un
            manque d'offres d'emplois qui soient visible sur internet en
            général.
            <br />
            La plupart des informaticiens ont un compte Linkedin et c'est par ce
            biais qu'ils décrochent un emploi.
          </p>
          <p>
            Pour ceux qui ne souhaitent pas s'inscrire sur Linkedin, je propose
            mon site, <a href="index.php">AmdWeb</a> en alternative à votre
            recherche d'emplois.
            <br />
            Bonne recherche sur mon site, n'hésitez pas à laisser un avis sur
            Google!
            <br />
            Vous êtes certainement des utilisateurs aguerris, vos remarques me
            seront très utiles pour le développement de mon site.
          </p>
        </div>
      </section> -->
      <!--Section photos-->
      <!-- <div class="wrap-section">
        <div class="inscription-section">
          <h2 class="style-h">Inscription pour les offres d'emplois.</h2>
          <div class="btn-link-wrap style-button">
            <a href="pages/enregistrement/inscription.php"> Inscription </a>
          </div>
        </div>
        <div class="announcement-section">
          <h2 class="style-h">Déposer vos offres d'emplois.</h2>
          <div class="btn-link-wrap style-button">
            <a href="pages/job/ajouter-offre.php">Déposez</a>
          </div>
        </div>
      </div> -->
      <!--Footer-->
<?php 
// include("views/footer.php") 
?>

<?php
	// Session sur toutes les pages
	session_start();
	
	require("controllers/base_controller.php");
	
	$strCtrl 	= $_GET['ctrl']??"page";
	$strAction 	= $_GET['action']??"ajouterOffreEmploi";
	
	// inclure le fichier qui contient la classe
	require("controllers/".$strCtrl."_controller.php");
	// instancie un objet
	$strClassName 	= ucfirst($strCtrl)."_controller";
	$objCtrl 		= new $strClassName;
	// appel à la méthode
	$strMethodName	= $strAction;
	$objCtrl->$strMethodName();
	
