<?php
/* Smarty version 3.1.36, created on 2020-10-16 17:51:52
  from 'C:\Users\saari\Codes\fireplace\application\views\smarty\templates\layouts\blank.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f89c198100205_01552431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1409431414f41df322ee81d7ce5d8803f0504793' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\fireplace\\application\\views\\smarty\\templates\\layouts\\blank.tpl',
      1 => 1602861841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f89c198100205_01552431 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3511869725f89c1980ffb88_93170990', 'content');
?>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_3511869725f89c1980ffb88_93170990 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3511869725f89c1980ffb88_93170990',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
