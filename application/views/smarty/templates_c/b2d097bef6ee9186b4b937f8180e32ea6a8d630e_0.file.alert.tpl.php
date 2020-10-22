<?php
/* Smarty version 3.1.36, created on 2020-10-17 11:42:10
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\components\global\alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f8abc72d58e17_26581036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2d097bef6ee9186b4b937f8180e32ea6a8d630e' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\components\\global\\alert.tpl',
      1 => 1602868287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8abc72d58e17_26581036 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['message']->value))) {?>
	<div class="alert">
		<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

	</div>
<?php }
}
}
