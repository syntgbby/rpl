<?php

namespace App\Models;

use CodeIgniter\Model;

class PelatihanModel extends Model
{
    protected $table = 'mst_pelatihan';
    protected $primaryKey = 'id_pelatihan';
    protected $allowedFields = [
        'id_pelatihan',
        'nama_pelatihan',
        'penyelenggara',
        'peran',
        'durasi',
        'no_sertifikat'
    ];
}
