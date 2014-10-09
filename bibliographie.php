<?php 
	session_start();
	include("utils.php");
	include_once("serveur/dto/userDto.class.php");

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
	    "bibliographieactive" => 'class="active"',
	    "devlogsactive" => ""
    ));
    
    $smarty->display("tpl/nav.tpl");
    $smarty->display("tpl/bibliographie.tpl");
	$smarty->display("tpl/footer.tpl"); 
?>