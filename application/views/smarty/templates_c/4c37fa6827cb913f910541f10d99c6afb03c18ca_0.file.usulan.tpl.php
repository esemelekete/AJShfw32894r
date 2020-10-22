<?php
/* Smarty version 3.1.36, created on 2020-10-21 14:18:06
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\identitas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f9026fed6ad42_47066889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c37fa6827cb913f910541f10d99c6afb03c18ca' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\identitas.tpl',
      1 => 1603282686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9026fed6ad42_47066889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10881120335f9026fed48d75_64752886', 'admin_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/dashboard.tpl");
}
/* {block 'admin_content'} */
class Block_10881120335f9026fed48d75_64752886 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_content' => 
  array (
    0 => 'Block_10881120335f9026fed48d75_64752886',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
							Semua Identitas
						<?php } else { ?>
							Identitas Saya
						<?php }?>
					</h6>
				</div>
				<div class="card-body">
					<a href="/upload" class="btn btn-success btn-icon-split mb-2">
						<div class="icon text-white-50">
							<div class="fas fa-plus"></div>
						</div>
						<div class="text">
							Unggah Dokumen
						</div>
					</a>
					<hr>

					<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>						
						<form class="d-flex" method="GET">
							<div class="form-group mr-3">
								<label for="id_pengusul">Pengusul</label>
								<select name="id_pengusul" id="id_pengusul" class="form-control">
									<option 
										value="" 
										<?php if (empty($_smarty_tpl->tpl_vars['this']->value->input->get('id_pengusul'))) {?>
											selected
										<?php }?>>
									</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['this']->value->db->get('users')->result(), 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
										<option 
											value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"
											<?php if ($_smarty_tpl->tpl_vars['this']->value->input->get('id_pengusul') === $_smarty_tpl->tpl_vars['user']->value->id) {?>
												selected
											<?php }?>>
											<?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>

										</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<div class="form-group mr-3">
								<label for="id_standar">Kriteria</label>
								<select name="id_standar" id="id_standar" class="form-control">
									<option
										value=""
										<?php if (empty($_smarty_tpl->tpl_vars['this']->value->input->get('id_standar'))) {?>
											selected
										<?php }?>>
									</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['this']->value->db->get('kriteria')->result(), 'kriteria');
$_smarty_tpl->tpl_vars['kriteria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kriteria']->value) {
$_smarty_tpl->tpl_vars['kriteria']->do_else = false;
?>
										<option
											value="<?php echo $_smarty_tpl->tpl_vars['kriteria']->value->id;?>
"
											<?php if ($_smarty_tpl->tpl_vars['this']->value->input->get('id_standar') === $_smarty_tpl->tpl_vars['kriteria']->value->id) {?>
												selected
											<?php }?>><?php echo $_smarty_tpl->tpl_vars['kriteria']->value->nama;?>

										</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<div class="form-group">
								<label class="invisible">a</label>
								<div>
									<button type="submit" class="btn btn-primary btn-icon-split">
										<div class="icon text-white-50">
											<div class="fas fa-filter"></div>
										</div>
										<div class="text">
											Saring
										</div>
									</button>
								</div>
							</div>
						</form>
					<?php }?>

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Kriteria</th>
									<th>Pengusul</th>
									<th>Dokumen</th>
									<th>Tanggal</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['identitas']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
</td>
										<td style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['u']->value->kriteria->nama;?>
</td>
										<td style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['u']->value->pengusul->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value->pengusul->last_name;?>
</td>
										<td class="text-center">
											<a href="<?php echo $_smarty_tpl->tpl_vars['u']->value->dokumen->path;?>
" class="btn btn-sm btn-dark">
												Unduh
											</a>
										</td>
										<td style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['u']->value->tanggal_usulan;?>
</td>
										<td style="white-space: nowrap">
											<a href="/identitas/show/<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
" class="btn btn-sm btn-primary">Lihat</a>

											<a href="/upload/edit/<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
" class="btn btn-sm btn-primary">Edit</a>

											<?php echo form_open('/identitas/delete','class="d-inline"');?>

												<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['u']->value->id;?>
">
												<button type="submit" class="btn btn-sm btn-confirm btn-danger">Hapus</button>
											<?php echo form_close();?>

										</td>
									</tr>
								<?php
}
if ($_smarty_tpl->tpl_vars['u']->do_else) {
?>
									<tr>
										<td colspan="6" class="text-center">Tidak ada data</td>
									</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tbody>
						</table>
					</div>
					<div class="d-flex justify-content-center">
						<?php echo $_smarty_tpl->tpl_vars['this']->value->pagination->create_links();?>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block 'admin_content'} */
}
