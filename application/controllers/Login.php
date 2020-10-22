<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Public_Controller {
	public function __construct()
	{
		parent::__construct();

		if ($this->ion_auth->logged_in())
		{
			// redirect to / if logged in
			return redirect('/');
		}
	}

	public function index()
	{
		// validate form input
		$this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
		$this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

		if ($this->form_validation->run() === TRUE) {
			$remember = (bool) $this->input->post('remember');

			if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
			{
				// if the login is successful
				// redirect them back to the home page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				if ($intended = get_cookie('intended'))
				{
					return redirect($intended);
				}
				else
				{
					return redirect('/');
				}
			}
			else
			{
				// if the login was un-successful
				// redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());

				// var_dump($this->__ci_vars);exit;

				return redirect('/login'); // use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		} else {
			$message = $this->session->userdata('message');

			return view('auth/login.tpl', compact('message'));
		}
	}
}
