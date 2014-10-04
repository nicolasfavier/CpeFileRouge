<?php 
function getSmarty(){
	require("tpl/smarty/Smarty.class.php"); // On inclut la classe Smarty
	$smarty = new Smarty();
	return $smarty;
}

function getUserInSession() {
    session_start();
    if(isset($_SESSION['User'])){
        $tmpUser = $_SESSION['User'];
        $user = unserialize($tmpUser);
        return $user;
    }
    return null;
}

function cleanSession(){
  session_destroy();
}  
?>