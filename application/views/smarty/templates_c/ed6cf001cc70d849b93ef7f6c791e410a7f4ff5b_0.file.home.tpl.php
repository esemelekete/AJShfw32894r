<?php
/* Smarty version 3.1.36, created on 2020-10-22 17:40:44
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f91a7fc817ab7_77890225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed6cf001cc70d849b93ef7f6c791e410a7f4ff5b' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\home.tpl',
      1 => 1603381243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f91a7fc817ab7_77890225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10462346655f91a7fc808a68_54111130', 'admin_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/dashboard.tpl");
}
/* {block 'admin_content'} */
class Block_10462346655f91a7fc808a68_54111130 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_content' => 
  array (
    0 => 'Block_10462346655f91a7fc808a68_54111130',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 8+1 - (0) : 0-(8)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
			<div class="col-xl-3 col-md-3 mb-4 relative">
				<a href="/dokumen?id_kriteria=<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
" style="left:0;top:0;right:0;bottom:0;position:absolute;z-index:20"></a>
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
									Kriteria <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>

								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['kriteria_count']->value[$_smarty_tpl->tpl_vars['i']->value+1])===null||$tmp==='' ? 0 : $tmp);?>
</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php }
}
?>
		<div class="col-xl-3 col-md-3 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Dokumen</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_smarty_tpl->tpl_vars['count_all']->value;?>
</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-file fa-2x text-gray-300"></i>
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
