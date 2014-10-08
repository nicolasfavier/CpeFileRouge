<?php 
	session_start();
	include("utils.php");
	include_once("serveur/dto/UserDto.class.php");

	$smarty = getSmarty();

	$smarty->assign( "header","Bibliographie");
	$smarty->display("tpl/header.tpl");

	if(isset($_SESSION["User"])){
		$userDto = unserialize($_SESSION["User"]);
		$smarty->assign( "emailUser",$userDto->getEmail());
	}

	$smarty->display("tpl/topNavBar.tpl");

	$smarty->assign(array(
	    "homeactive" => "",
	    "bibliographieactive" =>"",
	    "devlogsactive" => ""
    ));
    
    $smarty->display("tpl/nav.tpl");
    $smarty->display("tpl/symptomeHeadList.tpl");

    $symptomes = unserialize($_SESSION["symptomes"]);

	if($symptomes != null){
		foreach ($symptomes as $row ) {
			$smarty->assign( "symptome", $row[0]);
			$smarty->display("tpl/symptomesRow.tpl");
		}	
	}

	$smarty->display("tpl/symptomeFootList.tpl");	
	$smarty->display("tpl/footer.tpl"); 
?>