{extends file="views/structure.tpl"}

{block name="content"}
    <form method="post" action="index.php?ctrl=offre&action=modifierOffre&idMod={$smarty.get.idMod}">
            <div class="wrap-addJob">
                <div class="style" >
                  <label for="titre" >Titre de l'offre d'emploi</label>
                  <input type="text" id="titre" name="offre_titre"/>
                </div>
                <div class="style" >
                  <label for="description" >Description de l'offre</label>
                  <input type="text" id="description" name="offre_description"/>
                </div>

                <div class="style" >
                  <label for="salaire" >Salaire</label>
                  <input type="number" id="salaire" name="offre_salaire" />
                </div>
                <div class="style" >
                  <label for="siret">Numéro siret de l'entreprise</label>
                  <input type="text" id="siret" name="offre_siret"/>
                </div>
                <div class="style" >
                  <label for="lieu" >Lieu de l'offre d'emploi</label>
                  <input type="text" id="lieu" name="offre_adresse"/>
                </div>
                <button class="btn-addJob style-button" type="submit">
                  Modifier
                </button>
            </div>
    </form>
{/block}