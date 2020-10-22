<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Auth_Controller {
	public function index()
	{
		if ( ! $this->ion_auth->is_admin()) {
			return redirect('/usulan');
		}

		$title = 'Dasbor';

		return view('home.tpl', compact('title'));
	}
}
