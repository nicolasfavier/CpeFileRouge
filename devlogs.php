<?php 
	session_start();
	include("utils.php");
	include_once("serveur/dto/userDto.class.php");

	$smarty = getSmarty();
	$smarty->assign( "header","Devlogs");
	$smarty->display("tpl/header.tpl");

	if(isset($_SESSION["User"])){
		$userDto = unserialize($_SESSION["User"]);
		$smarty->assign( "emailUser",$userDto->getEmail());
	}

	$smarty->display("tpl/topNavBar.tpl");

	$smarty->assign(array(
		"homeactive" => "",
		"bibliographieactive" => "",
		"devlogsactive" => 'class="active"'
	));

	$smarty->display("tpl/nav.tpl");
	$smarty->display("tpl/devlogs.tpl");
	$smarty->display("tpl/footer.tpl"); 
?>