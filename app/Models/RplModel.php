<?php

namespace App\Models;

use CodeIgniter\Model;

class RplModel extends Model
{
    protected $table = 'rls_aplikan_matakuliah';
    protected $allowedFields = [
        'nim',
        'kode_matkul',
        'validasi'
    ];
}
