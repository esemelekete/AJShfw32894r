<?php
/* Smarty version 3.1.36, created on 2020-10-22 13:08:56
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\ts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f916848c94769_20559265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c708e289c870389b771c9f25e787c2a1abf75f3' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\ts.tpl',
      1 => 1603364936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f916848c94769_20559265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('title', "Manajemen TS");?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18822103915f916848c88364_91479937', 'script');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_446653955f916848c88fd0_38027518', 'admin_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/dashboard.tpl");
}
/* {block 'script'} */
class Block_18822103915f916848c88364_91479937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_18822103915f916848c88364_91479937',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
>
		function onDelete(e)
		{
			if (confirm("Identitas Program Studi dan Semua Dokumen pada Tahun Akademik yang Anda pilih akan dihapus. Apakah Anda yakin?"))
			{
				return true
			}

			return false
		}
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'script'} */
/* {block 'admin_content'} */
class Block_446653955f916848c88fd0_38027518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_content' => 
  array (
    0 => 'Block_446653955f916848c88fd0_38027518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">	
		<div class="col-12">
			<a href="/ts/create" class="btn btn-primary btn-icon-split">
				<span class="icon text-white-50">
					<i class="fas fa-plus"></i>
				</span>
				<span class="text">Tambah Baru</span>
			</a>
		</div>
	</div>
	<div class="row mt-3">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ts']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>			
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
									<?php echo $_smarty_tpl->tpl_vars['item']->value->ta_1;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->ta_2;?>

								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">
									<a href="/identitas/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" class="btn btn-sm btn-info btn-icon-split mr-1">
										<span class="icon text-white">
											<i class="fas fa-file-alt"></i>
										</span>
										<span class="text">Identitas</span>
									</a>							
									<?php echo form_open('/ts/delete','onsubmit="return onDelete(event)" class="d-inline"');?>

										<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
">
										<button type="submit" class="btn btn-sm btn-danger">
											<i class="fas fa-trash"></i>
										</button>
									<?php echo form_close();?>

								</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-calendar fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</div>		
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
<?php
}
}
/* {/block 'admin_content'} */
}
