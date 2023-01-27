<?php
  $strTitle = "AmdWeb offres d'emplois, connexion";
  $strPage = "connexion";

  include("header.php");
?>


      <main>
        <!--Section connexion-->
        <section>
          <div class="wrapper-subscribe">
            <h1 class="style-h">Connexion</h1>
            <p class="text-presentation">
              Vous n'avez de compte? &ensp;
              <a href="../enregistrement/inscription.php"> Inscrivez-vous!</a>
            </p>
            <div class="style">
              <label for="email">Email</label>
              <input type="email" id="email" />
            </div>
            <div class="style">
              <label for="passWord">Mot de passe</label>
              <input type="password" id="passWord" />
            </div>
            <div class="wrap-btn-connexion">
              <button class="btn-subscribe style-button" type="submit">
                Connexion
              </button>
            </div>
          </div>
        </section>
      </main>
      <!--Footer-->
      <?php include("footer.php") ?>
      