<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Create_articles extends CI_Migration {

	public function up() {
		$this->dbforge->add_field([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'title' => [
				'type' => 'VARCHAR',
				'constraint' => '100'
			],
			'slug' => [
				'type' => 'VARCHAR',
				'constraint' => '100'
			],
			'pubdate' => [
				'type' => 'DATE'
			],
			'body' => [
				'type' => 'TEXT'
			],
			'created' => [
				'type' => 'DATETIME'
			],
			'modified' => [
				'type' => 'DATETIME'
			]
		]);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('articles');
	}

	public function down() {
		$this->dbforge->drop_table('articles');
	}

}

/* End of file 005_create_articles.php */
/* Location: ./application/migrations/005_create_articles.php */