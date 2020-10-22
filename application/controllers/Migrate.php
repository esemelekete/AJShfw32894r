<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {
	public function index()
	{
		$this->load->library('form_validation');

		if (env('ENVIRONMENT') !== 'development')
		{
			return show_404();
		}
		else
		{
			$this->load->database();

			$this->form_validation->set_rules('version', 'Version', ['required']);

			
			$current_version = $this->db->table_exists('migrations')
				? $this->db->get('migrations')->row()->version
				: 0;

			if ($this->form_validation->run() === FALSE)
			{
				$this->config->load('migration');

				$migration_path = $this->config->item('migration_path');

				$versions = array();

				$migration_files = scandir($migration_path, SCANDIR_SORT_ASCENDING);
				
				foreach ($migration_files as $i => $file_name) {
					if ( ! in_array($file_name, array('.', '..'))) {

						$a = preg_match('/([0-9]+)_.+\.php/', $file_name, $hai);

						array_push($versions, array(
							'number' => (int) $hai[1],
							'name' => $hai[0]
						));
					}
				}

				return view('migration.tpl', compact('current_version', 'versions'));
			}
			else
			{
				$this->load->library('migration');
		
				if ($this->migration->version($this->input->post('version')) === FALSE)
				{
					return show_error($this->migration->error_string());
				}
				else
				{
					return view('migration_success.tpl');
				}
			}
		}
	}
}
