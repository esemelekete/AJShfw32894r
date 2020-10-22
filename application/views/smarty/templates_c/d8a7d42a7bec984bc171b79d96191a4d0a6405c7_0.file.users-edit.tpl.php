<?php
/* Smarty version 3.1.36, created on 2020-10-21 14:48:47
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\users-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f902e2fe809f0_27082452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8a7d42a7bec984bc171b79d96191a4d0a6405c7' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\users-edit.tpl',
      1 => 1603284525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f902e2fe809f0_27082452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('title', "Edit Pengguna");?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13790523295f902e2fe58c07_17061263', 'admin_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/dashboard.tpl");
}
/* {block 'admin_content'} */
class Block_13790523295f902e2fe58c07_17061263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_content' => 
  array (
    0 => 'Block_13790523295f902e2fe58c07_17061263',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						Edit Pengguna
					</h6>
				</div>
				<div class="card-body">
					<?php echo form_open();?>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="first_name">Nama Depan</label>
									<input type="text" name="first_name" value="<?php echo (($tmp = @set_value('first_name'))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user']->value->first_name : $tmp);?>
" class="form-control <?php if (form_error('first_name')) {?>is-invalid<?php }?>">
									<?php if (form_error('first_name')) {?>
										<small class="text-danger"><?php echo form_error('first_name');?>
</small>
									<?php }?>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="last_name">Nama Belakang</label>
									<input type="text" name="last_name" value="<?php echo (($tmp = @set_value('last_name'))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user']->value->last_name : $tmp);?>
" class="form-control <?php if (form_error('last_name')) {?>is-invalid<?php }?>">
									<?php if (form_error('last_name')) {?>
										<small class="text-danger"><?php echo form_error('last_name');?>
</small>
									<?php }?>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="phone">No. Telepon</label>
									<input type="text" name="phone" value="<?php echo (($tmp = @set_value('phone'))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user']->value->phone : $tmp);?>
" class="form-control <?php if (form_error('phone')) {?>is-invalid<?php }?>">
									<?php if (form_error('phone')) {?>
										<small class="text-danger"><?php echo form_error('phone');?>
</small>
									<?php }?>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="group">Hak Akses</label>
									<select name="group" id="group" class="form-control">
										<option value="" <?php if (empty(set_value('group'))) {?>selected<?php }?> disabled>Pilih hak akses</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['this']->value->db->get('groups')->result(), 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['selected_group']->value === $_smarty_tpl->tpl_vars['group']->value->id) {?>selected<?php }?>>
												<?php if ($_smarty_tpl->tpl_vars['group']->value->name === 'admin') {?>
													Admin
												<?php } else { ?>
													Umum
												<?php }?>
											</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
									<?php if (form_error('group')) {?>
										<small class="text-danger"><?php echo form_error('group');?>
</small>
									<?php }?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" value="<?php echo (($tmp = @set_value('email'))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user']->value->email : $tmp);?>
" class="form-control <?php if (form_error('email')) {?>is-invalid<?php }?>">
									<?php if (form_error('email')) {?>
										<small class="text-danger"><?php echo form_error('email');?>
</small>
									<?php }?>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="password">Password Baru</label>
									<input type="password" name="password" value="" class="form-control <?php if (form_error('password')) {?>is-invalid<?php }?>">
									<?php if (form_error('password')) {?>
										<small class="text-danger"><?php echo form_error('password');?>
</small>
									<?php }?>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="password_confirm">Konfirmasi Password</label>
									<input type="password" name="password_confirm" value="" class="form-control <?php if (form_error('password_confirm')) {?>is-invalid<?php }?>" placeholder="Ulangi password">
									<?php if (form_error('password_confirm')) {?>
										<small class="text-danger"><?php echo form_error('password_confirm');?>
</small>
									<?php }?>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="id_standar">Standar</label>
									<select name="id_standar" id="id_standar" class="form-control <?php if (form_error('id_standar')) {?>is-invalid<?php }?>">
										<option value="" <?php if (empty(set_value('group'))) {?>selected<?php }?> disabled>Pilih standar</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['this']->value->db->get('standar')->result(), 'standar');
$_smarty_tpl->tpl_vars['standar']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['standar']->value) {
$_smarty_tpl->tpl_vars['standar']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['standar']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['selected_standar']->value === $_smarty_tpl->tpl_vars['standar']->value->id) {?>selected<?php }?>>
												<?php echo $_smarty_tpl->tpl_vars['standar']->value->nama;?>

											</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
									<?php if (form_error('id_standar')) {?>
										<small class="text-danger"><?php echo form_error('id_standar');?>
</small>
									<?php }?>
								</div>
							</div>
							<div class="col-12">
								<div class="alert alert-warning">
									Isi kolom <strong>Password Baru</strong> hanya jika ingin mengubah password
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-end">	
							<button type="submit" class="btn btn-primary">
								Simpan
							</button>
						</div>
					<?php echo form_close();?>

				</div>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block 'admin_content'} */
}
