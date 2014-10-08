<?php

	include_once('../models/KeyWords.class.php');
	include_once("../dao/keyWordsDao.php");

	$search = null;

	if(isset($_GET['searchString'])){
		$search = $_GET['searchString'];
	}

	$keyWords = getKeyWords($search);
	
	header('Content-Type: application/json');
	echo json_encode($keyWords);
?>