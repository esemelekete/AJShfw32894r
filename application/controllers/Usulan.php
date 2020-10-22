<?php

class Usulan extends Auth_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->pagination_config['base_url'] = current_url();

		$this->pagination_config['total_rows'] = $this->db->count_all_results('usulan');
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
			$title = 'Semua Usulan';

			if ($id_standar = $this->input->get('id_standar'))
			{
				$this->db->where('id_standar', $id_standar);
			}

			if ($id_pengusul = $this->input->get('id_pengusul'))
			{
				$this->db->where('id_pengusul', $id_pengusul);
			}

			$usulan = $this->db
				->order_by('id', 'desc')
				->limit($limit, max(0, ($page - 1) * $limit))
				->get('usulan')
				->result();
		} else {
			$title = 'Usulan Saya';

			$usulan = $this->db
				->order_by('id', 'desc')
				->where('id_pengusul', $this->ion_auth->user()->row()->id)
				->limit($limit, max(0, ($page - 1) * $limit))
				->get('usulan')
				->result();
		}
		
		foreach ($usulan as $i => $u) {
			$usulan[$i]->standar = $this->db
				->where('id', $u->id_standar)
				->get('standar')
				->row();
			$usulan[$i]->dokumen = $this->db
				->where('id_usulan', $u->id)
				->get('dokumen')
				->row();
			$usulan[$i]->pengusul = $this->db
				->where('id', $u->id_pengusul)
				->get('users')
				->row();
		}

		$is_admin = $this->ion_auth->is_admin();

		return view('usulan.tpl', compact('usulan', 'title', 'is_admin'));
	}

	public function delete()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$id = $this->input->post('id');

			$usulan = $this->db->where('id', $id)->get('usulan')->result();

			if (count($usulan) !== 0)
			{
				$dokumen = $this->db->where('id_usulan', $id)->get('dokumen')->row();

				// Hapus dokumen
				unlink(FCPATH . $dokumen->path);
				
				// Hapus dokumen (db)
				$this->db->delete('dokumen', ['id' => $dokumen->id]);
				
				// Hapus usulan (db)
				$this->db->delete('usulan', ['id' => $id]);
			}
	
			$this->session->set_flashdata('alert', [
				'type' => 'success',
				'message' => 'Usulan berhasil dihapus'
			]);
	
			return redirect('/usulan');	
		}
		else
		{
			return show_404();
		}
	}

	public function show($id)
	{
		$usulan = $this->db->where('id', $id)->get('usulan')->row();
		$usulan->pengusul = $this->db->where('id', $usulan->id_pengusul)->get('users')->row();
		$usulan->dokumen = $this->db->where('id_usulan', $id)->get('dokumen')->row();
		$usulan->standar = $this->db->where('id', $usulan->id_standar)->get('standar')->row();

		return view('usulan-show.tpl', compact('usulan'));
	}
}
