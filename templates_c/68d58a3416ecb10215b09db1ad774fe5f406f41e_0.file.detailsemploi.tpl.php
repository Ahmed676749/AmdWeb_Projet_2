<?php
/* Smarty version 4.2.1, created on 2023-02-10 08:18:20
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\detailsemploi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e5fdcc7352f0_58507558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68d58a3416ecb10215b09db1ad774fe5f406f41e' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\detailsemploi.tpl',
      1 => 1676015805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e5fdcc7352f0_58507558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191826484063e5fdcc72f958_93602662', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_191826484063e5fdcc72f958_93602662 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_191826484063e5fdcc72f958_93602662',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
      <main>
        <!--Section description-->
        <section class="description">
          <h1 class="style-h"></h1>
          <div class="wrapper-details">
          
            
            <div class="left-box card-job">
              <p><?php echo $_smarty_tpl->tpl_vars['uneOffre']->value->getTitre();?>
</p>
              <p>Salaire: <?php echo $_smarty_tpl->tpl_vars['uneOffre']->value->getSalaire();?>
 &euro; / mois</p>
            </div>
            <div class="right-box card-job">
              <p>Description :</p>
              <p>
              <?php echo $_smarty_tpl->tpl_vars['uneOffre']->value->getDescription();?>

              </p>
              <p>
                Type d'emploi : Temps plein, CDI
                <br />
               
              </p>
              <p>
                Avantages :
                <br />
                Horaires flexibles participation au transport
                <br />
                Date de début prévue : 19/09/2038
              </p>
              <p>
                Qualifications:
                <br />
                Technologies de l'information: 1 an
                <br />
                Développement web: 1 an
                <br />
                HTML5: 1 an
              </p>
              <button class="style-button" type="submit">POSTULEZ</button>
            </div>
         
          </div>
        </section>
      </main>
   
    <?php
}
}
/* {/block "content"} */
}
