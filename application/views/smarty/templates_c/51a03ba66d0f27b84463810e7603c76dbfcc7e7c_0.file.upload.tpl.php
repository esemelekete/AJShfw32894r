<?php
/* Smarty version 3.1.36, created on 2020-10-21 14:19:14
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\upload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f902742a928b1_42307765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51a03ba66d0f27b84463810e7603c76dbfcc7e7c' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\upload.tpl',
      1 => 1603282752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f902742a928b1_42307765 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5262207985f902742a5e5c5_02332143', 'admin_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/dashboard.tpl");
}
/* {block 'admin_content'} */
class Block_5262207985f902742a5e5c5_02332143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_content' => 
  array (
    0 => 'Block_5262207985f902742a5e5c5_02332143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						Formulir
					</h6>
				</div>
				<div class="card-body">
					<?php echo form_open(null,'enctype="multipart/form-data"');?>

						<fieldset>
							<legend class="text-primary">
								<strong>Identitas Program Studi</strong>
							</legend>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="program_studi">Program Studi</label>
										<input type="text" class="form-control <?php if (form_error('program_studi')) {?>is-invalid<?php }?>" value="Pendidikan Luar Sekolah" readonly>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="jenis_program">Jenis Program</label>
										<select name="jenis_program" id="jenis_program" required class="form-control">
											<option selected disabled>Pilih Jenis Program</option>
											<option value="D3" <?php if (set_value('jenis_program') == 'D3') {?>selected<?php }?>>D3</option>
											<option value="S1" <?php if (set_value('jenis_program') == 'S1') {?>selected<?php }?>>S1</option>
											<option value="S2" <?php if (set_value('jenis_program') == 'S2') {?>selected<?php }?>>S2</option>
										</select>
										<?php if (form_error('jenis_program')) {?>
											<small class="text-danger">
												<?php echo form_error('jenis_program');?>

											</small>
										<?php }?>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="peringkat_akreditasi">Peringkat Akreditasi</label>
										<input type="text" name="peringkat_akreditasi" value="<?php echo set_value('peringkat_akreditasi');?>
" class="form-control <?php if (form_error('peringkat_akreditasi')) {?>is-invalid<?php }?>" placeholder="Contoh: A, B, C">
										<?php if (form_error('peringkat_akreditasi')) {?>
											<small class="text-danger">
												<?php echo form_error('peringkat_akreditasi');?>

											</small>
										<?php }?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="no_sk_ban_pt">No. SK BAN-PT</label>
										<input type="text" name="no_sk_ban_pt" value="<?php echo set_value('no_sk_ban_pt');?>
" class="form-control <?php if (form_error('no_sk_ban_pt')) {?>is-invalid<?php }?>">
										<?php if (form_error('no_sk_ban_pt')) {?>
											<small class="text-danger">
												<?php echo form_error('no_sk_ban_pt');?>

											</small>
										<?php }?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="tgl_kadaluarsa_sk_ban_pt">Tanggal Kadaluarsa SK BAN-PT</label>
										<input type="date" name="tgl_kadaluarsa_sk_ban_pt" value="<?php echo set_value('tgl_kadaluarsa_sk_ban_pt');?>
" class="form-control <?php if (form_error('tgl_kadaluarsa_sk_ban_pt')) {?>is-invalid<?php }?>">
										<?php if (form_error('tgl_kadaluarsa_sk_ban_pt')) {?>
											<small class="text-danger">
												<?php echo form_error('tgl_kadaluarsa_sk_ban_pt');?>

											</small>
										<?php }?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="unit_pengelola">Unit Pengelola</label>
										<input type="text" name="unit_pengelola" value="<?php echo set_value('unit_pengelola');?>
" class="form-control <?php if (form_error('unit_pengelola')) {?>is-invalid<?php }?>">
										<?php if (form_error('unit_pengelola')) {?>
											<small class="text-danger">
												<?php echo form_error('unit_pengelola');?>

											</small>
										<?php }?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="perguruan_tinggi">Perguruan Tinggi</label>
										<input type="text" value="Universitas Singaperbangsa Karawang" class="form-control <?php if (form_error('perguruan_tinggi')) {?>is-invalid<?php }?>" readonly>
										<?php if (form_error('perguruan_tinggi')) {?>
											<small class="text-danger">
												<?php echo form_error('perguruan_tinggi');?>

											</small>
										<?php }?>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<textarea name="alamat" class="form-control <?php if (form_error('alamat')) {?>is-invalid<?php }?>"><?php echo set_value('alamat');?>
</textarea>
								<?php if (form_error('alamat')) {?>
									<small class="text-danger">
										<?php echo form_error('alamat');?>

									</small>
								<?php }?>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="telepon">Telepon</label>
										<input type="text" name="telepon" value="<?php echo set_value('telepon');?>
" class="form-control <?php if (form_error('telepon')) {?>is-invalid<?php }?>">
										<?php if (form_error('telepon')) {?>
											<small class="text-danger">
												<?php echo form_error('telepon');?>

											</small>
										<?php }?>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="email">Email</label>
										<input type="text" name="email" value="<?php echo set_value('email');?>
" class="form-control <?php if (form_error('email')) {?>is-invalid<?php }?>">
										<?php if (form_error('email')) {?>
											<small class="text-danger">
												<?php echo form_error('email');?>

											</small>
										<?php }?>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="website">Website</label>
										<input type="text" name="website" value="<?php echo set_value('website');?>
" class="form-control <?php if (form_error('website')) {?>is-invalid<?php }?>">
										<?php if (form_error('website')) {?>
											<small class="text-danger">
												<?php echo form_error('website');?>

											</small>
										<?php }?>
									</div>
								</div>
							</div>
							<div class="form-group">
								Tahun Ajaran
								<div class="ts mt-2">
									<input type="text" name="ts_1" value="<?php echo set_value('ts_1');?>
" class="form-control" style="display: inline-block!important; width: 80px!important">
									/
									<input type="text" name="ts_2" value="<?php echo set_value('ts_2');?>
" class="form-control" style="display: inline-block!important; width: 80px!important">
									<?php if (form_error('ts_1') || form_error('ts_2')) {?>
										<small class="text-danger">
											<?php echo form_error('ts_1');?>

											<?php echo form_error('ts_2');?>

										</small>
									<?php }?>
								</div>
							</div>
						</fieldset>
						<hr>
						<fieldset>
							<legend class="text-primary">
								<strong>Dokumen Standar</strong>
							</legend>
							<div class="form-group">
								<label for="id_standar">Standar</label>
								<?php if ($_smarty_tpl->tpl_vars['this']->value->ion_auth->in_group('admin')) {?>
									<?php $_smarty_tpl->_assignInScope('standar', $_smarty_tpl->tpl_vars['this']->value->db->get('standar')->result());?>
									<select name="id_standar" id="id_standar" class="form-control">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['standar']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
											<option
												value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
"
												<?php if (set_value('id_standar') == $_smarty_tpl->tpl_vars['s']->value->id) {?>selected<?php }?>
												>
												<?php echo $_smarty_tpl->tpl_vars['s']->value->nama;?>

											</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
									<?php if (form_error('id_standar')) {?>
										<small class="text-danger">
											<?php echo form_error('id_standar');?>

										</small>
									<?php }?>
								<?php } else { ?>
									<div class="text-body">
										<?php echo $_smarty_tpl->tpl_vars['this']->value->db->where('id',$_smarty_tpl->tpl_vars['this']->value->ion_auth->user()->row()->id_standar)->get('standar')->row()->nama;?>

									</div>
								<?php }?>
							</div>
							<div class="form-group">
								<label for="file">Unggah dokumen</label>
								<div>
									<input type="file" name="file" id="file" accept="application/pdf,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/msword,application/vnd.openxmlformats-officedocument.wordprocessing" required>
								</div>
								<?php if (form_error('file') || (isset($_smarty_tpl->tpl_vars['file_error']->value))) {?>
									<small class="text-danger">
										<?php echo form_error('file');?>

										<?php echo (($tmp = @$_smarty_tpl->tpl_vars['file_error']->value)===null||$tmp==='' ? '' : $tmp);?>

									</small>
								<?php }?>
							</div>
							<div class="form-group">
								<label for="nama">Nama Dokumen</label>
								<input type="text" name="nama" value="<?php echo set_value('nama');?>
" class="form-control <?php if (form_error('nama')) {?>is-invalid<?php }?>">
								<?php if (form_error('nama')) {?>
									<small class="text-danger">
										<?php echo form_error('nama');?>

									</small>
								<?php }?>
							</div>
							<div class="form-group">
								<label for="deskripsi">Deskripsi</label>
								<textarea name="deskripsi" class="form-control <?php if (form_error('deskripsi')) {?>is-invalid<?php }?>"><?php echo set_value('deskripsi');?>
</textarea>
								<?php if (form_error('deskripsi')) {?>
									<small class="text-danger">
										<?php echo form_error('deskripsi');?>

									</small>
								<?php }?>
							</div>
							<div class="form-group">
								<label for="lokasi">Lokasi</label>
								<input type="text" name="lokasi" value="<?php echo set_value('lokasi');?>
" class="form-control <?php if (form_error('lokasi')) {?>is-invalid<?php }?>">
								<?php if (form_error('lokasi')) {?>
									<small class="text-danger">
										<?php echo form_error('lokasi');?>

									</small>
								<?php }?>
							</div>
							<div class="form-group">
								<label for="rak">Rak</label>
								<input type="text" name="rak" value="<?php echo set_value('rak');?>
" class="form-control <?php if (form_error('rak')) {?>is-invalid<?php }?>">
								<?php if (form_error('rak')) {?>
									<small class="text-danger">
										<?php echo form_error('rak');?>

									</small>
								<?php }?>
							</div>
							<div class="form-group">
								<label for="koordinator">Koordinator</label>
								<input type="text" name="koordinator" value="<?php echo set_value('koordinator');?>
" class="form-control <?php if (form_error('koordinator')) {?>is-invalid<?php }?>">
								<?php if (form_error('koordinator')) {?>
									<small class="text-danger">
										<?php echo form_error('koordinator');?>

									</small>
								<?php }?>
							</div>
						</fieldset>
						<button type="submit" class="btn btn-primary">Kirim</button>
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
