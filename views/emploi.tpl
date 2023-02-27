{extends file="views/structure.tpl"}
      {block name="content"}
      <!--Section cartes emplois-->
      <section class="job-section-list">
        <h1 class="style-h">Les offres d'emplois</h1>
        <p class="text-presentation">
          Comme promis, vous n'allez pas être deçu. Retrouvez toutes les offres
          d'emplois sur cette page!
        </p>
        <div class="wrapper-layer">  
          {foreach from=$arrOffreAffichage item=$objOffreDet}
            <a href="index.php?ctrl=offre&action=afficherOffre&id={$objOffreDet->getId()}" class="card-job">
              <h3> {if $objOffreDet->getTitre() != ''}{$objOffreDet->getTitre()|unescape}{/if}</h3>
              <address>{if $objOffreDet->getAdresse() != ''}{$objOffreDet->getAdresse()|unescape}{/if}</address>
              <p>Salaire: {if $objOffreDet->getSalaire() != ''}{$objOffreDet->getSalaire()|unescape}{/if} &euro; / mois</p>
            </a>
            <div>
              <a href="index.php?ctrl=offre&action=modifierOffre&idMod={$objOffreDet->getId()}" class="btn-addJob style-button" >
                    Modifier
              </a>
              <a href="index.php?ctrl=offre&action=supprimerOffre&idSup={$objOffreDet->getId()}&delete=1" class="btn-addJob style-button" >
                    Supprimer
              </a>
              <a href="index.php?ctrl=categorie&action=ajouterCategorie" class="btn-addJob style-button" >
                    Ajouter Catégorie
              </a>
            </div>
          {/foreach}
        
        </div>
  </section>
  {/block}
      