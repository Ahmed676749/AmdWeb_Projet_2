<?php
/* Smarty version 4.2.1, created on 2023-02-10 08:16:49
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\ajouteroffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e5fd71ad2ac0_09424129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80b5d194b3aae3df263a91304e8855a89cd45f5f' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\ajouteroffre.tpl',
      1 => 1676015805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e5fd71ad2ac0_09424129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142703512463e5fd71ad1c42_33839913', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_142703512463e5fd71ad1c42_33839913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_142703512463e5fd71ad1c42_33839913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form method="post" action="index.php?ctrl=offre&action=ajouterOffre">
            <div class="wrap-addJob">
                <div class="style" >
                  <label for="titre" >Titre de l'offre d'emploi</label>
                  <input type="text" id="titre" name="offre_titre"/>
                </div>
                <div class="style" >
                  <label for="description" >Description de l'offre</label>
                  <input type="text" id="description" name="offre_description"/>
                </div>

                <div class="style" >
                  <label for="salaire" >Salaire</label>
                  <input type="number" id="salaire" name="offre_salaire" />
                </div>
                <div class="style" >
                  <label for="siret">Numéro siret de l'entreprise</label>
                  <input type="text" id="siret" name="offre_siret"/>
                </div>
                <div class="style" >
                  <label for="lieu" >Lieu de l'offre d'emploi</label>
                  <input type="text" id="lieu" name="offre_adresse"/>
                </div>
                <button class="btn-addJob style-button" type="submit">
                  Ajouter
                </button>
            </div>
    </form>
<?php
}
}
/* {/block "content"} */
}
