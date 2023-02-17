<?php
/* Smarty version 4.2.1, created on 2023-02-17 14:49:06
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\ajoutercategorie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63ef93e2156d38_84652103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b341cc2e505af81f27546e76c1659dd9aff1d73' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\ajoutercategorie.tpl',
      1 => 1676640657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ef93e2156d38_84652103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125822276263ef93e2155954_48198755', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_125822276263ef93e2155954_48198755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_125822276263ef93e2155954_48198755',
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
