<?php
/* Smarty version 4.2.1, created on 2023-02-03 10:45:27
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\ajouteroffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63dce5c7948ca1_64338208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80b5d194b3aae3df263a91304e8855a89cd45f5f' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\ajouteroffre.tpl',
      1 => 1675421124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dce5c7948ca1_64338208 (Smarty_Internal_Template $_smarty_tpl) {
?><article>
	
	<div>
		<h3><?php echo $_smarty_tpl->tpl_vars['objOffre']->value->getOffreTitre();?>
 - 
			<span class="addDate">
			<?php echo $_smarty_tpl->tpl_vars['objOffre']->value->getOffreDateCreation();?>

			</span>
			<span class="creator"> (<?php echo $_smarty_tpl->tpl_vars['objOffre']->value->getOffreAdresse();?>
)</span>
		</h3>
		<p class="content"><?php echo $_smarty_tpl->tpl_vars['objOffre']->value->getContent();?>
</p>
	</div>
</article><?php }
}
