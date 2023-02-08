<?php
/* Smarty version 4.3.0, created on 2023-02-08 15:28:58
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e3bfba12c6e8_05366696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cd35767277d70b5d3967559650f108e4daf7903' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\inscription.tpl',
      1 => 1675870131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e3bfba12c6e8_05366696 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104153573263e3bfba09fac2_30155017', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_104153573263e3bfba09fac2_30155017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_104153573263e3bfba09fac2_30155017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<!--Section inscription-->
	<section>
		<div class="wrapper-subscribe">
			<h1 class="style-h">Inscrivez vous</h1>
			<p class="text-presentation">
			Afin de déposer une offre d'emploi ou de postuler, vous devez vous inscire.
			<br />
			Oui, l'inscription est obligatoire comme sur tous les sites.
			</p>

			<?php echo var_dump($_POST);?>



			<div class="form-box">
				<form name="formAdd" method="post" action="#" enctype="multipart/form-data">
					<div class="radio-btn">
					<p>Vous êtes :</p>
					<div class="wrap-radio">
						<input type="radio" id="recruiter" name="type" value="recruteur" <?php if (($_smarty_tpl->tpl_vars['strUserType']->value == "recruteur")) {?> checked <?php }?> />
						<label for="recruiter">Recruteur</label>
					</div>
					<div class="wrap-radio">
						<input type="radio" id="candidate" name="type" value="candidat" <?php if (($_smarty_tpl->tpl_vars['strUserType']->value == "candidat")) {?> checked <?php }?> />
						<label for="candidate">Candidat</label>
					</div>
					</div>
					<div class="style">
						<label for="name">Nom</label>
						<input type="text" id="name" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['strName']->value;?>
" />
					</div>
					<div class="style">
						<label for="firstName">Prénom</label>
						<input type="text" id="firstName" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['strFirstname']->value;?>
" />
					</div>
					<div class="style">
						<label for="address">Adresse</label>
						<input type="text" id="address" name="adresse" value="<?php echo $_smarty_tpl->tpl_vars['strAddress']->value;?>
"/>
					</div>
					<div class="style">
						<label for="email">Email</label>
						<input type="email" id="email" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['strMail']->value;?>
"/>
					</div>
					<div class="style">
						<label for="password">Mot de passe</label>
						<input type="password" id="password" name="mdp" value="<?php echo $_smarty_tpl->tpl_vars['strPassword']->value;?>
"/>
					</div>
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
