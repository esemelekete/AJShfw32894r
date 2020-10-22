<?php

class Users extends Admin_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->pagination_config['base_url'] = current_url();

		$this->pagination_config['total_rows'] = $this->db->count_all_results('users');
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

		$users = $this->db
			->order_by('id', 'desc')
			->limit($limit, max(0, ($page - 1) * $limit))
			->get('users')
			->result();

		return view('users.tpl', compact('users'));
	}

	public function create()
	{
		$this->form_validation->set_rules('first_name', 'Nama Depan', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required|matches[password]');
		$this->form_validation->set_rules('group', 'Hak Akses', 'required');
		$this->form_validation->set_rules('id_kriteria', 'Kriteria', 'required');
		
		if ( ! $this->form_validation->run())
		{
			return view('users-create.tpl');
		}
		else
		{
			$this->db->trans_start();

			$this->db->insert('users', [
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
				'active' => 1,
				'id_kriteria' => $this->input->post('id_kriteria'),
				'phone' => $this->input->post('phone'),
			]);

			$this->db->insert('users_groups', [
				'user_id' => $this->db->insert_id(),
				'group_id' => $this->input->post('group'),
			]);

			$this->db->trans_complete();

			if ($this->db->trans_status() === FALSE)
			{
				$this->session->set_flashdata('alert', [
					'type' => 'danger',
					'message' => 'Pengguna gagal ditambahkan'
				]);
			}
			else
			{
				$this->session->set_flashdata('alert', [
					'type' => 'success',
					'message' => 'Pengguna berhasil ditambahkan'
				]);
			}

			return redirect('/users');
		}
	}

	public function edit($id)
	{
		$user = $this->db->where('id', $id)->get('users')->row();

		if (!$user)
		{
			return show_404();
		}

		$this->form_validation->set_rules('first_name', 'Nama Depan', 'required');
		$this->form_validation->set_rules('group', 'Hak Akses', 'required');
		$this->form_validation->set_rules('id_kriteria', 'Kriteria', 'required');

		$email_rules = 'required|valid_email';

		if ($this->input->post('email') !== $this->db->where('id', $id)->get('users')->row()->email)
		{
			$email_rules .= '|is_unique[users.email]';
		}

		$this->form_validation->set_rules('email', 'Email', $email_rules);

		$user_set = [
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'id_kriteria' => $this->input->post('id_kriteria')
		];
		
		if (!empty($this->input->post('password')))
		{
			$this->form_validation->set_rules('password', 'Password Baru', 'required');
			$this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required|matches[password]');

			$user_set['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
		}

		if ( ! $this->form_validation->run())
		{
			$selected_group = set_value('group') ?: $this->db->where('user_id', $id)->get('users_groups')->row()->group_id;
			$selected_kriteria = set_value('id_kriteria') ?: $user->id_kriteria;

			return view('users-edit.tpl', compact('user', 'selected_group', 'selected_kriteria'));
		}
		else
		{
			$this->db->trans_start();

			$this->db->update('users', $user_set, ['id' => $id]);

			$this->db->update(
				'users_groups',
				['group_id' => $this->input->post('group')],
				['user_id' => $id]
			);

			$this->db->trans_complete();

			if ($this->db->trans_status() === FALSE)
			{
				$this->session->set_flashdata('alert', [
					'type' => 'danger',
					'message' => 'Pengguna gagal diupdate'
				]);
			}
			else
			{
				$this->session->set_flashdata('alert', [
					'type' => 'success',
					'message' => 'Pengguna berhasil diupdate'
				]);
			}

			return redirect('/users');
		}
	}

	public function delete()
	{
		$id = $this->input->post('id');

		$this->ion_auth->delete_user($id);

		$this->session->set_flashdata('alert', [
			'type' => 'success',
			'message' => 'Pengguna berhasil dihapus'
		]);

		return redirect('/users');
	}
}
