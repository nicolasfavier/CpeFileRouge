<?php

	if (isset($_GET['action'])) {
		include('../models/Connexion.class.php');
		include('../models/User.class.php');

		if($_GET['action'] == "createUser"){createUser();}			
	}
	else{}

	function createUser(){
		$connexion = new Connexion();
		$db = $connexion->getDB('test');

		$email = $_POST['inputEmail'];
		$password = $_POST['inputPassword'];


		if(verifyUserInput($email,$password)){
			$user = new User();
			$user->setEmail($email);
			$user->setPassword($password);	

			
		}
		else{}			
	}

	function verifyUserInput($email, $password){
		// check le mail et password
		return true;
	}
?>