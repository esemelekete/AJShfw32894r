<?php
/* Smarty version 3.1.36, created on 2020-10-16 19:11:31
  from 'C:\Users\saari\Codes\fireplace\application\views\smarty\templates\components\global\alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f89d443e2ad21_04451538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ea3666264f83f52cc1c41041041a4b838b12e25' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\fireplace\\application\\views\\smarty\\templates\\components\\global\\alert.tpl',
      1 => 1602868287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f89d443e2ad21_04451538 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['message']->value))) {?>
	<div class="alert">
		<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

	</div>
<?php }
}
}
