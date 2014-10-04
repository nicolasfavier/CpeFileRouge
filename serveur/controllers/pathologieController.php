<?php

		include_once("serveur/dao/pathologieDao.php");

		
		$pathologies = getPathologies();			
		createTab($pathologies);


	function createTab($pathologies){

		include_once("utils.php");
		$smarty = getSmarty();
		
		print_r($pathologies);
		foreach ($pathologies as $row ) {
    		echo $row['type'].' / '.$row['desc'] ."<br>"; 


		$smarty->display("tpl/thead.tpl");
		
		//$smarty->assign( "type", $row['type']);
		//$smarty->assign( "desc", $row['desc']);
		//$smarty->display("tpl/row.tpl");

		}	

		echo( "</tbody>
		    </table>");
	}

?>

