<?php
/* Smarty version 3.1.36, created on 2020-10-22 17:36:55
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\dokumen-show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f91a717023876_64505317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a56e71ecbd93b289df407c606be7f2e6e05abff' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\dokumen-show.tpl',
      1 => 1603381014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f91a717023876_64505317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('title', "Detail Dokumen");?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13329289085f91a71701d581_22402083', 'admin_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/dashboard.tpl");
}
/* {block 'admin_content'} */
class Block_13329289085f91a71701d581_22402083 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_content' => 
  array (
    0 => 'Block_13329289085f91a71701d581_22402083',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						<a href="/dokumen"><i class="fas fa-arrow-left mr-2 text-muted"></i></a>
						Detail Dokumen
					</h6>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-8 col-lg-5">
							<div class="form-group">
								<label for="ts">TS</label>
								<div class="text-body">
									<strong><?php echo $_smarty_tpl->tpl_vars['dokumen']->value->ta_1;?>
/<?php echo $_smarty_tpl->tpl_vars['dokumen']->value->ta_2;?>
</strong>
								</div>
							</div>
							<div class="form-group">
								<label for="id_standar">Kriteria</label>
								<div class="text-body">
									<strong><?php echo $_smarty_tpl->tpl_vars['kriteria']->value->id;?>
. <?php echo xss_clean($_smarty_tpl->tpl_vars['kriteria']->value->nama);?>
</strong>
								</div>
							</div>
							<div class="form-group">
								<label for="file">Dokumen</label>
								<div>
									<a href="<?php echo $_smarty_tpl->tpl_vars['dokumen']->value->path;?>
" class="btn btn-sm btn-dark">
										Unduh
									</a>
								</div>
							</div>
							<div class="form-group">
								<label for="nama">Nama Dokumen</label>
								<div class="text-body">
									<strong><?php echo xss_clean($_smarty_tpl->tpl_vars['dokumen']->value->nama);?>
</strong>
								</div>
							</div>
							<div class="form-group">
								<label for="deskripsi">Deskripsi</label>
								<div class="text-body">
									<strong><?php echo xss_clean(nl2br($_smarty_tpl->tpl_vars['dokumen']->value->deskripsi));?>
</strong>
								</div>
							</div>
							<hr>
							<a href="/dokumen/edit/<?php echo $_smarty_tpl->tpl_vars['dokumen']->value->id;?>
" class="btn btn-primary btn-icon-split">
								<div class="icon text-white-50">
									<i class="fas fa-pencil-alt"></i>
								</div>
								<div class="text">
									Edit
								</div>
							</a>
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
