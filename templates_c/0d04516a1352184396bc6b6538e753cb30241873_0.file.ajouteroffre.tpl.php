<?php
/* Smarty version 4.2.1, created on 2023-02-04 17:50:17
  from 'C:\xampp\htdocs\AmdWeb-Projet-Dynamique-PHP-2023\views\ajouteroffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63de8cc9e79da1_32446277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d04516a1352184396bc6b6538e753cb30241873' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AmdWeb-Projet-Dynamique-PHP-2023\\views\\ajouteroffre.tpl',
      1 => 1675529413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63de8cc9e79da1_32446277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <form method="post">
            <div class="wrap-addJob">
                <div class="style" >
                  <label for="titre" >Titre de l'offre d'emploi</label>
                  <input type="text" id="titre" name="offreTitre" value="<?php echo $_smarty_tpl->tpl_vars['strTitre']->value;?>
"/>
                </div>
                <div class="style" >
                  <label for="description" >Description de l'offre</label>
                  <input type="text" id="description" name="offreDescription" value=" <?php echo $_smarty_tpl->tpl_vars['strDescription']->value;?>
"/>
                </div>

                <div class="style" >
                  <label for="salaire" >Salaire</label>
                  <input type="number" id="salaire" name="offreSalaire" value="<?php echo $_smarty_tpl->tpl_vars['strSalaire']->value;?>
"/>
                </div>
                <div class="style" >
                  <label for="siret">Numéro siret de l'entreprise</label>
                  <input type="text" id="siret" name="offreSiret"  value="<?php echo $_smarty_tpl->tpl_vars['strSiret']->value;?>
"/>
                </div>
                <div class="style" >
                  <label for="lieu" >Lieu de l'offre d'emploi</label>
                  <input type="text" id="lieu" name="offreLieu" value="<?php echo $_smarty_tpl->tpl_vars['strLieu']->value;?>
"/>
                </div>
                <button class="btn-addJob style-button" type="submit">
                  Ajouter
                </button>
            </div>
    </form>

    <article>
	
	<div>
		<h3><?php echo $_smarty_tpl->tpl_vars['objOffre']->value->getTitre();?>

			<span class="addDate">
			
			</span>
			
		</h3>
		<p class="content"><?php echo $_smarty_tpl->tpl_vars['objOffre']->value->getContent();?>
</p>
	</div>
</article>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
