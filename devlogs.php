
	<?php 
		include("utils.php");
		$smarty = getSmarty();
		$smarty->assign( "header","Devlogs");
		$smarty->display("tpl/header.tpl");

		$smarty->assign(array(
        "homeactive" => "",
        "bibliographieactive" => "",
        "devlogsactive" => 'class="active"'
        ));
        $smarty->display("tpl/nav.tpl");
	?>

		<div class="col-sm-9">
			devlogs
	    </div><!-- ./col-sm-9 -->
 	<?php 
 		$smarty->display("tpl/footer.tpl"); 
 	?>