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
              <h3 {}>{$objOffreDet->getTitre()}</h3>
              <address>{$objOffreDet->getAdresse()}</address>
              <p>Salaire: {$objOffreDet->getSalaire()} &euro; / mois</p>
            </a>
            <a href="index.php?ctrl=offre&action=modifierOffre&idMod={$objOffreDet->getId()}" class="btn-addJob style-button" >
                  Modifier
            </a>
            <a href="index.php?ctrl=offre&action=supprimerOffre&idSup={$objOffreDet->getId()}&delete='1'" class="btn-addJob style-button" >
                  Supprimer
            </a>
            
          {/foreach}
        
        </div>
  </section>
  {/block}
      