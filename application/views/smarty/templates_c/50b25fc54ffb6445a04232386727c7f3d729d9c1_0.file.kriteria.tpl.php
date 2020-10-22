<?php
/* Smarty version 3.1.36, created on 2020-10-22 11:24:02
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\kriteria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f914fb21ef6e2_96502107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50b25fc54ffb6445a04232386727c7f3d729d9c1' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\kriteria.tpl',
      1 => 1603357639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f914fb21ef6e2_96502107 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('title', "Manajemen Kriteria");?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8803191485f914fb2144097_17661403', 'admin_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/dashboard.tpl");
}
/* {block 'admin_content'} */
class Block_8803191485f914fb2144097_17661403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_content' => 
  array (
    0 => 'Block_8803191485f914fb2144097_17661403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						Semua Kriteria
					</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">	
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th class="text-center">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kriteria']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>									
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['s']->value->id;?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['s']->value->nama;?>
</td>
										<td class="text-center">
											<?php echo form_open(('/kriteria/edit/').($_smarty_tpl->tpl_vars['s']->value->id),'onsubmit="onEdit(event)"');?>

												<input type="hidden" name="nama">
												<button data-nama="<?php echo $_smarty_tpl->tpl_vars['s']->value->nama;?>
" type="submit" class="btn btn-sm btn-primary">
													<i class="fas fa-pencil-alt"></i>
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
				</div>
			</div>
		</div>
	</div>

	<?php echo '<script'; ?>
>
		function onEdit(e)
		{
			const $form = e.target
			const $button = $form.querySelector('button')
			const $input = $form.querySelector('input')

			$input.value = $button.dataset.nama

			if ($input.value = prompt("Ubah nama kriteria", $input.value))
			{
				$form.submit()
			}
			else
			{
				e.preventDefault()
			}
		}
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'admin_content'} */
}
