<?php
  $strTitle = "AmdWeb, offres d'emplois, plan du site";
  $strPage = "plan-site";

  include("../../views/header.php");
?>


      <main>
        <!--Section plan du site-->
        <div class="wrapper-list">
          <h1 class="style-h">Plan du site</h1>
          <ul>
            <li>
              <a href="../../index.php" class="welcome">Accueil</a>
            </li>
            <li>
              <a href="../job/emploi.php">Emploi</a>
            </li>
            <li>
              <a href="../job/details-emploi.php" class="details"
                >Détails de l'offre d'emploi</a
              >
            </li>
            <li>
              <a href="../enregistrement/inscription.php">Inscription</a>
            </li>
            <li>
              <a href="../depots/connexion.php">Connexion</a>
            </li>
            <li>
              <a href="../photos/galerie.php">Galerie</a>
            </li>
            <li>
              <a href="../footer/mentions.php">Mentions légales</a>
            </li>
            <li>
              <a href="plan-site.php">Plan du site</a>
            </li>
          </ul>
        </div>
      </main>
    </div>
    <!--Footer-->
    <?php include("../../views/footer.php") ?>
   