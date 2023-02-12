<?php
/* Smarty version 4.3.0, created on 2023-02-12 16:47:58
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e9183e670107_80922389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cd35767277d70b5d3967559650f108e4daf7903' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\inscription.tpl',
      1 => 1676220473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e9183e670107_80922389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194229947863e9183e61d316_07262104', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_194229947863e9183e61d316_07262104 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_194229947863e9183e61d316_07262104',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<!--Section inscription-->
	<section>
		<div class="wrapper-subscribe">

			<?php echo var_dump($_POST);?>



			<h1 class="style-h">Inscrivez vous</h1>
			<p class="text-presentation">
			Afin de déposer une offre d'emploi ou de postuler, vous devez vous inscire.
			<br />
			Oui, l'inscription est obligatoire comme sur tous les sites.
			</p>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrError']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
				<div class="alert alert-warning">
					Attention ! : <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			
			<div class="form-box">
				<form name="formAdd" method="post" action="index.php?ctrl=utilisateur&action=inscription" enctype="multipart/form-data">
					<div class="radio-btn">
					<p>Vous êtes :</p>
					<div class="wrap-radio">
						<input type="radio" id="recruiter" name="type" value="recruteur" <?php if (($_smarty_tpl->tpl_vars['objUserToAdd']->value->getType() == "recruteur")) {?> checked <?php }?> />
						<label for="recruiter">Recruteur</label>
					</div>
					<div class="wrap-radio">
						<input type="radio" id="candidate" name="type" value="candidat" <?php if (($_smarty_tpl->tpl_vars['objUserToAdd']->value->getType() == "candidat")) {?> checked <?php }?> />
						<label for="candidate">Candidat</label>
					</div>
					</div>
					<div class="style">
						<label for="name">Nom *</label>
						<input type="text" id="name" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['objUserToAdd']->value->getNom();?>
" />
					</div>
					<div class="style">
						<label for="firstName">Prénom *</label>
						<input type="text" id="firstName" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['objUserToAdd']->value->getPrenom();?>
" />
					</div>
					<div class="style">
						<label for="address">Adresse</label>
						<input type="text" id="address" name="adresse" value="<?php echo $_smarty_tpl->tpl_vars['objUserToAdd']->value->getAdresse();?>
"/>
					</div>
					<div class="style">
						<label for="email">Email *</label>
						<input type="email" id="email" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['objUserToAdd']->value->getMail();?>
"/>
					</div>
					<div class="style">
						<label for="password">Mot de passe *</label>
						<input type="password" id="password" name="mdp" value=""/>
					</div>
					<p>* Champ obligatoire</p>
					<button class="btn-subscribe style-button" type="submit">S'incrire</button>
				</form>
			</div>
		</div>
	</section>
</main>
<?php
}
}
/* {/block "content"} */
}
