<?php
/* Smarty version 4.2.1, created on 2023-02-19 10:30:43
  from 'C:\xampp\htdocs\amdweb\views\ajoutercategorie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f1ec43f3eb15_80510881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54a5c74dc59f624fb3fc8b1c4b983ed27489befd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amdweb\\views\\ajoutercategorie.tpl',
      1 => 1676798165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f1ec43f3eb15_80510881 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151150902563f1ec43f3d258_72130565', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_151150902563f1ec43f3d258_72130565 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_151150902563f1ec43f3d258_72130565',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form method="post" action="index.php?ctrl=categorie&action=ajouterCategorie">
            <div class="wrap-addJob">
                <div class="style" >
                  <label for="categorie" >Nom de la catégorie</label>
                  <input type="text" id="categorie" name="categorie_nom"/>
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
