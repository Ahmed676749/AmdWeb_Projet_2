<?php
/* Smarty version 4.2.1, created on 2023-02-06 06:04:38
  from 'C:\xampp\htdocs\amdweb\views\detailsemploi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e08a667d20b6_97452180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d92f2df2cd15b7f5ea3a4e010fe9fd70c372f15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amdweb\\views\\detailsemploi.tpl',
      1 => 1675659795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e08a667d20b6_97452180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109525762363e08a6679c816_26862531', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_109525762363e08a6679c816_26862531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_109525762363e08a6679c816_26862531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
      <main>
        <!--Section description-->
        <section class="description">
          <h1 class="style-h"></h1>
          <div class="wrapper-details">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrAfficheUneOffre']->value, 'objUneAfOffre');
$_smarty_tpl->tpl_vars['objUneAfOffre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objUneAfOffre']->value) {
$_smarty_tpl->tpl_vars['objUneAfOffre']->do_else = false;
?>
            <div class="left-box card-job">
              <p <?php echo $_smarty_tpl->tpl_vars['objUneAOffre']->value->{$_smarty_tpl->tpl_vars['strSelected']->value};?>
><?php echo $_smarty_tpl->tpl_vars['objUneAfOffre']->value->getTitre();?>
</p>
              <p>Salaire: 2500 &euro; / mois</p>
            </div>
            <div class="right-box card-job">
              <p>Description :</p>
              <p>
                Venez nous rejoindre dans un grand loft avec une Play-Station,
                mario kart et une ambiance convivial. Nous cherchons un
                développeur à part entière de l'équipe. Nous développons une IA
                et avons besoin d'un développeur front pour nous soulager dans
                le développement des maquettes. Nous sommes plus impressionnés
                par les projets personnels réalisés que par votre niveau
                d'étude.
              </p>
              <p>
                Type d'emploi : Temps plein, CDI
                <br />
                Salaire : 2500 / mois
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
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </section>
      </main>
   
    <?php
}
}
/* {/block "content"} */
}
