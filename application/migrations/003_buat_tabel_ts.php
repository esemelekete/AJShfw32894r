<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Buat_tabel_ts extends CI_Migration {
	public function __construct() {
		parent::__construct();
		$this->load->dbforge();
	}

	public function up() {
		// Table structure for table 'ts'
		$this->db->query('CREATE TABLE IF NOT EXISTS ts (
			`id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			`ta_1` TEXT NOT NULL,
			`ta_2` VARCHAR(255) NOT NULL
		)');

		// Dumping data for table 'ts'
		$data = [
			[
				'ta_1' => 2020,
				'ta_2' => 2021
			]
		];
		$this->db->insert_batch('ts', $data);
	}

	public function down() {
		$this->dbforge->drop_table('ts', TRUE);
	}
}
