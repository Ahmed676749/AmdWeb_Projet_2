<?php
  $strTitle = "AmdWeb, offres d'emplois spécialisé web";
  $strPage = "index";

  include("pages/header.php");
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
      </div>
      <!--Section de présentation-->
      <section class="presentation-section">
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
      </section>
      <!--Section photos-->
      <div class="wrap-section">
        <div class="inscription-section">
          <h2 class="style-h">Inscription pour les offres d'emplois.</h2>
          <div class="btn-link-wrap style-button">
            <a href="pages/enregistrement/inscription.php"> Inscription </a>
          </div>
        </div>
        <div class="announcement-section">
          <h2 class="style-h">Déposer vos offres d'emplois.</h2>
          <div class="btn-link-wrap style-button">
            <a href="pages/depots/connexion.php">Déposez</a>
          </div>
        </div>
      </div>
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
            <a href="pages/footer/plan-site.php">Plan du site</a>
            <a href="pages/footer/mentions.php">Mentions légales</a>
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
