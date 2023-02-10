<?php
  $strTitle = "AmdWeb offres d'emplois, inscription";
  $strPage = "inscription";
  include("../../views/header.php");

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
              <form method="post">
                <div class="radio-btn">
                  <p>Vous êtes :</p>
                  <div class="wrap-radio">
                    <input
                      type="radio"
                      id="recruiter"
                      name="role"
                      value="recruiter"
                      checked
                    />
                    <label for="recruiter">Recruteur</label>
                  </div>
                  <div class="wrap-radio">
                    <input
                      type="radio"
                      id="candidate"
                      name="role"
                      value="candidate"
                    />
                    <label for="candidate">Candidat</label>
                  </div>
                </div>
                <div class="style" name="utilisateurNom">
                  <label for="name">Nom</label>
                  <input type="text" id="name" />
                </div>
                <div class="style">
                  <label for="firstName">Prénom</label>
                  <input type="text" id="firstName" />
                </div>
                <div class="style">
                  <label for="adress">Adresse</label>
                  <input type="text" id="adress" />
                </div>

                <div class="style">
                  <label for="email">Email</label>
                  <input type="email" id="email" />
                </div>
                <div class="style">
                  <label for="passWord">Mot de passe</label>
                  <input type="password" id="passWord" />
                </div>
                <button class="btn-subscribe style-button" type="submit">
                  S'incrire
                </button>
              </form>
            </div>
          </div>
        </section>
      </main>
      <?php include("../../views/footer.php") ?>
    