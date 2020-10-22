<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->load->library('pagination');

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');		
	}
}

class Auth_Controller extends Public_Controller {
	public function __construct()
	{
		parent::__construct();

		if ( ! $this->ion_auth->logged_in())
		{
			set_cookie('intended', current_url(), 5*60);

			return redirect('/login');
		}
	}
}

class Admin_Controller extends Auth_Controller {
	public function __construct()
	{
		parent::__construct();

		if ( ! $this->ion_auth->is_admin()) {
			return show_404();
		}
	}
}
