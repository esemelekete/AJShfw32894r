<?php

class Standar extends Admin_Controller {
	public function index()
	{
		$standar = $this->db->get('standar')->result();

		return view('standar.tpl', compact('standar'));
	}

	public function edit($id)
	{
		if ($this->input->method() === 'post')
		{
			$this->db->update(
				'standar',
				['nama' => $this->input->post('nama')],
				compact('id')
			);

			if ($this->db->affected_rows())
			{
				$this->session->set_flashdata('alert', [
					'type' => 'success',
					'message' => 'Nama standar berhasil diubah'
				]);
			}
			else
			{
				$this->session->set_flashdata('alert', [
					'type' => 'danger',
					'message' => 'Nama standar gagal diubah'
				]);
			}

			return redirect('/standar');
		}
		else
		{
			return show_404();
		}
	}
}
