<?php
/* Smarty version 3.1.36, created on 2020-10-22 07:51:50
  from 'C:\Users\saari\Codes\repo\application\views\smarty\templates\components\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f911df606a257_80447442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93586571886233f7bbd672029842b8a663c42d3c' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\templates\\components\\sidebar.tpl',
      1 => 1603284683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f911df606a257_80447442 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\saari\\Codes\\repo\\application\\views\\smarty\\plugins\\function.active_url.php','function'=>'smarty_function_active_url',),));
?>
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
		<div class="sidebar-brand-icon">
			<img src="/img/logo-fkip-sm.png" alt="logo">
		</div>
		<div class="sidebar-brand-text mx-3">AKREDITASI</div>
	</a>

	<?php if ($_smarty_tpl->tpl_vars['this']->value->ion_auth->in_group('admin')) {?>
		<hr class="sidebar-divider my-0">
		<li class="nav-item <?php echo smarty_function_active_url(array('url'=>''),$_smarty_tpl);?>
">
			<a class="nav-link" href="/">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Dasbor</span>
			</a>
		</li>
	<?php }?>

	<hr class="sidebar-divider">
	<div class="sidebar-heading">
		Akreditasi
	</div>
	<li class="nav-item <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['active_url'][0], array( array('url'=>'usulan'),$_smarty_tpl ) );?>
">
		<a class="nav-link" href="/usulan">
			<i class="far fa-fw fa-file-alt"></i>
			<span>Usulan</span>
		</a>
	</li>
	<hr class="sidebar-divider">
	<div class="sidebar-heading">
		Dokumen
	</div>
	<li class="nav-item <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['active_url'][0], array( array('url'=>'upload'),$_smarty_tpl ) );?>
">
		<a class="nav-link" href="/upload">
			<i class="fas fa-fw fa-upload"></i>
			<span>Unggah</span>
		</a>
	</li>

	<?php if ($_smarty_tpl->tpl_vars['this']->value->ion_auth->in_group('admin')) {?>		
		<hr class="sidebar-divider">
		<div class="sidebar-heading">
			Manajemen
		</div>
		<li class="nav-item <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['active_url'][0], array( array('url'=>'standar'),$_smarty_tpl ) );?>
">
			<a class="nav-link" href="/standar">
				<i class="fas fa-fw fa-list-ol"></i>
				<span>Standar</span>
			</a>
		</li>
		<li class="nav-item <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['active_url'][0], array( array('url'=>'users'),$_smarty_tpl ) );?>
">
			<a class="nav-link" href="/users">
				<i class="fas fa-fw fa-user"></i>
				<span>Pengguna</span>
			</a>
		</li>
	<?php }?>

	<hr class="sidebar-divider d-none d-md-block">
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>
</ul>

<?php }
}
