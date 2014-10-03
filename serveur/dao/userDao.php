<?php 

include_once("../models/User.class.php");
include_once('../config/dbConfig.php');

function insertUser($user){

	$bdd = getDB('filerouge');

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
	$bdd = getDB('filerouge');

	try{
		$req = $bdd->prepare("SELECT * FROM users WHERE email= :theuser AND password= :thepassword");

		$req->execute(array(
		    'theuser' => $user->getEmail(),
		    'thepassword' => $user->getPassword()
		    ));	

		if ($req->fetch() == false)
	    {
	        echo "n existe pas";
	    }
	    else
	    {
	        echo "existe";
	    }
	}
	catch(PDOException $e){
		die('Erreur: '.$e->getMessage());
	}
}

?>