<?php
/* Smarty version 4.2.1, created on 2023-02-03 10:51:28
  from 'C:\wamp64\www\AmdWeb_Projet_2\views\ajouter-offre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63dce73004fa48_14287836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '180f4f42edea40b550b333336c277f980f2fe802' => 
    array (
      0 => 'C:\\wamp64\\www\\AmdWeb_Projet_2\\views\\ajouter-offre.tpl',
      1 => 1675421483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dce73004fa48_14287836 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>

  $strTitle = "Ajouter une offre d'emploi";
  $strPage = "ajouter-offre";
  include("../../controllers/connect.php");
  include("../../views/header.php");
  require("../../entities/offre_entity");
  
   

 
    // $strAjouterNouvelleOffre = new Offre();


    
   
    // $strOffreTitre = $_POST["offreTitre"]??"";
    // $strOffreDescription = $_POST["offreDescription"]??"";
    // $strOffreSalaire = $_POST["offreSalaire"]??"";
    // $strOffreSiret = $_POST["offreSiret"]??"";
    // $strOffreLieu = $_POST["offreLieu"]??"";
  
    // $objAjouter = new Offre();
    // $objAjouter->setOffreTitre($strOffreTitre);
        
    

    // $strRq = "INSERT INTO offre (offre_titre, offre_description, offre_salaire, offre_siret, offre_adresse)
    //           VALUES ('".$strOffreTitre."', '".$strOffreDescription."', '".$strOffreSalaire."', '".$strOffreSiret."', '".$strOffreLieu."')"; 

    //    $arrAddJob = $db->exec($strRq);
        
       
    

   



  
    
    
   



 



  <?php echo '?>'; ?>

    <form method="post">
            <div class="wrap-addJob">
                <div class="style" >
                  <label for="titre" >Titre de l'offre d'emploi</label>
                  <input type="text" id="titre" name="offreTitre" value="<?php echo '<?php'; ?>
 echo $strOffreTitre; <?php echo '?>'; ?>
"/>
                </div>
                <!-- <div class="style">
                  <label for="firstName"></label>
                  <input type="text" id="firstName" />
                </div> -->
                <div class="style" >
                  <label for="description" >Description de l'offre</label>
                  <input type="text" id="description" name="offreDescription" value="<?php echo '<?php'; ?>
 echo $strOffreDescription; <?php echo '?>'; ?>
"/>
                </div>

                <div class="style" >
                  <label for="salaire" >Salaire</label>
                  <input type="number" id="salaire" name="offreSalaire" value="<?php echo '<?php'; ?>
 echo $strOffreSalaire; <?php echo '?>'; ?>
"/>
                </div>
                <div class="style" >
                  <label for="siret">Numéro siret de l'entreprise</label>
                  <input type="text" id="siret" name="offreSiret"  value="<?php echo '<?php'; ?>
 echo $strOffreSiret; <?php echo '?>'; ?>
"/>
                </div>
                <div class="style" >
                  <label for="lieu" >Lieu de l'offre d'emploi</label>
                  <input type="text" id="lieu" name="offreLieu" value="<?php echo '<?php'; ?>
 echo $strOffreLieu; <?php echo '?>'; ?>
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
 - 
			<span class="addDate">
			
			</span>
			
		</h3>
		<p class="content"><?php echo $_smarty_tpl->tpl_vars['objOffre']->value->getContent();?>
</p>
	</div>
</article>

<?php echo '<?php'; ?>
 include("../../views/footer.php") <?php echo '?>';
}
}
