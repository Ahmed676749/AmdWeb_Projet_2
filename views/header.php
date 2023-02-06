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
    <link rel="stylesheet" href="assets/css/style.css" />
    
    <title><?php echo $strTitle; ?></title>
  </head>
  <body>
    <div class="wrapper">
      <!--Header navigation-->
      <div class="wrap-header">
        <header class="color-style">
          <div class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">
                <div class="logo-box">
                <img
                  src="assets/images/img_first_page/logo.png"
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
                    <a class="nav-link <?php if($strPage == "index") {echo "active";} ?> " aria-current="page" href="index.php?ctrl=page&action=accueil">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" <?php if($strPage == "emploi") {echo "active";} ?> href="index.php?ctrl=page&action=emploi">Emploi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" <?php if($strPage == "galerie") {echo "active";} ?> href="index.php?ctrl=page&action=galerie">Galerie</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" <?php if($strPage == "inscription") {echo "active";} ?> href="index.php?ctrl=utilisateur&action=inscription">Inscription</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" <?php if($strPage == "connexion") {echo "active";} ?> href="index.php?ctrl=utilisateur&action=connexion">Connexion</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </header>