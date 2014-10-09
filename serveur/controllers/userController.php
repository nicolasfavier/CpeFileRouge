<?php
	$error = null;
	$regex = "/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}/"; 

	if (isset($_GET['action'])) {
		include_once('../models/User.class.php');
		include_once("../dao/userDao.php");
		include_once('../dto/userDto.class.php');

	    if($_GET['action'] == "createUser"){
	      $user = createUserSignUp();

	      if($user != null){
		      insertUser($user);
		      $userDto = new UserDto($user);

		      session_start();
		      $_SESSION['User'] = serialize($userDto);
		      header('Location: pathologieController.php');
		  }
		  else{
		  	  header('Location: ../../signup.php?error='.$error);
		  }
	    }	

		if($_GET['action'] == "getUser"){
			$user = createUserSignIn();
			$dbUser = getUser($user);

			if ($dbUser)
			{
			    session_start();
			    $userDto = new UserDto($user);
	      		$_SESSION['User'] = serialize($userDto);
				header('Location: pathologieController.php'); 
			}
			else{
				header('Location: ../../login.php?error=The password you entered is incorrect. Please try again'); 
			}
		}

		if($_GET['action'] == "logOut"){
			logOutUser();
			header('Location: ../../login.php'); 
		}
		
	}

	function createUserSignUp(){
		$email = $_POST['inputEmail'];
		$password = $_POST['inputPassword'];
		$repeatPassword = $_POST['inputRepeatPassword'];

		if(verifySignUp($email,$password,$repeatPassword)){
			$user = new User();
			$user->setEmail($email);
			$user->setPassword($password);	
			return $user;
		}
		else{ return null; }			
	}

	function createUserSignIn(){
		$email = $_POST['inputEmail'];
		$password = $_POST['inputPassword'];

		if(verifySignIn($email,$password)){
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

	function verifySignIn($email, $password){
		global $regex, $error ;
		
		if ( !preg_match( $regex, $email ) ) {
		     $error = $email . " is an invalid email. Please try again.";
		     return false;
		} 

		return true;
	}	

	function verifySignUp($email, $password, $repeatPassword){
		global $regex, $error ;
		if($password != $repeatPassword){
			$error = "Both of the passwords that you typed aren't the same! Can you retry please.";
			return false;
		}
		if ( !preg_match( $regex, $email ) ) {
		     $error = $email . " is an invalid email. Please try again.";
		     return false;
		} 

		return true;
	}	
?>