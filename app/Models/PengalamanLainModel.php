<?php

namespace App\Models;

use CodeIgniter\Model;

class PengalamanLainModel extends Model
{
    protected $table = 'mst_pengalaman_lain';
    protected $primaryKey = 'id_pengalaman_lain';
    protected $allowedFields = [
        'id_pengalaman_lain',
        'uraian_pengalaman',
        'tipe_bukti'
    ];

    public function tampilan_detail_pengalaman_relevan_by_nim($nim)
    {
        return $this->where('LEFT(id_pengalaman_lain, 12) =', $nim)
            ->get()
            ->getRowArray();
    }
}
