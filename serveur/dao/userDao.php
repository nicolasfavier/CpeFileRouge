<?php 

include_once("../models/User.class.php");
include_once('../config/dbConfig.php');

function insertUser($user){

	$bdd = getDB('filerouge');

	try{
		$req = $bdd->prepare("INSERT INTO users(email, password) VALUES (:email,:password)");
		$req->execute(array(
		    'email' => $user->getEmail(),
		    'password' => $user->getPassword()
		    ));	
	}
	catch(PDOException $e){
		die('Erreur: '.$e->getMessage());
	}

}

function getUser($user){
//DB get
	$res = null;
	$bdd = getDB('filerouge');

	try{
		$req = $bdd->prepare("SELECT * FROM users WHERE email= :theuser AND password= :thepassword");

		$req->execute(array(
		    'theuser' => $user->getEmail(),
		    'thepassword' => $user->getPassword()
		    ));	

		$objreturn = $req->fetch();

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