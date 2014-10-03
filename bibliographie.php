	<?php 
		include("utils.php");
		$smarty = getSmarty();
		$smarty->assign( "header","Bibliographie");
		$smarty->display("tpl/header.tpl");

		$smarty->assign(array(
        "homeactive" => "",
        "bibliographieactive" => 'class="active"',
        "devlogsactive" => ""
        ));
        $smarty->display("tpl/nav.tpl");
	?>
		<div class="col-sm-9">
			Bibliographie
	    </div><!-- ./col-sm-9 -->
 	<?php 
 		$smarty->display("tpl/footer.tpl"); 
 	?>