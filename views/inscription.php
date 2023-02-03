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
                    <input type="radio" id="recruiter" name="type" value="recruteur" <?php if ($strUserType == "recruteur") {echo "checked";} ?> />
                    <label for="recruiter">Recruteur</label>
                  </div>
                  <div class="wrap-radio">
                    <input type="radio" id="candidate" name="type" value="candidat" <?php if ($strUserType == "candidat") {echo "checked";} ?> />
                    <label for="candidate">Candidat</label>
                  </div>
                </div>
                <div class="style">
                  <label for="name">Nom</label>
                  <input type="text" id="name" name="nom" value="<?php echo $strName ?>" />
                </div>
                <div class="style">
                  <label for="firstName">Prénom</label>
                  <input type="text" id="firstName" name="prenom" value="<?php echo $strFirstname ?>" />
                </div>
                <div class="style">
                  <label for="address">Adresse</label>
                  <input type="text" id="address" name="adresse" value="<?php echo $strAddress ?>"/>
                </div>

                <div class="style">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="mail" value="<?php echo $strMail ?>"/>
                </div>
                <div class="style">
                  <label for="password">Mot de passe</label>
                  <input type="password" id="password" name="mdp" value="<?php echo $strPassword ?>"/>
                </div>
                <button class="btn-subscribe style-button" type="submit">
                  S'incrire
                </button>
              </form>
            </div>
          </div>
        </section>
      </main>
    