<?php
/* Smarty version 4.2.1, created on 2023-02-19 11:03:00
  from 'C:\xampp\htdocs\amdweb\views\galerie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f1f3d483b429_37779328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ac7a819cfd446df17d285ce34619c5023130b87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amdweb\\views\\galerie.tpl',
      1 => 1676800971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f1f3d483b429_37779328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55308815463f1f3d482b414_34997069', "content");
?>

          <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_55308815463f1f3d482b414_34997069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_55308815463f1f3d482b414_34997069',
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
              <a href="index.php?ctrl=photo&action=supprimerPhoto&idSupPhoto=62&delete=1" class="btn-addJob style-button" >
                  Supprimer
              </a>
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
