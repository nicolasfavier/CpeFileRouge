<?php
		include_once("../dao/symptomeDao.php");

		if(isset($_GET['action']) && $_GET['action'] == "findPathoSymptome"){
		
		$symptomes = findPathoSymptome($_GET['idp']);

		session_start();
		$_SESSION['symptomes'] = serialize($symptomes);
		header("Location: ../../symptome.php");
			
		}


?>