<?php

	if (isset($_GET['action'])) {
		include_once('../models/User.class.php');
		include_once("../dao/userDao.php");

	    if($_GET['action'] == "createUser"){
	      $user = createUser();
	      insertUser($user);

	      session_start();
	      $_SESSION['User'] = serialize($user);
	      header('Location: ../../home.php');
	    }	

		if($_GET['action'] == "getUser"){
			$user = createUser();
			$dbUser = getUser($user);

			if ($dbUser)
			{
			    session_start();
	      		$_SESSION['User'] = serialize($dbUser);
				header('Location: ../../home.php'); 
			}
			else{
				header('Location: ../../login.php'); 
			}
		}

		if($_GET['action'] == "logOut"){
			logOutUser();
			header('Location: ../../login.php'); 
		}
		
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

	function logOutUser(){
		session_start();
		session_unset();		
	} 

	function verifyUserInput($email, $password){
		// check le mail et password
		return true;
	}
?>