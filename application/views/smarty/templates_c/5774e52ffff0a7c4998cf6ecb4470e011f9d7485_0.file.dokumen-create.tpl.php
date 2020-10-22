<?php
/* Smarty version 3.1.36, created on 2020-10-22 16:59:51
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\dokumen-create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f919e67b1aea1_17494575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5774e52ffff0a7c4998cf6ecb4470e011f9d7485' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\dokumen-create.tpl',
      1 => 1603378790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f919e67b1aea1_17494575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('title', "Unggah Dokumen");?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18803782885f919e67ab9b86_26248638', 'admin_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/dashboard.tpl");
}
/* {block 'admin_content'} */
class Block_18803782885f919e67ab9b86_26248638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_content' => 
  array (
    0 => 'Block_18803782885f919e67ab9b86_26248638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						Dokumen Baru
					</h6>
				</div>
				<div class="card-body">
					<?php echo form_open(NULL,'enctype="multipart/form-data"');?>

						<div class="row justify-content-center">
							<div class="col-md-8 col-lg-5">
								<div class="form-group">
									<label for="id_ts">TS</label>
									<select name="id_ts" id="id_ts" class="form-control <?php if (form_error('id_ts')) {?>is-invalid<?php }?>">
										<option value="" <?php if (empty(set_value('id_ts'))) {?>selected<?php }?> disabled>Pilih TS</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ts']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
" <?php if (set_value('id_ts') === $_smarty_tpl->tpl_vars['t']->value->id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value->ta_1;?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value->ta_2;?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
									<?php if (form_error('id_ts')) {?>
										<small class="text-danger"><?php echo form_error('id_ts');?>
</small>
									<?php }?>	
								</div>
								<div class="form-group">
									<label for="id_kriteria">Kriteria</label>
									<?php if ($_smarty_tpl->tpl_vars['this']->value->ion_auth->is_admin()) {?>
										<select name="id_kriteria" id="id_kriteria" class="form-control <?php if (form_error('id_kriteria')) {?>is-invalid<?php }?>">
											<option value="" <?php if (empty(set_value('id_kriteria'))) {?>selected<?php }?> disabled>Pilih kriteria</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kriteria']->value, 'k');
$_smarty_tpl->tpl_vars['k']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->do_else = false;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value->id;?>
" <?php if (set_value('id_kriteria') === $_smarty_tpl->tpl_vars['k']->value->id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['k']->value->id;?>
. <?php echo $_smarty_tpl->tpl_vars['k']->value->nama;?>
</option>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</select>
										<?php if (form_error('id_kriteria')) {?>
											<small class="text-danger"><?php echo form_error('id_kriteria');?>
</small>
										<?php }?>	
									<?php } else { ?>
										<div class="text-body">
											<?php echo $_smarty_tpl->tpl_vars['kriteria_user']->value;?>

										</div>
									<?php }?>
								</div>
								<div class="form-group">
									<label for="file">Dokumen</label>
									<div>
										<input type="file" name="file" id="file" accept="application/pdf,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/msword,application/vnd.openxmlformats-officedocument.wordprocessing,text/rtf" required>
										<?php if (form_error('file') || (isset($_smarty_tpl->tpl_vars['file_error']->value))) {?>
											<small class="text-danger">
												<?php echo form_error('file');?>

												<?php echo (($tmp = @$_smarty_tpl->tpl_vars['file_error']->value)===null||$tmp==='' ? '' : $tmp);?>

											</small>
										<?php }?>
									</div>
								</div>
								<div class="form-group">
									<label for="nama">Nama Dokumen</label>
									<input type="text" name="nama" class="form-control <?php if (form_error('nama')) {?>is-invalid<?php }?>" value="<?php echo set_value('nama');?>
">
									<?php if (form_error('nama')) {?>
										<small class="text-danger"><?php echo form_error('nama');?>
</small>
									<?php }?>
								</div>
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<textarea name="deskripsi" id="deskripsi" cols="30" rows="4" class="form-control"><?php echo set_value('deskripsi');?>
</textarea>
								</div>
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
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
