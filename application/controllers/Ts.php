<?php

class Ts extends Admin_Controller {
	public function index()
	{
		$ts = $this->db->order_by('ta_1', 'desc')->get('ts')->result();

		return view('ts.tpl', compact('ts'));
	}

	public function create()
	{
		$this->form_validation->set_rules('jenis_program', 'Jenis Program', 'required');
		$this->form_validation->set_rules('peringkat_akreditasi', 'Peringkat Akreditas', 'required');
		$this->form_validation->set_rules('no_sk_ban_pt', 'No. SK BAN-PT', 'required');
		$this->form_validation->set_rules('tgl_kadaluarsa_sk_ban_pt', 'Tanggal Kadaluarsa SK BAN-PT', 'required');
		$this->form_validation->set_rules('unit_pengelola', 'Unit Pengelola', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('website', 'Website', 'required');
		$this->form_validation->set_rules('ts', 'Tahun Akademik', 'required|regex_match[/^[0-9]{4}\/[0-9]{4}$/]');

		if ($ts_input = $this->input->post('ts'))
		{
			$ts = explode('/', $ts_input);
				
			if (count($ts) !== 2 || intval($ts[0]) + 1 !== intval($ts[1]))
			{
				$this->form_validation->set_rules('ts_ngaco', 'Tahun Akademik', 'regex_match[/^[0-9]{100}\/[0-9]{4}$/]');

				return $this->_validate();
			}
	
			if ($this->db
				->from('ts')
				->where('ta_1', $ts[0])
				->where('ta_2', $ts[1])
				->count_all_results() !== 0)
			{
				$this->form_validation->set_rules('ts_unik', 'Tahun Akademik', 'is_unique[users.id]');

				return $this->_validate();
			}
		}

		if ( ! $this->form_validation->run())
		{
			return view('ts-create.tpl');
		}

		# INPUT IS VALID -------------------------------------------------------

		$this->db->insert(
			'ts',
			[
				'ta_1' => $ts[0],
				'ta_2' => $ts[1]
			]
		);

		$this->db->insert(
			'identitas',
			[
				'id_ts' => $this->db->insert_id(),
				'program_studi' => 'Pendidikan Luar Sekolah',
				'jenis_program' => $this->input->post('jenis_program'),
				'peringkat_akreditasi' => $this->input->post('peringkat_akreditasi'),
				'no_sk_ban_pt' => $this->input->post('no_sk_ban_pt'),
				'tgl_kadaluarsa_sk_ban_pt' => $this->input->post('tgl_kadaluarsa_sk_ban_pt'),
				'unit_pengelola' => $this->input->post('unit_pengelola'),
				'perguruan_tinggi' => $this->input->post('perguruan_tinggi'),
				'alamat' => $this->input->post('alamat'),
				'telepon' => $this->input->post('telepon'),
				'email' => $this->input->post('email'),
				'website' => $this->input->post('website'),
			]
		);

		$this->session->set_flashdata('alert', [
			'type' => 'success',
			'message' => 'Tahun Akademik berhasil ditambahkan.'
		]);

		return redirect('/ts');
	}

	private function _validate()
	{
		if ( ! $this->form_validation->run())
		{
			return view('ts-create.tpl');
		}
	}

	public function edit($id = NULL)
	{
		if ($id === NULL)
		{
			return show_404();
		}

		//TODO
		$identitas = $this->db
			->where(compact('id'))
			->join('ts', 'ts.id = identitas.id_ts')
			->get('identitas')
			->row();
	}

	public function delete()
	{
		// Tampilkan halaman 404 jika bukan POST
		if ($this->input->method() !== 'post')
		{
			return show_404();
		}

		$this->load->model('Dokumen_model');

		$id = $this->input->post('id');

		$ts = $this->db->where('id', $id)->get('ts')->row();
		
		/**
		 * Jika TS ada di database, hapus TS, Identitas, dan Dokumen-Dokumen
		 * yang berkaitan.
		 */
		if ($ts)
		{
			$ts->identitas = $this->db->where('id_ts', $id)->get('identitas')->row();
			$ts->dokumen = $this->db->where('id_ts', $id)->get('dokumen')->result();

			// Hapus Identitas jika ada
			if ($ts->identitas)
			{
				$this->db->delete('identitas', ['id' => $ts->identitas->id]);
			}

			// Hapus Dokumen-Dokumen jika ada
			foreach ($ts->dokumen as $ts_dokumen)
			{
				$this->Dokumen_model->delete($ts_dokumen->id);
			}

			// Hapus TS jika ada
			$this->db->delete('ts', compact('id'));
		}

		$this->session->set_flashdata('alert', [
			'type' => 'success',
			'message' => 'Tahun Akademik beserta Identitas Program Studi dan Dokumen-Dokumen terkait telah berhasil dihapus.'
		]);

		return redirect('/ts');
	}
}
