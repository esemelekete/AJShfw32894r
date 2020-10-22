<?php
/* Smarty version 3.1.36, created on 2020-10-22 12:47:16
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\identitas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f916334a77118_47966632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be6f9eeb794224f4495197465bcfe23653d0851d' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\identitas.tpl',
      1 => 1603363636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f916334a77118_47966632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16685124035f916334a6dbf1_10953416', 'admin_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/dashboard.tpl");
}
/* {block 'admin_content'} */
class Block_16685124035f916334a6dbf1_10953416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_content' => 
  array (
    0 => 'Block_16685124035f916334a6dbf1_10953416',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						Identitas Program Studi
					</h6>
				</div>
				<div class="card-body">
					<a href="/identitas/create" class="btn btn-success btn-icon-split mb-2">
						<div class="icon text-white-50">
							<div class="fas fa-plus"></div>
						</div>
						<div class="text">
							Identitas Baru
						</div>
					</a>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>TS</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['identitas']->value, 'id');
$_smarty_tpl->tpl_vars['id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->do_else = false;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['id']->value->ta_1;?>
/<?php echo $_smarty_tpl->tpl_vars['id']->value->ta_2;?>
</td>
										<td>
											waw
										</td>
									</tr>
								<?php
}
if ($_smarty_tpl->tpl_vars['id']->do_else) {
?>
									<tr>
										<td colspan="2">Tidak ada data</td>
									</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tbody>
						</table>
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
