<?php
    $strPath = "../";
 ?>

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
    <link rel="stylesheet" href="<?php echo ($strPage == "index") ? "" : $strPath.$strPath; ?>assets/css/style.css" />
    
    <title><?php echo $strTitle; ?></title>
  </head>
  <body>
    <div class="wrapper">
      <!--Header navigation-->
      <div class="wrap-header">
        <header class="color-style">
          <div class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo ($strPage == "index") ? "" : $strPath.$strPath; ?>index.php">
                <div class="logo-box">
                <img
                  src="<?php echo ($strPage == "index") ? "" : $strPath.$strPath; ?>assets/images/img_first_page/logo.png"
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
                    <a class="nav-link <?php if($strPage == "index") {echo "active";} ?> " aria-current="page" href="<?php echo ($strPage == "index") ? "" : $strPath.$strPath; ?>index.php">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" <?php if($strPage == "emploi") {echo "active";} ?> href="<?php echo ($strPage == "index") ? "" : $strPath.$strPath; ?>pages/job/emploi.php">Emploi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" <?php if($strPage == "galerie") {echo "active";} ?> href="<?php echo ($strPage == "index") ? "" : $strPath.$strPath; ?>pages/photos/galerie.php"
                      >Galerie</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link" <?php if($strPage == "inscription") {echo "active";} ?>
                      href="<?php echo ($strPage == "index") ? "" : $strPath.$strPath; ?>pages/enregistrement/inscription.php"
                      >Inscription</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" <?php if($strPage == "connexion") {echo "active";} ?> href="<?php echo ($strPage == "index") ? "" : $strPath.$strPath; ?>pages/depots/connexion.php"
                      >Connexion</a
                    >
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </header>