<?php
/* Smarty version 4.2.1, created on 2023-02-17 05:25:20
  from 'C:\xampp\htdocs\amdweb\views\emploi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63ef01b0abf9f3_57997137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df603b773b60ea8a144344e26129df5445789c86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amdweb\\views\\emploi.tpl',
      1 => 1676607917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ef01b0abf9f3_57997137 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142440135163ef01b0a963b0_07354389', "content");
?>

      <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_142440135163ef01b0a963b0_07354389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_142440135163ef01b0a963b0_07354389',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!--Section cartes emplois-->
      <section class="job-section-list">
        <h1 class="style-h">Les offres d'emplois</h1>
        <p class="text-presentation">
          Comme promis, vous n'allez pas être deçu. Retrouvez toutes les offres
          d'emplois sur cette page!
        </p>
        <div class="wrapper-layer">  
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrOffreAffichage']->value, 'objOffreDet');
$_smarty_tpl->tpl_vars['objOffreDet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objOffreDet']->value) {
$_smarty_tpl->tpl_vars['objOffreDet']->do_else = false;
?>
            <a href="index.php?ctrl=offre&action=afficherOffre&id=<?php echo $_smarty_tpl->tpl_vars['objOffreDet']->value->getId();?>
" class="card-job">
              <h3 {}><?php echo $_smarty_tpl->tpl_vars['objOffreDet']->value->getTitre();?>
</h3>
              <address><?php echo $_smarty_tpl->tpl_vars['objOffreDet']->value->getAdresse();?>
</address>
              <p>Salaire: <?php echo $_smarty_tpl->tpl_vars['objOffreDet']->value->getSalaire();?>
 &euro; / mois</p>
            </a>
            <a href="index.php?ctrl=offre&action=modifierOffre&idMod=<?php echo $_smarty_tpl->tpl_vars['objOffreDet']->value->getId();?>
" class="btn-addJob style-button" >
                  Modifier
            </a>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
        </div>
  </section>
  <?php
}
}
/* {/block "content"} */
}
