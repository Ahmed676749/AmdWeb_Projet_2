{extends file="views/structure.tpl"}
      {block name="content"}
      <section class="job-section-list">
        <h1 class="style-h">Les catégories d'offres d'emplois</h1>
        <div class="wrapper-layer">  
          {foreach from=$arrAffichage item=$objCatDet}
            <a href="index.php?ctrl=categorie&action=afficherCategorie&id={$objCatDet->getId()}" class="card-job">
              <p>{$objCatDet->getNom()}</p>
            </a>
          {/foreach}
        
        </div>
  </section>
  {/block}