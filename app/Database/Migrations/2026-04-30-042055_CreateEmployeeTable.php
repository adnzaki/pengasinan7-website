<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmployeeTable extends Migration
{
    public function up()
    {
        $field = [
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'type' => [
                'type' => 'ENUM',
                'constraint' => ['teacher', 'staff'],
            ],
            'position' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'education' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'year_graduated' => [
                'type' => 'YEAR',
            ],
            'photo' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ];
        $this->forge->addField($field);
        $this->forge->addKey('id', true);
        $this->forge->createTable('p7_employees');
    }

    public function down()
    {
        $this->forge->dropTable('p7_employees');
    }
}
