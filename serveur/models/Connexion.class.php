<?php 

class Connexion{

	public function getDB($dbName='test'){

		$db = null;

		// configuration
		$dbhost 	= "localhost";
		$dbname		= "test";
		$dbuser		= "root";
		$dbpass		= "cpelyon";
		 
		// database connection
		try{
			$db = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass,
			 array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}

		return $db;
	}
}
?>