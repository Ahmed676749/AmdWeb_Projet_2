<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	{block name="head_infos"}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
	<link rel="stylesheet" href="assets/css/style.css" />
	{/block}

	<title>{$strTitle}</title>
</head>

<body>
	<div class="wrapper">
		<!--Header navigation-->
		<div class="wrap-header">
			<header class="color-style">
				<div class="navbar navbar-expand-lg">
					<div class="container-fluid">
						<a class="navbar-brand" href="index.php">
							<div class="logo-box">
								<img src="assets/images/img_first_page/logo.png" alt="logo" />
							</div>
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<nav class="collapse navbar-collapse color-style" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link {if ($strPage == "index")} active {/if}" href="index.php">Accueil</a>
								</li>
								<li class="nav-item">
									<a class="nav-link {if ($strPage == "emploi")} active {/if}" href="index.php?ctrl=offre&action=afficherOffres">Emploi</a>
								</li>
								<li class="nav-item">
									<a class="nav-link {if ($strPage == "galerie")} active {/if}" href="index.php?ctrl=page&action=galerie">Galerie</a>
								</li>
								<li class="nav-item">
									<a class="nav-link {if ($strPage == "inscription")} active {/if}" href="index.php?ctrl=utilisateur&action=inscription">Inscription</a>
								</li>
								<li class="nav-item">
									<a class="nav-link {if ($strPage == "connexion")} active {/if}" href="index.php?ctrl=utilisateur&action=connexion">Connexion</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			<div id="user">
			{if isset($smarty.session.user.utilisateur_id) && $smarty.session.user.utilisateur_id != ''}
				<p class="text-right">Bonjour <a href="index.php?ctrl=utilisateur&action=modifier_compte" title="Modifier son profil">{$smarty.session.user.utilisateur_prenom}</a>
				| 
				<a href="index.php?ctrl=utilisateur&action=deconnection" title="Se déconnecter">Se déconnecter</a>
				{if ($smarty.session.user.utilisateur_droit_id == 3)}
				|
				<a href="index.php?ctrl=utilisateur&action=list_user" title="Administration">Administration</a> 
				{/if}
				</p>
			{/if}
			</div>

			{* {$smarty.session|var_dump} *}

