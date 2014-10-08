<?php
		include_once("../dao/pathologieDao.php");
		$pathologies = null;

		if(isset($_GET['action']))
		{
			if($_GET['action'] == "autocompleteSearch"){
				if(isset($_POST['keyWords']) ){
					$keyWords = trim($_POST['keyWords']);		
				}	
				$pathologies = getResearchResultFromKeyWords($keyWords);
			}
			else if (isset($_GET['action']) && $_GET['action'] == "search")
			{
				$searchpatho = "";
				$searchtype = "";
				$searchmeridien = "";

				if(isset($_POST['searchpatho']) && isset($_POST['searchtype']) && isset($_POST['searchmeridien'])){
					$searchpatho = trim($_POST['searchpatho']);
					$searchtype = trim($_POST['searchtype']);
					$searchmeridien = trim($_POST['searchmeridien']);
				}	

				$pathologies = getTbale($searchpatho, $searchtype, $searchmeridien);
			}
		}
		else{
			$pathologies = getTbale("","","");	
		}
		
		session_start();
		$_SESSION['pathologies'] = serialize($pathologies);
		header('Location: ../../pathologies.php');
?>

