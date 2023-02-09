<?php

	require('controllers/base_controller.php');

	$strCtrl 	= $_GET['ctrl']??"page";
	$strAction 	= $_GET['action']??"accueil";
	
	// inclure le fichier qui contient la classe
	require("controllers/".$strCtrl."_controller.php");
	// instancie un objet
	$strClassName 	= $strCtrl."_controller";
	$objCtrl 		= new $strClassName;
	// appel à la méthode
	$strMethodName	= $strAction;
	$objCtrl->$strMethodName();
	