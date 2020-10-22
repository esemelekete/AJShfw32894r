<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Buat_tabel_identitas extends CI_Migration {
	public function __construct() {
		parent::__construct();
		$this->load->dbforge();
	}

	public function up() {
		// Table structure for table 'identitas'
		$this->db->query('CREATE TABLE IF NOT EXISTS identitas (
			`id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			`id_ts` BIGINT UNSIGNED NOT NULL,
			`program_studi` VARCHAR(255) NOT NULL,
			`jenis_program` ENUM("D3", "S1", "S2") NOT NULL,
			`peringkat_akreditasi` CHAR(2) NOT NULL,
			`no_sk_ban_pt` VARCHAR(255) NOT NULL,
			`tgl_kadaluarsa_sk_ban_pt` DATE NOT NULL,
			`unit_pengelola` VARCHAR(255) NOT NULL,
			`perguruan_tinggi` VARCHAR(255) NOT NULL DEFAULT "Universitas Singaperbangsa Karawang",
			`alamat` TEXT NOT NULL,
			`telepon` VARCHAR(32) NOT NULL,
			`email` VARCHAR(255) NOT NULL,
			`website` VARCHAR(255) NOT NULL,
			`updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
			`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
			FOREIGN KEY (id_ts) REFERENCES ts(id)
		)');

		// Dumping data for table 'identitas'
		$data = [
			'id_ts' => 1,
			'program_studi' => 'Pendidikan Luar Sekolah',
			'jenis_program' => 'S1',
			'peringkat_akreditasi' => 'B',
			'no_sk_ban_pt' => '[[no_sk_ban_pt]]',
			'tgl_kadaluarsa_sk_ban_pt' => '2022-10-10',
			'unit_pengelola' => 'Hehey not bad',
			'alamat' => 'Kasih tau gak ya?',
			'telepon' => '02329183',
			'email' => 'imel@da.com',
			'website' => 'example.com',
		];
		$this->db->insert('identitas', $data);
	}

	public function down() {
		$this->dbforge->drop_table('identitas', TRUE);
	}
}
