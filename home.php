
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
		$pathologies = null;

		if(isset($_GET['action']) && $_GET['action'] == "autocompleteSearch"){
			$pathologies = getTbaleFromAutocomplete();
		}
		else if(isset($_GET['action']) && $_GET['action'] == "findPathoSymptome"){
			$symptomes = findPathoSymptome($_GET['idp']);
			if($symptomes != null){
			foreach ($symptomes as $row ) {
				$smarty->assign( "symptome", $row[0]);
				$smarty->display("tpl/symptomesRow.tpl");
			}	
		}
		}
		else{
			$pathologies = getTbale();	
		}

		$smarty->display("tpl/thead.tpl");
		if(isset($_SESSION["User"])){
			$smarty->display("tpl/autocompleteSearch.tpl");			
			$smarty->display("tpl/search.tpl");
		}
		if($pathologies != null){
			foreach ($pathologies as $row ) {
				$smarty->assign( "descPatho", $row[0]);
				$smarty->assign( "typePatho", $row[1]);
				$smarty->assign( "nomMeridien", $row[2]);
				$smarty->assign( "idP", $row[3]);
				$smarty->display("tpl/row.tpl");
			}	
		}

		$smarty->display("tpl/tfooter.tpl");

		if($pathologies == null){
			$smarty->assign( "msg", "Sorry, Any pathologies was found corresponding to your searches.");
			$smarty->display("tpl/noResult.tpl");
		}
?>
	    </div><!-- ./col-sm-9 -->
 	<?php 
 		$smarty->display("tpl/footer.tpl"); 
 	?>