<?php
/* Smarty version 4.3.0, created on 2023-02-09 14:51:47
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\galerie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e508834b3c86_99543014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80eff5dab26aaaec8202e5792704c199f9a5e88e' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\galerie.tpl',
      1 => 1675953629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e508834b3c86_99543014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110960692663e508834b2b41_77941102', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_110960692663e508834b2b41_77941102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_110960692663e508834b2b41_77941102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main class="gallery-box">
        <h1 class="style-h">Galerie photos</h1>
        <p class="text-presentation">
        Voici quelques très jolie photographies pour vous mettre dans
        l'ambiance.
        </p>
        <!--Section Bootstrap galerie photos-->
        <div
        id="carouselExampleControls"
        class="carousel slide"
        data-bs-ride="carousel"
        >
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img
                src="assets/images/img_first_page/img-2.jpg"
                class="d-block w-100"
                alt="..."
            />
            </div>
            <div class="carousel-item">
            <img
                src="assets/images/img_first_page/img-1.jpg"
                class="d-block w-100"
                alt="..."
            />
            </div>
            <div class="carousel-item">
            <img
                src="assets/images/img_first_page/demandeur-emploi-bureau.jpeg"
                class="d-block w-100"
                alt="..."
            />
            </div>
            <div class="carousel-item">
            <img
                src="assets/images/img_first_page/demandeur-emploi.jpg"
                class="d-block w-100"
                alt="..."
            />
            </div>
            <div class="carousel-item">
            <img
                src="assets/images/img_first_page/recruteur.jpg"
                class="d-block w-100"
                alt="..."
            />
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </main>
<?php
}
}
/* {/block "content"} */
}
