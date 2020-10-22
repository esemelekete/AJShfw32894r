<?php
/* Smarty version 3.1.36, created on 2020-10-16 21:25:54
  from 'C:\Users\saari\Codes\fireplace\application\views\smarty\templates\layouts\app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f89f3c2361fd9_01875077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd67082a5258e6b0cfc911ce3254ec1d659bc0c89' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\fireplace\\application\\views\\smarty\\templates\\layouts\\app.tpl',
      1 => 1602876353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/navbar.tpl' => 1,
  ),
),false)) {
function content_5f89f3c2361fd9_01875077 (Smarty_Internal_Template $_smarty_tpl) {
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
	<?php $_smarty_tpl->_subTemplateRender('file:components/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19866205855f89f3c2361494_24603515', 'content');
?>


	<?php echo '<script'; ?>
 src="/js/app.bundle.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block 'content'} */
class Block_19866205855f89f3c2361494_24603515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19866205855f89f3c2361494_24603515',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
