<?php
/* Smarty version 3.1.36, created on 2020-10-16 19:11:13
  from 'C:\Users\saari\Codes\fireplace\application\views\smarty\templates\auth\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f89d431d05530_03610662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '749393a5ec33f4b67fd0e94f5119272d85203653' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\fireplace\\application\\views\\smarty\\templates\\auth\\login.tpl',
      1 => 1602868022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/global/alert.tpl' => 1,
  ),
),false)) {
function content_5f89d431d05530_03610662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14534344985f89d431cefc41_36230638', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/app.tpl');
}
/* {block 'content'} */
class Block_14534344985f89d431cefc41_36230638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14534344985f89d431cefc41_36230638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo form_open();?>

		<h1>Log In</h1>

		<?php $_smarty_tpl->_subTemplateRender('file:components/global/alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div>
			<label for="identity">
				<?php echo lang('login_identity_label','identity');?>

			</label>
			<input
				type="text"
				name="identity"
				id="identity"
				value="<?php echo set_value('identity');?>
"
				class="<?php if (form_error('identity') || (isset($_smarty_tpl->tpl_vars['message']->value))) {?>is-invalid<?php }?>">
			<small><?php echo form_error('identity');?>
</small>
		</div>
		<div>
			<label for="password">
				<?php echo lang('login_password_label','password');?>

			</label>
			<input
				type="password"
				name="password"
				class="<?php if (form_error('password') || (isset($_smarty_tpl->tpl_vars['message']->value))) {?>is-invalid<?php }?>">
			<small><?php echo form_error('password');?>
</small>
		</div>
		<div>
			<label for="remember">
				<?php echo lang('login_remember_label','remember');?>

			</label>
			<input
				type="checkbox"
				name="remember"
				id="remember"
				<?php if (set_value('remember') === 1) {?>checked<?php }?>>
		</div>
		<div>
			<a href="/forgot_password"><?php echo lang('login_forgot_password');?>
</a>
		</div>
		<button type="submit">Login</button>
	<?php echo form_close();?>

<?php
}
}
/* {/block 'content'} */
}
