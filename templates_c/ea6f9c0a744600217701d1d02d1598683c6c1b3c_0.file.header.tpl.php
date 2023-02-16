<?php
/* Smarty version 4.2.1, created on 2023-02-14 13:29:03
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63eb8c9fb64c54_41325076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea6f9c0a744600217701d1d02d1598683c6c1b3c' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\header.tpl',
      1 => 1676362901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63eb8c9fb64c54_41325076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175623551363eb8c9fb456d3_59717588', "head_infos");
?>

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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="collapse navbar-collapse color-style" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link <?php if (($_smarty_tpl->tpl_vars['strPage']->value == "index")) {?> class='active' <?php }?> " aria-current="page"
                    href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" <?php if (($_smarty_tpl->tpl_vars['strPage']->value == "emploi")) {?> class='active' <?php }?>
                    href="index.php?ctrl=offre&action=afficherOffres">Emploi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" <?php if (($_smarty_tpl->tpl_vars['strPage']->value == "galerie")) {?> class='active' <?php }?>
                    href="index.php?ctrl=page&action=galerie">Galerie</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" <?php if (($_smarty_tpl->tpl_vars['strPage']->value == "inscription")) {?> class='active' <?php }?>
                    href="index.php?ctrl=page&action=inscription">Inscription</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" <?php if (($_smarty_tpl->tpl_vars['strPage']->value == "connexion")) {?> class='active' <?php }?>
                    href="index.php?ctrl=page&action=connexion">Connexion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" <?php if (($_smarty_tpl->tpl_vars['strPage']->value == "ajouteroffre")) {?> class='active' <?php }?>
                    href="index.php?ctrl=offre&action=ajouterOffre">Ajouter offre</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <?php if (($_smarty_tpl->tpl_vars['strPage']->value == "accueil") || ($_smarty_tpl->tpl_vars['strPage']->value == "emploi")) {?>
        <div class='search-box'>
          <form>
            <label for='search-bar'></label>
            <input id='search-bar' type='text' placeholder='Recherche par mots-clés' name='keywords' />
          </form>
          <button class='style-button' value="rechercher" type='submit'>Trouver</button>
        </div>
<?php }
}
/* {block "head_infos"} */
class Block_175623551363eb8c9fb456d3_59717588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_infos' => 
  array (
    0 => 'Block_175623551363eb8c9fb456d3_59717588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css" />
  <?php
}
}
/* {/block "head_infos"} */
}
