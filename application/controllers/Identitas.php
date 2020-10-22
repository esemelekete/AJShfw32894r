<?php

class Identitas extends Admin_Controller {
	public function show($id = NULL)
	{
		if ($id === NULL)
		{
			return show_404();
		}

		$identitas = $this->db
			->where('ts.id', $id)
			->join('ts', 'ts.id = identitas.id_ts')
			->get('identitas')
			->row();
		
		if ( ! $identitas)
		{
			return show_404();
		}

		return view('identitas-show.tpl', compact('identitas'));
	}
}
