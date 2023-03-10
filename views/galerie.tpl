{extends file="views/structure.tpl"}

{block name="content"}
    <main class="gallery-box">
        {if $strPage == "galerie"}
            <h1 class="style-h">Galerie photos</h1>
            <p class="text-presentation">
            Voici quelques photographies pour vous mettre dans
            l'ambiance.
            </p>
        {else}
            <h1 class="style-h">Ajouter des photos</h1>
            <p class="text-presentation">
            Vous pouvez ajouter des photos sur cette page
            </p>
        {/if}

        {if isset($smarty.session.user.utilisateur_droit_id)}
            <p><a href="index.php?ctrl=photo&action=ajouterPhoto" title="Ajouter une photo">Ajouter une photo</a></p>
        {/if}

        {if $strPage == "galerie"}
            <!--Section Bootstrap galerie photos-->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/img_first_page/img-2.jpg" class="d-block w-100" alt="..."/>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/img_first_page/img-1.jpg" class="d-block w-100" alt="..."/>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/img_first_page/demandeur-emploi-bureau.jpeg" class="d-block w-100" alt="..."/>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/img_first_page/demandeur-emploi.jpg" class="d-block w-100" alt="..."/>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/img_first_page/recruteur.jpg" class="d-block w-100" alt="..."/>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        {else}
            <div class="formImage">
                <form action="#" method="post" enctype="multipart/form-data">
                    <label for="photo">Selectionnez une image</label>
                    <input type="file" name="photo_nom" id="photo">

                    <label for="ut">utilisateur</label>
                    <input type="text" name="photo_utilisateur_id" id="ut">

                    <button class="btn-addPhoto style-button" type="submit">Ajouter</button>
                    <a href="index.php?ctrl=photo&action=supprimerPhoto&idSupPhoto=62&delete=1" class="btn-addJob style-button" >Supprimer</a>
                </form>
                <div>
                    {* <img alt="image" src="assets/images/img_first_page/{$objPhoto->getNom()}"> *}
                </div>
            </div>
        {/if}
    </main>
{/block}