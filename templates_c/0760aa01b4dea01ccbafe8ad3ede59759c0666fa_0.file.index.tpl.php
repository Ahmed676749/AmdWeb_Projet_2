<?php
/* Smarty version 4.3.0, created on 2023-02-10 14:59:51
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e65be7a4bbd8_82281618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0760aa01b4dea01ccbafe8ad3ede59759c0666fa' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\index.tpl',
      1 => 1675953508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e65be7a4bbd8_82281618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152271516963e65be7a4aa35_99325300', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_152271516963e65be7a4aa35_99325300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_152271516963e65be7a4aa35_99325300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<!--Section barre de recherche-->
		<div class="search-box">
			<form>
				<label for="search-bar"></label>
				<input id="search-bar" type="text" placeholder="Recherche par mots-clés" />
			</form>
			<button class="style-button" type="submit">Trouver</button>
		</div>
		
		</div>
		<!--Section de présentation-->
		<section class="presentation-section">
			<h1 class="style-h">
				Des opportunités dans le web avec <strong>AmdWeb</strong>
			</h1>
			<div class="text-presentation">
				<p>
					AmdWeb est un site internet qui propose des offres d'emplois dans le
					domaine de l'informatique. En tant que futur développeur, j'ai tenu
					a réalisé ce genre de site pour permettre à l'utilisateur de trouver
					un emploi autrement que par le bouche à oreille.
					<br />
					En me basant sur ma petite expérience personnelle de rechercheur
					d'emplois, dans le domaine de l'informatique, j'ai pu constaté un
					manque d'offres d'emplois qui soient visible sur internet en
					général.
					<br />
					La plupart des informaticiens ont un compte Linkedin et c'est par ce
					biais qu'ils décrochent un emploi.
				</p>
				<p>
					Pour ceux qui ne souhaitent pas s'inscrire sur Linkedin, je propose
					mon site, <a href="index.php">AmdWeb</a> en alternative à votre
					recherche d'emplois.
					<br />
					Bonne recherche sur mon site, n'hésitez pas à laisser un avis sur
					Google!
					<br />
					Vous êtes certainement des utilisateurs aguerris, vos remarques me
					seront très utiles pour le développement de mon site.
				</p>
			</div>
		</section>

		<!--Section photos-->
		<div class="wrap-section">
			<div class="inscription-section">
				<h2 class="style-h">Inscription pour les offres d'emplois.</h2>
				<div class="btn-link-wrap style-button">
					<a href="index.php?ctrl=utilisateur&action=inscription"> Inscription </a>
				</div>
			</div>

			<div class="announcement-section">
				<h2 class="style-h">Déposer vos offres d'emplois.</h2>
				<div class="btn-link-wrap style-button">
					<a href="#">Déposez</a>
				</div>
			</div>
		</div>
<?php
}
}
/* {/block "content"} */
}
