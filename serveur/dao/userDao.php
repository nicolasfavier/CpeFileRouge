<?php 

include_once("../models/User.class.php");
include_once('../config/dbConfig.php');

function insertUser($user){

	$bdd = getDB('test');

	try{
		$req = $bdd->prepare("INSERTd INTO user(email, password) VALUES (:email,:password)");
		$req->execute(array(
		    'email' => $user->getEmail(),
		    'password' => $user->getPassword()
		    ));	
		$rows = $req->fetch(PDO::FETCH_NUM);
		echo "coucou ".$rows;
	}
	catch(PDOException $e){
		die('Erreur: '.$e->getMessage());
		echo "erreurr";
	}

}

function getUser($user){
//DB get
}

?>