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
			`id_kriteria` BIGINT UNSIGNED NOT NULL,
			`id_ts` BIGINT UNSIGNED NOT NULL,
			`id_user` MEDIUMINT(8) UNSIGNED NOT NULL,
			`nama` VARCHAR(255) NOT NULL,
			`deskripsi` TEXT,
			`path` VARCHAR(255) NOT NULL,
			`updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
			`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
			FOREIGN KEY (id_kriteria) REFERENCES kriteria(id),
			FOREIGN KEY (id_ts) REFERENCES ts(id),
			FOREIGN KEY (id_user) REFERENCES users(id)
		)');

		// Dumping data for table 'dokumen'
		$data = [
			'id_ts' => 1,
			'id_kriteria' => 1,
			'id_user' => 1,
			'nama' => 'Dokumen blablabla',
			'deskripsi' => 'ini deskripsinya',
			'path' => 'storage/dokumen/test.txt',
		];
		$this->db->insert('dokumen', $data);
	}

	public function down() {
		$this->dbforge->drop_table('dokumen', TRUE);
	}
}
