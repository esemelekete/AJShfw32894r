<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Buat_tabel_usulan extends CI_Migration {
	public function __construct() {
		parent::__construct();
		$this->load->dbforge();
	}

	public function up() {
		// Table structure for table 'usulan'
		$this->db->query('CREATE TABLE IF NOT EXISTS usulan (
			`id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			`id_pengusul` MEDIUMINT(8) UNSIGNED NOT NULL,
			`id_standar` BIGINT UNSIGNED NOT NULL,
			`program_studi` VARCHAR(255) NOT NULL,
			`jenis_program` ENUM("D3", "S1", "S2") NOT NULL,
			`peringkat_akreditasi` CHAR(2) NOT NULL,
			`no_sk_ban_pt` VARCHAR(255) NOT NULL,
			`tgl_kadaluarsa_sk_ban_pt` DATE NOT NULL,
			`unit_pengelola` VARCHAR(255) NOT NULL,
			`perguruan_tinggi` VARCHAR(255) DEFAULT "Universitas Singaperbangsa Karawang",
			`alamat` TEXT NOT NULL,
			`telepon` VARCHAR(32) NOT NULL,
			`email` VARCHAR(255) NOT NULL,
			`website` VARCHAR(255) NOT NULL,
			`ts_1` TEXT NOT NULL,
			`ts_2` VARCHAR(32) NOT NULL,
			`tanggal_usulan` DATE DEFAULT CURRENT_TIMESTAMP(),
			FOREIGN KEY (id_pengusul) REFERENCES users(id),
			FOREIGN KEY (id_standar) REFERENCES standar(id)
		)');

		// Dumping data for table 'usulan'
		$data = [
			'id_pengusul' => 2,
			'id_standar' => 4,
			'program_studi' => 'Teknik Informatika',
			'jenis_program' => 'S1',
			'peringkat_akreditasi' => 'B',
			'no_sk_ban_pt' => '[[no_sk_ban_pt]]',
			'tgl_kadaluarsa_sk_ban_pt' => '2022-10-10',
			'unit_pengelola' => 'Hehey not bad',
			'perguruan_tinggi' => 'UNSIKUY',
			'alamat' => 'Kasih tau gak ya?',
			'telepon' => '02329183',
			'email' => 'imel@da.com',
			'website' => 'example.com',
			'ts_1' => '2017',
			'ts_2' => '2018'
		];
		$this->db->insert('usulan', $data);
	}

	public function down() {
		$this->dbforge->drop_table('usulan', TRUE);
	}
}
