<?php
/* Smarty version 3.1.36, created on 2020-10-22 13:48:21
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\ts-create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f91718563aec6_22403687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adea920034a278fd5d06e027e3e6b53bf6deeefc' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\ts-create.tpl',
      1 => 1603367300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f91718563aec6_22403687 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8891038155f917185618287_61154037', 'admin_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/dashboard.tpl");
}
/* {block 'admin_content'} */
class Block_8891038155f917185618287_61154037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_content' => 
  array (
    0 => 'Block_8891038155f917185618287_61154037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						Tambahkan TS
					</h6>
				</div>
				<div class="card-body text-body">
					<?php echo form_open(null,'enctype="multipart/form-data"');?>

						<input type="hidden" name="ts_unik" value="1">
						<input type="hidden" name="ts_ngaco" value="1">
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
" class="form-control <?php if (form_error('website')) {?> is-invalid <?php }?>">
									<?php if (form_error('website')) {?>
										<small class="text-danger">
											<?php echo form_error('website');?>

										</small>
									<?php }?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="ts">Tahun Akademik</label>
							<div class="clearfix"></div>
								<input type="text" name="ts" id="ts" value="<?php echo set_value('ts');?>
" class="form-control d-inline-block <?php if (form_error('ts') || form_error('ts_ngaco') || form_error('ts_unik')) {?>is-invalid<?php }?>" style="width: unset">
							<div class="clearfix"></div>
							<small class="text-muted">Contoh: 2020/2021</small>
							<?php if (form_error('ts') || form_error('ts_unik') || form_error('ts_ngaco')) {?>
								<div>
									<small class="text-danger">
										<?php echo (($tmp = @form_error('ts'))===null||$tmp==='' ? form_error('ts_ngaco') : $tmp);?>

										<?php echo form_error('ts_unik');?>

									</small>
								</div>
							<?php }?>
						</div>
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
