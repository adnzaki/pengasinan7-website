<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table            = 'p7_employees';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    // Kolom yang bisa diisi (fillable)
    protected $allowedFields    = [
        'name',
        'type',
        'position',
        'education',
        'year_graduated',
        'photo',
        'description',
        'slug',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // Timestamps
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
