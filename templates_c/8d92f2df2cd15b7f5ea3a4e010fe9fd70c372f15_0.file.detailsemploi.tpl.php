<?php
/* Smarty version 4.2.1, created on 2023-02-06 21:55:32
  from 'C:\xampp\htdocs\amdweb\views\detailsemploi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e16944ad2a33_44630522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d92f2df2cd15b7f5ea3a4e010fe9fd70c372f15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amdweb\\views\\detailsemploi.tpl',
      1 => 1675716900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e16944ad2a33_44630522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119925173863e16944ac0498_29637668', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_119925173863e16944ac0498_29637668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_119925173863e16944ac0498_29637668',
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
