<?php
session_start();		// Session sur toutes les pages

	$boolError404 = false;

	require('controllers/base_controller.php');

	$strCtrl 	= $_GET['ctrl']??"page";
	$strAction 	= $_GET['action']??"accueil";
	
	// inclure le fichier qui contient la classe
	$strFile = "controllers/".$strCtrl."_controller.php";
	if (file_exists($strFile)){ 						// Si le fichier du controller existe
		require($strFile);
		// instancie un objet
		$strClassName 	= ucfirst($strCtrl)."_controller";
		$objCtrl 		= new $strClassName;
		// appel à la méthode
		$strMethodName	= $strAction;
		if (method_exists($objCtrl, $strMethodName)){ 	// Si la méthode existe dans le controller 
			$objCtrl->$strMethodName();
		}else{
			$boolError404 = true;
		}
	}else{
		$boolError404 = true;
	}
	
	if ($boolError404){
		require("controllers/error_controller.php");
		$objCtrl = new Error_controller;
		$objCtrl->error_404();
	}
	