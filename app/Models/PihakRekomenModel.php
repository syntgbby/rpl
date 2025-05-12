<?php

namespace App\Models;

use CodeIgniter\Model;

class PihakRekomenModel extends Model
{
    protected $table = 'mst_pihak_rekomendasi';
    protected $primaryKey = 'id_rekomendasi';
    protected $allowedFields = [
        'id_rekomendasi',
        'nama_pihak_rekomendasi',
        'no_hp'
    ];

    public function tampilan_detail_pihak_kerja_by_nim($nim)
    {
        return $this->where('LEFT(id_rekomendasi, 12) =', $nim)
            ->get()
            ->getRowArray();
    }
}
