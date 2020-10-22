<?php
/* Smarty version 3.1.36, created on 2020-10-17 12:13:45
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\auth\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f8ac3d96f65a2_94090749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '312a1cfec0674433543d1f3dfdcb550e9527fd3a' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\auth\\login.tpl',
      1 => 1602929611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/global/alert.tpl' => 1,
  ),
),false)) {
function content_5f8ac3d96f65a2_94090749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('body_classes', array('bg-gradient-primary') ,false ,2);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11132523325f8ac3d96ec846_15647683', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/app.tpl');
}
/* {block 'content'} */
class Block_11132523325f8ac3d96ec846_15647683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11132523325f8ac3d96ec846_15647683',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="container">
		<div class="row justify-content-center">
			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<div class="row">
						<div class="col-12">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">
										Repositori Akreditasi <br>
										<small>Fakultas Keguruan dan Ilmu Pengetahuan</small>
									</h1>
								</div>
								<?php echo form_open(NULL,'class="user"');?>

									<?php $_smarty_tpl->_subTemplateRender('file:components/global/alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

									<div class="form-group text-dark">
										<small>
											<?php echo lang('login_identity_label','identity');?>

										</small>
										<input type="text" name="identity" id="identity" value="<?php echo set_value('identity');?>
" class="bg-light form-control form-control-user <?php if (form_error('identity') || (isset($_smarty_tpl->tpl_vars['message']->value))) {?>is-invalid<?php }?>">
										<small><?php echo form_error('identity');?>
</small>
									</div>
									<div class="form-group">
										<small>
											<?php echo lang('login_password_label','password');?>

										</small>
										<input type="password" name="password" class="bg-light form-control form-control-user <?php if (form_error('password') || (isset($_smarty_tpl->tpl_vars['message']->value))) {?>is-invalid<?php }?>">
										<small><?php echo form_error('password');?>
</small>
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox small">
											<input type="checkbox" class="custom-control-input" id="remember" name="remember">
											<label class="custom-control-label" for="remember">Ingat saya</label>
										</div>
									</div>
									<button type="submit" class="btn btn-primary btn-user btn-block">
										Login
									</button>
								<?php echo form_close();?>


								<div class="text-center mt-3">
									<a class="small" href="/forgot-password.html">Lupa Password?</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block 'content'} */
}
