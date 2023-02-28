{extends file="views/structure.tpl"}
      {block name="content"}
      <!--Section cartes emplois-->
      <section class="job-section-list">
        <h1 class="style-h">Les catégories d'offres d'emplois</h1>
        <div class="wrapper-layer">  
          {foreach from=$arrAffichage item=$objCatDet}
            <a href="index.php?ctrl=categorie&action=afficherCategorie&id={$objCatDet->getId()}" class="card-job">
              <p>{$objCatDet->getNom()}</p>
            </a>
            {* <div>
              <a href="index.php?ctrl=offre&action=modifierOffre&idMod={$objOffreDet->getId()}" class="btn-addJob style-button" >
                    Modifier
              </a>
              <a href="index.php?ctrl=offre&action=supprimerOffre&idSup={$objOffreDet->getId()}&delete=1" class="btn-addJob style-button" >
                    Supprimer
              </a>
              <a href="index.php?ctrl=categorie&action=ajouterCategorie" class="btn-addJob style-button" >
                    Ajouter Catégorie
              </a>
            </div> *}
          {/foreach}
        
        </div>
  </section>
  {/block}
      