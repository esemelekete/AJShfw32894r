<?php

class Kriteria extends Admin_Controller {
	public function index()
	{
		$kriteria = $this->db->get('kriteria')->result();

		return view('kriteria.tpl', compact('kriteria'));
	}

	public function edit($id)
	{
		if ($this->input->method() === 'post')
		{
			$this->db->update(
				'kriteria',
				['nama' => $this->input->post('nama')],
				compact('id')
			);

			if ($this->db->affected_rows())
			{
				$this->session->set_flashdata('alert', [
					'type' => 'success',
					'message' => 'Nama kriteria berhasil diubah'
				]);
			}
			else
			{
				$this->session->set_flashdata('alert', [
					'type' => 'danger',
					'message' => 'Nama kriteria gagal diubah'
				]);
			}

			return redirect('/kriteria');
		}
		else
		{
			return show_404();
		}
	}
}
