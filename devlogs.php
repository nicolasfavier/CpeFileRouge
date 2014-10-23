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
		$smarty->assign( "actionUser","Log Out");		
	}
	else{
		$smarty->assign( "emailUser","Unregistered");
		$smarty->assign( "actionUser","Log In");		
	}

	$smarty->display("tpl/topNavBar.tpl");

	$smarty->assign(array(
		"homeactive" => "",
		"bibliographieactive" => "",
		"devlogsactive" => 'class="active"'
	));

	$smarty->display("tpl/nav.tpl");
	$smarty->display("tpl/devlogs.tpl");

	echo("<div>");
 	$flux = file_get_contents("http://localhost:8080/accuponcteur/synthetiseurFluxHtml");
 	echo($flux);

	echo("</div>");

	$smarty->display("tpl/footer.tpl"); 
?>