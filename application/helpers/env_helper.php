<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('env')) {
	function env($key, $default = NULL) {
		return isset($_ENV[$key]) ? $_ENV[$key] : $default;
	}
}
