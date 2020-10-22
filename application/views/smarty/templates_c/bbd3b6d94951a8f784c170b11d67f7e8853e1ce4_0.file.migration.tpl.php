<?php
/* Smarty version 3.1.36, created on 2020-10-22 12:34:29
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\migration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f91603548c451_32289139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbd3b6d94951a8f784c170b11d67f7e8853e1ce4' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\migration.tpl',
      1 => 1603362868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f91603548c451_32289139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3999661685f91603547bf54_53099997', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/blank.tpl');
}
/* {block 'content'} */
class Block_3999661685f91603547bf54_53099997 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3999661685f91603547bf54_53099997',
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


	<br>

	<?php echo form_open(NULL,'onsubmit="return onSubmit(this)" style="display:inline"');?>

		<input type="hidden" name="version" value="0">
		<button type="submit">Clear data</button>
	<?php echo form_close();?>


	<?php echo form_open(NULL,'onsubmit="return onSubmit(this)" style="display:inline"');?>

		<input type="hidden" name="version" value="<?php echo $_smarty_tpl->tpl_vars['version']->value['number'];?>
">
		<button type="submit">Migrate to latest</button>
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
