<?php
  $strTitle = "AmdWeb offres d'emplois, galerie photos";
  $strPage = "galerie";

  include("../header.php");

  
?>


      <main class="gallery-box">
        <h1 class="style-h">Galerie photos</h1>
        <p class="text-presentation">
          Voici quelques très jolie photographies pour vous mettre dans
          l'ambiance.
        </p>
        <!--Section Bootstrap galerie photos-->
        <div
          id="carouselExampleControls"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="../../assets/images/img_first_page/img-2.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="../../assets/images/img_first_page/img-1.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="../../assets/images/img_first_page/demandeur-emploi-bureau.jpeg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="../../assets/images/img_first_page/demandeur-emploi.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="../../assets/images/img_first_page/recruteur.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
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
