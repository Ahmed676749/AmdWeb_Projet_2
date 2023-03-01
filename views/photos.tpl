{extends file="views/structure.tpl"}
      {block name="content"}
      
        <h1 class="style-h">Les photos</h1>
        <div class="wrapper-layer">  
          {foreach from=$arrPhotoAffichage item=$objPhotoDet}
          
              
              
              {* <p>{if $objPhotoDet->getNom() != ''}{$objPhotoDet->getNom()|unescape}{/if}</p> *}
                <div>
          
            <img alt="image" src="assets/images/img_first_page/{$objPhotoDet->getNom()}">
            <a href="index.php?ctrl=photo&action=supprimerPhoto&idSupPhoto={$objPhotoDet->getId()}&delete=1" class="btn-addJob style-button" >Supprimer</a>
          
          </div>
            
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
  {/block}
      