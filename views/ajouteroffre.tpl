{extends file="views/structure.tpl"}

{block name="content"}
  {include file="views/erreur.tpl"}
    <form method="post" action="index.php?ctrl=offre&action=ajouterOffre">
            <div class="wrap-addJob">
                <div class="style" >
                  <label for="titre" >Titre de l'offre d'emploi</label>
                  <input type="text" id="titre" name="offre_titre" value="{if $objOffre->getTitre() != ''}{$objOffre->getTitre()|unescape}{/if}"/>
                </div>
                <div class="style" >
                  <label for="description" >Description de l'offre</label>
                  <input type="text" id="description" name="offre_description" value="{if $objOffre->getDescription() != ''}{$objOffre->getDescription()|unescape}{/if}"/>
                </div>

                <div class="style" >
                  <label for="salaire" >Salaire</label>
                  <input type="number" id="salaire" name="offre_salaire" value="{if $objOffre->getSalaire() != ''}{$objOffre->getSalaire()|unescape}{/if}" />
                </div>
                <div class="style" >
                  <label for="siret">Numéro siret de l'entreprise</label>
                  <input type="text" id="siret" name="offre_siret" value="{if $objOffre->getSiret() != ''}{$objOffre->getSiret()|unescape}{/if}"/>
                </div>
                <div class="style" >
                  <label for="lieu" >Lieu de l'offre d'emploi</label>
                  <input type="text" id="lieu" name="offre_adresse" value="{if $objOffre->getAdresse() != ''}{$objOffre->getAdresse()|unescape}{/if}"/>
                </div>
                <button class="btn-addJob style-button" type="submit">
                  Ajouter
                </button>
            </div>
    </form>
{/block}