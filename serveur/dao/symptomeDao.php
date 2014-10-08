<?php 

include_once('../config/dbConfig.php');

	function findPathoSymptome( $idP){
		$bdd = getDB('filerouge');
		$res = null;

		try{

			$condition = "SELECT symptome.desc FROM symptPatho, symptome WHERE symptPatho.idP  =$idP and  symptome.idS  = symptPatho.idS";

			$req = $bdd->prepare($condition);

			$req->execute();	

			$objreturn = $req->fetchAll();

			if( $objreturn ) {
				$res = $objreturn;
			} 
			return $res;
		}
		catch(PDOException $e){
			die('Erreur: '.$e->getMessage());
		}
	}
?>