<?php
/* Smarty version 3.1.36, created on 2020-10-16 18:35:05
  from 'C:\Users\saari\Codes\fireplace\application\views\smarty\templates\migration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f89cbb9c6fc89_86680301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dc95d6a5505b8fb0def8ea8446987d6f8a668c9' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\fireplace\\application\\views\\smarty\\templates\\migration.tpl',
      1 => 1602866104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f89cbb9c6fc89_86680301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15119284925f89cbb9c59796_73889978', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/blank.tpl');
}
/* {block 'content'} */
class Block_15119284925f89cbb9c59796_73889978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15119284925f89cbb9c59796_73889978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	Current: <?php echo (($tmp = @sprintf("%03d",$_smarty_tpl->tpl_vars['current_version']->value))===null||$tmp==='' ? '000' : $tmp);?>

	<?php echo form_open(NULL,'onsubmit="return onSubmit(this)"');?>

		<label for="version">To version: </label>
		<select name="version" id="version">
			<option value="0">000_clear_all_data</option>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['versions']->value, 'version');
$_smarty_tpl->tpl_vars['version']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['version']->value) {
$_smarty_tpl->tpl_vars['version']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['version']->value['number'];?>
"><?php echo $_smarty_tpl->tpl_vars['version']->value['name'];?>
</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
		<button type="submit">Migrate</button>
	<?php echo form_close();?>


	<?php echo '<script'; ?>
>
		function onSubmit(e) {
			if ( ! confirm('Are you sure to migrate?')) {
				return false;
			}
		}
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
