<?php
/* Smarty version 3.1.36, created on 2020-10-17 11:39:19
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f8abbc70a1405_79571237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b978fd98e1641e757eff3ce39cb0e30b5cc9006' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\homepage.tpl',
      1 => 1602859764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8abbc70a1405_79571237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6183156055f8abbc7099092_93697434', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/app.tpl');
}
/* {block 'content'} */
class Block_6183156055f8abbc7099092_93697434 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6183156055f8abbc7099092_93697434',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1><?php echo $_smarty_tpl->tpl_vars['greetings']->value;?>
</h1>
	<p>This is the home page.</p>
<?php
}
}
/* {/block 'content'} */
}
