	<?php 
		include("utils.php");
		$smarty = getSmarty();
		$smarty->assign( "header","Sign up page");
		$smarty->display("tpl/header.tpl");
		$smarty->display("tpl/signup.tpl");

 		if(isset($_GET['error'])){
			$smarty->assign("error",$_GET['error']);
			$smarty->display("tpl/error.tpl");
  		}	
 		$smarty->display("tpl/footer.tpl"); 
 	?>