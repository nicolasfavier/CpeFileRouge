<?php 
function getSmarty(){
	require("tpl/smarty/Smarty.class.php"); // On inclut la classe Smarty
	$smarty = new Smarty();
	return $smarty;
}
?>