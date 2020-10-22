<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Buat_tabel_dokumen extends CI_Migration {
	public function __construct() {
		parent::__construct();
		$this->load->dbforge();
	}

	public function up() {
		// Table structure for table 'dokumen'
		$this->db->query('CREATE TABLE IF NOT EXISTS dokumen(
			`id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			`id_usulan` BIGINT UNSIGNED NOT NULL,
			`nama` VARCHAR(255) NOT NULL,
			`deskripsi` TEXT,
			`path` VARCHAR(255) NOT NULL,
			`lokasi` VARCHAR(255) NOT NULL,
			`rak` VARCHAR(255) NOT NULL,
			`koordinator` VARCHAR(255) NOT NULL,
			FOREIGN KEY (id_usulan) REFERENCES usulan(id)
		)');

		// Dumping data for table 'dokumen'
		$data = [
			'id_usulan' => '1',
			'nama' => 'Dokumen blablabla',
			'deskripsi' => 'ini deskripsinya',
			'path' => 'storage/dokumen/test.txt',
			'lokasi' => 'di ruangan',
			'rak' => 'TIK 2',
			'koordinator' => 'Udin Sanjaya',
		];
		$this->db->insert('dokumen', $data);
	}

	public function down() {
		$this->dbforge->drop_table('dokumen', TRUE);
	}
}
