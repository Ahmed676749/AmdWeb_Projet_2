<?php
  include("models/connect.php");


  $strTitle = "AmdWeb offres d'emplois, liste des offres d’emplois";
  $strPage = "emploi";

  include("header.php");

  $strRq 			= "	SELECT *
                  FROM offre";

  $arrOffres 	= $db->query($strRq)->fetchAll();

  var_dump($strRq);
  var_dump($arrOffres);
  
?>

      <!--Section barre de recherche-->
      <div class="search-box">
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
      <!--Section cartes emplois-->
      <section class="job-section-list">
        <h1 class="style-h">Les offres d'emplois</h1>
        <p class="text-presentation">
          Comme promis, vous n'allez pas être déçu. Retrouvez toutes les offres
          d'emplois sur cette page!
        </p>
        <div class="wrapper-layer">
          <a href="details-emploi.php" class="card-job">
            <h3>Développeur Web</h3>
            <address>strasbourg</address>
            <p>Salaire: 1800 &euro; / mois</p>
          </a>
          <a href="details-emploi.php" class="card-job">
            <h3>Développeur Fullstack</h3>
            <address>paris</address>
            <p>Salaire: 3000 &euro; / mois</p>
          </a>
          <a href="details-emploi.php" class="card-job">
            <h3>Développeur PHP</h3>
            <address>marseille</address>
            <p>Salaire: 2500 &euro; / mois</p>
          </a>
          <a href="details-emploi.php" class="card-job">
            <h3>Développeur JavaScript</h3>
            <address>lyon</address>
            <p>Salaire: 2300 &euro; / mois</p>
          </a>
          <a href="details-emploi.php" class="card-job">
            <h3>Développeur Back End</h3>
            <address>strasbourg</address>
            <p>Salaire: 1800 &euro; / mois</p>
          </a>
          <a href="details-emploi.php" class="card-job">
            <h3>Développeur Front End</h3>
            <address>bordeaux</address>
            <p>Salaire: 2000 &euro; / mois</p>
          </a>
          <a href="details-emploi.php" class="card-job">
            <h3>Développeur PHP/Symfony</h3>
            <address>paris</address>
            <p>Salaire: 3600 &euro; / mois</p>
          </a>
          <a href="details-emploi.php" class="card-job">
            <h3>Développeur React</h3>
            <address>lyon</address>
            <p>Salaire: 2600 &euro; / mois</p>
          </a>
        </div>
      </section>
      <!--Footer-->
      <?php include("footer.php") ?>
      