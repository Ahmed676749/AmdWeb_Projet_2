<?php
/* Smarty version 4.2.1, created on 2023-02-24 08:06:35
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\ajouteroffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f8700beed283_47867739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80b5d194b3aae3df263a91304e8855a89cd45f5f' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\ajouteroffre.tpl',
      1 => 1677225428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/erreur.tpl' => 1,
  ),
),false)) {
function content_63f8700beed283_47867739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190638826863f8700bed1ab4_56163929', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_190638826863f8700bed1ab4_56163929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_190638826863f8700bed1ab4_56163929',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:views/erreur.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <form method="post" action="index.php?ctrl=offre&action=ajouterOffre">
            <div class="wrap-addJob">
            
                <div class="style" >
                  <label for="titre" >Titre de l'offre d'emploi</label>
                  <input type="text" id="titre" name="offre_titre" value="<?php if ($_smarty_tpl->tpl_vars['objOffre']->value->getTitre() != '') {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['objOffre']->value->getTitre(), ENT_QUOTES);
}?>"/>
                </div>
                <div class="style" >
                  <label for="description" >Description de l'offre</label>
                  <input type="text" id="description" name="offre_description" value="<?php if ($_smarty_tpl->tpl_vars['objOffre']->value->getDescription() != '') {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['objOffre']->value->getDescription(), ENT_QUOTES);
}?>"/>
                </div>

                <div class="style" >
                  <label for="salaire" >Salaire</label>
                  <input type="number" id="salaire" name="offre_salaire" value="<?php if ($_smarty_tpl->tpl_vars['objOffre']->value->getSalaire() != '') {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['objOffre']->value->getSalaire(), ENT_QUOTES);
}?>" />
                </div>
                <div class="style" >
                  <label for="siret">Numéro siret de l'entreprise</label>
                  <input type="text" id="siret" name="offre_siret" value="<?php if ($_smarty_tpl->tpl_vars['objOffre']->value->getSiret() != '') {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['objOffre']->value->getSiret(), ENT_QUOTES);
}?>"/>
                </div>
                <div class="style" >
                  <label for="lieu" >Lieu de l'offre d'emploi</label>
                  <input type="text" id="lieu" name="offre_adresse" value="<?php if ($_smarty_tpl->tpl_vars['objOffre']->value->getAdresse() != '') {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['objOffre']->value->getAdresse(), ENT_QUOTES);
}?>"/>
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
