
	<?php 
		include("utils.php");
		$smarty = getSmarty();
		$smarty->assign( "header","Home");
		$smarty->display("tpl/header.tpl");

		$smarty->assign(array(
        "homeactive" => 'class="active"',
        "bibliographieactive" => "",
        "devlogsactive" => ""
        ));
        $smarty->display("tpl/nav.tpl");
	?>
		<div class="col-sm-9">
			<h1>Hello</h1>
		 	<?php $smarty->display("tpl/pathologytab.tpl"); ?>
	    </div><!-- ./col-sm-9 -->
 	<?php 
 		$smarty->display("tpl/footer.tpl"); 
 	?>