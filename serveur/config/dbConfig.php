<?php

	function getDB($dbName='filerouge'){

		$db = null;

		// configuration
		$dbhost 	= "localhost";
		$dbname		= "filerouge";
		$dbuser		= "client";
		$dbpass		= "client";
		 
		// database connection
		try{
			$db = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass,
			 array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}

	}

?>