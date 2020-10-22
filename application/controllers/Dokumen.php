<?php

class Dokumen extends Auth_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->pagination_config['base_url'] = current_url();

		$this->pagination_config['total_rows'] = $this->db->count_all_results('dokumen');
		$this->pagination_config['per_page'] = 10;

		$this->pagination_config['page_query_string'] = TRUE;
		$this->pagination_config['query_string_segment'] = 'page';
		
		$this->pagination_config['use_page_numbers'] = TRUE;

		$this->pagination_config['full_tag_open'] = '<nav><ul class="pagination">';
		$this->pagination_config['full_tag_close'] = '</ul></nav>';

		$this->pagination_config['num_tag_open'] = '<li class="page-item">';
		$this->pagination_config['num_tag_close'] = '</li>';

		$this->pagination_config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$this->pagination_config['cur_tag_close'] = '</span></li>';

		$this->pagination_config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($this->pagination_config);
	}

	public function index()
	{
		$limit = $this->pagination_config['per_page'];
		$page = $this->input->get($this->pagination_config['query_string_segment']);

		if ($this->ion_auth->is_admin()) {
			$title = 'Semua Dokumen';

			if ($id_kriteria = $this->input->get('id_kriteria'))
			{
				$this->db->where('dokumen.id_kriteria', $id_kriteria);
			}

			if ($id_user = $this->input->get('id_user'))
			{
				$this->db->where('users.id', $id_user);
			}

			$dokumen = $this->db
				->select('users.id, users.first_name, users.last_name, dokumen.id, dokumen.id_kriteria, dokumen.path, kriteria.id as id_kriteria, kriteria.nama as nama_kriteria')
				->order_by('dokumen.id', 'desc')
				->join('users', 'users.id = dokumen.id_user')
				->join('kriteria', 'kriteria.id = dokumen.id_kriteria')
				->limit($limit, max(0, ($page - 1) * $limit))
				->get('dokumen')
				->result();
		} else {
			$title = 'Dokumen Saya';

			$dokumen = $this->db
				->select('users.id, users.first_name, users.last_name, dokumen.id, dokumen.id_kriteria, dokumen.path, kriteria.id as id_kriteria, kriteria.nama as nama_kriteria')
				->order_by('dokumen.id', 'desc')
				->join('users', 'users.id = dokumen.id_user')
				->join('kriteria', 'kriteria.id = dokumen.id_kriteria')
				->where('id_user', $this->ion_auth->user()->row()->id)
				->limit($limit, max(0, ($page - 1) * $limit))
				->get('dokumen')
				->result();
		}

		$users = $this->db
			->select('id, first_name, last_name')
			->get('users')
			->result();

		$kriteria = $this->db
			->get('kriteria')
			->result();

		$ts = $this->db
			->get('ts')
			->result();

		return view('dokumen.tpl', compact('dokumen', 'title', 'users', 'kriteria', 'ts'));
	}

	public function create()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('id_ts', 'TS', 'required');

		if ($this->ion_auth->is_admin())
		{
			$this->form_validation->set_rules('id_kriteria', 'Kriteria', 'required');
		}

		if (empty($_FILES['file']['name']))
		{
			$this->form_validation->set_rules('file', 'Dokumen', 'required');
		}

		$kriteria = $this->db->get('kriteria')->result();
		$ts = $this->db->get('ts')->result();

		if ( ! $this->form_validation->run())
		{
			return view('dokumen-create.tpl', compact('kriteria', 'ts'));
		}

		$config['upload_path']   = './storage/dokumen';
		$config['allowed_types'] = 'doc|rtf|docx|xls|xlsx|pdf';
		$config['max_size']      = 5000;
		$config['file_name']     = time() . '-' . $_FILES['file']['name'];

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file'))
		{
			$file_error = $this->upload->display_errors();
			
			return view('dokumen-create.tpl', compact('file_error', 'kriteria', 'ts'));
		}
		else
		{
			$user = $this->ion_auth->user()->row();

			if ($this->ion_auth->is_admin()) {
				$id_kriteria = $this->input->post('id_kriteria');
			} else {
				$id_kriteria = $user->id_kriteria;
			}

			$this->db->insert(
				'dokumen',
				[
					'id_kriteria' => $id_kriteria,
					'id_ts'   	  => $this->input->post('id_ts'),
					'id_user'  	  => $user->id,
					'nama'        => $this->input->post('nama'),
					'deskripsi'   => $this->input->post('deskripsi'),
					'path'        => '/storage/dokumen/' . $this->upload->data('file_name')
				]
			);	

			$this->session->set_flashdata('alert', [
				'type' => 'success',
				'message' => 'Dokumen berhasil ditambahkan'
			]);

			return redirect('/dokumen');
		}
	}

	public function show($id)
	{
		$dokumen = $this->db
			->where('dokumen.id', $id)
			->join('ts', 'ts.id = dokumen.id_ts')
			->get('dokumen')
			->row();

		if ( ! $dokumen)
		{
			return show_404();
		}

		$kriteria = $this->db
			->where('id', $dokumen->id_kriteria)
			->get('kriteria')
			->row();

		return view('dokumen-show.tpl', compact('dokumen', 'kriteria'));
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('id_ts', 'TS', 'required');

		if ($this->ion_auth->is_admin())
		{
			$this->form_validation->set_rules('id_kriteria', 'Kriteria', 'required');
		}

		$dokumen = $this->db->where(compact('id'))->get('dokumen')->row();
		$kriteria = $this->db->get('kriteria')->result();
		$ts = $this->db->get('ts')->result();

		$selected_ts = set_value('id_ts') ?: $dokumen->id_ts;
		$selected_kriteria = set_value('id_kriteria') ?: $dokumen->id_kriteria;

		if ( ! $this->form_validation->run())
		{
			return view('dokumen-edit.tpl', compact('kriteria', 'ts', 'dokumen', 'selected_ts', 'selected_kriteria'));
		}

		$user = $this->ion_auth->user()->row();
	
		if ($this->ion_auth->is_admin()) {
			$id_kriteria = $this->input->post('id_kriteria');
		} else {
			$id_kriteria = $user->id_kriteria;
		}

		$dokumen_set = [
			'id_kriteria' => $id_kriteria,
			'id_ts'   	  => $this->input->post('id_ts'),
			'nama'        => $this->input->post('nama'),
			'deskripsi'   => $this->input->post('deskripsi'),
		];

		
		if (!empty($_FILES['file']['name']))
		{
			$config['upload_path']   = './storage/dokumen';
			$config['allowed_types'] = 'doc|rtf|docx|xls|xlsx|pdf';
			$config['max_size']      = 5000;
			$config['file_name']     = time() . '-' . $_FILES['file']['name'];

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('file'))
			{
				$file_error = $this->upload->display_errors();

				return view('dokumen-edit.tpl', compact('file_error', 'kriteria', 'ts', 'dokumen', 'selected_ts', 'selected_kriteria'));
			}
			else
			{
				unlink(FCPATH . $dokumen->path);

				$dokumen_set['path'] = '/storage/dokumen/' . $this->upload->data('file_name');	
			}
		}

		$this->db->update('dokumen', $dokumen_set, compact('id'));

		$this->session->set_flashdata('alert', [
			'type' => 'success',
			'message' => 'Dokumen berhasil diedit'
		]);

		return redirect('/dokumen');
	}

	public function delete()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$id = $this->input->post('id');

			$identitas = $this->db->where('id', $id)->get('identitas')->result();

			if (count($identitas) !== 0)
			{
				$dokumen = $this->db->where('id_usulan', $id)->get('dokumen')->row();

				// Hapus dokumen
				unlink(FCPATH . $dokumen->path);
				
				// Hapus dokumen (db)
				$this->db->delete('dokumen', ['id' => $dokumen->id]);
				
				// Hapus identitas (db)
				$this->db->delete('identitas', ['id' => $id]);
			}
	
			$this->session->set_flashdata('alert', [
				'type' => 'success',
				'message' => 'Identitas berhasil dihapus'
			]);
	
			return redirect('/identitas');	
		}
		else
		{
			return show_404();
		}
	}
}
