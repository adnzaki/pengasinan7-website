<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddEmployeesSlug extends Migration
{
    public function up()
    {
        // Add 'slug' column to 'p7_employees' table after 'description' column
        $fields = [
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
                'after' => 'description', // Position the column after 'description'
            ],
        ];
        $this->forge->addColumn('p7_employees', $fields);
    }

    public function down()
    {
        //
    }
}
