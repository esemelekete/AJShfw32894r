<?php
/* Smarty version 3.1.36, created on 2020-10-22 14:25:34
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\users-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f917a3eb02236_48741358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8a7d42a7bec984bc171b79d96191a4d0a6405c7' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\users-edit.tpl',
      1 => 1603369534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f917a3eb02236_48741358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('title', "Edit Pengguna");?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10104975855f917a3eae3bd9_51073252', 'admin_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/dashboard.tpl");
}
/* {block 'admin_content'} */
class Block_10104975855f917a3eae3bd9_51073252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_content' => 
  array (
    0 => 'Block_10104975855f917a3eae3bd9_51073252',
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
									<label for="id_kriteria">Kriteria</label>
									<select name="id_kriteria" id="id_kriteria" class="form-control <?php if (form_error('id_kriteria')) {?>is-invalid<?php }?>">
										<option value="" <?php if (empty(set_value('group'))) {?>selected<?php }?> disabled>Pilih kriteria</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['this']->value->db->get('kriteria')->result(), 'kriteria');
$_smarty_tpl->tpl_vars['kriteria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kriteria']->value) {
$_smarty_tpl->tpl_vars['kriteria']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['kriteria']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['selected_kriteria']->value === $_smarty_tpl->tpl_vars['kriteria']->value->id) {?>selected<?php }?>>
												<?php echo $_smarty_tpl->tpl_vars['kriteria']->value->nama;?>

											</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
									<?php if (form_error('id_kriteria')) {?>
										<small class="text-danger"><?php echo form_error('id_kriteria');?>
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
