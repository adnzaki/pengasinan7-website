<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTmtTugasField extends Migration
{
    public function up()
    {
        $fields = [
            'tmt_tugas' => [
                'type' => 'DATE',
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
