<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('xss_clean')) {
	function xss_clean($content) {
		$CI = &get_instance();
		return $CI->security->xss_clean($content);
	}
}
