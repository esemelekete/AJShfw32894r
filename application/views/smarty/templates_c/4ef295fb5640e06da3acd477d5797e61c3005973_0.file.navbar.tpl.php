<?php
/* Smarty version 3.1.36, created on 2020-10-16 19:51:49
  from 'C:\Users\saari\Codes\fireplace\application\views\smarty\templates\components\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f89ddb5358a30_07859506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ef295fb5640e06da3acd477d5797e61c3005973' => 
    array (
      0 => 'C:\\Users\\saari\\Codes\\fireplace\\application\\views\\smarty\\templates\\components\\navbar.tpl',
      1 => 1602870704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f89ddb5358a30_07859506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\saari\\Codes\\fireplace\\application\\views\\smarty\\plugins\\block.guest.php','function'=>'smarty_block_guest',),1=>array('file'=>'C:\\Users\\saari\\Codes\\fireplace\\application\\views\\smarty\\plugins\\block.auth.php','function'=>'smarty_block_auth',),));
?>
<nav>
	<ul>
		<li>
			<a href="/">Home</a>
		</li>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('guest', array());
$_block_repeat=true;
echo smarty_block_guest(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<li>
				<a href="/login">Log In</a>
			</li>
		<?php $_block_repeat=false;
echo smarty_block_guest(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('auth', array());
$_block_repeat=true;
echo smarty_block_auth(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<li>
				<?php echo form_open('logout');?>

					<a href="/logout" id="logout">Log out</a>
				<?php echo form_close();?>

			</li>
		<?php $_block_repeat=false;
echo smarty_block_auth(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	</ul>
</nav>
<?php echo '<script'; ?>
>
	document.getElementById('logout').addEventListener('click', function(e) {
		e.preventDefault();
		e.target.parentNode.submit();
	});
<?php echo '</script'; ?>
>
<?php }
}
