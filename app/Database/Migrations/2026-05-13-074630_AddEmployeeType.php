<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddEmployeeType extends Migration
{
    public function up()
    {
        $fields = [
            'type' => [
                'type'       => "ENUM('teacher','staff','kepsek')",
                'null'       => false,
            ],
        ];

        $this->forge->modifyColumn('p7_employees', $fields);
    }

    public function down()
    {
        //
    }
}
