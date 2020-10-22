<?php
/* Smarty version 3.1.36, created on 2020-10-22 14:24:05
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\identitas-show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f9179e59c0672_03073522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be6f55fa53b78d9b6a4ed17b35be7dd0025e4f40' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\identitas-show.tpl',
      1 => 1603369444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9179e59c0672_03073522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('title', "TS ".((string)$_smarty_tpl->tpl_vars['identitas']->value->ta_1)."/".((string)$_smarty_tpl->tpl_vars['identitas']->value->ta_2));?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13140625795f9179e59b4bc0_51266131', 'admin_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/dashboard.tpl");
}
/* {block 'admin_content'} */
class Block_13140625795f9179e59b4bc0_51266131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_content' => 
  array (
    0 => 'Block_13140625795f9179e59b4bc0_51266131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						<a href="/ts"><i class="fas fa-arrow-left mr-2 text-muted"></i></a>
						Identitas Program Studi
					</h6>
				</div>
				<div class="card-body text-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="program_studi">Program Studi</label>
								<div class="text-body">
									<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->program_studi);?>
</strong>
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
									<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['identitas']->value->telepon);?>
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
				</div>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block 'admin_content'} */
}
