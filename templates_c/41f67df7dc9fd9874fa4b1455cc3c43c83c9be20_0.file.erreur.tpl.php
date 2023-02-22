<?php
/* Smarty version 4.2.1, created on 2023-02-22 15:10:41
  from 'C:\xampp\htdocs\amdweb\views\erreur.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f62261801bb6_51712787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41f67df7dc9fd9874fa4b1455cc3c43c83c9be20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amdweb\\views\\erreur.tpl',
      1 => 1677070443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f62261801bb6_51712787 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['arrError']->value) > 0) {?>
	<div>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrError']->value, 'strError');
$_smarty_tpl->tpl_vars['strError']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['strError']->value) {
$_smarty_tpl->tpl_vars['strError']->do_else = false;
?>
		<p><?php echo $_smarty_tpl->tpl_vars['strError']->value;?>
</p>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
<?php }
}
}
