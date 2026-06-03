<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ChangeYearGraduationDataType extends Migration
{
    public function up()
    {
        // Change the data type of 'year_graduated' column to VARCHAR(50)
        $fields = [
            'year_graduated' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
        ];
        $this->forge->modifyColumn('p7_employees', $fields);
    }

    public function down()
    {
        //
    }
}
