<?php
/* Smarty version 4.2.1, created on 2023-02-21 15:33:53
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\erreur.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f4e4616933e8_94082595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8d2d74c2b13fcd2346177c3ea9ed7a9c84d1c07' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\erreur.tpl',
      1 => 1676991789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f4e4616933e8_94082595 (Smarty_Internal_Template $_smarty_tpl) {
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
