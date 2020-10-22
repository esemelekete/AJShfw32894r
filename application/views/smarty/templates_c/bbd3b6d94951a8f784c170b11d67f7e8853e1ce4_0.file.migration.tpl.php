<?php
/* Smarty version 3.1.36, created on 2020-10-17 14:05:21
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\migration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f8ade0117ab42_94743393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbd3b6d94951a8f784c170b11d67f7e8853e1ce4' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\migration.tpl',
      1 => 1602866104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8ade0117ab42_94743393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12445794745f8ade0115c7e0_82989687', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/blank.tpl');
}
/* {block 'content'} */
class Block_12445794745f8ade0115c7e0_82989687 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12445794745f8ade0115c7e0_82989687',
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
