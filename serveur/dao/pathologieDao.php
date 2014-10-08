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
	$searchtype = "";
	$searchmeridien = "";

	if(isset($_POST['searchpatho']) && isset($_POST['searchtype']) && isset($_POST['searchmeridien'])){
		$searchpatho = trim($_POST['searchpatho']);
		$searchtype = trim($_POST['searchtype']);
		$searchmeridien = trim($_POST['searchmeridien']);
	}	

	return getResearchResult( $searchpatho, $searchtype, $searchmeridien);
}

function getResearchResult( $searchpatho, $searchtype, $searchmeridien){
	$bdd = getDB('filerouge');
	$res = null;

	try{

		$condition = "SELECT patho.desc, patho.type, meridien.nom, patho.idP  FROM meridien, patho WHERE meridien.code = patho.mer";

		if (!empty($searchpatho)){
			$condition = $condition." AND patho.desc like '%" . $searchpatho."%'";
		}

		if (!empty($searchtype)){
			$condition = $condition." AND patho.type like '%" . $searchtype."%'";
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

		$condition = "SELECT patho.desc,patho.type, meridien.nom,  patho.idP FROM keySympt,keywords,symptome, symptPatho,patho,meridien WHERE keywords.idK = keySympt.idK AND keywords.name like :keywords and symptome.idS = keySympt.idS and symptPatho.idS = symptome.idS AND symptPatho.idP = patho.idP AND meridien.code = patho.mer"; 

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



function findPathoSymptome( $idP){
	$bdd = getDB('filerouge');
	$res = null;

	try{

		$condition = "SELECT symptome.desc FROM symptPatho, symptome WHERE symptPatho.idP  =$idP and  symptome.idS  = symptPatho.idS";

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
?>

