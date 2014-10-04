<?php 

//include_once("../models/Meridien.class.php");
//include_once("../models/Pathologie.class.php");
include_once('serveur/config/dbConfig.php');

function getPathologies(){
	$bdd = getDB('filerouge');
	$res = null;

	try{

		$req = $bdd->prepare("SELECT * FROM `patho` WHERE 1");

		$req->execute();	

		$objreturn = $req->fetchAll();

		if( $objreturn ) {
			$res = $objreturn;
		} 
		return $res;
	}
	catch(PDOException $e){
		die('Erreur: '.$e->getMessage());
	}
}

function getSummary(){
	$bdd = getDB('filerouge');
	$res = null;

	try{

		$req = $bdd->prepare("SELECT patho.desc,symptome.desc, meridien.nom  FROM meridien,symptPatho, symptome, patho WHERE symptPatho.idS = symptome.idS AND symptPatho.idP = patho.idP AND meridien.code = patho.mer");

		$req->execute();	

		$objreturn = $req->fetchAll();

		if( $objreturn ) {
			$res = $objreturn;
		} 
		return $res;
	}
	catch(PDOException $e){
		die('Erreur: '.$e->getMessage());
	}
}

?>

