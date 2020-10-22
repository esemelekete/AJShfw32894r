<?php
/* Smarty version 3.1.36, created on 2020-10-22 07:52:21
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f911e15824ca3_39173852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52f6b7363b2d378325fe6f6dfd84f45d177f5cf4' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\users.tpl',
      1 => 1603345940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f911e15824ca3_39173852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('title', "Manajemen Pengguna");?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4617834015f911e15812e03_61678910', 'admin_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/dashboard.tpl");
}
/* {block 'admin_content'} */
class Block_4617834015f911e15812e03_61678910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_content' => 
  array (
    0 => 'Block_4617834015f911e15812e03_61678910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						Semua Pengguna
					</h6>
				</div>
				<div class="card-body">
					<a href="/users/create" class="btn btn-success btn-icon-split mb-4">
						<div class="icon text-white-50">
							<div class="fas fa-plus"></div>
						</div>
						<div class="text">
							Tambahkan pengguna
						</div>
					</a>

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Email</th>
									<th>Hak akses</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
										<td>
											<?php if ($_smarty_tpl->tpl_vars['this']->value->ion_auth->get_users_groups($_smarty_tpl->tpl_vars['user']->value->id)->row()->name === 'generic') {?>
												Umum
											<?php } else { ?>
												Admin
											<?php }?>
										</td>
										<td>
											<a href="/users/edit/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="btn btn-sm btn-primary">
												Edit
											</a>
											<?php echo form_open('/users/delete','class="d-inline"');?>

												<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">
												<button type="submit" class="btn btn-confirm btn-sm btn-danger">
													Hapus
												</button>
											<?php echo form_close();?>

										</td>
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
