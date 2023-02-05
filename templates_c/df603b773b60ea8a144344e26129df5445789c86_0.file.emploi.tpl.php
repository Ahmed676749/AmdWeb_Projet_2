<?php
/* Smarty version 4.2.1, created on 2023-02-05 19:53:01
  from 'C:\xampp\htdocs\amdweb\views\emploi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63dffb0d2b9437_74545480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df603b773b60ea8a144344e26129df5445789c86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amdweb\\views\\emploi.tpl',
      1 => 1675623022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dffb0d2b9437_74545480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<!--
<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <title><?php echo '<?php'; ?>
 //echo $strTitle; <?php echo '?>'; ?>
</title>
  </head>
  <body>
    <div class="wrapper">
    
      <header class="color-style">
        <div class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="../../index.php">
              <div class="logo-box">
                <img
                  src="../../assets/images/img_first_page/logo.png"
                  alt="logo"
                />
              </div>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="collapse navbar-collapse color-style" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    aria-current="page"
                    href="../../index.php"
                    >Accueil</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="../job/emploi.php"
                    >Emploi</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../photos/galerie.php">Galerie</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../enregistrement/inscription.php"
                    >Inscription</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../depots/connexion.php"
                    >Connexion</a
                  >
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>-->
      <!--Section barre de recherche-->
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103618799563dffb0d2a06f5_70477473', "content");
?>


        
                  </div>
      </section>
  
      <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_103618799563dffb0d2a06f5_70477473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_103618799563dffb0d2a06f5_70477473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!--Section cartes emplois-->
      <section class="job-section-list">
        <h1 class="style-h">Les offres d'emplois</h1>
        <p class="text-presentation">
          Comme promis, vous n'allez pas être deçu. Retrouvez toutes les offres
          d'emplois sur cette page!
        </p>
        <div class="wrapper-layer">
                    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrOffreAffichage']->value, 'objOffreDet');
$_smarty_tpl->tpl_vars['objOffreDet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objOffreDet']->value) {
$_smarty_tpl->tpl_vars['objOffreDet']->do_else = false;
?>
          
        
          <a href="details-emploi.php" class="card-job">
            <h3><?php echo $_smarty_tpl->tpl_vars['objOffreDet']->value->getTitre();?>
</h3>
            <address><?php echo $_smarty_tpl->tpl_vars['objOffreDet']->value->getAdresse();?>
</address>
            <p>Salaire: <?php echo $_smarty_tpl->tpl_vars['objOffreDet']->value->getSalaire();?>
 &euro; / mois</p>
          </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block "content"} */
}
