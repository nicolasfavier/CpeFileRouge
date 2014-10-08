<?php 
	session_start();
	include_once("utils.php");
	include_once("serveur/dto/UserDto.class.php");

	$smarty = getSmarty();
	$smarty->assign( "header","Home");
	if(isset($_SESSION["User"])){
		$userDto = unserialize($_SESSION["User"]);
		$smarty->assign( "emailUser",$userDto->getEmail());
	}

	$smarty->display("tpl/header.tpl");
	$smarty->assign(array(
	    "homeactive" => 'class="active"',
	    "bibliographieactive" => "",
	    "devlogsactive" => ""
	));

	$smarty->display("tpl/topNavBar.tpl");
	$smarty->display("tpl/nav.tpl");		
	$smarty->display("tpl/thead.tpl");

	if(isset($_SESSION["User"])){
		$smarty->display("tpl/autocompleteSearch.tpl");			
		$smarty->display("tpl/search.tpl");
	}

	$pathologies = unserialize($_SESSION["pathologies"]);


	if($pathologies != null){
		foreach ($pathologies as $row ) {
			$smarty->assign( "descPatho", $row[0]);
			$smarty->assign( "typePatho", $row[1]);
			$smarty->assign( "nomMeridien", $row[2]);
			$smarty->assign( "idP", $row[3]);
			$smarty->display("tpl/row.tpl");
		}	
	}

	$smarty->display("tpl/tfooter.tpl");

	if($pathologies == null){
		$smarty->assign( "msg", "Sorry, Any pathologies was found corresponding to your searches.");
		$smarty->display("tpl/noResult.tpl");
	}

	$smarty->display("tpl/footer.tpl"); 
?>