<?php /* Smarty version Smarty-3.1.19, created on 2014-10-04 15:23:34
         compiled from "tpl\row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3978542feae49acc73-57829022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '532f827e4126cdb52e726d9da64482ccd241bd5c' => 
    array (
      0 => 'tpl\\row.tpl',
      1 => 1412428992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3978542feae49acc73-57829022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542feae4ad3242_68297823',
  'variables' => 
  array (
    'descPatho' => 0,
    'descSymptome' => 0,
    'nomMeridien' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542feae4ad3242_68297823')) {function content_542feae4ad3242_68297823($_smarty_tpl) {?> <tr>
  <th>#</th>
  <th><?php echo $_smarty_tpl->tpl_vars['descPatho']->value;?>
</th>
  <th><?php echo $_smarty_tpl->tpl_vars['descSymptome']->value;?>
</th>
  <th><?php echo $_smarty_tpl->tpl_vars['nomMeridien']->value;?>
</th>
</tr>
<?php }} ?>
