<?php
/* Smarty version 4.3.0, created on 2023-02-09 15:05:55
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\emploi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e50bd3404c13_95900206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '055246ca21c443b6b1b95c5667c30873372c3fbf' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\emploi.tpl',
      1 => 1675955148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e50bd3404c13_95900206 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185679793863e50bd3403a99_30660667', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_185679793863e50bd3403a99_30660667 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_185679793863e50bd3403a99_30660667',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!--Section barre de recherche-->
    <div class="search-box">
        <form>
            <label for="search-bar"></label>
            <input id="search-bar" type="text" placeholder="Recherche par mots-clés" />
        </form>
        <button class="style-button" type="submit">Trouver</button>
    </div>
    <!--Section cartes emplois-->
    <!--Section cartes emplois-->
    <section class="job-section-list">
        <h1 class="style-h">Les offres d'emplois</h1>
    <p class="text-presentation">
        Comme promis, vous n'allez pas être déçu. Retrouvez toutes les offres
            d'emplois sur cette page!
        </p>
        <div class="wrapper-layer">
            <!-- <a href="details-emploi.php" class="card-job">
              <h3>Développeur Web</h3>
              <address>strasbourg</address>
              <p>Salaire: 1800 &euro; / mois</p>
            </a>
            <a href="details-emploi.php" class="card-job">
              <h3>Développeur Fullstack</h3>
              <address>paris</address>
              <p>Salaire: 3000 &euro; / mois</p>
            </a>
            <a href="details-emploi.php" class="card-job">
              <h3>Développeur PHP</h3>
              <address>marseille</address>
              <p>Salaire: 2500 &euro; / mois</p>
            </a>
            <a href="details-emploi.php" class="card-job">
              <h3>Développeur JavaScript</h3>
              <address>lyon</address>
              <p>Salaire: 2300 &euro; / mois</p>
            </a>
            <a href="details-emploi.php" class="card-job">
              <h3>Développeur Back End</h3>
              <address>strasbourg</address>
              <p>Salaire: 1800 &euro; / mois</p>
            </a>
            <a href="details-emploi.php" class="card-job">
              <h3>Développeur Front End</h3>
              <address>bordeaux</address>
              <p>Salaire: 2000 &euro; / mois</p>
            </a>
            <a href="details-emploi.php" class="card-job">
              <h3>Développeur PHP/Symfony</h3>
              <address>paris</address>
              <p>Salaire: 3600 &euro; / mois</p>
            </a>
            <a href="details-emploi.php" class="card-job">
              <h3>Développeur React</h3>
              <address>lyon</address>
              <p>Salaire: 2600 &euro; / mois</p>
            </a> -->


            foreach($arrOffres as $arrDetOffre){
            $objOffre = new Offre;
            $objOffre->hydrate($arrDetOffre);
            include("offre.php");
            }

        </div>


    </section>
<?php
}
}
/* {/block "content"} */
}
