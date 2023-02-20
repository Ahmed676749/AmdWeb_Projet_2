<?php
/* Smarty version 4.2.1, created on 2023-02-19 10:30:10
  from 'C:\xampp\htdocs\amdweb\views\modifieroffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f1ec221557c4_15758059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b82c6ded26347da5807d3edb0accdd0570067c84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amdweb\\views\\modifieroffre.tpl',
      1 => 1676608927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f1ec221557c4_15758059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14652009163f1ec220edf64_75833298', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_14652009163f1ec220edf64_75833298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14652009163f1ec220edf64_75833298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form method="post" action="index.php?ctrl=offre&action=modifierOffre&idMod=<?php echo $_GET['idMod'];?>
">
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
                  Modifier
                </button>
            </div>
    </form>
<?php
}
}
/* {/block "content"} */
}
