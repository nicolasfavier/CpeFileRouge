<?php

	if (isset($_GET['action'])) {
		include_once('../models/User.class.php');
		include_once("../dao/userDao.php");

		if($_GET['action'] == "createUser"){
			$user = createUser();			
			insertUser($user);
			
			header('Location: ../../home.php');  
		}	
		if($_GET['action'] == "getUser"){
			$user = createUser();
			$dbUser = getUser($user);

			if ($dbUser)
			{
				header('Location: ../../home.php'); 
			}
			else{
				header('Location: ../../login.php'); 
			}
		}
		else{}
	}

	function createUser(){
		$email = $_POST['inputEmail'];
		$password = $_POST['inputPassword'];

		if(verifyUserInput($email,$password)){
			$user = new User();
			$user->setEmail($email);
			$user->setPassword($password);	
			return $user;
		}
		else{ return null; }			
	}

	function verifyUserInput($email, $password){
		// check le mail et password
		return true;
	}
?>