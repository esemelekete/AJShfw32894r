<?php
/* Smarty version 3.1.36, created on 2020-10-21 14:01:25
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\layouts\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f902315077ec3_67959710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25ed8f2a1f07413c295ec9c8bd77959aae2ee4ae' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\layouts\\dashboard.tpl',
      1 => 1603281646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/sidebar.tpl' => 1,
    'file:components/navbar.tpl' => 1,
  ),
),false)) {
function content_5f902315077ec3_67959710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9606926205f9023150010f8_99674765', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/app.tpl");
}
/* {block 'admin_content'} */
class Block_11346468245f9023150766b7_63345665 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'admin_content'} */
/* {block 'content'} */
class Block_9606926205f9023150010f8_99674765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9606926205f9023150010f8_99674765',
  ),
  'admin_content' => 
  array (
    0 => 'Block_11346468245f9023150766b7_63345665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="wrapper">
		<?php $_smarty_tpl->_subTemplateRender("file:components/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<?php $_smarty_tpl->_subTemplateRender("file:components/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user'=>$_smarty_tpl->tpl_vars['this']->value->ion_auth->user()->row()), 0, false);
?>

				<div class="container-fluid">
					<?php $_prefixVariable1 = $_smarty_tpl->tpl_vars['this']->value->session->flashdata('alert');
$_smarty_tpl->_assignInScope('alert', $_prefixVariable1);
if ($_prefixVariable1) {?>
						<div class="row">
							<div class="col-12">
								<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value['type'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['alert']->value['message'];?>

								</div>
							</div>
						</div>
					<?php }?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11346468245f9023150766b7_63345665', 'admin_content', $this->tplIndex);
?>

				</div>
			</div>
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Your Website 2020</span>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Apakah Anda yakin ingin keluar dari sistem?</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
					<?php echo form_open('/logout');?>

						<a class="btn btn-danger" href="/" id="logout">Ya, Keluar</a>
					<?php echo form_close();?>

				</div>
			</div>
		</div>
	</div>

	<?php echo '<script'; ?>
>
		document.getElementById('logout').addEventListener('click', function(e) {
			e.preventDefault()

			e.target.parentNode.submit()
		})
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
