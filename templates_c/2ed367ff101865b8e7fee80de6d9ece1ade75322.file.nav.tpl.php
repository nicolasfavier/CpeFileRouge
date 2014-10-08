<?php /* Smarty version Smarty-3.1.19, created on 2014-10-09 00:42:50
         compiled from "tpl\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23381542e6ed1d06c71-00650769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ed367ff101865b8e7fee80de6d9ece1ade75322' => 
    array (
      0 => 'tpl\\nav.tpl',
      1 => 1412808101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23381542e6ed1d06c71-00650769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542e6ed1d3d768_05330489',
  'variables' => 
  array (
    'homeactive' => 0,
    'bibliographieactive' => 0,
    'devlogsactive' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542e6ed1d3d768_05330489')) {function content_542e6ed1d3d768_05330489($_smarty_tpl) {?>	<br>
	<div class="col-sm-3">
		<ul class="nav nav-pills nav-stacked">
			
			<li <?php echo $_smarty_tpl->tpl_vars['homeactive']->value;?>
><a href="serveur/controllers/pathologieController.php">Pathologies</a></li>
			<li <?php echo $_smarty_tpl->tpl_vars['bibliographieactive']->value;?>
><a href="bibliographie.php">bibliographie</a></li>
			<li <?php echo $_smarty_tpl->tpl_vars['devlogsactive']->value;?>
><a href="devlogs.php">devlogs</a></li>
		</ul>
	</div><!-- ./col-sm-3 -->
<div class="col-sm-9"><?php }} ?>
