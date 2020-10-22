<?php
/* Smarty version 3.1.36, created on 2020-10-16 16:49:25
  from 'C:\Users\saari\Codes\fireplace\application\views\smarty\templates\homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f89b2f5442e16_10044508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad6a2cd16b08371403af2de1029fee66cb46cf28' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\fireplace\\application\\views\\smarty\\templates\\homepage.tpl',
      1 => 1602859764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f89b2f5442e16_10044508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3251556835f89b2f543f9e3_93260109', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/app.tpl');
}
/* {block 'content'} */
class Block_3251556835f89b2f543f9e3_93260109 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3251556835f89b2f543f9e3_93260109',
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
