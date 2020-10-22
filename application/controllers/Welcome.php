<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Public_Controller {
	public function index()
	{
		return view('homepage.tpl', array('greetings' => 'Hello, Welcome to ' . env('SITE_NAME') . '! 🔥'));
	}
}
