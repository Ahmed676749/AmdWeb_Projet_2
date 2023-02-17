{extends file="views/structure.tpl"}

{block name="content"}
<main>
    <!--Section connexion-->
    <section>
        <div class="wrapper-subscribe">
            <h1 class="style-h">Connexion</h1>
			
			{* {$smarty.post|var_dump} *}
			
			<form name="formConnect" method="post" action="#">
				<p class="text-presentation">
					Vous n'avez de compte? &ensp;
					<a href="index.php?ctrl=utilisateur&action=inscription"> Inscrivez-vous!</a>
				</p>

				{* Affichage des erreurs de saisie pour l'utilisateur *}
				{if count($arrErrorCo) > 0}
					<div class="alert alert-warning">
						Attention ! : {$arrErrorCo['erreur']}
					</div>
				{/if}

				<div class="style">
					<label for="email">Email</label>
					<input type="email" id="email" name="mail" />
				</div>

				<div class="style">
					<label for="passWord">Mot de passe</label>
					<input type="password" id="password" name="mdp" />
				</div>

				<div class="style">
				<button class="btn-subscribe style-button" type="submit">Connexion</button>
				</div>
			</form>
        </div>
    </section>
</main>
{/block}