<?php

class Upload extends Auth_Controller {
	public function index()
	{
		$this->_validate();

		$title = 'Unggah Dokumen';

		if ( ! $this->form_validation->run())
		{
			return view('upload.tpl', compact('title'));
		}
		else
		{
			$config['upload_path']   = './storage/dokumen';
			$config['allowed_types'] = 'doc|docx|xls|xlsx|pdf';
			$config['max_size']      = 5000;
			$config['file_name']     = time() . '-' . $_FILES['file']['name'];

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('file'))
			{
				$error = array('file_error' => $this->upload->display_errors());
				
				view('upload.tpl', compact('error', 'title'));
			}
			else
			{
				$user = $this->ion_auth->user()->row();

				if ($this->ion_auth->in_group('admin')) {
					$id_standar = $this->input->post('id_standar');
				} else {
					$id_standar = $user->id_standar;
				}

				$new_usulan = $this->db->insert(
					'usulan',
					[
						'id_pengusul'              => $user->id,
						'id_standar'               => $id_standar,
						'program_studi'            => "Pendidikan Luar Sekolah",
						'jenis_program'            => $this->input->post('jenis_program'),
						'peringkat_akreditasi'     => $this->input->post('peringkat_akreditasi'),
						'no_sk_ban_pt'             => $this->input->post('no_sk_ban_pt'),
						'tgl_kadaluarsa_sk_ban_pt' => $this->input->post('tgl_kadaluarsa_sk_ban_pt'),
						'unit_pengelola'           => $this->input->post('unit_pengelola'),
						'perguruan_tinggi'         => "Universitas Singaperbangsa Karawang",
						'alamat'                   => $this->input->post('alamat'),
						'telepon'                  => $this->input->post('telepon'),
						'email'                    => $this->input->post('email'),
						'website'                  => $this->input->post('website'),
						'ts_1'                     => $this->input->post('ts_1'),
						'ts_2'                     => $this->input->post('ts_2')
					]
				);

				$this->db->insert(
					'dokumen',
					[
						'id_usulan'   => $this->db->insert_id(),
						'nama'        => $this->input->post('nama'),
						'deskripsi'   => $this->input->post('deskripsi'),
						'path'        => '/storage/dokumen/' . $this->upload->data('file_name'),
						'lokasi'      => $this->input->post('lokasi'),
						'rak'         => $this->input->post('rak'),
						'koordinator' => $this->input->post('koordinator')
					]
				);	

				$this->session->set_flashdata('alert', [
					'type' => 'success',
					'message' => 'Usulan berhasil diajukan'
				]);

				return redirect('/usulan');
			}
		}
	}

	public function edit($id)
	{
		$this->_validate();

		$logged_in_user = $this->ion_auth->user()->row();
		$id_pengusul = $this->db->where('id', $id)->get('usulan')->id_pengusul;
		
		if ( ! $this->ion_auth->is_admin() 
			&& $id_pengusul !== $logged_in_user->id)
		{
			return show_404();
		}

		$usulan = $this->db->where('id', $id)->get('usulan')->row();
		$usulan->dokumen = $this->db->where('id_usulan', $id)->get('dokumen')->row();

		if ( ! $this->form_validation->run())
		{
			$data['usulan'] = $usulan;
			$data['selected_jenis_program'] = set_value('jenis_program') ?: $usulan->jenis_program;

			if ($this->ion_auth->is_admin())
			{
				$data['selected_standar'] = set_value('id_standar') ?: $usulan->id_standar;
			}

			return view('usulan-edit.tpl', $data);
		}
		else
		{
			$config['upload_path']   = './storage/dokumen';
			$config['allowed_types'] = 'doc|docx|xls|xlsx|pdf';
			$config['max_size']      = 5000;
			$config['file_name']     = time() . '-' . $_FILES['file']['name'];

			$this->load->library('upload', $config);

			$user = $this->ion_auth->user()->row();

			if ($this->ion_auth->in_group('admin')) {
				$id_standar = $this->input->post('id_standar');
			} else {
				$id_standar = $user->id_standar;
			}

			$this->db->update(
				'usulan',
				[
					'id_standar'               => $id_standar,
					'program_studi'            => "Pendidikan Luar Sekolah",
					'jenis_program'            => $this->input->post('jenis_program'),
					'peringkat_akreditasi'     => $this->input->post('peringkat_akreditasi'),
					'no_sk_ban_pt'             => $this->input->post('no_sk_ban_pt'),
					'tgl_kadaluarsa_sk_ban_pt' => $this->input->post('tgl_kadaluarsa_sk_ban_pt'),
					'unit_pengelola'           => $this->input->post('unit_pengelola'),
					'perguruan_tinggi'         => "Universitas Singaperbangsa Karawang",
					'alamat'                   => $this->input->post('alamat'),
					'telepon'                  => $this->input->post('telepon'),
					'email'                    => $this->input->post('email'),
					'website'                  => $this->input->post('website'),
					'ts_1'                     => $this->input->post('ts_1'),
					'ts_2'                     => $this->input->post('ts_2')
				],
				compact('id')
			);

			$dokumen_set = [
				'nama'        => $this->input->post('nama'),
				'deskripsi'   => $this->input->post('deskripsi'),
				'lokasi'      => $this->input->post('lokasi'),
				'rak'         => $this->input->post('rak'),
				'koordinator' => $this->input->post('koordinator')
			];

			if ($this->upload->do_upload('file'))
			{
				unlink(FCPATH . $usulan->dokumen->path);

				$dokumen_set['path'] = '/storage/dokumen/' . $this->upload->data('file_name');
			}

			$this->db->update(
				'dokumen',
				$dokumen_set,
				['id', $usulan->dokumen->id]
			);

			$this->session->set_flashdata('alert', [
				'type' => 'success',
				'message' => 'Usulan berhasil diperbarui'
			]);

			return redirect('/usulan');
		}
	}

	private function _validate()
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
		$this->form_validation->set_rules('ts_1', 'Tahun ajaran 1', 'required|integer');
		$this->form_validation->set_rules('ts_2', 'Tahun ajaran 2', 'required|integer');

		// Upload dokumen baru tidak wajib saat edit
		if (strpos($this->uri->uri_string(), 'edit') === FALSE)
		{
			if (empty($_FILES['file']['name']))
			{
				$this->form_validation->set_rules('file', 'Dokumen', 'required');
			}			
		}

		$this->form_validation->set_rules('nama', 'Nama Dokumen', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Dokumen', '');
		$this->form_validation->set_rules('lokasi', 'Lokasi Dokumen', 'required');
		$this->form_validation->set_rules('rak', 'Rak Dokumen', 'required');
		$this->form_validation->set_rules('koordinator', 'Koordinator Dokumen', 'required');		
	}
}
