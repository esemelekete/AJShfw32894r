<?php
/* Smarty version 3.1.36, created on 2020-10-22 17:42:03
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\dokumen.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f91a84b3c78b8_12854411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22488677d41e41ca539166c76f141baa4537a488' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\dokumen.tpl',
      1 => 1603381322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f91a84b3c78b8_12854411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('is_admin', $_smarty_tpl->tpl_vars['this']->value->ion_auth->is_admin());?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19809973735f91a84b3accc0_20712501', 'admin_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/dashboard.tpl");
}
/* {block 'admin_content'} */
class Block_19809973735f91a84b3accc0_20712501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_content' => 
  array (
    0 => 'Block_19809973735f91a84b3accc0_20712501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						Daftar Dokumen
					</h6>
				</div>
				<div class="card-body">
					<a href="/dokumen/create" class="btn btn-success btn-icon-split mb-3">
						<div class="icon text-white-50">
							<div class="fas fa-plus"></div>
						</div>
						<div class="text">
							Unggah Dokumen
						</div>
					</a>
					<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>						
						<hr>
						<form class="d-flex form-inline">
							<div class="mr-3 mb-3">
								<i class="fas fa-filter mr-1"></i>
								Saring
							</div>
							<select name="id_ts" class="form-control mr-3 mb-3">
								<option value="" <?php if (empty($_smarty_tpl->tpl_vars['this']->value->input->get('id_ts'))) {?>selected<?php }?> disabled>TS</option>
								<option value="">Semua</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ts']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['this']->value->input->get('id_ts') === $_smarty_tpl->tpl_vars['t']->value->id) {?>selected<?php }?>>- <?php echo $_smarty_tpl->tpl_vars['t']->value->ta_1;?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value->ta_2;?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
							<select name="id_kriteria" class="form-control mr-3 mb-3">
								<option value="" <?php if (empty($_smarty_tpl->tpl_vars['this']->value->input->get('id_kriteria'))) {?>selected<?php }?> disabled>Kriteria</option>
								<option value="">Semua</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kriteria']->value, 'k');
$_smarty_tpl->tpl_vars['k']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['this']->value->input->get('id_kriteria') === $_smarty_tpl->tpl_vars['k']->value->id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['k']->value->id;?>
. <?php echo $_smarty_tpl->tpl_vars['k']->value->nama;?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
							<select name="id_user" class="form-control mr-3 mb-3">
								<option value="" <?php if (empty($_smarty_tpl->tpl_vars['this']->value->input->get('id_user'))) {?>selected<?php }?> disabled>Pengguna</option>
								<option value="">Semua</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['this']->value->input->get('id_user') === $_smarty_tpl->tpl_vars['user']->value->id) {?>selected<?php }?>>- <?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
							<button type="submit" class="btn btn-primary mb-3">Terapkan</button>
						</form>
					<?php }?>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Kriteria</th>
									<th>Pengunggah</th>
									<th>Dokumen</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dokumen']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['d']->value->id_kriteria;?>
. <?php echo $_smarty_tpl->tpl_vars['d']->value->nama_kriteria;?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['d']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['d']->value->last_name;?>
</td>
										<td>
											<a href="<?php echo $_smarty_tpl->tpl_vars['d']->value->path;?>
" class="btn btn-sm btn-dark">Unduh</a>
										</td>
										<td>
											<a href="/dokumen/show/<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
" class="btn btn-sm btn-primary">Lihat</a>
											<a href="/dokumen/edit/<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
" class="btn btn-sm btn-primary">Edit</a>
											<?php echo form_open('/dokumen/delete','class="d-inline"');?>

												<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
">
												<button type="submit" class="btn btn-confirm btn-sm btn-danger">Hapus</button>
											<?php echo form_close();?>

										</td>
									</tr>
								<?php
}
if ($_smarty_tpl->tpl_vars['d']->do_else) {
?>
									<tr>
										<td colspan="5" class="text-center">Tidak ada data</td>
									</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tbody>
						</table>
					</div>
					<?php echo $_smarty_tpl->tpl_vars['this']->value->pagination->create_links();?>

				</div>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block 'admin_content'} */
}
