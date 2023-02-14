<?php
/* Smarty version 4.3.0, created on 2023-02-14 10:56:04
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63eb68c4c6c219_39626856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea6f9c0a744600217701d1d02d1598683c6c1b3c' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\header.tpl',
      1 => 1676372160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63eb68c4c6c219_39626856 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
	<link rel="stylesheet" href="assets/css/style.css" />

	<title><?php echo $_smarty_tpl->tpl_vars['strTitle']->value;?>
</title>
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
									<a class="nav-link <?php if (($_smarty_tpl->tpl_vars['strPage']->value == "index")) {?> active <?php }?>" href="index.php">Accueil</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?php if (($_smarty_tpl->tpl_vars['strPage']->value == "emploi")) {?> active <?php }?>" href="index.php?ctrl=page&action=emploi">Emploi</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?php if (($_smarty_tpl->tpl_vars['strPage']->value == "galerie")) {?> active <?php }?>" href="index.php?ctrl=page&action=galerie">Galerie</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?php if (($_smarty_tpl->tpl_vars['strPage']->value == "inscription")) {?> active <?php }?>" href="index.php?ctrl=utilisateur&action=inscription">Inscription</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?php if (($_smarty_tpl->tpl_vars['strPage']->value == "connexion")) {?> active <?php }?>" href="index.php?ctrl=utilisateur&action=connexion">Connexion</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			<div id="user">
			<?php if ((isset($_SESSION['user']['utilisateur_id'])) && $_SESSION['user']['utilisateur_id'] != '') {?>
				<p class="text-right">Bonjour <a href="index.php?ctrl=utilisateur&action=modifier_compte" title="Modifier son profil"><?php echo $_SESSION['user']['utilisateur_prenom'];?>
</a>
				| 
				<a href="index.php?ctrl=utilisateur&action=deconnection" title="Se déconnecter">Se déconnecter<i class="fas fa-sign-out-alt"></i></a> 
				</p>
			<?php }?>
			</div>

			<?php echo var_dump($_SESSION);?>


<?php }
}
