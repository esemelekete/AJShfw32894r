<?php
/* Smarty version 3.1.36, created on 2020-10-17 13:17:41
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\layouts\app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f8ad2d5413217_65864083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b56263ca8502af24b93fd8f464e11ad801ea7d7e' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\layouts\\app.tpl',
      1 => 1602933459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8ad2d5413217_65864083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? env('SITE_NAME') : $tmp);?>
</title>

		<link rel="shortcut icon" href="/img/favicon.png" type="image/png">
		<link rel="stylesheet" href="/css/app.css">
	</head>

	<body class="<?php echo (($tmp = @implode(' ',$_smarty_tpl->tpl_vars['body_classes']->value))===null||$tmp==='' ? '' : $tmp);?>
">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14069620345f8ad2d54129b1_64290203', 'content');
?>

	
		<?php echo '<script'; ?>
 src="/js/app.js"><?php echo '</script'; ?>
>
	</body>
</html>
<?php }
/* {block 'content'} */
class Block_14069620345f8ad2d54129b1_64290203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14069620345f8ad2d54129b1_64290203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
