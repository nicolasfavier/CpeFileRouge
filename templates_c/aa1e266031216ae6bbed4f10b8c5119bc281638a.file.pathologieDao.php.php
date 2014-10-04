<?php /* Smarty version Smarty-3.1.19, created on 2014-10-03 19:15:52
         compiled from "serveur\dao\pathologieDao.php" */ ?>
<?php /*%%SmartyHeaderCode:13624542ed90dd89f67-85141572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa1e266031216ae6bbed4f10b8c5119bc281638a' => 
    array (
      0 => 'serveur\\dao\\pathologieDao.php',
      1 => 1412356548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13624542ed90dd89f67-85141572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542ed90ddcfd39_00103475',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542ed90ddcfd39_00103475')) {function content_542ed90ddcfd39_00103475($_smarty_tpl) {?><<?php ?>?php 

include_once("../models/Meridien.class.php");
include_once("../models/Pathologie.class.php");
include_once('../config/dbConfig.php');


$bdd = getDB('filerouge');

try{
	$req = $bdd->prepare("SELECT * FROM `patho` WHERE 1");

	$req->execute();	

	$objreturn = $req->fetch();

	if( $objreturn ) {
		foreach ($objreturn as $patho) {
	    	echo ($row["type"] . "   " . $row["desc"] ."<br/>");
		}
	} 
}
catch(PDOException $e){
	die('Erreur: '.$e->getMessage());
}


?<?php ?>><?php }} ?>
