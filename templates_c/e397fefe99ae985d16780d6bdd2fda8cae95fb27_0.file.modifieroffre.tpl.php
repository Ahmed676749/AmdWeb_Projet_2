<?php
/* Smarty version 4.2.1, created on 2023-02-24 08:07:03
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\modifieroffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f87027b8f0b7_64525849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e397fefe99ae985d16780d6bdd2fda8cae95fb27' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\modifieroffre.tpl',
      1 => 1677225219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/erreur.tpl' => 1,
  ),
),false)) {
function content_63f87027b8f0b7_64525849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174447642263f87027b47717_37199016', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_174447642263f87027b47717_37199016 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_174447642263f87027b47717_37199016',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:views/erreur.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <form method="post" action="index.php?ctrl=offre&action=modifierOffre&idMod=<?php echo $_GET['idMod'];?>
">
            <div class="wrap-addJob">
                <div class="style" >
                  <label for="titre" >Titre de l'offre d'emploi</label>
                  <input type="text" id="titre" name="offre_titre" value="<?php if ($_smarty_tpl->tpl_vars['objModif']->value->getTitre() != '') {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['objModif']->value->getTitre(), ENT_QUOTES);
}?>"/>
                </div>
                <div class="style" >
                  <label for="description" >Description de l'offre</label>
                  <input type="text" id="description" name="offre_description" value="<?php if ($_smarty_tpl->tpl_vars['objModif']->value->getDescription() != '') {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['objModif']->value->getDescription(), ENT_QUOTES);
}?>"/>
                </div>

                <div class="style" >
                  <label for="salaire" >Salaire</label>
                  <input type="number" id="salaire" name="offre_salaire" value="<?php if ($_smarty_tpl->tpl_vars['objModif']->value->getSalaire() != '') {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['objModif']->value->getSalaire(), ENT_QUOTES);
}?>"/>
                </div>
                <div class="style" >
                  <label for="siret">Numéro siret de l'entreprise</label>
                  <input type="text" id="siret" name="offre_siret" value="<?php if ($_smarty_tpl->tpl_vars['objModif']->value->getSiret() != '') {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['objModif']->value->getSiret(), ENT_QUOTES);
}?>"/>
                </div>
                <div class="style" >
                  <label for="lieu" >Lieu de l'offre d'emploi</label>
                  <input type="text" id="lieu" name="offre_adresse" value="<?php if ($_smarty_tpl->tpl_vars['objModif']->value->getAdresse() != '') {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['objModif']->value->getAdresse(), ENT_QUOTES);
}?>"/>
                </div>
                <button class="btn-addJob style-button" type="submit">
                  Modifier
                </button>
            </div>
    </form>
<?php
}
}
/* {/block "content"} */
}
