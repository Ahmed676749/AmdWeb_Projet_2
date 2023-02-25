{extends file="views/structure.tpl"}

{block name="content"}
    <form method="post" action="index.php?ctrl=categorie&action=ajouterCategorie">
            <div class="wrap-addJob">
                <div class="style" >
                  <label for="categorie" >Nom de la catégorie</label>
                  <input type="text" id="categorie" name="categorie_nom"/>
                </div>
                <button class="btn-addJob style-button" type="submit">
                  Ajouter
                </button>
            </div>
    </form>
{/block}