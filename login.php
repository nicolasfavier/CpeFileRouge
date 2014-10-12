	<?php
		include("utils.php");
		$smarty = getSmarty();
		$smarty->assign( "header","Login Page");
		$smarty->display("tpl/header.tpl");
		$smarty->display("tpl/login.tpl");

 		if(isset($_GET['error'])){
			$smarty->assign("error",$_GET['error']);
			$smarty->display("tpl/error.tpl");
  		}
 		$smarty->display("tpl/footer.tpl");
 	?>

