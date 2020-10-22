<?php
/* Smarty version 3.1.36, created on 2020-10-16 18:38:26
  from 'C:\Users\saari\Codes\fireplace\application\views\smarty\templates\migration_success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f89cc82ef6614_12321918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f85d5b1a0ae4e5f35facaad465d7c1b856ee5183' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\fireplace\\application\\views\\smarty\\templates\\migration_success.tpl',
      1 => 1602866306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f89cc82ef6614_12321918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11099399255f89cc82ef5cf6_83437459', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/blank.tpl");
}
/* {block 'content'} */
class Block_11099399255f89cc82ef5cf6_83437459 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11099399255f89cc82ef5cf6_83437459',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div>
		<strong>Migration success!</strong>
	</div>
	<ul>
		<li>
			<a href="/migrate">Do another migration</a>
		</li>
		<li>
			<a href="/">Go to home page</a>
		</li>
	</ul>
<?php
}
}
/* {/block 'content'} */
}
