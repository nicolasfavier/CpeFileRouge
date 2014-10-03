<?php 

include_once("../models/User.class.php");
include_once('../config/dbConfig.php');

function insertUser($user){

	$bdd = getDB('test');

	try{
		$req = $bdd->prepare("INSERT INTO user(email, password) VALUES (:email,:password)");
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
}

?>