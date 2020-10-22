<?php

/**
 * Smarty plugin
 *
 * @param array $params
 * @param string $content
 * @param Smarty_Internal_Template $template
 * @param bool $repeat
 * @return void
 * 
 * Purpose: wrap elements so that those element won't appear if the user is not
 * authenticated by ion auth
 */
function smarty_block_auth(array $params, $content, Smarty_Internal_Template $template, &$repeat)
{
	$ci = &get_instance();

	if (!$repeat)
	{
		if ($ci->ion_auth->logged_in())
		{
			return $content;
		}
	}
}

$ci = &get_instance();
$ci->smarty->registerPlugin('block', 'auth', 'smarty_block_auth');
