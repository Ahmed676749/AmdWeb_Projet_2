<?php
  $strTitle = "AmdWeb offres d'emplois, liste des offres d'emlois";
  $strPage = "emploi";

  include("../header.php");
?>
<!--
<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <title><?php echo $strTitle; ?></title>
  </head>
  <body>
    <div class="wrapper">
    
      <header class="color-style">
        <div class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="../../index.php">
              <div class="logo-box">
                <img
                  src="../../assets/images/img_first_page/logo.png"
                  alt="logo"
                />
              </div>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="collapse navbar-collapse color-style" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    aria-current="page"
                    href="../../index.php"
                    >Accueil</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="../job/emploi.php"
                    >Emploi</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../photos/galerie.php">Galerie</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../enregistrement/inscription.php"
                    >Inscription</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../depots/connexion.php"
                    >Connexion</a
                  >
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>-->
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
          Comme promis, vous n'allez pas être deçu. Retrouvez toutes les offres
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
      <?php include("../footer.php") ?>
      