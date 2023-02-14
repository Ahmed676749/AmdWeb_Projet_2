<?php
/* Smarty version 4.2.1, created on 2023-02-14 21:55:12
  from 'C:\xampp\htdocs\amdweb\views\galerie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63ebf530606796_33357586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ac7a819cfd446df17d285ce34619c5023130b87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amdweb\\views\\galerie.tpl',
      1 => 1676400715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ebf530606796_33357586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50538242063ebf5304fc901_08220249', "content");
?>

    
      <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_50538242063ebf5304fc901_08220249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_50538242063ebf5304fc901_08220249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <main class="gallery-box">
                <div class="formImage">
        <form action="#" method="post" enctype="multipart/form-data">
            <label for="photo">Selectionnez une image</label>
            <input type="file" name="photo_nom" id="photo">
            <label for="ut">utilisateur</label>
            <input type="text" name="photo_utilisateur_id" id="ut">
            <button class="btn-addPhoto style-button" type="submit">Ajouter</button>
        </form>
        <div>
          <img alt="image" src="assets/images/img_first_page/<?php echo $_smarty_tpl->tpl_vars['objPhoto']->value->getNom();?>
">
        </div>
        </div>
      </main>
    <?php
}
}
/* {/block "content"} */
}
