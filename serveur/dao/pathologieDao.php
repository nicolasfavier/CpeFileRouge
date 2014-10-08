<?php 

//include_once("../models/Meridien.class.php");
//include_once("../models/Pathologie.class.php");
include_once('serveur/config/dbConfig.php');


function getTbaleFromAutocomplete(){

	$keyWords = "";

	if(isset($_POST['keyWords']) ){
		$keyWords = trim($_POST['keyWords']);		
	}	

	return getResearchResultFromKeyWords($keyWords);
}
function getTbale(){

	$searchpatho = "";
	$searchsymptome = "";
	$searchmeridien = "";

	if(isset($_POST['searchpatho']) && isset($_POST['searchsymptome']) && isset($_POST['searchmeridien'])){
		$searchpatho = trim($_POST['searchpatho']);
		$searchsymptome = trim($_POST['searchsymptome']);
		$searchmeridien = trim($_POST['searchmeridien']);
	}	

	return getResearchResult( $searchpatho, $searchsymptome, $searchmeridien);
}

/*function getPathologies(){
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
}*/

function getResearchResult( $searchpatho, $searchsymptome, $searchmeridien){
	$bdd = getDB('filerouge');
	$res = null;

	try{

		$condition = "SELECT patho.desc,symptome.desc, meridien.nom  FROM meridien,symptPatho, symptome, patho WHERE symptPatho.idS = symptome.idS AND symptPatho.idP = patho.idP AND meridien.code = patho.mer";

		if (!empty($searchpatho)){
			$condition = $condition." AND patho.desc like '%" . $searchpatho."%'";
		}

		if (!empty($searchsymptome)){
			$condition = $condition." AND symptome.desc like '%" . $searchsymptome."%'";
		}

		if (!empty($searchmeridien)){
			$condition = $condition." AND meridien.nom like '%" . $searchmeridien."%'";
		}

		$req = $bdd->prepare($condition);

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


function getResearchResultFromKeyWords( $keyWords){
	$bdd = getDB('filerouge');
	$res = null;

	try{

		$condition = "SELECT patho.desc,symptome.desc, meridien.nom FROM keySympt,keywords,symptome, symptPatho,patho,meridien WHERE keywords.idK = keySympt.idK AND keywords.name like :keywords and symptome.idS = keySympt.idS and symptPatho.idS = symptome.idS AND symptPatho.idP = patho.idP AND meridien.code = patho.mer"; 

		$req = $bdd->prepare($condition);

		$req->execute(array(
		    'keywords' => "%".$keyWords."%"
		    ));	
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

