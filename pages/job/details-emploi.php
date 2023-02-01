<?php
  $strTitle = "AmdWeb détails de l'offre d'emploi";
  $strPage = "détails-emploi";
  include("../../controllers/connect.php");
  include("../../views/header.php");




  // $strRq = "SELECT * FROM offre";
  //  echo $strRq;
  // var_dump($strRq);

  // $arrDetailsOffres = $db->query($strRq)->fetchAll();
 

  // foreach($arrDetailsOffres as $arrDetailsOffre) {
  //   echo $arrDetailsOffre["offre_titre"];
  // }
  // var_dump($arrDetailsOffre);

?>



      <main>
        <!--Section description-->
        <section class="description">
          <h1 class="style-h"></h1>
          <div class="wrapper-details">
            <div class="left-box card-job">
              <p>marseille</p>
              <p>Salaire: 2500 &euro; / mois</p>
            </div>
            <div class="right-box card-job">
              <p>Description :</p>
              <p>
                Venez nous rejoindre dans un grand loft avec une Play-Station,
                mario kart et une ambiance convivial. Nous cherchons un
                développeur à part entière de l'équipe. Nous développons une IA
                et avons besoin d'un développeur front pour nous soulager dans
                le développement des maquettes. Nous sommes plus impressionnés
                par les projets personnels réalisés que par votre niveau
                d'étude.
              </p>
              <p>
                Type d'emploi : Temps plein, CDI
                <br />
                Salaire : 2500 / mois
              </p>
              <p>
                Avantages :
                <br />
                Horaires flexibles participation au transport
                <br />
                Date de début prévue : 19/09/2038
              </p>
              <p>
                Qualifications:
                <br />
                Technologies de l'information: 1 an
                <br />
                Développement web: 1 an
                <br />
                HTML5: 1 an
              </p>
              <button class="style-button" type="submit">POSTULEZ</button>
            </div>
          </div>
        </section>
      </main>
      <!--Footer-->
      <?php include("../../views/footer.php") ?>
      