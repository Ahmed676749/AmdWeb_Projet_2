{extends file="views/structure.tpl"}

{block name="content"}
<main>
	<!--Section inscription-->
	<section>
		<div class="wrapper-subscribe">
			<h1 class="style-h">Inscrivez vous</h1>
			<p class="text-presentation">
			Afin de déposer une offre d'emploi ou de postuler, vous devez vous inscire.
			<br />
			Oui, l'inscription est obligatoire comme sur tous les sites.
			</p>

			{$smarty.post|var_dump}


			<div class="form-box">
				<form name="formAdd" method="post" action="#" enctype="multipart/form-data">
					<div class="radio-btn">
					<p>Vous êtes :</p>
					<div class="wrap-radio">
						<input type="radio" id="recruiter" name="type" value="recruteur" {if ($strUserType == "recruteur")} checked {/if} />
						<label for="recruiter">Recruteur</label>
					</div>
					<div class="wrap-radio">
						<input type="radio" id="candidate" name="type" value="candidat" {if ($strUserType == "candidat")} checked {/if} />
						<label for="candidate">Candidat</label>
					</div>
					</div>
					<div class="style">
						<label for="name">Nom</label>
						<input type="text" id="name" name="nom" value="{$strName}" />
					</div>
					<div class="style">
						<label for="firstName">Prénom</label>
						<input type="text" id="firstName" name="prenom" value="{$strFirstname}" />
					</div>
					<div class="style">
						<label for="address">Adresse</label>
						<input type="text" id="address" name="adresse" value="{$strAddress}"/>
					</div>
					<div class="style">
						<label for="email">Email</label>
						<input type="email" id="email" name="mail" value="{$strMail}"/>
					</div>
					<div class="style">
						<label for="password">Mot de passe</label>
						<input type="password" id="password" name="mdp" value="{$strPassword}"/>
					</div>
						<button class="btn-subscribe style-button" type="submit">S'incrire</button>
				</form>
			</div>
		</div>
	</section>
</main>
{/block}
