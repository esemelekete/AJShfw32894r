<?php
/* Smarty version 3.1.36, created on 2020-10-17 14:05:21
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\layouts\blank.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f8ade011f8279_26834108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e8d09117b82022dde8afb7cbee6ae72cfee07ef' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\layouts\\blank.tpl',
      1 => 1602861841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8ade011f8279_26834108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? env('SITE_NAME','Fireplace') : $tmp);?>
</title>
</head>
<body>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20318325885f8ade011f7896_71513839', 'content');
?>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_20318325885f8ade011f7896_71513839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20318325885f8ade011f7896_71513839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
