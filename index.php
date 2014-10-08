<?php
	session_start();

	if(isset($_SESSION["User"])){
		header("Location: serveur/controllers/pathologieController.php");
	}
	else{
		header("Location: login.php");
	}

	
?>