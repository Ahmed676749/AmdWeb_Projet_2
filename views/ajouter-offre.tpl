<?php
  $strTitle = "Ajouter une offre d'emploi";
  $strPage = "ajouter-offre";
  include("../../controllers/connect.php");
  include("../../views/header.php");
  require("../../entities/offre_entity");
  
   

 
    // $strAjouterNouvelleOffre = new Offre();


    
   
    // $strOffreTitre = $_POST["offreTitre"]??"";
    // $strOffreDescription = $_POST["offreDescription"]??"";
    // $strOffreSalaire = $_POST["offreSalaire"]??"";
    // $strOffreSiret = $_POST["offreSiret"]??"";
    // $strOffreLieu = $_POST["offreLieu"]??"";
  
    // $objAjouter = new Offre();
    // $objAjouter->setOffreTitre($strOffreTitre);
        
    

    // $strRq = "INSERT INTO offre (offre_titre, offre_description, offre_salaire, offre_siret, offre_adresse)
    //           VALUES ('".$strOffreTitre."', '".$strOffreDescription."', '".$strOffreSalaire."', '".$strOffreSiret."', '".$strOffreLieu."')"; 

    //    $arrAddJob = $db->exec($strRq);
        
       
    

   



  
    
    
   



 



  ?>
    <form method="post">
            <div class="wrap-addJob">
                <div class="style" >
                  <label for="titre" >Titre de l'offre d'emploi</label>
                  <input type="text" id="titre" name="offreTitre" value="<?php echo $strOffreTitre; ?>"/>
                </div>
                <!-- <div class="style">
                  <label for="firstName"></label>
                  <input type="text" id="firstName" />
                </div> -->
                <div class="style" >
                  <label for="description" >Description de l'offre</label>
                  <input type="text" id="description" name="offreDescription" value="<?php echo $strOffreDescription; ?>"/>
                </div>

                <div class="style" >
                  <label for="salaire" >Salaire</label>
                  <input type="number" id="salaire" name="offreSalaire" value="<?php echo $strOffreSalaire; ?>"/>
                </div>
                <div class="style" >
                  <label for="siret">Numéro siret de l'entreprise</label>
                  <input type="text" id="siret" name="offreSiret"  value="<?php echo $strOffreSiret; ?>"/>
                </div>
                <div class="style" >
                  <label for="lieu" >Lieu de l'offre d'emploi</label>
                  <input type="text" id="lieu" name="offreLieu" value="<?php echo $strOffreLieu; ?>"/>
                </div>
                <button class="btn-addJob style-button" type="submit">
                  Ajouter
                </button>
            </div>
    </form>

    <article>
	
	<div>
		<h3>{$objOffre->getTitre()} - 
			<span class="addDate">
			
			</span>
			
		</h3>
		<p class="content">{$objOffre->getContent()}</p>
	</div>
</article>

<?php include("../../views/footer.php") ?>