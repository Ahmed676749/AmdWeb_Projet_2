<?php
/* Smarty version 4.2.1, created on 2023-02-22 15:33:03
  from 'C:\xampp\htdocs\amdweb\views\modifieroffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f6279fbbfea4_09818586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b82c6ded26347da5807d3edb0accdd0570067c84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amdweb\\views\\modifieroffre.tpl',
      1 => 1677076382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/erreur.tpl' => 1,
  ),
),false)) {
function content_63f6279fbbfea4_09818586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80789864963f6279fb74fa6_30055240', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_80789864963f6279fb74fa6_30055240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_80789864963f6279fb74fa6_30055240',
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
