<?php
/* Smarty version 3.1.36, created on 2020-10-17 14:29:20
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\migration_success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f8ae3a0276e01_77738009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8a7ef60c432c70c9c7b374449541f7926b06dec' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\migration_success.tpl',
      1 => 1602866306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8ae3a0276e01_77738009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6166190065f8ae3a0275eb3_05556511', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/blank.tpl");
}
/* {block 'content'} */
class Block_6166190065f8ae3a0275eb3_05556511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6166190065f8ae3a0275eb3_05556511',
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
