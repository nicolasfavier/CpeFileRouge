<?php
require("tpl/smarty/Smarty.class.php"); // On inclut la classe Smarty
$smarty = new Smarty();
$smarty->display("hello.html");
?>