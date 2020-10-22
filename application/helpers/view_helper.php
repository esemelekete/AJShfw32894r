<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('view')) {
	/**
	 * Print smarty view
	 *
	 * @param String $view
	 * @param array $data
	 * @param boolean $debugging
	 * @return void
	 */
	function view($view, $data = array(), $debugging = false) {
		$ci = &get_instance();
		
		$ci->smarty = new SmartyBC;

		$ci->smarty->setTemplateDir(APPPATH . 'views/smarty/templates/');
		$ci->smarty->setCompileDir(APPPATH . 'views/smarty/templates_c/');
		$ci->smarty->setConfigDir(APPPATH . 'views/smarty/configs/');
		$ci->smarty->setCacheDir(APPPATH . 'views/smarty/cache/');

		$CI = &get_instance();

		/**
		 * Assign the instance of CodeIgniter as $this in every views
		 * and any provided variables for specific view
		 */
		$ci->smarty->assign('this', $CI);
		foreach ($data as $key => $value) {
			$ci->smarty->assign($key, $value);
		}

		$ci->smarty->debugging = $debugging;

		$ci->smarty->addPluginsDir(APPPATH . 'views/smarty/plugins');

		$ci->smarty->display($view);
	}
}
