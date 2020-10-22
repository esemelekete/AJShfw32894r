<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends Public_Controller {
	public function index()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$this->ion_auth->logout();
			
			return redirect('/');
		}
		else
		{
			return show_404();
		}
	}
}
