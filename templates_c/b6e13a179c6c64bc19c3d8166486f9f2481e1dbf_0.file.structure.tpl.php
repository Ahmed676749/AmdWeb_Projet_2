<?php
/* Smarty version 4.3.0, created on 2023-02-08 13:39:52
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\structure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e3a628f01513_50824743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6e13a179c6c64bc19c3d8166486f9f2481e1dbf' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\structure.tpl',
      1 => 1675856368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/header.tpl' => 1,
    'file:views/footer.tpl' => 1,
  ),
),false)) {
function content_63e3a628f01513_50824743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:views/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40686359963e3a628eff182_37502282', "content");
?>


<?php $_smarty_tpl->_subTemplateRender("file:views/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_40686359963e3a628eff182_37502282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_40686359963e3a628eff182_37502282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
<?php
}
}
/* {/block "content"} */
}
