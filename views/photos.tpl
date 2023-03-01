{extends file="views/structure.tpl"}
      {block name="content"}

        <h1 class="style-h">Les photos</h1>
        {* <div class="wrapper-layer">   *}
          {foreach from=$arrPhotoAffichage item=$objPhotoDet}

                {* <div> *}
            <div>
            <img alt="image" src="assets/images/img_first_page/{$objPhotoDet->getNom()}">
            <a href="index.php?ctrl=photo&action=supprimerPhoto&idSupPhoto={$objPhotoDet->getId()}&delete=1" class="btn-addJob style-button" >Supprimer</a>
            </div>
          {* </div> *}

          
          {/foreach}

        </div>
  {/block}