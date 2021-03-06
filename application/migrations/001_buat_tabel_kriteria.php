<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Buat_tabel_kriteria extends CI_Migration {
	public function __construct() {
		parent::__construct();
		$this->load->dbforge();
	}

	public function up() {
		// Table structure for table 'kriteria'
		$this->db->query('CREATE TABLE IF NOT EXISTS kriteria(
			`id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			`nama` VARCHAR(255) NOT NULL
		)');

		// Dumping data for table 'kriteria'
		$data = [
			['nama' => 'Visi, Misi, Tujuan, dan Strategi'],
			['nama' => 'Tata Pamong, Tata Kelola, dan Kerja Sama'],
			['nama' => 'Mahasiswa'],
			['nama' => 'SDM'],
			['nama' => 'Keuangan, Sarana, dan Prasarana'],
			['nama' => 'Pendidikan'],
			['nama' => 'Penelitian'],
			['nama' => 'Pengabdian Kepada Masyarakat'],
			['nama' => 'Luaran/ Karya Ilmiah']
		];
		$this->db->insert_batch('kriteria', $data);
	}

	public function down() {
		$this->dbforge->drop_table('kriteria', TRUE);
	}
}
