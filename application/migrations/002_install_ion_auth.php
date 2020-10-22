<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Install_ion_auth extends CI_Migration {
	private $tables;

	public function __construct() {
		parent::__construct();
		$this->load->dbforge();

		$this->load->config('ion_auth', TRUE);
		$this->tables = $this->config->item('tables', 'ion_auth');
	}

	public function up() {
		// Table structure for table 'groups'
		$this->db->query(
			'CREATE TABLE IF NOT EXISTS ' . $this->tables['groups'] . ' (
				`id` MEDIUMINT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				`name` VARCHAR(20) NOT NULL,
				`description` VARCHAR(100)
			)'
		);

		// Dumping data for table 'groups'
		$data = [
			[
				'name'        => 'admin',
				'description' => 'Administrator'
			],
			[
				'name'        => 'generic',
				'description' => 'Pengampu Standar'
			]
		];
		$this->db->insert_batch($this->tables['groups'], $data);

		// Table structure for table 'users'
		$this->db->query(
			'CREATE TABLE IF NOT EXISTS ' . $this->tables['users'] .' (
				`id` MEDIUMINT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				`ip_address` VARCHAR(45),
				`username` VARCHAR(100),
				`password` VARCHAR(255),
				`email` VARCHAR(254) UNIQUE NOT NULL,
				`activation_selector` VARCHAR(255) UNIQUE,
				`activation_code` VARCHAR(255),
				`forgotten_password_selector` VARCHAR(255) UNIQUE,
				`forgotten_password_code` VARCHAR(255),
				`forgotten_password_time` INT(11) UNSIGNED,
				`remember_selector` VARCHAR(255) UNIQUE,
				`remember_code` VARCHAR(255),
				`created_on` INT(11) UNSIGNED NOT NULL,
				`last_login` INT(11) UNSIGNED,
				`active` TINYINT(1) UNSIGNED NOT NULL,
				`first_name` VARCHAR(50),
				`last_name` VARCHAR(50),
				`company` VARCHAR(100),
				`phone` VARCHAR(20),
				`id_standar` BIGINT UNSIGNED NOT NULL,
				FOREIGN KEY (id_standar) REFERENCES standar(id)
			)'
		);

		// Dumping data for table 'users'
		$data = [
			[
				'ip_address'              => '127.0.0.1',
				'username'                => 'administrator',
				'password'                => '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa', // password
				'email'                   => 'admin@admin.com',
				'activation_code'         => '',
				'forgotten_password_code' => NULL,
				'created_on'              => '1268889823',
				'last_login'              => '1268889823',
				'active'                  => '1',
				'first_name'              => 'Admin',
				'last_name'               => 'istrator',
				'company'                 => 'ADMIN',
				'phone'                   => '0',
				'id_standar'              => 1
			],
			[
				'ip_address'              => '127.0.0.1',
				'username'                => 'pengampu1',
				'password'                => '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa', // password
				'email'                   => 'user@user.com',
				'activation_code'         => '',
				'forgotten_password_code' => NULL,
				'created_on'              => '1268889823',
				'last_login'              => '1268889823',
				'active'                  => '1',
				'first_name'              => 'Pengampu',
				'last_name'               => 'Satu',
				'company'                 => 'Hehey',
				'phone'                   => '0',
				'id_standar'              => 4
			]
		];
		$this->db->insert_batch($this->tables['users'], $data);

		// Table structure for table 'users_groups'
		$this->db->query(
			'CREATE TABLE IF NOT EXISTS '.$this->tables['users_groups'].' (
				`id` MEDIUMINT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				`user_id` MEDIUMINT(8) UNSIGNED NOT NULL,
				`group_id` MEDIUMINT(8) UNSIGNED NOT NULL
			)'
		);

		// Dumping data for table 'users_groups'
		$data = [
			[
				'user_id'  => '1',
				'group_id' => '1',
			],
			[
				'user_id'  => '2',
				'group_id' => '2',
			],
		];
		$this->db->insert_batch($this->tables['users_groups'], $data);

		// Table structure for table 'login_attempts'
		$this->db->query(
			'CREATE TABLE IF NOT EXISTS '.$this->tables['login_attempts'].' (
				`id` MEDIUMINT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				`ip_address` VARCHAR(45) NOT NULL,
				`login` VARCHAR(100) NOT NULL,
				`time` INT(11) UNSIGNED
			)'
		);
	}

	public function down() {
		$this->dbforge->drop_table($this->tables['users'], TRUE);
		$this->dbforge->drop_table($this->tables['groups'], TRUE);
		$this->dbforge->drop_table($this->tables['users_groups'], TRUE);
		$this->dbforge->drop_table($this->tables['login_attempts'], TRUE);
	}
}
