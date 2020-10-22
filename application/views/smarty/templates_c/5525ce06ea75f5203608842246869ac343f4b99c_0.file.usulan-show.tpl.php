<?php
/* Smarty version 3.1.36, created on 2020-10-21 14:25:11
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\identitas-show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f9028a72ed187_06410702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5525ce06ea75f5203608842246869ac343f4b99c' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\identitas-show.tpl',
      1 => 1603283110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9028a72ed187_06410702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('title', "Identitas ".((string)$_smarty_tpl->tpl_vars['identitas']->value->id));?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3475835405f9028a72d65e3_90124968', 'admin_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/dashboard.tpl");
}
/* {block 'admin_content'} */
class Block_3475835405f9028a72d65e3_90124968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_content' => 
  array (
    0 => 'Block_3475835405f9028a72d65e3_90124968',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						<a href="/identitas"><i class="fas fa-arrow-left mr-2 text-muted"></i></a>
						Pengusul: <?php echo $_smarty_tpl->tpl_vars['identitas']->value->pengusul->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['identitas']->value->pengusul->last_name;?>

					</h6>
				</div>
				<div class="card-body">
					<fieldset>
						<legend class="text-primary">
							<strong>Identitas Program Studi</strong>
						</legend>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="program_studi">Program Studi</label>
									<div class="text-body">
										<strong>Pendidikan Luar Sekolah</strong>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="jenis_program">Jenis Program</label>
									<div class="text-body">
										<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->jenis_program);?>
</strong>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="peringkat_akreditasi">Peringkat Akreditasi</label>
									<div class="text-body">
										<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->peringkat_akreditasi);?>
</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="no_sk_ban_pt">No. SK BAN-PT</label>
									<div class="text-body">
										<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->no_sk_ban_pt);?>
</strong>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="tgl_kadaluarsa_sk_ban_pt">Tanggal Kadaluarsa SK BAN-PT</label>
									<div class="text-body">
										<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->tgl_kadaluarsa_sk_ban_pt);?>
</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="unit_pengelola">Unit Pengelola</label>
									<div class="text-body">
										<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->unit_pengelola);?>
</strong>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="perguruan_tinggi">Perguruan Tinggi</label>
									<div class="text-body">
										<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->perguruan_tinggi);?>
</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<div class="text-body">
								<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->alamat);?>
</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="telepon">Telepon</label>
									<div class="text-body">
										<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->alamat);?>
</strong>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="email">Email</label>
									<div class="text-body">
										<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->email);?>
</strong>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="website">Website</label>
									<div class="text-body">
										<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->website);?>
</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							Tahun Ajaran
							<div class="ts mt-2">
								<div class="text-body">
									<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->ts_1);?>
/<?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->ts_2);?>
</strong>
								</div>
							</div>
						</div>
					</fieldset>
					<hr>
					<fieldset>
						<legend class="text-primary">
							<strong>Dokumen Kriteria</strong>
						</legend>
						<div class="form-group">
							<label for="id_standar">Kriteria</label>
							<div class="text-body">
								<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->kriteria->nama);?>
</strong>
							</div>
						</div>
						<div class="form-group">
							<label for="file">dokumen</label>
							<div>
								<a href="<?php echo $_smarty_tpl->tpl_vars['identitas']->value->dokumen->path;?>
" class="btn btn-primary">
									Unduh
								</a>
							</div>
						</div>
						<div class="form-group">
							<label for="nama">Nama Dokumen</label>
							<div class="text-body">
								<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->dokumen->nama);?>
</strong>
							</div>
						</div>
						<div class="form-group">
							<label for="deskripsi">Deskripsi</label>
							<div class="text-body">
								<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->dokumen->deskripsi);?>
</strong>
							</div>
						</div>
						<div class="form-group">
							<label for="lokasi">Lokasi</label>
							<div class="text-body">
								<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->dokumen->lokasi);?>
</strong>
							</div>
						</div>
						<div class="form-group">
							<label for="rak">Rak</label>
							<div class="text-body">
								<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->dokumen->rak);?>
</strong>
							</div>
						</div>
						<div class="form-group">
							<label for="koordinator">Koordinator</label>
							<div class="text-body">
								<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->dokumen->koordinator);?>
</strong>
							</div>
						</div>
					</fieldset>
					<a href="/identitas" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left mr-2 text-white"></i> Kembali</a>
				</div>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block 'admin_content'} */
}
