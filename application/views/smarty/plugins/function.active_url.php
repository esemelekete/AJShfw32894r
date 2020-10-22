<?php

/**
 * Active URL
 *
 * @param array $params
 * @param Smarty_Internal_Template $template
 * @return void
 */
function smarty_function_active_url(array $params, Smarty_Internal_Template $template)
{
	$ci = &get_instance();

	if ($ci->uri->uri_string() == $params['url']) {
		echo 'active';
	}
}

$ci = &get_instance();
$ci->smarty->registerPlugin('function', 'active_url', 'smarty_function_active_url');
