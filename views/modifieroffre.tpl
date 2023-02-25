{extends file="views/structure.tpl"}

{block name="content"}
    {include file="views/erreur.tpl"}
    <form method="post" action="index.php?ctrl=offre&action=modifierOffre&idMod={$smarty.get.idMod}">
            <div class="wrap-addJob">
                <div class="style" >
                  <label for="titre" >Titre de l'offre d'emploi</label>
                  <input type="text" id="titre" name="offre_titre" value="{if $objModif->getTitre() != ''}{$objModif->getTitre()|unescape}{/if}"/>
                </div>
                <div class="style" >
                  <label for="description" >Description de l'offre</label>
                  <input type="text" id="description" name="offre_description" value="{if $objModif->getDescription() != ''}{$objModif->getDescription()|unescape}{/if}"/>
                </div>

                <div class="style" >
                  <label for="salaire" >Salaire</label>
                  <input type="number" id="salaire" name="offre_salaire" value="{if $objModif->getSalaire() != ''}{$objModif->getSalaire()|unescape}{/if}"/>
                </div>
                <div class="style" >
                  <label for="siret">Numéro siret de l'entreprise</label>
                  <input type="text" id="siret" name="offre_siret" value="{if $objModif->getSiret() != ''}{$objModif->getSiret()|unescape}{/if}"/>
                </div>
                <div class="style" >
                  <label for="lieu" >Lieu de l'offre d'emploi</label>
                  <input type="text" id="lieu" name="offre_adresse" value="{if $objModif->getAdresse() != ''}{$objModif->getAdresse()|unescape}{/if}"/>
                </div>
                <button class="btn-addJob style-button" type="submit">
                  Modifier
                </button>
            </div>
    </form>
{/block}