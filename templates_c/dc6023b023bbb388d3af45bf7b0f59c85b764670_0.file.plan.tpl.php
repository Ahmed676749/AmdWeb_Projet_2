<?php
/* Smarty version 4.3.0, created on 2023-02-08 13:48:40
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\plan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e3a8381c9ea6_52757428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc6023b023bbb388d3af45bf7b0f59c85b764670' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\plan.tpl',
      1 => 1675863738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e3a8381c9ea6_52757428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132711960563e3a8381c7b72_42431002', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_132711960563e3a8381c7b72_42431002 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_132711960563e3a8381c7b72_42431002',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<main>
		<!--Section plan du site-->
		<div class="wrapper-list">
			<h1 class="style-h">Plan du site</h1>
			<ul>
				<li>
					<a href="index.php" class="welcome">Accueil</a>
				</li>
				<li>
					<a href="index.php?ctrl=page&action=emploi">Emploi</a>
				</li>
				<li>
					<a href="../job/details-emploi.php" class="details">Détails de l'offre d'emploi</a>
				</li>
				<li>
					<a href="index.php?ctrl=utilisateur&action=inscription">Inscription</a>
				</li>
				<li>
					<a href="index.php?ctrl=utilisateur&action=connexion">Connexion</a>
				</li>
				<li>
					<a href="index.php?ctrl=page&action=galerie">Galerie</a>
				</li>
				<li>
					<a href="index.php?ctrl=page&action=mentions">Mentions légales</a>
				</li>
				<li>
					<a href="index.php?ctrl=page&action=plan">Plan du site</a>
				</li>
			</ul>
		</div>
	</main>
</div>
<?php
}
}
/* {/block "content"} */
}
