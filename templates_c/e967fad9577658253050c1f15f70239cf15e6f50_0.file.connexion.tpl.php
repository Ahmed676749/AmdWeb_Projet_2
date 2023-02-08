<?php
/* Smarty version 4.3.0, created on 2023-02-08 16:38:39
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e3d00f002e92_21929974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e967fad9577658253050c1f15f70239cf15e6f50' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\connexion.tpl',
      1 => 1675864006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e3d00f002e92_21929974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6791184263e3d00f001587_57100975', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_6791184263e3d00f001587_57100975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6791184263e3d00f001587_57100975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
    <!--Section connexion-->
    <section>
        <div class="wrapper-subscribe">
            <h1 class="style-h">Connexion</h1>
            <p class="text-presentation">
                Vous n'avez de compte? &ensp;
                <a href="index.php?ctrl=utilisateur&action=inscription"> Inscrivez-vous!</a>
            </p>

            <div class="style">
                <label for="email">Email</label>
                <input type="email" id="email" />
            </div>

            <div class="style">
                <label for="passWord">Mot de passe</label>
                <input type="password" id="passWord" />
            </div>

            <div class="wrap-btn-connexion">
            <button class="btn-subscribe style-button" type="submit">Connexion</button>
            </div>
        </div>
    </section>
</main>
<?php
}
}
/* {/block "content"} */
}
