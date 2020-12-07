<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Books extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],

			'sampul' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],

			'judul' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],

			'slug' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],

			'pengarang' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],

			'kode' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],

			'created_at' => [
				'type' => 'DATETIME',
				'null' => TRUE
			],

			'updated_at' => [
				'type' => 'DATETIME',
				'null' => TRUE
			]
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('books');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('books');
	}
}
