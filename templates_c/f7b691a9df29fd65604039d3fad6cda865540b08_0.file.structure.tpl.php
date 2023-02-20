<?php
/* Smarty version 4.2.1, created on 2023-02-19 10:23:20
  from 'C:\xampp\htdocs\amdweb\views\structure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f1ea88d10b64_93425446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7b691a9df29fd65604039d3fad6cda865540b08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amdweb\\views\\structure.tpl',
      1 => 1675537960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/header.tpl' => 1,
    'file:views/footer.tpl' => 1,
  ),
),false)) {
function content_63f1ea88d10b64_93425446 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:views/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155133144463f1ea88d0dc98_36151080', "content");
?>


<?php $_smarty_tpl->_subTemplateRender("file:views/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_155133144463f1ea88d0dc98_36151080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_155133144463f1ea88d0dc98_36151080',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
<?php
}
}
/* {/block "content"} */
}
