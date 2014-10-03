<?php /* Smarty version Smarty-3.1.19, created on 2014-10-03 11:33:41
         compiled from "nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25611542e6d75528fd1-72477911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2632d4571bab846595f08fd2e0af198f4392c8e6' => 
    array (
      0 => 'nav.tpl',
      1 => 1412328520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25611542e6d75528fd1-72477911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeactive' => 0,
    'bibliographieactive' => 0,
    'devlogsactive' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542e6d755602f1_48311093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542e6d755602f1_48311093')) {function content_542e6d755602f1_48311093($_smarty_tpl) {?><br>
<div class="col-sm-3">
	<ul class="nav nav-pills nav-stacked">
		
		<li <?php echo $_smarty_tpl->tpl_vars['homeactive']->value;?>
><a href="home.php">Home</a></li>
		<li <?php echo $_smarty_tpl->tpl_vars['bibliographieactive']->value;?>
><a href="bibliographie.php">bibliographie</a></li>
		<li <?php echo $_smarty_tpl->tpl_vars['devlogsactive']->value;?>
><a href="devlogs.php">devlogs</a></li>
	</ul>
</div><!-- ./col-sm-3 --><?php }} ?>
