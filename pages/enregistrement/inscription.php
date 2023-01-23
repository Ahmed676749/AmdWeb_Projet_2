<?php
  $strTitle = "AmdWeb offres d'emplois, inscription";
  $strPage = "inscription";

  include("../header.php");
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
              <form>
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
                <div class="style">
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
      <!--Footer-->
      <footer>
        <div class="wrap-footer">
          <div class="adress-footer">
            <p>AmdWeb</p>
            <p>4 Rue du Rhin, 68000 Colmar</p>
            <p>Téléphone : 06 12 34 56 78</p>
            <p>AmdWeb@ccicampus.fr</p>
          </div>
          <div class="nav-footer">
            <a href="../footer/plan-site.php">Plan du site</a>
            <a href="../footer/mentions.php">Mentions légales</a>
          </div>
        </div>
        <div class="wrap-map">
          <div class="map-footer">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d339624.2376506505!2d7.275304560499902!3d48.316036845340946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479165fb30b15b99%3A0x9bfe7b716880d65b!2sCCI%20Campus%20Alsace!5e0!3m2!1sfr!2sfr!4v1670170347600!5m2!1sfr!2sfr"
              width="600"
              height="200"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </footer>
    </div>
    <!--Js Bootstrap-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
