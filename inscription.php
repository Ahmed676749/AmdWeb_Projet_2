<?php
  include("connect.php");

  $strTitle = "AmdWeb offres d'emplois, inscription";
  $strPage = "inscription";

  include("header.php");

  // Récupération des informations du formulaire
  $strUserType  = $_POST['role']??'';
  $strName      = $_POST['name']??'';
  $strFirstname = $_POST['firstname']??'';
  $strAddress   = $_POST['address']??'';
  $strMail      = $_POST['email']??'';
  $strPassword  = $_POST['password']??'';

  $strRq 			= "	SELECT *
                  FROM utilisateur";

  $arrUsers 	= $db->query($strRq)->fetchAll();

  var_dump($strRq);
  var_dump($arrUsers);

  var_dump($_POST);

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
              <form name="formAdd" method="post" action="#" enctype="multipart/form-data">
                <div class="radio-btn">
                  <p>Vous êtes :</p>
                  <div class="wrap-radio">
                    <input type="radio" id="recruiter" name="role" value="recruiter" <?php if ($strUserType == "recruiter") {echo "checked";} ?> />
                    <label for="recruiter">Recruteur</label>
                  </div>
                  <div class="wrap-radio">
                    <input type="radio" id="candidate" name="role" value="candidate" <?php if ($strUserType == "candidate") {echo "checked";} ?> />
                    <label for="candidate">Candidat</label>
                  </div>
                </div>
                <div class="style">
                  <label for="name"><?php echo $strName ?></label>
                  <input type="text" id="name" name="name" />
                </div>
                <div class="style">
                  <label for="firstName"><?php echo $strFirstname ?></label>
                  <input type="text" id="firstName" name="firstname" />
                </div>
                <div class="style">
                  <label for="address"><?php echo $strAddress ?></label>
                  <input type="text" id="address" name="address"/>
                </div>

                <div class="style">
                  <label for="email"><?php echo $strMail ?></label>
                  <input type="email" id="email" name="email"/>
                </div>
                <div class="style">
                  <label for="password"><?php echo $strPassword ?></label>
                  <input type="password" id="password" name="password"/>
                </div>
                <button class="btn-subscribe style-button" type="submit">
                  S'incrire
                </button>
              </form>
            </div>
          </div>
        </section>
      </main>
      <?php include("footer.php") ?>
    