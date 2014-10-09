<?php 

include_once("../models/KeyWords.class.php");
include_once('../config/dbConfig.php');

function getKeyWords($search){
	$res = null;
	$bdd = getDB('filerouge');

	try{
		if($search == null)
			$req = $bdd->prepare("SELECT * FROM keywords");
		else
			$req = $bdd->prepare("SELECT * FROM keywords WHERE keywords.name like :search");

		
		$req->execute(array(
		    'search' => "%".$search."%"
		    ));	

		$objreturn = $req->fetchAll();

		if( $objreturn ) {
		  	$res = $objreturn;
			return $res;		  
		} 
		return $res;
	}
	catch(PDOException $e){
		die('Erreur: '.$e->getMessage());
	}
}

?>