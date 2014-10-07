
	<?php 
		session_start();
		include("utils.php");
		$smarty = getSmarty();
		$smarty->assign( "header","Home");
		
		$smarty->display("tpl/header.tpl");

		$smarty->assign(array(
	        "homeactive" => 'class="active"',
	        "bibliographieactive" => "",
	        "devlogsactive" => "",
        	"emailUser" => ""
        ));

        $smarty->display("tpl/topNavBar.tpl");
        $smarty->display("tpl/nav.tpl");
	?>
		<div class="col-sm-9">
			<h1>Hello</h1>

<?php

		include_once("serveur/dao/pathologieDao.php");
		
		
		$pathologies = getTbale();			
		$smarty->display("tpl/thead.tpl");
		if(isset($_SESSION["User"])){
			$smarty->display("tpl/search.tpl");
		}

		foreach ($pathologies as $row ) {
			$smarty->assign( "descPatho", $row[0]);
			$smarty->assign( "descSymptome", $row[1]);
			$smarty->assign( "nomMeridien", $row[2]);
			$smarty->display("tpl/row.tpl");
		}	

		$smarty->display("tpl/tfooter.tpl");

?>
	    </div><!-- ./col-sm-9 -->
 	<?php 
 		$smarty->display("tpl/footer.tpl"); 
 	?>