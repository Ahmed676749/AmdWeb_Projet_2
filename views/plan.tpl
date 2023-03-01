{extends file="views/structure.tpl"}

{block name="content"}
	<main>
		<!--Section plan du site-->
		<div class="wrapper-list">
			<h1 class="style-h">Plan du site</h1>
			<ul>
				<li>
					<a href="index.php" class="welcome">Accueil</a>
				</li>
				<li>
					<a href="index.php?ctrl=page&action=emploi">Emploi</a>
				</li>
				<li>
					<a href="index.php?ctrl=utilisateur&action=inscription">Inscription</a>
				</li>
				<li>
					<a href="index.php?ctrl=utilisateur&action=connexion">Connexion</a>
				</li>
				<li>
					<a href="index.php?ctrl=page&action=galerie">Galerie</a>
				</li>
				<li>
					<a href="index.php?ctrl=page&action=mentions">Mentions légales</a>
				</li>
				<li>
					<a href="index.php?ctrl=page&action=plan">Plan du site</a>
				</li>
			</ul>
		</div>
	</main>
</div>
{/block}