<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Auth_Controller {
	public function index()
	{
		if ( ! $this->ion_auth->is_admin()) {
			return redirect('/identitas');
		}

		$counts = $this->db
			->select('id_kriteria, count(*) jumlah')
			->from('dokumen')
			->group_by('id_kriteria')
			->get()
			->result();

		$kriteria_count = [];
		$count_all = 0;

		foreach ($counts as $count) {
			$kriteria_count[$count->id_kriteria] = $count->jumlah;

			$count_all += $count->jumlah;
		}

		$title = 'Dasbor';

		return view('home.tpl', compact('title', 'kriteria_count', 'count_all'));
	}
}
